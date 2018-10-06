@extends('layouts.app')

@section('content')

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($shortcuts as $shortcut)
    <tr>
      <th>{{$shortcut->name}}</th>
      <td>{{$shortcut->description}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection