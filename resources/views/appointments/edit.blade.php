@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 20px;">
    <div class="row justify-content-center">
      <div class="col-md-6 editForm">
        <h3>Edit Appointment</h3>
        {!! Form::open(['action' => ['AppointmentController@update', $appointment->id], 'method' => 'POST']) !!}
            <div class="form-group row">
                {{Form::label('title', 'Title', ['class' => 'col-3 control-form-label col-form-label-md'])}}
                <div class="col-9">
                  {{Form::text('title', $appointment->title, ['class' => 'form-control', 'placeholder' => 'Title of the note'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('description', 'Description', ['class' => 'col-3 control-form-label col-form-label-md'])}}
                <div class="col-9">
                  {{Form::textarea('description', $appointment->description, ['class' => 'form-control', 'placeholder' => 'Description', 'rows' => '3'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('with', 'With', ['class' => 'col-3 control-form-label col-form-label-md'])}}
                <div class="col-9">
                  {{Form::text('with', $appointment->with, ['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('date', 'Date', ['class' => 'col-3 control-form-label col-form-label-md'])}}
                <div class="col-9">
                  {{Form::date('date', $appointment->date, ['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('time', 'Time', ['class' => 'col-3 control-form-label col-form-label-md'])}}
                <div class="col-9">
                  {{Form::time('time', $appointment->time, ['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group row">
              <div class="offset-md-2 col-md-10">
                {{Form::hidden('_method', 'PUT')}}                
                {{Form::submit('Update', ['class' => 'btn btn-outline-success link-btn'])}}
              </div>
            </div>
        {!! Form::close() !!}
      </div>
    </div>
</div>
@endsection
