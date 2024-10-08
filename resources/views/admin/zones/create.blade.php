@extends("admin.layout2.app")
@section("content")

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">{{ __("admin.add").' '. __("admin.role") }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">{{ __("admin.home") }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">{{ __("admin.roles") }}</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <div class="card-toolbar">
                        <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <div class="modal-content">
                                    <div class="modal-header" id="kt_modal_add_user_header">
                                        <h2 class="fw-bold">{{  __("admin.add").' '. __("admin.category") }}</h2>
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                            <i class="ki-duotone ki-cross fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body py-4">
                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                        <form action="javascript:" method="post" id="zone_form">
                            <div class="row g-9 mb-8">
                                <div class="col-md-6 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">{{ __("admin.name_ar") }}</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="{{ __("admin.name_ar") }}" name="name_ar" />
                                    <div class="invalid-feedback text-danger" id="error-name_ar" style="display: none;"></div>
                                </div>
                                <div class="col-md-6 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">{{ __("admin.name_en") }}</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="{{ __("admin.name_en") }}" name="name_en" />
                                    <div class="invalid-feedback text-danger" id="error-name_en" style="display: none;"></div>
                                </div>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">{{ __("admin.logo") }} </label>
                                <input type="file" name="image" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{ __("admin.logo") }} " />
                                <div class="invalid-feedback text-danger" id="error-image" style="display: none;"></div>
                                <div class="text-muted fs-7 mb-7">ex:jpeg,png,jpg  height:3000 width:3000</div>
                            </div>
                            <div class="d-flex flex-stack" style="justify-content: flex-start!important;">
                                <div class="fw-semibold me-5">
                                    <label class="fs-6">{{ __("admin.map") }}:</label>
                                    <div class="fs-7 text-muted"></div>
                                </div>
                                <div class="form-group mb-3 d-none">
                                    <label class="input-label" for="exampleFormControlInput1">{{ __('Coordinates') }}<span class="form-label-secondary" data-toggle="tooltip" data-placement="right" data-original-title="{{__('admin.draw_your_zone_on_the_map')}}">{{__('admin.draw_your_zone_on_the_map')}}</span></label>
                                    <textarea type="text" rows="8" name="coordinates" id="coordinates" class="form-control" readonly></textarea>
                                </div>
                                    <input id="pac-input" class="controls rounded" title="{{__('admin.search_your_location_here')}}" type="text" placeholder="{{__('admin.search_here')}}"/>
                                    <div id="map-canvas" class="rounded" style="height: 400px;width:100%"></div> <!-- Ensure the map container has a height -->
                                    <div class="form-group mb-3 d-none">
                                        <div class="invalid-feedback text-danger" id="error-coordinates" style="display: none;"></div>

                                    </div>
                                </div>
                            <div class="text-center" style="margin-top: 26px;">
                                <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">{{ __("admin.discard") }}</button>
                                <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                    <span class="indicator-label">{{ __("admin.save") }}</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section("js")
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI03Vsc4rF9UjIAQkpD0oOSv40Zm_6S-Y&callback=initialize&libraries=drawing,places&v=3.49"></script>

<script>
"use strict";

let map;
let drawingManager;
let lastpolygon = null;
let polygons = [];

    function resetMap(controlDiv) {
        const controlUI = document.createElement("div");
        controlUI.style.backgroundColor = "#fff";
        controlUI.style.border = "2px solid #fff";
        controlUI.style.borderRadius = "3px";
        controlUI.style.boxShadow = "0 2px 6px rgba(0,0,0,.3)";
        controlUI.style.cursor = "pointer";
        controlUI.style.marginTop = "8px";
        controlUI.style.marginBottom = "22px";
        controlUI.style.textAlign = "center";
        controlUI.title = "Reset map";
        controlDiv.appendChild(controlUI);

        const controlText = document.createElement("div");
        controlText.style.color = "rgb(25,25,25)";
        controlText.style.fontFamily = "Roboto,Arial,sans-serif";
        controlText.style.fontSize = "10px";
        controlText.style.lineHeight = "16px";
        controlText.style.paddingLeft = "2px";
        controlText.style.paddingRight = "2px";
        controlText.innerHTML = "X";
        controlUI.appendChild(controlText);

        controlUI.addEventListener("click", () => {
            if (lastpolygon) {
                lastpolygon.setMap(null);
            }
            $('#coordinates').val('');
        });
    }

    function initialize() {
    @php($default_location = json_decode('{"lat":"30.012179702023793","lng":"31.321902566160922"}', true));
    let myLatlng = { lat: {{ $default_location ? $default_location['lat'] : '23.757989' }}, lng: {{ $default_location ? $default_location['lng'] : '90.360587' }} };

    let myOptions = {
        zoom: 13,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
    drawingManager = new google.maps.drawing.DrawingManager({
        drawingMode: google.maps.drawing.OverlayType.POLYGON,
        drawingControl: true,
        drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: [google.maps.drawing.OverlayType.POLYGON]
        },
        polygonOptions: {
            editable: true
        }
    });
    drawingManager.setMap(map);

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (position) => {
                const pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };
                map.setCenter(pos);
            });
    }

    drawingManager.addListener("overlaycomplete", function(event) {
        if (lastpolygon) {
            lastpolygon.setMap(null);
        }
        $('#coordinates').val(event.overlay.getPath().getArray());
        lastpolygon = event.overlay;
        auto_grow();
    });

    const resetDiv = document.createElement("div");
    resetMap(resetDiv);
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(resetDiv);

    const input = document.getElementById("pac-input");
    const searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);

    map.addListener("bounds_changed", () => {
        searchBox.setBounds(map.getBounds());
    });

    let markers = [];

    searchBox.addListener("places_changed", () => {
        const places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        markers.forEach((marker) => {
            marker.setMap(null);
        });
        markers = [];

        const bounds = new google.maps.LatLngBounds();
        places.forEach((place) => {
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

            markers.push(
                new google.maps.Marker({
                    map,
                    icon,
                    title: place.name,
                    position: place.geometry.location,
                })
            );

            if (place.geometry.viewport) {
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });
}



    $('#zone_form').on('submit', function () {
            let formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post({
                url: '/admin/zones',
                method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (data) {
                    if(data.errors){
                        $.each(data.errors, function(index, value){
                            toastr.error(value.message);
                        });
                    }
                    else{
                        $('.tab-content').find('input:text').val('');
                        $('input[name="name"]').val(null);
                        lastpolygon.setMap(null);
                        $('#coordinates').val(null);
                        toastr.success("{{ __('admin.zone_added_successfully') }}", {
                                CloseButton: true,
                                ProgressBar: true
                            });
                            location.reload();
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        for (var field in errors) {

                            $('#error-' + field).text(errors[field][0]).show();
                        }
                    } else {
                        alert('An error occurred. Please try again.');
                    }

                },
                complete: function () {
                    $('#loading').hide();
                },
            });
        });
</script>
@endsection
@endsection
