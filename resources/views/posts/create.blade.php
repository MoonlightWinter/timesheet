@extends('layouts.app')


@section('content')
<h1>Timesheet log</h1>
{!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('pName', 'Project Name')}}
            {{Form::text('pName', '', ['class' => 'form-control', 'placeholder' => 'Project Name'])}}    
        </div>
        <div class="form-group">
            {{Form::label('cCode', 'Category Code')}}
            {{Form::text('cCode', '', ['class' => 'form-control', 'placeholder' => 'Category Code'])}}    
        </div>
        <div class="form-group">
            {{Form::label('tCode', 'Task Code')}}
            {{Form::text('tCode', '', ['class' => 'form-control', 'placeholder' => 'Task Code'])}}    
        </div>
        <div class="form-group">
            {{Form::label('tDetails', 'Task Details')}}
            {{Form::text('tDetails', '', ['class' => 'form-control', 'placeholder' => 'Task Details'])}}    
        </div>

        <div class="form-group">
          {!! Form::label('Uploading Date') !!}
          {!! Form::text('date_of_upload',null, [
            'class' => 'form-control',
            'id' => 'your_datepicker_id',
          ]) !!}

        </div>
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        
        
    {!! Form::close() !!}

    <a href = "\posts" class = "btn btn-danger"> History</a>
@endsection

<script type="text/javascript">

    $('.timepicker').datetimepicker({
    
        format: 'HH:mm:ss'
    
    });
</script>
  


