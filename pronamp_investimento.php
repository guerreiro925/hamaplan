<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="img/favicon.png" rel="shortcut icon">
<title>Pronamp Investimento</title>
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
	setTimeout("window.location='clientes_pronampinvestimento.php'", 1);
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
    	<td class="text-left font-tabela">DATA: <?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?>
</td>
    </tr>
	<tr>
    	<td class="font-tabela">NOME: <?php echo $linha['nome'];?></td>
    </tr>
	<tr>
    	<td class="font-tabela">CPF: <?php echo $linha['cpf'];?></td>
    </tr>
    
    
    
</table>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<!----------------------------------- SEGUNDA FOLHA ------------------------------------->

    <table class="table font-tabela">
    	<tr>
        
            <th class="text-center">Declaração sobre dívidas renegociadas<br /><br /></th>
        
        </tr>
        
		<tr>
        
            <td class="text-right"><?php echo $linha['cidade'];?>, <?php echo $data;?></td>
        
        </tr>
		
		<tr>
        
            <td class="text-left">Sr. Gerente,<br /><br /></td>
        
        </tr>

		<tr>
        
            <td class="text-left"><?php echo $linha['agencia'];?><br><?php echo $linha['endereco'];?><br><?php echo $linha['cep'];?>  <?php echo $linha['cidade'];?> - <?php echo $linha['estado'];?><br /><br /></td>
        
        </tr>
		
		<tr>
        
            <td class="text-left">Prezados Senhores,<br /><br /></td>
        
        </tr>
		
        <tr>
        
            <td class="text-justify">Declaro, sob as penas da lei, que não mantenho dívidas de investimento prorrogadas, em todo o Sistema Nacional de Crédito Rural (SNCR), com base nos artigos 15, 29 e 30 da Lei 11.775, de 17/09/2008, nos artigos 2º da Resolução CMN/Bacen nº 3575, 4º da Resolução CMN/Bacen nº 3578, 1º e 4º da Resolução CMN/Bacen nº 3597 e 2º da Resolução CMN/Bacen nº 3602.<br /><br /></td>
        
        </tr>
           
        <tr>
        
        	<td class="text-left">Atenciosamente,<br /><br /></td>
        
        </tr>
		
		<tr>
        
        	<td class="text-center">Nome:<?php echo $linha['nome'];?></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">CPF:<?php echo $linha['cpf'];?><br><br></td>
        
        </tr>
        
    </table>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />



<!----------------------------------- TERCEIRA  FOLHA ------------------------------------->

    <table class="table font-tabela">
        
        <tr>
        
        	<th class="text-center">DECLARAÇÃO</th>
        
        </tr>
        
        <tr>
        
        	<td class="text-justify">Declaro(amos) para fins do disposto no inciso II do Art. 11 do Decreto  n.° 6.321, de 21.12.2007, não adquirir, intermediar, transportar ou  comercializar produto ou subproduto de origem animal ou vegetal produzido sobre área objeto de embargo lavrado nos termos do Artigo 16 do Decreto n.º 6.514 de 22/07/2008, ou outra norma legal que venha substitui-lo, OBRIGANDOME(NOS) a informar a esse Banco, impreterivelmente até a data da liberação do crédito aqui pleiteado, quaisquer fatos ou circunstâncias que possam ensejar o enquadramento nas disposições legais aqui mencionadas.<br /><br /></td>
        
        </tr>
		
		        
        <tr>
        
            <td class="text-right"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?></td>
        
        </tr>
       
        <tr>
        
        	<td class="text-center">_______________________________________________</td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">Assinatura do titular ou do representante legal<br><br></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Nome:<?php echo $linha['nome'];?></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">CPF:<?php echo $linha['cpf'];?><br><br></td>
        
        </tr>
        
        <tr>
        
        	<th class="text-center">DADOS DA OPERAÇÃO<br><br></th>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">nr:__________________</td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Valor do crédito R$:______________</td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Data da liberação: ___/___/___</td>
        
        </tr>
        
    </table>
  
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<!----------------------------------- QUARTA FOLHA ------------------------------------->
    
    
    <table class="font-tabela table">
    	<tr>
        
            <td class="text-right"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?></td>
        
        </tr>
        
        <tr>
        
        	<th class="text-center">DECLARAÇÃO<br /><br /></th>
        
        </tr>
        
        <tr>
        
            <td class="text-justify">&nbsp;&nbsp;&nbsp;	Declaro sob as penas da lei que sou contribuinte do ICMS, com emissão de nota do produtor.<br /><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-right">Nome:<?php echo $linha['nome'];?><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-right">CPF:<?php echo $linha['cpf'];?><br /></td>
        
        </tr>
        
        
    </table> 
    
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


