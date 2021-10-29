const inner_marca = document.getElementById("marca-id");


const lerMarca = () =>{
    console.log('Lendo marcas....');
    var ajax= new XMLHttpRequest();
    ajax.open("GET","./lerMarca.php",true);
    ajax.onload = () => {
        if(ajax.readyState == XMLHttpRequest.DONE){
            if(ajax.status == 200){
                let response=ajax.response;
                inner_marca.innerHTML = response;
            }
        }
    };
    ajax.send();
}

lerMarca();