function validate()
{
    if(chkName() == false)
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

}