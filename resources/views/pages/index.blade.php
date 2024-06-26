@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Types</h1>

    @foreach ($types as $type)
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $type->icon }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Nome del tipo: {{ $type->name }}</h5>
                        <p class="card-text">Descrizione del tipo: {{ $type->description }}</p>
                        @foreach ($type->projects as $project)
                            <p class="card-text"><small class="text-muted">Titolo del progetto:
                                    {{ $project->title }}</small>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
