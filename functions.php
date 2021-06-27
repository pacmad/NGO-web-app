<?php
    function printHeaderAndMakeTabActive($activeTab){
        $tabs = array(
            'home' => 'Home',
            'projects' => 'Projects',
            'action' => 'Take Action',
            'about' => 'About Us',
            'partners' => 'Partners'
        );
echo <<<END
              <!DOCTYPE html>
              <html lang="en">
                  <head>
                      <meta charset="utf-8">
                      <meta name="viewport" content="width=device-width, initial scale=1">
                      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                      <script src="https://kit.fontawesome.com/d67d2fd17d.js" crossorigin="anonymous"></script>
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                      <link rel="stylesheet" href="style.css">
                      <title>Zahra Foundation</title>
                  </head>
                  <body>
                      <nav class="navbar navbar-inverse navbar-fixed-top">
                          <div class="container-fluid">
                              <div class="navbar-header">
                                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" id="ChangeToggle">
                                  <div id="navbar-hamburger">
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                  </div>
                                  <div id="navbar-close" class="hidden">
                                      <i class="fas fa-times"></i>
                                  </div>
                                  </button>
                                  <a href="/"><img class="pull-left" src="imgs/testlogo.png" > </a>
                                  <!--<element class="navbar-brand" href="#">Zahra</element>-->
                                  <a href="/donate">
                                    <button class="btn btn-danger navbar-btn pull-right" id="donate-btn" name="donate-btn">
                                      <b>Donate</b><span class="glyphicon glyphicon-heart-empty" id="donate-icon"></span>
                                    </button>
                                  </a>
                              </div>
                              <!--<ul class="nav navbar-nav navbar-right">
                                      
                                      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                              </ul>-->
                              <div class="collapse navbar-collapse" id="myNavbar">
                                  <ul class="nav navbar-nav">
END;

                              foreach($tabs as $tab => $title){
                                  if($tab == $activeTab){
                                    echo <<<END
                                        <li class="active"><a href="/$tab">$title</a></li>
END;
                                  }
                                  else{
                                    echo <<<END
                                        <li><a href="/$tab">$title</a></li>
END;
                                  }                                  
                              }
/*
                                  <li class="active"><a href="#">Home</a></li>
                                  <li><a href="#">Projects</a></li>
                                  <li><a href="#">Take Action</a></li>
                                  <li><a href="#">About Us</a></li>
                                  <li><a href="#">Partners</a></li>
*/
echo <<<END
                                  <li style="color:#ffffff !important;">
                                      <a href="https://m.facebook.com/pizfana"><i class="fa fa-facebook"></i></a>
                                  </li>
                                  <!--<li style="color:#ffffff !important;">
                                      <a href=""><i class="fa fa-twitter"></i></a>
                                  </li>
                                  <li style="color:#ffffff !important;">
                                      <a href=""><i class="fa fa-instagram"></i></a>
                                  </li>-->                     
                              </ul>
                          </div>
                      </div>
                  </nav>
                  <iframe src="silence.mp3" allow="autoplay" id="audio"></iframe>
                  <audio id="player" autoplay controls loop><source src="healtheworld.mp3" type="audio/mp3"></audio>
END;
    }
    
    function print_footer(){
        echo <<<END
            <footer id="footer">
                <div class="row">
                    <div class="col-sm-3">
                        <address>
                            <b><h4>REGISTERED OFFICE</h4></b><br/>
                            24 Ogbuide Road, Oguta<br/>Imo State<br/>Nigeria<br/>
                            <element><i class="fas fa-envelope">&nbsp;</i>
                                <a href="mailto:foundationafrican@gmail.com">foundationafrican@gmail.com</a>
                            </element><br/>
                            <element><i class="fas fa-phone">&nbsp;</i><a href="tel:+2348035303010">+234 803 530 3010</a></element><br/>
                            <element><i class="fas fa-phone">&nbsp;</i><a href="tel:+2348038866452">+234 803 886 6452</a></element><br/>
                            <element><i class="fa fa-whatsapp"></i><a href="tel:+2348035303010">+234 803 530 3010</a></element><br/>
                            <element><i class="fa fa-whatsapp"></i><a href="tel:+2348038866452">+234 803 886 6452</a></element>
                        </address>
                        <br/>
                    </div>
                    <div class="col-sm-3">
                        <b><h4>USEFUL LINKS</h4></b><br/>
                        <a href="projects">Projects</a><br/>
                        <a href="action">Take Action</a><br/>
                        <a href="about">About Us</a><br/>
                        <a href="partners">Partners</a><br/>
                        <a href="">Privacy Policy</a><br/><br/>
                        <br/>
                    </div>
                    <div class="col-sm-6">
                        <b><h4>Signup for our newsletter</h4></b><br/>
                        <form id="newsletterform" name="newsletterform" method="post" style="color: #000;">
                            <input type="text" id="fname" name="fname" placeholder="First Name" style="width: 30%;">
                            <input type="text" id="lname" name="lname" placeholder="Last Name" style="width: 30%;"></br>
                            <small style="display: inline-block; color: #f00; width: 30%; visibility:hidden;">*First name</small>
                            <small style="color: #f00; visibility:hidden;">*First name</small>
                            </span>
                            </br>
                            <input type="email" id="email" name="email" placeholder="Email"><br/></br>
                            <small style="color: #fff;">We’ll keep your personal details safe and you can unsubscribe at any time.<br/>For full details see our Privacy Policy.</small>
                            <br/><br/>
                            <input type="button" id="subscribe" name="subscribe" class="btn btn-small btn-success" value="Subscribe">
                            <!--<button id="subscribe" name="subscribe" class="btn btn-small btn-success" value="Subscribe">
                                Subscribe to new
                            </button>-->
                            <small id="newslettersubscriptionsuccess"><b></b></small>
                            <small id="newslettersubscriptionfail"><b></b></small>
                        </form>                
                    </div>
                </div>
                <hr>
                <div id="bottom">
                    <a href="https://m.facebook.com/pizfana"><i class="fa fa-facebook fa-2x"></i></a><br/><br/>
                    <b> &copy; 2020. Zahra Foundation is a registered Nigerian NGO. Registration number: CAC/IT/N0 131320 </b>
                </div>
            </footer>
END;
        echo <<<'END'
            <script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();
        
                    $(function() {
                        $('#ChangeToggle').click(function() {
                        $('#navbar-hamburger').toggleClass('hidden');
                        $('#navbar-close').toggleClass('hidden');  
                        });
                    });
        
                    $(function() {
                        $(".cash-btn").on('click', function(event){
                            event.preventDefault();
                            event.stopPropagation();
                            event.stopImmediatePropagation();
                            $('#amount').val( $(this).data('quantity') );
                            $("#total").val( $("#amount").val() );
                        });
                    });
        
                    $(function() {
                        $("#amount").on('input', function(e){
                            e.preventDefault();
                            e.stopPropagation();
                            e.stopImmediatePropagation();
                            $("#total").prop("disabled", false);
                            //$("#total").removeAttr("disabled");
                            $("#total").val( $("#amount").val() );
                            $("#total").prop("disabled", true);
                        });
                    });
                    
                    //newsletter subscription
                    $(function() {
                        $("#subscribe").on('click', function(e){
                            e.preventDefault();
                            e.stopPropagation();
                            e.stopImmediatePropagation();
                            //alert("here");
                            $("#subscribe").prop("disabled", true);
                            //$("#subscribe").attr("disabled", "disabled");
                            var fname = $("#fname").val();
                            var lname = $("#lname").val();
                            var email = $("#email").val();
                            $.ajax({
                                url:"newsletteroperations.php",
                                method:"POST",
                                data:{fname,lname,email},
                                success:function(data){
                                    //alert(data);
                                    if(data == 1){
                                        $("#newslettersubscriptionsuccess").html("Subscription successful");
                                    }
                                    if(data == 0){
                                        $("#newslettersubscriptionfail").html("Subscription unsuccesful, please try again");
                                    }
                                    $("#subscribe").prop("disabled", false);
                                }
                            });
                        });
                    });
        
                    //send message/inquiry
                    $(function() {
                        $("#messagebtn").on('click', function(e){
                            e.preventDefault();
                            e.stopPropagation();
                            e.stopImmediatePropagation();
                            //alert("here");
                            $("#messagebtn").prop("disabled", true);
                            var fname = $("#fname").val();
                            var email = $("#email").val();
                            var inquiry = $("#inquiry").val();
                            $.ajax({
                                url:"messageoperations.php",
                                method:"POST",
                                data:{fname,email,inquiry},
                                success:function(data){
                                    //alert(data);
                                    if(data == 1){
                                        $("#messagesuccess").html("Thank you for sending us a message, we will contact you");
                                    }
                                    if(data == 0){
                                        $("#messagefail").html("Your message couldn\'t be sent, please try later");
                                    }
                                    $("#messagebtn").prop("disabled", false);
                                }
                            });
                        });
                    });
                    
                    //Prevent clicking on tooltip from scrolling to top of page
                    $(function() {
                        $(".donate-tooltip").on('click', function(e){
                            e.preventDefault();
                        });
                    });
                });
            </script>
</body>
</html>';
END;
    }
    
    function test_db_connection(){
        $servername = "localhost";
        $username = "flocand_patejios";
        $password = "+Xb61+f=G4YI";
        $db_name = "flocand_zaa";
    
        try {
          $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //echo "Connected successfully";
          return $conn;
        } catch(PDOException $e) {
          //echo "Connection failed: " . $e->getMessage();
          return 0;
        }
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>