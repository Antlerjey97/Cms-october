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

/* C:\Program Files (x86)\Ampps\www\october/themes/zanor-zanor-mdb-loaded/layouts/fullImageCarousel.htm */
class __TwigTemplate_11535366fc9fa15c09b7383b5f04cc83120cba53fe4c4c9e40439ccfde22a9bd extends \Twig\Template
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
<div id=\"carousel-example-3\" class=\"carousel slide carousel-fade white-text\" data-ride=\"carousel\" data-interval=\"false\">
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
        <div class=\"carousel-item active view hm-black-light\" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg'); background-repeat: no-repeat; background-size: cover;\">

            <!-- Caption -->
            <div class=\"full-bg-img flex-center white-text\">
                <ul class=\"animated fadeInUp col-md-12\">
                    <li>
                        <h1 class=\"display-3 flex-item font-bold\">Material Design for Bootstrap 4</h1>
                        <li>
                            <h3 class=\"flex-item\">The most powerful and free UI KIT for Bootstrap</h3>
                        </li>
                        <li>
                            <a target=\"_blank\" href=\"https://mdbootstrap.com/getting-started/?utm_source=4e323a&utm_id=4e323a\" class=\"btn btn-primary btn-lg flex-item\" rel=\"nofollow\">Sign up!</a>

                            <a target=\"_blank\" href=\"https://mdbootstrap.com/material-design-for-bootstrap/?utm_source=4e323a&utm_id=4e323a\" class=\"btn btn-outline-white btn-lg flex-item\"
                                rel=\"nofollow\">Learn more</a>
                        </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!-- /.First slide -->

        <!-- Second slide -->
        <div class=\"carousel-item view hm-black-light\" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg'); background-repeat: no-repeat; background-size: cover;\">

            <!-- Caption -->
            <div class=\"full-bg-img flex-center white-text\">
                <ul class=\"animated fadeInUp col-md-12\">
                    <li>
                        <h1 class=\"display-4 font-bold\">Lots of tutorials at your disposal</h1>
                    </li>
                    <li>
                        <h3 class=\"my-4\">And all of them are FREE!</h3>
                    </li>
                    <li>
                        <a target=\"_blank\" href=\"https://mdbootstrap.com/bootstrap-tutorial/?utm_source=4e323a&utm_id=4e323a\" class=\"btn btn-primary btn-lg\" rel=\"nofollow\">Start learning</a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!-- /.Second slide -->

        <!-- Third slide -->
        <div class=\"carousel-item view hm-black-light\" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/images/79.jpg'); background-repeat: no-repeat; background-size: cover;\">

            <!-- Caption -->
            <div class=\"full-bg-img flex-center white-text\">
                <ul class=\"animated fadeInUp col-md-12\">
                    <li>
                        <h1 class=\"display-4 font-bold\">Visit our support forum</h1>
                    </li>
                    <li>
                        <h3 class=\"my-4\">Our community can help you with any question</h3>
                    </li>
                    <li>
                        <a target=\"_blank\" href=\"https://mdbootstrap.com/forums/forum/support/?utm_source=4e323a&utm_id=4e323a\" class=\"btn btn-default btn-lg\" rel=\"nofollow\">Support forum</a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!-- /.Third slide -->

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


