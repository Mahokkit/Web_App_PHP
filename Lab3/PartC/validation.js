function checkForm()
{
    if(document.forms["myForm"].firstName.value.length ==0)
    {
        alert("You must enter a first name");
        return false;
    }
    else if(document.forms["myForm"].lastName.value.length ==0)
    {
        alert("You must enter a last name");
        return false;
    }
    else if(document.forms["myForm"].addressOne.value.length ==0)
    {
        alert("You must enter an address");
        return false;
    }
    else if (document.forms["myForm"].email.value.length == 0)
    {
        alert("You must enter a valid email")
        return true;
    }
    else if (document.forms['myForm'].checkbox.checked == false)
    {
        alert('You must accept the Term and Condition');
        document.getElementById(['TC']).innerHTML = "Must Accept Term and Conditions"
        return false
    }
    else
    {
        alert("The form is valid. Would go to server now.");
        return true;
    }
}

function change()
{
    var fName = document.getElementById('firstName');
    var lName = document.getElementById('lastName');
    var adOne = document.getElementById('addressOne');
    var email = document.getElementById('email');


    if(fName.value == '')
    {
        fName.style.borderColor = 'red';
        fName.style.background = "";
    }
    else
    {
        fName.style.borderColor = '';
        fName.style.background = 'yellow';

    }


    if(lName.value == '')
    {
        lName.style.borderColor = 'red';
        lName.style.background = "";
    }
    else
    {
        lName.style.borderColor = '';
        lName.style.background = 'yellow';

    }

    if(adOne.value == '')
    {
        adOne.style.borderColor = 'red';
        adOne.style.background = "";
    }
    else
    {
        adOne.style.borderColor = '';
        adOne.style.background = 'yellow';

    }

    if(email.value == '')
    {
        email.style.borderColor = 'red';
        email.style.background = "";
    }
    else
    {
        email.style.borderColor = '';
        email.style.background = 'yellow';

    }
}

function filling(a)
{
    var txtFName = document.getElementById('fName');
    var txtLName = document.getElementById('lName');
    var txtAddOne = document.getElementById('addOne');
    var txtEmail = document.getElementById('email2')
    if (a == 'fName')
    {
        txtFName.style.textDecoration = 'underline';
    }
    else if (a == 'lName')
    {
        txtLName.style.textDecoration = 'underline';
    }
    else if (a == 'addOne')
    {
        txtAddOne.style.textDecoration = 'underline';
    }
    else if (a == 'email2')
    {
        txtEmail.style.textDecoration = 'underline';
    }

}