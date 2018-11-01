@extends('front.app')
@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
            <div class="container">
                <h1 class="pt-5">
                    Your Cart
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
            </div>
        </div>
    </div>

    <section id="cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="10%"></th>
                                    <th>Products</th>
                                    <th>Price</th>
                                    <th width="15%">Quantity</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                           @if(!Auth::user())
                           @foreach (Cart::getContent() as $item)
                           <tr>
                                 <td>
                                          <img src="{{$item->attributes->foto}}" width="60">
                                      </td>
                                      <td>
                                          {{$item->name}}<br>

                                      </td>
                                      <td>
                                         {{$item->price}}
                                      </td>
                                      <td>
                                          <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" value="{{$item->quantity}}" name="qty">
                                      </td>
                                      <td>
                                         {{$item->price*$item->quantity}}
                                      </td>
                                      <td>
                                          <a href="{{ route('cart.delete',$item->id) }}" class="text-danger"><i class="fa fa-times"></i></a>
                                      </td>
                                  </tr>
                              @endforeach
                              @else
                              <?php  $userId = auth()->user()->id ?>
                              @foreach (Cart::session($userId)->getContent($userId) as $item)
                              <tr>
                                    <td>
                                             <img src="{{$item->attributes->foto}}" width="60">
                                         </td>
                                         <td>
                                             {{$item->name}}<br>

                                         </td>
                                         <td>
                                            {{$item->price}}
                                         </td>
                                         <td>
                                             <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" value="{{$item->quantity}}" name="qty">
                                         </td>
                                         <td>
                                            {{$item->price*$item->quantity}}
                                         </td>
                                         <td>
                                             <a href="{{ route('cart.delete',$item->id) }}" class="text-danger"><i class="fa fa-times"></i></a>
                                         </td>
                                     </tr>
                                 @endforeach
                         @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <a href="shop.html" class="btn btn-default">Continue Shopping</a>
                </div>
                <div class="col text-right">
                    <div class="clearfix"></div>
                    <h6 class="mt-3">Total: Rp {{Cart::getSubTotal()}}</h6>
                    <a href="checkout.html" class="btn btn-lg btn-primary">Checkout <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection