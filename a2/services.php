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
        <article>
            <section>
            <h2>Services</h2>
                <table>
                    <tbody>
                        <tr>
                            <th class="price option1">
                                <h1>20 min.</h1>
                            </th>
                            <th class="price option2">
                                <h1>45 min.</h1>
                            </th>
                            <th class="price option3">
                                <h1>60 min.</h1>
                            </th>
                            <th class="price option4">
                                <h1>120 min</h1>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <a href="service.php">
                                    <h2>$25</h2>
                                </a>
                            </td>
                            <td>
                                <h2>$45</h2>
                            </td>
                            <td>
                                <h2>$110</h2>
                            </td>
                            <td>
                                <h2>$300</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>20 minutes of flying time will give you enough time for a quick photo or to check the surroundings</p>
                            </td>
                            <td>
                                <p>45 minutes of flying time will give you enough time for a short video or an extended photo shoot</p>
                            </td>
                            <td>
                                <p>60 minutes of flying time is the right amount of time for an extended-length recording</p>
                            </td>
                            <td>
                                <p>120 minutes is for the photography enthusiast, providing ample time to capture the ultimate shot, time-lapses, or long-distance flights.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
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

  </body>
  <script>document.getElementById("wireframecss").disabled=true;</script>
</html>