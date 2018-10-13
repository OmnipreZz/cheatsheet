@extends('layouts.admin')

@section('content')

<div class="text-center text-secondary">
  <h1>Liste des Utilisateurs</h1>
</div>

<table class="table table-sm table-bordered table-condensed table-striped mt-4">
  <thead>
    <tr class="bg-secondary text-white">
      <th scope="col">Nom</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th class="text-secondary">
        {{$user->name}}
      </th>
      <td class="text-right">
        <button class="btn btn-danger" title="Supprimer" data-toggle="modal" data-target="#confirm{{$user->id}}">
          <i class="fas fa-times"></i>
        </button>
        <div class="modal fade" id="confirm{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="text-danger">Supprimer</h2>
            </div>
            <div class="modal-body">
                <p>Voulez vous vraiment supprimer l'utilisateur " {{$user->name}} " ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok" href="{{ route('admin_destroy', $user->id) }}">Supprimer</a>
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