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

/* C:\Program Files (x86)\Ampps\www\october/themes/zanor-zanor-mdb-loaded/layouts/basicLandingPage.htm */
class __TwigTemplate_19ee831a0f8ca5f9557b675385af4465c1eaedd7023da30dd06e804f4c87cb8c extends \Twig\Template
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








<!--Intro Section-->
<section class=\"view intro-1 hm-black-slight\" style=\"background: url('https://mdbootstrap.com/img/Photos/Others/images/59.jpg')no-repeat center center; background-size: cover;\">
    <div class=\"full-bg-img flex-center\">
        <div class=\"container\">
            <ul>
                <li>
                    <h1 class=\"display-3 font-bold wow fadeInDown\" data-wow-delay=\"0.2s\">";
        // line 18
        echo twig_escape_filter($this->env, ($context["introTitle"] ?? null), "html", null, true);
        echo "</h1>
                </li>
                <li>
                    <h4 class=\"mt-4 mb-5 wow fadeInDown\">";
        // line 21
        echo twig_escape_filter($this->env, ($context["tagline"] ?? null), "html", null, true);
        echo "</h4>
                </li>
                <li>
                    <a target=\"_blank\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["btn1Link"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-indigo btn-lg wow fadeInLeft\" data-wow-delay=\"0.2s\"
                        rel=\"nofollow\">";
        // line 25
        echo twig_escape_filter($this->env, ($context["btn1Text"] ?? null), "html", null, true);
        echo "</a>
                    <a target=\"_blank\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["btn2Link"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-outline-white btn-lg wow fadeInRight\"
                        data-wow-delay=\"0.2s\" rel=\"nofollow\">";
        // line 27
        echo twig_escape_filter($this->env, ($context["btn2Text"] ?? null), "html", null, true);
        echo "</a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Main container-->
