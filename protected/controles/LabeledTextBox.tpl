<div id="resultado" style="background: url(indicator.gif) no-repeat top left;
display: none; border: none; z-index: 100; width: 16px;
height: 16px; position: absolute; left: 30%; top: 30%;">
    <com:TTable ID="tabla" BackColor="White" BorderWidth="1" GridLines="Both">
        <com:TTableRow BorderWidth="1">
            <com:TTableCell HorizontalAlign="Center" ColumnSpan = "2">
                <com:TActiveLabel Font.Bold="true" ID="titulo" Text="Resultado de la Solicitud:"/>
            </com:TTableCell>
        </com:TTableRow>
        <com:TTableRow BorderWidth="1">
            <com:TTableCell HorizontalAlign="Right">
                <com:TImage ID="imagen" ImageUrl="imagenes/botones/password.png" Height="128" Width="128"></com:TImage>
            </com:TTableCell>
            <com:TTableCell>
                <com:TActiveLabel Text="321321321321321" ID="texto"/>
            </com:TTableCell>
        </com:TTableRow>
        <com:TTableRow BorderWidth="1">
            <com:TTableCell HorizontalAlign="Right" ColumnSpan = "2">
                <com:TActiveButton ID="boton" Text="OK" OnCallback="redireccion">
                    <prop:ClientSide OnComplete="$('resultado').hide()"/>
                </com:TActiveButton>
            </com:TTableCell>
        </com:TTableRow>
    </com:TTable>
</div>