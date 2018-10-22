@extends('back.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>

                <small>{{ config('app.name', 'Laravel') }}</small>
            </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Summary</li>
            </ol>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-4 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-aqua">
                                        <div class="inner">
                                            <h3></h3>

                                            <p>Item 1</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-paint-brush"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-green">
                                        <div class="inner">
                                            <h3></h3>

                                            <p>Item 2</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-xs-12">
                                    <!-- small box -->
                                    <div class="small-box bg-yellow">
                                        <div class="inner">
                                            <h3></h3>

                                            <p>Item 3</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
