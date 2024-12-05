<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Minimal Portfolio</title>
  <?php wp_head(  ); ?>
</head>
<body <?php body_class( ) ?> >
  <header class="portfolio">
    <h1 class="logo"><a href="">Minimal Portfolio Theme</a></h1>
    <nav>
    
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>
      <hr>
       <ul class="portfolio_links">
          <?php
          //마지막주소 바꾸기?
            $currentURI = $_SERVER['REQUEST_URI'];
            $urlArr = explode('/', $currentURI); //currentURI를 (현재주소를) 배열로 정렬한다.
            $urlArrLast = $urlArr[count($urlArr)-2];  //마지막주소 선택 | 배열명[2]->갯수를 먼저 파악
            $catNameOrg = str_replace('minimal-portfolio','',$urlArrLast); //urlArrLast에서 minimal-portfolio를 제외하고 삭제한다. 
            $catName = str_replace('-','',$catNameOrg);
            // echo $catName;

          ?>
          <li>
            <a href="<?php bloginfo( 'url' ) ?>/category/minimal-portfolio/" class="secondary-btn 
            <?php echo $catName === '' ? 'active' : ''; ?>">All</a>
            <!-- catName(ALL) 이 비어있다면 active 붙이고 아니면 빈것으로   -->
          </li>
          <?php
            $categories = get_categories( array(
              'orderby' => 'name',
              'order'   => 'ASC',
              'child_of' => 11,
              'hide_empty' => false
            ) );

            foreach( $categories as $category ) {
              $category->name =  $catName ? $activeClass="active":$$activeClass='';
              $category_link = sprintf( 
                '<a href="%1$s" alt="%2$s" class="secondary-btn'.$activeClass.'">%3$s</a>',
                esc_url( get_category_link( $category->term_id ) ),
                esc_attr( sprintf( __( 'View all posts in %s', 'chaerimjo' ), $category->name ) ),
                esc_html( $category->name )
              );
              
              echo '<li>' .  $category_link . '</li> ';
            } 
          ?>
       </ul>              
  </header>
  <hr>
  <main class="content">