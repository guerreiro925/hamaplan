
<?php 
include("conexao.php");
session_start();

if( (!isset($_SESSION['usuario']) == true ) )
{
	unset ($_SESSION['login']);
	header('location:login.php');	
}

	$sessaousuario = $_SESSION ['usuario']; // Ativando esta variável + 'nome' = inicia a visualização do perfil do usuário//
?>


<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="img/favicon.png" rel="shortcut icon">
    <title>Painel </title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/css/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
<script src="assets/js/java.js"></script>
<script src="assets/js/getEndereco.js"></script><script>
$(document).ready(function(){             $("#getEndereco").click(function(){                 getEndereco($("#cep").val());             });           }); 
</script>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img class="img-responsive center-margin" src="img/favicon.png"></a>
            </div>

            <div class="clearfix"></div>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Início </a></li>
                </ul>
                <ul class="nav side-menu">
                  <li><a href="usuarios.php"><i class="fa fa-user"></i> Usuários </a></li>
                </ul>
                <ul class="nav side-menu">
                <li style="border-right: 5px solid #0089C4;"><a><i class="fa fa-users"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="clientes_pronafcusteio.php">Pronaf Custeio</a>
                        </li>
                        <li><a href="clientes_pronampcusteio.php">Pronamp Custeio</a>
                        </li>
                        <li><a href="clientes_pronafinvestimento.php">Pronaf Investimento</a>
                        </li>
                        <li><a href="clientes_pronampinvestimento.php">Pronamp Investimento</a>
                        </li>
                    </ul>
                  </li>                 

                </ul>
                <ul class="nav side-menu">
                  <li><a href="sair.php"><i class="fa fa-reply"></i> Sair </a></li>
                </ul>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php echo $sessaousuario;?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="sair.php"><i class="fa fa-sign-out pull-right"></i> SAIR</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Incluir cliente</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">


                    <form class="form-horizontal form-label-left" action="controlador.php?acao=add_clientes" method="post" enctype="multipart/form-data" novalidate>

                      <p>Preencha corretamente os campos para realizar a inclusão </p>
                      <span class="section"><p><?php error_reporting(0); if($_GET['msg'] == 'ok'){echo 'Registro incluído com sucesso.';} else if($_GET['msg'] == 'error'){echo 'Erro ao incluir dados, tente novamente mais tarde.';}?></p>
</span>

                      <div class="">
                        <div class="">
                          <input id="name" value="<?php echo $id;?>" name="id"  hidden="hidden" >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Nome:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nome" id="nome" required class="form-control col-md-7 col-xs-12"placeholder="Preencha o nome do cliente.." required type="text">
                        </div>
                      </div>
                         
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Celular:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="celular" id="celular" required data-inputmask="'mask' : '(99)99999-9999'" placeholder="Preencha um CPF válido.." required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>                                            
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">CPF:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="cpf" id="cpf" required data-inputmask="'mask' : '999.999.999-99'" placeholder="Preencha um CPF válido.." required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
					  <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">CEP:</label>
                          
                          <div class="col-xs-12 col-md-6 col-sm-6"><input type="text" name="cep" id="cep"required data-inputmask="'mask' : '99999-999'" placeholder="Preencha um CEP válido.." required class="form-control col-md-7 col-xs-12"></div>
                          <div class="clearfix visible-xs-block"></div>
                           <input type="button" class="iconInput" width="50" id="getEndereco" value="Preencher" />
					  </div>

					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Cidade:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="cidade" readonly required id="cidade" placeholder="Primeiro digite um número de CEP válido.." required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Bairro:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="bairro" readonly required id="bairro" placeholder="Primeiro digite um número de CEP válido.." required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Estado:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="estado" id="estado" readonly required placeholder="Primeiro digite um número de CEP válido.." required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Endereço:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="endereco" id="endereco" required placeholder="Preencha endereço da agência e o nº.." required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Agência:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="agencia" id="agencia" required placeholder="Preencha uma agência.." required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Número da Agência:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="numero" id="numero" required data-inputmask="'mask' : '9999-9'" placeholder="Preencha um número da agência.." required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Tipo:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="tipo" id="tipo" required class="form-control col-md-7 col-xs-12 required">
							<option value selected>Selecione um tipo</option>
							<option value="pronamp_custeio">Pronamp Custeio</option>
							<option value="pronamp_investimento">Pronamp Investimento</option>
							<option value="pronaf_custeio">Pronaf Custeio</option>
							<option value="pronaf_investimento">Pronaf Investimento</option>
						  </select>
                        </div>
                      </div>
					  
                      
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary" onClick="window.location.href='clientes.php'">Voltar</button>
                          <button id="send" type="submit"  class="btn btn-info">Cadastre</button>
                        </div>
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/js/nprogress.js"></script>
    <!-- validator -->
    <script src="assets/js/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>

    <script src="assets/js/jquery.inputmask.bundle.min.js"></script>

    <!-- validator -->

    <!-- jquery.inputmask -->
    <script>
      $(document).ready(function() {
        $(":input").inputmask();
      });
    </script>
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /jquery.inputmask -->

    <!-- jQuery Knob -->

  </body>
</html>