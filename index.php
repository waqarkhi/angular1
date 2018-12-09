<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Web Designer and Programmer | Wixe Arie </title>
  <link rel="icon" type="image/png" href="images/fav.png" sizes="32x32">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Waqar Ahmed">
  <meta name="description" content="Waqar Ahmed a web developer User Interface developer, web developer, wordpress developer and web Designer located in Pakistan working with web since 2013.">
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>


  <!-- fonts -->
  <link href='https://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script>
  document.createElement('video');
</script>
<![endif]-->

<link href='https://fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



</head>

<body ng-app="wixe">

  <div class="wrapper">
    <div class="main-wrapper">
      <header class="menu">

        <div ng-include="'temp/introduction.html'"></div>

        <div class="navbar">
          <div class="menu-toggle">
            <button id="menu">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
          <ul class="nav nav-pills nav-stacked" id="menuList">
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT ME</a></li>
            <li><a href="#service">SERVICES</a></li>
            <li><a href="#portfolio">PORTFOLIO</a></li>
            <li><a href="#pack">PACKAGES</a></li>
            <li><a href="#contact">CONTACT ME</a></li>

          </ul>  <div class="clear"></div>
          <br>
          <br>
        </div> <!-- navbar -->
      </header>
      <i id="home"></i>

      <section ng-include="'temp/banner.html'"></section>

      <div class="clear"></div>
      <div class="control">
        <section ng-include="'temp/about.html'" data-aos="fade-right"></section>
        <section ng-include="'temp/services.html'" data-aos="fade-left"></section>
        <section ng-include="'temp/portfolio.html'" data-aos="fade-right"></section>
        <section ng-include="'temp/pack.html'" data-aos="fade-left"></section>
        <section>
         <div class="avail" id="contact">
          <div class="feature" data-aos="fade-left">
            <h2>GET IN TOUCH</h2>
            <h4>For Web Design and Development Services</h4>
            <hr>
          </div>
          <div class="row">
            <div class="col-md-offset-3 col-md-6">
              <form action="admin/save.php" method="post" id="form-submit" name="form-submit">
                <input class="form-control" type="text" name="name" placeholder="Full Name" required=""><br>
                <input class="form-control" type="text" name="phone" placeholder="Contact No." required pattern="\d{11}"><br>
                <input type="email" class="form-control" name="email" placeholder="E-mail Address" required=""><br>
                <textarea class="form-control" name="message" rows="5" placeholder="Type to compose message..."></textarea><br>
                <input class="btn btn-success" name="submit" type="submit" value="Submit">
                <div class="clearfix"></div>
                <div class="alert alert-success" style="display: none;"><i class="glyphicon glyphicon-ok"></i> Thank you for the Email I will be with you shortly.</div>
                <div class="alert alert-danger" style="display: none;"><i class="glyphicon glyphicon-remove"></i> Sorry, Somthing goes wrong try again later.</div>
              </form>    
            </div>
          </div>
        </div><!--avail-->
        <script type="text/javascript">

          $(document).ready(function () {


           $('#form-submit').submit(function(e) {

             var form = $(this);
             $.ajax({
              type: form.attr('method'),
              url: form.attr('action'),
              data: form.serialize(),
              success: function () {
                $('#form-submit .alert-success').fadeIn(500).delay(7000).slideUp();
              },
              error: function () {
                $('#form-submit .alert-danger').fadeIn(500).delay(7000).slideUp();
              },
            });
       e.preventDefault(); // Prevent the form from submitting via the browser
     });

         });

       </script>
     </section>
     <footer ng-include="'temp/footer.html'"></footer>
   </div> <!--control-->
 </div> <!-- main-wrapper -->
</div> <!-- wrapper -->
<a href="#home" class="alt2">
  <i class="fa fa-arrow-up"></i>
</a>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
          <form action="admin/save-quote.php" method="post" id="quote-submit" name="form-submit">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span id="q"></span></h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <input class="form-control input-lg" type="text" name="name" placeholder="Full Name *" required=""> <br>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control input-lg" name="email" placeholder="E-mail Address *" required=""> <br>
            </div>
            <div class="col-md-6">
              <input class="form-control input-lg" type="text" required pattern="\d{11}" name="contact" placeholder="Phone *"> <br>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control input-lg" name="site" placeholder="Current Website"> <br>
            </div>
            <div class="col-md-12">
              <input type="text" class="form-control input-lg" name="like_site" placeholder="Website you want like"> <br>
              <input type="hidden" name="package">
            </div>
            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="5" placeholder="Type to compose message..."></textarea>
            </div>
          </div>
                <div class="clearfix"></div>
        </div>
        <div class="modal-footer">
          <div class="alert alert-success text-left pull-left" style="display: none;"><i class="glyphicon glyphicon-ok"></i> Thank you for the Email I will be with you shortly.</div>
          <div class="alert alert-danger text-left pull-left" style="display: none;"><i class="glyphicon glyphicon-remove"></i> Sorry, Somthing goes wrong try again later.</div>
           <input class="btn btn-theme pull-right btn-lg" name="submit" type="submit" value="Submit">
        </div>
              </form>
              <script type="text/javascript">
   
          $(document).ready(function () {
           $('#quote-submit').submit(function(e) {
             var form = $(this);
             $.ajax({
              type: form.attr('method'),
              url: form.attr('action'),
              data: form.serialize(),
              success: function () {
                $('#quote-submit .alert-success').fadeIn(500).delay(5000).slideUp();
              },
              error: function () {
                $('#quote-submit .alert-danger').fadeIn(500).delay(5000).slideUp();
              },
            });
       e.preventDefault(); // Prevent the form from submitting via the browser
     });

         });

       </script>
      </div>
      
    </div>
  </div>


<script type="text/javascript" src="js/mixitup.min.js"></script>
<script type="text/javascript" src="js/info.js"></script>
<script type="text/javascript" src="js/wixe.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<!-- Start of Tawk to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/599447791b1bed47ceb04eff/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
</script>
<!--End of Tawk.to Script-->




</body>
</html>