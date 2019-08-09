<?php
    error_reporting(E_ALL);
    
    include('admin/class/Conexao.php');
    include('admin/class/Portal.php');

    $destaques = Portal::destaques($conexao);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portal</title>
    <link rel="icon" href="img/core-img/favicon.jpg">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header-area">
        <div class="videomag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">

                    <nav class="classy-navbar justify-content-between" id="videomagNav">

                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <div class="classy-menu">

                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.php">O Pasquim</a></li>
                                    <li><a href="video-post.html">Notícia</a></li>
                                    <li><a href="video-post.html">Política</a></li>
                                    <li><a href="#">Economia</a>
                                    </li>
                                    <li><a href="catagory.html">Esportes</a></li>
                                    <li><a href="catagory.html">Crônicas</a>
                                      <ul class="dropdown">
                                            <li><a href="index.html">Música</a></li>
                                            <li><a href="catagory.html">Cinema</a></li>
                                            <li><a href="video-post.html">Teatro</a></li>
                                            <li><a href="single-post.html">Literatura</a></li>
                                            <li><a href="contact.html">Tecnologia</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="top-search-area">
                            <form action="#" method="post">
                                <input type="search" name="top-search" id="topSearch" placeholder="Pesquisar">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="hero-area d-flex flex-wrap">
        <div class="hero-single-section">

            <div class="single-welcome-post bg-img item1 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(<?php echo $destaques[0]['imagens']; ?>);">

                <div class="welcome-post-content">

                    <div class="single-blog-post white">
                        <div class="blog-content">
                            <a href="#" class="post-tag"><?php echo $destaques[0]['categoria']; ?></a>
                            <a href="#" class="post-title"><?php echo $destaques[0]['titulo']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-single-section">

            <div class="single-welcome-post bg-img item2 wow fadeInUp" data-wow-delay="400ms" style="background-image: url(img/bg-img/2.jpg);">
                <div class="welcome-post-content">
                    <div class="single-blog-post white">
                        <div class="blog-content">
                            <a href="#" class="post-title">Destaque 2</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-second-section d-flex flex-wrap">
                <div class="single-welcome-post bg-img item3 wow fadeInUp" data-wow-delay="500ms" style="background-image: url(img/bg-img/3.jpg);">
                    <div class="welcome-post-content">

                        <div class="single-blog-post style2 white">
                            <div class="blog-content">
                                <a href="#" class="post-title">Destaque 3</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-welcome-post bg-img item4 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(img/bg-img/4.jpg);">
                    <div class="welcome-post-content">
                        <div class="single-blog-post style2 white">
                            <div class="blog-content">
                                <a href="#" class="post-title">Destaque 4</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-mag-tabs-area mt-50 wow fadeInUp" data-wow-delay="200ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="latest-tab" data-toggle="tab" href="#latest" role="tab" aria-controls="latest" aria-selected="true">Videos 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-viewed-tab" data-toggle="tab" href="#top-viewed" role="tab" aria-controls="top-viewed" aria-selected="false">Videos 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="videos-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="videos" aria-selected="false">Videos 3</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                            <div class="latest-videos-slide owl-carousel">

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/4.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 1</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/4.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 2</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/4.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 3</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/4.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 4</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/4.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 5</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/4.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 6</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-viewed" role="tabpanel" aria-labelledby="top-viewed-tab">
                            <div class="top-viewed-slide owl-carousel">

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 1</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 2</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 3</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 4</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 5</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 6</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
                            <div class="videos-slide owl-carousel">

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 1</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 2</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 3</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 4</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 5</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>

                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Jornalista 6</a>
                                        <a href="#" class="post-title">Titulo</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="travel-videos-area">
        <div class="container">
            <div class="travel-videos-content">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>Crônicas em vídeo</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6">

                        <div class="single-welcome-post style-2 bg-img mb-30 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/bg-img/1.jpg);">

                            <a href="#" class="video-play-btn"><i class="fa fa-play"></i></a>

                            <div class="welcome-post-content">

                                <div class="single-blog-post white">
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Cronista 1</a>
                                        <a href="#" class="post-title">Título da crônica</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="400ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/8.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Cronista 2</a>
                                        <a href="#" class="post-title">Título da crônica</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="500ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/9.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Cronista 3</a>
                                        <a href="#" class="post-title">Título da crônica</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="600ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/10.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Cronista 4</a>
                                        <a href="#" class="post-title">Título da crônica</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="700ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/11.jpg" alt="">

                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Cronista 5</a>
                                        <a href="#" class="post-title">Título da crônica</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="small-videos-area">
        <div class="container">
            <div class="small-videos-content">
                <div class="row">

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>Política</h2>
                        </div>

                        <div class="single-blog-post style2 mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb mb-5">
                                <img src="img/bg-img/12.jpg" alt="">

                                <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Jornalista 1</a>
                                <a href="#" class="post-title">Titulo da notícia</a>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/14.jpg" alt="">

                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Jornalista 2</a>
                                <a href="#" class="post-title">Titulo da notícia</a>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="500ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/15.jpg" alt="">

                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Jornalista 3</a>
                                <a href="#" class="post-title">Titulo da notícia</a>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="600ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/16.jpg" alt="">

                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Jornalista 4</a>
                                <a href="#" class="post-title">Titulo da notícia</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>Economia</h2>
                        </div>

                        <div class="single-blog-post style2 mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb mb-5">
                                <img src="img/bg-img/13.jpg" alt="">

                                <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Jornalista 1</a>
                                <a href="#" class="post-title">Titulo da notícia</a>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/17.jpg" alt="">

                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Jornalista 2</a>
                                <a href="#" class="post-title">Titulo da notícia</a>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="500ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/18.jpg" alt="">

                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Jornalista 3</a>
                                <a href="#" class="post-title">Titulo da notícia</a>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="600ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/19.jpg" alt="">

                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                               <a href="#" class="post-tag">Jornalista 4</a>
                                <a href="#" class="post-title">Titulo da notícia</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>Esportes</h2>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/20.jpg" alt="">

                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Jornalista 1</a>
                                <a href="#" class="post-title">Titulo da notícia</a>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/21.jpg" alt="">

                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Jornalista 2</a>
                                <a href="#" class="post-title">Titulo da notícia</a>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/22.jpg" alt="">

                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Jornalista 3</a>
                                <a href="#" class="post-title">Titulo da notícia</a>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/23.jpg" alt="">

                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Jornalista 4</a>
                                <a href="#" class="post-title">Titulo da notícia</a>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/24.jpg" alt="">

                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Jornalista 5</a>
                                <a href="#" class="post-title">Titulo da notícia</a>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/25.jpg" alt="">

                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Jornalista 6</a>
                                <a href="#" class="post-title">Titulo da notícia</a>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-area section-padding-100">
        <div class="container-fluid">
            <div class="row justify-content-between">

                <div class="col-12 col-lg-4">
                    <div class="footer-content">

                        <a href="index.php" class="foo-logo"><img src="img/core-img/favicon.jpg" alt=""></a>
                        <p>Somos um portal sério e independente, temos compromisso de entregar
                        um conteúdo primoroso ao leitor, contamos com um excelente quadro de jornalistas e especialistas nas areas que cobrimos.</p>
                        <div class="footer-social-info d-flex">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-7 col-xl-6">
                    <div class="footer-content d-flex flex-wrap">
                        <div class="video-catagory">
                            <h5 class="widget-title">Conteúdos</h5>
                            <ul>
                                <li><a href="#"><span>Política</span> <span>20</span></a></li>
                                <li><a href="#"><span>Economia</span> <span>10</span></a></li>
                                <li><a href="#"><span>Esportes</span> <span>71</span></a></li>
                                <li><a href="#"><span>Crõnicas</span> <span>15</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <p class="copywrite-text">
                        <a href="#">
                            Feito para um trabalho de faculdade. | 
                            &nbsp<i class="fa fa-github-square" aria-hidden="true"></i>
                            <a href="https://github.com/joaoaf" target="_blank"> João Ferreira</a>
                    </p>

                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery/jquery-2.2.4.min.js" type="9d87448a96b31580b8ebd9e2-text/javascript"></script>

    <script src="js/bootstrap/popper.min.js" type="9d87448a96b31580b8ebd9e2-text/javascript"></script>

    <script src="js/bootstrap/bootstrap.min.js" type="9d87448a96b31580b8ebd9e2-text/javascript"></script>

    <script src="js/plugins/plugins.js" type="9d87448a96b31580b8ebd9e2-text/javascript"></script>

    <script src="js/active.js" type="9d87448a96b31580b8ebd9e2-text/javascript"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="9d87448a96b31580b8ebd9e2-text/javascript"></script>
    <script type="9d87448a96b31580b8ebd9e2-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="9d87448a96b31580b8ebd9e2-|49" defer=""></script>
</body>

</html>