<?php

class conDB{
    public function __construct(){}
    public function conectar(){
        try{
            $conexion=new PDO('mysql:host=localhost;dbname=docentes',"root","");
            return($conexion);
        }
        catch(PDOException){}
    }
    public function AgregarRegistro($CONQuery){
        $conexion=$this->conectar();
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        try{
            $operacion=$conexion->prepare($CONQuery);
            $resultados=$operacion->execute();
            header("location:../index1.php");
        }
        catch(PDOException){}
    }
    public function consultar($CONQuery){
        $conexion= $this->conectar();
        $operacion=$conexion->prepare($CONQuery);
        $operacion-> setFetchMode(PDO::FETCH_ASSOC);
        $resultado=$operacion->execute();
        return($operacion->fetchAll());
    }
}


?>