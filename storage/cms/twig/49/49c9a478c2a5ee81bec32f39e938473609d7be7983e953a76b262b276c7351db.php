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

/* C:\Program Files (x86)\Ampps\www\october/themes/porpas/partials/movies/paginate.htm */
class __TwigTemplate_754e8608de84f9ebbeb7fba18733241f89f122ba2e759093d682ded753754512 extends \Twig\Template
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
        echo "<label>Page</label>
<select class=\"ui fluid dropdown\" name=\"Filter[page]\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "    ";
            if (($context["i"] == ($context["page"] ?? null))) {
                // line 5
                echo "    <option value=\"";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
                echo "</option>
    ";
            } else {
                // line 7
                echo "    <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
    ";
            }
            // line 9
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</select>";
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/porpas/partials/movies/paginate.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  64 => 9,  56 => 7,  48 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<label>Page</label>
<select class=\"ui fluid dropdown\" name=\"Filter[page]\">
    {% for i in 1..pages %}
    {%  if i == page %}
    <option value=\"{{page}}\" selected>{{ page }}</option>
    {% else %}
    <option value=\"{{i}}\">{{ i }}</option>
    {% endif %}
    {% endfor %}
</select>", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/porpas/partials/movies/paginate.htm", "");
    }
}
