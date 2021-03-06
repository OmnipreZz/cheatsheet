@extends('layouts.admin')

@section('content')

<div class="ml-4">
  <a class="btn btnGreen text-white" role="button" href="{{ route('command_create') }}" title="Créer une nouvelle commande"><i class="fas fa-plus fa-2x"></i></a>
</div>

<div class="text-center text-secondary">
  <h1>Commandes</h1>
</div>

<div class="container-fluid pt-4">
  <form method="POST" action="{{ route('command_admincategory') }}" aria-label="">
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
      <th scope="col">Commande : {{$category->name}}</th>
      @endif
      @endforeach
      <th scope="col">Description</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($commands as $command)
    <tr>
      <th class="text-secondary">{{$command->name}}</th>
      <td class="text-secondary">{{$command->description}}</td>
      <td class="text-right">
        <a href="{{route('command_edit', $command->id)}}" class="btn btn-secondary" role="button" title="Modifier la commande"><i class="fas fa-pen-square"></i></a>
        <button class="btn btn-danger" title="Supprimer la commande" data-toggle="modal" data-target="#confirm{{$command->id}}">
          <i class="fas fa-times"></i>
        </button>
        <div class="modal fade" id="confirm{{$command->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="text-danger">Supprimer</h2>
            </div>
            <div class="modal-body">
                <p>Voulez vous supprimer définitivement la commande "{{$command->name}}" ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                <a class="btn btn-danger btn-ok" href="{{route('command_destroy', $command->id)}}">Supprimer</a>
            </div>
          </div>
          </div>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection