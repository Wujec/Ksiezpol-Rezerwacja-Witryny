function obliczjs(){
    var dz=document.getElementById("dz").value;
    var dor=document.getElementById("do").value;
    var dn=document.getElementById("dn").value;
    var ro=document.getElementById("rodzaj_pok").value;

    dz=25;
    dor=50;

    if(ro=='o1'){
        ro=500;
        ro=ro/1;
    }
    else if(ro=='o2'){
        ro=200;
        ro=ro/1;

    }
    else if(ro=='o3'){
        ro=80;
        ro=ro/1;

    }
    var cena=(dz+dor+ro)*dn;

    document.getElementById("wynik").innerHTML="Cena za twój pobyt wyniesie: "+cena;
    
}

function obliczphp(){
document.getElementById("wynik2").style.display = "block";
}

function pokaz(){
    document.getElementsByClassName("form")[0].style.left = 0 + "%";
    document.getElementsByClassName("strzalka")[0].style.left = 22 + "%";
    document.getElementsByClassName("strzalka")[0].style.opacity = 0 + "%";
    document.getElementsByClassName("strzalka")[0].style.cursor = "default";
    document.getElementsByClassName("strzalka2")[0].style.left = 22 + "%";
    document.getElementsByClassName("strzalka2")[0].style.opacity = 100 + "%";
}

function schowaj2(){
    document.getElementsByClassName("form")[0].style.left = -22 + "%";
    document.getElementsByClassName("strzalka")[0].style.left = 0 + "%";
    document.getElementsByClassName("strzalka")[0].style.opacity = 100 + "%";
    document.getElementsByClassName("strzalka")[0].style.cursor = "pointer";
    document.getElementsByClassName("strzalka2")[0].style.left = 0 + "%";
    document.getElementsByClassName("strzalka2")[0].style.opacity = 0 + "%";
    document.getElementsByClassName("strzalka2")[0].style.cursor = "pointer";
document.getElementById("wynik2").style.display = "none";

}