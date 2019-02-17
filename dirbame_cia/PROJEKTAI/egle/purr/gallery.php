
      <?php
    include ('header.html');
    include ("functions/gallery-db-functions.php");

    // check if connected to DB:
    // if ($prisijungimas) {
    //    // echo "Prisijungti prie DB pavyko.<BR />";
    // } else {
    //    echo "ERROR: Prisijungti prie DB nepavyko.<BR />" . mysqli_connect_error();
    // }
    // print_r (getCat(1)); <-- test if aray works

     ?>
     <div class="container-fluid secondContainer shadow-lg p-3 mb-5 relative">
       <div class="row">
         <div class="col-md-8 mx-auto d-block mb-3 rules rounded">
           <article class="playgroundRules shadow-lg p-3 mb-5">
             <h3 class="font">Playground Rules</h3>
              <ul class="">
             <li>Stuff and things eat half my food and ask for more mice and lick human with sandpaper tongue. </li>
             <li>Lie on your belly and purr when you are asleep find empty spot in cupboard and sleep all day</li>
             <li>Meow sit and stare and stare at guinea pigs hiss at vacuum cleaner. </li>
           </ul>
         </div>
         </article>
       </div>
       <div class="row">
         <div class="col-md-5 mx-auto d-block shadow-lg p-3 mb-5">
          <?php $catImg = getCatImg(1);
                $catInfo = getCatInfo(1);
              ?>
              <h3 class="font"> <?php echo $catInfo['name'] ?> (<?php echo $catInfo['age'] ?> year old) </h3>
              <img src=img/<?php echo $catImg['photo']; ?> alt="" class="ourCats rounded-circle w-50 p-3 mx-auto d-block">
              <p class="catDescription"> <?php echo $catInfo['description'] ?> </p>
          </div>

          <div class="col-md-5 mx-auto d-block shadow-lg p-3 mb-5">
              <?php $catImg = getCatImg(2);
              $catInfo = getCatInfo(2);
              ?>
              <h3 class="font"> <?php echo $catInfo['name'] ?> (<?php echo $catInfo['age'] ?> year old) </h3>
              <img src=img/<?php echo $catImg['photo']; ?> alt="" class="ourCats rounded-circle w-50 p-3 mx-auto d-block">
              <p class="catDescription"> <?php echo $catInfo['description'] ?> </p>
            </div>

        <div class="col-md-5 mx-auto d-block shadow-lg p-3 mb-5">
          <?php $catImg = getCatImg(3);
          $catInfo = getCatInfo(3);
          ?>
          <h3 class="font"> <?php echo $catInfo['name'] ?> (<?php echo $catInfo['age'] ?> year old) </h3>
          <img src=img/<?php echo $catImg['photo']; ?> alt="" class="ourCats rounded-circle w-50 p-3 mx-auto d-block">
          <p class="catDescription"> <?php echo $catInfo['description'] ?> </p>
        </div>
        <div class="col-md-5 mx-auto d-block shadow-lg p-3 mb-5">
          <?php $catImg = getCatImg(4);
          $catInfo = getCatInfo(4);
          ?>
          <h3 class="font"> <?php echo $catInfo['name'] ?> (<?php echo $catInfo['age'] ?> year old) </h3>
          <img src=img/<?php echo $catImg['photo']; ?> alt="" class="ourCats rounded-circle w-50 p-3 mx-auto d-block">
          <p class="catDescription"> <?php echo $catInfo['description'] ?> </p>
        </div>
        <div class="col-md-5 mx-auto d-block shadow-lg p-3 mb-5">
          <?php $catImg = getCatImg(5);
          $catInfo = getCatInfo(5);
          ?>
          <h3 class="font"> <?php echo $catInfo['name'] ?> (<?php echo $catInfo['age'] ?> year old) </h3>
          <img src=img/<?php echo $catImg['photo']; ?> alt="" class="ourCats rounded-circle w-50 p-3 mx-auto d-block">
          <p class="catDescription"> <?php echo $catInfo['description'] ?> </p>
        </div>
        <div class="col-md-5 mx-auto d-block shadow-lg p-3 mb-5">
          <?php $catImg = getCatImg(6);
          $catInfo = getCatInfo(6);
          ?>
          <h3 class="font"> <?php echo $catInfo['name'] . "<br />" ?> (He's not even <?php echo $catInfo['age'] ?> year old, but he's already awesome) </h3>
          <img src=img/<?php echo $catImg['photo']; ?> alt="" class="ourCats rounded-circle w-50 p-3 mx-auto d-block">
          <p class="catDescription"> <?php echo $catInfo['description'] ?> </p>
        </div>
        <div class="col-md-5 mx-auto d-block shadow-lg p-3 mb-5">
          <?php $catImg = getCatImg(7);
          $catInfo = getCatInfo(7);
          ?>
          <h3 class="font"> <?php echo $catInfo['name'] ?> (<?php echo $catInfo['age'] ?> year old) </h3>
          <img src=img/<?php echo $catImg['photo']; ?> alt="" class="ourCats rounded-circle w-50 p-3 mx-auto d-block">
          <p class="catDescription"> <?php echo $catInfo['description'] ?> </p>
        </div>
        <div class="col-md-5 mx-auto d-block shadow-lg p-3 mb-5">
          <?php $catImg = getCatImg(8);
          $catInfo = getCatInfo(8);
          ?>
          <h3 class="font"> <?php echo $catInfo['name'] ?> (<?php echo $catInfo['age'] ?> year old) </h3>
          <img src=img/<?php echo $catImg['photo']; ?> alt="" class="ourCats rounded-circle w-50 p-3 mx-auto d-block">
          <p class="catDescription"> <?php echo $catInfo['description'] ?> </p>
        </div>
        <div class="col-md-4 mx-auto d-block shadow-lg p-3 mb-5">
          <?php $catImg = getCatImg(9);
          $catInfo = getCatInfo(9);
          ?>
          <h3 class="font"> <?php echo $catInfo['name'] ?> (<?php echo $catInfo['age'] ?> year old) </h3>
          <img src=img/<?php echo $catImg['photo']; ?> alt="" class="ourCats rounded-circle w-50 p-3 mx-auto d-block">
          <p class="catDescription"> <?php echo $catInfo['description'] ?> </p>
        </div>
        <div class="col-md-4 mx-auto d-block shadow-lg p-3 mb-5">
          <?php $catImg = getCatImg(10);
          $catInfo = getCatInfo(10);
          ?>
          <h3 class="font"> <?php echo $catInfo['name'] ?> (<?php echo $catInfo['age'] ?> year old) </h3>
          <img src=img/<?php echo $catImg['photo']; ?> alt="" class="ourCats rounded-circle w-50 p-3 mx-auto d-block">
          <p class="catDescription"> <?php echo $catInfo['description'] ?> </p>
        </div>
      </div> <!--end of row -->


      <div class="row">
        <div class="col-md-10 mx-auto d-block shadow-lg p-3 mb-5 adopt">
          <article class="">
            <h3 class="font">Become a new mom or dad - adopt today! </h3>
            <p>Did you know that you can adopt any of our pawsome friends here at the playground or you could check out their friends living at the shelter.
              For more information let us know if you are interested in any of the kitties or head to our partner's website to get full details of all fluffy babies.
            </p>
          </article>
        </div>

      </div>



    </div> <!-- end of container -->



















  </div> <!-- end of container-->



<?php  include ('footer.html') ?>
