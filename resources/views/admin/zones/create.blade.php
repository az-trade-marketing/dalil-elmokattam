@extends("admin.layout2.app")
@section("content")

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">{{__("admin.add").' '. __("admin.role") }}</h1>
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

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header" id="kt_modal_add_user_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">{{  __("admin.add").' '. __("admin.category") }}</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                            <i class="ki-duotone ki-cross fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                   
                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
						<!--begin:Form-->
						<form id="kt_modal_new_target_form" class="form" action="#">
							<!--begin::Input group-->
							<div class="row g-9 mb-8">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-semibold mb-2">{{ __("admin.name_ar") }}</label>
								    <input type="text" class="form-control form-control-solid" placeholder="{{ __("admin.name_ar") }}" name="name_ar" />
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-semibold mb-2">{{ __("admin.name_en") }}</label>
								    <input type="text" class="form-control form-control-solid" placeholder="{{ __("admin.name_en") }}" name="name_en" />
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
                            <div class="d-flex flex-stack" style="justify-content: flex-start!important;">
                                <!--begin::Label-->
                                <div class="fw-semibold me-5">
                                    <label class="fs-6">{{ __("admin.permissions") }}:</label>
                                    <div class="fs-7 text-muted"></div>
                                </div>
                                <div class="form-group mb-3 d-none">
                                    <label class="input-label"
                                        for="exampleFormControlInput1">{{ __('Coordinates') }}<span class="form-label-secondary" data-toggle="tooltip" data-placement="right"
        data-original-title="{{__('messages.draw_your_zone_on_the_map')}}">{{__('messages.draw_your_zone_on_the_map')}}</span></label>
                                        <textarea type="text" rows="8" name="coordinates"  id="coordinates" class="form-control" readonly></textarea>
                                </div>
                                <div class="map-warper rounded mt-0">
                                    <input id="pac-input" class="controls rounded" title="{{__('messages.search_your_location_here')}}" type="text" placeholder="{{__('messages.search_here')}}"/>
                                    <div id="map-canvas" class="rounded"></div>
                                </div>
                                
                            </div>
							<!--begin::Actions-->
							<div class="text-center" style="    margin-top: 26px;">
								<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">{{ __("admin.discard") }}</button>
								<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
									<span class="indicator-label">{{ __("admin.save") }}</span>
									<span class="indicator-progress">Please wait... 
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end:Form-->
					</div>

                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->

@section("js")
<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDT60ggt5ETruZhbUbKt9-bD2IifF4UJ9s&callback=initialize&libraries=drawing,places&v=3.49"></script>
<script>
"use strict";
$(".popover-wrapper").click(function(){
  $(".popover-wrapper").removeClass("active");
});

$('.status_form_alert').on('click', function (event) {
    let id = $(this).data('id');
    let title = $(this).data('title');
    let message = $(this).data('message');
    status_form_alert(id, title, message, event)
})

function status_form_alert(id, title, message, e) {
    e.preventDefault();
    Swal.fire({
        title: title,
        text: message,
        type: 'warning',
        showCancelButton: true,
        cancelButtonColor: 'default',
        confirmButtonColor: '#FC6A57',
        cancelButtonText: '{{ __('admin.no') }}',
        confirmButtonText: '{{ __('admin.Yes') }}',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            $('#'+id).submit()
        }
    })
}

auto_grow();
function auto_grow() {
    let element = document.getElementById("coordinates");
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
}

$(document).on('ready', function () {
    // INITIALIZATION OF DATATABLES
    let datatable = $.HSCore.components.HSDatatables.init($('#columnSearchDatatable'));

    $('#column1_search').on('keyup', function () {
        datatable
            .columns(1)
            .search(this.value)
            .draw();
    });

    $('#column3_search').on('change', function () {
        datatable
            .columns(2)
            .search(this.value)
            .draw();
    });

    // INITIALIZATION OF SELECT2
    $('.js-select2-custom').each(function () {
        let select2 = $.HSCore.components.HSSelect2.init($(this));
    });

    $("#zone_form").on('keydown', function(e){
        if (e.keyCode === 13) {
            e.preventDefault();
        }
    });

    set_all_zones();
});

let map; // Global declaration of the map
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

function initialize(map,drawingManager,lastpolygon) {
    @php($default_location=json_decode('{"lat":"30.012179702023793","lng":"31.321902566160922"}', true));
    let myLatlng = { lat: {{$default_location?$default_location['lat']:'23.757989'}}, lng: {{$default_location?$default_location['lng']:'90.360587'}} };

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
        if(lastpolygon) {
            lastpolygon.setMap(null);
        }
        $('#coordinates').val(event.overlay.getPath().getArray());
        lastpolygon = event.overlay;
        auto_grow();
    });

    const resetDiv = document.createElement("div");
    resetMap(resetDiv, lastpolygon);
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

function set_all_zones() {
    $.get({
        url: '{{url('admin.zone.zoneCoordinates')}}',
        dataType: 'json',
        success: function (data) {
            for(let i=0; i<data.length; i++) {
                polygons.push(new google.maps.Polygon({
                    paths: data[i],
                    strokeColor: "#FF0000",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: "#FF0000",
                    fillOpacity: 0.1,
                }));
                polygons[i].setMap(map);
            }
        },
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
        url: '{{url('admin.business-settings.zone.store')}}',
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
            } else {
                $('.tab-content').find('input:text').val('');
                $('input[name="name"]').val(null);
                lastpolygon.setMap(null);
                $('#coordinates').val(null);
                toastr.success("{{ __('admin.zone_added_successfully') }}", {
                        CloseButton: true,
                        ProgressBar: true
                    });
                $('#set-rows').html(data.view);
                $('#itemCount').html(data.total);
                $("#module-setup-modal-button").prop("href",'{{url('/')}}/admin/business-settings/zone/module-setup/'+ data.id)
                $("#warning-modal").modal("show");
            }
        },
        complete: function () {
            $('#loading').hide();
        },
    });
});

$('#reset_btn').click(function(){
    $('.tab-content').find('input:text').val('');
    if (lastpolygon) {
        lastpolygon.setMap(null);
    }
    $('#coordinates').val(null);
})
</script>

@endsection
@endsection