<div class=\"container\">

    
    
    <div class=\"divider-new pt-5\">
        <h2 class=\"h2-responsive indigo-text mx-4 font-bold wow fadeIn\" data-wow-delay=\"0.2s\">
            <strong>";
        // line 41
        echo twig_escape_filter($this->env, ($context["section1Title"] ?? null), "html", null, true);
        echo "</strong>
        </h2>
    </div>
    <!--Section: About-->
    <section id=\"about\" class=\"text-center wow fadeIn\" data-wow-delay=\"0.2s\">
        ";
        // line 46
        echo ($context["section1Text"] ?? null);
        echo "
    </section>
    <!--Section: About-->

    
    <div class=\"divider-new pt-5\">
        <h2 class=\"h2-responsive indigo-text mx-4 font-bold wow fadeIn\">";
        // line 52
        echo twig_escape_filter($this->env, ($context["section2Title"] ?? null), "html", null, true);
        echo "</h2>
    </div>

    <!--Section: Best features-->
    <section id=\"best-features\">

        <div class=\"row pt-3\">
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "Cards", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 60
            echo "
            
            
            
            <div class=\"col-lg-3 mb-r\">
                ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, $context["fields"], "cardURL", [], "any", false, false, false, 65) != "")) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fields"], "cardURL", [], "any", false, false, false, 65), "html", null, true);
                echo "\">";
            }
            // line 66
            echo "                    <!--Card-->
                    <div class=\"card hoverable wow fadeIn\">

                        <!--Card image-->
                        <img class=\"img-fluid\"
                             src=\"";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, $context["fields"], "cardImg", [], "any", false, false, false, 71) == "")) {
                echo "https://mdbootstrap.com/img/Photos/Others/images/72.jpg";
            } else {
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["fields"], "cardImg", [], "any", false, false, false, 71));
            }
            echo "\"
                             alt=\"Card image cap\">

                        <!--Card content-->
                        <div class=\"card-body\">
                            <!--Title-->
                            <h4 class=\"card-title text-center\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fields"], "cardTitle", [], "any", false, false, false, 77), "html", null, true);
            echo "</h4>
                            <hr>
                            <!--Text-->
                            <p class=\"card-text\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fields"], "cardText", [], "any", false, false, false, 80), "html", null, true);
            echo "</p>
                        </div>

                    </div>
                    <!--/.Card-->
                    ";
            // line 85
            if ((twig_get_attribute($this->env, $this->source, $context["fields"], "cardURL", [], "any", false, false, false, 85) != "")) {
                echo "</a>";
            }
            // line 86
            echo "            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </div>

    </section>
    <!--/Section: Best features-->

    
    
    <div class=\"divider-new pt-3\">
        <h2 class=\"h2-responsive indigo-text mx-4 font-bold wow fadeIn\">";
        // line 96
        echo twig_escape_filter($this->env, ($context["section3Title"] ?? null), "html", null, true);
        echo "</h2>
    </div>

    <!--Section: Features v.1-->
    <section class=\"section feature-box text-center\">

        <!--Section description-->
        <div class=\"section-description lead grey-text mb-5 mx-lg-5\">";
        // line 103
        echo ($context["section3Text"] ?? null);
        echo "</div>

        <!--Grid row-->
        <div class=\"row text-center\">
            
            
            
            <!--Grid column-->
            <div class=\"col-md-4 mb-r\">
                <i class=\"";
        // line 112
        echo twig_escape_filter($this->env, ($context["box1Icon"] ?? null), "html", null, true);
        echo "\"></i>
                <h5 class=\"font-bold mt-3\">";
        // line 113
        echo twig_escape_filter($this->env, ($context["box1Title"] ?? null), "html", null, true);
        echo "</h5>
                <p class=\"grey-text\">";
        // line 114
        echo twig_escape_filter($this->env, ($context["box1Text"] ?? null), "html", null, true);
        echo "</p>
            </div>
            <!--Grid column-->

            
            
            
            <!--Grid column-->
            <div class=\"col-md-4 mb-r\">
                <i class=\"";
        // line 123
        echo twig_escape_filter($this->env, ($context["box2Icon"] ?? null), "html", null, true);
        echo "\"></i>
                <h5 class=\"font-bold mt-3\">";
        // line 124
        echo twig_escape_filter($this->env, ($context["box2Title"] ?? null), "html", null, true);
        echo "</h5>
                <p class=\"grey-text\">";
        // line 125
        echo twig_escape_filter($this->env, ($context["box2Text"] ?? null), "html", null, true);
        echo "</p>
            </div>
            <!--Grid column-->

            
            
            
            <!--Grid column-->
            <div class=\"col-md-4 mb-r\">
                <i class=\"";
        // line 134
        echo twig_escape_filter($this->env, ($context["box3Icon"] ?? null), "html", null, true);
        echo "\"></i>
                <h5 class=\"font-bold mt-3\">";
        // line 135
        echo twig_escape_filter($this->env, ($context["box3Title"] ?? null), "html", null, true);
        echo "</h5>
                <p class=\"grey-text\">";
        // line 136
        echo twig_escape_filter($this->env, ($context["box3Text"] ?? null), "html", null, true);
        echo "</p>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </section>
    <!--Section: Features v.1-->

    
    
    
    
    <div class=\"divider-new\">
        <h2 class=\"h2-responsive indigo-text mx-4 font-bold  wow fadeIn\">Contact us</h2>
    </div>

    <!--Section: Contact-->
    <section id=\"contact pb-5\">
        <div class=\"row\">
            <!--First column-->
            <div class=\"col-md-8 mb-5\">
                <div class=\"embed-responsive embed-responsive-16by9 z-depth-1 wow fadeIn\">
                    ";
        // line 160
        echo ($context["contactMap"] ?? null);
        echo "
                </div>
            </div>
            <!--/First column-->

            <!--Second column-->
            <div class=\"col-md-4\">
                <ul class=\"text-center list-unstyled\">
                    <li class=\"wow fadeIn\" data-wow-delay=\"0.2s\">
                        <i class=\"fa fa-map-marker indigo-text fa-2x\"></i>
                        <p>";
        // line 170
        echo twig_escape_filter($this->env, ($context["contactAddress"] ?? null), "html", null, true);
        echo "</p>
                    </li>

                    <li class=\"wow fadeIn mt-5 pt-2\" data-wow-delay=\"0.3s\">
                        <i class=\"fa fa-phone indigo-text fa-2x\"></i>
                        <p>";
        // line 175
        echo twig_escape_filter($this->env, ($context["contactTel"] ?? null), "html", null, true);
        echo "</p>
                    </li>

                    <li class=\"wow fadeIn mt-5 pt-2\" data-wow-delay=\"0.4s\">
                        <i class=\"fa fa-envelope indigo-text fa-2x\"></i>
                        <p>";
        // line 180
        echo twig_escape_filter($this->env, ($context["contactEmail"] ?? null), "html", null, true);
        echo "</p>
                    </li>
                </ul>
            </div>
            <!--/Second column-->
        </div>
    </section>
    <!--Section: Contact-->
