<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

<?php include "conexao.php"; ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>

  <meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keyword" content="palavras chaves">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="javascripts/shadowbox/shadowbox.css" type="text/css" media="all">
  
  
  <!--css nivo slider-->
  <link rel="stylesheet" href="css/botao.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/nivoSlider/default.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/nivoSlider/nivo-slider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/nivoSlider/style.css" type="text/css" media="screen" />
  <!--Fim do css nivo slider-->
  
  <script type="text/javascript" src="javascripts/jquery-1.7.1.js"></script>
  <script type="text/javascript" src="javascripts/validacoes.js"></script>
  <script type="text/javascript" src="javascripts/script.js"></script>
  
  <!--Script Shadow box-->
  <script type="text/javascript" src="javascripts/shadowbox/shadowbox.js"></script>
  <script type="text/javascript">
  	Shadowbox.init({
		language:'pt',
		player:['img'],
	});
  
  </script>
  <!--Fim do Script Shadow box-->
  
  
  
  <!--Script para mascara de formulario-->
  <script type="text/javascript" src="javascripts/mascara.js"></script>
  <script type="text/javascript">
	$(document).ready(function(){
		$("#cpf").mask("999.999.999-99");
		$("#cpf2").mask("999.999.999-99");
		$("#cnpj").mask("99.999.999/9999-99");
		$("#cnpj2").mask("99.999.999/9999-99");
		$("#telefone").mask("(99)9999-9999");
	});
  </script>
  <!--Fim do Script para mascara de formulario-->
  <script type="text/javascript" src="javascripts/jquery.nivo.slider.pack.js"></script>
  <script type="text/javascript">

    $(window).load(function() {

        $('#slider').nivoSlider({
			animSpeed:500,
			pauseTime:8000
		});

    });

    </script>
  <!-- Fim do Srcipt para Slider-->
  
  <!-- Srcipt para correção de seletores css3-->
  <script type="text/javascript" src="javascripts/selectivizr-1.0.2/selectivizr-min.js"></script>
    <!--[if (gte IE 6)&(lte IE 8)]>
      <script type="text/javascript" src="javascripts/selectivizr-1.0.2/selectivizr.js"></script>
      <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
    <![endif]-->

</head>

<body>
<section id="warp_topo">
	<header class="topo">
    	<figure><a href="home.php"></a></figure>
        
        <article class="informacoes_topo">
        
            <!--<p>Endereço: Rua 15 de Dezembro - Nº 135 - 5º Andar - Sala 503</p>
            <p>Ed. Hado Hajjar (em cima do banco santander) - Anápolis - GO</p>
            <p>Telefone:<span class="menor">(62)</span>  3943-0703</p> -->

        </article>
    </header>
</section><!--Final da section warp_topo-->
