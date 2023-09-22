@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3 class="todayfunds"></h3>

                                <p>Today Received Funds</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-money-bill"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3 class="shopkeepersnum"></h3>

                                <p>Total Shopkeepers</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-store"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->


                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">



                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->

            <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>
        </section>
        <!-- /.content -->
    </div>
    @include('admin.funds.js.index')
@endsection
