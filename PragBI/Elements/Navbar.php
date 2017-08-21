<body>
    <!-- Company logo placement -->
    <a href="Index.php"><img src="Elements/pragbilogo.png" style="max-height: 130px;" id="pragbinavlogo"></a>
    
    <!-- Navigation bar start -->
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle are grouped for better mobile display -->
            <div class="navbar-header">
                
                <!-- collapse-button-->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#pragbi-nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                <!-- navbar brand is an image of the logo text, as the proper font was not available to us. The image has proper alt-tags to make up for the inconvenience -->
                  <a class="navbar-brand" href="Index.php"><img src="Elements/pragbititle.png" alt="Pragmatic BI" style="max-height: 40px;" id="pragbinavimg"></a>
            </div>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="pragbi-nav">
                <ul class="nav navbar-nav navbar-right">
                    <li class="prag-nav-link"
                        <?php if($pagenumber=="1") { ?>  style="font-weight: 700; text-decoration: underline;"   <?php   }  ?>>
                            <a href="Index.php">Home</a></li>
                    <li class="prag-nav-link" 
                        <?php if($pagenumber=="2") { ?>  style="font-weight: 700; text-decoration: underline;"   <?php   }  ?>>
                        <a href="Services.php">Services</a></li>
                    <li class="prag-nav-link"
                        <?php if($pagenumber=="3") { ?>  style="font-weight: 700; text-decoration: underline;"   <?php   }  ?>
                        ><a href="References.php">References</a></li>
                    <li class="prag-nav-link"
                       <?php if($pagenumber=="4") { ?>  style="font-weight: 700; text-decoration: underline;"   <?php   }  ?>>
                        <a href="About.php">About me</a></li>
                    <li class="prag-nav-link"
                       <?php if($pagenumber=="5") { ?>  style="font-weight: 700; text-decoration: underline;"   <?php   }  ?>>
                        <a href="contact.php">Contact</a></li>
                    <li class="prag-nav-link"
                        <?php if($pagenumber=="6") { ?>  style="font-weight: 700; text-decoration: underline;"   <?php   }  ?>>
                        <a href="blog.php">Blog</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    
  