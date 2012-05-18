<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            #header{
                background: url("../images/drock042.jpeg");
                margin: 0 auto;
                margin-bottom: 1em;
                height: 4em;

            }
            #navigation{

                width: 50em;
                position: relative;
                margin: 0 auto;
                height: 100%;
                z-index: 1;
            }

            body{
                margin: 0px;
            }
            #nav_buttons > ul
            {
                float: left;
                height: 100%;
                list-style-type:none;
                margin:0;
                padding:0;
            }
            #nav_buttons > ul > li
            {

                display:inline;
                position: relative;

            }
            #nav_buttons > ul > li > a
            {
                width: auto;
                height: 41px;
                margin: 0.3em;
            }
            #site-name{
                float:left;
                width:auto;
                height: 100%;
            }
            #fb_root{
                width:400px;
                height: 100%;
                color: white;
            }
          
            #user_dp{
                width: 70px;
                float:left;
            }
            #username{
                float:left;
                width:100px;
            }
            
        </style>
        
    </head>
    <body>
         <header id="header">
            <div id="navigation">
                <div id="site-name" style="color: white"><!--<img src="../images/sample.gif" />-->
                   
                </div>
                <div id="nav_buttons">
                    <ul>
                        <li><a href=""><img src="../images/button_border.jpeg"   /></a></li>
                        <li><a href=""><img src="../images/browse_border.jpeg" /></a></li>
                        <li><a href=""><img src="../images/help_border.jpeg" /></a></li>
                        
                    </ul>
                    <div id="fb_root">
                        <div id="user_dp"><img class="fbProfilePic" src=<?php echo $userProfilePic?> /></div>
                        <div id="username"><?php echo $userName?></div>
                        <div id="fblogout"> 
                            <a id="auth-logoutlink"  href=<?php echo $logoutUrl;?> >
                            <div class="fb-login-button">
                                    Logout
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>
