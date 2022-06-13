<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('layout.style')

    <title>Login</title>
</head>
<body class="bg-lighter">
<main class="container-fluid">
    <div class="row vh-100">
        <div class="col-lg-6 col-12">
            <div class="d-flex pt-5 align-items-center justify-content-center flex-column">

                <!-- logo -->
                <div class="text-center">
                    <img src="{{ asset('images/logo.login.svg') }}" class="w-75" alt="">
                    <p class="fs-7 mt-1 text-blue">Login to your account!</p>
                </div>

                <!-- form login -->
                <form>
                    <div class="d-flex align-items-center">
                        <div class="input--auth d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-fill fs-4 text-blue"></i>
                        </div>
                        <div class="input input--white">
                            <input type="text" placeholder="Access Code" name="" id="">
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <div class="input--auth d-flex align-items-center justify-content-center">
                            <i class="bi bi-lock-fill fs-4 text-blue"></i>
                        </div>
                        <div class="input input--white">
                            <input type="password" placeholder="Password" name="" id="">
                            <a href="">
                                <i class="bi bi-eye-slash-fill"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="form-check ">
                            <label class="form-check-label text-blue fs-7" for="flexCheckDefault">
                                Remember me
                            </label>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                        <div class="form-check mt-2">
                            <label class="form-check-label text-blue fs-7" for="flexCheckDefault">
                                Forgot password?
                            </label>
                            <a href=""><i class="bi bi-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="text-center mb-4">
                        <button type="submit" class="btn btn-primary rounded-pill px-5 shadow bg-blue-light">Save</button>
                    </div>
                </form>

            </div>
        </div>
        <div class="col-lg-6 d-lg-block d-none bg-login" style="background-image: url({{ asset('images/login.svg') }});"></div>
    </div>
</main>
</body>
</html>
