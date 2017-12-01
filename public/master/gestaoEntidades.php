<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EGDOC - Gestão Entidades</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<style>

a:hover{

  text-decoration: none;
}

</style>


<body>

  <?php
    //NAVBAR
    require_once 'navbar_master.php';
    //NAV SIDE 
    require_once 'sidebar_master.php';
  ?>
      
    <div id="wrapper">
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Gestão Entidades <i class="fa fa-cogs"></i></h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                <hr>

                 <!-- /. ROW  -->
            <div class="row text-center pad-top">
             <!--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">-->
             <div class="col-lg-offset-1 col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <a href="cadastroEntidade.php" >
             <div class="div-square">
             <i class="fa fa-plus fa-5x"></i>
             <h4>Adicionar</h4>

             </div>
              </a>

             </div>

             <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
             <a href="editarEntidade.php" >
             <div class="div-square">
             <i class="fa fa-pencil fa-5x"></i>
             <h4>Editar</h4>

             </div>
            </a>


            </div>
             <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
             <a href="blank.php" data-toggle="modal" data-target="#myModal">
             <div class="div-square">
             <i class="fa fa-search fa-5x"></i>
             <h4>Pesquisar</h4>
             </div>
             </a>

             </div>
             <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
             <a href="blank.php" >
             <div class="div-square">
             <i class="fa fa-print fa-5x"></i>
             <h4>Imprimir</h4>
             </div>
             </a>


             </div>
             <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
             <a href="blank.php" >
             <div class="div-square">
             <i class="fa fa-share fa-5x"></i>
             <h4>Exportar</h4>
             </div>
             </a>

             </div>
   </div>

<br>
                  

                  <!-- Modal -->
                  <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                   <!-- Modal content-->
                  <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Pesquisar Entidade</h4>
                  </div>
                  
                  <div class="modal-body">
                    <!--<p>Some text in the modal.</p>-->
                    

        <!-- Grid da pagina  -->
              <div class ="row">
              <div class="col-md-4 col-lg-4 col-xs-12">
                   <div class="col-md-6 col-lg-6">
                    <form>
                      <div class="form-group">
                        <input style="width:150px;" class="form-control" type="busca" placeholder="Entidade" id="buscaEntidade">
                      </div>
                    </form>
                   </div>
                 </div>
      
              </div>
              
              <div class ="row">
                
                <div class="col-md-10 col-lg-10  col-md-offset-1 col-xs-12">

                  <table class="table table-hover table-responsive">
                        <thead>
                          <tr>
                            <th>Nº</th>
                            <th> Código </th>
                            <th> Razão Social</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                          <td>0</td>
                          <td> Lorem Ipsum</td>
                          <td> Lorem Ipsum</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Lorem Ipsum</td>
                          <td>Ipsum Lorem</td>
                        </tr>
                        </tbody>

                    </table>

               </div>


        
             </div>

           <!-- Opção de proximo e anterior-->
             <div class="container-fluid">
                 <div class="row">
                   <div class="col-md-offset-3 col-xs-2 col-lg-2">
                     <button type="anterior" class="btn btn-secondary" href=""> Anterior </button>
                   </div>
                   <div class="col-xs-2 col-lg-2">
                     <p style="text-align:center;"> 1-1</p>
                   </div>
                   <div class="col-xs-2 col-lg-2 ">
                     <button type="anterior" class="btn btn-secondary" href=""> Próximo </button>
                   </div>
                  </div>
             </div>

          <!--Qualquer coisa abaixo dos botões de proximoe anterior deve ficar aqui -->
            
            
            <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>

            
        </div>


        
    </div>

  </div>
</div>


    <div class="footer">


             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2017 egdoc.com | Design by: <a href="http://ecompjr.com.br/" style="color:#fff;" target="_blank"> <strong>www.ecompjr.com.br</strong></a>
                </div>
        </div>
        </div>


    <script src="../assets/js/lib/jquery-1.10.2.js"></script>
    <script src="../assets/js/lib/bootstrap.min.js"></script>
    <script src="../assets/js/custom.js"></script>


</body>
</html>
