@extends ('base')


@section ('content')

<div id="content">
        <!-- Content -->
        <div class="container">
            <div class="blog">
                <div class="row">
                    <div class="col-md-8 blog-content">
                        <div class="row">
                            <div class="col-md-12 blog-block">
                                <div class="inner">
                                    <div class="blog-image">
                                        <i class="fa fa-image"></i>
                                        <a href=""><img src="images/blog-1.jpg" alt="" class="img-responsive"></a>
                                    </div>
                                    <h3 class="blog-post-title">Titre de l'histoire</h3>
                                    <div class="blog-meta">Date de publication<span>|</span>Nbre de commentaires
                                        <span>|</span>Nbre de vues</div>
                                    <p>
                                    <h4><b>Résumé</b></h4>
                                    Morbi ultricies porttitor varius. In hac habitasse platea dictumst. Vestibulum
                                    convallis blandit augue quis sagittis. Quisque semper velit dui, sit amet cursus
                                    arcu interdum sit amet. Maecenas augue dui, suscipit non fringilla sed, congue vitae
                                    purus. Aenean non aliquam mi.
                                    </p>

                                </div>
                            </div>

                        </div>
                        <h3 class="sub-title author">A propos de l'auteur</h3>
                        <div class="author-block">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="images/author.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="col-md-9">
                                    <div class="author-name">
                                        <h3>
                                            Nom complet
                                        </h3>
                                        <div class="clearfix"></div>
                                    </div>

                                    <p>Description</p>
                                    <ul class="ft-soc clearfix">
                                        <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 sidebar">
                        <div class="sidebar-inner">
                            <div class="search-widget">
                                <h4>Votre commentaire ici</h4>
                                <form class="side-search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Votre mail ou votre nom">
                                        <br>
                                        <textarea name="" placeholder="votre message" class="form-control" id=""
                                            cols="30" rows="5"></textarea>
                                        <br>
                                        <button class="btn btn-primary" style="float: right;">Commenter</button>
                                    </div>
                                </form>
                            </div>
                            <div class="side-recent">
                                <h4>Commentaires récents</h4>
                                <div class="side-recent-ct">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="images/rec-blog-1.jpg" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <h5><a href="">Lorem ipsum dolor sit amsdf</a></h5>
                                            <div class="meta"><a href="">23 Comments</a> April 11, 2014</div>
                                            <p>Morbi ultricies porttitor varius. In hac habitasse platea de...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="side-recent-ct">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href=""><img src="images/rec-blog-2.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h5><a href="">Lorem ipsum dolor sit amsdf</a></h5>
                                            <div class="meta"><a href="">23 Comments</a> April 11, 2014</div>
                                            <p>Morbi ultricies porttitor varius. In hac habitasse platea de...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="side-recent-ct">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href=""><img src="images/rec-blog-3.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h5><a href="">Lorem ipsum dolor sit amsdf</a></h5>
                                            <div class="meta"><a href="">23 Comments</a> April 11, 2014</div>
                                            <p>Morbi ultricies porttitor varius. In hac habitasse platea de...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="side-last">
                                <h4>Plus anciens commentaires</h4>
                                <div class="side-last-ct">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href=""> <img src="images/rec-blog-1.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h5><a href="">Lorem ipsum dolor sit amsdf</a></h5>
                                            <div class="meta"><a href="">23 Comments</a> April 11, 2014</div>
                                            <p>Morbi ultricies porttitor varius. In hac habitasse platea de...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="side-last-ct">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href=""><img src="images/rec-blog-2.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h5><a href="">Lorem ipsum dolor sit amsdf</a></h5>
                                            <div class="meta"><a href="">23 Comments</a> April 11, 2014</div>
                                            <p>Morbi ultricies porttitor varius. In hac habitasse platea de...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="side-last-ct">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href=""> <img src="images/rec-blog-3.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h5><a href="">Lorem ipsum dolor sit amsdf</a></h5>
                                            <div class="meta"><a href="">23 Comments</a> April 11, 2014</div>
                                            <p>Morbi ultricies porttitor varius. In hac habitasse platea de...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- Content -->



@endsection