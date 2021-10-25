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

/* /home/l/lutsyi1l/poiskovik.app/public_html/themes/klimbatika/layouts/default.htm */
class __TwigTemplate_c09f8858b2f1a0c89089c413306a4401ed8608715961a3820bc31b8f1f433ea7 extends \Twig\Template
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
        $context["site_url"] = "https://poiskovik.app";
        // line 2
        $context["site_name"] = "Конструктор ориентировок по поиску без вести пропавших";
        // line 3
        $context["title_page"] = "Конструктор-генератор ориентировок по поиску без вести пропавших | Создать ориентировку онлайн";
        // line 4
        $context["description_page"] = "Создать ориентировку онлайн. Шаблон ориентировки по поиску без вести пропавшего человека с возможностью создать свое объявление и выгрузить в формате JPG на печать. Конструктор-генератор ориентировок по поиску без вести пропавших. Бесплатно создавайте объявления.";
        // line 5
        echo "

<!DOCTYPE html>
<html id=\"release\">
    <head>
        <meta charset=\"UTF-8\">
    \t<title>";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_page"] ?? null), 11, $this->source), "html", null, true);
        echo "</title>
        
        <meta name=\"description\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["description_page"] ?? null), 13, $this->source), "html", null, true);
        echo "\">
        
        <meta name=\"author\" content=\"Contentim\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon.png");
        echo "\">
        
        <meta property=\"og:locale\" content=\"ru_RU\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:title\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_page"] ?? null), 22, $this->source), "html", null, true);
        echo "\" />
        <meta property=\"og:description\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["description_page"] ?? null), 23, $this->source), "html", null, true);
        echo "\" />
        <meta property=\"og:url\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_url"] ?? null), 24, $this->source), "html", null, true);
        echo "\" />
        <meta property=\"og:site_name\" content=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 25, $this->source), "html", null, true);
        echo "\" />
        <meta name=\"twitter:card\" content=\"summary_large_image\" />
        <meta name=\"twitter:description\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["description_page"] ?? null), 27, $this->source), "html", null, true);
        echo "\" />
        <meta name=\"twitter:title\" content=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_url"] ?? null), 28, $this->source), "html", null, true);
        echo "\" />
        
        <meta name=\"yandex-verification\" content=\"1c96194a3deb430a\" />
        
        <!--
    \t<link rel=\"icon\" type=\"image/png\" href=\"https://ibuildrussia.ru/themes/kenshin-kenshinschool/assets/images/home.png\">
    \t-->
    \t
    \t<!--<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">-->
    \t
    \t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js\"></script>    
        
        <link rel=\"stylesheet\" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/uikit.css");
        echo "\">
        <!--<link rel=\"stylesheet\" href=\"/assets/css/uikit-rtl.css\">-->
        <link rel=\"stylesheet\" href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/awesome/css/fontawesome.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/awesome/css/all.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/awesome/css/brands.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/awesome/css/regular.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/awesome/css/solid.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/awesome/css/svg-with-js.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/awesome/css/v4-shims.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/aplayer/dist/APlayer.min.css");
        echo "\">
        
        <link rel=\"stylesheet\" href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css?v=2.0");
        echo "\">
        
                   
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
        
        

<!-- system -->
<style>
\t.uk-container::before, .uk-container::after {
\t\tdisplay: none !important;
\t}
\t#nav {
\t\twidth: 1240px;
\t\tmin-width: 1240px;
\t\tmargin: auto;
\t\tpadding: 0;

\t\tdisplay: -ms-flexbox;
\t\tdisplay: -webkit-flex;
\t\tdisplay: flex;
\t\t-webkit-flex-direction: row;
\t\t-ms-flex-direction: row;
\t\tflex-direction: row;
\t\t-webkit-flex-wrap: nowrap;
\t\t-ms-flex-wrap: nowrap;
\t\tflex-wrap: nowrap;
\t\t-webkit-justify-content: space-between;
\t\t-ms-flex-pack: justify;
\t\tjustify-content: space-between;
\t\t-webkit-align-content: stretch;
\t\t-ms-flex-line-pack: stretch;
\t\talign-content: stretch;
\t\t-webkit-align-items: center;
\t\t-ms-flex-align: center;
\t\talign-items: center;
\t}
\t#nav .title {

\t}
\t#nav .title a {

\t}
\t#nav .title a:hover {
\t\ttext-decoration: none;
\t}
\t#nav .title h1 {
\t\tfont-size: 30px;
\t\tmargin: 0;
\t\tfont-weight: 600;
\t}
\t#nav .about {

\t}
</style>

