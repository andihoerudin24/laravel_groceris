    <div class="form-group">
        <label for="squareInput">Name Products</label>
       {!! Form::select('id_product',App\Products::pluck('name_product','id')->all(),null, ['class'=>'form-control']) !!}
    </div>
     @if ($errors->has('id_product'))
         <div class="alert alert-danger">
           {{$errors->first('id_product')}}
         </div>
     @endif
     <div class="form-group">
            <label for="squareInput">name categories</label>
       {!! Form::select('id_categories',App\Categories::pluck('nama_kategori','id'),null, ['class'=>$errors->has('id_categories') ? 'form-control is-invalid' : 'form-control']) !!}

    </div>
    @if ($errors->has('id_categories'))
        <div class="alert alert-danger">
        {{$errors->first('id_categories')}}
        </div>
   @endif
    <div class="form-group">
        <label for="squareInput">name buyer</label>
        {!! Form::select('id_user',App\User::pluck('name','id'),null, ['class'=>$errors->has('id_user') ? 'form-control is-invalid' : 'form-control','readonly','block']) !!}
  </div>
    @if ($errors->has('id_user'))
        <div class="alert alert-warning">
          {{$errors->first('id_user')}}
        </div>
    @endif

    <div class="form-group">
        <label for="squareInput">Qty</label>
        {!! Form::number('qty',null,['class'=>'form-control','readonly']) !!}
  </div>

  <div class="form-group">
        <label for="squareInput">Order Total</label>

     {!! Form::select('status',['0' =>'unprocessed', '1' => 'been processed'],null,['class'=>'form-control']) !!}

</div>
