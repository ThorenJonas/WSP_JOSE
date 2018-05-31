<?php
      require 'db_con.php';
 ?>

 <form class="posta"  id="posta" action="" method="post">
       <select name="Author">
             <?php
             foreach ($users as $key => $value) {
                   echo ' <option value="' - $key . '">' . $value . '</option>';
             }
             ?>
       </select>

       <input type="text" name="" value="Headline">
       <input type="message" name="message" value="Text">

</form>
