<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyShopRequest;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use App\Shop;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShopsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('shop_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shops = Shop::all();

        return view('admin.shops.index', compact('shops'));
    }

    public function create()
    {
        abort_if(Gate::denies('shop_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all()->pluck('name', 'id');

        return view('admin.shops.create', compact('categories'));
    }

    public function store(StoreShopRequest $request)
    {
        $shop = Shop::create($request->all());
        $shop->categories()->sync($request->input('categories', []));

        foreach ($request->input('photos', []) as $file) {
            $shop->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('photos');
        }

        return redirect()->route('admin.shops.index');
    }

    public function edit(Shop $shop)
    {
        abort_if(Gate::denies('shop_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all()->pluck('name', 'id');

        $shop->load('categories');

        return view('admin.shops.edit', compact('categories', 'shop'));
    }

    public function update(UpdateShopRequest $request, Shop $shop)
    {
        $shop->update($request->all());
        $shop->categories()->sync($request->input('categories', []));

        if (count($shop->photos) > 0) {
            foreach ($shop->photos as $media) {
                if (!in_array($media->file_name, $request->input('photos', []))) {
                    $media->delete();
                }
            }
        }

        $media = $shop->photos->pluck('file_name')->toArray();

        foreach ($request->input('photos', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $shop->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('photos');
            }
        }

        return redirect()->route('admin.shops.index');
    }

    public function show(Shop $shop)
    {
        abort_if(Gate::denies('shop_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shop->load('categories');

        return view('admin.shops.show', compact('shop'));
    }

    public function destroy(Shop $shop)
    {
        abort_if(Gate::denies('shop_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shop->delete();

        return back();
    }

    public function massDestroy(MassDestroyShopRequest $request)
    {
        Shop::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
