<?php
// Start the session
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">

    <title>MathYogi</title><!-- Compiled and minified CSS -->
    <link href=
    "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css"
    rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300'
    rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel=
    "stylesheet">
    <link href="website/mystyle.css" rel="stylesheet" type="text/css">
    <link href=
    "https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"
    rel="stylesheet">
</head>

<body>
    <main>
        <!-- NAVBAR -->

        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <a class="brand-logo" href="#">MathYogi</a>

                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="#about">ABOUT</a>
                        </li>

                        <li>
                            <a href="#wwd">WHAT WE DO</a>
                        </li>

                        <li>
                            <a href="#app_div">DEMO</a>
                        </li>

                        <li>
			                      <a href="#contact">CONTACT</a>
                        </li>
			                  <li>
                            <a href="https://docs.google.com/forms/d/1FkoAknK6Pw5IReRqZGRPy36cI8Bou_AjzzTCTSM652I/viewform">INTERNSHIPS</a>
                        </li>
			                  <?php if($_SESSION["uid"]==""){?> 
                        <li> 
                            <a href="website/login.php">LOGIN</a>
                        </li>
                  			<?php } else { ?>
                  			<li >
                          <!-- Dropdown Trigger -->
                          <a class='dropdown-button' style="color: black" ref='#' data-activates='dropdown1'><?php echo ($_SESSION["username"]);?></a>
                          <!-- Dropdown Structure -->
                          <ul id='dropdown1' class='dropdown-content'>
                            <li> <a style="color: black"><?php echo ($_SESSION["username"]);?> </a> <li>
                            <li class="divider"></li>
                            <li><a href="website/logout.php"  style="color: red">logout</a></li>
                          </ul>

                  			</li>
                    <?php } ?>
                    </ul>

                    <ul class="right side-nav" id="slide-out" style=
                    "left: -250px;">
                        <li>
                            <a href="#about">ABOUT</a>
                        </li>

                        <li>
                            <a href="#wwd">WHAT WE DO</a>
                        </li>

                        <li>
                            <a href="#app_div">DEMO</a>
                        </li>
                        <li>
                            <a href="#contact">CONTACT</a>
                        </li>
			                  <li>
                            <a href="https://docs.google.com/forms/d/1FkoAknK6Pw5IReRqZGRPy36cI8Bou_AjzzTCTSM652I/viewform">INTERNSHIPS</a>
                        </li>
		                    <?php if($_SESSION["uid"]==""){?>
                        <li>
                            <a href="website/login.php">LOGIN</a>
                        </li>
                        <?php } else { ?>
                        <li >
                                <!-- Dropdown Trigger -->
                            <a class='dropdown-button' style="color: black" ref='#' data-activates='dropdown2'><?php echo ($_SESSION["username"]);?></a>

                            <!-- Dropdown Structure -->
                            <ul id='dropdown2' class='dropdown-content'>
                              <li> <a style="color: black"><?php echo ($_SESSION["username"]);?> </a> <li>
                              <li class="divider"></li>
                              <li><a href="website/logout.php"  style="color: red">logout</a></li>
                            </ul>

                        </li>
                    <?php } ?>
                       	

                    </ul><a class="button-collapse mdi-navigation-menu"
                    data-activates="slide-out" href="#" style=
                    "font-style: italic"></a>
                </div>
            </nav>
        </div>
        

        <div class="col s12">
            <div id="about_heading">
                <h4>MathYogi Mission</h4><br>

                <p>Our mission is to apply ‘computer animation’,
                ‘crowdsourcing’, and ‘big data’ to elevate math knowledge
                worldwide.</p>
                <br>
                <h6>Our Existing Apps (Whole Numbers) Try now!</h6>

                <br>
                <br>

                <div id="app_buttons">
                    <a class="waves-effect waves-light btn-large" href=
                    "/addition/">Addition</a>
                    <a class="waves-effect waves-light btn-large" href=
                    "/subtraction/">Subtraction</a>
                </div>
            </div>

        </div>

        <div class="col s12" id="whatDiv">
            <div class="scrollspy" id="wwd"><img src=
            "website/assets/what_we_do.svg"></div>
        </div>

        <div class="col s12">
            <div id="coming_div">
            <h4>MathYogi in one snap.</h4><img alt="" src=
            "website/assets/coming_soon.svg"></div>
        </div>

        <div class="col s12">
            <div class="section scrollspy" id="app_div">
                <h4>Our Existing Apps (Whole Numbers)</h4>

                <h6>Hot off the press! Try now.</h6><br>
                <br>
                <br>

                <div id="app_buttons">
                    <a class="waves-effect waves-light btn-large" href=
                    "/addition/">Addition</a>
                    <a class="waves-effect waves-light btn-large" href=
                    "/subtraction/">Subtraction</a>
                </div>
            </div>
        </div><!-- END CONTAINER -->
    </main>
    <div class="col s12">
            <div class="scrollspy" id="about"><img src=
            "website/assets/why_mathyogi.svg"></div>
        </div>

    <footer class="page-footer">
        <div class="container section scrollspy" id="contact">
            <div class="row">
                <div class="col l6 s12">
                    <form class="col s12" id="contactForm" method="post" name="contactForm">
                        <h5 class="white-text">Get in touch</h5>

                        <div class="row">
                            <div class="input-field col s6">
                                <i class=
                                "material-icons prefix white-text">person</i>
                                <input class="validate white-text" id="name"
                                name="name" type="text"> <label class=
                                "white-text" for="name"> <span class="required">*</span> Name</label>
                            </div>

                            <div class="input-field col s6">
                                <i class=
                                "material-icons prefix white-text">local_post_office</i>
                                <input class="validate white-text" id="email"
                                name="email" type="email"> <label class=
                                "white-text" for="email"> <span class="required">*</span> Email</label>
                            </div>

                            <div class="input-field col s12">
                                <i class=
                                "material-icons prefix white-text">mode_edit</i>
                                
                                <textarea class=
                                "materialize-textarea white-text" id="message"
                                name="message">
                                </textarea> <label class="white-text" for="message"> <span class="required">*</span>
                                Message</label>
                            </div>

                            <div class="col offset-s7 s5">
                                <button class="btn waves-effect waves-light"
                                name="action" type="submit">Submit <i class=
                                "material-icons right">send</i></button>
                            </div>
                        </div>
                    </form>
                    <div id="success">
                        <span>
                            <p>Your message was sent succssfully! I will be in touch as soon as I can.</p>
                        </span>
                    </div>

                    <div id="error">
                        <span>
                           <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </span>
                    </div>
                </div>


                <div class="col l4 offset-l2 s12" style="text-align:right;">
                    <h5 class="white-text">Stay Connected</h5>

                    <ul class="footer_text">
                        <li>858 Highland Drive</li>
                        <li>Las Vegas, NM</li>
                        <li>87701</li>
                    </ul>

                    <ul class="footer_text">
                        <li>
                            <a href=
                            "https://plus.google.com/105797980098620407370/posts">
                            Google Plus</a>
                        </li>
                        <li>
                            <a href=
                            "https://www.facebook.com/mathyogi">Facebook</a>
                        </li>
                    </ul>

                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                © 2015 MathYogi <a class="grey-text text-lighten-4 right" href=
                "#!">More Links</a>
            </div>
        </div>
    </footer>
    <!-- jQuery is required by Materialize to function. -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script> 

    <!-- Compiled and minified JavaScript -->
     <script src=
    "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script> 
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

    <!-- //custom JS code -->
    <script src="website/myscript.js" type="text/javascript"></script> 

    <script type="text/javascript">
         window.uid = <?php echo json_encode($_SESSION['uid']);?>;
         window.userEmail = <?php echo json_encode($_SESSION["email"]);?>;
         console.log(uid + '  ' + userEmail);
    </script>

</body>
</html>
