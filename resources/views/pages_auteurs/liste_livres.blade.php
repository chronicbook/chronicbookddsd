@extends ('defaut')

@section('titreauteurs','liste livre')

@section('blockauteurs')
<br>
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">liste de mes livres</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">titre</th>
                                            <th scope="col">categories</th>
                                            <th scope="col">nombre d'achat</th>
                                            <th scope="col">nombre de like</th>
                                            <th scope="col">prix unitaire </th>
                                            <th scope="col">Modification</th>
                                            <th scope="col">Suppression</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lister_livres as $collect)
                                        <tr>
                                            <th scope="row">{{$collect->id}}</th>
                                            <td>{{$collect->TITRE}}</td>
                                            <td>{{$collect->CATEGORIE   }}</td>
                                            <td>{{$collect->NB_ACHAT}}</td>
                                            <td>{{$collect->NB_LIKE}}</td>
                                            <td>{{$collect->PRIX}}</td>
                                            <td> <button type="button" class="btn btn-success m-2">Modifier</button></td>
                                            <td><button type="button" class="btn btn-danger m-2">Suprimer</button></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection