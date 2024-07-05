@foreach($articles as $article)
    <div>
        <h3>{{ $article->nom }}</h3>
        <p>{{ $article->description }}</p>
        <!-- Ajoutez d'autres détails d'affichage ici -->
    </div>
@endforeach