<style>
    [contenteditable] {
      outline: 0px solid transparent;
    }
    #separator {
        width: 100%;
        height: 5px;
        position: absolute;
        bottom: -5px;
        background: #ddd;
    }

                
    @font-face {
        font-family: 'DejaVu Sans';
        src: local('DejaVu Sans ExtraLight'), local('DejaVuSans-ExtraLight'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansextralight.woff2') format('woff2'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansextralight.woff') format('woff'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansextralight.ttf') format('truetype');
        font-weight: 200;
        font-style: normal;
    }
    @font-face {
        font-family: 'DejaVu Sans';
        src: local('DejaVu Sans'), local('DejaVuSans'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusans.woff2') format('woff2'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusans.woff') format('woff'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusans.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
    }
    @font-face {
        font-family: 'DejaVu Sans';
        src: local('DejaVu Sans Oblique'), local('DejaVuSans-Oblique'),
        url('dejavusansoblique.woff2') format('woff2'),
        url('dejavusansoblique.woff') format('woff'),
        url('dejavusansoblique.ttf') format('truetype');
        font-weight: 400;
        font-style: italic;
    }
    @font-face {
        font-family: 'DejaVu Sans';
        src: local('DejaVu Sans Bold'), local('DejaVuSans-Bold'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansbold.woff2') format('woff2'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansbold.woff') format('woff'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansbold.ttf') format('truetype');
        font-weight: 700;
        font-style: normal;
    }
    @font-face {
        font-family: 'DejaVu Sans';
        src: local('DejaVu Sans Bold Oblique'), local('DejaVuSans-BoldOblique'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansboldoblique.woff2') format('woff2'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansboldoblique.woff') format('woff'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansboldoblique.ttf') format('truetype');
        font-weight: 700;
        font-style: italic;
    }

    #release .uk-container {
        width: 1220px;
        min-width: 1220px;
        padding: 0;
    }
    #release .uk-section.uk-section-default {
        min-height: 100vh; 
        padding-top: 16px;
    }
    #release .uk-container > .uk-grid {
        margin: 0;
    }
    #release .uk-container .uk-first-column {
        padding: 0;
    }
    
    #last-name {
        font-size: 70px;
        text-transform: uppercase;
        font-weight: 700;
        padding: 3px 0 0 5px;
        position: relative;
        top: -6px;
        left: -4px;
        margin: 0;
        height: 62px;
        color: #111;
        width: 100%;
        font-family: 'DejaVu Sans';
        border: 1px solid #8c3a4d;
        text-indent: -5px;
    }
    #name-age {
        font-size: 24px;
        text-transform: uppercase;
        font-weight: 700;
        padding: 0 0 0 4px;
        text-align: left;
        font-family: 'DejaVu Sans';
        position: relative;
        top: -2px;
        left: -4px;
        margin: 0;
        height: 32px;
        color: #000;
        border: 1px solid #8c3a4d;
        width: 100%;
        line-height: 30px;
    }
    
    #creator-form {
        height:812px;
        width: 1220px;
        margin: auto;
    }
    .level_1 {
        position: relative;
        height: 812px;
        width: 1220px;
        background: #e21e22; /* ff6600 */
    }
    .level_2 {
        border: 20px solid #e21e22; /* ff6600 */
        height: calc(100% - 120px);
        padding: 15px;
        width: calc(100% - 70px);
        background: #fff;
        border-top: 45px solid #e21e22; /* ff6600 */
        border-bottom: 45px solid #e21e22; /* ff6600 */
    }
    .content {
        width: 100%;
        height: 100%;
    }
    .info {
        width: 100%;
        height: inherit;
    }
    #upload__img {
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
    }
    
    .info .img {
        width: 380px;
        height: inherit;
        float: left;
        margin: 0;
        padding: 0;
        overflow: hidden;
        position: relative;
    }
    .info .text {
        padding: 0;
        float: right;
        width: 735px;
        margin: 0;
        position: relative;
        height: inherit;
    }
    .img_wrapper {
        position: relative;
        border: 3px solid #e21e22;
        height: 451px;
        overflow: hidden;
    }
    
    
</style>

