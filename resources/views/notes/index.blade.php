@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 60px;">
    <div class="justify-content-center">
        @foreach($notes as $note)
          <p>{{$note->title}}</p>
        @endforeach
    </div>
</div>
@endsection
