@extends('admin.layout2.app')
@section('content')

    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                        {{ __('admin.subscription') }}</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="index.html" class="text-muted text-hover-primary">{{ __('admin.home') }}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">{{ __('admin.subscription') }}</li>

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
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin::Add user-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_user">
                                    <i
                                        class="ki-duotone ki-plus fs-2"></i>{{ __('admin.add') . ' ' . __('admin.subscription') }}</button>
                                <!--end::Add user-->
                            </div>

                            {{-- modal for adding  --}}
                            <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header" id="kt_modal_add_user_header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bold">{{ __('admin.add') . ' ' . __('admin.category') }}</h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                data-kt-users-modal-action="close">
                                                <i class="ki-duotone ki-cross fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Close-->
                                        </div>
                                        <!--end::Modal header-->
                                        <!--begin::Modal body-->
                                        <div class="modal-body px-5 my-7">
                                            <!--begin::Form-->
                                            <form id="kt_modal_add_user_formm" id="kt_modal_add_user" class="form"
                                                action="#">
                                                @csrf
                                                <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                    id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                    data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                                                    data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                    data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                    data-kt-scroll-offset="300px">
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-6 fv-row">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">{{ __('admin.title_ar') }}</label>
                                                            <input type="text" name="title_ar"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="{{ __('admin.title_ar') }}" />
                                                            <div class="text-danger" id="error-title_ar"></div>
                                                        </div>
                                                        <div class="col-md-6 fv-row">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">{{ __('admin.title_en') }}</label>
                                                            <input type="text" name="title_en"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="{{ __('admin.title_en') }}" />
                                                            <div class="invalid-feedback text-danger" id="error-title_en">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-6 fv-row">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">{{ __('admin.description_ar') }}</label>
                                                            <input type="text" name="description_ar"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="{{ __('admin.description_ar') }}" />
                                                            <div class="text-danger" id="error-description_ar"></div>
                                                        </div>
                                                        <div class="col-md-6 fv-row">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">{{ __('admin.description_en') }}</label>
                                                            <input type="text" name="description_en"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="{{ __('admin.description_en') }}" />
                                                            <div class="invalid-feedback text-danger"
                                                                id="error-description_en">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <label
                                                            class="col-lg-4 col-form-label required fw-bold fs-6">@lang('admin.type')</label>
                                                        <div class=" fv-row fv-plugins-icon-container">
                                                            <select id="business-type-select-activity"
                                                                class="form-select activity form-select-solid"
                                                                data-hide-search="true" data-placeholder="@lang('admin.type')"
                                                                name="type" required>

                                                                <option value="">@lang('admin.type')</option>
                                                                <option value="weekly">@lang('admin.weekly')</option>
                                                                <option value="monthly">@lang('admin.monthly')</option>
                                                                <option value="yearly">@lang('admin.yearly')</option>
                                                            </select>

                                                            <div class="fv-plugins-message-container invalid-feedback">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="fv-row mb-7">
                                                        <label
                                                            class="col-lg-4 col-form-label required fw-bold fs-6">@lang('admin.features')</label>
                                                        <div id="business-tags-container">
                                                            <select id="business-tags-select"
                                                                class="form-select form-select-solid" dir="rtl"
                                                                name="features[]" data-control="select2"
                                                                data-close-on-select="false"
                                                                data-placeholder="@lang('admin.features')"
                                                                data-allow-clear="true" multiple="multiple">

                                                                @foreach ($features as $feature)
                                                                    <option value="{{ $feature->id }}">
                                                                        {{ $feature->name_ar }}
                                                                    </option>
                                                                @endforeach


                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-6 fv-row">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">{{ __('admin.price') }}</label>
                                                            <input type="number" name="price"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="{{ __('admin.price') }}" />
                                                            <div class="text-danger" id="error-price"></div>
                                                        </div>
                                                        <div class="col-md-6 fv-row">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">{{ __('admin.duration') }}</label>
                                                            <input type="number" name="duration"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="{{ __('admin.duration') }}" />
                                                            <div class="invalid-feedback text-danger" id="error-duration">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center pt-10">
                                                    <button type="reset" class="btn btn-light me-3"
                                                        data-kt-users-modal-action="cancel">{{ __('admin.discard') }}</button>
                                                    <button type="button" id="submitButton" class="btn btn-primary"
                                                        data-kt-users-modal-action="submit">
                                                        <span class="indicator-label">{{ __('admin.save') }}</span>
                                                        <span class="indicator-progress d-none">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </form>

                                            <!--end::Form-->
                                        </div>

                                        <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                </div>
                                <!--end::Modal dialog-->
                            </div>
                            {{-- end modalafor add --}}

                            {{-- modal for edit --}}
                            <div class="modal fade" id="kt_modal_edit_user" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header" id="kt_modal_edit_user_header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bold">{{ __('admin.edit') . ' ' . __('admin.category') }}</h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                data-kt-users-modal-action="close">
                                                <i class="ki-duotone ki-cross fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Close-->
                                        </div>
                                        <!--end::Modal header-->
                                        <!--begin::Modal body-->
                                        <div class="modal-body px-5 my-7">
                                            <!--begin::Form-->
                                            <form id="kt_modal_edit_user_form" class="form" action="#">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" id="editId">
                                                <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                    id="kt_modal_edit_user_scroll" data-kt-scroll="true"
                                                    data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                                                    data-kt-scroll-dependencies="#kt_modal_edit_user_header"
                                                    data-kt-scroll-wrappers="#kt_modal_edit_user_scroll"
                                                    data-kt-scroll-offset="300px">
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-6 fv-row">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">{{ __('admin.title_ar') }}</label>
                                                            <input type="text" name="title_ar" id="editNameAr"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="{{ __('admin.title_ar') }}" />
                                                            <div class="invalid-feedback text-danger"
                                                                id="error-edit-title_ar" style="display: none;"></div>
                                                        </div>
                                                        <div class="col-md-6 fv-row">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">{{ __('admin.title_en') }}</label>
                                                            <input type="text" name="title_en" id="editNameEn"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="{{ __('admin.title_en') }}" />
                                                            <div class="invalid-feedback text-danger"
                                                                id="error-edit-title_en" style="display: none;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-6 fv-row">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">{{ __('admin.description_ar') }}</label>
                                                            <input type="text" name="description_ar"
                                                                id="editDescriptionAr"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="{{ __('admin.description_ar') }}" />
                                                            <div class="invalid-feedback text-danger"
                                                                id="error-edit-description_ar" style="display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 fv-row">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">{{ __('admin.description_en') }}</label>
                                                            <input type="text" name="description_en"
                                                                id="editDescriptionEn"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="{{ __('admin.description_en') }}" />
                                                            <div class="invalid-feedback text-danger"
                                                                id="error-edit-description_en" style="display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <label
                                                            class="col-lg-4 col-form-label required fw-bold fs-6">@lang('admin.type')</label>
                                                        <div class="fv-row fv-plugins-icon-container">
                                                            <select id="editTypeSelect"
                                                                class="form-select form-select-solid"
                                                                data-hide-search="true"
                                                                data-placeholder="@lang('admin.type')" name="type"
                                                                required>
                                                                <option value="">@lang('admin.type')</option>
                                                                <option value="weekly">@lang('admin.weekly')</option>
                                                                <option value="monthly">@lang('admin.monthly')</option>
                                                                <option value="yearly">@lang('admin.yearly')</option>
                                                            </select>
                                                            <div class="fv-plugins-message-container invalid-feedback">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <label
                                                            class="col-lg-4 col-form-label required fw-bold fs-6">@lang('admin.features')</label>
                                                        <div id="editFeaturesContainer">
                                                            <select id="editFeaturesSelect"
                                                                class="form-select form-select-solid" dir="rtl"
                                                                name="features[]" data-control="select2"
                                                                data-close-on-select="false"
                                                                data-placeholder="@lang('admin.features')"
                                                                data-allow-clear="true" multiple="multiple">
                                                                @foreach ($features as $feature)
                                                                    <option value="{{ $feature->id }}">
                                                                        {{ $feature->name_ar}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-6 fv-row">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">{{ __('admin.price') }}</label>
                                                            <input type="number" name="price" id="editPrice"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="{{ __('admin.price') }}" />
                                                            <div class="invalid-feedback text-danger"
                                                                id="error-edit-price" style="display: none;"></div>
                                                        </div>
                                                        <div class="col-md-6 fv-row">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">{{ __('admin.duration') }}</label>
                                                            <input type="number" name="duration" id="editDuration"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="{{ __('admin.duration') }}" />
                                                            <div class="invalid-feedback text-danger"
                                                                id="error-edit-duration" style="display: none;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center pt-10">
                                                    <button type="reset" class="btn btn-light me-3"
                                                        data-kt-users-modal-action="cancel">{{ __('admin.discard') }}</button>
                                                    <button type="button" id="editSubmitButton" class="btn btn-primary"
                                                        data-kt-users-modal-action="submit">
                                                        <span class="indicator-label">{{ __('admin.save') }}</span>
                                                        <span class="indicator-progress d-none">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                </div>
                                <!--end::Modal dialog-->
                            </div>

                            {{-- end modal for edit --}}
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <table class="table mb-0 data-table fs--1" id="myTable">
                            <thead class="bg-200 text-900">
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('admin.title_ar') }}</th>
                                    <th>{{ __('admin.title_en') }}</th>
                                    <th>{{ __('admin.description_ar') }}</th>
                                    <th>{{ __('admin.description_en') }}</th>
                                    <th>{{ __('admin.type') }}</th>
                                    <th>{{ __('admin.price') }}</th>
                                    <th>{{ __('admin.duration') }}</th>
                                    <th>{{ __('admin.action') }}</th>
                                </tr>
                            </thead>
                            <tbody class="list country_table">

                            </tbody>
                        </table>
                        <!--end::Table-->
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

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            get_data();

            function get_data() {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'GET',
                    dataType: 'json',
                    url: "/admin/subscription-get-data",
                    success: function(response) {
                        $('.country_table').html('');
                        $('#myTable').DataTable().destroy();
                        $('#myTable tbody').empty();
                        $.each(response, function(key, item) {
                            var title_ar = item.title_ar ?? '';
                            var title_en = item.title_en ?? '';
                            var description_ar = item.description_ar ?? '';
                            var description_en = item.description_en ?? '';
                            var type = item.type ?? '';
                            var price = item.price ?? '';
                            var duration = item.duration ?? '';

                            $('.country_table').append(`
                                <tr>
                                    <td class="text-center pt-4">
                                        <h6>#${item.id}</h6>
                                    </td>
                                    <td class="align-middle name text-nowrap">
                                        <h6 class="m-0 p-0">${title_ar}</h6>
                                    </td>
                                    <td class="align-middle name text-nowrap">
                                        <h6 class="m-0 p-0">${title_en}</h6>
                                    </td>
                                    <td class="align-middle description_ar text-nowrap">
                                        <h6 class="m-0 p-0">${description_ar}</h6>
                                    </td>
                                    <td class="align-middle description_en text-nowrap">
                                        <h6 class="m-0 p-0">${description_en}</h6>
                                    </td>
                                    <td class="align-middle type text-nowrap">
                                        <h6 class="m-0 p-0">${type}</h6>
                                    </td>

                                    <td class="align-middle price text-nowrap">
                                        <h6 class="m-0 p-0">${price}</h6>
                                    </td>
                                    <td class="align-middle duration text-nowrap">
                                        <h6 class="m-0 p-0">${duration}</h6>
                                    </td>
                                    <td class="min-w-100 pt-3">
                                        <div class="d-flex">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-active-light-primary btn-flex btn-center btn-sm editButton me-2" data-id="${item.id}" data-title_ar="${item.title_ar}" data-title_en="${item.title_en}" data-description_ar="${item.description_ar}" data-description_en="${item.description_en}" data-type="${item.type}" data-features="${item.features}" data-price="${item.price}" data-duration="${item.duration}">{{ __('admin.edit') }}</a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-active-light-primary btn-flex btn-center btn-sm deleteButton" data-id="${item.id}" value="${item.id}">{{ __('admin.delete') }}</a>
                                        </div>
                                    </td>
                                </tr>
                            `);
                        });

                        $('#myTable').DataTable();
                    }
                });
            }

            $(document).on('click', '.editButton', function() {
                var id = $(this).data('id');
                var titleAr = $(this).data('title_ar');
                var titleEn = $(this).data('title_en');
                var descriptionAr = $(this).data('description_ar');
                var descriptionEn = $(this).data('description_en');
                var type = $(this).data('type');
                var features = $(this).data('features');
                var price = $(this).data('price');
                var duration = $(this).data('duration');

                $('#editId').val(id);
                $('#editNameAr').val(titleAr);
                $('#editNameEn').val(titleEn);
                $('#editDescriptionAr').val(descriptionAr);
                $('#editDescriptionEn').val(descriptionEn);
                $('#editTypeSelect').val(type).trigger('change');
                $('#editFeaturesSelect').val(features).trigger('change');
                $('#editPrice').val(price);
                $('#editDuration').val(duration);

                $('#kt_modal_edit_user').modal('show');
            });

            $('#editSubmitButton').on('click', function(e) {
                e.preventDefault();

                var formData = new FormData($('#kt_modal_edit_user_form')[0]);
                var id = $('#editId').val();

                $.ajax({
                    url: '/admin/subscription/' + id,
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#kt_modal_edit_user').modal('hide');
                        if (response.message == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: "{{ __('admin.updatedSuccessfully') }}",
                                text: '{{ __('admin.updatemes') }}',
                                timer: 1500,
                                showConfirmButton: false
                            });
                            get_data();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message,
                            });
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            for (var field in errors) {
                                $('#error-edit-' + field).text(errors[field][0]).show();
                            }
                        } else {
                            alert('An error occurred. Please try again.');
                        }
                    }
                });
            });


            $('#submitButton').on('click', function() {
                var $button = $(this);
                var $label = $button.find('.indicator-label');
                var formData = new FormData($('#kt_modal_add_user_formm')[0]);

                $label.addClass('d-none');

                // Clear previous error messages
                $('.invalid-feedback').text('');

                $.ajax({
                    url: '/admin/subscription',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $label.removeClass('d-none');
                        if (response.message == 'success') {
                            $('#kt_modal_add_user').modal('hide');

                            Swal.fire({
                                icon: 'success',
                                title: "{{ __('admin.addedSuccessfully') }}",
                                text: '{{ __('admin.updatemes') }}',
                                timer: 1500,
                                showConfirmButton: false
                            });
                            get_data();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message,
                            });
                        }
                        get_data();
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

                        $label.removeClass('d-none');
                    }
                });
            });

            $(document).on('click', '.deleteButton', function() {
                var item_id = $(this).data('id');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'get',
                    dataType: 'text',
                    url: "/admin/subscription/" + item_id,
                    success: function(response) {
                        try {
                            var jsonResponse = JSON.parse(response);

                            if (jsonResponse.status == 404) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Sorry',
                                    text: jsonResponse.message,
                                });
                            } else {
                                const swalWithBootstrapButtons = Swal.mixin({
                                    customClass: {
                                        confirmButton: 'btn btn-primary',
                                        cancelButton: 'btn btn-danger'
                                    },
                                    buttonsStyling: false
                                });

                                swalWithBootstrapButtons.fire({
                                    title: '{{ __('admin.isDelete') }} ' + jsonResponse
                                        .title_en + ' !!?',
                                    text: '{{ __('admin.revet') }}',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: '{{ __('admin.yes') }}',
                                    cancelButtonText: '{{ __('admin.no') }}',
                                    reverseButtons: true
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        delete_item(jsonResponse.id);
                                        swalWithBootstrapButtons.fire(
                                            '{{ __('admin.delete') }}',
                                            '{{ __('admin.fileDeleted') }}',
                                            'success'
                                        );
                                    } else if (result.dismiss === Swal.DismissReason
                                        .cancel) {
                                        swalWithBootstrapButtons.fire(
                                            '{{ __('admin.cancelled') }}',
                                            '{{ __('admin.fileSave') }}',
                                            'error'
                                        );
                                    }
                                });
                            }
                        } catch (e) {
                            console.error('Parsing Error:',
                                e); // التحقق من وجود أخطاء في التحليل
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error); // التحقق من وجود أخطاء
                    }
                });
            });

            function delete_item(item_id) {
                console.log('Deleting item ID:', item_id); // للتحقق من ID العنصر المراد حذفه

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'delete',
                    dataType: 'text', // تغيير dataType إلى text
                    url: "/admin/subscription/" + item_id,
                    data: {
                        id: item_id
                    },
                    success: function(response) {
                        try {
                            var jsonResponse = JSON.parse(response); // تحليل البيانات يدوياً
                            console.log('Delete Response:', jsonResponse); // تحقق من استجابة الحذف
                            get_data();
                        } catch (e) {
                            console.error('Parsing Error:', e); // التحقق من وجود أخطاء في التحليل
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Delete Error:', error); // التحقق من وجود أخطاء في الحذف
                    }
                });
            }


        });
    </script>
@endsection
@endsection
