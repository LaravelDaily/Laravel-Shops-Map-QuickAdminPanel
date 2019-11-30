@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.shop.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.shops.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.shop.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="categories">{{ trans('cruds.shop.fields.categories') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('categories') ? 'is-invalid' : '' }}" name="categories[]" id="categories" multiple>
                    @foreach($categories as $id => $categories)
                        <option value="{{ $id }}" {{ in_array($id, old('categories', [])) ? 'selected' : '' }}>{{ $categories }}</option>
                    @endforeach
                </select>
                @if($errors->has('categories'))
                    <div class="invalid-feedback">
                        {{ $errors->first('categories') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.categories_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.shop.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="photos">{{ trans('cruds.shop.fields.photos') }}</label>
                <div class="needsclick dropzone {{ $errors->has('photos') ? 'is-invalid' : '' }}" id="photos-dropzone">
                </div>
                @if($errors->has('photos'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photos') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.photos_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.shop.fields.address') }}</label>
                <input class="form-control map-input {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address') }}">
                <input type="hidden" name="latitude" id="address-latitude" value="{{ old('latitude') ?? '0' }}" />
                <input type="hidden" name="longitude" id="address-longitude" value="{{ old('longitude') ?? '0' }}" />
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.address_helper') }}</span>
            </div>
            <div id="address-map-container" class="mb-2" style="width:100%;height:400px; ">
                <div style="width: 100%; height: 100%" id="address-map"></div>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('active') ? 'is-invalid' : '' }}">
                    <input class="form-check-input" type="checkbox" name="active" id="active" value="1" {{ old('active', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="active">{{ trans('cruds.shop.fields.active') }}</label>
                </div>
                @if($errors->has('active'))
                    <div class="invalid-feedback">
                        {{ $errors->first('active') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.active_helper') }}</span>
            </div>
            <label>{{ trans('cruds.shop.fields.working_hours') }}</label>
            @foreach($days as $day)
                <div class="form-inline">
                    <label class="my-1 mr-2">{{ ucfirst($day->name) }}: from</label>
                    <select class="custom-select my-1 mr-sm-2" name="from_hours[{{ $day->id }}]">
                        <option value="">--</option>
                        @foreach(range(0,24) as $hours)
                            <option 
                                value="{{ $hours < 10 ? "0$hours" : $hours }}"
                                {{ old('from_hours.'.$day->id) == ($hours < 10 ? "0$hours" : $hours) ? 'selected' : '' }}
                            >{{ $hours < 10 ? "0$hours" : $hours }}</option>
                        @endforeach
                    </select>
                    <label class="my-1 mr-2">:</label>
                    <select class="custom-select my-1 mr-sm-2" name="from_minutes[{{ $day->id }}]">
                        <option value="">--</option>
                        @foreach(range(0,59) as $minutes)
                            <option 
                                value="{{ $minutes < 10 ? "0$minutes" : $minutes }}"
                                {{ old('from_minutes.'.$day->id) == ($minutes < 10 ? "0$minutes" : $minutes) ? 'selected' : '' }}
                            >{{ $minutes < 10 ? "0$minutes" : $minutes }}</option>
                        @endforeach
                    </select>
                    <label class="my-1 mr-2">to</label>
                    <select class="custom-select my-1 mr-sm-2" name="to_hours[{{ $day->id }}]">
                        <option value="">--</option>
                        @foreach(range(0,24) as $hours)
                            <option 
                                value="{{ $hours < 10 ? "0$hours" : $hours }}"
                                {{ old('to_hours.'.$day->id) == ($hours < 10 ? "0$hours" : $hours) ? 'selected' : '' }}
                            >{{ $hours < 10 ? "0$hours" : $hours }}</option>
                        @endforeach
                    </select>
                    <label class="my-1 mr-2">:</label>
                    <select class="custom-select my-1 mr-sm-2" name="to_minutes[{{ $day->id }}]">
                        <option value="">--</option>
                        @foreach(range(0,59) as $minutes)
                            <option 
                                value="{{ $minutes < 10 ? "0$minutes" : $minutes }}"
                                {{ old('to_minutes.'.$day->id) == ($minutes < 10 ? "0$minutes" : $minutes) ? 'selected' : '' }}
                            >{{ $minutes < 10 ? "0$minutes" : $minutes }}</option>
                        @endforeach
                    </select>
                </div>
            @endforeach

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>


    </div>
</div>
@endsection

@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize&language=en&region=GB" async defer></script>
<script src="/js/mapInput.js"></script>
<script>
    var uploadedPhotosMap = {}
Dropzone.options.photosDropzone = {
    url: '{{ route('admin.shops.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="photos[]" value="' + response.name + '">')
      uploadedPhotosMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedPhotosMap[file.name]
      }
      $('form').find('input[name="photos[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($shop) && $shop->photos)
      var files =
        {!! json_encode($shop->photos) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="photos[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection