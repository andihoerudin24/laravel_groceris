@extends('front.app')
@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{ asset('assets/img/bg-header.jpg') }}');">
            <div class="container">
                <h1 class="pt-5">
                    Shopping Page
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop-categories owl-carousel mt-5">
                    @foreach ($categories as $item)
                    <div class="item">
                        <a href="{{route('product_by_categori',$item->id) }}">
                            <div class="media d-flex align-items-center justify-content-center">
                                <span class="d-flex mr-2"><i class="sb-bistro-carrot"></i></span>
                                <div class="media-body">
                                    <h5>{{ $item->nama_kategori }}</h5>
                                    <p>{{ $item->deskripsi }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@foreach ($categories as $categori)
<section id="most-wanted">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">{{ $categori->nama_kategori }}</h2>
                  <div class="product-carousel owl-carousel">
                      @foreach ($products as $product)
                      <div class="item">
                            <div class="card card-product">
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-default">
                                            Until 2018
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="{{$product->foto}}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{ route('Shop.show',$product->id) }}">{{$product->name_product}}</a>
                                    </h4>
                                    <div class="card-price">
                                        <span class="discount">Rp. 300</span>
                                        <span class="reguler">Rp. {{$product->price }}</span>
                                    </div>
                                    <a href="{{ route('Shop.show',$product->id) }}" class="btn btn-block btn-primary">
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
@endforeach



</div>
@endsection