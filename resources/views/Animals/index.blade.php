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
                <th>Edit / Delete</th>

            </thead>
            <tbody>
                @foreach($animals as $animal)
                  <tr>
                     <?php
                        // $type = isset($_POST['type']);
                        //     // si le type envoyer correspond à reptile
                        //     if($type == "Reptile"){
                        //         echo "<td class='reptile'>.$animal->type.</td>";                                         
                        //          // si le type envoyer correspond à mammifere
                        //         } else if ($type == "Mammifère"){
                        //             echo "<td class='mammifere'>".$animal->type."</td>";   
                        //             // si le type envoyer correspond à oiseau                      
                        //             } else if ($type == "Oiseau"){
                        //             echo "<td class='oiseau'>.$animal->type.</td>";
                                                                
                        //         }

                     ?>

                        <td>{{$animal->type}}</td>
                        <td>{{$animal->name}}</td>
                        <td>Je suis un {{$animal->name}}, j'ai {{$animal->description}}</td> 
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
