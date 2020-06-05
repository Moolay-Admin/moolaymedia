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

/* /var/www/html/themes/demo/partials/site/header.htm */
class __TwigTemplate_88bad70ac623d5fc5b75bc37ab3ab5aef448185adb7f7a8ca33bd2297cf1462e extends \Twig\Template
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
        echo "<header>
    <div id=\"menu-container\" class=\"not-active\">
      <div id=\"menu-dark-bg\"></div>
      <div id=\"menu-slash-bg\" class=\"d-flex align-items-center justify-content-center justify-content-xl-start\">
        <div class=\"inside-menu text-center text-xl-left\">
            <div class=\"inside-logo\">
                <a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                    <svg id=\"headerLogo\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 710.18 205.08\"><defs><style>.cls-1{fill:#0e0d0e;}.cls-2{fill:url(#linear-gradient);}</style><linearGradient id=\"linear-gradient\" x1=\"-0.09\" y1=\"103\" x2=\"211.83\" y2=\"103\" gradientUnits=\"userSpaceOnUse\"><stop offset=\"0\" stop-color=\"#00dcff\"/><stop offset=\"0.48\" stop-color=\"#00d5ff\"/><stop offset=\"1\" stop-color=\"#417fff\"/></linearGradient></defs><path class=\"cls-1\" d=\"M251.4,18.81h27.81l16,43.46L310.7,18.81h27.71V91.2H315.82V55.11L304.67,91.2H285.24L274.1,55.11V91.2H251.4Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M383.91,91.92c-20.55,0-37.32-15.44-37.32-37.22s16.77-37.12,37.32-37.12S421,32.92,421,54.7,404.36,91.92,383.91,91.92Zm0-21.17c9.1,0,14.11-6.44,14.11-16,0-9.81-5-16.15-14.11-16.15-9.3,0-14.21,6.34-14.21,16.15C369.7,64.31,374.61,70.75,383.91,70.75Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M464.49,91.92c-20.56,0-37.32-15.44-37.32-37.22s16.76-37.12,37.32-37.12S501.6,32.92,501.6,54.7,484.94,91.92,464.49,91.92Zm0-21.17c9.1,0,14.11-6.44,14.11-16,0-9.81-5-16.15-14.11-16.15-9.31,0-14.22,6.34-14.22,16.15C450.27,64.31,455.18,70.75,464.49,70.75Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M532.48,18.81V74h21.88V91.2H509.78V18.81Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M607.94,80.26H583.81L580.23,91.2H556.41l26.48-72.39h26.18L635.45,91.2H611.52ZM595.88,43l-6.55,20.15h13.09Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M635.45,18.81h26L673,44.48l11.56-25.67h25.56l-26,50.41v22h-22.7v-22Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M251.4,116h27.81l16,43.46L310.7,116h27.71v72.4H315.82v-36.1l-11.15,36.1H285.24l-11.14-36.1v36.1H251.4Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M396.9,134.12H371.34V143h22.49v17.07H371.34v10.23H396.9v18.1H348.64V116H396.9Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M473.28,152c0,20.66-14.52,36.41-37.63,36.41H405.49V116h30.16C458.76,116,473.28,131.16,473.28,152Zm-39.67,16.16c10,0,16.66-5.62,16.66-16.16s-6.64-16.15-16.66-16.15h-5.42v32.31Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M481.46,116h22.7v72.4h-22.7Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M560.8,177.48H536.67l-3.58,10.94H509.27L535.75,116h26.18l26.38,72.4H564.38Zm-12.06-37.22-6.55,20.14h13.09Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-2\" d=\"M130.66,129.66c-13.09-8.27-27-8.84-40.07-.63-20.7,13-40.92,26.74-61.19,40.4-6.62,4.47-9.21,11.33-8,19.13,2.41,15,18.55,21.73,31.54,13.22,17.39-11.4,34.75-22.84,51.94-34.55,3.66-2.49,6.24-2.89,9.94-.15,6.34,4.7,13.11,8.8,19.7,13.15,10.52,7,20.86,14.2,31.6,20.78,19.72,12.1,45.25-1.42,45.48-24.24.34-33.13.15-66.26.05-99.4a19.69,19.69,0,0,0-13.75-18.51c-13.28-4.37-26.27,5.35-26.35,20-.12,24,0,48,0,72v5.75C157.31,147.19,144.13,138.19,130.66,129.66ZM45.06,52.85c12,8,23.93,16.18,36.16,23.82,13.13,8.2,27,8.62,40.08.38,20.55-13,40.66-26.61,60.8-40.2,6.6-4.44,9.38-11.18,8.15-19-2.36-15.06-18.43-22-31.41-13.47-17.28,11.29-34.55,22.61-51.55,34.3-4.17,2.86-6.91,3-11.08.11C79.92,27.59,63.38,16.78,46.86,6c-10-6.54-20.55-7.44-31.11-1.74C5,10-.09,19.34-.09,31.5q0,47.66,0,95.3c0,12.47,8.34,21.44,19.89,21.49,11.75.06,20.24-8.94,20.27-21.63.05-23.72,0-47.43,0-71.14v-5.8C42.28,51.1,43.69,52,45.06,52.85Z\" transform=\"translate(0.09 -0.46)\"/></svg>
                </a>
            </div>
            <div class=\"main-menu-nav\">
                <ul class=\"list-unstyled\">
                    <li class=\"";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
                    <li class=\"";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14) == "about-us")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
        echo "\">About</a></li>
                    <li class=\"";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15) == "services")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\">Services</a></li>
                    <li class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) == "work")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("work");
        echo "\">The Work</a></li>
                    ";
        // line 20
        echo "                    <li class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20) == "contact")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Get in touch</a></li>
                </ul>
            </div>
            <div class=\"social\">
                <a href=\"https://www.facebook.com/moolaymedia\" target=\"_blank\" class=\"mr-4 d-inline-block\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                <a href=\"https://www.instagram.com/moolaymedia/\" target=\"_blank\" class=\"mr-4 d-inline-block\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
                <a href=\"https://www.linkedin.com/company/moolaymedia/\" target=\"_blank\" class=\"d-inline-block\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></i></a>
            </div>
            <div class=\"signature-location\">
                <img src=\"";
        // line 29
        echo $this->extensions['System\Twig\Extension']->mediaFilter("contact/newport-beach-asset.png");
        echo "\" class=\"mb-4 d-block\"alt=\"Newport Beach\">
                <a href=\"https://g.page/moolaymedia?share\" target=\"_blank\" class=\"d-block font-weight-900 mb-3 text-black\">
                    620 Newport Center Drive, <br> Suite 370, Newport Beach, CA 92660
                </a>
                <a href=\"tel:949-610-8969\" class=\"d-block font-weight-500 phone\">
                    <b>(949) 610-8969</b>
                </a>
            </div>
        </div>
      </div>
    </div>

    <div class=\"menu-button top-screen burger-black\"> <!-- menu button -->
      <svg class=\"hamburger-svg hamburger-top-svg\" viewBox=\"0 0 40 6\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
        <polygon points=\"0,0 40,0 40,6 0,6\"></polygon>
      </svg>
      <svg class=\"hamburger-svg hamburger-bottom-svg\" viewBox=\"0 0 40 6\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
        <polygon points=\"0,0 40,0 40,6 0,6\"></polygon>
      </svg>
    </div>
    
    <div class=\"menu-button middle-screen burger-black\"> <!-- menu button -->
      <svg class=\"hamburger-svg hamburger-top-svg\" viewBox=\"0 0 40 6\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
        <polygon points=\"0,0 40,0 40,6 0,6\"></polygon>
      </svg>
      <svg class=\"hamburger-svg hamburger-bottom-svg\" viewBox=\"0 0 40 6\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
        <polygon points=\"0,0 40,0 40,6 0,6\"></polygon>
      </svg>
    </div>
    
    <div class=\"scroll-to-top-sidebar\">
        <span>Scroll to top</span>
    </div>
    <div class=\"logo-moolay\">
