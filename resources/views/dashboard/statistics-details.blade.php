@extends('layout.master')

@section('title') Details @stop

@section('content')

    <div class="row m-auto pt-4">

        <div class="col-lg-3 col-12">

            <!-- Start Academic guide -->
            <div class="card list mb-3" style="border-radius: 40px;">
                <!-- card title -->
                <div class="card-header bg-transparent text-center p-2">
                    <h1 class="fs-4 text-blue-light">Academic guide</h1>
                </div>
                <!-- card body -->
                <div class="card-body p-0">
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <a class="btn btn-toggle d-inline-flex align-items-center rounded text-blue border-0" data-bs-toggle="collapse" data-bs-target="#college-list" aria-expanded="false">
                                <i class="bi bi-building me-1"></i>
                                <span>College</span>
                            </a>
                            <!-- College List -->
                            <div class="collapse show" id="college-list">
                                <ul class="btn-toggle-nav  fw-normal pb-1 small">
                                    <li class="mb-1">
                                        <a class="btn btn-toggle d-inline-flex align-items-center rounded text-blue border-0" data-bs-toggle="collapse" data-bs-target="#department-list" aria-expanded="false">
                                            <i class="bi bi-building me-1"></i>
                                            <span>Department</span>
                                        </a>
                                        <!-- Department List -->
                                        <div class="collapse show" id="department-list">
                                            <ul class="btn-toggle-nav fw-normal pb-1 small">
                                                <li>
                                                    <a class="btn btn-toggle d-inline-flex align-items-center rounded text-blue border-0" data-bs-toggle="collapse" data-bs-target="#bachelors-list" aria-expanded="true">
                                                        <i class="bi bi-bookmarks me-1"></i>
                                                        <span>Bachelor's degree</span>
                                                    </a>
                                                    <!-- Bachelor's List -->
                                                    <div class="collapse show" id="bachelors-list">
                                                        <ul class="btn-toggle-nav fw-normal pb-1 small">
                                                            <li>
                                                                <a class="btn btn-toggle d-inline-flex align-items-center rounded text-blue border-0" data-bs-toggle="collapse" data-bs-target="#class-list" aria-expanded="true">
                                                                    <i class="bi bi-mortarboard me-1"></i>
                                                                    <span>Class</span>
                                                                </a>
                                                                <!-- Class List -->
                                                                <div class="collapse show" id="class-list">
                                                                    <ul class="btn-toggle-nav fw-normal pb-1 small">
                                                                        <li>
                                                                            <a class="btn btn-toggle d-inline-flex align-items-center rounded text-blue border-0">
                                                                                <i class="bi bi-calendar2-minus me-1"></i>
                                                                                <span>Fr Term 2022 / 2023</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="btn btn-toggle d-inline-flex align-items-center rounded text-blue border-0">
                                                                                <i class="bi bi-calendar2-minus me-1"></i>
                                                                                <span>Se Term 2022 / 2023</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Academic guide -->

            <!-- Start Search by Names -->
            <div class="card mb-3" style="border-radius: 40px; min-height: 200px">
                <!-- card title -->
                <div class="card-header bg-transparent text-center p-2">
                    <h1 class="fs-4 text-blue-light">Search by Names</h1>
                </div>
                <!-- card body -->
                <div class="card-body p-0 d-flex justify-content-evenly align-items-center flex-column">
                    <div class="input">
                        <input type="search">
                    </div>
                    <div class="search">
                        <i class="bi bi-search text-white"></i>
                    </div>
                </div>
            </div>
            <!-- End Search by Names -->

        </div>

        <div class="col-lg-9 col-12">

            <!-- Start Category -->
            <div class="row">
                <div class="card d-flex flex-lg-row flex-md-row flex-column justify-content-evenly align-items-center p-3 mb-3" style="border-radius: 40px;">
                    <div class="d-flex justify-content-end flex-column align-items-center box__subject" style="background-image: url({{ asset('images/DBA.svg') }});">
                        <p class="text-blue">DBA</p>
                    </div>
                </div>
            </div>
            <!-- End Category -->

            <div class="row">

                <!-- Start Names -->
                <div class="col-lg-8">
                    <div class="card list mb-3 p-3 pt-4" style="border-radius: 40px;">
                        {{-- Name --}}
                        <div class="bg-blue-light text-center p-2 text-white">Najmaldeen Qasem Ahmed Al Sharqi</div>
                        {{-- edit --}}
                        <a class="text-end p-3">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <div class="mb-5">
                            {{-- Name subject --}}
                            <div class="shadow d-flex text-center justify-content-center align-items-center p-2" style="border-left: 4px solid #2B9C77; width: 30%">
                                <h4 class="fs-5 m-0 text-blue">Theoretical</h4>
                            </div>
                            {{-- degree --}}
                            <div class="d-flex justify-content-evenly align-items-center mt-4">

                                <div class="bg-lighter py-1 px-3 rounded-pill d-flex flex-column justify-content-center align-items-center">
                                    <span class="fs-7">1</span>
                                    <div class="d-flex gap-2 align-items-center">
                                        <span class="fs-7">20/4 W</span>
                                        <div class="circle--green circle--green-sm"></div>
                                    </div>
                                </div>

                                <div class="bg-lighter py-1 px-3 rounded-pill d-flex flex-column justify-content-center align-items-center">
                                    <span class="fs-7">1</span>
                                    <div class="d-flex gap-2 align-items-center">
                                        <span class="fs-7">20/4 W</span>
                                        <div class="circle--green circle--green-sm"></div>
                                    </div>
                                </div>

                                <div class="bg-lighter py-1 px-3 rounded-pill d-flex flex-column justify-content-center align-items-center">
                                    <span class="fs-7">1</span>
                                    <div class="d-flex gap-2 align-items-center">
                                        <span class="fs-7">20/4 W</span>
                                        <div class="circle--red circle--red-sm"></div>
                                    </div>
                                </div>

                                <div class="bg-lighter py-1 px-3 rounded-pill d-flex flex-column justify-content-center align-items-center">
                                    <span class="fs-7">1</span>
                                    <div class="d-flex gap-2 align-items-center">
                                        <span class="fs-7">20/4 W</span>
                                        <div class="circle--green circle--green-sm"></div>
                                    </div>
                                </div>

                                <div class="bg-lighter py-1 px-3 rounded-pill d-flex flex-column justify-content-center align-items-center">
                                    <span class="fs-7">1</span>
                                    <div class="d-flex gap-2 align-items-center">
                                        <span class="fs-7">20/4 W</span>
                                        <div class="circle--green circle--green-sm"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="mb-5">
                            {{-- Name subject --}}
                            <div class="shadow d-flex text-center justify-content-center align-items-center p-2" style="border-left: 4px solid #F1E000; width: 30%">
                                <h4 class="fs-5 m-0 text-blue">Theoretical</h4>
                            </div>
                            {{-- degree --}}
                            <div class="d-flex justify-content-evenly align-items-center mt-4">

                                <div class="bg-lighter py-1 px-3 rounded-pill d-flex flex-column justify-content-center align-items-center">
                                    <span class="fs-7">1</span>
                                    <div class="d-flex gap-2 align-items-center">
                                        <span class="fs-7">20/4 W</span>
                                        <div class="circle--green circle--green-sm"></div>
                                    </div>
                                </div>

                                <div class="bg-lighter py-1 px-3 rounded-pill d-flex flex-column justify-content-center align-items-center">
                                    <span class="fs-7">1</span>
                                    <div class="d-flex gap-2 align-items-center">
                                        <span class="fs-7">20/4 W</span>
                                        <div class="circle--green circle--green-sm"></div>
                                    </div>
                                </div>

                                <div class="bg-lighter py-1 px-3 rounded-pill d-flex flex-column justify-content-center align-items-center">
                                    <span class="fs-7">1</span>
                                    <div class="d-flex gap-2 align-items-center">
                                        <span class="fs-7">20/4 W</span>
                                        <div class="circle--red circle--red-sm"></div>
                                    </div>
                                </div>

                                <div class="bg-lighter py-1 px-3 rounded-pill d-flex flex-column justify-content-center align-items-center">
                                    <span class="fs-7">1</span>
                                    <div class="d-flex gap-2 align-items-center">
                                        <span class="fs-7">20/4 W</span>
                                        <div class="circle--green circle--green-sm"></div>
                                    </div>
                                </div>

                                <div class="bg-lighter py-1 px-3 rounded-pill d-flex flex-column justify-content-center align-items-center">
                                    <span class="fs-7">1</span>
                                    <div class="d-flex gap-2 align-items-center">
                                        <span class="fs-7">20/4 W</span>
                                        <div class="circle--green circle--green-sm"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Names -->

                <!-- Start Chart -->
                <div class="col-lg-4">
                    <div class="card mb-1" style="border-radius: 40px 40px 0 0;">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-12 mb-3">
                                    <div class="circular m-auto">
                                        <div class="inner"></div>
                                        <div class="number">90%</div>
                                        <div class="circle">
                                            <div class="bar left">
                                                <div class="progress"></div>
                                            </div>
                                            <div class="bar right">
                                                <div class="progress"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress mt-4">
                                        <div class="progress-bar progress-bar-striped bg-blue" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="circle--blue"></div>
                                            <span>Term</span>
                                        </div>
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="text-secondary">8</span>
                                            <span class="text-secondary">Lec</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="border-radius: 0 0 40px 40px ;">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-12 mb-3">
                                    <div class="circular m-auto">
                                        <div class="inner"></div>
                                        <div class="number">90%</div>
                                        <div class="circle">
                                            <div class="bar left">
                                                <div class="progress"></div>
                                            </div>
                                            <div class="bar right">
                                                <div class="progress"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress mt-4">
                                        <div class="progress-bar progress-bar-striped bg-blue" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="circle--blue"></div>
                                            <span>Term</span>
                                        </div>
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="text-secondary">8</span>
                                            <span class="text-secondary">Lec</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Chart -->

            </div>
        </div>
    </div>

@stop
