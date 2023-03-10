<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
       <form action="index.php?aktion=login" method="POST" >

        <div>
            <label for="nickname">Nickname<br></label>
            <input type="text" name="nickname" id="nickname" value=<?= $benutzer->getNickname() ?> required />
       </div>

        <div>
            <label for="password">Password<br></label>
            <input type="password" name="password" id="password"  value=<?= $benutzer->getPassword() ?> required>
        </div>
           <p>--------------------------</p>
        <input type="submit" value="login" />
        <button><a href="index.php?aktion=registry">Registrieren</a></button>  
       </form>
    </body>
</html>