<!----------------------------------- QUINTA FOLHA ------------------------------------->
   
   
    <table class="font-tabela table">

        
        <tr>
        
        	<th class="text-center">Declaração de Não Contribuinte da Previdência Social<br /><br /></th>
        
        </tr>
        
        <tr>
        
        	<td class="text-justify"><p>&nbsp;&nbsp;&nbsp;&nbsp;Declaro(amo-nos), sob as penas da lei, que não sou(somos) responsável(eis) direto(s) pelo recolhimento de contribuições sobre minha(nossa) produção para a Previdência Social, eis que não comercializo(amos) meus(nossos) próprios produtos no varejo a consumidor pessoa física ou a adquirente domiciliado no exterior e, ainda, a outro produtor rural pessoa física ou segurado especial e que não possuo(ímos) trabalhadores a meu(nosso) serviço.<br /></p></td>
        
        </tr>
        
		<tr>
        
        	<td class="text-left"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?></td>
        
        </tr>
        
        
        <tr>
        
        	<td class="text-center">Nome:<?php echo $linha['nome'];?><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">CPF:<?php echo $linha['cpf'];?><br /></td>
        
        </tr>
        
    </table>
    
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<!----------------------------------- SEXTA FOLHA ------------------------------------->

	<table class="font-tabela table">
	
		<tr>
        
        	<td class="text-right"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?></td>
        
        </tr>
        
        <tr>
        
        	<th class="text-center">Declaração de Não Contribuinte da Previdência Social<br /><br /></th>
        
        </tr>
        
        <tr>
        
        	<td class="text-justify"><p>&nbsp;&nbsp;&nbsp;&nbsp;Declaro(amo-nos), sob as penas da lei, que não sou(somos) responsável(eis) direto(s) pelo recolhimento de contribuições sobre minha(nossa) produção para a Previdência Social, eis que não comercializo(amos) meus(nossos) próprios produtos no varejo a consumidor pessoa física ou a adquirente domiciliado no exterior e, ainda, a outro produtor rural pessoa física ou segurado especial e que não possuo(ímos) trabalhadores a meu(nosso) serviço.<br /></p></td>
        
        </tr>
        
        
        
        <tr>
        
        	<td class="text-center">Nome:<?php echo $linha['nome'];?><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">CPF:<?php echo $linha['cpf'];?><br /></td>
        
        </tr>
		
		
	</table>		
<!----------------------------------- SÉTIMA FOLHA ------------------------------------->
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	<table class="table font-tabela">    
    	<tr>
        
        	<td class="text-right"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?><br /><br /></td>
        
        </tr>
        
        <tr>
        
        	<th class="text-center">DECLARAÇÃO<br><br /></th>
        
        </tr>
	
    	<tr>
    
    		<td class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Autorizo o(a) <?php echo $linha['agencia'];?> a realizar seguros dos bens descritos na pertinente Cédula, dentro do contrato do Seguro Automático que mantém com um grupo de seguros nacionais, cujas condições são de meu inteiro conhecimento. Poderá o Banco realizar outros seguros de seu interesse para a mesma garantia, praticar todos os atos relacionados com a liquidação de sinistro, receber indenização e dar quitação, aplicando produto na amortização ou solução integral da dívida. Os prêmios e quaisquer outras despesas correrão por minha conta, podendo o Banco fornecedor, as Seguradoras e ao Instituto de Resseguros do(a) <?php echo $linha['agencia'];?>, os laudos das avaliações e das vistorias realizadas, bem como os lançamentos contábeis em conta gráfica, tudo sem qualquer responsabilidade por eventuais prejuízos que decorrem de omissão ou irregularidade na cobertura de riscos.</td>
        
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
        
        	<td class="text-right"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?><br /><br /></td>
        
        </tr>

		
		<tr>
        
        	<th class="text-center">DECLARAÇÃO</th>
        
        </tr>
        
        <tr>
        
        	<td class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;[  ] Manifesto [  ] Não Manifesto a minha adesão ao Seguro de Vida Produtor Rural, declarando ter pleno conhecimento das condições do Seguro. Solicito por ser meu interesse, os serviços do(a) <?php echo $linha['agencia'];?>, no sentido de contratar, com Seguradora Nacional de sua escolha, seguro para, em caso de morte, garantir a amortização ou quitação do saldo devedor do presente financiamento, entendido que o valor que ultrapassar o saldo devedor pertinente será pago ao cônjuge sobrevivente, na constância do casamento, ou na sua falta, aos herdeiros legais. O Prêmio e quaisquer outras despesas correrão por minha conta, ficando o Banco, desde logo, autorizado a levar a meu débito o valor de parcelas.</td>
        
        </tr>
		
        
        
    </table> 

