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
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">{{ __("admin.add_store") }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">{{ __("admin.home") }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">{{ __("admin.create") }}</li>

                </ul>
            </div>
        </div>
    </div>
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">

            <div class="kt_account_profile_details" class="collapse show">
                <form action="{{ route('stores.store') }}" method="POST"
                    enctype="multipart/form-data" id="create">
                    @csrf
                    <!--begin::Card body-->
                    <div class="card-body ">
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">   {{ __('admin.name_en') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="d-flex gap-3">
                                        <input type="text" name="name_en" class="form-control form-control-solid"  placeholder="{{ __('admin.name_en') }}" />
                                        <input type="text"name="name_ar" class="form-control form-control-solid" placeholder="{{ __('admin.name_ar') }}" />
                                </div>

                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.description_en') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="mb-5">
                                    <textarea name="description_en" class="form-control form-control-solid" rows="3" placeholder="{{ __('admin.description_en') }}"></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.description_ar') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="mb-5">
                                    <textarea name="description_ar" class="form-control form-control-solid" rows="3" placeholder="{{ __('admin.description_ar') }}"></textarea>
                                </div>

                            </div>
                        </div>
                        {{-- <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.admin') }}</label>
                            </div>
                            <div class="col-lg-9">

                                <select id="business-type-select-activity"
                                class="form-select activity form-select-solid"
                                data-hide-search="admin_id" data-placeholder="@lang('admin.admin_id')"
                                name="admin_id" required>
                                @foreach ($admins as $admin)
                                <option value="{{ $admin->id }}">
                                    {{ $admin->name }}</option>
                                @endforeach
                            </select>
                            <!--begin::Input-->
                            </div>
                        </div> --}}
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.category') }}</label>
                            </div>
                            <div class="col-lg-9">
                            <!--begin::Input-->
                            <select id="business-type-select-activity"
                                class="form-select activity form-select-solid"
                                data-hide-search="category_id" data-placeholder="@lang('admin.admin_id')"
                                name="category_id" required>
                                <option value="">{{ __( 'admin.chooose' ) }}</option>
                                @foreach ($categoreis as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->{'name_' . lang()} }}</option>
                                @endforeach
                            </select>

                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.zones') }}</label>
                            </div>
                            <div class="col-lg-9">
                            <!--begin::Input-->
                            <select id="business-type-select-activity"
                                class="form-select activity form-select-solid"
                                data-hide-search="zone_id" data-placeholder="@lang('admin.zones')"
                                name="zone_id" required>
                                <option value="">{{ __( 'admin.chooose' ) }}</option>
                                @foreach ($zones as $zone)
                                <option value="{{ $zone->id }}">
                                    {{ $zone->{'name_' . lang()} }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 ">
                            <label class="input-label" for="exampleFormControlInput1">{{ __('Coordinates') }}<span class="form-label-secondary" data-toggle="tooltip" data-placement="right" data-original-title="{{__('messages.selec_the_map')}}">{{__('messages.select__on_the_map')}}</span></label>
                            <textarea type="text" rows="8" name="coordinates" id="coordinates" class="form-control" readonly></textarea>
                            <div id="map" style="height: 400px;"></div>
                          </div>
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.subscriptions') }}</label>
                            </div>
                            <div class="col-lg-9">
                            <!--begin::Input-->
                            <select id="business-type-select-activity"
                                class="form-select activity form-select-solid"
                                data-hide-search="subscription_id" data-placeholder="@lang('admin.subscriptions')"
                                name="subscription_id" required>
                                <option value="">{{ __( 'admin.chooose' ) }}</option>
                                @foreach ($subscriptions as $subscription)
                                <option value="{{ $subscription->id }}">
                                    {{ $subscription->{'title_' . lang()} }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.upload') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="image-input image-input-outline"
                                data-kt-image-input="true"
                                style="background-image: url(assets/media/avatars/blank.png)">
                                <!--begin::Preview existing Site Logo-->

                                <div class="image-input-wrapper w-250px h-300px"
                                    id="logo_img">
                                </div>

                                <!--end::Preview existing Site Logo-->
                                <!--begin::Label-->
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change"
                                    data-bs-toggle="tooltip"
                                    title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="image"
                                        accept=".png, .jpg, .jpeg" />

                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel"
                                    data-bs-toggle="tooltip"
                                    title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove"
                                    data-bs-toggle="tooltip"
                                    title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>

                            <div class="form-text">{{ __( 'category.allowed_file_types:_png,_jpg,_jpeg.' ) }}</div>
                            </div>
                        </div>



                    </div>
                    <!--end::div hidden-->

            </div>

        </div>

        <!--end::Card body-->
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="reset" class="btn btn-light btn-active-light-primary me-2">تراجع</button>
            <button type="submit" form="create" value="Submit" class="btn btn-primary">حفظ</button>

        </div>
        <!-- END: Form Layout -->
        </form>

    </div>
    <!--end::Content-->
    </div>
    <!--end::Basic info-->
    <script src="{{ asset('assets/admin/js/flatpickr.min.js') }}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUjD7EkftJkwxFvxrF5U2AXO2Wds6Yorw"></script>
<script>
  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: { lat: 0, lng: 0 },
      zoom: 13
    });

    var marker = new google.maps.Marker({
      position: { lat: 0, lng: 0 },
      map: map,
      draggable: true
    });

    google.maps.event.addListener(marker, 'position_changed', function() {
      var lat = marker.getPosition().lat();
      var lng = marker.getPosition().lng();
      $('#coordinates').val(lat + ', ' + lng);
    });
  }

  initMap();
</script>
@endsection
