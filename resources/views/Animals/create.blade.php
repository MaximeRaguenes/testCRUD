@extends('Animals.layout')

@section('content')

    <h1 class="text-center">Your Animals</h1>

    <div class="row">
        <a href="{{ route('animals.index')}}"" class="btn btn-primary pull-right" >Back</a>
    </div>

    <div class="col-md-6 col-md-offset-3">

        <form action="{{route('animals.store')}}" method="POST">
            <div class="form-group">
                <select name="type" id="type" class="form-control">
                    <option value="reptile">Reptile</option>
                    <option value="mammifère">Mammifère</option>
                    <option value="oiseau">Oiseau</option>
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