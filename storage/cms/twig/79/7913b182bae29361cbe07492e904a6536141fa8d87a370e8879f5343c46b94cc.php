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

/* /home/l/lutsyi1l/poiskovik.app/public_html/themes/klimbatika/partials/site/footer.htm */
class __TwigTemplate_04d8e0715de7586e13fd9877c15024167b8d1ea6529d1642b1d7414bafd2eaa2 extends \Twig\Template
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
        echo "<div class=\"uk-container uk-container-center\">
\t<div class=\"uk-child-width-expand@s uk-text-center\" uk-grid>
\t\t<div>
\t\t\t<div class=\"uk-card uk-card-default uk-card-body\">
\t\t\t    <p class=\"muted credit\">&copy; 2021 - ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"//contentim.ru\">Ivan Goncharenko (Contentim) Russia, Voronezh</a></p>
\t\t\t</div>
\t\t</div>

\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/l/lutsyi1l/poiskovik.app/public_html/themes/klimbatika/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"uk-container uk-container-center\">
\t<div class=\"uk-child-width-expand@s uk-text-center\" uk-grid>
\t\t<div>
\t\t\t<div class=\"uk-card uk-card-default uk-card-body\">
\t\t\t    <p class=\"muted credit\">&copy; 2021 - {{ \"now\"|date(\"Y\") }} <a href=\"//contentim.ru\">Ivan Goncharenko (Contentim) Russia, Voronezh</a></p>
\t\t\t</div>
\t\t</div>

\t</div>
</div>", "/home/l/lutsyi1l/poiskovik.app/public_html/themes/klimbatika/partials/site/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5, "date" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
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
