<footer id="footer">
    <div class="container">
        <div class="row footer-size">
            
            <div class="col-xs-12 col-md-4 col-lg-4">
                <h3 class="footer-title" style="color: transparent;">Sitemap</h3>
                <ul class="footer-content" id="footer-1">
                   <li class="prag-nav-link"
                        <?php if($pagenumber=="1") { ?>  style="font-weight: 700; text-decoration: underline;"   <?php   }  ?>
                        ><a href="Index.php">Home</a></li>
                    <li class="prag-nav-link" 
                        <?php if($pagenumber=="2") { ?>  style="font-weight: 700; text-decoration: underline;"   <?php   }  ?>
                        ><a href="Services.php">Services</a></li>
                    <li class="prag-nav-link"
                        <?php if($pagenumber=="3") { ?>  style="font-weight: 700; text-decoration: underline;"   <?php   }  ?>
                        ><a href="References.php">References</a></li>
                    <li class="prag-nav-link"
                        <?php if($pagenumber=="4") { ?>  style="font-weight: 700; text-decoration: underline;"   <?php   }  ?>
                        ><a href="About.php">About me</a></li>
                    <li class="prag-nav-link"
                        <?php if($pagenumber=="5") { ?>  style="font-weight: 700; text-decoration: underline;"   <?php   }  ?>
                        ><a href="contact.php">Contact</a></li>
                    <li class="prag-nav-link"
                        <?php if($pagenumber=="6") { ?>  style="font-weight: 700; text-decoration: underline;"   <?php   }  ?>
                        ><a href="blog.php">Blog</a></li>
                </ul>
            </div>

            <div class="col-xs-12 col-md-4 col-lg-4 footer-contact">
                <h3 class="footer-title">Contact me</h3>
          
                <article id="footer-contact-1">
                    <p><!-- following href refers you directly to your email - improving UX -->
                        <a class="textlink link1" href="mailto:steen@pragbi.dk">steen@pragbi.dk</a></p>
                    <p>+45 42 606 202</p>
                    <p>CVR: 36974133</p>
                </article>
                <article id="footer-contact-2">
                    <p>Pragmatic BI ApS</p>
                    <p>Aahusene 4, -9. -3</p>
                    <p>8000 Aarhus C</p>
                    <p>Denmark</p>
                </article>
            </div>

             <div class="col-xs-12 col-md-4 col-lg-4 test">
                <ul id="footer-3">
                    <br> <!-- the target="_blank" makes the link open in a new tab rather than in the same -->
                    <li><a href="https://twitter.com/dybboe?lang=da" target="_blank"><img src="Elements/img/twitter.png" alt="Twitter social media icon" style="max-width: 60px; max-height: auto; margin: 5%;"></a></li>
                    <li><a href="https://dk.linkedin.com/in/dybboe" target="_blank"><img src="Elements/img/linkedin.png" alt="LinkedIn social media icon" style="max-width: 60px;"></a></li>
                </ul>
            </div>
        </div> <!-- row-->
                <br>
            <br>
            <p class="col-xs-12 col-md-12 col-lg-12" id="footer-copy">&copy; Steen Dybboe</p>
    </div> <!-- container-->
</footer>
<!--SCRIPTS-->         
<!--- Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    
<!-- js code-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>