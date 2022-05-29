@extends("layouts.app")
@section("title", "Liste des abonnes")
@section("content")
<!-- <h1>
    Tous les abonnes :
</h1>
<p>
    <a href="{{ route('abonne.create') }}" title="Ajouter un Abonne"> Ajouter un abonne</a>
</p> -->

<div class=" uk-flex 
    uk-flex-column@m   uk-flex-row-reverse@s uk-text-center uk-flex-center uk-margin-large" uk-grid>
    <div class=" uk-width-2-3 uk-child-width-1-2@m" uk-grid>


        @foreach($abonnes as $abonne)






        <div class="uk-container">

            <div class="uk-card uk-background-muted uk-card-small uk-card-body uk-card-hover">
                <div class="uk-flex">
                    <img class="uk-border-circle uk-align-center" width="190" height="190" src="{{ asset('storage/' .$abonne->photo) }}" style="border: 3px solid #aa0a30; height: 190px !important;">
                    <button class="uk-button uk-badge" type="button">Options</button>
                    <div uk-dropdown="mode: click">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li>
                                <a href="{{ route('abonne.edit', $abonne) }}">Modifier</a>

                            </li>
                            <hr class="uk-divider-small">
                            <li>
                                <form action="{{ route('abonne.destroy', $abonne) }}" method="post">

                                    @csrf
                                    @method("DELETE")
                                    <input type="submit" value="Retirer l'abonne" class="sup">

                                </form>
                                <!-- <a href="{{ route('abonne.destroy', $abonne) }}">Supprimer</a> -->
                            </li>
                        </ul>
                    </div>

                </div>
                <div>
                    <p class> <span class="nom">{{ $abonne->nom}} {{$abonne->prenom}}</span><br>
                        {{ $abonne->email}}<br>
                        {{ $abonne->telephone}}<br>
                        <span class="date">
                            <p>{{ @explode(" ", $abonne->created_at)[0] }}/ {{$abonne->abonnement_fin}}</p>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="uk-padding-small uk-width-1-3@s">
        <div>
            <a href="{{ route('abonne.create') }}" title="Ajouter un Abonne">

                <div class="uk-card ik-card-large uk-background-muted uk-card-body uk-card-hover">
                    <br>
                    <br>
                    <br>
                    <small class="uk-text-muted">Ajouter un abonne</small>
                    <br>
                    <span uk-icon="plus"></span>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>
            </a>
        </div>
    </div>
</div>
<a class="uk-button uk-button-large uk-position-small uk-position-bottom-right" href="#add" uk-scroll style="position:fixed !important;" uk-icon="plus">Ajout</a>

@endsection