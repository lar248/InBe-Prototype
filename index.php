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
        <div data-role="page" id="wrapper">
            <div data-role="header" id="top">
                <a href="#myPanel"><img id="menuButton" src="Images/Menu_Button.png" alt="menu" width="50px"></a>
                <a href="#myPanel2"><img id="cameraButton" src="Images/Camera_Button.png" alt="menu" width="50px"></a>
            </div>
            
            <div data-role="content" class="ui-grid-a">
                <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:200px">Image A goes here</div></div>
                <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:200px">Image B goes here</div></div>
            </div><!-- /grid-a -->
            
            <div data-role="panel" id="myPanel" data-theme="b" data-display="push">
                <a href="" data-role="button" data-rel="close">Close Me</a>
                <p>this is a thing thing hting fv </p>
            </div>
            
            <div data-role="panel" id="myPanel2" data-theme="b" data-display="push" data-position="right">
                <a href="" data-role="button" data-rel="close">Close Me</a>
                <p>this is a thing thing hting fv </p>
            </div>
            
            <div id="result">
                
            </div>
            
        </div>
    </body>
</html>