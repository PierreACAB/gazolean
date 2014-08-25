<!DOCTYPE html>
<html>
  <head>
    <title>Resume</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/style.css" rel="stylesheet" media="screen">
	<link href="../color/default.css" rel="stylesheet" media="screen">
	<script src="js/modernizr.custom.js"></script>
      </head>
  <body>

  <!-- /dl-menuwrapper -->
	<div class="menu-area">
			<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
                            <li><a href="http:\\www.gazolean.com">Home</a></li>
							<li><a href="#profile">Profile</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#timeline">Resume</a></li>
							<li><a href="#expertise">Expertise</a></li>
							<li><a href="#personalite">Personality</a></li>
							<li><a href="#contact">Contact</a></li>

                            <!-- Liste peu utile pour le CV
							<li>
								<a href="index.html">Personas</a>
								<ul class="dl-submenu">
									<li><a href="steeve.html">Steeve</a></li>
								</ul>
							</li>
							-->
							
						</ul>
					</div>
	</div>	

	  <!-- bio area -->	  
	  <div id="profile" class="home-section bg-light">
	  
			<div class="intro-text">
				<div class="container">
					<div class="row">
					
						
					<div class="col-md-12">
			
						<div class="brand">
							<img src="img/avatar/pierrelafon.jpg" alt="Pierre Lafon" width="128" height="128" class="img-circle">
							<h1><a href="../index.html">Pierre Lafon</a></h1>
							<div class="line-spacer"></div>
							<p><span>Quebec, Canada</span></p>
							</p>
							<div class="line-spacer"></div>
							<p><h3 >" French Connection Product Manager "</h3>
							<div class="line-spacer"></div>
							<p><span>27 <i class="fa fa-heart"></i></span><p>
							<p><span>5 <i class="fa fa-shield"></i></span><p>
						</div>
					</div>
					</div>
				</div>
		 	</div>
			
	 </div>

    <!-- Objectifs -->
    <section id="education" class="home-section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading">
                        <h2>Visions</h2>
                        <p> 3 years as the PM in a startup and my current experience as UX designer in
                            Wolters Kluwer taught me how to be very innovative in an agile and chaotic environement as well as it taught me how
                            implementing and executing structure and processes that are critical for achieving scalable and usable MVP.</br>
                            </br>
                            These past experiences helped me to define my vision of a great PM and the kind of PM that I tend to be. It is for me a capital job because
                            it is managing the team’s
                            most important resource: <b>TIME</b>. The great product manager need to know how to <b>innovate through minimalism</b>, carve down the scope of the
                            product until it makes sense for the users. It must also <p>build respect</b> without formal authority from engineers and engineering managers
                            to influence the development calendar by <b>staying focus on the product and users</b>. He needs to be able to remember that it is not because
                            you can that you should. The PM has also great communication skills by <b>knowing how to say ‘‘No’’</b> to most of users feature request while
                            keeping them happy and excited about the products. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- A propos -->
    <section id="about" class="home-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading">
                        <h2>About</h2>
                        <p>Serendipity-driven, I've jumped into the digital world with passion. My major goal is to diffuse worldwide disruptive solutions to old problems.
                            I enjoyed designing product will create cognitive dissonance and target proximal development zone. I'm an project-alchemist
                            who knows the precise balance of management, initiatives and bravery needed to create a successful potion of entrepreneurship. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Timeline -->
    <section id="timeline" class="home-section bg-gray">
        <div class="container">
            <div class="row">
                <div class="section-heading">
                    <h2>Experience & Formation</h2>

                <?php include('timeline/timeline.php'); ?>
            </div>
        </div>
    </section>

	  <!-- Domaine d'expertise -->
    <section id="expertise" class="home-section bg-light">
        <div class="container">
            <div class="row">
                <div class="section-heading">
                <h2>Expertise</h2>
                <?php include('expertise/expert.php'); ?>
            </div>
        </div>
    </section>


  <!-- Personality -->
  <section id="personalite" class="home-section bg-gray">
      <div class="container">
          <div class="row">
              <div class="col-md-offset-2 col-md-8">
              <div class="section-heading">
                      <h2>Personnality</h2>
                      <div class="row">
                          <div class="col-xs-6">
                              <h5>Artistic</h5>
                              <div class="range">
                                  <input type="range" name="range" disabled min="1" max="100" value="80">
                              </div>
                          </div>
                          <div class="col-xs-6">
                              <h5>Interpersonal</h5>
                              <div class="range range-primary">
                                  <input type="range" name="range" disabled min="1" max="100" value="70">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-xs-6">
                              <h5>Communication</h5>
                              <div class="range range-success">
                                  <input type="range" name="range" disabled min="1" max="100" value="85">
                                  <!-- <output id="rangeSuccess">50</output> -->
                              </div>
                          </div>
                          <div class="col-xs-6">
                              <h5>Managerial</h5>
                              <div class="range range-info">
                                  <input type="range" name="range" disabled min="1" max="100" value="80">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-xs-6">
                              <h5>Curiosity</h5>
                              <div class="range range-warning">
                                  <input type="range" name="range" disabled min="1" max="100" value="90">
                              </div>
                          </div>
                          <div class="col-xs-6">
                              <h5>Mechanical</h5>
                              <div class="range range-danger">
                                  <input type="range" name="range" disabled min="1" max="100" value="35">
                              </div>
                          </div>
                          <div class="col-xs-6">
                              <h5>Science</h5>
                              <div class="range range-danger">
                                  <input type="range" name="range" disabled min="1" max="100" value="55">
                              </div>
                          </div>
                          <div class="col-xs-6">
                              <h5>Mathematics</h5>
                              <div class="range range-danger">
                                  <input type="range" name="range" disabled min="1" max="100" value="60">
                              </div>
                          </div>
                      </div>

                  </div>
                      </div>
                  </div>

              </div>
  </section>

	 <!-- Contact -->
	  <section id="contact" class="home-section bg-light">
	  	<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Me Contacter</h2>
					</div>
				  </div>
			  </div>

	  		<div class="row">
	  			<div class="col-md-offset-1 col-md-10">

				<form class="form-horizontal" role="form">
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="text" class="form-control" id="inputName" placeholder="Name">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					 <button type="button" class="btn btn-theme btn-lg btn-block">Send message</button>
					</div>
				  </div>
				</form>
	  			</div>
	  		</div>

				<div class="col-md-offset-2 col-md-8">
					<h5>I'm also on social networks</h5>
					<ul class="social-network">
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-github fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
					</ul>
				</div>
				
			</div>
	</section>



	<footer>
		<div class="container ">
			<div class="row">
				<div class="col-md-12">
					<small>Copyright &copy; Pierre Lafon. <br>All rights reserved.</small>
				</div>
			</div>		
		</div>	
	</footer>
	 
	 <!-- js -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>

</html>