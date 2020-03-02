function verif(){

const nickname= document.getElementById('nickname').value;
const zonetxt= document.getElementById('zonetxt').value;

if(nickname!="" && zonetxt!=""){

    submit();
    
}
else{

    alert('please enter your nickname and a message');

}

}