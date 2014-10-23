<!DOCTYPE html>
<html>
    <head>
        <title>InBe</title>
        <link type="text/css" rel="stylesheet" href="styles/styles.css"/>
        <link rel="stylesheet" href="//code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css">
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>
        
        <script src="js/index.js"></script>
        
        <!--Display the data-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    </head>
    
    <body>
        <div data-role="page" id="home">
            <header data-role="header" id="top">
                <h1>InBe</h1>
                <a href="#myPanel"><img id="menuButton" src="Images/Menu_Button.png" alt="menu" width="50px"></a>
                <a href="#camera" data-transition="slide"><img id="cameraButton" src="Images/Camera_Button.png" alt="menu" width="50px"></a>
            </header>
            
            
            <div data-role="listview" class="ui-grid-a" data-filter="true">
                <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:200px"><a href="#"><img id="img1" src="Images/losangelos.jpg" alt="menu" width="100%"></a></div></div>
                <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:200px"><a href="#"><img id="img2" src="Images/losangelos.jpg" alt="menu" width="100%"></a></div></div>
                <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:200px"><a href="#"><img id="img3" src="Images/losangelos.jpg" alt="menu" width="100%"></a></div></div>
                <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:200px"><a href="#"><img id="img4" src="Images/losangelos.jpg" alt="menu" width="100%"></a></div></div>
                <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:200px"><a href="#"><img id="img5" src="Images/losangelos.jpg" alt="menu" width="100%"></a></div></div>
                <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:200px"><a href="#"><img id="img6" src="Images/losangelos.jpg" alt="menu" width="100%"></a></div></div>
                <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:200px"><a href="#"><img id="img7" src="Images/losangelos.jpg" alt="menu" width="100%"></a></div></div>
                <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:200px"><a href="#"><img id="img8" src="Images/losangelos.jpg" alt="menu" width="100%"></a></div></div>   
            </div><!-- /grid-a -->
            
            <div data-role="panel" id="myPanel" data-theme="b" data-display="push">
                <a href="" data-role="button" data-rel="close">Close Me</a>
                <p>this is a thing thing hting fv </p>
            </div>
        </div>
        
        <div data-role="page" id="camera">
            <div data-role="header">
                <h1>Page 2</h1>
              </div>
              <div role="main" class="ui-content">
                <a href="#home" data-rel="back" data-direction: "reverse" data-transition="slide" class="ui-btn ui-corner-all ui-btn-inline">Go Back To Page 1</a>
              </div>
            <video id="video" width="640" height="480" autoplay></video>
            <button id="snap">Snap Photo</button>
            <canvas id="canvas" width="640" height="480"></canvas>
        </div>
        
        
        
        <!--
        <div data-role="page" id="homepage">
            <div data-role="header" id="top">
                <a href="#myPanel"><img id="menuButton" src="Images/Menu_Button.png" alt="menu" width="50px"></a>
                <a href="#myPanel2"><img id="cameraButton" src="Images/Camera_Button.png" alt="menu" width="50px"></a>
            </div>
            
            <div data-role="content" class="ui-grid-a">
                <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:200px"><a href="#img1"><img id="img1" src="Images/losangelos.jpg" alt="menu" width="100%"></a></div></div>
                <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:200px"><img id="img2" src="Images/losangelos.jpg" alt="menu" width="100%"></div></div>
                <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:200px"><img id="img3" src="Images/losangelos.jpg" alt="menu" width="100%"></div></div>
                <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:200px"><img id="img4" src="Images/losangelos.jpg" alt="menu" width="100%"></div></div>
                <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:200px"><img id="img5" src="Images/losangelos.jpg" alt="menu" width="100%"></div></div>
                <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:200px"><img id="img6" src="Images/losangelos.jpg" alt="menu" width="100%"></div></div>
                <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:200px"><img id="img7" src="Images/losangelos.jpg" alt="menu" width="100%"></div></div>
                <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:200px"><img id="img8" src="Images/losangelos.jpg" alt="menu" width="100%"></div></div>
            </div><!-- /grid-a -->
        -->
        <!--
            <div data-role="panel" id="myPanel" data-theme="b" data-display="push">
                <a href="" data-role="button" data-rel="close">Close Me</a>
                <p>this is a thing thing hting fv </p>
            </div>
            
            <div data-role="panel" id="myPanel2" data-theme="b" data-display="push" data-position="right">
                <a href="" data-role="button" data-rel="close">Close Me</a>
                <p>this is a thing thing hting fv </p>
            </div>
            
            <div data-role="page" id="img1">
                <div data-role="header">
                    <h3>
                        InBe
                    </h3>
                </div>
                <div data-role="content">
                    <h3>
                        InBe
                    </h3>
                    <p>
                        blah blah shit blah blah shit  blah blah shit  blah blah shit  blah blah shit  blah blah shit 
                    </p>
                </div>
            </div>
            
            <div id="result">
                
            </div>
            
        </div>
        -->
    </body>
</html>