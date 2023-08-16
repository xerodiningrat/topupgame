
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KENSHINRYU</title>
  <meta name="description" content="Game Top Up Adalah Tempat Top Up Game Murah, Joki Mobile Legends dan Booster Media Yang Aman, Murah dan Terpercaya. ByHansMart Menyediakan Layanan Top Up Games, Joki Mobile Legends, Booster Social Media. Untuk Mempermudah Pembayaran Anda Disini Kami Juga Menyediakan Berbagai Macam Metode Pembayaran">
  <meta name="keywords" content="Top Up Game Murah, Joki Mobile Legend dan Layanan Booster Social Media, Instant 24 Jam, Mobile Legends, Diamond Mobile Legends, Free Fire, DM FF,  Mobile, PUBGM, Genshin Impact, CODM, Valorant, Wild Rift">
  <meta property="og:title" content="Pedia Shop | Top Up Game Tanpa Ribet"/>
  <meta property="og:description" content="Game Top Up Adalah Tempat Top Up Game Murah, Joki Mobile Legends dan Booster Media Yang Aman, Murah dan Terpercaya. ByHansMart Menyediakan Layanan Top Up Games, Joki Mobile Legends, Booster Social Media. Untuk Mempermudah Pembayaran Anda Disini Kami Juga Menyediakan Berbagai Macam Metode Pembayaran" />
  <meta property="og:url" content="{{ url('home') }}" />
  <meta property="og:image" content="https://i.ibb.co/gvCGHQM/Black1-Futuristic-Game-Logo.png" />
  <meta name="resource-type" content="document" />
  <meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
  <meta http-equiv="content-language" content="en-us" />
  <meta name="author" content="Arie Budi" />
  <meta name="contact" content="ariebudi.com" />
  <meta name="copyright" content="Copyright (c) ariebudi.com. All Rights Reserved." />
  <meta name="robots" content="index, nofollow">

  <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/gvCGHQM/Black1-Futuristic-Game-Logo.png">
  
 

 

  <!-- Custom Style-->
  <link rel="stylesheet" href="game/css/app-style.css">
  <link rel="stylesheet" href="game/css/style-main3.css">
  <!-- Custom Style--> 
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <style type="text/css">
    .carousel img {
        width: 90%;
        margin-right: 10px;
    }
    .carousel div.card {
        width: 150px;
        height: 200px;
        margin-right: 10px;
    }
    @media screen and ( max-width: 768px ) {
      /* half-width cells for larger devices */
      .carousel img { width: 90%; }
      .carousel div.card {
        width: 150px;
    }
    }
  </style>
</head>

