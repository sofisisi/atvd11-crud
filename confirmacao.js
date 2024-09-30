function funcao_alert(){
    var x;
    var r=confirm("Você quer mesmo excluir a nota?");
    if (r==true) {
    fetch('delete.php')
    }
    else {
    x="Nota não excluída!";
    }
    document.getElementById("demo").innerHTML=x;
}