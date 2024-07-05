<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" lang="en">
<head><base href="../../../../">
    <title>
        Metronic - Tailwind CSS Sign In
    </title>
    <meta charset="utf-8"/>
    <meta content="follow, index" name="robots"/>
    <link href="https://keenthemes.com/metronic" rel="canonical"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    <meta content="Sign in page using Tailwind CSS" name="description"/>
    <meta content="@keenthemes" name="twitter:site"/>
    <meta content="@keenthemes" name="twitter:creator"/>
    <meta content="summary_large_image" name="twitter:card"/>
    <meta content="Metronic - Tailwind CSS Sign In" name="twitter:title"/>
    <meta content="Sign in page using Tailwind CSS" name="twitter:description"/>
    <meta content="{{ asset('assets/media/app/og-image.png') }}" name="twitter:image"/>
    <meta content="https://keenthemes.com/metronic" property="og:url"/>
    <meta content="en_US" property="og:locale"/>
    <meta content="website" property="og:type"/>
    <meta content="@keenthemes" property="og:site_name"/>
    <meta content="Metronic - Tailwind CSS Sign In" property="og:title"/>
    <meta content="Sign in page using Tailwind CSS" property="og:description"/>
    <meta content="{{ asset('assets/media/app/og-image.png') }}" property="og:image"/>
    <link href="{{ asset('assets/media/app/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180"/>
    <link href="{{ asset('assets/media/app/favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png"/>
    <link href="{{ asset('assets/media/app/favicon-16x16.png') }}" rel="icon" sizes="16x16" type="image/png"/>
    <link href="{{ asset('assets/media/app/favicon.ico') }}" rel="shortcut icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/apexcharts/apexcharts.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/keenicons/styles.bundle.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet"/>
</head>
<body class="flex h-full dark:bg-coal-500">
<!--begin::Theme mode setup on page load-->
<script>
    const defaultThemeMode = 'light'; // light|dark|system
    let themeMode;

    if (document.documentElement) {
        if (localStorage.getItem('theme')) {
            themeMode = localStorage.getItem('theme');
        } else if (document.documentElement.hasAttribute('data-theme-mode')) {
            themeMode = document.documentElement.getAttribute('data-theme-mode');
        } else {
            themeMode = defaultThemeMode;
        }

        if (themeMode === 'system') {
            themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        }

        document.documentElement.classList.add(themeMode);
    }
</script>
<!--end::Theme mode setup on page load-->
<!--begin::Page layout-->
<style>
    .page-bg {
        background-image: url('{{ asset('assets/media/images/2600x1200/bg-10.png') }}');
    }
    .dark .page-bg {
        background-image: url('{{ asset('assets/media/images/2600x1200/bg-10-dark.png') }}');
    }
</style>
<div class="flex items-center justify-center grow bg-center bg-no-repeat page-bg">
    <div class="card max-w-[370px] w-full">


        <form  class="card-body flex flex-col gap-5 p-10" novalidate="novalidate" method="POST" action="{{ route('loginAdmin') }}"  >
            @csrf
            <div class="text-center mb-2.5">
                <h3 class="text-lg font-semibold text-gray-900 leading-none mb-2.5">
                    Sign in
                </h3>

            </div>


            <div class="flex flex-col gap-1">
                <label class="form-label text-gray-900">
                    Email
                </label>
                <input class="input" placeholder="email@email.com" type="email"  name="email" />
            </div>
            <div class="flex flex-col gap-1">
                <div class="flex items-center justify-between gap-1">
                    <label class="form-label text-gray-900">
                        Password
                    </label>
                    <a class="text-2sm link shrink-0" href="{{ route('admin.forgotPassword') }}">
                        Forgot Password?
                    </a>
                </div>
                <label class="input" data-toggle-password="true">
                    <input  placeholder="Enter Password" type="password" name="password"/>
                    <button class="btn btn-icon" data-toggle-password-trigger="true">
                        <i class="ki-filled ki-eye text-gray-500 toggle-password-active:hidden"></i>
                        <i class="ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block"></i>
                    </button>
                </label>
            </div>
            <label class="checkbox-group">
                <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />
                <span class="checkbox-label">
                    Remember me
                </span>
            </label>
            <button type="submit"  class="btn btn-primary flex justify-center grow">
                Sign In
            </button>
        </form>
    </div>
</div>
<!--end::Page layout-->
<!--begin::Page scripts-->
<script src="{{ asset('assets/js/core.bundle.js') }}"></script>
<script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
<!--end::Page scripts-->
</body>
</html>

