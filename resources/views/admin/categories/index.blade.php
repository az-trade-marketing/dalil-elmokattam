@extends("admin.layout2.app")
@section("content")

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">{{ __("admin.categories") }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">{{ __("admin.home") }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">{{ __("admin.categories") }}</li>

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
                            @can("categories Create")
                            <!--begin::Add user-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                            <i class="ki-duotone ki-plus fs-2"></i>{{ __("admin.add") . ' '.__("admin.category") }}</button>
                            <!--end::Add user-->
                            @endcan
                        </div>
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                            <div class="fw-bold me-5">
                            <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                            <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
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
                                        <h2 class="fw-bold">{{  __("admin.add").' '. __("admin.category") }}</h2>
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
                                        <form id="kt_modal_add_user_form" class="form" action="#">
                                            @csrf
                                            <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-semibold fs-6 mb-2">{{ __("admin.name_ar") }} </label>
                                                    <input type="text" name="name_ar" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{ __("admin.name_ar") }} " />
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-semibold fs-6 mb-2">{{ __("admin.name_en") }} </label>
                                                    <input type="text" name="name_en" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{ __("admin.name_en") }} " />
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-semibold fs-6 mb-2">{{ __("admin.logo") }} </label>
                                                    <input type="file" name="image" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{ __("admin.logo") }} " />
                                                </div>
                                                	<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<!--begin::Label-->
													<label class="form-label">Categories</label>
													<!--end::Label-->
													<!--begin::Select2-->
													<select class="form-select mb-2" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
														<option></option>
														<option value="Computers">Computers</option>
														<option value="Watches">Watches</option>
														<option value="Headphones">Headphones</option>
														<option value="Footwear">Footwear</option>
														<option value="Cameras">Cameras</option>
														<option value="Shirts">Shirts</option>
														<option value="Household">Household</option>
														<option value="Handbags">Handbags</option>
														<option value="Wines">Wines</option>
														<option value="Sandals">Sandals</option>
													</select>
													<!--end::Select2-->
													<!--begin::Description-->
													<div class="text-muted fs-7 mb-7">Add product to a category.</div>
													<!--end::Description-->
												</div>
												<!--end::Card body-->
                                               <!--begin::Input group-->
                                               {{-- <div class="d-flex flex-column mb-8 fv-row">
                                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                        <span class="required">{{ __('admin.tags') }}</span>
                                                    </label>
                                                    <select name="categories[]" id="categories" multiple="multiple" class="form-control">
                                                        @foreach($tags as $tag)
                                                            <option value="{{ $tag->id }}">{{ $tag->name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div> --}}

                                            </div>
                                            <div class="fv-row mb-7">
                                                <label
                                                    class="col-lg-4 col-form-label required fw-bold fs-6">@lang('admin.tags')</label>
                                                <div id="business-tags-container">
                                                    <select
                                                        class="form-select form-select-solid" dir="rtl"
                                                        name="tags[]"
                                                        data-close-on-select="false"
                                                        data-placeholder="@lang('admin.tags')"
                                                        data-allow-clear="true" multiple="multiple">

                                                        @foreach ($tags as $tag)
                                                            <option value="{{ $tag->id }}">
                                                                {{ $tag->name_ar }}
                                                            </option>
                                                        @endforeach


                                                    </select>
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
                                            <h2 class="fw-bold">{{ __("admin.edit").' '. __("admin.category") }}</h2>
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
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">{{ __("admin.name_en") }}</label>
                                                        <input type="text" name="name_en" id="editNameEn" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{ __("admin.name_en") }}" />
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">{{ __("admin.logo") }}</label>
                                                        <input type="file" name="image" id="editImage" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{ __("admin.logo") }}" />
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <div >
                                                            <img src="" alt="" id="editImagePreview" width="100" height="100">
                                                        </div>
                                                    </div>
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
                            <th>{{__('admin.logo')}}</th>
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

            get_data()
            function get_data(){
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type:'GET',
                    dataType :'json',
                    url :"/admin/cat-data",
                    success:function(response){
                        $('.country_table').html('');
                        $('#myTable').DataTable().destroy();
                        $('#myTable tbody').empty();

                        var select_type = $('.level_select option:selected').val();
                        var permissions = response.permissions;

                        $.each(response.data, function(key, item){
                            var country_img = item.logo ?  item.logo : '{{asset("admin/assets/img/user.png")}}' ;
                            var name_ar = item.name_ar ?? '';
                            var name_en = item.name_en ?? '';
                            var actionButtons = '';

                            if (permissions.canCreate) {
                                actionButtons += '<a href="javascript:void(0);" class="btn btn-primary btn-active-light-primary btn-flex btn-center btn-sm editButton me-2" data-id="'+ item.id +'" data-name_ar="'+ item.name_ar +'" data-name_en="'+ item.name_en +'" data-logo="'+ item.logo +'">{{ __("admin.edit") }}</a>';
                            }
                            if (permissions.canDelete) {
                                actionButtons += '<a href="javascript:void(0);" class="btn btn-danger btn-active-light-primary btn-flex btn-center btn-sm deleteButton" data-id="'+ item.id +'">{{ __("admin.delete") }}</a>';
                            }

                            $('.country_table').append('<tr>\
                                <td class="text-center pt-4">\
                                    <h6>#'+item.id+'</h6>\
                                </td>\
                                <td class="align-middle name text-nowrap">\
                                    <h6 class="m-0 p-0">'+name_ar+'</h6>\
                                </td>\
                                <td class="align-middle name text-nowrap">\
                                    <h6 class="m-0 p-0">'+name_en+'</h6>\
                                </td>\
                                <td class="text-center min-w-100">\
                                    <div class="avatar avatar-3xl">\
                                        <img src="{{ image_path()."/" }}'+country_img+'" alt="" height="100" width="100"/>\
                                    </div>\
                                </td>\
                                <td class="min-w-100 pt-3">\
                                    <div class="d-flex">'+ actionButtons +'</div>\
                                </td>\
                            </tr>');
                        });

                        let table = new DataTable('#myTable');
                    }
                });
            }


            $(document).on('click', '.editButton', function() {
                var id = $(this).data('id');
                var nameAr  = $(this).data('name_ar');
                var nameEn  = $(this).data('name_en');
                var logo    = $(this).data('logo');
                console.log($(this).data());
                $('#editId').val(id);
                $('#editNameAr').val(nameAr);
                $('#editNameEn').val(nameEn);
                $('#editImagePreview').attr('src', "{{ image_path() }}" + "/" + logo );
                $('#kt_modal_edit_user').modal('show');
            });

            $(document).on('click', '.deleteButton', function() {
                var id = $(this).data('id');
                if (confirm('Are you sure you want to delete this category?')) {
                    $.ajax({
                        url: '/admin/categories/' + id,
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            alert('Category deleted successfully!');
                            get_data();
                            // قم بتحديث البيانات في الجدول هنا إذا كنت تريد
                            // مثلاً: location.reload();
                        },
                        error: function(xhr) {
                            alert('An error occurred. Please try again.');
                        }
                    });
                }
            });

            $('#editSubmitButton').on('click', function(e) {
                e.preventDefault();

                var formData = new FormData($('#kt_modal_edit_user_form')[0]);
                var id = $('#editId').val();

                $.ajax({
                    url: '/admin/categories/' + id,
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#kt_modal_edit_user').modal('hide');
                        get_data();
                    },
                    error: function(xhr) {
                        alert('An error occurred. Please try again.');
                    }
                });
            });



            $('#submitButton').on('click', function() {
                var $button = $(this);
                var $label = $button.find('.indicator-label');
                var $progress = $button.find('.indicator-progress');
                var formData = new FormData($('#kt_modal_add_user_form')[0]);

                $label.addClass('d-none');
                $progress.removeClass('d-none');

                $.ajax({
                    url: '/admin/categories',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $label.removeClass('d-none');
                        $progress.addClass('d-none');
                        get_data();
                    },
                    error: function(xhr) {
                        alert('An error occurred. Please try again.');

                        $label.removeClass('d-none');
                        $progress.addClass('d-none');
                    }
                });
            });
        });
    </script>


@endsection
@endsection
