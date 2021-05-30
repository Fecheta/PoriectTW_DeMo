function Func(){
    var x = document.getElementById("myTopnav");
    if(x.className === "topnav"){
        x.className += " responsive";
    }
    else{
        x.className = "topnav";
    }
}

function AccShow(clicked_id){
    var acc = document.getElementById(clicked_id);
    // console.log(getComputedStyle(acc, null).position);
    var accShow = document.getElementById("userManage");
    if (getComputedStyle(accShow, null).display === "none"){
        accShow.style.display = "flex";
    }else{
        accShow.style.display = "none";
            // console.log(getComputedStyle(accShow, null).left);
    }
}