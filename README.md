A yii2 wrap asset for the bootstrap theme library blackrockdigital/startbootstrap-freelancer 
https://github.com/BlackrockDigital/startbootstrap-freelancer.git

Currently needs a workaround due to recursive repostitory definitions:
https://getcomposer.org/doc/faqs/why-can%27t-composer-load-repositories-recursively.md

add the following to the composer.json

```
        {
            "type":"package",
            "package": {
                "name": "blackrockdigital/startbootstrap-freelancer",
                "version":"master",
                "source": {
                    "url": "https://github.com/BlackrockDigital/startbootstrap-freelancer.git",
                    "type": "git",
                    "reference":"master"
                }
            }
        },
```

and install by 
`
composer require fantomx1/yii2-starbootstrap-freelancer-asset:@dev
`


Copy the layout file main.php to the desired layout location tier.
And then it works straight ahead, though for customization 
the script automatically copies also the
original into `/main_startbootstrapAdjust.php` to be adjusted by the following operation.

Provide the published directory to the copied template
```
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/blackrockdigital/starbootstrap-freelancer/dist');
```

adjust copied contents by replacing asset paths similarly

```
"js/
"<?php echo $directoryAsset? >/js/
```

```
"css/
"<?php echo $directoryAsset? >/css/
```

```
"assets/
"<?php echo $directoryAsset? >/assets/
```
