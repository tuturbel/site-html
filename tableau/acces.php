<?php 
    if(($_GET["login"] == "admin") && ($_GET["motpasse"] == "123"))
    {
        header("location: TblGPhy.php");
    }
    else
            echo "Acces refusé";
?>