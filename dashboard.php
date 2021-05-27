<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        require("acoes/conexao.php");

        $adm  = $_SESSION["usuario"][1];
        $nome = $_SESSION["usuario"][0];
    }else{
        echo "<script>window.location = 'index.html'</script>";
    }
?>

        <?php if($adm)
         echo "<script>window.location = 'test1.html'</script>";

         else
         echo "<script>window.location = 'test2.html'</script>";
         ?>
            
        
    
