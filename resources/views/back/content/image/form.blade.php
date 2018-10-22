<div class="box-body">

        {{--  <img name="gambar" value="" src="{{ url('images', $ulama->gambar) }}"/>  --}}
        <div class="form-group">
            <label>Quiz</label>
            {!! Form::select('quiz_id', $quizes, null, ['required' => '', 'placeholder' => 'Pick a quiz...', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label>Learn Title</label>
            {!! Form::text('title', null, array('placeholder' => 'Enter learn title..','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
          <label>Content</label>
          {!! Form::textarea('content', null, array('required' => '', 'rows' => '10', 'placeholder' => 'Enter a learn content..','class' => 'form-control', 'id' => 'editor1')) !!}
        </div>
        <div class="form-group">
          <label>File image of learn</label>
            {!! Form::file('image'); !!}
 
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
          {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
        {{--  <button type="submit" class="btn btn-primary">Submit</button>  --}}
      </div>