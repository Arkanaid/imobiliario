<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Skeleton 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130902

-->
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mais BB Consórcios</title>
<meta name="description" content="Venda de consorcios banco do brasil. A Telecom Service é a segunda maior empresa vendedora de consórcios do Banco do Brasil e atua no mercado Bancário há 10 anos, comercializando outros produtos e serviços. Segurança, praticidade e produtos e serviços de qualidade são os pilares da Telecom Service.">
<meta name="keywords" content="maisbbconsorcios,mais bb consorcios, consorcios banco do brasil, consorcios da telecom service, consorcios imoveis, consorcios casas, consorcios bens, consorcios brasilia, consorcios rio de janeiro, consorcios brasil, consorcios baratos, consorcios minas gerais, consorcios minas, consorcios bh, consorcios motos, consorcios moto, Consórcio de Caminhões, bb consorcios, BB Consórcios, sem juros, Sem júros, consorcio, consorcios, Consórcio, Consórcios, consórcios, consórcio, moto, carro, casa, viagem, estetica, caminhões, pesados, banco, brasil, banco do brasil, Banco do Brasil, Mais BB, mais bb, telecom service, Telecom Service, Consórcio Telecom Service, Consórcio Telecom, maisbbconsorcios, mais bb consorcios, bb consorcios, bens, compra, adquirir, sorteio, lance, venda, mais barato, adquirir consorcio, consorcio imovel, consorcio carro, consorcio casa, consorcio moto, Consórcio de Caminhões Usados, Consórcio de Caminhões contemplados, + Consorcio + Carro, consórcio Veículos, consorcio de Carros NovosConsórcio de Automóveis, Consórcio de Automóveis, [Consorcio automovel], Simulação Consórcio de Carros, Simulação Consórcio de Carros, Cotação consorcio de Carro, cotar consorcio parágrafo Carro, Cirurgia Plástica masculina, consorcio Cirurgia Plástica, consorcio Cirurgia Plástica, consorcio parágrafo Cirurgia Plástica, consorcio de estetica, consorcio Cirurgia Plástica sp, consorcio Cirurgia Plástica goiania, consorcio imobiliario, consórcios de imóveis, "Consórcio de Imóveis", [Consórcio de imóveis], Consorcios imobiliario, Imobiliário consórcio banco do brasil, Consórcio Imobiliário bb, "Imobiliários Consórcio", Simulação consorcio imobiliario, "Melhor Consórcio Imobiliário", "Consorcio de moto", "Consórcio de motos", consorcio parágrafo moto, + + Consorcio moto, Fazer consorcio parágrafo moto, Simulação consorcio de moto, Cotação consorcio de moto, Cotação consorcio parágrafo moto, Cotação consorcio parágrafo moto, Viagens Consórcio, "Consorcio de Viagem", "Consorcio parágrafo Viagem", + + Consorcio Viagem, "Consórcio de Viagens", "Consórcio de Viagens", consorcio de Viagem banco do brasil, "Consorcio Para Viagens", Consorcio de Viagens">
<meta name="author" content="Telecom Service">


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45909142-1', 'maisbbconsorcios.com.br');
  ga('send', 'pageview');

</script>


<meta name="viewport" content="width:device-width">
<link rel="stylesheet" type="text/css" href="mobile.css" media="all and (max-width:320px)">
<link rel="stylesheet" type="text/css" href="tablet.css" media="all and (min-width:321px) and (max-widt:960px)">
 
<link href="default.css" rel="stylesheet" type="text/css" media="all and (min-width:961px)" /> 
 
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Raleway:400,700,200,300,900,800" rel="stylesheet" type="text/css">
<link href="InfoGrid/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel='stylesheet' type='text/css' href='InfoGrid/css/style.css' />
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
<script type='text/javascript' src='InfoGrid/js/infogrid.js'></script> 
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script language=javascript>
function BlockKeybord()
{
if((event.keyCode < 48) || (event.keyCode > 57))
{
event.returnValue = false;
}
}

