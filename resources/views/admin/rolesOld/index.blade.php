@extends('admin.layouts.common.master')

@section('content')



<main class="grow content pt-5" id="content" role="content">
    <!-- begin: container -->
    <div class="container-fixed" id="content_container">
    </div>
    <!-- end: container -->
    <div class="flex flex-nowrap items-center lg:items-end justify-between border-b border-b-gray-200 dark:border-b-coal-100 gap-6 mb-5 lg:mb-10">
     <!-- begin: container -->
     <div class="container-fixed" id="hero_container">
      <div class="grid">
       <div class="scrollable-x-auto">
        <div class="menu gap-3" data-menu="true">
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary" data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click">
          <div class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            Account Home
           </span>
           <span class="menu-arrow">
            <i class="ki-filled ki-down text-2xs text-gray-500 menu-item-active:text-primary menu-item-here:text-primary menu-item-show:text-primary menu-link-hover:text-primary">
            </i>
           </span>
          </div>
          <div class="menu-dropdown menu-default py-2 min-w-[200px]">
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/get-started.html" tabindex="0">
             <span class="menu-title">
              Get Started
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/user-profile.html" tabindex="0">
             <span class="menu-title">
              User Profile
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/company-profile.html" tabindex="0">
             <span class="menu-title">
              Company Profile
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html" tabindex="0">
             <span class="menu-title">
              Settings - With Sidebar
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/settings-enterprise.html" tabindex="0">
             <span class="menu-title">
              Settings - Enterprise
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/settings-plain.html" tabindex="0">
             <span class="menu-title">
              Settings - Plain
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/settings-modal.html" tabindex="0">
             <span class="menu-title">
              Settings - Modal
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary" data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click">
          <div class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            Billing
           </span>
           <span class="menu-arrow">
            <i class="ki-filled ki-down text-2xs text-gray-500 menu-item-active:text-primary menu-item-here:text-primary menu-item-show:text-primary menu-link-hover:text-primary">
            </i>
           </span>
          </div>
          <div class="menu-dropdown menu-default py-2 min-w-[200px]">
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/billing/basic.html" tabindex="0">
             <span class="menu-title">
              Billing - Basic
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/billing/enterprise.html" tabindex="0">
             <span class="menu-title">
              Billing - Enterprise
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/billing/plans.html" tabindex="0">
             <span class="menu-title">
              Plans
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/billing/history.html" tabindex="0">
             <span class="menu-title">
              Billing History
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary" data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click">
          <div class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            Security
           </span>
           <span class="menu-arrow">
            <i class="ki-filled ki-down text-2xs text-gray-500 menu-item-active:text-primary menu-item-here:text-primary menu-item-show:text-primary menu-link-hover:text-primary">
            </i>
           </span>
          </div>
          <div class="menu-dropdown menu-default py-2 min-w-[200px]">
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/get-started.html" tabindex="0">
             <span class="menu-title">
              Get Started
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/overview.html" tabindex="0">
             <span class="menu-title">
              Security Overview
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/allowed-ip-addresses.html" tabindex="0">
             <span class="menu-title">
              Allowed IP Addresses
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/privacy-settings.html" tabindex="0">
             <span class="menu-title">
              Privacy Settings
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/device-management.html" tabindex="0">
             <span class="menu-title">
              Device Management
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/backup-and-recovery.html" tabindex="0">
             <span class="menu-title">
              Backup &amp; Recovery
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/current-sessions.html" tabindex="0">
             <span class="menu-title">
              Current Sessions
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/security-log.html" tabindex="0">
             <span class="menu-title">
              Security Log
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary here" data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click">
          <div class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            Members &amp; Roles
           </span>
           <span class="menu-arrow">
            <i class="ki-filled ki-down text-2xs text-gray-500 menu-item-active:text-primary menu-item-here:text-primary menu-item-show:text-primary menu-link-hover:text-primary">
            </i>
           </span>
          </div>
          <div class="menu-dropdown menu-default py-2 min-w-[200px]">
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/team-starter.html" tabindex="0">
             <span class="menu-title">
              Teams Starter
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/teams.html" tabindex="0">
             <span class="menu-title">
              Teams
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/team-info.html" tabindex="0">
             <span class="menu-title">
              Team Info
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/members-starter.html" tabindex="0">
             <span class="menu-title">
              Members Starter
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/team-members.html" tabindex="0">
             <span class="menu-title">
              Team Members
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/import-members.html" tabindex="0">
             <span class="menu-title">
              Import Members
             </span>
            </a>
           </div>
           <div class="menu-item active">
            <a class="menu-link" href="html/demo1/account/members/roles.html" tabindex="0">
             <span class="menu-title">
              Roles
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/permissions-toggle.html" tabindex="0">
             <span class="menu-title">
              Permissions - Toggler
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/permissions-check.html" tabindex="0">
             <span class="menu-title">
              Permissions - Check
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
          <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo1/account/integrations.html" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            Integrations
           </span>
          </a>
         </div>
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
          <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo1/account/notifications.html" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            Notifications
           </span>
          </a>
         </div>
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
          <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo1/account/api-keys.html" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            API Keys
           </span>
          </a>
         </div>
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary" data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click">
          <div class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            More
           </span>
           <span class="menu-arrow">
            <i class="ki-filled ki-down text-2xs text-gray-500 menu-item-active:text-primary menu-item-here:text-primary menu-item-show:text-primary menu-link-hover:text-primary">
            </i>
           </span>
          </div>
          <div class="menu-dropdown menu-default py-2 min-w-[200px]">
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/appearance.html" tabindex="0">
             <span class="menu-title">
              Appearance
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/invite-a-friend.html" tabindex="0">
             <span class="menu-title">
              Invite a Friend
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/activity.html" tabindex="0">
             <span class="menu-title">
              Activity
             </span>
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- end: container -->
    </div>
    <!-- begin: container -->
    <div class="container-fixed">
     <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
      <div class="flex flex-col justify-center gap-2">
       <h1 class="text-xl font-semibold leading-none text-gray-900">
        Roles
       </h1>
       <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
        Overview of all team members and roles.
       </div>
      </div>
      <div class="flex items-center gap-2.5">
       <a class="btn btn-sm btn-light" href="#">
        New Role
       </a>
      </div>
     </div>
    </div>
    <!-- end: container -->
    <!-- begin: container -->
    <div class="container-fixed">
     <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-7.5">
      <div class="card flex flex-col gap-5 p-5 lg:p-7.5">
       <div class="flex items-center flex-wrap justify-between gap-1">
        <div class="flex items-center gap-2.5">
         <div class="relative size-[44px] shrink-0">
          <svg class="w-full h-full stroke-primary-clarity fill-primary-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
           <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
           18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
           39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
           </path>
           <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
           18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
           39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
           </path>
          </svg>
          <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
           <i class="ki-filled ki-setting text-1.5xl text-primary">
           </i>
          </div>
         </div>
         <div class="flex flex-col">
          <a class="text-md font-semibold text-gray-900 hover:text-primary-active mb-px" href="html/demo1/public-profile/profiles/creator.html">
           Administrator
          </a>
          <span class="text-2sm font-medium text-gray-600">
           Default role
          </span>
         </div>
        </div>
        <div class="menu inline-flex" data-menu="true">
         <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
          <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
           <i class="ki-filled ki-dots-vertical">
           </i>
          </button>
          <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
           <div class="menu-item">
            <a class="menu-link" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-document">
              </i>
             </span>
             <span class="menu-title">
              Details
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" data-modal-toggle="#share_profile_modal" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-share">
              </i>
             </span>
             <span class="menu-title">
              Share
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-file-up">
              </i>
             </span>
             <span class="menu-title">
              Export
             </span>
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
       <p class="text-2sm text-gray-600 font-medium">
        Manages system settings and user access, ensures system stability.
       </p>
       <span class="text-2sm text-gray-700 font-medium">
        1 person
       </span>
      </div>
      <div class="card flex flex-col gap-5 p-5 lg:p-7.5">
       <div class="flex items-center flex-wrap justify-between gap-1">
        <div class="flex items-center gap-2.5">
         <div class="relative size-[44px] shrink-0">
          <svg class="w-full h-full stroke-brand-clarity fill-brand-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
           <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
           18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
           39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
           </path>
           <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
           18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
           39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
           </path>
          </svg>
          <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
           <i class="ki-filled ki-eye text-1.5xl text-brand">
           </i>
          </div>
         </div>
         <div class="flex flex-col">
          <a class="text-md font-semibold text-gray-900 hover:text-primary-active mb-px" href="html/demo1/public-profile/profiles/company.html">
           Viewer
          </a>
          <span class="text-2sm font-medium text-gray-600">
           Default role
          </span>
         </div>
        </div>
        <div class="menu inline-flex" data-menu="true">
         <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
          <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
           <i class="ki-filled ki-dots-vertical">
           </i>
          </button>
          <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
           <div class="menu-item">
            <a class="menu-link" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-document">
              </i>
             </span>
             <span class="menu-title">
              Details
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" data-modal-toggle="#share_profile_modal" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-share">
              </i>
             </span>
             <span class="menu-title">
              Share
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-file-up">
              </i>
             </span>
             <span class="menu-title">
              Export
             </span>
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
       <p class="text-2sm text-gray-600 font-medium">
        Can view data but doesn't have editing privileges.
       </p>
       <span class="text-2sm text-gray-700 font-medium">
        32 people
       </span>
      </div>
      <div class="card flex flex-col gap-5 p-5 lg:p-7.5">
       <div class="flex items-center flex-wrap justify-between gap-1">
        <div class="flex items-center gap-2.5">
         <div class="relative size-[44px] shrink-0">
          <svg class="w-full h-full stroke-success-clarity fill-success-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
           <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
           18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
           39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
           </path>
           <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
           18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
           39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
           </path>
          </svg>
          <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
           <i class="ki-filled ki-face-id text-1.5xl text-success">
           </i>
          </div>
         </div>
         <div class="flex flex-col">
          <a class="text-md font-semibold text-gray-900 hover:text-primary-active mb-px" href="html/demo1/public-profile/profiles/nft.html">
           Remote Developer
          </a>
          <span class="text-2sm font-medium text-gray-600">
           Remote role
          </span>
         </div>
        </div>
        <div class="menu inline-flex" data-menu="true">
         <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
          <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
           <i class="ki-filled ki-dots-vertical">
           </i>
          </button>
          <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
           <div class="menu-item">
            <a class="menu-link" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-document">
              </i>
             </span>
             <span class="menu-title">
              Details
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" data-modal-toggle="#share_profile_modal" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-share">
              </i>
             </span>
             <span class="menu-title">
              Share
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-file-up">
              </i>
             </span>
             <span class="menu-title">
              Export
             </span>
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
       <p class="text-2sm text-gray-600 font-medium">
        Provides assistance and resolves customer inquiries and issues.
       </p>
       <span class="text-2sm text-gray-700 font-medium">
        6 people
       </span>
      </div>
      <div class="card flex flex-col gap-5 p-5 lg:p-7.5">
       <div class="flex items-center flex-wrap justify-between gap-1">
        <div class="flex items-center gap-2.5">
         <div class="relative size-[44px] shrink-0">
          <svg class="w-full h-full stroke-danger-clarity fill-danger-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
           <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
           18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
           39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
           </path>
           <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
           18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
           39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
           </path>
          </svg>
          <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
           <i class="ki-filled ki-delivery-24 text-1.5xl text-danger">
           </i>
          </div>
         </div>
         <div class="flex flex-col">
          <a class="text-md font-semibold text-gray-900 hover:text-primary-active mb-px" href="html/demo1/public-profile/profiles/blogger.html">
           Customer Support
          </a>
          <span class="text-2sm font-medium text-gray-600">
           Default role
          </span>
         </div>
        </div>
        <div class="menu inline-flex" data-menu="true">
         <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
          <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
           <i class="ki-filled ki-dots-vertical">
           </i>
          </button>
          <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
           <div class="menu-item">
            <a class="menu-link" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-document">
              </i>
             </span>
             <span class="menu-title">
              Details
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" data-modal-toggle="#share_profile_modal" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-share">
              </i>
             </span>
             <span class="menu-title">
              Share
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-file-up">
              </i>
             </span>
             <span class="menu-title">
              Export
             </span>
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
       <p class="text-2sm text-gray-600 font-medium">
        Provides assistance and resolves customer inquiries and issues.
       </p>
       <span class="text-2sm text-gray-700 font-medium">
        32 people
       </span>
      </div>
      <div class="card flex flex-col gap-5 p-5 lg:p-7.5">
       <div class="flex items-center flex-wrap justify-between gap-1">
        <div class="flex items-center gap-2.5">
         <div class="relative size-[44px] shrink-0">
          <svg class="w-full h-full stroke-info-clarity fill-info-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
           <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
           18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
           39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
           </path>
           <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
           18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
           39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
           </path>
          </svg>
          <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
           <i class="ki-filled ki-chart-line-up-2 text-1.5xl text-info">
           </i>
          </div>
         </div>
         <div class="flex flex-col">
          <a class="text-md font-semibold text-gray-900 hover:text-primary-active mb-px" href="html/demo1/public-profile/profiles/crm.html">
           Project Manager
          </a>
          <span class="text-2sm font-medium text-gray-600">
           Default role
          </span>
         </div>
        </div>
        <div class="menu inline-flex" data-menu="true">
         <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
          <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
           <i class="ki-filled ki-dots-vertical">
           </i>
          </button>
          <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
           <div class="menu-item">
            <a class="menu-link" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-document">
              </i>
             </span>
             <span class="menu-title">
              Details
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" data-modal-toggle="#share_profile_modal" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-share">
              </i>
             </span>
             <span class="menu-title">
              Share
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-file-up">
              </i>
             </span>
             <span class="menu-title">
              Export
             </span>
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
       <p class="text-2sm text-gray-600 font-medium">
        Oversees projects, ensures they're on time and within budget.
       </p>
       <span class="text-2sm text-gray-700 font-medium">
        6 people
       </span>
      </div>
      <div class="card flex flex-col gap-5 p-5 lg:p-7.5">
       <div class="flex items-center flex-wrap justify-between gap-1">
        <div class="flex items-center gap-2.5">
         <div class="relative size-[44px] shrink-0">
          <svg class="w-full h-full stroke-gray-300 fill-gray-100" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
           <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
           18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
           39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
           </path>
           <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
           18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
           39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
           </path>
          </svg>
          <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
           <i class="ki-filled ki-design-1 text-1.5xl text-gray-500">
           </i>
          </div>
         </div>
         <div class="flex flex-col">
          <a class="text-md font-semibold text-gray-900 hover:text-primary-active mb-px" href="html/demo1/public-profile/profiles/gamer.html">
           Remote Designer
          </a>
          <span class="text-2sm font-medium text-gray-600">
           Remote role
          </span>
         </div>
        </div>
        <div class="menu inline-flex" data-menu="true">
         <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
          <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
           <i class="ki-filled ki-dots-vertical">
           </i>
          </button>
          <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
           <div class="menu-item">
            <a class="menu-link" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-document">
              </i>
             </span>
             <span class="menu-title">
              Details
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" data-modal-toggle="#share_profile_modal" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-share">
              </i>
             </span>
             <span class="menu-title">
              Share
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-file-up">
              </i>
             </span>
             <span class="menu-title">
              Export
             </span>
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
       <p class="text-2sm text-gray-600 font-medium">
        Creates visual designs remotely for various projects.
       </p>
       <span class="text-2sm text-gray-700 font-medium">
        6 people
       </span>
      </div>
      <div class="card flex flex-col gap-5 p-5 lg:p-7.5">
       <div class="flex items-center flex-wrap justify-between gap-1">
        <div class="flex items-center gap-2.5">
         <div class="relative size-[44px] shrink-0">
          <svg class="w-full h-full stroke-success-clarity fill-success-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
           <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
           18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
           39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
           </path>
           <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
           18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
           39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
           </path>
          </svg>
          <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
           <i class="ki-filled ki-people text-1.5xl text-success">
           </i>
          </div>
         </div>
         <div class="flex flex-col">
          <a class="text-md font-semibold text-gray-900 hover:text-primary-active mb-px" href="html/demo1/public-profile/profiles/feeds.html">
           HR Manager
          </a>
          <span class="text-2sm font-medium text-gray-600">
           Default role
          </span>
         </div>
        </div>
        <div class="menu inline-flex" data-menu="true">
         <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
          <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
           <i class="ki-filled ki-dots-vertical">
           </i>
          </button>
          <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
           <div class="menu-item">
            <a class="menu-link" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-document">
              </i>
             </span>
             <span class="menu-title">
              Details
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" data-modal-toggle="#share_profile_modal" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-share">
              </i>
             </span>
             <span class="menu-title">
              Share
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="#">
             <span class="menu-icon">
              <i class="ki-filled ki-file-up">
              </i>
             </span>
             <span class="menu-title">
              Export
             </span>
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
       <p class="text-2sm text-gray-600 font-medium">
        Manages human resources, recruitment, and employee relations.
       </p>
       <span class="text-2sm text-gray-700 font-medium">
        1 person
       </span>
      </div>
      <style>
       .add-new-bg {
       background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/2600x1200/bg-4.png');
   }
   .dark .add-new-bg {
       background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/2600x1200/bg-4-dark.png');
   }
      </style>
      <a class="card border-2 border-dashed border-brand-clarity bg-center bg-[length:600px] bg-no-repeat add-new-bg" href="html/demo1/public-profile/works.html">
       <div class="card-body grid items-center">
        <div class="flex flex-col gap-3">
         <div class="flex justify-center pt-5">
          <div class="relative size-[60px] shrink-0">
           <svg class="w-full h-full stroke-brand-clarity fill-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
           18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
           39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
            </path>
            <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
           18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
           39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
            </path>
           </svg>
           <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
            <i class="ki-filled ki-rocket text-2xl text-brand">
            </i>
           </div>
          </div>
         </div>
         <div class="flex flex-col text-center">
          <span class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px">
           Add New Role
          </span>
          <span class="text-2sm font-normal text-gray-600">
           Ignite Professional Adventures
          </span>
         </div>
        </div>
       </div>
      </a>
     </div>
    </div>
    <!-- end: container -->
   </main>
   @endsection
