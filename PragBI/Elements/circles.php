<!-- first part is the animated circles. When the screen get's too small, they will be replaced by a list of options -->

<!-- Code from tympanus.net/codrops -->
<div class="size blue" id="circle">
        <div class="container">
		<section>
			<!-- HTML code for creating the 3 circles below -->
            
            <!-- styling for the list -->
				<ul class="ch-grid">
                    
                    <!-- the a-tag makes the entire circle into a link once it has finished the animation -->
					<li><a href="Services.php" >
                        
                        <!-- placement of the circles-->
						<div class="ch-item">	
                            
                            <!-- animation-->
							<div class="ch-info-wrap ch-item">
                                
                                <!-- Inner content of the circles-->
								<div class="ch-info">
									<div style="background-color: #f3be33;">
                                        <br>
                                        <br>
                                        <h3 class="circle-title">Consultancy</h3></div>
									<div class="ch-info-back">
                                        <br>
										<p class="text">I have many years of experience in consulting</p>
									</div>	
								</div>
							</div>
						</div>
                    </a></li>
					<li><a href="Services.php">
						<div class="ch-item">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front" style="background-color: #94d05a;"><br>
                                    <br>
                                    <h3 class="circle-title">Development</h3></div>
									<div class="ch-info-back">
                                        <br>
                                        <p class="text">I have been in the industry for over 25 years.</p>
									</div>
								</div>
							</div>
						</div>
					</a></li>
					<li><a href="Services.php">
						<div class="ch-item">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front"  style="background-color: #a2bbcf;">
                                        <br>
                                        <br>
                                        <h3 class="circle-title">Teaching</h3></div>
									<div class="ch-info-back">
                                        <br>
                                        <br>
										<p class="text">I have a lot of teaching experience</p>
									</div>
								</div>
							</div>
						</div>
					</a></li>
				</ul>
				
			</section>
        </div>
</div>

<!-- second part is the alternative version, which appears when the size gets to an Ipad-size-->
<!-- most of the CSS in this is connected to the CSS of the Aboutdct file-->
<div class="size blue" id="circle-alternative">
    <!-- second div is to set the margin-->
    <div class="container">
        <!-- third div is to activate bootstrap grids-->
        <div class="row">
            
            <a href="Services.php" class="col-xs-6 col-md-4 col-lg-4">
                <h4 id="dct-consulting">Consulting</h4>
                    <p class="dct-content">I have many years of experience in consulting</p>
            </a>
            
            <a href="Services.php" class="col-xs-6 col-md-4 col-lg-4">
                <h4 id="dct-development">Development</h4>
                    <p class="dct-content">I have been in the industry for over 25 years.</p>
            </a>
            
            <a href="Services.php" class="col-xs-12 col-md-4 col-lg-4 random">
                <h4 id="dct-teaching">Teaching</h4>
                    <p class="dct-content">I have a lot of teaching experience</p>
            </a>
            
        </div> <!-- row-->
    </div> <!-- container-->
</div>