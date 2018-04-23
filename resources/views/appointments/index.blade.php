@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach($appointments as $appointment)
        <div class="col-md-12">
            <div class="card border-success mb-3 appointment">
                <div class="card-header bg-transparent border-success">
                    <h5 class="card-title">{{$appointment->title}}</h5>                 
                </div>
                <div class="card-body text-success">
                <p>{{$appointment->description}}</p>
                <p><span class="badge badge-secondary">With</span> {{$appointment->with}}</p> 
                <p>
                  <span class="badge badge-secondary">Date</span> {{$appointment->date}} <span class="badge badge-secondary"> Time</span> {{$appointment->time}}                 
                </p>                 
                </div>
                <div class="card-footer bg-transparent border-success">
                    <div style="display:inline-block; margin-top:7px;">
                        {{$appointment->created_at}}                                                
                    </div>
                    <div style="float:right;">
                        {!! Form::open(['action' => ['AppointmentController@destroy', $appointment->id], 'method' => 'POST']) !!}
                            {{Form::hidden('_method', 'DELETE')}}
                            <a href="/appointments/{{$appointment->id}}/edit" class="btn btn-success">Edit</a>
                            {{Form::submit('Delete', ['class' => 'btn btn-success'])}}
                        {!! Form::close() !!}
                    </div>     
                </div>
            </div>
        </div>        
        @endforeach
        {{$appointments->links()}}
        </div>
    </div>
</div>
@endsection
