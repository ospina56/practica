<?php

class Usuarios{
    public static function registrar($documento,$nombre,$fec_nac,$contraseña,$foto){
        require("conexion.php");
        $salida= "";      
        $sql = "insert into tb_usuarios(documento,nombre,fec_nac,contraseña,foto)value('$documento','$nombre','$fec_nac','$contraseña','$foto')";
        $consulta = $conexion ->query($sql);
        if ($consulta){
            header("location: v_consultar_usuarios.php");
        } else{
            return "error al registrarse";
        }
    }

    public static function consultarusuarios(){
        require('conexion.php');
        $salida="";
        $sql="SELECT * FROM tb_usuarios ";
        $resultado=$conexion->query($sql);
        while($fila=mysqli_fetch_assoc($resultado)){
            $salida.="<div style='background-color:yellow'";
            $salida.="<h1>".$fila['documento']."</h1>";
            $salida.="<h2>".$fila['nombre']."</h2>";
            $salida.="</div>";
        }
        return $salida;
    }

public static function actualizardatos($documento,$nombre,$fecha,$contraseña){
    require('conexion.php');
    $salida = ""; 
    $sql =" update tb_usuarios set nombre = '$nombre',";
    $sql .= "fec_nac = '$fecha',contraseña = '$contraseña' ";
    $sql .= "where documento = '$documento' ";
    $consulta = $conexion->query($sql);
    if($consulta){
        return "actualizado";
    }else{
        return "no pudo ser actualizado";
    }
}

}


class MOSTRAR{
    public static function retornarDato($des,$valor){
        require('conexion.php');
        $salida="";
        if($des==1){
            $campo=" documento "; $tabla=" tb_usuarios ";
            $busqueda=" documento ";
        }
                if($des==2){
            $campo=" nombre "; $tabla=" tb_usuarios ";
            $busqueda=" documento ";
        }
                if($des==3){
            $campo=" fec_nac "; $tabla=" tb_usuarios ";
            $busqueda=" documento ";
        }
                if($des==4){
            $campo=" contraseña "; $tabla=" tb_usuarios ";
            $busqueda=" documento ";
        }
                if($des==5){
            $campo=" foto "; $tabla=" tb_usuarios ";
            $busqueda=" documento ";
        }
        $sql="SELECT $campo FROM $tabla WHERE $busqueda='$valor' ";
        $R=$conexion->query($sql);
        while($fila=$R->fetch_array()){
            $salida.= $fila[0];
        }
        return $salida; 
    }   
}