@extends ('base')


@section ('content')
<div id="content">
        <!-- Content -->

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample">
                        <div class="form-group"><br>
                            <h3 style="color: blue;"><b>Connexion</b></h3>
                            <br>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon bg-primary border-primary" id="colored-addon2">
                                    <i class="fa fa-user text-white"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Login" aria-label="Username"
                                    aria-describedby="colored-addon2">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon bg-primary border-primary" id="colored-addon2">
                                    <i class="fa fa-key text-white"></i>
                                </span>
                                <input type="password" class="form-control" placeholder="Mot de passe" aria-label="Username"
                                    aria-describedby="colored-addon2">
                            </div>
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