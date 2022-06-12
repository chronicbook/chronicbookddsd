@extends ('base')


@section ('content')
<div id="content">
        <!-- Content -->

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample">
                        <div class="form-group"><br>
                            <h3 style="color: blue;"><b>Formulaire d'inscription en tant que auteur</b></h3>
                            <br>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Prénom">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputPassword4" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputCity1"
                                placeholder="Numéro de téléphone">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputCity1"
                                placeholder="Ville de résidence">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputPassword4"
                                placeholder="Nom d'utilisateur (login)">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword4"
                                placeholder="Mot de passe">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea1" rows="2"
                                placeholder="Raison ou motivation"></textarea>
                        </div>
                        <div class="container">
                            <button class="btn btn-danger">Annuler</button>
                            <button type="submit" class="btn btn-primary mr-2">Valider</button>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>

    </div> <!-- Content -->


@endsection