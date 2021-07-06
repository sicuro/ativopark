<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="<?=bloginfo('template_url')?>/style.css">
       <link rel="stylesheet" href="<?=bloginfo('template_url')?>/style-mobile.css">
       <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
       <script
         src="https://code.jquery.com/jquery-3.3.1.min.js"
         integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
         crossorigin="anonymous"></script>
       <title>Ativo Park Estacionamento</title>
     </head>
     <body>
       <header>
         <div class="container">
           <div class="row">
             <div class="col-3">
               <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                 <img class="logo" src="<?=bloginfo('template_url')?>/images/logo.png">
               </a>
             </div>
             <div class="col-sm-9 menu text-right">
               <ol>
                 <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><li> Home </li></a>
                 <a href="<?php echo esc_url( home_url( '/#servicos' ) ); ?>"><li class="servicos-home"> Serviços</li></a>
                 <a href="<?php echo esc_url( home_url( '/#quemsomos' ) ); ?>"><li class="quemsomos-home"> Quem somos</li></a>
                 <a href="<?php echo esc_url( home_url( '/' ) ); ?>unidades"><li> Unidades </li></a>
                 <a href="<?php echo esc_url( home_url( '/' ) ); ?>contato"><li class="cta-contato">Entre em contato</li></a>
               </ol>

             </div>
             <div class="col-9 menu-mobile text-right" onclick="openNav()">
             <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
             <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25.385" viewBox="0 0 30 25.385"><defs><style>.a{fill:#000;}</style></defs><g transform="translate(-1 -2)"><path class="a" d="M1,2V4.308H31V2ZM1,13.538v2.308H31V13.538ZM1,25.077v2.308H31V25.077Z"/></g></svg>
             </div>
             </a>
           </div>
             <div id="myNav" class="overlay-menu">

               <!-- Button to close the overlay navigation -->
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span>&times;</span></a>

               <!-- Overlay content -->
               <div class="overlay-content">
                 <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> Home </a>
                 <a class="servicos-home" href="<?php echo esc_url( home_url( '/#servicos' ) ); ?>" onclick="closeNav()"> Serviços</a>
                 <a class="quemsomos-home" href="<?php echo esc_url( home_url( '/#quemsomos' ) ); ?>" onclick="closeNav()"> Quem somos</a>
                 <a href="<?php echo esc_url( home_url( '/' ) ); ?>unidades"> Unidades </a>
                 <a href="<?php echo esc_url( home_url( '/' ) ); ?>contato">Contato</a>
               </div>

             </div>
           </row>
         </div>
       </header>
