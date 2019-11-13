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

/* C:\Program Files (x86)\Ampps\www\october/themes/porpas/pages/fitler-movies.htm */
class __TwigTemplate_ed2072afc429a90caad9df7a4dd3094bb948026f170b5f1a04b177fe8973cc77 extends \Twig\Template
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
        $context["movies"] = twig_get_attribute($this->env, $this->source, ($context["filtermovies"] ?? null), "movies", [], "any", false, false, false, 1);
        // line 2
        $context["genres"] = twig_get_attribute($this->env, $this->source, ($context["filtermovies"] ?? null), "genres", [], "any", false, false, false, 2);
        // line 3
        echo "<form method=\"get\" action=\"";
        echo url("fitler-movies");
        echo "\">

    <div>
        <label>Year</label>
        <select name=\"year\">
            <option value=\"\">Any</option>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 10
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "year", [], "any", false, false, false, 10), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "year", [], "any", false, false, false, 10), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
        </select>

        <label>Genres</label>
        <select name=\"genre\">
            <option value=\"\">Any</option>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 19
            echo "            <option value=\"genre.slug\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "genre_title", [], "any", false, false, false, 19), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        </select>
    </div>
    <button type=\"submit\" class=\"btn-success\">Filter</button>
</form>

<h2> Filter Movies</h2>
<ul class=\"movie-list\">
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 30
            echo "    <li><h3>
        <a href=\"movie/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "slug", [], "any", false, false, false, 31), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "year", [], "any", false, false, false, 31), "html", null, true);
            echo "</a>


        <br>


        <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movie"], "poster", [], "any", false, false, false, 37), "path", [], "any", false, false, false, 37), "html", null, true);
            echo "\" alt=\"\">
        ";
            // line 38
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["movie"], "desicription", [], "any", false, false, false, 38), 300]);
            echo "</h3>


        <br><br>
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "genres", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 43
                echo "        <small>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "genre_title", [], "any", false, false, false, 43), "html", null, true);
                echo "</small>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "
    <li class=\"no-data\">No Movies found</li>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/porpas/pages/fitler-movies.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 47,  142 => 45,  133 => 43,  129 => 42,  122 => 38,  118 => 37,  105 => 31,  102 => 30,  97 => 29,  87 => 21,  78 => 19,  74 => 18,  66 => 12,  55 => 10,  51 => 9,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%set movies = filtermovies.movies %}
{%set genres = filtermovies.genres %}
<form method=\"get\" action=\"{{url('fitler-movies')}}\">

    <div>
        <label>Year</label>
        <select name=\"year\">
            <option value=\"\">Any</option>
            {% for movie in movies%}
            <option value=\"{{movie.year}}\">{{movie.year}}</option>
            {% endfor%}

        </select>

        <label>Genres</label>
        <select name=\"genre\">
            <option value=\"\">Any</option>
            {% for genre in genres%}
            <option value=\"genre.slug\">{{genre.genre_title}}</option>
            {% endfor%}

        </select>
    </div>
    <button type=\"submit\" class=\"btn-success\">Filter</button>
</form>

<h2> Filter Movies</h2>
<ul class=\"movie-list\">
    {% for movie in movies %}
    <li><h3>
        <a href=\"movie/{{movie.slug}}\"> {{movie.name }}-{{movie.year}}</a>


        <br>


        <img src=\"{{movie.poster.path }}\" alt=\"\">
        {{html_limit(movie.desicription,300)|raw}}</h3>


        <br><br>
        {% for genre in movie.genres%}
        <small>{{genre.genre_title}}</small>
        {% endfor%}
    </li>
    {% else %}

    <li class=\"no-data\">No Movies found</li>


    {% endfor %}", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/porpas/pages/fitler-movies.htm", "");
    }
}
