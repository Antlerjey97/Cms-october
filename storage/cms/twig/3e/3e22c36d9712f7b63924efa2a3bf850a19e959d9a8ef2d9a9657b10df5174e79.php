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

/* C:\Program Files (x86)\Ampps\www\october/themes/zanor-zanor-mdb-loaded/pages/blog-homepage.htm */
class __TwigTemplate_fb0d9877184ebb5bf6e69cc7d6cada0e27ed75ab256044365b3b830eb7511981 extends \Twig\Template
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
        echo "<main>
    <!--Main layout-->
    <div class=\"container\">
        <div class=\"row\">

            <!--Main column-->
            <div class=\"col-lg-8\">

                <!--Post-->
                <div class=\"post-wrapper wow fadeIn\" data-wow-delay=\"0.2s\">
                    <!--Post data-->
                    <h1 class=\"h1-responsive dark-grey-text font-bold\">Post title
                        <small class=\"text-muted\">Secondary text</small>
                    </h1>
                    <h6>Written by
                        <a href=\"\">
                            <strong>John Doe</strong>
                        </a>, 30.04.2016</h6>

                    <br>

                    <!--Featured image -->
                    <div class=\"view overlay hm-white-light z-depth-1-half rounded\">
                        <img src=\"https://mdbootstrap.com/img/Photos/Others/images/76.jpg\" class=\"img-fluid\" alt=\"\">
                        <div class=\"mask\">
                        </div>
                    </div>

                    <br>

                    <!--Post excerpt-->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos
                        hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates
                        harum. Repellendus, impedit.</p>

                    <!--\"Read more\" button-->
                    <button class=\"btn btn-blue btn-md\">Read more</button>
                </div>
                <!--/.Post-->

                <hr class=\"mt-5\">

                <!--Post-->
                <div class=\"post-wrapper wow fadeIn\" data-wow-delay=\"0.4s\">
                    <!--Post data-->
                    <h1 class=\"h1-responsive dark-grey-text font-bold mt-5\">Post title
                        <small class=\"text-muted\">Secondary text</small>
                    </h1>
                    <h6>Written by
                        <a href=\"\">
                            <strong>John Doe</strong>
                        </a>, 30.04.2016</h6>

                    <br>

                    <!--Featured image -->
                    <div class=\"view overlay hm-white-light z-depth-1-half rounded\">
                        <img src=\"https://mdbootstrap.com/img/Photos/Others/images/49.jpg\" class=\"img-fluid \" alt=\"\">
                        <div class=\"mask\">
                        </div>
                    </div>

                    <br>

                    <!--Post excerpt-->";
        // line 65
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("filtermovies"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 66
        echo "                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos
                        hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates
                        harum. Repellendus, impedit.</p>

                    <!--\"Read more\" button-->
                    <button class=\"btn btn-blue btn-md\">Read more</button>
                </div>
                <!--/.Post-->

                <hr class=\"mt-5\">

                <!--Post-->
                <div class=\"post-wrapper wow fadeIn\" data-wow-delay=\"0.6s\">
                    <!--Post data-->
                    <h1 class=\"h1-responsive font-bold dark-grey-text mt-5\">Post title
                        <small class=\"text-muted\">Secondary text</small>
                    </h1>
                    <h6>Written by
                        <a href=\"\">
                            <strong>John Doe</strong>
                        </a>, 30.04.2016</h6>

                    <br>

                    <!--Featured image -->
                    <div class=\"view overlay hm-white-light z-depth-1-half rounded\">
                        <img src=\"https://mdbootstrap.com/img/Photos/Others/images/77.jpg\" class=\"img-fluid\" alt=\"\">
                        <div class=\"mask\">
                        </div>
                    </div>

                    <br>

                    <!--Post excerpt-->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos
                        hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates
                        harum. Repellendus, impedit.</p>

                    <!--\"Read more\" button-->
                    <button class=\"btn btn-blue btn-md\">Read more</button>
                </div>
                <!--/.Post-->

                <hr class=\"mt-5\">

                <!--Pagination-->
                <nav>
                    <ul class=\"pagination d-flex justify-content-center pg-primary wow fadeIn\" data-wow-delay=\"0.2s\">
                        <!--Arrow left-->
                        <li class=\"page-item\">
                            <a class=\"page-link\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                        </li>

                        <!--Numbers-->
                        <li class=\"page-item active\">
                            <a class=\"page-link\">1</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\">2</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\">3</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\">4</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\">5</a>
                        </li>

                        <!--Arrow right-->
                        <li class=\"page-item\">
                            <a class=\"page-link\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!--/.Pagination-->

            </div>

            <!--Sidebar-->
            <div class=\"col-lg-4\">

                <div class=\"widget-wrapper wow fadeIn\" data-wow-delay=\"0.4s\">
                    <h4 class=\"font-bold dark-grey-text\">Categories:</h4>
                    <br>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item active\">Lifestyle</a>
                        <a href=\"#\" class=\"list-group-item\">Music</a>
                        <a href=\"#\" class=\"list-group-item\">Travels</a>
                        <a href=\"#\" class=\"list-group-item\">Fashion</a>
                        <a href=\"#\" class=\"list-group-item\">Parties</a>
                    </div>
                </div>

                <div class=\"widget-wrapper wow fadeIn\" data-wow-delay=\"0.6s\">
                    <h4 class=\"font-bold dark-grey-text\">Subscription form:</h4>
                    <br>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <p>
                                <strong>Subscribe to our newsletter</strong>
                            </p>
                            <p>Once a week we will send you a summary of the most useful news</p>
                            <div class=\"md-form\">
                                <i class=\"fa fa-user prefix grey-text\"></i>
                                <input type=\"text\" id=\"form1\" class=\"form-control\">
                                <label for=\"form1\">Your name</label>
                            </div>
                            <div class=\"md-form\">
                                <i class=\"fa fa-envelope prefix grey-text\"></i>
                                <input type=\"text\" id=\"form2\" class=\"form-control\">
                                <label for=\"form2\">Your email</label>
                            </div>
                            <button class=\"btn btn-blue btn-md\">Submit</button>

                        </div>
                    </div>
                </div>

                <!-- Archieve -->
                <section class=\"wow fadeIn\" data-wow-delay=\"0.4s\">
                    <h4 class=\"font-bold dark-grey-text mb-3\">Archieve</h4>
                    <!--List-->
                    <ul class=\"list mt-3\">
                        <li>
                            <h6 class=\"\">
                                <a href=\"#!\" class=\"grey-text\">August 2016</a>
                            </h6>
                        </li>
                        <li>
                            <h6 class=\"\">
                                <a href=\"#!\" class=\"grey-text\">July 2016</a>
                            </h6>
                        </li>
                        <li>
                            <h6 class=\"\">
                                <a href=\"#!\" class=\"grey-text\">June 2016</a>
                            </h6>
                        </li>
                        <li>
                            <h6 class=\"\">
                                <a href=\"#!\" class=\"grey-text\">May 2016</a>
                            </h6>
                        </li>
                        <li>
                            <h6 class=\"\">
                                <a href=\"#!\" class=\"grey-text\">April 2016</a>
                            </h6>
                        </li>
                        <li>
                            <h6 class=\"\">
                                <a href=\"#!\" class=\"grey-text\">March 2016</a>
                            </h6>
                        </li>
                        <li>
                            <h6 class=\"mb-4\">
                                <a href=\"#!\" class=\"grey-text\">Febuary 2016</a>
                            </h6>
                        </li>
                    </ul>
                    <!--List-->

                    <hr>

                </section>
                <!-- Archieve -->

            </div>
            <!--/.Sidebar-->
        </div>
    </div>
    <!--/.Main layout-->
</main>";
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/pages/blog-homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 66,  103 => 65,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main>
    <!--Main layout-->
    <div class=\"container\">
        <div class=\"row\">

            <!--Main column-->
            <div class=\"col-lg-8\">

                <!--Post-->
                <div class=\"post-wrapper wow fadeIn\" data-wow-delay=\"0.2s\">
                    <!--Post data-->
                    <h1 class=\"h1-responsive dark-grey-text font-bold\">Post title
                        <small class=\"text-muted\">Secondary text</small>
                    </h1>
                    <h6>Written by
                        <a href=\"\">
                            <strong>John Doe</strong>
                        </a>, 30.04.2016</h6>

                    <br>

                    <!--Featured image -->
                    <div class=\"view overlay hm-white-light z-depth-1-half rounded\">
                        <img src=\"https://mdbootstrap.com/img/Photos/Others/images/76.jpg\" class=\"img-fluid\" alt=\"\">
                        <div class=\"mask\">
                        </div>
                    </div>

                    <br>

                    <!--Post excerpt-->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos
                        hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates
                        harum. Repellendus, impedit.</p>

                    <!--\"Read more\" button-->
                    <button class=\"btn btn-blue btn-md\">Read more</button>
                </div>
                <!--/.Post-->

                <hr class=\"mt-5\">

                <!--Post-->
                <div class=\"post-wrapper wow fadeIn\" data-wow-delay=\"0.4s\">
                    <!--Post data-->
                    <h1 class=\"h1-responsive dark-grey-text font-bold mt-5\">Post title
                        <small class=\"text-muted\">Secondary text</small>
                    </h1>
                    <h6>Written by
                        <a href=\"\">
                            <strong>John Doe</strong>
                        </a>, 30.04.2016</h6>

                    <br>

                    <!--Featured image -->
                    <div class=\"view overlay hm-white-light z-depth-1-half rounded\">
                        <img src=\"https://mdbootstrap.com/img/Photos/Others/images/49.jpg\" class=\"img-fluid \" alt=\"\">
                        <div class=\"mask\">
                        </div>
                    </div>

                    <br>

                    <!--Post excerpt-->{% component 'filtermovies' %}
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos
                        hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates
                        harum. Repellendus, impedit.</p>

                    <!--\"Read more\" button-->
                    <button class=\"btn btn-blue btn-md\">Read more</button>
                </div>
                <!--/.Post-->

                <hr class=\"mt-5\">

                <!--Post-->
                <div class=\"post-wrapper wow fadeIn\" data-wow-delay=\"0.6s\">
                    <!--Post data-->
                    <h1 class=\"h1-responsive font-bold dark-grey-text mt-5\">Post title
                        <small class=\"text-muted\">Secondary text</small>
                    </h1>
                    <h6>Written by
                        <a href=\"\">
                            <strong>John Doe</strong>
                        </a>, 30.04.2016</h6>

                    <br>

                    <!--Featured image -->
                    <div class=\"view overlay hm-white-light z-depth-1-half rounded\">
                        <img src=\"https://mdbootstrap.com/img/Photos/Others/images/77.jpg\" class=\"img-fluid\" alt=\"\">
                        <div class=\"mask\">
                        </div>
                    </div>

                    <br>

                    <!--Post excerpt-->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos
                        hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates
                        harum. Repellendus, impedit.</p>

                    <!--\"Read more\" button-->
                    <button class=\"btn btn-blue btn-md\">Read more</button>
                </div>
                <!--/.Post-->

                <hr class=\"mt-5\">

                <!--Pagination-->
                <nav>
                    <ul class=\"pagination d-flex justify-content-center pg-primary wow fadeIn\" data-wow-delay=\"0.2s\">
                        <!--Arrow left-->
                        <li class=\"page-item\">
                            <a class=\"page-link\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                        </li>

                        <!--Numbers-->
                        <li class=\"page-item active\">
                            <a class=\"page-link\">1</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\">2</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\">3</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\">4</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\">5</a>
                        </li>

                        <!--Arrow right-->
                        <li class=\"page-item\">
                            <a class=\"page-link\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!--/.Pagination-->

            </div>

            <!--Sidebar-->
            <div class=\"col-lg-4\">

                <div class=\"widget-wrapper wow fadeIn\" data-wow-delay=\"0.4s\">
                    <h4 class=\"font-bold dark-grey-text\">Categories:</h4>
                    <br>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item active\">Lifestyle</a>
                        <a href=\"#\" class=\"list-group-item\">Music</a>
                        <a href=\"#\" class=\"list-group-item\">Travels</a>
                        <a href=\"#\" class=\"list-group-item\">Fashion</a>
                        <a href=\"#\" class=\"list-group-item\">Parties</a>
                    </div>
                </div>

                <div class=\"widget-wrapper wow fadeIn\" data-wow-delay=\"0.6s\">
                    <h4 class=\"font-bold dark-grey-text\">Subscription form:</h4>
                    <br>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <p>
                                <strong>Subscribe to our newsletter</strong>
                            </p>
                            <p>Once a week we will send you a summary of the most useful news</p>
                            <div class=\"md-form\">
                                <i class=\"fa fa-user prefix grey-text\"></i>
                                <input type=\"text\" id=\"form1\" class=\"form-control\">
                                <label for=\"form1\">Your name</label>
                            </div>
                            <div class=\"md-form\">
                                <i class=\"fa fa-envelope prefix grey-text\"></i>
                                <input type=\"text\" id=\"form2\" class=\"form-control\">
                                <label for=\"form2\">Your email</label>
                            </div>
                            <button class=\"btn btn-blue btn-md\">Submit</button>

                        </div>
                    </div>
                </div>

                <!-- Archieve -->
                <section class=\"wow fadeIn\" data-wow-delay=\"0.4s\">
                    <h4 class=\"font-bold dark-grey-text mb-3\">Archieve</h4>
                    <!--List-->
                    <ul class=\"list mt-3\">
                        <li>
                            <h6 class=\"\">
                                <a href=\"#!\" class=\"grey-text\">August 2016</a>
                            </h6>
                        </li>
                        <li>
                            <h6 class=\"\">
                                <a href=\"#!\" class=\"grey-text\">July 2016</a>
                            </h6>
                        </li>
                        <li>
                            <h6 class=\"\">
                                <a href=\"#!\" class=\"grey-text\">June 2016</a>
                            </h6>
                        </li>
                        <li>
                            <h6 class=\"\">
                                <a href=\"#!\" class=\"grey-text\">May 2016</a>
                            </h6>
                        </li>
                        <li>
                            <h6 class=\"\">
                                <a href=\"#!\" class=\"grey-text\">April 2016</a>
                            </h6>
                        </li>
                        <li>
                            <h6 class=\"\">
                                <a href=\"#!\" class=\"grey-text\">March 2016</a>
                            </h6>
                        </li>
                        <li>
                            <h6 class=\"mb-4\">
                                <a href=\"#!\" class=\"grey-text\">Febuary 2016</a>
                            </h6>
                        </li>
                    </ul>
                    <!--List-->

                    <hr>

                </section>
                <!-- Archieve -->

            </div>
            <!--/.Sidebar-->
        </div>
    </div>
    <!--/.Main layout-->
</main>", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/pages/blog-homepage.htm", "");
    }
}
