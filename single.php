<?php get_header('single') ?>

<div class="container">
  <div class="row">
    <div class="col-md-8 decription">
      <div class="contents shadow">
        <?php 
        if(get_field('image1')){
          $image = get_field('image1');
          echo " <img src=". $image ." alt=''>";
        }
        ?>
        <p>
          <?php 
            if(get_field('image1desc')){
              the_field('image1desc');
            }
          ?>
        </p>
      </div>
      <div class="contents shadow">
      <?php 
        if(get_field('image2')){
          $image = get_field('image2');
          echo " <img src=". $image." alt=''>";
        }
        ?>
        
        <p>
          <?php 
            if(get_field('image2desc')){
              the_field('image2desc');
            }
          ?>
        </p>
      </div>
      
      </div>
    </div>
    <div class="col-md-4 portfolio_info">
      <div class="contents shadow">
        <img src="" alt=""><a href=""></a>
        <h2><?php the_title( ) ?></h2>
        <p><?php the_content(  ) ?></p>
        <p class="link">
        <?php 
        if(get_field('site')){
          $image = get_field('image2');
          echo "<a href='".the_field('site')."'>Visit site &rarr;</a>";
        }
        ?>
        </p>
        <hr class="double">
        <blockquote>
          <p>“<?php 
            if(get_field('review')){
              get_field('review');
            }
        ?>” </p>
          <small>- <?php 
            if(get_field('reviewer')){
              get_field('reviewer');
            }
        ?> -</small>
        </blockquote>
        <p class="nav">
          <!-- <a href="" class="secondary-btn">&larr; Previous Project</a>
          <a href="" class="secondary-btn">Next Project &rarr;</a> -->
          
          <span class="secondary-btn">
            <?php previous_post_link( '%link', __( 'Previous Project  &rarr;', 'chaerimjo' ), true ); ?> 
          </span>
          <span class="secondary-btn">
            <?php next_post_link( '%link', __( 'Next Project  &rarr;', 'chaerimjo' ), true ); ?> 
          </span>
        </p>
      </div>
    </div>
  </div>
</div>  

<?php get_footer() ?>