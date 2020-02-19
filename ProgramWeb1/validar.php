<?php
    $anionacimiento = $_POST ["año"];
    $mesnacimiento = $_POST ["mes"];
    $dianacimiento = $_POST ["dia"];
    $anio_actual=getdate()["year"];
    $mes_actual=getdate()["mon"];
    $dia_actual=getdate()["mday"];
    $edadano=$anio_actual-$anionacimiento;
    $edadmes=$mes_actual-$mesnacimiento;
    $edaddia=$dia_actual-$dianacimiento;
    echo "Usted Tiene $edadano años, $edadmes meses, $edaddia dias";
?>