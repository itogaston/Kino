function searchKeyEvent(event) {
    if (event.key === "Enter") {
        goToList("someshit")
    }
}

function goToList(text) {
    window.location.href = "http://localhost:5500?page=list&text=" + text;
}