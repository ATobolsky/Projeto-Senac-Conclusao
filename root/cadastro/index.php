<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <!-- CSS DO MATERIALIZE-->
      
      <LINK rel="stylesheet" href="materialize/css/materialize.min.css">
        <title></title>
    </head>
    <body>
        <nav class="blue-grey">
            <div class="nav-wrapper container">
                <div class="brand-logo light">Sistema de Cadastro</div>  
                <ul class="right">
                    <li><a href=""><i class="material-icons left">account_circle</i>Cadastro</a></li>
                    <li><a href=""><i class="material-icons left">search</i>Consultas</a></li>
                    
                    
                </ul>
            </div>           
        </nav>
        
        <!--Formulario de cadastro-->
        <div class="row container">
            <form action="banco_de_dados/create.php" method="post" class="col s12"></form>
            <fieldset class="formulario">
                <legend>Cadastro</legend>
            </fieldset>
            
        </div>
        
    <!--Arquivos JQUERY e JS-->
    <script type="text/javascript" src="materialize/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
        
                <!--Inicialização JQUERY-->
    <script type="text/javascript">
         $(document).ready(function(){              
    });
                            
    </script>

    </body>
</html>
