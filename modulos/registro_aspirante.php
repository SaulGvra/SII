<div class="principal container-fluid">

<table width="50%" border ="0">
        <tr>
            <td width="20%">
                <asp:Label ID="Label2" runat="server" Text="Dato 1"></asp:Label>
            </td>

            <td width 50%>
                
                <asp:TextBox ID="TextBox1" runat="server" Width="489px"></asp:TextBox>
                
            </td>
            
        </tr>

        <tr>
            <td>
                <asp:Label ID="Label3" runat="server" Text="Dato 2"></asp:Label>
            </td>

            <td>
                <asp:TextBox ID="TextBox2" runat="server" Width="492px"></asp:TextBox>
            </td>
        </tr>

        <tr>
            <td colspan ="2">
                <br>
                <asp:Button ID="Button1" runat="server" Text="Hipotenusa" OnClick="Button1_Click" />
                &nbsp;&nbsp;&nbsp
                <asp:Button ID="Button2" runat="server" Text="Vol_Esfera" OnClick="Button2_Click" />
                &nbsp;&nbsp;&nbsp
                <asp:Button ID="Button3" runat="server" Text="Vol_Icosaedro" OnClick="Button3_Click" />
                &nbsp;&nbsp;&nbsp
                <asp:Button ID="Button4" runat="server" Text="Energía (gr)" OnClick="Button4_Click" />
                &nbsp;&nbsp;&nbsp
                <asp:Button ID="Button5" runat="server" Text="Energía (kg)" OnClick="Button5_Click" />
                </br>
            </td>
        </tr>
        
    
    <br/>
        </table>

</div>

<!-- El code de abajo es para el index -->
</div>
</main>