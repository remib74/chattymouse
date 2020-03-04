function replaceSmiley(smile){
    var smileys = [" :) "," :(( "," :( "," %| "," 00° "," ^^) "," ++0 "," 8) "," :D) "," :0 "," :¨¨ "," ..°° ",";)"];
    const smileRep=document.getElementById("zonetxt").value;
    let smileRepWrite=smileRep + smileys[smile];
    document.getElementById("zonetxt").value=smileRepWrite;
    
}