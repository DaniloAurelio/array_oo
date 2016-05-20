<?

  require_once("clientes.class.php");
  function debug($var){
    echo "<pre>";
    print_r($var);
    echo "<pre>";

  }

 $clientes = array(1=>array("nome"=>"Danilo Gonçalves Aurelio","cpf"=>"156.666.988-55","rg"=>"15446654","telefone"=>"4299887744"),
            2=>array("nome"=>"João silva Salro","cpf"=>"355.658.568-88","rg"=>"145455","telefone"=>"4299887744"),
            4=>array("nome"=>"Pedro Lopes Burey","cpf"=>"046.658.568-88","rg"=>"14145455","telefone"=>"4291235468"),
            5=>array("nome"=>"Pedro Lopes Burey","cpf"=>"046.658.568-88","rg"=>"14145455","telefone"=>"4291235468"),
            6=>array("nome"=>"Pedro Lopes Burey","cpf"=>"046.658.568-88","rg"=>"14145455","telefone"=>"4291235468"),
            7=>array("nome"=>"Pedro Lopes Burey","cpf"=>"046.658.568-88","rg"=>"14145455","telefone"=>"4291235468"),
            8=>array("nome"=>"Pedro Lopes Burey","cpf"=>"046.658.568-88","rg"=>"14145455","telefone"=>"4291235468"),
            9=>array("nome"=>"Pedro Lopes Burey","cpf"=>"046.658.568-88","rg"=>"14145455","telefone"=>"4291235468"),
            10=>array("nome"=>"Pedro Lopes Burey","cpf"=>"046.658.568-88","rg"=>"14145455","telefone"=>"4291235468")          
            

    );



  $cliente = new Cliente($clientes);

    


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>School Of Net - PHP OO</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <? require_once("_header.php");?>

    <div class="container-fluid">
      <div class="row">
      
       <? require_once("_menu.php");?> 
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          

          <h2 class="sub-header">Clientes - Listar</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>Endereço</th>
                  <th>Celular</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
             <?  #debug($cliente); 
             foreach ($cliente->array as $key=>$row ) {  ?>
                   
            

                <tr>
                  <td><?=$key;?></td>
                  <td><?=$row['nome'];?></td>
                  <td><?=$row['cpf'];?></td>
                  <td><?=$row['rg'];?></td>
                  <td><?=$row['telefone'];?></td>
                  <td><a href="cadastrar.php?id=<?=$key;?>"><button type="button" class="btn btn-info">Editar</button></a></td>
           
                </tr>
             <? } ?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
