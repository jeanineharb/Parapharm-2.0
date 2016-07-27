@extends('structure')

@section('content')

<section class="mbr-section mbr-after-navbar" id="msg-box5-32" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">
              <div class="mbr-table-cell mbr-right-padding-md-up col-md-5 text-xs-center text-md-right">
                  <h3 class="mbr-section-title display-2">ABOUT US</h3>
                  <div class="lead">
                    <p>Parapharm SAL's headquarters in Hazmieh.</p>
                  </div>
              </div>

              <div class="mbr-table-cell mbr-valign-top col-md-7">
                  <div class="mbr-figure"><img src="{{ URL::asset('images/parapharm/parapharm1.jpg') }}"></div>
              </div>

            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section__container mbr-section__container--isolated" id="content2-30" style="padding-top: 60px; padding-bottom: 60px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead"><blockquote>Parapharm SAL is a Lebanese parapharmaceutical SME of 20 employees. It was founded in 1979 by Paul Harfouche, actual CEO and chairman of the company. <br>
			In the early 90's, Mr Harfouche's children joined him and expanded the company's activities to include more brands, which led to the creation of the distribution and marketing departments.<br>
			Today, Parapharm SAL imports and distributes pharmaceutical, dermatological and skincare products exclusively in Lebanon and the Middle-East.</blockquote></div>
        </div>
    </div>
</section>

<section class="mbr-cards mbr-section mbr-section-nopadding mbr-parallax-background" id="features4-31" style='background-image: url("{{ asset('images/parapharm.jpg') }}")'>

    <div class="mbr-cards-row row">
            <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 40px; padding-bottom: 40px;">
                <div class="container">
                  <div class="card cart-block">
                      <div class="card-img iconbox"><span class="etl-icon icon-heart mbr-iconfont mbr-iconfont-features4"></span>
                      </div>
                      <div class="card-block"> 
                          <h4 class="card-title">Core Values</h4>
                          <p class="card-text">
                          	At Parapharm SAL, we put a lot of effort into committing to our business relationships, internal and external, which guarantees us both customer and employee satisfaction.
							Our partnership with famous laboratories strengthened our knowledge and resources in parapharmaceutical products, and has enabled us to provide the market with high quality products, while maintaining a professional service.</p>
                      </div>
                  	</div>
            	</div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 40px; padding-bottom: 40px;">
              <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><span class="etl-icon icon-happy mbr-iconfont mbr-iconfont-features4"></span></div>
                    <div class="card-block">
                        <h4 class="card-title">Teamwork</h4>
                        <p class="card-text">
                        Our medical team is composed of highly skilled professionals dedicated to their jobs, who are always available to the requests and needs of our clients.
						Our administrative team ensures the contact between our suppliers and resellers. 
						Our distribution team covers the entire Lebanese territory and visits all pharmacies. 
						Our beauty counselors organize regularly skincare demonstrations and promotions in selected pharmacies.</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 40px; padding-bottom: 40px;">
              <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><span class="etl-icon icon-briefcase mbr-iconfont mbr-iconfont-features4"></span></div>
                    <div class="card-block">
                        <h4 class="card-title">We Visit</h4>
                        <p class="card-text">
                        Dermatologists <br>
						Paediatricians  <br>
						Obstetricians and Gynaecologists  <br>
						Beauticians  <br>
						Pharmacies  <br>
						Medical Wholesellers  <br>
						Hospitals  <br>
						Skincare Clinics  <br>
						Plastic Surgeons  <br>
						Laser Centers...</p>
                        
                    </div>
                </div>
              </div>
            </div>
            
    </div>
</section>

@endsection