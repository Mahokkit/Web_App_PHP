function validate()
{
    if(chkName() == false)
    {
        return false;
    }
    else if (chkDate() == false)
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
        alert("First Name must be Alphabetical!");
        return false;

    }
    else if (!nameChk.test(LName.value))
    {
        alert("Last Name Must be Alphabetical!")
        return false;
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
        alert("Date must be in YYYY-MM-DD Format")
        return false;
    }
    else if (!dateChk.test(HDate.value))
    {
        alert("Date Must be in YYYY-MM-DD Format")
        return false;
    }
}