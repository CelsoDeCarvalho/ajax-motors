const add_marca = document.getElementById("add-marca");
const form = document.getElementById("form-marca");
const valor = document.getElementById("valor");

form.onsubmit = event => {
    event.preventDefault();
}

add_marca.onclick = () => {
    var ajax  = new XMLHttpRequest();
    ajax.open("POST","./criarMarca.php",true);

    let formulario=new FormData(form);
    ajax.send(formulario);
    valor.value = "";
    lerMarca();
}