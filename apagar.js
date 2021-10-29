const apagar = (id) => {
  var ajax = new XMLHttpRequest();
  ajax.open("POST", "./apagar.php", true);
  ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajax.onreadystatechange = function () {
    if (this.status === 200) {
      console.log(this.responseText); // echo from php
    }
  };
  ajax.send("id=" + id);
  lerViaturas();
}
