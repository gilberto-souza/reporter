function confimar() {
    if (confirm("Você tem certeza de excluir o Usuário?") == true) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("del").innerHTML = txt;
}