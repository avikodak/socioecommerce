<?php

function getMaxHeight($array, $row, $i) {

    $maxHeight = 0;
    for ($j = $i; $j <= $i + $row; $j++) {
        if ($maxHeight < $array[$j]["height"]) {
            $maxHeight = $array[$j]["height"];
        }
    }
    return $maxHeight;
}

function getImageCountInARow($arrayImageWithInfo, $maxImagesInRow, $marker, $maxWidth) {
    $count = 0;
    $width = 0;
    for ($count = $marker;; $count++) {
        $width = $width + $arrayImageWithInfo[$count]["width"];
        if ($width >= $maxWidth) {
           
            return ($count - $marker);
        }
        if ($count - $marker < $maxImagesInRow) {
            return $maxImagesInRow;
        }
    }
}

function getImagesInfo($arrayImages) {
    for ($i = 0; $i < count($arrayImages); $i++) {
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

function getImagesDivForPartner($arrayImageWithInfo, $startCount,$rowCount, $maxWidth) {
    ?>
    <div class=partner>
    <?php
    $rowCount=getImageCountInARow($arrayImageWithInfo, 3, 0, $maxWidth);
    $rowCount -= 1;
    for ($i = $startCount; $i < count($arrayImageWithInfo); ) :

        $rowCount=getImageCountInARow($arrayImageWithInfo, 2, $i, $maxWidth);
        ?>
            <div class="imageRow">
            <?php
            $maxHeight = getMaxHeight($arrayImageWithInfo, $rowCount, $i);
            for ($j = $i; $j - $i <= $rowCount && $j < count($arrayImageWithInfo); $j++) :
                ?>

                    <div class="image" style="width:<?php echo $maxWidth / ($rowCount + 1) . "px" ?>;height:<?php echo ($maxHeight + 32) . "px" ?>">

            <?php
            $width = ($maxWidth / (($rowCount + 1)) - 32);

            if ($arrayImageWithInfo[$j]["width"] < (($maxWidth / (($rowCount + 1))) - 32)) {
                $width = $arrayImageWithInfo[$j]["width"];
            }
            ?>


                        <?php
                        $height = $maxHeight;
                        if ($arrayImageWithInfo[$j]["height"] < $maxHeight) {
                            $height = $arrayImageWithInfo[$j]["height"];
                        }
                        ?>
                        <div style="background: url('../images/lgrey070.jpeg');background-repeat: repeat;height:<?php echo ($maxHeight) . "px" ?>;display:inline-block;width:<?php echo $maxWidth / ($rowCount + 1) . "px" ?>">
                            <img alt="" class="Imgcenter" src="<?php echo $arrayImageWithInfo[$j]["url"] ?>" width="<?php echo $width . "px" ?>" height="<?php echo $height . "px" ?>" style="margin-top:<?php echo (($maxHeight / 2) - ($height / 2)) . "px" ?>" />
                        </div>
                        <div class="imageContent">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                        </div>
                    </div>
            <?php
        endfor;

        $i = $j;
        if (!$rowCount) {
            $rowCount=getImageCountInARow($arrayImageWithInfo, 3, 0, $maxWidth);
            $rowCount;
        }
        ?>  

            </div>
            <?php endfor; ?>
    </div>
    <?php }
    ?>
