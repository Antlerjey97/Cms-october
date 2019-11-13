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

/* C:\Program Files (x86)\Ampps\www\october/themes/zanor-zanor-mdb-loaded/partials/blog/pagination.htm */
class __TwigTemplate_a3a090316f09393f0a4c6252bb53c0955faa51624fac8251f14e77db0977128f extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 1) > 1)) {
            // line 2
            echo "    <nav class=\"my-4 d-flex justify-content-center wow fadeIn\" data-wow-delay=\"0.2s\">
        <ul class=\"pagination\">
            ";
            // line 4
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 4) > 1)) {
                // line 5
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 6
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "baseFileName", [], "any", false, false, false, 6), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 6) - 1)]);
                echo "\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                </li>
            ";
            }
            // line 12
            echo "
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 13)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 14
                echo "                <li class=\"page-item ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 14) == $context["page"])) ? ("active") : (null));
                echo "\">
                    <a class=\"page-link\" href=\"";
                // line 15
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 15), "baseFileName", [], "any", false, false, false, 15), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
            ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 19) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 19))) {
                // line 20
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 21
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 21), "baseFileName", [], "any", false, false, false, 21), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 21) + 1)]);
                echo "\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </li>
            ";
            }
            // line 27
            echo "        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/partials/blog/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  88 => 21,  85 => 20,  83 => 19,  80 => 18,  69 => 15,  64 => 14,  60 => 13,  57 => 12,  48 => 6,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if posts.lastPage > 1 %}
    <nav class=\"my-4 d-flex justify-content-center wow fadeIn\" data-wow-delay=\"0.2s\">
        <ul class=\"pagination\">
            {% if posts.currentPage > 1 %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                </li>
            {% endif %}

            {% for page in 1..posts.lastPage %}
                <li class=\"page-item {{ posts.currentPage == page ? 'active' : null }}\">
                    <a class=\"page-link\" href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
                </li>
            {% endfor %}

            {% if posts.lastPage > posts.currentPage %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </li>
            {% endif %}
        </ul>
    </nav>
{% endif %}", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/partials/blog/pagination.htm", "");
    }
}
