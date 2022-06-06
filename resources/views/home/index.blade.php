<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Apply CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}">
      @yield('css')

</head>
<body>
    {{-- header  --}}
    @include('home.layouts.header')
    <div class="container">
    {{-- Body  --}}
    <div class="content">
        <div class="top-body">
            <img src="https://demo.themefreesia.com/shoppingcart/wp-content/uploads/sites/47/2019/03/person-people-girl-woman-hair-white-588481-pxhere.com_.jpg" class="img-fluid" alt="...">
        </div>
        <div class="main-content">
            <div class="sidebar-and-ads">
                <div class="col-3">
                    @include('home.layouts.left-sidebar')
                </div>
                <div class="slide col-7">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active" data-bs-interval="10000">
                            <img src="https://demo.themefreesia.com/shoppingcart/wp-content/uploads/sites/47/2019/03/girl-hair-female-pattern-model-spring-625342-pxhere.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://demo.themefreesia.com/shoppingcart/wp-content/uploads/sites/47/2019/03/mannequin-3616355.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://demo.themefreesia.com/shoppingcart/wp-content/uploads/sites/47/2019/03/StockSnap_G2V8G1H1AQ.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="sub-image">
                    <div class="image" >
                        <img src="https://demo.themefreesia.com/shoppingcart/wp-content/uploads/sites/47/2019/03/StockSnap_BXQV774BOY.jpg" alt="">
                    </div>
                    <div class="image">
                        <img src="https://demo.themefreesia.com/shoppingcart/wp-content/uploads/sites/47/2019/03/StockSnap_BXQV774BOY.jpg" alt="">
                    </div>
                    <div class="image">
                        <img src="https://demo.themefreesia.com/shoppingcart/wp-content/uploads/sites/47/2019/03/StockSnap_BXQV774BOY.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="new-products">
                <div class="title-grid">Hàng mới về</div>
                {{-- <div class="grid-product col-md-3 col-xs-6">
                    <div class="grid-product-img">
                        <img src="https://demo.themefreesia.com/shoppingcart/wp-content/uploads/sites/47/2019/03/woman-female-standing-fashion-clothing-outerwear-527789-pxhere.com_.jpg" alt="">
                    </div>
                    <div class="product_name">Oversized V Sweater</div>
                    <div class="price">$45.00</div> --}}
                </div>


            </div>
        </div>
    </div>


    </div>
    {{-- Footer  --}}
    @include('home.layouts.footer')
</body>
</html>
