<?php
include("straipsnis.php");
?>
<div>
    <?php
        echo ($vardas . ' '. $pavarde);
      
    ?>
</div>
<div class = "container">

<main>

<article>

    <h2>
        <?php  echo  ($straipnis[0]); ?>
    </h2>
    <p> 
        <?php  echo  ($straipnis[1]); ?>
    </p>
    <div> 
        <?php  echo  ($straipnis[2]); ?>
    </div>

</article>

</main>

</div>