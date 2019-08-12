<?php
    error_reporting(E_ALL);
    
    include('admin/class/Conexao.php');
    include('admin/class/Portal.php');

    $destaques  = Portal::destaques($conexao);
    $cronicas   = Portal::cronicas_em_video($conexao);
    $politica   = Portal::noticias_politica($conexao);
    $economia   = Portal::noticias_economia($conexao);
    $esportes   = Portal::noticias_esportes($conexao);

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
                               <?php $categorias = Portal::menu($conexao); ?>
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

                            <form method="post" action="show.php" name="destaque">
                                <input type="hidden" name="titulo"    value="<?php echo $destaques[0]['titulo']; ?>">
                                <input type="hidden" name="subtitulo" value="<?php echo $destaques[0]['subtitulo']; ?>">
                                <input type="hidden" name="texto"     value="<?php echo $destaques[0]['texto']; ?>">
                                <input type="hidden" name="imagens"   value="<?php echo $destaques[0]['imagens']; ?>">
                                <input type="hidden" name="videos"    value="<?php echo $destaques[0]['videos']; ?>">
                                <input type="hidden" name="categoria" value="<?php echo $destaques[0]['categoria']; ?>">
                                <input type="hidden" name="nome"      value="<?php echo $destaques[0]['nome']; ?>">
                                <input type="hidden" name="datahora"  value="<?php echo $destaques[0]['datahora']; ?>">
                                <a href='javascript:destaque.submit()' class="post-title"><?php echo $destaques[0]['titulo']; ?></a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-single-section">

            <div class="single-welcome-post bg-img item2 wow fadeInUp" data-wow-delay="400ms" style="background-image: url(<?php echo $destaques[1]['imagens']; ?>););">
                <div class="welcome-post-content">
                    <div class="single-blog-post white">
                        <div class="blog-content">
                            <a href="#" class="post-tag"><?php echo $destaques[1]['categoria']; ?></a>
                            <form method="post" action="show.php" name="destaque2">
                                <input type="hidden" name="titulo"    value="<?php echo $destaques[1]['titulo']; ?>">
                                <input type="hidden" name="subtitulo" value="<?php echo $destaques[1]['subtitulo']; ?>">
                                <input type="hidden" name="texto"     value="<?php echo $destaques[1]['texto']; ?>">
                                <input type="hidden" name="imagens"   value="<?php echo $destaques[1]['imagens']; ?>">
                                <input type="hidden" name="videos"    value="<?php echo $destaques[1]['videos']; ?>">
                                <input type="hidden" name="categoria" value="<?php echo $destaques[1]['categoria']; ?>">
                                <input type="hidden" name="nome"      value="<?php echo $destaques[1]['nome']; ?>">
                                <input type="hidden" name="datahora"  value="<?php echo $destaques[1]['datahora']; ?>">
                                <a href='javascript:destaque2.submit()' class="post-title"><?php echo $destaques[1]['titulo']; ?></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-second-section d-flex flex-wrap">
                <div class="single-welcome-post bg-img item3 wow fadeInUp" data-wow-delay="500ms" style="background-image: url(<?php echo $destaques[2]['imagens']; ?>);">
                    <div class="welcome-post-content">
                        <div class="single-blog-post style2 white">
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo $destaques[2]['categoria']; ?></a>
                                <form method="post" action="show.php" name="destaque3">
                                <input type="hidden" name="titulo"    value="<?php echo $destaques[2]['titulo']; ?>">
                                <input type="hidden" name="subtitulo" value="<?php echo $destaques[2]['subtitulo']; ?>">
                                <input type="hidden" name="texto"     value="<?php echo $destaques[2]['texto']; ?>">
                                <input type="hidden" name="imagens"   value="<?php echo $destaques[2]['imagens']; ?>">
                                <input type="hidden" name="videos"    value="<?php echo $destaques[2]['videos']; ?>">
                                <input type="hidden" name="categoria" value="<?php echo $destaques[2]['categoria']; ?>">
                                <input type="hidden" name="nome"      value="<?php echo $destaques[2]['nome']; ?>">
                                <input type="hidden" name="datahora"  value="<?php echo $destaques[2]['datahora']; ?>">
                                <a href='javascript:destaque3.submit()' class="post-title"><?php echo $destaques[2]['titulo']; ?></a>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-welcome-post bg-img item4 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(<?php echo $destaques[3]['imagens']; ?>);">
                    <div class="welcome-post-content">
                        <div class="single-blog-post style2 white">
                            <div class="blog-content">
                                 <a href="#" class="post-tag"><?php echo $destaques[3]['categoria']; ?></a>
                                <form method="post" action="show.php" name="destaque4">
                                <input type="hidden" name="titulo"    value="<?php echo $destaques[3]['titulo']; ?>">
                                <input type="hidden" name="subtitulo" value="<?php echo $destaques[3]['subtitulo']; ?>">
                                <input type="hidden" name="texto"     value="<?php echo $destaques[3]['texto']; ?>">
                                <input type="hidden" name="imagens"   value="<?php echo $destaques[3]['imagens']; ?>">
                                <input type="hidden" name="videos"    value="<?php echo $destaques[3]['videos']; ?>">
                                <input type="hidden" name="categoria" value="<?php echo $destaques[3]['categoria']; ?>">
                                <input type="hidden" name="nome"      value="<?php echo $destaques[3]['nome']; ?>">
                                <input type="hidden" name="datahora"  value="<?php echo $destaques[3]['datahora']; ?>">
                                <a href='javascript:destaque4.submit()' class="post-title"><?php echo $destaques[3]['titulo']; ?></a>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-mag-tabs-area mt-50 wow fadeInUp" data-wow-delay="200ms" id="Notícias">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                       <?php $c  = Portal::carousel_categorias($conexao); ?>
                    </ul>
                    <div class="tab-content" id="myTabContent">

                        <?php $n = Portal::carousel_noticias($conexao); ?>
                                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="travel-videos-area" id="Crônicas">
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

                        <div class="single-welcome-post style-2 bg-img mb-30 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(<?php echo $cronicas[0]['imagens']; ?>);">

                            <a href="<?php echo $cronicas[0]['videos']; ?>" class="video-play-btn"><i class="fa fa-play"></i></a>

                            <div class="welcome-post-content">

                                <div class="single-blog-post white">
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">
                                            <?php echo $cronicas[0]['nome']; ?>
                                        </a>
