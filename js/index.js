var hash = {};

$(document).ready(function() {
    init();
    $(this).on("swiperight", function(event, ui) {
        $("#myPanel").panel("open");
    });
    
    
    //Not working yet
    $("img").each(function(index) {
        var elementId = $(this).attr("id");
        elementId = "#" + elementId;
        $(function () {
            $(elementId).on("click", function(event) {
                $.mobile.changePage(elementId, {transition: "slideup"});
            });
            
        });
    });
    
    // Put event listeners into place
    window.addEventListener("DOMContentLoaded", function() {
            // Grab elements, create settings, etc.
            var canvas = document.getElementById("canvas"),
                    context = canvas.getContext("2d"),
                    video = document.getElementById("video"),
                    videoObj = { "video": true },
                    errBack = function(error) {
                            console.log("Video capture error: ", error.code); 
                    };
    
            // Put video listeners into place
            if(navigator.getUserMedia) { // Standard
                    navigator.getUserMedia(videoObj, function(stream) {
                            video.src = stream;
                            video.play();
                    }, errBack);
            } else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
                    navigator.webkitGetUserMedia(videoObj, function(stream){
                            video.src = window.webkitURL.createObjectURL(stream);
                            video.play();
                    }, errBack);
            }
            else if(navigator.mozGetUserMedia) { // Firefox-prefixed
                    navigator.mozGetUserMedia(videoObj, function(stream){
                            video.src = window.URL.createObjectURL(stream);
                            video.play();
                    }, errBack);
            }
    }, false);
    
    // Trigger photo take
    $("snap").click(function() {
            context.drawImage(video, 0, 0, 640, 480);
    });
    
    
    
    
   
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

