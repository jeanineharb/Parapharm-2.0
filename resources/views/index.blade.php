@extends('structure')

@section('content')

<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow mbr-after-navbar" id="header1-1" style='background-image: url("{{ asset('images/parapharm.jpg') }}")'>

    <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(255, 255, 255);"></div>

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">
                <div style="background-color: #ffffff; opacity: 0.7; padding: 15px;">
                    <h1 class="mbr-section-title display-1" style="color: black;">PARAPHARM SAL</h1>
                    <p class="mbr-section-lead lead" style="margin: 0;">Exclusive agents and distributors for dermatological and pharmaceutical products.<br> <br>Having amassed more than three decades of expertise so far, we are known for providing the Lebanese market with the best brands in dermatology and skincare innovations, and for giving our partners a tailor-made coverage and representation in Lebanon.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#features3-2"><i class="mbr-arrow-icon"></i></a></div>

</section>

<section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-2">
    <div class="mbr-cards-row row">
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 120px; padding-bottom: 120px;">
                <div class="container">
                  <div class="card cart-block">
                      <div class="card-img"><img src="{{ URL::asset('images/noreva/noreva-logo.png') }}" class="card-img-top"></div>
                      <div class="card-block">
                          <h4 class="card-title">Laboratoires NOREVA<br></h4>
                          <p class="card-text"> Introduced to Lebanon in 1993 by Parapharm SAL, Laboratoires NOREVA is a pioneer in the fields of skincare and dermocosmetics with its major innovative molecule AHA.</p>
                          <div class="card-btn"><a href="{{ url('/products/noreva') }}" class="btn btn-primary">MORE</a></div>
                      </div>
                  </div>
                </div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 120px; padding-bottom: 120px;">
              <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><img src="{{ URL::asset('images/contapharm/contapharm-logo.png') }}" class="card-img-top"></div>
                    <div class="card-block">
                        <h4 class="card-title">Laboratoires CONTAPHARM</h4>
                        <p class="card-text">Laboratoires CONTAPHARM develops parapharmaceutical products especially designed for contact lens wearers and for people with sensitive eyes and skin.</p>
                        <div class="card-btn"><a href="{{ url('/products/contapharm') }}" class="btn btn-primary">MORE</a></div>
                    </div>
                </div>
              </div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 120px; padding-bottom: 120px;">
              <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><img src="{{ URL::asset('images/beautymed/beautymed-logo.png') }}" class="card-img-top"></div>
                    <div class="card-block">
                        <h4 class="card-title">BeautyMed</h4>
                        <p class="card-text"> Newly introduced and distributed on the Lebanese market by Parapharm SAL, BeautyMed is a professional, innovative and high-tech line of products, formulated with the safest European standards. </p>
                        <div class="card-btn"><a href="{{ url('/products/beautymed') }}" class="btn btn-primary">MORE</a></div>
                    </div>
                </div>
              </div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 120px; padding-bottom: 120px;">
              <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><img src="{{ URL::asset('images/onagrine/onagrine-logo.png') }}" class="card-img-top"></div>
                    <div class="card-block">
                        <h4 class="card-title">Onagrine</h4>
                        <p class="card-text">Mobirise gives you the freedom to develop as many websites as you like given the fact that it is a desktop app.</p>
                        <div class="card-btn"><a href="{{ url('/products/onagrine') }}" class="btn btn-primary">MORE</a></div>
                    </div>
                </div>
              </div>
            </div>
    </div>
</section>

@endsection
