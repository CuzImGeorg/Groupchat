<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zeichenaustauschanwendung</title>
    <link rel="stylesheet" href="src/view/css/style.registry.css">
    <link rel="shortcut icon" type="image/x-icon" href="src/rsrc/logo.png" />

</head>
<body>
<form id="form" action="index.php?aktion=registry" method="POST" >
    <a href="index.php?aktion=login">Login </a>
    <div>
        <p style="float: left">
        <label for="vorname">Vorname<br></label>
        <input class="inputs"type="text" id="vorname" name="vorname" placeholder="Vorname" required />
        </p>
        <p style="float: right">
        <label for="nachname">Nachname<br></label>
        <input type="text" class="inputs" name="nachname" id="nachname" placeholder="Nachname" required />
        </p>
    </div>

    <div>
        <label for="nickname">Nickname<br></label>
        <input type="text" class="inputs" name="nickname" id="nickname"  placeholder="Nickname" required />
    </div>
    <div>
        <p style="float: left">
        <label for="password">Password<br></label>
        <input type="password" class="inputs" name="password" id="password" placeholder="Password" required>
        </p>
        <p style="float: right">
            <label for="confpassword">Bestätige<br></label>
            <input type="password"  class="inputs"name="confpassword" id="confpassword" placeholder="Password"  required>
        <p/>
    </div>
    <div >
        <input  class="mainbtn" type="submit" value="Registrieren" />

    </div>
</form>
</body>
</html>
