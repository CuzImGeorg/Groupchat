<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chat</title>
    <script src="src/view/js/chat.js"></script>
    <link rel="stylesheet" href="src/view/css/style.chat.css">
</head>
<body>
    <div id="messages">

    </div>
    <div id="eingabebereich">
        <label id="benutzername"> <?=$benutzer->getNickname()?> </label>
        <textarea name="eingabe" id="eingabe" > </textarea>
        <input type="button"  id="send" value="SEND">
    </div>


</body>
</html>

