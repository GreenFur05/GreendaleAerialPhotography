<?php
  session_start();
  include_once("tools.php");

  // If there is no id or an id that is not valid, the user will be redirected to services.php
  if (isset($_GET['id']) && $_GET['id'] == 20 || $_GET['id'] == 45 || $_GET['id'] == 60 || $_GET['id'] == 120 ) {
    $id = $_GET['id'];
    if (!(isset($_SESSION['services'])))
        $_SESSION['services'] = readCSV("services.txt");
    $details = $_SESSION['services'];

    // JS array used for changing price based on option selected
    php2js($details,"details");
    echo "<script> var id = $id </script>";
  }
  else
    header('Location: services.php');

  topModule("Greendale Aerial Photography - $id minutes");
    
?>​
        <article>
            <section>
                <div class="amount option<?php echo array_search($id, array_keys($details)) + 1;?>">
                    <h1><?php echo "$id mins."; ?></h1>
                </div> 
                <div>
                    <?php
                    $price = $details[$id]['A']['Price'];
                    echo "<h2 id ='price'>From \$$price.00</h2>";
                    ?>
                </div>
                <div class="para">
                <?php
                    $desc = $details[$id]['A']['Description'];
                    echo "<p>$desc</p>";
                    ?>
                </div>
                <div>
                    <button onclick="down()">-</button>
                    <input form="service" name="qty" id="quantity" type="text" value ="1" min="0"/>
                    <button onclick="up()">+</button>
                </div>  
                <div>
                    <form id="service" action="cart.php" method="post" onsubmit="return validation()">
                        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?> required/>
                        <select id="options" name="oid" onchange="optionsChanged()">
                            <option value="" disabled selected>Select your option</option>
                            <option value="1080p">1080p</option>
                            <option value="4K">4K</option>
                        </select>
                        <input id="submitService" class="submit" type="submit" value="Add to cart" disabled/>
                    </form>
                </div>             
            </section>
        </article>
        <?php
  bottomModule();
?>​

