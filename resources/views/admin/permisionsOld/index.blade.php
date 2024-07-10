@extends('admin.layouts.common.master')

@section('content')    <main class="grow content pt-5" id="content" role="content">
    <!-- begin: container -->
    <div class="container-fixed" id="content_container">
    </div>
    <!-- end: container -->
    <div class="flex flex-nowrap items-center lg:items-end justify-between border-b border-b-gray-200 dark:border-b-coal-100 gap-6 mb-5 lg:mb-10">
     <!-- begin: container -->
     <div class="container-fixed">
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
           <div class="menu-item">
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
           <div class="menu-item active">
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
        Permissions - Check
       </h1>
       <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
        Overview of all team members and roles.
       </div>
      </div>
      <div class="flex items-center gap-2.5">
       <a class="btn btn-sm btn-light" href="#">
        View Roles
       </a>
      </div>
     </div>
    </div>
    <!-- end: container -->
    <!-- begin: container -->
    <div class="container-fixed">
     <!-- begin: grid -->
     <div class="grid grid-cols-1 xl:grid-cols-3 gap-5 lg:gap-7.5">
      <div class="col-span-2">
       <div class="flex flex-col gap-5 lg:gap-7.5">
        <div class="card">
         <div class="card-header">
          <h3 class="card-title">
           <a class="link" href="#">
            Project Manager
           </a>
           Role Permissions
          </h3>
          <div class="flex gap-5">
           <a class="btn btn-sm btn-light btn-outline" href="#">
            New Permission
           </a>
          </div>
         </div>
         <div class="card-table scrollable-x-auto">
          <table class="table text-gray-700 font-medium text-sm">
           <thead>
            <tr>
             <th class="text-left min-w-[300px]">
              Module
             </th>
             <th class="min-w-24 text-center">
              View
             </th>
             <th class="min-w-24 text-center">
              Modify
             </th>
             <th class="min-w-24 text-center">
              Publish
             </th>
             <th class="min-w-24 text-center">
              Configure
             </th>
            </tr>
           </thead>
           <tbody class="text-gray-900 font-semibold">
            <tr>
             <td class="!py-5.5">
              Workspace Settings
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
            </tr>
            <tr>
             <td class="!py-5.5">
              Billing Management
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
            </tr>
            <tr>
             <td class="!py-5.5">
              Integration Setup
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
            </tr>
            <tr>
             <td class="!py-5.5">
              Map Creation
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
            </tr>
            <tr>
             <td class="!py-5.5">
              Data Export
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
            </tr>
            <tr>
             <td class="!py-5.5">
              User Roles
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
            </tr>
            <tr>
             <td class="!py-5.5">
              Security Settings
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
            </tr>
            <tr>
             <td class="!py-5.5">
              Insights Access
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
            </tr>
            <tr>
             <td class="!py-5.5">
              Merchant List
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input checked="" class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
             <td class="!py-5.5 text-center">
              <input class="checkbox checkbox-sm" name="" type="checkbox" value=""/>
             </td>
            </tr>
           </tbody>
          </table>
         </div>
         <div class="card-footer justify-end py-7.5 gap-2.5">
          <a class="btn btn-light btn-outline" href="#">
           Restore Defaults
          </a>
          <a class="btn btn-primary" href="#">
           Save Changes
          </a>
         </div>
        </div>
        <div class="card card-grid min-w-full">
         <div class="card-header py-5 flex-wrap">
          <h3 class="card-title">
           Role Members
          </h3>
          <div class="flex gap-6">
           <div class="relative">
            <i class="ki-filled ki-magnifier leading-none text-md text-gray-500 absolute top-1/2 left-0 -translate-y-1/2 ml-3">
            </i>
            <input class="input input-sm pl-8" placeholder="Search Members" type="text"/>
           </div>
           <label class="switch switch-sm">
            <input class="order-2" name="check" type="checkbox" value="1"/>
            <span class="switch-label order-1">
             Active Users
            </span>
           </label>
          </div>
         </div>
         <div class="card-body">
          <div data-datatable="true" data-datatable-page-size="10">
           <div class="scrollable-x-auto">
            <table class="table table-border" data-datatable-table="true" id="members_table">
             <thead>
              <tr>
               <th class="w-[60px] text-center">
                <input class="checkbox checkbox-sm" data-datatable-check="true" type="checkbox"/>
               </th>
               <th class="min-w-[300px]">
                <span class="sort asc">
                 <span class="sort-label">
                  Member
                 </span>
                 <span class="sort-icon">
                 </span>
                </span>
               </th>
               <th class="w-[225px]">
                <span class="sort">
                 <span class="sort-label">
                  Location
                 </span>
                 <span class="sort-icon">
                 </span>
                </span>
               </th>
               <th class="w-[225px]">
                <span class="sort">
                 <span class="sort-label">
                  Status
                 </span>
                 <span class="sort-icon">
                 </span>
                </span>
               </th>
               <th class="w-[225px]">
                <span class="sort">
                 <span class="sort-label">
                  Recent activity
                 </span>
                 <span class="sort-icon">
                 </span>
                </span>
               </th>
               <th class="w-[60px]">
               </th>
              </tr>
             </thead>
             <tbody>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="1"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-3.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Tyler Hero
                  </a>
                  <span class="text-2sm text-gray-600">
                   26 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/estonia.svg"/>
                 <span class="leading-none text-gray-700">
                  Estonia
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Current session
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="2"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-2.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Esther Howard
                  </a>
                  <span class="text-2sm text-gray-600">
                   639 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/malaysia.svg"/>
                 <span class="leading-none text-gray-700">
                  Malaysia
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-warning">
                 Pending
                </span>
               </td>
               <td>
                -
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="3"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-11.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Jacob Jones
                  </a>
                  <span class="text-2sm text-gray-600">
                   125 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/ukraine.svg"/>
                 <span class="leading-none text-gray-700">
                  Ukraine
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-primary">
                 Active
                </span>
               </td>
               <td>
                Today, 9:53 am
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="4"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-2.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Cody Fisher
                  </a>
                  <span class="text-2sm text-gray-600">
                   81 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/canada.svg"/>
                 <span class="leading-none text-gray-700">
                  Canada
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-danger">
                 Deleted
                </span>
               </td>
               <td>
                Current session
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="5"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-5.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Leslie Alexander
                  </a>
                  <span class="text-2sm text-gray-600">
                   203 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/india.svg"/>
                 <span class="leading-none text-gray-700">
                  India
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Month ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="6"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-6.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Brooklyn Simmons
                  </a>
                  <span class="text-2sm text-gray-600">
                   45 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/spain.svg"/>
                 <span class="leading-none text-gray-700">
                  Spain
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Today, 3:45 pm
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="7"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-7.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Darlene Robertson
                  </a>
                  <span class="text-2sm text-gray-600">
                   108 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/germany.svg"/>
                 <span class="leading-none text-gray-700">
                  Germany
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-warning">
                 Pending
                </span>
               </td>
               <td>
                2 days ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="8"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-8.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Jerome Bell
                  </a>
                  <span class="text-2sm text-gray-600">
                   91 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/france.svg"/>
                 <span class="leading-none text-gray-700">
                  France
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Week ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="9"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-9.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Devon Lane
                  </a>
                  <span class="text-2sm text-gray-600">
                   56 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/japan.svg"/>
                 <span class="leading-none text-gray-700">
                  Japan
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Today, 11:00 am
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="10"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-10.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Jane Cooper
                  </a>
                  <span class="text-2sm text-gray-600">
                   47 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/south-korea.svg"/>
                 <span class="leading-none text-gray-700">
                  South Korea
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-warning">
                 Pending
                </span>
               </td>
               <td>
                3 days ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="11"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-12.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Ronald Richards
                  </a>
                  <span class="text-2sm text-gray-600">
                   64 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/brazil.svg"/>
                 <span class="leading-none text-gray-700">
                  Brazil
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Month ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="12"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-13.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Kathryn Murphy
                  </a>
                  <span class="text-2sm text-gray-600">
                   78 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/united-kingdom.svg"/>
                 <span class="leading-none text-gray-700">
                  United Kingdom
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Today, 10:30 am
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="13"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-14.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Jacob Smith
                  </a>
                  <span class="text-2sm text-gray-600">
                   92 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/australia.svg"/>
                 <span class="leading-none text-gray-700">
                  Australia
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-warning">
                 Pending
                </span>
               </td>
               <td>
                Week ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="14"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-15.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Kristin Watson
                  </a>
                  <span class="text-2sm text-gray-600">
                   102 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/italy.svg"/>
                 <span class="leading-none text-gray-700">
                  Italy
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Today, 8:00 am
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="15"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-16.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Cameron Williamson
                  </a>
                  <span class="text-2sm text-gray-600">
                   58 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/russia.svg"/>
                 <span class="leading-none text-gray-700">
                  Russia
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-danger">
                 Deleted
                </span>
               </td>
               <td>
                2 days ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="16"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-17.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Courtney Henry
                  </a>
                  <span class="text-2sm text-gray-600">
                   75 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/india.svg"/>
                 <span class="leading-none text-gray-700">
                  India
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Month ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="17"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-18.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Ralph Edwards
                  </a>
                  <span class="text-2sm text-gray-600">
                   109 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/spain.svg"/>
                 <span class="leading-none text-gray-700">
                  Spain
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-warning">
                 Pending
                </span>
               </td>
               <td>
                Week ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="18"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-19.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Arlene McCoy
                  </a>
                  <span class="text-2sm text-gray-600">
                   84 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/canada.svg"/>
                 <span class="leading-none text-gray-700">
                  Canada
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-danger">
                 Deleted
                </span>
               </td>
               <td>
                Today, 1:00 pm
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="19"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-20.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Theresa Webb
                  </a>
                  <span class="text-2sm text-gray-600">
                   56 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/malaysia.svg"/>
                 <span class="leading-none text-gray-700">
                  Malaysia
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Week ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="20"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-21.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Guy Hawkins
                  </a>
                  <span class="text-2sm text-gray-600">
                   68 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/estonia.svg"/>
                 <span class="leading-none text-gray-700">
                  Estonia
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-warning">
                 Pending
                </span>
               </td>
               <td>
                Today, 3:00 pm
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="21"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-22.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Floyd Miles
                  </a>
                  <span class="text-2sm text-gray-600">
                   43 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/ukraine.svg"/>
                 <span class="leading-none text-gray-700">
                  Ukraine
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Today, 11:45 am
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="22"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-23.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Devon Lane
                  </a>
                  <span class="text-2sm text-gray-600">
                   91 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/india.svg"/>
                 <span class="leading-none text-gray-700">
                  India
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-danger">
                 Deleted
                </span>
               </td>
               <td>
                Month ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="23"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-24.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Ronald Richards
                  </a>
                  <span class="text-2sm text-gray-600">
                   78 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/france.svg"/>
                 <span class="leading-none text-gray-700">
                  France
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Week ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="24"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-25.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Kathryn Murphy
                  </a>
                  <span class="text-2sm text-gray-600">
                   85 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/japan.svg"/>
                 <span class="leading-none text-gray-700">
                  Japan
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-warning">
                 Pending
                </span>
               </td>
               <td>
                Today, 4:00 pm
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="25"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-26.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Jacob Smith
                  </a>
                  <span class="text-2sm text-gray-600">
                   92 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/south-korea.svg"/>
                 <span class="leading-none text-gray-700">
                  South Korea
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-danger">
                 Deleted
                </span>
               </td>
               <td>
                Week ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="26"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-27.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Kristin Watson
                  </a>
                  <span class="text-2sm text-gray-600">
                   102 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/italy.svg"/>
                 <span class="leading-none text-gray-700">
                  Italy
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Today, 8:00 am
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="27"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-28.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Cameron Williamson
                  </a>
                  <span class="text-2sm text-gray-600">
                   58 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/russia.svg"/>
                 <span class="leading-none text-gray-700">
                  Russia
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-warning">
                 Pending
                </span>
               </td>
               <td>
                2 days ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="28"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-29.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Courtney Henry
                  </a>
                  <span class="text-2sm text-gray-600">
                   75 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/spain.svg"/>
                 <span class="leading-none text-gray-700">
                  Spain
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Month ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="29"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-30.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Ralph Edwards
                  </a>
                  <span class="text-2sm text-gray-600">
                   109 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/canada.svg"/>
                 <span class="leading-none text-gray-700">
                  Canada
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-danger">
                 Deleted
                </span>
               </td>
               <td>
                Week ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="30"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-31.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Arlene McCoy
                  </a>
                  <span class="text-2sm text-gray-600">
                   84 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/malaysia.svg"/>
                 <span class="leading-none text-gray-700">
                  Malaysia
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Today, 1:00 pm
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="31"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-32.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Theresa Webb
                  </a>
                  <span class="text-2sm text-gray-600">
                   56 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/estonia.svg"/>
                 <span class="leading-none text-gray-700">
                  Estonia
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-warning">
                 Pending
                </span>
               </td>
               <td>
                Week ago
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="32"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-33.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Guy Hawkins
                  </a>
                  <span class="text-2sm text-gray-600">
                   68 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/ukraine.svg"/>
                 <span class="leading-none text-gray-700">
                  Ukraine
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-danger">
                 Deleted
                </span>
               </td>
               <td>
                Today, 3:00 pm
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td class="text-center">
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="33"/>
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="">
                  <img class="h-9 rounded-full" src="assets/media/avatars/300-34.png"/>
                 </div>
                 <div class="flex flex-col gap-0.5">
                  <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                   Floyd Miles
                  </a>
                  <span class="text-2sm text-gray-600">
                   43 tasks
                  </span>
                 </div>
                </div>
               </td>
               <td>
                <div class="flex items-center gap-1.5">
                 <img alt="flag" class="h-4 rounded-full" src="assets/media/flags/india.svg"/>
                 <span class="leading-none text-gray-700">
                  India
                 </span>
                </div>
               </td>
               <td>
                <span class="badge badge-sm badge-outline badge-success">
                 Active
                </span>
               </td>
               <td>
                Today, 11:45 am
               </td>
               <td>
                <div class="menu" data-menu="true">
                 <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                   <i class="ki-filled ki-dots-vertical">
                   </i>
                  </button>
                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-search-list">
                      </i>
                     </span>
                     <span class="menu-title">
                      View
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
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-pencil">
                      </i>
                     </span>
                     <span class="menu-title">
                      Edit
                     </span>
                    </a>
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-copy">
                      </i>
                     </span>
                     <span class="menu-title">
                      Make a copy
                     </span>
                    </a>
                   </div>
                   <div class="menu-separator">
                   </div>
                   <div class="menu-item">
                    <a class="menu-link" href="#">
                     <span class="menu-icon">
                      <i class="ki-filled ki-trash">
                      </i>
                     </span>
                     <span class="menu-title">
                      Remove
                     </span>
                    </a>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
             </tbody>
            </table>
           </div>
           <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
            <div class="flex items-center gap-2 order-2 md:order-1">
             Show
             <select class="select select-sm w-16" data-datatable-size="true" name="perpage">
             </select>
             per page
            </div>
            <div class="flex items-center gap-4 order-1 md:order-2">
             <span data-datatable-info="true">
             </span>
             <div class="pagination" data-datatable-pagination="true">
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="card">
         <div class="card-header">
          <h3 class="card-title">
           FAQ
          </h3>
         </div>
         <div class="card-body py-3">
          <div data-accordion="true" data-accordion-expand-all="true">
           <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_1_content">
             <span class="text-base text-gray-900 font-medium">
              How is pricing determined for each plan ?
             </span>
             <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
             </i>
             <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
             </i>
            </button>
            <div class="accordion-content hidden" id="faq_1_content">
             <div class="text-gray-700 text-md pb-4">
              Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
           Understanding the factors influencing each plan's pricing helps you make an informed decision.
           Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
           Understanding the factors influencing each plan's pricing helps you make an informed decision.
           Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
           Understanding the factors influencing each plan's pricing helps you make an informed decision
             </div>
            </div>
           </div>
           <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_2_content">
             <span class="text-base text-gray-900 font-medium">
              What payment methods are accepted for subscriptions ?
             </span>
             <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
             </i>
             <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
             </i>
            </button>
            <div class="accordion-content hidden" id="faq_2_content">
             <div class="text-gray-700 text-md pb-4">
              Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
           Understanding the factors influencing each plan's pricing helps you make an informed decision
             </div>
            </div>
           </div>
           <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_3_content">
             <span class="text-base text-gray-900 font-medium">
              Are there any hidden fees in the pricing ?
             </span>
             <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
             </i>
             <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
             </i>
            </button>
            <div class="accordion-content hidden" id="faq_3_content">
             <div class="text-gray-700 text-md pb-4">
              Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
           Understanding the factors influencing each plan's pricing helps you make an informed decision
             </div>
            </div>
           </div>
           <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_4_content">
             <span class="text-base text-gray-900 font-medium">
              Is there a discount for annual subscriptions ?
             </span>
             <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
             </i>
             <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
             </i>
            </button>
            <div class="accordion-content hidden" id="faq_4_content">
             <div class="text-gray-700 text-md pb-4">
              Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
           Understanding the factors influencing each plan's pricing helps you make an informed decision
             </div>
            </div>
           </div>
           <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_5_content">
             <span class="text-base text-gray-900 font-medium">
              Do you offer refunds on subscription cancellations ?
             </span>
             <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
             </i>
             <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
             </i>
            </button>
            <div class="accordion-content hidden" id="faq_5_content">
             <div class="text-gray-700 text-md pb-4">
              Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
           Understanding the factors influencing each plan's pricing helps you make an informed decision
             </div>
            </div>
           </div>
           <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_6_content">
             <span class="text-base text-gray-900 font-medium">
              Can I add extra features to my current plan ?
             </span>
             <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
             </i>
             <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
             </i>
            </button>
            <div class="accordion-content hidden" id="faq_6_content">
             <div class="text-gray-700 text-md pb-4">
              Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
           Understanding the factors influencing each plan's pricing helps you make an informed decision
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="card">
         <div class="card-body px-10 py-7.5 lg:pr-12.5">
          <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
           <div class="flex flex-col items-start gap-3">
            <h2 class="text-1.5xl font-semibold text-gray-900">
             Contact Support
            </h2>
            <p class="text-sm font-medium text-gray-700 leading-5.5 mb-2.5">
             Need assistance? Contact our support team for prompt, personalized help your queries &amp; concerns.
            </p>
           </div>
           <img alt="image" class="dark:hidden max-h-[150px]" src="assets/media/illustrations/31.svg"/>
           <img alt="image" class="light:hidden max-h-[150px]" src="assets/media/illustrations/31-dark.svg"/>
          </div>
         </div>
         <div class="card-footer justify-center">
          <a class="btn btn-link" href="">
           Contact Support
          </a>
         </div>
        </div>
       </div>
      </div>
      <div class="col-span-1">
       <div class="flex flex-col gap-5 lg:gap-7.5">
        <div class="card">
         <div class="card-body py-10 flex flex-col gap-5 lg:gap-7.5">
          <div class="flex flex-col items-start gap-2.5">
           <div class="mb-2.5">
            <div class="relative size-[50px] shrink-0">
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
              <i class="ki-filled ki-security-user text-1.5xl ps-px text-brand">
              </i>
             </div>
            </div>
           </div>
           <a class="text-base font-semibold text-gray-900 hover:text-primary" href="#">
            Optimizing Team Coordination: Role Assignment Tools
           </a>
           <p class="text-sm text-gray-700">
            Empower your team with dynamic role assignment capabilities. Utilize our intuitive tools to assign and manage user permissions effectively. Explore resources and best practices to maximize team efficiency.
           </p>
           <a class="btn btn-link flex-none" href="#">
            Learn more
           </a>
          </div>
          <span class="hidden [&amp;:not(:last-child)]:block [&amp;:not(:last-child)]:border-b border-b-gray-200">
          </span>
          <div class="flex flex-col items-start gap-2.5">
           <div class="mb-2.5">
            <div class="relative size-[50px] shrink-0">
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
              <i class="ki-filled ki-toggle-on-circle text-1.5xl ps-px text-brand">
              </i>
             </div>
            </div>
           </div>
           <a class="text-base font-semibold text-gray-900 hover:text-primary" href="#">
            Refining Access Control: Permissions Customization
           </a>
           <p class="text-sm text-gray-700">
            Tailor user experiences with customizable permission settings. Our detailed guides and resources provide streamlined processes for managing access levels. Ensure secure and precise control over your workspace's functionalities.
           </p>
           <a class="btn btn-link flex-none" href="#">
            Learn more
           </a>
          </div>
          <span class="hidden [&amp;:not(:last-child)]:block [&amp;:not(:last-child)]:border-b border-b-gray-200">
          </span>
          <div class="flex flex-col items-start gap-2.5">
           <div class="mb-2.5">
            <div class="relative size-[50px] shrink-0">
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
              <i class="ki-filled ki-shield-tick text-1.5xl ps-px text-brand">
              </i>
             </div>
            </div>
           </div>
           <a class="text-base font-semibold text-gray-900 hover:text-primary" href="#">
            Enhanced Security Management: Granular Permission Settings
           </a>
           <p class="text-sm text-gray-700">
            Fortify your workspace with enhanced permission controls. Our advanced settings allow for granular access management, ensuring each team member has the appropriate level of access. Benefit from our comprehensive security protocols and guidance.
           </p>
           <a class="btn btn-link flex-none" href="#">
            Learn more
           </a>
          </div>
          <span class="hidden [&amp;:not(:last-child)]:block [&amp;:not(:last-child)]:border-b border-b-gray-200">
          </span>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- end: grid -->
    </div>
    <!-- end: container -->
   </main>
   @endsection
