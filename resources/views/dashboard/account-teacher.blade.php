@extends('layout.master')

@section('title') Dashboard @stop

@section('content')

    <div class="row m-auto">

        <!-- Start Categories -->
        <div class="col-12">
            <div class="d-flex align-items-center gap-5 p-5 category">
                <!-- single box -->
                <a href="" class="box">
                    <div class="box__icon">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <h6 class="box__title">Head Dep</h6>
                </a>
                <!-- single box -->
                <a href="" class="box active">
                    <div class="box__icon">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <h6 class="box__title">Teacher</h6>
                </a>
            </div>
        </div>

        <!-- End Categories -->

        <!-- Start Card -->
        <div class="col-lg-9 col-12 m-auto mb-3">
            <div class="card" style="border-radius: 40px;">
                <!-- card title -->
                <div class="card-header p-3 d-flex justify-content-between bg-transparent">
                    <h1 class="fs-3 text-blue">Accounts (Teacher)</h1>
                    <div class="d-flex justify-content-center gap-3 align-items-center">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#editModal" href="">
                            <i class="bi bi-pencil-square text-blue-light"></i>
                        </a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" href="">
                            <i class="bi bi-trash3 text-red"></i>
                        </a>
                    </div>
                </div>
                <!-- card body -->
                <div class="card-body p-4 pt-5">
                    <form action="">
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-3 col-md-4 col-12 mb-2 text-secondary" for="name">Teacher's name</label>
                            <div class="col-lg-6 col-md-8 col-12 input">
                                <input type="text" id="name">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-3 col-md-4 col-12 mb-2 text-secondary" for="code">Access code</label>
                            <div class="col-lg-6 col-md-8 col-12 input">
                                <input type="text" id="code">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-3 col-md-4 col-12 mb-2 text-secondary" for="Password">Password</label>
                            <div class="col-lg-6 col-md-8 col-12 input">
                                <input type="password" id="Password">
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

    <!-- Modal edit lecture -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete lecture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-4 col-12 mb-2 text-secondary" for="name">Teacher's name</label>
                            <div class="col-lg-7 col-11 input">
                                <input type="text" id="name">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-4 col-12 mb-2 text-secondary" for="code">Access code</label>
                            <div class="col-lg-7 col-11 input">
                                <input type="text" id="code">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <label class="col-lg-4 col-12 mb-2 text-secondary" for="Password">Password</label>
                            <div class="col-lg-7 col-11 input">
                                <input type="password" id="Password">
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


    <!-- Modal delete lecture -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete account</h5>
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
