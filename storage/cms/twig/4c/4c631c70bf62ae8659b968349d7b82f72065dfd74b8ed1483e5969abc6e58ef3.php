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

/* C:\Program Files (x86)\Ampps\www\october/themes/zanor-zanor-mdb-loaded/partials/blogcategories/default.htm */
class __TwigTemplate_ebc4e5e9ce22cd643f47896aaf2426e69eec56557f91bdc2da0d3ce345806f51 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categories", [], "any", false, false, false, 1)) {
            // line 2
            echo "<div class=\"widget-wrapper wow fadeIn\" data-wow-delay=\"0.4s\">
    <h4 class=\"font-bold dark-grey-text\">Categories:</h4>
    <br>
    <div class=\"list-group\">
        ";
            // line 6
            $context["categories"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categories", [], "any", false, false, false, 6);
            // line 7
            echo "        ";
            $context["currentCategorySlug"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentCategorySlug", [], "any", false, false, false, 7);
            // line 8
            echo "        
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 10
                echo "            ";
                $context["postCount"] = twig_get_attribute($this->env, $this->source, $context["category"], "post_count", [], "any", false, false, false, 10);
                // line 11
                echo "                <a class=\"font-bold list-group-item ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 11) == ($context["currentCategorySlug"] ?? null))) {
                    echo "active";
                }
                echo "\"
                   href=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 12), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12), "html", null, true);
                echo " 
                    ";
                // line 13
                if (($context["postCount"] ?? null)) {
                    // line 14
                    echo "                        <span class=\"badge badge-primary float-right\">";
                    echo twig_escape_filter($this->env, ($context["postCount"] ?? null), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 16
                echo "                </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/partials/blogcategories/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  81 => 16,  75 => 14,  73 => 13,  67 => 12,  60 => 11,  57 => 10,  53 => 9,  50 => 8,  47 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.categories %}
<div class=\"widget-wrapper wow fadeIn\" data-wow-delay=\"0.4s\">
    <h4 class=\"font-bold dark-grey-text\">Categories:</h4>
    <br>
    <div class=\"list-group\">
        {% set categories = __SELF__.categories %}
        {% set currentCategorySlug = __SELF__.currentCategorySlug %}
        
        {% for category in categories %}
            {% set postCount = category.post_count %}
                <a class=\"font-bold list-group-item {% if category.slug == currentCategorySlug %}active{% endif %}\"
                   href=\"{{ category.url }}\">{{ category.name }} 
                    {% if postCount %}
                        <span class=\"badge badge-primary float-right\">{{ postCount }}</span>
                    {% endif %}
                </a>
        {% endfor %}
    </div>
</div>
{% endif %}", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/partials/blogcategories/default.htm", "");
    }
}
