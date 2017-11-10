function showHide(ele) {
    if (document.getElementById(ele)) {	
        if (document.getElementById(ele).style.display == 'block') {
            document.getElementById(ele+"-img").src = 'images/right.png';
            document.getElementById(ele).style.display = 'none';
	}
	else {
	    document.getElementById(ele+"-img").src = 'images/down.png';
	    document.getElementById(ele).style.display = 'block';
	}
    }
}