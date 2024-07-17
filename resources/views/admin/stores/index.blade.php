@extends('admin.layout2.app')
@section('content')
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
   <!--begin::Content-->
   <div id="kt_app_content" class="app-content flex-column-fluid">
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
</div>
</div>
@section("js")
<script src="{{ asset("admin/assets/js/custom/apps/ecommerce/catalog/save-product.js") }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
 </script>


@endsection
