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

/* /home/l/lutsyi1l/poiskovik.app/public_html/themes/klimbatika/partials/site/header.htm */
class __TwigTemplate_75649724e279fad9d646313c21fdb6fe94eaa0897741e5e698cb37b6d9223742 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav id=\"nav\" class=\"uk-container uk-container-center\">

\t<div class=\"title\">
\t\t<a href=\"/\"><h1>Конструктор ориентировок на без вести пропавших</h1></a>
\t</div>

\t<div class=\"about\">
\t\t<ul class=\"uk-navbar-nav\">
\t\t\t<li><a href=\"#offcanvas\" uk-toggle=\"\">О проекте</a></li>
\t\t</ul>
\t</div>

</nav>";
    }

    public function getTemplateName()
    {
        return "/home/l/lutsyi1l/poiskovik.app/public_html/themes/klimbatika/partials/site/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"nav\" class=\"uk-container uk-container-center\">

\t<div class=\"title\">
\t\t<a href=\"/\"><h1>Конструктор ориентировок на без вести пропавших</h1></a>
\t</div>

\t<div class=\"about\">
\t\t<ul class=\"uk-navbar-nav\">
\t\t\t<li><a href=\"#offcanvas\" uk-toggle=\"\">О проекте</a></li>
\t\t</ul>
\t</div>

</nav>", "/home/l/lutsyi1l/poiskovik.app/public_html/themes/klimbatika/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
