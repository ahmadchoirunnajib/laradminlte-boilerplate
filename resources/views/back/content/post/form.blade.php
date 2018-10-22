<div class="box-body">

        <div class="form-group">
            <label>Category</label>
            {!! Form::select('category_id', $categories, null, ['required' => '', 'class' => 'form-control','placeholder' => 'Select a category']) !!}
        </div>
        <div class="form-group">
            <label>Title</label>
            {!! Form::text('title', null, array('required' => '', 'placeholder' => 'Title..','class' => 'form-control', 'id' => 'title')) !!}
        </div>
        <div class="form-group">
            <label>Slug</label>
            {!! Form::text('slug', null, array('required' => '', 'placeholder' => 'Slug..','class' => 'form-control', 'id' => 'slug')) !!}
        </div>
         <div class="form-group">
          <label>Content</label>
          {!! Form::textarea('content', null, array('required' => '', 'rows' => '2', 'placeholder' => 'Content..','class' => 'form-control', 'id' => 'editor1')) !!}
        </div>
        <div class="form-group">
          <label>Images</label>
          {!! Form::file('images[]', array('multiple')) !!}
        </div>

        <div class="form-group">
          <label>Publish</label>
          {!! Form::checkbox('is_published', 1,  isset($content->is_published) ? $content->is_published : '' ); !!}
        </div>


      </div>
      <!-- /.box-body -->

      <div class="box-footer">
          {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
      </div>
