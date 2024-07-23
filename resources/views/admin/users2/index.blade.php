@extends('admin.layouts.common.master')

@section('content')


<main class="grow content pt-5" id="content" role="content">
    <!-- begin: container -->
    <div class="container-fixed" id="content_container">
    </div>
    <!-- end: container -->
    <!-- begin: container -->
    <div class="container-fixed">
        <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
            <div class="flex flex-col justify-center gap-2">
                <h1 class="text-xl font-semibold leading-none text-gray-900">
                    Team Crew
                </h1>
                <div class="flex items-center flex-wrap gap-1.5 font-medium">
                    <span class="text-md text-gray-600">
                        All Members:
                    </span>
                    <span class="text-md text-gray-800 font-semibold me-2">
                        49,053
                    </span>
                    <span class="text-md text-gray-600">
                        Pro Licenses
                    </span>
                    <span class="text-md text-gray-800 font-semibold">
                        724
                    </span>
                </div>
            </div>
            <div class="flex items-center gap-2.5">
                <a class="btn btn-sm btn-light" href="#">
                    Import CSV
                </a>
                <a class="btn btn-sm btn-primary" href="#">
                    Add Member
                </a>
            </div>
        </div>
    </div>
    <!-- end: container -->
    <!-- begin: container -->
    <div class="container-fixed">
        <div class="grid gap-5 lg:gap-7.5">
            <div class="card card-grid min-w-full">
                <div class="card-header flex-wrap gap-2">
                    <h3 class="card-title font-medium text-sm">
                        Showing 20 of 68 users
                    </h3>
                    <div class="flex flex-wrap gap-2 lg:gap-5">
                        <div class="flex">
                            <label class="input input-sm">
                                <i class="ki-filled ki-magnifier">
                                </i>
                                <input placeholder="Search users" type="text" value="">
                                </input>
                            </label>
                        </div>
                        <div class="flex flex-wrap gap-2.5">
                            <select class="select select-sm w-28">
                                <option value="1">
                                    Active
                                </option>
                                <option value="2">
                                    Disabled
                                </option>
                                <option value="2">
                                    Pending
                                </option>
                            </select>
                            <select class="select select-sm w-28">
                                <option value="1">
                                    Latest
                                </option>
                                <option value="2">
                                    Older
                                </option>
                                <option value="3">
                                    Oldest
                                </option>
                            </select>
                            <button class="btn btn-sm btn-outline btn-primary">
                                <i class="ki-filled ki-setting-4">
                                </i>
                                Filters
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div data-datatable="true" data-datatable-page-size="20">
                        <div class="scrollable-x-auto">
                            <table class="table table-auto table-border" data-datatable-table="true">
                                <thead>
                                    <tr>
                                        <th class="w-[60px] text-center">
                                            <input class="checkbox checkbox-sm" data-datatable-check="true" type="checkbox" />
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
                                        <th class="min-w-[180px]">
                                            <span class="sort">
                                                <span class="sort-label">
                                                    Role
                                                </span>
                                                <span class="sort-icon">
                                                </span>
                                            </span>
                                        </th>
                                        <th class="min-w-[180px]">
                                            <span class="sort">
                                                <span class="sort-label">
                                                    Status
                                                </span>
                                                <span class="sort-icon">
                                                </span>
                                            </span>
                                        </th>
                                        <th class="min-w-[180px]">
                                            <span class="sort">
                                                <span class="sort-label">
                                                    Location
                                                </span>
                                                <span class="sort-icon">
                                                </span>
                                            </span>
                                        </th>
                                        <th class="min-w-[180px]">
                                            <span class="sort">
                                                <span class="sort-label">
                                                    Activity
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="1" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-1.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Esther Howard
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        esther.howard@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Editor
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/malaysia.svg" />
                                                Malaysia
                                            </div>
                                        </td>
                                        <td>
                                            Week ago
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="2" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-2.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Cody Fisher
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        cody.fisher@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Manager
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/canada.svg" />
                                                Canada
                                            </div>
                                        </td>
                                        <td>
                                            Current session
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="3" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-3.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Tyler Hero
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        tyler.hero@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Super Admin
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/estonia.svg" />
                                                Estonia
                                            </div>
                                        </td>
                                        <td>
                                            Current session
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="4" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-4.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Robert Fox
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        robert.fox@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Developer
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/united-states.svg" />
                                                USA
                                            </div>
                                        </td>
                                        <td>
                                            Today, 15:02
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="5" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-5.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Leslie Alexander
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        leslie.alexander@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Super Admin
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/india.svg" />
                                                India
                                            </div>
                                        </td>
                                        <td>
                                            Month ago
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="6" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-6.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        John Smith
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        john.smith@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Designer
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/australia.svg" />
                                                Australia
                                            </div>
                                        </td>
                                        <td>
                                            Yesterday, 14:23
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="7" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-7.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Emily Johnson
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        emily.johnson@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Developer
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/france.svg" />
                                                France
                                            </div>
                                        </td>
                                        <td>
                                            Today, 10:12
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="8" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-8.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Michael Brown
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        michael.brown@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            QA Engineer
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/germany.svg" />
                                                Germany
                                            </div>
                                        </td>
                                        <td>
                                            Today, 09:45
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="9" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-9.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        William Davis
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        william.davis@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Support
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/spain.svg" />
                                                Spain
                                            </div>
                                        </td>
                                        <td>
                                            Last week
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="10" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-10.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Olivia Martinez
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        olivia.martinez@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Product Manager
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/italy.svg" />
                                                Italy
                                            </div>
                                        </td>
                                        <td>
                                            Current session
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="11" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-11.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Jacob Jones
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        jacob.jones@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Analyst
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/ukraine.svg" />
                                                Ukraine
                                            </div>
                                        </td>
                                        <td>
                                            Today, 9:53 am
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="12" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-12.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Daniel Wilson
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        daniel.wilson@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            CTO
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/japan.svg" />
                                                Japan
                                            </div>
                                        </td>
                                        <td>
                                            Yesterday, 17:45
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="13" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-13.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Sophia Lee
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        sophia.lee@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            HR
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/south-korea.svg" />
                                                South Korea
                                            </div>
                                        </td>
                                        <td>
                                            Week ago
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="14" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-14.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        James Miller
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        james.miller@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            DevOps
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/russia.svg" />
                                                Russia
                                            </div>
                                        </td>
                                        <td>
                                            Today, 11:30
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="15" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-15.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Linda Scott
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        linda.scott@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Designer
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/netherlands.svg" />
                                                Netherlands
                                            </div>
                                        </td>
                                        <td>
                                            Today, 13:22
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="16" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-16.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Anthony Thomas
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        anthony.thomas@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Engineer
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/sweden.svg" />
                                                Sweden
                                            </div>
                                        </td>
                                        <td>
                                            Month ago
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="17" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-17.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Christopher Martinez
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        christopher.martinez@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Analyst
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/mexico.svg" />
                                                Mexico
                                            </div>
                                        </td>
                                        <td>
                                            Yesterday, 10:50
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="18" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-18.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Ronald Richards
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        ronald.richards@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Manager
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/uruguay.svg" />
                                                Uruguay
                                            </div>
                                        </td>
                                        <td>
                                            Current session
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="19" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-19.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Jennifer Thomas
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        jennifer.thomas@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            HR
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/brazil.svg" />
                                                Brazil
                                            </div>
                                        </td>
                                        <td>
                                            Today, 14:20
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="20" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-20.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Guy Hawkins
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        guy.hawkins@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            HR
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/turkey.svg" />
                                                Turkey
                                            </div>
                                        </td>
                                        <td>
                                            Current session
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="21" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-21.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Natalie Watson
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        natalie.watson@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Editor
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/finland.svg" />
                                                Finland
                                            </div>
                                        </td>
                                        <td>
                                            Week ago
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="22" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-22.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Marvin McKinney
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        marvin.mckenney@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Viewer
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/latvia.svg" />
                                                Latvia
                                            </div>
                                        </td>
                                        <td>
                                            Week ago
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="23" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-23.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Theresa Webb
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        theresa.webb@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Admin
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/brazil.svg" />
                                                Brazil
                                            </div>
                                        </td>
                                        <td>
                                            Current session
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="24" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-24.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Brian Ross
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        brian.ross@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Designer
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/norway.svg" />
                                                Norway
                                            </div>
                                        </td>
                                        <td>
                                            Today, 08:30
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="25" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-25.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Donald Coleman
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        donald.coleman@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Manager
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/ireland.svg" />
                                                Ireland
                                            </div>
                                        </td>
                                        <td>
                                            Yesterday, 12:00
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="26" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-26.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Jason Reed
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        jason.reed@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Engineer
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/belgium.svg" />
                                                Belgium
                                            </div>
                                        </td>
                                        <td>
                                            Month ago
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="27" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-27.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Paul Walker
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        paul.walker@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Developer
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/denmark.svg" />
                                                Denmark
                                            </div>
                                        </td>
                                        <td>
                                            Yesterday, 16:00
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="28" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-28.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Andrew Mitchell
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        andrew.mitchell@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Product Manager
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/portugal.svg" />
                                                Portugal
                                            </div>
                                        </td>
                                        <td>
                                            Today, 12:45
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="29" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-29.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Kevin Evans
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        kevin.evans@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Support
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/austria.svg" />
                                                Austria
                                            </div>
                                        </td>
                                        <td>
                                            Today, 14:00
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="30" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-30.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Steven Harris
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        steven.harris@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Admin
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/greece.svg" />
                                                Greece
                                            </div>
                                        </td>
                                        <td>
                                            Current session
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="31" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-31.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Thomas Clark
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        thomas.clark@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Analyst
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/switzerland.svg" />
                                                Switzerland
                                            </div>
                                        </td>
                                        <td>
                                            Today, 11:00
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="32" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-32.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Justin Adams
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        justin.adams@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Viewer
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/czech-republic.svg" />
                                                Czech Republic
                                            </div>
                                        </td>
                                        <td>
                                            Yesterday, 15:30
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="33" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-33.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Charles Carter
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        charles.carter@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Engineer
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/hungary.svg" />
                                                Hungary
                                            </div>
                                        </td>
                                        <td>
                                            Today, 10:30
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="34" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-34.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Jessica Evans
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        jessica.evans@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Designer
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/poland.svg" />
                                                Poland
                                            </div>
                                        </td>
                                        <td>
                                            Today, 13:45
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="35" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-1.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Esther Howard
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        esther.howard@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Editor
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/malaysia.svg" />
                                                Malaysia
                                            </div>
                                        </td>
                                        <td>
                                            Week ago
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="36" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-2.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Cody Fisher
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        cody.fisher@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Manager
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/canada.svg" />
                                                Canada
                                            </div>
                                        </td>
                                        <td>
                                            Current session
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="37" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-3.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Tyler Hero
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        tyler.hero@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Super Admin
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/estonia.svg" />
                                                Estonia
                                            </div>
                                        </td>
                                        <td>
                                            Current session
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="38" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-4.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Robert Fox
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        robert.fox@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Developer
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/united-states.svg" />
                                                USA
                                            </div>
                                        </td>
                                        <td>
                                            Today, 15:02
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="39" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-5.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Leslie Alexander
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        leslie.alexander@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Super Admin
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/india.svg" />
                                                India
                                            </div>
                                        </td>
                                        <td>
                                            Month ago
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="40" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-6.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        John Smith
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        john.smith@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Designer
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/australia.svg" />
                                                Australia
                                            </div>
                                        </td>
                                        <td>
                                            Yesterday, 14:23
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="41" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-7.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Emily Johnson
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        emily.johnson@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Developer
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/france.svg" />
                                                France
                                            </div>
                                        </td>
                                        <td>
                                            Today, 10:12
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="42" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-8.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Michael Brown
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        michael.brown@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            QA Engineer
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/germany.svg" />
                                                Germany
                                            </div>
                                        </td>
                                        <td>
                                            Today, 09:45
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="43" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-9.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        William Davis
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        william.davis@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Support
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/spain.svg" />
                                                Spain
                                            </div>
                                        </td>
                                        <td>
                                            Last week
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="44" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-10.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Olivia Martinez
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        olivia.martinez@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Product Manager
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/italy.svg" />
                                                Italy
                                            </div>
                                        </td>
                                        <td>
                                            Current session
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="45" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-11.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Jacob Jones
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        jacob.jones@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Analyst
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/ukraine.svg" />
                                                Ukraine
                                            </div>
                                        </td>
                                        <td>
                                            Today, 9:53 am
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="46" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-12.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Daniel Wilson
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        daniel.wilson@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            CTO
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/japan.svg" />
                                                Japan
                                            </div>
                                        </td>
                                        <td>
                                            Yesterday, 17:45
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="47" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-13.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Sophia Lee
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        sophia.lee@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            HR
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/south-korea.svg" />
                                                South Korea
                                            </div>
                                        </td>
                                        <td>
                                            Week ago
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="48" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-14.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        James Miller
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        james.miller@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            DevOps
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/russia.svg" />
                                                Russia
                                            </div>
                                        </td>
                                        <td>
                                            Today, 11:30
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="49" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-15.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Linda Scott
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        linda.scott@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Designer
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/netherlands.svg" />
                                                Netherlands
                                            </div>
                                        </td>
                                        <td>
                                            Today, 13:22
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="50" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-16.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Anthony Thomas
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        anthony.thomas@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Engineer
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/sweden.svg" />
                                                Sweden
                                            </div>
                                        </td>
                                        <td>
                                            Month ago
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="51" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-17.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Christopher Martinez
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        christopher.martinez@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Analyst
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/mexico.svg" />
                                                Mexico
                                            </div>
                                        </td>
                                        <td>
                                            Yesterday, 10:50
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="52" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-18.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Ronald Richards
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        ronald.richards@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Manager
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/uruguay.svg" />
                                                Uruguay
                                            </div>
                                        </td>
                                        <td>
                                            Current session
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="53" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-19.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Jennifer Thomas
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        jennifer.thomas@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            HR
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/brazil.svg" />
                                                Brazil
                                            </div>
                                        </td>
                                        <td>
                                            Today, 14:20
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="54" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-20.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Guy Hawkins
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        guy.hawkins@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            HR
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/turkey.svg" />
                                                Turkey
                                            </div>
                                        </td>
                                        <td>
                                            Current session
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="55" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-21.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Natalie Watson
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        natalie.watson@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Editor
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/finland.svg" />
                                                Finland
                                            </div>
                                        </td>
                                        <td>
                                            Week ago
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="56" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-22.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Marvin McKinney
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        marvin.mckenney@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Viewer
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/latvia.svg" />
                                                Latvia
                                            </div>
                                        </td>
                                        <td>
                                            Week ago
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="57" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-23.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Theresa Webb
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        theresa.webb@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Admin
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/brazil.svg" />
                                                Brazil
                                            </div>
                                        </td>
                                        <td>
                                            Current session
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="58" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-24.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Brian Ross
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        brian.ross@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Designer
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/norway.svg" />
                                                Norway
                                            </div>
                                        </td>
                                        <td>
                                            Today, 08:30
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="59" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-25.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Donald Coleman
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        donald.coleman@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Manager
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/ireland.svg" />
                                                Ireland
                                            </div>
                                        </td>
                                        <td>
                                            Yesterday, 12:00
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="60" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-26.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Jason Reed
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        jason.reed@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Engineer
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/belgium.svg" />
                                                Belgium
                                            </div>
                                        </td>
                                        <td>
                                            Month ago
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="61" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-27.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Paul Walker
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        paul.walker@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Developer
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/denmark.svg" />
                                                Denmark
                                            </div>
                                        </td>
                                        <td>
                                            Yesterday, 16:00
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="62" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-28.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Andrew Mitchell
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        andrew.mitchell@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Product Manager
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/portugal.svg" />
                                                Portugal
                                            </div>
                                        </td>
                                        <td>
                                            Today, 12:45
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="63" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-29.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Kevin Evans
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        kevin.evans@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Support
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/austria.svg" />
                                                Austria
                                            </div>
                                        </td>
                                        <td>
                                            Today, 14:00
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="64" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-30.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Steven Harris
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        steven.harris@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Admin
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/greece.svg" />
                                                Greece
                                            </div>
                                        </td>
                                        <td>
                                            Current session
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="65" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-31.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Thomas Clark
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        thomas.clark@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Analyst
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/switzerland.svg" />
                                                Switzerland
                                            </div>
                                        </td>
                                        <td>
                                            Today, 11:00
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="66" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-32.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Justin Adams
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        justin.adams@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Viewer
                                        </td>
                                        <td>
                                            <span class="badge badge-danger badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                </span>
                                                On Leave
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/czech-republic.svg" />
                                                Czech Republic
                                            </div>
                                        </td>
                                        <td>
                                            Yesterday, 15:30
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="67" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-33.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Charles Carter
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        charles.carter@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Engineer
                                        </td>
                                        <td>
                                            <span class="badge badge-success badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-success me-1.5">
                                                </span>
                                                In Office
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/hungary.svg" />
                                                Hungary
                                            </div>
                                        </td>
                                        <td>
                                            Today, 10:30
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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
                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="68" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-34.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                                        Jessica Evans
                                                    </a>
                                                    <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                                                        jessica.evans@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Designer
                                        </td>
                                        <td>
                                            <span class="badge badge-primary badge-outline rounded-[30px]">
                                                <span class="size-1.5 rounded-full bg-primary me-1.5">
                                                </span>
                                                Remote
                                            </span>
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5">
                                                <img alt="" class="rounded-full size-4 shrink-0" src="assets/media/flags/poland.svg" />
                                                Poland
                                            </div>
                                        </td>
                                        <td>
                                            Today, 13:45
                                        </td>
                                        <td class="text-center">
                                            <div class="menu flex-inline" data-menu="true">
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


        </div>
    </div>
    <!-- end: container -->
</main>
@endsection
