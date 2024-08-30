@extends('admin.layout2.app')
@section('content')
    <link href="{{ asset('assets/admin/css/style.table.css') }}" rel="stylesheet" type="text/css" />
    <style>
        input {
            height: 50px;
        }

        textarea.form-control {
            height: 100px;
        }
    </style>
  <div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                    {{ __('admin.edit') . ' ' . __('admin.store') }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">{{ __('admin.home') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">{{ __('admin.edit') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="kt_account_profile_details" class="collapse show">
                <form action="{{ route('stores.update', $store->id) }}" method="POST" enctype="multipart/form-data" id="edit">
                    @csrf
                    @method('PUT')
                    <!--begin::Card body-->
                    <div class="card-body">
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.name_en') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="d-flex gap-3">
                                    <input type="text" name="name_en" class="form-control form-control-solid"
                                        placeholder="{{ __('admin.name_en') }}" value="{{ $store->name_en }}" />
                                    <input type="text" name="name_ar" class="form-control form-control-solid"
                                        placeholder="{{ __('admin.name_ar') }}" value="{{ $store->name_ar }}" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6"  style="width: auto">{{ __('admin.description_en') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="mb-5">
                                    <textarea name="description_en" class="form-control form-control-solid" rows="3"
                                        placeholder="{{ __('admin.description_en') }}">{{ $store->description_en }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6" style="width: auto">{{ __('admin.description_ar') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="mb-5">
                                    <textarea name="description_ar" class="form-control form-control-solid" rows="3"
                                        placeholder="{{ __('admin.description_ar') }}">{{ $store->description_ar }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6" style="width: auto">{{ __('admin.contact') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="d-flex gap-3">
                                    <input type="text" name="mobile" value="{{ $store->mobile }}"
                                        class="form-control form-control-solid"
                                        placeholder="{{ __('admin.mobile') }}" />
                                    <input type="text" name="email" value="{{ $store->email }}"
                                        class="form-control form-control-solid"
                                        placeholder="{{ __('admin.email') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.category') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <select id="business-type-select-activity"
                                    class="form-select activity form-select-solid" data-hide-search="category_id"
                                    data-placeholder="@lang('admin.category')" name="category_id" required>
                                    <option value="">{{ __('admin.choose') }}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $store->category_id ? 'selected' : '' }}>
                                            {{ $category->{'name_' . app()->getLocale()} }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="input-label required" for="choice_zones">{{ __('admin.zone') }}<span
                                            class="form-label-secondary" data-toggle="tooltip" data-placement="right"
                                            data-original-title="{{ __('admin.select_zone_for_map') }}"></span></label>
                                    <select name="zone_id" id="choice_zones"
                                        data-placeholder="{{ __('admin.select_zone') }}"
                                        class="form-control js-select2-custom get_zone_data">
                                        @foreach (\App\Models\Zone::get() as $zone)
                                            @if (isset(auth('admin')->user()->zone_id))
                                                @if (auth('admin')->user()->zone_id == $zone->id)
                                                    <option value="{{ $zone->id }}"
                                                        {{ $store->zone_id == $zone->id ? 'selected' : '' }}>
                                                        {{ $zone->name_en }}</option>
                                                @endif
                                            @else
                                                <option value="{{ $zone->id }}"
                                                    {{ $store->zone_id == $zone->id ? 'selected' : '' }}>
                                                    {{ $zone->name_en }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="input-label required" for="lat">{{ __('admin.lat') }}<span
                                            class="form-label-secondary" data-toggle="tooltip" data-placement="right"
                                            data-original-title="{{ __('admin.store_lat_lng_warning') }}"></span></label>
                                    <input type="text" id="lat" name="lat" class="form-control"
                                        placeholder="{{ __('admin.Ex:') }} -94.22213" value="{{ $store->lat }}"
                                        required readonly>
                                </div>
                                <div class="form-group mb-5">
                                    <label class="input-label required" for="lon">{{ __('admin.lon') }}<span
                                            class="form-label-secondary" data-toggle="tooltip" data-placement="right"
                                            data-original-title="{{ __('admin.store_lat_lng_warning') }}"></span></label>
                                    <input type="text" name="lon" class="form-control"
                                        placeholder="{{ __('admin.Ex:') }} 103.344322" id="lon"
                                        value="{{ $store->lon }}" required readonly>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <input id="pac-input" class="controls rounded" data-toggle="tooltip"
                                    data-placement="right"
                                    data-original-title="{{ __('messages.search_your_location_here') }}"
                                    type="text" placeholder="{{ __('messages.search_here') }}" />
                                <div id="map"
                                    style="position: relative; overflow: hidden; width: 100%; height: 100%;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 d-none">
                            <label class="input-label" for="exampleFormControlInput1">{{ __('Coordinates') }}<span
                                    class="form-label-secondary" data-toggle="tooltip" data-placement="right"
                                    data-original-title="{{ __('admin.draw_your_zone_on_the_map') }}">{{ __('admin.draw_your_zone_on_the_map') }}</span></label>
                            <textarea type="text" rows="8" name="coordinates" id="coordinates" class="form-control" readonly></textarea>
                        </div>
                        @if (!auth()->user()->hasRole('stores'))
                            
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6" style="width: auto">{{ __('admin.subscriptions') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <!--begin::Input-->
                                <select id="business-type-select-activity"
                                    class="form-select activity form-select-solid" data-hide-search="subscription_id"
                                    data-placeholder="{{ __('admin.subscriptions') }}" name="subscription_id" required>
                                    <option value="">{{ __('admin.choose') }}</option>
                                    @foreach ($subscriptions as $subscription)
                                        <option value="{{ $subscription->id }}"
                                            {{ $subscription->id == $store->subscription_id ? 'selected' : '' }}>
                                            {{ $subscription->{'title_'. app()->getLocale()} }}
                                        </option>
                                    @endforeach
                                </select>
                                <!--end::Input-->
                            </div>
                        </div>
                        @endif
                        <div class="col-lg-9">
                            <div id="features-container" class="row mb-10">
                                <!--<div class="row mb-10">-->
                                <!--    <div class="col-md-3">-->
                                <!--        <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('admin.image') }}</label>-->
                                <!--    </div>-->
                                <!--    <div class="col-lg-9">-->
                                <!--        <div class="mb-5">-->
                                <!--            <input type="file" name="image" class="form-control form-control-solid" />-->
                                <!--            @if ($store->image)-->
                                <!--                <img src="{{ asset('images/' . $store->image) }}" alt="store image"-->
                                <!--                    class="mt-2" style="max-width: 200px;">-->
                                <!--            @endif-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="row mb-10">
                                    <div class="col-md-3">
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('admin.video') }}</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="mb-5">
                                            <input type="file" name="video" class="form-control form-control-solid" />
                                            @if ($store->vidio)
                                                <video controls class="mt-2" style="max-width: 300px;">
                                                    <source src="{{ asset('images/' . $store->vidio) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-10">
                                    <div class="col-md-3">
                                        <label class="col-lg-4 col-form-label fw-bold fs-6"  style="width: auto">{{ __('admin.multiImage') }}</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="mb-5">
                                            <input type="file" name="multiimage[]" class="form-control form-control-solid" multiple />
                                            @if ($store->gallaries)
                                                @foreach ($store->gallaries as $image)
                                                    <img src="{{ asset('images/' . $image->image) }}" alt="store multiimage"
                                                         class="mt-2" style="max-width: 100px; margin-right: 10px;">
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>



                                </div>

                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.logo') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="image-input image-input-outline" data-kt-image-input="true"
                                    style="background-image: url(assets/media/avatars/blank.png)">
                                    @if (!empty($store->logo))
                                        <div class="image-input-wrapper w-125px h-125px"
                                            style="background-image: url({{ asset('images/' . $store->logo) }})"></div>
                                    @else
                                        <div class="image-input-wrapper w-125px h-125px"
                                            style="background-image: url(assets/media/avatars/150-26.jpg)"></div>
                                    @endif
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="logo" accept=".png, .jpg, .jpeg" />
                                    </label>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                </div>
                                <div class="form-text">{{ __('category.allowed_file_types:_png,_jpg,_jpeg.') }}</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card body-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="submit" class="btn btn-primary">
                            {{ __('admin.update') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!--end::Card body-->
    </div>
</div>

    <!--end::Basic info-->
@endsection
@section('js')
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI03Vsc4rF9UjIAQkpD0oOSv40Zm_6S-Y&libraries=places&callback=initMap&v=3.45.8">
    </script>
    <script>
        "use strict";
        $(document).on('ready', function() {
            $('.offcanvas').on('click', function() {
                $('.offcanvas, .floating--date').removeClass('active')
            })
            $('.floating-date-toggler').on('click', function() {
                $('.offcanvas, .floating--date').toggleClass('active')
            })
            @if (isset(auth('admin')->user()->zone_id))
                $('#choice_zones').trigger('change');
            @endif
        });

        function readURL(input, viewer) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function(e) {
                    $('#' + viewer).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#customFileEg1").change(function() {
            readURL(this, 'viewer');
        });

        $("#coverImageUpload").change(function() {
            readURL(this, 'coverImageViewer');
        });


        $(function() {
            $("#coba").spartanMultiImagePicker({
                fieldName: 'identity_image[]',
                maxCount: 5,
                rowHeight: '120px',
                groupClassName: 'col-lg-2 col-md-4 col-sm-4 col-6',
                maxFileSize: '',
                placeholderImage: {
                    image: '{{ asset('public/assets/admin/img/400x400/img2.jpg') }}',
                    width: '100%'
                },
                dropFileLabel: "Drop Here",
                onAddRow: function(index, file) {

                },
                onRenderedPreview: function(index) {

                },
                onRemoveRow: function(index) {

                },
                onExtensionErr: function(index, file) {
                    toastr.error('{{ __('admin.please_only_input_png_or_jpg_type_file') }}', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                },
                onSizeErr: function(index, file) {
                    toastr.error('{{ __('admin.file_size_too_big') }}', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                }
            });
        });

        let myLatlng = {
            lat: {{ $store->lat }},
            lng: {{ $store->lon }}
        };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 13,
            center: myLatlng,
        });
        let zonePolygon = null;
        let infoWindow = new google.maps.InfoWindow({
            content: "Click the map to get Lat/Lng!",
            position: myLatlng,
        });
        let bounds = new google.maps.LatLngBounds();

        function initMap() {
            // Create the initial InfoWindow.
            new google.maps.Marker({
                position: {
                    lat: {{ $store->lat }},
                    lng: {{ $store->lon }}
                },
                map,
                title: "{{ $store->name }}",
            });
            infoWindow.open(map);
            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);
            let markers = [];
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();
                if (places.length == 0) {
                    return;
                }
                // Clear out the old markers.
                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];
                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();
                places.forEach((place) => {
                    document.getElementById('lat').value = place.geometry.location.lat();
                    document.getElementById('lon').value = place.geometry.location.lng();
                    if (!place.geometry || !place.geometry.location) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    const icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25),
                    };
                    // Create a marker for each place.
                    markers.push(
                        new google.maps.Marker({
                            map,
                            icon,
                            title: place.name,
                            position: place.geometry.location,
                        })
                    );

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }
        initMap();
        $('.get_zone_data').on('click', function() {
            let id = $(this).val();
            $.get({
                url: `{{ url('admin/get-zone-Coordinate') }}/${id}`,
                dataType: 'json',
                success: function(data) {
                    if (zonePolygon) {
                        zonePolygon.setMap(null);
                    }
                    zonePolygon = new google.maps.Polygon({
                        paths: data.coordinates,
                        strokeColor: "#FF0000",
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        fillColor: 'white',
                        fillOpacity: 0,
                    });
                    zonePolygon.setMap(map);
                    map.setCenter(data.center);
                    google.maps.event.addListener(zonePolygon, 'click', function(mapsMouseEvent) {
                        infoWindow.close();
                        // Create a new InfoWindow.
                        infoWindow = new google.maps.InfoWindow({
                            position: mapsMouseEvent.latLng,
                            content: JSON.stringify(mapsMouseEvent.latLng.toJSON(),
                                null, 2),
                        });
                        let coordinates = JSON.stringify(mapsMouseEvent.latLng.toJSON(), null,
                            2);
                        coordinates = JSON.parse(coordinates);

                        document.getElementById('lat').value = coordinates['lat'];
                        document.getElementById('lon').value = coordinates['lng'];
                        infoWindow.open(map);
                    });
                },
            });
        })
        $(document).on('ready', function() {
            let id = $('#choice_zones').val();
            $.get({
                url: `{{ url('admin/get-zone-Coordinate') }}/${id}`,
                dataType: 'json',
                success: function(data) {
                    if (zonePolygon) {
                        zonePolygon.setMap(null);
                    }
                    zonePolygon = new google.maps.Polygon({
                        paths: data.coordinates,
                        strokeColor: "#FF0000",
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        fillColor: 'white',
                        fillOpacity: 0,
                    });
                    zonePolygon.setMap(map);
                    zonePolygon.getPaths().forEach(function(path) {
                        path.forEach(function(latlng) {
                            bounds.extend(latlng);
                            map.fitBounds(bounds);
                        });
                    });
                    map.setCenter(data.center);
                    google.maps.event.addListener(zonePolygon, 'click', function(mapsMouseEvent) {
                        infoWindow.close();
                        // Create a new InfoWindow.
                        infoWindow = new google.maps.InfoWindow({
                            position: mapsMouseEvent.latLng,
                            content: JSON.stringify(mapsMouseEvent.latLng.toJSON(),
                                null, 2),
                        });
                        let coordinates = JSON.stringify(mapsMouseEvent.latLng.toJSON(), null,
                            2);
                        coordinates = JSON.parse(coordinates);

                        document.getElementById('lat').value = coordinates['lat'];
                        document.getElementById('lon').value = coordinates['lng'];
                        infoWindow.open(map);
                    });
                },
            });
        });

        $('#reset_btn').click(function() {
            $('#viewer').attr('src', "{{ asset('public/assets/admin/img/upload.png') }}");
            $('#customFileEg1').val(null);
            $('#coverImageViewer').attr('src', "{{ asset('public/assets/admin/img/upload-img.png') }}");
            $('#coverImageUpload').val(null);
            $('#choice_zones').val(null).trigger('change');
            $('#module_id').val(null).trigger('change');
            zonePolygon.setMap(null);
            $('#coordinates').val(null);
            $('#lat').val(null);
            $('#lon').val(null);
        })

        let zone_id = 0;
        $('#choice_zones').on('change', function() {
            if ($(this).val()) {
                zone_id = $(this).val();
            }
        });



        $('#module_id').select2({
            ajax: {
                url: '{{ url('/') }}/store/get-all-modules',
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page,
                        zone_id: zone_id
                    };
                },
                processResults: function(data) {
                    return {
                        results: data
                    };
                },
                __port: function(params, success, failure) {
                    let $request = $.ajax(params);

                    $request.then(success);
                    $request.fail(failure);

                    return $request;
                }
            }
        });


        $('.delivery-time').on('click', function() {
            let min = $("#minimum_delivery_time").val();
            let max = $("#maximum_delivery_time").val();
            let type = $("#delivery_time_type").val();
            $("#floating--date").removeClass('active');
            $("#time_view").val(min + ' to ' + max + ' ' + type);

        })

        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif
       /////////////////////////
       document.addEventListener('DOMContentLoaded', function() {
    const subscriptionSelect = document.querySelector('select[name="subscription_id"]');

    subscriptionSelect.addEventListener('change', function() {
        const subscriptionId = this.value;
        console.log(subscriptionId);
        const featuresContainer = document.getElementById('features-container');
        featuresContainer.innerHTML = '';

        if (subscriptionId) {
            fetch(`/admin/subscription/${subscriptionId}/features`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(features => {
                    features.forEach(feature => {
                        console.log(feature.type);
                        let inputElement;
                        switch (feature.type) {
                            case 'image':
                                inputElement = `<input type="file" name="features[${feature.id}]" accept="image/*" class="form-control form-control-solid">`;
                                break;
                            case 'multiImage':
                                inputElement = `<input type="file" name="features[${feature.id}][]" accept="image/*" multiple class="form-control form-control-solid">`;
                                break;
                            case 'video':
                                inputElement = `<input type="file" name="features[${feature.id}]" accept="video/*" class="form-control form-control-solid">`;
                                break;
                            case 'text':
                                inputElement = `<textarea name="features[${feature.id}]" class="form-control form-control-solid"></textarea>`;
                                break;
                        }
                        const currentLocale = "{{ App::getLocale() }}";
                        const featureElement = `
                            <div class="row mb-10">
                                <div class="col-md-3">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">${currentLocale == 'ar' ? feature.name_ar : feature.name_en}</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="d-flex gap-3">
                                        ${inputElement}
                                    </div>
                                </div>
                            </div>
                        `;
                        featuresContainer.innerHTML += featureElement;
                    });

                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }
    });
});


   </script>
@endsection

