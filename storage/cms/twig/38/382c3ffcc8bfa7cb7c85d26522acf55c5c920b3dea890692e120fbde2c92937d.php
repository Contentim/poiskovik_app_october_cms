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

/* /home/l/lutsyi1l/poiskovik.app/public_html/themes/klimbatika/partials/remove_image.htm */
class __TwigTemplate_41185615e2f3068518ee2615d3e0522b174c6a90b7c68b3969ffab9d68c56357 extends \Twig\Template
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
        echo "<input id=\"path_img\" name=\"path_img\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["path_img"] ?? null), 1, $this->source), "html", null, true);
        echo "\" type=\"hidden\">
<button data-request=\"onDelete\" data-request-success=\"removeImage(data); console.log(data)\" data-request-confirm=\"Вы уверены, что хотите удалить фотографию?\">Удалить фото</button>

<script>
    function removeImage(){
        if(document.querySelector(\"#upload__img img\")){
            document.querySelector(\"#upload__img img\").remove();
            document.querySelector(\"#remove_image\").style.display = \"none\";
            document.querySelector(\"#upload_img\").style.display = \"flex\";

            localStorage.removeItem(\"imgAd\");
        }
    }

</script>";
    }

    public function getTemplateName()
    {
        return "/home/l/lutsyi1l/poiskovik.app/public_html/themes/klimbatika/partials/remove_image.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<input id=\"path_img\" name=\"path_img\" value=\"{{ path_img }}\" type=\"hidden\">
<button data-request=\"onDelete\" data-request-success=\"removeImage(data); console.log(data)\" data-request-confirm=\"Вы уверены, что хотите удалить фотографию?\">Удалить фото</button>

<script>
    function removeImage(){
        if(document.querySelector(\"#upload__img img\")){
            document.querySelector(\"#upload__img img\").remove();
            document.querySelector(\"#remove_image\").style.display = \"none\";
            document.querySelector(\"#upload_img\").style.display = \"flex\";

            localStorage.removeItem(\"imgAd\");
        }
    }

</script>", "/home/l/lutsyi1l/poiskovik.app/public_html/themes/klimbatika/partials/remove_image.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
