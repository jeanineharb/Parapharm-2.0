@extends('structure')

@section('content')

<section class="mbr-section mbr-section__container mbr-after-navbar mbr-section__container--isolated" id="header3-19" style="padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">Laboratoires NOREVA</h3>
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
                    <p>Founded in 1990 under the name of Laboratoires LED and introduced to Lebanon in 1993 by Parapharm SAL, Laboratoires NOREVA is a pioneer in the fields of skincare and dermocosmetics with its major innovative molecule AHA. <br> <br>
                    Laboratoires NOREVA answers to the expectations of doctors, dermatologists and pharmacists, by making available a wide range of highly-efficient treatments that are in line with dermocosmetic innovations, and which are suitable to all types of skin. <br> <br>
                    All NOREVA products are developed at ISO certified plants and meet all medical and pharmaceuticals requirements.</p>  
                  </div>
              </div>

              <div class="mbr-table-cell mbr-valign-middle col-md-3" style="padding-bottom: 40px;">
                  <div class="mbr-figure"><img src="{{ URL::asset('images/noreva/noreva-logo.png') }}"></div>
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
                            <img alt="" src="{{ URL::asset('images/noreva/noreva-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title">Laboratoires NOREVA: pioneer in skincare and dermocosmetics.</span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a href="#lb-gallery1-22" data-slide-to="1" data-toggle="modal">
                            <img alt="" src="{{ URL::asset('images/noreva/actipur-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title">Actipur: intensive treatment for skin with imperfections.</span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a href="#lb-gallery1-22" data-slide-to="2" data-toggle="modal">
                            <img alt="" src="{{ URL::asset('images/noreva/alphakm-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title">Alpha KM: repairing, firming and restructuring. </span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a href="#lb-gallery1-22" data-slide-to="3" data-toggle="modal">
                            <img alt="" src="{{ URL::asset('images/noreva/aquareva-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title">Aquareva: intense moisturizer for dehydrated skins.</span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a href="#lb-gallery1-22" data-slide-to="4" data-toggle="modal">
                            <img alt="" src="{{ URL::asset('images/noreva/matidiane-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title">Matidiane: products for mixed/oily skin.</span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a href="#lb-gallery1-22" data-slide-to="5" data-toggle="modal">
                            <img alt="" src="{{ URL::asset('images/noreva/noresun-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title">Noresun: very high sun protection for sensitive skin.</span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a href="#lb-gallery1-22" data-slide-to="6" data-toggle="modal">
                            <img alt="" src="{{ URL::asset('images/noreva/trio-white-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title">Trio White: Depigmenting products that brightens complexion.</span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a href="#lb-gallery1-22" data-slide-to="7" data-toggle="modal">
                            <img alt="" src="{{ URL::asset('images/noreva/zeniac-small.jpg') }}">
                            <span class="icon"></span>
                            <span class="mbr-gallery-title">Zeniac LP: daily care for oily and acne skins.</span>
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
                            <img alt="" src="{{ URL::asset('images/noreva/noreva.jpg') }}">
                        </div><div class="carousel-item">
                            <img alt="" src="{{ URL::asset('images/noreva/actipur.jpg') }}">
                        </div><div class="carousel-item">
                            <img alt="" src="{{ URL::asset('images/noreva/alphakm.jpg') }}">
                        </div><div class="carousel-item">
                            <img alt="" src="{{ URL::asset('images/noreva/aquareva.jpg') }}">
                        </div><div class="carousel-item">
                            <img alt="" src="{{ URL::asset('images/noreva/matidiane.jpg') }}">
                        </div><div class="carousel-item">
                            <img alt="" src="{{ URL::asset('images/noreva/noresun.jpg') }}">
                        </div><div class="carousel-item">
                            <img alt="" src="{{ URL::asset('images/noreva/trio-white.jpg') }}">
                        </div><div class="carousel-item">
                            <img alt="" src="{{ URL::asset('images/noreva/zeniac.jpg') }}">
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
            <h4> Products </h4>
            <p style="margin-bottom: 1rem;">The products of Laboratoires Noreva are divided into 8 types of treatment: </p>
            <ul style="margin-bottom: 1rem;">
                <li> Treatment for sensitive skins </li>
                <li> Anti-age treatments</li>
                <li> Depigmenting treatments</li>
                <li> Treatment for dehydrated skin</li>
                <li> Treatment for skins with imperfections</li>
                <li> Dermatological treatments</li>
                <li> Sun protection</li>
                <li> Universal treatments</li>
            </ul>
            <p style="margin-bottom: 1rem;"> Distributed in pharmacies all over Lebanon. </p>
            <p style="margin-bottom: 1rem;"> For more information, visit <a href="http://noreva-laboratoires.com/" target="_blank">Laboratoires NOREVA's website</a>.</p></div>

            <div class="col-xs-12 col-md-6 lead">
            <h4> Awards </h4>
            <p style="margin-bottom: 1rem;"> Laboratoires NOREVA won the "Victoire de la Beauté" award for two consecutive years: </p>
            <ul style="margin-bottom: 1rem;">
                <li> 2010: Matidiane </li>
                <li> 2011: Noveane </li>
            </ul>
            </div>
        </div>
    </div>

</section>

@endsection