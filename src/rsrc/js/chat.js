home();
function delay(time){
    return new Promise(resolve => setTimeout(resolve, time));
}
async function home(){
    await delay(1000);
    setmessege("This is a Massage",true);
    setmessege("This is my Massage, which I have written as of now",false);
    setmessege("This is a Looooonger Massage",true);
    console.log('Now');
    for (let i = 0; i <= 10; i++){
        await delay(1000);
        setmessege("This is a later messege",true);
        console.log('later');
    }

}



function setmessege(string, notown){
    const array = []
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

    let p=document.createElement('p');
    p.classList.add(m);
    p.innerHTML=ret;
    let messeges = document.getElementById('messages');
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

