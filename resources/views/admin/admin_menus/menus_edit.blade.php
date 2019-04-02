@extends('layouts.admin')

{{-- @section('header') --}}

    @include('admin.header')

{{-- @endsection --}}

@section('content')

    @include('admin.admin_menus.content_menus_edit')

@endsection