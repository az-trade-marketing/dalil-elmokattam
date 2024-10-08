@extends("admin.layout2.app")
@section("content")

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">{{ __("admin.features") }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">{{ __("admin.home") }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">{{ __("admin.features") }}</li>

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
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                            <i class="ki-duotone ki-plus fs-2"></i>{{ __("admin.add") . ' '.__("admin.features") }}</button>
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
                                        <h2 class="fw-bold">{{  __("admin.add").' '. __("admin.features") }}</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
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
                                        <form id="kt_modal_add_user_formm" id="kt_modal_add_user" class="form" action="#">
                                            @csrf
                                            <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-semibold fs-6 mb-2">{{ __("admin.name_ar") }}</label>
                                                    <input type="text" name="name_ar"  class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{ __("admin.name_ar") }}" />
                                                    <div class="text-danger" id="error-name_ar"></div>
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-semibold fs-6 mb-2">{{ __("admin.name_en") }}</label>
                                                    <input type="text" name="name_en" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{ __("admin.name_en") }}" />
                                                    <div class="invalid-feedback text-danger" id="error-name_en"></div>
                                                </div>
                                                <div class="row g-9 mb-8">

                                                    <select id="business-type-select-activity"
                                                        class="form-select activity form-select-solid"
                                                        data-hide-search="true" data-placeholder="@lang('admin.type')"
                                                        name="type" required>
                                                        <option value="">@lang('admin.type')</option>
                                                        <option value="image">@lang('admin.image')</option>
                                                        <option value="multiImage">@lang('admin.multiImage')</option>
                                                        <option value="vidio">@lang('admin.video')</option>
                                                        <option value="text">@lang('admin.text')</option>
                                                    </select>

                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center pt-10">
                                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">{{ __("admin.discard") }}</button>
                                                <button type="button" id="submitButton" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">{{ __("admin.save") }}</span>
                                                    <span class="indicator-progress d-none">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
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
                                            <h2 class="fw-bold">{{ __("admin.edit").' '. __("admin.features") }}</h2>
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                        <!--end::Modal header-->
                                        <!--begin::Modal body-->
                                        <div class="modal-body px-5 my-7">
                                            <!--begin::Form-->
                                            <form id="kt_modal_edit_user_form" class="form" action="#">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" id="editId">
                                                <div class="d-flex flex-column scroll-y px-5 px-lg-10">
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">{{ __("admin.name_ar") }}</label>
                                                        <input type="text" name="name_ar" id="editNameAr" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{ __("admin.name_ar") }}" />
                                                        <div class="invalid-feedback text-danger" id="error-edit-name_ar" style="display: none;"></div>
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">{{ __("admin.name_en") }}</label>
                                                        <input type="text" name="name_en" id="editNameEn" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{ __("admin.name_en") }}" />
                                                        <div class="invalid-feedback text-danger" id="error-edit-name_en" style="display: none;"></div>
                                                    </div>
                                                    <select id="editTypeSelect" class="form-select form-select-solid"
                                                    data-hide-search="true" data-placeholder="@lang('admin.type')"
                                                    name="type" required>
                                                    <option value="">@lang('admin.type')</option>
                                                        <option value="image">@lang('admin.image')</option>
                                                        <option value="multiImage">@lang('admin.multiImage')</option>
                                                        <option value="video">@lang('admin.video')</option>
                                                        <option value="text">@lang('admin.text')</option>
                                                </select>
                                                </div>
                                                <div class="text-center pt-10">
                                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">{{ __("admin.discard") }}</button>
                                                    <button type="button" id="editSubmitButton" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                        <span class="indicator-label">{{ __("admin.save") }}</span>
                                                        <span class="indicator-progress d-none">Please wait...
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
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
                            <th>{{__('admin.name_ar')}}</th>
                            <th>{{__('admin.name_en')}}</th>
                            <th>{{ __('admin.type') }}</th>
                            <th>{{__('admin.action')}}</th>

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

