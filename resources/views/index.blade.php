
<html lang="en"><head>
<meta http-equiv="#Live" content="text/html; charset=UTF-8"><style>

.content {
  margin-bottom: 20px
}


.content .overlay {
    background-image: linear-gradient(transparent, black);
    padding: 20px;
    color: #fff;
    padding-top: 200px;
    text-align: center
}


.content .overlay a {
    background: #545554;
    padding: 10px 16px;
    border-radius: 28px;
    display: inline-block;
    margin-top: 20px


}
</style>












<title>Omni Inc</title>
<meta charset="UTF-8">
                                                              <link rel="stylesheet" href="https://omnii.info/Omni/omni.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
.bgimg {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url({{ asset('public/loogo.jpeg') }});
  min-height: 100%;
}
</style>
</head><body>

<!-- Sidebar with image -->
<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
  <div class="bgimg"></div>
</nav>

<!-- Hidden Sidebar (reveals when clicked on menu icon)-->
<nav class="w3-sidebar w3-black w3-animate-right w3-xxlarge" style="display: none; padding-top: 150px; right: 0px; z-index: 2; width: 60%;" id="mySidebar">
  <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright" style="padding:0 12px;">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="#" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Home</a>
    <a href="#about" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">About</a>
    <a href="#contact" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Contact</a>
    <a href="login" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Login</a>
  </div>
</nav>

<!-- Page Content -->
<div class="w3-main w3-padding-large" style="margin-left:40%">

  <!-- Menu icon to open sidebar -->
  <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

  <!-- Header -->
  <header class="w3-container w3-center" style="padding:128px 16px" id="home">
    <h1 class="w3-jumbo"><b>Omni Inc</b></h1>
    <img src="loogo.jpeg" class="w3-image w3-hide-large w3-hide-small w3-round" style="display:block;width:60%;margin:auto;">
      </header>

  <!-- Portfolio Section -->
  <div class="w3-padding-32 w3-content" id="Subscriptions">
    <h2 class="w3-text-grey"></h2>
    <hr class="w3-opacity">

    <!-- Grid for photos -->
    <link href="https://omnii.info/omni_files/style.css" rel="stylesheet">


    <!-- End photo grid -->
            <!-- End Portfolio Section -->
  </div>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
    <hr class="w3-opacity">

    <p class="w3-wide">web </p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:{{ $count->web }}%">{{ $count->web }}%</div>
    </div>
    <p class="w3-wide">ios </p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:{{ $count->ios }}%">{{ $count->ios }}%</div>
    </div>
    <p class="w3-wide">android </p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:{{ $count->android }}%">{{ $count->android }}%</div>
    </div><br>

    <div class="w3-row w3-center w3-dark-grey w3-padding-16 w3-section">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">{{ $count->live }}+</span><br>
        Live
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">{{ $count->projects }}+</span><br>
        Projects Done
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">{{ $count->clients }}+</span><br>
        Happy Clients
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">{{ $count->meetings }}+</span><br>
        Meetings
      </div>
    </div>

    <!-- Testimonials -->

    
    <!-- Grid for pricing tables -->

<!-- End Grid/Pricing tables -->
<!-- End About Section -->
<!-- Contact Section -->
  <div class="w3-padding-32 w3-content w3-text-grey" id="contact" style="margin-bottom:64px">
    <h2>Contact Us</h2>
    <hr class="w3-opacity">

    <div class="w3-section">
     
      <div class="contact">
        <div class="alert">Your message has been sent</div>
        <form id="contactForm">
          <p>
            <label>Frist Name</label>
            <input type="text" name="name" id="frist" required="">
          </p>
          <p>
            <label>Last Name</label>
            <input type="text" name="company" id="last">
          </p>
          <p>
            <label>Email Address</label>
            <input type="email" name="email" id="address" required="">
          </p>
          <p>
            <label>Phone Number</label>
            <input type="text" name="phone" id="number">
          </p>
          <p class="full">
            <label>Message</label>
            <textarea name="message" rows="5" id="message"></textarea>
          </p>
          <p class="full">
           @csrf
            <button type="button">Submit</button>
          </p>
        </form>
      </div>
    </div>
  </div>
  

    







  
    
  
  <!-- Footer -->
  <img src="{{ asset('public/footer.jpeg') }}" alt="OMNI INC" class="w3-left w3-circle w3-margin-right" style="width:47px">
  <p>Licensed © 2021</p>Omni Inc Email: info@omnii.info<br>
  <!-- End footer -->
  </footer>
  
<!-- END PAGE CONTENT -->


<script>
// Open and close sidebar
function openNav() {
  document.getElementById("mySidebar").style.width = "60%";
  document.getElementById("mySidebar").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>



</body></html>


</body>
</html>

</body>
</html>
    <script src="{{ asset('public/dashbord-style/js/jquery-3.3.1.min.js') }}"></script>

<script>
    $(document).ready(function () {
        $("button").click(function () {
            var frist = $("#frist").val();
            var last = $("#last").val();
            var address = $("#address").val();
            var phone = $("#phone").val();
            var message = $("#message").val();
            var token = $('input[name=_token]').val();
            $.ajax({
            url:"{{ route('send.email') }}",
            method:"get",
            data:{frist:frist, last:last, address:address, phone:phone, message:message, token:token},
            success:function(data) {
              $(".alert").css("display", "block")
             }
          });
        });
    });
</script>