<!----------------------------------- OITAVA FOLHA ------------------------------------->	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<table class="table font-tabela">
		
		<tr>
        
        	<td class="text-right">Nome:<?php echo $linha['nome'];?><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-right">CPF:<?php echo $linha['cpf'];?><br /></td>
        
        </tr>
        
    	<tr>
        
        	<td class="text-right"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?><br /><br /></td>
        
        </tr>
        
    	<tr>
    
    		<th class="text-center">REF.: DÉBITO EM CONTA DE DEPÓSITOS<br /><br /></th>
        
        </tr>
        
        
    	<tr>
    
    		<td class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Sr. Gerente,<br /><br /></td>
        
        </tr>
        
    	<tr>
    
    		<td class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Pela presente, autorizo esse Banco a promover a débitos de minha conta de depósitos nr. ______________, agência ________, os valores referentes à liquidação, prestações, encargos financeiros e acessórios, quando dos respectivos vencimentos/exigibilidades do financiamento acima indicado, que me foi concedido.</td>
        
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
        
        	<td class="text-right"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?><br /><br /></td>
        
        </tr>
		
		<tr>
    
    		<th class="text-center">DECLARAÇÃO<br /><br /></th>
        
        </tr>
	
		<tr>
    
    		<td class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Declaro(amos) que conheço(cemos) e respeito(amos) o que determina a legislação que regulamenta o uso de Organismos Geneticamente Modificados (OGM), comprometendo-me(nos) a somente utilizar sementes autorizadas na forma da Lei.
	Estou(amos) ciente(s) das sanções civis, administrativas e criminais a que fico(amos) sujeito(s), caso comprovada falsa a presente declaração.</td>
        
        </tr>
		
		<tr>
        
        	<td class="text-right">Nome:<?php echo $linha['nome'];?></td>
        
        </tr>
        

		
        <tr>
        
        	<td class="text-right">CPF:<?php echo $linha['cpf'];?><br /></td>
        
        </tr>
		
	</table>
	<!----------------------------------- NONA FOLHA ------------------------------------->	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<table class="table font-tabela">
		
		<tr>
		
			<th class="text-center">DECLARAÇÃO DE RECEBIMENTO DO BEM<br /><br /></th>
		
		</tr>
		
		<tr>
		
			<td class="text-left">Ao</td>
		
		</tr>
		
		<tr>
		
			<td class="text-left"><?php echo $linha['agencia'];?>. </td>
		
		</tr> 
		
		<tr>
		
			<td class="text-left">Agencia: <?php echo $linha['numero'];?>  <?php echo $linha['cidade'];?> - <?php echo $linha['estado'];?></td>
		
		</tr>
		
		<tr>
		
			<td class="text-left" style="text-decoration: underline">No caso de máquinas, equipamentos, implementos e veículos</td>
		
		</tr>
		
		<tr>
    
    		<td class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Na condição de primeiro usuário, declaro  o  recebimento, nesta data,  do ................................., nr chassi/série ...............................  ,  discriminados  na(s)  nota(s) fiscal(is) n.º ..............     , conforme  especificação  do(s)  orçamento(s),  estando  os bens novos e em condições para o seu perfeito funcionamento, e desde já autorizo o pagamento dos produtos diretamente na conta de depósitos do fornecedor.<br><br> </td>
        
        </tr>
		
		<tr>
        
        	<td class="text-left"><?php echo $linha['cidade'];?>, <?php echo strftime($dataExtenso);?><br /><br /></td>
        
        </tr>
		
		<tr>
        
        	<td class="text-left">_______________________________<br /><br /></td>
        
        </tr>
		
	</table>

	<!----------------------------------- DÉCIMA FOLHA ------------------------------------->
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<table class="table font-tabela">
		
		<tr>
		
			<th class="text-center">DECLARAÇÃO DE RECEBIMENTO DO BEM<br /><br /></th>
		
		</tr>
		
		<tr>
		
			<td class="text-left">Ao</td>
		
		</tr>
		
		<tr>
		
			<td class="text-left"><?php echo $linha['agencia'];?>. </td>
		
		</tr> 
		
		<tr>
		
			<td class="text-left">Agencia: 0400-6  <?php echo $linha['cidade'];?> - <?php echo $linha['estado'];?></td>
		
		</tr>
		
		<tr>
		
			<td class="text-left" style="text-decoration: underline">Nos demais casos</td>
		
		</tr>
		
		<tr>
    
    		<td class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Declaro que recebi ...(os animais, as matrizes, ou o que for).......... financiado(s) através da Cédula Rural ....................................................................... (ou o que for) nº....... .../.................., conforme projeto elaborado pelo técnico .........., em .../.../..., no valor de R$ ........., e desde já, mediante apresentação da nota fiscal ao <?php echo $linha['agencia'];?>, autorizo o pagamento dos referidos produtos:<br>( ) diretamente em minha conta de depósitos.<br>