function troca(str,strsai,strentra)
{
while(str.indexOf(strsai)>-1)
{
str = str.replace(strsai,strentra);
}
return str;
}

function FormataMoeda(campo,tammax,teclapres,caracter)
{
if(teclapres == null || teclapres == "undefined")
{
var tecla = -1;
}
else
{
var tecla = teclapres.keyCode;
}

if(caracter == null || caracter == "undefined")
{
caracter = ".";
}

vr = campo.value;
if(caracter != "")
{
vr = troca(vr,caracter,"");
}
vr = troca(vr,"/","");
vr = troca(vr,",","");
vr = troca(vr,".","");

tam = vr.length;
if(tecla > 0)
{
if(tam < tammax && tecla != 8)
{
tam = vr.length + 1;
}

if(tecla == 8)
{
tam = tam - 1;
}
}
if(tecla == -1 || tecla == 8 || tecla >= 48 && tecla <= 57 || tecla >= 96 && tecla <= 105)
{
if(tam <= 2)
{ 
campo.value = vr;
}
if((tam > 2) && (tam <= 5))
{
campo.value = vr.substr(0, tam - 2) + ',' + vr.substr(tam - 2, tam);
}
if((tam >= 6) && (tam <= 8))
{
campo.value = vr.substr(0, tam - 5) + caracter + vr.substr(tam - 5, 3) + ',' + vr.substr(tam - 2, tam);
}
if((tam >= 9) && (tam <= 11))
{
campo.value = vr.substr(0, tam - 8) + caracter + vr.substr(tam - 8, 3) + caracter + vr.substr(tam - 5, 3) + ',' + vr.substr(tam - 2, tam);
}
if((tam >= 12) && (tam <= 14))
{
campo.value = vr.substr(0, tam - 11) + caracter + vr.substr(tam - 11, 3) + caracter + vr.substr(tam - 8, 3) + caracter + vr.substr(tam - 5, 3) + ',' + vr.substr(tam - 2, tam);
}
if((tam >= 15) && (tam <= 17))
{
campo.value = vr.substr(0, tam - 14) + caracter + vr.substr(tam - 14, 3) + caracter + vr.substr(tam - 11, 3) + caracter + vr.substr(tam - 8, 3) + caracter + vr.substr(tam - 5, 3) + ',' + vr.substr(tam - 2, tam);
}
}
}

function maskKeyPress(objEvent) 
{
var iKeyCode; 
iKeyCode = objEvent.keyCode; 
if(iKeyCode>=48 && iKeyCode<=57) return true;
return false;
}
</script>


<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
	 
</head>
<body>
       <?php
  $useragent = $_SERVER['HTTP_USER_AGENT'];
 
  if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'IE';
  } elseif (preg_match( '|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Opera';
  } elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Firefox';
  } elseif(preg_match('|Chrome/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Chrome';
  } elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Safari';
  } else {
    // browser not recognized!
    $browser_version = 0;
    $browser= 'other';
  }
  
?>           
<div id="wrapper" class="container">
<div id="header">
<?php include "header.php";?>
<div>
<div class="teste"><img src="images/logo2.png" width="1013" height="131" alt="logo" /><br />
<?php if (isset($_GET['form'])){ ?>
<br />
<h2>CADASTRE-SE OU LIGUE: <b class="negrito">0800 722 1451</b></h2>
<br />
<?php } ?>
</div>
<div id="botoes">

<div><br />

<?php 

