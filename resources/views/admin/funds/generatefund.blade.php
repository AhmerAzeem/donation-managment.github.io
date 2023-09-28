@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="height: auto">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Generate Fund</h1>
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
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card">
                            @if (Session::has('success'))
                                <p class="pb-1 pt-1 alert-success alert">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </p>
                            @endif
                            @if (Session::has('error'))
                                <p class="pb-1 pt-1 alert-danger alert">
                                    {{ Session::get('error') }}
                                    @php
                                        Session::forget('error');
                                    @endphp
                                </p>
                            @endif
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('fund.generate') }}" method="post" id="generatefund">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Select Month</label>
                                        <select class="form-control select2" name="month" style="width: 100%;">
                                            <option value="0">Select an option</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        @if (Session::has('month'))
                                            <p class="pb-1 pt-1 text-danger">
                                                {{ Session::get('month') }}
                                                @php
                                                    Session::forget('month');
                                                @endphp
                                            </p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Select Year</label>
                                        <select class="form-control select2" name="year" style="width: 100%;">
                                            <option value="0">Select an option</option>
                                            <option>2023</option>

                                        </select>
                                        @if (Session::has('year'))
                                            <p class="pb-1 pt-1 text-danger">
                                                {{ Session::get('year') }}
                                                @php
                                                    Session::forget('year');
                                                @endphp
                                            </p>
                                        @endif
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" value="forall" name="generate"
                                            id="exampleCheck1" checked>
                                        <label class="form-check-label" for="exampleCheck1">For All</label>
                                    </div>
                                    <div class="form-check mb-1">
                                        <input type="radio" class="form-check-input" value="forsingle" name="generate"
                                            id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">For Single</label>
                                    </div>
                                    <div class="hide" id="forsingle">
                                        <div class="form-group">
                                            <label for="shopkeeperid">Shopkeeper ID</label>
                                            <input type="number" name="shopkeeperid" class="form-control" id="shopkeeperid"
                                                placeholder="Enter ID">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" name="shopkeepername" class="form-control"
                                                id="shopkeepername" placeholder="Enter Name">
                                        </div>
                                    </div>
                                </div>

                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
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