<form method="post" action="show.php" name="news">
    <input type="hidden" name="titulo" value="<?php echo $cronicas[0]['titulo']; ?>">
    <input type="hidden" name="subtitulo" value="<?php echo $cronicas[0]['subtitulo']; ?>">
    <input type="hidden" name="texto" value="<?php echo $cronicas[0]['texto']; ?>">
    <input type="hidden" name="imagens" value="<?php echo $cronicas[0]['imagens']; ?>">
    <input type="hidden" name="videos" value="<?php echo $cronicas[0]['videos']; ?>">
    <input type="hidden" name="categoria" value="<?php echo $cronicas[0]['categoria']; ?>">
    <input type="hidden" name="nome" value="<?php echo $cronicas[0]['nome']; ?>">
    <input type="hidden" name="datahora" value="<?php echo $cronicas[0]['datahora']; ?>">
<a href='javascript:news.submit()' class="post-title"><?php echo $cronicas[0]['titulo']; ?></a>
</form>
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
                                        <img src="<?php echo $cronicas[1]['imagens'];?>" alt="">

                                        <a href="<?php echo $cronicas[1]['videos'];?>" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag"><?php echo $cronicas[1]['nome'];?></a>
                                        <form method="post" action="show.php" name="news2">
                                            <input type="hidden" name="titulo" value="<?php echo $cronicas[1]['titulo']; ?>">
                                            <input type="hidden" name="subtitulo" value="<?php echo $cronicas[1]['subtitulo']; ?>">
                                            <input type="hidden" name="texto" value="<?php echo $cronicas[1]['texto']; ?>">
                                            <input type="hidden" name="imagens" value="<?php echo $cronicas[1]['imagens']; ?>">
                                            <input type="hidden" name="videos" value="<?php echo $cronicas[1]['videos']; ?>">
                                            <input type="hidden" name="categoria" value="<?php echo $cronicas[1]['categoria']; ?>">
                                            <input type="hidden" name="nome" value="<?php echo $cronicas[1]['nome']; ?>">
                                            <input type="hidden" name="datahora" value="<?php echo $cronicas[1]['datahora']; ?>">
                                        <a href='javascript:news2.submit()' class="post-title"><?php echo $cronicas[1]['titulo']; ?></a>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="500ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="<?php echo $cronicas[2]['imagens'];?>" alt="">

                                        <a href="<?php echo $cronicas[2]['videos'];?>" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag"><?php echo $cronicas[2]['nome'];?></a>
                                        <form method="post" action="show.php" name="news3">
                                            <input type="hidden" name="titulo" value="<?php echo $cronicas[2]['titulo']; ?>">
                                            <input type="hidden" name="subtitulo" value="<?php echo $cronicas[2]['subtitulo']; ?>">
                                            <input type="hidden" name="texto" value="<?php echo $cronicas[2]['texto']; ?>">
                                            <input type="hidden" name="imagens" value="<?php echo $cronicas[2]['imagens']; ?>">
                                            <input type="hidden" name="videos" value="<?php echo $cronicas[2]['videos']; ?>">
                                            <input type="hidden" name="categoria" value="<?php echo $cronicas[2]['categoria']; ?>">
                                            <input type="hidden" name="nome" value="<?php echo $cronicas[2]['nome']; ?>">
                                            <input type="hidden" name="datahora" value="<?php echo $cronicas[2]['datahora']; ?>">
                                        <a href='javascript:news3.submit()' class="post-title"><?php echo $cronicas[2]['titulo']; ?></a>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="600ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="<?php echo $cronicas[3]['imagens'];?>" alt="">

                                        <a href="<?php echo $cronicas[3]['videos'];?>" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag"><?php echo $cronicas[3]['nome'];?></a>
                                        <form method="post" action="show.php" name="news4">
                                            <input type="hidden" name="titulo" value="<?php echo $cronicas[3]['titulo']; ?>">
                                            <input type="hidden" name="subtitulo" value="<?php echo $cronicas[3]['subtitulo']; ?>">
                                            <input type="hidden" name="texto" value="<?php echo $cronicas[3]['texto']; ?>">
                                            <input type="hidden" name="imagens" value="<?php echo $cronicas[3]['imagens']; ?>">
                                            <input type="hidden" name="videos" value="<?php echo $cronicas[3]['videos']; ?>">
                                            <input type="hidden" name="categoria" value="<?php echo $cronicas[3]['categoria']; ?>">
                                            <input type="hidden" name="nome" value="<?php echo $cronicas[3]['nome']; ?>">
                                            <input type="hidden" name="datahora" value="<?php echo $cronicas[3]['datahora']; ?>">
                                        <a href='javascript:news4.submit()' class="post-title"><?php echo $cronicas[3]['titulo']; ?></a>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="700ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="<?php echo $cronicas[4]['imagens'];?>" alt="">

                                        <a href="<?php echo $cronicas[4]['videos'];?>" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag"><?php echo $cronicas[4]['nome'];?></a>
                                        <form method="post" action="show.php" name="news5">
                                            <input type="hidden" name="titulo" value="<?php echo $cronicas[4]['titulo']; ?>">
                                            <input type="hidden" name="subtitulo" value="<?php echo $cronicas[4]['subtitulo']; ?>">
                                            <input type="hidden" name="texto" value="<?php echo $cronicas[4]['texto']; ?>">
                                            <input type="hidden" name="imagens" value="<?php echo $cronicas[4]['imagens']; ?>">
                                            <input type="hidden" name="videos" value="<?php echo $cronicas[4]['videos']; ?>">
                                            <input type="hidden" name="categoria" value="<?php echo $cronicas[4]['categoria']; ?>">
                                            <input type="hidden" name="nome" value="<?php echo $cronicas[4]['nome']; ?>">
                                            <input type="hidden" name="datahora" value="<?php echo $cronicas[4]['datahora']; ?>">
                                        <a href='javascript:news5.submit()' class="post-title"><?php echo $cronicas[4]['titulo']; ?></a>
                                        </form>
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

                    <div class="col-12 col-md-6 col-lg-4" id="Política">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>Política</h2>
                        </div>

                        <div class="single-blog-post style2 mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb mb-5">
                                <img src="<?php echo $politica[0]['imagens'] ?>" alt="">

                                <a href="<?php echo $politica[0]['videos'] ?>" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo $politica[0]['nome'] ?></a>
                                <form method="post" action="show.php" name="politica">
                                <input type="hidden" name="titulo"    value="<?php echo $politica[0]['titulo'] ?>">
                                <input type="hidden" name="subtitulo" value="<?php echo $politica[0]['subtitulo'] ?>">
                                <input type="hidden" name="texto"     value="<?php echo $politica[0]['texto'] ?>">
                                <input type="hidden" name="imagens"   value="<?php echo $politica[0]['imagens'] ?>">
                                <input type="hidden" name="videos"    value="<?php echo $politica[0]['videos'] ?>">
                                <input type="hidden" name="categoria" value="<?php echo $politica[0]['categoria'] ?>">
                                <input type="hidden" name="nome"      value="<?php echo $politica[0]['nome'] ?>">
                                <input type="hidden" name="datahora"  value="<?php echo $politica[0]['datahora'] ?>">
                                <a href='javascript:politica.submit()' class="post-title"><?php echo $politica[0]['titulo'] ?></a>
                                </form>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="<?php echo $politica[1]['imagens'] ?>" alt="">

                                <a href="<?php echo $politica[1]['videos'] ?>" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo $politica[1]['nome'] ?></a>
                                <form method="post" action="show.php" name="politica2">
                                <input type="hidden" name="titulo"    value="<?php echo $politica[1]['titulo'] ?>">
                                <input type="hidden" name="subtitulo" value="<?php echo $politica[1]['subtitulo'] ?>">
                                <input type="hidden" name="texto"     value="<?php echo $politica[1]['texto'] ?>">
                                <input type="hidden" name="imagens"   value="<?php echo $politica[1]['imagens'] ?>">
                                <input type="hidden" name="videos"    value="<?php echo $politica[1]['videos'] ?>">
                                <input type="hidden" name="categoria" value="<?php echo $politica[1]['categoria'] ?>">
                                <input type="hidden" name="nome"      value="<?php echo $politica[1]['nome'] ?>">
                                <input type="hidden" name="datahora"  value="<?php echo $politica[1]['datahora'] ?>">
                                <a href='javascript:politica2.submit()' class="post-title"><?php echo $politica[1]['titulo'] ?></a>
                                </form>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="<?php echo $politica[2]['imagens'] ?>" alt="">

                                <a href="<?php echo $politica[2]['videos'] ?>" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo $politica[2]['nome'] ?></a>
                                <form method="post" action="show.php" name="politica3">
                                <input type="hidden" name="titulo"    value="<?php echo $politica[2]['titulo'] ?>">
                                <input type="hidden" name="subtitulo" value="<?php echo $politica[2]['subtitulo'] ?>">
                                <input type="hidden" name="texto"     value="<?php echo $politica[2]['texto'] ?>">
                                <input type="hidden" name="imagens"   value="<?php echo $politica[2]['imagens'] ?>">
                                <input type="hidden" name="videos"    value="<?php echo $politica[2]['videos'] ?>">
                                <input type="hidden" name="categoria" value="<?php echo $politica[2]['categoria'] ?>">
                                <input type="hidden" name="nome"      value="<?php echo $politica[2]['nome'] ?>">
                                <input type="hidden" name="datahora"  value="<?php echo $politica[2]['datahora'] ?>">
                                <a href='javascript:politica3.submit()' class="post-title"><?php echo $politica[2]['titulo'] ?></a>
                                </form>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="<?php echo $politica[3]['imagens'] ?>" alt="">

                                <a href="<?php echo $politica[3]['videos'] ?>" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo $politica[3]['nome'] ?></a>
                                <form method="post" action="show.php" name="politica4">
                                <input type="hidden" name="titulo"    value="<?php echo $politica[3]['titulo'] ?>">
                                <input type="hidden" name="subtitulo" value="<?php echo $politica[3]['subtitulo'] ?>">
                                <input type="hidden" name="texto"     value="<?php echo $politica[3]['texto'] ?>">
                                <input type="hidden" name="imagens"   value="<?php echo $politica[3]['imagens'] ?>">
                                <input type="hidden" name="videos"    value="<?php echo $politica[3]['videos'] ?>">
                                <input type="hidden" name="categoria" value="<?php echo $politica[3]['categoria'] ?>">
                                <input type="hidden" name="nome"      value="<?php echo $politica[3]['nome'] ?>">
                                <input type="hidden" name="datahora"  value="<?php echo $politica[3]['datahora'] ?>">
                                <a href='javascript:politica4.submit()' class="post-title"><?php echo $politica[3]['titulo'] ?></a>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4" id="Economia">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>Economia</h2>
                        </div>

                        <div class="single-blog-post style2 mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb mb-5">
                                <img src="<?php echo $economia[0]['imagens'] ?>" alt="">

                                <a href="<?php echo $economia[0]['videos'] ?>" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo $economia[0]['nome'] ?></a>
                                <form method="post" action="show.php" name="economia">
                                    <input type="hidden" name="titulo"    value="<?php echo $economia[0]['titulo']; ?>">
                                    <input type="hidden" name="subtitulo" value="<?php echo $economia[0]['subtitulo']; ?>">
                                    <input type="hidden" name="texto"     value="<?php echo $economia[0]['texto']; ?>">
                                    <input type="hidden" name="imagens"   value="<?php echo $economia[0]['imagens']; ?>">
                                    <input type="hidden" name="videos"    value="<?php echo $economia[0]['videos']; ?>">
                                    <input type="hidden" name="categoria" value="<?php echo $economia[0]['categoria']; ?>">
                                    <input type="hidden" name="nome"      value="<?php echo $economia[0]['nome']; ?>">
                                    <input type="hidden" name="datahora"  value="<?php echo $economia[0]['datahora']; ?>">
                                <a href='javascript:economia.submit()' class="post-title"><?php echo $economia[0]['titulo']; ?></a>
                                </form>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="<?php echo $economia[1]['imagens'] ?>" alt="">

                                <a href="<?php echo $economia[1]['videos'] ?>" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo $economia[1]['nome'] ?></a>
                                <form method="post" action="show.php" name="economia2">
                                    <input type="hidden" name="titulo"    value="<?php echo $economia[1]['titulo']; ?>">
                                    <input type="hidden" name="subtitulo" value="<?php echo $economia[1]['subtitulo']; ?>">
                                    <input type="hidden" name="texto"     value="<?php echo $economia[1]['texto']; ?>">
                                    <input type="hidden" name="imagens"   value="<?php echo $economia[1]['imagens']; ?>">
                                    <input type="hidden" name="videos"    value="<?php echo $economia[1]['videos']; ?>">
                                    <input type="hidden" name="categoria" value="<?php echo $economia[1]['categoria']; ?>">
                                    <input type="hidden" name="nome"      value="<?php echo $economia[1]['nome']; ?>">
                                    <input type="hidden" name="datahora"  value="<?php echo $economia[1]['datahora']; ?>">
                                <a href='javascript:economia2.submit()' class="post-title"><?php echo $economia[1]['titulo']; ?></a>
                                </form>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="<?php echo $economia[2]['imagens'] ?>" alt="">

                                <a href="<?php echo $economia[2]['videos'] ?>" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo $economia[2]['nome'] ?></a>
                                <form method="post" action="show.php" name="economia3">
                                    <input type="hidden" name="titulo"    value="<?php echo $economia[2]['titulo']; ?>">
                                    <input type="hidden" name="subtitulo" value="<?php echo $economia[2]['subtitulo']; ?>">
                                    <input type="hidden" name="texto"     value="<?php echo $economia[2]['texto']; ?>">
                                    <input type="hidden" name="imagens"   value="<?php echo $economia[2]['imagens']; ?>">
                                    <input type="hidden" name="videos"    value="<?php echo $economia[2]['videos']; ?>">
                                    <input type="hidden" name="categoria" value="<?php echo $economia[2]['categoria']; ?>">
                                    <input type="hidden" name="nome"      value="<?php echo $economia[2]['nome']; ?>">
                                    <input type="hidden" name="datahora"  value="<?php echo $economia[2]['datahora']; ?>">
                                <a href='javascript:economia3.submit()' class="post-title"><?php echo $economia[1]['titulo']; ?></a>
                                </form>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="<?php echo $economia[3]['imagens'] ?>" alt="">

                                <a href="<?php echo $economia[3]['videos'] ?>" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo $economia[3]['nome'] ?></a>
                                <form method="post" action="show.php" name="economia4">
                                    <input type="hidden" name="titulo"    value="<?php echo $economia[3]['titulo']; ?>">
                                    <input type="hidden" name="subtitulo" value="<?php echo $economia[3]['subtitulo']; ?>">
                                    <input type="hidden" name="texto"     value="<?php echo $economia[3]['texto']; ?>">
                                    <input type="hidden" name="imagens"   value="<?php echo $economia[3]['imagens']; ?>">
                                    <input type="hidden" name="videos"    value="<?php echo $economia[3]['videos']; ?>">
                                    <input type="hidden" name="categoria" value="<?php echo $economia[3]['categoria']; ?>">
                                    <input type="hidden" name="nome"      value="<?php echo $economia[3]['nome']; ?>">
                                    <input type="hidden" name="datahora"  value="<?php echo $economia[3]['datahora']; ?>">
                                <a href='javascript:economia4.submit()' class="post-title"><?php echo $economia[1]['titulo']; ?></a>
                                </form>
                            </div>
                        </div>

                        
                    </div>

                    <div class="col-12 col-md-6 col-lg-4" id="Esportes">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>Esportes</h2>
                        </div>
                        <?php $esportes   = Portal::noticias_esportes($conexao);?>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb">
                                <img src="<?php echo $esportes[0]['imagens'] ?>" alt="">

                                <a href="<?php echo $esportes[0]['videos'] ?>" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo $esportes[0]['nome'] ?></a>
                                <form method="post" action="show.php" name="esportes">
                                    <input type="hidden" name="titulo"    value="<?php echo $esportes[0]['titulo']; ?>">
                                    <input type="hidden" name="subtitulo" value="<?php echo $esportes[0]['subtitulo']; ?>">
                                    <input type="hidden" name="texto"     value="<?php echo $esportes[0]['texto']; ?>">
                                    <input type="hidden" name="imagens"   value="<?php echo $esportes[0]['imagens']; ?>">
                                    <input type="hidden" name="videos"    value="<?php echo $esportes[0]['videos']; ?>">
                                    <input type="hidden" name="categoria" value="<?php echo $esportes[0]['categoria']; ?>">
                                    <input type="hidden" name="nome"      value="<?php echo $esportes[0]['nome']; ?>">
                                    <input type="hidden" name="datahora"  value="<?php echo $esportes[0]['datahora']; ?>">
                                <a href='javascript:esportes.submit()' class="post-title"><?php echo $esportes[0]['titulo']; ?></a>
                                </form>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb">
                                <img src="<?php echo $esportes[0]['imagens'] ?>" alt="">

                                <a href="<?php echo $esportes[0]['videos'] ?>" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo $esportes[0]['nome'] ?></a>
                                <form method="post" action="show.php" name="esportes2">
                                    <input type="hidden" name="titulo"    value="<?php echo $esportes[1]['titulo']; ?>">
                                    <input type="hidden" name="subtitulo" value="<?php echo $esportes[1]['subtitulo']; ?>">
                                    <input type="hidden" name="texto"     value="<?php echo $esportes[1]['texto']; ?>">
                                    <input type="hidden" name="imagens"   value="<?php echo $esportes[1]['imagens']; ?>">
                                    <input type="hidden" name="videos"    value="<?php echo $esportes[1]['videos']; ?>">
                                    <input type="hidden" name="categoria" value="<?php echo $esportes[1]['categoria']; ?>">
                                    <input type="hidden" name="nome"      value="<?php echo $esportes[1]['nome']; ?>">
                                    <input type="hidden" name="datahora"  value="<?php echo $esportes[1]['datahora']; ?>">
                                <a href='javascript:esportes2.submit()' class="post-title"><?php echo $esportes[1]['titulo']; ?></a>
                                </form>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb">
                                <img src="<?php echo $esportes[0]['imagens'] ?>" alt="">

                                <a href="<?php echo $esportes[0]['videos'] ?>" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo $esportes[0]['nome'] ?></a>
                                <form method="post" action="show.php" name="esportes3">
                                    <input type="hidden" name="titulo"    value="<?php echo $esportes[2]['titulo']; ?>">
                                    <input type="hidden" name="subtitulo" value="<?php echo $esportes[2]['subtitulo']; ?>">
                                    <input type="hidden" name="texto"     value="<?php echo $esportes[2]['texto']; ?>">
                                    <input type="hidden" name="imagens"   value="<?php echo $esportes[2]['imagens']; ?>">
                                    <input type="hidden" name="videos"    value="<?php echo $esportes[2]['videos']; ?>">
                                    <input type="hidden" name="categoria" value="<?php echo $esportes[2]['categoria']; ?>">
                                    <input type="hidden" name="nome"      value="<?php echo $esportes[2]['nome']; ?>">
                                    <input type="hidden" name="datahora"  value="<?php echo $esportes[2]['datahora']; ?>">
                                <a href='javascript:esportes3.submit()' class="post-title"><?php echo $esportes[2]['titulo']; ?></a>
                                </form>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb">
                                <img src="<?php echo $esportes[0]['imagens'] ?>" alt="">

                                <a href="<?php echo $esportes[0]['videos'] ?>" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo $esportes[0]['nome'] ?></a>
                                <form method="post" action="show.php" name="esportes4">
                                    <input type="hidden" name="titulo"    value="<?php echo $esportes[3]['titulo']; ?>">
                                    <input type="hidden" name="subtitulo" value="<?php echo $esportes[3]['subtitulo']; ?>">
                                    <input type="hidden" name="texto"     value="<?php echo $esportes[3]['texto']; ?>">
                                    <input type="hidden" name="imagens"   value="<?php echo $esportes[3]['imagens']; ?>">
                                    <input type="hidden" name="videos"    value="<?php echo $esportes[3]['videos']; ?>">
                                    <input type="hidden" name="categoria" value="<?php echo $esportes[3]['categoria']; ?>">
                                    <input type="hidden" name="nome"      value="<?php echo $esportes[3]['nome']; ?>">
                                    <input type="hidden" name="datahora"  value="<?php echo $esportes[3]['datahora']; ?>">
                                <a href='javascript:esportes4.submit()' class="post-title"><?php echo $esportes[3]['titulo']; ?></a>
                                </form>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb">
                                <img src="<?php echo $esportes[0]['imagens'] ?>" alt="">

                                <a href="<?php echo $esportes[0]['videos'] ?>" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo $esportes[0]['nome'] ?></a>
                                <form method="post" action="show.php" name="esportes5">
                                    <input type="hidden" name="titulo"    value="<?php echo $esportes[4]['titulo']; ?>">
                                    <input type="hidden" name="subtitulo" value="<?php echo $esportes[4]['subtitulo']; ?>">
                                    <input type="hidden" name="texto"     value="<?php echo $esportes[4]['texto']; ?>">
                                    <input type="hidden" name="imagens"   value="<?php echo $esportes[4]['imagens']; ?>">
                                    <input type="hidden" name="videos"    value="<?php echo $esportes[4]['videos']; ?>">
                                    <input type="hidden" name="categoria" value="<?php echo $esportes[4]['categoria']; ?>">
                                    <input type="hidden" name="nome"      value="<?php echo $esportes[4]['nome']; ?>">
                                    <input type="hidden" name="datahora"  value="<?php echo $esportes[4]['datahora']; ?>">
                                <a href='javascript:esportes5.submit()' class="post-title"><?php echo $esportes[4]['titulo']; ?></a>
                                </form>
                            </div>
                        </div>

                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb">
                                <img src="<?php echo $esportes[0]['imagens'] ?>" alt="">

                                <a href="<?php echo $esportes[0]['videos'] ?>" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo $esportes[0]['nome'] ?></a>
                                <form method="post" action="show.php" name="esportes6">
                                    <input type="hidden" name="titulo"    value="<?php echo $esportes[5]['titulo']; ?>">
                                    <input type="hidden" name="subtitulo" value="<?php echo $esportes[5]['subtitulo']; ?>">
                                    <input type="hidden" name="texto"     value="<?php echo $esportes[5]['texto']; ?>">
                                    <input type="hidden" name="imagens"   value="<?php echo $esportes[5]['imagens']; ?>">
                                    <input type="hidden" name="videos"    value="<?php echo $esportes[5]['videos']; ?>">
                                    <input type="hidden" name="categoria" value="<?php echo $esportes[5]['categoria']; ?>">
                                    <input type="hidden" name="nome"      value="<?php echo $esportes[5]['nome']; ?>">
                                    <input type="hidden" name="datahora"  value="<?php echo $esportes[5]['datahora']; ?>">
                                <a href='javascript:esportes6.submit()' class="post-title"><?php echo $esportes[5]['titulo']; ?></a>
                                </form>
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
                            <?php $numerador = Portal::numerador_conteudos($conexao); ?>
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
   
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="9d87448a96b31580b8ebd9e2-|49" defer=""></script>
</body>

</html>