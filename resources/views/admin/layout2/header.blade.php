	<!--begin::Head-->
	<head>
		<title>Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Metronic by Keenthemes" />
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="canonical" href="http://preview.keenthemes.comindex.html" />
		<link rel="shortcut icon" href="{{ asset("admin/assets/media/logos/favicon.ico")}}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		{{-- <link href="{{ asset("admin/assets/plugins/custom/datatables/datatables.bundle.css")}}" rel="stylesheet" type="text/css" /> --}}
		@if (auth()->user()->lang == "ar")
			<link href="{{ asset("admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css")}}" rel="stylesheet" type="text/css" />
			
			<link href="{{ asset("admin/assets/plugins/global/plugins.bundle.rtl.css")}}" rel="stylesheet" type="text/css" />
			<link href="{{ asset("admin/assets/css/style.bundle.rtl.css")}}" rel="stylesheet" type="text/css" />
			<link href="{{ asset("admin/assets/css/dataTable.min.rtl.css")}}" rel="stylesheet" type="text/css" />
			<link href="{{ asset("admin/assets/css/dataTables.bootstrap5.min.rtl.css")}}" rel="stylesheet" type="text/css" />
		@else
			<link href="{{ asset("admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css")}}" rel="stylesheet" type="text/css" />
			<link href="{{ asset("admin/assets/plugins/global/plugins.bundle.css")}}" rel="stylesheet" type="text/css" />
			<link href="{{ asset("admin/assets/css/style.bundle.css")}}" rel="stylesheet" type="text/css" />
			<link href="{{ asset("admin/assets/css/dataTable.min.css")}}" rel="stylesheet" type="text/css" />
			<link href="{{ asset("admin/assets/css/dataTables.bootstrap5.min.css")}}" rel="stylesheet" type="text/css" />
		@endif
		
	</head>
	<!--end::Head-->