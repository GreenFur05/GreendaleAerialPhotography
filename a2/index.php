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
        <figure>
          <img src="../../media/BlueGully.png" alt="Blue gully" width=100%>
        </figure>
        <section>
          <h2>What do we do?</h2>
          <p>
            Greendale Aerial Photography specialise in using drones and other aerial equipment to capture the perfect shot or footage from above. We offer various timing options to cater for all photographic circumstances, whether it be a quick photo or long-length video.
          </p>
          <h2>Who are we?</h2>
          <p>
            We are a small business located just out of the Wombat State Forest in Central Victoria. Our team are located throughout the district, each member highly experienced with aerial photography.
          </p>
          <h2>How does it work?</h2>
          <p>
            We will come out to a locally specified location and capture/record your chosen target. We offer different timing options at different prices to suit your needs. If desired, multiple quantities of the same time can be chosen, allowing for multiple sessions on different dates. 
          </p>
        </section>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Lachlan Furlong s3722243.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
  <script>document.getElementById("wireframecss").disabled=true;</script>
</html>