if (isset($_GET['status'])){
if($_GET['status'] == 'enviar' ){
	
	
function moeda($get_valor){
	$source = array('.', ',');
	$replace = array('','.');
	$valor = str_replace($source, $replace, $get_valor);
	return $valor;
	}		
	
include "conexao.php";
$nome=$_GET["nome"];
$nome=addslashes($nome);

$produto=$_GET["produto"];
$produto=addslashes($produto);

$telefone=$_GET["telefone"];
$telefone=addslashes($telefone);

$ddd=$_GET["ddd"];
$ddd=addslashes($ddd);


$telefone2=$_GET["telefone2"];
$telefone2=addslashes($telefone2);

$ddd2=$_GET["ddd2"];
$ddd2=addslashes($ddd2);

$email=$_GET["email"];
$email=addslashes($email);

$vminimo=moeda($_GET["vminimo"]);
$vminimo=addslashes($vminimo);

$vmaximo=moeda($_GET["vmaximo"]);
$vmaximo=addslashes($vmaximo);

$cep=$_GET["cep"];
$cep=addslashes($cep);

$veiculo = 'nenhum';
$valor = 1;
$parcela = 1;
$mes = 1;

$vendedor = 'nenhum';

$check = 0;

$status = 'inicial';

if (empty($nome)
|| empty ($produto) 
|| empty ($telefone)
|| empty ($ddd) 
|| empty ($vminimo) 
|| empty ($vmaximo)
|| empty ($cep) 
)
{
?>	

<script type="text/javascript">alert('Preencha todos os campos'); location.href="javascript:history.back();";</script>

<?php
exit();
};

$sql="INSERT INTO 
contato
VALUES(
null,
'".$nome."',
'".$produto."',
'".$ddd."',
'".$telefone."',
'".$ddd2."',
'".$telefone2."',
'".$email."',
'".$vminimo."',
'".$vmaximo."',
'".$cep."',
'".$veiculo."',
'".$valor."',
'".$parcela."',
'".$mes."',
'".$vendedor."',
'".$check."',
'".$status."'
)";
$resultado=mysql_query($sql) or exit("Erro ao tentar consultar o DataBase");
if(mysql_affected_rows()!=0
){
echo "<p align='center'>Seu cadastro foi enviado com sucesso!<br />
	em instantes entraremos em contato.</p>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=home.php?lista&nome=$nome&produto=$produto&ddd=$ddd&telefone=$telefone&ddd2=$ddd2&telefone2=$telefone2&email=$email&correntista=$cep&vminimo=$vminimo&vmaximo=$vmaximo'"; 
}
?>
<?php }}?>      


</div>
</div>

<?php if (isset($_GET['lista'])){ ?>
<p><h2>Cadastro realizado com sucesso, em breve entraremos em contato!</h2></p>

<?php include "teste-email.php"; ?>

<p align="center" id="button-style2"><a href="home.php?form">Adquirir outro consórcio!</a></p>
<?php }?>

</div>
<section id="warp_slider">
  <div class="ribbon"></div>
	    <div class="slider-wrapper theme-default">

          <div id="slider" class="nivoSlider">

				<?php

                    $sqlConsulta = "SELECT * FROM slideshow";

                    $resultadosqlConsulta = mysql_query($sqlConsulta) or die ("Erro de conexão!");

                    while ($dados2 = mysql_fetch_array($resultadosqlConsulta)) {extract ($dados2);

                    

                    $imagem = $dados2['imagem'];

                ?>

                                <a href="#"><img src="img/slide/<?php echo $imagem; ?>"   /></a>

                <?php } ?>

          </div>
        </div>
      

</section><!--Final da section warp_slider-->    
<div id="featured-wrapper">
<div id="page-wrap">
		
		<div class="info-col">
		
    		
<a class="image superman">View Image</a>
<?php 
$consultad1="SELECT * FROM noticias WHERE id=1";
$resultadod1=mysql_query($consultad1) or exit("Erro ao consutar MySQL".mysql_error());
$rowd1=mysql_fetch_assoc($resultadod1);?>   		
    		<dl>
    		  <dt><?php echo $rowd1['titulo'];?></dt>
    		  <dd><?php echo $rowd1['texto'];?></dd>
    		  
