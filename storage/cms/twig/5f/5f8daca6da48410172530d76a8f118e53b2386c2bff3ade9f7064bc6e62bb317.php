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

/* C:\Program Files (x86)\Ampps\www\october/themes/porpas/partials/header.htm */
class __TwigTemplate_fc9a596549540d0e94019c8b80de1399cf0731e25343dda37f7722308db47544 extends \Twig\Template
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
        echo "<header class=\"main-header\">
    <div class=\"container clearfix\">
        <h1 class=\"logo\">October Movies</h1>


        <nav class=\"main-nav\">
            <ul>
                <li><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">Home Page</a></li>
                <li><a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("movies");
        echo "\">movies</a></li>
                <li><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("actor-add");
        echo "\">Add Actor</a></li>
                <li><a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a></li>

                ";
        // line 13
        if ( !($context["user"] ?? null)) {
            // line 14
            echo "                <li><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">Login</a></li>
                ";
        } else {
            // line 16
            echo "                <li><a href=\"\">My Profile</a></li>
                ";
        }
        // line 18
        echo "                ";
        if (($context["user"] ?? null)) {
            // line 19
            echo "                <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
                ";
        }
        // line 21
        echo "
            </ul>
        </nav>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/porpas/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  78 => 19,  75 => 18,  71 => 16,  65 => 14,  63 => 13,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"main-header\">
    <div class=\"container clearfix\">
        <h1 class=\"logo\">October Movies</h1>


        <nav class=\"main-nav\">
            <ul>
                <li><a href=\"{{'homepage'|page}}\">Home Page</a></li>
                <li><a href=\"{{'movies'|page}}\">movies</a></li>
                <li><a href=\"{{ 'actor-add'|page }}\">Add Actor</a></li>
                <li><a href=\"{{ 'contact'|page }}\">Contact</a></li>

                {% if not user%}
                <li><a href=\"{{ 'login'|page }}\">Login</a></li>
                {% else %}
                <li><a href=\"\">My Profile</a></li>
                {% endif%}
                {% if user %}
                <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
                {% endif %}

            </ul>
        </nav>
    </div>
</header>", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/porpas/partials/header.htm", "");
    }
}
