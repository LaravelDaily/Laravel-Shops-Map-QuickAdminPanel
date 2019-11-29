@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.shop.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.shops.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.id') }}
                        </th>
                        <td>
                            {{ $shop->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.name') }}
                        </th>
                        <td>
                            {{ $shop->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.categories') }}
                        </th>
                        <td>
                            @foreach($shop->categories as $key => $categories)
                                <span class="label label-info">{{ $categories->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.description') }}
                        </th>
                        <td>
                            {{ $shop->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.photos') }}
                        </th>
                        <td>
                            @foreach($shop->photos as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    <img src="{{ $media->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.address') }}
                        </th>
                        <td>
                            {{ $shop->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.active') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $shop->active ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.working_hours') }}
                        </th>
                        <td>
                            @if($shop->days)
                                @foreach($shop->days as $day)
                                    <strong>{{ ucfirst($day->name) }}</strong>:
                                    from <strong>{{ $day->pivot->from_hours }}:{{ $day->pivot->from_minutes }}</strong>
                                    to <strong>{{ $day->pivot->to_hours }}:{{ $day->pivot->to_minutes }}</strong>
                                    <br>
                                @endforeach
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.shops.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>


    </div>
</div>
@endsection