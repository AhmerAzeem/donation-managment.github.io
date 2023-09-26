@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="height:auto">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Shopkeeper</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            @if (Session::has('success'))
                                <p class="pb-1 pt-1 alert-success alert">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </p>
                            @endif

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('edit.shopkeeper') }}" id="quickForm" method="post"
                                novalidate="novalidate">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter Name" value="{{ $shopkeepersdata->name }}">
                                        <input type="hidden" name="id" class="form-control" id="id"
                                            value="{{ $shopkeepersdata->id }}">
                                    </div>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="number" name="phone" class="form-control" id="phone"
                                            placeholder="Enter phone number" value="{{ $shopkeepersdata->phone }}" />
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="cnic">C.N.I.C</label>
                                        <input type="number" name="cnic" class="form-control" id="cnic"
                                            placeholder="Enter CNIC Without dashes" value="{{ $shopkeepersdata->cnic }}" />
                                        @error('cnic')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="shopno">Shop No<span style="font-size:12px">(Optional)</span></label>
                                        <input type="number" name="shopno" class="form-control" id="shopno"
                                            placeholder="Enter shop number" value="{{ $shopkeepersdata->shop_no }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="form-control" id="address"
                                            placeholder="Enter shop address" value="{{ $shopkeepersdata->address }}" />
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="home_address">Home Address <span
                                                style="font-size:12px">(Optional)</span></label>
                                        <input type="text" name="home_address" class="form-control" id="home_address"
                                            placeholder="Enter home address" value="{{ $shopkeepersdata->home_address }}">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    @include('admin.funds.js.index')
@endsection
