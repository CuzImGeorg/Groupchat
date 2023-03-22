
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Zeichenaustauschanwendung</title>
    <script src="src/rsrc/js/chat.js"></script>
    <link rel="stylesheet" href="src/view/css/style.chat.css">
    <link rel="shortcut icon" type="image/x-icon" href="src/rsrc/logo.png" />
</head>
<body>
    <div id="messages">


    </div>
    <div id="unique">
        <div id="eingabebereich">
            <input id="bid" type="hidden" value="<?=$benutzer->getId()?>" >
             <button id="benutzername"> <?=$benutzer->getNickname()?>  </button>
            <textarea name="eingabe" id="eingabe" > </textarea>
            <button type="button"  id="send" onclick="send(<?=$benutzer->getId()?>)" > send</button>
        </div>
    </div>

</body>
</html>

