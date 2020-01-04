<?php
function cargar_data($consulta,$sender2)
{
    $db = $sender2->Application->Modules["db"]->DbConnection;
    $db->Active=true;
    $resultado = $db->createCommand($consulta)->query();
    $dataset=$resultado->readAll();
    $db->Active=false;
    return $dataset;
}

function modificar_data($consulta,$sender3)
{
    $db = $sender3->Application->Modules["db"]->DbConnection;
    $db->Active=true;
    $ejecucion = $db->createCommand($consulta)->execute();
    $db->Active=false;
    return $ejecucion;
}


function descomponer_emails($texto)
{
  $letras = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
                  'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
  $numeros = array ('0','1','2','3','4','5','6','7','8','9');
  $signos = array('.','@','-','_');
  $cuenta_correos=0;
  $completo = false;
  $correo_nuevo = '';
//  $correos = array();
  for ($x = 0 ; $x < strlen($texto) ; $x++)
  {
       if (((in_array($texto[$x], $letras)) == true) || ((in_array($texto[$x], $numeros)) == true) || ((in_array($texto[$x], $signos))==true))
       {
            $correo_nuevo = $correo_nuevo.$texto[$x];
            if ($texto[$x] == '@') {$completo = true;}
       }
       else
       {
           if ($completo == true)
           {
               $correos[$cuenta_correos] = $correo_nuevo;
               $correo_nuevo="";
               $cuenta_correos++;
               $completo = false;
           }
           else
           {
                $correo_nuevo = "";
           }
       }
  }
  return $correos;
}

function inscribir_emails($correos2,$sender)
{
    $contador_inscritos = 0;
    $contador_no_inscritos = 0;
    foreach ($correos2 as $uncorreo)
    {
        $sql="select * from suscriptores where email = '$uncorreo'";
        $existe=cargar_data($sql,$sender);
        if (empty($existe) == true) // no existe
        {
            $sql="insert into suscriptores(email,nombres,apellidos) values ('$uncorreo','','')";
            $resultado=modificar_data($sql,$sender);
            $correos_inscritos[$contador_inscritos] = $uncorreo;
            $contador_inscritos++;
        }
        else
        {
            $correos_no_inscritos[$contador_no_inscritos] = $uncorreo;
            $contador_no_inscritos++;
        }
    }

        if (empty($correos_inscritos) == false) // no existe
        {   
            echo "<FONT COLOR='green'>";
            echo "Correos inscritos: "; echo $contador_inscritos; echo ":<br>";
/*            foreach ($correos_inscritos as $inscrito)
                {
                   echo $inscrito; echo "<br>";
                }*/
            echo "</FONT>";
        }

        if (empty($correos_no_inscritos) == false) // no existe
        {
            echo "<FONT COLOR='red'>";
            echo "<br><br>Correos NO inscritos: "; echo $contador_no_inscritos;  echo ":<br><br>";
/*            foreach ($correos_no_inscritos as $noinscrito)
            {
                echo $noinscrito; echo "<br>";
            }*/
            echo "</FONT>";
        }
  //  echo "Correos NO inscritos: ".$contador_no_inscritos+1;
}

?>