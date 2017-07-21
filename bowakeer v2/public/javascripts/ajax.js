var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
        document.getElementById("table-data-view").innerHTML = this.resposeText;
    }
};

xhttp.open("GET", "../layout/table.php", true);
xhttp.send()

// 
