<div class="sidebar dark:bg-coal-600 bg-light border-r border-r-gray-200 dark:border-r-coal-100 fixed top-0 bottom-0 z-20 hidden lg:flex flex-col items-stretch shrink-0" data-drawer="true" data-drawer-class="drawer drawer-start top-0 bottom-0" data-drawer-enable="true|lg:false" id="sidebar">
    <div class="sidebar-header hidden lg:flex items-center relative justify-between px-3 lg:px-6 shrink-0" id="sidebar_header">
     <a class="dark:hidden" href="html/demo1.html">
      <img class="default-logo min-h-[22px] max-w-none" src="assets/media/app/default-logo.svg"/>
      <img class="small-logo min-h-[22px] max-w-none" src="assets/media/app/mini-logo.svg"/>
     </a>
     <a class="hidden dark:block" href="html/demo1.html">
      <img class="default-logo min-h-[22px] max-w-none" src="assets/media/app/default-logo-dark.svg"/>
      <img class="small-logo min-h-[22px] max-w-none" src="assets/media/app/mini-logo.svg"/>
     </a>
     <button class="btn btn-icon btn-icon-md size-[30px] rounded-lg border border-gray-200 dark:border-gray-300 bg-light text-gray-500 hover:text-gray-700 toggle absolute left-full top-2/4 -translate-x-2/4 -translate-y-2/4" data-toggle="body" data-toggle-class="sidebar-collapse" id="sidebar_toggle">
      <i class="ki-filled ki-black-left-line toggle-active:rotate-180 transition-all duration-300">
      </i>
     </button>
    </div>
    <div class="sidebar-content flex grow shrink-0 py-5 pr-2" id="sidebar_content">
     <div class="scrollable-y-hover grow shrink-0 flex pl-2 lg:pl-5 pr-1 lg:pr-3" data-scrollable="true" data-scrollable-dependencies="#sidebar_header" data-scrollable-height="auto" data-scrollable-offset="0px" data-scrollable-wrappers="#sidebar_content" id="sidebar_scrollable">
      <div class="menu flex flex-col grow gap-0.5" data-menu="true" data-menu-accordion-expand-all="false" id="sidebar_menu">
       <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
        <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-element-11 text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-semibold text-gray-700 menu-item-active:text-primary menu-link-hover:!text-primary">
          Dashboards
         </span>
         <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
          </i>
          <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
          </i>
         </span>
        </div>
        <div class="menu-accordion gap-0.5 pl-[10px] relative before:absolute before:left-[20px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
         <div class="menu-item">
          <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Light Sidebar
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/dashboards/dark-sidebar.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Dark Sidebar
           </span>
          </a>
         </div>
        </div>
       </div>
       <div class="menu-item pt-2.25 pb-px">
        <span class="menu-heading uppercase pl-[10px] pr-[10px] text-2sm font-semibold text-gray-500">
            {{ __('admin.user') }}
        </span>
       </div>
       <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
        <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-profile-circle text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-semibold text-gray-700 menu-item-active:text-primary menu-link-hover:!text-primary">
            {{ __('admin.users') }}
        </span>
         <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
          </i>
          <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
          </i>
         </span>
        </div>
        <div class="menu-accordion gap-0.5 pl-[10px] relative before:absolute before:left-[20px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
            <div class="menu-item">
                <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="{{ url('admin/users') }}" tabindex="0">
                    <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
                    </span>
                    <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                        {{ __('admin.show_user') }}
                    </span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="{{ url('admin/users/create') }}" tabindex="0">
                    <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
                    </span>
                    <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                        {{ __('admin.add_user') }}
                    </span>
                </a>
            </div>

        </div>
       </div>
       <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
        <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-setting-2 text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-semibold text-gray-700 menu-item-active:text-primary menu-link-hover:!text-primary">
          My Account
         </span>
         <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
          </i>
          <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
          </i>
         </span>
        </div>
        <div class="menu-accordion gap-0.5 pl-[10px] relative before:absolute before:left-[20px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent gap-[14px] pl-[10px] pr-[10px] py-[8px] grow cursor-pointer" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium mr-1 text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Account Home
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/home/get-started.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Get Started
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/home/user-profile.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              User Profile
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/home/company-profile.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Company Profile
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/home/settings-sidebar.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Settings - With Sidebar
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/home/settings-enterprise.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Settings - Enterprise
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/home/settings-plain.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Settings - Plain
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/home/settings-modal.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Settings - Modal
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent gap-[14px] pl-[10px] pr-[10px] py-[8px] grow cursor-pointer" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium mr-1 text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Billing
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/billing/basic.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Billing - Basic
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/billing/enterprise.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Billing - Enterprise
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/billing/plans.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Plans
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/billing/history.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Billing History
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent gap-[14px] pl-[10px] pr-[10px] py-[8px] grow cursor-pointer" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium mr-1 text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Security
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/security/get-started.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Get Started
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/security/overview.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Security Overview
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/security/allowed-ip-addresses.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Allowed IP Addresses
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/security/privacy-settings.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Privacy Settings
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/security/device-management.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Device Management
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/security/backup-and-recovery.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Backup &amp; Recovery
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/security/current-sessions.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Current Sessions
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/security/security-log.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Security Log
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent gap-[14px] pl-[10px] pr-[10px] py-[8px] grow cursor-pointer" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium mr-1 text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Members &amp; Roles
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/members/team-starter.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Teams Starter
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/members/teams.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Teams
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/members/team-info.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Team Info
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/members/members-starter.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Members Starter
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/members/team-members.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Team Members
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/members/import-members.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Import Members
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/members/roles.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Roles
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/members/permissions-toggle.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Permissions - Toggler
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/members/permissions-check.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Permissions - Check
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/integrations.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Integrations
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/notifications.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Notifications
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/api-keys.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            API Keys
           </span>
          </a>
         </div>
         <div class="menu-item flex-col-reverse" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent gap-[14px] pl-[10px] pr-[10px] py-[8px] grow cursor-pointer" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-500 dark:text-gray-400">
            <span class="hidden menu-item-show:!flex">
             Show less
            </span>
            <span class="flex menu-item-show:hidden">
             Show 3 more
            </span>
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5">
           <div class="menu-item">
            <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/appearance.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Appearance
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/invite-a-friend.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Invite a Friend
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/activity.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Activity
             </span>
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
        <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-users text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-semibold text-gray-700 menu-item-active:text-primary menu-link-hover:!text-primary">
          Network
         </span>
         <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
          </i>
          <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
          </i>
         </span>
        </div>
        <div class="menu-accordion gap-0.5 pl-[10px] relative before:absolute before:left-[20px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
         <div class="menu-item">
          <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/network/get-started.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Get Started
           </span>
          </a>
         </div>
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent gap-[14px] pl-[10px] pr-[10px] py-[8px] grow cursor-pointer" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium mr-1 text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            User Cards
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/network/user-cards/mini-cards.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Mini Cards
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/network/user-cards/team-crew.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Team Crew
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/network/user-cards/author.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Author
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/network/user-cards/nft.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              NFT
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/network/user-cards/social.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Social
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent gap-[14px] pl-[10px] pr-[10px] py-[8px] grow cursor-pointer" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium mr-1 text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            User Table
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/network/user-table/team-crew.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Team Crew
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/network/user-table/app-roster.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              App Roster
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/network/user-table/market-authors.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Market Authors
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/network/user-table/saas-users.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              SaaS Users
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/network/user-table/store-clients.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Store Clients
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/network/user-table/visitors.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Visitors
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-label gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow" href="#" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700">
            Cooperations
           </span>
           <span class="menu-badge mr-[-10px]">
            <span class="badge badge-xs">
             Soon
            </span>
           </span>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-label gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow" href="#" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700">
            Leads
           </span>
           <span class="menu-badge mr-[-10px]">
            <span class="badge badge-xs">
             Soon
            </span>
           </span>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-label gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow" href="#" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700">
            Donators
           </span>
           <span class="menu-badge mr-[-10px]">
            <span class="badge badge-xs">
             Soon
            </span>
           </span>
          </div>
         </div>
        </div>
       </div>
       <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
        <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-security-user text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-semibold text-gray-700 menu-item-active:text-primary menu-link-hover:!text-primary">
          Authentication
         </span>
         <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
          </i>
          <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
          </i>
         </span>
        </div>
        <div class="menu-accordion gap-0.5 pl-[10px] relative before:absolute before:left-[20px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent gap-[14px] pl-[10px] pr-[10px] py-[8px] grow cursor-pointer" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium mr-1 text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Classic
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/classic/sign-in.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Sign In
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/classic/sign-up.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Sign Up
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/classic/2fa.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              2FA
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/classic/check-email.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Check Email
             </span>
            </a>
           </div>
           <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
            <div class="menu-link border border-transparent gap-[5px] pl-[10px] pr-[10px] py-[8px] grow cursor-pointer" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium mr-1 text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Reset Password
             </span>
             <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
              <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
              </i>
              <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
              </i>
             </span>
            </div>
            <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
             <div class="menu-item">
              <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/classic/reset-password/enter-email.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Enter Email
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/classic/reset-password/check-email.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Check Email
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/classic/reset-password/change-password.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Change Password
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/classic/reset-password/password-changed.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Password is Changed
               </span>
              </a>
             </div>
            </div>
           </div>
          </div>
         </div>
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent gap-[14px] pl-[10px] pr-[10px] py-[8px] grow cursor-pointer" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium mr-1 text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Branded
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/branded/sign-in.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Sign In
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/branded/sign-up.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Sign Up
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/branded/2fa.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              2FA
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/branded/check-email.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Check Email
             </span>
            </a>
           </div>
           <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
            <div class="menu-link border border-transparent gap-[5px] pl-[10px] pr-[10px] py-[8px] grow cursor-pointer" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-medium mr-1 text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Reset Password
             </span>
             <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
              <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
              </i>
              <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
              </i>
             </span>
            </div>
            <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
             <div class="menu-item">
              <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/branded/reset-password/enter-email.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Enter Email
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/branded/reset-password/check-email.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Check Email
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/branded/reset-password/change-password.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Change Password
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link gap-[5px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/branded/reset-password/password-changed.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Password is Changed
               </span>
              </a>
             </div>
            </div>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/welcome-message.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Welcome Message
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/account-deactivated.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Account Deactivated
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/error-404.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Error 404
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/authentication/error-500.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Error 500
           </span>
          </a>
         </div>
        </div>
       </div>
       <div class="menu-item pt-2.25 pb-px">
        <span class="menu-heading uppercase pl-[10px] pr-[10px] text-2sm font-semibold text-gray-500">
            {{ __('admin.store') }}
        </span>
       </div>
       <div class="menu-item">
        <div class="menu-label gap-[10px] pl-[10px] pr-[10px] py-[6px] border border-transparent" href="" tabindex="0">
         <span class="menu-icon items-start w-[20px] text-gray-500 dark:text-gray-400">
          <i class="ki-filled ki-users text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-semibold text-gray-700">
          User Management
         </span>
         <span class="menu-badge mr-[-10px]">
          <span class="badge badge-xs">
           Soon
          </span>
         </span>
        </div>
       </div>

      </div>
     </div>
    </div>
   </div>

