<div class="form-group">
        <label for="squareInput">Name Categories</label>
         {!! Form::text('nama_kategori',null,['class'=>$errors->has('nama_kategori') ? 'form-control is-invalid' : 'form-control','placeholder'=>'Name Categories']) !!}
         @if ($errors->has('nama_kategori'))
         <span class="invalid-feedback">
                <strong>{{ $errors->first('nama_kategori') }}</strong>
            </span>
         @endif
    </div>
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
        <label for="squareInput">Deskription Categories</label>
        {!! Form::textarea('deskripsi',null, ['class'=>$errors->has('deskripsi') ? 'form-control is-invalid' : 'form-control','placeholder'=>'Deskription categories']) !!}
       <span class="invalid-feedback">
           <strong>{{ $errors->first('deskripsi') }}</strong>
       </span>
</div>