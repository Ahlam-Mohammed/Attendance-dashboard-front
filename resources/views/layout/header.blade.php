<!-- Start Header -->
<header class="pt-2 position-sticky top-0 bg-white" style="z-index: 999;">
    <div class="container-lg">
        <div class="row align-items-center pb-lg-0 pb-3">

            <!-- Start Logo -->
            <div class="col-lg-4 col-6">
                <div class="navbar-brand">
                    <img src="{{ asset('images/logo.svg') }}" width="20%" alt="">
                </div>
            </div>
            <!-- End Logo -->

            <!-- Start Search block -->
            <div class="col-4 d-lg-block d-none">
                <div class="d-flex justify-content-center align-items-center gap-4">
                    <!-- Search Icon -->
                    <div class="search">
                        <i class="bi bi-search text-white"></i>
                    </div>
                    <!-- Search Input -->
                    <div class="input">
                        <input placeholder="Search" type="search">
                    </div>
                </div>
            </div>
            <!-- End Search Block -->

            <!-- Start User Auth -->
            <div class="col-4 d-lg-block d-none">
                <div class="d-flex align-items-center gap-3 p-2 justify-content-end">
                    <!-- Avatar -->
                    <img src="{{ asset('images/avatar.jpg') }}" class="rounded-circle" width="12%" alt="" type="button" data-bs-toggle="modal" data-bs-target="#changeAvatar">
                    <!-- Modal Change Avatar -->
                    @include('components.avatar-modal')
                    <!-- User Info -->
                    <div class="d-flex gap-1 flex-column">
                        <div class="d-flex gap-4 align-items-center">
                            <!-- User Name -->
                            <h1 class="fs-5 m-0 text-blue">Ali Ahmed</h1>
                            <!-- Logout -->
                            <a class="logout shadow-sm">
                                <i class="bi bi-box-arrow-right text-red"></i>
                            </a>
                        </div>
                        <!-- Role User -->
                        <span class="mx-3 text-secondary">Admin</span>
                    </div>
                </div>
            </div>
            <!-- End User Auth -->

            <!-- Start Mobile Menu -->
            <div class="col-6 d-lg-none d-block text-end">
                <a  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
                    <i class="bi bi-list fs-1 text-blue fw-bold"></i>
                </a>
                <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
                    <div class="offcanvas-header">
                        <!-- Avatar -->
                        <img src="{{ asset('images/avatar.jpg') }}" class="rounded-circle" width="12%" alt="">
                        <!-- User Name -->
                        <h1 class="fs-5 m-0 text-blue">Ali Ahmed</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
                    </div>
                    <div class="">
                        @include('layout.sidebar')
                    </div>
                </div>
            </div>
            <!-- End Mobile Menu -->

        </div>
    </div>
</header>
<!-- End Header -->
