@extends('backend.app')
@section('content')
<div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Updata transaction</div>
            </div>
            <div class="card-body">
              {!! Form::model($transaction,['route'=>['transaction.update',$transaction->id],'method'=>'PUT']) !!}

                    @include('admin.transaction._form')
             </div>
            <div class="card-action">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('transaction.index') }}" class="btn btn-danger">Cancel</a>
            </div>
            {!! Form::close() !!}
        </div>
@endsection