<?php 
$consultad2="SELECT * FROM noticias WHERE id=2";
$resultadod2=mysql_query($consultad2) or exit("Erro ao consutar MySQL".mysql_error());
$rowd2=mysql_fetch_assoc($resultadod2);?> 
              
              <dt><?php echo $rowd2['titulo'];?></dt>
    		  <dd><?php echo $rowd2['texto'];?></dd>
              
<?php 
$consultad3="SELECT * FROM noticias WHERE id=3";
$resultadod3=mysql_query($consultad3) or exit("Erro ao consutar MySQL".mysql_error());
$rowd3=mysql_fetch_assoc($resultadod3);?> 
              
    		  <dt><?php echo $rowd3['titulo'];?></dt>
    		  <dd><?php echo $rowd3['texto'];?></dd>
    		  
<?php 
$consultad4="SELECT * FROM noticias WHERE id=4";
$resultadod4=mysql_query($consultad4) or exit("Erro ao consutar MySQL".mysql_error());
$rowd4=mysql_fetch_assoc($resultadod4);?> 
              
              <dt><?php echo $rowd4['titulo'];?></dt>
    		  <dd><?php echo $rowd4['texto'];?></dd>

<?php 
$consultad5="SELECT * FROM noticias WHERE id=5";
$resultadod5=mysql_query($consultad5) or exit("Erro ao consutar MySQL".mysql_error());
$rowd5=mysql_fetch_assoc($resultadod5);?> 
    		  
              <dt><?php echo $rowd5['titulo'];?></dt>
    		  <dd><?php echo $rowd5['texto'];?></dd>
    		</dl>
		
		</div>
		
        <div class="info-col">
        
        	
<a class="image batman">View Image</a>
        	
        	<dl>
            <?php 
$consultad6="SELECT * FROM noticias WHERE id=6";
$resultadod6=mysql_query($consultad6) or exit("Erro ao consutar MySQL".mysql_error());
$rowd6=mysql_fetch_assoc($resultadod6);?> 
        	  <dt><?php echo $rowd6['titulo'];?></dt>
        	  <dd><?php echo $rowd6['texto'];?></dd>
  
  <?php 
$consultad7="SELECT * FROM noticias WHERE id=7";
$resultadod7=mysql_query($consultad7) or exit("Erro ao consutar MySQL".mysql_error());
$rowd7=mysql_fetch_assoc($resultadod7);?> 
              <dt><?php echo $rowd7['titulo'];?></dt>
        	  <dd><?php echo $rowd7['texto'];?></dd>


  <?php 
$consultad8="SELECT * FROM noticias WHERE id=8";
$resultadod8=mysql_query($consultad8) or exit("Erro ao consutar MySQL".mysql_error());
$rowd8=mysql_fetch_assoc($resultadod8);?>         	  
              <dt><?php echo $rowd8['titulo'];?></dt>
        	  <dd><?php echo $rowd8['texto'];?></dd>

  <?php 
$consultad9="SELECT * FROM noticias WHERE id=9";
$resultadod9=mysql_query($consultad9) or exit("Erro ao consutar MySQL".mysql_error());
$rowd9=mysql_fetch_assoc($resultadod9);?>               
        	  <dt><?php echo $rowd9['titulo'];?></dt>
        	  <dd><?php echo $rowd9['texto'];?></dd>
               	
            </dl>
        
        </div>
		
		<div class="info-col">
		
    		
<a class="image aquaman">View Image</a>
    		
    		<dl>     
            <dt id="starter">1) Solicite contato:</dt>
