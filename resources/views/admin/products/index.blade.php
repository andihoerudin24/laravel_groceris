@extends('backend.app')
@section('assets-top')
<link href="{{ asset('admin/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="card">
        <div class="card-header">
            <div class="card-title">Data Products</div>
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
            <div class="card-sub">
               <a href="{{ route('products.create') }}" class="btn btn-danger btn-sm">Add New Products</a>
            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name Categories</th>
                    <th>Name Products</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Stock</th>
                    <th></th>
                  </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Name Categories</th>
                    <th>Name Products</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Stock</th>
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
                    ajax       :"{{ route('api.datatable.products') }}",
                    columns :[
                        {data: 'DT_Row_Index',    orderable:     false, searchable: false},
                        {data: 'categories',       name:             'categories'},
                        {data: 'name_product',     name:             'name_product'},
                        {data: 'price',            name:             'price'},
                        {data: 'foto',             name:             'foto'},
                        {data: 'stock',            name:             'stock'},
                        {data: 'action',           name:              'action', orderable:false, seacrhable:false},
                     ]
                })
            });
        </script>

@endsection