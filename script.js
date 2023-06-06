let count = 1;
document.getElementById("radio1").chequed = true;

setInterval( function() {
    nextImage();
}, 2000)

function nextImage(){
    count++;
    if(count>7){
        count = 1;
    }
    document.getElementById("radio"+count).chequed = true;
}