</div>
<!--/ Main container-->

";
        // line 191
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/layouts/basicLandingPage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 191,  328 => 180,  320 => 175,  312 => 170,  299 => 160,  272 => 136,  268 => 135,  264 => 134,  252 => 125,  248 => 124,  244 => 123,  232 => 114,  228 => 113,  224 => 112,  212 => 103,  202 => 96,  192 => 88,  185 => 86,  181 => 85,  173 => 80,  167 => 77,  154 => 71,  147 => 66,  141 => 65,  134 => 60,  130 => 59,  120 => 52,  111 => 46,  103 => 41,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  68 => 21,  62 => 18,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'site/head' %}
{% partial 'site/scrollingNavbar' %}









<!--Intro Section-->
<section class=\"view intro-1 hm-black-slight\" style=\"background: url('https://mdbootstrap.com/img/Photos/Others/images/59.jpg')no-repeat center center; background-size: cover;\">
    <div class=\"full-bg-img flex-center\">
        <div class=\"container\">
            <ul>
                <li>
                    <h1 class=\"display-3 font-bold wow fadeInDown\" data-wow-delay=\"0.2s\">{{ introTitle }}</h1>
                </li>
                <li>
                    <h4 class=\"mt-4 mb-5 wow fadeInDown\">{{ tagline }}</h4>
                </li>
                <li>
                    <a target=\"_blank\" href=\"{{ btn1Link }}\" class=\"btn btn-indigo btn-lg wow fadeInLeft\" data-wow-delay=\"0.2s\"
                        rel=\"nofollow\">{{ btn1Text }}</a>
                    <a target=\"_blank\" href=\"{{ btn2Link }}\" class=\"btn btn-outline-white btn-lg wow fadeInRight\"
                        data-wow-delay=\"0.2s\" rel=\"nofollow\">{{ btn2Text }}</a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Main container-->
