@extends('layouts.app')

@section('content')

<table class="table table-sm table-bordered table-condensed">
  <thead>
    <tr class="bg-secondary text-white">
      <th scope="col">Nom</th>
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