<dd>
              <?php if(!isset($_GET['lista'])){?>
              <table align="center" width="100%" >
		<form name="form" action="" method="get">
        
        <tr><td height="33"></td><td></td></tr>
        
        <tr>
        <td width="36%">Nome:</td><td width="64%"><label><input type="text" name="nome" /></label></td>
        </tr>
        <tr>
        <td width="36%">Produto:</td><td width="64%">
         <?php
	$sql3 = "SELECT * FROM filiais";
	$resultado3 = mysql_query($sql3) or exit("Exit".mysql_error());	
?> 
        
        <select name="produto">
        <option value="Sonho">Qual é o seu Sonho?</option>
   <?php while ($linha3 = mysql_fetch_assoc($resultado3)){ ?>
    <option value="<?php echo $linha3['id']; ?>"><?php echo $linha3['titulo']; ?></option>
   <?php } ?>
        </select>
        <label><input type="hidden" name="status" value="enviar" /></label>
        </td>
        </tr>
        <tr>
        <td>Telefone:</td><td><label><input type="text" name="ddd" size="1" maxlength="2"/></label><label><input type="text" name="telefone" size="9" maxlength="9" OnKeyPress="formatar('#########', this)"/></label></td>
         </tr>
         <tr>
        <td>Celular:</td><td><label><input type="text" name="ddd2" size="1" maxlength="2"/></label><label><input type="text" name="telefone2" size="9" maxlength="9" OnKeyPress="formatar('#########', this)"/></label></td>
         </tr>
        <tr>
        <td height="25">E-mail:</td><td><label><input type="text" name="email" /></label></td>
        </tr>
        <tr>
        <td>Valor mínimo:</td><td><label><input type="text" name="vminimo" MAXLENGTH="13"  <?php if ($browser != 'Firefox' ) { ?>onKeydown="FormataMoeda(this,13,event)" onkeypress="return maskKeyPress(event)"<?php }?>/></label></td>
        </tr>
        <tr>
        <td>Valor máximo:</td><td><label><input type="text" name="vmaximo" MAXLENGTH="13"  <?php if ($browser != 'Firefox' ) { ?>onKeydown="FormataMoeda(this,13,event)" onkeypress="return maskKeyPress(event)"<?php }?>/></label></td>
        </tr>
        <tr>
        <td>Correntista BB:</td><td><label>
          <input type="radio" name="cep" value="sim" id="ops_1" />
            SIM</label>
          <label> &nbsp;
          <input type="radio" name="cep" value="nao" id="ops_2" />
            NÃO</label></td></tr>
        <tr>
        <td>Solicitar Consórcio:</td><td><label><input type="submit" name="Submit" value="Enviar" id="button-style" /></label></td>
        </tr>
        <tr><td height="27"></td><td></td></tr>
      </form>

</table>
              Ao se cadastrar</a> você será contactado por um de nossos consultores que lhe mostrará como realizar o seu sonho!
              <?php }else{
				 echo "Cadastro realizado com sucesso, em breve entraremos em contato!"; ?> 
				  <p align="center" id="cor2"><a href="home.php?form">Adquirir outro consórcio!</a></p>
                  
                  
				 <?php }?>
</dd>
 <?php 
$consultad11="SELECT * FROM noticias WHERE id=11";
$resultadod11=mysql_query($consultad11) or exit("Erro ao consutar MySQL".mysql_error());
$rowd11=mysql_fetch_assoc($resultadod11);?>               
        	  <dt><?php echo $rowd11['titulo'];?></dt>
        	  <dd><?php echo $rowd11['texto'];?></dd>

    		  
  <?php 
$consultad12="SELECT * FROM noticias WHERE id=12";
$resultadod12=mysql_query($consultad12) or exit("Erro ao consutar MySQL".mysql_error());
$rowd12=mysql_fetch_assoc($resultadod12);?>               
        	  <dt><?php echo $rowd12['titulo'];?></dt>
        	  <dd><?php echo $rowd12['texto'];?></dd>             
              
		
</div>
		
		<div class="info-col">
    		
            <a class="image spiderman">View Image</a>
    			<dl>
    		  <?php 
$consultad13="SELECT * FROM noticias WHERE id=13";
$resultadod13=mysql_query($consultad13) or exit("Erro ao consutar MySQL".mysql_error());
$rowd13=mysql_fetch_assoc($resultadod13);?>               
        	  <dt><?php echo $rowd13['titulo'];?></dt>
        	  <dd><?php echo $rowd13['texto'];?></dd>  
    		  
               <?php 
