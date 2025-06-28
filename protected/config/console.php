<?php
return array(
    'basePath'=>dirname(__FILE__).'/..',
    'name'=>'Klinik Console',
    
    'import'=>array(
        'application.models.*',
        'application.components.*',
    ),
    
    'components'=>array(
        'db'=>require(dirname(__FILE__).'/database.php'),
    ),
);