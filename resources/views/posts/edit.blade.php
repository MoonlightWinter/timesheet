@extends('layouts.app')


@section('content')
<h1>Timesheet log</h1>
{!! Form::open(['action' => ['PostController@update',$post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('pName', 'Project Name')}}
            {{Form::text('pName', $post->ProjectName, ['class' => 'form-control', 'placeholder' => 'Project Name'])}}    
        </div>
        <div class="form-group">
            {{Form::label('cCode', 'Category Code')}}
            {{Form::text('cCode', $post->CategoryCode, ['class' => 'form-control', 'placeholder' => 'Category Code'])}}    
        </div>
        <div class="form-group">
            {{Form::label('tCode', 'Task Code')}}
            {{Form::text('tCode', $post->TaskCode, ['class' => 'form-control', 'placeholder' => 'Task Code'])}}    
        </div>
        <div class="form-group">
            {{Form::label('tDetails', 'Task Details')}}
            {{Form::text('tDetails', $post->TaskDetails, ['class' => 'form-control', 'placeholder' => 'Task Details'])}}    
        </div>

        <div class="form-group">
          {!! Form::label('Uploading Date') !!}
          {!! Form::text('date_of_upload',null, [
            'class' => 'form-control',
            'id' => 'your_datepicker_id',
          ]) !!}

        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        
    {!! Form::close() !!}
@endsection

<script type="text/javascript">

    $('.timepicker').datetimepicker({
    
        format: 'HH:mm:ss'
    
    });
</script>
  


