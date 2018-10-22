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
            <div class="col-xs-12 col-md-8">
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
                      <h3 class="box-title">Edit {{ $title }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    {!! Form::model($content, ['method' => 'PATCH','enctype'=> 'multipart/form-data', 'route' => ['posts.update', $content->id], 'files' => true]) !!}
                        @include('back.content.post.form')
                    {!! Form::close() !!}
                  </div>

            </div>
            <div class="col-xs-12 col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Images {{ $title }} - {{ $content->title }}</h3>
                    </div>
                    <div class="box-body">
                    @foreach($content->images as $image)
                            <div class="col-lg-12 col-md-12 col-xs-12">
                            <img style="width:60%;height:60%;padding-bottom:4px;" class="img-fluid center-block" src="{{ url('images', $image->filename) }}"/>
                            {!! Form::open(['method' => 'DELETE','route' => ['posts.deletePostImage', $image->id],'style'=>'display:inline', 'onsubmit' => 'return ConfirmDelete()']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger center-block']) !!}
                            {!! Form::close() !!}
                            <br/>
                            </div>

                    @endforeach
                    </div>

                </div>

            </div>
            <!-- /.col -->
          </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->





@endsection
