<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset("admin/assets/plugins/global/plugins.bundle.js")}}"></script>
<script src="{{ asset("admin/assets/js/scripts.bundle.js")}}"></script>

@yield("js")

@isset($script_datatable)
{{-- <script src="{{ asset("admin/assets/plugins/custom/datatables/datatables.bundle.js") }} "></script> --}}
<script src="{{ asset("admin/assets/js/dataTables.min.js") }} "></script>

<script src="{{ asset("admin/assets/js/custom/apps/user-management/users/list/table.js")}}"></script>
<script src="{{ asset("admin/assets/js/custom/apps/user-management/users/list/export-users.js")}}"></script>
<script src="{{ asset("admin/assets/js/custom/apps/user-management/users/list/add.js")}}"></script>
<script src="{{ asset("admin/assets/js/widgets.bundle.js")}}"></script>
<script src="{{ asset("admin/assets/js/custom/widgets.js")}}"></script>
<script src="{{ asset("admin/assets/js/custom/apps/chat/chat.js")}}"></script>
<script src="{{ asset("admin/assets/js/custom/utilities/modals/upgrade-plan.js")}}"></script>
<script src="{{ asset("admin/assets/js/custom/utilities/modals/create-app.js")}}"></script>
<script src="{{ asset("admin/assets/js/custom/utilities/modals/users-search.js")}}"></script>


@endisset

<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
{{-- <script src="{{ asset("admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js")}}"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script> --}}
{{-- <script src="{{ asset("admin/assets/plugins/custom/datatables/datatables.bundle.js")}}"></script> --}}
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->

{{-- <script src="{{ asset("admin/assets/js/widgets.bundle.js")}}"></script>
<script src="{{ asset("admin/assets/js/custom/widgets.js")}}"></script>
<script src="{{ asset("admin/assets/js/custom/apps/chat/chat.js")}}"></script>
<script src="{{ asset("admin/assets/js/custom/utilities/modals/upgrade-plan.js")}}"></script>
<script src="{{ asset("admin/assets/js/custom/utilities/modals/create-app.js")}}"></script>
<script src="{{ asset("admin/assets/js/custom/utilities/modals/new-target.js")}}"></script>
<script src="{{ asset("admin/assets/js/custom/utilities/modals/users-search.js")}}"></script> --}}

<!--end::Custom Javascript-->
<!--end::Javascript-->
