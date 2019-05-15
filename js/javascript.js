function removeUrlParam(){
    var current_path = location.protocol + '//' + location.host + location.pathname;
    // Simulate a mouse click:
    window.location.href = current_path;
}