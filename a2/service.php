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
                
                <div class="amount">
                    <h1>20 min.</h1>
                </div> 
                <div>
                    <h2>
                        $25
                    </h2>
                </div>
                <div class="para">
                    <p>
                        20 minutes of flying time will give you enough time for quick photo or to check the surroundings
                    </p>
                </div>
                <div>
                    <button onclick="down()">-</button>
                    <input form="service" name="qty" id="quantity" type="text" value ="1" min="0"/>
                    <button onclick="up()">+</button>
                </div>  
                <div>
                    <form id="service" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=service" method="post" onsubmit="return validation()">
                        <select id="options" name="option">
                            <option value="" disabled selected>Select your option</option>
                            <option value="1080p">1080p</option>
                            <option value="4K">4K</option>
                        </select>
                        <input type="hidden" name="id" value="001" required/>
                        <input id="submitService" class="submit" type="submit"/>
                    </form>
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


    <!-- Using embedded script since this is the only page to use javascript. If required for A3, javascript may need to be ported to external file -->
    <script>
    function up() {
        document.getElementById("quantity").value = parseInt(document.getElementById("quantity").value) + 1;
        if (document.getElementById("quantity").value <= parseInt(0)) {
            document.getElementById("quantity").value = 0;
        }
    }

    function down() {
        document.getElementById("quantity").value = parseInt(document.getElementById("quantity").value) - 1;
        if (document.getElementById("quantity").value <= parseInt(0)) {
            document.getElementById("quantity").value = 0;
        }
    }

    function validation() {
        var x = document.forms["service"]["options"].value;
        if ((x == "") || (document.getElementById("quantity").value <= parseInt(0))) {
            alert("Please select valid option");
            return false;
        }
    }

    </script>

  </body>
  <script>document.getElementById("wireframecss").disabled=true;</script>
</html>

