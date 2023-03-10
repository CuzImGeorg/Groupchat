<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
       <form action="index?aktion=login" method="POST" >
        <div>
        <label>Nickname<br></label>
        <input type="text" name="nickname" value=<?= $benutzer->getNickname() ?> required />
        </div>
        
        <div>
        <label>Password<br></label> 
        <input type="password" name="password"  value=<?= $benutzer->getPassword() ?> required> 
        </div>
        <input type="submit" value="registriere" />
        <button><a href="index.php?aktion=Login">Login</a></button>  
       </form>
    </body>
</html>
