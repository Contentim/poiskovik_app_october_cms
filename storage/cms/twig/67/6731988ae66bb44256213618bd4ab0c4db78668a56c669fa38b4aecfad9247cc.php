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

/* /home/l/lutsyi1l/poiskovik.app/public_html/themes/klimbatika/partials/site/modals.htm */
class __TwigTemplate_0ada3d551ef4b1da9c86ed73fb91ed54f28241cabf27833982f7a284465a918a extends \Twig\Template
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
        echo "<div id=\"offcanvas\" uk-offcanvas=\"flip: true; overlay: true\">
\t<div class=uk-offcanvas-bar>
\t\t<button class=uk-offcanvas-close type=button uk-close></button>
\t\t<!--
\t\t<ul class=\"uk-nav uk-nav-default\">
\t\t\t<li class=uk-active><a href=\"#\">Active</a></li>
\t\t\t<li class=uk-parent>
\t\t\t\t<a href=\"#\">Parent</a>
\t\t\t\t<ul class=uk-nav-sub>
\t\t\t\t\t<li><a href=\"#\">Sub item</a></li>
\t\t\t\t\t<li><a href=\"#\">Sub item</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=uk-nav-header>Header</li>
\t\t\t<li><a href=\"#\"><span class=uk-margin-small-right uk-icon=\"icon: table\"></span> Item</a></li>
\t\t\t<li><a href=\"#\"><span class=uk-margin-small-right uk-icon=\"icon: thumbnails\"></span> Item</a></li>
\t\t\t<li class=uk-nav-divider></li>
\t\t\t<li><a href=\"#\"><span class=uk-margin-small-right uk-icon=\"icon: trash\"></span> Item</a></li>
\t\t</ul>
\t\t-->
\t\t<h3>Описание</h3>
\t\t<p>Бесплатный конструктор ориентировок преследует лишь одну цель - облегчить труд тех, кому в силу своей волонтерской или профессиональной занятости необходимо создавать объявления о поиске без вести пропавших.</p>
\t\t
\t\t<ul class=\"uk-nav uk-nav-default uk-nav-iconalign\">
\t\t\t<li class=uk-nav-header>По вопросам работы писать:</li>
\t\t\t<li><a style=\"padding-left: 10px;\" href=\"https://vk.com/contentim_ru\" target=\"_blank\">https://vk.com/contentim_ru</a></li>
\t\t\t<li><a style=\"padding-left: 10px;\" href=\"mailto:contentim@yandex.ru\" target=\"_blank\">contentim@yandex.ru</a></li>
\t\t</ul>
\t\t
\t</div>
</div>

<div id=\"collective\" uk-offcanvas=\"flip: true; overlay: true\">
\t<div class=uk-offcanvas-bar>
\t\t<button class=uk-offcanvas-close type=button uk-close></button>
\t\t<ul class=\"uk-nav uk-nav-default uk-nav-iconalign\">
\t\t\t<li class=uk-nav-header>Соц.сети и телевидение</li>
\t\t\t<li><a href=\"https://ru.wikipedia.org/wiki/Климбатика\" target=\"_blank\"><span class=\"uk-margin-small-right uk-icon\" uk-icon=\"heart\"></span> Википедия</a></li>
\t\t\t<li><a href=\"https://vk.com/climbatica_com\" target=\"_blank\"><span class=\"uk-margin-small-right uk-icon\" uk-icon=\"heart\"></span> Оф. группа ВК</a></li>
\t\t\t<li><a href=\"https://vk.com/climbatica_nuar\" target=\"_blank\"><span class=\"uk-margin-small-right uk-icon\" uk-icon=\"heart\"></span> Оф. группа ВК <br>(раннее творчество)</a></li>
\t\t\t<li><a href=\"https://www.youtube.com/watch?v=xM6DJJf9Oj8\" target=\"_blank\"><span class=\"uk-margin-small-right uk-icon\" uk-icon=\"heart\"></span> Климбатика на НТВ</a></li>

\t\t\t<!--
\t\t\t<li class=uk-active><a href=\"#\">Active</a></li>
\t\t\t-->

