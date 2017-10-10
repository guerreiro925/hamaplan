<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="img/favicon.png" rel="shortcut icon">
<title>Pronaf Custeio</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/custom.min.css" rel="stylesheet">
<?php include ("session.php");?>
<style>
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
	border: 0px transparent;	
}</style>
<script>
function myFunction() {
    window.print();
	setTimeout("window.location='clientes_pronafcusteio.php'", 1);
}
</script>
</head>

<body onload="myFunction()">
<?php 
include("conexao.php");
error_reporting(0);
$id = $_GET['id'];
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$dataExtenso = '%d de %B de %Y';


$queryA = mysql_query("SELECT * FROM clientes WHERE idCliente = '$id'");
while($linha = mysql_fetch_array($queryA)){
	$data = date('d/m/Y');
	
?>
<center>
<table width="1050" border="0" >
	<tr>
    	<td class=" font-tabela">DATA: <?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?>
</td>
    </tr>
	<tr>
    	<td class="font-tabela">NOME: <?php echo $linha['nome'];?></td>
    </tr>
	<tr>
    	<td class="font-tabela">CPF: <?php echo $linha['cpf'];?></td>
    </tr>
    
    
    
</table>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<!----------------------------------- SEGUNDA FOLHA ------------------------------------->

    <table class="table font-tabela">
    	<tr>
        
            <th class="text-center">DECLARAÇÃO<br /><br /></th>
        
        </tr>
        
        <tr>
        
            <td class="text-justify">&nbsp;&nbsp;&nbsp;Declaro(amos) para fins do disposto no inciso II do Art. 11 do Decreto  n.° 6.321, de 21.12.2007, não adquirir, intermediar, transportar ou  comercializar produto ou subproduto de origem animal ou vegetal produzido sobre área objeto de embargo lavrado nos termos do Artigo 16 do Decreto n.º 6.514 de 22/07/2008, ou outra norma legal que venha substitui-lo, OBRIGANDOME(NOS) a informar a esse Banco, impreterivelmente até a data da liberação do crédito aqui pleiteado, quaisquer fatos ou circunstâncias que possam ensejar o enquadramento nas disposições legais aqui mencionadas.<br /><br /></td>
        
        </tr>
        
        <tr>
        
            <td class="text-right"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">____________________________________________________</td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">Assinatura do titular ou do representante legal<br /><br /></td>
        
        </tr>
       
        <tr>
        
        	<td class="text-left">Nome:<?php echo $linha['nome'];?></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">CPF:<?php echo $linha['cpf'];?><br /><br /></td>
        
        </tr>
        
        <tr>
        
        	<th class="text-center">DADOS DA OPERAÇÃO</th>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">nr__________________</td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Valor do crédito R$_____________</td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Data da liberação ___/___/___</td>
        
        </tr>
    </table>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />



<!----------------------------------- TERCEIRA  FOLHA ------------------------------------->

    <table class="table font-tabela">
        
        <tr>
        
            <td class="text-center"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?></td>
        
        </tr>
        
        <tr>
        
        	<th class="text-center">DECLARAÇÃO PARA ENQUADRAMENTO DE FINANCIAMENTO NO PROAGRO </th>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Declaro(amos) ser expressão da verdade as informações abaixo, para efeito de enquadramento no Programa de Garantia da Atividade Agropecuária - PROAGRO: <br /><br /></td>
        
        </tr>
       
        <tr>
        
        	<td class="text-left">Nr. do financiamento:</td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Valor do crédito:</td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Valor dos recursos próprios a amparar:</td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Valor de outras operações amparadas pelo PROAGRO: </td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Data da última indenização deferida há menos de 36 meses para o mesmo empreendimento: </td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Quantidade de enquadramentos nos últimos 60 meses para o mesmo empreendimento, sem pedidos de cobertura, após a última indenização: </td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">----------------------------------------------------</td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">NOME: <?php echo $linha['nome'];?><br /><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">CPF: <?php echo $linha['cpf'];?><br /><br /></td>
        
        </tr>
        
    </table>
  
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<!----------------------------------- QUARTA FOLHA ------------------------------------->
    
    
    <table class="font-tabela table">
    	<tr>
    	
        	<td class="text-right"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?><br /><br /></td>
        
    	</tr>
        
        <tr>
        
        	<th class="text-center">Declaração de Não Contribuinte da Previdência Social<br /><br /></th>
        
        </tr>
        
        <tr>
        
            <td class="text-justify">&nbsp;&nbsp;&nbsp;	Declaro(amo-nos), sob as penas da lei, que não sou(somos) responsável(eis) direto(s) pelo recolhimento de contribuições sobre minha(nossa) produção para a Previdência Social, eis que não comercializo(amos) meus(nossos) próprios produtos no varejo a consumidor pessoa física ou a adquirente domiciliado no exterior e, ainda, a outro produtor rural pessoa física ou segurado especial e que não possuo(ímos) trabalhadores a meu(nosso) serviço.<br /><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">Nome:<?php echo $linha['nome'];?><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">CPF:<?php echo $linha['cpf'];?><br /></td>
        
        </tr>
        
        
    </table> 
    
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


<!----------------------------------- QUINTA FOLHA ------------------------------------->
   
   
    <table class="font-tabela table">
        <tr>
        
        	<td class="text-right"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?></td>
        
        </tr>
        
        <tr>
        
        	<th class="text-center">DECLARAÇÃO<br /><br /></th>
        
        </tr>
        
        <tr>
        
        	<td class="text-justify"><p>&nbsp;&nbsp;&nbsp;&nbsp;Autorizo o Banco do Brasil S/A a realizar seguros dos bens descritos na pertinente Cédula, dentro do contrato do Seguro Automático que mantém com um grupo de seguros nacionais, cujas condições são de meu inteiro conhecimento. Poderá o Banco realizar outros seguros de seu interesse para a mesma garantia, praticar todos os atos relacionados com a liquidação de sinistro, receber indenização e dar quitação, aplicando produto na amortização ou solução integral da dívida. Os prêmios e quaisquer outras despesas correrão por minha conta, podendo o Banco fornecedor, as Seguradoras e ao Instituto de Resseguros do Banco do Brasil, os laudos das avaliações e das vistorias realizadas, bem como os lançamentos contábeis em conta gráfica, tudo sem qualquer responsabilidade por eventuais prejuízos que decorrem de omissão ou irregularidade na cobertura de riscos.<br /></p></td>
        
        </tr>
        
        
        
        <tr>
        
        	<td class="text-right">Nome:<?php echo $linha['nome'];?><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-right">CPF:<?php echo $linha['cpf'];?><br /></td>
        
        </tr>
		<tr>
        
        	<td class="text-center">----------------------------------------------------------------------------------------------------------------------------</td>
        
        </tr>
        
		<tr>
        
        	<td class="text-right"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?></td>
        
        </tr>
		
		<tr>
        
        	<th class="text-center">DECLARAÇÃO<br /><br /></th>
        
        </tr>
		
		<tr>
        
        	<td class="text-justify"><p>&nbsp;&nbsp;&nbsp;&nbsp;[  ] Manifesto [  ] Não Manifesto a minha adesão ao Seguro de Vida Produtor Rural, declarando ter pleno conhecimento das condições do Seguro. Solicito por ser meu interesse, os serviços do Banco do Brasil S/A, no sentido de contratar, com Seguradora Nacional de sua escolha, seguro para, em caso de morte, garantir a amortização ou quitação do saldo devedor do presente financiamento, entendido que o valor que ultrapassar o saldo devedor pertinente será pago ao cônjuge sobrevivente, na constância do casamento, ou na sua falta, aos herdeiros legais. O Prêmio e quaisquer outras despesas correrão por minha conta, ficando o Banco, desde logo, autorizado a levar a meu débito o valor de parcelas.<br /></p></td>
        
        </tr>
        
    </table>
    
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<!----------------------------------- SEXTA FOLHA ------------------------------------->

	<table class="font-tabela table">
	
		<tr>
        
        	<td class="text-right">Nome:<?php echo $linha['nome'];?></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-right">CPF:<?php echo $linha['cpf'];?><br><br><br /></td>
        
        </tr>
	
    	<tr>
    
    		<td class="text-right"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo $data;?></td>
        
        </tr>
        
    	<tr>
    
    		<th class="text-center">REF.: DÉBITO EM CONTA DE DEPÓSITOS</th>
        
        </tr>
        
    	<tr>
    
    		<td class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Sr. Gerente, <br>&nbsp;&nbsp;&nbsp;&nbsp;Pela presente, autorizo esse Banco a promover a débitos de minha conta de depósitos nr. ______________, agência ________, os valores referentes à liquidação, prestações, encargos financeiros e acessórios, quando dos respectivos vencimentos/exigibilidades do financiamento acima indicado, que me foi concedido.<br><br></td>
        
        </tr>
		
		<tr>
        
        	<td class="text-right">Nome:<?php echo $linha['nome'];?></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-right">CPF:<?php echo $linha['cpf'];?><br /></td>
        
        </tr>
        
		<tr>
			
			<td class="text-center">----------------------------------------------------------------------------------------------------------------------------</td>
    	
		</tr>
		
		<tr>
    
    		<td class="text-right"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo $data;?></td>
        
        </tr>
		
		<tr>
    
    		<th class="text-center">DECLARAÇÃO</th>
        
        </tr>
		
		<tr>
    
    		<td class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Declaro(amos) que conheço(cemos) e respeito(amos) o que determina a legislação que regulamenta o uso de Organismos Geneticamente Modificados (OGM), comprometendo-me(nos) a somente utilizar sementes autorizadas na forma da Lei.<br>
&nbsp;&nbsp;&nbsp;&nbsp;Estou(amos) ciente(s) das sanções civis, administrativas e criminais a que fico(amos) sujeito(s), caso comprovada falsa a presente declaração.<br><br></td>
        
        </tr>
		
		<tr>
        
        	<td class="text-right">Nome:<?php echo $linha['nome'];?></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-right">CPF:<?php echo $linha['cpf'];?><br /></td>
        
        </tr>
	</table>		
<!----------------------------------- SÉTIMA FOLHA ------------------------------------->
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	<table class="table font-tabela">    
    	<tr>
    
    		<td class="text-right"><?php echo $linha['cidade'];?>, <?php echo $data;?><br /><br /></td>
        
        </tr>
        
    	<tr>
    
    		<td class="text-center">Prezados Senhores,<br /><br /></td>
        
        </tr>
        
    	<tr>
    
    		<td class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Declaro(amos), sob as penas da lei, que não sou(somos) beneficiário(s) de crédito(s) de CUSTEIO ao amparo de recursos controlados, inclusive PRONAF via Banco Nacional de Desenvolvimento Econômico e Social - BNDES e/ou viA Fundos Constitucionais de Financiamento do Centro-Oeste, do Nordeste e do Norte, neste ano agrícola, junto a qualquer instituição(ões) financeira(s).<br /><br /></td>
        
        </tr>
        
        
    	<tr>
    
    		<td class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Reconheço(ecemos) que declaração falsa implica substituição, desde a data de formalização do crédito, da taxa de juros pactuada por taxa de mercado, sem prejuízo das demais sanções e penalidades previstas em Lei e no Manual do Crédito Rural.<br /><br /></td>
        
        </tr>
        
    	<tr>
    
    		<td class="text-center">Atenciosamente,</td>
        
        </tr>
		
		<tr>
        
        	<td class="text-center">Nome:<?php echo $linha['nome'];?></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">CPF:<?php echo $linha['cpf'];?><br /></td>
        
        </tr>
        
        
    </table>  	

<?php } ?>

</table>

</center>

</body>
</html>
