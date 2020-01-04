<?php
class Home extends TPage
{
    public function onLoad($param)
    {
     //   $this->lbl_org->Text = usuario_actual('nombre_organizacion');
    }

    public function click($param)
    {
      $correos = descomponer_emails($this->txt_emails->Text);
      $inscripciones = inscribir_emails($correos,$this);
    //  var_dump($correos);
    }

}

?>
