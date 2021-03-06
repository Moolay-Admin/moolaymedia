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

/* /home/moolaymedia/public_html/themes/demo/pages/root-wellness.htm */
class __TwigTemplate_c5bdcced40f1464cf2e9770543fd9f779c86a55d89fc3f1034d2b0a415a9ceec extends \Twig\Template
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
        echo "<link href=\"https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap\" rel=\"stylesheet\">
<style>
    @font-face {
        font-family: 'DIN';
        src: url('";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/din/DIN-BoldAlternate.eot");
        echo "');
        src: url('";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/din/DIN-BoldAlternate.eot?#iefix");
        echo "') format('embedded-opentype'),
            url('";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/din/DIN-BoldAlternate.woff2");
        echo "') format('woff2'),
            url('";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/din/DIN-BoldAlternate.woff");
        echo "') format('woff'),
            url('";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/din/DIN-BoldAlternate.ttf");
        echo "') format('truetype'),
            url('";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/din/DIN-BoldAlternate.svg#DIN-BoldAlternate");
        echo "') format('svg');
        font-weight: bold;
        font-style: normal;
    }
    .font-family-din {
        font-family: 'DIN', sans-serif;   
    }
    .font-family-source {
        font-family: 'Source Sans Pro', sans-serif;   
    }
    .golden-devider {
        background-color: #c1a661;    
    }
</style>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 26
        echo "<div data-scroll-section>
    <section class=\"hero-section bg-white section-padding-x d-flex align-items-center\" data-scroll>
        <div class=\"section-padding-y-smaller pb-100 w-100\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center justify-content-center justify-content-xl-left\">
                    <div class=\"col-xl-7 col-xxl-8 mb-5 mb-xl-0 text-center text-xl-left\">
                        <h5 class=\"subtitle text-light-gray mb-4\">AWAKEN. BLOOM. TRANSCEND.</h5>
                        <h3 class=\"section-title text-black mb-5\">Root Wellness</h3>
                        <div class=\"tags mb-3 mb-lg-4\">
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">New Website</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Landing Pages</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Media Buying</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Social Content</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Video Ads</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Blogs</a>
                        </div>
                        <p>A new CBD brand that was looking to establish their digital presence and grow sales. We designed and developed a custom e-commerce website and coupled it with a complex, narrative-driven marketing campaign including landing pages, video ads, blogs, and more.</p>
                    </div>
                    <div class=\"col-6 col-xl-5 col-xxl-4\">
                        <img src=\"";
        // line 45
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/root-wellness/rw-hero-asset.png");
        echo "\" class=\"w-100\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"main bg-black\">
        <section class=\"logo-section projects-section bg-white section-padding-x d-flex align-items-center\" data-scroll>
            <div class=\"cut-bg-div section-padding-y-smaller\">
                <div class=\"container-fluid\">
                    <div class=\"row align-items-center justify-content-center mb-100\">
                        <div class=\"col-xl-3 d-flex project-wrapper\">
                            <div class=\"root-logo\">
                                <img src=\"";
        // line 58
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/root-wellness/root-logo.png");
        echo "\" class=\"w-100\" alt=\"\">
                            </div>
                        </div>
                    </div>
                    <img src=\"";
        // line 62
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/root-wellness/rw-firm-img.jpg");
        echo "\" class=\"w-100\" alt=\"\">
                </div>
            </div>
        </section>
        <div class=\"golden-devider py-3\"></div>
        <section class=\"typography-section position-relative bg-white d-flex align-items-center section-lines section-padding-y-smaller pb-0\" data-scroll>
            <div class=\"row justify-content-center align-items-center section-padding-x pr-xl-0\">
                <div class=\"col-xl-10 text-center\">
                    <div class=\"tags mb-3 mb-lg-4\">
                        <h3 class=\"section-title mb-3 mb-xl-4 text-black\">Typography</h3>
                    </div>
                </div>
                <div class=\"col-xl-5 pr-xl-0 z-index-9\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-12 mb-4 mb-xl-5 text-center text-xl-left\">
                                <p>To complement the elegant brand design that Root Wellness brought to us, we curated a set of fonts for them that paired perfectly with the crisp design of the site we were building and hinted at their future-forward approach to CBD.</p>
                            </div>
                            <div class=\"col-sm-6 col-xl-12 mb-4 mb-sm-0 mb-xl-5 text-center text-xl-left\">
                                <h3 class=\"h1 font-family-din font-weight-700 text-black fonts-title\">DIN Alternate</h3>
                                <span class=\"text-black fonts-subtitle\">Black</span>
                            </div>
                            <div class=\"col-sm-6 col-xl-12 mb-4 mb-sm-0 mb-xl-5 text-center text-xl-left\">
                                <h3 class=\"h1 font-family-source font-weight-400 text-black fonts-title\">Source Sans Pro</h3>
                                <span class=\"text-black fonts-subtitle\">Bold</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-7\">
                    <img src=\"";
        // line 92
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/root-wellness/typography.png");
        echo "\" class=\"w-100 d-none d-xl-block\" alt=\"\">
                    <img src=\"";
        // line 93
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/root-wellness/typography-mobile.png");
        echo "\" class=\"w-100 d-xl-none\" alt=\"\">
                </div>
            </div>
        </section>
        <section class=\"projects-section position-relative bg-white d-flex align-items-center section-lines section-padding-y-smaller pt-0 pb-0\" data-scroll>
            <div class=\"row justify-content-center align-items-center z-index-9 section-padding-x pl-xl-0\">
                <div class=\"col-xl-7 mb-4 mb-xl-0\">
                    <img src=\"";
        // line 100
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/root-wellness/e-comm-img.png");
        echo "\" class=\"w-100 d-none d-xl-block\" alt=\"\">
                    <img src=\"";
        // line 101
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/root-wellness/e-comm-img-mobile.png");
        echo "\" class=\"w-100 d-xl-none\" alt=\"\">
                </div>
                <div class=\"col-xl-5 mb-5 project-wrapper\">
                    <div class=\"container-fluid pl-xl-0\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <h4 class=\"project-title mb-3 mb-xl-5 text-black\">E-Commerce Website</h4>
                                <div class=\"mb-4 mb-xl-5\">
                                    <p>Our goal for the Root Wellness website was to create a custom-designed portal that both showcased their stunning brand design and made shopping easy for their customers. We focused heavily on UX, ensuring that access to their store and products was ubiquitous throughout the site, while also creating content-rich pages to tell the brand’s unique story.</p>
                                </div>
                                <a href=\"https://rootwellnesscbd.com/\" class=\"btn btn-round blackish\">View Website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"cards-section projects-section section-padding-x bg-white\" data-scroll>
            <div class=\"cut-bg-div py-100\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-12 py-4 py-xl-5\"></div>
                        <div class=\"col-12\">
                            <img src=\"";
        // line 124
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/root-wellness/full-web-root.png");
        echo "\" class=\"w-100 cards-2-img\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"web-design-section-rose projects-section bg-000 section-padding-x color-change-1\" data-scroll>
            <div class=\"cut-bg-div section-padding-y\">
                <div class=\"section-padding-y-smaller section-devider\"></div>
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center mb-100\">
                        <div class=\"col-lg-9 col-xl-7 project-wrapper mb-4 mb-md-0 text-center\">
                            <h4 class=\"project-title text-white mb-3 mb-xl-4\">Responsive Design</h4>
                            <div class=\"mb-sm-4 mb-xl-5\">
                                <p>Throughout the design process, we came at the site from a mobile-first perspective. Before launch, we spent significant time optimizing across a range of resolutions to ensure that the site, and the products, looked great on any device.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src=\"";
        // line 143
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/root-wellness/responsive-design.png");
        echo "\" class=\"w-100\" alt=\"\">
                    </div>
                </div>
            </div>
        </section>
        <section class=\"social-media-gl-section projects-section section-padding-x bg-000 color-change-2\" data-scroll>
            <div class=\"cut-bg-div section-padding-y-smaller pb-0\">
                <div class=\"container-fluid px-3 px-lg-5\">
                    <div class=\"row px-md-5 align-items-center\">
                        <div class=\"col-md-6 col-lg-4 \">
                            <h3 class=\"section-title mb-3 mb-lg-4 text-white\">Social <br>Content</h3>
                            <p class=\"\">It’s always a pleasure to work with a great piece of brand design. Our team were inspired by the Root Wellness brand story to create a range of stunning social graphics and posts highlighting their products and showcasing their exciting sustainability projects.</p>
                        </div>
                        <div class=\"col-md-6 col-lg-8 position-relative px-0\">
                            <div class=\"social-images-gl\">
                                <img src=\"";
        // line 158
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/root-wellness/social-media-img-left.png");
        echo "\" class=\"w-100 social-image-left\" alt=\"\">
                                <img src=\"";
        // line 159
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/root-wellness/social-media-img-middle.png");
        echo "\" class=\"w-100 social-image-middle\" alt=\"\">
                                <img src=\"";
        // line 160
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/root-wellness/social-media-img-right.png");
        echo "\" class=\"w-100 social-image-right\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        ";
        // line 181
        echo "        <section class=\"bg-white\" data-scroll>
            <div>
                <img src=\"";
        // line 183
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/root-wellness/responsive-design-2.jpg");
        echo "\" class=\"w-100\" alt=\"\">
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
        // line 195
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                           Tell Us <br> a Story
                                        </h3>
                                        <a href=\"";
        // line 198
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                                    </div>
                                </div>
                                <div data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"bottom\" class=\"d-block d-xxl-none\">
                                    <div class=\"p-top\">
                                        <h3 class=\"big-title text-shadow mb-5\" style=\"background-image: url('";
        // line 203
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                           Tell Us <br> a Story
                                        </h3>
                                        <a href=\"";
        // line 206
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
        // line 217
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\">
                           Tell Us <br> a Story
                        </h3>
                        <a href=\"";
        // line 220
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    ";
        // line 226
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 227
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/moolaymedia/public_html/themes/demo/pages/root-wellness.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 227,  331 => 226,  322 => 220,  316 => 217,  302 => 206,  296 => 203,  288 => 198,  282 => 195,  267 => 183,  263 => 181,  253 => 160,  249 => 159,  245 => 158,  227 => 143,  205 => 124,  179 => 101,  175 => 100,  165 => 93,  161 => 92,  128 => 62,  121 => 58,  105 => 45,  84 => 26,  82 => 1,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put styles %}
<link href=\"https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap\" rel=\"stylesheet\">
<style>
    @font-face {
        font-family: 'DIN';
        src: url('{{ 'assets/fonts/din/DIN-BoldAlternate.eot'|theme }}');
        src: url('{{ 'assets/fonts/din/DIN-BoldAlternate.eot?#iefix'|theme }}') format('embedded-opentype'),
            url('{{ 'assets/fonts/din/DIN-BoldAlternate.woff2'|theme }}') format('woff2'),
            url('{{ 'assets/fonts/din/DIN-BoldAlternate.woff'|theme }}') format('woff'),
            url('{{ 'assets/fonts/din/DIN-BoldAlternate.ttf'|theme }}') format('truetype'),
            url('{{ 'assets/fonts/din/DIN-BoldAlternate.svg#DIN-BoldAlternate'|theme }}') format('svg');
        font-weight: bold;
        font-style: normal;
    }
    .font-family-din {
        font-family: 'DIN', sans-serif;   
    }
    .font-family-source {
        font-family: 'Source Sans Pro', sans-serif;   
    }
    .golden-devider {
        background-color: #c1a661;    
    }
</style>
{% endput %}
<div data-scroll-section>
    <section class=\"hero-section bg-white section-padding-x d-flex align-items-center\" data-scroll>
        <div class=\"section-padding-y-smaller pb-100 w-100\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center justify-content-center justify-content-xl-left\">
                    <div class=\"col-xl-7 col-xxl-8 mb-5 mb-xl-0 text-center text-xl-left\">
                        <h5 class=\"subtitle text-light-gray mb-4\">AWAKEN. BLOOM. TRANSCEND.</h5>
                        <h3 class=\"section-title text-black mb-5\">Root Wellness</h3>
                        <div class=\"tags mb-3 mb-lg-4\">
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">New Website</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Landing Pages</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Media Buying</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Social Content</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Video Ads</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Blogs</a>
                        </div>
                        <p>A new CBD brand that was looking to establish their digital presence and grow sales. We designed and developed a custom e-commerce website and coupled it with a complex, narrative-driven marketing campaign including landing pages, video ads, blogs, and more.</p>
                    </div>
                    <div class=\"col-6 col-xl-5 col-xxl-4\">
                        <img src=\"{{ 'case-studies/root-wellness/rw-hero-asset.png'|media }}\" class=\"w-100\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"main bg-black\">
        <section class=\"logo-section projects-section bg-white section-padding-x d-flex align-items-center\" data-scroll>
            <div class=\"cut-bg-div section-padding-y-smaller\">
                <div class=\"container-fluid\">
                    <div class=\"row align-items-center justify-content-center mb-100\">
                        <div class=\"col-xl-3 d-flex project-wrapper\">
                            <div class=\"root-logo\">
                                <img src=\"{{ 'case-studies/root-wellness/root-logo.png'|media }}\" class=\"w-100\" alt=\"\">
                            </div>
                        </div>
                    </div>
                    <img src=\"{{ 'case-studies/root-wellness/rw-firm-img.jpg'|media }}\" class=\"w-100\" alt=\"\">
                </div>
            </div>
        </section>
        <div class=\"golden-devider py-3\"></div>
        <section class=\"typography-section position-relative bg-white d-flex align-items-center section-lines section-padding-y-smaller pb-0\" data-scroll>
            <div class=\"row justify-content-center align-items-center section-padding-x pr-xl-0\">
                <div class=\"col-xl-10 text-center\">
                    <div class=\"tags mb-3 mb-lg-4\">
                        <h3 class=\"section-title mb-3 mb-xl-4 text-black\">Typography</h3>
                    </div>
                </div>
                <div class=\"col-xl-5 pr-xl-0 z-index-9\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-12 mb-4 mb-xl-5 text-center text-xl-left\">
                                <p>To complement the elegant brand design that Root Wellness brought to us, we curated a set of fonts for them that paired perfectly with the crisp design of the site we were building and hinted at their future-forward approach to CBD.</p>
                            </div>
                            <div class=\"col-sm-6 col-xl-12 mb-4 mb-sm-0 mb-xl-5 text-center text-xl-left\">
                                <h3 class=\"h1 font-family-din font-weight-700 text-black fonts-title\">DIN Alternate</h3>
                                <span class=\"text-black fonts-subtitle\">Black</span>
                            </div>
                            <div class=\"col-sm-6 col-xl-12 mb-4 mb-sm-0 mb-xl-5 text-center text-xl-left\">
                                <h3 class=\"h1 font-family-source font-weight-400 text-black fonts-title\">Source Sans Pro</h3>
                                <span class=\"text-black fonts-subtitle\">Bold</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-7\">
                    <img src=\"{{ 'case-studies/root-wellness/typography.png'|media }}\" class=\"w-100 d-none d-xl-block\" alt=\"\">
                    <img src=\"{{ 'case-studies/root-wellness/typography-mobile.png'|media }}\" class=\"w-100 d-xl-none\" alt=\"\">
                </div>
            </div>
        </section>
        <section class=\"projects-section position-relative bg-white d-flex align-items-center section-lines section-padding-y-smaller pt-0 pb-0\" data-scroll>
            <div class=\"row justify-content-center align-items-center z-index-9 section-padding-x pl-xl-0\">
                <div class=\"col-xl-7 mb-4 mb-xl-0\">
                    <img src=\"{{ 'case-studies/root-wellness/e-comm-img.png'|media }}\" class=\"w-100 d-none d-xl-block\" alt=\"\">
                    <img src=\"{{ 'case-studies/root-wellness/e-comm-img-mobile.png'|media }}\" class=\"w-100 d-xl-none\" alt=\"\">
                </div>
                <div class=\"col-xl-5 mb-5 project-wrapper\">
                    <div class=\"container-fluid pl-xl-0\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <h4 class=\"project-title mb-3 mb-xl-5 text-black\">E-Commerce Website</h4>
                                <div class=\"mb-4 mb-xl-5\">
                                    <p>Our goal for the Root Wellness website was to create a custom-designed portal that both showcased their stunning brand design and made shopping easy for their customers. We focused heavily on UX, ensuring that access to their store and products was ubiquitous throughout the site, while also creating content-rich pages to tell the brand’s unique story.</p>
                                </div>
                                <a href=\"https://rootwellnesscbd.com/\" class=\"btn btn-round blackish\">View Website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"cards-section projects-section section-padding-x bg-white\" data-scroll>
            <div class=\"cut-bg-div py-100\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-12 py-4 py-xl-5\"></div>
                        <div class=\"col-12\">
                            <img src=\"{{ 'case-studies/root-wellness/full-web-root.png'|media }}\" class=\"w-100 cards-2-img\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"web-design-section-rose projects-section bg-000 section-padding-x color-change-1\" data-scroll>
            <div class=\"cut-bg-div section-padding-y\">
                <div class=\"section-padding-y-smaller section-devider\"></div>
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center mb-100\">
                        <div class=\"col-lg-9 col-xl-7 project-wrapper mb-4 mb-md-0 text-center\">
                            <h4 class=\"project-title text-white mb-3 mb-xl-4\">Responsive Design</h4>
                            <div class=\"mb-sm-4 mb-xl-5\">
                                <p>Throughout the design process, we came at the site from a mobile-first perspective. Before launch, we spent significant time optimizing across a range of resolutions to ensure that the site, and the products, looked great on any device.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src=\"{{ 'case-studies/root-wellness/responsive-design.png'|media }}\" class=\"w-100\" alt=\"\">
                    </div>
                </div>
            </div>
        </section>
        <section class=\"social-media-gl-section projects-section section-padding-x bg-000 color-change-2\" data-scroll>
            <div class=\"cut-bg-div section-padding-y-smaller pb-0\">
                <div class=\"container-fluid px-3 px-lg-5\">
                    <div class=\"row px-md-5 align-items-center\">
                        <div class=\"col-md-6 col-lg-4 \">
                            <h3 class=\"section-title mb-3 mb-lg-4 text-white\">Social <br>Content</h3>
                            <p class=\"\">It’s always a pleasure to work with a great piece of brand design. Our team were inspired by the Root Wellness brand story to create a range of stunning social graphics and posts highlighting their products and showcasing their exciting sustainability projects.</p>
                        </div>
                        <div class=\"col-md-6 col-lg-8 position-relative px-0\">
                            <div class=\"social-images-gl\">
                                <img src=\"{{ 'case-studies/root-wellness/social-media-img-left.png'|media }}\" class=\"w-100 social-image-left\" alt=\"\">
                                <img src=\"{{ 'case-studies/root-wellness/social-media-img-middle.png'|media }}\" class=\"w-100 social-image-middle\" alt=\"\">
                                <img src=\"{{ 'case-studies/root-wellness/social-media-img-right.png'|media }}\" class=\"w-100 social-image-right\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {#<section class=\"web-design-section-rose projects-section bg-white section-padding-x \" data-scroll>
            <div class=\"cut-bg-div section-padding-y-smaller\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-9 col-xl-7 project-wrapper mb-4 mb-md-0 text-center\">
                            <h4 class=\"project-title text-black mb-3 mb-xl-4\">Responsive Design</h4>
                            <div class=\"mb-sm-4 mb-xl-5\">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>#}
        <section class=\"bg-white\" data-scroll>
            <div>
                <img src=\"{{ 'case-studies/root-wellness/responsive-design-2.jpg'|media }}\" class=\"w-100\" alt=\"\">
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
</div>", "/home/moolaymedia/public_html/themes/demo/pages/root-wellness.htm", "");
    }
}
