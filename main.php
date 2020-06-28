<?php


\fantomx1\StartbootstrapFreelancerAsset\StartbootstrapFreelancerAsset::register($this);

// $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@app/assets');

$themePath = '@vendor/blackrockdigital/startbootstrap-freelancer';
$directoryAsset = Yii::$app->assetManager->getPublishedUrl($themePath.'/dist');

$layoutPath = Yii::getAlias($themePath.'/dist/index.html');
$contents = file_get_contents($layoutPath);

// adjust copied contents by replacing asset paths similarly

//"js/
//
//"<?php echo $directoryAsset? >/js/
//
//"css/
//
//"<?php echo $directoryAsset? >/css/
//
//
//"assets/
//
//"<?php echo $directoryAsset? >/assets/

// similar as setting path mapping, but working straight ahead after copying, instead

copy($layoutPath, __DIR__."/main_startbootstrapAdjust.php");

$contents = str_replace(
        "\"js/",
    "\"".$directoryAsset."/js/",
        $contents
);

$contents = str_replace(
    "\"css/",
    "\"".$directoryAsset."/css/",
    $contents
);


$contents = str_replace(
    "\"assets/",
    "\"".$directoryAsset."/assets/",
    $contents
);


echo $contents;

?>
