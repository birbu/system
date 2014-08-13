	<section id="contact" class="padding-bottom bg-light">
		
			<div class="container">
			
				<div class="section-header scrollimation fade-up">
				
					<div class="section-icon"><i class="fa fa-envelope"></i></div>
				
					<h1 class="section-title">Contact</h1>
					
					<p class="section-description lead">Are you ready to start your project? We are here for you.<br/> Visit us, write to us or call us</p>
					
				</div><!--End section-header -->
				
				<div class="row">
				
					<!--=== Contact Form ===-->

					<form id="contact-form" class="col-sm-6 scrollimation fade-right" action="contact.php" method="post" novalidate>
						
						<h3 class="primary">Drop us a line</h3>
						
						<div class="form-group">
						  <label class="control-label" for="contact-name">Name</label>
						  <div class="controls">
							<input id="contact-name" name="contactName" placeholder="Your name" class="form-control input-lg requiredField" type="text" data-error-empty="Please enter your name">
							<i class="fa fa-user"></i>
						  </div>
						</div><!-- End name input -->
						
						<div class="form-group">
						  <label class="control-label" for="contact-mail">Email</label>
						  <div class=" controls">
							<input id="contact-mail" name="email" placeholder="Your email" class="form-control input-lg requiredField" type="email" data-error-empty="Please enter your email" data-error-invalid="Invalid email address">
							<i class="fa fa-envelope"></i>
						  </div>
						</div><!-- End email input -->
						
						<div class="form-group">
						  <label class="control-label" for="contact-message">Message</label>
							<div class="controls">
								<textarea id="contact-message" name="comments"  placeholder="Your message" class="form-control input-lg requiredField" rows="6" data-error-empty="Please enter your message"></textarea>
								<i class="fa fa-comment"></i>
							</div>
						</div><!-- End textarea -->
						
						<p><button name="submit" type="submit" class="btn btn-theme btn-block" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Message Sent"><i class="fa fa-location-arrow"></i>Send Message</button></p>
						<input type="hidden" name="submitted" id="submitted" value="true" />
						
					</form><!-- End contact-form -->
				
					<div class="col-sm-5 col-sm-offset-1 contact-info">
						
						<div class="scrollimation scale-in">
						<h3 class="primary">Find Us</h3>
							<ul class="address">
								<li><span><i class="fa fa-map-marker fa-fw"></i></span>W325 State Road 123<br>
								Mondovi, WI(Wisconsin) 98746-54321</li>
								<li><span><i class="fa fa-phone fa-fw"></i></span>(123) 456 - 7890</li>
								<li><span><i class="fa fa-print fa-fw"></i></span>(123) 456 - 7890</li>
								<li><span><i class="fa fa-envelope fa-fw"></i></span><a href="mailto:mail@example.com">mail@example.com</a></li>
							</ul>
						</div>
						
						<div class="scrollimation scale-in">
							<h3 class="primary">Business Hours</h3>
							<ul class="hours">
								<li><span>Mon - Fri : </span>9am - 5pm</li>
								<li><span>Saturday : </span>9am - 2pm</li>
								<li><span>Sunday : </span> - </li>
							</ul>
						</div>
						
						<div class="map scrollimation scale-in">
							<img class="img-responsive" src="assets/map.png" alt=""/>
							<a class="spot" style="top:38%; left:26.5%;" data-toggle="tooltip" title="Find Us on Google Maps" href="https://maps.google.com/maps?saddr=40.720201,-74.00568&amp;hl=en&amp;sll=40.679597,-73.968887&amp;sspn=0.141898,0.338173&amp;mra=mift&amp;mrsp=0&amp;sz=12&amp;t=m&amp;z=12" target="_blank"><span></span></a>
						</div>
						
					</div><!-- End contact-info -->
				  
				</div><!-- End row -->
				
			</div><!-- End container -->
			
		</section>