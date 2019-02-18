<?php
include ('header.html');
require_once('functions/contacts-functions.php');


 ?>
    <div class="row">
     <div class="col-md-12 mx-auto d-block my-5">
       <h3 class="font">Here's how to find us:</h3>
     </div>
   </div>
   <div class="row line">
     <?php $Contacts= getContact(1); ?>
     <div class="USA col-md-5  d-block my-5 ml-5 mx-auto d-block mb-3 rules">
       <article class="shadow-lg p-3 mb-5">
         <h4 class="font">Our Boston contact information:</h4>
         <p><?php echo $Contacts ['address']; ?> </p>
         <p><?php echo $Contacts ['phone']; ?></p>
         <p id="map"><?php echo $Contacts ['email']; ?></p>
         <p><?php echo $Contacts ['map']; ?></p>
       </article>
     </div>
   <!-- </div>
   <div class="row line"> -->
     <?php $Contacts= getContact(2); ?>
     <div class="canada col-md-5 d-block my-5 ml-5">
       <article class="shadow-lg p-3 mb-5">
         <h4 class="font">Our Boston contact information:</h4>
         <p><?php echo $Contacts ['address']; ?> </p>
         <p><?php echo $Contacts ['phone']; ?></p>
         <p><?php echo $Contacts ['email']; ?></p>
         <p id="map"><?php echo $Contacts ['map']; ?></p>
       </article>
     </div>
   </div>










   </div> <!-- end of row-->
</div><!-- end of container-->

<?php include ('footer.html') ?>
