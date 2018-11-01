{!! Form::model($model, ['url'=>[$delete],'method'=>'DELETE']) !!}
<a href="{{ $edit }}" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
        Edit
<span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
</a>
    <button
        type="submit" class="btn btn-sm btn-outline-danger"
        style="padding-bottom: 0px; padding-top: 0px;"
        onclick="return confirm('Are you sure you want to delete?');"
         >
        Hapus
        <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
</button>
{!! Form::close() !!}