<body>

  <!-- Start wrapper-->
  <div id="wrapper">

    <!--Start topbar header-->         
    <header>
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="https://games.pediashop.my.id">
            <img src="https://i.ibb.co/f17rKNB/Tambahkan-subjudul.png" style="width: auto; height: 35px; color: #fff!important;" alt="logo icon">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" style="font-size: 26px; color: #fff!important;"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('home') }}"><i class="fa fa-holly-berry pr-2" style="width: 15px;"></i> Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('cekpesanan') }}"><i class="fa fa-magnifying-glass-dollar" style="width: 15px;"></i> Cek Pesanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('harga') }}"><i class="fa fa-money-bill-wave" style="width: 15px;"></i> Harga</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('kalkulator') }}"><i class="fa fa-calculator" style="width: 15px;"></i> Kalkulator ML</a>
              </li>
              
              <!-- Check if the user is logged in -->
              @if(auth()->user())
              <li class="nav-item">
                <a class="nav-link" href="{{ url('profil') }}"><i class="fa fa-user" style="width: 15px;"></i> Profil</a>
              </li>
                <li class="nav-item">
                  <a href="{{ url('logout') }}" class="nav-link">
                    <span class="rounded-circle mr-1"> <i class="fa fa-sign-out-alt"></i> </span>
                    Logout
                  </a>
                </li>
              @else
                <li class="nav-item">
                  <a href="{{ url('register') }}" class="nav-link">
                    <span class="rounded-circle mr-1"> <i class="fa fa-registered"></i> </span>
                    Daftar Sekarang
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('login') }}" class="nav-link">
                    <span class="rounded-circle mr-1"> <i class="fa fa-florin-sign"></i> </span>
                    Masuk
                  </a>
                </li>
              @endif

            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!--End topbar header-->

    <div class="clearfix" style="padding-bottom: 4rem;"></div>
    <div class="pt-3">
        <div class="container">
            <div class="carousel"
              data-flickity='{ "wrapAround": true, "imagesLoaded": true, "percentPosition": false, "freeScroll": true, "autoPlay": true, "adaptiveHeight": true }'>
                                <img src="https://i.ibb.co/hsGM2Pf/Blue-Neon-Game-Facebook-Cover-1.png" style="border-radius: 10px !important;" alt="First slide">
                                <img src="https://i.ibb.co/DLkqnYk/Purple1-Futuristic-Game-Youtube-Thumbnail.png" style="border-radius: 10px !important;" alt="First slide">
                                <img src="https://i.ibb.co/bQdc8tZ/Banner-You-Tube-MMOBermain-Peran-Pemain-Game-Modern-Kuning-dan-Ungu.png" style="border-radius: 10px !important;" alt="First slide">
                            </div>
        </div>
    </div>

    <div class="container pb-4">
      <div class="row">
        <div class="col-12 d-none d-sm-block">
          <ul class="nav nav-tabs" id="myTab" role="tablist" style="width: 100%!important; border-bottom-left-radius: 10px !important; border-bottom-right-radius: 10px !important;">
                        <li class="nav-item" role="presentation" style="width: 14.285714285714%; border-bottom-left-radius: 10px !important; text-align: center;">
              <a class="nav-link active" id="game-tab" data-toggle="tab" href="#game" role="tab" aria-controls="game" aria-selected="true" style="font-size: 10px;">
                <p><i class="fa fa-dice fa-2x"></i></p>
                Game              </a>
            </li>
                        <li class="nav-item" role="presentation" style="width: 14.285714285714%; border-bottom-left-radius: 10px !important; text-align: center;">
              <a class="nav-link" id="pulsa-tab" data-toggle="tab" href="#pulsa" role="tab" aria-controls="pulsa" aria-selected="true" style="font-size: 10px;">
                <p><i class="fa fa-mobile-button fa-2x"></i></p>
                Pulsa              </a>
            </li>
                        <li class="nav-item" role="presentation" style="width: 14.285714285714%; border-bottom-left-radius: 10px !important; text-align: center;">
              <a class="nav-link" id="emoney-tab" data-toggle="tab" href="#emoney" role="tab" aria-controls="emoney" aria-selected="true" style="font-size: 10px;">
                <p><i class="fa fa-circle-dollar-to-slot fa-2x"></i></p>
                Emoney              </a>
            </li>
                        <li class="nav-item" role="presentation" style="width: 14.285714285714%; border-bottom-left-radius: 10px !important; text-align: center;">
              <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="true" style="font-size: 10px;">
                <p><i class="fa fa-ticket fa-2x"></i></p>
                Voucher             </a>
            </li>
                        <li class="nav-item" role="presentation" style="width: 14.285714285714%; border-bottom-left-radius: 10px !important; text-align: center;">
              <a class="nav-link" id="premium-tab" data-toggle="tab" href="#premium" role="tab" aria-controls="premium" aria-selected="true" style="font-size: 10px;">
                <p><i class="fa fa-shuffle fa-2x"></i></p>
                Convert Pulsa             </a>
            </li>
                        <li class="nav-item" role="presentation" style="width: 14.285714285714%; border-bottom-left-radius: 10px !important; text-align: center;">
              <a class="nav-link" id="jasajoki-tab" data-toggle="tab" href="#jasajoki" role="tab" aria-controls="jasajoki" aria-selected="true" style="font-size: 10px;">
                <p><i class="fa fa-award fa-2x"></i></p>
                Jasa Joki              </a>
            </li>
                        <li class="nav-item" role="presentation" style="width: 14.285714285714%; border-bottom-left-radius: 10px !important; text-align: center;">
              <a class="nav-link" id="pascabayar-tab" data-toggle="tab" href="#pascabayar" role="tab" aria-controls="pascabayar" aria-selected="true" style="font-size: 10px;">
                <p><i class="fa fa-bold fa-2x"></i></p>
                Pascabayar              </a>
            </li>
                      </ul>
        </div>
        <div class="col-12 d-block d-sm-none" style="width: 100%; height: 80px; overflow: hidden;">
          <div style="width: 100%; height: 100px; overflow: hidden; overflow-x: scroll">
            <ul class="nav nav-tabs" id="myTab" role="tablist" style="width: 525px; height: 100px;  border-bottom-left-radius: 10px !important; border-bottom-right-radius: 10px !important;">
                            <li class="nav-item" role="presentation" style="border-bottom-left-radius: 10px !important;">
                <a class="nav-link active" id="game-tab" data-toggle="tab" href="#game" role="tab" aria-controls="game" aria-selected="true" style="font-size: 10px;">
                  <p><i class="fa fa-dice fa-2x"></i></p>
                  Game                </a>
              </li>
                            <li class="nav-item" role="presentation" style="border-bottom-left-radius: 10px !important;">
                <a class="nav-link" id="pulsa-tab" data-toggle="tab" href="#pulsa" role="tab" aria-controls="pulsa" aria-selected="true" style="font-size: 10px;">
                  <p><i class="fa fa-mobile-button fa-2x"></i></p>
                  Pulsa                </a>
              </li>
                            <li class="nav-item" role="presentation" style="border-bottom-left-radius: 10px !important;">
                <a class="nav-link" id="emoney-tab" data-toggle="tab" href="#emoney" role="tab" aria-controls="emoney" aria-selected="true" style="font-size: 10px;">
                <p><i class="fa fa-circle-dollar-to-slot fa-2x"></i></p>
                  Emoney                </a>
              </li>
                            <li class="nav-item" role="presentation" style="border-bottom-left-radius: 10px !important;">
                <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="true" style="font-size: 10px;">
                <p><i class="fa fa-ticket fa-2x"></i></p>
                  Voucher                </a>
              </li>
                            <li class="nav-item" role="presentation" style="border-bottom-left-radius: 10px !important;">
                <a class="nav-link" id="premium-tab" data-toggle="tab" href="#premium" role="tab" aria-controls="premium" aria-selected="true" style="font-size: 10px;">
                <p><i class="fa fa-shuffle fa-2x"></i></p>
                  Convert Pulsa                </a>
              </li>
                            <li class="nav-item" role="presentation" style="border-bottom-left-radius: 10px !important;">
                <a class="nav-link" id="jasajoki-tab" data-toggle="tab" href="#jasajoki" role="tab" aria-controls="jasajoki" aria-selected="true" style="font-size: 10px;">
                  <p><i class="fa fa-award fa-2x"></i></p>
                  Jasa Joki                </a>
              </li>
                            <li class="nav-item" role="presentation" style="border-bottom-left-radius: 10px !important;">
                <a class="nav-link" id="pascabayar-tab" data-toggle="tab" href="#pascabayar" role="tab" aria-controls="pascabayar" aria-selected="true" style="font-size: 10px;">
                  <p><i class="fa fa-bold fa-2x"></i></p>
                  Pascabayar                </a>
              </li>
                          </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="pb-4">
      <div class="container">
        <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active p-3" id="game" role="tabpanel" aria-labelledby="game-tab">
                        <h5>Game</h5>
            <span class="strip-primary"></span>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="row game">
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="{{ url('ml') }}" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://i.ibb.co/3dhRdrZ/m.webp" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">MOBILE LEGEND</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="{{ url('ml') }}" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/game/au2mobile/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://i.ibb.co/tX9kvDn/F.webp" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">FREE FIRE</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/game/betheking/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://i.ibb.co/DR79S82/P.webp" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">PUBG MOBILE</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/game/betheking/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/game/callofdutymobile/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://i.ibb.co/1bS7FZy/c.webp" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">Call of Duty MOBILE</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/game/callofdutymobile/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/game/chimeraland/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://i.ibb.co/JkWKXSH/a.webp" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">ARENA OF VALOR</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/game/chimeraland/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/game/dragonraja/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://i.ibb.co/wKRzdBN/undawn-577d-original.webp" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">UNDAWN</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/game/dragonraja/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/game/freefire/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://i.ibb.co/tbrMWVM/t.webp" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">TOWER OF FANTASY</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/game/freefire/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/game/freefiremax/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/free_fire.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">Free Fire Max</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/game/freefiremax/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/game/genshinimpact/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/genshin_impact.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">Genshin Impact</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/game/genshinimpact/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>

                          </div>
          </div>
                    <div class="tab-pane fade p-3" id="pulsa" role="tabpanel" aria-labelledby="pulsa-tab">
                        <h5>Pulsa</h5>
            <span class="strip-primary"></span>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="row game">
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pulsa/axis/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/axis.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">AXIS</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pulsa/axis/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pulsa/byu/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/byu.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">BY.U</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pulsa/byu/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pulsa/indosat/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/indosat.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">INDOSAT</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pulsa/indosat/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pulsa/smartfren/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/smart.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">SMARTFREN</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pulsa/smartfren/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pulsa/telkomsel/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/telkomsel.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">TELKOMSEL</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pulsa/telkomsel/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pulsa/tri/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/tri.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">TRI</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pulsa/tri/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pulsa/xl/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/xl.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">XL</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pulsa/xl/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                          </div>
          </div>
                    <div class="tab-pane fade p-3" id="emoney" role="tabpanel" aria-labelledby="emoney-tab">
                        <h5>Emoney</h5>
            <span class="strip-primary"></span>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="row game">
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/emoney/bribrizzi/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/bri_brizzi.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">BRI BRIZZI</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/emoney/bribrizzi/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/emoney/dana/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/dana.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">DANA</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/emoney/dana/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/emoney/doku/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/doku.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">DOKU</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/emoney/doku/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/emoney/gopay/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/go_pay.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">GO PAY</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/emoney/gopay/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/emoney/grab/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/grab.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">GRAB</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/emoney/grab/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/emoney/linkaja/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/linkaja.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">LINKAJA</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/emoney/linkaja/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/emoney/mandirietoll/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/mandiri_etoll.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">MANDIRI E-TOLL</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/emoney/mandirietoll/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/emoney/maxim/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/maxim.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">MAXIM</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/emoney/maxim/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/emoney/ovo/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/ovo.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">OVO</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/emoney/ovo/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/emoney/pln/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/lightning.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">PLN</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/emoney/pln/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/emoney/shopeepay/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/shopee_pay.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">SHOPEE PAY</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/emoney/shopeepay/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/emoney/tapcashbni/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/tapcash_bni.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">TAPCASH BNI</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/emoney/tapcashbni/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/emoney/tixid/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/tixid.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">TIX ID</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/emoney/tixid/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                          </div>
          </div>
                    <div class="tab-pane fade p-3" id="social" role="tabpanel" aria-labelledby="social-tab">
                        <h5>Voucher</h5>
            <span class="strip-primary"></span>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="row game">
                          </div>
          </div>
                    <div class="tab-pane fade p-3" id="premium" role="tabpanel" aria-labelledby="premium-tab">
                        <h5>Convert Pulsa</h5>
            <span class="strip-primary"></span>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="row game">
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                  <a href="https://games.pediashop.my.id/pulsa/axis/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/axis.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">AXIS</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pulsa/axis/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">CONVERT</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pulsa/indosat/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/indosat.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">INDOSAT</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pulsa/indosat/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">CONVERT</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pulsa/telkomsel/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/telkomsel.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">TELKOMSEL</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pulsa/telkomsel/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">CONVERT</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pulsa/tri/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/tri.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">TRI</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pulsa/tri/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">CONVERT</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pulsa/xl/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/xl.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">XL</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pulsa/xl/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">CONVERT</a>
                  </div>
                </div>
              </div>
                          </div>
          </div>
                    <div class="tab-pane fade p-3" id="jasajoki" role="tabpanel" aria-labelledby="jasajoki-tab">
                        <h5>Jasa Joki</h5>
            <span class="strip-primary"></span>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="row game">
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/jasa-joki/jokiclassic/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/category_master_20220624201538.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">Joki Classic</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/jasa-joki/jokiclassic/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/jasa-joki/jokirank/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/category_master_20220624201600.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">Joki Rank</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/jasa-joki/jokirank/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/jasa-joki/paketjoki/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/category_master_20220624201616.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">Paket Joki</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/jasa-joki/paketjoki/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                          </div>
          </div>
                    <div class="tab-pane fade p-3" id="pascabayar" role="tabpanel" aria-labelledby="pascabayar-tab">
                        <h5>Pascabayar</h5>
            <span class="strip-primary"></span>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="row game">
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pascabayar/bpjskesehatan/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/bpjs_kesehatan.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">BPJS KESEHATAN</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pascabayar/bpjskesehatan/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pascabayar/gasnegara/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/gas_negara.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">GAS NEGARA</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pascabayar/gasnegara/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pascabayar/hppascabayar/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/hp_pascabayar.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">HP PASCABAYAR</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pascabayar/hppascabayar/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pascabayar/internetpascabayar/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/internet_pascabayar.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">INTERNET PASCABAYAR</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pascabayar/internetpascabayar/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pascabayar/multifinance/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/multifinance.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">MULTIFINANCE</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pascabayar/multifinance/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                            <div class="col-sm-3 col-lg-2 col-6 mb-5 text-center p-1" style="">
                <div class="card p-1 mb-0 zoom" style="height: 175px;">
                  <div class="card-body p-1">
                    <a href="https://games.pediashop.my.id/pascabayar/plnpascabayar/" class="product_list">
                      <div class="mb-2" style="display: block; margin: 0 auto; width: 80px; height: 80px; border-radius: 10px; margin-top: -45px; margin-bottom: 15px; overflow: hidden;">
                        <img src="https://games.pediashop.my.id/upload/pln_pascabayar.png" class="img-fluid mb-2" style="border-radius: 10px; display: block;">
                      </div>
                      <div style="min-height: 40px; color: var(--font-color);">PLN PASCABAYAR</div>
                      <div style="font-size: 10px; color: var(--font-color);"></div>
                    </a>
                    <a href="https://games.pediashop.my.id/pascabayar/plnpascabayar/" class="btn btn-warning btn-sm text-white btn-block mt-2" style="border-radius: 25px;">Beli</a>
                  </div>
                </div>
              </div>
                          </div>
          </div>
                  </div>
      </div>
    </div>    
    
    
    <div class="pb-4">
      <div class="container">
        <div class="carousel" data-flickity='{ "wrapAround": true, "groupCells": 3, "prevNextButtons": false, "imagesLoaded": true, "percentPosition": true, "freeScroll": false, "autoPlay": true, "adaptiveHeight": true }'>
                  </div> 
      </div>
    </div>
    
    <div class="pb-4">
      <div class="container">
        <h5>
          News & Promo
          <span class="float-right" style="font-size: 12px;"><a href="https://games.pediashop.my.id/blog/">Lihat Semua</a></span>
        </h5>
        <span class="strip-primary"></span>
        <p>&nbsp;</p>
        <div class="row">
                </div>
      </div>
    </div>
    
    <div class="d-block d-sm-none" style="height: 100px;"></div>
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    <div class="modal fade" id="exampleModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-dark animated bounceIn" style="background: #1e2124;">
          <div class="modal-body text-left" style="color: #fff!important;">
            
                  <img src="https://i.ibb.co/6WsshC7/National-Video-Games-Day.png" class="img-fluid mb-3" style="display: block; margin: 0 auto;">
                <div style="margin: 15px!important;"></div>          </div>
          <div class="modal-footer">
            <div class="row" style="width: 100%;">
              <div class="col-8 text-left">
                <div class="form-group form-check mt-2">
                    <input type="checkbox" name="popup" class="form-check-input" value="1" id="exampleCheck1">
                    <label class="form-check-label text-white mt-1" for="exampleCheck1">Jangan Tayangkan Lagi</label>
                    <input type="hidden" name="ip" id="ipaddress" value="36.68.223.28">
                </div>
              </div>
              <div class="col-4 text-right">
                  <button type="button" class="btn text-white btn-warning" data-dismiss="modal" aria-label="Close">
                      Tutup
                  </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Start footer-->
       
    <footer id="aboutus" class="bg-footer">
      <div data-v-10b0ebbe="" class="product-tile__clip-path"></div>
      <div class="pt-5 pb-5" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
          <div class="row" bis_skin_checked="1">
            <div class="col-lg-8 col-sm-8" bis_skin_checked="1">
              <img src="https://i.ibb.co/f17rKNB/Tambahkan-subjudul.png" style="width: auto; height: 50px; margin-bottom: 15px;" alt="logo icon">
              <p>Menyediakan Top-Up Game Favorit Kamu Agar Main Game Semakin Seru. Pengiriman Cepat dan berbagai macam metode Pembayaran. Layanan 24Jam, Proses hitungan detik.</p>
              <p><i class="fas fa-envelope pr-3"></i>: admin@kenshinryu.my.id</p>
              <p><i class="fab fa-whatsapp pr-3"></i>: 085771756364</p>
              <p><i class="fas fa-headphones pr-3"></i>: 24 Jam </p>
              <hr>
              <ul class="nav mb-3">
                    
              <li class="nav-item">
    <a class="nav-link" href="https://games.pediashop.my.id/cektrx/" style="color: var(--font-color);">
        <i class="fab fa-tiktok pr-2" style="width: 20px;"></i> kenshinryu
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="https://games.pediashop.my.id/contact/" style="color: var(--font-color);">
        <i class="fab fa-instagram pr-2" style="width: 20px;"></i> kenshinryu_
    </a>
