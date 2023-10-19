@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="height: auto">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <!-- container-fluid -->
            <div class="container-fluid">
                <!-- row -->
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Shopkeepers</h1>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('shopkeepers.create') }}" class="btn btn-primary float-right"><i
                                class="fas fa-plus"></i>
                            Add Shopkeeper</a>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- col -->
                    <div class="col-md-12">
                        <!-- card -->
                        <div class="card">
                            @if (Session::has('success'))
                                <p class="pb-1 pt-1 alert-success alert">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </p>
                            @endif
                            <!-- card body -->
                            <div class="card-body">
                                <!-- table -->
                                <table id="example1" class="table table-bordered table-striped">
                                    <!-- table head -->
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Shop #</th>
                                            <th>Amount</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!-- ./table head -->

                                    <!-- table body -->
                                    <tbody>
                                        @php
                                            $rowNumber = 1;
                                        @endphp
                                        @forelse ($shopkeepers as $shopkeeper)
                                            <!-- table row -->
                                            <tr>
                                                <td>{{ $rowNumber++ }}</td>
                                                <td>{{ $shopkeeper->name }}</td>
                                                <td>{{ $shopkeeper->phone }}</td>
                                                <td>{{ $shopkeeper->shop_no }}</td>
                                                <td>{{ $shopkeeper->amount }}</td>
                                                <td>{{ implode(',',$shopkeeper->categories()->pluck('name')->toArray()) }}
                                                </td>
                                                <td>
                                                    @if ($shopkeeper->status == 'Active')
                                                        <a href="{{ route('shopkeepers.status', $shopkeeper->id) }}"
                                                            class="btn btn-danger">Deactivate</a>
                                                    @elseif($shopkeeper->status == 'Inactive')
                                                        <a href="{{ route('shopkeepers.status', $shopkeeper->id) }}"
                                                            class="btn btn-primary">Activate</a>
                                                    @endif

                                                    <a href="{{ route('shopkeepers.edit', $shopkeeper->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <button type="button" class="btn openrecievefund_modal"
                                                        data-toggle="modal" data-target="#modal-xl"
                                                        data-id="{{ $shopkeeper->id }}">
                                                        <i class="fas fa-solid fa-credit-card"></i>
                                                    </button>

                                                </td>
                                            </tr>
                                            <!-- ./table row -->
                                        @empty
                                            <p class="lead">You dont have any Shopkeeper</p>
                                        @endforelse
                                    </tbody>
                                    <!-- ./table body -->
                                </table>
                                <!-- ./table -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.container-fluid -->
            <!-- modal -->
            <div class="modal fade" id="modal-xl">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="overlay" id="overlay_div">
                            <i class="fas fa-2x fa-sync fa-spin"></i>
                        </div>
                        <!-- modal head -->
                        <div class="modal-header">
                            <h4 class="modal-title">Receive Fund</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- ./modal head -->

                        <!-- modal body -->
                        <div class="modal-body">
                            <p class="alert_message alert alert-danger d-none"></p>
                            <!-- form -->
                            <form id="recievefund_form" method="post">
                                @csrf
                                <!-- table -->
                                <table class="table table-bordered" id="recievefund_table">
                                    <!-- table head -->
                                    <thead class="bg-primary">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Month</th>
                                            <th scope="col">Year</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Due Amount</th>
                                            <th scope="col">Recieve Fund</th>
                                        </tr>
                                    </thead>
                                    <!-- ./table head -->

                                    <!-- table body -->
                                    <tbody id="fundtbody">

                                    </tbody>
                                    <!-- ./table body -->

                                    <!-- table footer -->
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-right">Date:</td>
                                            <td>
                                                <div style='width: 60%;'>
                                                    <input type='text' name="date" class='form-control'
                                                        value="{{ date('Y-m-d') }}">
                                                </div>
                                            </td>
                                            <td id="TotalAmount"></td>
                                            <td id="TotalDue"></td>
                                            <td>
                                                <div style='width: 60%;'>
                                                    <input type='text' class='form-control' id="TotalReceived" readonly>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                    <!-- ./table footer  -->
                                </table>
                                <!-- ./table  -->
                            </form>
                            <!-- ./form  -->
                        </div>
                        <!-- modal footer  -->
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" form="recievefund_form" class="btn btn-primary">Save</button>
                        </div>
                        <!-- ./modal footer  -->
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- ./modal  -->
        </section>
        <!-- ./main content  -->
    </div>
    @include('admin.funds.js.index')
@endsection
