function searchKeyEvent(event) {
    if (event.key === "Enter") {
        goToList("someshit")
    }
}

function goToList(text) {
    window.location.href = "http://eim-alu-69044.lab.unavarra.es/grupo-ocelote/src/index.php?page=list&text=" + text;
}

function goTo(page, action) {
    window.location.href = "http://eim-alu-69044.lab.unavarra.es/grupo-ocelote/src/index.php?page=" + page + "&action=" + action;
}
