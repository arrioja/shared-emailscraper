<link href=<%~ MensajeDiv.css %> rel="stylesheet" type="text/css" />
<div id="resultado" style="display: none; border: none; z-index: 100; width: 16px;
height: 16px; position: absolute; left: 30%; top: 30%;">
    <com:TTable ID="tabla" BorderStyle="1" BackColor="White" BorderWidth="1" GridLines="Horizontal" Width="450px">
        <com:TTableRow BorderWidth="0">
            <com:TTableCell CssClass="color_titulo"  HorizontalAlign="Center" ColumnSpan = "2">
                <com:TActiveLabel  Font.Bold="true" ID="titulo" Text="Resultado de la Solicitud:"/>
            </com:TTableCell>
        </com:TTableRow>
        <com:TTableRow BorderWidth="0">
            <com:TTableCell HorizontalAlign="Right">
                <com:TActiveImage ID="imagen" ImageUrl="imagenes/botones/password.png" Height="128" Width="128"></com:TActiveImage>
            </com:TTableCell>
            <com:TTableCell>
                <com:TActiveLabel CssClass="cuerpo_mensaje" Text="" ID="texto"/>
            </com:TTableCell>
        </com:TTableRow>
        <com:TTableRow BorderWidth="0">
            <com:TTableCell HorizontalAlign="Right" ColumnSpan = "2">
                <com:TActiveLabel Text="" ID="redir" Visible = "False"/>
                <com:TActiveButton ID="boton" Text="OK" OnCallback="redireccion">
                    <prop:ClientSide OnComplete="$('resultado').hide()"/>
                </com:TActiveButton>
            </com:TTableCell>
        </com:TTableRow>
    </com:TTable>
</div>