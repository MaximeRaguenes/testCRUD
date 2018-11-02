@extends('Animals.layout')

@section('content')
    <h1 class="text-center">Your Animals</h1>

    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif

    <div class="pull-right">
                <a class="btn btn-primary pull-right" href="{{ route('animals.create') }}"> <i class="fas fa-plus"></i>
                    <span>
                        Add an animal
                    </span>
                </a>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <th>Type</th>
                <th>Name</th>
                <th>Description</th>
            </thead>
            <tbody>
                @foreach($animals as $animal)
                    <tr>
                        <td>{{$animal->type}}</td>
                        <td>{{$animal->name}}</td>
                        <td>{{$animal->description}}</td>
                        <td>
                            <form action="{{route('animals.destroy', $animal->id)}}" method="POST">
                                <button class="btn btn-danger" type="submit">Delete</button>
                                <a href="{{route('animals.edit', $animal->id)}}" class="btn btn-warning" type="submit">Edit</a>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>

        
    </div>
    
    <div class="pull-right">
                <a class="btn btn-primary pull-right" href="{{ route('animals.create') }}"> <i class="fas fa-plus"></i>
                    <span>
                        Add an animal
                    </span>
                </a>
    </div>
@endsection
