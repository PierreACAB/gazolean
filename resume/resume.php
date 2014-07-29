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
							<li><a href="#education">Education</a></li>
							<li><a href="#experience">Experience</a></li>
							<li><a href="#skills">Technical Skills</a></li>
							<li><a href="#langages">Langages</a></li>
                            <li><a href="#interests">Interests</a></li>
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
							<p><h3 >" ... "</h3>
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
                        <h2>Objectives</h2>
                        <p>Such a visit was, indeed, opportune. The clothing of both Mr. Fogg and Fix was in rags, as if they had themselves been actively engaged in the contest between Camerfield and Mandiboy. An hour after, they were once more suitably attired, and with Aouda returned to the International Hotel.
                            Passepartout was waiting for his master, armed with half a dozen six-barrelled revolvers. When he perceived Fix, he knit his brows; but Aouda having, in a few words, told him of their adventure, his countenance resumed its placid expression. Fix evidently was no longer an enemy, but an ally; he was faithfully keeping his word.</p>
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
                        <p>In an enterprising and voluntary nature, I am passionate about innovation, sciences and technologies. I love to solve old and recurrent problem with new and innovative solutions. I do believe in data and serendipity, I love to meet speak and discover peoples, problematics and horizons. To do so I've travelled a lot and find my inspirations on differences and discoveries. From my recent past of high level rugbymen I've conserved an energic and enthusiastic attitude.</p>
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
  <section id="expertise" class="home-section bg-gray">
      <div class="container">
          <div class="row">
              <div class="col-md-offset-2 col-md-8">
              <div class="section-heading">
                      <h2>Personnality</h2>

                      <div class="row">
                          <div class="col-xs-6">
                              <h5>Artistic</h5>
                              <div class="range">
                                  <input type="range" name="range" min="1" max="100" value="80" onchange="range.value=value">
                              </div>
                          </div>
                          <div class="col-xs-6">
                              <h5>Interpersonal</h5>
                              <div class="range range-primary">
                                  <input type="range" name="range" min="1" max="100" value="70" onchange="rangePrimary.value=value">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-xs-6">
                              <h5>Communication</h5>
                              <div class="range range-success">
                                  <input type="range" name="range" min="1" max="100" value="85" onchange="rangeSuccess.value=value">
                                  <!-- <output id="rangeSuccess">50</output> -->
                              </div>
                          </div>
                          <div class="col-xs-6">
                              <h5>Managerial</h5>
                              <div class="range range-info">
                                  <input type="range" name="range" min="1" max="100" value="80" onchange="rangeInfo.value=value">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-xs-6">
                              <h5>Curiosity</h5>
                              <div class="range range-warning">
                                  <input type="range" name="range" min="1" max="100" value="90" onchange="rangeWarning.value=value">
                              </div>
                          </div>
                          <div class="col-xs-6">
                              <h5>Mechanical</h5>
                              <div class="range range-danger">
                                  <input type="range" name="range" min="1" max="100" value="35" onchange="rangeDanger.value=value">
                              </div>
                          </div>
                          <div class="col-xs-6">
                              <h5>Science</h5>
                              <div class="range range-danger">
                                  <input type="range" name="range" min="1" max="100" value="55" onchange="rangeDanger.value=value">
                              </div>
                          </div>
                          <div class="col-xs-6">
                              <h5>Mathematics</h5>
                              <div class="range range-danger">
                                  <input type="range" name="range" min="1" max="100" value="60" onchange="rangeDanger.value=value">
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
							<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
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