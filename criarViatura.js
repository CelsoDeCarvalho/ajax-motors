const add_viatura = document.getElementById("add-viatura");
const form_viaturas = document.getElementById("form-viatura");

const id_modelo = document.getElementById("id-modelo");
const id_matricula = document.getElementById("id-matricula");

form_viaturas.onsubmit = event => {
    event.preventDefault();
}

add_viatura.onclick = () => {
    var ajax  = new XMLHttpRequest();
    ajax.open("POST","./criarViatura.php",true);
    let formulario=new FormData(form_viaturas);
    ajax.send(formulario);
    lerViaturas();
    id_modelo.value="";
    id_matricula.value="";

}