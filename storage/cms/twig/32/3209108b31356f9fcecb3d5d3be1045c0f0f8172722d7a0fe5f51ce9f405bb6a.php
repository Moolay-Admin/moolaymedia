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

/* /home/moolaymedia/public_html/themes/demo/pages/home.htm */
class __TwigTemplate_1d3c8450eba7e502123634ea90e891c999314627721da8f2e021b311945e4091 extends \Twig\Template
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
        echo "<div data-scroll-section>
    ";
        // line 15
        echo "     <section id=\"hero\" class=\"home-video bg-white d-flex align-items-center color-change-17\" data-scroll data-scroll-repeat>
        <div class=\"video-wrapper-home overlay-primary\">
            <video autoplay=\"autoplay\" loop muted playsinline>
    \t      <source src=\"";
        // line 18
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/home-video-1-slower.mp4");
        echo "\" type=\"video/mp4\">
    \t      Your browser does not support the video tag.
    \t    </video>
        </div>
        <div class=\"hero-text-container container-fluid text-center\">
            <img src=\"";
        // line 23
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/we-are.png");
        echo "\" class=\"our-passion mb-4 mb-lg-5\" data-scroll data-scroll-repeat alt=\"\">
            <h1 id=\"autowrite\" class=\"section-title text-white\">
                <span>Creatives</span> <br> 
                <span>Storytellers</span> <br> 
                <span>Strategists</span> <br> 
                <span>Moolay</span>
            </h1>
        </div>
    </section>
    <section class=\"section-padding-x bg-light\" data-scroll data-scroll-repeat>
        <div class=\"cut-bg-div section-padding-y\">
        <div class=\"middle-line d-none d-md-block\"></div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h3 class=\"big-title text-white text-shadow mb-4 fadeInUp\" data-scroll data-scroll-repeat >Your Brand</h3>
                        <img src=\"";
        // line 39
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/our-passion.png");
        echo "\" class=\"our-passion mb-4 mb-md-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\" alt=\"Our Passion\">
                        <div class=\"mb-4 mb-md-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">
                            <p>Moolay Media is about communicating the essence of your brand to the world.<br> From websites to social campaigns, we are passionate about connecting with our clients to give their vision a voice.</p>
                        </div>
                        <a href=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
        echo "\" class=\"btn btn-round white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".6\">Who are we?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"gl-lodge-home parallax-section position-relative parallax-full d-flex align-items-center color-change-1\" data-scroll data-scroll-repeat >
        <div id=\"parallax-img-1\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" ";
        // line 53
        echo ">
                       <img src=\"";
        // line 54
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/gl-bg-2.jpg");
        echo "\" alt=\"\" class=\"main-img\">
                       <img src=\"";
        // line 55
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/gl-bg.jpg");
        echo "\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5\">
                    <img src=\"";
        // line 63
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/gl-logo.png");
        echo "\" class=\"home-projects-logo mb-4 mb-xl-5 fadeInLeft\" data-scroll data-scroll-repeat alt=\"Gratitude Lodge Logo\">
                    <div class=\"mb-4 mb-xl-5 text-white fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".3\">
                        <p>One of the top boutique addiction recovery centers in the Newport Beach and Long beach areas. We gave them a fresh brand redesign to go with an expansive new SEO-driven website and multi-platform marketing campaign.</p>
                    </div>
                    <a href=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gratitude-lodge");
        echo "\" class=\"btn btn-round bordered white fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".6\">View Project</a>
                </div>
            </div>
        </div>
    </section>
    <section class=\"fitbites-home section-padding-x section-padding-y projects-section d-flex align-items-center position-relative bg-000 parallax-full color-change-2\" data-scroll data-scroll-repeat>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <img src=\"";
        // line 76
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/fitbites-logo.png");
        echo "\" class=\"home-projects-logo mb-4 mb-xl-5 fadeInUp\" data-scroll data-scroll-repeat  alt=\"Fitbites Logo\">
                    <div class=\"mb-4 mb-xl-5 text-white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                        <p>A healthy, locally-sourced casual restaurant and catering service based in Orange County, CA. aiming to grow their brand awareness and customer base. Our team worked with them to execute a complete rebrand, including two new websites, print materials, and digital content to support a comprehensive marketing strategy.</p>
                    </div>
                    <a href=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitbites");
        echo "\" class=\"btn btn-round bordered white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">View Project</a>
                </div>
            </div>
        </div>
        <div id=\"fitbites-meal-1\" class=\"fb-meal-1\" data-scroll>
            <img src=\"";
        // line 85
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/meal-big.png");
        echo "\" alt=\"\" class=\"w-100\" data-scroll data-scroll-speed=\"-3.5\" data-scroll-direction=\"horizontal\" data-scroll-target=\"#fitbites-meal-1\" data-scroll-position=\"bottom\" data-scroll-offset=\"0, -90%\">
        </div>
        <div id=\"fitbites-meal-2\" class=\"fb-meal-2\" data-scroll>
            <img src=\"";
        // line 88
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/meal-small.png");
        echo "\" alt=\"\" class=\"w-100\" data-scroll data-scroll-speed=\"4\" data-scroll-direction=\"vertical\"  data-scroll-position=\"bottom\" data-scroll-target=\"#fitbites-meal-2\" data-scroll-offset=\"-100%, 0\">
        </div>
       ";
        // line 93
        echo "    </section>
    <section class=\"oderose-home parallax-section projects-section position-relative parallax-full d-flex align-items-center no-color-change-3\" data-scroll data-scroll-repeat>
        <div id=\"parallax-img-2\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" ";
        // line 98
        echo ">
                       <img src=\"";
        // line 99
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/o-de-bg-2.jpg");
        echo "\" alt=\"\" class=\"main-img\">
                       <img src=\"";
        // line 100
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/o-de-bg.jpg");
        echo "\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <h4 class=\"project-title mb-4 mb-xl-5 fadeInLeft\" data-scroll data-scroll-repeat>Ô DE ROSE <span class=\"font-weight-500\">MED SPA</span></h4>
                    <div class=\"mb-4 mb-xl-5 fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".3\">
                        <p>A high-end med spa in Orange County, CA that was looking to expand their business and grow sales. We provided a logo and brand redesign along with a sleek new website and landing pages to support a content-focused marketing campaign.</p>
                    </div>
                    <a href=\"";
        // line 112
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("o-de-rose");
        echo "\" class=\"btn btn-round bordered white black-text fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".6\">View Project</a>
                </div>
            </div>
        </div>
    </section>
    <section class=\"root-home parallax-section projects-section position-relative parallax-full d-flex align-items-center color-change-4\" data-scroll data-scroll-repeat>
        <div id=\"parallax-img-3\" class=\"parallax-img\" data-scroll data-scroll-repeat>
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" ";
        // line 121
        echo ">
                       <img src=\"";
        // line 122
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/rw-bg-2.jpg");
        echo "\" alt=\"\" class=\"main-img\">
                       <img src=\"";
        // line 123
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/rw-bg.jpg");
        echo "\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-white fadeInUp\" data-scroll data-scroll-repeat>Root Wellness</span></h4>
                    <div class=\"mb-4 mb-xl-5 text-white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                        <p>A new CBD brand that was looking to establish their digital presence and grow sales. We designed and developed a custom e-commerce website and coupled it with a complex, narrative-driven marketing campaign including landing pages, video ads, blogs, and more.</p>
                    </div>
                    <a href=\"";
        // line 135
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("root-wellness");
        echo "\" class=\"btn btn-round bordered white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">View Project</a>
                </div>
            </div>
        </div>
        <div id=\"rw-mockup\" class=\"rw-bottle\">
            <img src=\"";
        // line 140
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/rw-mockup.png");
        echo "\" alt=\"\" class=\"w-100 show-on-small hide-on-big\" data-scroll data-scroll-speed=\"6\" data-scroll-direction=\"horizontal\" data-scroll-target=\"#rw-mockup\" data-scroll-position=\"bottom\" data-scroll-offset=\"0, 100%\">
            <img src=\"";
        // line 141
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/rw-mockup.png");
        echo "\" alt=\"\" class=\"w-100 hide-on-small show-on-big\" data-scroll data-scroll-speed=\"9\" data-scroll-direction=\"horizontal\" data-scroll-target=\"#rw-mockup\" data-scroll-position=\"bottom\" data-scroll-offset=\"0, 100%\">
        </div>
    </section>
    <section class=\"projects-section section-padding-x py-100 position-relative bg-white\" data-scroll data-scroll-repeat>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xl-7 d-flex flex-column flex-md-row align-items-md-center\">
                    <div class=\"mr-5 order-1 order-md-0\">
                        <a href=\"#\" class=\"btn btn-round bordered black d-md-block fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">Our Work</a>
                    </div>
                    <div class=\"order-0 order-md-1 mb-4 mb-md-0\">
                        <p class=\"mb-0 d-inline-block fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".6\">We take great pride in the work that we do. Have a look at some more of the work that we’ve done for our clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"section-padding-x bg-light\" data-scroll data-scroll-repeat>
        <div class=\"cut-bg-div section-padding-y-smaller\">
            <div class=\"middle-line d-none d-md-block\"></div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12 text-xl-right pb-5\">
                        <img src=\"";
        // line 164
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/our.png");
        echo "\" class=\"our-passion mb-4 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\" alt=\"Our\">
                        <h3 class=\"big-title text-white text-shadow mb-4 mb-xl-5 fadeInUp\" data-scroll data-scroll-repeat >Services</h3>
                        ";
        // line 170
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section id=\"servicesHome\" class=\"projects-section services-section-home bg-white\" data-scroll data-scroll-repeat>
        
        <div class=\"cancel-service d-none d-xl-block\">
            <svg class=\"hamburger-svg hamburger-top-svg\" viewBox=\"0 0 40 6\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
                <polygon points=\"0,0 40,0 40,6 0,6\"></polygon>
            </svg>
            <svg class=\"hamburger-svg hamburger-bottom-svg\" viewBox=\"0 0 40 6\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
                <polygon points=\"0,0 40,0 40,6 0,6\"></polygon>
            </svg>
        </div>
        <div class=\"service-modal-home section-modal-wd fadeInRight pb-0\" data-scroll data-scroll-repeat animation-delay=\".2\">
            <div class=\"service-modal-home-click\">
                <div class=\"web-design-service modal-mobile\">
                    <div class=\"service-title-home project-wrapper d-xl-none pb-4\">
                        <h4 class=\"project-title mb-0 text-black\">Web Design & Development</h4>
                    </div>
                    <img src=\"";
        // line 193
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/web-design.jpg");
        echo "\" class=\"w-100\">
                    <div class=\"project-wrapper service-text-home d-none d-xl-block\">
                        <h4 class=\"project-title mb-4 mb-xl-5 text-black\">Web Design</h4>
                        <div class=\"mb-4 mb-xl-5\">
                            <p>The experience your customers have on your website will define your relationship. That’s why user experience is at the heart of every website we build. Mobile-first, future-forward design delivers sleek websites that spark engagement and drive sales.</p>
                        </div>
                        <a href=\"";
        // line 199
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" class=\"btn btn-round bordered silver\">Services</a>
                    </div>
                </div>
                <div class=\"service-title-home project-wrapper d-none d-xl-block\">
                    <h4 class=\"project-title mb-0 text-black\">Web Design</h4>
                </div>
            </div>
        </div>
        <div class=\"service-modal-home section-modal-br fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".4\">
            <div class=\"branding-service modal-mobile\">
                <div class=\"service-title-home project-wrapper d-xl-none\">
                    <h4 class=\"project-title mb-0 text-black\">Branding</h4>
                </div>
                <img src=\"";
        // line 212
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/branding.png");
        echo "\" class=\"w-100\">
                <div class=\"project-wrapper service-text-home d-none d-xl-block\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-black\">Branding</h4>
                    <div class=\"mb-4 mb-xl-5\">
                        <p>Your brand is more than just a logo. It’s the beginning of your story. We create brands that capture the essence of your business and the attention of your customers. From logo updates to full brand kits, we’ll get your story started.</p>
                    </div>
                    <a href=\"";
        // line 218
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" class=\"btn btn-round bordered silver\">Services</a>
                </div>
            </div>
            <div class=\"blue-bg shadow-md d-none d-xl-block\">
                <div class=\"service-title-home project-wrapper\">
                    <h4 class=\"project-title mb-0\">Branding</h4>
                </div>
            </div>
        </div>
        <div class=\"service-modal-home section-modal-cc fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".2\">
            <div class=\"content-service modal-mobile\">
                <div class=\"service-title-home project-wrapper d-xl-none pb-3\">
                    <h4 class=\"project-title mb-0 text-black\">Content <br> Creation</h4>
                </div>
                <img src=\"";
        // line 232
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/content-creation.png");
        echo "\" class=\"w-100 normal-img\">
                <img src=\"";
        // line 233
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/content-creation-hover.png");
        echo "\" class=\"w-100 hover-img d-none d-xl-block\">
                <div class=\"project-wrapper service-text-home d-none d-xl-block\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-white\">Content Creation</h4>
                    <div class=\"mb-4 mb-xl-5\">
                        <p>How do you tell a story without words? Content is the lifeblood of your brand’s narrative. The words that come together to write your story. We create multimedia content that connects with your audience and keeps them listening for when it counts.</p>
                    </div>
                    <a href=\"";
        // line 239
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" class=\"btn btn-round bordered white\">Services</a>
                </div>
                
            </div>
            <div class=\"service-title-home project-wrapper d-none d-xl-block\">
                <h4 class=\"project-title mb-0 text-black\">Content <br> Creation</h4>
            </div>
        </div>
        <div class=\"service-modal-home section-modal-mm shadow-lg fadeInRight pb-0\" data-scroll data-scroll-repeat animation-delay=\".4\">
            <div class=\"marketing-service modal-mobile\">
                <div class=\"service-title-home project-wrapper d-xl-none\">
                    <h4 class=\"project-title mb-0\">Marketing</h4>
                </div>
                <img src=\"";
        // line 252
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/marketing.png");
        echo "\" class=\"w-100\">
                <div class=\"project-wrapper service-text-home d-none d-xl-block\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-white\">Marketing</h4>
                    <div class=\"mb-4 mb-xl-5\">
                        <p>We don’t just create adverts for our clients. We create full-service digital campaigns that integrate cohesive strategies with dazzling content. When we tell your story, we don’t just tell it – we shout it from the rooftops!</p>
                    </div>
                    <a href=\"";
        // line 258
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" class=\"btn btn-round bordered white\">Services</a>
                </div>
            </div>
            <div class=\"service-title-home project-wrapper d-none d-xl-block\">
                <h4 class=\"project-title mb-0\">Marketing</h4>
            </div>
        </div>
        
        <div class=\"section-padding-y bg-white d-none d-xl-block\"></div>
        
        <div class=\"section-padding-y bg-white position-relative shadow-lg holder-section\">
            <a href=\"";
        // line 269
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" class=\"btn btn-round bordered silver services-button\">Services</a>
        </div>
        <div class=\"tell-us-section scrollStart position-relative section-padding-x z-index-10 d-none d-xl-block\" data-scroll>
            <div class=\"cut-bg-div section-padding-y pb-5\">
                <div class=\"container-fluid\">
                    <div class=\"position-relative\">
                        <div id=\"scrollToPlace\">
                            <div data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"bottom\" class=\"d-none d-xxl-block\">
                                <div class=\"p-top\">
                                    <h3 class=\"big-title text-shadow mb-5\" style=\"background-image: url('";
        // line 278
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                       Tell Us <br> a Story
                                    </h3>
                                    <a href=\"";
        // line 281
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                                </div>
                            </div>
                            <div data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"bottom\" class=\"d-block d-xxl-none\">
                                <div class=\"p-top\">
                                    <h3 class=\"big-title text-shadow mb-5\" style=\"background-image: url('";
        // line 286
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                       Tell Us <br> a Story
                                    </h3>
                                    <a href=\"";
        // line 289
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"tell-us-section scrollSnap bg-000 section-padding-x color-change-5\" data-scroll data-scroll-repeat>
            <div class=\"cut-bg-div section-padding-y\">
                <div></div>
                <div class=\"container-fluid\">
                    <div class=\"big-title-hide\">
                        <h3 class=\"big-title text-shadow mb-4 mb-lg-5\" style=\"background-image: url('";
        // line 302
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\">
                           Tell Us <br> a Story
                        </h3>
                        <a href=\"";
        // line 305
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 311
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 312
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/home/moolaymedia/public_html/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 312,  452 => 311,  443 => 305,  437 => 302,  421 => 289,  415 => 286,  407 => 281,  401 => 278,  389 => 269,  375 => 258,  366 => 252,  350 => 239,  341 => 233,  337 => 232,  320 => 218,  311 => 212,  295 => 199,  286 => 193,  261 => 170,  256 => 164,  230 => 141,  226 => 140,  218 => 135,  203 => 123,  199 => 122,  196 => 121,  184 => 112,  169 => 100,  165 => 99,  162 => 98,  155 => 93,  150 => 88,  144 => 85,  136 => 80,  129 => 76,  117 => 67,  110 => 63,  99 => 55,  95 => 54,  92 => 53,  79 => 43,  72 => 39,  53 => 23,  45 => 18,  40 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div data-scroll-section>
    {#<section id=\"hero\" class=\"home-hero hero-section bg-move section-padding-x d-flex align-items-center bg-white\" data-scroll data-scroll-repeat>
        <div class=\"hero-slider\">
            <div class=\"slide-img\" style=\"background-image: url('{{ 'hero-slider/home-hero-bg.png'|media }}');\"></div>
        </div>
        <div class=\"hero-text-container container-fluid text-center text-md-left\">
            <h1 id=\"bgTitle\" class=\"big-title text-shadow zoomIn\" animation-delay=\".2\" style=\"background-image: url('{{ 'hero-slider/title-bg-test.jpg'|media }}');\">
               <span>Creative</span> <br> 
               <span>Passionate</span> <br> 
               <span>Driven</span> <br> 
               <span>Moolay</span>
            </h1>
        </div>
    </section>#}
     <section id=\"hero\" class=\"home-video bg-white d-flex align-items-center color-change-17\" data-scroll data-scroll-repeat>
        <div class=\"video-wrapper-home overlay-primary\">
            <video autoplay=\"autoplay\" loop muted playsinline>
    \t      <source src=\"{{ 'home/home-video-1-slower.mp4'|media }}\" type=\"video/mp4\">
    \t      Your browser does not support the video tag.
    \t    </video>
        </div>
        <div class=\"hero-text-container container-fluid text-center\">
            <img src=\"{{ 'home/we-are.png'|media }}\" class=\"our-passion mb-4 mb-lg-5\" data-scroll data-scroll-repeat alt=\"\">
            <h1 id=\"autowrite\" class=\"section-title text-white\">
                <span>Creatives</span> <br> 
                <span>Storytellers</span> <br> 
                <span>Strategists</span> <br> 
                <span>Moolay</span>
            </h1>
        </div>
    </section>
    <section class=\"section-padding-x bg-light\" data-scroll data-scroll-repeat>
        <div class=\"cut-bg-div section-padding-y\">
        <div class=\"middle-line d-none d-md-block\"></div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h3 class=\"big-title text-white text-shadow mb-4 fadeInUp\" data-scroll data-scroll-repeat >Your Brand</h3>
                        <img src=\"{{ 'home/our-passion.png'|media }}\" class=\"our-passion mb-4 mb-md-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\" alt=\"Our Passion\">
                        <div class=\"mb-4 mb-md-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">
                            <p>Moolay Media is about communicating the essence of your brand to the world.<br> From websites to social campaigns, we are passionate about connecting with our clients to give their vision a voice.</p>
                        </div>
                        <a href=\"{{ 'about-us'|page }}\" class=\"btn btn-round white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".6\">Who are we?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"gl-lodge-home parallax-section position-relative parallax-full d-flex align-items-center color-change-1\" data-scroll data-scroll-repeat >
        <div id=\"parallax-img-1\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" {#style=\"background-image: url('{{ 'home/gl-bg.jpg'|media }}');\"#}>
                       <img src=\"{{ 'home/gl-bg-2.jpg'|media }}\" alt=\"\" class=\"main-img\">
                       <img src=\"{{ 'home/gl-bg.jpg'|media }}\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5\">
                    <img src=\"{{ 'home/gl-logo.png'|media }}\" class=\"home-projects-logo mb-4 mb-xl-5 fadeInLeft\" data-scroll data-scroll-repeat alt=\"Gratitude Lodge Logo\">
                    <div class=\"mb-4 mb-xl-5 text-white fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".3\">
                        <p>One of the top boutique addiction recovery centers in the Newport Beach and Long beach areas. We gave them a fresh brand redesign to go with an expansive new SEO-driven website and multi-platform marketing campaign.</p>
                    </div>
                    <a href=\"{{ 'gratitude-lodge'|page }}\" class=\"btn btn-round bordered white fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".6\">View Project</a>
                </div>
            </div>
        </div>
    </section>
    <section class=\"fitbites-home section-padding-x section-padding-y projects-section d-flex align-items-center position-relative bg-000 parallax-full color-change-2\" data-scroll data-scroll-repeat>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <img src=\"{{ 'home/fitbites-logo.png'|media }}\" class=\"home-projects-logo mb-4 mb-xl-5 fadeInUp\" data-scroll data-scroll-repeat  alt=\"Fitbites Logo\">
                    <div class=\"mb-4 mb-xl-5 text-white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                        <p>A healthy, locally-sourced casual restaurant and catering service based in Orange County, CA. aiming to grow their brand awareness and customer base. Our team worked with them to execute a complete rebrand, including two new websites, print materials, and digital content to support a comprehensive marketing strategy.</p>
                    </div>
                    <a href=\"{{ 'fitbites'|page }}\" class=\"btn btn-round bordered white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">View Project</a>
                </div>
            </div>
        </div>
        <div id=\"fitbites-meal-1\" class=\"fb-meal-1\" data-scroll>
            <img src=\"{{ 'home/meal-big.png'|media }}\" alt=\"\" class=\"w-100\" data-scroll data-scroll-speed=\"-3.5\" data-scroll-direction=\"horizontal\" data-scroll-target=\"#fitbites-meal-1\" data-scroll-position=\"bottom\" data-scroll-offset=\"0, -90%\">
        </div>
        <div id=\"fitbites-meal-2\" class=\"fb-meal-2\" data-scroll>
            <img src=\"{{ 'home/meal-small.png'|media }}\" alt=\"\" class=\"w-100\" data-scroll data-scroll-speed=\"4\" data-scroll-direction=\"vertical\"  data-scroll-position=\"bottom\" data-scroll-target=\"#fitbites-meal-2\" data-scroll-offset=\"-100%, 0\">
        </div>
       {# <div id=\"fitbites-lp\" class=\"fb-lp\" data-scroll>
            <img src=\"{{ 'home/latest-project.png'|media }}\" alt=\"\" class=\"w-100\" data-scroll data-scroll-speed=\"3\" data-scroll-direction=\"horizontal\"  data-scroll-position=\"bottom\" data-scroll-target=\"#fitbites-lp\" data-scroll-offset=\"0, -100%\">
        </div>#}
    </section>
    <section class=\"oderose-home parallax-section projects-section position-relative parallax-full d-flex align-items-center no-color-change-3\" data-scroll data-scroll-repeat>
        <div id=\"parallax-img-2\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" {#style=\"background-image: url('{{ 'home/gl-bg.jpg'|media }}');\"#}>
                       <img src=\"{{ 'home/o-de-bg-2.jpg'|media }}\" alt=\"\" class=\"main-img\">
                       <img src=\"{{ 'home/o-de-bg.jpg'|media }}\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <h4 class=\"project-title mb-4 mb-xl-5 fadeInLeft\" data-scroll data-scroll-repeat>Ô DE ROSE <span class=\"font-weight-500\">MED SPA</span></h4>
                    <div class=\"mb-4 mb-xl-5 fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".3\">
                        <p>A high-end med spa in Orange County, CA that was looking to expand their business and grow sales. We provided a logo and brand redesign along with a sleek new website and landing pages to support a content-focused marketing campaign.</p>
                    </div>
                    <a href=\"{{ 'o-de-rose'|page }}\" class=\"btn btn-round bordered white black-text fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".6\">View Project</a>
                </div>
            </div>
        </div>
    </section>
    <section class=\"root-home parallax-section projects-section position-relative parallax-full d-flex align-items-center color-change-4\" data-scroll data-scroll-repeat>
        <div id=\"parallax-img-3\" class=\"parallax-img\" data-scroll data-scroll-repeat>
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" {#style=\"background-image: url('{{ 'home/gl-bg.jpg'|media }}');\"#}>
                       <img src=\"{{ 'home/rw-bg-2.jpg'|media }}\" alt=\"\" class=\"main-img\">
                       <img src=\"{{ 'home/rw-bg.jpg'|media }}\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-white fadeInUp\" data-scroll data-scroll-repeat>Root Wellness</span></h4>
                    <div class=\"mb-4 mb-xl-5 text-white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                        <p>A new CBD brand that was looking to establish their digital presence and grow sales. We designed and developed a custom e-commerce website and coupled it with a complex, narrative-driven marketing campaign including landing pages, video ads, blogs, and more.</p>
                    </div>
                    <a href=\"{{ 'root-wellness'|page }}\" class=\"btn btn-round bordered white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">View Project</a>
                </div>
            </div>
        </div>
        <div id=\"rw-mockup\" class=\"rw-bottle\">
            <img src=\"{{ 'home/rw-mockup.png'|media }}\" alt=\"\" class=\"w-100 show-on-small hide-on-big\" data-scroll data-scroll-speed=\"6\" data-scroll-direction=\"horizontal\" data-scroll-target=\"#rw-mockup\" data-scroll-position=\"bottom\" data-scroll-offset=\"0, 100%\">
            <img src=\"{{ 'home/rw-mockup.png'|media }}\" alt=\"\" class=\"w-100 hide-on-small show-on-big\" data-scroll data-scroll-speed=\"9\" data-scroll-direction=\"horizontal\" data-scroll-target=\"#rw-mockup\" data-scroll-position=\"bottom\" data-scroll-offset=\"0, 100%\">
        </div>
    </section>
    <section class=\"projects-section section-padding-x py-100 position-relative bg-white\" data-scroll data-scroll-repeat>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xl-7 d-flex flex-column flex-md-row align-items-md-center\">
                    <div class=\"mr-5 order-1 order-md-0\">
                        <a href=\"#\" class=\"btn btn-round bordered black d-md-block fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">Our Work</a>
                    </div>
                    <div class=\"order-0 order-md-1 mb-4 mb-md-0\">
                        <p class=\"mb-0 d-inline-block fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".6\">We take great pride in the work that we do. Have a look at some more of the work that we’ve done for our clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"section-padding-x bg-light\" data-scroll data-scroll-repeat>
        <div class=\"cut-bg-div section-padding-y-smaller\">
            <div class=\"middle-line d-none d-md-block\"></div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12 text-xl-right pb-5\">
                        <img src=\"{{ 'home/our.png'|media }}\" class=\"our-passion mb-4 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\" alt=\"Our\">
                        <h3 class=\"big-title text-white text-shadow mb-4 mb-xl-5 fadeInUp\" data-scroll data-scroll-repeat >Services</h3>
                        {#<div class=\"mb-xl-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">
                            <p>We tell stories. Whether it’s the story of your new brand, or the user experience for your new website. <br>
                            Marketing is about connecting your audience with the story you want to tell them. Let us make that connection for you.</p>
                        </div>#}
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section id=\"servicesHome\" class=\"projects-section services-section-home bg-white\" data-scroll data-scroll-repeat>
        
        <div class=\"cancel-service d-none d-xl-block\">
            <svg class=\"hamburger-svg hamburger-top-svg\" viewBox=\"0 0 40 6\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
                <polygon points=\"0,0 40,0 40,6 0,6\"></polygon>
            </svg>
            <svg class=\"hamburger-svg hamburger-bottom-svg\" viewBox=\"0 0 40 6\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
                <polygon points=\"0,0 40,0 40,6 0,6\"></polygon>
            </svg>
        </div>
        <div class=\"service-modal-home section-modal-wd fadeInRight pb-0\" data-scroll data-scroll-repeat animation-delay=\".2\">
            <div class=\"service-modal-home-click\">
                <div class=\"web-design-service modal-mobile\">
                    <div class=\"service-title-home project-wrapper d-xl-none pb-4\">
                        <h4 class=\"project-title mb-0 text-black\">Web Design & Development</h4>
                    </div>
                    <img src=\"{{ 'home/web-design.jpg'|media }}\" class=\"w-100\">
                    <div class=\"project-wrapper service-text-home d-none d-xl-block\">
                        <h4 class=\"project-title mb-4 mb-xl-5 text-black\">Web Design</h4>
                        <div class=\"mb-4 mb-xl-5\">
                            <p>The experience your customers have on your website will define your relationship. That’s why user experience is at the heart of every website we build. Mobile-first, future-forward design delivers sleek websites that spark engagement and drive sales.</p>
                        </div>
                        <a href=\"{{ 'services'|page }}\" class=\"btn btn-round bordered silver\">Services</a>
                    </div>
                </div>
                <div class=\"service-title-home project-wrapper d-none d-xl-block\">
                    <h4 class=\"project-title mb-0 text-black\">Web Design</h4>
                </div>
            </div>
        </div>
        <div class=\"service-modal-home section-modal-br fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".4\">
            <div class=\"branding-service modal-mobile\">
                <div class=\"service-title-home project-wrapper d-xl-none\">
                    <h4 class=\"project-title mb-0 text-black\">Branding</h4>
                </div>
                <img src=\"{{ 'home/branding.png'|media }}\" class=\"w-100\">
                <div class=\"project-wrapper service-text-home d-none d-xl-block\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-black\">Branding</h4>
                    <div class=\"mb-4 mb-xl-5\">
                        <p>Your brand is more than just a logo. It’s the beginning of your story. We create brands that capture the essence of your business and the attention of your customers. From logo updates to full brand kits, we’ll get your story started.</p>
                    </div>
                    <a href=\"{{ 'services'|page }}\" class=\"btn btn-round bordered silver\">Services</a>
                </div>
            </div>
            <div class=\"blue-bg shadow-md d-none d-xl-block\">
                <div class=\"service-title-home project-wrapper\">
                    <h4 class=\"project-title mb-0\">Branding</h4>
                </div>
            </div>
        </div>
        <div class=\"service-modal-home section-modal-cc fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".2\">
            <div class=\"content-service modal-mobile\">
                <div class=\"service-title-home project-wrapper d-xl-none pb-3\">
                    <h4 class=\"project-title mb-0 text-black\">Content <br> Creation</h4>
                </div>
                <img src=\"{{ 'home/content-creation.png'|media }}\" class=\"w-100 normal-img\">
                <img src=\"{{ 'home/content-creation-hover.png'|media }}\" class=\"w-100 hover-img d-none d-xl-block\">
                <div class=\"project-wrapper service-text-home d-none d-xl-block\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-white\">Content Creation</h4>
                    <div class=\"mb-4 mb-xl-5\">
                        <p>How do you tell a story without words? Content is the lifeblood of your brand’s narrative. The words that come together to write your story. We create multimedia content that connects with your audience and keeps them listening for when it counts.</p>
                    </div>
                    <a href=\"{{ 'services'|page }}\" class=\"btn btn-round bordered white\">Services</a>
                </div>
                
            </div>
            <div class=\"service-title-home project-wrapper d-none d-xl-block\">
                <h4 class=\"project-title mb-0 text-black\">Content <br> Creation</h4>
            </div>
        </div>
        <div class=\"service-modal-home section-modal-mm shadow-lg fadeInRight pb-0\" data-scroll data-scroll-repeat animation-delay=\".4\">
            <div class=\"marketing-service modal-mobile\">
                <div class=\"service-title-home project-wrapper d-xl-none\">
                    <h4 class=\"project-title mb-0\">Marketing</h4>
                </div>
                <img src=\"{{ 'home/marketing.png'|media }}\" class=\"w-100\">
                <div class=\"project-wrapper service-text-home d-none d-xl-block\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-white\">Marketing</h4>
                    <div class=\"mb-4 mb-xl-5\">
                        <p>We don’t just create adverts for our clients. We create full-service digital campaigns that integrate cohesive strategies with dazzling content. When we tell your story, we don’t just tell it – we shout it from the rooftops!</p>
                    </div>
                    <a href=\"{{ 'services'|page }}\" class=\"btn btn-round bordered white\">Services</a>
                </div>
            </div>
            <div class=\"service-title-home project-wrapper d-none d-xl-block\">
                <h4 class=\"project-title mb-0\">Marketing</h4>
            </div>
        </div>
        
        <div class=\"section-padding-y bg-white d-none d-xl-block\"></div>
        
        <div class=\"section-padding-y bg-white position-relative shadow-lg holder-section\">
            <a href=\"{{ 'services'|page }}\" class=\"btn btn-round bordered silver services-button\">Services</a>
        </div>
        <div class=\"tell-us-section scrollStart position-relative section-padding-x z-index-10 d-none d-xl-block\" data-scroll>
            <div class=\"cut-bg-div section-padding-y pb-5\">
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
        <div class=\"tell-us-section scrollSnap bg-000 section-padding-x color-change-5\" data-scroll data-scroll-repeat>
            <div class=\"cut-bg-div section-padding-y\">
                <div></div>
                <div class=\"container-fluid\">
                    <div class=\"big-title-hide\">
                        <h3 class=\"big-title text-shadow mb-4 mb-lg-5\" style=\"background-image: url('{{ 'hero-slider/title-bg.jpg'|media }}');\">
                           Tell Us <br> a Story
                        </h3>
                        <a href=\"{{ 'contact'|page }}\" class=\"btn btn-round bordered white\">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {% partial 'site/footer' %}
</div>
{#{% put scripts %}

<script> 
var app = document.getElementById('autowrite');

var typewriter = new Typewriter(app, {
    loop: true,
    cursor: '',
});

typewriter.typeString('Creative')
    .pauseFor(1500)
    .deleteAll()
    .typeString('Passionate')
    .pauseFor(1500)
    .deleteAll()
    .typeString('Driven')
    .pauseFor(1500)
    .deleteAll()
    .typeString('Moolay')
    .pauseFor(4000)
    .start();
</script>

{% endput %}#}", "/home/moolaymedia/public_html/themes/demo/pages/home.htm", "");
    }
}
