@extends('structure')

@section('content')

<section class="mbr-section mbr-section__container mbr-after-navbar mbr-section__container--isolated" id="header3-19" style="padding-top: 120px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">Laboratoires CONTAPHARM</h3>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section" id="msg-box5-32" style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">
              <div class="mbr-table-cell mbr-right-padding-md-up col-md-9 text-xs-center text-md-right">
                  <div class="lead">
                    <p>Founded in France more than 30 years ago, Laboratoires CONTAPHARM develops parapharmaceutical products especially designed for contact lens wearers and for people with sensitive eyes and skin. <br> <br> 
                    The laboratory's products, EYE CARE Cosmetics and PHARMASOUPLES lens cleaner, were introduced to the Lebanese market by Parapharm SAL in 2002. <br> <br> 
                    Laboratoires CONTAPHARM is certified "Good Manufacturing Practices" in the fields of skincare and make-up. </p>  
                  </div>
              </div>

              <div class="mbr-table-cell mbr-valign-middle col-md-3" style="padding-bottom: 40px;">
                  <div class="mbr-figure"><img src="{{ URL::asset('images/contapharm/contapharm-logo.png') }}"></div>
              </div>

            </div>
        </div>
    </div>
</section>

 

<section class="mbr-gallery mbr-section mbr-section-nopadding" id="gallery1-22" style="background-color: rgb(239, 239, 239); padding-top: 0px; padding-bottom: 0px;">
    <!-- Gallery -->
    <div>
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                    <div class="mbr-gallery-item">
                        <a href="#lb-gallery1-22" data-slide-to="0" data-toggle="modal">
                            <img alt="" src="{{ URL::asset('images/contapharm/catalogue-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title">EYE CARE Cosmetics: make-up and care products for sensitive eyes and skin.</span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a href="#lb-gallery1-22" data-slide-to="1" data-toggle="modal">
                            <img alt="" src="{{ URL::asset('images/contapharm/correcteur-teint-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title">Complexion Correctors: high tolerance concealers, foundations and powders.</span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a href="#lb-gallery1-22" data-slide-to="2" data-toggle="modal">
                            <img alt="" src="{{ URL::asset('images/contapharm/ombre-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title">Eyeshadows: suitable for sensitive eyes and contact lens wearers. </span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a href="#lb-gallery1-22" data-slide-to="3" data-toggle="modal">
                            <img alt="" src="{{ URL::asset('images/contapharm/liner-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title"> Liners: available in 19 colours to add drama and light to sensitive eyes.</span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a href="#lb-gallery1-22" data-slide-to="4" data-toggle="modal">
                            <img alt="" src="{{ URL::asset('images/contapharm/eyeliner-feutre-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title">Automatic Eyeliners: longwear and buildable. </span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a href="#lb-gallery1-22" data-slide-to="5" data-toggle="modal">
                            <img alt="" src="{{ URL::asset('images/contapharm/lipgloss-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title">Lipgloss: high tolerance, formulated without fragrance, allergens, carmine or lanolin. </span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a href="#lb-gallery1-22" data-slide-to="6" data-toggle="modal">
                            <img alt="" src="{{ URL::asset('images/contapharm/vernis-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title">Perfection Oligo+ Nail Enamel: stimulates growth and hardens the nail.</span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a href="#lb-gallery1-22" data-slide-to="7" data-toggle="modal">
                            <img alt="" src="{{ URL::asset('images/contapharm/pharmasouples-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title">PHARMASOUPLES Contact Lens Care: all-in-one hypoallergenic solution. </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-22">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-22" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-22" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-22" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-22" data-slide-to="3"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-22" data-slide-to="4"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-22" data-slide-to="5"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-22" data-slide-to="6"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-22" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img alt="" src="{{ URL::asset('images/contapharm/catalogue.jpg') }}">
                        </div><div class="carousel-item">
                            <img alt="" src="{{ URL::asset('images/contapharm/correcteur-teint.jpg') }}">
                        </div><div class="carousel-item">
                            <img alt="" src="{{ URL::asset('images/contapharm/ombre.jpg') }}">
                        </div><div class="carousel-item">
                            <img alt="" src="{{ URL::asset('images/contapharm/liner.jpg') }}">
                        </div><div class="carousel-item">
                            <img alt="" src="{{ URL::asset('images/contapharm/eyeliner-feutre.jpg') }}">
                        </div><div class="carousel-item">
                            <img alt="" src="{{ URL::asset('images/contapharm/lipgloss.jpg') }}">
                        </div><div class="carousel-item">
                            <img alt="" src="{{ URL::asset('images/contapharm/vernis.jpg') }}">
                        </div><div class="carousel-item">
                            <img alt="" src="{{ URL::asset('images/contapharm/pharmasouples.jpg') }}">
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-22">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-22">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section__container mbr-section__container--isolated" id="content7-20" style="padding-top: 60px; padding-bottom: 60px;">

    <div class="container">
        <div class="row">
        <div class="col-xs-12 col-md-6 lead">
            <h4> EYE CARE Cosmetics </h4>
            <p style="margin-bottom: 1rem;"> EYE CARE Cosmetics is a high tolerance skincare and make-up range. Recommended by dermatologists, allergy specialists and ophthalmologists, the range is extensive with products designed to be hypoallergenic and free of harmful chemicals and allergens such as: Nickel, Parabens, Toluene, Formaldehyde, Resin, Phthalate, Camphor, Lanolin and preservatives. <br> <br>
            The unique formulation of EYE CARE Cosmetics enables the products to satisfy all kind of skin types and eyes, even the most intolerant and sensitive ones. Incidence of reaction is only 0.004%.</p>
            <p> EYE CARE Cosmetics displays can be found in more than <a href="#map2-15"> 80 points of sales </a> in Lebanon. </p>

            <h4> PHARMASOUPLES </h4>
            <p style="margin-bottom: 1rem;"> PHARMASOUPLES is a contact lens hypoallergenic cleaner. PHARMASOUPLES disinfects, removes proteins, hydrates, rinses and lubricates. </p>

            <p style="margin-bottom: 1rem;"> For more information, visit <a href="http://www.contapharm.com/" target="_blank">Laboratoires CONTAPHARM's website</a>. </p>
            </div>

            <div class="col-xs-12 col-md-6 lead">
            <h4> Products </h4>
            <p style="margin-bottom: 1rem;">EYE CARE Cosmetics provides two lines of products:</p>

            <ol>
                <li> A line of essential care products for the face and eye area, with textures that are light, comfortable and rich in actively protective, soothing and anti-ageing ingredients that strengthen the skin's own self-defense.
                <ul style="margin-bottom: 1rem;">
                    <li> Face and eyes cleanser </li>
                    <li> Nutritive cream</li>
                    <li> Moisturizer</li>
                    <li> Exfoliator</li>
                    <li> Hydrating Mask</li>
                    <li> Anti-redness cream</li>
                    <li> Eye contour complete range of care</li>
                    <li> Conditioning mascara</li>
                </ul>
                </li>

                <li> An extensive range of make-up, combining all the technical expertise required for high tolerance care, with a wide range of products, textures and shades to suit the needs and tastes of women everywhere.
                <ul style="margin-bottom: 1rem;">
                    <li> Complexion foundation </li>
                    <li> Colored cream</li>
                    <li> Loose and compact powder</li>
                    <li> Concealer</li>
                    <li> Blush</li>
                    <li> Mascara</li>
                    <li> Eyeliner</li>
                </ul>
                </li>
            </ol>
        </div>
    </div>

</section>

<section class="mbr-section mbr-section__container mbr-section__container--isolated" id="map2-15" style="padding-top: 0;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="mbr-map"><iframe src="https://www.google.com/maps/d/embed?mid=1GwxIMygvq4N6koEFNttObq-3lQo" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            </div>
        </div>
    </div>
</section>

@endsection