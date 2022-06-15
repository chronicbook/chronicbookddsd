@extends ('defaut_admin')


@section ('titreadmin','Accueil')


@section('blockadmin')
<br>
<div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Tableau des livres</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Auteur</th>
                                            <th scope="col">prix unitaire</th>
                                            <th scope="col">nombre de like</th>
                                            <th scope="col">nombre de d'achat</th>
                                            <th scope="col">Modification </th>
                                            <th scope="col">Ajout</th>
                                            <th scope="col">Suppression</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lister_livres as $liste)
                                            <tr>
                                                <th scope="row">{{$liste->TITRE}}</th>
                                                <td>{{$liste->auteur->NOM_AUTEUR}}</td>
                                                <td>{{$liste->PRIX}}</td>
                                                <td>{{$liste->NB_LIKE}}</td>
                                                <td>{{$liste->NB_ACHAT}}</td>
                                                <td><button type="button" class="btn btn-info m-2">Modifier</button></td>
                                                <td> <button type="button" class="btn btn-success m-2">Ajouter</button></td>
                                                <td><button type="button" class="btn btn-danger m-2">Suprimer</button></td>
                                            </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
 @endsection