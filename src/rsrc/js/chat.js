let Scrollvalue = 0;
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
            const div =document.getElementById('messages');
            if (div.clientHeight >= div.scrollHeight-300) Scrollvalue==div.scrollHeight+1000;
            Scrollvalue = div.clientHeight;
            clear();
            constante= value;
            for(let i = 0; i<msgsL;i++){
                let msg = msgs.children.item(msgsL-i-1).getElementsByTagName('msgtext').item(0).childNodes.item(0).nodeValue;
                let benutzer = msgs.children.item(msgsL-i-1).getElementsByTagName('benutzername').item(0).childNodes.item(0).nodeValue;
                let time = msgs.children.item(msgsL-i-1).getElementsByTagName('time').item(0).childNodes.item(0).nodeValue;

                msg = msg.replaceAll("LessThan", "<");
                msg = msg.replaceAll("GreaterThan", ">");
                if(document.getElementById("benutzername").innerHTML.replace(" ", "").startsWith(benutzer)) {
                    setmessege(msg, false, benutzer,time);

                }else {
                    benutzer = benutzer.replaceAll("GreatherThan", "&gt;");
                    benutzer = benutzer.replaceAll("LessThan", "&lt;");
                    setmessege(msg, true, benutzer,time);

                }
            }
            div.clientHeight = Scrollvalue;
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

function setmessege(string, notown, benutzername, time) {
    const newtime = timeToString(time);
    let m = notown ? "messege" : "ownmessege";
    let ret = "";
    if (notown) ret = "<span class='user' style='float: left'>"+benutzername+"</span> " ;
    ret += "<textarea readonly>" + string + "</textarea>"
    const messeges = document.getElementById('messages');
    let p = document.createElement('p');
    p.classList.add(m);
    p.innerHTML = ret;

    messeges.appendChild(p);
    let itemNr = 0;
    if (notown) itemNr=1;
    const textarea = p.children.item(itemNr);
    const AoText = textarea.innerHTML.length;

    if (AoText<6) textarea.style.width=(AoText*4) + "%";
    else if (AoText<20) textarea.style.width=(AoText*2) + "%";
    else if (AoText<60)textarea.style.width=(AoText) + "%";
    else textarea.style.width=80 + "%";

    console.log(textarea.scrollHeight+"px")
    if (textarea.scrollHeight>70) textarea.style.height = textarea.scrollHeight+"px";
    scrollToBottom(messeges);
}
function savemessege(){
    const text = document.getElementById('eingabebereich').children.item(1);
    setmessege(text.value,true);
    text.value="";
}

function scrollToBottom(element) {
    element.scroll({ top: element.scrollHeight, behavior: 'auto' });
}
function send(benutzerid){


    const msg = document.getElementById("eingabebereich").children.item(2);
    console.log(msg);
    if (msg.value.replaceAll(" " ,"")==""){
        msg.value="";
        return;
    }
    let retValue = msg.value;
    retValue= retValue.replaceAll(">","GreaterThan");
    retValue= retValue.replaceAll("<","LessThan");

    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            msg.value="";
        }
    };

    xhttp.open("POST", 'index.php?controller=ajax&aktion=send',true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("benutzerid="+benutzerid+"&text="+retValue);
}
function timeToString(time){
 let ret = "/";
    ret+=  time.at(8);
    ret+=  time.at(9);
    ret+=  "."+time.at(5);
    ret+=  time.at(6);
    ret+= " "+time.at(11);
    ret+= time.at(12);
    ret+= ":"+time.at(14);
    ret+= time.at(15);
 return ret;
}
function sendOnReturn(benutzerid) {
    //FOTZE DU HOSCH SCHUN DIE ID SCHREIB UM
    let text = document.getElementById('eingabe').value;
    if(text.includes("\n")){
        send(benutzerid);
    }

}

