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
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>jhon@email.com</td>
                                            <td>USA</td>
                                            <td><button type="button" class="btn btn-info m-2">Modifier</button></td>
                                            <td> <button type="button" class="btn btn-success m-2">Ajouter</button></td>
                                            <td><button type="button" class="btn btn-danger m-2">Suprimer</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
 @endsection