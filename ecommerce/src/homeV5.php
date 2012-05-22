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
        <link type="text/css" href="../scripts/jquery-ui-1.8.17.custom/css/ui-lightness/jquery-ui-1.8.17.custom.css" rel="Stylesheet" />
        <script type="text/javascript" src="../scripts/jquery-ui-1.8.17.custom/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="../scripts/jquery-ui-1.8.17.custom/js/jquery-ui-1.8.17.custom.min.js"></script>
        <script type="text/javascript" src="../scripts/homePage.js"></script>

    </head>
    <body>
        <?php
        include "includes/header.php";
        include_once '../php/homePagePhp.php';
        ?>
        <div class="container">
            <div id="content">
                <div id="space">hidden</div>
                <div class="mainContent" style="position:relative">
                    <?php

                    function getAllFileNamesInDir() {
                        $fileNames = array();
                        if ($handle = opendir('/Applications/MAMP/htdocs/ecommerce/src/testImages')) {
                            /* This is the correct way to loop over the directory. */
                            while (false !== ($entry = readdir($handle))) {
                                 
                                    if ($entry != ".DS_Store" && $entry != "." && $entry != "..") {
                                        $fileNames[] = "testImages/" . $entry;
                                    }
                            }
                            closedir($handle);
                        }
                        return $fileNames;
                    }

                    $arrayImages = getAllFileNamesInDir();

                    $arrayImageWithInfo = array();

                    $arrayImageWithInfo = getImagesInfo($arrayImages);

                    //Test ImagesInRow


                   // $arrayImageWithInfo = sortArray($arrayImageWithInfo);

                    $maxImagesInRow = 3;

                    $rowCount = 2;

                    $maxWidth=580;

                    getImagesDivForPartner($arrayImageWithInfo,112, $rowCount, $maxWidth);
                    ?>
                </div>
            </div>
<?php
include "includes/footer.php";
?>
        </div>

    </body>
</html>
