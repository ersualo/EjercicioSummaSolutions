<?php
    require_once "./Empresa.php";
?>
<h2>Creación Objeto Empresa</h2>
<?php
    $objEmpresa = new Empresa();
    $objEmpresa->setId(1);
    $objEmpresa->setNombre("Summa Solutions");

    $objProgramador1 = new Programador();
    $objProgramador2 = new Programador();
    $objProgramador3 = new Programador();

    $objProgramador1->setId(1);
    $objProgramador1->setNombre("Ernesto");
    $objProgramador1->setApellido("Suarez Lozano");
    $objProgramador1->setEdad(29);
    $objProgramador1->setLenguajeProgramacion(LenguajesProgramacion::PHP);

    $objProgramador2->setId(2);
    $objProgramador2->setNombre("Mauricio");
    $objProgramador2->setApellido("Montilla tabares");
    $objProgramador2->setEdad(28);
    $objProgramador2->setLenguajeProgramacion(LenguajesProgramacion::PYTHON);

    $objProgramador3->setId(3);
    $objProgramador3->setNombre("Francisco");
    $objProgramador3->setApellido("Suarez Lozano");
    $objProgramador3->setEdad(32);
    $objProgramador3->setLenguajeProgramacion(LenguajesProgramacion::NET);

    $empleados = [];
    $empleados[] = $objProgramador1;
    $empleados[] = $objProgramador2;
    $empleados[] = $objProgramador3;

    $objEmpresa->setEmpleados($empleados);
?>
<table>
    <tr><td></td><td></td></tr>
</table>

<table>
    <tr><td>ID</td><td><?php echo $objEmpresa->getID() ?></td></tr>
    <tr><td>Nombre</td><td><?php echo $objEmpresa->getNombre() ?></td></tr>
</table>

<h2>Empleados del objeto Empresa</h2>

<table>
    <tr><td>ID</td><td>Nombre</td><td>Apellido</td><td>Edad</td><td>Lenguaje / Tipo de Diseñador</td></tr>
    <?php
     foreach($objEmpresa->getEmpleados() as $empleado) {
        echo "<tr><td>".$empleado->getId()."</td><td>".$empleado->getNombre()."</td><td>".$empleado->getApellido()."</td><td>".$empleado->getEdad()."</td><td>".$empleado->getTipo()."</td></tr>";
     }
    ?>
</table>


<h2>Se agregan los siguientes dos empleados al objeto de la clase Empresa (Agregar empleados)</h2>

<?php 
    $objDisenador1 = new Disenador();
    $objDisenador1->setId(4);
    $objDisenador1->setNombre("Freddy");
    $objDisenador1->setApellido("Salas Valencia");
    $objDisenador1->setEdad(28);
    $objDisenador1->setTipoDisenador(TipoDisenador::GRAFICO);
    
    $objDisenador2 = new Disenador();
    $objDisenador2->setId(5);
    $objDisenador2->setNombre("Camilo");
    $objDisenador2->setApellido("Olmos Diaz");
    $objDisenador2->setEdad(27);
    $objDisenador2->setTipoDisenador(TipoDisenador::WEB);

    $objEmpresa->addEmpleado($objDisenador1);
    $objEmpresa->addEmpleado($objDisenador2);
?>
<table>
    <tr><td>ID</td><td>Nombre</td><td>Apellido</td><td>Edad</td><td>Lenguaje / Tipo de Diseñador</td></tr>
    <?php
       echo "<tr><td>".$objDisenador1->getId()."</td><td>".$objDisenador1->getNombre()."</td><td>".$objDisenador1->getApellido()."</td><td>".$objDisenador1->getEdad()."</td><td>".$objDisenador1->getTipo()."</td></tr>";
       echo "<tr><td>".$objDisenador2->getId()."</td><td>".$objDisenador2->getNombre()."</td><td>".$objDisenador2->getApellido()."</td><td>".$objDisenador2->getEdad()."</td><td>".$objDisenador2->getTipo()."</td></tr>";
    ?>
</table>

<h2>Ahora el objeto de la clase Empresa tiene los siguientes 5 empleados (Obtener listado de todos los Empleados)</h2>

<table>
    <tr><td>ID</td><td>Nombre</td><td>Apellido</td><td>Edad</td><td>Lenguaje / Tipo de Diseñador</td></tr>
    <?php
     foreach($objEmpresa->getEmpleados() as $empleado) {
        echo "<tr><td>".$empleado->getId()."</td><td>".$empleado->getNombre()."</td><td>".$empleado->getApellido()."</td><td>".$empleado->getEdad()."</td><td>".$empleado->getTipo()."</td></tr>";
     }
    ?>
</table>

<h2>Recupero el empleado con id 4</h2>

<?php
    $empleadoRecuperado = $objEmpresa->getEmpleadoById(4);
?>
<table>
    <tr><td>ID</td><td>Nombre</td><td>Apellido</td><td>Edad</td><td>Lenguaje / Tipo de Diseñador</td></tr>
    <?php
       echo "<tr><td>".$empleadoRecuperado->getId()."</td><td>".$empleadoRecuperado->getNombre()."</td><td>".$empleadoRecuperado->getApellido()."</td><td>".$empleadoRecuperado->getEdad()."</td><td>".$empleadoRecuperado->getTipo()."</td></tr>";
    ?>
</table>

<h2>Promedio de edades</h2>
<?php echo $objEmpresa->getPromedioEdades() ?>


