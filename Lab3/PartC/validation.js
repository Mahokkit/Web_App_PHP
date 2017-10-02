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

function change(a)
{
    var fName = document.getElementById('firstName');
    var lName = document.getElementById('lastName');
    var adOne = document.getElementById('addressOne');
    var email = document.getElementById('email');

    if (a === 'FName') {
        if (fName.value === '') {
            fName.style.borderColor = 'red';
            fName.style.background = "";
        }
        else {
            fName.style.borderColor = '';
            fName.style.background = 'yellow';
            fName.style.fontStyle = 'italic';
        }
    }

    if (a === 'LName') {
        if (lName.value === '') {
            lName.style.borderColor = 'red';
            lName.style.background = "";
        }
        else {
            lName.style.borderColor = '';
            lName.style.background = 'yellow';
            lName.style.fontStyle = 'italic';
        }
    }

    if (a === 'aOne') {
        if (adOne.value === '') {
            adOne.style.borderColor = 'red';
            adOne.style.background = "";
        }
        else {
            adOne.style.borderColor = '';
            adOne.style.background = 'yellow';
            adOne.style.fontStyle = 'italic';

        }
    }

    if (a === 'Email') {
        if (email.value === '') {
            email.style.borderColor = 'red';
            email.style.background = "";
        }
        else {
            email.style.borderColor = '';
            email.style.background = 'yellow';
            email.style.fontStyle = 'italic';

        }
    }
}

function filling(a)
{
    var txtFName = document.getElementById('fName');
    var txtLName = document.getElementById('lName');
    var txtAddOne = document.getElementById('addOne');
    var txtEmail = document.getElementById('email2')

    var fName = document.getElementById('firstName');
    var lName = document.getElementById('lastName');
    var adOne = document.getElementById('addressOne');
    var email = document.getElementById('email');

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

    if (a == 'fClear')
    {
        txtFName.style.textDecoration = 'none';
        fName.style.borderColor = '';
        fName.style.background = '';
        fName.style.fontStyle = '';
    }
    else if (a == 'lClear')
    {
        txtLName.style.textDecoration = 'none';
        lName.style.borderColor = '';
        lName.style.background = '';
        lName.style.fontStyle = '';
    }
    else if (a == 'aClear')
    {
        txtAddOne.style.textDecoration = 'none';
        adOne.style.borderColor = '';
        adOne.style.background = '';
        adOne.style.fontStyle = '';
    }
    else if (a == 'eClear')
    {
        txtEmail.style.textDecoration = 'none';
        email.style.borderColor = '';
        email.style.background = '';
        email.style.fontStyle = '';
    }

}