<!-- creator -->
<style>
    .editor {
        position: relative;
        text-align: left;
        max-height: 605px;
        overflow: overlay;
    }
    
    #creator-form .ce-header {
        color: #000;
    }
    
    #upload_img {
        height: 100%;
        
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-content: stretch;
        -ms-flex-line-pack: stretch;
        align-content: stretch;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }
    
    .wrapp__info {
        color: grey;
        transition: 200ms color;
        text-align: center;
        margin: 0 0 10px;
    }
    .wrapp__info .size {
        font-weight: 600;
        color: #111;
    }
    .wrapp__info div {
        margin: 0;
        line-height: normal;
    }
    .upload_img_container .form-group {padding: 0;margin: 0 0 15px;}
    .upload_img_container input[type=file] {outline:0;opacity:0;pointer-events:none;user-select:none}
    .upload_img_container .label {width:140px;border:2px dashed grey;border-radius:5px;display:block;padding:1.2em;transition:border 300ms ease;cursor:pointer;text-align:center}
    .upload_img_container .label i {display:block;font-size:42px;padding-bottom:16px}
    .upload_img_container .label i, .upload_img_container .label .title {color:grey;transition:200ms color}
    .upload_img_container .label:hover {border:2px solid #000;background: moccasin;}
    .upload_img_container .label:hover i, .upload_img_container .label:hover .title {color:#000}
    
    .submit__wrapper button {
        color: #555;
        line-height: normal;
        width: 183px;
        margin: auto;
        border: 2px solid #555;
        padding: 10px 0;
        background: transparent;
    }
    .submit__wrapper button:hover {
        cursor: pointer;
        background: moccasin;
    }
    
    .input__file {
        opacity: 0;
        visibility: hidden;
        position: absolute;
    }
    
    #remove_image {
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        
        display: -ms-flexbox;
        display: -webkit-flex;
        display: none;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-align-content: stretch;
        -ms-flex-line-pack: stretch;
        align-content: stretch;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }
    #remove_image button {
        display: none;
        color: #555;
        line-height: normal;
        width: 183px;
        margin: auto;
        border: 2px solid #555;
        padding: 10px 0;
        background: #fff;
    }
    #remove_image:hover button {
        display: block;
    }
    #remove_image button:hover {
        cursor: pointer;
        background: moccasin;
    }
    
    /* Editor.js */
    #creator-form .ce-header {
        font-family: 'DejaVu Sans';
        font-weight: 700;
    }
    
    
    #creator-form h1.ce-header {
        /*padding: 0;
        line-height: 60px;
        margin: 0 0 10px;
        font-size: 70px;
        text-transform: uppercase;
        text-indent: -3px;*/
        padding: 0;
        line-height: 60px;
        margin: 0;
        font-size: 60px;
        text-transform: uppercase;
        text-indent: -1px;
    }
    #creator-form h2.ce-header {
        padding: 0;
        line-height: 30px;
        margin: 0 0 20px;
        font-size: 24px;
        text-transform: uppercase;
    }
    #creator-form .ce-paragraph {
        font-family: 'DejaVu Sans';
        font-size: 22px;
        padding: 0;
        line-height: 1.2em;
        margin: 0 0 5px;
    }
    
    .text .footer {
        border-top: 4px solid #e21e22;
        position: absolute;
        bottom: 0;
        width: 100%;
        background: #fff;
        z-index: 9;
        padding-top: 10px;
        color: #000;
    }
    #creator-form .footer .codex-editor__redactor {
        width: 100%
    }
    #creator-form .footer .ce-header {
        text-align: center;
        margin: 0;
        padding: 0;
    }
    #creator-form .footer h1.ce-header {
        font-size: 44px;
        text-transform: initial;
    }
    #creator-form .footer h2.ce-header {
        line-height: 30px;
        font-size: 26px;
        text-transform: uppercase;
    }
    #creator-form .footer .ce-paragraph {
        padding: 0;
        line-height: normal;
        font-size: 20px;
        text-align: center;
    }
    

    /* clearfix */
    .clearfix:before, .clearfix:after {
        content: \" \";
        display: table;
    }
    .clearfix:after {
        clear: both;
    }
    .clearfix {
        *zoom: 1;
        clear: both;
    }
    .header {
        padding: 15px 0;

        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-align-content: stretch;
        -ms-flex-line-pack: stretch;
        align-content: stretch;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }
    .header .download {
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-align-content: stretch;
        -ms-flex-line-pack: stretch;
        align-content: stretch;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }
    .header .download span {
        margin: 0 10px 0 0;
        font-size: 18px;
        line-height: 24px;
    }
    .header .download button {
        background-color: #ff6600;
        color: #fff;
        padding: 10px 5px;
        display: block;
        font-size: 20px;
        transition: 0.1s ease-in-out;
        transition-property: color, background-color;
        text-decoration: none;
        cursor: pointer;
        border: none;
        line-height: 24px;
        font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
        max-width: 320px;
    }
    #creator-form div.footer > div:nth-child(2) {
        width: 100% !important;
        margin: 0 !important;
    }
    
    .notification {
        font-family: 'DejaVu Sans';
        font-size: 60px;
        text-align: center;
        text-transform: uppercase;
        font-weight: 700;
        line-height: 70px;
    }
    .notification .item_1 {
        margin: 0 0 20px;
    }
    .notification .item_2 {
        font-size: 99px;
        text-indent: -4px;
        margin: 0 0 10px;
    }
    .notification .item_3 {}
    

    #editorjs-title .ce-block__content,
    #editorjs-subtitle .ce-block__content,
    #editorjs-editor .ce-block__content,
    #editorjs-footer .ce-block__content {
        max-width: 100%;
    }
    
    #editorjs-title .codex-editor__redactor,
    #editorjs-subtitle .codex-editor__redactor,
    #editorjs-editor .codex-editor__redactor,
    #editorjs-footer .codex-editor__redactor,
    #editorjs-top .codex-editor__redactor,
    #editorjs-bottom .codex-editor__redactor {
        padding: 0 !important;
    }
    
    .editor-top, 
    .editor-bottom {
        position: absolute;
        width: 100%;
    }
    .editor-top {
        top: 6px;
    }
    .editor-bottom {
        bottom: 7px;
    }
    .editor-top div,
    .editor-bottom div{
        text-align: center;
        font-size: 26px;
        color: #fff;
        text-transform: uppercase;
    }
    
    #editorjs-footer [hidden] {
        /*display: block !important;*/
    }
    
    #editorjs-editor .codex-editor__redactor {
        /*display: none !important;*/
        max-height: 520px;
        min-height: 520px;
    }
    
    #commontTabs {
        margin: 20px 0 0;
    }
    #commontTabs li:nth-child(1) {
        padding: 0;
    }
    
    #downloadImage {
        margin: 0 0 0 10px;
    }
    #downloadImage:focus {
        outline: 0;
    }
    #viewImage {
        border: 1px solid #8c3a4d;
    }

    #tabContent > div {
        display: none;
    }
    #tabContent > div.active {
        display: block;
    }
    
    .nav-tabs {
        display: flex;
        flex-wrap: wrap;
        margin-left: -20px;
        margin-top: 20px;
        padding: 0;
        list-style: none;
        position: relative;
    }
    .nav-tabs .nav-item {
        flex: 1;
        padding-left: 20px;
        position: relative;
        min-width: 1px;
        width: 100%;
    }
    .nav-tabs .nav-item a {
        color: #111;
        font-size: 20px;
        
        display: block;
        text-align: center;
        padding: 5px 10px;
        border-bottom: 1px solid #999;
        text-transform: uppercase;
        transition: color 0.1s ease-in-out;
    }
    .nav-tabs .nav-item a:hover {
        text-decoration: none;        
    }
    .nav-tabs .nav-item a.active {
        border-bottom: 1px solid #8C3A4D;
    }
    
</style>
        
        ";
        // line 675
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 676
        echo "        
        <!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script> -->
        
        <script src=\"";
        // line 679
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/lib/jquery.min.js");
        echo "\"></script>
        <script src=\"";
        // line 680
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/uikit.js");
        echo "\"></script>
        
        <script src=\"";
        // line 682
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/nicEdit-latest.js");
        echo "\" type=\"text/javascript\"></script>
