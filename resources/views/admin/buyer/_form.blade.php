    <div class="form-group">
        <label for="squareInput">Name</label>
      {!! Form::text('name',null, ['class'=>$errors->has('name') ? 'form-control is-invalid' : 'form-control','placeholder'=>'name products','required' ]) !!}
    </div>
     @if ($errors->has('name'))
         <div class="alert alert-danger">
           {{$errors->first('name')}}
         </div>
     @endif
     <div class="form-group">
            <label for="squareInput">Email</label>
          {!! Form::email('email',null, ['class'=>$errors->has('email') ? 'form-control is-invalid' : 'form-control','placeholder'=>'email','required' ]) !!}
    </div>
    @if ($errors->has('email'))
        <div class="alert alert-danger">
        {{$errors->first('email')}}
        </div>
   @endif
    <div class="form-group">
        <label for="squareInput">Phone</label>
        {!! Form::number('phone',null, ['class'=>$errors->has('phone') ? 'form-control is-invalid' : 'form-control','placeholder'=>'phone','required' ]) !!}
    </div>
    @if ($errors->has('phone'))
        <div class="alert alert-warning">
          {{$errors->first('phone')}}
        </div>
    @endif
  <div class="form-group">
        <label for="squareInput">City</label>
      {!! Form::text('city',null, ['class'=>$errors->has('city') ? 'form-control is-invalid' : 'form-control','placeholder'=>'city','required' ]) !!}
  </div>
  @if ($errors->has('city'))
    <div class="alert alert-warning">
        {{$errors->first('city')}}
    </div>
  @endif

  <div class="form-group">
    <label for="squareInput">Country</label>
  {!! Form::text('country',null, ['class'=>$errors->has('country') ? 'form-control is-invalid' : 'form-control','placeholder'=>'country','required' ]) !!}
</div>
     @if ($errors->has('country'))
            <div class="alert alert-warning">
                {{$errors->first('country')}}
            </div>
     @endif

  <div class="form-group">
    <label for="squareInput">Postcode</label>
  {!! Form::text('postcode',null, ['class'=>$errors->has('postcode') ? 'form-control is-invalid' : 'form-control','placeholder'=>'postcode','required' ]) !!}
</div>
     @if ($errors->has('postcode'))
            <div class="alert alert-warning">
                {{$errors->first('postcode')}}
            </div>
     @endif

  <div class="form-group">
    <label for="squareInput">Payment</label>
  {!! Form::text('payment',null, ['class'=>$errors->has('payment') ? 'form-control is-invalid' : 'form-control','placeholder'=>'payment','required' ]) !!}
</div>
     @if ($errors->has('payment'))
            <div class="alert alert-warning">
                {{$errors->first('payment')}}
            </div>
     @endif
  <div class="form-group">
        <label for="squareInput">Notes</label>
       {!! Form::textarea('notes',null,['class'=>$errors->has('notes') ? 'form-control is-invalid' : 'form-control']) !!}
 </div>
 @if ($errors->has('notes'))
    <div class="alert alert-info">
        {{$errors->first('notes')}}
    </div>
 @endif
