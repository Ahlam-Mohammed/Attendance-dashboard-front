<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('layout.style')

    <title>@yield('title')</title>
</head>
<body>

{{-- Header --}}
@include('layout.header')

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 d-lg-block d-none">

                {{-- Sidebar --}}
                @include('layout.sidebar')

            </div>
            <div class="col-lg-10 col-12">

                {{-- Content --}}
                <div class="content">
                    @yield('content')
                </div>

            </div>
        </div>
    </div>
</main>

<script src="{{ asset('js.script.js') }}"></script>
</body>
</html>
