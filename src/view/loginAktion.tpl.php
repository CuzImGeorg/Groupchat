<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zeichenaustauschanwendung</title>
        <link rel="stylesheet" href="src/view/css/style.registry.css">
        <link rel="shortcut icon" type="image/x-icon" href="src/rsrc/logo.png" />

    </head>
    <body>
       <form  action="index.php?aktion=login" method="POST" >

        <div>
            <label for="nickname">Nickname<br></label>
            <input class="inputs" type="text" name="nickname" id="nickname" placeholder=<?=$benutzer->getNickname()?> required />

       </div>

        <div>
                <label for="password">Password<br></label>
                <input type="password" class="inputs" name="password" id="password"  placeholder=<?= $benutzer->getPassword() ?> required>
        </div>
        <div>
            <a  href="index.php?controller=index&aktion=registry">Registrieren</a>
        </div>
        <div>

            <input class="mainbtn" type="submit" value="Login" />

        </div>
       </form>
    </body>
</html>
