<?php

Prado::using('Application.controles.LabeledTextBox');

class prueba extends TPage
{
    public function buttonClicked($sender,$param)
    {
        $sender->Text=$this->Input->TextBox->Text;
    }
}

?>
