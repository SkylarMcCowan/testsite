{\rtf1\ansi\ansicpg1252\cocoartf2709
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <!DOCTYPE html>\
<html <?php language_attributes(); ?>>\
<head>\
    <meta charset="<?php bloginfo( 'charset' ); ?>">\
    <meta name="viewport" content="width=device-width, initial-scale=1">\
    <title><?php bloginfo( 'name' ); wp_title(); ?></title>\
    <?php wp_head(); ?>\
</head>\
<body <?php body_class(); ?>>\
    <header>\
        <div class="container">\
            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>\
            <nav>\
                <?php wp_nav_menu(array('theme_location' => 'primary')); ?>\
            </nav>\
        </div>\
    </header>\
}