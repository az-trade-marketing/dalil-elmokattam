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
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">{{ __("admin.edit_store") }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">{{ __("admin.home") }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">{{ __("admin.edit") }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">
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
                                    <input type="text" name="name_en" class="form-control form-control-solid" placeholder="{{ __('admin.name_en') }}" value="{{ $store->name_en }}" />
                                    <input type="text" name="name_ar" class="form-control form-control-solid" placeholder="{{ __('admin.name_ar') }}" value="{{ $store->name_ar }}" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.description_en') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="mb-5">
                                    <textarea name="description_en" class="form-control form-control-solid" rows="3" placeholder="{{ __('admin.description_en') }}">{{ $store->description_en }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.description_ar') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="mb-5">
                                    <textarea name="description_ar" class="form-control form-control-solid" rows="3" placeholder="{{ __('admin.description_ar') }}">{{ $store->description_ar }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.category') }}</label>
                            </div>
                            <div class="col-lg-9">
                                <select id="business-type-select-activity" class="form-select activity form-select-solid" data-hide-search="category_id" data-placeholder="@lang('admin.category')" name="category_id" required>
                                    <option value="">{{ __('admin.choose') }}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $store->category_id ? 'selected' : '' }}>
                                            {{ $category->{'name_' . app()->getLocale()} }}
                                        </option>
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
                                <option value="{{ $zone->id }}" {{ $zone->id  == $store->zone_id ? 'selected' : '' }}>
                                    {{ $zone->{'name_' . lang()} }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 d-none">
                            <label class="input-label" for="exampleFormControlInput1">{{ __('Coordinates') }}<span class="form-label-secondary" data-toggle="tooltip" data-placement="right" data-original-title="{{__('messages.draw_your_zone_on_the_map')}}">{{__('messages.draw_your_zone_on_the_map')}}</span></label>
                            <textarea type="text" rows="8" name="coordinates" id="coordinates" class="form-control" readonly></textarea>
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
                                <option value="{{ $subscription->id }}" {{ $subscription->id  == $store->subscription_id ? 'selected' : '' }}>
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
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ asset('assets/media/avatars/blank.png') }})">
                                    <div class="image-input-wrapper w-250px h-300px" id="logo_img" style="background-image: url('{{ asset($store->image) }}');"></div>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    </label>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                </div>
                                <div class="form-text">{{ __('category.allowed_file_types: png, jpg, jpeg.') }}</div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!--end::Card body-->
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="reset" class="btn btn-light btn-active-light-primary me-2">تراجع</button>
            <button type="submit" form="edit" value="Submit" class="btn btn-primary">حفظ</button>
        </div>
        <!-- END: Form Layout -->
        </form>
    </div>
    <!--end::Content-->
</div>
<!--end::Basic info-->
<script src="{{ asset('assets/admin/js/flatpickr.min.js') }}"></script>
@endsection
