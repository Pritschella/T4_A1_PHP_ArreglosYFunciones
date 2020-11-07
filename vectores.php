<!DOCTYPE html>
<body>
<!--<h1>===== Vectores (Arrays) ASOCIATIVOS =====</h1>-->

<?php
    $vector_promedios_semestre = array(
        "Antonio García" => array(100, 100, 100, 90, 80, 80),
        "María Martínez" => array(70, 80, 80, 90, 60, 45),
        "José López" => array(70, 65, 50, 40, 90,89),
        "Josefa Sánchez" => array(78, 54, 89, 40, 88, 55),
        "Francisco González" => array(30, 60, 90, 90, 100, 55),
        "Carmen Hernández" => array(78, 45, 89, 60, 88, 67),
        "Juan Rodríguez" => array(70, 80, 90, 50, 99, 80),
        "Dolores Torres" => array(78, 54, 89, 100, 85, 55),
        "Manuel Flores" => array(78, 60, 78, 40, 88, 70),
        "Ana Ruiz" => array(78, 54, 89, 60, 100, 90),
    );    

    //echo "<hr>";
    //var_dump($vector_promedios_semestre);

   echo "<hr>";
   echo "<h2>Calificaciones de alumnos:</h2>";
    foreach ($vector_promedios_semestre as $nombre => $calif) {
        echo $nombre."<br>";
        for ($i=0; $i < 6; $i++) {
            echo $calif[$i]."<br>";
        }
    }

    echo "<hr>";
   

    function prom_alumnos($alumno){
        $c=0;
        foreach($alumno as $nombre => $calif){
            $prom_alumno=0;
            for ($i=0; $i < 6; $i++) { 
                $prom_alumno+=$calif[$i];
            }
            $prom_alumno=$prom_alumno/6;
            $prom_alumno_array[$c]=$prom_alumno;
            $c++;
            }
        return $prom_alumno_array;
    }

    function prom_alumnos2($alumno){
        $c=0;
        foreach($alumno as $nombre => $calif){
            echo $nombre."<br>";
            $prom_alumno=0;
            for ($i=0; $i < 6; $i++) { 
                $prom_alumno+=$calif[$i];
            }
            $prom_alumno=$prom_alumno/6;
            $prom_alumno_array[$c]=$prom_alumno;
            echo $prom_alumno."<br>";
            $c++;
            }
        return $prom_alumno_array;
    }

    function prom_gen($alumnos){
        $c=0;
        $prom=0;
        foreach ($alumnos as $nombre => $calif) {
            $prom+=$calif;
            //echo "<br>".$calif;
        }
        $prom=$prom/sizeof($alumnos);
        echo "El promedio general es: ".$prom;

        return $prom;
    }

    function prom_gen2($alumnos){
        $c=0;
        $prom=0;
        foreach ($alumnos as $nombre => $calif) {
            $prom+=$calif;
            //echo "<br>".$calif;
        }
        $prom=$prom/sizeof($alumnos);

        return $prom;
    }

    function prom_materia($vector_promedios_semestre){
        $m1=0; $m2=0;$m3=0; $m4=0; $m5=0; $m6=0;
        foreach($vector_promedios_semestre as $nombre => $calif){
            for ($i=0; $i < 6; $i++) { 
                //echo "i".$i."<br>";
                if($i==0){
                    $m1+=$calif[$i];
                   // echo "0<br>";
                }
                else if($i==1){
                    $m2+=$calif[$i];
                   // echo "1<br>";
                }
                else if($i==2){
                   // echo "2<br>";
                    $m3+=$calif[$i];}
                else if($i==3){
                   // echo "3<br>";
                    $m4+=$calif[$i];}
                else if($i==4){
                   // echo "4<br>";
                    $m5+=$calif[$i];}
                else if($i==5){
                    //echo "5<br>";
                    $m6+=$calif[$i];}
                    
            }
            
        }
        $m1=$m1/sizeof($vector_promedios_semestre);
        $m2=$m2/sizeof($vector_promedios_semestre);
        $m3=$m3/sizeof($vector_promedios_semestre);
        $m4=$m4/sizeof($vector_promedios_semestre);
        $m5=$m5/sizeof($vector_promedios_semestre);
        $m6=$m6/sizeof($vector_promedios_semestre);
            
        echo "Materia 1: ".$m1."<br>";
        echo "Materia 2: ".$m2."<br>";
        echo "Materia 3: ".$m3."<br>";
        echo "Materia 4: ".$m4."<br>";
        echo "Materia 5: ".$m5."<br>";
        echo "Materia 6: ".$m6."<br>";    
    }

    function prom_mejor($alumnos, $alumnos2){

        $n="";
        $prom=0;
        foreach ($alumnos as $nombre => $calif) {
            if ($prom<=$calif) {
                $prom=$calif;
                $n=$nombre;
            }
        }

        foreach ($alumnos2 as $nombre => $calif) {
            if ($n==$nombre) {
                $n=$nombre;
            }
        }
        echo $n.": ".$prom;
    }


    function prom_may_gen($alumnos, $promgen){

        $n="";
        $prom=$promgen;
        $c=0;
        foreach ($alumnos as $nombre => $calif) {
            if ($prom<=$calif) {
                
            $c++;
            }
            
        }
        
        echo "Total de alumnos: ".$c;
    }

    echo "<h2>Promedios por alumno:</h2>";
    prom_alumnos2($vector_promedios_semestre);

    echo "<hr>";
    echo "<h2>Promedio General: </h2>";
    prom_gen(prom_alumnos($vector_promedios_semestre));
    
    echo "<hr>";
    echo "<h2>Promedio por materia: </h2>";
    prom_materia($vector_promedios_semestre);

    echo "<hr>";
    echo "<h2>Mayor promedio: </h2>";
    prom_mejor(prom_alumnos($vector_promedios_semestre), $vector_promedios_semestre);

    echo "<hr>";
    echo "<h2>Alumnos que tienen promedio por encima del promedio general: </h2>";
    prom_may_gen(prom_alumnos($vector_promedios_semestre), prom_gen2(prom_alumnos($vector_promedios_semestre)) );
?>
</body>
</html>