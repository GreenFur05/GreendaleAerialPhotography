<?php
  session_start();
  include_once("tools.php");

  $services = $_SESSION['services'];

  

  

topModule("Greendale Aerial Photography - Receipt");
?>

<article>
    <section>

        <table>
            <tbody>
                <tr>
                    <th>
                        <h3>Date</h3>
                    </th>
                    <th>
                        <h3>Name</h3>
                    </th>
                    <th>
                        <h3>Email</h3>
                    </th>
                    <th>
                        <h3>Mobile</h3>
                    </th>
                    <th>
                        <h3>Address</h3>
                    </th>
                    <th>
                        <h3>PID</h3>
                    </th>
                    <th>
                        <h3>OID</h3>
                    </th>
                    <th>
                        <h3>Quantity</h3>
                    </th>
                    <th>
                        <h3>Unit Price</h3>
                    </th>
                    <th>
                        <h3>Sub Total</h3>
                    </th>
                </tr>
            </tbody>
        </table>

        <?php
        foreach($_SESSION['cart'] as $id => $info) {
            $oid = $info['oid'];
            $qty = $info['qty'];
            // Server side price calculation
            $price = (int)$services[substr($id,0,-1)][$oid]['Price'] * $qty;
            $totalPrice += $price;
            $title = substr($id,0,-1). " minutes";
            $oid = ($oid=='A' ? '1080p' : '4K');
        
            $records[] = date("d/m/Y");
            array_push($records, $_SESSION['customerDetails']['firstName'] . $_SESSION['customerDetails']['lastName'],$_SESSION['customerDetails']['email'],$_SESSION['customerDetails']['phone'],$_SESSION['customerDetails']['address'],
            substr($id,0,-1),$oid,$qty,$services[substr($id,0,-1)][$oid]['Price'],$price);
            echo "<tr>";
            foreach($records as $record) {
                echo "<td><p>$record</p></td>";
            }
            echo "</tr>";
            writeCSV("orders.txt",$records);
            }

        ?>
    </section>
</article>

<?php
  bottomModule();
?>​