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

/* C:\Program Files (x86)\Ampps\www\october/themes/zanor-zanor-mdb-loaded/layouts/withSidebar.htm */
class __TwigTemplate_007a044f7e8102dc7a24fe5e4235acdff527319a8d6ccdf07d54425c5fc482f6 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
<div class=\"container mt-2 px-sm-3\">
    <div class=\"row no-gutters\">
        <div class=\"col-md-3 d-none d-md-block\">
            ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "        </div>
        <div class=\"col-md-9 pt-1 p-sm-3\">
            <h4 class=\"h4-responsive\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h4>
            <hr>
            ";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 13
        echo "        </div>
        <div class=\"col-md-3 pt-3 d-md-none d-sm-block\">
            ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "        </div>
    </div>
</div>

";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/layouts/withSidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  74 => 16,  70 => 15,  66 => 13,  64 => 12,  59 => 10,  55 => 8,  51 => 7,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'site/head' %}
{% partial 'site/nav' %}

<div class=\"container mt-2 px-sm-3\">
    <div class=\"row no-gutters\">
        <div class=\"col-md-3 d-none d-md-block\">
            {% partial 'sidebar' %}
        </div>
        <div class=\"col-md-9 pt-1 p-sm-3\">
            <h4 class=\"h4-responsive\">{{ this.page.title }}</h4>
            <hr>
            {% page %}
        </div>
        <div class=\"col-md-3 pt-3 d-md-none d-sm-block\">
            {% partial 'sidebar' %}
        </div>
    </div>
</div>

{% partial 'site/footer' %}", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/layouts/withSidebar.htm", "");
    }
}
