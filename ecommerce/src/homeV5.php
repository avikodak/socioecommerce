<?php
include '../php/IncludesPath.php';
include_once $FB_GLOBAL_DEFINES;
include $FB_PHP;
include $FB_COMMON_FUNCTION;
include $FBINTERESTS_Class;

$code = $_GET['code'];
$state = $_GET['state'];

global $userLoggedIn;

$config = array(
    'appId' => $appId,
    'secret' => $appSecret,
);

$facebook = new Facebook($config);

$userId = $facebook->getUser();

$userId = "sample";
if (!$userId) {
    echo "<meta http-equiv='refresh' content='0;url=" . $LOGIN_PAGE_NO_USER_URL . "'>";
}


try {
    $userProfile = $facebook->api('/me', 'GET');

    $userProfilePicArray = $facebook->api('/me?fields=picture', 'GET');

    $userProfilePicUrl = $userProfilePicArray["picture"];

    $userName = $userProfile['name'];

    $userInterests = $facebook->api('/me/likes', 'GET');

    //$user = new FBInterests_Class();
    //$user->setDataArray($userInterests);
    //$user->getAllInterests();

    $logoutconfig = array('next' => $LOGIN_PAGE_NO_USER_URL);

    $logoutUrl = $facebook->getLogoutUrl($logoutconfig);
} catch (FacebookApiException $e) {
    error_log($e->getType());
    error_log($e->getMessage());
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SocioEcommerce</title>
        <link type="text/css" href="../css/common.css" rel="Stylesheet" />
        <link type="text/css" href="../css/test.css" rel="Stylesheet" />
        <link type="text/css" href="../css/navigation.css" rel="Stylesheet" />
        <link type="text/css" href="../scripts/jquery-ui-1.8.17.custom/css/ui-lightness/jquery-ui-1.8.17.custom.css" rel="Stylesheet" />
        <script type="text/javascript" src="../scripts/jquery-ui-1.8.17.custom/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="../scripts/jquery-ui-1.8.17.custom/js/jquery-ui-1.8.17.custom.min.js"></script>
        <script type="text/javascript" src="../scripts/homePage.js"></script>
        <script>
            $(function() {
                // a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
                $( "#dialog:ui-dialog" ).dialog( "destroy" );
                
                document.body.style.overflow="hidden";
                $( "#dialog-modal" ).dialog({
                    height: 500,
                    width:1000,
                    modal: true
                   
                });
            });
        </script>
        <style>
             .mainDialogContent{
                border:6px inset orange;
                display: inline-block;
               
            } 
            .imageInDialog{
                display: inline-block;
                display:inline-block;
                padding: 0.3em;
                border:6px double #545565;
            }
            .contentRelatedToImage{
                display:inline-block;
                border:#9a9ae6 solid thin;
                width :auto;
                position: relative;
                top:-322px;
                border-bottom-color: #966;
                border-top-color: #966;
            }
            .imageInfo{
                list-style-type: none;
                padding-left: 0px;

            }
            ul.imageInfo > li{
                text-align: left;
            }
            ul.sellerContact{
                list-style-type: none;
                padding-left: 0px;

            }
            #extraInformation{
                border-top-color: #e22626;
                border-top: #e22626 solid thin;
            }
            .wrapperForImageAndContent{
                display: inline-block;
                height:auto;
            }
            .commentsSection{
                list-style-type: none;
                padding: 0;
            }
            .comments{
                border: #000 solid thin;
            }
        </style>
    </head>
    <body>
        <?php
        include "includes/header.php";
        include_once '../php/homePagePhp.php';
        ?>
        <div id="dialog-modal" title="Basic modal dialog" style="overflow-y: scroll">
            <div class="mainDialogContent">
                <div class="dialogHeader">
                  <?php echo ucwords("Lorem ipsum dolor sit amet, consectetur adipisicing elit")?>
                </div>
                <div class="dialogHeaderDescription">
                    <p> <?php echo ucwords("Lorem ipsum dolor sit amet, consectetur adipisicing elit")?></p>
                </div>
                <div class="wrapperForImageAndContent">
                    <div class="imageInDialog">
                        <img src="images/gadgets/100263612450343419_07b30511c7f1.jpg" width="200" height="200" />
                    </div>
                    <div class="contentRelatedToImage">
                        <div>
                            <ul class="imageInfo">
                                <li><a href="#"><div class="icons"><img src="" width="" height="" /></div>Add to my favourites</a></li>
                                <li><a href="#"><div class="icons"><img src="" width="" height="" /></div>Recommend Someone</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="sellerContact">
                                <li><a href="#"><div class="icons"><img src="" width="" height="" /></div>Ask Seller to contact back</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="extraInformation">
                    <div class="prevComments">
                        <ul class="commentsSection">
                            <li class="comments">
                                <a><img src="" width="20" height="20"/>test</a>
                                <p>Comments</p>
                            </li>
                            <li class="comments">
                                <a><img src="" width="20" height="20"/>test</a>
                                <p>Comments</p>
                            </li>
                            <li class="comments">
                                <a><img src="" width="20" height="20"/>test</a>
                                <p>Comments</p>
                            </li>
                            <li class="comments">
                                <a><img src="" width="20" height="20"/>test</a>
                                <p>Comments</p>
                            </li>
                        </ul>
                    </div>
                    <div id="commentSection">
                        <input type="text" placeholder="Enter Your Comment Here" />
                    </div>
                    <div id="recommendInfo">
                        <!-- Infinite ScrollView -->
                    </div>
                    <div id="recentlyAdded"> 
                        <!-- infinite ScrollView -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="content">
                <div id="space">hidden</div>
                <div class="mainContent" style="position:relative">
                    <?php
                    $arrayImages = getAllFileNamesInDir('/Applications/MAMP/htdocs/ecommerce/src/images/gadgets', 'images/gadgets', 6);

                    $arrayImageWithInfo = array();

                    $arrayImageWithInfo = getImagesInfo($arrayImages);

                    //Test ImagesInRow
                    //$arrayImageWithInfo = sortArray($arrayImageWithInfo);

                    $maxImagesInRow = 3;

                    $rowCount = 2;

                    $maxWidth = 730;

                    //getImagesDivForPartner($arrayImageWithInfo, 0, $rowCount, $maxWidth);
                    ?>
                </div>
            </div>

            <?php
            include "includes/footer.php";
            ?>
        </div>

    </body>
</html>
