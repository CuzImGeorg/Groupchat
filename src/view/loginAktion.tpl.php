<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inf4Chat</title>
        <link rel="stylesheet" href="src/view/css/style.registry.css">

    </head>
    <body>

       <form  action="index.php?aktion=login" method="POST" >
           <a href="index.php?aktion=registry">Noch kein account? →</a>
        <div>
            <label for="nickname">Nickname<br></label>
            <input type="text" name="nickname" id="nickname" placeholder=<?=$benutzer->getNickname()?> required />
       </div>

        <div>
            <label for="password">Password<br></label>
            <input type="password" name="password" id="password"  placeholder=<?= $benutzer->getPassword() ?> required>
        </div>
        <div>

            <input type="submit" value="login" />
        </div>
       </form>
    </body>
</html>
