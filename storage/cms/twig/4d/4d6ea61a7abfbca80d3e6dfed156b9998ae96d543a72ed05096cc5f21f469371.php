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

/* C:\Program Files (x86)\Ampps\www\october/themes/porpas/partials/movies/movies.htm */
class __TwigTemplate_41b5b1eaaf84e194987afb7ce72867aa4bcd05019530bbe34210bae355dafb26 extends \Twig\Template
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
        if (twig_length_filter($this->env, ($context["movies"] ?? null))) {
            // line 2
            echo "
";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                // line 4
                echo "<div class=\"ui segment vertical\">
    <h3 class=\"ui header\">";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, false, 5), "html", null, true);
                echo "</h3>
    <div class=\"ui\">";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "year", [], "any", false, false, false, 6), "html", null, true);
                echo "</div>

    <div class=\"ui segment\">
        <ul class=\"ui list bulleted horizontal\">
            ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "genres", [], "any", false, false, false, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                    // line 11
                    echo "            <li class=\"item\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "genre_title", [], "any", false, false, false, 11), "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "        </ul>
    </div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
";
        } else {
            // line 19
            echo "
<div class=\"ui message text-center\">
    <p>
        There are no movies that match the criteria.
    </p>
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/porpas/partials/movies/movies.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  82 => 17,  73 => 13,  64 => 11,  60 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if movies|length %}

{% for movie in movies %}
<div class=\"ui segment vertical\">
    <h3 class=\"ui header\">{{movie.name}}</h3>
    <div class=\"ui\">{{ movie.year }}</div>

    <div class=\"ui segment\">
        <ul class=\"ui list bulleted horizontal\">
            {% for genre in movie.genres %}
            <li class=\"item\">{{ genre.genre_title }}</li>
            {% endfor %}
        </ul>
    </div>
</div>
{% endfor %}

{% else %}

<div class=\"ui message text-center\">
    <p>
        There are no movies that match the criteria.
    </p>
</div>

{% endif %}", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/porpas/partials/movies/movies.htm", "");
    }
}
