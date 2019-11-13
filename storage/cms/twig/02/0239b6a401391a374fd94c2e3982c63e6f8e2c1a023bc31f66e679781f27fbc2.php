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

/* C:\Program Files (x86)\Ampps\www\october/themes/zanor-zanor-mdb-loaded/partials/blog/post.htm */
class __TwigTemplate_3d1b1bf999da8b04a17e508dde0fcad2081411c446097bd6f8e1fb7813ba7179 extends \Twig\Template
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
        echo "<div class=\"container\">
    <!--row-->
    <div class=\"row wow fadeIn\" data-wow-delay=\"0.2s\">
        <div class=\"col-md-12\">
            <!--Card-->
            <div class=\"card\">

                ";
        // line 8
        $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 8), "first", [], "any", false, false, false, 8);
        // line 9
        echo "                <!--Card image-->
                <div class=\"view overlay hm-white-slight\">
                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", [], "any", false, false, false, 11), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "description", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
                    <div class=\"mask\"></div>
                </div>

                <!--Card content-->
                <div class=\"card-body mb-3\">
                    <!--Title-->
                    <h3 class=\"card-title text-center mt-2 pb-4\">
                        <strong>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</strong>
                    </h3>
                    <!--Text-->
                    <div class=\"card-text\">
                        ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 23);
        echo "
                    </div>
                </div>

                <dif class=\"card-footer text-muted\">
                    Posted";
        // line 28
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 28), "count", [], "any", false, false, false, 28)) {
            echo " in
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 29));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 30
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 30), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 30)) {
                    echo ", ";
                }
                // line 31
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                    ";
        }
        // line 33
        echo "                    <small class=\"float-right\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 33), "d M Y"), "html", null, true);
        echo "</small>
                </dif>

            </div>
            <!--/.Card-->
        </div>
    </div>
    <!--/.row-->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/partials/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  124 => 32,  110 => 31,  101 => 30,  84 => 29,  80 => 28,  72 => 23,  65 => 19,  52 => 11,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <!--row-->
    <div class=\"row wow fadeIn\" data-wow-delay=\"0.2s\">
        <div class=\"col-md-12\">
            <!--Card-->
            <div class=\"card\">

                {% set image = post.featured_images.first %}
                <!--Card image-->
                <div class=\"view overlay hm-white-slight\">
                    <img src=\"{{ image.path }}\" class=\"img-fluid\" alt=\"{{ image.description }}\">
                    <div class=\"mask\"></div>
                </div>

                <!--Card content-->
                <div class=\"card-body mb-3\">
                    <!--Title-->
                    <h3 class=\"card-title text-center mt-2 pb-4\">
                        <strong>{{ post.title}}</strong>
                    </h3>
                    <!--Text-->
                    <div class=\"card-text\">
                        {{ post.content_html|raw }}
                    </div>
                </div>

                <dif class=\"card-footer text-muted\">
                    Posted{% if post.categories.count %} in
                        {% for category in post.categories %}
                            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                        {% endfor %}
                    {% endif %}
                    <small class=\"float-right\">{{ post.published_at|date('d M Y') }}</small>
                </dif>

            </div>
            <!--/.Card-->
        </div>
    </div>
    <!--/.row-->
</div>", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/zanor-zanor-mdb-loaded/partials/blog/post.htm", "");
    }
}
