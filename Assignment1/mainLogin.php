<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Main Login</title>
    </head>
    <body>
        <h1>Member Login</h1>
        <form name="form1" method="post" action="checkLogin.php">
            <p>
                <label for="loginUser"> User: </label>
            </p>
            <p>
                <input name="loginUser" type="text" id="loginUser" />
            </p>
            <p>
                <label for="loginPwd">Password: </label>
            </p>
            <p>
                <input name="loginPwd" type="password" id="loginPwd" />
            </p>
            <p>
                <input type="submit" name="Submit" value="Login"/>
            </p>
        </form>
    </body>
</html>