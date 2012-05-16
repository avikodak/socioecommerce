<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Socio ECommerce</title>
        <style>
            .image{
                display: inline-block;
                max-height: 400px;
                max-width: 200px;
                padding: 1em 0.5em 3em 2em;
            }
            .imageContent{
                display: inline-block;
                height: 2em;
                max-width: 200px;
            }
            .imageRow{
                background: #fff;
                float: left;

            }
            .partner{
                float:left;
                background: url("../images/beige001.jpeg");
            }
            .partnerImg{
                float: left;
                width: 64px;
                height: auto;
            }

            .infiniteScrollBtn{
                float:left;
                width: 60%;
                margin: 0em auto;
                height: 3em;
                padding-left: 1.5em;
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
            #container{
                margin: 0em auto;
                background-color: #fff;
                width:50em; 
                height:auto;
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
                <div>
                    <div class="images">
                        <div class="partner">
                            <div class="partnerImg" style="height:600px"><img src="testImages/avikodak.jpg"/></div>
                            <div class="imageRow">
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
                            <div class="partnerImg" style="height:300px"><img src="testImages/avikodak.jpg"/></div>
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
                        <div class="partner">
                            <div class="partnerImg" style="height:300px"><img src="testImages/avikodak.jpg"/></div>
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

            </div>
            <div>
                <div style="width:64px;float:left;padding-left:8em"><img src="../images/beige001.jpeg" width="64px" height="65px"/></div>
                <div class="infiniteScrollBtn" >
                    <div class="center fontColorWhite mediumSize">
                        Show More Posts
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<!--border-radius:90%-->