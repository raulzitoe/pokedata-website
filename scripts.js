function poke_info() {
    var x = document.getElementById("poke_info");
    var y = document.getElementById("poke_image");
    x.style.visibility = "visible";
    y.style.removeProperty('height')
    y.style.maxHeight = "100px";
}

function poke_image() {
    var x = document.getElementById("poke_info");
    var y = document.getElementById("poke_image");
    x.style.visibility = "hidden";
    y.style.removeProperty('max-height')
    y.style.height = "80%";
}