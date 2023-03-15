
let constante = 0;
home();
function delay(time){
    return new Promise(resolve => setTimeout(resolve, time));
}
async function home(){
    await delay(100);
    while(true){

    const xml = getXml("index.php?controller=ajax&aktion=getAllM");
    const msgs = (await xml).children.item(0).children.item(0).children.item(0);
    const msgsL =msgs.children.length;
    let value = msgs.children.item(0).getElementsByTagName('id').item(0).childNodes.item(0).nodeValue;
        if (value>constante){
            clear();
            constante= value;
    for(let i = 0; i<msgsL;i++){
        let msg = msgs.children.item(msgsL-i-1).getElementsByTagName('msgtext').item(0).childNodes.item(0).nodeValue;
        let benutzer = msgs.children.item(msgsL-i-1).getElementsByTagName('benutzername').item(0).childNodes.item(0).nodeValue;
        if(document.getElementById("benutzername").innerHTML.replace(" ", "").startsWith(benutzer)) {
            setmessege(msg, false);

        }else {
            setmessege(msg, true);

        }
         }
        }
        await delay(500);
    }

}
async function getXml(str) {
    var erg = await fetch(str);
    var i = await erg.text();
    const parser = new DOMParser();
    var xmlDoc = await parser.parseFromString(i,"text/xml");
    return xmlDoc;
//    const v = await xmlDoc.getElementsByTagName("rows").item(0).getElementsByTagName("stationValues");
}

function clear(){
    const messeges = document.getElementById('messages');
    messeges.innerHTML="";
}
function setmessege(string, notown){
    const array = [];
    const strglenght =string.length;
    let j;
    for (let i = 80; i <= strglenght; i+=80){
        const thisstr =string.slice(i-80,i)
        array.push(thisstr);
        j=i;
    }
    const idiff= strglenght-j;
    let laststr =string.slice(strglenght-idiff,strglenght);
    if (strglenght>80){
        let l = laststr.length;
        while(l<80){
            l++;
            laststr=laststr+" ";
        }
    }
    array.push(laststr);

    let m = notown ? "messege" : "ownmessege";
    let ret = "";
    array.forEach(sliceString)

    function sliceString(value, pos, array){
    value=value.replaceAll(' ',"&nbsp;");
    if (pos==0 && pos==array.length-1) ret+="<label class='oneliner'>"+value+"</label>";
    else if (pos==0) ret+="<label class='firsttext'>"+value+"</label>";
    else if (pos==array.length-1)ret+="<label class='lasttext'>"+value+"</label>";
    else ret+="<label class='midtext'>"+value+"</label>";
    ret+="<br>";
    }
    const messeges = document.getElementById('messages');
    let p=document.createElement('p');
    p.classList.add(m);
    p.innerHTML=ret;

    messeges.appendChild(p);
    scrollToBottom(messeges);

}
function savemessege(){
    const text = document.getElementById('eingabebereich').children.item(1);
    setmessege(text.value,true);
    text.value="";
}

function scrollToBottom(element) {
    element.scroll({ top: element.scrollHeight, behavior: 'smooth' });
}
function send(benutzerid){


    const msg = document.getElementById("eingabebereich").children.item(1);
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            msg.value="";
        }
    };

    xhttp.open("POST", 'index.php?controller=ajax&aktion=send',true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("benutzerid="+benutzerid+"&text="+msg.value);
}

