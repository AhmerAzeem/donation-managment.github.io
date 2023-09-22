@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="height: auto">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Expenses</h1>
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
                        <!-- general form elements -->
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Add Expenses</h3>
                            </div>
                            <!-- /.card-header -->
                            <form action="">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Account</label>
                                                <input type="number" name="amount" class="form-control"
                                                    id="exampleInputEmail1" placeholder="Enter Amount"
                                                    value="{{ old('amount') }}">
                                                @error('amount')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Narration</label>
                                                <input type="number" name="amount" class="form-control"
                                                    id="exampleInputEmail1" placeholder="Enter Amount"
                                                    value="{{ old('amount') }}">
                                                @error('amount')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Amount</label>
                                                <input type="number" name="amount" class="form-control"
                                                    id="exampleInputEmail1" placeholder="Enter Amount"
                                                    value="{{ old('amount') }}">
                                                @error('amount')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Bill #</label>
                                                <input type="number" name="amount" class="form-control"
                                                    id="exampleInputEmail1" placeholder="Enter Amount"
                                                    value="{{ old('amount') }}">
                                                @error('amount')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
    <!-- Content Header (Page header) -->
    @include('admin.funds.js.index')
@endsection