@section("js")
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    $(document).ready(function() {
    get_data();

    function get_data() {
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'GET',
            dataType: 'json',
            url: "/admin/features-get-data",
            success: function(response) {
                $('.country_table').html('');
                $('#myTable').DataTable().destroy();
                $('#myTable tbody').empty();

                $.each(response, function(key, item) {
                    var name_ar = item.name_ar ?? '';
                    var name_en = item.name_en ?? '';
                    var type = item.type ?? '';

                    $('.country_table').append('<tr>\
                        <td class="text-center pt-4">\
                            <h6>#' + item.id + '</h6>\
                        </td>\
                        <td class="align-middle name text-nowrap">\
                            <h6 class="m-0 p-0">' + name_ar + '</h6>\
                        </td>\
                        <td class="align-middle name text-nowrap">\
                            <h6 class="m-0 p-0">' + name_en + '</h6>\
                        </td>\
                        <td class="align-middle type text-nowrap">\
                            <h6 class="m-0 p-0">' + type + '</h6>\
                        </td>\
                        <td class="min-w-100 pt-3">\
                            <div class="d-flex">\
                                <a href="javascript:void(0);" class="btn btn-primary btn-active-light-primary btn-flex btn-center btn-sm editButton me-2" data-id="' + item.id + '" data-name_ar="' + item.name_ar + '" data-name_en="' + item.name_en + '" data-type="' + item.type + '">{{ __("admin.edit") }}</a>\
                                <a href="javascript:void(0);" class="btn btn-danger btn-active-light-primary btn-flex btn-center btn-sm deleteButton" data-id="' + item.id + '" value="' + item.id + '">{{ __("admin.delete") }}</a>\
                            </div>\
                        </td>\
                    </tr>');
                });

                let table = new DataTable('#myTable');
            }
        });
    }

    $(document).on('click', '.editButton', function() {
        var id = $(this).data('id');
        var nameAr = $(this).data('name_ar');
        var nameEn = $(this).data('name_en');
        var type = $(this).data('type');

        console.log('Edit button clicked');
        console.log('ID:', id);
        console.log('Name AR:', nameAr);
        console.log('Name EN:', nameEn);
        console.log('Type:', type);

        $('#editId').val(id);
        $('#editNameAr').val(nameAr);
        $('#editNameEn').val(nameEn);
        $('#editTypeSelect').val(type).trigger('change');

        $('#kt_modal_edit_user').modal('show');
    });

    $('#editSubmitButton').on('click', function(e) {
        e.preventDefault();

        var formData = new FormData($('#kt_modal_edit_user_form')[0]);
        var id = $('#editId').val();

        $.ajax({
            url: '/admin/features/' + id,
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
                        title: "{{ __("admin.updatedSuccessfully") }}",
                        text: '{{ __("admin.updatemes") }}',
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
            url: '/admin/features',
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
                        title: "{{ __("admin.addedSuccessfully") }}",
                        text: '{{ __("admin.updatemes") }}',
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
            }
        });
    });

    $(document).on('click', '.deleteButton', function() {
        var item_id = $(this).data('id');

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'get',
            dataType: 'text',
            url: "/admin/features/" + item_id,
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
                            title: '{{__('admin.isDelete')}} ' + jsonResponse.name_en + ' !!?',
                            text: '{{__('admin.revet')}}',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: '{{__('admin.yes')}}',
                            cancelButtonText: '{{__('admin.no')}}',
                            reverseButtons: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                delete_item(jsonResponse.id);
                                swalWithBootstrapButtons.fire(
                                    '{{__('admin.delete')}}',
                                    '{{__('admin.fileDeleted')}}',
                                    'success'
                                );
                            } else if (result.dismiss === Swal.DismissReason.cancel) {
                                swalWithBootstrapButtons.fire(
                                    '{{__('admin.cancelled')}}',
                                    '{{__('admin.fileSave')}}',
                                    'error'
                                );
                            }
                        });
                    }
                } catch (e) {
                    console.error('Parsing Error:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    });

    $(document).on('click', '.deleteButton', function() {
        var id = $(this).data('id');
        if (confirm('Are you sure you want to delete this feature?')) {
            $.ajax({
                url: '/admin/features/' + id,
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    alert('Category deleted successfully!');
                    get_data();
                },
                error: function(xhr) {
                    alert('An error occurred. Please try again.');
                }
            });
        }
    });
});

    </script>


@endsection
@endsection
