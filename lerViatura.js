const inner_viaturas = document.getElementById("car-list");

const lerViaturas = () =>{ 
    console.log('Lendo viatura....');
    var ajax= new XMLHttpRequest();
    ajax.open("GET","./lerViatura.php",true);
    ajax.onload = () => {
        if(ajax.readyState == XMLHttpRequest.DONE){
            if(ajax.status == 200){
                let response=ajax.response;
                inner_viaturas.innerHTML = response;
            }
        }
    };
    ajax.send();
}

lerViaturas();