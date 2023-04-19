@extends('layouts.layout')

@section('content')

<x-header name1="Bosh sahifa" name2="Sinflar"></x-header>

    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Ommabop darslar</span></p>
                <h1 class="mb-4">Farzandlaringiz uchun darslar</h1>
            </div>
            <div class="row">
                @include('sections.group')
            </div>
            <div class="row">
                @include('sections.group')
            </div>
        </div>
    </div>
    <!-- Class End -->


   <!-- Registration Start -->
@include('sections.order')
<!-- Registration End -->


@endsection