<div class=\"container\">
    <!--Section: Blog v.1-->
    <section class=\"section pb-3 text-center text-lg-left\">

        <!--Section heading-->
        <h1 class=\"section-heading h1 dark-grey-text text-center mt-5 pt-lg-3\">Recent posts</h1>
        <hr>
        <!--Section description-->
        <p class=\"section-description mb-5 mt-lg-5 mx-lg-5 text-center\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <!--Grid row-->
        <div class=\"row pt-lg-5\">

            <!--Grid column-->
            <div class=\"col-lg-5 col-xl-5 mb-5\">
                <!--Featured image-->
                <div class=\"\">
                    <a>
                        <img src=\"https://mdbootstrap.com/img/Photos/Others/images/43.jpg\" alt=\"Second image in the first version of blog listing\"
                            class=\"img-fluid z-depth-1-half rounded\">
                    </a>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-7 col-xl-7\">
                <!--Excerpt-->
                <a href=\"\" class=\"cyan-text\">
                    <h6 class=\"font-bold pb-1\">
                        <i class=\"fa fa-cutlery\"></i> Food</h6>
                </a>
                <h4 class=\"mb-4 font-bold dark-grey-text\">
                    <strong>This is title of the news.</strong>
                </h4>
                <p class=\"dark-grey-text\">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime
                    placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis
                    aut rerum. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                <p>by
                    <a>
                        <strong>Carine Fox</strong>
                    </a>, 19/08/2016</p>
                <a class=\"btn btn-info btn-md mb-3\">Read more</a>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class=\"hr-width mb-5 mt-5 pb-3\">

        <!--Grid row-->
        <div class=\"row\">

            <!--Grid column-->
            <div class=\"col-lg-7 col-xl-7 pb-3\">
                <!--Excerpt-->
                <a href=\"\" class=\"cyan-text\">
                    <h6 class=\"font-bold pb-1\">
                        <i class=\"fa fa-image\"></i> Lifestyle</h6>
                </a>
                <h4 class=\"mb-4 font-bold dark-grey-text\">
                    <strong>This is title of the news.</strong>
                </h4>
                <p class=\"dark-grey-text\">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime
                    placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis
                    aut rerum. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                <p>by
                    <a>
                        <strong>Carine Fox</strong>
                    </a>, 14/08/2016</p>
                <a class=\"btn btn-info btn-md mb-3\">Read more</a>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-5 col-xl-5 mb-5\">
          
                <!--Featured image-->
                <div class=\"\">
                    <a>
                        <img src=\"https://mdbootstrap.com/img/Photos/Others/images/54.jpg\" alt=\"Second image in the first version of blog listing\"
                            class=\"img-fluid z-depth-1-half rounded\">
                    </a>
                </div>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class=\"hr-width mb-5 mt-4 pb-3\">

        <!--Grid row-->
        <div class=\"row\">

            <!--Grid column-->
            <div class=\"col-lg-5 ml-auto col-xl-5 pb-3\">

                <!--Featured image-->
                <div class=\"\">
                    <a>
                        <img src=\"https://mdbootstrap.com/img/Photos/Others/images/65.jpg\" alt=\"Second image in the first version of blog listing\"
                            class=\"img-fluid z-depth-1-half rounded\">
                    </a>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-7 mr-auto col-xl-7\">
                <!--Excerpt-->
                <a href=\"\" class=\"cyan-text\">
                    <h6 class=\"font-bold pb-1\">
                        <i class=\"fa fa-suitcase\"></i> Travels</h6>
                </a>
                <h4 class=\"mb-4 font-bold dark-grey-text\">
                    <strong>This is title of the news.</strong>
                </h4>
                <p class=\"dark-grey-text\">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime
                    placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis
                    aut rerum. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                <p>by
                    <a>
                        <strong>Carine Fox</strong>
                    </a>, 11/08/2016</p>
                <a class=\"btn btn-info btn-md mb-3\">Read more</a>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class=\"hr-width mb-5 mt-5 pb-3\">

        <!--Grid row-->
        <div class=\"row pb-5 mb-5\">

            <!--Grid column-->
            <div class=\"col-lg-7 col-xl-7 pb-3\">
                <!--Excerpt-->
                <a href=\"\" class=\"cyan-text\">
                    <h6 class=\"font-bold pb-1\">
                        <i class=\"fa fa-image\"></i> Lifestyle</h6>
                </a>
                <h4 class=\"mb-4 font-bold dark-grey-text\">
                    <strong>This is title of the news.</strong>
                </h4>
                <p class=\"dark-grey-text\">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime
                    placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis
                    aut rerum. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                <p>by
                    <a>
                        <strong>Carine Fox</strong>
                    </a>, 14/08/2016</p>
                <a class=\"btn btn-info btn-md mb-3\">Read more</a>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-5 col-xl-5 mb-5\">
                <!--Featured image-->
                <div class=\"\">
                    <a>
                        <img src=\"https://mdbootstrap.com/img/Photos/Others/images/55.jpg\" alt=\"Second image in the first version of blog listing\"
                            class=\"img-fluid z-depth-1-half rounded\">
                    </a>
                </div>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </section>
    <!--Section: Blog v.1-->

