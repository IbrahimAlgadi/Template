function ajax_request(get_val){
    var xmlhtml = new XMLHttpRequest();
    
    xmlhtml.onreadystatechange = function(){
        if (xmlhtml.readyState == 4 && xmlhtml.status == 200){
           var result =  document.getElementById("table-data-view");
           result.innerHTML = xmlhtml.responseText;
        }
    }
    
    xmlhtml.open("GET", "../layout/table.php", true);
    xmlhtml.send();
}

