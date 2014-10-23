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
    
    $('#camera').on('pageinit', function(){
        $("#chooseFile").click(function(e){
            e.preventDefault();
            $("input[type=file]").trigger("click");
        });
        $("input[type=file]").change(function(){
            var file = $("input[type=file]")[0].files[0];            
            $("#preview").empty();
            displayAsImage3(file, "preview");
            console.log(file.name);
            $info = $("#info");
            $info.empty();
            if (file && file.name) {
                    $info.append("<li>name:<span>" + file.name + "</span></li>");
            }
            if (file && file.type) {
                    $info.append("<li>size:<span>" + file.type + " bytes</span></li>");
            }
            if (file && file.size) {
                    $info.append("<li>size:<span>" + file.size + " bytes</span></li>");
            }
            if (file && file.lastModifiedDate) {
                    $info.append("<li>lastModifiedDate:<span>" + file.lastModifiedDate + " bytes</span></li>");
            }
            $info.append('<form action="" method="POST">Full Name: <input type="text" name="fullname"><br>Location: <input type="text" name="location"><br/><input type="radio" name="privacy" value="public">Public<br><input type="radio" name="privacy" value="private">Private<input type="submit" value="Upload"></form>');
            $info.listview("refresh");
        });
    });

    function displayAsImage3(file, containerid) {
        if (typeof FileReader !== "undefined") {
            var container = document.getElementById(containerid),
                img = document.createElement("img"),
                reader;
            container.appendChild(img);
            reader = new FileReader();
            reader.onload = (function (theImg) {
                    return function (evt) {
                            theImg.src = evt.target.result;
                    };
            }(img));
            reader.readAsDataURL(file);
        }
    }
	
    
    /*Gets a camera working
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
    */
   
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

