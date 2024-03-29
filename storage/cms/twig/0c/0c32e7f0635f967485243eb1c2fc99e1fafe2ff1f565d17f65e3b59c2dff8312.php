<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\Program Files (x86)\Ampps\www\october/themes/zanor-zanor-mdb-loaded/layouts/HalfpageCarousel.htm */
class __TwigTemplate_a9b81cd53d938db8f93819e6c76dab68e1f6c345e9ee1295cb7934b6f2de9a53 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scrollingNavbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
<!--Carousel Wrapper-->
<div id=\"carousel-example-3\" class=\"carousel slide carousel-fade white-text\" data-ride=\"carousel\" data-interval=\"5000\">
    <!--Indicators-->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#carousel-example-3\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carousel-example-3\" data-slide-to=\"1\"></li>
        <li data-target=\"#carousel-example-3\" data-slide-to=\"2\"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class=\"carousel-inner\" role=\"listbox\">

        <!-- First slide -->
        <div class=\"carousel-item active view hm-black-light\" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg'); background-repeat: no-repeat; background-size: cover;\">
            <!-- Caption -->
            <div class=\"full-bg-img flex-center white-text\">
                <ul class=\"animated fadeIn col-md-12\">
                    <li>
                        <h1 class=\"h1-responsive font-bold\">20 Photos to inspire you to visit Tatra Mountains</h1>
                    </li>
                    <li>
                        <p>Best places you should see, traditional dishes that you have to try</p>
                    </li>
                    <li>
                        <a target=\"_blank\" href=\"https://mdbootstrap.com/getting-started/?utm_source=4e323a&utm_id=4e323a\" class=\"btn btn-outline-white\" rel=\"nofollow\">See more!</a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!--/.First slide-->

        <!-- Second slide -->
        <div class=\"carousel-item view hm-black-light\" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg'); background-repeat: no-repeat; background-size: cover;\">

            <!-- Caption -->
            <div class=\"full-bg-img flex-center white-text\">
                <ul class=\"animated fadeIn col-md-12\">
                    <li>
                        <h1 class=\"h1-responsive font-bold\">10 Reasons you should spend winter holiday in mountains </h1>
                    </li>
                    <li>
                        <p>Best atractions and winter sports!</p>
                    </li>
                    <li>
                        <a target=\"_blank\" href=\"https://mdbootstrap.com/bootstrap-tutorial/?utm_source=4e323a&utm_id=4e323a\" class=\"btn btn-outline-white\" rel=\"nofollow\">Read more</a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!--/.Second slide -->

        <!-- Third slide -->
        <div class=\"carousel-item view hm-black-slight\" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/nature7.jpg'); background-repeat: no-repeat; background-size: cover;\">

            <!-- Caption -->
            <div class=\"full-bg-img flex-center white-text\">
                <ul class=\"animated fadeIn col-md-12\">
                    <li>
                        <h1 class=\"h1-responsive font-bold\">Weekend in the nature - the best way to relax</h1>
                    </li>
                    <li>
                        <p>8 Reasons why you need to spend more time in nature</p>
                    </li>
                    <li>
                        <a target=\"_blank\" href=\"https://mdbootstrap.com/forums/forum/support/?utm_source=4e323a&utm_id=4e323a\" class=\"btn btn-outline-white\" rel=\"nofollow\">Read more</a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!--/.Third slide-->
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class=\"carousel-control-prev\" href=\"#carousel-example-3\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carousel-example-3\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<br>