( ) na conta de depósitos do fornecedor/vendedor. </td>
        
        </tr>
		
		<tr>
        
        	<td class="text-left"><?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?>, <?php echo strftime($dataExtenso);?><br /><br /></td>
        
        </tr>
		
		<tr>
        
        	<td class="text-left">Nome:<?php echo $linha['nome'];?></td>
        
        </tr>
        

		
        <tr>
        
        	<td class="text-left">CPF:<?php echo $linha['cpf'];?><br /></td>
        
        </tr>
		
	</table>
	
<!----------------------------------- DÉCIMA PRIMEIRA FOLHA ------------------------------------->
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<table class="table font-tabela">
	
		<tr>
			<th class="text-center"> DECLARAÇÃO SOBRE O USO DE RECURSOS CONTROLADOS<br><br></th>
		</tr>
		
		<tr>
        
        	<td class="text-left"><?php echo $linha['cidade'];?>, <?php echo strftime($dataExtenso);?><br /><br /></td>
        
        </tr>
		
		<tr>
		
    	<td class="font-tabela text-left"><?php echo $linha['agencia'];?></td>
		
		</tr>
		
		<tr>
    	
		<td class="font-tabela text-left"><?php echo $linha['endereco'];?></td>
		
		</tr>
		
		<tr>
    	
		<td class="font-tabela text-left"><?php echo $linha['cep'];?> <?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?><br /><br /></td>
		
		</tr>
		
		<tr>
		
			<td class="font-tabela text-left">Prezados Senhores,<br /><br /></td>
		
		</tr>
		
		<tr>
		
			<th class="font-tabela text-center" style="font-size: 21px">Declaro(amos), sob as penas da lei, que:</td>
		
		</tr>
		
		<tr>
		
			<td class="font-tabela text-justify">&nbsp;&nbsp;&nbsp;&nbsp;(   ) não sou(somos) beneficiário(s) de crédito(s) “em ser” de INVESTIMENTO AGROPECUÁRIO contratado com recursos controlados, incluindo todas as instituições financeiras integrantes do Sistema Nacional de Crédito Rural, considerando operações individuais e participações em créditos grupais ou coletivos;</td>
		
		</tr>
		
		<tr>
		
			<td class="font-tabela text-justify">&nbsp;&nbsp;&nbsp;&nbsp;(   ) sou(somos) beneficiário(s) de crédito(s) “em ser” de INVESTIMENTO AGROPECUÁRIO contratado com recursos controlados, incluindo todas as instituições financeiras integrantes do Sistema Nacional de Crédito Rural, considerando operações individuais e participações em créditos grupais ou coletivos, no valor de R$____________________________________, conforme descrito abaixo:</td>
			
		</tr>
		
		<table class="font-tabela table" style="border: 0px transparent" border="0">
			<tr>
				<td class="text-center">Instituição</td>
				<td class="text-center">Linha de Crédito</td>
				<td class="text-center">Data contratação</td>
				<td class="text-center">Finalidade</td>
				<td class="text-center">Ano Agrícola</td>
				<td class="text-center">Valor</td>
			</tr>
			
			<tr>
				<td class="text-center">_________</td>
				<td class="text-center">_________</td>
				<td class="text-center">___________</td>
				<td class="text-center">__________________</td>
				<td class="text-center">_________</td>
				<td class="text-center">_________</td>
			</tr>
		</table>
		
		<tr>
		
			<td class="font-tabela text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Reconheço(cemos) que a declaração falsa implica a desclassificação da operação de crédito rural e, ainda, a substituição da taxa de juros pactuada por taxa de mercado, desde a data da contratação, sem prejuízo das demais sanções e penalidades previstas em lei e no Manual do Crédito Rural.</td>
			
		</tr>Atenciosamente,
		
		<tr>
		
			<td class="font-tabela text-left">Atenciosamente,</td>
		
		</tr>
	
	</table>

<?php } ?>

</table>

</center>

</body>
</html>
