@extends('Animals.layout')

@section('content')
    <h1 class="text-center">Your Animals</h1>

    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show">
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
                  
                        <?php
                        // si le type envoyer correspond à reptile
                            if(isset($_POST['type']) == "Reptile"){
                                 echo" <tr class='reptile'>";                          
                                } else if (isset($_POST['type']) == "Mammifère"){
                                    echo" <tr class='mammifère'>";                          
                                }  else if (isset($_POST['type']) == "Oiseau"){
                                    echo" <tr class='oiseau'>";                          
                                }
                        ?>
                        <td>{{$animal->type}}</td>
                        <td>{{$animal->name}}</td>
                        <td>{{$animal->description}}</td>
                        <td>
                            <form action="{{route('animals.destroy', $animal->id)}}" method="POST">
                            <a href="{{route('animals.edit', $animal->id)}}" class="btn btn-warning" type="submit">
                                    <span class="far fa-edit">
                                        Edit
                                    </span>
                            </a>
                            <button class="btn btn-danger" type="submit"> 
                                <span class="far fa-trash-alt">
                                    Delete
                                </span> 
                            </button>
                                
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
