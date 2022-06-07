<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adminstration</title>

    {{-- Apply CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/app.css')}}">
      @yield('css')
</head>
<body>
    <div class="container-fluid">
        <div class="wrapper">

            @include('admin.layouts.sidebar')

            <div class="main">
                @include('admin.layouts.header')
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>





</body>
</html>
