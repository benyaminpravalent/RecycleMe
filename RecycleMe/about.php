<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Rehomes - Real Estate HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="recycle.css">
    <style>
            @import url('https://fonts.googleapis.com/css?family=Encode+Sans+Expanded&display=swap');
        *{
            padding:0;
            margin:0;
            box-sizing: border-box;
            font-family: 'Encode Sans Expanded', sans-serif;
        }
        body{
            font-family: 'Encode Sans Expanded', sans-serif;
        }
        .wrappers{
            display:flex;
            justify-content: space-evenly;
            align-items: center;
            background-color:black;
            width:100%;
            height:75px;
        }
        a{
            margin-left:20px;
            text-decoration: none;
            color:white;
        }
        button{
            background:grey;
            padding:10px 25px;
            border-radius:3px;
            color:white;
            font-weight: 800;
            border:none;
        }
        #myVideo {
            min-width: 100%; 
            min-height: 40%;
          }
        .main{
            position: relative;
            width:100%;
            height:90%;
        }
        #myVideo{
            position:absolute;
        }
        .item{
            width:100%;
            height:100vh;
            display:flex;
            position:relative;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .recycleBtn{
            background:url("src/images.png") center center/cover;
            width:100px;
            height:100px;
            border-radius:50%;
            text-align: center;
            cursor: pointer;
            transition:500ms;
        }
        .recycleBtn:hover{
            transform: scale(1.1) rotate(360deg);
        }
        span{
            font-size:30px;
            margin: 0 5px;
        }
        </style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <header>
            <nav class="wrappers">
                <div class="wrapper-list" style="display:flex;">
                    <div>
                        <h1 style="color:white">RecyclingMe</h1>
                    </div>
                </div>
                <div class="wrapper-list">
                    <a href="home.php">Home</a>
                    <a href="about.php">Developer</a>
                    <a href="about.php">About</a>
                </div>
                <div class="wrapper-list">
                        <?php
                        if(isset($_SESSION['username'])){
                            $username = $_SESSION['username'];
                            echo "
                            <select onchange='selectItem(value)'>
                                <option>Welcome, $username</option>
                                <option value='myrecycle.php'>My Recycle</option>
                                <option value='login.php' href='login.php'>Logout</option>
                            </select>";
                        }
                        else{ 
                        echo "<button onclick=\"window.location.href='login.php'\">Login</button>";
                    }
                     ?>
                </div>
            </nav>
        </header>
    <!-- **** Breadcrumb Area Start **** -->
    <div class="breadcrumb-area bg-img bg-overlay-3 wow fadeInUp" data-wow-delay="200ms" style="background-image: url(img/bg-img/30.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                        <h2 class="page-title">About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- **** Breadcrumb Area End **** -->

    <!-- **** About Us Area Start **** -->
    <section class="about-us-area section-padding-100-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-us-title mb-40 wow fadeInUp" data-wow-delay="200ms">
                        <h2>Hello! Welcome to <span>RecyclingMe</span></h2>
                        <p>Memperkenalkan website yang dapat membantu anda mengurus barang-barang bekas ataupun sampah yang dapat didaur ulang hanya dengan memasukkan ke website lokasi anda, kemudian pemulung akan mengetahui lokasi anda, mengambilnya, dan mendaur ulangnya. Sehingga, website ini membuat interaksi yang baik antara pemilik sampah dengan pemulung yang membuat keduanya mendapat keuntungan. Di sisi lain, website ini dapat mencegah terjadinya bencana alam akibat dari membuang sampah sembarangan. </p>
                        <h1>About This Web</h1>
                    </div>
                </div>
               <!-- Single About Area -->
                <div class="col-12 col-md-6 col-lg-4">
               

                    <div class="single-about-content wow fadeInUp" data-wow-delay="200ms">
                        <!-- Thumb -->
                        <div class="single-about-thumb">
                            <img src="img/bg-img/31.jpg" alt="">
                        </div>
                        <h4>Personal </h4>
                        <p>Saya membuat website ini agar membantu para pemulung, memngurangi dampak terjadinya bencana alam, serta mendaur ulang barang/sampah yang masih berguna.</p>
                    </div>
                </div>

                <!-- Single About Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-about-content wow fadeInUp" data-wow-delay="200ms">
                        <!-- Thumb -->
                        <div class="single-about-thumb">
                            <img src="img/bg-img/32.jpg" alt="">
                        </div>
                        <h4>Developer</h4>
                        <p>Nama saya Benyamin. Saya adalah seorang mahasiswa yang membuat website RecyclingMe. Saya adalah seorang mahasiswa dari Universitas Sumatera Utara jurusan Ilmu komputer.</p>
                    </div>
                </div>

                <!-- Single About Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-about-content wow fadeInUp" data-wow-delay="200ms">
                        <!-- Thumb -->
                        <div class="single-about-thumb">
                            <img src="img/bg-img/33.jpg" alt="">
                        </div>
                        <h4>RecyclingMe's Vision</h4>
                        <p>Adapun visi website ini ke depannya adalah agar para fakir miskin terbantu dengan pekerjaan yang halal, mencegah terjadinya bencana alam serta mengurangi sedikit demi sedikit membuang sampah sembarangan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/rehomes.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>
<Script>
function selectItem(val){
    window.location.href=val;
}
</script>
</body>

</html>