
<?php
require_once("simpleGMapAPI.php");
require_once("simpleGMapGeocoder.php");

$map = new simpleGMapAPI();
$geo = new simpleGMapGeocoder();

$map->setWidth(500);
$map->setHeight(350);
$map->setBackgroundColor('#d0d0d0');
$map->setMapDraggable(true);
$map->setDoubleclickZoom(false);
$map->setScrollwheelZoom(true);

$map->showDefaultUI(false);
$map->showMapTypeControl(true, 'DROPDOWN_MENU');
$map->showNavigationControl(true, 'DEFAULT');
$map->showScaleControl(true);
$map->showStreetViewControl(true);

$map->setZoomLevel(30); // not really needed because showMap is called in this demo with auto zoom
$map->setInfoWindowBehaviour('SINGLE_CLOSE_ON_MAPCLICK');
$map->setInfoWindowTrigger('CLICK');

// punti mappe (INTERPORTO)
$opts = array('fillColor'=>'#0000dd', 'fillOpacity'=>0.2, 'strokeColor'=>'#000000', 'strokeOpacity'=>1, 'strokeWeight'=>2, 'clickable'=>true);
$map->addCircle(40.9565377, 14.484520550000001, 1500, "Interporto / CIS di Nola", $opts);
// punti mappe (MEDEA)
$map->addMarker(40.9565377, 14.484520550000001, "Medea BIJOUX", "<b>Medea BIJOUX</b><br>Via Boscofangone, Nola(NA), Italia<br><b>SIAMO QUI</b><br /><img src=\"http://www.bielefeld.de/ftp/bilder/sehenswuerdigkeiten/sehenswuerdigkeiten/sparrenburg-bielefeld-435.gif\"", "http://www.medeabijoux.it/mapiconscollection-markers/jewelry.png");
// punti mappe (CLIENTI)
$map->addMarkerByAddress("Corso Trieste 195 , Caserta", "LA BOUTIQUE DI ANTONELLA PINTO", "<b>LA BOUTIQUE DI ANTONELLA PINTO</b><br>Corso Trieste, 195 - Caserta<br>TEL. 339.70.72.032", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_female.png");
$map->addMarkerByAddress("Corso Italia 34 , Giugliano", "PIROZZI ABBIGLIAMENTO", "<b>PIROZZI ABBIGLIAMENTO</b><br>Corso Italia, 34 - Giugliano<br>TEL. 081.895.34.42<br><a href=\"http://www.boutiquepirozzi.com\" target=\"_blank\">www.boutiquepirozzi.com</a>", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_male.png");
$map->addMarkerByAddress("Via Garibaldi 10 , Aversa", "CBC - Donna di Novirova Tatiana", "<b>CBC - Donna di Novirova Tatiana</b><br>Via Garibaldi, 10 - Aversa<br>TEL. 081.020.92.182", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_female.png");
$map->addMarkerByAddress("Viale Manzoni 13 , Lusciano", "WOMAN DREAMERS", "<b>WOMAN DREAMERS</b><br>Viale Manzoni, 13 - Lusciano / Aversa", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_female.png");
$map->addMarkerByAddress("Corso Italia 94 , Sorrento", "La dolce vita", "<b>La dolce vita</b><br>Corso Italia , 94  Sorrento", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_female.png");
$map->addMarkerByAddress("Viale Michelangelo 57 , Vomero", "DANIELA SIANO", "<b>DANIELA SIANO</b><br>Viale Michelangelo, 57 - Vomero<br>TEL. 081.558.17.83", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_male.png");
$map->addMarkerByAddress("Via Luca Giordano 71 , Vomero", "NEW NOEMI BOUTIQUE Srl", "<b>NEW NOEMI BOUTIQUE Srl</b><br>Via Luca Giordano, 71 - Vomero", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_male.png");
$map->addMarkerByAddress("Via del pennino 15 , Acerra", "ANGEL JEANS", "<b>ANGEL JEANS</b><br>Via del pennino, 15 - Vomero", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_male.png");
$map->addMarkerByAddress("Corso Italia 94 , Sorrento", "SORRENTO MODA snc", "<b>SORRENTO MODA snc</b><br>Corso Italia 94 - Sorrento", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_male.png");
$map->addMarkerByAddress("Via Giulio Palermo 45, Napoli", "SPS DI SERGIO SANTOPAOLO", "<b>SPS DI SERGIO SANTOPAOLO</b><br>Via Giulio Palermo 45 - Napoli", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_male.png");
$map->addMarkerByAddress("Via Fugliari 81, Nocera inferiore", "IRIS LE MAGLIE", "<b>IRIS LE MAGLIE</b><br>Via Fugliari 81 - Nocera inferiore", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_male.png");
$map->addMarkerByAddress("Via Mazzini 132, Battipaglia", "ASCIONE RITA srl", "<b>ASCIONE RITA srl</b><br>Via Mazzini 132 - Battipaglia", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_male.png");
$map->addMarkerByAddress("Largo Cairoli 14, Cecina", "MONDO IDEA di Bibbiani Roberta", "<b>MONDO IDEA di Bibbiani Roberta</b><br>Largo Cairoli 14 - Cecina", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_male.png");
$map->addMarkerByAddress("Via Cino 19, Pistoia", "DOLCE VITA", "<b>DOLCE VITA</b><br>Via Cino 19 - Pistoia", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_male.png");
$map->addMarkerByAddress("Via Augusto Alfani 3, Prato", "SANDRA B. sas", "<b>SANDRA B. sas</b><br>Via A. Alfani 3 - Prato", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_male.png");
$map->addMarkerByAddress("Via Pesciatina 433, Zone Capannori", "CARATTERE di Pardini Ramona", "<b>CARATTERE di Pardini Ramona</b><br>Via Pesciatina 433 - Zone Capannori", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_male.png");
$map->addMarkerByAddress("Via Colombo 9, Orco Feglino", "MOMOLO di Alamia Monica", "<b>MOMOLO di Alamia Monica</b><br>Via Colombo 9 - Orco Feglino", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_male.png");
$map->addMarkerByAddress("Via piombino 10, Genova", "Rebel", "<b>Rebel</b><br>Via piombino 10 - Genova", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_male.png");
$map->addMarkerByAddress("Via Roma 10 , Andora", "VIA ROMA MODA di S. Ardizzone", "<b>Rebel</b><br>Via Roma 10 - Andora", "http://www.medeabijoux.it/mapiconscollection-markers/clothers_male.png");
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MEDEA-Bijoux</title>
<link href="../jquery-mobile/jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css" />
<link href="../jquery-mobile/jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css" />
<link href="css/css_medea.css" rel="stylesheet" type="text/css" />
<script src="../jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="../jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<meta name="p:domain_verify" content="15f41c0000925193e21a8e6026537756"/>





<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->



</head>

<body class="sfondo">
  
<div class="sfondo_footer" id="index" data-role="page">
  <div data-role="header" align="center" class="sfondo">
    <p><img src="immagini/testata.fw.png" / width="80%" class="sfondo"></p>
    <table width="60%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td id="LayoutDiv1" align="center"> <span class="sfondo">Il marchio MEDEA costruisce il proprio successo sulle basi di un’esperienza maturata, dalla famiglia Pagano, nella produzione artigianale di articoli gioiello per i più importanti Brand della moda dal lontano 1981. </span>
          <p></p>
          <p class="sfondo">Creatività, artigianalità, attenzione alle ultime tendenze e cura nella realizzazione del prodotto, sono gli elementi che costituiscono il DNA dei prodotti MEDEA, grazie ad artigiani che hanno maturato un’esperienza ultradecennale nel settore, raffinando gusto ed accuratezza nella lavorazione del bijoux.<br />
            <br />
        La mission di MEDEA è quello di offrire ad ogni donna la possibilità di sentirsi Dea, indossando manufatti di pregio realizzati perpetuando la tradizione dell’antica arte orafa Napoletana.</p></td>
        
      </tr>
    </table>
    <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td class="sfondo"><h2 align="center"><br />
        Alcuni dei nostri prodotti<br />

        
        <br />
      </h2>
        <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/dsc01358_2.jpg" alt="DSC01358 (2)" title="DSC01358 (2)" id="wows1_0"/></li>
		<li><img src="data1/images/dsc01241.jpg" alt="DSC01241" title="DSC01241" id="wows1_1"/></li>
		<li><img src="data1/images/dsc01115.jpg" alt="DSC01115" title="DSC01115" id="wows1_2"/></li>
		<li><img src="data1/images/collana11.jpg" alt="collana11" title="collana11" id="wows1_3"/></li>
		<li><img src="data1/images/anello.jpg" alt="anello" title="anello" id="wows1_4"/></li>
		<li><img src="data1/images/11.jpg" alt="11" title="11" id="wows1_5"/></li>
		<li><img src="data1/images/senzatitolo51.jpg" alt="Senza-titolo-51" title="Senza-titolo-51" id="wows1_6"/></li>
		<li><img src="data1/images/senzatitolo2.jpg" alt="Senza-titolo-2" title="Senza-titolo-2" id="wows1_7"/></li>
		<li><img src="data1/images/senzatitolo2_2.jpg" alt="Senza-titolo-2 (2)" title="Senza-titolo-2 (2)" id="wows1_8"/></li>
		<li><img src="data1/images/senzatitolo1.jpg" alt="Senza-titolo-1" title="Senza-titolo-1" id="wows1_9"/></li>
		<li><img src="data1/images/senza_titolo57.jpg" alt="Senza titolo-57" title="Senza titolo-57" id="wows1_10"/></li>
		<li><img src="data1/images/senza_titolo55.jpg" alt="Senza titolo-55" title="Senza titolo-55" id="wows1_11"/></li>
		<li><img src="data1/images/senza_titolo3.jpg" alt="Senza titolo-3" title="Senza titolo-3" id="wows1_12"/></li>
		<li><img src="data1/images/senza_titolo2.jpg" alt="Senza titolo-2" title="Senza titolo-2" id="wows1_13"/></li>
		<li><img src="data1/images/senza_titolo2_2.jpg" alt="Senza titolo-2 (2)" title="Senza titolo-2 (2)" id="wows1_14"/></li>
		<li><img src="data1/images/pietranaturale.jpg" alt="pietra-naturale" title="pietra-naturale" id="wows1_15"/></li>
		<li><a href="http://wowslider.com/vi"><img src="data1/images/medea_img4.jpg" alt="bootstrap carousel" title="medea_img4" id="wows1_16"/></a></li>
		<li><img src="data1/images/dsc01447.jpg" alt="DSC01447" title="DSC01447" id="wows1_17"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="DSC01358 (2)"><span><img src="data1/tooltips/dsc01358_2.jpg" alt="DSC01358 (2)"/>1</span></a>
		<a href="#" title="DSC01241"><span><img src="data1/tooltips/dsc01241.jpg" alt="DSC01241"/>2</span></a>
		<a href="#" title="DSC01115"><span><img src="data1/tooltips/dsc01115.jpg" alt="DSC01115"/>3</span></a>
		<a href="#" title="collana11"><span><img src="data1/tooltips/collana11.jpg" alt="collana11"/>4</span></a>
		<a href="#" title="anello"><span><img src="data1/tooltips/anello.jpg" alt="anello"/>5</span></a>
		<a href="#" title="11"><span><img src="data1/tooltips/11.jpg" alt="11"/>6</span></a>
		<a href="#" title="Senza-titolo-51"><span><img src="data1/tooltips/senzatitolo51.jpg" alt="Senza-titolo-51"/>7</span></a>
		<a href="#" title="Senza-titolo-2"><span><img src="data1/tooltips/senzatitolo2.jpg" alt="Senza-titolo-2"/>8</span></a>
		<a href="#" title="Senza-titolo-2 (2)"><span><img src="data1/tooltips/senzatitolo2_2.jpg" alt="Senza-titolo-2 (2)"/>9</span></a>
		<a href="#" title="Senza-titolo-1"><span><img src="data1/tooltips/senzatitolo1.jpg" alt="Senza-titolo-1"/>10</span></a>
		<a href="#" title="Senza titolo-57"><span><img src="data1/tooltips/senza_titolo57.jpg" alt="Senza titolo-57"/>11</span></a>
		<a href="#" title="Senza titolo-55"><span><img src="data1/tooltips/senza_titolo55.jpg" alt="Senza titolo-55"/>12</span></a>
		<a href="#" title="Senza titolo-3"><span><img src="data1/tooltips/senza_titolo3.jpg" alt="Senza titolo-3"/>13</span></a>
		<a href="#" title="Senza titolo-2"><span><img src="data1/tooltips/senza_titolo2.jpg" alt="Senza titolo-2"/>14</span></a>
		<a href="#" title="Senza titolo-2 (2)"><span><img src="data1/tooltips/senza_titolo2_2.jpg" alt="Senza titolo-2 (2)"/>15</span></a>
		<a href="#" title="pietra-naturale"><span><img src="data1/tooltips/pietranaturale.jpg" alt="pietra-naturale"/>16</span></a>
		<a href="#" title="medea_img4"><span><img src="data1/tooltips/medea_img4.jpg" alt="medea_img4"/>17</span></a>
		<a href="#" title="DSC01447"><span><img src="data1/tooltips/dsc01447.jpg" alt="DSC01447"/>18</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">wowslideshow</a> by WOWSlider.com v8.7</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->






    <br>   <br /> <br /></td>
    
    </tr>
    </table>
    <img src="immagini/sottobanner.jpg" />
  </div>
     
    
    
    
  <div data-role="content">
    <div class="ui-grid-a" align="center" >
     
     
      <p>      
      <h2>Made in Italy</h2>
      <p>
      
      
      
      
      
   
       
  <video width="60%" controls>
  <source src="video/Sequenza_01.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video><br /><br />
    
      
      
      
      
        
        
        
      </p>
      <h2>&nbsp;</h2>
      <h2>Rivenditori autorizzati</h2>
      <p>
      
      
      
      
      
  
   <div class="sfondomappa" align="center">
   <font color="#000000">
        <?php
    $map->printGMapsJS();
    $map->showMap(true);
    ?>
    </font>
    </div>  
    
    
    
    
    
    
      </p>
      <h2>&nbsp;</h2>
      <h2> Contatti</h2>
      <a href="mailto:info@medeabijoux.it" style="color:#fff">info@medeabijoux.it</a>
      <p>
        <script 

type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 

'it', layout: 

google.translate.TranslateElement.InlineLayout.SIMPLE}, 

'google_translate_element');
}
        </script>
        <script type="text/javascript" 

src="//translate.google.com/translate_a/element.js?

cb=googleTranslateElementInit"></script>
      
      
      <br />      
      <p>
      <p></p><h2 style="">
    <br />
    Social</h2>
    <p><a href="https://www.facebook.com/medeabypagano/?fref=ts" target="_top"><img src="immagini/facebook_logo.png" width="85" height="63" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/MedeaBijoux" target="_top"><img src="immagini/twitter_logo.png" width="63" height="63" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <a href="https://it.pinterest.com/medeabijoux/" target="_top"><img src="immagini/pinterest_logo.png" width="64" height="64" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <a href="https://www.instagram.com/medeabijoux/" target="_top"><img src="immagini/istagramm_logo.png" width="64" height="64" /></a>
    </p>
      

    </div>
    
    
    
  </div>
  <div data-role="footer" align="center" class="sfondo_footer">
    
    
    
    <div>
    
    </div>
    <p><img src="immagini/sottobanner_rivolto.jpg" /></p>
 
 
  </div>
</div>

  
  
  
  
  
  

<footer>
<p align="center"> <br />
      copyright © Medea by Pagano  2016 </p>

</footer>



</body>







</html>
