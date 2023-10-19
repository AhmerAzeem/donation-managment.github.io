@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="height: auto">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Categories</h1>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                            data-target="#modal-lg">
                            Add Category
                        </button>

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
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $rowNumber = 1;
                                        @endphp
                                        @forelse ($categories as $category)
                                            <tr>
                                                <td>{{ $rowNumber++ }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->status }}</td>
                                                <td>
                                                    @if ($category->status == 'Active')
                                                        <a href="{{ route('category.status', ['id' => $category->id]) }}"
                                                            class="btn btn-danger">Deactivate</a>
                                                    @elseif($category->status == 'Inactive')
                                                        <a href="{{ route('category.status', ['id' => $category->id]) }}"
                                                            class="btn btn-primary">Activate</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <p class="lead">You dont have any Category</p>
                                        @endforelse

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

            <div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Category</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="alert_message alert alert-danger d-none"></p>
                            <form id="addcategory_form">
                                @csrf
                                <div class="form-group">
                                    <label for="accountname">Category Title</label>
                                    <input type="text" name="categoryname" class="form-control" id="categoryname"
                                        placeholder="Enter Name" />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" form="addcategory_form" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </section>
    </div>
    @include('admin.categories.js.index')
@endsection
