@extends ('defaut_admin')


@section ('titreadmin','Accueil')


@section('blockadmin')
<br>
<div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Tableau des Ateurs</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Ateur</th>
                                            <th scope="col">nombre de like</th>
                                            <th scope="col">nombre de vues</th>
                                            <th scope="col">Modification </th>
                                            <th scope="col">Ajout</th>
                                            <th scope="col">Suppression</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lister_histoire as $listeh)
                                        <tr>
                                            <th scope="row">$i</th>
                                            <td>{{$listeh->TITRE}}</td>
                                            <td>{{$listeh->auteur->NOM_AUTEUR}}</td>
                                            <td>{{$listeh->NB_L}}</td>
                                            <td>{{$listeh->NB_V}}</td>
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