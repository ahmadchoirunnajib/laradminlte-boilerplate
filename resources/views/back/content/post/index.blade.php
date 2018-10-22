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
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    {{ $message }}
                </div>
                @endif
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">{{ $title }} List</h3>
                  <a class="btn btn-info pull-right" href="{{ route('posts.create') }}">Add {{ $title }}</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped" >
                    <thead>
                    <tr>
                      <th>Title</th>
                      <th>Slug</th>
                      <th>Content</th>
                      <th>Date Modified</th>
                      <th>Published</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($contents as $content)
                        <tr>
                            <td>{{ $content->title }}</td>
                            <td>{{ $content->slug }}</td>
                            <td>{!! substr($content->content, 0, 50).' ..' !!}</td>
                            <td>{{ $content->updated_at }}</td>
                            <td>@if($content->is_published == 1) {{ "True" }}  @else {{ "False" }} @endif</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('posts.show',$content->id) }}">Show</a>
                                <a class="btn btn-info" href="{{ route('posts.edit',$content->id) }}">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $content->id],'style'=>'display:inline', 'onsubmit' => 'return ConfirmDelete()']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger' ]) !!}
                                {!! Form::close() !!}

                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Content</th>
                        <th>Date Modified</th>
                        <th>Published</th>
                        <th>Action</th>
                        </tr>
                    </tfoot>
                  </table>
                  {!! $contents->links() !!}
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