<!--Content-->
<div class=\"container\">


    <!-- Section: About -->
    <section class=\"section about mb-5\" id=\"about\">

        <!-- Secion heading -->
        <h1 class=\"text-center font-bold mt-5 pt-2 mb-3 dark-grey-text wow fadeIn\" data-wow-delay=\"0.2s\">
            <em>About us</em>
        </h1>

        <!-- Section description -->
        <p class=\"text-center font-up font-bold grey-text mb-5 pb-4 wow fadeIn\" data-wow-delay=\"0.2s\">Tourism students with love to travel</p>

        <!-- Grid row -->
        <div class=\"row\">

            <!-- Column column -->
            <div class=\"col-xl-5 mr-auto mb-r col-lg-6 wow fadeIn\" data-wow-delay=\"0.4s\">

                <!-- Image -->
                <img src=\"https://mdbootstrap.com/img/Photos/Others/images/53.jpg\" class=\"img-fluid rounded z-depth-1-half\"
                    alt=\"My photo\">

            </div>
            <!-- Column column -->

            <!-- Grid column column -->
            <div class=\"col-xl-6 col-lg-6 wow fadeIn\" data-wow-delay=\"0.4s\">

                <!-- Description -->
                <p align=\"justify\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta ab
                    cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque animi maxime.</p>

                <p align=\"justify\">Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                    eaque delectus, beatae maxime temporibus maiores quibusdam quasi rem magnam.</p>

                <ul>
                    <li>Nemo animi soluta ratione</li>
                    <li>Beatae maxime temporibus</li>
                    <li>Consectetur adipisicing elit</li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!-- Section: About -->

    <hr>

    <div class=\"row my-5 py-4\">
        <!--First columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card wow fadeIn\" data-wow-delay=\"0.2s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Others/images/49.jpg\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">Mesmerizing Landscapes</h4>
                    <!--Text-->
                    <p class=\"card-text mb-4\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href=\"#\" class=\"font-bold\">Read more</a>
                </div>

            </div>
            <!--/.Card-->
        </div>
        <!--First columnn-->

        <!--Second columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card wow fadeIn\" data-wow-delay=\"0.4s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Others/images/48.jpg\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">Top 5 holiday's places</h4>
                    <!--Text-->
                    <p class=\"card-text mb-4\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href=\"#\" class=\"font-bold\">Read more</a>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Second columnn-->

        <!--Third columnn-->
        <div class=\"col-lg-4 mb-4\">
            <!--Card-->
            <div class=\"card wow fadeIn\" data-wow-delay=\"0.6s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Others/images/29.jpg\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">Mountain Rivers</h4>
                    <!--Text-->
                    <p class=\"card-text mb-4\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href=\"#\" class=\"font-bold\">Read more</a>
                </div>

            </div>
            <!--/.Card-->
        </div>
        <!--Third columnn-->
    </div>
</div>
<!--/.Content-->

";
        // line 225
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/layouts/HalfpageCarousel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 225,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'site/head' %}
{% partial 'site/scrollingNavbar' %}

<!--Carousel Wrapper-->
<div id=\"carousel-example-3\" class=\"carousel slide carousel-fade white-text\" data-ride=\"carousel\" data-interval=\"5000\">
    <!--Indicators-->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#carousel-example-3\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carousel-example-3\" data-slide-to=\"1\"></li>
        <li data-target=\"#carousel-example-3\" data-slide-to=\"2\"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class=\"carousel-inner\" role=\"listbox\">

        <!-- First slide -->
        <div class=\"carousel-item active view hm-black-light\" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg'); background-repeat: no-repeat; background-size: cover;\">
            <!-- Caption -->
            <div class=\"full-bg-img flex-center white-text\">
                <ul class=\"animated fadeIn col-md-12\">
                    <li>
                        <h1 class=\"h1-responsive font-bold\">20 Photos to inspire you to visit Tatra Mountains</h1>
                    </li>
                    <li>
                        <p>Best places you should see, traditional dishes that you have to try</p>
                    </li>
                    <li>
                        <a target=\"_blank\" href=\"https://mdbootstrap.com/getting-started/?utm_source=4e323a&utm_id=4e323a\" class=\"btn btn-outline-white\" rel=\"nofollow\">See more!</a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!--/.First slide-->

        <!-- Second slide -->
        <div class=\"carousel-item view hm-black-light\" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg'); background-repeat: no-repeat; background-size: cover;\">

            <!-- Caption -->
            <div class=\"full-bg-img flex-center white-text\">
                <ul class=\"animated fadeIn col-md-12\">
                    <li>
                        <h1 class=\"h1-responsive font-bold\">10 Reasons you should spend winter holiday in mountains </h1>
                    </li>
                    <li>
                        <p>Best atractions and winter sports!</p>
                    </li>
                    <li>
                        <a target=\"_blank\" href=\"https://mdbootstrap.com/bootstrap-tutorial/?utm_source=4e323a&utm_id=4e323a\" class=\"btn btn-outline-white\" rel=\"nofollow\">Read more</a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!--/.Second slide -->

        <!-- Third slide -->
        <div class=\"carousel-item view hm-black-slight\" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/nature7.jpg'); background-repeat: no-repeat; background-size: cover;\">

            <!-- Caption -->
            <div class=\"full-bg-img flex-center white-text\">
                <ul class=\"animated fadeIn col-md-12\">
                    <li>
                        <h1 class=\"h1-responsive font-bold\">Weekend in the nature - the best way to relax</h1>
                    </li>
                    <li>
                        <p>8 Reasons why you need to spend more time in nature</p>
                    </li>
                    <li>
                        <a target=\"_blank\" href=\"https://mdbootstrap.com/forums/forum/support/?utm_source=4e323a&utm_id=4e323a\" class=\"btn btn-outline-white\" rel=\"nofollow\">Read more</a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!--/.Third slide-->
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class=\"carousel-control-prev\" href=\"#carousel-example-3\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carousel-example-3\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<br>

