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

/* C:\Program Files (x86)\Ampps\www\october/themes/porpas/pages/movie-filter-ajax.htm */
class __TwigTemplate_2be9439a1872ce0fd27fc158bfec7380377e083c7399cb8c90f2c6d914373d86 extends \Twig\Template
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
        echo "<h2 class=\"ui header\" style=\"margin-top: 40px\">Filter Movies</h2>

<div class=\"ui grid\">


    <div class=\"five wide column\">
        ";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onFilterMovies", ["update" => ["movies/movies" => "#partialMovies"]]]);
        echo "
        <div id=\"MoviesFilter\" class=\"movies-filter ui form\">
            <div class=\"ui segment vertical\">
                <label>Genres</label>
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 12
            echo "                <div class=\"field\">
                    <div class=\"ui checkbox\">
                        <input type=\"checkbox\" name=\"Filter[genres]\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\"/>
                        <label>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "genre_title", [], "any", false, false, false, 15), "html", null, true);
            echo "</label>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                <div class=\"field\">
                    <label>Sorting</label>
                    <select class=\"ui fluid dropdown\" name=\"Filter[sort]\">
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sortOptions"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["option"]) {
            // line 23
            echo "
                        <option value=\"";
            // line 24
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                    </select>
                </div>

                <div class=\"field\">
                    <label>Year</label>
                    <!--                    <select class=\"ui fluid dropdown\" name=\"Filter[year]\">-->
                    <!--                        <option value=\"\">Select Year</option>-->
                    <!--                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["movies"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            echo "-->
                    <!--                        <option value=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "year", [], "any", false, false, false, 34), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "year", [], "any", false, false, false, 34), "html", null, true);
            echo "</option>-->
                    <!--                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "-->
                    <!--                    </select>-->

                    <select class=\"ui fluid dropdown\" name=\"Filter[year]\">
                        <option value=\"\">Select Year</option>
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["years"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 41
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </select>
                </div>

                <div class=\"field\" id=\"partialPaginate\">
                    ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("movies/paginate"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "                </div>
            </div>
        </div>
        ";
        // line 51
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
    </div>

    <div class=\"eleven wide column\">
        <div id=\"partialMovies\">
            ";
        // line 56
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("movies/movies"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "        </div>
    </div>


</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/porpas/pages/movie-filter-ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 57,  166 => 56,  158 => 51,  153 => 48,  149 => 47,  143 => 43,  132 => 41,  128 => 40,  121 => 35,  111 => 34,  105 => 33,  96 => 26,  86 => 24,  83 => 23,  79 => 22,  74 => 19,  64 => 15,  60 => 14,  56 => 12,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2 class=\"ui header\" style=\"margin-top: 40px\">Filter Movies</h2>

<div class=\"ui grid\">


    <div class=\"five wide column\">
        {{ form_ajax('onFilterMovies', { update: { 'movies/movies': '#partialMovies' } }) }}
        <div id=\"MoviesFilter\" class=\"movies-filter ui form\">
            <div class=\"ui segment vertical\">
                <label>Genres</label>
                {% for genre in genres %}
                <div class=\"field\">
                    <div class=\"ui checkbox\">
                        <input type=\"checkbox\" name=\"Filter[genres]\" value=\"{{ genre.id }}\"/>
                        <label>{{genre.genre_title}}</label>
                    </div>
                </div>
                {% endfor %}
                <div class=\"field\">
                    <label>Sorting</label>
                    <select class=\"ui fluid dropdown\" name=\"Filter[sort]\">
                        {% for code, option in sortOptions %}

                        <option value=\"{{code}}\">{{ option }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"field\">
                    <label>Year</label>
                    <!--                    <select class=\"ui fluid dropdown\" name=\"Filter[year]\">-->
                    <!--                        <option value=\"\">Select Year</option>-->
                    <!--                        {% for movie in movies|sort %}-->
                    <!--                        <option value=\"{{movie.year}}\">{{ movie.year }}</option>-->
                    <!--                        {% endfor %}-->
                    <!--                    </select>-->

                    <select class=\"ui fluid dropdown\" name=\"Filter[year]\">
                        <option value=\"\">Select Year</option>
                        {% for year in years |sort%}
                        <option value=\"{{year}}\">{{ year }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"field\" id=\"partialPaginate\">
                    {% partial 'movies/paginate' %}
                </div>
            </div>
        </div>
        {{ form_close() }}
    </div>

    <div class=\"eleven wide column\">
        <div id=\"partialMovies\">
            {% partial 'movies/movies' %}
        </div>
    </div>


</div>", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/porpas/pages/movie-filter-ajax.htm", "");
    }
}
