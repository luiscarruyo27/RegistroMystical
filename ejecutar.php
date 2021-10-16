
<?php

$trabajo = array($name = $_POST['name'] => 'Nombre',$ape = $_POST['ape'] => 'Apellido',$cedula = $_POST['cedula'] => 'C.I',
$areaTrabajo = $_POST['areaTrabajo'] => 'Departamento',$op= $_POST['op'] => 'Ocupacion',$pago= $_POST['pago'] => 'Sueldo');

$trabajo2 = array($name2 = $_POST['name2'] =>'Nombre',$ape2 = $_POST['ape2'] => 'Apellido',$cedula2 = $_POST['cedula2'] => 'C.I',
$areaTrabajo2 = $_POST['areaTrabajo2'] => 'Departamneto',$op2 = $_POST['op2'] => 'Ocupacion',$pago2 = $_POST['pago2'] => 'sueldo');


$trabajo3 = array($name3 = $_POST['name3'] => 'Nombre',$ape3 = $_POST['ape3'] => 'Apellido',$cedula3 = $_POST['cedula3'] => 'C.I',
$areaTrabajo3 = $_POST['areaTrabajo3'] => 'Departamento',$op3 = $_POST['op3'] => 'Ocupacion',$pago3 = $_POST['pago3'] =>'Sueldo');


if (!empty($name) && !empty($name2) && !empty($name3) 
 && !empty($ape) && !empty($ape2) && !empty($ape3) 
 && !empty($cedula) && !empty($cedula2) && !empty($cedula3)
 && !empty($pago) && !empty($pago2) && !empty($pago3)
 && !empty($areaTrabajo) && !empty($areaTrabajo2) && !empty($areaTrabajo3)){ 
 
 
  echo "---------------------------------------";
  echo "<br>";
  echo" Empleado 1";
  echo "<br>";
  echo"Datos personales";

  echo "<br>";
foreach ($trabajo as $dato => $emple) {
    
  echo "<br>";
  echo $emple . " : " .$dato ;
   
}
  echo "$";
  echo "<br>";
  echo "---------------------------------------";
  echo "<br>";


  echo" Empleado 2";
  echo "<br>";
  echo"Datos personales";
  echo "<br>";
foreach ($trabajo2 as $dato2 => $emple2) {
  echo "<br>";
  echo  $emple2 . " : " .$dato2;
   
}
  echo "$";
  echo "<br>";
  echo "---------------------------------------";
  echo "<br>";


  echo" Empleado 3";
  echo "<br>";
  echo"Datos personales";
  echo "<br>";

foreach ($trabajo3 as $dato3 => $emple3) {
    echo "<br>";
    echo  $emple3 . " : " .$dato3;
  
}

  echo "$";
  echo "<br>";
  echo "---------------------------------------";
  echo "<br>";

}else {
    echo "No puede dejar espacio en blanco...";
}
?>