\t\t<a href=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t    <svg id=\"headerLogo\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 710.18 205.08\"><defs><style>.cls-1{fill:#0e0d0e;}.cls-2{fill:url(#linear-gradient);}</style><linearGradient id=\"linear-gradient\" x1=\"-0.09\" y1=\"103\" x2=\"211.83\" y2=\"103\" gradientUnits=\"userSpaceOnUse\"><stop offset=\"0\" stop-color=\"#00dcff\"/><stop offset=\"0.48\" stop-color=\"#00d5ff\"/><stop offset=\"1\" stop-color=\"#417fff\"/></linearGradient></defs><path class=\"cls-1\" d=\"M251.4,18.81h27.81l16,43.46L310.7,18.81h27.71V91.2H315.82V55.11L304.67,91.2H285.24L274.1,55.11V91.2H251.4Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M383.91,91.92c-20.55,0-37.32-15.44-37.32-37.22s16.77-37.12,37.32-37.12S421,32.92,421,54.7,404.36,91.92,383.91,91.92Zm0-21.17c9.1,0,14.11-6.44,14.11-16,0-9.81-5-16.15-14.11-16.15-9.3,0-14.21,6.34-14.21,16.15C369.7,64.31,374.61,70.75,383.91,70.75Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M464.49,91.92c-20.56,0-37.32-15.44-37.32-37.22s16.76-37.12,37.32-37.12S501.6,32.92,501.6,54.7,484.94,91.92,464.49,91.92Zm0-21.17c9.1,0,14.11-6.44,14.11-16,0-9.81-5-16.15-14.11-16.15-9.31,0-14.22,6.34-14.22,16.15C450.27,64.31,455.18,70.75,464.49,70.75Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M532.48,18.81V74h21.88V91.2H509.78V18.81Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M607.94,80.26H583.81L580.23,91.2H556.41l26.48-72.39h26.18L635.45,91.2H611.52ZM595.88,43l-6.55,20.15h13.09Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M635.45,18.81h26L673,44.48l11.56-25.67h25.56l-26,50.41v22h-22.7v-22Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M251.4,116h27.81l16,43.46L310.7,116h27.71v72.4H315.82v-36.1l-11.15,36.1H285.24l-11.14-36.1v36.1H251.4Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M396.9,134.12H371.34V143h22.49v17.07H371.34v10.23H396.9v18.1H348.64V116H396.9Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M473.28,152c0,20.66-14.52,36.41-37.63,36.41H405.49V116h30.16C458.76,116,473.28,131.16,473.28,152Zm-39.67,16.16c10,0,16.66-5.62,16.66-16.16s-6.64-16.15-16.66-16.15h-5.42v32.31Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M481.46,116h22.7v72.4h-22.7Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M560.8,177.48H536.67l-3.58,10.94H509.27L535.75,116h26.18l26.38,72.4H564.38Zm-12.06-37.22-6.55,20.14h13.09Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-2\" d=\"M130.66,129.66c-13.09-8.27-27-8.84-40.07-.63-20.7,13-40.92,26.74-61.19,40.4-6.62,4.47-9.21,11.33-8,19.13,2.41,15,18.55,21.73,31.54,13.22,17.39-11.4,34.75-22.84,51.94-34.55,3.66-2.49,6.24-2.89,9.94-.15,6.34,4.7,13.11,8.8,19.7,13.15,10.52,7,20.86,14.2,31.6,20.78,19.72,12.1,45.25-1.42,45.48-24.24.34-33.13.15-66.26.05-99.4a19.69,19.69,0,0,0-13.75-18.51c-13.28-4.37-26.27,5.35-26.35,20-.12,24,0,48,0,72v5.75C157.31,147.19,144.13,138.19,130.66,129.66ZM45.06,52.85c12,8,23.93,16.18,36.16,23.82,13.13,8.2,27,8.62,40.08.38,20.55-13,40.66-26.61,60.8-40.2,6.6-4.44,9.38-11.18,8.15-19-2.36-15.06-18.43-22-31.41-13.47-17.28,11.29-34.55,22.61-51.55,34.3-4.17,2.86-6.91,3-11.08.11C79.92,27.59,63.38,16.78,46.86,6c-10-6.54-20.55-7.44-31.11-1.74C5,10-.09,19.34-.09,31.5q0,47.66,0,95.3c0,12.47,8.34,21.44,19.89,21.49,11.75.06,20.24-8.94,20.27-21.63.05-23.72,0-47.43,0-71.14v-5.8C42.28,51.1,43.69,52,45.06,52.85Z\" transform=\"translate(0.09 -0.46)\"/></svg>
\t\t</a>
\t</div>



