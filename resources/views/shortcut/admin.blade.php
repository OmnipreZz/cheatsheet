@extends('layouts.admin')

@section('content')

<div class="mb-4 ml-4">
  <a class="btn btn-secondary" role="button" href="{{ route('shortcut_create') }}" title="Nouveau raccourci"><i class="fas fa-plus fa-2x"></i></a>  
</div>

<table class="table table-sm table-bordered table-condensed">
  <thead>
    <tr class="bg-secondary text-white">
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($shortcuts as $shortcut)
    <tr>
      <td scope="row" class="bg-secondary text-white">{{$shortcut->id}}</td>
      <th class="text-danger">{{$shortcut->name}}</th>
      <td class="text-secondary">{{$shortcut->description}}</td>
      <td class="text-right">
        <a href="{{route('shortcut_edit', $shortcut->id)}}" class="btn btn-secondary" role="button" title="Editer"><i class="fas fa-pen-square"></i></a>
        <a href="{{route('shortcut_destroy', $shortcut->id)}}" class="btn btn-danger" role="button" title="Supprimer"><i class="fas fa-times"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection