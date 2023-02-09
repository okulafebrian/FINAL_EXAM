$(document).ready(function () {
    const alert = new bootstrap.Modal('.alert')
    alert.show();
    
    setTimeout(function() {
        alert.hide()
    }, 2000);
})