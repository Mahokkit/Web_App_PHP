function validate()
{
    if(chkDate() === false)
    {
        return false;
    }
    else if (chkName() === false)
    {
        return false;
    }
    else if (chkCap() === false)
    {
        return false;
    }
    else
    {
        return true;
    }
}

function chkName()
{
    var nameChk = /^[A-Za-z]/;
    var FName = document.getElementById('empFName');
    var LName = document.getElementById('empLName');

    if(!nameChk.test(FName.value))
    {
        alert("Name must be Alphabetic!");
        document.getElementById(['FN']).innerHTML = "Name must be an Alphabetic!";
        return false;
    }
    else
    {
        document.getElementById(['FN']).innerHTML = "";
    }

    if (!nameChk.test(LName.value))
    {
        alert("Last Name Must be Alphabetical!");
        document.getElementById(['LN']).innerHTML = "Must be an Alphabetic!";
        return false;
    }
    else
    {
        document.getElementById(['LN']).innerHTML = "";
    }
}

function chkDate()
{
    var dateChk = /^[0-9]{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])/;
    // http://www.webdeveloper.com/forum/showthread.php?190078-Javascript-Date-(yyyy-mm-dd)-validation
    var BDate = document.getElementById('empBDate');
    var HDate = document.getElementById('empHDate');

    if (!dateChk.test(BDate.value))
    {
        alert("Date must be in YYYY-MM-DD Format");
        document.getElementById(['BD']).innerHTML = "Date must be in YYYY-MM-DD Format";
        return false;
    }
    else
    {
        document.getElementById(['BD']).innerHTML = "";
    }

    if (!dateChk.test(HDate.value))
    {
        alert("Date Must be in YYYY-MM-DD Format");
        document.getElementById(['HD']).innerHTML = "Date must be in YYYY-MM-DD Format";
        return false;
    }
    else
    {
        document.getElementById(['HD']).innerHTML = "";
    }
}

function chkCap()
{
    var FName = document.getElementById('empFName').value;
    var LName = document.getElementById('empLName').value;

    if (FName.charAt(0) !== FName.charAt(0).toUpperCase())
    {
        alert("First Letter Must be Capital");
        document.getElementById(['FN']).innerHTML = "First Letter Must be Capital";
        return false;
    }
    else
    {
        document.getElementById(['FN']).innerHTML = "";
    }

    if (LName.charAt(0) !== LName.charAt(0).toUpperCase())
    {
        alert("First Letter Must be Capital");
        document.getElementById(['LN']).innerHTML = "First Letter Must be Capital";
        return false;
    }
    else
    {
        document.getElementById(['LN']).innerHTML = "";
    }
}

function checkPassword()
{
    var passwordOne = document.getElementById("loginPwd").value;
    var passwordTwo = document.getElementById("loginPwdConfirm").value;
    var errorSpanElement = document.getElementById("errorMsg");

    if(passwordOne != passwordTwo)
    {
        errorSpanElement.innerHTML = "Passwords do not match!";
        return false;
    }
    else if(passwordOne.length <  8) // should probably have some complexity checking!!
    {
        errorSpanElement.innerHTML = "Password does not meet complexity requirements!";
        return false;
    }
    else
    {
        return true;
    }
}
