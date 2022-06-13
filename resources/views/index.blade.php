@extends('layout.master')

@section('title') Subjects @stop

@section('content')

    <div class="row m-auto">

        <!-- Start Categories -->
        @include('components.categories')
        <!-- End Categories -->

        <!-- Start Card -->
        <div class="col-lg-9 col-12 m-auto mb-3">
            <div class="card" style="border-radius: 40px;">
                <!-- card title -->
                <div class="card-header p-3 d-flex justify-content-between bg-transparent">
                    <h1 class="fs-3 text-blue">Subjects</h1>
                    <div class="d-flex justify-content-center gap-3 align-items-center">
                        <a href="">
                            <i class="bi bi-pencil-square text-blue-light"></i>
                        </a>
                        <a href="">
                            <i class="bi bi-trash3 text-red"></i>
                        </a>
                    </div>
                </div>
                <!-- card body -->
                <div class="card-body p-4 pt-5">
                    <form action="">
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-3 col-md-4 col-12 mb-2 text-secondary" for="name">Subject's name</label>
                            <div class="col-lg-6 col-md-8 col-12 input">
                                <input type="text" id="name">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-3 col-md-4 col-12 mb-2 text-secondary" for="type">Subject's type</label>
                            <div class="col-lg-6 col-md-8 col-12 input">
                                <input type="text" id="type">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-3 col-md-4 col-12 mb-2 text-secondary" for="College">College</label>
                            <div class="col-lg-6 col-md-8 col-12 input">
                                <input type="text" id="college">
                            </div>
                        </div>
                        <div class="text-end mb-4">
                            <button type="submit" class="btn btn-primary rounded-pill px-5 shadow bg-blue-light">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Card -->

    </div>

@stop
