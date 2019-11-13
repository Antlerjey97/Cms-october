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

/* C:\Program Files (x86)\Ampps\www\october/themes/demo/partials/formll.htm */
class __TwigTemplate_674ee996954108ecdd85bc81c3a222958fad876b555e07a4feffa3b1ccbc0dc1 extends \Twig\Template
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
        echo "<form class=\"form\">
  <h2>CONTACT US</h2>
  <p type=\"Name:\"><input placeholder=\"Write your name here..\"></input></p>
  <p type=\"Email:\"><input placeholder=\"Let us know how to contact you back..\"></input></p>
  <p type=\"Message:\"><input placeholder=\"What would you like to tell us..\"></input></p>
  <button>Send Message</button>
  <div>
    <span class=\"fa fa-phone\"></span>001 1023 567
    <span class=\"fa fa-envelope-o\"></span> contact@company.com
  </div>
</form>
<style>body {
\tbackground: #59ABE3;
\tmargin: 0
}

.form {
\twidth: 340px;
\theight: 440px;
\tbackground: #e6e6e6;
\tborder-radius: 8px;
\tbox-shadow: 0 0 40px -10px #000;
\tmargin: calc(50vh - 220px) auto;
\tpadding: 20px 30px;
\tmax-width: calc(100vw - 40px);
\tbox-sizing: border-box;
\tfont-family: 'Montserrat', sans-serif;
\tposition: relative
}

h2 {
\tmargin: 10px 0;
\tpadding-bottom: 10px;
\twidth: 180px;
\tcolor: #78788c;
\tborder-bottom: 3px solid #78788c
}

input {
\twidth: 100%;
\tpadding: 10px;
\tbox-sizing: border-box;
\tbackground: none;
\toutline: none;
\tresize: none;
\tborder: 0;
\tfont-family: 'Montserrat', sans-serif;
\ttransition: all .3s;
\tborder-bottom: 2px solid #bebed2
}

input:focus {
\tborder-bottom: 2px solid #78788c
}

p:before {
\tcontent: attr(type);
\tdisplay: block;
\tmargin: 28px 0 0;
\tfont-size: 14px;
\tcolor: #5a5a5a
}

button {
\tfloat: right;
\tpadding: 8px 12px;
\tmargin: 8px 0 0;
\tfont-family: 'Montserrat', sans-serif;
\tborder: 2px solid #78788c;
\tbackground: 0;
\tcolor: #5a5a6e;
\tcursor: pointer;
\ttransition: all .3s
}

button:hover {
\tbackground: #78788c;
\tcolor: #fff
}

div {
\tcontent: 'Hi';
\tposition: absolute;
\tbottom: -15px;
\tright: -20px;
\tbackground: #50505a;
\tcolor: #fff;
\twidth: 320px;
\tpadding: 16px 4px 16px 0;
\tborder-radius: 6px;
\tfont-size: 13px;
\tbox-shadow: 10px 10px 40px -14px #000
}

span {
\tmargin: 0 5px 0 15px
}
</style>";
    }

    public function getTemplateName()
    {
        return "C:\\Program Files (x86)\\Ampps\\www\\october/themes/demo/partials/formll.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"form\">
  <h2>CONTACT US</h2>
  <p type=\"Name:\"><input placeholder=\"Write your name here..\"></input></p>
  <p type=\"Email:\"><input placeholder=\"Let us know how to contact you back..\"></input></p>
  <p type=\"Message:\"><input placeholder=\"What would you like to tell us..\"></input></p>
  <button>Send Message</button>
  <div>
    <span class=\"fa fa-phone\"></span>001 1023 567
    <span class=\"fa fa-envelope-o\"></span> contact@company.com
  </div>
</form>
<style>body {
\tbackground: #59ABE3;
\tmargin: 0
}

.form {
\twidth: 340px;
\theight: 440px;
\tbackground: #e6e6e6;
\tborder-radius: 8px;
\tbox-shadow: 0 0 40px -10px #000;
\tmargin: calc(50vh - 220px) auto;
\tpadding: 20px 30px;
\tmax-width: calc(100vw - 40px);
\tbox-sizing: border-box;
\tfont-family: 'Montserrat', sans-serif;
\tposition: relative
}

h2 {
\tmargin: 10px 0;
\tpadding-bottom: 10px;
\twidth: 180px;
\tcolor: #78788c;
\tborder-bottom: 3px solid #78788c
}

input {
\twidth: 100%;
\tpadding: 10px;
\tbox-sizing: border-box;
\tbackground: none;
\toutline: none;
\tresize: none;
\tborder: 0;
\tfont-family: 'Montserrat', sans-serif;
\ttransition: all .3s;
\tborder-bottom: 2px solid #bebed2
}

input:focus {
\tborder-bottom: 2px solid #78788c
}

p:before {
\tcontent: attr(type);
\tdisplay: block;
\tmargin: 28px 0 0;
\tfont-size: 14px;
\tcolor: #5a5a5a
}

button {
\tfloat: right;
\tpadding: 8px 12px;
\tmargin: 8px 0 0;
\tfont-family: 'Montserrat', sans-serif;
\tborder: 2px solid #78788c;
\tbackground: 0;
\tcolor: #5a5a6e;
\tcursor: pointer;
\ttransition: all .3s
}

button:hover {
\tbackground: #78788c;
\tcolor: #fff
}

div {
\tcontent: 'Hi';
\tposition: absolute;
\tbottom: -15px;
\tright: -20px;
\tbackground: #50505a;
\tcolor: #fff;
\twidth: 320px;
\tpadding: 16px 4px 16px 0;
\tborder-radius: 6px;
\tfont-size: 13px;
\tbox-shadow: 10px 10px 40px -14px #000
}

span {
\tmargin: 0 5px 0 15px
}
</style>", "C:\\Program Files (x86)\\Ampps\\www\\october/themes/demo/partials/formll.htm", "");
    }
}
