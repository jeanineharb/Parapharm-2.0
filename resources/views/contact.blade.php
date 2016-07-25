@extends('structure')

@section('content')


<section class="mbr-section mbr-after-navbar" id="form1-17" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">

	<div class="mbr-section mbr-section__container mbr-section__container--middle">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-xs-center">
					<h3 class="mbr-section-title display-2">CONTACT FORM</h3>
					<!-- 				<small class="mbr-section-subtitle">Shape your future web project with sharp design and refine coded functions.</small> -->
				</div>
			</div>
		</div>
	</div>
	<div class="mbr-section mbr-section-nopadding">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-10 col-lg-offset-1">

					<!-- <div data-form-alert="true">
						<div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">Thanks for filling out form!</div>
					</div> -->

					{{ Form:: open(array('action' => 'ContactController@getContactUsForm')) }} 

					<ul class="errors">
						@foreach($errors->all('<li>:message</li>') as $message)
						{{ $message }}
						@endforeach
					</ul>

					<div class="form-group">
						{{ Form::text('name', '', array('required', 'id' => 'name', 'class' => 'form-control', 'placeholder' => 'Your name')) }}
					</div>

					<div class="form-group">
						{{ Form::text('email', '', array('required', 'id' => 'email', 'class' => 'form-control', 'placeholder'=>'Your e-mail address')) }}
					</div>

					<div class="form-group">
						{{ Form:: textarea ('message', '', array('placeholder' => 'Your message', 'class' => 'form-control', 'id' => 'message', 'rows' => '4' )) }}
					</div>

					<div class="modal-footer">
						{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
						{{ Form:: close() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mbr-section mbr-section-md-padding mbr-parallax-background" id="social-buttons2-16" style="background-image: url(assets/images/parapharm-2000x1537-3.jpg); padding-top: 90px; padding-bottom: 90px;">

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-xs-center">
				<h3 class="mbr-section-title display-2">FOLLOW US</h3>
				<div><a class="btn btn-social" title="Twitter" target="_blank" href="https://twitter.com/mobirise"><i class="socicon socicon-twitter"></i></a> <a class="btn btn-social" title="Facebook" target="_blank" href="https://www.facebook.com/pages/Mobirise/1616226671953247"><i class="socicon socicon-facebook"></i></a> <a class="btn btn-social" title="Google+" target="_blank" href="https://plus.google.com/u/0/+Mobirise/posts"><i class="socicon socicon-google"></i></a> <a class="btn btn-social" title="YouTube" target="_blank" href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw"><i class="socicon socicon-youtube"></i></a> <a class="btn btn-social" title="Instagram" target="_blank" href="https://instagram.com/mobirise/"><i class="socicon socicon-instagram"></i></a> <a class="btn btn-social" title="Pinterest" target="_blank" href="https://www.pinterest.com/mobirise/"><i class="socicon socicon-pinterest"></i></a>  <a class="btn btn-social" title="LinkedIn" target="_blank" href="https://www.linkedin.com/in/mobirise"><i class="socicon socicon-linkedin"></i></a>   </div>
			</div>
		</div>
	</div>
</section>

<section class="mbr-section mbr-section__container mbr-section__container--isolated" id="map2-15">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="mbr-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJtcaxrqlZwokRfwmmibzPsTU" allowfullscreen=""></iframe></div>
			</div>
		</div>
	</div>
</section>

@endsection