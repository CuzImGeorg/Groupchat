<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inf4Chat</title>
    <link rel="stylesheet" href="src/view/css/style.registry.css">

</head>
<body>
<form id="form" action="index.php?aktion=registry" method="POST" >
    <a href="index.php?aktion=login">Zurück → </a>
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
        <p style="float: left">
        <label for="password">Password<br></label>
        <input type="password" name="password" id="password" placeholder="Password" required>
        </p>
        <p style="float: right">
        <label for="confpassword">Bestätige<br></label>
        <input type="password" name="confpassword" id="confpassword" placeholder="Password"  required>
        </p>
    </div>
    <div>


    </div>
    <div style="margin-top: 1rem">
        <input  style="margin-right: .5rem" type="submit" value="Registrieren" />

    </div>
</form>
</body>
</html>
