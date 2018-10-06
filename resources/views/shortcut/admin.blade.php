@extends('layouts.admin')

@section('content')

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($shortcuts as $shortcut)
    <tr>
      <th scope="row">{{$shortcut->id}}</th>
      <th>{{$shortcut->name}}</th>
      <td>{{$shortcut->description}}</td>
      <td>
        <a href="{{route('shortcut_destroy', $shortcut->id)}}" class="btn btn-primary" role="button" title="Supprimer"><i class="fas fa-trash-alt"></i></a>
        <a href="{{route('shortcut_edit', $shortcut->id)}}" class="btn btn-primary" role="button" title="Supprimer"><i class="fas fa-edit-alt"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection