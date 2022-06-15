@extends ('defaut')

@section('titreauteurs','liste histoire')

@section('blockauteurs')
<br>
<div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">titre</th>
                                            <th scope="col">nombre de chapitre</th>
                                            <th scope="col">nombre de vue</th>
                                            <th scope="col">nombre de like</th>
                                            <th scope="col">Modification </th>
                                            <th scope="col">Ajout</th>
                                            <th scope="col">Suppression</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lister_histoire as $collecth)
                                        <tr>
                                            <th scope="row">{{$collecth->id}}</th>
                                            <td>{{$collecth->TITRE}}</td>
                                            <td>{{$collecth->NB_C}}</td>
                                            <td>{{$collecth->NB_V}}</td>
                                            <td>{{$collecth->NB_L}}</td>
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