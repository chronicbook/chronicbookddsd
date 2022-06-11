@extends ('defaut')

@section('titreauteurs','publier histoire')

@section('blockauteurs')
<br><br>
                    <div class="col-sm-12 col-xl-6" style="width: 100%;">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ajouter une histoire</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Titre</label>
                            </div>
                         </div>
                    </div><br>
                    <div class="col-sm-12 col-xl-6" style="width: 100%;">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Premier chapitre</h6>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="placer votre introduction ici"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">introduction chapitre</label>
                            </div><br>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="placer votre contenu ici"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">contenu premier chapitre</label>
                            </div><br>
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="floatingPassword"
                                    placeholder="affiche de l'histoire">
                                <label for="floatingPassword">affiche de l'histoire</label>
                            </div><br>
                        </div>
                    </div>

@endsection