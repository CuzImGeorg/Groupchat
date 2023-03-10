<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chat</title>
    <link rel="stylesheet" href="src/view/css/style.chat.css">
</head>
<body>
    <div id="messages">
        <p class="messege">
        <label>This is a Massage</label>
        </p>
        <p class="messege">
            <label>This is a Looooonger Massage</label>
        </p>
        <p class="ownmessege">
            <label>This is my Massage, which I have written as of now </label>
        </p>
    </div>
    <div id="eingabebereich">
        <label id="benutzername"> <?=$benutzer->getNickname()?> </label>
        <input type="text" name="eingabe" id="eingabe">
        <input type="button" id="send" value="SEND">
    </div>


</body>
</html>

