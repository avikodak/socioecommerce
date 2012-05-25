<?php

function getAllFileNamesInDir($directoryName, $parentDir, $count) {
    $fileNames = array();
    $marker = 0;
    if ($handle = opendir($directoryName)) {
        /* This is the correct way to loop over the directory. */
        while (false !== ($entry = readdir($handle)) && $marker < $count) {
            
            if (strpos($entry, ".php") || $entry == "thumbnails" || is_dir($entry)) {
                continue;
            }
            if ($entry != ".DS_Store" && $entry != "." && $entry != "..") {
               
                $fileNames[] = $parentDir . "/" . $entry;
            }
            $marker++;
        }
        closedir($handle);
    }
    return $fileNames;
}

function getImagesInfo($arrayImages) {
   
    for ($i = 0; $i < count($arrayImages); $i++) {
        
        if (strpos($arrayImages[$i], ".jpeg") || strpos($arrayImages[$i], ".jpeg")) {
            
            $image = imagecreatefromjpeg($arrayImages[$i]);
        }
        if (strpos($arrayImages[$i], ".gif") || strpos($arrayImages[$i], ".gif")) {
            $image = imagecreatefromgif($arrayImages[$i]);
        }
        if (strpos($arrayImages[$i], ".jpg") || strpos($arrayImages[$i], ".jpg")) {
   
            $image = imagecreatefromjpeg($arrayImages[$i]);
            
        }

        if (strpos($arrayImages[$i], ".png")) {
            $image = imagecreatefrompng($arrayImages[$i]);
        }
        
        $width = imagesx($image);
        $height = imagesy($image);
        $arrayImageWithInfo[$i] = array("url" => $arrayImages[$i], "width" => $width, "height" => $height);
    }
    return $arrayImageWithInfo;
}

function sortArray($arrayImageWithInfo) {
    foreach ($arrayImageWithInfo as $c => $key) {
        $sort_width[] = $key['width'];
        $sort_height[] = $key['height'];
    }
    array_multisort($sort_width, SORT_ASC, $sort_height, SORT_DESC, $arrayImageWithInfo);
    return $arrayImageWithInfo;
}

function getImageCountInARow($arrayImageWithInfo, $maxImagesInRow, $marker, $maxWidth) {
    $CountHeight = array();
    $count = 0;
    $width = 0;
    $emValue = 16;
    $maxHeight = 0;

    for ($i = $marker; $i < count($arrayImageWithInfo); $i++) {

        if ($width + $arrayImageWithInfo[$i]["width"] + $emValue >= $maxWidth) {
            // echo "width :".$width."MaxWidth :".$maxWidth;
            // echo "TruthValue".($width<(0.5*$maxWidth))."\n\n<br/>";
            if ($width < (0.5 * $maxWidth)) {
                $count = 0;
                $maxHeight = 0;
            }
            $CountHeight[] = array("count" => $count, "maxHeight" => $maxHeight, "totalWidth" => $width);

            return $CountHeight;
        }

        $width = $width + $arrayImageWithInfo[$i]["width"] + $emValue;
        if ($maxHeight < $arrayImageWithInfo[$i]["height"]) {
            $maxHeight = $arrayImageWithInfo[$i]["height"];
        }
        $count++;
        if ($i - $marker >= $maxImagesInRow) {
            $CountHeight[] = array("count" => $maxImagesInRow, "maxHeight" => $maxHeight);
            return $CountHeight;
        }
    }
}

function getImagesDivForPartner($arrayImageWithInfo, $startCount, $rowCount, $maxWidth) {

    
    echo '<div class=partner>';

    $maxImagesInRow = 2;
    $emValue = 16;
    
    for ($i = $startCount; $i < count($arrayImageWithInfo);) {

        $RowCountAndMaxHeightArray = getImageCountInARow($arrayImageWithInfo, 3, $i, $maxWidth);
        $rowCount = $RowCountAndMaxHeightArray[0]["count"];
        if ($rowCount == 0) {
            $i++;
            continue;
        }
        $maxHeight = $RowCountAndMaxHeightArray[0]["maxHeight"];
        $totalWidth = $RowCountAndMaxHeightArray[0]["totalWidth"];

        echo '<div class="imageRow">';
        echo '<div class="centerImages" style="width:' . $totalWidth . 'px">';
        for ($j = $i; $j - $i < $rowCount && $j < count($arrayImageWithInfo); $j++) {
            //$width = ($maxWidth - (($rowCount*$emValue)/$rowCount));
            $height = $maxHeight;
            if ($arrayImageWithInfo[$j]["height"] < $maxHeight) {
                $height = $arrayImageWithInfo[$j]["height"];
            }

            createDivForImage($arrayImageWithInfo[$j]["width"], $height, $maxHeight, $emValue, $arrayImageWithInfo[$j]["url"]);
        }
        echo '</div>';
        echo '</div>';
        $i = $j;
    }
    echo '</div>';
}
?>
<?php

function createDivForImage($width, $height, $maxHeight, $emValue, $url) { ?>
    <div class="image" style="width:<?php echo $width . "px" ?>;height:<?php echo $maxHeight + (2 * $emValue) . "px" ?>">
        <div class="<?php echo "MaxHeight_" . $maxHeight ?>" style="background-color: #008200;display:inline-block;height:<?php echo $maxHeight . "px" ?>;width:<?php echo $width . "px" ?>">
            <img alt="../src/BouncingLoader.gif" class="Imgcenter" src="<?php echo $url ?>" width="<?php echo $width . 'px' ?>" height="<?php echo $height . 'px' ?>"/>
        </div>
        <div class="imageContent">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
        </div>
    </div>
<?php } ?>