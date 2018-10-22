@extends('back.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Category
            <small>{{ $content->judul }}</small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">{{ $title }} {{ $content->name }}</h3>
                      <a class="btn btn-info pull-right" href="{{ route('category.edit',$content->id) }}">Edit</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                            <dl>
                                <dt>Category Title</dt>
                                <dd>{{ $content->title }}</dd>
                                <dt>URL Slug</dt>
                                <dd>{{ $content->slug }}</dd>
                                <dt>Description</dt>
                                <dd>{{ $content->description }}</dd>

                            </dl>
                    </div>

                  </div>

            </div>
            <!-- /.col -->
          </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->





@endsection
