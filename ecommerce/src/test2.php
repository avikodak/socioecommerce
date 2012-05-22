<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //echo mt_rand(5, 15); Used For generating Random Values
        $arrayImages = array("testImages/avikodak.jpg", "testImages/88758483226201583_96f8bfca32f0.jpg", "testImages/300296455_09b4deb1342d.jpg", "testImages/299905435_323dbc5b0465.jpg", "testImages/98976892241054563_eb3f29bb1593.jpg", "testImages/98908283611383545_8164094d132e.jpg", "testImages/95348374760326651_e2af6c32041b.jpg", "testImages/91910627538247581_814c0fdc18f6.jpg", "testImages/88666549652555933_992ddb5918a8.jpg", "testImages/91675958989296883_685e59b261da.png");
        echo "<br/>";

        foreach ($arrayImageWithInfo as $c => $key) {
            $sort_width[] = $key['width'];
            $sort_height[] = $key['height'];
        }

        array_multisort($sort_width, SORT_ASC, $sort_width, SORT_ASC, $arrayImageWithInfo);

        $arrayImageWithInfo = array();
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



        $rowCount = 2;
        ?><div class=partner><?php
        for ($i = 0; $i < count($arrayImages); $rowCount--) :
            ?>

                <div class="imageRow">
                    <?php for ($j = $i; $j - $i <= $rowCount && $j < count($arrayImages); $j++) : $class = "image_" . ($maxWidth / $rowCount); ?>
                        <div class="<?php echo $class ?>" style="float:left">
                            <img src="<?php echo $arrayImages[$j] ?>"/>
                            <div class="imageContent">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                            </div>
                        </div>
                    <?php
                    endfor;

                    $i = $j;
                    if (!$rowCount) {
                        $rowCount = 3;
                    }
                    ?>  

                </div>
<?php endfor; ?>
        </div>
















    </body>
</html>
