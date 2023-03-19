
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chat</title>
    <script src="src/rsrc/js/chat.js"></script>
    <link rel="stylesheet" href="src/view/css/style.chat.css">
</head>
<body>
    <div id="messages">


    </div>
    <div id="unique">
        <div id="eingabebereich">
            <input id="bid" type="hidden" value="<?=$benutzer->getId()?>" >
            <label id="benutzername"> <?=$benutzer->getNickname()?> </label>
            <textarea name="eingabe" id="eingabe" onkeydown="sendOnReturn(<?=$benutzer->getId()?>)" > </textarea>
            <button type="button"  id="send" onclick="send(<?=$benutzer->getId()?>)" > send</button>
        </div>
    </div>

</body>
</html>

