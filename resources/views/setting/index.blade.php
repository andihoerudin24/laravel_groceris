@extends('front.app')
@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
            <div class="container">
                <h1 class="pt-5">
                    Settings
                </h1>
                <p class="lead">
                    Update Your Account Info
                </p>
            </div>
        </div>
    </div>

    <section id="checkout">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-6">
                    <h5 class="mb-3">ACCOUNT DETAILS</h5>
                    <!-- Bill Detail of the Page -->
                    {!! Form::model($user,['route'=>['setting.update',$user->id],'method'=>'PUT']) !!}
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
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">UPDATE</button>
                                <div class="clearfix">
                            </div>
                        </fieldset>
         {!! Form::close() !!}

                    <!-- Bill Detail of the Page end -->
                </div>
            </div>
        </div>
    </section>
</div>
@endsection