@extends('backend.app')
@section('assets-top')
<link href="{{ asset('admin/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="card">
        <div class="card-header">
            <div class="card-title">Data Transaction Buyer</div>
        </div>
        <div class="card-body">
            <div class="card-sub">

            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name Product</th>
                    <th>Name Buyer</th>
                    <th>Qty</th>
                    <th>Oreder Total</th>
                    <th>Sub Total</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Name Product</th>
                    <th>Name Buyer</th>
                    <th>Qty</th>
                    <th>Oreder Total</th>
                    <th>Total</th>
                    <th>Status</th>
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
                processing:true,
                serverSide:true,
                ajax:"{{route('api.datatable.transaction')}}",
                columns:[
                    {data: 'DT_Row_Index',    orderable:     false, searchable: false},
                    {data:  'product',        name:'product'},
                    {data:  'user',           name:'user'},
                    {data:  'qty',            name:'qty'},
                    {data:  'order_total',    name:'order_total'},
                    {data:  'total',          name:'total'},
                    {data:  'status_buyer',          name:'status_buyer'},
                    {data:  'action',           name:'action', orderable:false, seacrhable:false},

                ]
            });
        });
    </script>
@endsection