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
                                            <th scope="col">Nom</th>
                                            <th scope="col">Prenom</th>
                                            <th scope="col"> Telephone</th>
                                            <th scope="col"> email</th>
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