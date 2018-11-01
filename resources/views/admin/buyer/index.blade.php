@extends('backend.app')
@section('assets-top')
<link href="{{ asset('admin/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Data Customer</div>
        @if (session('sukses'))
        <div class="alert alert-info">
            {{session('sukses')}}
        </div>
     @elseif(session('delete'))
      <div class="alert alert-danger">
         {{ session('delete') }}
      </div>
     @elseif(session('update'))
     <div class="alert alert-success">
       {{session('update')}}
     </div>
   @endif
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Name Buyer</th>
                <th>Email</th>
                <th>Phone</th>
                <th>City</th>
                <th>Country</th>
                <th>Post Code</th>
                <th>Payment</th>
                 <th>Notes</th>
                <th></th>
              </tr>
            </thead>
            <tfoot>
            <tr>
                <th>No</th>
                <th>Name Buyer</th>
                <th>Email</th>
                <th>Phone</th>
                <th>City</th>
                <th>Country</th>
                <th>Post Code</th>
                <th>Payment</th>
                <th>Notes</th>
                <th></th>
            </tr>
            </tfoot>
            <tbody>

            </tbody>
          </table>
@endsection

@section('assets-bottom')
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('admin/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('admin/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/datatables/responsive.bootstrap4.min.js') }}"></script>

          <script>
            $(document).ready(function(){
                $("#dataTable").DataTable({
                    processing :true,
                    serverSide :true,
                    ajax       :"{{ route('api.datatable.buyer') }}",
                    columns :[
                        {data: 'DT_Row_Index',    orderable:     false, searchable: false},
                        {data: 'name',             name:             'name'},
                        {data: 'email',            name:             'email'},
                        {data: 'phone',            name:             'phone'},
                        {data: 'city',            name:             'city'},
                        {data: 'country',          name:             'country'},
                        {data: 'postcode',         name:             'postcode'},
                        {data: 'payment',          name:             'payment'},
                        {data: 'notes',            name:             'notes'},
                        {data: 'action',           name:              'action', orderable:false, seacrhable:false},
                     ]
                })
            });
          </script>

@endsection