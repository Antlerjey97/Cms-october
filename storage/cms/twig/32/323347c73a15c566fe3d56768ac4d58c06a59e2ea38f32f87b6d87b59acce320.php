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

/* C:\Program Files (x86)\Ampps\www\october/plugins/october/demo/components/todo/default.htm */
class __TwigTemplate_8be0ee1a4145553b128f30601783ac638e06505f824746f3010817a2d223a23e extends \Twig\Template
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
        echo "<form
    data-request=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onAddItem\"
    data-request-update=\"'";
        // line 3
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::list': '#result'\"
    data-request-success=\"\$('#input-item').val('')\"
    data-request-flash>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">To Do List</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"input-group\">
                <input type=\"text\" id=\"input-item\" class=\"form-control\" value=\"\" name=\"newItem\" placeholder=\"What needs to be done?\"> 
                <span class=\"input-group-btn\">
                    <button type=\"submit\" class=\"btn btn btn-primary\" data-attach-loading>Add</button>
                </span>
            </div>
        </div>
        <ul class=\"list-group\" id=\"result\">
        </ul>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/plugins/october/demo/components/todo/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form
    data-request=\"{{ __SELF__ }}::onAddItem\"
    data-request-update=\"'{{ __SELF__ }}::list': '#result'\"
    data-request-success=\"\$('#input-item').val('')\"
    data-request-flash>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">To Do List</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"input-group\">
                <input type=\"text\" id=\"input-item\" class=\"form-control\" value=\"\" name=\"newItem\" placeholder=\"What needs to be done?\"> 
                <span class=\"input-group-btn\">
                    <button type=\"submit\" class=\"btn btn btn-primary\" data-attach-loading>Add</button>
                </span>
            </div>
        </div>
        <ul class=\"list-group\" id=\"result\">
        </ul>
    </div>
</form>
", "C:\\Program Files (x86)\\Ampps\\www\\october/plugins/october/demo/components/todo/default.htm", "");
    }
}
