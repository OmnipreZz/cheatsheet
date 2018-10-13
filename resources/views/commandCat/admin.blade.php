@extends('layouts.admin')

@section('content')

<div class="ml-4">
  <a class="btn btnGreen text-white" role="button" href="{{ route('commandCat_create') }}" title="Créer une nouvelle catégorie de commandes"><i class="fas fa-plus fa-2x"></i></a>
</div>

<div class="text-center text-secondary">
  <h1>Categories de Commandes</h1>
</div>

<table class="table table-sm table-bordered table-condensed table-striped mt-4">
  <thead>
    <tr class="bg-secondary text-white">
      <th scope="col">Nom</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
    <tr>
      <th class="text-secondary">
        {{$category->name}}
      </th>
      <td class="text-right">
        <a href="{{route('commandCat_edit', $category->id)}}" class="btn btn-secondary" role="button" title="Modifier"><i class="fas fa-pen-square"></i></a>
        <button class="btn btn-danger" title="Supprimer" data-toggle="modal" data-target="#confirm-delete">
          <i class="fas fa-times"></i>
        </button>
        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2>Attention !!!</h2>
            </div>
            <div class="modal-body">
                Supprimer une catégorie peut détruire la bdd
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok" href="{{route('commandCat_destroy', $category->id)}}">Delete</a>
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