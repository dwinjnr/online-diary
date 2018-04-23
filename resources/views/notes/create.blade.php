@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 20px;">
    <div class="row justify-content-center">
      <div class="col-md-6 createForm">
        <h3>Create Note</h3>
        {!! Form::open(['action' => 'NoteController@store', 'method' => 'POST']) !!}
            <div class="form-group row">
                {{Form::label('title', 'Title', ['class' => 'col-3 control-form-label col-form-label-md'])}}
                <div class="col-9">
                  {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title of the note'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('body', 'Body', ['class' => 'col-3 control-form-label col-form-label-md'])}}
                <div class="col-9">
                  {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body of the note', 'rows' => '6'])}}
                </div>
            </div>
            <div class="form-group row">
              <div class="offset-md-2 col-md-10">
                {{Form::submit('Create', ['class' => 'btn btn-outline-success link-btn'])}}
              </div>
            </div>
        {!! Form::close() !!}
      </div>
    </div>
</div>
@endsection
