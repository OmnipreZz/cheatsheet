@extends('layouts.app')

@section('content')

<div class="text-center text-secondary">
  <h1>Les Commandes</h1>
</div>

<div class="pt-4">
  <form method="POST" action="{{ route('command_category') }}" aria-label="">
    @csrf
      <div class="form-group row formMedia">
        <label for="category" class="col-form-label text-md-right col-md-3">Choisissez une catégorie :</label>
          <select name="category" class="form-control col-md-3" id="category">
              @foreach($categories as $id => $category)
              <option value="{{$category->id}}"
              @if ($hisCategory == $category->id)
              {{'selected'}}
              @endif
              >{{$category->name}}</option>
              @endforeach
          </select>
          <button type="submit" title="Valider" class="btn mediaBtnF btnGreen text-white ml-2">
            <i class="fas fa-check"></i>
          </button>
      </div>
  </form>
</div>
<table class="table table-sm table-bordered table-condensed table-striped mt-4">
  <thead>
    <tr class="bg-secondary text-white">
      @foreach ($categories as $id => $category)
      @if ($hisCategory == $category->id)
      <th scope="col">Commandes : {{$category->name}}</th>
      @endif
      @endforeach
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($commands as $command)
    <tr>
      <th class="text-secondary">{{$command->name}}</th>
      <td class="text-secondary">{{$command->description}}</td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection