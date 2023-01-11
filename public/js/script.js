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
        if (y.style.display === "flex") {
            y.style.display = "none";
        } else {
            y.style.display = "flex";
        }
        document.querySelector('.kon').style.transform = 'rotate(180deg)';

}