<!--        <script src=\"";
        // line 683
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/nicEdit.js");
        echo "\" type=\"text/javascript\"></script>-->

    
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/header@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/list@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/quote@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/warning@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/marker@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/embed@latest\"></script>
        
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/inline-code@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/delimiter@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/code@latest\"></script>

        
        <script>
            document.addEventListener('DOMContentLoaded', function(){
                
                /**
                * body
                */
                let orientingData
                if(localStorage.getItem('orientingData')){
                    orientingData = JSON.parse(localStorage.getItem('orientingData'));
                } else {
                    orientingData = [
                      {
                        type: \"header\",
                        data: {
                          text: \"Фамилия\",
                          level: 1
                        }
                      },
                      {
                        type: \"header\",
                        data: {
                          text: \"Имя Отчество, возраст\",
                          level: 2
                        }
                      },
                      {
                        type : 'paragraph',
                        data : {
                          text : '<b>01.01.2021 года в 8:00 ушла из дома по ул. Ленина в неизвестном направлении.<b>'
                        }
                      },
                      {
                        type : 'paragraph',
                        data : {
                          text : '<b>Приметы:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.'
                        }
                      },
                      {
                        type : 'paragraph',
                        data : {
                          text : '<b>Одежда:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.'
                        }
                      },
                      {
                        type : 'paragraph',
                        data : {
                          text : '<b>Особые приметы:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.'
                        }
                      },
                      {
                        type : 'paragraph',
                        data : {
                          text : '<b>Состояние здоровья:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore.'
                        }
                      },
                      {
                        type : 'paragraph',
                        data : {
                          text : '<b>Вещи:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.'
                        }
                      },
                    ];
                }
                
                var editor = new EditorJS({
                  /**
                   * Wrapper of Editor
                   */
                  holderId: 'editorjs-editor',
                  /**
                   * Tools list
                   */
                  tools: {
                      header: {
                          class: Header,
                          inlineToolbar: ['link'],
                          config: {
                            placeholder: 'Заголовок'
                          },
                          shortcut: 'CMD+SHIFT+H'
                        },
                  },
                  /**
                   * Initial Editor data
                   */
                  data: { 
                      blocks: orientingData
                  },
                  onReady: function(){
                    //saveButton.click();
                  },
                  onChange: function() {
                    editor.save().then((outputData) => {
                        localStorage.setItem('orientingData', JSON.stringify(outputData.blocks));
                    }).catch((error) => {
                        console.log('Saving failed: ', error)
                    });
                  }
                });
                
                /**
                * footer
                */
                let orientingFooter
                if(localStorage.getItem('orientingFooter')){
                    orientingFooter = JSON.parse(localStorage.getItem('orientingFooter'));
                } else {
                    orientingFooter = [
                      {
                        type: \"header\",
                        data: {
                          text: \"Нуждается в медицинской помощи\",
                          level: 2
                        }
                      },
                      /*{
                        type: \"header\",
                        data: {
                          text: \"дезориентирован\",
                          level: 2
                        }
                      },*/
                      {
                        type : 'paragraph',
                        data : {
                          text : 'Просим сообщать любую информацию по телефону горячей линии:'
                        }
                      },
                      {
                        type: \"header\",
                        data: {
                          text: \"8(800) 123-45-67 или 112\",
                          level: 1
                        }
                      },
                      {
                        type: \"header\",
                        data: {
                          text: \"Нужна помощь добровольцев\",
                          level: 2
                        }
                      },
                  ];
                }
                
                var footer = new EditorJS({
                  /**
                   * Wrapper of Editor
                   */
                  holderId: 'editorjs-footer',
                  /**
                   * Tools list
                   */
                  tools: {
                      header: {
                          class: Header,
                          inlineToolbar: ['link'],
                          config: {
                            placeholder: 'Заголовок'
                          },
                          shortcut: 'CMD+SHIFT+H'
                        },
                  },
                  /**
                   * Initial Editor data
                   */
                  data: { 
                      blocks: orientingFooter
                  },
                  onReady: function(){
                    //saveButton.click();
                  },
                  onChange: function() {
                    footer.save().then((outputFooter) => {
                        localStorage.setItem('orientingFooter', JSON.stringify(outputFooter.blocks));
                    }).catch((error) => {
                        console.log('Saving failed: ', error)
                    });
                  }
                });

            });
        </script>
 
    </head>
    <body>
        
        <main>
            <!-- Header -->
            <header uk-sticky=\"sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #sticky-dropdown\">
                ";
        // line 891
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 892
        echo "                <div id=\"separator\"></div>
            </header>
    
            <!-- Content -->
            <section id=\"layout-content\">
                </section>
                
                <div class=\"uk-section uk-section-default\">
    
    \t\t\t<div class=\"uk-container\">
    \t\t\t\t<div uk-grid=\"\" class=\"uk-grid\">
    \t\t\t\t
    \t\t\t\t    <!--{ % partial 'site/left-sidebar' %}-->

    
    \t\t\t\t\t<div class=\"uk-width-1-1@m uk-first-column\">
    \t\t\t\t\t\t<article class=\"uk-article\">
    \t\t\t\t\t\t    ";
        // line 909
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 910
        echo "    \t\t\t\t\t\t</article>
    \t\t\t\t\t</div>

    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
\t\t
    
            <!-- Footer -->
            <footer id=\"layout-footer\">
                ";
        // line 920
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 921
        echo "            </footer>
        </main>
        
        ";
        // line 924
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/modals"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 925
        echo "        <!-- Scripts -->

        <script src=\"";
        // line 927
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/uikit-icons.min.js");
        echo "\"></script>

        ";
        // line 929
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 930
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 931
        echo "        
        <script>
    /*
            var generator_announcement = new Vue({
                el: '#generator_announcement',
                delimiters: ['[[',']]'],
                data: {
                    creator: true,
                    explorer: false,
                    test: 4444,
                    tabs: [
                        {
                            name: 'constructor',
                            title: 'Конструктор dsfdsf',
                            status: true
                        }, {
                            name: 'view',
                            title: 'Генерация и просмотр',
                            status: false
                        },  {
                            name: 'history',
                            title: 'История',
                            status: false
                        }, {
                            name: 'item',
                            title: 'Item',
                            status: false
                        },
                    ]
                },
                methods: {
                    isActive: function(menuItem) {
                        //console.log(menuItem);
                      return this.activeItem === menuItem
                    },
                    setActive: function(index) {
                        let tabs = this.tabs;
                        tabs.forEach(function(tab){
                            tab.status == false;
                        });
                        
                        \$(\"#tab-id div\").removeClass();
                        
                        //\$(\"#tab-id div\").addClass('active');
                        
                        document.querySelector('#tab-id div')[index].classList.add('active');
                        
                        this.tabs[index].status = true;

                    },
                },
            });
            */
            
            new Vue({
              el: \"#app\",
              delimiters: ['[[',']]'],
              data: {
                zoomer: {
                    status: false,
                    src: ''
                },
                activeItem: 'constructor',
                history: []
              },
              mounted: function(){
                  //console.log(JSON.parse(localStorage.getItem('getHistory')));
                  
              },
              methods: {
                
                visibleZoom: function(id, src){
                    console.log(src);
                    this.zoomer.id = id;
                    this.zoomer.src = src;
                    this.zoomer.status = true;
                },
                closeZoom: function(){
                    this.zoomer.id = '';
                    this.zoomer.src = '';
                    this.zoomer.status = false;
                },
              \tisActive (menuItem) {
                  return this.activeItem === menuItem
                },
                setActive (menuItem) {
                  this.activeItem = menuItem
                }
              }
            })
           
        </script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-H97X2EKL3G\"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-H97X2EKL3G');
        </script>
        
        <!-- Yandex.Metrika counter -->
        <script type=\"text/javascript\" >
           (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
           m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
           (window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");
        
           ym(73503937, \"init\", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
           });
        </script>
        <noscript><div><img src=\"https://mc.yandex.ru/watch/73503937\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>
        <!-- /Yandex.Metrika counter -->

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/l/lutsyi1l/poiskovik.app/public_html/themes/klimbatika/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1082 => 931,  1078 => 930,  1067 => 929,  1062 => 927,  1058 => 925,  1054 => 924,  1049 => 921,  1045 => 920,  1033 => 910,  1031 => 909,  1012 => 892,  1008 => 891,  797 => 683,  793 => 682,  788 => 680,  784 => 679,  779 => 676,  776 => 675,  149 => 51,  144 => 49,  140 => 48,  136 => 47,  132 => 46,  128 => 45,  124 => 44,  120 => 43,  116 => 42,  111 => 40,  96 => 28,  92 => 27,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  68 => 18,  60 => 13,  55 => 11,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set site_url = 'https://poiskovik.app' %}
{% set site_name = 'Конструктор ориентировок по поиску без вести пропавших' %}
{% set title_page = 'Конструктор-генератор ориентировок по поиску без вести пропавших | Создать ориентировку онлайн' %}
{% set description_page = 'Создать ориентировку онлайн. Шаблон ориентировки по поиску без вести пропавшего человека с возможностью создать свое объявление и выгрузить в формате JPG на печать. Конструктор-генератор ориентировок по поиску без вести пропавших. Бесплатно создавайте объявления.' %}


