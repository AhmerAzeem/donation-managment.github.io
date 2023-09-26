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
                            <form id="saveexpenses_form">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Select Account</label>
                                                <select class="form-control select2 accountfield" name="account"
                                                    style="width: 100%;">

                                                </select>
                                                <p class="account_alert text-danger d-none"></p>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="narration">Date</label>
                                                <input type="date" name="date" class="form-control" id="date">
                                                <p class="date_alert text-danger d-none"></p>

                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="amount">Amount</label>
                                                <input type="number" name="amount" class="form-control" id="amount"
                                                    placeholder="Enter Amount">
                                                <p class="amount_alert text-danger d-none"></p>

                                            </div>

                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label for="narration">Narration</label>
                                                <input type="text" name="narration" class="form-control" id="narration"
                                                    placeholder="Enter Narration">
                                                <p class="narration_alert text-danger d-none"></p>

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="billno">Bill #</label>
                                                <input type="number" name="billno" class="form-control" id="billno"
                                                    placeholder="Enter Bill #">
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>

                                    <!-- /.row -->
                                </div>
                                <div class="card-footer">
                                    <button type="submit" form="saveexpenses_form" class="btn btn-primary"><i
                                            class="fas fa-plus"></i> Add</button>
                                </div>
                            </form>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->
                    </div>


                    <!-- /.col -->
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-default">
                            <form id="addexpense_form">
                                <div class="card-body">
                                    <table class="table table-bordered" id="expenses_table">
                                        <thead class="bg-primary">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Account</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Narration</th>
                                                <th scope="col">Bill #</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="expensesbody">



                                        </tbody>
                                    </table>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" id="addexpenseform_btn" form="addexpense_form"
                                        class="btn btn-primary d-none">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
    <!-- Content Header (Page header) -->
    @include('admin.funds.js.index')
@endsection
