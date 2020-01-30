using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class _Default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack)
        {
            Validate();

            if (IsValid)
            {
                string firstname = firstnameTextBox.Text;
                string surname = surnameTextBox.Text;
                string email = emailTextBox.Text;
                string age = ageTextBox.Text;
                string password = passwordTextBox.Text;
                string confirmPassword = confirmPasswordTextBox.Text;

                outputLabel.Text = "Dziękujemy<br/>" +
                    "Otrzymaliśmy poniższe informacje:<br/>";
                outputLabel.Text +=
                    String.Format("Imie: {0}{1} Nazwisko: {2}{3} Email: {4}{5} Wiek: {6}{7} Hasło: {8}",
                    firstname, "<br/>", surname, "<br/>", email, "<br/>", age, "<br/>", password);
                outputLabel.Visible = true;
            }
        }
    }
}