<!DOCTYPE html>
<html id=\"release\">
    <head>
        <meta charset=\"UTF-8\">
    \t<title>{{title_page}}</title>
        
        <meta name=\"description\" content=\"{{ description_page }}\">
        
        <meta name=\"author\" content=\"Contentim\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/icon.png'|theme }}\">
        
        <meta property=\"og:locale\" content=\"ru_RU\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:title\" content=\"{{title_page}}\" />
        <meta property=\"og:description\" content=\"{{ description_page }}\" />
        <meta property=\"og:url\" content=\"{{ site_url }}\" />
        <meta property=\"og:site_name\" content=\"{{ site_name }}\" />
        <meta name=\"twitter:card\" content=\"summary_large_image\" />
        <meta name=\"twitter:description\" content=\"{{ description_page }}\" />
        <meta name=\"twitter:title\" content=\"{{site_url}}\" />
        
        <meta name=\"yandex-verification\" content=\"1c96194a3deb430a\" />
        
        <!--
    \t<link rel=\"icon\" type=\"image/png\" href=\"https://ibuildrussia.ru/themes/kenshin-kenshinschool/assets/images/home.png\">
    \t-->
    \t
    \t<!--<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">-->
    \t
    \t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js\"></script>    
        
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/uikit.css'|theme }}\">
        <!--<link rel=\"stylesheet\" href=\"/assets/css/uikit-rtl.css\">-->
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/awesome/css/fontawesome.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/awesome/css/all.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/awesome/css/brands.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/awesome/css/regular.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/awesome/css/solid.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/awesome/css/svg-with-js.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/awesome/css/v4-shims.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/aplayer/dist/APlayer.min.css'|theme }}\">
        
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.css?v=2.0'|theme }}\">
        
                   
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
        
        

<!-- system -->
<style>
\t.uk-container::before, .uk-container::after {
\t\tdisplay: none !important;
\t}
\t#nav {
\t\twidth: 1240px;
\t\tmin-width: 1240px;
\t\tmargin: auto;
\t\tpadding: 0;

\t\tdisplay: -ms-flexbox;
\t\tdisplay: -webkit-flex;
\t\tdisplay: flex;
\t\t-webkit-flex-direction: row;
\t\t-ms-flex-direction: row;
\t\tflex-direction: row;
\t\t-webkit-flex-wrap: nowrap;
\t\t-ms-flex-wrap: nowrap;
\t\tflex-wrap: nowrap;
\t\t-webkit-justify-content: space-between;
\t\t-ms-flex-pack: justify;
\t\tjustify-content: space-between;
\t\t-webkit-align-content: stretch;
\t\t-ms-flex-line-pack: stretch;
\t\talign-content: stretch;
\t\t-webkit-align-items: center;
\t\t-ms-flex-align: center;
\t\talign-items: center;
\t}
\t#nav .title {

\t}
\t#nav .title a {

\t}
\t#nav .title a:hover {
\t\ttext-decoration: none;
\t}
\t#nav .title h1 {
\t\tfont-size: 30px;
\t\tmargin: 0;
\t\tfont-weight: 600;
\t}
\t#nav .about {

\t}
</style>

