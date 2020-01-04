<?php
 //   Prado::using('Application.controles.mensaje_div');
    Prado::using('Application.controles.MensajeDiv');
	class prueba_arrioja extends TPage
	{
    private $panels = array('panelHome', 'panelAbout', 'panelDownloads','panelContact',);
	private function showPanel($id, $param) {
  		foreach($this->panels as $panel) {
  			if($id == $panel) {
  				$this->$panel->setAttribute('style', 'display: block;');
  				$this->$panel->render($param->NewWriter);
				$this->$panel->setVisible(true);
  			} else {
  				$this->$panel->setVisible(false);
  			}
  		}
  	}


	public function mensajeclick($sender,$param)
	{
        $Message01 = 'Éste es un mensaje de prueba para ver que tan bien se puede ver un mensaje asi de largo, usando PHP, Prado Framework, y JavaScript en un solo archivo.';
        $this->LTB->titulo->Text = "Título desde el Servidor";
        $this->LTB->texto->Text = $Message01;
        $this->LTB->imagen->Imageurl = "imagenes/botones/prohibido.png"; 
        $this->LTB->redir->Text = "Home";
        $params = array('resultado');
        $this->getPage()->getCallbackClient()->callClientFunction('muestra_mensaje', $params);
	}



/* ESTE ES El DIV QUE FUNCIONA
	<div id="resultado" style="background: url(indicator.gif) no-repeat top left;
    display: none; border: none; z-index: 100; width: 16px;
    height: 16px; position: absolute; left: 30%; top: 30%;">
        <com:TTable BackColor="White" Width="450px" BorderWidth="1" GridLines="Both">
            <com:TTableRow BorderWidth="1">
                <com:TTableCell HorizontalAlign="Center" ColumnSpan = "2">
                    <com:TActiveLabel Font.Bold="true" ID="resultado_lbl_titulo" Text="Resultado de la Solicitud:"/>
                </com:TTableCell>
            </com:TTableRow>
            <com:TTableRow BorderWidth="1">
                <com:TTableCell HorizontalAlign="Right">
                    <com:TImage ImageUrl="imagenes/botones/password.png" Height="128" Width="128"></com:TImage>
                </com:TTableCell>
                <com:TTableCell>
                    <com:TActiveLabel Text="" ID="resultado_lbl_mensaje"/>
                </com:TTableCell>
            </com:TTableRow>
            <com:TTableRow BorderWidth="1">
                <com:TTableCell HorizontalAlign="Right" ColumnSpan = "2">
                    <com:TActiveButton Text="OK" OnCallback="redireccion">
                        <prop:ClientSide OnComplete="$('resultado').hide()"/>
                    </com:TActiveButton>
                </com:TTableCell>
            </com:TTableRow>
        </com:TTable>
    </div>
 */

	public function onShowHomePanel($sender, $param){
  		$this->showPanel('panelHome', $param);
  	}
	public function onShowAboutPanel($sender, $param){
  		$this->showPanel('panelAbout', $param);
  	}
    public function onShowDownloadsPanel($sender, $param) {
  		$this->showPanel('panelDownloads', $param);
  	}
    public function onShowContactPanel($sender, $param) {
  		$this->showPanel('panelContact', $param);
  	}
}

?>