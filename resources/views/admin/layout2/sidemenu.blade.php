	<!--begin::Sidebar-->
    <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
        <!--begin::Logo-->
        <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
            <!--begin::Logo image-->
            <a href="{{ url("admin/dashboard") }}">
                <img alt="Logo" src="{{ url("images/Dalil.png") }}" class="h-85px app-sidebar-logo-default" />
                <img alt="Logo" src="{{ url("images/Dalil.png") }}" class="h-20px app-sidebar-logo-minimize" />
            </a>
            <!--end::Logo image-->
            <!--begin::Sidebar toggle-->
            <!--begin::Minimized sidebar setup:
            if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
                1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
                2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
                3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
                4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
            }
        -->
            <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
                <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
            <!--end::Sidebar toggle-->
        </div>
        <!--end::Logo-->
        <!--begin::sidebar menu-->
        <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
            <!--begin::Menu wrapper-->
            <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
                <!--begin::Scroll wrapper-->
                <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true"  data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-element-11 fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ trans("admin.Dashboards") }}</span>
                            </span>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item pt-5">
                            <!--begin:Menu content-->
                            <div class="menu-content">
                                <span class="menu-heading fw-bold text-uppercase fs-7">{{ __("admin.pages") }} </span>
                            </div>
                            <!--end:Menu content-->
                        </div>
                        <!--end:Menu item-->
                        @if (!auth()->user()->hasRole('stores'))
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (Request::segment(2) == "admins" || Request::segment(2) == "roles") ? "hover show" :""  }}">
                                <!--begin:Menu link-->
                                <span class="menu-link {{ (Request::segment(2) == "admins" || Request::segment(2) == "roles") ? "active" :""  }}">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-address-book fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">{{ __("admin.authentication") }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    @can('admin Read')
                                    <div class="menu-item ">
                                        <a class="menu-link  {{ Request::segment(2) == "admins" ? "active" :""  }}" href="{{ url("admin/admins") }}">
                                            <span class="menu-bullet ">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title ">{{ __("admin.admins") }}</span>
                                        </a>
                                    </div>
                                    @endcan
                                    @can("roles Read")
                                    <div class="menu-item">
                                        <a class="menu-link {{ Request::segment(2) == "roles" ? "active" :""  }}" href="{{ url("admin/roles") }}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">{{ __("admin.roles") }}</span>
                                        </a>
                                    </div>
                                    @endcan
                                    @can("users Read")
                                    <div class="menu-item ">
                                        <a class="menu-link  {{ Request::segment(2) == "users" ? "active" :""  }}" href="{{ url("admin/users") }}">
                                            <span class="menu-bullet ">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title ">{{ __("admin.users") }}</span>
                                        </a>
                                    </div>
                                    @endcan
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (Request::segment(2) == "zones" ? "hover show" :"")  }}">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-address-book fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">{{ __("admin.areas") }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    @can('Zone Read')
                                    <div class="menu-item">
                                        <a class="menu-link {{ (Request::segment(2) == "zones" ) ? "active" :""  }}" href="{{ url("admin/zones") }}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">{{ __("admin.zones") }}</span>
                                        </a>
                                    </div>
                                    @endcan
                                </div>
                                <!--end:Menu sub-->

                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (Request::segment(2) == "categories" || Request::segment(2) == "features" || Request::segment(2) == "tags") ? "hover show" :""  }}">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-address-book fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">{{ __("admin.management") }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    @can("tags Read")
                                    <div class="menu-item">
                                        <a class="menu-link {{ (Request::segment(2) == "tags" ) ? "active" :""  }}" href="{{ url("admin/tags") }}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">{{ __("admin.tags") }}</span>
                                        </a>
                                    </div>
                                    @endcan
                                    @can('categories Read')
                                    <div class="menu-item">
                                        <a class="menu-link {{ (Request::segment(2) == "categories" ) ? "active" :""  }}" href="{{ url("admin/categories") }}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">{{ __("admin.categories") }}</span>
                                        </a>
                                    </div>
                                    @endcan
                                    {{-- @can("features Read")
                                    <div class="menu-item">
                                        <a class="menu-link {{ (Request::segment(2) == "features" ) ? "active" :""  }}" href="{{ url("admin/features") }}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">{{ __("admin.features") }}</span>
                                        </a>
                                    </div>
                                    @endcan --}}

                                </div>
                                <!--end:Menu sub-->

                            </div>
                            @can("subscription Read")
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-address-book fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">{{ __("admin.subscription") }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ url("admin/subscription") }}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">{{ __("admin.subscription") }}</span>
                                        </a>
                                    </div>

                                </div>
                                <!--end:Menu sub-->
                            </div>
                            @endcan

                            @can("stores Read")
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (Request::segment(2) == "stores" ) ? "hover show" :""  }}">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-address-book fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">{{ __("admin.stores") }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link {{ (Request::segment(2) == "stores" && !Request::is('admin/stores/create')) ? "active" :""  }}" href="{{ url("admin/stores") }}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">{{ __("admin.stores") }}</span>
                                        </a>
                                    </div>
                                    @can("stores Create")
                                        <div class="menu-item">
                                            <a class="menu-link {{ (Request::segment(2) == "stores" && Request::is('admin/stores/create')) ? "active" :""  }}" href="{{ url("admin/stores/create") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __("admin.add_stores") }}</span>
                                            </a>
                                        </div>
                                    @endcan
                                </div>
                            </div>
                            @endcan

                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (Request::segment(2) == "push-notifications" ? "hover show" :"")  }}">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-address-book fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">{{ __("admin.push_notification") }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    @can('Zone Read')
                                    <div class="menu-item">
                                        <a class="menu-link {{ (Request::segment(2) == "push-notifications" ) ? "active" :""  }}" href="{{ url("admin/push-notifications") }}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">{{ __("admin.push_notification") }}</span>
                                        </a>
                                    </div>
                                    @endcan
                                </div>

                                <!--end:Menu sub-->

                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (Request::segment(2) == "push-notifications" ? "hover show" :"")  }}">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-address-book fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">{{ __("admin.push_notification") }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                 <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (Request::segment(2) == "sliders" ? "hover show" :"")  }}">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-address-book fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">{{ __("admin.sliders") }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    @can('Zone Read')
                                    <div class="menu-item">
                                        <a class="menu-link {{ (Request::segment(2) == "sliders" ) ? "active" :""  }}" href="{{ url("admin/sliders") }}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">{{ __("admin.sliders") }}</span>
                                        </a>
                                    </div>
                                    @endcan
                                </div>

                                <!--end:Menu sub-->

                            </div>

                                <!--end:Menu sub-->

                            </div>
                            <!--end:Menu item-->
                        @endif



                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Scroll wrapper-->
            </div>
            <!--end::Menu wrapper-->
        </div>
        <!--end::sidebar menu-->
    </div>
    <!--end::Sidebar-->