<style>
    [contenteditable] {
      outline: 0px solid transparent;
    }
    #separator {
        width: 100%;
        height: 5px;
        position: absolute;
        bottom: -5px;
        background: #ddd;
    }

                
    @font-face {
        font-family: 'DejaVu Sans';
        src: local('DejaVu Sans ExtraLight'), local('DejaVuSans-ExtraLight'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansextralight.woff2') format('woff2'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansextralight.woff') format('woff'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansextralight.ttf') format('truetype');
        font-weight: 200;
        font-style: normal;
    }
    @font-face {
        font-family: 'DejaVu Sans';
        src: local('DejaVu Sans'), local('DejaVuSans'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusans.woff2') format('woff2'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusans.woff') format('woff'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusans.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
    }
    @font-face {
        font-family: 'DejaVu Sans';
        src: local('DejaVu Sans Oblique'), local('DejaVuSans-Oblique'),
        url('dejavusansoblique.woff2') format('woff2'),
        url('dejavusansoblique.woff') format('woff'),
        url('dejavusansoblique.ttf') format('truetype');
        font-weight: 400;
        font-style: italic;
    }
    @font-face {
        font-family: 'DejaVu Sans';
        src: local('DejaVu Sans Bold'), local('DejaVuSans-Bold'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansbold.woff2') format('woff2'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansbold.woff') format('woff'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansbold.ttf') format('truetype');
        font-weight: 700;
        font-style: normal;
    }
    @font-face {
        font-family: 'DejaVu Sans';
        src: local('DejaVu Sans Bold Oblique'), local('DejaVuSans-BoldOblique'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansboldoblique.woff2') format('woff2'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansboldoblique.woff') format('woff'),
        url('/themes/klimbatika/assets/fonts/djsans/dejavusansboldoblique.ttf') format('truetype');
        font-weight: 700;
        font-style: italic;
    }

    #release .uk-container {
        width: 1220px;
        min-width: 1220px;
        padding: 0;
    }
    #release .uk-section.uk-section-default {
        min-height: 100vh; 
        padding-top: 16px;
    }
    #release .uk-container > .uk-grid {
        margin: 0;
    }
    #release .uk-container .uk-first-column {
        padding: 0;
    }
    
    #last-name {
        font-size: 70px;
        text-transform: uppercase;
        font-weight: 700;
        padding: 3px 0 0 5px;
        position: relative;
        top: -6px;
        left: -4px;
        margin: 0;
        height: 62px;
        color: #111;
        width: 100%;
        font-family: 'DejaVu Sans';
        border: 1px solid #8c3a4d;
        text-indent: -5px;
    }
    #name-age {
        font-size: 24px;
        text-transform: uppercase;
        font-weight: 700;
        padding: 0 0 0 4px;
        text-align: left;
        font-family: 'DejaVu Sans';
        position: relative;
        top: -2px;
        left: -4px;
        margin: 0;
        height: 32px;
        color: #000;
        border: 1px solid #8c3a4d;
        width: 100%;
        line-height: 30px;
    }
    
    #creator-form {
        height:812px;
        width: 1220px;
        margin: auto;
    }
    .level_1 {
        position: relative;
        height: 812px;
        width: 1220px;
        background: #e21e22; /* ff6600 */
    }
    .level_2 {
        border: 20px solid #e21e22; /* ff6600 */
        height: calc(100% - 120px);
        padding: 15px;
        width: calc(100% - 70px);
        background: #fff;
        border-top: 45px solid #e21e22; /* ff6600 */
        border-bottom: 45px solid #e21e22; /* ff6600 */
    }
    .content {
        width: 100%;
        height: 100%;
    }
    .info {
        width: 100%;
        height: inherit;
    }
    #upload__img {
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
    }
    
    .info .img {
        width: 380px;
        height: inherit;
        float: left;
        margin: 0;
        padding: 0;
        overflow: hidden;
        position: relative;
    }
    .info .text {
        padding: 0;
        float: right;
        width: 735px;
        margin: 0;
        position: relative;
        height: inherit;
    }
    .img_wrapper {
        position: relative;
        border: 3px solid #e21e22;
        height: 451px;
        overflow: hidden;
    }
    
    
</style>

<!-- creator -->
<style>
    .editor {
        position: relative;
        text-align: left;
        max-height: 605px;
        overflow: overlay;
    }
    
    #creator-form .ce-header {
        color: #000;
    }
    
    #upload_img {
        height: 100%;
        
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-content: stretch;
        -ms-flex-line-pack: stretch;
        align-content: stretch;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }
    
    .wrapp__info {
        color: grey;
        transition: 200ms color;
        text-align: center;
        margin: 0 0 10px;
    }
    .wrapp__info .size {
        font-weight: 600;
        color: #111;
    }
    .wrapp__info div {
        margin: 0;
        line-height: normal;
    }
    .upload_img_container .form-group {padding: 0;margin: 0 0 15px;}
    .upload_img_container input[type=file] {outline:0;opacity:0;pointer-events:none;user-select:none}
    .upload_img_container .label {width:140px;border:2px dashed grey;border-radius:5px;display:block;padding:1.2em;transition:border 300ms ease;cursor:pointer;text-align:center}
    .upload_img_container .label i {display:block;font-size:42px;padding-bottom:16px}
    .upload_img_container .label i, .upload_img_container .label .title {color:grey;transition:200ms color}
    .upload_img_container .label:hover {border:2px solid #000;background: moccasin;}
    .upload_img_container .label:hover i, .upload_img_container .label:hover .title {color:#000}
    
    .submit__wrapper button {
        color: #555;
        line-height: normal;
        width: 183px;
        margin: auto;
        border: 2px solid #555;
        padding: 10px 0;
        background: transparent;
    }
    .submit__wrapper button:hover {
        cursor: pointer;
        background: moccasin;
    }
    
    .input__file {
        opacity: 0;
        visibility: hidden;
        position: absolute;
    }
    
    #remove_image {
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        
        display: -ms-flexbox;
        display: -webkit-flex;
        display: none;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-align-content: stretch;
        -ms-flex-line-pack: stretch;
        align-content: stretch;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }
    #remove_image button {
        display: none;
        color: #555;
        line-height: normal;
        width: 183px;
        margin: auto;
        border: 2px solid #555;
        padding: 10px 0;
        background: #fff;
    }
    #remove_image:hover button {
        display: block;
    }
    #remove_image button:hover {
        cursor: pointer;
        background: moccasin;
    }
    
    /* Editor.js */
    #creator-form .ce-header {
        font-family: 'DejaVu Sans';
        font-weight: 700;
    }
    
    
    #creator-form h1.ce-header {
        /*padding: 0;
        line-height: 60px;
        margin: 0 0 10px;
        font-size: 70px;
        text-transform: uppercase;
        text-indent: -3px;*/
        padding: 0;
        line-height: 60px;
        margin: 0;
        font-size: 60px;
        text-transform: uppercase;
        text-indent: -1px;
    }
    #creator-form h2.ce-header {
        padding: 0;
        line-height: 30px;
        margin: 0 0 20px;
        font-size: 24px;
        text-transform: uppercase;
    }
    #creator-form .ce-paragraph {
        font-family: 'DejaVu Sans';
        font-size: 22px;
        padding: 0;
        line-height: 1.2em;
        margin: 0 0 5px;
    }
    
    .text .footer {
        border-top: 4px solid #e21e22;
        position: absolute;
        bottom: 0;
        width: 100%;
        background: #fff;
        z-index: 9;
        padding-top: 10px;
        color: #000;
    }
    #creator-form .footer .codex-editor__redactor {
        width: 100%
    }
    #creator-form .footer .ce-header {
        text-align: center;
        margin: 0;
        padding: 0;
    }
    #creator-form .footer h1.ce-header {
        font-size: 44px;
        text-transform: initial;
    }
    #creator-form .footer h2.ce-header {
        line-height: 30px;
        font-size: 26px;
        text-transform: uppercase;
    }
    #creator-form .footer .ce-paragraph {
        padding: 0;
        line-height: normal;
        font-size: 20px;
        text-align: center;
    }
    

    /* clearfix */
    .clearfix:before, .clearfix:after {
        content: \" \";
        display: table;
    }
    .clearfix:after {
        clear: both;
    }
    .clearfix {
        *zoom: 1;
        clear: both;
    }
    .header {
        padding: 15px 0;

        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-align-content: stretch;
        -ms-flex-line-pack: stretch;
        align-content: stretch;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }
    .header .download {
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-align-content: stretch;
        -ms-flex-line-pack: stretch;
        align-content: stretch;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }
    .header .download span {
        margin: 0 10px 0 0;
        font-size: 18px;
        line-height: 24px;
    }
    .header .download button {
        background-color: #ff6600;
        color: #fff;
        padding: 10px 5px;
        display: block;
        font-size: 20px;
        transition: 0.1s ease-in-out;
        transition-property: color, background-color;
        text-decoration: none;
        cursor: pointer;
        border: none;
        line-height: 24px;
        font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
        max-width: 320px;
    }
    #creator-form div.footer > div:nth-child(2) {
        width: 100% !important;
        margin: 0 !important;
    }
    
    .notification {
        font-family: 'DejaVu Sans';
        font-size: 60px;
        text-align: center;
        text-transform: uppercase;
        font-weight: 700;
        line-height: 70px;
    }
    .notification .item_1 {
        margin: 0 0 20px;
    }
    .notification .item_2 {
        font-size: 99px;
        text-indent: -4px;
        margin: 0 0 10px;
    }
    .notification .item_3 {}
    

    #editorjs-title .ce-block__content,
    #editorjs-subtitle .ce-block__content,
    #editorjs-editor .ce-block__content,
    #editorjs-footer .ce-block__content {
        max-width: 100%;
    }
    
    #editorjs-title .codex-editor__redactor,
    #editorjs-subtitle .codex-editor__redactor,
    #editorjs-editor .codex-editor__redactor,
    #editorjs-footer .codex-editor__redactor,
    #editorjs-top .codex-editor__redactor,
    #editorjs-bottom .codex-editor__redactor {
        padding: 0 !important;
    }
    
    .editor-top, 
    .editor-bottom {
        position: absolute;
        width: 100%;
    }
    .editor-top {
        top: 6px;
    }
    .editor-bottom {
        bottom: 7px;
    }
    .editor-top div,
    .editor-bottom div{
        text-align: center;
        font-size: 26px;
        color: #fff;
        text-transform: uppercase;
    }
    
    #editorjs-footer [hidden] {
        /*display: block !important;*/
    }
    
    #editorjs-editor .codex-editor__redactor {
        /*display: none !important;*/
        max-height: 520px;
        min-height: 520px;
    }
    
    #commontTabs {
        margin: 20px 0 0;
    }
    #commontTabs li:nth-child(1) {
        padding: 0;
    }
    
    #downloadImage {
        margin: 0 0 0 10px;
    }
    #downloadImage:focus {
        outline: 0;
    }
    #viewImage {
        border: 1px solid #8c3a4d;
    }

    #tabContent > div {
        display: none;
    }
    #tabContent > div.active {
        display: block;
    }
    
    .nav-tabs {
        display: flex;
        flex-wrap: wrap;
        margin-left: -20px;
        margin-top: 20px;
        padding: 0;
        list-style: none;
        position: relative;
    }
    .nav-tabs .nav-item {
        flex: 1;
        padding-left: 20px;
        position: relative;
        min-width: 1px;
        width: 100%;
    }
    .nav-tabs .nav-item a {
        color: #111;
        font-size: 20px;
        
        display: block;
        text-align: center;
        padding: 5px 10px;
        border-bottom: 1px solid #999;
        text-transform: uppercase;
        transition: color 0.1s ease-in-out;
    }
    .nav-tabs .nav-item a:hover {
        text-decoration: none;        
    }
    .nav-tabs .nav-item a.active {
        border-bottom: 1px solid #8C3A4D;
    }
    
