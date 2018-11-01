    <div class="form-group">
        <label for="squareInput">Name Products</label>
      {!! Form::text('name_product',null, ['class'=>$errors->has('name_product') ? 'form-control is-invalid' : 'form-control','placeholder'=>'name products','required' ]) !!}
    </div>
     @if ($errors->has('name_product'))
         <div class="alert alert-danger">
           {{$errors->first('name_product')}}
         </div>
     @endif
     <div class="form-group">
            <label for="squareInput">Price</label>
          {!! Form::number('price',null, ['class'=>$errors->has('price') ? 'form-control is-invalid' : 'form-control','placeholder'=>'price','required' ]) !!}
    </div>
    @if ($errors->has('price'))
        <div class="alert alert-danger">
        {{$errors->first('price')}}
        </div>
   @endif
    <div class="form-group">
        <label for="squareInput">Name Categoies</label>
           {!! Form::select('id_categories',[''=>'Select a category']+App\Categories::pluck('nama_kategori','id')->all(),null,['class'=>$errors->has('id_categories') ? 'form-control is-invalid' : 'form-control', 'required' ]) !!}
    </div>
    @if ($errors->has('id_categories'))
        <div class="alert alert-warning">
          {{$errors->first('id_categories')}}
        </div>
    @endif

    <div class="form-group">
        <label for="squareInput">Foto</label>
        <br>
        <span class="input-group-btn">
                <a id="lfm" data-input="foto" data-preview="holder" class="btn btn-primary text-white">
                    <i class="fa fa-cloud-upload"></i> Choose
                </a>
            </span>
            {!! Form::text('foto', null, ['id' => 'foto', 'class' => 'form-control', 'readonly']) !!}
            <!-- if -->
            <!-- <img src="#" id="holder" style="margin-top:15px;max-height:254px;max-width: 152px;"> -->
            <!-- endif -->
            <img id="holder" style="margin-top:15px;max-height:254px;max-width: 152px;">
  </div>
  <div class="form-group">
        <label for="squareInput">Deskription Product</label>
       {!! Form::textarea('deskripsi',null,['class'=>$errors->has('deskripsi') ? 'form-control is-invalid' : 'form-control']) !!}
 </div>
 @if ($errors->has('deskripsi'))
    <div class="alert alert-info">
        {{$errors->first('deskripsi')}}
    </div>
 @endif
  <div class="form-group">
        <label for="squareInput">Stock Product</label>
      {!! Form::number('stock',null,['class'=>$errors->has('stock') ? 'form-control is-invalid' : 'form-control']) !!}
</div>
@if ($errors->has('stock'))
<div class="alert alert-danger">
  {{$errors->first('stock')}}
</div>
@endif