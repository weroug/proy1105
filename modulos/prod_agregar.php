<?php

include '../lib/conexion.php';
$conn = new Conexion;


if ($conn->conectar()) {
$nom=$_POST["nombre"];
$totalusd=$_POST["totalusd"];
$ano=$_POST["ano"];




$sql="INSERT INTO productos (nombre,totalusd,ano)values('$nom','$totalusd','$ano')";
    
echo $sql;
}











/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

