<!--ACA SE TIENE TODO LOS METODOS O ACTIVIDADES NECESARIOS PARA LAS VOTACIONES-->
<!--(VOTAR,REVISAR OPCION SELECCIONADA,MOSTRAR RESULTADOS,VOTOS TOALES, PORCENTAJE)-->

<?php
include_once 'db.php';  #como pongo aca el db.php, en el index pondria survey
class Survey extends DB{    #clase con  metodos necesarios para votar y mostrar los resultados
                #x ejm votos totales  o porcentaje de acuerdo a la porcion seleccionada 
                #extends: para que pueda heredar una libreria de DB 
                
    #AHORA ACÁ EN SURVEY VOY A EMPEZAR A MANEJAR MIS OPERACIONES DE MI ENCUESTA 
    #ojo: el extend me permite que ya no tengo q crear objetos sino que todo del db: el constructor y el db se añaden
    #autopmaticamente a estra clase
    #private $totalVotes;  #variable con el conteo total de votos : suma de los votos 
    private $optionSelected; #opcion que ..usuario selecciona..: cuando el usuario pica , es decir con este y el de arriba guardo info
    private $optionSelected2;
    private $optionSelected3;
    private $optionSelected4;
    private $optionSelected5;
    private $optionSelected6;
    private $optionSelected7;
    private $optionSelected8;
    private $optionSelected9;
    private $optionSelected10;

    #las 2 funciones a continuacion las creo para tener acceso a las variables privadas ya q  no deberia poder acceder a ellos..etc()
    #FUNCION PARA COLOCAR UN VALOR
    public function setOptionSelected($option){
        $this->optionSelected=$option; #al clickar en votar manda a llamar a setOpt.. con la opcion elegida y se la asigna a mi variable
    }
    public function setOptionSelected2($option2){
        $this->optionSelected2=$option2; 
    }
    public function setOptionSelected3($option3){
        $this->optionSelected3=$option3; 
    }
    public function setOptionSelected4($option4){
        $this->optionSelected4=$option4; 
    }
    public function setOptionSelected5($option5){
        $this->optionSelected5=$option5; 
    }
    public function setOptionSelected6($option6){
        $this->optionSelected6=$option6; 
    }
    public function setOptionSelected7($option7){
        $this->optionSelected7=$option7; 
    }
    public function setOptionSelected8($option8){
        $this->optionSelected8=$option8; 
    }
    public function setOptionSelected9($option9){
        $this->optionSelected9=$option9; 
    }
    public function setOptionSelected10($option10){
        $this->optionSelected10=$option10; 
    }

    #FUNCION PARA QUE NOS PUEDA DEVOLVER EL VALOR QUE TENGA ASIGNADO
    public function getOptionSelected(){  #para regresar el valor 
        return $this->optionSelected;
    }
    public function getOptionSelected2(){  
        return $this->optionSelected2;
    }
    public function getOptionSelected3(){  
        return $this->optionSelected3;
    }
    public function getOptionSelected4(){  
        return $this->optionSelected4;
    }
    public function getOptionSelected5(){  
        return $this->optionSelected5;
    }
    public function getOptionSelected6(){  
        return $this->optionSelected6;
    }
    public function getOptionSelected7(){  
        return $this->optionSelected7;
    }
    public function getOptionSelected8(){  
        return $this->optionSelected8;
    }
    public function getOptionSelected9(){  
        return $this->optionSelected9;
    }
    public function getOptionSelected10(){  
        return $this->optionSelected10;
    }

    #ACCEDE A LA BASE DE DATOS, Y MODIFICA EL REGISTRO DE VOTOS   
    public function vote(){  #como ya ahora tiene la opcion seleccionada accede a la base de datos,a la tabla y modifica el registro de los votos
        $query=$this->connect()->prepare('UPDATE dolor_estomacal SET votos_apend = votos_apend+1 WHERE apendicitis=:apendicitis'); #aca solo preparamos el query o la sentencia
        $query->execute(['apendicitis'=>$this->optionSelected]);  #al hacer la votacion, reemplazara la variable temporal: ":opci.." con lo q aqui especifico
    }
    public function vote2(){  
        $query2=$this->connect()->prepare('UPDATE dolor_estomacal SET votos_col_irrit = votos_col_irrit+1  WHERE Colon_Irritable=:Colon_Irritable'); #aca solo preparamos el query o la sentencia
        $query2->execute(['Colon_Irritable'=>$this->optionSelected2]);
    }
    public function vote3(){  
        $query3=$this->connect()->prepare('UPDATE dolor_estomacal SET votos_diarr = votos_diarr+1  WHERE Diarrea=:Diarrea'); 
        $query3->execute(['Diarrea'=>$this->optionSelected3]);
    }
    public function vote4(){  
        $query4=$this->connect()->prepare('UPDATE dolor_estomacal SET votos_disp = votos_disp+1  WHERE Dispepsia=:Dispepsia');
        $query4->execute(['Dispepsia'=>$this->optionSelected4]);
    }
    public function vote5(){  
        $query5=$this->connect()->prepare('UPDATE dolor_estomacal SET votos_dol_abd = votos_dol_abd+1  WHERE Dolor_abdom=:Dolor_abdom'); 
        $query5->execute(['Dolor_abdom'=>$this->optionSelected5]);
    }
    public function vote6(){  
        $query6=$this->connect()->prepare('UPDATE dolor_estomacal SET votos_esof = votos_esof+1  WHERE Esofagitis=:Esofagitis'); 
        $query6->execute(['Esofagitis'=>$this->optionSelected6]);
    }
    public function vote7(){  
        $query7=$this->connect()->prepare('UPDATE dolor_estomacal SET votos_estom = votos_estom+1  WHERE Estomatitis=:Estomatitis'); 
        $query7->execute(['Estomatitis'=>$this->optionSelected7]);
    }
    public function vote8(){  
        $query8=$this->connect()->prepare('UPDATE dolor_estomacal SET votos_estre = votos_estre+1  WHERE Estrenimiento=:Estrenimiento'); 
        $query8->execute(['Estrenimiento'=>$this->optionSelected8]);
    }
    public function vote9(){  
        $query9=$this->connect()->prepare('UPDATE dolor_estomacal SET votos_gas = votos_gas+1  WHERE Gases=:Gases'); 
        $query9->execute(['Gases'=>$this->optionSelected9]);
    }
    public function vote10(){  
        $query10=$this->connect()->prepare('UPDATE dolor_estomacal SET votos_gastr = votos_gastr+1  WHERE Gastritis=:Gastritis'); 
        $query10->execute(['Gastritis'=>$this->optionSelected10]);
    }
}

?>