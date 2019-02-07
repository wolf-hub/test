@extends('layouts/_layout')
@section('content')
		<section id="content">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h4>Get in touch with us by filling <strong>contact form below</strong></h4>

						
						<form  method="post" class="contactForm" id="contactform">
							{{ csrf_field() }}
							<div id="sendmessage">
						        Your message is sent!
						    </div>
						    <div id="senderror">
						        Error. Ask in admin <span>{{ env('MAIL_ADMIN_EMAIL') }}</span>
						    </div>
							<div class="form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
								<div class="validation"></div>
							</div>

							<div class="text-center"><button type="submit" class="btn btn-theme">Send Message</button></div>
						</form>
					</div>
				</div>
			</div>
		</section>
@stop