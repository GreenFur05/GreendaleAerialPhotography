<?php
    session_start();
    include_once("tools.php");

    $getId='';
    if (!empty($_GET['id']) && isset($prices[$_GET['id']]) )
        $getId = htmlentities($_GET['id']);

    $_SESSION['services'] = readCSV("services.txt");
    $services = $_SESSION['services'];

    if (isset($_POST['id'], $_POST['qty'], $_POST['oid'])) {
        // server side code is required here to validate and check if
        //  - qty is a positive integer (ie 1 or more)
        //  - product/service and option ids are valid
        $id = $_POST['id'];
        $qty = $_POST['qty'];
        $oid = $_POST['oid'];

        if ($qty > 0 && array_key_exists($id,$services) && in_array($oid,$services[$id][$oid == "1080p" ? $oid='A' : $oid='B'])) {

            // If an entry already exists in the array, and more of the same are added to cart, they will be appended instead of replacing.
            /*
            if (array_key_exists($id . $oid, $_SESSION['cart'])) {
                $_SESSION['cart'][$id . $oid]['qty'] += $qty;
            }
            else { */
                $_SESSION['cart'][$id . $oid]['oid'] = $oid;
                $_SESSION['cart'][$id . $oid]['qty'] = $qty;
            //}
        }
    }
      

    topModule("Greendale Aerial Photography - Cart");
?>​
    <article>
        <section>
            <h2>Cart</h2>
        </section>
        <?php
        if (!(isset($_SESSION['cart']))) {
            echo "<section><h1 class='emptyCart'>Your cart is empty!</h1><section>";
        }
        else {
            $totalPrice = 0;
            foreach($_SESSION['cart'] as $id => $info) {
                $index = array_search($id, array_keys($services)) + 1;
                $oid = $info['oid'];
                $qty = $info['qty'];
                // Server side price calculation
                $price = (int)$services[substr($id,0,-1)][$oid]['Price'] * $qty;
                $totalPrice += $price;
                $title = substr($id,0,-1). " minutes";
                $oid = ($oid=='A' ? '1080p' : '4K');
                echo "<section class='wrapper'><div class='idBox'><div class='amount option$index'><h1>$title</h1></div></div>";
                echo "<div class='oidBox'><h3>$oid</h3></div>";
                echo "<div class='qtyBox'><h3>Qty: $qty</h3></div>";
                echo "<div class='priceBox'><h3>\$$price.00</h3></div>";
                echo "</section>";
            }

            echo'
            <section>
            <div class="container">
            <form id="cancel" class="align" action="services.php" method="post">
                <input type="hidden" name="cancel"/>
                <input id="cancelCart" class="submit cancel" type="submit" value="Cancel"/>
            </form>
            <form id="cart" class="align" action="checkout.php" method="post">
            
                <input id="submitCart" class="submit" type="submit" value="Go to Checkout"/>
            </form> 
            </div>
            </section>';
        }
        ?>
    </article>
<?php
  bottomModule();
?>​