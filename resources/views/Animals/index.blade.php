@extends('Animals.layout')

@section('content')
    <h1 class="text-center">Your Animals</h1>
    <div class="pull-right">
                <a class="btn btn-success" href="{{ route('animals.create') }}"> Add an Animal</a>
            </div>
    <div class="row">
        <table class="table table-stripped">
        <th>Type</th>
        <th>Name</th>
        <th>Description</th>

        </table>
    </div>
@endsection