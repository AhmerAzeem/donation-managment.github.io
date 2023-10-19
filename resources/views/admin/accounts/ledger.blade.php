@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="height: auto">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Shopkeepers</h1>
                    </div>

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col -->
                    <div class="col-md-12">
                        <div class="card">
                            @if (Session::has('success'))
                                <p class="pb-1 pt-1 alert-success alert">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </p>
                            @endif
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form id="searchledger_form">
                                    <div class="row col-md-12">
                                        <div class="form-group col-md-3">
                                            <label>Select Account</label>
                                            <select class="form-control select2 accountfield" name="account"
                                                style="width: 100%;">
                                            </select>
                                            <p class="account_alert text-danger d-none"></p>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="fromdate">From</label>
                                            <input type="date" name="fromdate" class="form-control" id="fromdate">
                                            <p class="fromdate_alert text-danger d-none"></p>

                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="todate">To</label>
                                            <input type="date" name="todate" class="form-control" id="todate">
                                            <p class="todate_alert text-danger d-none"></p>
                                        </div>
                                        <div class="col-md-3">

                                            <button type="submit" class="btn btn-primary"
                                                style="margin-top: 32px">Search</button>
                                        </div>
                                    </div>
                                </form>
                                <table class="table table-bordered" id="ledger_table">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Narration</th>
                                            <th scope="col">Account</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Bill #</th>
                                        </tr>
                                    </thead>
                                    <tbody id="ledgerbody">



                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
            </div><!-- /.container-fluid -->

        </section>


    </div>
    @include('admin.funds.js.index')
@endsection
