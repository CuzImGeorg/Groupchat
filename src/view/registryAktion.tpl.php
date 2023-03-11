<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registry</title>
    <link rel="stylesheet" href="src/view/css/style.registry.css">

</head>
<body>
<form id="form" action="index.php?aktion=registry" method="POST" >

    <div>
        <p style="float: left">
        <label for="vorname">Vorname<br></label>
        <input type="text" id="vorname" name="vorname" placeholder="Vorname" required />
        </p>
        <p style="float: right">
        <label for="nachname">Nachname<br></label>
        <input type="text" name="nachname" id="nachname" placeholder="Nachname" required />
        </p>
    </div>

    <div>
        <label for="nickname">Nickname<br></label>
        <input type="text" name="nickname" id="nickname"  placeholder="Nickname" required />
    </div>
    <div>

        <label for="password">Password<br></label>
        <input type="password" name="password" id="password" placeholder="Password" required>

    </div>
    <div>
        <label for="confpassword">Bestätige<br></label>
        <input type="password" name="confpassword" id="confpassword" placeholder="Password"  required>

    </div>
    <div style="margin-top: 1rem">
        <input  style="margin-right: .5rem" type="submit" value="Registrieren" />
        <button style="margin-left: .5rem" ><a href="index.php?aktion=login">Login </a></button>
    </div>
</form>
</body>
</html>
