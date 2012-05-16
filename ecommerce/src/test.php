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
            #container{
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

        </style>
    </head>
    <body>
        <?php include "includes/header.php" ?>
        <div id="container">
            
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
