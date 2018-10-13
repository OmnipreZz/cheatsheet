@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2 class="text-secondary">Admin</h2></div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="mb-4">
                        <a class="btn btnAdmin btnGreen text-white" role="button" href="{{ route('command_create') }}" title="Créer une nouvelle commande"><i class="fas fa-plus"></i> Nouvelle Commande</a>
                    </div>
                    <div>
                        <a class="btn btnAdmin btnGreen text-white" role="button" href="{{ route('shortcut_create') }}" title="Créer un nouveau raccourci"><i class="fas fa-plus"></i> Nouveau Raccourci</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection