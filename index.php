<!--CONTROLADOR EN UN MODELO O PATRON DE DISEÑO  LLAMADO MDC-->
<!--(SOLO MUESTRA LA INFORMACION DEPENDIENDO QUE ES LO QUE QUIERE VER EL USUARIO, DE LA ACCION Q ESTA EJECUTANDO)-->

<?php
    include_once 'C:/xampptesis/htdocs/ENC_HS_V2/survey.php';  #pongo la carpeta
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>EncuestaHS</title>
</head>
<body>

    <form action="#" method="POST">
        <?php
            $survey=new Survey(); #declaramos al objeto survey
            if(isset($_POST['preg_1'])){   #para validar q el nombre de la variable existe
                $showResults=true;  
                $survey->setOptionSelected($_POST['preg_1']);
                $survey->vote();
            }
            if(isset($_POST['preg_2'])){   
                $showResults=true;
                $survey->setOptionSelected2($_POST['preg_2']);
                $survey->vote2();
            }
            if(isset($_POST['preg_3'])){   
                $showResults=true;
                $survey->setOptionSelected3($_POST['preg_3']);
                $survey->vote3();
            }
            if(isset($_POST['preg_4'])){   
                $showResults=true;
                $survey->setOptionSelected4($_POST['preg_4']);
                $survey->vote4();
            }
            if(isset($_POST['preg_5'])){   
                $showResults=true;
                $survey->setOptionSelected5($_POST['preg_5']);
                $survey->vote5();
            }
            if(isset($_POST['preg_6'])){   
                $showResults=true;
                $survey->setOptionSelected6($_POST['preg_6']);
                $survey->vote6();
            }
            if(isset($_POST['preg_7'])){   
                $showResults=true;
                $survey->setOptionSelected7($_POST['preg_7']);
                $survey->vote7();
            }
            if(isset($_POST['preg_8'])){   
                $showResults=true;
                $survey->setOptionSelected8($_POST['preg_8']);
                $survey->vote8();
            }
            if(isset($_POST['preg_9'])){   
                $showResults=true;
                $survey->setOptionSelected9($_POST['preg_9']);
                $survey->vote9();
            }
            if(isset($_POST['preg_10'])){   
                $showResults=true;
                $survey->setOptionSelected10($_POST['preg_10']);
                $survey->vote10();
            }
        ?>
        <?php
        include ('vista_votacion.php');
        ?>
    </form>
</body>
</html>