@extends('Animals.layout')

@section('content')
    <h1 class="text-center">Your Animals</h1>
    <div class="pull-right">
                <a class="btn btn-success" href="{{ route('animals.index') }}"> Back to index</a>
            </div>
    <form>
        <div class="col-md-6 col-md-offset-3">
            <select name="type" id="type">
                <option value="reptile">Reptile</option>
                <option value="mammifère">Mammifère</option>
                <option value="oiseau">Oiseau</option>
        </select>
        </div>
        <div class="col-md-6 col-md-offset-3">
        <label for="name">Nom de l'animal :</label>
            <input type="text">
        </div>
        <div class="col-md-6 col-md-offset-3">
            <textarea name="description" id="description" placeholder="Description"></textarea>
        </div>
        <div class="col-md-6 col-md-offset-3">

        <button class="fas fa-plus"type="submit">Add</button>
        </div>

    </form>
@endsection
