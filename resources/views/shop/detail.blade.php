@extends('front.app')
@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{ asset('assets/img/bg-header.jpg') }}');">
            <div class="container">
                <h1 class="pt-5">
                   {{$products->name_product}}
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
            </div>
        </div>
    </div>
    {!! Form::open(['shop.update',$products->id,'method'=>'PUT']) !!}
    {!! Form::hidden('name_products',$products->name_product) !!}
    {!! Form::hidden('order_total',$products->price) !!}
    {!! Form::hidden('foto',$products->foto) !!}



    <div class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="slider-zoom">
                        <img class="cloudzoom" alt="Detail Zoom thumbs image" id="zoom1" src="{{$products->foto}}" data-cloudzoom='zoomPosition:"inside", autoInside: true, zoomOffsetX:0' style="width: 100%;">
                    </div>
                </div>
                <div class="col-sm-6">
                    <p>
                        <strong>Overview</strong><br>
                     {{ $products->deskripsi }}
                    </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>
                                <strong>Price</strong> (/Pack)<br>
                                <span class="price">Rp {{$products->price}}</span>
                                <span class="old-price">Rp {{$products->price}}</span>
                            </p>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p>
                                <span class="stock available">In Stock: {{$products->stock}}</span>
                            </p>
                        </div>
                    </div>
                    <p class="mb-1">
                        <strong>Quantity</strong>
                    </p>
                    <div class="row">
                        <div class="col-sm-5">
                            <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary"  name="qty">
                        </div>
                        <div class="col-sm-6"><span class="pt-1 d-inline-block">Pack (250 gram)</span></div>
                    </div>



                    <button type="submit" class="mt-3 btn btn-primary btn-lg">
                        <i class="fa fa-shopping-basket"></i> Add to Cart
                    </button>
               {!! Form::close() !!}
          </div>
            </div>
        </div>
    </div>

    <section id="related-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Related Products</h2>
                    <div class="product-carousel owl-carousel">
                            @foreach (\DB::table('products')->limit(5)->inRandomOrder()->get() as $post)
                            <div class="item">
                                    <div class="card card-product">
                                        <div class="card-ribbon">
                                            <div class="card-ribbon-container right">
                                                <span class="ribbon ribbon-primary">SPECIAL</span>
                                            </div>
                                        </div>
                                        <div class="card-badge">
                                            <div class="card-badge-container left">
                                                <span class="badge badge-default">
                                                    Until 2018
                                                </span>
                                                <span class="badge badge-primary">
                                                    20% OFF
                                                </span>
                                            </div>
                                            <img src="{{$post->foto}}" alt="Card image 2" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="detail-product.html">{{$post->name_product}}</a>
                                            </h4>
                                            <div class="card-price">
                                                <span class="discount">Rp. 300</span>
                                                <span class="reguler">Rp. {{$post->price}}</span>
                                            </div>
                                            <a href="{{ route('Shop.show',$post->id) }}" class="btn btn-block btn-primary">
                                                Add to Cart
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection