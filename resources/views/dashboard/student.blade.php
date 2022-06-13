@extends('layout.master')

@section('title') Students @stop

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
                    <h1 class="fs-3 text-blue">Students</h1>
                    <div class="d-flex justify-content-center gap-3 align-items-center">
                        <a href="" type="button" data-bs-toggle="modal" data-bs-target="#editModal">
                            <i class="bi bi-pencil-square text-blue-light"></i>
                        </a>
                        <a href="" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="bi bi-trash3 text-red"></i>
                        </a>
                    </div>
                </div>
                <!-- card body -->
                <div class="card-body p-4 pt-5">
                    <form action="">
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-3 col-md-4 col-12 mb-2 text-secondary" for="name">Student's name</label>
                            <div class="col-lg-6 col-md-8 col-12 input">
                                <input type="text" id="name">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-3 col-md-4 col-12 mb-2 text-secondary" for="number">Academic number</label>
                            <div class="col-lg-6 col-md-8 col-12 input">
                                <input type="text" id="number">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-3 col-md-4 col-12 mb-2 text-secondary" for="College">College</label>
                            <div class="col-lg-6 col-md-8 col-12 input">
                                <input type="text" id="college">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-3 col-md-4 col-12 mb-2 text-secondary" for="Dep">Dep</label>
                            <div class="col-lg-6 col-md-8 col-12 input">
                                <input type="text" id="Dep">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-3 col-md-4 col-12 mb-2 text-secondary" for="Calss">Calss</label>
                            <div class="col-lg-6 col-md-8 col-12 input">
                                <input type="text" id="Calss">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-3 col-md-4 col-12 mb-2 text-secondary" for="Level">Level</label>
                            <div class="col-lg-6 col-md-8 col-12 input">
                                <input type="text" id="Level">
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

    <!-- Modal edit student -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-4 col-12 mb-2 text-secondary" for="name">Student's name</label>
                            <div class="col-lg-7 col-11 input">
                                <input type="text" id="name">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-4 col-12 mb-2 text-secondary" for="number">Academic number</label>
                            <div class="col-lg-7 col-11 input">
                                <input type="text" id="number">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-4 col-12 mb-2 text-secondary" for="College">College</label>
                            <div class="col-lg-7 col-11 input">
                                <input type="text" id="college">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-4 col-12 mb-2 text-secondary" for="Dep">Dep</label>
                            <div class="col-lg-7 col-11 input">
                                <input type="text" id="Dep">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-4 col-12 mb-2 text-secondary" for="Calss">Calss</label>
                            <div class="col-lg-7 col-11 input">
                                <input type="text" id="Calss">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-4 col-12 mb-2 text-secondary" for="Level">Level</label>
                            <div class="col-lg-7 col-11 input">
                                <input type="text" id="Level">
                            </div>
                        </div>
                        <div class="text-end mb-4">
                            <button type="submit" class="btn btn-primary rounded-pill px-5 shadow bg-blue-light">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal delete student -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>

@stop
