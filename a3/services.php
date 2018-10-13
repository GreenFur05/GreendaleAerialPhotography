<?php
    session_start();
    include_once("tools.php");

    $getId='';
    if (!empty($_GET['id']) && isset($prices[$_GET['id']]) )
        $getId = htmlentities($_GET['id']);

    $_SESSION['services'] = readCSV("services.txt");

    if (isset($_POST['cancel'])) {
        unset($_SESSION['cart']);
    }

    topModule("Greendale Aerial Photography - Services");
?>​
        <article>    
            <section>
                <h2>Services</h2>
                <table>
                    <tbody>
                        <?php
                        // Write out the information in the services table according to the information in the speadsheet
                        $arr = $_SESSION['services'];
                        echo "<tr>";

                        foreach ($arr as $id => $options) {
                            // Finds index of current id
                            $index = array_search($id, array_keys($arr)) + 1;
                            echo "<th class='price option$index'><a class='link' href='service.php?id=$id'><h1>$id mins.</h1></a></th>";
                        }

                        echo "</tr>";
                        echo "<tr>";

                        foreach ($arr as $id => $options) {
                            // Finds price of current id
                            $price = $options['A']['Price'];
                            echo "<td><h2>From \$$price.00</h2></td>";
                        }

                        echo "</tr>";
                        echo "<tr>";

                        foreach ($arr as $id => $options) {
                            // Finds description of current id
                            $desc = $options['A']['Description'];
                            echo "<td><p>$desc</p></td>";
                        }

                        echo "</tr>"
                        ?>
                    </tbody>
                </table>
            </section>
            <section>
                <h3>Note: It can be arranged that a purchase of more than one package (for instance, three 20 minute packages) can be used over more than one date. Please advise if you would like this during your purchase.</h3>
            </section>
        </article>
<?php
  bottomModule();
?>​