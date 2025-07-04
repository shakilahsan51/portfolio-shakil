@php
	$footerInformation = \App\Models\FooterInfo::first();
	$footerIcons = \App\Models\FooterSocialLink::all();
	$footerUsefullLink = \App\Models\FooterUsefullLink::all();
	$footerContactInfo = \App\Models\FooterContactInfo::first();
	$FooterHelpLink = \App\Models\FooterHelpLink::all();
@endphp

<footer class="footer-area">
	<div class="container">
		<div class="row footer-widgets">
			<div class="col-md-12 col-lg-3 widget">
				<div class="text-box">
					<figure class="footer-logo">
						<img src="images/logo.png" alt="">
					</figure>
					<p>{{ $footerInformation->info }}</p>
					<ul class="d-flex flex-wrap">
						@foreach ($footerIcons as $icons)							
							<li><a href="{{ $icons->url }}"><i class="{{ $icons->icon }}"></i></a></li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="col-md-4 col-lg-2 offset-lg-1 widget">
				<h3 class="widget-title">Useful Link</h3>
				<ul class="nav-menu">
					@foreach ($footerUsefullLink as $usefullLink)
						<li><a href="{{ $usefullLink->url }}">{{ $usefullLink->name }}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="col-md-4 col-lg-3 widget">
				<h3 class="widget-title">Contact Info</h3>
				<ul>
					<li>{{ $footerContactInfo->address }}</li>
					<li><a href="#">{{ $footerContactInfo->phone }}</a></li>
					<li><a href="#">{{ $footerContactInfo->email }}</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-lg-3 widget">
				<h3 class="widget-title">Help</h3>
				<ul class="nav-menu">
					@foreach ($FooterHelpLink as $helpLink)
						<li><a href="{{ $helpLink->url }}">{{ $helpLink->name }}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="copyright">
						<p>{{ $footerInformation->copy_right }}</p>
						<p>{{ $footerInformation->powered_by }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>