</style>
        
        {% styles %}
        
        <!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script> -->
        
        <script src=\"{{ 'assets/lib/jquery.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/uikit.js'|theme }}\"></script>
        
        <script src=\"{{ 'assets/js/nicEdit-latest.js'| theme }}\" type=\"text/javascript\"></script>
<!--        <script src=\"{{ 'assets/js/nicEdit.js'| theme }}\" type=\"text/javascript\"></script>-->

    
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/header@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/list@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/quote@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/warning@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/marker@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/embed@latest\"></script>
        
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/inline-code@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/delimiter@latest\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@editorjs/code@latest\"></script>

        
        <script>
            document.addEventListener('DOMContentLoaded', function(){
                
                /**
                * body
                */
                let orientingData
                if(localStorage.getItem('orientingData')){
                    orientingData = JSON.parse(localStorage.getItem('orientingData'));
                } else {
                    orientingData = [
                      {
                        type: \"header\",
                        data: {
                          text: \"Фамилия\",
                          level: 1
                        }
                      },
                      {
                        type: \"header\",
                        data: {
                          text: \"Имя Отчество, возраст\",
                          level: 2
                        }
                      },
                      {
                        type : 'paragraph',
                        data : {
                          text : '<b>01.01.2021 года в 8:00 ушла из дома по ул. Ленина в неизвестном направлении.<b>'
                        }
                      },
                      {
                        type : 'paragraph',
                        data : {
                          text : '<b>Приметы:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.'
                        }
                      },
                      {
                        type : 'paragraph',
                        data : {
                          text : '<b>Одежда:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.'
                        }
                      },
                      {
                        type : 'paragraph',
                        data : {
                          text : '<b>Особые приметы:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.'
                        }
                      },
                      {
                        type : 'paragraph',
                        data : {
                          text : '<b>Состояние здоровья:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore.'
                        }
                      },
                      {
                        type : 'paragraph',
                        data : {
                          text : '<b>Вещи:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.'
                        }
                      },
                    ];
                }
                
                var editor = new EditorJS({
                  /**
                   * Wrapper of Editor
                   */
                  holderId: 'editorjs-editor',
                  /**
                   * Tools list
                   */
                  tools: {
                      header: {
                          class: Header,
                          inlineToolbar: ['link'],
                          config: {
                            placeholder: 'Заголовок'
                          },
                          shortcut: 'CMD+SHIFT+H'
                        },
                  },
                  /**
                   * Initial Editor data
                   */
                  data: { 
                      blocks: orientingData
                  },
                  onReady: function(){
                    //saveButton.click();
                  },
                  onChange: function() {
                    editor.save().then((outputData) => {
                        localStorage.setItem('orientingData', JSON.stringify(outputData.blocks));
                    }).catch((error) => {
                        console.log('Saving failed: ', error)
                    });
                  }
                });
                
                /**
                * footer
                */
                let orientingFooter
                if(localStorage.getItem('orientingFooter')){
                    orientingFooter = JSON.parse(localStorage.getItem('orientingFooter'));
                } else {
                    orientingFooter = [
                      {
                        type: \"header\",
                        data: {
                          text: \"Нуждается в медицинской помощи\",
                          level: 2
                        }
                      },
                      /*{
                        type: \"header\",
                        data: {
                          text: \"дезориентирован\",
                          level: 2
                        }
                      },*/
                      {
                        type : 'paragraph',
                        data : {
                          text : 'Просим сообщать любую информацию по телефону горячей линии:'
                        }
                      },
                      {
                        type: \"header\",
                        data: {
                          text: \"8(800) 123-45-67 или 112\",
                          level: 1
                        }
                      },
                      {
                        type: \"header\",
                        data: {
                          text: \"Нужна помощь добровольцев\",
                          level: 2
                        }
                      },
                  ];
                }
                
                var footer = new EditorJS({
                  /**
                   * Wrapper of Editor
                   */
                  holderId: 'editorjs-footer',
                  /**
                   * Tools list
                   */
                  tools: {
                      header: {
                          class: Header,
                          inlineToolbar: ['link'],
                          config: {
                            placeholder: 'Заголовок'
                          },
                          shortcut: 'CMD+SHIFT+H'
                        },
                  },
                  /**
                   * Initial Editor data
                   */
                  data: { 
                      blocks: orientingFooter
                  },
                  onReady: function(){
                    //saveButton.click();
                  },
                  onChange: function() {
                    footer.save().then((outputFooter) => {
                        localStorage.setItem('orientingFooter', JSON.stringify(outputFooter.blocks));
                    }).catch((error) => {
                        console.log('Saving failed: ', error)
                    });
                  }
                });

            });
        </script>
 
    </head>
    <body>
        
        <main>
            <!-- Header -->
            <header uk-sticky=\"sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #sticky-dropdown\">
                {% partial 'site/header' %}
                <div id=\"separator\"></div>
            </header>
    
            <!-- Content -->
            <section id=\"layout-content\">
                </section>
                
                <div class=\"uk-section uk-section-default\">
    
    \t\t\t<div class=\"uk-container\">
    \t\t\t\t<div uk-grid=\"\" class=\"uk-grid\">
    \t\t\t\t
    \t\t\t\t    <!--{ % partial 'site/left-sidebar' %}-->

    
    \t\t\t\t\t<div class=\"uk-width-1-1@m uk-first-column\">
    \t\t\t\t\t\t<article class=\"uk-article\">
    \t\t\t\t\t\t    {% page %}
    \t\t\t\t\t\t</article>
    \t\t\t\t\t</div>

    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
