// jquery   ajax

// articles:
// https://stackoverflow.com/questions/9436534/ajax-tutorial-for-post-and-get
// http://api.jquery.com/jQuery.ajax/
// https://codepen.io/btholt/pen/FArdh

// HTML
// <div class='#results'> Nieko negrizo </div>

// JavaScript
$.ajax({
  url: "test.php",
  type: "POST",
  data: {name: "John", location: "Boston"},
  async: false,
  success: function(gryzo){
    // console.log(gryzo);
    gryzoApdorotas = JSON.stringify(data);
    // console.log(gryzoApdorotas);
     $("#results").append(gryzoApdorotas);
  },

  error: function(e) {
       //called when there is an error
       //console.log(e.message);
       $("#results").append( "Request failed: " + e );
 }
});

// This code will append the content of test.php file to #results element
// You can find more information at jQuery website.
// Update:
// Use this code to send POST data and output result.
-----------------------------------------------------
PHP - GET NUMBER FACEBOOK FANS & TWITTER FOLLOWERS
-----------------------------------------------------
< ?php
//get data passed to script
$username = htmlspecialchars(strip_tags($_POST["name"]));

//get facebook likes
// $fuser = json_decode(file_get_contents('http://graph.facebook.com/140918675956744/'));

//return result
echo "vardas: " . $username  ;
?>
