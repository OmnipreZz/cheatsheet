@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Créer un raccourci
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('shortcut_update', $shortcut->id) }}" aria-label="">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="name" value="{{$shortcut->name}}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="content" class="form-control" name="description" rows="10" required style="resize:none;">{{$shortcut->description}}</textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category"class="col-md-4 col-form-label text-md-right">Catégories</label>
                            <select name="category" class="form-control col-md-6" id="category">
                                @foreach($categories as $id => $category)
                                <option value="{{$id}}"
                                @if ($hisCategory->id == $id)
                                    {{'selected'}}
                                @endif
                                >
                                {{$category->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Envoyez') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection