<?php
/**
 * Created by PhpStorm.
 * User: jludwa
 * Date: 07.03.17
 * Time: 12:07
 */
return array(
    'controllers' => array(
        'invokables' => array(
            'Album\Controller\Album' => 'Album\Controller\AlbumController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
);