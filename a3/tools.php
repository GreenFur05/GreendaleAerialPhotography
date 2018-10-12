<?php
function topModule($pageTitle) {
  $output = <<<"HEADER_TEXT"
  <!DOCTYPE html>
        <html lang='en'>
          <head>
            <meta charset="utf-8">
            <title>$pageTitle</title>
            
            <!-- Keep wireframe.css for debugging, add your css to style.css -->
            <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
            <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
            <script src='../wireframe.js'></script>
            <script src='js/main.js'></script>
        
            <!-- Google webfonts -->
            <link href="//fonts.googleapis.com/css?family=Lato|Roboto+Slab" rel="stylesheet">
          </head>
        
          <body>
            <header>
              <a href="index.php">
                <img class="logo" src='../../media/LogoName.png' alt='Logo' width=100%/>
              </a>
              <nav>
                <ul>
                  <strong>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="login.php">Login</a></li>
                  </strong>
                </ul>
              </nav>
            </header>
            <main>
HEADER_TEXT;
echo $output;
}

function bottomModule() {
  $output = <<<"FOOTER_TEXT"
  </main>
        <footer>
          <div>&copy;<script>
            document.write(new Date().getFullYear());
          </script> Lachlan Furlong s3722243.</div>
          <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
          <div><a href="services.txt">services.txt</a></div>
          <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
        </footer>
      </body>
      <script>document.getElementById("wireframecss").disabled=true;</script>
    </html>
FOOTER_TEXT;
  echo $output;
  echo "Debug Module:";
  preShow($_POST);
  preShow($_SESSION);
  printMyCode();
}

function preShow($arr, $returnAsString=false) {
  $ret = '<pre>' . print_r($arr,true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else
    echo $ret;
}

function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'>\n";
  foreach ($lines as $lineNo => $lineOfCode)
    printf("%3u: %1s \n", $lineNp, rtrim(htmlentities($lineOfCode)));
  echo "</pre>";
}

function php2js($arr, $arrName) {
  $lineEnd = "";
  echo "<script>\n";
  echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
  echo "</script>\n\n";
}

function styleCurrentNavLink($css) {
  $here = $_SERVER['SCRIPT_NAME'];
  $bits = explode('/',$here);
  $fileName = $bits[count($bits) - 1];
  echo "<style>nav a[href$='filename'] { $css }</style>";
}

function readCSV($fileName) {
  $fp = fopen($fileName,'r'); 
  if (($headings = fgetcsv($fp, 0, "\t")) !== false) { 
    while ( $cells = fgetcsv($fp, 0, "\t") ) { 
      for ($x=1; $x<count($cells); $x++) 
        $pumps[$cells[0]][$cells[1]][$headings[$x]]=$cells[$x]; 
      } 
    } 
  fclose($fp); 
  return $pumps;
}
?>