<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form id="form" action="index.php?aktion=registry" method="POST" >

    <div style="float: left">
        <label for="vorname">Vorname<br></label>
        <input type="text" id="vorname" name="vorname" required />
    </div>

    <div>
        <label for="nachname">Nachname<br></label>
        <input type="text" name="nachname" id="nachname" required />
    </div>

    <div>
        <label for="nickname">Nickname<br></label>
        <input type="text" name="nickname" id="nickname" required />
    </div>
    <p>--------------------------</p>
    <div>
        <label for="password">Password<br></label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <label for="confpassword">Bestätige Password<br></label>
        <input type="password" name="confpassword" id="confpassword" required>
    </div>
    <p>--------------------------</p>

    <input type="submit" value="Registrieren" />
    <button ><a href="index.php?aktion=login">Login </a></button>
</form>
</body>
</html>
