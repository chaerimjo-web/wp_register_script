<?php
  /* 변수 등록 */
  define('THEMEROOT', get_stylesheet_uri(  ));
  define('IMAGES',THEMEROOT.'/images');

  if(! function_exists('minimal_script')){
    function minimal_script(){

      // 스크립트를 등록
      wp_register_script( 'bootstrap-js',THEMEROOT.'/js/bootstrap.min.js',true,false,true);

      // 스크립트를 로드
      wp_enqueue_script('bootstrap-js');

      //css를 로드
      wp_enqueue_style('common-css',THEMEROOT.'/css/common.css');
      wp_enqueue_style('bootstrap-grid',THEMEROOT.'/css/bootstrap-grid.css');
      wp_enqueue_style('defalut',THEMEROOT.'/css/defalut.css');
      wp_enqueue_style('responsive',THEMEROOT.'/css/responsive.css');
    }
    add_action( 'wp_enqueue_scripts', 'minimal_script');
  }
?>