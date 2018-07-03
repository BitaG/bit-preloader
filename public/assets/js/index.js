function delete_element(){
    document.getElementById("bit_preload").style.opacity ="0";
    setTimeout(function (){document.getElementById("bit_preload").remove()},1000);
}
window.onload = function (){delete_element();}
