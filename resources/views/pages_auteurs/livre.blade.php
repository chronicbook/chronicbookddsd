@extends ('defaut')

@section('titreauteurs','publier livre')

@section('blockauteurs')
<br><br>
                    <div class="col-sm-12 col-xl-6" style="width: 100%;">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ajouter un livre l</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Titre</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    >
                                <label for="floatingPassword">nom de l'auteur</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="categorie">
                                <label for="floatingPassword">categorie</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="placer votre description ici"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">introduction/description</label>
                            </div><br>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingPassword"
                                    placeholder="prix unitaire">
                                <label for="floatingPassword">prix unitaire</label>
                            </div><br>
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="floatingPassword"
                                    placeholder="affiche du livre">
                                <label for="floatingPassword">affiche du livre</label>
                            </div><br>
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="floatingPassword"
                                    placeholder="fichier livre">
                                <label for="floatingPassword">fichier livre</label>
                            </div>
                        </div>
                    </div>

@endsection