<ul class="dashboard-navigation">
    <li>
        <h3>Navigation</h3>
    </li>
    <li>
        <a href="{{route('user.index')}}" class="active">Menu d'Accueil</a>
    </li>
    <li>
        <a href="{{route('user.edit-profil')}}">Mon Profil</a>
    </li>
    {{-- <li>
        <a href="#">Edit Address</a>
    </li> --}}
    <li>
        <a href="{{route('user.orders')}}">Historique de Commandes</a>
    </li>
    {{-- <li>
        <a href="{{route('user.orders-details')}}">Order Details</a>
    </li> --}}
    <li>
        <a href="{{route('user.password')}}">Modification mot de passe</a>
    </li>
    <li>
        <a href="{{ route('logout') }}">Se Déconnecter</a>
    </li>
    
</ul>