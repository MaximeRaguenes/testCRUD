@extends('Animals.layout')

@section('content')

    <h1 class="text-center">Your Animals</h1>

    <div class="row">
        <a href="{{ route('animals.index')}}" class="btn btn-primary pull-right" >Back</a>
    </div>

    <div class="col-md-6 col-md-offset-3">

        <form action="{{route('animals.store')}}" method="POST">
            <div class="form-group">
                <select name="type" id="type" class="form-control">
                <?php
                    $type = ["Reptile", "Mammifère", "Oiseau"];
                    $size = count($type);
                
                for ($i = 0; $i < $size; $i++){

                    echo "<option value='".$type[$i]."'>".$type[$i]."</option>";
                }
                
                ?>
                    <!-- <option value="Reptile">Reptile</option>
                    <option value="Mammifère">Mammifère</option>
                    <option value="Oiseau">Oiseau</option> -->
            </select>
            </div>

            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                <input name="name" type="text" placeholder="Nom de l'animal" class="form-control">
                <span class="help-block">
                    @if($errors->has('name'))
                        {{$errors->first('name')}}
                    @endif
                </span>
            </div>

            <div class="form-group {{$errors->has('description') ? 'has-error' : ''}}">
                <textarea class="form-control" name="description" id="description" placeholder="Description"></textarea>
                <span class="help-block">
                    @if($errors->has('description'))
                        {{$errors->first('description')}}
                    @endif
                </span>
            </div>

                <button type="submit" class="btn btn-success btn-block" ><i class="fas fa-plus"> </i>
                    <span>
                        Add
                    </span>
                </button>
                @csrf
        </form>
    </div>
@endsection
