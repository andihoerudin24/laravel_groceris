<!DOCTYPE html>
<html>
<head>
    <title>Freshcery | Groceries Organic Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fonts/sb-bistro/sb-bistro.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fonts/font-awesome/font-awesome.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/o2system-ui/o2system-ui.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/owl-carousel/owl-carousel.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/cloudzoom/cloudzoom.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/thumbelina/thumbelina.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/bootstrap-touchspin/bootstrap-touchspin.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/css/theme.css')}}">

</head>
<body>
    <div class="page-header">
        <!--=============== Navbar ===============-->
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-transparent" id="page-navigation">
            <div class="container">
                <!-- Navbar Brand -->
                <a href="index.html" class="navbar-brand">
                    <img src="{{ asset('assets/img/logo/logo.png')}}" alt="">
                </a>

                <!-- Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarcollapse">
                    <!-- Navbar Menu -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ route('Shop.index') }}" class="nav-link">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('enter') }}" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar-header"><img src="{{ asset('assets/img/logo/avatar.jpg')}}"></div>
                                @if (empty(Auth::user()->name))
                                       Hi Buyer
                                @else
                                     {{ Auth::user()->name }}
                                @endif
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('transaksihistory') }}">Transactions History</a>
                                <a class="dropdown-item" href="{{ route('setting') }}">Settings</a>
                            </div>
                          </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <i class="fa fa-shopping-basket"></i>
                                <span class="badge badge-primary">

                                    @if(!Auth::user())
                                    {{ Cart::getTotalQuantity() }}
                                    @else
                                     <?php  $cart=Auth::user()->id; ?>
                                      {{Cart::session($cart)->getTotalQuantity()}}
                                    @endif
                                </span>
                            </a>
                            <div class="dropdown-menu shopping-cart">
                                <ul>
                                    <li>
                                        <div class="drop-title">Your Cart</div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-list">
                                            @if (!Auth::user())
                                            @foreach (Cart::getContent() as $item)
                                            <div class="media">
                                                 <img class="d-flex mr-3" src="{{$item->attributes->foto}}" width="60">
                                                 <div class="media-body">
                                                     <h5><a href="javascript:void(0)">{{$item->name}}</a></h5>
                                                     <p class="price">
                                                         <span class="discount text-muted">Rp. 700</span>
                                                         <span>Rp. {{$item->price}}</span>
                                                     </p>
                                                     <p class="text-muted">Qty: {{$item->quantity}}</p>
                                                 </div>
                                             </div>
                                         @endforeach
                                         @else
                                         <?php $userId =Auth::user()->id; ?>
                                         @foreach (Cart::session($userId)->getContent($userId) as $item)
                                         <div class="media">
                                                <img class="d-flex mr-3" src="{{$item->attributes->foto}}" width="60">
                                                <div class="media-body">
                                                    <h5><a href="javascript:void(0)">{{$item->name}}</a></h5>
                                                    <p class="price">
                                                        <span class="discount text-muted">Rp. 700</span>
                                                        <span>Rp. {{$item->price}}</span>
                                                    </p>
                                                    <p class="text-muted">Qty: {{$item->quantity}}</p>
                                                </div>
                                            </div>
                                         @endforeach
                                       @endif
                                     </div>
                                    </li>
                                    <li>
                                        <div class="drop-title d-flex justify-content-between">
                                            <span>Total:</span>
                                            <span class="text-primary"><strong>Rp. {{Cart::getSubTotal()}}</strong></span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between pl-3 pr-3 pt-3">
                                        <a href="{{ route('cart') }}" class="btn btn-default">View Cart</a>
                                        <a href="{{ route('chekout') }}" class="btn btn-primary">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>