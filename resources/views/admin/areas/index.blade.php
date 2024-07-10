@extends("admin.layout2.app")
@section("content")

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">{{ __("admin.areas") }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">{{ __("admin.home") }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">{{ __("admin.areas") }}</li>
                   
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
                            <i class="ki-duotone ki-plus fs-2"></i>{{ __("admin.add") . ' '.__("admin.area") }}</button>
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
                                                    <label class="required fw-semibold fs-6 mb-2">{{ __("admin.image") }} </label>
                                                    <input type="file" name="image" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{ __("admin.image") }} " />
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
                                            <h2 class="fw-bold">{{ __("admin.edit").' '. __("admin.area") }}</h2>
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                                <i class="ki-duotone ki-cross fs-1"></i>
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
                                                        <label class="required fw-semibold fs-6 mb-2">{{ __("admin.image") }}</label>
                                                        <input type="file" name="image" id="editImage" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{ __("admin.image") }}" />
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

                    {{-- <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px">{{ __("admin.name_ar") }}</th>
                                <th class="min-w-125px">{{ __("admin.name_en") }}</th>
                                <th class="min-w-125px">{{ __("admin.logo") }}</th>
                                <th class="min-w-125px">{{ __("admin.status") }}</th>
                                <th class="text-end min-w-100px">{{ __("admin.action") }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                                
                                @forelse ($results as $result)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-i  nput" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>dsdsdsds</td>
                                        <td>sdsdsds</td>
                                        <td> ddsdsdsds </td>
                                        <td>cxdsdsds</td>
                                        <td class="text-end">
                                            sadssasas
                                            
                                        </td>
                                    </tr>
                                @empty
                                    
                                @endforelse
                                    
                        </tbody>
                    </table> --}}

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
                    url :"/admin/get-data",
                    success:function(response){
                        $('.country_table').html('');
                        $('#myTable').DataTable().destroy();
                        $('#myTable tbody').empty();
                        var select_type = $('.level_select option:selected').val();
                        $.each(response ,function(key , item){
                                var country_img = item.image ?  item.image : '{{asset("admin/assets/img/user.png")}}' ;
                                var name_ar = item.name_ar ?? '';
                                var name_en = item.name_en ?? '';
                                $('.country_table').append('<tr>\
                                        <td class=" text-center pt-4">\
                                            <h6>#'+item.id+'</h6> \
                                        </td>\
                                        <td class="align-middle name text-nowrap ">\
                                            <h6 class="m-0 p-0">'+name_ar+' </h6>  \
                                        </td>\
                                        <td class="align-middle name text-nowrap ">\
                                            <h6 class="m-0 p-0">'+name_en+' </h6>  \
                                        </td>\
                                        <td class=" text-center min-w-100 ">\
                                            <div class="avatar avatar-3xl">\
                                                    <img  src="{{ image_path()."/" }}'+country_img+'" alt="" heiget="100" width="100"/>\
                                                </div> \
                                        </td>\
                                        <td class="min-w-100 pt-3">\
                                            <div class="d-flex">\
                                                <a href="javascript:void(0);" class="btn btn-primary btn-active-light-primary btn-flex btn-center btn-sm editButton me-2" data-id="'+ item.id +'" data-name_ar="'+ item.name_ar +'" data-name_en="'+ item.name_en +'" data-image="'+ country_img +'">{{ __("admin.edit") }}</a>\
                                                <a href="javascript:void(0);" class="btn btn-danger btn-active-light-primary btn-flex btn-center btn-sm deleteButton" data-id="'+ item.id +'"  value="'+item.id+'">{{ __("admin.delete") }}</a>\
                                            </div>\
                                        </td>\
                                    </tr>\
                                ')
                            // }
                        });

                        let table = new DataTable('#myTable');
                    }
                })
            }

            $(document).on('click', '.editButton', function() {
                var id = $(this).data('id');
                var nameAr =    $(this).data('name_ar');
                var nameEn = $(this).data('name_en');
                var logo = $(this).data('image');
                $('#editId').val(id);
                $('#editNameAr').val(nameAr);
                $('#editNameEn').val(nameEn);
                $('#editImagePreview').attr('src', "{{ image_path() }}" + "/" + logo );
                $('#kt_modal_edit_user').modal('show');
            });

            $(document).on('click', '.deleteButton', function() {
                var item_id = $(this).data('id');

                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'get',
                    dataType: 'text', 
                    url: "/admin/areas/" + item_id,
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
                    url: "/admin/areas/" + item_id,
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

            $('#editSubmitButton').on('click', function(e) {
                e.preventDefault();

                var formData = new FormData($('#kt_modal_edit_user_form')[0]);
                var id = $('#editId').val();

                $.ajax({
                    url: '/admin/areas/' + id,
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#kt_modal_edit_user').modal('hide');
                        console.log(response);
                        if (response == 'success') {
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
                        alert('An error occurred. Please try again.');
                    }
                });
            });

            

            $('#submitButton').on('click', function() {
                var $button = $(this);
                var $label = $button.find('.indicator-label');
                var formData = new FormData($('#kt_modal_add_user_form')[0]);

                $label.addClass('d-none');

                $.ajax({
                    url: '/admin/areas',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $label.removeClass('d-none');
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
