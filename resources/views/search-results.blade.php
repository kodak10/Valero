@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Résultats de la Recherche</h2>
    {{-- <p>Texte extrait de l'image : "{{ $text }}"</p> --}}
    
    @if($articles->isEmpty())
        <p>Aucun article trouvé.</p>
    @else
        <ul>
            @foreach($articles as $article)
                <li>{{ $article->nom }} - {{ $article->prix }}</li>
            @endforeach
        </ul>
    @endif
</div>
@endsection



