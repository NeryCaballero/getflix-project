// Nav Bar Toggle Button

document.getElementById('toggleBtnOpen').addEventListener('click', ()=> {
        document.getElementById('hidden-menu').style.visibility = "visible";
});

document.getElementById('toggleBtnClose').addEventListener('click', ()=> {
        document.getElementById('hidden-menu').style.visibility = "hidden";
});