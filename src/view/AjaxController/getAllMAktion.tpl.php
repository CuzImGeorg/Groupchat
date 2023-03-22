<xml version="1.0" encoding="UTF-8" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
<root>
    <msgs>
        <?php foreach ($msgs as $key ) { ?>
        <msg>
            <id><?php echo $key->getId()?></id>
            <time><?php echo $key->getTime()?></time>
            <msgtext><?php echo $key->getMsgtext()?></msgtext>
            <benutzername><?php echo $key->getBenutzer()->getNickname()?></benutzername>
        </msg>
        <?php } ?>
    </msgs>
</root>
</xml>