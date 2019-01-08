<?php
//still would like to get the list id which in this case is CNL4 to be dynamically passed via shortcode
  $cnl = get_query_var('cnlistid');
  $jsonprefilter = file_get_contents('https://cpt-app.appspot.com/nllist.groovy?sid=6342&list='.$cnl);
  $jsontrim = strstr($jsonprefilter, '[');
  $json = substr($jsontrim , 0, -3);
  $array = json_decode( $json, true );
  echo '<ul id="lightSlider'.$cnl.'">';
  $i = 0;
  foreach($array as $item) {
      $i++;
      $isbn = $item['isbn'];
      $imgsrc = $item['img'];
      echo '<li><a data-url="https://library.cpt.com/6342/showdetail/?isbn='.$isbn.'&list='.$cnl.'&cnlcode='.$cnl.'&opacoption=OPAC_A&skin=&group=current" class="viztog" id="'.$isbn.'" href="#home-new-titles-sct"><img src="'.$imgsrc.'"></a></li>';
      if($i > 7) {
        break;
      }
  }
  echo '</ul>';
?>
