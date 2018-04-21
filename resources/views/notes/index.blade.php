@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 60px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach($notes as $note)
        <div class="col-md-12">
            <div class="card border-success mb-3 note">
                <div class="card-header bg-transparent" style="border-bottom:0;">
                    <h5 class="card-title">{{$note->title}}</h5>                 
                </div>
                <div class="card-body text-success border-success" style="border-top:1px solid rgba(0,0,0,.125);">
                <p>{{$note->body}}</p>
                </div>
                <div class="card-footer bg-transparent border-success">
                     {{$note->created_at->format('d M y')}}
                     <p style="float:right;">
                         <a href="/notes/{{$note->id}}/edit">Edit</a>
                         <a href="/notes/{{$note->id}}/delete">Delete</a>
                     </p>
                </div>
            </div>
        </div>        
        @endforeach
        </div>
    </div>
</div>
@endsection