</div>

<!--/.Main layout-->

";
        // line 284
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/layouts/fullImageCarousel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 284,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'site/head' %}
{% partial 'site/scrollingNavbar' %}

<!--Carousel Wrapper-->
<div id=\"carousel-example-3\" class=\"carousel slide carousel-fade white-text\" data-ride=\"carousel\" data-interval=\"false\">
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
        <div class=\"carousel-item active view hm-black-light\" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg'); background-repeat: no-repeat; background-size: cover;\">

            <!-- Caption -->
            <div class=\"full-bg-img flex-center white-text\">
                <ul class=\"animated fadeInUp col-md-12\">
                    <li>
                        <h1 class=\"display-3 flex-item font-bold\">Material Design for Bootstrap 4</h1>
                        <li>
                            <h3 class=\"flex-item\">The most powerful and free UI KIT for Bootstrap</h3>
                        </li>
                        <li>
                            <a target=\"_blank\" href=\"https://mdbootstrap.com/getting-started/?utm_source=4e323a&utm_id=4e323a\" class=\"btn btn-primary btn-lg flex-item\" rel=\"nofollow\">Sign up!</a>

                            <a target=\"_blank\" href=\"https://mdbootstrap.com/material-design-for-bootstrap/?utm_source=4e323a&utm_id=4e323a\" class=\"btn btn-outline-white btn-lg flex-item\"
                                rel=\"nofollow\">Learn more</a>
                        </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!-- /.First slide -->

        <!-- Second slide -->
        <div class=\"carousel-item view hm-black-light\" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg'); background-repeat: no-repeat; background-size: cover;\">

            <!-- Caption -->
            <div class=\"full-bg-img flex-center white-text\">
                <ul class=\"animated fadeInUp col-md-12\">
                    <li>
                        <h1 class=\"display-4 font-bold\">Lots of tutorials at your disposal</h1>
                    </li>
                    <li>
                        <h3 class=\"my-4\">And all of them are FREE!</h3>
                    </li>
                    <li>
                        <a target=\"_blank\" href=\"https://mdbootstrap.com/bootstrap-tutorial/?utm_source=4e323a&utm_id=4e323a\" class=\"btn btn-primary btn-lg\" rel=\"nofollow\">Start learning</a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!-- /.Second slide -->

        <!-- Third slide -->
        <div class=\"carousel-item view hm-black-light\" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/images/79.jpg'); background-repeat: no-repeat; background-size: cover;\">

            <!-- Caption -->
            <div class=\"full-bg-img flex-center white-text\">
                <ul class=\"animated fadeInUp col-md-12\">
                    <li>
                        <h1 class=\"display-4 font-bold\">Visit our support forum</h1>
                    </li>
                    <li>
                        <h3 class=\"my-4\">Our community can help you with any question</h3>
                    </li>
                    <li>
                        <a target=\"_blank\" href=\"https://mdbootstrap.com/forums/forum/support/?utm_source=4e323a&utm_id=4e323a\" class=\"btn btn-default btn-lg\" rel=\"nofollow\">Support forum</a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!-- /.Third slide -->

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


