<?php include('header.html');
      include('functions/functions-kitty-master.php');?>


      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title>Admin page</title>
        </head>
        <body>
          <?php  $events= getEvents();

             while ($event = mysqli_fetch_assoc($events)) :

            $allEvents= getEvents();
            $event =  mysqli_fetch_assoc( $allEvents );
            while ( $event != NULL ) { // ar turim events duomenu
                // print_r(  $event  );
                // echo "<hr />";

                echo "<div class = 'container' > <div class = 'row'> <div class= col-md-7>".


                  $event['name'] . " <br />" . "On ".

                  $event['date'] . " at ".   $event['time']  . " o'clock <br />".  "<br />".

                  $event['description'] . "<br />" . "<br />".

                  "price: " . $event['price']. "</div>
                    </div>
                    </div>";

                  $event =  mysqli_fetch_assoc( $allEvents   ); // ima VIS SEKANTI event is objekto
                }  "</div>
                  </div>
                  </div>"

            // ?>
