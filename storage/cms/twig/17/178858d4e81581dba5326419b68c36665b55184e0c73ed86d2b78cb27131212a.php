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

/* C:\Program Files (x86)\Ampps\www\october/themes/porpas/pages/actor-add.htm */
class __TwigTemplate_6eb0cc525e09be6d35fa1dbcf20783cfb356a788862841e382f3d8a19f7c9188 extends \Twig\Template
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
        echo "<form method=\"POST\" action=";
        echo url("actor-add");
        echo " enctype=\"multipart/form-data\" accept-charset=\"UTF-8\">
    <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
    ";
        // line 4
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
        echo "
    <label>Actor name</label>
    <input type=\"text\" name=\"name\">

    <label>Actor last name</label>
    <input type=\"text\" name=\"lastname\">
    <label>Actor Image</label>
    <input type=\"file\" name=\"actorimage\">

    <button type=\"submit\">Save actor</button>

    <ul>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", [], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 17
            echo "        <li>";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 20
            echo "        <li>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</li>
        ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 22
        echo "
    </ul>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/porpas/pages/actor-add.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  78 => 20,  75 => 19,  66 => 17,  62 => 16,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"POST\" action={{url('actor-add')}} enctype=\"multipart/form-data\" accept-charset=\"UTF-8\">
    <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
    {{form_token() }}
    {{form_sessionKey() }}
    <label>Actor name</label>
    <input type=\"text\" name=\"name\">

    <label>Actor last name</label>
    <input type=\"text\" name=\"lastname\">
    <label>Actor Image</label>
    <input type=\"file\" name=\"actorimage\">

    <button type=\"submit\">Save actor</button>

    <ul>
        {% for error in errors.all() %}
        <li>{{error}}</li>
        {% endfor %}
        {% flash success %}
        <li>{{message}}</li>
        {% endflash %}

    </ul>
</form>", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/porpas/pages/actor-add.htm", "");
    }
}
