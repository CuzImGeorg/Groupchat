<xml version="1.0" encoding="UTF-8" ?>
<root>
    <msgs>
        <?php foreach ($msgs as $key ) { ?>
        <msg>
            <id><?php echo $key->getId()?></id>
            <time><?php echo $key->getTime()?></time>
            <msgtext> <?php echo $key->getMsgtext()?></msgtext>
            <benutzername><?php echo $key->getBenutzer()->getNickname()?></benutzername>
        </msg>
        <?php } ?>
    </msgs>
</root>