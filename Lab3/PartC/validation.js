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
    else if(document.forms["myForm"].addressTwo.value.length ==0)
    {
        alert("You must enter an address")
        return false;
    }
    else if (document.forms["myForm"].email.value.length == 0)
    {
        alert("You must enter a valid email")
        return false;
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

function load() {
    var fName = document.getElementById('firstName');
    var lName = document.getElementById('lastName');
    var adOne = document.getElementById('addressOne');
    var email = document.getElementById('email');
    var adTwo = document.getElementById('addressTwo')

    if (fName.value == '') {
        fName.style.borderColor = 'red';
        fName.style.background = "";
    }

    if (lName.value == '') {
        lName.style.borderColor = 'red';
        lName.style.background = "";
    }

    if (adOne.value == '') {
        adOne.style.borderColor = 'red';
        adOne.style.background = "";
    }

    if (adTwo.value == '')
    {
        adTwo.style.borderColor = 'red';
        adTwo.style.background = '';
    }

    if (email.value == '') {
        email.style.borderColor = 'red';
        email.style.background = "";
    }

}

function change(a)
{
    var fName = document.getElementById('firstName');
    var lName = document.getElementById('lastName');
    var adOne = document.getElementById('addressOne');
    var email = document.getElementById('email');
    var adTwo = document.getElementById('addressTwo');

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

    if (a === 'aTwo') {
        if (adTwo.value === '') {
            adTwo.style.borderColor = 'red';
            adTwo.style.background = "";
        }
        else {
            adTwo.style.borderColor = '';
            adTwo.style.background = 'yellow';
            adTwo.style.fontStyle = 'italic';
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
    var txtAddTwo = document.getElementById('addTwo')

    var fName = document.getElementById('firstName');
    var lName = document.getElementById('lastName');
    var adOne = document.getElementById('addressOne');
    var adTwo = document.getElementById('addressTwo');
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
    else if (a == 'addTwo')
    {
        txtAddTwo.style.textDecoration = 'underline';
    }
    else if (a == 'email2')
    {
        txtEmail.style.textDecoration = 'underline';
    }

    if (a == 'fClear')
    {
        txtFName.style.textDecoration = 'none';
        if (fName.value === '')
        {
            fName.style.borderColor = 'red';
            fName.style.background = '';
            fName.style.fontStyle = '';
        }
        else
        {
            fName.style.borderColor = '';
            fName.style.background = '';
            fName.style.fontStyle = '';
        }

    }
    else if (a == 'lClear')
    {
        txtLName.style.textDecoration = 'none';
        if (lName.value === '')
        {
            lName.style.borderColor = 'red';
            lName.style.background = '';
            lName.style.fontStyle = '';
        }
        else
        {
            lName.style.borderColor = '';
            lName.style.background = '';
            lName.style.fontStyle = '';
        }
    }
    else if (a == 'aClear')
    {
        txtAddOne.style.textDecoration = 'none';
        if (adOne.value === '')
        {
            adOne.style.borderColor = 'red';
            adOne.style.background = '';
            adOne.style.fontStyle = '';
        }
        else
        {
            adOne.style.borderColor = '';
            adOne.style.background = '';
            adOne.style.fontStyle = '';
        }
    }
    else if (a == 'a2Clear')
    {
        txtAddTwo.style.textDecoration = 'none';
        if (adTwo.value === '')
        {
            adTwo.style.borderColor = 'red';
            adTwo.style.background = '';
            adTwo.style.fontStyle = '';
        }
        else
        {
            adTwo.style.borderColor = '';
            adTwo.style.background = '';
            adTwo.style.fontStyle = '';
        }
    }
    else if (a == 'eClear')
    {
        txtEmail.style.textDecoration = 'none';
        if (email.value === '')
        {
            email.style.borderColor = 'red';
            email.style.background = '';
            email.style.fontStyle = '';
        }
        else
        {
            email.style.borderColor = '';
            email.style.background = '';
            email.style.fontStyle = '';
        }
    }

}