</li>

              </ul>
            </div>
            <div class="col-lg-4 col-sm-4 col-12" bis_skin_checked="1">
              <h5 class="pb-2">Produk Favorit</h5>
              <div class="row">
                                <div class="col-4 mb-2">
                  <a href="https://games.pediashop.my.id/game/toweroffantasy/">
                    <img src="https://i.ibb.co/3M3wqBH/ML3.webp" class="img-fluid" style="border-radius: 10px; display: block;">
                  </a>
                </div>
                                <div class="col-4 mb-2">
                  <a href="https://games.pediashop.my.id/game/honkaistarrail/">
                    <img src="https://i.ibb.co/wKRzdBN/undawn-577d-original.webp" class="img-fluid" style="border-radius: 10px; display: block;">
                  </a>
                </div>
                                <div class="col-4 mb-2">
                  <a href="https://games.pediashop.my.id/game/callofdutymobile/">
                    <img src="https://games.pediashop.my.id/upload/call_of_duty_mobile.png" class="img-fluid" style="border-radius: 10px; display: block;">
                  </a>
                </div>
                                <div class="col-4 mb-2">
                  <a href="https://games.pediashop.my.id/game/mobilelegendsgift/">
                    <img src="https://i.ibb.co/DR79S82/P.webp" class="img-fluid" style="border-radius: 10px; display: block;">
                  </a>
                </div>
                                <div class="col-4 mb-2">
                  <a href="https://games.pediashop.my.id/game/omegalegends/">
                    <img src="https://i.ibb.co/tX9kvDn/F.webp" class="img-fluid" style="border-radius: 10px; display: block;">
                  </a>
                </div>
                                <div class="col-4 mb-2">
                  <a href="https://games.pediashop.my.id/game/pubgmobile/">
                    <img src="https://i.ibb.co/JkWKXSH/a.webp" class="img-fluid" style="border-radius: 10px; display: block;">
                  </a>
                </div>
                              </div>
              <h5 class="mt-2 pb-2">Pembayaran</h5>
              <marquee>
                <img src="https://games.pediashop.my.id/upload/bca_footer.png" width="80px" class="ml-3 bg-white p-1">
                <img src="https://games.pediashop.my.id/upload/linkaja_footer.png" width="80px" class="ml-3 bg-white p-1">
                <img src="https://games.pediashop.my.id/upload/shopay_footer.png" width="80px" class="ml-3 bg-white p-1">
                <img src="https://games.pediashop.my.id/upload/ovo_footer.png" width="80px" class="ml-3 bg-white p-1">
                <img src="https://games.pediashop.my.id/upload/dana_footer.png" width="80px" class="ml-3 bg-white p-1">
                <img src="https://games.pediashop.my.id/upload/qris_footer.png" width="80px" class="ml-3 bg-white p-1">
              </marquee>
            </div>
          </div>

          <div class="pt-5 pb-2" bis_skin_checked="1">
            <div class="row">
              <div class="col-sm-4 pt-2">
              
              </div>
              <div class="col-sm-4">
                <ul class="nav float-right">
                    
                                    <li class="nav-item">
                    <a class="nav-link" href="https://games.pediashop.my.id/page/?p=kebijakan-privasi">© Copyright 2023. All Rights Reserved</a>
                  </li>
                                  </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--End footer-->
  
  </div><!--End wrapper-->
  <!-- Bootstrap core JavaScript-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
  <script src="game/js/jquery.min.js"></script>
  <script src="game/js/popper.min.js"></script>
  <script src="game/js/bootstrap.min.js"></script>

  <!-- simplebar js -->
  <script src="game/js/simplebar.js"></script>
  <!-- horizontal-menu js -->
  <script src="game/js/horizontal-menu.js"></script>

  <!-- Custom scripts -->
  <script src="game/js/summernote-bs4.min.js"></script>
  <!--Select Plugins Js-->
  <script src="game/js/select2.min.js"></script>
  <!--Data Tables js-->
  <script src="game/js/jquery.dataTables.min.js"></script>
  <script src="game/js/dataTables.bootstrap4.min.js"></script>
  <script src="game/js/dataTables.buttons.min.js"></script>
  <script src="game/js/buttons.bootstrap4.min.js"></script>
  <script src="game/js/jszip.min.js"></script>
  <script src="game/js/pdfmake.min.js"></script>
  <script src="game/js/vfs_fonts.js"></script>
  <script src="game/js/buttons.html5.min.js"></script>
  <script src="game/js/buttons.print.min.js"></script>
  <script src="game/js/buttons.colVis.min.js"></script>
  <script>
    $(document).ready(function() {
      //Default data table
      $('.default-datatable').DataTable();
      $('.single-select').select2();
    });
    function openNav() {
      document.getElementById("mySidenav").style.width = "300px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    function myFunctiona() {
      var x = document.getElementById("showcallcenter");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script><script>
    const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

    function switchTheme(e) {
        if (e.target.checked) {
            document.documentElement.setAttribute('data-theme', 'dark');
        }
        else {
            document.documentElement.setAttribute('data-theme', 'light');
        }    
    }

    toggleSwitch.addEventListener('change', switchTheme, false);

    function switchTheme(e) {
        if (e.target.checked) {
            document.documentElement.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark'); //add this
        }
        else {
            document.documentElement.setAttribute('data-theme', 'light');
            localStorage.setItem('theme', 'light'); //add this
        }    
    }

    const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

    if (currentTheme) {
        document.documentElement.setAttribute('data-theme', currentTheme);

        if (currentTheme === 'dark') {
            toggleSwitch.checked = true;
        }
    }
    
    /* Animasi untuk teks bergerak */


    $(document).ready(function() {
        function showNotif(message) {
            $('#notif-message').text(message);
            $('#getNotif').fadeIn(500).delay(10000).fadeOut(500);
        }
        $.ajax({
            url: 'https://games.pediashop.my.id/getNotif.php',dataType: 'json',success: function(data) {
                if (data.message) {
                    showNotif(data.message);
                }
            },
            error: function(
                jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            }
        );
        setInterval(function() {
            $.ajax({
                url: 'https://games.pediashop.my.id/getNotif.php',dataType: 'json',success: function(data) {
                    if (data.message) {showNotif(data.message);}},error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            }, 12000);
        });
  </script>    <script>
      $(window).on('load', function() {
        $('#exampleModal').modal({show: true, backdrop: 'static', keyboard: false});
      });
      $(document).ready(function(){
        $("#exampleCheck1").change(function() {
            if(this.checked == true){
              $.ajax({
                url:"https://games.pediashop.my.id/popup.php",
                method:"POST",
                data:{id:1,ipaddress:$('#ipaddress').val()},
                success:function(data){
                    
                }  
              })
            }
        });
      });
      /* Animasi untuk teks bergerak */

    </script>
</body>
</html>