\t\t
    
            <!-- Footer -->
            <footer id=\"layout-footer\">
                {% partial 'site/footer' %}
            </footer>
        </main>
        
        {% partial 'site/modals' %}
        <!-- Scripts -->

        <script src=\"{{ 'assets/js/uikit-icons.min.js'|theme }}\"></script>

        {% framework extras %}
        {% scripts %}
        
        <script>
    /*
            var generator_announcement = new Vue({
                el: '#generator_announcement',
                delimiters: ['[[',']]'],
                data: {
                    creator: true,
                    explorer: false,
                    test: 4444,
                    tabs: [
                        {
                            name: 'constructor',
                            title: 'Конструктор dsfdsf',
                            status: true
                        }, {
                            name: 'view',
                            title: 'Генерация и просмотр',
                            status: false
                        },  {
                            name: 'history',
                            title: 'История',
                            status: false
                        }, {
                            name: 'item',
                            title: 'Item',
                            status: false
                        },
                    ]
                },
                methods: {
                    isActive: function(menuItem) {
                        //console.log(menuItem);
                      return this.activeItem === menuItem
                    },
                    setActive: function(index) {
                        let tabs = this.tabs;
                        tabs.forEach(function(tab){
                            tab.status == false;
                        });
                        
                        \$(\"#tab-id div\").removeClass();
                        
                        //\$(\"#tab-id div\").addClass('active');
                        
                        document.querySelector('#tab-id div')[index].classList.add('active');
                        
                        this.tabs[index].status = true;

                    },
                },
            });
            */
            
            new Vue({
              el: \"#app\",
              delimiters: ['[[',']]'],
              data: {
                zoomer: {
                    status: false,
                    src: ''
                },
                activeItem: 'constructor',
                history: []
              },
              mounted: function(){
                  //console.log(JSON.parse(localStorage.getItem('getHistory')));
                  
              },
              methods: {
                
                visibleZoom: function(id, src){
                    console.log(src);
                    this.zoomer.id = id;
                    this.zoomer.src = src;
                    this.zoomer.status = true;
                },
                closeZoom: function(){
                    this.zoomer.id = '';
                    this.zoomer.src = '';
                    this.zoomer.status = false;
                },
              \tisActive (menuItem) {
                  return this.activeItem === menuItem
                },
                setActive (menuItem) {
                  this.activeItem = menuItem
                }
              }
            })
           
        </script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-H97X2EKL3G\"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-H97X2EKL3G');
        </script>
        
        <!-- Yandex.Metrika counter -->
        <script type=\"text/javascript\" >
           (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
           m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
           (window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");
        
           ym(73503937, \"init\", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
           });
        </script>
        <noscript><div><img src=\"https://mc.yandex.ru/watch/73503937\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>
        <!-- /Yandex.Metrika counter -->

    </body>
</html>", "/home/l/lutsyi1l/poiskovik.app/public_html/themes/klimbatika/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "styles" => 675, "partial" => 891, "page" => 909, "framework" => 929, "scripts" => 930);
        static $filters = array("escape" => 11, "theme" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'styles', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
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
