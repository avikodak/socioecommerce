<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            .image{
                display: inline-block;
                max-height: 400px;
                max-width: 200px;
                padding: 0em 0.5em 3em 2em;
            }
            .imageContent{
                display: inline-block;
                height: 2em;
                max-width: 200px;
            }
            .parnterDP{
                display: inline-block;
                position: absolute;
                left: -130px;

            }

            .infiniteScrollBtn{
                display: block;
                width: 90%;
                margin: 0 auto;
                height: 3em;
                background-color: #0b559b;
            }
            .center{
                margin:auto;
                padding: 0.5em;
                width: 8em;
            }
            .fontColorWhite{
                color: white;
            }
            .mediumSize{
                font-size: 1.5em;
            }
            .images{
                position:relative;
            }
            #content{
                padding-left: 20px; 
            }
            .container {
                margin: 0em auto;
                background-color: #fff;
                width:50em; 
                height:auto;
            }
            #space{
                margin-bottom: 1em;
                visibility: hidden; 

            }
            body{
                background: url("../images/beige001.jpeg");
                background-repeat: repeat;
            }
            .login{
                margin:0em auto 1.5em;
                width:50em; 
            }
            #faceBookLogin{
                background: url("../images/common/button_fb_bg.jpg") repeat-y scroll 0 0 #647BAF;
            }
        </style>
        <script>
            // Load the SDK Asynchronously
            (function(d){
                var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement('script'); js.id = id; js.async = true;
                js.src = "//connect.facebook.net/en_US/all.js";
                ref.parentNode.insertBefore(js, ref);
            }(document));

            // Init the SDK upon load
            window.fbAsyncInit = function() {
                FB.Flash.hasMinVersion = function () { return false; };
                FB.init({
                    appId      : '384618301573901', // App ID
                    // channelUrl : '//'+window.location.hostname+'/channel', // Path to your Channel File
                    status     : true, // check login status
                    cookie     : true, // enable cookies to allow the server to access the session
                    xfbml      : true  // parse XFBML
                });

                // listen for and handle auth.statusChange events
                FB.Event.subscribe('auth.statusChange', function(response) {
                    if (response.authResponse) {
                        // user has auth'd your app and is logged into Facebook
                        FB.api('/me', function(response) {
                            document.getElementById("fb_root").style.display='inline-block';
                            document.getElementById("user_dp").innerHTML = '<img src="https://graph.facebook.com/' 
                                + response.id + '/picture">' ;
                            document.getElementById("username").innerHTML=response.name;
                            document.getElementById("loginBox").style.display = 'none';
                        });
                        
                        
                        
                    } else {
                        // user has not auth'd your app, or is not logged into Facebook
                        document.getElementById("fb_root").style.display='none';
                        document.getElementById("loginBox").style.display = 'block';
                        
                        
                    }
                });

                // respond to clicks on the login and logout links
                document.getElementById('auth-loginlink').addEventListener('click', function(){
                    FB.login();
                });
                document.getElementById('auth-logoutlink').addEventListener('click', function(){
                    FB.logout();
                }); 
            } 
        </script>
    </head>
    <body>
        <?php include "includes/header.php" ?>
        <div id="loginBox" class="login">
            <table>
                <tr>
                    <td colspan="2"> Login </td>
                </tr>
                <tr>
                    <td><div><a href="#" id="auth-loginlink">
                                <div class="fb-login-button">
                                    Connect With Facebook
                                </div>
                            </a></div></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="container">


            <div id="content">
                <div id="space">ssad</div>
                <div>
                    <div class="images">
                        <div class="partner">
                            <div class="parnterDP"><img src="testImages/avikodak.jpg"/></div>
                            <div class="imageRow" style="float:left">
                                <div class="image">
                                    <img src="testImages/97984519193236911_9887b6e140be.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>

                                </div>
                                <div class="image">
                                    <img src="testImages/97984446707275179_08b6a957d27c.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="testImages/97863901906997349_09a176850007.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                            </div>
                            <div class="imageRow">
                                <div class="image">
                                    <img src="testImages/97984487257806253_5f7f4dbf9391.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="testImages/97878356762038571_bb0ef47a065b.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="testImages/97988853905757649_68044c789f1f.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="partner">
                            <div class="parnterDP"><img src="testImages/avikodak.jpg"/></div>
                            <div class="imageRow">
                                <div class="image">
                                    <img src="testImages/265219865525107307_6nARqSg4_b.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="testImages/97996667432736343_89e70f4e4127.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="testImages/97988874483013075_7cfa5aa1cdfe.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" style="padding: 1.5em">
                    <div class="infiniteScrollBtn">
                        <div class="center fontColorWhite mediumSize">
                            Show More Posts
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </body>
</html>
