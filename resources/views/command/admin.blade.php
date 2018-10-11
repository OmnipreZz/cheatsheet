@extends('layouts.admin')

@section('content')

<div class="ml-4">
  <a class="btn btn-secondary" role="button" href="{{ route('command_create') }}" title="Nouvelle commande"><i class="fas fa-plus fa-2x"></i></a>
</div>

<div class="text-center text-secondary">
  <h1>Commandes</h1>
</div>

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
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($commands as $command)
    <tr>
      <th class="bg-secondary text-white">{{$command->name}}</th>
      <td class="text-secondary">{{$command->description}}</td>
      <td class="text-secondary">{{$command->category['name']}}</td>
      <td class="text-right">
        <a href="{{route('command_edit', $command->id)}}" class="btn btn-secondary" role="button" title="Editer"><i class="fas fa-pen-square"></i></a>
        <button class="btn btn-danger" title="Supprimer" data-toggle="modal" data-target="#confirm-delete">
          <i class="fas fa-times"></i>
        </button>
        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2>Supprimer</h2>
            </div>
            <div class="modal-body">
                Voulez vous vraiment supprimmer cette commande ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok" href="{{route('command_destroy', $command->id)}}">Delete</a>
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