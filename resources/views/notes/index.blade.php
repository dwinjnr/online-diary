@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach($notes as $note)
        <div class="col-md-12">
            <div class="card border-success mb-3 note">
                <div class="card-header bg-transparent border-success">
                    <h5 class="card-title">{{$note->title}}</h5>                 
                </div>
                <div class="card-body text-success">
                <p>{{$note->body}}</p>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <div style="display:inline-block; margin-top:7px;">
                        {{$note->created_at}}                     
                    </div>
                    <div style="float:right;">
                        {!! Form::open(['action' => ['NoteController@destroy', $note->id], 'method' => 'POST']) !!}
                            {{Form::hidden('_method', 'DELETE')}}
                            <a href="/notes/{{$note->id}}/edit" class="btn btn-success">Edit</a>
                            {{Form::submit('Delete', ['class' => 'btn btn-success'])}}
                        {!! Form::close() !!}
                    </div>     
                </div>
            </div>
        </div>        
        @endforeach
        {{$notes->links()}}
        </div>
    </div>
</div>
@endsection
