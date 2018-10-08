@extends('layouts.app')

@section('content')

<div class="pt-4">
  <form method="POST" action="{{ route('command_store') }}" aria-label="">
    @csrf
      <div class="form-group row formMedia">
          <select name="category" class="form-control col-md-3 offset-md-1" id="category">
              <option>Choisissez une catégorie</option>
              
              @foreach($categories as $id => $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
          </select>
          <button type="submit" title="Validez" class="btn mediaBtnF btn-success ml-1">
            <i class="fas fa-check"></i>
          </button>
      </div>
  </form>
</div>
<table class="table table-sm table-bordered table-condensed table-striped">
  <thead>
    <tr class="bg-secondary text-white">
      <th scope="col">Commande</th>
      <th scope="col">Description</th>
      <th scope="col">Catégorie</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($commands as $command)
    <tr>
      <th class="bg-secondary text-white">{{$command->name}}</th>
      <td class="text-secondary">{{$command->description}}</td>
      <td class="text-secondary">{{$command->category->name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection