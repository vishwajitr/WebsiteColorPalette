
<?php function checkPageSpeed($url){  
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

    if(isset($_POST['submit'])&&!empty($_POST['submit'])){

    $url = $_POST['snap_url'];
    $url = addhttp($url);

    echo "<div class='url fade-in-top'>".$url."</div>";
    $myKEY = "AIzaSyCz2RcSD7xm4MxxAPybTdFDevoM4an3H9M";
    $url_req = 'https://www.googleapis.com/pagespeedonline/v1/runPagespeed?url='.$url.'&key='.$myKEY."&screenshot=true&strategy=mobile&strategy=desktop";
    $results = checkPageSpeed($url_req);
    $results = json_decode($results, true);
    $image = $results['screenshot']['data'];
    $image = str_replace(array('_', '-'), array('/', '+'), $image);
    echo "<div class='result-wrapper'><div class='screenshot'><img src=\"data:image/jpeg;base64,".$image."\" /></div>";
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

    ?>