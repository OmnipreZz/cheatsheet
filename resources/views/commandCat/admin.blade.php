@extends('layouts.admin')

@section('content')

<div class="ml-4">
  <a class="btn btn-secondary" role="button" href="{{ route('commandCat_create') }}" title="Nouvelle commande"><i class="fas fa-plus fa-2x"></i></a>
</div>

<div class="text-center text-secondary">
  <h1>Categories Commandes</h1>
</div>

<table class="table table-sm table-bordered table-condensed table-striped">
  <thead>
    <tr class="bg-secondary text-white">
      <th scope="col">#</th>
      <th scope="col">Nom</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
    <tr>
      <th class="bg-secondary text-white">{{$category->id}}</th>
      <td class="text-secondary">
        {{$category->name}}
      </td>
      <td class="text-right">
        <a href="{{route('commandCat_edit', $category->id)}}" class="btn btn-secondary" role="button" title="Editer"><i class="fas fa-pen-square"></i></a>
        <a href="{{route('commandCat_destroy', $category->id)}}" class="btn btn-danger" role="button" title="Supprimer"><i class="fas fa-times"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection