<?php


namespace fantomx1;


use yii\web\AssetBundle;

/**
 * Class StartbootstrapFreelancerAsset
 * @package backend\assets
 */
class StartbootstrapFreelancerAsset extends AssetBundle
{


    /**
     * @var string
     */
    public $sourcePath = '@vendor/blackrockdigital/startbootstrap-freelancer/dist';


    /**
     * @var array
     */
    public $css = [
      'css',
    ];


    /**
     * @var array
     */
    public $js = [
        'js',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];


    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',

    ];



}
