<?php
class MensajeDiv extends TTemplateControl
{
	public function redireccion($sender, $param)
    {  
        $redirec = $this->redir->Text;
        if (!empty($redirec))
        {
            $this->Response->redirect($this->Service->constructUrl($redirec));
        }
        
  	}
}

?>
