
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cek Status Pesanan - Pedia Shop | Top Up Game Tanpa Ribet</title>
  <meta name="description" content="Game Top Up Adalah Tempat Top Up Game Murah, Joki Mobile Legends dan Booster Media Yang Aman, Murah dan Terpercaya. ByHansMart Menyediakan Layanan Top Up Games, Joki Mobile Legends, Booster Social Media. Untuk Mempermudah Pembayaran Anda Disini Kami Juga Menyediakan Berbagai Macam Metode Pembayaran">
  <meta name="keywords" content="Top Up Game Murah, Joki Mobile Legend dan Layanan Booster Social Media, Instant 24 Jam, Mobile Legends, Diamond Mobile Legends, Free Fire, DM FF,  Mobile, PUBGM, Genshin Impact, CODM, Valorant, Wild Rift">
  <meta property="og:title" content="Cek Status Pesanan - Pedia Shop | Top Up Game Tanpa Ribet"/>
  <meta property="og:description" content="Game Top Up Adalah Tempat Top Up Game Murah, Joki Mobile Legends dan Booster Media Yang Aman, Murah dan Terpercaya. ByHansMart Menyediakan Layanan Top Up Games, Joki Mobile Legends, Booster Social Media. Untuk Mempermudah Pembayaran Anda Disini Kami Juga Menyediakan Berbagai Macam Metode Pembayaran" />
  <meta property="og:url" content="https://games.pediashop.my.id" />
  <meta property="og:image" content="https://games.pediashop.my.id/upload/logo_master_20232707193347.png" />
  <meta name="resource-type" content="document" />
  <meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
  <meta http-equiv="content-language" content="en-us" />
  <meta name="author" content="Arie Budi" />
  <meta name="contact" content="ariebudi.com" />
  <meta name="copyright" content="Copyright (c) ariebudi.com. All Rights Reserved." />
  <meta name="robots" content="index, nofollow">

  <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/gvCGHQM/Black1-Futuristic-Game-Logo.png">

  <link rel="stylesheet" href="https://games.pediashop.my.id/assets/plugins/summernote/dist/summernote-bs4.css"/>
  <!--Select Plugins-->
  <link href="https://games.pediashop.my.id/assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="https://games.pediashop.my.id/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="https://games.pediashop.my.id/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!--Data Tables -->
  <link href="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <!-- animate CSS-->
  <link href="https://games.pediashop.my.id/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="https://games.pediashop.my.id/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Horizontal menu CSS-->
  <link href="https://games.pediashop.my.id/assets/css/horizontal-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="https://games.pediashop.my.id/assets/css/app-style.css" rel="stylesheet"/>
  <link href="https://games.pediashop.my.id/assets/css/style-main3.css" rel="stylesheet"/>
 
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
                    <a class="nav-link" href="https://games.pediashop.my.id"><i class="fa fa-home pr-2" style="width: 15px;"></i> Beranda</a>
                  </li>
                                    <li class="nav-item">
                    <a class="nav-link" href="https://games.pediashop.my.id/cektrx/"><i class="fa fa-search" style="width: 15px;"></i> Cek Pesanan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://games.pediashop.my.id/harga/"><i class="fa fa-tag" style="width: 15px;"></i> Harga</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://games.pediashop.my.id/calc/"><i class="fa fa-calculator" style="width: 15px;"></i> Kalkulator ML</a>
                  </li>
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
                  <a href="https://games.pediashop.my.id/login/" class="nav-link">
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
            </div>
          </nav>
        </header>
    <!--End topbar header-->

    <div class="clearfix pt-5"></div>
    <div class="pt-5 pb-5">
      <div class="container">
       <div class="row">
          <div class="col-lg-12">
            <div class="pt-3 pb-4">
              <h5>Cek Status Pesanan</h5>
              <span class="strip-primary"></span>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="pb-3">
              <div class="section">
                <div class="card-body">
                  <form role="form" class="mb-3" action="" method="GET">
                    <p>No. Transaksi</p>
                    <div class="form-group mb-3">
                      <input type="text" name="trxNum" class="form-control" value="" pattern="[a-zA-Z0-9]+" title="No. Transaksi Tidak Valid" required>
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary" id="button-addon2">Cek Pesanan</button>
                  </form>
                           
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="d-block d-sm-none" style="height: 100px;"></div>
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  
  
  
  </div><!--End wrapper-->
 
    <noscript>
    <a href="https://www.livechatinc.com/chat-with/15366438/" rel="nofollow">Chat with us</a>,
    powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
    </noscript>
  <!-- End of LiveChat code -->
  <!-- Bootstrap core JavaScript-->
  <script src="https://games.pediashop.my.id/assets/js/jquery.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/js/popper.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/js/bootstrap.min.js"></script>
  
  <!-- simplebar js -->
  <script src="https://games.pediashop.my.id/assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- horizontal-menu js -->
  <script src="https://games.pediashop.my.id/assets/js/horizontal-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="https://games.pediashop.my.id/assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
  <!--Select Plugins Js-->
  <script src="https://games.pediashop.my.id/assets/plugins/select2/js/select2.min.js"></script>
  <!--Data Tables js-->
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
  <script>
 
  </script></body>
</html>