\t\t</ul>
\t\t<h2>Кратко</h2>
\t\t<p>«Климба́тика» — российская рок-группа, основанная Алексом Беловым и Иваном Яковлевым (псевдоним Ван Хаос)
\t\t\t26 июня 2006 года в Оренбурге.</p>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/l/lutsyi1l/poiskovik.app/public_html/themes/klimbatika/partials/site/modals.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"offcanvas\" uk-offcanvas=\"flip: true; overlay: true\">
\t<div class=uk-offcanvas-bar>
\t\t<button class=uk-offcanvas-close type=button uk-close></button>
\t\t<!--
\t\t<ul class=\"uk-nav uk-nav-default\">
\t\t\t<li class=uk-active><a href=\"#\">Active</a></li>
\t\t\t<li class=uk-parent>
\t\t\t\t<a href=\"#\">Parent</a>
\t\t\t\t<ul class=uk-nav-sub>
\t\t\t\t\t<li><a href=\"#\">Sub item</a></li>
\t\t\t\t\t<li><a href=\"#\">Sub item</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=uk-nav-header>Header</li>
\t\t\t<li><a href=\"#\"><span class=uk-margin-small-right uk-icon=\"icon: table\"></span> Item</a></li>
\t\t\t<li><a href=\"#\"><span class=uk-margin-small-right uk-icon=\"icon: thumbnails\"></span> Item</a></li>
\t\t\t<li class=uk-nav-divider></li>
\t\t\t<li><a href=\"#\"><span class=uk-margin-small-right uk-icon=\"icon: trash\"></span> Item</a></li>
\t\t</ul>
\t\t-->
\t\t<h3>Описание</h3>
\t\t<p>Бесплатный конструктор ориентировок преследует лишь одну цель - облегчить труд тех, кому в силу своей волонтерской или профессиональной занятости необходимо создавать объявления о поиске без вести пропавших.</p>
\t\t
\t\t<ul class=\"uk-nav uk-nav-default uk-nav-iconalign\">
\t\t\t<li class=uk-nav-header>По вопросам работы писать:</li>
\t\t\t<li><a style=\"padding-left: 10px;\" href=\"https://vk.com/contentim_ru\" target=\"_blank\">https://vk.com/contentim_ru</a></li>
\t\t\t<li><a style=\"padding-left: 10px;\" href=\"mailto:contentim@yandex.ru\" target=\"_blank\">contentim@yandex.ru</a></li>
\t\t</ul>
\t\t
\t</div>
</div>

<div id=\"collective\" uk-offcanvas=\"flip: true; overlay: true\">
\t<div class=uk-offcanvas-bar>
\t\t<button class=uk-offcanvas-close type=button uk-close></button>
\t\t<ul class=\"uk-nav uk-nav-default uk-nav-iconalign\">
\t\t\t<li class=uk-nav-header>Соц.сети и телевидение</li>
\t\t\t<li><a href=\"https://ru.wikipedia.org/wiki/Климбатика\" target=\"_blank\"><span class=\"uk-margin-small-right uk-icon\" uk-icon=\"heart\"></span> Википедия</a></li>
\t\t\t<li><a href=\"https://vk.com/climbatica_com\" target=\"_blank\"><span class=\"uk-margin-small-right uk-icon\" uk-icon=\"heart\"></span> Оф. группа ВК</a></li>
\t\t\t<li><a href=\"https://vk.com/climbatica_nuar\" target=\"_blank\"><span class=\"uk-margin-small-right uk-icon\" uk-icon=\"heart\"></span> Оф. группа ВК <br>(раннее творчество)</a></li>
\t\t\t<li><a href=\"https://www.youtube.com/watch?v=xM6DJJf9Oj8\" target=\"_blank\"><span class=\"uk-margin-small-right uk-icon\" uk-icon=\"heart\"></span> Климбатика на НТВ</a></li>

\t\t\t<!--
\t\t\t<li class=uk-active><a href=\"#\">Active</a></li>
\t\t\t-->

\t\t</ul>
\t\t<h2>Кратко</h2>
\t\t<p>«Климба́тика» — российская рок-группа, основанная Алексом Беловым и Иваном Яковлевым (псевдоним Ван Хаос)
\t\t\t26 июня 2006 года в Оренбурге.</p>
\t</div>
</div>", "/home/l/lutsyi1l/poiskovik.app/public_html/themes/klimbatika/partials/site/modals.htm", "");
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
