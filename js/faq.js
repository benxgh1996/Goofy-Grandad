// This method shows or hides information displayed on the faq page when 
// a user clicks on a question.
// @param id the ID of the div that should be shown/hidden

function showHide(id) {
    if (document.getElementById(id)) {
        if (document.getElementById(id).style.display == 'block') {
            document.getElementById(id + "-img").src = 'images/right.png';
            document.getElementById(id).style.display = 'none';
        }
        else {
            document.getElementById(id + "-img").src = 'images/down.png';
            document.getElementById(id).style.display = 'block';
        }
    }
}