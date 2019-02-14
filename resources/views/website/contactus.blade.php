@extends("layouts.web-head")
    @section("content")
    <?php $web_name = "Glorious Empire Hotels"; ?>

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('website/img/header_bg.jpg')}}" data-natural-width="1400" data-natural-height="470">
		<div class="parallax-content-1">
			<div class="animated fadeInDown">
				<h1>Contact Us</h1>
				<p>Contact {{$web_name}}.</p>
			</div>
		</div>
	</section>
	<main>
		Contact Us
	</main>


@endsection