<div class=\"container\">
    <!--Section: Blog v.1-->
    <section class=\"section pb-3 text-center text-lg-left\">

        <!--Section heading-->
        <h1 class=\"section-heading h1 dark-grey-text text-center mt-5 pt-lg-3\">Recent posts</h1>
        <hr>
        <!--Section description-->
        <p class=\"section-description mb-5 mt-lg-5 mx-lg-5 text-center\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <!--Grid row-->
        <div class=\"row pt-lg-5\">

            <!--Grid column-->
            <div class=\"col-lg-5 col-xl-5 mb-5\">
                <!--Featured image-->
                <div class=\"\">
                    <a>
                        <img src=\"https://mdbootstrap.com/img/Photos/Others/images/43.jpg\" alt=\"Second image in the first version of blog listing\"
                            class=\"img-fluid z-depth-1-half rounded\">
                    </a>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-7 col-xl-7\">
                <!--Excerpt-->
                <a href=\"\" class=\"cyan-text\">
                    <h6 class=\"font-bold pb-1\">
                        <i class=\"fa fa-cutlery\"></i> Food</h6>
                </a>
                <h4 class=\"mb-4 font-bold dark-grey-text\">
                    <strong>This is title of the news.</strong>
                </h4>
                <p class=\"dark-grey-text\">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime
                    placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis
                    aut rerum. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                <p>by
                    <a>
                        <strong>Carine Fox</strong>
                    </a>, 19/08/2016</p>
                <a class=\"btn btn-info btn-md mb-3\">Read more</a>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class=\"hr-width mb-5 mt-5 pb-3\">

        <!--Grid row-->
        <div class=\"row\">

            <!--Grid column-->
            <div class=\"col-lg-7 col-xl-7 pb-3\">
                <!--Excerpt-->
                <a href=\"\" class=\"cyan-text\">
                    <h6 class=\"font-bold pb-1\">
                        <i class=\"fa fa-image\"></i> Lifestyle</h6>
                </a>
                <h4 class=\"mb-4 font-bold dark-grey-text\">
                    <strong>This is title of the news.</strong>
                </h4>
                <p class=\"dark-grey-text\">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime
                    placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis
                    aut rerum. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                <p>by
                    <a>
                        <strong>Carine Fox</strong>
                    </a>, 14/08/2016</p>
                <a class=\"btn btn-info btn-md mb-3\">Read more</a>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-5 col-xl-5 mb-5\">
          
                <!--Featured image-->
                <div class=\"\">
                    <a>
                        <img src=\"https://mdbootstrap.com/img/Photos/Others/images/54.jpg\" alt=\"Second image in the first version of blog listing\"
                            class=\"img-fluid z-depth-1-half rounded\">
                    </a>
                </div>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class=\"hr-width mb-5 mt-4 pb-3\">

        <!--Grid row-->
        <div class=\"row\">

            <!--Grid column-->
            <div class=\"col-lg-5 ml-auto col-xl-5 pb-3\">

                <!--Featured image-->
                <div class=\"\">
                    <a>
                        <img src=\"https://mdbootstrap.com/img/Photos/Others/images/65.jpg\" alt=\"Second image in the first version of blog listing\"
                            class=\"img-fluid z-depth-1-half rounded\">
                    </a>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-7 mr-auto col-xl-7\">
                <!--Excerpt-->
                <a href=\"\" class=\"cyan-text\">
                    <h6 class=\"font-bold pb-1\">
                        <i class=\"fa fa-suitcase\"></i> Travels</h6>
                </a>
                <h4 class=\"mb-4 font-bold dark-grey-text\">
                    <strong>This is title of the news.</strong>
                </h4>
                <p class=\"dark-grey-text\">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime
                    placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis
                    aut rerum. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                <p>by
                    <a>
                        <strong>Carine Fox</strong>
                    </a>, 11/08/2016</p>
                <a class=\"btn btn-info btn-md mb-3\">Read more</a>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class=\"hr-width mb-5 mt-5 pb-3\">

        <!--Grid row-->
        <div class=\"row pb-5 mb-5\">

            <!--Grid column-->
            <div class=\"col-lg-7 col-xl-7 pb-3\">
                <!--Excerpt-->
                <a href=\"\" class=\"cyan-text\">
                    <h6 class=\"font-bold pb-1\">
                        <i class=\"fa fa-image\"></i> Lifestyle</h6>
                </a>
                <h4 class=\"mb-4 font-bold dark-grey-text\">
                    <strong>This is title of the news.</strong>
                </h4>
                <p class=\"dark-grey-text\">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime
                    placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis
                    aut rerum. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                <p>by
                    <a>
                        <strong>Carine Fox</strong>
                    </a>, 14/08/2016</p>
                <a class=\"btn btn-info btn-md mb-3\">Read more</a>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-5 col-xl-5 mb-5\">
                <!--Featured image-->
                <div class=\"\">
                    <a>
                        <img src=\"https://mdbootstrap.com/img/Photos/Others/images/55.jpg\" alt=\"Second image in the first version of blog listing\"
                            class=\"img-fluid z-depth-1-half rounded\">
                    </a>
                </div>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </section>
    <!--Section: Blog v.1-->

</div>

<!--/.Main layout-->

{% partial 'site/footer' %}", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/layouts/fullImageCarousel.htm", "");
    }
}
