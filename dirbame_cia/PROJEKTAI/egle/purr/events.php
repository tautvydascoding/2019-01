<?php
include ('header.html');
include ("events-functions.php");
?>


<div class="container-fluid shadow-lg p-3 mb-5 ">
  <div class="row">
    <div class=" col-md-5 shadow-lg p-3 mb-5 therapy">
      <article class="">
        <h4 class="font">The therapy of a furry friends</h4>
        <p >Cat Therapy is a treatment for anxiety, stress and depression. It improves a person’s quality of life and creates a very special connection between the feline and its owner. In addition, according to several studies, people with heart
          issues gradually improve after living with a cat.
          Interestingly, the same research with dogs had very different results. Dog owners, unlike cat owners, didn’t show the same improvement.
          It seems to suggest that those who own cats are less likely to die from a heart attack than those who do not.Cats are usually recommended for people who live alone, especially the elderly. Even people with dementia or Alzheimer’s sometimes
          recall memories when petting them.
          It’s great news: this can delay the neuronal degeneration of their disease. The purring of the animal stimulates certain fundamental nerve endings, which can help them to recall stories from the past.Having a cat at home is a great
          responsibility for children. Taking care of it, feeding it, and training it is not always an easy task. It’s important to talk to your children so they’re aware of how important the work is.
          Don’t forget to make it clear that an animal is NOT a toy. They must not hit them, throw them down, or grab them by the tail. As living beings they must be respected and loved. Pets will be so much happier if children are treating them
          well.
          for more informatin about the advantages of living with cats visit our <a href="https://exploringyourmind.com/cat-therapy-5-benefits-of-living-with-cats/">partners</a> website. </p>
      </article>
    </div>
    <div class=" col-md-4 shadow-lg p-3 mb-5 kids-reading">
      <article class=" shadow-lg p-3 mb-5">
          <h3 class="font">Kids reading with our cats</h3>
          <p>Hide when guests come over find a way to fit in tiny box but hiss and stare at nothing then run suddenly away. Instantly break out into full speed gallop across the house for no reason lick human with sandpaper tongue destroy the blinds or check cat door for ambush 10 times before coming in. Throwup on your pillow dream about hunting birds so hide at bottom of staircase to trip human really likes hummus. Kitty poochy. Experiences short bursts of poo-phoria after going to the loo i am the best. </p>
          <div id="purr" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#" data-slide-to="0" class="active"></li>
                  <li data-target="#" data-slide-to="1"></li>
                  <li data-target="#" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img class="d-block w-100" src="img/cat-therapy1.jpg" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block w-100" src="img/cat-therapy2.jpg" alt="Third slide">
                  </div>
              </div>
              <a class="carousel-control-prev" href="#purr" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#purr" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </article>
    </div>
  </div>

  <div class="row">
    <div class=" events scroll  col-md-4 mx-auto d-block shadow-lg p-3 mb-5 ">
      <h4 class="font">Our Upcoming Events:</h4>
      <article class=" ">
        <?php
      $allEvents= getEvents();
      $event =  mysqli_fetch_assoc( $allEvents );
      while ( $event != NULL ) { // ar turim events duomenu
          // print_r(  $event  );
          // echo "<hr />";

          echo "<table class='table'>
  <thead> <tr> <th scope='row' class='eventList'>" .
            $event['name'] . " <br />" . "On ".

            $event['date'] . " at ".   $event['time']  . " o'clock <br />".  "<br />".

            $event['description'] . "<br />" . "<br />".

            "price: " . $event['price']. "$ <br /> Please play at the door </th> </tr> <tbody>
  </thead> ";

            $event =  mysqli_fetch_assoc( $allEvents   ); // ima VIS SEKANTI event is objekto
          }

      ?>
        </table>
      </article>
    </div>
    <div class="col-md-4 mx-auto d-block shadow-lg p-3 mb-5 regForm">
      <div id="form mx-auto d-block ">

        <form id='register' action="registration.php" method="post">
          <div class="formgroup" id="name-form">
            <label for="name">Your name</label>
            <input type="text" id="name" name="name" />
          </div>
          <div class="formgroup" id="name-form">
            <label for="surname">Your Surname</label>
            <input type="text" id="surname" name="surname" />
          </div>

          <div class="formgroup" id="email-form">
            <label for="email">Your e-mail</label>
            <input type="email" id="email" name="email" />
          </div>
          <div class="formgroup" id="name-form">
            <label for="phone">Your telephone</label>
            <input type="text" id="phone" name="phone" />
          </div>
          <div class="formgroup" id="message-form">
            <label for="comment">Event Information</label>
            <textarea id="comment" name="comment" placeholder="Let us know the name of event and date you wish to aatend"></textarea>
          </div>
          <div class="">
            <input type="submit" value="Click to Register!" />
        </form>
      </div>

    </div>
  </div>










</div>

</div>







<?php include ('footer.html') ?>
