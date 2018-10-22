@extends('back.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12 col-md-8">

                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">{{ $title }} {{ $content->name }}</h3>
                      <a class="btn btn-info pull-right" href="{{ route('posts.edit',$content->id) }}">Edit</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">

                            <dl>
                                <dt>Title</dt>
                                <dd>{{ $content->title }}</dd>
                                <dt>Slug</dt>
                                <dd>{{ $content->slug }}</dd>
                                <dt>Content</dt>
                                <dd>{!! $content->content !!}</dd>
                                <dt>Category</dt>
                                <dd>{{ $content->category->title }}</dd>


                            </dl>
                    </div>

                    </div>

            </div>
            <div class="col-xs-12 col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ $title }} {{ $content->name }} Images</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">

                        @foreach($content->images as $image)
                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <img style="width:60%;height:60%;margin-bottom: 2px;" class="img-fluid center-block" src="{{ url('images', $image->filename) }}"/>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
            <!-- /.col -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->





@endsection
