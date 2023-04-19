@extends('layouts.layout')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Bizning o'qituvchilarimiz</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="/">Bosh sahifa</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">O'qituvchilar</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


     <!-- Team Start -->
     <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Rahbariyat</span></p>
            </div>
            <div class="row">
                @include('sections.teacher')
            </div>
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Bizning o'qituvchilarimiz</span></p>
                <h1 class="mb-4">O'qituvchilarimiz bilan tanishing</h1>
            </div>
            <div class="row">
                @include('sections.teacher')
            </div>
            <div class="row">
                @include('sections.teacher')
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Minnatdorchilik</span></p>
                <h1 class="mb-4">Ota-onalar nima deyishadi!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
            @include('sections.thoughts')
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    @endsection