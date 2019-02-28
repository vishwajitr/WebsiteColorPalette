<!DOCTYPE html>
<html>
<head>
<title>Website Color Fetch</title>
<link rel="stylesheet" type="text/css" href="css/iao-alert.css">
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Karla:400,700');
.clearfix:before,
.clearfix:after {content: " "; /* 1 */ display: table; /* 2 */ } 
.clearfix:after {clear: both; }
  body{font-family: 'Karla', sans-serif;}
  .colortable td{padding: 20px 10px; text-align: center;width: 150px}
  .main-wrapper{width: 80%;margin: 30px auto;position: relative;}
  .info-wrapper{width: 50%;float: right;padding-top: 310px;text-align: left}
  .info-wrapper h1{font-size: 40px;font-weight: bold;}
  .info-wrapper.hide{display: none;}
  .info-wrapper.active:after {content : ""; display: block; position: absolute; top: 170px; left: 0; background: url(images/paint.gif) no-repeat center center; width: 100%; height: 100%; opacity : 0.5; z-index: -1; }
  .input-wrapper{padding: 176px 0px;position: relative;margin-top: 180px;transition: 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) ;float: left;width: 40%}
  .info-wrapper.active h1 span{text-shadow: 2px 2px 5px #333}
  .input-wrapper.active{margin-top: 0px}
  .input-wrapper:after {content : ""; display: block; position: absolute; top: 0; left: 0; background: url(images/bg-input.jpg) no-repeat center center; width: 100%; height: 100%; opacity : 0.5; z-index: -1; }
  .text-input{height: 40px; width: 235px; box-shadow: 1px 4px 7px #808080; border: 0; border-radius: 30px; padding: 5px 10px; outline: 0;font-size: 16px;font-family: 'Karla',arial,sans-serif;outline: 0}
  .submit{ height: 40px; width: 100px; border-radius: 30px; border: 0; background-color: #666; display: block; margin-top: 15px; color: #fff;font-size: 16px;cursor: pointer;font-family: 'Karla',arial,sans-serif;outline: 0}
  .result-wrapper{width: 700px;margin: 0 auto 30px;float: left;padding-top: 100px}
  .screenshot{float: left;box-shadow: 0px 0px 15px #e5e5e5;}
  .shades{float: right;list-style: none;width: 320px;margin: 0;padding: 0}
  .shades li{width: 100%;-webkit-animation: fadeIn 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
          animation: fadeIn 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;}
          li:nth-child(1) {
  -webkit-animation-delay: 0.25s;
          animation-delay: 0.25s;
}
.submit.cf_required{pointer-events: none;}

.shades li:nth-child(2) {
  -webkit-animation-delay: 0.40s;
          animation-delay: 0.40s;
}

.shades li:nth-child(3) {
  -webkit-animation-delay: 0.55s;
          animation-delay: 0.55s;
}

.shades li:nth-child(4) {
  -webkit-animation-delay: 0.7s;
          animation-delay: 0.7s;
}

.shades li:nth-child(5) {
  -webkit-animation-delay: 0.95s;
          animation-delay: 0.95s;
}
  .shade-band{height: 50px;border-radius: 10px}
  .shade-value{text-align: left;margin-bottom: 15px}
  .url{font-size: 18px;font-weight: 600;margin-bottom: 30px}
  .fade-in-top {
    -webkit-animation: fade-in-top 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
            animation: fade-in-top 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
            animation-delay: 0.2s;
  }

  @-webkit-keyframes fade-in-top {0% {-webkit-transform: translateY(-50px); transform: translateY(-50px); opacity: 0; } 100% {-webkit-transform: translateY(0); transform: translateY(0); opacity: 1; } } @keyframes fade-in-top {0% {-webkit-transform: translateY(-50px); transform: translateY(-50px); opacity: 0; } 100% {-webkit-transform: translateY(0); transform: translateY(0); opacity: 1; } } @-webkit-keyframes fadeIn {0% {opacity: 0; top: -100px; } 75% {top: 0px; } 100% {opacity: 1; } }
.fade-in-right {
  -webkit-animation: fade-in-right 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
          animation: fade-in-right 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
}

@-webkit-keyframes fade-in-right {0% {-webkit-transform: translateX(50px); transform: translateX(50px); opacity: 0; } 100% {-webkit-transform: translateX(0); transform: translateX(0); opacity: 1; } } @keyframes fade-in-right {0% {-webkit-transform: translateX(50px); transform: translateX(50px); opacity: 0; } 100% {-webkit-transform: translateX(0); transform: translateX(0); opacity: 1; } }

.fade-in-left {
  -webkit-animation: fade-in-left 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
          animation: fade-in-left 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
}

@-webkit-keyframes fade-in-left {0% {-webkit-transform: translateX(-50px); transform: translateX(-50px); opacity: 0; } 100% {-webkit-transform: translateX(0); transform: translateX(0); opacity: 1; } } @keyframes fade-in-left {0% {-webkit-transform: translateX(-50px); transform: translateX(-50px); opacity: 0; } 100% {-webkit-transform: translateX(0); transform: translateX(0); opacity: 1; } }

@media screen and (max-width: 1500px) {
.main-wrapper{width: 96%}
.input-wrapper{margin-top: 120px}
.info-wrapper{padding-top: 240px}
}

@media screen and (max-width: 1250px) {
.result-wrapper{width: 570px}
.shades{width: 200px}
}
@media screen and (max-width: 1024px) {
.input-wrapper,.result-wrapper{width: 100%}
.shades{width: 50%}
.info-wrapper{width: 100%;text-align: center;padding-top: 30px}
}

@media screen and (max-width: 767px) {
.shades{width: 100%;margin-top: 30px}
.result-wrapper{padding-top: 20px}
}

  </style>

</head>
<body>
<center>
<?php
$was_submitted = '';

// echo phpinfo();
require_once 'vendor/autoload.php';
use League\ColorExtractor\Color;
use League\ColorExtractor\ColorExtractor;
use League\ColorExtractor\Palette;

if(isset($_POST['submit'])&&!empty($_POST['submit'])){

    $was_submitted = true;
}
?>
<div id="wait" style="display: none;">wait</div>
<div class="main-wrapper clearfix">
    <div class="input-wrapper fade-in-right ">
      <form method="post" id="form">
        <!-- <label>Url</label> -->
        <input type="text" name="snap_url" placeholder="Enter URL" class="text-input">
        <input type="submit" name="submit" class="submit cf_required">
      </form>
    </div>
    <div class="info-wrapper fade-in-left <?php if ($was_submitted) { echo 'hide'; } ?>">
      <h1>The Website <span style="color:#FF95B1">C</span><span style="color:#FFE386">o</span><span style="color:#C393F0">l</span style="color:#A3DFFF"><span style="color: #65c36a">o</span><span style="color:#b8bcc8">r</span> Fetch</h1>
      <p>Get the color scheme used for the website</p>
    </div>

    <?php
    

    function checkPageSpeed($url){  
      if (function_exists('file_get_contents')) {  
        $result = @file_get_contents($url);  
      }  
      if ($result == '') {  
        $ch = curl_init();  
        $timeout = 60;  
        curl_setopt($ch, CURLOPT_URL, $url);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
        $result = curl_exec($ch);  
        curl_close($ch);  
      }  

      return $result;  
    }

    function addhttp($url) {
        if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
            $url = "http://" . $url;
        }
        return $url;
    }

    $colors = '';

    if(isset($_POST['submit']) && !empty($_POST['submit'])){

    $url = $_POST['snap_url'];
    $url = addhttp($url);
    //var_dump(filter_var($url, FILTER_VALIDATE_URL));

    //echo "<div class='url fade-in-top'>".$url."</div>";
    $myKEY = "AIzaSyCz2RcSD7xm4MxxAPybTdFDevoM4an3H9M";
    $url_req = 'https://www.googleapis.com/pagespeedonline/v1/runPagespeed?url='.$url.'&key='.$myKEY."&screenshot=true&strategy=mobile&strategy=desktop";
    $results = checkPageSpeed($url_req);
    $results = json_decode($results, true);
    $image = $results['screenshot']['data'];
    $image = str_replace(array('_', '-'), array('/', '+'), $image);
    echo "<div class='result-wrapper fade-in-right'><div class='screenshot'><img src=\"data:image/jpeg;base64,".$image."\" /></div>";
    $palette = Palette::fromFilename('data:image/jpeg;base64,'.$image.'');

    // $palette is an iterator on colors sorted by pixel count
    foreach($palette as $color => $count) {
        // colors are represented by integers
        // echo Color::fromIntToHex($color), ': ', $count, "\n";
    }

    // it offers some helpers too
    $topFive = $palette->getMostUsedColors(5);
    $colorCount = count($palette);
    // $blackCount = $palette->getColorCount(Color::fromHexToInt('#000000'));
    // an extractor is built from a palette
    $extractor = new ColorExtractor($palette);
    // it defines an extract method which return the most “representative” colors
    $colors = $extractor->extract(5);
    }

    if(isset($colors)&&!empty($colors)){
      echo "<ul class='shades'>";
      foreach ($colors as $key => $value) {
        echo "<li class='fade-in-top'>";      
          echo "<div class='shade-band' style='background-color:".Color::fromIntToHex($value)."'></div>";
          echo "<div class='shade-value'>".Color::fromIntToHex($value)."</div>";
        echo "</li>";  
      }
      echo "</ul>";

      echo "<div class='url fade-in-top'>".$url."</div>";
    }

    ?>

</div>
</center>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="js/iao-alert.jquery.js"></script> -->

<!-- <script type="text/javascript">
  $('form').submit(function() {
    $('#wait').show();
    $.post('index.php', function() {
        $('#wait').hide();
    });
    return false;
});
</script> -->
<script type="text/javascript">
  // CHECK WEBSITE
  $(".text-input").focusout(function() {
      var myVariable = $(this).val();
      if(/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/.test(myVariable)){
          $('.submit').addClass("validated_ok").removeClass("cf_required")
      } else {
          $('.submit').removeClass("validated_ok").addClass("cf_required");
      }
  });
  if($('.result-wrapper').is(':visible')) {
    $('.input-wrapper').addClass('active');
  }
  $('#form').submit(function(){
    $('.info-wrapper').addClass('active');

  });
</script>
</body>
</html>


