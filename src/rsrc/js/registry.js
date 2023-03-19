function convert(text){
    text = text.replaceAll(">", "GreatherThan");
    text = text.replaceAll("<", "LessThan");
    return text;
}

function auslesbar(){
    const nickname = document.getElementById('nickname');
    nickname.value = convert(nickname.value);
    console.log(nickname.value);
}
