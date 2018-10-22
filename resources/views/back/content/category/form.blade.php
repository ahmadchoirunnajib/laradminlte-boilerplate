<div class="box-body">

        <div class="form-group">
            <label>Category Name</label>
            {!! Form::text('title', null, array('required' => '', 'placeholder' => 'Enter category name..','class' => 'form-control', 'id' => 'title')) !!}
        </div>
        <div class="form-group">
            <label>Category Slug</label>
            {!! Form::text('slug', null, array('required' => '', 'placeholder' => 'Enter category slug..','class' => 'form-control', 'id' => 'slug')) !!}
        </div>
        <div class="form-group">
          <label>Category Description</label>
          {!! Form::textarea('description', null, array('rows' => '2', 'placeholder' => 'Enter a description..','class' => 'form-control')) !!}
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
          {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
          
      </div>