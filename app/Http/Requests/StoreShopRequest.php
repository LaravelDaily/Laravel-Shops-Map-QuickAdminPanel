<?php

namespace App\Http\Requests;

use App\Shop;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreShopRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('shop_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'         => [
                'required',
            ],
            'categories.*' => [
                'integer',
            ],
            'categories'   => [
                'array',
            ],
            'from_hours'   => [
                'array'
            ],
            'from_hours.*' => [
                'required_with:from_minutes.*,to_hours.*,to_minutes.*'
            ],
            'from_minutes'   => [
                'array'
            ],
            'from_minutes.*' => [
                'required_with:from_hours.*,to_hours.*,to_minutes.*'
            ],
            'to_hours'   => [
                'array'
            ],
            'to_hours.*' => [
                'required_with:to_minutes.*,from_hours.*,from_minutes.*'
            ],
            'to_minutes'   => [
                'array'
            ],
            'to_minutes.*' => [
                'required_with:to_hours.*,from_hours.*,from_minutes.*'
            ],
        ];
    }
}
