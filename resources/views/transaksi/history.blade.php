@extends('front.app')
@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{ asset('assets/img/bg-header.jpg')}}');">
            <div class="container">
                <h1 class="pt-5">
                    Your Transactions
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
            </div>
        </div>
    </div>

    <section id="cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div class="pull-right">
                    @if (Auth::user())
                        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#Modal">
                                proof of payment
                            </button>
                        @endif

                          </div>
                          @if (session('sukses'))
                          <div class="alert alert-info">
                              {{session('sukses')}}
                          </div>
                          @endif
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Invoice</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                              @if (!Auth::user())
                                <?php $no=1 ?>
                                  @foreach (Cart::getContent() as $item)
                                  <tr>
                                        <td><?php echo $no ?></td>
                                        <td>
                                            {{$item->id}}
                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::now() }}
                                        </td>
                                        <td>
                                             {{$item->price}}
                                        </td>
                                        <td>
                                             unprocessed
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#detailModal">
                                                Detail
                                            </button>
                                        </td>
                                    </tr>
                                    <?php $no++ ?>
                                  @endforeach
                                  @else
                                  <?php $no=1 ?>
                                   @foreach ($users as $au)
                                   <tr>
                                        <td><?php echo $no ?></td>
                                        <td>
                                            {{$au->id}}
                                        </td>
                                        <td>
                                            {{ $au->created_at }}
                                        </td>
                                        <td>
                                             {{ $au->pivot->order_total }}
                                        </td>
                                        @if ($au->pivot->status==1)
                                          <td>
                                               in process
                                           </td>
                                      @else
                                       <td>
                                            unprocessed
                                       </td>
                                        @endif
                                          <td>
                                            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#detailModal">
                                                Detail
                                            </button>
                                        </td>
                                    </tr>
                                    <?php $no++ ?>
                                   @endforeach
                              @endif
                            </tbody>
                        </table>
                    </div>
                    @if (Auth::user())
                       <nav aria-label="Page navigation">
                            {{$users->render()}}
                        </nav>
                    @endif
                 </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">No. Pesanan : AL121N8H2XQB47</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <strong>Billing Detail:</strong><br>
                                Andi Hoerudin<br>
                                Jl. lingkungan 01 ciriung No. 45, Cibinong<br>
                                ciriung<br>
                                Kabupaten Bogor<br>
                                Jawa Barat 40513
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Payment Method:</strong><br>
                                Direct Transfer to<br>
                                Bank: MANDIRI<br>
                                No Rek.: 133-00-1547470-3
                            </p>
                            <p>
                                <strong>Batas Pembayaran</strong><br>
                                14-12-2017 17:55 GMT+7
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <strong>Your Order:</strong>
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Products</th>
                                            <th class="text-right">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @if (!Auth::user())
                                        @foreach (Cart::getContent() as $item)
                                         <tr>
                                                <td>
                                                   {{$item->name}}
                                                </td>
                                                <td class="text-right">
                                                  {{$item->price}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        @else
                                        <?php $no=1; ?>
                                        @foreach ($users as $au)
                                        <tr>
                                                <td>
                                                   {{$au->name_product}}
                                                </td>
                                                <td class="text-right">
                                                  {{$au->price}}
                                                </td>
                                            </tr>
                                            <?php $subtotal=$au->price*$no ?>
                                            <?php $no++; ?>
                                       @endforeach
                                     @endif
                                    </tbody>
                                    <tfooter>
                                        <tr>
                                            <td>
                                                <strong>Cart Subtotal</strong>
                                            </td>
                                            <td class="text-right">
                                                @if(!Auth::user())
                                                {{Cart::getSubTotal()}}
                                                @else
                                               <?php echo $subtotal ?>
                                               @endif
                                            </td>
                                        </tr>
                                    </tfooter>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">No. Pesanan : AL121N8H2XQB47</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <strong>Billing Detail:</strong><br>
                                andi Hoerudin<br>
                                Jl. Lingkungan 01 ciriung No. 45, Cibinong<br>
                                Ciriung<br>
                                Kabupaten Bogor<br>
                                Jawa Barat 40513
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                @if(Auth::user())
                                  {!! Form::open(['route'=>['upload',Auth::user()->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
                                 @endif
                                <strong>Upload proof of payment:</strong><br>
                               <input type="file" name="payment" required class="form-control">

                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Upload</button>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection