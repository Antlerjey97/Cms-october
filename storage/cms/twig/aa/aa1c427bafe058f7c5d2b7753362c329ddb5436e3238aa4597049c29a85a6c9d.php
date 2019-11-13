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

/* C:\Program Files (x86)\Ampps\www\october/themes/zanor-zanor-mdb-loaded/partials/blog/1column.htm */
class __TwigTemplate_f87fa40351ecadd3274fcfeda2243df7a9478f6f619ca4a67bb0ba470e9aec47 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "<div class=\"row mt-5 wow fadeIn\" data-wow-delay=\"0.2s\">
    <!--Featured image-->
    ";
            // line 4
            $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 4), "first", [], "any", false, false, false, 4);
            // line 5
            echo "    <div class=\"col-lg-7\">
        <div class=\"view overlay hm-white-light z-depth-1 rounded\">
            <img data-src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "filename", [], "any", false, false, false, 7), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", [], "any", false, false, false, 7), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "description", [], "any", false, false, false, 7), "html", null, true);
            echo "\">
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
                <div class=\"mask\"></div>
            </a>
        </div>
    </div>
    <!--/.Featured image-->

    <!--Post excerpt-->
    <div class=\"col-lg-5\">
        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
            <h2 class=\"post-title font-bold\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</h2>
        </a>
        <h6 class=\"dark-grey-text font-bold font-small\">";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 20), "M d, Y"), "html", null, true);
            echo "</h6>
        <p class=\"my-4 dark-grey-text\">";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 21);
            echo "</p>
        <div class=\"read-more\">
            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 23), "html", null, true);
            echo "\" class=\"btn btn-primary btn-md\">Read more</a>
        </div>
    </div>
    <!--/.Post excerpt-->
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/partials/blog/1column.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  84 => 21,  80 => 20,  75 => 18,  71 => 17,  59 => 8,  51 => 7,  47 => 5,  45 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for post in posts %}
<div class=\"row mt-5 wow fadeIn\" data-wow-delay=\"0.2s\">
    <!--Featured image-->
    {% set image = post.featured_images.first %}
    <div class=\"col-lg-7\">
        <div class=\"view overlay hm-white-light z-depth-1 rounded\">
            <img data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" class=\"img-fluid\" alt=\"{{ image.description }}\">
            <a href=\"{{ post.url }}\">
                <div class=\"mask\"></div>
            </a>
        </div>
    </div>
    <!--/.Featured image-->

    <!--Post excerpt-->
    <div class=\"col-lg-5\">
        <a href=\"{{ post.url }}\">
            <h2 class=\"post-title font-bold\">{{ post.title }}</h2>
        </a>
        <h6 class=\"dark-grey-text font-bold font-small\">{{ post.published_at|date('M d, Y') }}</h6>
        <p class=\"my-4 dark-grey-text\">{{ post.summary|raw }}</p>
        <div class=\"read-more\">
            <a href=\"{{ post.url }}\" class=\"btn btn-primary btn-md\">Read more</a>
        </div>
    </div>
    <!--/.Post excerpt-->
</div>
{% endfor %}", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/partials/blog/1column.htm", "");
    }
}
