<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/vendor/aos/aos.css',
        'assets/vendor/bootstrap/css/bootstrap.min.css',
        'assets/vendor/bootstrap-icons/bootstrap-icons.css',
        'assets/vendor/boxicons/css/boxicons.min.css',
        'assets/vendor/glightbox/css/glightbox.min.css',
        'assets/vendor/remixicon/remixicon.css',
        'assets/vendor/swiper/swiper-bundle.min.css',
    ];

    public $js = [
        'assets/vendor/aos/aos.js',
        'assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'assets/vendor/glightbox/js/glightbox.min.js',
        'assets/vendor/isotope-layout/isotope.pkgd.min.js',
        'assets/vendor/php-email-form/validate.js',
        'assets/vendor/swiper/swiper-bundle.min.js',
        'assets/vendor/waypoints/noframework.waypoints.js',

            ];
            
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
