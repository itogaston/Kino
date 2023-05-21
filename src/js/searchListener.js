function searchKeyEvent(event) {
    if (event.key === "Enter") {
        goToList("someshit")
    }
}

function goToList(text) {
    window.location.href = "http://localhost:5500?page=list&text=" + text;
}

function goTo(page, action) {
    window.location.href = "http://localhost:5500/src/index.php?page=" + page + "&action=" + action;
}