const img =
    [
        "image/one.png",
        "image/two.png",
        "image/three.png"
    ];

let index = 0;

function update(){
    document.getElementById("ADB").style = "opacity: 0;";
    setTimeout(() => { 
        document.getElementById("ADB").src = img[index];
        document.getElementById("ADB").style = "opacity: 1;";
    }, 200);
    
}


function Left(){
    index --;
    if (index < 0){
        index = img.length - 1;
    }
    update();
}


function Rigth(){
    index ++;
    if (index >= img.length){
        index = 0;
    }
    update();
}