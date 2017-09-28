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
    }
    else
    {
        fName.style.borderColor = '';
        fName.style.background = 'yellow';
    }

    if(lName.value == '')
    {
        lName.style.borderColor = 'red';
    }
    else
    {
        lName.style.borderColor = '';
        lName.style.background = 'yellow';
    }

    if(adOne.value == '')
    {
        adOne.style.borderColor = 'red';
    }
    else
    {
        adOne.style.borderColor = '';
        adOne.style.background = 'yellow';
    }

    if(email.value == '')
    {
        email.style.borderColor = 'red';
    }
    else
    {
        email.style.borderColor = '';
        email.style.background = 'yellow';
    }
}