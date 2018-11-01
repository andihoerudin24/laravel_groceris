@extends('front.app')
@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
            <div class="container">
                <h1 class="pt-5">
                    Checkout
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
            </div>
        </div>
    </div>

    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <h5 class="mb-3">BILLING DETAILS</h5>
                    <!-- Bill Detail of the Page -->
                        {!! Form::model($user,['route'=>'chekout.post','method'=>'POST']) !!}
                        @if (!Auth::user())
                        <fieldset>
                                <div class="form-group row">
                                    <div class="col">
                                        <input class="form-control" name="name" placeholder="Name" type="text">
                                    </div>
                                    <div class="col">
                                        <input class="form-control"  name="last_name" placeholder="Last Name" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="address" placeholder="Address"></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="form-control"  name="city" placeholder="Town / City" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="country" placeholder="State / Country" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="postcode" placeholder="Postcode / Zip" type="text">
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <input class="form-control" name="email" placeholder="Email Address" type="email">
                                    </div>
                                    <div class="col">
                                            <input class="form-control" name="password" placeholder="password" type="password">
                                        </div>
                                    <div class="col">
                                        <input class="form-control" name="phone" placeholder="Phone Number" type="tel">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="notes" placeholder="Order Notes"></textarea>
                                </div>
                            </fieldset>
                        @else
                        <fieldset>
                                <div class="form-group row">
                                    <div class="col">
                                   {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'name']) !!}
                                 </div>
                                    <div class="col">
                                        {!! Form::text('last_name',null,['class'=>'form-control','placeholder'=>'name']) !!}
                                 </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::textarea('address',null,['class'=>'form-control','placeholder'=>'Address']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('city',null,['class'=>'form-control','placeholder'=>'Town / City']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('country',null,['class'=>'form-control','placeholder'=>'State / Country']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('postcode',null,['class'=>'form-control','placeholder'=>'Postcode / Zip']) !!}
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email Address','readonly']) !!}
                                    </div>
                                    <div class="col">
                                         {!! Form::number('phone',null,['class'=>'form-control','placeholder'=>'Phone Number']) !!}
                                    </div>
                                </div>
                            </fieldset>
                        @endif
                    <!-- Bill Detail of the Page end -->
                </div>
                <div class="col-xs-12 col-sm-5">
                    <div class="holder">
                        <h5 class="mb-3">YOUR ORDER</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Products</th>
                                        <th class="text-right">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!Auth::user())
                                    @foreach (Cart::getContent() as $item)
                                    <tr>
                                            <td>
                                               {{$item->name}}
                                            </td>
                                            <td class="text-right">
                                                {{$item->price}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                    <?php $userId = auth()->user()->id; ?>
                                    @foreach (Cart::session($userId)->getContent($userId) as $item)
                                    <tr>
                                            <td>
                                               {{$item->name}}
                                            </td>
                                            <td class="text-right">
                                                {{$item->price}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif

                            </tbody>
                                <tfooter>
                                    <tr>
                                        <td>
                                            <strong>Cart Subtotal</strong>
                                        </td>
                                        <td class="text-right">
                                            {{Cart::getSubTotal()}}
                                        </td>
                                    </tr>
                                </tfooter>
                            </table>
                        </div>

                        <h5 class="mb-3">PAYMENT METHODS</h5>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio"  id="exampleRadios1"  checked>
                                Direct Bank Transfer
                            </label>
                        </div>
                    </div>
                    <button name="submit" class="btn btn-primary float-right">PROCEED TO CHECKOUT <i class="fa fa-check"></i></button>
                    {!! Form::close() !!}
                    <div class="clearfix">
                </div>
            </div>
        </div>
    </section>
</div>

@endsection