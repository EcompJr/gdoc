<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EGDOC - Admin</title>
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
                     <h2>Usuário Master <i class="fa fa-star"></i></h2>
                    </div>
                </div>
      <hr>

      <div class="row text-center pad-top">
        <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-6">
          <a href="cadastroUsuarioMaster.php" >
            <div class="div-square">
              <i class="fa fa-plus fa-5x"></i>
              <h4>Adicionar</h4>
            </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
          <a href="editarUsuarioMaster.php" >
            <div class="div-square">
              <i class="fa fa-pencil fa-5x"></i>
              <h4>Editar</h4>
            </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
          <a href="../blank.php">
            <div class="div-square">
              <i class="fa fa-print fa-5x"></i>
              <h4>Imprimir</h4>
            </div>
          </a> 
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
          <a href="../blank.php" >
            <div class="div-square">
              <i class="fa fa-share fa-5x"></i>
              <h4>Exportar</h4>
            </div>
          </a>
        </div>
      </div>

<br>
        <!-- Grid da pagina  -->
             <div class ="row">
               <div class="col-md-6 col-lg-6 col-md-offset-2 col-xs-12 table-responsive">

                 <table class="table table-striped table-bordered table-hover">
                       <thead>
                         <tr>
                           <th>Nº</th>
                           <th> CNPJ </th>
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


                 <div class="col-md-4 col-lg-4 col-xs-12">
                   <div class="col-md-6 col-lg-6">
                    <form>
                      <div class="form-group">
                        <input class="form-control" type="busca" placeholder="Usuário Master" id="buscaEntidade">
                      </div>
                    </form>
                   </div>

                 <div class="col-md-6 col-lg-6">
                   <button type="button" class="btn btn-primary"> Buscar</button>
                 </div>

                 </div>

             </div>

           <!-- Opção de proximo e anterior-->
             <div class="row">
                <div class=" col-md-6 col-xs-12 col-lg-6 col-md-offset-2 col-lg-offset-2">
                   <div class="col-md-4 col-lg-4">
                     <button type="anterior" class="btn btn-secondary" href=""> Anterior </button>
                   </div>
                   <div class="col-md-4 col-lg-4">
                     <p> 1-1</p>
                   </div>
                   <div class="col-md-4 col-lg-4">
                     <button type="anterior" class="btn btn-secondary" href=""> Próximo </button>
                   </div>

                </div>

             </div> <!--FIM Proximo /Anterior -->



             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
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