<!--Content-->
<div class=\"container\">


    <!-- Section: About -->
    <section class=\"section about mb-5\" id=\"about\">

        <!-- Secion heading -->
        <h1 class=\"text-center font-bold mt-5 pt-2 mb-3 dark-grey-text wow fadeIn\" data-wow-delay=\"0.2s\">
            <em>About us</em>
        </h1>

        <!-- Section description -->
        <p class=\"text-center font-up font-bold grey-text mb-5 pb-4 wow fadeIn\" data-wow-delay=\"0.2s\">Tourism students with love to travel</p>

        <!-- Grid row -->
        <div class=\"row\">

            <!-- Column column -->
            <div class=\"col-xl-5 mr-auto mb-r col-lg-6 wow fadeIn\" data-wow-delay=\"0.4s\">

                <!-- Image -->
                <img src=\"https://mdbootstrap.com/img/Photos/Others/images/53.jpg\" class=\"img-fluid rounded z-depth-1-half\"
                    alt=\"My photo\">

            </div>
            <!-- Column column -->

            <!-- Grid column column -->
            <div class=\"col-xl-6 col-lg-6 wow fadeIn\" data-wow-delay=\"0.4s\">

                <!-- Description -->
                <p align=\"justify\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta ab
                    cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque animi maxime.</p>

                <p align=\"justify\">Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                    eaque delectus, beatae maxime temporibus maiores quibusdam quasi rem magnam.</p>

                <ul>
                    <li>Nemo animi soluta ratione</li>
                    <li>Beatae maxime temporibus</li>
                    <li>Consectetur adipisicing elit</li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!-- Section: About -->

    <hr>

    <div class=\"row my-5 py-4\">
        <!--First columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card wow fadeIn\" data-wow-delay=\"0.2s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Others/images/49.jpg\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">Mesmerizing Landscapes</h4>
                    <!--Text-->
                    <p class=\"card-text mb-4\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href=\"#\" class=\"font-bold\">Read more</a>
                </div>

            </div>
            <!--/.Card-->
        </div>
        <!--First columnn-->

        <!--Second columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card wow fadeIn\" data-wow-delay=\"0.4s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Others/images/48.jpg\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">Top 5 holiday's places</h4>
                    <!--Text-->
                    <p class=\"card-text mb-4\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href=\"#\" class=\"font-bold\">Read more</a>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Second columnn-->

        <!--Third columnn-->
        <div class=\"col-lg-4 mb-4\">
            <!--Card-->
            <div class=\"card wow fadeIn\" data-wow-delay=\"0.6s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Others/images/29.jpg\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">Mountain Rivers</h4>
                    <!--Text-->
                    <p class=\"card-text mb-4\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href=\"#\" class=\"font-bold\">Read more</a>
                </div>

            </div>
            <!--/.Card-->
        </div>
        <!--Third columnn-->
    </div>
</div>
<!--/.Content-->

{% partial 'site/footer' %}", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/layouts/HalfpageCarousel.htm", "");
    }
}
