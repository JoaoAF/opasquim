<?php
    error_reporting(E_ALL);
    
    include('admin/class/Conexao.php');
    include('admin/class/Portal.php');

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
                               <?php $categorias = Portal::menu_internas($conexao); ?>
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

     <section class="travel-videos-area" id="Crônicas">
        <div class="container">
            <div class="travel-videos-content">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2><?php echo $_POST['titulo']; ?></h2>
                            <p><?php echo $_POST['subtitulo']; ?></p>
                        </div>
                        <div class="post-meta">
                            <a href="#">
                            	<img src="img/core-img/author2.png" alt=""> 
                            	<small><?php echo $_POST['nome']; ?></small>
                            	<small><?php echo $_POST['datahora']; ?></small>
                            </a>
                        </div>
                    </div>
                    ​<div class="form-row">
					    <div style="margin-top: 15px;" class="form-group col-md-6">
					      <?php echo $_POST['texto']; ?>
					    </div>
					    <div class="form-group col-md-6">
					    	​<picture>
							  <img src="<?php echo $_POST['imagens']; ?>" class="img-fluid img-thumbnail" alt="...">
							</picture>
					    </div>
					</div>
					 ​<div class="form-row">
					    <div class="form-group col-md-6">
					    	<a href="<?php echo $cronicas[0]['videos']; ?>" class="video-play-btn"><i class="fa fa-play"></i></a>
					    	​<picture>
							  <img src="<?php echo $_POST['imagens']; ?>" class="img-fluid img-thumbnail" alt="...">
							</picture>
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