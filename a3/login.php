<?php
  session_start();
  include_once("tools.php");
  topModule("Greendale Aerial Photography - Login");
?>​
      <article>
          <section>
            <form id="login" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login" method="post">
                <input class="input" type="text" name="email" placeholder="E-mail" maxlength="50" required/>
                <input class="input" type="password" name="password" placeholder="Password" maxlength="50" required/>
                <input class="submit" type="submit"/>
            </form>
          </section>
      </article>
      <?php
  bottomModule();
?>​
