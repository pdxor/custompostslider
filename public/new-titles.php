<div class="container row">
<?php
//still would like to get the list id which in this case is CNL4 to be dynamically passed via shortcode
  // $cnl = $_GET['cnl'];
  // $jsonprefilter = file_get_contents('https://cpt-app.appspot.com/nllist.groovy?sid=6342&list='.$cnl);
  // $jsontrim = strstr($jsonprefilter, '[');
  // $json = substr($jsontrim , 0, -3);
  // $array = json_decode( $json, true );
  // echo '<ul id="lightSlider'.$cnl.'">';
  // $i = 0;
  // foreach($array as $item) {
  //     $i++;
  //     $isbn = $item['isbn'];
  //     $imgsrc = $item['img'];
  //     echo '<li><a data-url="https://library.cpt.com/6342/showdetail/?isbn='.$isbn.'&list='.$cnl.'&cnlcode='.$cnl.'&opacoption=OPAC_A&skin=&group=current" class="viztog" id="'.$isbn.'" href="#home-new-titles-sct"><img src="'.$imgsrc.'"></a></li>';
  //     if($i > 7) {
  //       break;
  //     }http://cla.mirandacreative.com/project_docs/bridge-killingly-west-2/
  // }
  // echo '</ul>';


    query_posts(array(
        'post_type' => 'project_docs',
        'showposts' => 7,
        'cat' => 19
    ) );
?>
<ul id="cptslider">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<li class="cptslide">
<h3 class="sliderheader"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3>
<?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?></a>
</li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
</ul>
</div>
