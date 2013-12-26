<?php
include"conexao.php";
$consulta="SELECT * FROM email WHERE dominio='principal'";
$resultado=mysql_query($consulta) or exit("Erro ao tentar consultar MYSQL".mysql_error());
$row=mysql_fetch_assoc($resultado);
 
$emaildestino = $row['email']; 

 
$produto = $rowc['usu_produto'];

$nproduto=$_GET['produto'];


$consultap="SELECT * FROM filiais WHERE id='".$nproduto."'";
$resultadop=mysql_query($consultap) or exit("Erro ao consutar MySQL".mysql_error());
$rowp=mysql_fetch_assoc($resultadop); 
 
/* Medida preventiva para evitar que outros domínios sejam remetente da sua mensagem. */
if (eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$|publiccloud.com.br$', $_SERVER[HTTP_HOST])) {
        $emailsender='email@dominio.com.br'; // Substitua essa linha pelo seu e-mail@seudominio
} else {
        $emailsender = "webmaster@" . $_SERVER[HTTP_HOST];
        //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',
        // Você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
}
 
/* Verifica qual éo sistema operacional do servidor para ajustar o cabeçalho de forma correta.  */
if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
else $quebra_linha = "\n"; //Se "nÃ£o for Windows"
 
$nome=$_GET['nome'];
$email=$_GET['email'];
$ddd=$_GET['ddd'];
$telefone=$_GET['telefone'];
$ddd2=$_GET['ddd2'];
$telefone2=$_GET['telefone2'];
$correntista=$_GET['correntista'];
$produto=$rowp['titulo'];
$vminimo=$_GET['vminimo'];
$vmaximo=$_GET['vmaximo'];

$dia=date('d');
$mes=date('m');
$ano=date('Y');

$dataAtual = "$dia/$mes/$ano";



$mensagemFinal=
"Nome do Cliente: $nome,<br>
Telefone: $ddd-$telefone,<br>
Celular: $ddd2-$telefone2,<br>
E-mail: $email,<br>
Correntista CC: $correntista,<br>
Produto: $produto,<br>
Valor mínimo: $vminimo,<br>
Valor Maximo: $vmaximo,<br>
Data cadastro: $dataAtual<br>
";

 
 
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = $nome;
$emailremetente    = 'daniel.soares@telecomservice.com.br';
$emaildestinatario = $emaildestino;
$assunto           = 'Envio de contato de consorcio';
$mensagem          = $mensagemFinal;
 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>Novo contato de Consorcio</P>
<P>Um novo cadastro no portal de consorcios foi identificado e direcionado para voce!</P>
<p><b><i>'.$mensagem.'</i></b></p>
<hr>
<P>Por favor nao responda esta mensagem!</P>'
;
 
 
/* Montando o cabeÃ§alho da mensagem */
$headers = "MIME-Version: 1.1" .$quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1" .$quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: " . $emailsender.$quebra_linha;
$headers .= "Reply-To: " . $emailremetente . $quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
 
/* Enviando a mensagem */
//É obrigatório o uso do parâmetro -r (concatenação do "From na linha de envio"), aqui na Locaweb:
if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
}
 
/* Mostrando na tela as informações enviadas por e-mail */
print "Nosso horário de funcionamento é de 09:00 às 18:00 horas de segunda a sexta-feira!"
?>
