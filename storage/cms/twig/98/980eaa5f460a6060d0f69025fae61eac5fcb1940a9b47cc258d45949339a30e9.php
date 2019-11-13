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

/* C:\Program Files (x86)\Ampps\www\october/themes/zanor-zanor-mdb-loaded/partials/blog/3column.htm */
class __TwigTemplate_8b22c13b68a00aadbcb7aea4b38d2e3f1e5af6fa283d285baf192fcb2275a0a8 extends \Twig\Template
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
        echo "<div class=\"row mt-5 wow fadeIn\" data-wow-delay=\"0.2s\">

    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "    <div class=\"col-lg-4\">

        <!--Card-->
        <div class=\"card hoverable mb-r\">
            ";
            // line 8
            $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 8), "first", [], "any", false, false, false, 8);
            // line 9
            echo "            <!--Card image-->
            <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
                <img data-src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "filename", [], "any", false, false, false, 11), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", [], "any", false, false, false, 11), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "description", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
            </a>

            <!--Card content-->
            <div class=\"card-body\">
                <!--Title-->
                <h4 class=\"card-title dark-grey-text\">
                    <strong>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</strong>
                </h4>
                <h6 class=\"blue-text font-small font-bold\">
                    <strong>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 21), "M d, Y"), "html", null, true);
            echo "</strong>
                </h6>
                <!--Text-->
                <p class=\"card-text\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 24);
            echo "</p>
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 25), "html", null, true);
            echo "\" class=\"btn btn-primary btn-md\">Button</a>
            </div>

        </div>
        <!--/.Card-->

    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/partials/blog/3column.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 33,  90 => 25,  86 => 24,  80 => 21,  74 => 18,  60 => 11,  56 => 10,  53 => 9,  51 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row mt-5 wow fadeIn\" data-wow-delay=\"0.2s\">

    {% for post in posts %}
    <div class=\"col-lg-4\">

        <!--Card-->
        <div class=\"card hoverable mb-r\">
            {% set image = post.featured_images.first %}
            <!--Card image-->
            <a href=\"{{ post.url }}\">
                <img data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" class=\"img-fluid\" alt=\"{{ image.description }}\">
            </a>

            <!--Card content-->
            <div class=\"card-body\">
                <!--Title-->
                <h4 class=\"card-title dark-grey-text\">
                    <strong>{{ post.title }}</strong>
                </h4>
                <h6 class=\"blue-text font-small font-bold\">
                    <strong>{{ post.published_at|date('M d, Y') }}</strong>
                </h6>
                <!--Text-->
                <p class=\"card-text\">{{ post.summary|raw }}</p>
                <a href=\"{{ post.url }}\" class=\"btn btn-primary btn-md\">Button</a>
            </div>

        </div>
        <!--/.Card-->

    </div>
    {% endfor %}
    
</div>", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/partials/blog/3column.htm", "");
    }
}
