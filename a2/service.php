<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Greendale Aerial Photography</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>

    <!-- Google webfonts -->
    <link href="//fonts.googleapis.com/css?family=Lato|Roboto+Slab" rel="stylesheet">
  </head>

  <body>
    <header class="nopadding">
            <a href="index.php">
            <img class="logo" src='../../media/LogoName.png' alt='Logo' width=100%/>
            </a>
        <nav class="nopadding">
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
        <article>
            <section>
                <div class="amount">
                    <h1>20 min.</h1>
                </div> 
                <div>
                    <button onclick="down()">-</button>
                    <input id="quantity" type="text" min="0"/>
                    <button onclick="up()">+</button>
                </div>               
            </section>
        </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Lachlan Furlong s3722243.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

    <script>
    function up() {
    document.getElementById("myNumber").value = document.getElementById("myNumber").value + 1;
}
function down() {
    document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) - 1;
}
</script>

  </body>
  <script>document.getElementById("wireframecss").disabled=true;</script>
</html>

