<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="img/favicon.png" rel="shortcut icon">
<title>Pronamp Custeio</title>
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
	setTimeout("window.location='clientes_pronampcusteio.php'", 1);
}
</script>
</head>

<body onload="myFunction()">
<?php 
include("conexao.php");
error_reporting(0);
$id = $_GET['id'];
$queryA = mysql_query("SELECT * FROM clientes WHERE idCliente = '$id'");
while($linha = mysql_fetch_array($queryA)){
	$data = date('d/m/Y');
?>
<center>
<table width="1050" border="0" >

	<tr>
    	<th class="text-center font-tabela">DECLARAÇÃO SOBRE O USO DE RECURSOS CONTROLADOS<br /><br />
</th>
    </tr>
    <tr>
    	<td class="font-tabela"><?php echo $linha['cidade'];?>, <?php echo $data;?></td>
    </tr>
	<tr>
    	<td class="font-tabela"><?php echo $linha['agencia'];?></td>
    </tr>
	<tr>
    	<td class="font-tabela"><?php echo $linha['endereco'];?></td>
    </tr>
	<tr>
    	<td class="font-tabela"><?php echo $linha['cep'];?> <?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?><br /><br /><br /><br /></td>
    </tr>
	<tr>
    	<td class="font-tabela">Prezados Senhores,<br /><br /><br /><br />
</td>
    </tr>
    <tr>
    	<td class="font-tabela">&nbsp;&nbsp;&nbsp;&nbsp;Declaro(amos) não ter(mos) contratado financiamentos de custeio ao amparo de recursos controlados do MCR 6.2, do MCR 6.4 equalizado ou ao amparo do Pronamp, neste ano agrícola, em qualquer instituição financeira integrante do Sistema Nacional de Crédito Rural (SNCR), considerando operações individuais e participações em créditos grupais ou coletivos.<br /><br />

	&nbsp;&nbsp;&nbsp;&nbsp;Reconheço(ecemos) que declaração falsa implica a substituição, desde a data de formalização do crédito de custeio, da taxa de juros pactuada por taxa de mercado, sem prejuízo das demais sanções e penalidades previstas em Lei e no Manual do Crédito Rural.<br /><br />

	&nbsp;&nbsp;&nbsp;&nbsp;Estou(amos) ciente(s) de que, para esta safra, ao obter crédito do Pronamp não poderei(emos) contratar operação de crédito de custeio com recursos controlados do MCR 6.2 ou do MCR 6.4 equalizado.<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /></td>
    </tr>
    <tr class="text-center">
    	<td class="font-tabela">Atenciosamente,<br /><br />
</td>
    </tr>
    
    <tr class="text-center">
    	<td>________________________</td>
    </tr>
    
    
    
</table>
<table width="1050" border="0">
	<tr>
    	<th class="font-tabela text-bold text-center">DECLARAÇÃO SOBRE O USO DE RECURSOS CONTROLADOS<br /><br /></th>
    </tr>
    <tr>
    	<td class="font-tabela"><?php echo $linha['cidade'];?>, <?php echo $data;?></td>
    </tr>
	<tr>
    	<td class="font-tabela"><?php echo $linha['agencia'];?></td>
    </tr>
	<tr>
    	<td class="font-tabela"><?php echo $linha['endereco'];?></td>
    </tr>
	<tr>
    	<td class="font-tabela"><?php echo $linha['cep'];?> <?php echo $linha['cidade'];?>-<?php echo $linha['estado'];?><br /><br /><br /><br /></td>
    </tr>
	<tr>
    	<td class="font-tabela">Prezados Senhores,<br /><br /><br /><br /></td>
    </tr>
    <tr>
    	<td class="font-tabela">&nbsp;&nbsp;&nbsp;&nbsp;Declaro(amos) não ter(mos) contratado financiamentos de custeio ao amparo de recursos controlados do MCR 6.2 ou do MCR 6.4 equalizado, neste ano agrícola, em qualquer instituição financeira integrante do Sistema Nacional de Crédito Rural (SNCR), considerando operações individuais e participações em créditos grupais ou coletivos, mas ter(mos) contratado financiamentos de custeio ao amparo do Pronamp, tão somente das operações abaixo relacionadas, aí contempladas as operações individuais e coletivas, sob minha(nossa) responsabilidade:<br /><br /></td>
    </tr>
    <table class="font-tabela table" style="border: 0px transparent" border="0">
        <tr>
            <td class="text-center">Instituição</td>
            <td class="text-center">Produto</td>
            <td class="text-center">Data contratação</td>
            <td class="text-center">Finalidade(custeio agrícola ou pecuário)</td>
            <td class="text-center">Safra</td>
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
    <table class="font-tabela table">
    <tr>
    	<td class="font-tabela text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Reconheço(ecemos) que declaração falsa implica substituição, desde a data de formalização do crédito de custeio, da taxa de juros pactuada por taxa de mercado, sem prejuízo das demais sanções e penalidades previstas em Lei e no Manual do Crédito Rural.</td>
    </tr>
    <tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;Estou(amos) ciente(s) de que, para esta safra, ao obter crédito do Pronamp, não poderei(emos) contratar operação de crédito de custeio com recursos controlados do MCR 6.2 ou do MCR 6.4 equalizado.</td>
    </tr>
    <tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;Estou(amos) ciente(s) de que, para esta safra, ao obter crédito do Pronamp, não poderei(emos) contratar operação de crédito de custeio com recursos controlados do MCR 6.2 ou do MCR 6.4 equalizado.<br /><br /><br /><br /></td>
    </tr>
    <tr>
		<td class="text-center">Atenciosamente,<br /></td>
    </tr>
    <tr>
		<td class="text-center">________________________</td>
    </tr>
    </table>
<br /><br /><br /><br /><br /><br /><br /><br />

    <table class="table font-tabela">
    	<tr>
        
            <th class="text-center">DECLARAÇÃO<br /><br /></th>
        
        </tr>
        
        <tr>
        
            <td class="text-justify">&nbsp;&nbsp;&nbsp;Declaro(amos) para fins do disposto no inciso II do Art. 11 do Decreto  n.° 6.321, de 21.12.2007, não adquirir, intermediar, transportar ou  comercializar produto ou subproduto de origem animal ou vegetal produzido sobre área objeto de embargo lavrado nos termos do Artigo 16 do Decreto n.º 6.514 de 22/07/2008, ou outra norma legal que venha substitui-lo, OBRIGANDOME(NOS) a informar a esse Banco, impreterivelmente até a data da liberação do crédito aqui pleiteado, quaisquer fatos ou circunstâncias que possam ensejar o enquadramento nas disposições legais aqui mencionadas<br /><br /></td>
        
        </tr>
        
        <tr>
        
            <td class="text-right"><?php echo $linha['cidade'];?>, <?php echo $data;?></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">____________________________________________________</td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">Assinatura do titular ou do representante legal<br /><br /></td>
        
        </tr>
       
        <tr>
        
        	<td class="text-left">Nome: <?php echo $linha['nome'];?></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">CPF: <?php echo $linha['cpf'];?><br /><br /></td>
        
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
  
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

    
    
    <table class="font-tabela table">
    	<tr>
    	
        	<th class="text-center">DECLARAÇÃO PARA ENQUADRAMENTO DE FINANCIAMENTO NO PROAGRO<br /><br /><br /><br /></th>
        
    	</tr>
        
        <tr>
        
        	<td class="text-center">Declaro(amos) ser expressão da verdade as informações abaixo, para efeito de enquadramento no Programa de Garantia da Atividade Agropecuária - PROAGRO:<br /><br /><br /><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Nr. do financiamento:<br /><br /><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Valor do crédito:<br /><br /><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Valor dos recursos próprios a amparar:<br /><br /><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Valor de outras operações amparadas pelo PROAGRO<br /><br /><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Data da última indenização deferida há menos de 36 meses para o mesmo empreendimento:<br /><br /><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-left">Quantidade de enquadramentos nos últimos 60 meses para o mesmo empreendimento, sem pedidos de cobertura, após a última indenização:<br /><br /><br /></td>
        
        </tr>
        
      
        <tr>
        
        	<td class="text-center">Nome: <?php echo $linha['nome'];?><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">CPF: <?php echo $linha['cpf'];?><br /></td>
        
        </tr>
        
    </table> 
    
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

    <table class="font-tabela table">
        <tr>
        
        	<td class="text-right"><?php echo $linha['cidade'];?>, <?php echo $data;?></td>
        
        </tr>
        
        <tr>
        
        	<th class="text-center">Declaração de Não Contribuinte da Previdência Social<br /><br /><br /><br /></th>
        
        </tr>
        
        <tr>
        
        	<td class="text-justify"><p>&nbsp;&nbsp;&nbsp;&nbsp;Declaro(amo-nos), sob as penas da lei, que não sou(somos) responsável(eis) direto(s) pelo recolhimento de contribuições sobre minha(nossa) produção para a Previdência Social, eis que não comercializo(amos) meus(nossos) próprios produtos no varejo a consumidor pessoa física ou a adquirente domiciliado no exterior e, ainda, a outro produtor rural pessoa física ou segurado especial e que não possuo(ímos) trabalhadores a meu(nosso) serviço.<br /><br /></p></td>
        
        </tr>
        
        
        
        <tr>
        
        	<td class="text-center">Nome: <?php echo $linha['nome'];?><br /><br /><br /></td>
        
        </tr>
        
        <tr>
        
        	<td class="text-center">CPF: <?php echo $linha['cpf'];?><br /></td>
        
        </tr>
        
        
    </table>
    
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


	<table class="font-tabela table">
    	<tr>
    
    		<td class="text-right"><?php echo $linha['cidade'];?>, <?php echo $data;?></td>
        
        </tr>
        
    	<tr>
    
    		<th class="text-center">DECLARAÇÃO</th>
        
        </tr>
        
    	<tr>
    
    		<td class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Autorizo(a) <?php echo $linha['agencia'];?> a realizar seguros dos bens descritos na pertinente Cédula, dentro do contrato do Seguro Automático que mantém com um grupo de seguros nacionais, cujas condições são de meu inteiro conhecimento. Poderá o Banco realizar outros seguros de seu interesse para a mesma garantia, praticar todos os atos relacionados com a liquidação de sinistro, receber indenização e dar quitação, aplicando produto na amortização ou solução integral da dívida. Os prêmios e quaisquer outras despesas correrão por minha conta, podendo o Banco fornecedor, as Seguradoras e ao Instituto de Resseguros do(a) <?php echo $linha['agencia'];?>, os laudos das avaliações e das vistorias realizadas, bem como os lançamentos contábeis em conta gráfica, tudo sem qualquer responsabilidade por eventuais prejuízos que decorrem de omissão ou irregularidade na cobertura de riscos.<br /><br /></td>
        
        </tr>
        
        
    	<tr>
    
    		<td class="text-right">Nome: <?php echo $linha['nome'];?><br /><br /></td>
        
        </tr>
        
    	<tr>
    
    		<td class="text-right">CPF: <?php echo $linha['cpf'];?></td>
        
        </tr>
        
        
    	<tr>
    
    		<td class="text-right"><?php echo $linha['cidade'];?>, <?php echo $data;?><br /><br /></td>
        
        </tr>
        
    	<tr>
    
    		<th class="text-center">DECLARAÇÃO</th>
        
        </tr>
        
    	<tr>
    
    		<td class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;[  ] Manifesto [  ] Não Manifesto a minha adesão ao Seguro de Vida Produtor Rural, declarando ter pleno conhecimento das condições do Seguro. Solicito por ser meu interesse, os serviços do(a) <?php echo $linha['agencia'];?>, no sentido de contratar, com Seguradora Nacional de sua escolha, seguro para, em caso de morte, garantir a amortização ou quitação do saldo devedor do presente financiamento, entendido que o valor que ultrapassar o saldo devedor pertinente será pago ao cônjuge sobrevivente, na constância do casamento, ou na sua falta, aos herdeiros legais. O Prêmio e quaisquer outras despesas correrão por minha conta, ficando o Banco, desde logo, autorizado a levar a meu débito o valor de parcelas.<br /><br /></td>
        
        </tr>
        
        
    	<tr>
    
    		<td class="text-right">Nome: <?php echo $linha['nome'];?><br /><br /></td>
        
        </tr>
        
    	<tr>
    
    		<td class="text-right">CPF: <?php echo $linha['cpf'];?></td>
        
        </tr>
        
        
    </table>  	
<br /><br /><br /><br /><br /><br /><br />
<br />
<br />
<br />

	<table class="font-tabela table">
	    <tr>
    	
        	<td class="text-right"><?php echo $linha['cidade'];?>, <?php echo $data;?><br /><br /></td>
        
    	</tr>
        
	    <tr>
    	
        	<th class="text-right">REF.: DÉBITO EM CONTA DE DEPÓSITOS<br /><br /></th>
        
    	</tr>
        
	    <tr>
    	
        	<td class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Sr. Gerente,
&nbsp;&nbsp;&nbsp;&nbsp; Pela presente, autorizo esse Banco a promover a débitos de minha conta de depósitos nr. ______________, agência ________, os valores referentes à liquidação, prestações, encargos financeiros e acessórios, quando dos respectivos vencimentos/exigibilidades do financiamento acima indicado, que me foi concedido.<br /><br /></td>
        
    	</tr>
                
	    <tr>
    	
        	<td class="text-right">Nome: <?php echo $linha['nome'];?></td>
        
    	</tr>
        
	    <tr>
    	
        	<td class="text-right">CPF: <?php echo $linha['cpf'];?><br /><br /></td>
        
    	</tr>
        
	    <tr>
    	
        	<th class="text-center">DECLARAÇÃO:<br /><br /></th>
        
    	</tr>
        
        <tr>
    	
        	<td class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Declaro(amos) que conheço(cemos) e respeito(amos) o que determina a legislação que regulamenta o uso de Organismos Geneticamente Modificados (OGM), comprometendo-me(nos) a somente utilizar sementes autorizadas na forma da Lei.
	Estou(amos) ciente(s) das sanções civis, administrativas e criminais a que fico(amos) sujeito(s), caso comprovada falsa a presente declaração.<br /><br /></td>
        
    	</tr>
        
        
	    <tr>
    	
        	<td class="text-right">Nome: <?php echo $linha['nome'];?></td>
        
    	</tr>
        
	    <tr>
    	
        	<td class="text-right">CPF: <?php echo $linha['cpf'];?><br /><br /></td>
        
    	</tr>
        
        
    </table> 

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

	<table class="font-tabela table">
    
	    <tr>
    	
        	<th class="text-center">Declaração para operação de custeio agrícola conjugada com mecanismo de proteção de intempérie – seguro agrícola/faturamento<br /><br /></th>
        
    	</tr>
        
	    <tr>
    	
        	<td class="text-left">Local e data<br /><br /></td>
        
    	</tr>
        
	    <tr>
    	
        	<td class="text-left">Ao <?php echo $linha['agencia'];?></td>
        
    	</tr>
        
	    <tr>
    	
        	<td class="text-left">Agência <?php echo $linha['agencia'];?></td>
        
    	</tr>
        
	    <tr>
    	
        	<td class="text-left">Prezados Senhores,<br /><br /></td>
        
    	</tr>
        
	    <tr>
    	
        	<td class="text-justify">&nsub;&nsub;&nsub;&nsub;Estou(amos) ciente(s) de que a vinculação de seguro agrícola às operações de custeio agrícola tem previsão objetiva nos itens 1 e 2 do Capítulo 2 - Seção 3 do Manual de Crédito Rural do(a) <?php echo $linha['agencia'];?>, que dispõe que o seguro rural constitui espécie de garantia do crédito rural e que sua contratação é de livre convenção entre financiador e financiado.<br /><br /></td>
        
    	</tr>
        
	    <tr>
    	
        	<td class="text-justify">2.	Declaro(amos) que essa instituição financeira (me)nos facultou contratar o seguro agrícola em seguradora de minha(nossa) livre escolha, com cobertura, no mínimo, de valor igual ao orçado no financiamento e indicação do(a) <?php echo $linha['agencia'];?> como beneficiário da indenização.<br /><br /></td>
        
    	</tr>
        
	    <tr>
    	
        	<td class="text-justify">3.	Fazemos opção pelo seguro agrícola/faturamento desse Banco, ao tempo em que autorizo(amos) a cobrança do valor integral do prêmio do referido seguro, sendo 30% a débito de minha(nossa) conta corrente e 70% a débito da conta gráfica do financiamento de minha (nossa) responsabilidade.<br /><br /></td>
        
    	</tr>
        
	    <tr>
    	
        	<td class="text-center">(assinatura e identificação do produtor)<br /><br /></td>
        
    	</tr>
        
	    <tr>
    	
        	<td class="text-justify">Obs: No caso de seguro agrícola contratado fora do Banco, conforme prerrogativa constante no parágrafo 2, exclua o parágrafo 3. <br /><br /></td>
        
    	</tr>
    
    
    </table>

<?php } ?>

</table>

</center>

</body>
</html>
