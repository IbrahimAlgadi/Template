function ajax_request(up_id){
    
    var xmlhtml = new XMLHttpRequest();
    
    xmlhtml.onreadystatechange = function(){
        if (xmlhtml.readyState == 4 && xmlhtml.status == 200){
           var result =  document.getElementById("update-place");
           result.innerHTML = xmlhtml.responseText;
        }
    }
    
    xmlhtml.open("GET", "../actions/edit/edit_employee.php", true);
    xmlhtml.send();
}

