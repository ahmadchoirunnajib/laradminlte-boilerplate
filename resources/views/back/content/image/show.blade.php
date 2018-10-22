@extends('back.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Acara
            <small>{{ $content->judul }}</small>
        </h1>
        {{--  <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>  --}}


    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">{{ $title }} {{ $content->name }}</h3>
                      <a class="btn btn-info pull-right" href="{{ route('learn.edit',$content->id) }}">Edit</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                            <img style="width:60%;height:60%;" class="img-fluid" src="{{ url('images', $content->image) }}"/>
                            <br/><br/>
                            <dl>
                                <dt>Quiz Name</dt>
                                <dd>{{ $content->quiz->name }}</dd>
                                <dt>Learn Title</dt>
                                <dd>{{ $content->title }}</dd>
                                <dt>Learn Content</dt>
                                <dd>{{ $content->content }}</dd>

                            </dl>
                    </div>

                  </div>

            </div>
            <!-- /.col -->
          </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->





@endsection
