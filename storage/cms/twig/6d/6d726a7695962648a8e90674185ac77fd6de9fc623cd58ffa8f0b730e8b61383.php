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

/* /home/moolaymedia/public_html/themes/demo/pages/o-de-rose.htm */
class __TwigTemplate_abfae8199c8876d4103c4067129d76b9cfd5aa2bdd0fc3a41e8482d9d4d0c533 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2
        echo "<style>
    @font-face {
        font-family: 'Arastin';
        src: url('";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/arastin/ArastinStd.eot");
        echo "');
        src: url('";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/arastin/ArastinStd.eot?#iefix");
        echo "') format('embedded-opentype'),
            url('";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/arastin/ArastinStd.woff2");
        echo "') format('woff2'),
            url('";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/arastin/ArastinStd.woff");
        echo "') format('woff'),
            url('";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/arastin/ArastinStd.ttf");
        echo "') format('truetype'),
            url('";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/arastin/ArastinStd.svg#ArastinStd");
        echo "') format('svg');
        font-weight: normal;
        font-style: normal;
    }
    
    .font-family-arastin {
        font-family: 'Arastin'!important;    
    }
    .font-family-gotham-regular {
        font-family: 'Gotham'!important;  
        font-weight: normal;
    }
    .font-family-gotham-bold {
        font-family: 'Gotham'!important;  
        font-weight: bold;
    }
</style>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 28
        echo "<div data-scroll-section>
    <section class=\"hero-section bg-white section-padding-x d-flex align-items-center\">
        <div class=\"section-padding-y-smaller w-100\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-xl-10\">
                        <h5 class=\"subtitle text-light-gray mb-4\">MED SPA ORANGE COUNTY</h5>
                        <h3 class=\"section-title mb-3 mb-lg-4 text-black\">Ô de Rose</h3>
                        <div class=\"tags mb-3 mb-lg-4\">
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Brand Design</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">New Website</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Landing Pages</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Media Buying</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Print Media</a>
                        </div>
                    </div>
                    <div class=\"col-xl-8\">
                        <p>A high-end med spa in Orange County, CA that was looking to expand their business and grow sales. We provided a logo and brand redesign along with a sleek new website and landing pages to support a content-focused marketing campaign.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"main bg-black\">
        <section class=\"logo-section projects-section bg-black section-padding-x d-flex align-items-center color-change-1\">
            <div class=\"cut-bg-div section-padding-y-smaller\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-10 text-center\">
                            <div class=\"o-de-rose-logo mb-5 mx-auto\">
                                <img src=\"";
        // line 58
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/oderose-logo.svg");
        echo "\" class=\"mb-lg-5\" alt=\"\">
                            </div>
                            <div class=\"tags mb-3 mb-lg-4 project-wrapper\">
                                <h4 class=\"project-title mb-3 mb-xl-4 text-white\">Logo & Branding</h4>
                            </div>
                        </div>
                        <div class=\"col-xl-8 text-center mb-5\">
                            <div class=\"mb-xl-5\">
                                <p>The client loved their existing logo, but wanted to elevate it and bring it more in line with their brand image as a high-end med spa with a strong reputation in the area. Our design team worked elements of their logo into a crisp new design inspired by high-end cosmetics and the brand’s French roots.</p>
                            </div>
                        </div>
                        <div class=\"col-12 d-flex justify-content-center brand-colors\">
                            <img src=\"";
        // line 70
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/golden-circle.png");
        echo "\" class=\"mr-3\" alt=\"\">
                            <img src=\"";
        // line 71
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/silver-circle.png");
        echo "\" class=\"mr-3\" alt=\"\">
                            <img src=\"";
        // line 72
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/black-circle.png");
        echo "\" class=\"mr-3\" alt=\"\">
                            <img src=\"";
        // line 73
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/white-circle.png");
        echo "\" class=\"\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"typography-section bg-black section-padding-x d-flex align-items-center color-change-2\">
            <div class=\"cut-bg-div section-padding-y-smaller\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-10 text-center\">
                            <div class=\"tags mb-3 mb-lg-4\">
                                <h3 class=\"section-title mb-3 mb-xl-4 text-white\">Typography</h3>
                            </div>
                            <div class=\"splitter mb-5\">
                                <img src=\"";
        // line 88
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/o-de-rose-splitter.png");
        echo "\" class=\"\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-xl-7 text-center mb-5\">
                            <div class=\"mb-xl-5\">
                                <p>To match their brand story of luxury and elegance, we curated a selection of fonts that evoke thoughts of the fashion and beauty centers of the world; New York and Paris.</p>
                            </div>
                        </div>
                        <div class=\"col-xl-8 text-center mb-5\">
                            <div class=\"row\">
                                <div class=\"col-12 text-center mb-5\">
                                    <h3 class=\"h1 font-family-arastin text-white text-uppercase fonts-title\">Arastin STD</h3>
                                    <span class=\"text-white fonts-subtitle\">Regular</span>
                                </div>
                                <div class=\"col-6 text-center\">
                                    <h3 class=\"h1 font-family-gotham-regular text-white fonts-title\">Gotham</h3>
                                    <span class=\"text-white fonts-subtitle\">Regular</span>
                                </div>
                                <div class=\"col-6 text-center\">
                                    <h3 class=\"h1 font-family-gotham-bold text-white fonts-title\">Gotham</h3>
                                    <span class=\"text-white fonts-subtitle\">Regular</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"cards-section projects-section bg-white section-padding-x\">
            <div class=\"cut-bg-div section-padding-y-smaller pb-5\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-md-9 col-xl-7 project-wrapper mb-4 mb-lg-5 text-center\">
                            <h4 class=\"project-title mb-3 mb-xl-4 text-black\">Printed Materials</h4>
                            <div class=\"mb-4 mb-xl-5\">
                                <p>Naturally, the O de Rose team wanted to share their new brand with the world. So, we created an elegantly designed new business card for them and an exclusive offer flyer to pair with our multi-pronged marketing strategy for the brand.</p>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <img src=\"";
        // line 127
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/cards-2.jpg");
        echo "\" class=\"w-100\" alt=\"\">
                        </div>
                    </div>
                </div>
                ";
        // line 134
        echo "                ";
        // line 147
        echo "            </div>
        </section>
        <section class=\"web-design-section-rose projects-section bg-white section-padding-x\">
            <div class=\"cut-bg-div section-padding-y\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-9 col-xl-7 project-wrapper mb-4 mb-md-0 text-center\">
                            <h4 class=\"project-title text-black mb-3 mb-xl-4\">Updated Website</h4>
                            <div class=\"mb-sm-4 mb-xl-5\">
                                <p>At the core of our rebrand and marketing strategy for O de Rose was an overhaul of their outdated website. We worked with the team to redefine their services and create a user experience-driven website with a strong focus on SEO.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"container-fluid px-0 text-center\">
                    <div>
                        <img src=\"";
        // line 163
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/o-de-rose-web.png");
        echo "\" class=\"w-100\" alt=\"\">
                    </div>
                    <a href=\"https://www.oderosemedspa.com/\" class=\"btn btn-round bordered black negative-top\">Visit Page</a>
                </div>
            </div>
        </section>
        <section class=\"social-media-rose-section projects-section section-padding-y bg-white\">
            <div class=\"gradient-border\">
                <div class=\"inside-wrapper bg-white\">
                    <div class=\"row\">
                        <div class=\"col-sm-4 mb-4 mb-sm-0\">
                            <h3 class=\"section-title mb-3 mb-lg-4\">Social <br>Content</h3>
                            <p class=\"h4 font-weight-600 pr-lg-4 bigger-font\">We took O de Rose’s new brand story and let it inspire us to create engaging social content that grabs attention while speaking to the brand’s subtle elegance.</p>
                        </div>
                        <div class=\"col-sm-8 position-relative px-0\">
                            <div class=\"social-images-rose\">
                                <img src=\"";
        // line 179
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/social-media-img-left.png");
        echo "\" class=\"w-100 social-image-left\" alt=\"\">
                                <img src=\"";
        // line 180
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/social-media-img-middle.png");
        echo "\" class=\"w-100 social-image-middle\" alt=\"\">
                                <img src=\"";
        // line 181
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/social-media-img-right.png");
        echo "\" class=\"w-100 social-image-right\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"instagram-posts-section-rose projects-section bg-white section-padding-x\">
            <div class=\"cut-bg-div section-padding-y\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-xl-5 col-xxxl-4 project-wrapper mb-4 mb-md-0\">
                            <h4 class=\"project-title mb-3 mb-xl-4\">Instagram</h4>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"instagram-img mx-auto\">
                                <img src=\"";
        // line 197
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/instagram-post-img.png");
        echo "\" class=\"w-100\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"promotions-section-rose projects-section bg-000 section-padding-x section-padding-y position-relative section-lines color-change-3\">
            ";
        // line 215
        echo "            ";
        // line 220
        echo "            <div class=\"mb-100 d-none d-sm-block d-lg-none\"></div>
        </section>
        <section class=\"exclusive-offer-section projects-section section-padding-x section-padding-y-smaller section-lines bg-white position-relative\">
            ";
        // line 231
        echo "            <div class=\"container-fluid px-md-5 mb-5\">
                <div class=\"px-lg-5\">
                    <img src=\"";
        // line 233
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/exclusive-offer-img.jpg");
        echo "\" class=\"w-100 mb-lg-5 minus-margin-img\" alt=\"\">
                </div>
            </div>
            ";
        // line 245
        echo "        </section>
        <section class=\"invest-banner-section bg-white color-change-4\">
            <img src=\"";
        // line 247
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/invest-img.png");
        echo "\" class=\"w-100 d-none d-md-block\" alt=\"\">
            <img src=\"";
        // line 248
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/invest-img-mobile.png");
        echo "\" class=\"w-100 d-md-none\" alt=\"\">
        </section>
        <section class=\"projects-section print-flyer-section landing-pages-rose section-padding-y bg-white section-padding-x position-relative section-lines pb-0\" style=\"background-image: url('";
        // line 250
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/marks-2-bg.jpg");
        echo "');\">
            <div class=\"section-devider py-5 d-none d-sm-block\"></div>
            <div class=\"container-fluid d-flex flex-column\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-10\">
                        <img src=\"";
        // line 255
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/o-de-rose/landing-pages-img.png");
        echo "\" alt=\"\" class=\"w-100\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-11 col-lg-8 project-wrapper\">
                        <h4 class=\"project-title mb-3 mb-xl-4\">Landing Pages</h4>
                        <p>We also designed and built several custom landing pages to integrate with our marketing strategy and media buying. The pages were designed to capture the attention of their target demographic and generate new leads.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"projects-section position-relative bg-white color-change-8\" data-scroll data-scroll-repeat>
            <div class=\"tell-us-section scrollStart position-relative section-padding-x z-index-10 d-none d-xl-block\" data-scroll>
                <div class=\"cut-bg-div section-padding-y pb-5\">
                    <div class=\"middle-line d-none d-md-block\"></div>
                    <div class=\"container-fluid\">
                        <div class=\"position-relative\">
                            <div id=\"scrollToPlace\">
                                <div data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"bottom\" class=\"d-none d-xxl-block\">
                                    <div class=\"p-top\">
                                        <h3 class=\"big-title text-shadow mb-5\" style=\"background-image: url('";
        // line 275
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                           Tell Us <br> a Story
                                        </h3>
                                        <a href=\"";
        // line 278
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                                    </div>
                                </div>
                                <div data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"bottom\" class=\"d-block d-xxl-none\">
                                    <div class=\"p-top\">
                                        <h3 class=\"big-title text-shadow mb-5\" style=\"background-image: url('";
        // line 283
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                           Tell Us <br> a Story
                                        </h3>
                                        <a href=\"";
        // line 286
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tell-us-section scrollSnap position-relative section-lines bg-000 section-padding-x section-padding-y color-change-5\" data-scroll data-scroll-repeat>
                <div class=\"container-fluid\">
                    <div class=\"big-title-hide\">
                        <h3 class=\"big-title text-shadow mb-4 mb-lg-5\" style=\"background-image: url('";
        // line 297
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\">
                           Tell Us <br> a Story
                        </h3>
                        <a href=\"";
        // line 300
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    ";
        // line 306
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 307
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/moolaymedia/public_html/themes/demo/pages/o-de-rose.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 307,  399 => 306,  390 => 300,  384 => 297,  370 => 286,  364 => 283,  356 => 278,  350 => 275,  327 => 255,  319 => 250,  314 => 248,  310 => 247,  306 => 245,  300 => 233,  296 => 231,  291 => 220,  289 => 215,  278 => 197,  259 => 181,  255 => 180,  251 => 179,  232 => 163,  214 => 147,  212 => 134,  205 => 127,  163 => 88,  145 => 73,  141 => 72,  137 => 71,  133 => 70,  118 => 58,  86 => 28,  84 => 1,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put styles %}
<style>
    @font-face {
        font-family: 'Arastin';
        src: url('{{ 'assets/fonts/arastin/ArastinStd.eot'|theme }}');
        src: url('{{ 'assets/fonts/arastin/ArastinStd.eot?#iefix'|theme }}') format('embedded-opentype'),
            url('{{ 'assets/fonts/arastin/ArastinStd.woff2'|theme }}') format('woff2'),
            url('{{ 'assets/fonts/arastin/ArastinStd.woff'|theme }}') format('woff'),
            url('{{ 'assets/fonts/arastin/ArastinStd.ttf'|theme }}') format('truetype'),
            url('{{ 'assets/fonts/arastin/ArastinStd.svg#ArastinStd'|theme }}') format('svg');
        font-weight: normal;
        font-style: normal;
    }
    
    .font-family-arastin {
        font-family: 'Arastin'!important;    
    }
    .font-family-gotham-regular {
        font-family: 'Gotham'!important;  
        font-weight: normal;
    }
    .font-family-gotham-bold {
        font-family: 'Gotham'!important;  
        font-weight: bold;
    }
</style>
{% endput %}
<div data-scroll-section>
    <section class=\"hero-section bg-white section-padding-x d-flex align-items-center\">
        <div class=\"section-padding-y-smaller w-100\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-xl-10\">
                        <h5 class=\"subtitle text-light-gray mb-4\">MED SPA ORANGE COUNTY</h5>
                        <h3 class=\"section-title mb-3 mb-lg-4 text-black\">Ô de Rose</h3>
                        <div class=\"tags mb-3 mb-lg-4\">
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Brand Design</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">New Website</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Landing Pages</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Media Buying</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Print Media</a>
                        </div>
                    </div>
                    <div class=\"col-xl-8\">
                        <p>A high-end med spa in Orange County, CA that was looking to expand their business and grow sales. We provided a logo and brand redesign along with a sleek new website and landing pages to support a content-focused marketing campaign.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"main bg-black\">
        <section class=\"logo-section projects-section bg-black section-padding-x d-flex align-items-center color-change-1\">
            <div class=\"cut-bg-div section-padding-y-smaller\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-10 text-center\">
                            <div class=\"o-de-rose-logo mb-5 mx-auto\">
                                <img src=\"{{ 'case-studies/o-de-rose/oderose-logo.svg'|media }}\" class=\"mb-lg-5\" alt=\"\">
                            </div>
                            <div class=\"tags mb-3 mb-lg-4 project-wrapper\">
                                <h4 class=\"project-title mb-3 mb-xl-4 text-white\">Logo & Branding</h4>
                            </div>
                        </div>
                        <div class=\"col-xl-8 text-center mb-5\">
                            <div class=\"mb-xl-5\">
                                <p>The client loved their existing logo, but wanted to elevate it and bring it more in line with their brand image as a high-end med spa with a strong reputation in the area. Our design team worked elements of their logo into a crisp new design inspired by high-end cosmetics and the brand’s French roots.</p>
                            </div>
                        </div>
                        <div class=\"col-12 d-flex justify-content-center brand-colors\">
                            <img src=\"{{ 'case-studies/o-de-rose/golden-circle.png'|media }}\" class=\"mr-3\" alt=\"\">
                            <img src=\"{{ 'case-studies/o-de-rose/silver-circle.png'|media }}\" class=\"mr-3\" alt=\"\">
                            <img src=\"{{ 'case-studies/o-de-rose/black-circle.png'|media }}\" class=\"mr-3\" alt=\"\">
                            <img src=\"{{ 'case-studies/o-de-rose/white-circle.png'|media }}\" class=\"\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"typography-section bg-black section-padding-x d-flex align-items-center color-change-2\">
            <div class=\"cut-bg-div section-padding-y-smaller\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-10 text-center\">
                            <div class=\"tags mb-3 mb-lg-4\">
                                <h3 class=\"section-title mb-3 mb-xl-4 text-white\">Typography</h3>
                            </div>
                            <div class=\"splitter mb-5\">
                                <img src=\"{{ 'case-studies/o-de-rose/o-de-rose-splitter.png'|media }}\" class=\"\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-xl-7 text-center mb-5\">
                            <div class=\"mb-xl-5\">
                                <p>To match their brand story of luxury and elegance, we curated a selection of fonts that evoke thoughts of the fashion and beauty centers of the world; New York and Paris.</p>
                            </div>
                        </div>
                        <div class=\"col-xl-8 text-center mb-5\">
                            <div class=\"row\">
                                <div class=\"col-12 text-center mb-5\">
                                    <h3 class=\"h1 font-family-arastin text-white text-uppercase fonts-title\">Arastin STD</h3>
                                    <span class=\"text-white fonts-subtitle\">Regular</span>
                                </div>
                                <div class=\"col-6 text-center\">
                                    <h3 class=\"h1 font-family-gotham-regular text-white fonts-title\">Gotham</h3>
                                    <span class=\"text-white fonts-subtitle\">Regular</span>
                                </div>
                                <div class=\"col-6 text-center\">
                                    <h3 class=\"h1 font-family-gotham-bold text-white fonts-title\">Gotham</h3>
                                    <span class=\"text-white fonts-subtitle\">Regular</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"cards-section projects-section bg-white section-padding-x\">
            <div class=\"cut-bg-div section-padding-y-smaller pb-5\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-md-9 col-xl-7 project-wrapper mb-4 mb-lg-5 text-center\">
                            <h4 class=\"project-title mb-3 mb-xl-4 text-black\">Printed Materials</h4>
                            <div class=\"mb-4 mb-xl-5\">
                                <p>Naturally, the O de Rose team wanted to share their new brand with the world. So, we created an elegantly designed new business card for them and an exclusive offer flyer to pair with our multi-pronged marketing strategy for the brand.</p>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <img src=\"{{ 'case-studies/o-de-rose/cards-2.jpg'|media }}\" class=\"w-100\" alt=\"\">
                        </div>
                    </div>
                </div>
                {#<div class=\"web-design-img mb-5\">
                    <img src=\"{{ 'case-studies/o-de-rose/cards.png'|media }}\" class=\"w-100\" alt=\"\">
                </div>#}
                {#<div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-md-9 col-xl-7 project-wrapper mb-sm-4 mb-lg-5 text-center\">
                            <div class=\"mb-md-4 mb-xl-5 mt-md-5\">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                        <div class=\"col-12 py-4 py-xl-5\"></div>
                        <div class=\"col-12\">
                            <img src=\"{{ 'case-studies/o-de-rose/cards-2.jpg'|media }}\" class=\"w-100 cards-2-img\" alt=\"\">
                        </div>
                    </div>
                </div>#}
            </div>
        </section>
        <section class=\"web-design-section-rose projects-section bg-white section-padding-x\">
            <div class=\"cut-bg-div section-padding-y\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-9 col-xl-7 project-wrapper mb-4 mb-md-0 text-center\">
                            <h4 class=\"project-title text-black mb-3 mb-xl-4\">Updated Website</h4>
                            <div class=\"mb-sm-4 mb-xl-5\">
                                <p>At the core of our rebrand and marketing strategy for O de Rose was an overhaul of their outdated website. We worked with the team to redefine their services and create a user experience-driven website with a strong focus on SEO.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"container-fluid px-0 text-center\">
                    <div>
                        <img src=\"{{ 'case-studies/o-de-rose/o-de-rose-web.png'|media }}\" class=\"w-100\" alt=\"\">
                    </div>
                    <a href=\"https://www.oderosemedspa.com/\" class=\"btn btn-round bordered black negative-top\">Visit Page</a>
                </div>
            </div>
        </section>
        <section class=\"social-media-rose-section projects-section section-padding-y bg-white\">
            <div class=\"gradient-border\">
                <div class=\"inside-wrapper bg-white\">
                    <div class=\"row\">
                        <div class=\"col-sm-4 mb-4 mb-sm-0\">
                            <h3 class=\"section-title mb-3 mb-lg-4\">Social <br>Content</h3>
                            <p class=\"h4 font-weight-600 pr-lg-4 bigger-font\">We took O de Rose’s new brand story and let it inspire us to create engaging social content that grabs attention while speaking to the brand’s subtle elegance.</p>
                        </div>
                        <div class=\"col-sm-8 position-relative px-0\">
                            <div class=\"social-images-rose\">
                                <img src=\"{{ 'case-studies/o-de-rose/social-media-img-left.png'|media }}\" class=\"w-100 social-image-left\" alt=\"\">
                                <img src=\"{{ 'case-studies/o-de-rose/social-media-img-middle.png'|media }}\" class=\"w-100 social-image-middle\" alt=\"\">
                                <img src=\"{{ 'case-studies/o-de-rose/social-media-img-right.png'|media }}\" class=\"w-100 social-image-right\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"instagram-posts-section-rose projects-section bg-white section-padding-x\">
            <div class=\"cut-bg-div section-padding-y\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-xl-5 col-xxxl-4 project-wrapper mb-4 mb-md-0\">
                            <h4 class=\"project-title mb-3 mb-xl-4\">Instagram</h4>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"instagram-img mx-auto\">
                                <img src=\"{{ 'case-studies/o-de-rose/instagram-post-img.png'|media }}\" class=\"w-100\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"promotions-section-rose projects-section bg-000 section-padding-x section-padding-y position-relative section-lines color-change-3\">
            {#<div class=\"container-fluid pb-5 pb-lg-0\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-xl-5 project-wrapper mb-4 mb-md-5\">
                        <h4 class=\"project-title mb-3 mb-xl-4 text-white\">EXCLUSIVE OFFER FLYERS</h4>
                        <div class=\"mb-sm-4 mb-xl-5\">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        </div>
                    </div>
                </div>
            </div>#}
            {#<div class=\"container-fluid px-md-5 pb-lg-5\">
                <div class=\"px-lg-5\">
                    <img src=\"{{ 'case-studies/o-de-rose/promotions-banner.png'|media }}\" class=\"w-100\" alt=\"\">
                </div>
            </div>#}
            <div class=\"mb-100 d-none d-sm-block d-lg-none\"></div>
        </section>
        <section class=\"exclusive-offer-section projects-section section-padding-x section-padding-y-smaller section-lines bg-white position-relative\">
            {#<div class=\"container-fluid mb-4 mb-md-5\">
                <div class=\"row pl-lg-5\">
                    <div class=\"col-md-11 col-lg-8 project-wrapper pl-lg-5 mb-lg-5\">
                        <h4 class=\"project-title mb-3 mb-xl-4\">EXCLUSIVE OFFER FLYERS</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    </div>
                </div>
            </div>#}
            <div class=\"container-fluid px-md-5 mb-5\">
                <div class=\"px-lg-5\">
                    <img src=\"{{ 'case-studies/o-de-rose/exclusive-offer-img.jpg'|media }}\" class=\"w-100 mb-lg-5 minus-margin-img\" alt=\"\">
                </div>
            </div>
            {#<div class=\"container-fluid\">
                <div class=\"row pl-lg-5\">
                    <div class=\"col-md-11 col-lg-8 project-wrapper pl-lg-5\">
                        <h4 class=\"project-title mb-3 mb-xl-4\">Facebook</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div>
                </div>
            </div>#}
        </section>
        <section class=\"invest-banner-section bg-white color-change-4\">
            <img src=\"{{ 'case-studies/o-de-rose/invest-img.png'|media }}\" class=\"w-100 d-none d-md-block\" alt=\"\">
            <img src=\"{{ 'case-studies/o-de-rose/invest-img-mobile.png'|media }}\" class=\"w-100 d-md-none\" alt=\"\">
        </section>
        <section class=\"projects-section print-flyer-section landing-pages-rose section-padding-y bg-white section-padding-x position-relative section-lines pb-0\" style=\"background-image: url('{{ 'case-studies/fitbites/marks-2-bg.jpg'|media }}');\">
            <div class=\"section-devider py-5 d-none d-sm-block\"></div>
            <div class=\"container-fluid d-flex flex-column\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-10\">
                        <img src=\"{{ 'case-studies/o-de-rose/landing-pages-img.png'|media }}\" alt=\"\" class=\"w-100\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-11 col-lg-8 project-wrapper\">
                        <h4 class=\"project-title mb-3 mb-xl-4\">Landing Pages</h4>
                        <p>We also designed and built several custom landing pages to integrate with our marketing strategy and media buying. The pages were designed to capture the attention of their target demographic and generate new leads.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"projects-section position-relative bg-white color-change-8\" data-scroll data-scroll-repeat>
            <div class=\"tell-us-section scrollStart position-relative section-padding-x z-index-10 d-none d-xl-block\" data-scroll>
                <div class=\"cut-bg-div section-padding-y pb-5\">
                    <div class=\"middle-line d-none d-md-block\"></div>
                    <div class=\"container-fluid\">
                        <div class=\"position-relative\">
                            <div id=\"scrollToPlace\">
                                <div data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"bottom\" class=\"d-none d-xxl-block\">
                                    <div class=\"p-top\">
                                        <h3 class=\"big-title text-shadow mb-5\" style=\"background-image: url('{{ 'hero-slider/title-bg.jpg'|media }}');\" >
                                           Tell Us <br> a Story
                                        </h3>
                                        <a href=\"{{ 'contact'|page }}\" class=\"btn btn-round bordered white\">Contact Us</a>
                                    </div>
                                </div>
                                <div data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"bottom\" class=\"d-block d-xxl-none\">
                                    <div class=\"p-top\">
                                        <h3 class=\"big-title text-shadow mb-5\" style=\"background-image: url('{{ 'hero-slider/title-bg.jpg'|media }}');\" >
                                           Tell Us <br> a Story
                                        </h3>
                                        <a href=\"{{ 'contact'|page }}\" class=\"btn btn-round bordered white\">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tell-us-section scrollSnap position-relative section-lines bg-000 section-padding-x section-padding-y color-change-5\" data-scroll data-scroll-repeat>
                <div class=\"container-fluid\">
                    <div class=\"big-title-hide\">
                        <h3 class=\"big-title text-shadow mb-4 mb-lg-5\" style=\"background-image: url('{{ 'hero-slider/title-bg.jpg'|media }}');\">
                           Tell Us <br> a Story
                        </h3>
                        <a href=\"{{ 'contact'|page }}\" class=\"btn btn-round bordered white\">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {% partial 'site/footer' %}
</div>", "/home/moolaymedia/public_html/themes/demo/pages/o-de-rose.htm", "");
    }
}
