<?php
  session_start();
  include_once("tools.php");

  $firstNameError = $emailError = $lastNameError = $emailError = $addressError = $phoneError = $cardError = $expiryError = "";
  $firstName = $lastName = $email = $address = $phone = $card = $expiry = "";
  
    if (isset($_POST['firstName'])) {
        if (preg_match("/^[a-zA-Z .,'-]*$/",$_POST['firstName'])) {
            $firstName = test_input($_POST["firstName"]);
            $firstNameError = "";
        }
        else {
            $firstNameError = "Only certain characters allowed"; 
        }

        if (preg_match("/^[a-zA-Z .,'-]*$/",$_POST['lastName'])) {
            $lastName = test_input($_POST["lastName"]);
            $lastNameError = "";
        }
        else {
            $lastNameError = "Only certain characters allowed"; 
        }

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email = test_input($_POST["email"]);
            $emailError = "";
        }
        else {
            $emailError = "Invalid email format"; 
        }

        if (preg_match("/^[a-zA-Z0-9 .,\n'-]*$/",$_POST['address'])) {
            $address = test_input($_POST["address"]);
            $addressError = "";
        }
        else {
            $addressError = "Only certain characters allowed"; 
        }

        if (preg_match("/^(\+614|\(04\)|04){1} ?[0-9]{2} ?[0-9]{3} ?[0-9]{3}$/",$POST['phone'])) {
            $phone = test_input($_POST["phone"]);
            $phoneError = "";
        }
        else {
            $phoneError = "Please enter a valid mobile number"; 
        }

        if (preg_match("/^\s*(?:[0-9]\s*){12,19}$/",$POST['card'])) {
            $card = test_input($_POST["card"]);
            $cardError = "";
        }
        else {
            $cardError = "Please enter a valid credit card number"; 
        }

        if (preg_match("/^(([0-9]){4})|([0-9]{2}\/[0-9]{2})$/",$_POST['expiry'])) {
            $expires = \DateTime::createFromFormat('my', str_replace("/", "", $_POST['expiry']));
            $now = new \DateTime();
            if ($now - $expires > 1) {
                $expiry = test_input($_POST["expiry"]);
                $expiryError = "";
            }
            else {
                $expiryError = "Please enter in format 'MM/YY' that does not expire within a month"; 
            }
        }
        else {
            $expiryError = "Please enter in format 'MM/YY' that does not expire within a month"; 
        }

        
    }

    if (isset($_POST['firstName']) && empty($firstNameError) && empty($lastNameError) && empty($emailError) && empty($addressError) && empty($phoneError) && empty($cardError) && empty($expiryError)) {
        $_SESSION['customerDetails']['firstName'] = $firstName;
        $_SESSION['customerDetails']['lastName'] = $lastName;
        $_SESSION['customerDetails']['email'] = $email;
        $_SESSION['customerDetails']['address'] = $address;
        $_SESSION['customerDetails']['phone'] = $phone;
        header("Location: receipt.php");
    }

  topModule("Greendale Aerial Photography - Checkout");
    
?>​
        <article>
            <section> 
                <h2>Checkout</h2>
                <div>
                    <form id="checkout" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="post">
                        <div>
                        <input class="input co" type="text" name="firstName" placeholder ="First name" value="<?php echo $firstName;?>" required/>
                        <span class="error"><?php echo $firstNameError?></span>
                        </div>

                        <div>
                        <input class="input co" type="text" name="lastName" placeholder ="Last name" value="<?php echo $lastName;?>" required/>
                        <span class="error"><?php echo $lastNameError?></span>
                        </div>

                        <div>
                        <input class="input co" type="email" name="email" placeholder ="E-mail" value="<?php echo $email;?>" required/>
                        <span class="error"><?php echo $emailError?></span>
                        </div>

                        <div>
                        <textarea class="input co" name="address" placeholder="Address" rows="3" cols="19" value="<?php echo $address;?>" required></textarea>
                        <span class="error"><?php echo $addressError?></span>
                        </div>

                        <div>
                        <input class="input co" type="text" name="phone" placeholder ="Mobile number" value="<?php echo $phone;?>" required/>
                        <span class="error"><?php echo $phoneError?></span>
                        </div>

                        <div>
                        <input class="input co" id="creditCard" type="text" name="card" placeholder ="Credit card number" value="<?php echo $card;?>" onkeydown="checkVisa()" required/>
                        <img id="visa" src="../../media/visa.png" alt="visa" width="40px">
                        <span class="error"><?php echo $cardError?></span>
                        </div>

                        <div>
                        <input class="input co expiry" type="text" name="expiry" onkeydown="expiry()" placeholder ="Expiry (MM/YY)" value="<?php echo $expiry;?>" required/>
                        <span class="error"><?php echo $expiryError?></span>
                        </div>

                        <input id="submitService" class="submit" type="submit" value="Confirm"/>
                    </form>
                </div>             
            </section>
        </article>
        <?php
  bottomModule();
?>​