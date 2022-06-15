@extends ('defaut_admin')


@section ('titreadmin','Accueil')


@section('blockadmin')
<br><br>
<form   method="POST" action="{{route('sotre_auteur')}}">
                    <div class="col-sm-12 col-xl-6" style="width: 100%;">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ajouter un auteur</h6>
                                        <div class="form-floating mb-3">
                                        @csrf 
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="entrez le nom" name="nom" required>
                                            <label for="floatingInput">nom</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingPassword"
                                            name="prenom" required>
                                            <label for="floatingPassword">prenom</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingPassword"
                                                placeholder="login"  name="login"required>
                                            <label for="floatingPassword">login</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingPassword"
                                                placeholder="login"  name="tel" required>
                                            <label for="floatingPassword">Telephone</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingPassword"
                                                placeholder="entrez l'email"  name="email" required>
                                            <label for="floatingPassword">email</label>
                                        </div><br>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingPassword"
                                                placeholder="reference"  name="reference" required>
                                            <label for="floatingPassword">reference</label>
                                        </div><br>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingPassword"
                                                placeholder="ville de residence"  name="ville" required>
                                            <label for="floatingPassword">ville de residence</label>
                                        </div><br>
                                        <div class="form-floating mb-3">
                                            <input type="pas sword" class="form-control" id="floatingPassword"
                                                placeholder="ville de residence"  name="pwd" required>
                                            <label for="floatingPassword">mot de passe</label>
                                        </div><br>
                                        <div class="form-floating mb-3">
                                            <input type="file" class="form-control" id="floatingPassword"
                                                placeholder="profile"  name="profile" required>
                                            <label for="floatingPassword">profile</label>
                                        </div><br>
                                 <button type="submit" class="btn btn-primary">Creer</button> 
                                 <button type="reset" class="btn btn-danger" style="margin-left: 20%;">Annuler</button>  
                        </div>
                    </div>
                </form>



@endsection