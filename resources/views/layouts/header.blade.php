<header>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
						<a class="navbar-brand" href="/lar/blog/public"><span>M</span>oderna</a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav" id="mainmenu">
							<li><a href="{{ url('/') }}">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
								<ul class="dropdown-menu">
									<li><a href="{{ url('/typography') }}">Typography</a></li>
									<li><a href="{{ url('/components') }}">Components</a></li>
									<li><a href="{{ url('/pricingbox') }}">Pricing box</a></li>
								</ul>
							</li>
							<li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
							<li><a href="{{ url('/blog') }}">Blog</a></li>
							<li><a href="{{ url('/contact') }}">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>