function loadData(name){
    document.getElementsByClassName("item")[0].style.display = "flex";
    document.getElementsByClassName("pro-left")[0].style.display = "none";
    document.getElementsByClassName("clip")[0].style.display = "none"; 
	document.getElementsByClassName("pro-middle")[0].style.display = "none"; 
	document.getElementsByClassName("pro-right")[0].style.display = "none"; 
	
	
    if(name=='btn1'){
        document.getElementById("image123").src = "../profile/images/a.jpg";
    }
    if(name=='btn2'){
        document.getElementById("image123").src = "../profile/images/t2.jpg";
    }
    if(name=='btn3'){
        document.getElementById("image123").src = "../profile/images/b.jpg";
    }
    if(name=='btn4'){
        document.getElementById("image123").src = "../profile/images/b1.jpg";
    }
    if(name=='btn5'){
        document.getElementById("image123").src = "../profile/images/1.jpg";
    }
    if(name=='btn6'){
        document.getElementById("image123").src = "../profile/images/t1.jpg";
    }
}
