{\rtf1\ansi\ansicpg1252\cocoartf2709
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
function skylars_theme_setup() \{\
    // Register Menus\
    register_nav_menus(array(\
        'primary' => __('Primary Menu', 'skylars-modern-theme'),\
    ));\
\
    // Add theme support for automatic title tag\
    add_theme_support('title-tag');\
\}\
\
add_action('after_setup_theme', 'skylars_theme_setup');\
\
function skylars_theme_scripts() \{\
    wp_enqueue_style('main-css', get_stylesheet_uri(), array(), '1.0', 'all');\
\}\
\
add_action('wp_enqueue_scripts', 'skylars_theme_scripts');\
}