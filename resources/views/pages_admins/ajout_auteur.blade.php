@extends ('defaut_admin')


@section ('titreadmin','Accueil')


@section('blockadmin')
<br><br>
                    <div class="col-sm-12 col-xl-6" style="width: 100%;">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ajouter un auteur</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="entrez le nom">
                                <label for="floatingInput">nom</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    >
                                <label for="floatingPassword">prenom</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="login">
                                <label for="floatingPassword">lofin</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingPassword"
                                    placeholder="login">
                                <label for="floatingPassword">Telephone</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingPassword"
                                    placeholder="entrez l'email">
                                <label for="floatingPassword">email</label>
                            </div><br>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="reference">
                                <label for="floatingPassword">reference</label>
                            </div><br>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="ville de residence">
                                <label for="floatingPassword">ville de residence</label>
                            </div><br>
                            <div class="form-floating mb-3">
                                <input type="pasword" class="form-control" id="floatingPassword"
                                    placeholder="ville de residence">
                                <label for="floatingPassword">mot de passe</label>
                            </div><br>
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="floatingPassword"
                                    placeholder="profile">
                                <label for="floatingPassword">profile</label>
                            </div><br>
                        </div>
                    </div>




@endsection