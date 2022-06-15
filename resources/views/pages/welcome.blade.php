@extends ('base')


@section ('content')

        <div id="main-slider">
            <!-- Slider -->
            <div id="home-slider" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="images/slider-1.jpg" alt="slide-1" class="img-responsive">
                    <div class="slider-desc">
                        <div class="container">
                            <div class="slide-offers-center" style="text-align: center;">
                                <div class="slide-offers-title"><span>Chronic Book</span></div>
                                <p style="color: yellow;">La reférence de la lecture</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="slide-offers-left">
                                        <div class="slide-offers-title"><span>Rayon histoire</span></div>
                                        <p>Des histoires passionnantes juste pour votre plaisir</p>
                                        <a href="#1" class="btn btn-blue">Commencer</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slide-offers-right">
                                        <div class="slide-offers-title"><span>Rayon livre</span></div>
                                        <p>Des livres écrits pour satisfaire votre <br> soif de lecture à des prix
                                            enhantants</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider-2.jpg" alt="slide-2" class="img-responsive">
                    <div class="slider-desc">
                        <div class="container">
                            <div class="slide-offers-center" style="text-align: center;">
                                <div class="slide-offers-title"><span>Chronic Book</span></div>
                                <p style="color: blue;">La reférence de la lecture</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="slide-offers-left">
                                        <div class="slide-offers-title"><span>Nos auteurs</span></div>
                                        <p>Des chroniqueurs et auteurs<br /> selectionnés pour vous plonger <br> dans le
                                            monde passionnant <br> qu'est celui des histoires</p>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Slider -->

        <div id="content">
            <!-- Content -->

            <div class="newest">
                <div class="container">
                    <div class="newest-content">
                        <div class="newest-tab">
                            <ul id="myTab" class="nav nav-tabs newest" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#1" id="cat-1" role="tab" data-toggle="tab" aria-controls="1"
                                        aria-expanded="true">Histoires</a>
                                </li>
                                <li role="presentation">
                                    <a href="#2" role="tab" id="cat-2" data-toggle="tab" aria-controls="2">Livres</a>
                                </li>
                            </ul>
                            <div class="container">
                                <form action="" class="col-lg-4" >
                                    <div class="input-group" style="display: flex; flex-direction: row;">
                                        <input type="text" class="form-control search-wid" placeholder="Search Here" aria-describedby="basic-addon3">
                                        <button href="" class="input-group-addon btn-side-serach" id="basic-addon3"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <br>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="1" aria-labelledby="cat-1">
                                    <div class="row clearfix">
                                        <div class="col-md-3 prdct-grid">
                                            <div class="product-fade">
                                                <div class="product-fade-wrap">
                                                    <div id="product-image" class="owl-carousel owl-theme">
                                                        <div class="item"><img src="images/p-1.jpg" alt=""
                                                                class="img-responsive"></div>
                                                    </div>
                                                    <div class="product-fade-ct">
                                                        <div class="product-fade-control">
                                                            <div class="to-left">
                                                                <a href=""><i class="fa fa-heart"></i></a>
                                                                <a href="{{route('details_histoire')}}"><i class="fa fa-eye"></i></a>
                                                                <a href="{{route('commentaires')}}"><i class="fa fa-comment"></i></a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-name">
                                                <a href="">Titre</a>
                                            </div>
                                            <div> Nombre de like</div>
                                            <div class="product-price">
                                                <p>Nom de l'auteur</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 prdct-grid">
                                            <div class="product-fade">
                                                <div class="product-fade-wrap">
                                                    <div id="product-image2" class="owl-carousel owl-theme">
                                                        <div class="item"><img src="images/p-2.jpg" alt="" class="img-responsive"></div>
                                                    </div>
                                                    <div class="product-fade-ct">
                                                        <div class="product-fade-control">
                                                            <div class="to-left">
                                                                <a href=""><i class="fa fa-heart"></i></a>
                                                                <a href=""><i class="fa fa-retweet"></i></a>
                                                                <a href=""><i class="fa fa-search"></i></a>
                                                            </div>
                                                            <div class="to-right">
                                                                <div id="product-control2"
                                                                    class="owl-carousel owl-theme">
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <a href="" class="btn btn-to-cart"><span
                                                                    class="bag"></span><span>Add To cart</span>
                                                                <div class="clearfix"></div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-name">
                                                <a href="">Women's Jeans</a>
                                            </div>
                                            <div class="star-1"></div>
                                            <div class="product-price">
                                                <span>$19.00</span> $15.00
                                            </div>
                                        </div>
                                        <div class="col-md-3 prdct-grid">
                                            <div class="product-fade">
                                                <div class="product-fade-wrap">
                                                    <div id="product-image3" class="owl-carousel owl-theme">
                                                        <div class="item"><img src="images/p-3.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-4.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-5.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-1.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-2.jpg" alt=""
                                                                class="img-responsive"></div>
                                                    </div>
                                                    <div class="product-fade-ct">
                                                        <div class="product-fade-control">
                                                            <div class="to-left">
                                                                <a href=""><i class="fa fa-heart"></i></a>
                                                                <a href=""><i class="fa fa-retweet"></i></a>
                                                                <a href=""><i class="fa fa-search"></i></a>
                                                            </div>
                                                            <div class="to-right">
                                                                <div id="product-control3"
                                                                    class="owl-carousel owl-theme">
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <a href="" class="btn btn-to-cart"><span
                                                                    class="bag"></span><span>Add To cart</span>
                                                                <div class="clearfix"></div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-name">
                                                <a href="">Running Shoes</a>
                                            </div>
                                            <div class="star-1"></div>
                                            <div class="product-price">
                                                <span>$19.00</span> $15.00
                                            </div>
                                        </div>
                                        <div class="col-md-3 prdct-grid">
                                            <div class="product-fade">
                                                <div class="product-fade-wrap">
                                                    <div id="product-image4" class="owl-carousel owl-theme">
                                                        <div class="item"><img src="images/p-4.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-5.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-1.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-2.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-3.jpg" alt=""
                                                                class="img-responsive"></div>
                                                    </div>
                                                    <div class="product-fade-ct">
                                                        <div class="product-fade-control">
                                                            <div class="to-left">
                                                                <a href=""><i class="fa fa-heart"></i></a>
                                                                <a href=""><i class="fa fa-retweet"></i></a>
                                                                <a href=""><i class="fa fa-search"></i></a>
                                                            </div>
                                                            <div class="to-right">
                                                                <div id="product-control4"
                                                                    class="owl-carousel owl-theme">
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <a href="" class="btn btn-to-cart"><span
                                                                    class="bag"></span><span>Add To cart</span>
                                                                <div class="clearfix"></div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-name">
                                                <a href="">men's Jeans</a>
                                            </div>
                                            <div class="star-1"></div>
                                            <div class="product-price">
                                                <span>$19.00</span> $15.00
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="col-md-3 prdct-grid">
                                            <div class="product-fade">
                                                <div class="product-fade-wrap">
                                                    <div id="product-image5" class="owl-carousel owl-theme">
                                                        <div class="item"><img src="images/p-5.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-1.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-2.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-3.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-4.jpg" alt=""
                                                                class="img-responsive"></div>
                                                    </div>
                                                    <div class="product-fade-ct">
                                                        <div class="product-fade-control">
                                                            <div class="to-left">
                                                                <a href=""><i class="fa fa-heart"></i></a>
                                                                <a href=""><i class="fa fa-retweet"></i></a>
                                                                <a href=""><i class="fa fa-search"></i></a>
                                                            </div>
                                                            <div class="to-right">
                                                                <div id="product-control5"
                                                                    class="owl-carousel owl-theme">
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <a href="" class="btn btn-to-cart"><span
                                                                    class="bag"></span><span>Add To cart</span>
                                                                <div class="clearfix"></div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-name">
                                                <a href="">Striped Men's Round Neck T-Shirt</a>
                                            </div>
                                            <div class="star-1"></div>
                                            <div class="product-price">
                                                <span>$19.00</span> $15.00
                                            </div>
                                        </div>
                                        <div class="col-md-3 prdct-grid">
                                            <div class="product-fade">
                                                <div class="product-fade-wrap">
                                                    <div id="product-image6" class="owl-carousel owl-theme">
                                                        <div class="item"><img src="images/p-6.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-7.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-8.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-5.jpg" alt=""
                                                                class="img-responsive"></div>
                                                    </div>
                                                    <div class="product-fade-ct">
                                                        <div class="product-fade-control">
                                                            <div class="to-left">
                                                                <a href=""><i class="fa fa-heart"></i></a>
                                                                <a href=""><i class="fa fa-retweet"></i></a>
                                                                <a href=""><i class="fa fa-search"></i></a>
                                                            </div>
                                                            <div class="to-right">
                                                                <div id="product-control6"
                                                                    class="owl-carousel owl-theme">
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <a href="" class="btn btn-to-cart"><span
                                                                    class="bag"></span><span>Add To cart</span>
                                                                <div class="clearfix"></div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-name">
                                                <a href="">Women's Round Neck T-Shirt</a>
                                            </div>
                                            <div class="star-1"></div>
                                            <div class="product-price">
                                                <span>$19.00</span> $15.00
                                            </div>
                                        </div>
                                        <div class="col-md-3 prdct-grid">
                                            <div class="product-fade">
                                                <div class="product-fade-wrap">
                                                    <div id="product-image7" class="owl-carousel owl-theme">
                                                        <div class="item"><img src="images/p-7.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-8.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-5.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-6.jpg" alt=""
                                                                class="img-responsive"></div>
                                                    </div>
                                                    <div class="product-fade-ct">
                                                        <div class="product-fade-control">
                                                            <div class="to-left">
                                                                <a href=""><i class="fa fa-heart"></i></a>
                                                                <a href=""><i class="fa fa-retweet"></i></a>
                                                                <a href=""><i class="fa fa-search"></i></a>
                                                            </div>
                                                            <div class="to-right">
                                                                <div id="product-control7"
                                                                    class="owl-carousel owl-theme">
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <a href="" class="btn btn-to-cart"><span
                                                                    class="bag"></span><span>Add To cart</span>
                                                                <div class="clearfix"></div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-name">
                                                <a href="">men's Jeans</a>
                                            </div>
                                            <div class="star-1"></div>
                                            <div class="product-price">
                                                <span>$19.00</span> $15.00
                                            </div>
                                        </div>
                                        <div class="col-md-3 prdct-grid">
                                            <div class="product-fade">
                                                <div class="product-fade-wrap">
                                                    <div id="product-image8" class="owl-carousel owl-theme">
                                                        <div class="item"><img src="images/p-8.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-5.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-6.jpg" alt=""
                                                                class="img-responsive"></div>
                                                        <div class="item"><img src="images/p-7.jpg" alt=""
                                                                class="img-responsive"></div>
                                                    </div>
                                                    <div class="product-fade-ct">
                                                        <div class="product-fade-control">
                                                            <div class="to-left">
                                                                <a href=""><i class="fa fa-heart"></i></a>
                                                                <a href=""><i class="fa fa-retweet"></i></a>
                                                                <a href=""><i class="fa fa-search"></i></a>
                                                            </div>
                                                            <div class="to-right">
                                                                <div id="product-control8"
                                                                    class="owl-carousel owl-theme">
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="bullets"></div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <a href="" class="btn btn-to-cart"><span
                                                                    class="bag"></span><span>Add To cart</span>
                                                                <div class="clearfix"></div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-name">
                                                <a href="">Heels</a>
                                            </div>
                                            <div class="star-1"></div>
                                            <div class="product-price">
                                                <span>$19.00</span> $15.00
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="2" aria-labelledby="cat-2">
                                    <div class="row clearfix">
                                        <div class="col-md-3 prdct-grid" style="padding: 1%;">
                                            <div class="product-fade">
                                                <div class="product-fade-wrap">
                                                    <div class="">
                                                        <div class="item"><img src="images/livre2.PNG" alt="Livre" class="img-responsive"></div>
                                                    </div>
                                                    <div class="product-fade-ct">
                                                        <div class="product-fade-control">
                                                            <div class="to-left">
                                                                <a href=""><i class="fa fa-heart"></i></a>
                                                                <a href=""><i class="fa fa-eye"></i></a>
                                                                <a href=""><i class="fa fa-download"></i></a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                                
                                                        </div>
    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-name">
                                                <a href="">Titre</a>
                                            </div>
                                            <p>Auteur</p>
                                            <div class="product-price">
                                                prix
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