$consultad14="SELECT * FROM noticias WHERE id=14";
$resultadod14=mysql_query($consultad14) or exit("Erro ao consutar MySQL".mysql_error());
$rowd14=mysql_fetch_assoc($resultadod14);?>               
        	  <dt><?php echo $rowd14['titulo'];?></dt>
        	  <dd><?php echo $rowd14['texto'];?></dd>  
    		  
              
              <?php 
$consultad15="SELECT * FROM noticias WHERE id=15";
$resultadod15=mysql_query($consultad15) or exit("Erro ao consutar MySQL".mysql_error());
$rowd15=mysql_fetch_assoc($resultadod15);?>               
        	  <dt><?php echo $rowd15['titulo'];?></dt>
        	  <dd><?php echo $rowd15['texto'];?></dd>  
    		  
              <?php 
$consultad16="SELECT * FROM noticias WHERE id=16";
$resultadod16=mysql_query($consultad16) or exit("Erro ao consutar MySQL".mysql_error());
$rowd16=mysql_fetch_assoc($resultadod16);?>               
        	  <dt><?php echo $rowd16['titulo'];?></dt>
        	  <dd><?php echo $rowd16['texto'];?></dd>  
    		  
               <?php 
$consultad17="SELECT * FROM noticias WHERE id=17";
$resultadod17=mysql_query($consultad17) or exit("Erro ao consutar MySQL".mysql_error());
$rowd17=mysql_fetch_assoc($resultadod17);?>               
        	  <dt><?php echo $rowd17['titulo'];?></dt>
        	  <dd><?php echo $rowd17['texto'];?></dd>  
              
    		  <?php 
$consultad18="SELECT * FROM noticias WHERE id=18";
$resultadod18=mysql_query($consultad18) or exit("Erro ao consutar MySQL".mysql_error());
$rowd18=mysql_fetch_assoc($resultadod18);?>               
        	  <dt><?php echo $rowd18['titulo'];?></dt>
        	  <dd><?php echo $rowd18['texto'];?></dd>  
    		
		
		</div>
	<div class="info-col">
		
    		
<a class="image ironman">View Image</a>
    			<dl>
    		   <?php 
$consultad19="SELECT * FROM noticias WHERE id=19";
$resultadod19=mysql_query($consultad19) or exit("Erro ao consutar MySQL".mysql_error());
$rowd19=mysql_fetch_assoc($resultadod19);?>               
        	  <dt><?php echo $rowd19['titulo'];?></dt>
        	  <dd><?php echo $rowd19['texto'];?></dd>  
              
              
	   <?php 
$consultad20="SELECT * FROM noticias WHERE id=20";
$resultadod20=mysql_query($consultad20) or exit("Erro ao consutar MySQL".mysql_error());
$rowd20=mysql_fetch_assoc($resultadod20);?>               
        	  <dt><?php echo $rowd20['titulo'];?></dt>
        	  <dd><?php echo $rowd20['texto'];?></dd>  
 <?php 
$consultad21="SELECT * FROM noticias WHERE id=21";
$resultadod21=mysql_query($consultad21) or exit("Erro ao consutar MySQL".mysql_error());
$rowd21=mysql_fetch_assoc($resultadod21);?>               
        	  <dt><?php echo $rowd21['titulo'];?></dt>
        	  <dd><?php echo $rowd21['texto'];?></dd>               
		
		</div>
    	
	</div>

</div>
	
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="logos"><h2>Noticias sobre consórcio:</h2><br /><?php $consultal="SELECT * FROM empresa";
$resultadol=mysql_query($consultal) or exit("Erro ao consutar MySQL".mysql_error());
$rowl=mysql_fetch_assoc($resultadol);
echo $rowl['texto'];
?>

</div>
<div id="parceiros"></div>
<div id="footer-content" class="container">

