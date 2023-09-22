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
                            <form action="{{ url('/create') }}" id="quickForm" method="post" novalidate="novalidate">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Name" value="{{ old('name') }}" />
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone</label>
                                        <input type="number" name="phone" class="form-control"
                                            placeholder="Enter phone number" value="{{ old('phone') }}" />
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">C.N.I.C</label>
                                        <input type="number" name="cnic" class="form-control"
                                            placeholder="Enter CNIC Without dashes" value="{{ old('cnic') }}" />
                                        @error('cnic')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Shop No <span
                                                style="font-size:12px">(Optional)</span></label>
                                        <input type="number" name="shopno" class="form-control"
                                            placeholder="Enter shop number" value="{{ old('shopno') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Address</label>
                                        <input type="text" name="address" class="form-control"
                                            placeholder="Enter shop address" value="{{ old('address') }}" />
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Home Address <span
                                                style="font-size:12px">(Optional)</span></label>
                                        <input type="text" name="home_address" class="form-control"
                                            placeholder="Enter home address" value="{{ old('home_address') }}">
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add</button>
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
