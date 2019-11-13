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

/* C:\Program Files (x86)\Ampps\www\october/themes/zanor-zanor-mdb-loaded/partials/sideMenu.htm */
class __TwigTemplate_28d42d0472178dec3fc4a2ba1e3455a88b23c14c88825ab9da91817b5ac72db1 extends \Twig\Template
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
        $context["links"] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "resetMenu", [0 => ($context["getMenu"] ?? null)], "method", false, false, false, 1);
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 2)) {
            // line 3
            echo "    
    <div class=\"widget-wrapper\">
        <h4 class=\"dark-grey-text\">";
            // line 5
            echo twig_escape_filter($this->env, twig_replace_filter(($context["subMenu"] ?? null), ["-" => " "]), "html", null, true);
            echo "</h4>
        <div class=\"list-group\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 8), "html", null, true);
                echo "\" class=\"list-group-item ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8) == twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 8))) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 8), "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </div>
    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/partials/sideMenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  54 => 8,  50 => 7,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set links = staticMenu.resetMenu( getMenu ) %}
{% if staticMenu.menuItems %}
    
    <div class=\"widget-wrapper\">
        <h4 class=\"dark-grey-text\">{{ subMenu|replace({'-': ' '}) }}</h4>
        <div class=\"list-group\">
            {% for item in staticMenu.menuItems %}
                <a href=\"{{ item.url }}\" class=\"list-group-item {% if this.page.title == item.title %}active{% endif %}\">{{ item.title }}</a>
            {% endfor %}
        </div>
    </div>

{% endif %}", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/partials/sideMenu.htm", "");
    }
}
