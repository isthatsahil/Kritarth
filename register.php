<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kritarth| Register</title>
    <link rel="shortcut icon" type="image/ico" href="kritarth.ico"/>
    <!-- F O N T     I C O N S  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!--  G O O G L E    F O N T S  -->
     <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <!-- B O O T S T R A P     C S S   -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
       <script src='https://www.google.com/recaptcha/api.js'></script>

     <!--   L  O C A L     C S S     -->
<link rel="stylesheet" href="css\register.css">
 <link rel="stylesheet" href="css\indexer.css">
<style media="screen">
.loaders {
    background: #000;
    background: radial-gradient(#222, #000);
    bottom: 0;
    left: 0;
    overflow: hidden;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 99999;
}

.loaders-inner {
    bottom: 0;
    height: 60px;
    left: 0;
    margin: auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 100px;
}

.loaders-line-wrap {
    animation:
    spin 2000ms cubic-bezier(.175, .885, .32, 1.275) infinite
  ;
    box-sizing: border-box;
    height: 50px;
    left: 0;
    overflow: hidden;
    position: absolute;
    top: 0;
    transform-origin: 50% 100%;
    width: 100px;
}
.loaders-line {
    border: 4px solid transparent;
    border-radius: 100%;
    box-sizing: border-box;
    height: 100px;
    left: 0;
    margin: 0 auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 100px;
}
.loaders-line-wrap:nth-child(1) { animation-delay: -50ms; }
.loaders-line-wrap:nth-child(2) { animation-delay: -100ms; }
.loaders-line-wrap:nth-child(3) { animation-delay: -150ms; }
.loaders-line-wrap:nth-child(4) { animation-delay: -200ms; }
.loaders-line-wrap:nth-child(5) { animation-delay: -250ms; }

.loaders-line-wrap:nth-child(1) .loaders-line {
    border-color: hsl(0, 80%, 60%);
    height: 90px;
    width: 90px;
    top: 7px;
}
.loaders-line-wrap:nth-child(2) .loaders-line {
    border-color: hsl(60, 80%, 60%);
    height: 76px;
    width: 76px;
    top: 14px;
}
.loaders-line-wrap:nth-child(3) .loaders-line {
    border-color: hsl(120, 80%, 60%);
    height: 62px;
    width: 62px;
    top: 21px;
}
.loaders-line-wrap:nth-child(4) .loaders-line {
    border-color: hsl(180, 80%, 60%);
    height: 48px;
    width: 48px;
    top: 28px;
}
.loaders-line-wrap:nth-child(5) .loaders-line {
    border-color: hsl(240, 80%, 60%);
    height: 34px;
    width: 34px;
    top: 35px;
}

@keyframes spin {
    0%, 15% {
    transform: rotate(0);
  }
  100% {
    transform: rotate(360deg);
  }
}

</style>
</head>
 </head>
 <body>
   <!--  P R E L O A D E R   -->
   <div class="loaders" id="loaders-box">
   <div class="loaders-inner">
     <div class="loaders-line-wrap">
       <div class="loaders-line"></div>
     </div>
     <div class="loaders-line-wrap">
       <div class="loaders-line"></div>
     </div>
     <div class="loaders-line-wrap">
       <div class="loaders-line"></div>
     </div>
     <div class="loaders-line-wrap">
       <div class="loaders-line"></div>
     </div>
     <div class="loaders-line-wrap">
       <div class="loader-line"></div>
     </div>
   </div>
   </div>

<header>
   <!--  NAVBAR -->
   <nav class="navbar navbar-expand-lg fixed-top  navbar-dark " id="nav">
      <div class="container">
        <a href="index.html" class="navbar-brand">
          <img src="img\kritarth white.png" alt="" width="180" height="60">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-collapse"><span class=" navbar-toggler-icon"></span></button>

     <div class="collapse navbar-collapse nav-col " id="nav-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.html" class="nav-link text-white ml-2"><i class="fas fa-home mr-1"></i>Home</a>
          </li>
          <li class="nav-item">
            <a href="#sub-section" class="nav-link text-white ml-2"><i class="fas fa-bullseye  mr-1"></i>Register</a>
          </li>



        </ul>
          </div>
          </div>
    </nav>
    </header>


  <!-- Go to Top Button -->

    <a href="#" id="c-go-top" class="c-go-top">
        <i class="fa fa-arrow-up fa-fw"></i>
      </a>

<!--  OVERLAY AREA -->
     <section id="reg-head">
       <div class="overlay">
         <div class="container inner-content">
           <div class="row">
               <div class="col-md-12">
                 <div class="title">
                   <div class="loader" id="loader"></div>


                 </div>
               </div>
           </div>
         </div>
       </div>
     </section>


     <section id="contact" class="py-3 ">
   <div class="container">
     <div class="row">
       <div class="col-lg-12">
         <div class="form-header my-4">
           <h1 class="display-3 text-center" style="  font-family: 'Dosis', sans-serif">Register Here</h1>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-4">
         <div class="card p-4" id="offline">
           <div class="card-body">
             <h4>Get In Touch</h4>
             <p>For any queries and offline registration</p>
             <h4>Address</h4>
             <p>KIIT Student Activity Center</p>
             <h4>Email</h4>
             <p>kritarth@gmail.com</p>
             <h4>Phone</h4>
             <p>+91-7024711773</p>
           </div>
         </div>
       </div>
       <div class="col-md-8">
         <form class="" action="index.html" method="post">


         <div class="card p-4" id="reg-on">
           <div class="card-body">
             <h3 class="text-center">Please fill out this form to register.</h3>
             <hr>
             <div class="row">
               <div class="col-md-12">
                 <div class="form-group">
                   <input type="text" class="form-control" placeholder="Full Name" name="fulltName">
                 </div>
                 </div>

               <div class="col-md-6">
                 <div class="form-group">
                   <input type="email" class="form-control" placeholder="Email" name="email">
                 </div>
             </div>
             <div class="col-md-6">
               <div class="form-group">
                 <input type="text" class="form-control" placeholder="Phone Number" name="phoneNumber">
               </div>
           </div>
           </div>
           <div class="form-row">
             <div class="col-md-12 form-group">

               <label for="qualification">Qualification</label>
                 <select class="form-control" id="qualification" name="qualification">
                     <option>Select One</option>
                     <option>KIIT</option>
                     <option>School student</option>
                     <option>Corporate</option>
                     <option>Others</option>
                </select>


             </div>
             <div class="col-lg-12 form-group">
               <input type="text" class="form-control " style="display:none"  placeholder="Roll No."  id="roll" name="rollNumber">
             </div>
             <div class="col-lg-12 form-group">
               <input type="text" class="form-control " style="display:none;margin-top:-20px;margin-bottom:30px"  placeholder="School Name"  id="school" name="schoolName">
             </div>
             <div class="col-lg-12 form-group">
               <input type="text" class="form-control " style="display:none;margin-top:-30px;margin-bottom:50px"  placeholder="Institution Name"  id="corporate" name="corporateName">
             </div>

           </div>
           <div class="form-row" style="margin-top:-20px">
             <div class="col-md-12 form-group">
                 <div id="college" style="display:none;margin-top:-30px;margin-bottom:50px">
               <label for="college">College</label>
                 <select class="form-control" id="myOptions"  name="institution">
                    <option>Select one</option>

                     <option>Institute of Management And Information Science</option>
                      <option>Silicon Institute of Technology</option>
                       <option>Trident Academy of Technology</option>
                       <option>Amity College of Engineering</option>
                        <option>Arya School of Management & Information Technology</option>
                         <option>C. V. Raman College of Engineering</option>
                          <option>Institute of Management And Advance Global Excellence </option>
                           <option>Indian Institute of Science & Information Technology</option>
                            <option>Xavier Institute of Management </option>
                             <option>ITER SOA Unsiversity</option>
                              <option >Others</option>

                 </select>
                 </div>
             </div>
             <div class="col form-group" >
               <input type="text" class="form-control " style="display:none;margin-top:-50px;margin-bottom:50px"  placeholder="College Name"  id="others" name="otherInstitution">
             </div>
           </div>
           <div class="form-row" style="margin-top:-60px">
             <div class="col-md-6 form-group">
               <label for="event1">Select Events</label>
                 <select class="form-control" id="event1" name="event1">
                    <option>Event One</option>
                     <option>Kautuhal</option>
                     <option>Rocket Singh</option>
                      <option>Klick It</option>
                       <option>Devil's Advocate</option>
                       <option>Kritarth's Got Talent</option>
                        <option>Kanvassing</option>
                         <option>Hooch High</option>
                          <option>Klimax</option>
                           <option>Ignite</option>
                       </select>
             </div>
             <div class="col-md-6 form-group">

                 <select class="form-control " id="event2" style="margin-top: 30px" name="event2">
                    <option>Event Two (Optional)</option>
                     <option>Kautuhal</option>
                     <option>Rocket Singh</option>
                      <option>Klick It</option>
                       <option>Devil's Advocate</option>
                       <option>Kritarth's Got Talent</option>
                        <option>Kanvassing</option>
                         <option>Hooch High</option>
                          <option>Klimax</option>
                           <option>Ignite</option>
                       </select>
             </div>

           </div>
           <div class="form-row">
             <div class="col-md-12 form-group ">
               <div class="g-recaptcha d-inline-block " style="margin-left:30%"   data-sitekey="6Lc7bWoUAAAAAGeSiUsGbH7b-o6PwsslEH4Tefgx"></div>
               <!-- SECRET KEY :6Lc7bWoUAAAAAHgW_e7jg7Se0OeuLQcMr9FtU0-Z  -->
               </div>
             <div class="col-md-12 form-group">
                  <input type="submit" value="Submit" class="btn btn-outline-danger btn-block" name="regButton">
             </div>
           </div>
         </div>
       </div>
       </form>
     </div>
   </div>
 </section>


 <section id="end-footer">

   <div id="footer-social">
     <a href="https://www.facebook.com/kritarth.kiit/" target="_blank" class="socio"><i class="fab fa-facebook-f"><span >Facebook</span></i></a>
     <a href="#" class="socio"><i class="fab fa-twitter"><span>Twitter</span></i></a>
     <a href="#" class="socio"><i class="fab fa-instagram"><span>Instagram</span></i></a>
    </div>

    <div class="foo-content">
      <p class="lead text-white text-center">Copyright &copy; KRITARTH</p>
    </div>
 </section>


 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>

<script src="js\main.js">

</script>
<script src="js\random.js" ></script>
  <script>
  //For smooth scrolling
  $('#nav a').on('click', function (e) {
      // Check for a hash value
      if (this.hash !== '') {
        // Prevent default behavior
        e.preventDefault();

        // Store hash
        const hash = this.hash;

        // Animate smooth scroll
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function () {
          // Add hash to URL after scroll
          window.location.hash = hash;
        });
      }
    });

    $('#qualification').change(function() {

     var x = $("#qualification option:selected").text();
     if(x=="KIIT"){
       console.log("hello");
       $('#roll').css("display","block");
       $('#roll').css("margin-bottom","0");

       $('#school').css("display","none");
          $('#corporate').css("display","none");
           $('#college').css("display","none");
             $('#others').css("display","none");
     }
     else if (x=="School student") {
       $('#school').css("display","block");
       $('#roll').css("display","none");

          $('#corporate').css("display","none");
           $('#college').css("display","none");
             $('#others').css("display","none");
     }
     else if (x=="Corporate") {
       $('#corporate').css("display","block");
       $('#roll').css("display","none");
       $('#school').css("display","none");

           $('#college').css("display","none");
             $('#others').css("display","none");
     }
     else if (x=="Others") {
       $('#college').css("display","block");
       $('#roll').css("display","none");
       $('#school').css("display","none");
          $('#corporate').css("display","none");
            $('#others').css("display","none");

     }
     else{
       console.log("bye");
       $('#roll').css("display","none");
       $('#school').css("display","none");
          $('#corporate').css("display","none");
           $('#college').css("display","none");
             $('#others').css("display","none");
     }
});
 $('#myOptions').change(function() {
   console.log("hello");
  var val = $("#myOptions option:selected").text();
  if(val=="Others"){
    $('#others').css("display","block");
  }
  else{
    $('#others').css("display","none");
  }
});



var overlay = document.getElementById("loaders-box");

window.addEventListener('load', function(){
  overlay.style.display = 'none';
})

$(document).ready(function() {
      // Transition effect for navbar
      $(window).scroll(function() {
        // checks if window is scrolled more than 500px, adds/removes solid class
        if($(this).scrollTop() > 20) {
            $('.navbar').addClass('solid');
        } else {
            $('.navbar').removeClass('solid');
        }
      });
});


  </script>
   </body>
 </html>
