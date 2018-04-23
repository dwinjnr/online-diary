@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 60px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-header bg-transparent border-success">Notes</div>
                <div class="card-body text-success">
                    <p class="card-text">{{$record['notes']}}</p>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <a class="create" href="notes/create">Create New</a>
                    <a class="view" href="notes">View All</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-header bg-transparent border-success">Appointments</div>
                <div class="card-body text-success">
                    <p class="card-text">{{$record['appointments']}}</p>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <a class="create" href="appointments/create">Create New</a>
                    <a class="view" href="appointments">View All</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
