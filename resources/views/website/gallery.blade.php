@extends("layouts.web-head")
    @section("content")
    <?php $web_name = "Glorious Empire Hotels"; ?>

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('website/img/header_bg.jpg')}}')}}" data-natural-width="1400" data-natural-height="470">
		<div class="parallax-content-1">
			<div class="animated fadeInDown">
				<h1>Our Gallery</h1>
				<p> {{$web_name}} Rooms And Events Gallery.</p>
			</div>
		</div>
	</section>
	<main>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="#">Home</a>
					</li>
					<li><a href="#">Category</a>
					</li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- End Position -->

		<div class="container margin_60">
			<div class="main_title">
				<h2>Some <span>images</span> from travellers</h2>
				<p>
					Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
				</p>
			</div>
			<hr>

			<div id="gallery" class="final-tiles-gallery  effect-dezoom effect-fade-out caption-top social-icons-right">
		        <div class="ftg-filters">
					<a href="#ftg-set-ftgall">All</a>
					<a href="#ftg-set-rome">Rome</a>
					<a href="#ftg-set-milan">Milan</a>
					<a href="#ftg-set-florence">Florence</a>
				</div>
			    <div class="ftg-items">
			        <div class="tile ftg-set-rome">
			            <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="{{asset('website/img/gallery_grid/grid_1.jpg')}}">
			                <img class="item" src="{{asset('website/img/gallery_grid/grid_1.jpg')}}')}}" data-src="{{asset('website/img/gallery_grid/grid_1.jpg')}}" alt="Image">
                            <span class='title'>Lorem ipsum</span>
                			<span class='subtitle'>Pellentesque ornare ornare</span>
			            </a>
                        <div class="ftg-social">
                            <a href="#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-social="google-plus"><i class="fa fa-google"></i></a>
                            <a href="#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>
			        </div><!-- End image -->
                    
			        <div class="tile ftg-set-milan">
			            <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="{{asset('website/img/gallery_grid/grid_2.jpg')}}">
			                <img class="item" src="{{asset('website/img/gallery_grid/grid_2.jpg')}}" data-src="{{asset('website/img/gallery_grid/grid_2.jpg')}}" alt="Image">
			            <span class='title'>Lorem ipsum</span>
                			<span class='subtitle'>Pellentesque ornare ornare</span>
			            </a>
                        <div class="ftg-social">
                            <a href="#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-social="google-plus"><i class="fa fa-google"></i></a>
                            <a href="#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>
			        </div><!-- End image -->
                    
			        <div class="tile ftg-set-rome ftg-set-milan">
			            <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="{{asset('website/img/gallery_grid/grid_3.jpg')}}">
			                <img class="item" src="{{asset('website/img/gallery_grid/grid_3.jpg')}}" data-src="{{asset('website/img/gallery_grid/grid_3.jpg')}}" alt="Image">
			            <span class='title'>Lorem ipsum</span>
                			<span class='subtitle'>Pellentesque ornare ornare</span>
			            </a>
                        <div class="ftg-social">
                            <a href="#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-social="google-plus"><i class="fa fa-google"></i></a>
                            <a href="#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>
			        </div><!-- End image -->
                    
			        <div class="tile ftg-set-florence">
			            <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="{{asset('website/img/gallery_grid/grid_4.jpg')}}">
			                <img class="item" src="{{asset('website/img/gallery_grid/grid_4.jpg')}}" data-src="{{asset('website/img/gallery_grid/grid_4.jpg')}}" alt="Image">
			            <span class='title'>Lorem ipsum</span>
                			<span class='subtitle'>Pellentesque ornare ornare</span>
			            </a>
                        <div class="ftg-social">
                            <a href="#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-social="google-plus"><i class="fa fa-google"></i></a>
                            <a href="#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>
			        </div><!-- End image -->
                    
			        <div class="tile ftg-set-florence">
			            <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="{{asset('website/img/gallery_grid/grid_5.jpg')}}">
			                <img class="item" src="{{asset('website/img/gallery_grid/grid_5.jpg')}}" data-src="{{asset('website/img/gallery_grid/grid_5.jpg')}}" alt="Image">
			            <span class='title'>Lorem ipsum</span>
                			<span class='subtitle'>Pellentesque ornare ornare</span>
			            </a>
                        <div class="ftg-social">
                            <a href="#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-social="google-plus"><i class="fa fa-google"></i></a>
                            <a href="#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>
			        </div><!-- End image -->
                    
			        <div class="tile ftg-set-rome ftg-set-florence">
			            <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="{{asset('website/img/gallery_grid/grid_6.jpg')}}">
			                <img class="item" src="{{asset('website/img/gallery_grid/grid_6.jpg')}}" data-src="{{asset('website/img/gallery_grid/grid_6.jpg')}}" alt="Image">
			            <span class='title'>Lorem ipsum</span>
                			<span class='subtitle'>Pellentesque ornare ornare</span>
			            </a>
                        <div class="ftg-social">
                            <a href="#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-social="google-plus"><i class="fa fa-google"></i></a>
                            <a href="#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>
			        </div><!-- End image -->
                    
			        <div class="tile ftg-set-florence">
			            <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="{{asset('website/img/gallery_grid/grid_7.jpg')}}">
			                <img class="item" src="{{asset('website/img/gallery_grid/grid_7.jpg')}}" data-src="{{asset('website/img/gallery_grid/grid_7.jpg')}}" alt="Image">
			            <span class='title'>Lorem ipsum</span>
                			<span class='subtitle'>Pellentesque ornare ornare</span>
			            </a>
                        <div class="ftg-social">
                            <a href="#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-social="google-plus"><i class="fa fa-google"></i></a>
                            <a href="#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>
			        </div><!-- End image -->
                    
			        <div class="tile ftg-set-rome">
			            <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="{{asset('website/img/gallery_grid/grid_8.jpg')}}">
			                <img class="item" src="{{asset('website/img/gallery_grid/grid_8.jpg')}}" data-src="{{asset('website/img/gallery_grid/grid_8.jpg')}}" alt="Image">
			            <span class='title'>Lorem ipsum</span>
                			<span class='subtitle'>Pellentesque ornare ornare</span>
			            </a>
                        <div class="ftg-social">
                            <a href="#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-social="google-plus"><i class="fa fa-google"></i></a>
                            <a href="#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>
			        </div><!-- End image -->
                    
			        <div class="tile ftg-set-rome">
			            <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="{{asset('website/img/gallery_grid/grid_9.jpg')}}">
			                <img class="item" src="{{asset('website/img/gallery_grid/grid_9.jpg')}}" data-src="{{asset('website/img/gallery_grid/grid_9.jpg')}}" alt="Image">
			            <span class='title'>Lorem ipsum</span>
                			<span class='subtitle'>Pellentesque ornare ornare</span>
			            </a>
                        <div class="ftg-social">
                            <a href="#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-social="google-plus"><i class="fa fa-google"></i></a>
                            <a href="#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>
			        </div><!-- End image -->
                    
			        <div class="tile ftg-set-milan">
			            <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="{{asset('website/img/gallery_grid/grid_1.jpg')}}">
			                <img class="item" src="{{asset('website/img/gallery_grid/grid_1.jpg')}}" data-src="{{asset('website/img/gallery_grid/grid_1.jpg')}}" alt="Image">
			           <span class='title'>Lorem ipsum</span>
                			<span class='subtitle'>Pellentesque ornare ornare</span>
			            </a>
                        <div class="ftg-social">
                            <a href="#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-social="google-plus"><i class="fa fa-google"></i></a>
                            <a href="#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>
			        </div><!-- End image -->
                    
					<div class="tile ftg-set-rome ftg-set-florence">
			            <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="{{asset('website/img/gallery_grid/grid_1.jpg')}}">
			                <img class="item" src="{{asset('website/img/gallery_grid/grid_1.jpg')}}" data-src="{{asset('website/img/gallery_grid/grid_1.jpg')}}" alt="Image">
			            <span class='title'>Lorem ipsum</span>
                			<span class='subtitle'>Pellentesque ornare ornare</span>
			            </a>
                        <div class="ftg-social">
                            <a href="#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-social="google-plus"><i class="fa fa-google"></i></a>
                            <a href="#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>
			        </div><!-- End image -->
                    
			        <div class="tile ftg-set-florence">
			            <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="{{asset('website/img/gallery_grid/grid_1.jpg')}}">
			                <img class="item" src="{{asset('website/img/gallery_grid/grid_1.jpg')}}" data-src="{{asset('website/img/gallery_grid/grid_1.jpg')}}" alt="Image">
			            <span class='title'>Lorem ipsum</span>
                			<span class='subtitle'>Pellentesque ornare ornare</span>
			            </a>
                        <div class="ftg-social">
                            <a href="#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-social="google-plus"><i class="fa fa-google"></i></a>
                            <a href="#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>
			        </div><!-- End image -->
                    
			    </div>

			</div>
		</div>
		<!-- End container -->
	</main>


@endsection