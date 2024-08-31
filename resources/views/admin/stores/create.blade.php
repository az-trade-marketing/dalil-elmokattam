@extends('admin.layout2.app')
@section('content')
<link href="{{ asset('assets/admin/css/style.table.css') }}" rel="stylesheet" type="text/css" />
<style>
    input{
       height: 50px;
    }
    textarea.form-control{
        height: 100px;
    }
</style>
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">{{ __("admin.add") .' '.__("admin.store") }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">{{ __("admin.home") }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">{{ __("admin.store") }}</li>

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
                <form action="{{ route('stores.store') }}" method="POST" enctype="multipart/form-data" id="create">
                    @csrf
                    <!--begin::Card body-->
                    <div class="card-body">
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.name_en') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="d-flex gap-3">
                                    <input type="text" name="name_en" class="form-control form-control-solid" placeholder="{{ __('admin.name_en') }}" value="{{ old('name_en') }}" />
                                    <input type="text" name="name_ar" class="form-control form-control-solid" placeholder="{{ __('admin.name_ar') }}" value="{{ old('name_ar') }}" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6" style="width: auto">{{ __('admin.description_en') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="mb-5">
                                    <textarea name="description_en" class="form-control form-control-solid" rows="3" placeholder="{{ __('admin.description_en') }}">{{ old('description_en') }}</textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6" style="width: auto">{{ __('admin.description_ar') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="mb-5">
                                    <textarea name="description_ar" class="form-control form-control-solid" rows="3" placeholder="{{ __('admin.description_ar') }}">{{ old('description_ar') }}</textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.contact') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="d-flex gap-3">
                                    <input type="text" name="mobile" class="form-control form-control-solid" placeholder="{{ __('admin.mobile') }}" value="{{ old('mobile') }}" />
                                    <input type="text" name="email" class="form-control form-control-solid" placeholder="{{ __('admin.email') }}" value="{{ old('email') }}" />
                                    <input type="password" name="password" class="form-control form-control-solid" placeholder="{{ __('admin.password') }}" value="{{ old('password') }}" />
                                </div>
                            </div>
                        </div>
                
                        <div class="row mb-10">
                            <div class="col-md-6">
                                <div class="col-md-3">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6" style="width: auto">{{ __('admin.category') }}</label>
                                </div>
                                <div class="col-lg-9">
                                    <select id="business-type-select-activity" class="form-select activity form-select-solid" data-hide-search="category_id" data-placeholder="@lang('admin.admin_id')" name="category_id" required>
                                        <option value="">{{ __( 'admin.chooose' ) }}</option>
                                        @foreach ($categoreis as $category)
                                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->{'name_' . lang()} }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6" style="width: auto">{{ __('admin.subscriptions') }}</label>
                                </div>
                                <div class="col-lg-9">
                                    <select id="business-type-select-activity" class="form-select activity form-select-solid" data-hide-search="subscription_id" data-placeholder="@lang('admin.subscriptions')" name="subscription_id" required>
                                        <option value="">{{ __( 'admin.chooose' ) }}</option>
                                        @foreach ($subscriptions as $subscription)
                                            <option value="{{ $subscription->id }}" {{ old('subscription_id') == $subscription->id ? 'selected' : '' }}>
                                                {{ $subscription->{'title_' . lang()} }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-md-6">
                            <div id="features-container" class="row mb-10">
                                <!-- Dynamic feature inputs will be loaded here -->
                            </div>
                        </div>
                
                        <div class="row mb-10">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="input-label required" for="choice_zones">{{__('admin.zone')}}<span class="form-label-secondary" data-toggle="tooltip" data-placement="right" data-original-title="{{__('admin.select_zone_for_map')}}"></span></label>
                                    <select name="zone_id" id="choice_zones" required class="form-control js-select2-custom" data-placeholder="{{__('admin.select_zone')}}">
                                        <option value="" selected disabled>{{__('admin.select_zone')}}</option>
                                        @foreach(\App\Models\Zone::get() as $zone)
                                            <option value="{{ $zone->id }}" {{ old('zone_id') == $zone->id ? 'selected' : '' }}>{{ $zone->name_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="input-label required" for="lat">{{__('admin.lat')}}<span class="form-label-secondary" data-toggle="tooltip" data-placement="right" data-original-title="{{__('admin.store_lat_lng_warning')}}"></span></label>
                                    <input type="text" id="lat" name="lat" class="form-control" placeholder="{{ __('admin.Ex:') }} -94.22213" value="{{ old('lat') }}" required readonly>
                                </div>
                                <div class="form-group mb-5">
                                    <label class="input-label required" for="lon">{{__('admin.lon')}}<span class="form-label-secondary" data-toggle="tooltip" data-placement="right" data-original-title="{{__('admin.store_lat_lng_warning')}}"></span></label>
                                    <input type="text" name="lon" class="form-control" placeholder="{{ __('admin.Ex:') }} 103.344322" id="lon" value="{{ old('lon') }}" required readonly>
                                </div>
                            </div>
                
                            <div class="col-lg-8">
                                <input id="pac-input" class="controls rounded" data-toggle="tooltip" data-placement="right" data-original-title="{{ __('admin.search_your_location_here') }}" type="text" placeholder="{{ __('admin.search_here') }}" />
                                <div id="map" style="position: relative; overflow: hidden; width: 100%; height: 100%;"></div>
                            </div>
                        </div>
                
                        <div class="row mb-10">
                            {{-- <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.logo') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
                                    <div class="image-input-wrapper w-250px h-300px" id="logo_img"></div>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="logo" accept=".png, .jpg, .jpeg" />
                                    </label>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                </div>
                                <div class="form-text">{{ __( 'category.allowed_file_types:_png,_jpg,_jpeg.' ) }}</div>
                            </div> --}}
                        </div>
                    </div>
                    <!--end::div hidden-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">{{ __("admin.discard") }}</button>
                        <button type="submit" form="create" value="Submit" class="btn btn-primary">{{ __("admin.save") }}</button>
            
                    </div>
                    <!--end::Card body-->
                </form>
            </div>

        </div>
    </div>
    <!--end::Content-->
</div>
@endsection
@section("js")
<!--end::Basic info-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI03Vsc4rF9UjIAQkpD0oOSv40Zm_6S-Y&libraries=places&callback=initMap&v=3.45.8"></script>

<script>
"use strict";

$(document).on('ready', function () {
        $('.offcanvas').on('click', function(){
            $('.offcanvas, .floating--date').removeClass('active')
        })
        $('.floating-date-toggler').on('click', function(){
            $('.offcanvas, .floating--date').toggleClass('active')
        })
});

function readURL(input, viewer) {
    if (input.files && input.files[0]) {
        let reader = new FileReader();

        reader.onload = function (e) {
            $('#'+viewer).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#customFileEg1").change(function () {
        readURL(this, 'viewer');
    });

    $("#coverImageUpload").change(function () {
        readURL(this, 'coverImageViewer');
    });


@php($default_location = json_decode('{"lat":"30.012179702023793","lng":"31.321902566160922"}', true));
    let myLatlng = { lat: {{$default_location?$default_location['lat']:'23.757989'}}, lng: {{$default_location?$default_location['lng']:'90.360587'}} };
    let map = new google.maps.Map(document.getElementById("map"), {
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
        infoWindow.open(map);
         //get current location block
         infoWindow = new google.maps.InfoWindow();
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                myLatlng = {
                    lat: position.coords.lat,
                    lng: position.coords.lon,
                };
                infoWindow.setPosition(myLatlng);
                infoWindow.setContent("Location found.");
                infoWindow.open(map);
                map.setCenter(myLatlng);
            },
            () => {
                handleLocationError(true, infoWindow, map.getCenter());
                }
            );
        } else {
        // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
        //-----end block------
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
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(
            browserHasGeolocation
            ? "Error: The Geolocation service failed."
            : "Error: Your browser doesn't support geolocation."
        );
        infoWindow.open(map);
    }

    $('#choice_zones').on('change', function(){
        let id = $(this).val();
        $.get({
            url: `{{ url('admin/get-zone-Coordinate') }}/${id}`,
            dataType: 'json',
            success: function (data) {

                if(zonePolygon)
                {
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
                google.maps.event.addListener(zonePolygon, 'click', function (mapsMouseEvent) {
                    infoWindow.close();
                    // Create a new InfoWindow.
                    infoWindow = new google.maps.InfoWindow({
                    position: mapsMouseEvent.latLng,
                    content: JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2),
                    });
                    let coordinates = JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2);
                    coordinates = JSON.parse(coordinates);
                    document.getElementById('lat').value = coordinates['lat'];
                    document.getElementById('lon').value = coordinates['lng'];
                    infoWindow.open(map);
                });
            },
        });
    });

    $("#vendor_form").on('keydown', function(e){
        if (e.keyCode === 13) {
            e.preventDefault();
        }
    })


    $('#reset_btn').click(function(){
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
            if($(this).val())
        {
            zone_id = $(this).val();
        }
        });


$('.delivery-time').on('click',function (){
    let min = $("#minimum_delivery_time").val();
    let max = $("#maximum_delivery_time").val();
    let type = $("#delivery_time_type").val();
    $("#floating--date").removeClass('active');
    $("#time_view").val(min+' to '+max+' '+type);

})
@if(session('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if(session('error'))
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
                                inputElement = `<input type="file" name="features[${feature.type}]" accept="image/*" class="form-control form-control-solid">`;
                                break;
                            case 'multiImage':
                                inputElement = `<input type="file" name="features[${feature.type}][]" accept="image/*" multiple class="form-control form-control-solid">`;
                                break;
                            case 'vidio':
                                inputElement = `<input type="file" name="features[${feature.type}]" accept="video/*" class="form-control form-control-solid">`;
                                break;
                            case 'text':
                                inputElement = `<textarea name="features[${feature.type}]" class="form-control form-control-solid"></textarea>`;
                                break;
                        }
                        const currentLocale = "{{ App::getLocale() }}";
                        const featureElement = `
                            <div class="row mb-10">
                                <div class="col-md-3">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6" style="    width: auto">${currentLocale == 'ar' ? feature.name_ar : feature.name_en}</label>
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
