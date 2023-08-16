
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile Saya - Pedia Shop | Top Up Game Tanpa Ribet</title>
  <meta name="description" content="Game Top Up Adalah Tempat Top Up Game Murah, Joki Mobile Legends dan Booster Media Yang Aman, Murah dan Terpercaya. ByHansMart Menyediakan Layanan Top Up Games, Joki Mobile Legends, Booster Social Media. Untuk Mempermudah Pembayaran Anda Disini Kami Juga Menyediakan Berbagai Macam Metode Pembayaran">
  <meta name="keywords" content="Top Up Game Murah, Joki Mobile Legend dan Layanan Booster Social Media, Instant 24 Jam, Mobile Legends, Diamond Mobile Legends, Free Fire, DM FF,  Mobile, PUBGM, Genshin Impact, CODM, Valorant, Wild Rift">
  <meta property="og:title" content="Profile Saya - Pedia Shop | Top Up Game Tanpa Ribet"/>
  <meta property="og:description" content="Game Top Up Adalah Tempat Top Up Game Murah, Joki Mobile Legends dan Booster Media Yang Aman, Murah dan Terpercaya. ByHansMart Menyediakan Layanan Top Up Games, Joki Mobile Legends, Booster Social Media. Untuk Mempermudah Pembayaran Anda Disini Kami Juga Menyediakan Berbagai Macam Metode Pembayaran" />
  <meta property="og:url" content="https://games.pediashop.my.id" />
  <meta property="og:image" content="https://i.ibb.co/f17rKNB/Tambahkan-subjudul.png" />
  <meta name="resource-type" content="document" />
  <meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
  <meta http-equiv="content-language" content="en-us" />
  <meta name="author" content="Arie Budi" />
  <meta name="contact" content="ariebudi.com" />
  <meta name="copyright" content="Copyright (c) ariebudi.com. All Rights Reserved." />
  <meta name="robots" content="index, nofollow">

  <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/gvCGHQM/Black1-Futuristic-Game-Logo.png">

  <link rel="stylesheet" href="game/css/summernote-bs4.css"/>
  <!-- simplebar CSS-->
  <link href="game/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="game/css/bootstrap.min.css" rel="stylesheet"/>
  <!--Data Tables -->
  <link href="game/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="game/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <!-- animate CSS-->
  <link href="game/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link rel="stylesheet" href="game/css/icons.css
  <!-- Horizontal menu CSS-->
  <link rel="stylesheet" href="game/css/horizontal-menu.css">
  <!-- Custom Style-->
  <link rel="stylesheet" href="game/css/app-style.css">
  <link rel="stylesheet" href="game/css/style-main3.css">
  <link rel="stylesheet" href="game/css/member.css">
  <!-- Custom Style--> 
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
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
                    <a class="nav-link" href="{{ url('home') }}"><i class="fa fa-home pr-2" style="width: 15px;"></i> Beranda</a>
                  </li>
                                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('wallet') }}"><i class="fa fa-coins" style="width: 15px;"></i> Saldo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('riwayat') }}"><i class="fas fa-history" style="width: 15px;"></i> Riwayat</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('profil') }}"><i class="fas fa-user" style="width: 15px;"></i> Profile</a>
                  </li>
                  <li class="nav-item">
                  <a href="{{ url('logout') }}" class="nav-link">
                    <span class="rounded-circle mr-1"> <i class="fa fa-sign-out-alt"></i> </span>
                    Logout
                  </a>
                </li>
                                </div>
            </div>
          </nav>
        </header>
        <div class="center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 card-animation">
                <div class="mb-3 card-bronze">
                <div class="card-body">
                        <h3 class="card-title">Bronze Membership</h3>
                        <p class="card-text">Unlock basic features</p>
                        <p class="card-text">Price: $50</p>
                        <a href="{{ route('upgrade.membership', ['level' => 'bronze']) }}" class="btn text-white btn-primary">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 card-animation">
                <div class="mb-3 card-silver">
                    <div class="card-body">
                        <h3 class="card-title">Silver Membership</h3>
                        <p class="card-text">Access more features</p>
                        <p class="card-text">Price: $100</p>
                        <a href="{{ route('upgrade.membership', ['level' => 'silver']) }}" class="btn text-white btn-primary">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 card-animation">
                <div class="mb-3 card-gold">
                    <div class="card-body">
                        <h3 class="card-title">Gold Membership</h3>
                        <p class="card-text">Unlock premium features</p>
                        <p class="card-text">Price: $150</p>
                        <form method="POST" action="{{ route('upgrade.membership') }}" id="upgradeMembershipFormGold">
                            @csrf
                            <input type="hidden" name="membership_level" value="gold">
                            <button type="submit" class="btn text-white btn-primary">Upgrade</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
  </div><!--End wrapper-->
 <!-- Start of LiveChat (www.livechatinc.com) code -->
    <script type="text/javascript">
      window.__lc = window.__lc || {};
      window.__lc.license = 15366438;
      ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)};
      var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){
      i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},
      get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");
      return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){
      var n=t.createElement("script");
      n.async=!0,n.type="text/javascript",
      n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};
      !n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
    </script>
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
  </script>    <script src="https://games.pediashop.my.id/assets/js/clipboard.min.js"></script>
    <script>

      var clipboard = new ClipboardJS('.clip');

      function copy_affiliate() {
        alert("Link Affiliate berhasil di Copy");
      }

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
