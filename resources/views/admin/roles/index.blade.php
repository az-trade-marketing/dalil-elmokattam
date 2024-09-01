@extends("admin.layout2.app")
@section("content")

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">{{ __("admin.roles") }}</h1>
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
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            @can('roles Create')
                            <!--begin::Add user-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_role">
                            <i class="ki-duotone ki-plus fs-2"></i>{{ __("admin.add") . ' '.__("admin.role") }}</button>
                            <!--end::Add user-->
                            @endcan
                        </div>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!--begin::Row-->
                            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
                                @if (count($results) > 0)
                                    @foreach ($results as $result)
                                        <!--begin::Col-->
                                        <div class="col-md-4">
                                            <!--begin::Card-->
                                            <div class="card card-flush h-md-100">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <!--begin::Card title-->
                                                    <div class="card-title">
                                                        <h2>{{ app()->getLocale() == 'ar' ? $result->name_ar : $result->name_en }}</h2>
                                                    </div>
                                                    <!--end::Card title-->
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body pt-1">
                                                    <!--begin::Users-->
                                                    <div class="fw-bold text-gray-600 mb-5"> {{__("admin.Total_users_with_this_role"). " ". @$result->admins?->count() }}</div>
                                                    <!--end::Users-->
                                                    <!--begin::Permissions-->
                                                    <div class="d-flex flex-column text-gray-600">
                                                        @if ($result->permissions)
                                                            @foreach ($result->permissions?->take(5) as $permission)
                                                                <div class="d-flex align-items-center py-2">
                                                                    <span class="bullet bg-primary me-3"></span>{{ app()->getLocale() == 'ar' ? $permission->name_ar : $permission->name_en }}
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <!--end::Permissions-->
                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Card footer-->
                                                <div class="card-footer flex-wrap pt-0">
                                                    <a href="apps/user-management/roles/view.html" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                                    @can('roles Update')
                                                    <button type="button" class="btn btn-primary btn-active-light-primary my-1 edit-role-btn" data-id="{{ $result->id }}">Edit</button>
                                                    @endcan
                                                    <button class="btn btn-danger btn-active-light-primary my-1 deleteButton" data-id="{{ $result->id }}">Delete</button>

                                                </div>
                                                <!--end::Card footer-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                    @endforeach
                                @endif
                                <!--begin::Add new card-->
                                <div class="ol-md-4">
                                    <!--begin::Card-->
                                    <div class="card h-md-100">
                                        <!--begin::Card body-->
                                        <div class="card-body d-flex flex-center">
                                            <!--begin::Button-->
                                            <button type="button" class="btn btn-clear d-flex flex-column flex-center" data-bs-toggle="modal" data-bs-target="#kt_modal_add_role">
                                                <!--begin::Illustration-->
                                                <img src="assets/media/illustrations/sketchy-1/4.png" alt="" class="mw-100 mh-150px mb-7" />
                                                <!--end::Illustration-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-3 text-gray-600 text-hover-primary">Add New Role</div>
                                                <!--end::Label-->
                                            </button>
                                            <!--begin::Button-->
                                        </div>
                                        <!--begin::Card body-->
                                    </div>
                                    <!--begin::Card-->
                                </div>
                                <!--begin::Add new card-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Modals-->
                            <!--begin::Modal - Add role-->
                            <div class="modal fade" id="kt_modal_add_role" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-750px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bold">{{ __("admin.add") . ' '. __("admin.role") }}</h2>
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
                                        <div class="modal-body scroll-y mx-lg-5 my-7">
                                            <!--begin::Form-->
                                            <form id="kt_modal_add_user_formm" class="form" action="#">
                                                @csrf
                                                <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_role_header" data-kt-scroll-wrappers="#kt_modal_add_role_scroll" data-kt-scroll-offset="300px">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <div class="row g-9 mb-8">
                                                            <!--begin::Col-->
                                                            <div class="col-md-6 fv-row">
                                                                <label class="required fs-6 fw-semibold mb-2">{{ __("admin.name_ar") }}</label>
                                                                <input type="text" class="form-control form-control-solid" placeholder="{{ __("admin.name_ar") }}" name="name_ar" />
                                                                <div class="text-danger" id="error-name_ar"></div>
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="col-md-6 fv-row">
                                                                <label class="required fs-6 fw-semibold mb-2">{{ __("admin.name_en") }}</label>
                                                                <input type="text" class="form-control form-control-solid" placeholder="{{ __("admin.name_en") }}" name="name_en" />
                                                                <div class="text-danger" id="error-name_en"></div>
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Permissions-->
                                                    <div class="fv-row">
                                                        <!--begin::Label-->
                                                        <label class="fs-5 fw-bold form-label mb-2">{{ __("admin.permissions") }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Table wrapper-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle table-row-dashed fs-6 gy-5">
                                                                <!--begin::Table body-->
                                                                <tbody class="text-gray-600 fw-semibold">
                                                                    <!--begin::Table row-->
                                                                    <tr>
                                                                        <td class="text-gray-800">Administrator Access
                                                                        <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Allows a full access to the system">
                                                                            <i class="ki-duotone ki-information fs-7">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                                <span class="path3"></span>
                                                                            </i>
                                                                        </span></td>
                                                                        <td>
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-9">
                                                                                <input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all" />
                                                                                <span class="form-check-label" for="kt_roles_select_all">{{ __("admin.select_all") }}</span>
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                        </td>
                                                                    </tr>
                                                                    <!--end::Table row-->
                                                                    @if (count($groupedPermissions) > 0 )
                                                                        @foreach ($groupedPermissions as $catName => $groupedPermission)
                                                                            <!--begin::Table row-->
                                                                            <tr>
                                                                                <!--begin::Label-->
                                                                                <td class="text-gray-800">{{ $catName }}</td>
                                                                                <!--end::Label-->
                                                                                <!--begin::Options-->
                                                                                <td>
                                                                                    <!--begin::Wrapper-->
                                                                                    <div class="d-flex">
                                                                                        @foreach ($groupedPermission as $permission)
                                                                                            <!--begin::Checkbox-->
                                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                <input class="form-check-input permission-checkbox" type="checkbox" value="{{ $permission->id }}" name="user_management_read" />
                                                                                                <span class="form-check-label">{{ app()->getLocale() === 'ar' ? $permission->name_ar : $permission->name_en }}</span>
                                                                                            </label>
                                                                                            <!--end::Checkbox-->
                                                                                        @endforeach
                                                                                    </div>
                                                                                    <!--end::Wrapper-->
                                                                                </td>
                                                                                <!--end::Options-->
                                                                            </tr>
                                                                            <!--end::Table row-->
                                                                        @endforeach
                                                                    @endif

                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table wrapper-->
                                                    </div>
                                                    <!--end::Permissions-->
                                                </div>
                                                <!--end::Scroll-->
                                                <!--begin::Actions-->
                                                <div class="text-center pt-10">
                                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">{{ __("admin.discard") }}</button>
                                                    <button type="button" id="submitButton" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                        <span class="indicator-label">{{ __("admin.save") }}</span>
                                                        <span class="indicator-progress d-none">Please wait...
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                        </span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                </div>
                                <!--end::Modal dialog-->
                            </div>
                            <!--end::Modal - Add role-->
                            <!--begin::Modal - Update role-->
                            <!-- Edit Role Modal -->
                            <div class="modal fade" id="kt_modal_edit_user" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="fw-bolder">{{ __('admin.edit') . ' '.__("admin.role") }}</h2>
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                            <form id="kt_modal_edit_user_form" class="form">
                                                <input type="hidden" id="editId" name="id" value="">
                                                <input type="hidden" name="_method" value="PUT">
                                                <!-- Role Name Input -->
                                                <div class="d-flex flex-column mb-7 fv-row">
                                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                        <span class="required">{{ __('admin.name_ar') }}</span>
                                                    </label>
                                                    <input type="text" class="form-control form-control-solid" placeholder="{{ __('admin.name_ar') }}" name="name_ar" id="editNameAr" value=""/>
                                                    <div class="invalid-feedback" id="error-name"></div>
                                                </div>

                                                <div class="d-flex flex-column mb-7 fv-row">
                                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                        <span class="required">{{ __('admin.name_en') }}</span>
                                                    </label>
                                                    <input type="text" class="form-control form-control-solid" placeholder="{{ __('admin.name_en') }}" name="name_en" id="editNameEn" value=""/>
                                                    <div class="invalid-feedback" id="error-name"></div>
                                                </div>

                                                <!-- Permissions Checkboxes -->
                                                <div class="d-flex flex-column mb-7 fv-row">
                                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                        <span>{{ __('admin.permissions') }}</span>
                                                    </label>
                                                    <div class="table-responsive">
                                                        <!--begin::Table-->
                                                        <table class="table align-middle table-row-dashed fs-6 gy-5">
                                                            <!--begin::Table body-->
                                                            <tbody class="text-gray-600 fw-semibold">
                                                                <!--begin::Table row-->
                                                                <tr>
                                                                    <td class="text-gray-800">Access
                                                                    <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Allows a full access to the system">
                                                                        <i class="ki-duotone ki-information fs-7">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                            <span class="path3"></span>
                                                                        </i>
                                                                    </span></td>
                                                                    <td>
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-9">
                                                                            <input class="form-check-input appper" type="checkbox" value="" id="kt_roles_select_all_edit" />
                                                                            <span class="form-check-label" for="kt_roles_select_all_edit">{{ __("admin.select_all") }}</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                    </td>
                                                                </tr>
                                                                <!--end::Table row-->
                                                                @if (count($groupedPermissions) > 0 )
                                                                    @foreach ($groupedPermissions as $catName => $groupedPermission)
                                                                        <!--begin::Table row-->
                                                                        <tr>
                                                                            <!--begin::Label-->
                                                                            <td class="text-gray-800">{{ $catName }}</td>
                                                                            <!--end::Label-->
                                                                            <!--begin::Options-->
                                                                            <td>
                                                                                <!--begin::Wrapper-->
                                                                                <div class="d-flex">
                                                                                    @foreach ($groupedPermission as $permission)
                                                                                        <!--begin::Checkbox-->
                                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                            <input class="form-check-input permission-checkbox" type="checkbox" value="{{ $permission->id }}" name="permissions[]" />
                                                                                            <span class="form-check-label">{{ app()->getLocale() === 'ar' ? $permission->name_ar : $permission->name_en }}</span>
                                                                                        </label>
                                                                                        <!--end::Checkbox-->
                                                                                    @endforeach
                                                                                </div>
                                                                                <!--end::Wrapper-->
                                                                            </td>
                                                                            <!--end::Options-->
                                                                        </tr>
                                                                        <!--end::Table row-->
                                                                    @endforeach
                                                                @endif

                                                            </tbody>
                                                            <!--end::Table body-->
                                                        </table>
                                                        <!--end::Table-->
                                                    </div>
                                                    <div class="invalid-feedback" id="error-permissions"></div>
                                                </div>

                                                <!-- Buttons -->
                                                <div class="text-center pt-15">
                                                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">{{ __('admin.discard') }}</button>
                                                    <button type="submit" id="editSubmitButton" class="btn btn-primary">
                                                        <span class="indicator-label">{{ __('admin.save') }}</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Modal - Update role-->
                            <!--end::Modals-->
                        </div>
                        <!--end::Content container-->
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.editButton', function() {
                var id = $(this).data('id');
                var nameAr =    $(this).data('name_ar');
                var nameEn = $(this).data('name_en');
                var catNameAr = $(this).data('cat_ar');
                var catNameEn = $(this).data('cat_en');
                $('#editId').val(id);
                $('#editNameAr').val(nameAr);
                $('#editNameEn').val(nameEn);
                $('#editCatNameAr').val(catNameAr);
                $('#ediCatNameEn').val(catNameEn);
                $('#kt_modal_edit_user').modal('show');
            });

            // تعريف الحدث عند الضغط على زر التعديل
            $(document).on('click', '.edit-role-btn', function() {
                var id = $(this).data('id');
                console.log(id);
                $.ajax({
                    url: '/admin/roles/' + id,
                    method: 'GET',
                    success: function(response) {
                        var roleData = {
                            id: response.id,
                            name_ar: response.name_ar,
                            name_en: response.name_en,
                            allp: response.allP,
                            permissions: response.permissions
                        };

                        openEditModal(roleData);
                    },
                    error: function(xhr) {
                        console.log('Failed to retrieve role data.');
                    }
                });
            });

            // دالة فتح النموذج للتعديل
            function openEditModal(role) {
                $('#editId').val(role.id);
                $('#editNameEn').val(role.name_en);
                $('#editNameAr').val(role.name_ar);

                $('.permission-checkbox').prop('checked', false);
                if (role.allp == true) {
                    $('.appper').prop('checked', true);
                }
                role.permissions.forEach(function(permission) {
                    console.log(permission.id);
                    $('.permission-checkbox[value="' + permission.id + '"]').prop('checked', true);
                });

                $('#kt_modal_edit_user').modal('show');
            }

            // Submit button handler for editing the role
            $('#editSubmitButton').on('click', function(e) {
                e.preventDefault();

                var formData = new FormData($('#kt_modal_edit_user_form')[0]);
                var id = $('#editId').val();

                // Collect selected permissions
                let selectedPermissions = [];
                $('.permission-checkbox:checked').each(function() {
                    selectedPermissions.push($(this).val());
                });

                // Append selected permissions to formData
                formData.append('selected_permissions', JSON.stringify(selectedPermissions));

                $.ajax({
                    url: '/admin/roles/' + id,
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
                            }).then(() => {
                                window.location.reload(); // Reload the page after showing the success message
                            });
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

                // جمع القيم المحددة من الـ checkboxes
                let selectedPermissions = [];
                $('.permission-checkbox:checked').each(function() {
                    selectedPermissions.push($(this).val());
                });

                // إضافة القيم المحددة إلى formData
                formData.append('selected_permissions', selectedPermissions.join(','));

                $label.addClass('d-none');

                // Clear previous error messages
                $('.invalid-feedback').text('');

                $.ajax({
                    url: '/admin/roles',
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
                            $('#kt_modal_add_role').modal('hide');

                            Swal.fire({
                                icon: 'success',
                                title: "{{ __('admin.addedSuccessfully') }}",
                                text: '{{ __('admin.updatemes') }}',
                                timer: 1500,
                                showConfirmButton: false
                            }).then(() => {
                                window.location.reload(); // إعادة تحميل الصفحة بعد عرض الرسالة
                            });
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
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'get',
                    dataType: 'text',
                    url: "/admin/roles/" + item_id,
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
                            console.error('Parsing Error:', e); // التحقق من وجود أخطاء في التحليل
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
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'delete',
                    dataType: 'text', // تغيير dataType إلى text
                    url: "/admin/roles/" + item_id,
                    data: {
                        id: item_id
                    },
                    success: function(response) {
                        try {
                            var jsonResponse = JSON.parse(response); // تحليل البيانات يدوياً
                            location.reload();
                        } catch (e) {
                            console.error('Parsing Error:', e); // التحقق من وجود أخطاء في التحليل
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Delete Error:', error); // التحقق من وجود أخطاء في الحذف
                    }
                });
            }

            // اضف مستمع للأحداث هنا
            $('#kt_roles_select_all').on('change', function() {
                var isChecked = $(this).is(':checked');
                $('.permission-checkbox').prop('checked', isChecked);
            });

            // اضف مستمع للأحداث هنا
            $('#kt_roles_select_all_edit').on('change', function() {
                var isChecked = $(this).is(':checked');
                $('.permission-checkbox').prop('checked', isChecked);
            });

        });
    </script>


@endsection
@endsection
