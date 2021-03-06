@extends('Animals.layout')

@section('content')

    <h2 class="text-center">Edit your animal</h2>
    <div class="row">
        <a href="{{ route('animals.index')}}" class="btn btn-primary pull-right" >Back</a>
    </div>

    <div class="col-md-6 col-md-offset-3">

        <form action="{{route('animals.update', $animal->id)}}" method="POST">
            <div class="form-group">
                <select name="type" id="type" class="form-control">
                 <option value="{{$animal->type}}">{{$animal->type}}</option>
                <?php
                // garder le type choisi précédement 
                // $checkedType = $_POST['type'];
                $type = ["Reptile", "Mammifère", "Oiseau"];
                $size = count($type);
                // echo "<option value='".$checkedType."'>".$checkedType."</option>";

                for ($i = 0; $i < $size; $i++) {

                    echo "<option value='" . $type[$i] . "'>" . $type[$i] . "</option>";
                }

                ?>
                    <!-- 
                    <option value="{{$animal->type}}">{{$animal->type}}</option>
                    <option value="Reptile">Reptile</option>
                    <option value="Mammifère">Mammifère</option>
                    <option value="Oiseau">Oiseau</option> -->
            </select>
            </div>

            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                <input name="name" type="text" class="form-control" value="{{$animal->name}}">
                <span class="help-block">
                    @if($errors->has('name'))
                        {{$errors->first('name')}}
                    @endif
                </span>
            </div>

            <div class="form-group {{$errors->has('description') ? 'has-error' : ''}}">
                <textarea class="form-control" name="description" id="description">{{$animal->description}}</textarea>
                <span class="help-block">
                    @if($errors->has('description'))
                        {{$errors->first('description')}}
                    @endif
                </span>
            </div>

                <button type="submit" class="btn btn-success btn-block" >
                    <span class="far fa-edit">
                        Edit
                    </span>
                </button>
                @csrf
                @method('PATCH')
        </form>
    </div>
@endsection