<div class=\"container\">

    
    
    <div class=\"divider-new pt-5\">
        <h2 class=\"h2-responsive indigo-text mx-4 font-bold wow fadeIn\" data-wow-delay=\"0.2s\">
            <strong>{{ section1Title }}</strong>
        </h2>
    </div>
    <!--Section: About-->
    <section id=\"about\" class=\"text-center wow fadeIn\" data-wow-delay=\"0.2s\">
        {{ section1Text|raw }}
    </section>
    <!--Section: About-->

    
    <div class=\"divider-new pt-5\">
        <h2 class=\"h2-responsive indigo-text mx-4 font-bold wow fadeIn\">{{ section2Title }}</h2>
    </div>

    <!--Section: Best features-->
    <section id=\"best-features\">

        <div class=\"row pt-3\">
            {% for fields in extraData.Cards %}

            
            
            
            <div class=\"col-lg-3 mb-r\">
                {% if fields.cardURL != '' %}<a href=\"{{ fields.cardURL }}\">{% endif %}
                    <!--Card-->
                    <div class=\"card hoverable wow fadeIn\">

                        <!--Card image-->
                        <img class=\"img-fluid\"
                             src=\"{% if fields.cardImg == '' %}https://mdbootstrap.com/img/Photos/Others/images/72.jpg{% else %}{{ fields.cardImg|media }}{% endif %}\"
                             alt=\"Card image cap\">

                        <!--Card content-->
                        <div class=\"card-body\">
                            <!--Title-->
                            <h4 class=\"card-title text-center\">{{ fields.cardTitle }}</h4>
                            <hr>
                            <!--Text-->
                            <p class=\"card-text\">{{ fields.cardText }}</p>
                        </div>

                    </div>
                    <!--/.Card-->
                    {% if fields.cardURL != '' %}</a>{% endif %}
            </div>
{% endfor %}
        </div>

    </section>
    <!--/Section: Best features-->

    
    
    <div class=\"divider-new pt-3\">
        <h2 class=\"h2-responsive indigo-text mx-4 font-bold wow fadeIn\">{{ section3Title }}</h2>
    </div>

    <!--Section: Features v.1-->
    <section class=\"section feature-box text-center\">

        <!--Section description-->
        <div class=\"section-description lead grey-text mb-5 mx-lg-5\">{{ section3Text|raw }}</div>

        <!--Grid row-->
        <div class=\"row text-center\">
            
            
            
            <!--Grid column-->
            <div class=\"col-md-4 mb-r\">
                <i class=\"{{ box1Icon }}\"></i>
                <h5 class=\"font-bold mt-3\">{{ box1Title }}</h5>
                <p class=\"grey-text\">{{ box1Text }}</p>
            </div>
            <!--Grid column-->

            
            
            
            <!--Grid column-->
            <div class=\"col-md-4 mb-r\">
                <i class=\"{{ box2Icon }}\"></i>
                <h5 class=\"font-bold mt-3\">{{ box2Title }}</h5>
                <p class=\"grey-text\">{{ box2Text }}</p>
            </div>
            <!--Grid column-->

            
            
            
            <!--Grid column-->
            <div class=\"col-md-4 mb-r\">
                <i class=\"{{ box3Icon }}\"></i>
                <h5 class=\"font-bold mt-3\">{{ box3Title }}</h5>
                <p class=\"grey-text\">{{ box3Text }}</p>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </section>
    <!--Section: Features v.1-->

    
    
    
    
    <div class=\"divider-new\">
        <h2 class=\"h2-responsive indigo-text mx-4 font-bold  wow fadeIn\">Contact us</h2>
    </div>

    <!--Section: Contact-->
    <section id=\"contact pb-5\">
        <div class=\"row\">
            <!--First column-->
            <div class=\"col-md-8 mb-5\">
                <div class=\"embed-responsive embed-responsive-16by9 z-depth-1 wow fadeIn\">
                    {{ contactMap|raw }}
                </div>
            </div>
            <!--/First column-->

            <!--Second column-->
            <div class=\"col-md-4\">
                <ul class=\"text-center list-unstyled\">
                    <li class=\"wow fadeIn\" data-wow-delay=\"0.2s\">
                        <i class=\"fa fa-map-marker indigo-text fa-2x\"></i>
                        <p>{{ contactAddress }}</p>
                    </li>

                    <li class=\"wow fadeIn mt-5 pt-2\" data-wow-delay=\"0.3s\">
                        <i class=\"fa fa-phone indigo-text fa-2x\"></i>
                        <p>{{ contactTel }}</p>
                    </li>

                    <li class=\"wow fadeIn mt-5 pt-2\" data-wow-delay=\"0.4s\">
                        <i class=\"fa fa-envelope indigo-text fa-2x\"></i>
                        <p>{{ contactEmail }}</p>
                    </li>
                </ul>
            </div>
            <!--/Second column-->
        </div>
    </section>
    <!--Section: Contact-->
</div>
<!--/ Main container-->

{% partial 'site/footer' %}", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/layouts/basicLandingPage.htm", "");
    }
}
