$ = function(id) {
  return document.getElementById(id);
}

var show = function(id, projectID) {
       $(id).style.display ='block';
       const elem = document.getElementById("overlayDisplayContainer");
        
        const xhttp = new XMLHttpRequest();
  		xhttp.onload = function() {
    		elem.innerHTML = this.responseText;
    	}
  		xhttp.open("GET", './php/itemviewPHP.php?art=' + projectID, true);
  		xhttp.send();
        
       //$("#overlayDisplayContainer").load('./php/itemviewPHP.php?art=' + projectID);
}
var hide = function(id) {
	$(id).style.display ='none';
}