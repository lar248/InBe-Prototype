var hash = {};

$(document).ready(function() {
    $(document).on("swipeleft", function(event, ui) {
        $("#myPanel2").panel("open");
    });
    $(document).on("swiperight", function(event, ui) {
        $("#myPanel").panel("open");
    });
    init();
   
});

//Set local storage
function set(key, obj) {
    return localStorage.setItem(key, JSON.stringify(obj))
}

//Get local storage items
function get(key) {
    return JSON.parse(localStorage.getItem(key));
}

//
function init() {
    set("lastName", "Smith");
    $("#result").html(get("lastName"));
}

