function toggle() {
    var t = document.getElementById("profile");
    if (t.style.display === "flex") {
        t.style.display = "none";
    } else {
        t.style.display = "flex";
    }
}

function drupdon() {
    var y = document.getElementById("down");
    var x = document.getElementById("up");
    if (.kon.style.transform === "rotate-180") {
        console.log('tes')
        if (y.style.display === "flex") {
            y.style.display = "none";
        } else {
            y.style.display = "flex";
        }
        document.querySelector('.kon').style.transform = 'rotate(180deg)';
    } else {
        console.log('ajg')
        if (x.style.display === "flex") {
            x.style.display = "none";
        } else {
            x.style.display = "flex";
        }
        document.querySelector('.kon').style.transform = 'rotate(45deg)';
    }

}
