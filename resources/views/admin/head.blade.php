<!DOCTYPE html>
<html lang="en">
@php
use Illuminate\Support\Facades\Session;
@endphp
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{isset($title) && $title ? addslashes($title) : 'Trang chủ'}}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('be/assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('be/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('be/assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('be/assets/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('be/assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('be/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('be/assets/css/vertical-layout-light/style.css')}}">
    <link rel="stylesheet" href="{{asset('be/assets/css/font.css')}}">
    <!-- endinject -->
    <link rel="icon" sizes="32x32" href="https://cdn-faadf.nitrocdn.com/PXDhkKuePccLPNjQsiSGnpotGfeqKVRu/assets/static/optimized/wp-content/uploads/2020/09/383ef0bf0ed3c976cd25f4d2a31a71c3.cropped-512x512-favicon-01-32x32.png">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.1/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
