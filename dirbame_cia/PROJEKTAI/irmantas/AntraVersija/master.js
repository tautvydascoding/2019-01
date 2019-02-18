
$(document).ready(() => {

  $(".service-title").on("click", (event) => {
    $(event.currentTarget).parent().children(".service").slideToggle(500);
  });

  $(".service-title").on("mouseenter", (event) => {
    $(event.currentTarget).addClass("text-hover").on("mouseleave", () =>{
      $(event.currentTarget).removeClass("text-hover")
    });
  });

  // $("#sendMessage").on("click", (event) => {sendMessage();});
});

$(function () {
  setNavigation();
});
function setNavigation() {
  let path = window.location.pathname;
  path = decodeURIComponent(path);

  $(".nav a").each(function () {
    let href = $(this).attr('href');
    let pageRef = path.substring(path.length-href.length, path.length);
    if(pageRef === href){
      $(this).closest('li').addClass("active-nav");
    }
  })
}

// let nameMessage = document.getElementById("nameMessage").value;
// let emailMessage = document.getElementById("emailMessage").value;
// let telMessage = document.getElementById("telMessage").value;
// let messageMessage = document.getElementById("messageMessage").value;
// console.log(nameMessage);


function sendMessage() {
  let nameMessage = document.getElementById("nameMessage").value;
  let emailMessage = document.getElementById("emailMessage").value;
  let telMessage = document.getElementById("telMessage").value;
  let messageMessage = document.getElementById("messageMessage").value;

 $.post("send-message.php", {
           nameMessage: nameMessage,
           emailMessage: emailMessage,
           telMessage: telMessage,
           messageMessage : messageMessage,
         },
       function(data){
         // alert("Žinutė išsiūsta");
       });

  // let request = $.ajax({
  //   url: "send-message.php",
  //   type: "POST",
  //   data: {
  //           nameMessage: nameMessage,
  //           emailMessage: emailMessage,
  //           telMessage: telMessage,
  //           messageMessage : messageMessage,
  //         },
  //   success : function(output)
  //       {
  //         alert("Žinutė išsiūsta");
  //       },
  //   error : function(output)
  //       {
  //         alert("Žinutės nepavyko išsiūsti");
  //       }
  //     });
}



// function sendMessage() {
//   let nameMessage = document.getElementById("nameMessage").value;
//   let emailMessage = document.getElementById("emailMessage").value;
//   let telMessage = document.getElementById("telMessage").value;
//   let messageMessage = document.getElementById("messageMessage").value;
//
//   $.post("send-message.php",{postNameMessage: nameMessage,
//                              postEmailMessage: emailMessage,
//                              postTelMessage: telMessage,
//                              postMessageMessage: postMessageMessage,
//                            });
// }























//