<div id="fbox1">
			<div class="letra">Serviços</div>
			<p>
				<a href="http://www.telecomservice.com.br/">Telecom Service</a><br />
              <a href="http://www.bb.com.br/">Banco do Brasil</a></p>
  </div>
		<div id="fbox2">
			<div class="letra">Sobre</div>
	    <p>A Telecom Service, com mais de 10 anos de mercado, tornou-se referência na gestão de correspondentes e na venda de produtos bancários, como consórcio, crédito e financiamento imobiliário.</a> </div>
		<div id="fbox3">
			<div class="letra">Contato</div>
			<p>Entre em contato com a nossa Central de Atendimento: 0800-722-1451.</p>
		</div>
</div>
    </div>
<div id="footer">
  <p>Copyright (c) 2013 Telecom Service Todos os Direitos Reservados. Web Master: Daniel Soares.</p>
</div>
<div id="sidebar">		
	 <?php if(!isset($_GET['lista'])){?>
              <table width="100%" bgcolor="#fbde00" class="contato">
		<form name="form" action="" method="get">

        <tr>
          <td> 
          <p><img src="images/contato.png" width="160"/></p></td></tr>
        <tr>
        <td width="36%"><b>Nome:</b></td></tr><tr><td width="64%"><label><input type="text" name="nome" /></label></td>
        </tr>
        <tr>
        <td width="36%"><b>Produto:</b></td></tr><tr><td width="64%">
         <?php
	$sql3 = "SELECT * FROM filiais";
	$resultado3 = mysql_query($sql3) or exit("Exit".mysql_error());	
?> 
        
        <select name="produto">
        <option value="Sonho">Qual é o seu Sonho?</option>
   <?php while ($linha3 = mysql_fetch_assoc($resultado3)){ ?>
    <option value="<?php echo $linha3['id']; ?>"><?php echo $linha3['titulo']; ?></option>
   <?php } ?></select>
        <label><input type="hidden" name="status" value="enviar" /></label>
        </td>
        </tr>
        <tr>
        <td><b class="´preta">Telefone:</b></td></tr><tr><td><label><input type="text" name="ddd" size="1" maxlength="2"/></label><label><input type="text" name="telefone" size="9" maxlength="9" OnKeyPress="formatar('#########', this)"/></label></td>
         </tr>
         <tr>
        <td><b class="´preta">Celular:</b></td></tr><tr><td><label><input type="text" name="ddd2" size="1" maxlength="2"/></label><label><input type="text" name="telefone2" size="9" maxlength="9" OnKeyPress="formatar('#########', this)"/></label></td>
         </tr>
        <tr>
        <td height="25"><b>E-mail:</b></td><tr></tr><td><label><input type="text" name="email" /></label></td>
        </tr>
        <tr>
        <td><b>Valor mínimo:</b></td><tr></tr><td><label><input type="text" name="vminimo"MAXLENGTH="13"  <?php if ($browser != 'Firefox' ) { ?>onKeydown="FormataMoeda(this,13,event)" onkeypress="return maskKeyPress(event)"<?php }?> /></label></td>
        </tr>
        <tr>
        <td><b>Valor máximo:</b></td><tr></tr><td><label><input type="text" name="vmaximo" MAXLENGTH="13"  <?php if ($browser != 'Firefox' ) { ?>onKeydown="FormataMoeda(this,13,event)" onkeypress="return maskKeyPress(event)"<?php }?>/></label></td>
        </tr>
        <tr>
        <td><b>Correntista BB:</b></td><tr></tr><td><label>
          <input type="radio" name="cep" value="sim" id="ops_1" />
            <b>SIM</b></label>
          <label> &nbsp;
          <input type="radio" name="cep" value="nao" id="ops_2" />
            <b>NÃO</b></label></td></tr>
        <tr><td><label><input type="submit" name="Submit" value="Enviar" id="button-style" /></label></td></tr>
      </form>

</table><?php }?>
	</div>
</body>
</html>
