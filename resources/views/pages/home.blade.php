@extends('default')

@section('includes')
    <link rel="stylesheet" href="css/slippry.css" type="text/css" />
    <link rel="stylesheet" href="css/flexisel.css" type="text/css" />
    <link rel="stylesheet" href="css/portfolio.css" type="text/css" />
@stop

@section('content')
    <div class="row no-padding">
        <ul id="slider">
            @for ($i = 1; $i <= 16; $i++)
            <li>
                <a href="#slide{{$i}}"><img src="img/slider/image-{{$i}}.jpg" alt=""></a>
            </li>
            @endfor
        </ul>
    </div>
    <div class="row green">
        <div class="col-md-12 text-center">
            <h3 class="no-margin">Asistenta garantie si post-garantie pentru toate produsele!</h3>
        </div>
    </div>
    <div class="row no-padding-bottom" id="desprenoi">
        <div class="col-md-4">
            <h3>Istoric</h3>
            <p>S.C. TECNO EUROMAG s.r.l. are ca principal obiectiv importul si comercializarea de instalatii si echipamente industriale, orientandu-se de la inceput spre gasirea de solutii personalizate la cerintele clientilor.</p>
            <p>Deoarece cerintele pietei romanesti sunt retehnologizarea si dotarea cu echipamente de ultima generatie, TECNO EUROMAG a venit in intampinarea clientilor cu o gama variata de echipamente, dotand cu tehnologie de ultima ora peste 60 companii romanesti.</p>
            <p>Astfel, am inceput sa importam si sa distribuim instalatii de debitare cu CNC produse de firma italiana SOITAAB, companie cu o vasta experienta in domeniul proiectarii si constructiei acestor tipuri de instalatii (peste 40 ani).</p>
        </div>
        <div class="col-md-4">
            <h3>Echipa</h3>
            <p>Echipa TECNO EUROMAG este o echipa comunicativa, formata din profesionisti si deschisa catre clienti, cu o vasta experienta in privinta comercializarii punerii in functiune si service-ului, in acest fel fiind indeplinite premisele unei bune colaborari atat cu partenerii existenti cat si cu viitorii nostri clienti.</p>
        </div>
        <div class="col-md-4">
            <h3>Certificare</h3>
            <p>Toate echipamentele poarta sigla CE si beneficiaza de certificarea ISO 9001.</p>
            <p><img src="img/iso9001.jpg" alt="Iso 9001"> <img src="img/iqnet.jpg" alt="Iq net"></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Produse</h3>
        </div>
        <div id="portfoliolist">
        <?php $products = DB::table('products')->get(); ?>
        @foreach ($products as $product)
            <a href="./produse?category={{$product->prod_link}}">    
            <div class="portfolio">
                <div class="portfolio-wrapper">				
                    <img src="./img/products/{{$product->prod_image}}" alt="{{$product->prod_name}}" />
                    <div class="label">
                        <div class="label-text">
                            <div class="text-title">{{$product->prod_name}}</div>
                        </div>
                        <div class="label-bg"></div>
                    </div>
                </div>
            </div></a>
        @endforeach
        </div>        
    </div>
    <div class="row no-padding-top">
        <div class="col-md-12">
            <h3>Parteneri</h3>
        </div>
        <div class="col-md-12">
            <ul id="flexisel"> 
                <li><a href="http://www.soitaab.com/" target="_blank"><img src="img/sponsors/soitaab.png" alt="Soitaab"/></a></li>   
                <li><a href="http://www.hypertherm.com/" target="_blank"><img src="img/sponsors/hypertherm.png" alt="Hypertherm"/></a></li>   
                <li><a href="http://www.taglio.it/" target="_blank"><img src="img/sponsors/taglio.png" alt="Taglio"/></a></li>   
                <li><a href="http://www.harris.com/" target="_blank"><img src="img/sponsors/harris.png" alt="Harris"/></a></li>   
                <li><a href="http://www.cebora.it/" target="_blank"><img src="img/sponsors/cebora.png" alt="Cebora"/></a></li>   
                <li><a href="http://www.tecnomagnete.com/" target="_blank"><img src="img/sponsors/tecnomagnete.png" alt="Tecnomagnete"/></a></li>   
                <li><a href="http://www.galdabini.it/" target="_blank"><img src="img/sponsors/galdabini.png" alt="Galdabini"/></a></li>   
            </ul>
        </div>
    </div>
@stop

@section('scripts')
    <!-- Slippry -->
    <script src="js/slippry.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#slider').slippry({
                                        pager: false,
                                        adaptiveHeight: false
				});
        });
    </script>
    <!-- Flexisel -->
    <script src="js/jquery.flexisel.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $("#flexisel").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 2000,            
                pauseOnHover: true
            });
        });
    </script>
    <!-- Portfolio -->
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>	
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript">
        $(function () {
                var filterList = {
                        init: function () {
                                // MixItUp plugin
                                // http://mixitup.io
                                $('#portfoliolist').mixitup({
                                        targetSelector: '.portfolio',
                                        filterSelector: '.filter',
                                        effects: ['fade'],
                                        easing: 'snap',
                                        // call the hover effect
                                        onMixEnd: filterList.hoverEffect()
                                });				
                        },
                        hoverEffect: function () {
                                // Simple parallax effect
                                $('#portfoliolist .portfolio').hover(
                                        function () {
                                                $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                                                $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
                                        },
                                        function () {
                                                $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                                                $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
                                        }		
                                );				
                        }
                };
                // Run the show!
                filterList.init();
        });		
    </script>
@stop


    