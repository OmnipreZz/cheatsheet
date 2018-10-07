@extends('layouts.admin')

@section('content')

<div class="ml-4">
  <a class="btn btn-secondary" role="button" href="{{ route('command_create') }}" title="Nouvelle commande"><i class="fas fa-plus fa-2x"></i></a>
</div>

<div class="text-center text-secondary">
  <h1>Commandes</h1>
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
        <a href="{{route('command_destroy', $command->id)}}" class="btn btn-danger" role="button" title="Supprimer"><i class="fas fa-times"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection