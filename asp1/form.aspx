<%@ Page Language="C#" AutoEventWireup="true" CodeFile="form.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <link rel="stylesheet" href="StyleSheet.css" />
</head>
<body>
    <nav>
        <ul class="main-menu" type="None">
            <li class="menu"><a class="link1" href="#">Menu</a></li>
          <li class="item"><a class="link1" href="index.aspx">Strona główna</a></li>
          <li class="item"><a class="link1" href="edukacja.html">Edukacja</a></li>
          <li class="item"><a class="link1" href="form.aspx">Kup bilet</a></li>
          <li class="item dropdown">
            <a class="link1"href="wystawy.html">Wystawy</a>
            <ul class="submenu">
              <li class="item2"><a href="stratyWojenne.html">Straty wojenne</a></li>
              <li class="item2"><a href="seanseMultimedialne.html">Seanse multimedialne</a></li>
              <li class="item2"><a class="dropdown2" href="projektUnijny.html">Projekt unijny</a>
                <ul class="submenu">
                  <li class="item3"> <a href="projektUnijny.html#cel">Cel</a></li>
                  <li class="item3"> <a href="projektUnijny.html#opis">Opis</a></li>
                  <li class="item3"><a href="projektUnijny.html#finansowanie">Finansowanie</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="item">
            <a class="link1" href="mailto:piotr.papriko@gmail.com?subject=Moja_opinia"
              >Prześlij opinię</a
            >
          </li>
          <li class="item"><a class="link1" href="ankieta.html">Ankieta</a></li>
          <li class="item"><a class="link1" href="about.aspx">O nas</a></li>
        </ul>
      </nav>
    <div id="container-form">
        <form id="form1" runat="server">
            <asp:Table runat="server">
                <asp:TableRow>
                    <asp:TableCell>
                        <asp:Label runat="server" ID="firstname">
                            Imie:
                        </asp:Label>
                    </asp:TableCell>
                    <asp:TableCell>
                        <asp:TextBox runat="server" ID="firstnameTextBox"></asp:TextBox>
                        <asp:RequiredFieldValidator ID="firstnameRequiredFieldValidator" runat="server"
                            ForeColor="Red"
                            ControlToValidate="firstNameTextBox" 
                            ErrorMessage="Proszę podać imię" 
                            Display="Dynamic">
                        </asp:RequiredFieldValidator>
                    </asp:TableCell>
                </asp:TableRow>
                <asp:TableRow>
                    <asp:TableCell>
                        <asp:Label runat="server" ID="surname">
                            Nazwisko:
                        </asp:Label>
                    </asp:TableCell>
                    <asp:TableCell>
                        <asp:TextBox runat="server" ID="surnameTextBox"></asp:TextBox>
                        <asp:RequiredFieldValidator ID="surnameRequiredFieldValidator" runat="server"
                            ForeColor="Red"
                            ControlToValidate="surnameTextBox" 
                            ErrorMessage="Proszę podać nazwisko" 
                            Display="Dynamic">
                        </asp:RequiredFieldValidator>
                    </asp:TableCell>
                </asp:TableRow>
                <asp:TableRow>
                    <asp:TableCell>
                        <asp:Label runat="server" ID="email">
                            Email:
                        </asp:Label>
                    </asp:TableCell>
                    <asp:TableCell>
                        <asp:TextBox runat="server" id="emailTextBox"></asp:TextBox>
                        <asp:RequiredFieldValidator ID="emailRequiredFieldValidator" runat="server"
                            ForeColor="Red"
                            ControlToValidate="emailTextBox" 
                            ErrorMessage="Proszę podać email" 
                            Display="Dynamic">
                        </asp:RequiredFieldValidator>
                    </asp:TableCell>
                    <asp:TableCell>
                        <asp:RegularExpressionValidator runat="server" ID="emailRegularExpressionValidator"
                            ForeColor="Red"
                            ControlToValidate="emailTextBox"
                            ErrorMessage="Proszę podać email we właściwym formacie"
                            Display="Dynamic"
                            ValidationExpression="[a-zA-Z0-9-_.]+@[a-z0-9-.]+.[a-z0-9]{1,4}"></asp:RegularExpressionValidator>
                    </asp:TableCell>
                </asp:TableRow>
                <asp:TableRow>
                    <asp:TableCell>
                        <asp:Label runat="server" ID="Label1">
                            Wiek:
                        </asp:Label>
                    </asp:TableCell>
                    <asp:TableCell>
                        <asp:TextBox runat="server" id="ageTextBox"></asp:TextBox>
                        <asp:RequiredFieldValidator ID="ageRequiredFieldValidator" runat="server"
                            ForeColor="Red"
                            ControlToValidate="ageTextBox" 
                            ErrorMessage="Proszę podać wiek" 
                            Display="Dynamic">
                        </asp:RequiredFieldValidator>
                    </asp:TableCell>
                    <asp:TableCell>
                        <asp:RangeValidator ID="ageRangeValidator" runat="server"
                            ControlToValidate="ageTextBox"
                            MinimumValue="18"
                            MaximumValue="120"
                            Type="Integer"
                            Text="Musisz mieć co najmniej 18 lat">
                        </asp:RangeValidator>
                    </asp:TableCell>
                </asp:TableRow>
                <asp:TableRow>
                    <asp:TableCell>
                        <asp:Label runat="server" ID="password">
                            Hasło:
                        </asp:Label>
                    </asp:TableCell>
                    <asp:TableCell>
                        <asp:TextBox runat="server" id="passwordTextBox" type="password"></asp:TextBox>
                        <asp:RequiredFieldValidator ID="passwordRequiredFieldValidator" runat="server"
                            ForeColor="Red"
                            ControlToValidate="passwordTextBox" 
                            ErrorMessage="Proszę podać hasło" 
                            Display="Dynamic">
                        </asp:RequiredFieldValidator>
                    </asp:TableCell>
                </asp:TableRow>
                <asp:TableRow>
                    <asp:TableCell>
                        <asp:Label runat="server" ID="confirmPassword">
                            Potwierdź hasło:
                        </asp:Label>
                    </asp:TableCell>
                    <asp:TableCell>
                        <asp:TextBox runat="server" id="confirmPasswordTextBox" type="password"></asp:TextBox>
                        <asp:RequiredFieldValidator ID="confirmPasswordRequiredFieldValidator" runat="server"
                            ForeColor="Red"
                            ControlToValidate="confirmPasswordTextBox" 
                            ErrorMessage="Proszę podać ponownie hasło" 
                            Display="Dynamic">
                        </asp:RequiredFieldValidator>
                        <asp:CompareValidator runat="server"
                            ID="confirmPasswordCompareValidator"
                            ControlToValidate="passwordTextBox"
                            ControlToCompare="confirmPasswordTextBox"
                            ErrorMessage="Hasła nie są takie same"
                            Display="Dynamic"
                            Operator="Equal"
                            Type="String">
                        </asp:CompareValidator>
                    </asp:TableCell>
                </asp:TableRow>       
            </asp:Table>
            <asp:Button ID="submitButton" runat="server" style="margin-left: 236px" Text="Potwierdź" />
        </form>
    </div>
        <p id="outputLabelP">
            <asp:Label ID="outputLabel" runat="server" Text="" Visible="false"
                style="position:absolute;left: 40%;top:50%;background-color:white"></asp:Label>
        </p>
    </body>
</html>
