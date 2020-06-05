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

/* /var/www/html/themes/demo/partials/site/footer.htm */
class __TwigTemplate_826b84575a3003cfa6d120e10f137dec4db9b49a85b59c0fef3796ad310f7853 extends \Twig\Template
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
        echo "<div ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1) == "services")) {
            echo "class=\"section bg-black section-lines d-xl-flex align-items-center background-dark scrollable scrollable-mobile\"";
        } else {
            echo "data-scroll data-scroll-repeat";
        }
        echo ">
    <footer id=\"footer\" class=\"section-padding-x bg-black color-change\">
        <div class=\"cut-bg-div py-5\">
            <div class=\"container-fluid py-md-5\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"wrap\">
                            <a class=\"footer-logo d-block mb-5\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                              <svg id=\"footer-logo\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 710.18 205.08\"><defs><style>.cls-1{fill:#0e0d0e;}.cls-2{fill:url(#linear-gradient);}</style><linearGradient id=\"linear-gradient\" x1=\"-0.09\" y1=\"103\" x2=\"211.83\" y2=\"103\" gradientUnits=\"userSpaceOnUse\"><stop offset=\"0\" stop-color=\"#00dcff\"/><stop offset=\"0.48\" stop-color=\"#00d5ff\"/><stop offset=\"1\" stop-color=\"#417fff\"/></linearGradient></defs><path class=\"cls-1\" d=\"M251.4,18.81h27.81l16,43.46L310.7,18.81h27.71V91.2H315.82V55.11L304.67,91.2H285.24L274.1,55.11V91.2H251.4Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M383.91,91.92c-20.55,0-37.32-15.44-37.32-37.22s16.77-37.12,37.32-37.12S421,32.92,421,54.7,404.36,91.92,383.91,91.92Zm0-21.17c9.1,0,14.11-6.44,14.11-16,0-9.81-5-16.15-14.11-16.15-9.3,0-14.21,6.34-14.21,16.15C369.7,64.31,374.61,70.75,383.91,70.75Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M464.49,91.92c-20.56,0-37.32-15.44-37.32-37.22s16.76-37.12,37.32-37.12S501.6,32.92,501.6,54.7,484.94,91.92,464.49,91.92Zm0-21.17c9.1,0,14.11-6.44,14.11-16,0-9.81-5-16.15-14.11-16.15-9.31,0-14.22,6.34-14.22,16.15C450.27,64.31,455.18,70.75,464.49,70.75Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M532.48,18.81V74h21.88V91.2H509.78V18.81Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M607.94,80.26H583.81L580.23,91.2H556.41l26.48-72.39h26.18L635.45,91.2H611.52ZM595.88,43l-6.55,20.15h13.09Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M635.45,18.81h26L673,44.48l11.56-25.67h25.56l-26,50.41v22h-22.7v-22Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M251.4,116h27.81l16,43.46L310.7,116h27.71v72.4H315.82v-36.1l-11.15,36.1H285.24l-11.14-36.1v36.1H251.4Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M396.9,134.12H371.34V143h22.49v17.07H371.34v10.23H396.9v18.1H348.64V116H396.9Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M473.28,152c0,20.66-14.52,36.41-37.63,36.41H405.49V116h30.16C458.76,116,473.28,131.16,473.28,152Zm-39.67,16.16c10,0,16.66-5.62,16.66-16.16s-6.64-16.15-16.66-16.15h-5.42v32.31Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M481.46,116h22.7v72.4h-22.7Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M560.8,177.48H536.67l-3.58,10.94H509.27L535.75,116h26.18l26.38,72.4H564.38Zm-12.06-37.22-6.55,20.14h13.09Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-2\" d=\"M130.66,129.66c-13.09-8.27-27-8.84-40.07-.63-20.7,13-40.92,26.74-61.19,40.4-6.62,4.47-9.21,11.33-8,19.13,2.41,15,18.55,21.73,31.54,13.22,17.39-11.4,34.75-22.84,51.94-34.55,3.66-2.49,6.24-2.89,9.94-.15,6.34,4.7,13.11,8.8,19.7,13.15,10.52,7,20.86,14.2,31.6,20.78,19.72,12.1,45.25-1.42,45.48-24.24.34-33.13.15-66.26.05-99.4a19.69,19.69,0,0,0-13.75-18.51c-13.28-4.37-26.27,5.35-26.35,20-.12,24,0,48,0,72v5.75C157.31,147.19,144.13,138.19,130.66,129.66ZM45.06,52.85c12,8,23.93,16.18,36.16,23.82,13.13,8.2,27,8.62,40.08.38,20.55-13,40.66-26.61,60.8-40.2,6.6-4.44,9.38-11.18,8.15-19-2.36-15.06-18.43-22-31.41-13.47-17.28,11.29-34.55,22.61-51.55,34.3-4.17,2.86-6.91,3-11.08.11C79.92,27.59,63.38,16.78,46.86,6c-10-6.54-20.55-7.44-31.11-1.74C5,10-.09,19.34-.09,31.5q0,47.66,0,95.3c0,12.47,8.34,21.44,19.89,21.49,11.75.06,20.24-8.94,20.27-21.63.05-23.72,0-47.43,0-71.14v-5.8C42.28,51.1,43.69,52,45.06,52.85Z\" transform=\"translate(0.09 -0.46)\"/></svg>
                          </a>
                          <div class=\"mb-5\">
                              <h5 class=\"h2 news-name text-white text-uppercase mb-4\">Moolay Media</h5>
                              <p class=\"mb-0\">We are a digital marketing agency that specializes in telling brand stories. Through stunning design, custom-built websites, and comprehensive marketing strategy, we ensure that your brand’s narrative is told in the right way, to the right people.</p>
                          </div>
                          <div class=\"social\">
                              <a href=\"https://www.linkedin.com/company/moolaymedia/\" target=\"_blank\" class=\"mr-3\">
                                  <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 30 30\">    <path d=\"M9,25H4V10h5V25z M6.501,8C5.118,8,4,6.879,4,5.499S5.12,3,6.501,3C7.879,3,9,4.121,9,5.499C9,6.879,7.879,8,6.501,8z M27,25h-4.807v-7.3c0-1.741-0.033-3.98-2.499-3.98c-2.503,0-2.888,1.896-2.888,3.854V25H12V9.989h4.614v2.051h0.065 c0.642-1.18,2.211-2.424,4.551-2.424c4.87,0,5.77,3.109,5.77,7.151C27,16.767,27,25,27,25z\"/></svg>
                              </a>
                              <a href=\"https://www.facebook.com/moolaymedia\" target=\"_blank\" class=\"mr-3\">
                                  <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">    <path d=\"M17.525,9H14V7c0-1.032,0.084-1.682,1.563-1.682h1.868v-3.18C16.522,2.044,15.608,1.998,14.693,2 C11.98,2,10,3.657,10,6.699V9H7v4l3-0.001V22h4v-9.003l3.066-0.001L17.525,9z\"/></svg>
                              </a>
                              <a href=\"https://www.instagram.com/moolaymedia/\" target=\"_blank\" class=\"mr-3\">
                                  <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                    \t viewBox=\"0 0 7.06 7.17\" style=\"enable-background:new 0 0 7.06 7.17;\" xml:space=\"preserve\">
                                    <g>
                                    \t<path class=\"st0\" d=\"M7.06,3.72c0,0.3,0,0.66,0,1.02c0,0.27-0.01,0.54-0.06,0.81C6.93,5.9,6.81,6.22,6.57,6.49
                                    \t\tC6.38,6.7,6.16,6.88,5.9,6.98C5.61,7.09,5.31,7.15,5,7.15C4.79,7.16,4.58,7.17,4.37,7.18c-0.29,0-0.57,0-0.86,0
                                    \t\tc-0.21,0-0.43,0-0.64,0c-0.39-0.01-0.79,0-1.18-0.07C1.4,7.06,1.12,6.96,0.88,6.78C0.65,6.61,0.47,6.4,0.32,6.15
                                    \t\tC0.21,5.97,0.15,5.77,0.11,5.56C0.03,5.18,0.03,4.8,0.02,4.42C0.01,3.78,0,3.14,0,2.5C0,2.2,0,1.9,0.06,1.61
                                    \t\tc0.07-0.35,0.2-0.67,0.45-0.94c0.19-0.21,0.4-0.38,0.66-0.48c0.18-0.07,0.37-0.12,0.57-0.15C2.04,0.01,2.35,0,2.66-0.01
                                    \t\tc0.3-0.01,0.6,0,0.9,0.01c0.3,0,0.59,0,0.89,0.01c0.21,0,0.42,0.01,0.63,0.03c0.34,0.03,0.66,0.11,0.96,0.28
                                    \t\tc0.31,0.18,0.55,0.42,0.72,0.74C6.92,1.35,6.99,1.67,7.02,2C7.06,2.55,7.05,3.1,7.06,3.72 M6.43,3.67C6.42,3.16,6.41,2.7,6.39,2.23
                                    \t\tC6.38,1.94,6.34,1.65,6.21,1.38C6.14,1.24,6.04,1.12,5.93,1.02C5.67,0.79,5.35,0.7,5.01,0.68C4.72,0.67,4.42,0.67,4.13,0.66
                                    \t\tc-0.3-0.01-0.6-0.01-0.9-0.01c-0.3,0-0.61,0-0.91,0.01C2.06,0.67,1.79,0.67,1.54,0.75C1.32,0.82,1.14,0.93,0.99,1.1
                                    \t\tC0.8,1.31,0.71,1.56,0.68,1.83C0.65,2.06,0.64,2.29,0.64,2.52C0.65,3.31,0.66,4.1,0.67,4.89C0.68,5.15,0.71,5.42,0.8,5.67
                                    \t\tc0.07,0.2,0.18,0.37,0.34,0.51C1.35,6.37,1.62,6.46,1.9,6.49c0.18,0.02,0.35,0.03,0.53,0.04C2.82,6.54,3.21,6.54,3.6,6.54
                                    \t\tc0.47,0,0.93,0.02,1.4-0.02C5.12,6.51,5.24,6.5,5.35,6.48c0.28-0.05,0.53-0.17,0.72-0.38c0.08-0.1,0.16-0.2,0.2-0.32
                                    \t\tc0.1-0.24,0.14-0.5,0.14-0.76C6.42,4.55,6.43,4.09,6.43,3.67\"/>
                                    \t<path class=\"st0\" d=\"M1.73,3.59c-0.01-0.24,0.04-0.48,0.13-0.7c0.11-0.27,0.27-0.5,0.49-0.7c0.19-0.17,0.4-0.28,0.63-0.36
                                    \t\tc0.18-0.06,0.37-0.08,0.56-0.08c0.36,0.01,0.7,0.11,0.99,0.32C4.79,2.26,5,2.49,5.14,2.78C5.21,2.95,5.28,3.12,5.31,3.3
                                    \t\tc0.06,0.37,0.02,0.73-0.14,1.08C5.01,4.73,4.77,5,4.44,5.2C4.08,5.41,3.7,5.48,3.29,5.42C3.05,5.38,2.83,5.31,2.63,5.18
                                    \t\tC2.42,5.05,2.24,4.89,2.09,4.69c-0.18-0.26-0.3-0.54-0.34-0.85C1.74,3.76,1.74,3.67,1.73,3.59 M3.52,2.4
                                    \t\tC3.3,2.41,3.09,2.47,2.89,2.6C2.68,2.73,2.53,2.93,2.44,3.16c-0.13,0.34-0.1,0.68,0.06,1C2.63,4.4,2.83,4.58,3.08,4.69
                                    \t\tC3.3,4.8,3.54,4.81,3.77,4.77c0.16-0.03,0.3-0.1,0.44-0.19c0.26-0.19,0.42-0.45,0.47-0.77c0.06-0.36-0.03-0.68-0.26-0.97
                                    \t\tC4.19,2.56,3.88,2.42,3.52,2.4\"/>
                                    \t<path class=\"st0\" d=\"M5.39,1.26c0.24,0,0.43,0.22,0.42,0.44C5.8,1.94,5.64,2.12,5.4,2.12c-0.25,0-0.43-0.18-0.43-0.43
                                    \t\tC4.96,1.43,5.17,1.25,5.39,1.26\"/>
                                    </g>
                                  </svg>
                              </a>
                          </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4 d-flex justify-content-md-center mt-4 mt-sm-5\">
                        <div class=\"wrap page-links\">
                            <h5 class=\"h5 news-name text-white text-uppercase mb-3\">Links</h5>
                            <ul class=\"list-unstyled mb-0\">
                            ";
        // line 73
        echo "                                <li class=\"mb-2\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
                                <li class=\"mb-2\"><a href=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
        echo "\">About</a></li>
                                <li class=\"mb-2\"><a href=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\">Services</a></li>
                                <li class=\"mb-2\"><a href=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("work");
        echo "\">The Work</a></li>
                                ";
        // line 80
        echo "                                <li class=\"mb-2\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4 mt-4 mt-sm-5 contact-location-info\">
                        <h5 class=\"h5 news-name text-white text-uppercase mb-3\">Info</h5>
                        <p class=\"mb-0 text-white\">Newport Beach</p>
                        <p class=\"mb-3\"><a href=\"https://g.page/moolaymedia?share\" target=\"_blank\">620 Newport Center Drive, Suite 370, Newport Beach, CA 92660</a></p>
                        <p class=\"mb-3 text-white\"><a href=\"tel:949-610-8969\">949-610-8969</a></p>
                        <p class=\"mb-0 text-white\">Milwaukee</p>
                        <p class=\"mb-3\"><a href=\"https://goo.gl/maps/En9Mxh3yk27DzzXb6\" target=\"_blank\">500 W. Silver Spring Dr, K200 Glendale, WI 53217</a></p>
                        <p class=\"mb-3 text-white\"><a href=\"tel:414-616-3737\">(414) 616-3737</a></p>
                        <p class=\"mb-0 text-white\"><a href=\"mailto:info@moolaymedia.com\">info@moolaymedia.com</a></p>
                    </div>
                </div>
                <div class=\"d-flex flex-column flex-md-row justify-content-md-between mt-5\">
                    <div class=\"pr-4 pr-xl-0\">
                        <span class=\"text-white\">© ";
        // line 97
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ", All Rights Reserved by Moolay Media</span>
                    </div>
                    <div class=\"pr-xl-5 privacy-links\">
                        <a href=\"#\" class=\"mr-3\">Terms of Use</a>
                        <a href=\"#\" class=\"mr-3\">Privacy Policy</a>
                        <a href=\"#\">Legal Disclaimer</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 97,  122 => 80,  118 => 76,  114 => 75,  110 => 74,  105 => 73,  52 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div {% if this.page.id == 'services' %}class=\"section bg-black section-lines d-xl-flex align-items-center background-dark scrollable scrollable-mobile\"{% else %}data-scroll data-scroll-repeat{% endif %}>
    <footer id=\"footer\" class=\"section-padding-x bg-black color-change\">
        <div class=\"cut-bg-div py-5\">
            <div class=\"container-fluid py-md-5\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"wrap\">
                            <a class=\"footer-logo d-block mb-5\" href=\"{{ 'home'|page }}\">
                              <svg id=\"footer-logo\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 710.18 205.08\"><defs><style>.cls-1{fill:#0e0d0e;}.cls-2{fill:url(#linear-gradient);}</style><linearGradient id=\"linear-gradient\" x1=\"-0.09\" y1=\"103\" x2=\"211.83\" y2=\"103\" gradientUnits=\"userSpaceOnUse\"><stop offset=\"0\" stop-color=\"#00dcff\"/><stop offset=\"0.48\" stop-color=\"#00d5ff\"/><stop offset=\"1\" stop-color=\"#417fff\"/></linearGradient></defs><path class=\"cls-1\" d=\"M251.4,18.81h27.81l16,43.46L310.7,18.81h27.71V91.2H315.82V55.11L304.67,91.2H285.24L274.1,55.11V91.2H251.4Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M383.91,91.92c-20.55,0-37.32-15.44-37.32-37.22s16.77-37.12,37.32-37.12S421,32.92,421,54.7,404.36,91.92,383.91,91.92Zm0-21.17c9.1,0,14.11-6.44,14.11-16,0-9.81-5-16.15-14.11-16.15-9.3,0-14.21,6.34-14.21,16.15C369.7,64.31,374.61,70.75,383.91,70.75Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M464.49,91.92c-20.56,0-37.32-15.44-37.32-37.22s16.76-37.12,37.32-37.12S501.6,32.92,501.6,54.7,484.94,91.92,464.49,91.92Zm0-21.17c9.1,0,14.11-6.44,14.11-16,0-9.81-5-16.15-14.11-16.15-9.31,0-14.22,6.34-14.22,16.15C450.27,64.31,455.18,70.75,464.49,70.75Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M532.48,18.81V74h21.88V91.2H509.78V18.81Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M607.94,80.26H583.81L580.23,91.2H556.41l26.48-72.39h26.18L635.45,91.2H611.52ZM595.88,43l-6.55,20.15h13.09Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M635.45,18.81h26L673,44.48l11.56-25.67h25.56l-26,50.41v22h-22.7v-22Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M251.4,116h27.81l16,43.46L310.7,116h27.71v72.4H315.82v-36.1l-11.15,36.1H285.24l-11.14-36.1v36.1H251.4Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M396.9,134.12H371.34V143h22.49v17.07H371.34v10.23H396.9v18.1H348.64V116H396.9Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M473.28,152c0,20.66-14.52,36.41-37.63,36.41H405.49V116h30.16C458.76,116,473.28,131.16,473.28,152Zm-39.67,16.16c10,0,16.66-5.62,16.66-16.16s-6.64-16.15-16.66-16.15h-5.42v32.31Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M481.46,116h22.7v72.4h-22.7Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-1\" d=\"M560.8,177.48H536.67l-3.58,10.94H509.27L535.75,116h26.18l26.38,72.4H564.38Zm-12.06-37.22-6.55,20.14h13.09Z\" transform=\"translate(0.09 -0.46)\"/><path class=\"cls-2\" d=\"M130.66,129.66c-13.09-8.27-27-8.84-40.07-.63-20.7,13-40.92,26.74-61.19,40.4-6.62,4.47-9.21,11.33-8,19.13,2.41,15,18.55,21.73,31.54,13.22,17.39-11.4,34.75-22.84,51.94-34.55,3.66-2.49,6.24-2.89,9.94-.15,6.34,4.7,13.11,8.8,19.7,13.15,10.52,7,20.86,14.2,31.6,20.78,19.72,12.1,45.25-1.42,45.48-24.24.34-33.13.15-66.26.05-99.4a19.69,19.69,0,0,0-13.75-18.51c-13.28-4.37-26.27,5.35-26.35,20-.12,24,0,48,0,72v5.75C157.31,147.19,144.13,138.19,130.66,129.66ZM45.06,52.85c12,8,23.93,16.18,36.16,23.82,13.13,8.2,27,8.62,40.08.38,20.55-13,40.66-26.61,60.8-40.2,6.6-4.44,9.38-11.18,8.15-19-2.36-15.06-18.43-22-31.41-13.47-17.28,11.29-34.55,22.61-51.55,34.3-4.17,2.86-6.91,3-11.08.11C79.92,27.59,63.38,16.78,46.86,6c-10-6.54-20.55-7.44-31.11-1.74C5,10-.09,19.34-.09,31.5q0,47.66,0,95.3c0,12.47,8.34,21.44,19.89,21.49,11.75.06,20.24-8.94,20.27-21.63.05-23.72,0-47.43,0-71.14v-5.8C42.28,51.1,43.69,52,45.06,52.85Z\" transform=\"translate(0.09 -0.46)\"/></svg>
                          </a>
                          <div class=\"mb-5\">
                              <h5 class=\"h2 news-name text-white text-uppercase mb-4\">Moolay Media</h5>
                              <p class=\"mb-0\">We are a digital marketing agency that specializes in telling brand stories. Through stunning design, custom-built websites, and comprehensive marketing strategy, we ensure that your brand’s narrative is told in the right way, to the right people.</p>
                          </div>
                          <div class=\"social\">
                              <a href=\"https://www.linkedin.com/company/moolaymedia/\" target=\"_blank\" class=\"mr-3\">
                                  <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 30 30\">    <path d=\"M9,25H4V10h5V25z M6.501,8C5.118,8,4,6.879,4,5.499S5.12,3,6.501,3C7.879,3,9,4.121,9,5.499C9,6.879,7.879,8,6.501,8z M27,25h-4.807v-7.3c0-1.741-0.033-3.98-2.499-3.98c-2.503,0-2.888,1.896-2.888,3.854V25H12V9.989h4.614v2.051h0.065 c0.642-1.18,2.211-2.424,4.551-2.424c4.87,0,5.77,3.109,5.77,7.151C27,16.767,27,25,27,25z\"/></svg>
                              </a>
                              <a href=\"https://www.facebook.com/moolaymedia\" target=\"_blank\" class=\"mr-3\">
                                  <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">    <path d=\"M17.525,9H14V7c0-1.032,0.084-1.682,1.563-1.682h1.868v-3.18C16.522,2.044,15.608,1.998,14.693,2 C11.98,2,10,3.657,10,6.699V9H7v4l3-0.001V22h4v-9.003l3.066-0.001L17.525,9z\"/></svg>
                              </a>
                              <a href=\"https://www.instagram.com/moolaymedia/\" target=\"_blank\" class=\"mr-3\">
                                  <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                    \t viewBox=\"0 0 7.06 7.17\" style=\"enable-background:new 0 0 7.06 7.17;\" xml:space=\"preserve\">
                                    <g>
                                    \t<path class=\"st0\" d=\"M7.06,3.72c0,0.3,0,0.66,0,1.02c0,0.27-0.01,0.54-0.06,0.81C6.93,5.9,6.81,6.22,6.57,6.49
                                    \t\tC6.38,6.7,6.16,6.88,5.9,6.98C5.61,7.09,5.31,7.15,5,7.15C4.79,7.16,4.58,7.17,4.37,7.18c-0.29,0-0.57,0-0.86,0
                                    \t\tc-0.21,0-0.43,0-0.64,0c-0.39-0.01-0.79,0-1.18-0.07C1.4,7.06,1.12,6.96,0.88,6.78C0.65,6.61,0.47,6.4,0.32,6.15
                                    \t\tC0.21,5.97,0.15,5.77,0.11,5.56C0.03,5.18,0.03,4.8,0.02,4.42C0.01,3.78,0,3.14,0,2.5C0,2.2,0,1.9,0.06,1.61
                                    \t\tc0.07-0.35,0.2-0.67,0.45-0.94c0.19-0.21,0.4-0.38,0.66-0.48c0.18-0.07,0.37-0.12,0.57-0.15C2.04,0.01,2.35,0,2.66-0.01
                                    \t\tc0.3-0.01,0.6,0,0.9,0.01c0.3,0,0.59,0,0.89,0.01c0.21,0,0.42,0.01,0.63,0.03c0.34,0.03,0.66,0.11,0.96,0.28
                                    \t\tc0.31,0.18,0.55,0.42,0.72,0.74C6.92,1.35,6.99,1.67,7.02,2C7.06,2.55,7.05,3.1,7.06,3.72 M6.43,3.67C6.42,3.16,6.41,2.7,6.39,2.23
                                    \t\tC6.38,1.94,6.34,1.65,6.21,1.38C6.14,1.24,6.04,1.12,5.93,1.02C5.67,0.79,5.35,0.7,5.01,0.68C4.72,0.67,4.42,0.67,4.13,0.66
                                    \t\tc-0.3-0.01-0.6-0.01-0.9-0.01c-0.3,0-0.61,0-0.91,0.01C2.06,0.67,1.79,0.67,1.54,0.75C1.32,0.82,1.14,0.93,0.99,1.1
                                    \t\tC0.8,1.31,0.71,1.56,0.68,1.83C0.65,2.06,0.64,2.29,0.64,2.52C0.65,3.31,0.66,4.1,0.67,4.89C0.68,5.15,0.71,5.42,0.8,5.67
                                    \t\tc0.07,0.2,0.18,0.37,0.34,0.51C1.35,6.37,1.62,6.46,1.9,6.49c0.18,0.02,0.35,0.03,0.53,0.04C2.82,6.54,3.21,6.54,3.6,6.54
                                    \t\tc0.47,0,0.93,0.02,1.4-0.02C5.12,6.51,5.24,6.5,5.35,6.48c0.28-0.05,0.53-0.17,0.72-0.38c0.08-0.1,0.16-0.2,0.2-0.32
                                    \t\tc0.1-0.24,0.14-0.5,0.14-0.76C6.42,4.55,6.43,4.09,6.43,3.67\"/>
                                    \t<path class=\"st0\" d=\"M1.73,3.59c-0.01-0.24,0.04-0.48,0.13-0.7c0.11-0.27,0.27-0.5,0.49-0.7c0.19-0.17,0.4-0.28,0.63-0.36
                                    \t\tc0.18-0.06,0.37-0.08,0.56-0.08c0.36,0.01,0.7,0.11,0.99,0.32C4.79,2.26,5,2.49,5.14,2.78C5.21,2.95,5.28,3.12,5.31,3.3
                                    \t\tc0.06,0.37,0.02,0.73-0.14,1.08C5.01,4.73,4.77,5,4.44,5.2C4.08,5.41,3.7,5.48,3.29,5.42C3.05,5.38,2.83,5.31,2.63,5.18
                                    \t\tC2.42,5.05,2.24,4.89,2.09,4.69c-0.18-0.26-0.3-0.54-0.34-0.85C1.74,3.76,1.74,3.67,1.73,3.59 M3.52,2.4
                                    \t\tC3.3,2.41,3.09,2.47,2.89,2.6C2.68,2.73,2.53,2.93,2.44,3.16c-0.13,0.34-0.1,0.68,0.06,1C2.63,4.4,2.83,4.58,3.08,4.69
                                    \t\tC3.3,4.8,3.54,4.81,3.77,4.77c0.16-0.03,0.3-0.1,0.44-0.19c0.26-0.19,0.42-0.45,0.47-0.77c0.06-0.36-0.03-0.68-0.26-0.97
                                    \t\tC4.19,2.56,3.88,2.42,3.52,2.4\"/>
                                    \t<path class=\"st0\" d=\"M5.39,1.26c0.24,0,0.43,0.22,0.42,0.44C5.8,1.94,5.64,2.12,5.4,2.12c-0.25,0-0.43-0.18-0.43-0.43
                                    \t\tC4.96,1.43,5.17,1.25,5.39,1.26\"/>
                                    </g>
                                  </svg>
                              </a>
                          </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4 d-flex justify-content-md-center mt-4 mt-sm-5\">
                        <div class=\"wrap page-links\">
                            <h5 class=\"h5 news-name text-white text-uppercase mb-3\">Links</h5>
                            <ul class=\"list-unstyled mb-0\">
                            {#
                                <li><a href=\"#\">Branding</a></li>
                                <li><a href=\"#\">Web development</a></li>
                                <li><a href=\"#\">Landing page</a></li>
                                <li><a href=\"#\">E-commerce</a></li>
                                <li><a href=\"#\">Targeted advertising</a></li>
                                <li><a href=\"#\">Social Media Marketing</a></li>
                                <li><a href=\"#\">LinkedIn Growth</a></li>
                                <li><a href=\"#\">Pinterest Growth</a></li>
                                <li><a href=\"#\">Instagram Growth</a></li>
                                <li><a href=\"#\">Instagram Bulk Messaging</a></li>
                                <li><a href=\"#\">Telegram Bulk Messaging</a></li>
                                <li><a href=\"#\">Chatbots</a></li>
                                <li><a href=\"#\">Email marketing</a></li>
                            #}
                                <li class=\"mb-2\"><a href=\"{{ 'home'|page }}\">Home</a></li>
                                <li class=\"mb-2\"><a href=\"{{ 'about-us'|page }}\">About</a></li>
                                <li class=\"mb-2\"><a href=\"{{ 'services'|page }}\">Services</a></li>
                                <li class=\"mb-2\"><a href=\"{{ 'work'|page }}\">The Work</a></li>
                                {#
                                <li class=\"mb-2\"><a href=\"{{ 'blog'|page }}\">Blog</a></li>
                                #}
                                <li class=\"mb-2\"><a href=\"{{ 'contact'|page }}\">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4 mt-4 mt-sm-5 contact-location-info\">
                        <h5 class=\"h5 news-name text-white text-uppercase mb-3\">Info</h5>
                        <p class=\"mb-0 text-white\">Newport Beach</p>
                        <p class=\"mb-3\"><a href=\"https://g.page/moolaymedia?share\" target=\"_blank\">620 Newport Center Drive, Suite 370, Newport Beach, CA 92660</a></p>
                        <p class=\"mb-3 text-white\"><a href=\"tel:949-610-8969\">949-610-8969</a></p>
                        <p class=\"mb-0 text-white\">Milwaukee</p>
                        <p class=\"mb-3\"><a href=\"https://goo.gl/maps/En9Mxh3yk27DzzXb6\" target=\"_blank\">500 W. Silver Spring Dr, K200 Glendale, WI 53217</a></p>
                        <p class=\"mb-3 text-white\"><a href=\"tel:414-616-3737\">(414) 616-3737</a></p>
                        <p class=\"mb-0 text-white\"><a href=\"mailto:info@moolaymedia.com\">info@moolaymedia.com</a></p>
                    </div>
                </div>
                <div class=\"d-flex flex-column flex-md-row justify-content-md-between mt-5\">
                    <div class=\"pr-4 pr-xl-0\">
                        <span class=\"text-white\">© {{ \"now\"|date(\"Y\") }}, All Rights Reserved by Moolay Media</span>
                    </div>
                    <div class=\"pr-xl-5 privacy-links\">
                        <a href=\"#\" class=\"mr-3\">Terms of Use</a>
                        <a href=\"#\" class=\"mr-3\">Privacy Policy</a>
                        <a href=\"#\">Legal Disclaimer</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>", "/var/www/html/themes/demo/partials/site/footer.htm", "");
    }
}
