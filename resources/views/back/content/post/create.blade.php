@extends('back.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $title }}
            <small>{{ config('app.name', 'Laravel') }}</small>
        </h1>

        
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Error!</h4>
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                </div>
                @endif
                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Add {{ $title }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    {!! Form::open(array('route' => 'posts.store','method'=>'POST', 'enctype'=> 'multipart/form-data', 'files' => true)) !!}
                        @include('back.content.post.form')
                    {!! Form::close() !!}
                  </div>

            </div>
            <!-- /.col -->
          </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

@endsection