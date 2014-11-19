
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Kontrolli</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="projeto para o Curso de Bootstrap">
        <meta name="author" content="Andre Andrade">

        <!-- Le styles -->
        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 20px;
                padding-bottom: 60px;
            }

            /* Custom container */
            .container {
                margin: 0 auto;
                max-width: 1000px;
            }
            .container > hr {
                margin: 60px 0;
            }

            /* Main marketing message and sign up button */
            .jumbotron {
                margin: 80px 0;
                text-align: center;
            }
            .jumbotron h1 {
                font-size: 100px;
                line-height: 1;
            }
            .jumbotron .lead {
                font-size: 24px;
                line-height: 1.25;
            }
            .jumbotron .btn {
                font-size: 21px;
                padding: 14px 24px;
            }

            /* Supporting marketing content */
            .marketing {
                margin: 60px 0;
            }
            .marketing p + h4 {
                margin-top: 28px;
            }


            /* Customize the navbar links to be fill the entire space of the .navbar */
            .container .navbar .navbar-inner {
                padding: 0;
            }
            .container .navbar .nav {
                margin: 0;
                display: table;
                width: 100%;
            }
            .container .navbar .nav li {
                display: table-cell;
                width: 1%;
                float: none;
            }
            .container .navbar .nav li a {
                font-weight: bold;
                text-align: center;
                border-left: 1px solid rgba(255,255,255,.75);
                border-right: 1px solid rgba(0,0,0,.1);
            }
            .container .navbar .nav li:first-child a {
                border-left: 0;
                border-radius: 3px 0 0 3px;
            }
            .container .navbar .nav li:last-child a {
                border-right: 0;
                border-radius: 0 3px 3px 0;
            }
        </style>
        <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.png">
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top visible-phone">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="http://twitter.github.com/bootstrap/examples/fluid.html#">Navegação</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li><a href="../index.php">Inicial</a></li>
                            <li class="active"><a href="veiculos.php">Veículo</a></li>
                            <li><a href="servicos.html">Serviços</a></li>
                            <li><a href="downloads.html">Downloads</a></li>
                            <li><a href="#">Quem Somos</a></li>
                            <li><a href="#">Contatos</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">

            <div class="masthead">
                <!--<h3 class="muted">Projeto Acadtec</h3>-->
                <a href="index.html">
                    <img src="../assets/img/logo.png" alt="Acadtec" title="Acadtec" style="margin-bottom: 20px;">
                </a>
                <div class="navbar hidden-phone">
                    <div class="navbar-inner">
                        <div class="container">
                            <ul class="nav">
                                <li><a href="../index.php"><i class="icon-home"></i> Inicial</a></li>
                                <li class="active"><a href="veiculos.php"> <img src="../assets/img/veiculo.png"> Veículos</a></li>
                                <li><a href="servicos.html">#</a></li>
                                <li><a href="downloads.html">#</a></li>
                                <li><a href="#">#</a></li>
                                <li><a href="#">#</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.navbar -->



            </div>

            <ul class="breadcrumb">
                <li><a href="../index.php">Inicial</a> <span class="divider">/</span></li>
                <li><a href="veiculos.php">Veículos</a><span class="divider">/</span></li>
                <li><a href="listar_veiculos.php">Localizar</a></li>
            </ul>

            <!-- Example row of columns -->
            <div class="row-fluid">
                <div class="span12">
                    <div class="span2">
                        <h3>Menu</h3>
                        <ul class="nav nav-pills nav-stacked">
                            <li ><a href="veiculos.php">Cadastro</a></li>
                            <li class="active"><a href="listar_veiculos.php">Localizar</a></li>
                        </ul>
                    </div>
                    <div class="span10">
                        <h3>Localizar Veículos</h3>

                        <form class="form-search" id="localizar" name="localizar" method="get" action="listar_veiculos.php">
                            <div class="input-append">
                                <input name="filtrar" type="text" id="filtrar"  class="input-xlarge search-query" placeholder="Nome do Veículo" />
                                <button class="btn" type="submit" id="button" value="localizar"><i class="icon-search"></i> Localizar</button>
                                <div class="input-append">
                                </div>
                            </div>
                        </form>                        

                        <div id="conteudo"> 
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Modelo</th>
                                    <th>FABRICANTE</th>
                                    <th>Ano</th>
                                    <th>Placa</th>
                                    <th>Lotação</th>
                                    <th>Combustível</th>
                                    <th>Editar</th>

                                </tr>
                                <!--Inicio codigo php-->

                                <?php
                                extract($_GET);
                                if (empty($filtrar)) {
                                    $filtrar = '';
                                } else {
                                    $filtrar = $filtrar;
                                }

                                include ("../model/conexao_db.php");
                                conectar($server, $user, $senha, $db); // iner join para imprimir o nome do fornecedor e tipo

                                if (isset($_GET["p"])) {
                                    $p = $_GET["p"];
                                } else {
                                    $p = 1;
                                }
                                // Defina aqui a quantidade máxima de registros por página.
                                $qnt = 10; // O sistema calcula o início da seleção calculando:(página atual * quantidade por página) - quantidade por página
                                $inicio = ($p * $qnt) - $qnt;

                                $consulta = "SELECT veiculos.*,
                                            isumos.nome_insumo 
                                            FROM veiculos
                                            INNER JOIN isumos 
                                            ON id_insumo_veiculo = id_insumo                                         
                                            and veiculos.modelo_veiculo like '" . $filtrar . "%'
                                            ORDER BY modelo_veiculo ASC
                                            LIMIT $inicio, $qnt ;";
                                
                              
                                        
                                $resultado = mysql_query($consulta) or die("Nao foi possivel realizar a consulta!<br>" . mysql_error());

                                $cor = '#2e82ff'; // definição de cor para loop de cor
                                while ($linhas = mysql_fetch_array($resultado)) {// Abrindo loop, Enquanto tiver resultado imprima.
                                    if ($cor == '#87CEFA') { //if para cores alternadas na tabela.
                                        $cor = '#FFFFFF';
                                    } else {
                                        $cor = '#87CEFA';
                                    }
                                    // Faz uma nova seleção no banco de dados, desta vez sem LIMIT, 
                                    // para pegarmos o número total de registros
                                    $sql_select_all = "SELECT veiculos.*,isumos.nome_insumo FROM veiculos 
                                             INNER JOIN isumos ON id_insumo_veiculo = id_insumo                                         
                                             and veiculos.modelo_veiculo like '" . $filtrar . "%';";
                                    // Executa o query da seleção acimas
                                    $sql_query_all = mysql_query($sql_select_all);
                                    // Gera uma variável com o número total de registros no banco de dados 
                                    $total_registros = mysql_num_rows($sql_query_all);
                                    // Gera outra variável, desta vez com o número de páginas que será precisa. 
                                    // O comando ceil() arredonda "para cima" o valor 
                                    $pags = ceil($total_registros / $qnt);



                                    /* Imprimindo array */ echo " 
 <td bgcolor=$cor>" . $linhas["modelo_veiculo"] . "</td>
 <td  bgcolor=$cor>" . $linhas["fabricante_veiculo"] . "</td>
 <td  bgcolor=$cor>" . $linhas["ano_veiculo"] . "</td>
 <td bgcolor=$cor>" . $linhas["placa_veiculo"] . "</td>
 <td bgcolor=$cor>" . $linhas["placa_veiculo"] . "</td>
 <td bgcolor=$cor>" . $linhas["placa_veiculo"] . "</td>  ";
                                    ?>  
                                    <td bgcolor=<?php echo $cor ?>><a href=alterar_produto.php?id_produto><i class="icon-home"></i></a></td>
                                    <tr>                               
                                        <?php
                                    }//fechando loop 
                                    ?>



                            </table><!--fecha table-->
                            <ul class = "pager">

                                <?php
                                $anterior = $p - 1;
                                $proximo = $p + 1;

                                if ($p > 1) {

                                    echo " <li><a href='?p=$anterior&filtrar=$filtrar'>&larr; Anterior </a></li> ";
                                }if ($p > 1) {
                                    echo "<span class='label label-info'>Página n° $p de $pags</span>";
                                }
                                if ($p < $pags) {

                                    echo " <li><a href='?p=$proximo&filtrar=$filtrar'>Próximo &rarr;</a></li>";
                                }
                                                         
                                
                              
                                
                                ?>
                                
                                
                            </ul>
                        </div>
                         <hr>
                    </div><!-- Final conteudo-->
                </div>
            </div>           

            <div class="footer">
                <center><p>&copy; Kontrolli</p></center>
            </div>

        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>