";
        // line 173
        echo "</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 173,  140 => 63,  103 => 29,  86 => 20,  78 => 16,  70 => 15,  62 => 14,  54 => 13,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <div id=\"menu-container\" class=\"not-active\">
      <div id=\"menu-dark-bg\"></div>
      <div id=\"menu-slash-bg\" class=\"d-flex align-items-center justify-content-center justify-content-xl-start\">
        <div class=\"inside-menu text-center text-xl-left\">
            <div class=\"inside-logo\">
                <a href=\"{{ 'home'|page }}\">
                    <svg id=\"headerLogo\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 710.18 205.08\"><defs><style>.cls-1{fill:#0e0d0e;}.cls-2{fill:url(#linear-gradient);}</style><linearGradient id=\"linear-gradient\" x1=\"-0.09\" y1=\"103\" x2=\"211.83\" y2=\"103\" gradientUnits=\"userSpaceOnUse\"><stop offset=\"0\" stop-color=\"#00dcff\"/><stop offset=\"0.48\" stop-color=\"#00d5ff\"/><stop offset=\"1\" stop-color=\"#417fff\"/></linearGradient></defs><path class=\"cls-1\" d=\"M251.4,18.81h27.81l16,43.46L310.7,18.81h27.71V91.2H315.82V55.11L304.67,91.2H285.24L274.1,55.11V91.2H251.4Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M383.91,91.92c-20.55,0-37.32-15.44-37.32-37.22s16.77-37.12,37.32-37.12S421,32.92,421,54.7,404.36,91.92,383.91,91.92Zm0-21.17c9.1,0,14.11-6.44,14.11-16,0-9.81-5-16.15-14.11-16.15-9.3,0-14.21,6.34-14.21,16.15C369.7,64.31,374.61,70.75,383.91,70.75Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M464.49,91.92c-20.56,0-37.32-15.44-37.32-37.22s16.76-37.12,37.32-37.12S501.6,32.92,501.6,54.7,484.94,91.92,464.49,91.92Zm0-21.17c9.1,0,14.11-6.44,14.11-16,0-9.81-5-16.15-14.11-16.15-9.31,0-14.22,6.34-14.22,16.15C450.27,64.31,455.18,70.75,464.49,70.75Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M532.48,18.81V74h21.88V91.2H509.78V18.81Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M607.94,80.26H583.81L580.23,91.2H556.41l26.48-72.39h26.18L635.45,91.2H611.52ZM595.88,43l-6.55,20.15h13.09Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M635.45,18.81h26L673,44.48l11.56-25.67h25.56l-26,50.41v22h-22.7v-22Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M251.4,116h27.81l16,43.46L310.7,116h27.71v72.4H315.82v-36.1l-11.15,36.1H285.24l-11.14-36.1v36.1H251.4Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M396.9,134.12H371.34V143h22.49v17.07H371.34v10.23H396.9v18.1H348.64V116H396.9Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M473.28,152c0,20.66-14.52,36.41-37.63,36.41H405.49V116h30.16C458.76,116,473.28,131.16,473.28,152Zm-39.67,16.16c10,0,16.66-5.62,16.66-16.16s-6.64-16.15-16.66-16.15h-5.42v32.31Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M481.46,116h22.7v72.4h-22.7Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M560.8,177.48H536.67l-3.58,10.94H509.27L535.75,116h26.18l26.38,72.4H564.38Zm-12.06-37.22-6.55,20.14h13.09Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-2\" d=\"M130.66,129.66c-13.09-8.27-27-8.84-40.07-.63-20.7,13-40.92,26.74-61.19,40.4-6.62,4.47-9.21,11.33-8,19.13,2.41,15,18.55,21.73,31.54,13.22,17.39-11.4,34.75-22.84,51.94-34.55,3.66-2.49,6.24-2.89,9.94-.15,6.34,4.7,13.11,8.8,19.7,13.15,10.52,7,20.86,14.2,31.6,20.78,19.72,12.1,45.25-1.42,45.48-24.24.34-33.13.15-66.26.05-99.4a19.69,19.69,0,0,0-13.75-18.51c-13.28-4.37-26.27,5.35-26.35,20-.12,24,0,48,0,72v5.75C157.31,147.19,144.13,138.19,130.66,129.66ZM45.06,52.85c12,8,23.93,16.18,36.16,23.82,13.13,8.2,27,8.62,40.08.38,20.55-13,40.66-26.61,60.8-40.2,6.6-4.44,9.38-11.18,8.15-19-2.36-15.06-18.43-22-31.41-13.47-17.28,11.29-34.55,22.61-51.55,34.3-4.17,2.86-6.91,3-11.08.11C79.92,27.59,63.38,16.78,46.86,6c-10-6.54-20.55-7.44-31.11-1.74C5,10-.09,19.34-.09,31.5q0,47.66,0,95.3c0,12.47,8.34,21.44,19.89,21.49,11.75.06,20.24-8.94,20.27-21.63.05-23.72,0-47.43,0-71.14v-5.8C42.28,51.1,43.69,52,45.06,52.85Z\" transform=\"translate(0.09 -0.46)\"/></svg>
                </a>
            </div>
            <div class=\"main-menu-nav\">
                <ul class=\"list-unstyled\">
                    <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
                    <li class=\"{% if this.page.id == 'about-us' %}active{% endif %}\"><a href=\"{{ 'about-us'|page }}\">About</a></li>
                    <li class=\"{% if this.page.id == 'services' %}active{% endif %}\"><a href=\"{{ 'services'|page }}\">Services</a></li>
                    <li class=\"{% if this.page.id == 'work' %}active{% endif %}\"><a href=\"{{ 'work'|page }}\">The Work</a></li>
                    {#
                    <li class=\"{% if this.page.id == 'news' %}active{% endif %}\"><a href=\"{{ 'blog'|page }}\">Blog</a></li>
                    #}
                    <li class=\"{% if this.page.id == 'contact' %}active{% endif %}\"><a href=\"{{ 'contact'|page }}\">Get in touch</a></li>
                </ul>
            </div>
            <div class=\"social\">
                <a href=\"https://www.facebook.com/moolaymedia\" target=\"_blank\" class=\"mr-4 d-inline-block\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                <a href=\"https://www.instagram.com/moolaymedia/\" target=\"_blank\" class=\"mr-4 d-inline-block\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
                <a href=\"https://www.linkedin.com/company/moolaymedia/\" target=\"_blank\" class=\"d-inline-block\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></i></a>
            </div>
            <div class=\"signature-location\">
                <img src=\"{{ 'contact/newport-beach-asset.png'|media }}\" class=\"mb-4 d-block\"alt=\"Newport Beach\">
                <a href=\"https://g.page/moolaymedia?share\" target=\"_blank\" class=\"d-block font-weight-900 mb-3 text-black\">
                    620 Newport Center Drive, <br> Suite 370, Newport Beach, CA 92660
                </a>
                <a href=\"tel:949-610-8969\" class=\"d-block font-weight-500 phone\">
                    <b>(949) 610-8969</b>
                </a>
            </div>
        </div>
      </div>
    </div>

    <div class=\"menu-button top-screen burger-black\"> <!-- menu button -->
      <svg class=\"hamburger-svg hamburger-top-svg\" viewBox=\"0 0 40 6\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
        <polygon points=\"0,0 40,0 40,6 0,6\"></polygon>
      </svg>
      <svg class=\"hamburger-svg hamburger-bottom-svg\" viewBox=\"0 0 40 6\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
        <polygon points=\"0,0 40,0 40,6 0,6\"></polygon>
      </svg>
    </div>
    
    <div class=\"menu-button middle-screen burger-black\"> <!-- menu button -->
      <svg class=\"hamburger-svg hamburger-top-svg\" viewBox=\"0 0 40 6\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
        <polygon points=\"0,0 40,0 40,6 0,6\"></polygon>
      </svg>
      <svg class=\"hamburger-svg hamburger-bottom-svg\" viewBox=\"0 0 40 6\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
        <polygon points=\"0,0 40,0 40,6 0,6\"></polygon>
      </svg>
    </div>
    
    <div class=\"scroll-to-top-sidebar\">
        <span>Scroll to top</span>
    </div>
    <div class=\"logo-moolay\">
\t\t<a href=\"{{ 'home'|page }}\">
\t\t    <svg id=\"headerLogo\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 710.18 205.08\"><defs><style>.cls-1{fill:#0e0d0e;}.cls-2{fill:url(#linear-gradient);}</style><linearGradient id=\"linear-gradient\" x1=\"-0.09\" y1=\"103\" x2=\"211.83\" y2=\"103\" gradientUnits=\"userSpaceOnUse\"><stop offset=\"0\" stop-color=\"#00dcff\"/><stop offset=\"0.48\" stop-color=\"#00d5ff\"/><stop offset=\"1\" stop-color=\"#417fff\"/></linearGradient></defs><path class=\"cls-1\" d=\"M251.4,18.81h27.81l16,43.46L310.7,18.81h27.71V91.2H315.82V55.11L304.67,91.2H285.24L274.1,55.11V91.2H251.4Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M383.91,91.92c-20.55,0-37.32-15.44-37.32-37.22s16.77-37.12,37.32-37.12S421,32.92,421,54.7,404.36,91.92,383.91,91.92Zm0-21.17c9.1,0,14.11-6.44,14.11-16,0-9.81-5-16.15-14.11-16.15-9.3,0-14.21,6.34-14.21,16.15C369.7,64.31,374.61,70.75,383.91,70.75Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M464.49,91.92c-20.56,0-37.32-15.44-37.32-37.22s16.76-37.12,37.32-37.12S501.6,32.92,501.6,54.7,484.94,91.92,464.49,91.92Zm0-21.17c9.1,0,14.11-6.44,14.11-16,0-9.81-5-16.15-14.11-16.15-9.31,0-14.22,6.34-14.22,16.15C450.27,64.31,455.18,70.75,464.49,70.75Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M532.48,18.81V74h21.88V91.2H509.78V18.81Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M607.94,80.26H583.81L580.23,91.2H556.41l26.48-72.39h26.18L635.45,91.2H611.52ZM595.88,43l-6.55,20.15h13.09Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M635.45,18.81h26L673,44.48l11.56-25.67h25.56l-26,50.41v22h-22.7v-22Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M251.4,116h27.81l16,43.46L310.7,116h27.71v72.4H315.82v-36.1l-11.15,36.1H285.24l-11.14-36.1v36.1H251.4Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M396.9,134.12H371.34V143h22.49v17.07H371.34v10.23H396.9v18.1H348.64V116H396.9Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M473.28,152c0,20.66-14.52,36.41-37.63,36.41H405.49V116h30.16C458.76,116,473.28,131.16,473.28,152Zm-39.67,16.16c10,0,16.66-5.62,16.66-16.16s-6.64-16.15-16.66-16.15h-5.42v32.31Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M481.46,116h22.7v72.4h-22.7Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M560.8,177.48H536.67l-3.58,10.94H509.27L535.75,116h26.18l26.38,72.4H564.38Zm-12.06-37.22-6.55,20.14h13.09Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-2\" d=\"M130.66,129.66c-13.09-8.27-27-8.84-40.07-.63-20.7,13-40.92,26.74-61.19,40.4-6.62,4.47-9.21,11.33-8,19.13,2.41,15,18.55,21.73,31.54,13.22,17.39-11.4,34.75-22.84,51.94-34.55,3.66-2.49,6.24-2.89,9.94-.15,6.34,4.7,13.11,8.8,19.7,13.15,10.52,7,20.86,14.2,31.6,20.78,19.72,12.1,45.25-1.42,45.48-24.24.34-33.13.15-66.26.05-99.4a19.69,19.69,0,0,0-13.75-18.51c-13.28-4.37-26.27,5.35-26.35,20-.12,24,0,48,0,72v5.75C157.31,147.19,144.13,138.19,130.66,129.66ZM45.06,52.85c12,8,23.93,16.18,36.16,23.82,13.13,8.2,27,8.62,40.08.38,20.55-13,40.66-26.61,60.8-40.2,6.6-4.44,9.38-11.18,8.15-19-2.36-15.06-18.43-22-31.41-13.47-17.28,11.29-34.55,22.61-51.55,34.3-4.17,2.86-6.91,3-11.08.11C79.92,27.59,63.38,16.78,46.86,6c-10-6.54-20.55-7.44-31.11-1.74C5,10-.09,19.34-.09,31.5q0,47.66,0,95.3c0,12.47,8.34,21.44,19.89,21.49,11.75.06,20.24-8.94,20.27-21.63.05-23.72,0-47.43,0-71.14v-5.8C42.28,51.1,43.69,52,45.06,52.85Z\" transform=\"translate(0.09 -0.46)\"/></svg>
\t\t</a>
\t</div>



{#
    <div class=\"logo-moolay\">
\t\t<svg id=\"headerLogo\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 710.18 205.08\"><defs><style>.cls-1{fill:#0e0d0e;}.cls-2{fill:url(#linear-gradient);}</style><linearGradient id=\"linear-gradient\" x1=\"-0.09\" y1=\"103\" x2=\"211.83\" y2=\"103\" gradientUnits=\"userSpaceOnUse\"><stop offset=\"0\" stop-color=\"#00dcff\"/><stop offset=\"0.48\" stop-color=\"#00d5ff\"/><stop offset=\"1\" stop-color=\"#417fff\"/></linearGradient></defs><path class=\"cls-1\" d=\"M251.4,18.81h27.81l16,43.46L310.7,18.81h27.71V91.2H315.82V55.11L304.67,91.2H285.24L274.1,55.11V91.2H251.4Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M383.91,91.92c-20.55,0-37.32-15.44-37.32-37.22s16.77-37.12,37.32-37.12S421,32.92,421,54.7,404.36,91.92,383.91,91.92Zm0-21.17c9.1,0,14.11-6.44,14.11-16,0-9.81-5-16.15-14.11-16.15-9.3,0-14.21,6.34-14.21,16.15C369.7,64.31,374.61,70.75,383.91,70.75Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M464.49,91.92c-20.56,0-37.32-15.44-37.32-37.22s16.76-37.12,37.32-37.12S501.6,32.92,501.6,54.7,484.94,91.92,464.49,91.92Zm0-21.17c9.1,0,14.11-6.44,14.11-16,0-9.81-5-16.15-14.11-16.15-9.31,0-14.22,6.34-14.22,16.15C450.27,64.31,455.18,70.75,464.49,70.75Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M532.48,18.81V74h21.88V91.2H509.78V18.81Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M607.94,80.26H583.81L580.23,91.2H556.41l26.48-72.39h26.18L635.45,91.2H611.52ZM595.88,43l-6.55,20.15h13.09Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M635.45,18.81h26L673,44.48l11.56-25.67h25.56l-26,50.41v22h-22.7v-22Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M251.4,116h27.81l16,43.46L310.7,116h27.71v72.4H315.82v-36.1l-11.15,36.1H285.24l-11.14-36.1v36.1H251.4Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M396.9,134.12H371.34V143h22.49v17.07H371.34v10.23H396.9v18.1H348.64V116H396.9Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M473.28,152c0,20.66-14.52,36.41-37.63,36.41H405.49V116h30.16C458.76,116,473.28,131.16,473.28,152Zm-39.67,16.16c10,0,16.66-5.62,16.66-16.16s-6.64-16.15-16.66-16.15h-5.42v32.31Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M481.46,116h22.7v72.4h-22.7Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M560.8,177.48H536.67l-3.58,10.94H509.27L535.75,116h26.18l26.38,72.4H564.38Zm-12.06-37.22-6.55,20.14h13.09Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-2\" d=\"M130.66,129.66c-13.09-8.27-27-8.84-40.07-.63-20.7,13-40.92,26.74-61.19,40.4-6.62,4.47-9.21,11.33-8,19.13,2.41,15,18.55,21.73,31.54,13.22,17.39-11.4,34.75-22.84,51.94-34.55,3.66-2.49,6.24-2.89,9.94-.15,6.34,4.7,13.11,8.8,19.7,13.15,10.52,7,20.86,14.2,31.6,20.78,19.72,12.1,45.25-1.42,45.48-24.24.34-33.13.15-66.26.05-99.4a19.69,19.69,0,0,0-13.75-18.51c-13.28-4.37-26.27,5.35-26.35,20-.12,24,0,48,0,72v5.75C157.31,147.19,144.13,138.19,130.66,129.66ZM45.06,52.85c12,8,23.93,16.18,36.16,23.82,13.13,8.2,27,8.62,40.08.38,20.55-13,40.66-26.61,60.8-40.2,6.6-4.44,9.38-11.18,8.15-19-2.36-15.06-18.43-22-31.41-13.47-17.28,11.29-34.55,22.61-51.55,34.3-4.17,2.86-6.91,3-11.08.11C79.92,27.59,63.38,16.78,46.86,6c-10-6.54-20.55-7.44-31.11-1.74C5,10-.09,19.34-.09,31.5q0,47.66,0,95.3c0,12.47,8.34,21.44,19.89,21.49,11.75.06,20.24-8.94,20.27-21.63.05-23.72,0-47.43,0-71.14v-5.8C42.28,51.1,43.69,52,45.06,52.85Z\" transform=\"translate(0.09 -0.46)\"/></svg>
\t</div>
    
    <div class=\"hamburger\">
    \t<div class=\"hamburger--container\">
    \t\t<div class=\"hamburger--bars\">
    \t\t\t
    \t\t</div>
    \t</div>
    </div>
    
    
    <div class=\"fsmenu\">
    \t<div class=\"fsmenu--container\">
    \t\t<div class=\"fsmenu--text-block\">
    \t\t\t<div class=\"fsmenu--text-container\">
    \t\t\t\t<ul class=\"fsmenu--list\">
    \t\t\t\t\t<li class=\"fsmenu--list-element\">
    \t\t\t\t\t\t<a href=\"#\">
    \t\t\t\t\t\t\t<span>Home</span>
    \t\t\t\t\t\t</a>
    \t\t\t\t\t\t<div class=\"fsmenu--scrolling-text\">
    \t\t\t\t\t\t\t<span>Home</span><span>Home</span><span>Home</span><span>Home</span><span>Home</span>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"fsmenu--link-img\">
    \t\t\t\t\t\t\t<div class=\"fsmenu--img-container\">
    \t\t\t\t\t\t\t\t<img src=\"https://witwinkel.ch/themes/witwinkel/assets/images/content/WITWINKEL-buero-albisrieden-2019.jpg\">
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</li>
    \t\t\t\t\t<li class=\"fsmenu--list-element\">
    \t\t\t\t\t\t<a href=\"#\">
    \t\t\t\t\t\t\t<span>TheWork</span>
    \t\t\t\t\t\t</a>
    \t\t\t\t\t\t<div class=\"fsmenu--scrolling-text\">
    \t\t\t\t\t\t\t<span>Work</span><span>Work</span><span>Work</span><span>Work</span><span>Work</span>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"fsmenu--link-img\">
    \t\t\t\t\t\t\t<div class=\"fsmenu--img-container\">
    \t\t\t\t\t\t\t\t<img src=\"https://witwinkel.ch/themes/witwinkel/assets/projects/gourmet-festival-2019/content12.jpg\">
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</li>
    \t\t\t\t\t<li class=\"fsmenu--list-element\">
    \t\t\t\t\t\t<a href=\"#\">
    \t\t\t\t\t\t\t<span>Services</span>
    \t\t\t\t\t\t</a>
    \t\t\t\t\t\t<div class=\"fsmenu--scrolling-text\">
    \t\t\t\t\t\t\t<span>Services</span><span>Services</span><span>Services</span><span>Services</span><span>Services</span>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"fsmenu--link-img\">
    \t\t\t\t\t\t\t<div class=\"fsmenu--img-container\">
    \t\t\t\t\t\t\t\t<img src=\"https://witwinkel.ch/themes/witwinkel/assets/images/Services/wirsind-witwinkel.jpg\">
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</li>
    \t\t\t\t\t<li class=\"fsmenu--list-element\">
    \t\t\t\t\t\t<a href=\"#\">
    \t\t\t\t\t\t\t<span>About</span>
    \t\t\t\t\t\t</a>
    \t\t\t\t\t\t<div class=\"fsmenu--scrolling-text\">
    \t\t\t\t\t\t\t<span>About</span><span>About</span><span>About</span><span>About</span><span>About</span>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"fsmenu--link-img\">
    \t\t\t\t\t\t\t<div class=\"fsmenu--img-container\">
    \t\t\t\t\t\t\t\t<img src=\"https://witwinkel.ch/themes/witwinkel/assets/projects/metzler/content1.jpg\">
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</li>
    \t\t\t\t\t<li class=\"fsmenu--list-element\">
    \t\t\t\t\t\t<a href=\"#\">
    \t\t\t\t\t\t\t<span>Blog</span>
    \t\t\t\t\t\t</a>
    \t\t\t\t\t\t<div class=\"fsmenu--scrolling-text\">
    \t\t\t\t\t\t\t<span>Blog</span><span>Blog</span><span>Blog</span><span>Blog</span><span>Blog</span>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"fsmenu--link-img\">
    \t\t\t\t\t\t\t<div class=\"fsmenu--img-container\">
    \t\t\t\t\t\t\t\t<img src=\"https://witwinkel.ch/themes/witwinkel/assets/projects/metzler/content1.jpg\">
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</li>
    \t\t\t\t\t<li class=\"fsmenu--list-element\">
    \t\t\t\t\t\t<a href=\"#\">
    \t\t\t\t\t\t\t<span>Contact</span>
    \t\t\t\t\t\t</a>
    \t\t\t\t\t\t<div class=\"fsmenu--scrolling-text\">
    \t\t\t\t\t\t\t<span>Contact</span><span>Contact</span><span>Contact</span><span>Contact</span><span>Contact</span>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"fsmenu--link-img\">
    \t\t\t\t\t\t\t<div class=\"fsmenu--img-container\">
    \t\t\t\t\t\t\t\t<img src=\"https://witwinkel.ch/themes/witwinkel/assets/projects/metzler/content1.jpg\">
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</li>
    \t\t\t\t</ul>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </div>
    #}
</header>", "/var/www/html/themes/demo/partials/site/header.htm", "");
    }
}
