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

/* /var/www/html/themes/demo/pages/about-us.htm */
class __TwigTemplate_1415881782f26adecec7131b10eff32f722ee119f744a6a0f94469076301d311 extends \Twig\Template
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
    .home-hero.hero-section .big-title {
        background-size: 371%;
        /* background-position: -1953px -494px; */
        background-position: 56.3% 25.2%;
    }
    @media screen and (max-width: 1799px) {
        .home-hero.hero-section .big-title {
            background-size: 447%;
            /* background-position: -1953px -494px; */
            background-position: 53.3% 25.2%;
        }    
    }
    @media screen and (max-width: 1499px){
        .home-hero.hero-section .big-title {
            background-size: 345%;
            background-position: 57.3% 25%;
        }
    }
    @media screen and (max-width: 1199px){
        .home-hero.hero-section .big-title {
            background-image: url('";
        // line 23
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg-test.jpg");
        echo "')!important;
            background-size: 345%;
            background-position: 57.3% 25%;
        }
    }
</style>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 30
        echo "<div data-scroll-section>
    <section id=\"hero\" class=\"home-hero hero-section bg-move section-padding-x d-flex align-items-center bg-white\" data-scroll data-scroll-repeat>
        <div class=\"hero-slider\">
            <div class=\"slide-img\" style=\"background-image: url('";
        // line 33
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/home-hero-bg-2.png");
        echo "');\"></div>
        </div>
        <div class=\"hero-text-container container-fluid text-center text-md-left\">
            <h1 id=\"bgTitle\" class=\"big-title text-shadow mb-4 fadeInUp\" animation-delay=\".2\" data-scroll data-scroll-repeat  style=\"background-image: url('";
        // line 36
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg-test-2.jpg");
        echo "');\">
               <span>Who is</span> <br class=\"d-none d-xl-block\"> 
               <span>Moolay?</span>
            </h1>
        </div>
    </section>
";
        // line 51
        echo "    <section class=\"who-are-we-about position-relative section-lines section-padding-y section-padding-x d-flex align-items-center color-change-1\" style=\"background-image: url('";
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/who-is-bg-new-2.jpg");
        echo "');\" data-scroll data-scroll-repeat>
        <div class=\"container-fluid pt-5\">
            <div class=\"row pt-5\">
                <div class=\"col-md-9 col-xl-7 project-wrapper\">
                    <img src=\"";
        // line 55
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/who-is-asset.png");
        echo "\" class=\"our-passion mb-4 mb-lg-5 fadeInUp\" animation-delay=\".2\" data-scroll data-scroll-repeat alt=\"\">
                    <h4 class=\"section-title mb-4 mb-xl-5 fadeInUp text-white\" animation-delay=\".6\" data-scroll data-scroll-repeat>We are <br> Storytellers</h4>
                    <div class=\"fadeInUp text-white\" animation-delay=\"1\" data-scroll data-scroll-repeat >
                        <p>We engage with our world through stories. They’re how we connect with each other. They’re what drives us to take action. Every brand is telling a story. At Moolay Media, we get to the core of our clients’ brands and communicate them to the world. Through engaging content, curated campaigns, and innovative user experience design, we shape our clients’ narratives to tell stories that get people to listen.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"position-relative section-lines section-padding-y section-padding-x d-flex align-items-center bg-000 color-change-2\" data-scroll data-scroll-repeat>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-7 project-wrapper\">
                    <img src=\"";
        // line 68
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/what-is-asset.png");
        echo "\" class=\"our-passion mb-4 mb-lg-5 fadeInUp\" animation-delay=\".2\" data-scroll data-scroll-repeat alt=\"\">
                    <h4 class=\"section-title mb-4 mb-xl-5 fadeInUp text-white\" animation-delay=\".6\" data-scroll data-scroll-repeat>
                        Holistic <br> Digital <br> Marketing
                    </h4>
                    <div class=\"fadeInUp text-white\" animation-delay=\"1\" data-scroll data-scroll-repeat >
                        <p>We provide our clients with full-service, holistic marketing services. To us, holistic means having an impact at every level. If your brand shines bright and you just need our help spreading the message, great! If you need a ground-up rebrand, then that’s where we’ll start. From experience-focused web design to strategic media buying, we do whatever it takes to get your brand on track so we can shout your story from the rooftops.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"services-section position-relative section-lines section-padding-y pt-0 section-padding-x pr-md-0 d-flex align-items-center bg-000 color-change-3\" data-scroll data-scroll-repeat>
        <div class=\"container-fluid pr-md-0\">
            <div class=\"position-relative\">
                <div class=\"services-slider\" data-scroll>
                    <div class=\"service-slider-wrapper mr-4 fadeInRight\" animation-delay=\".8\" data-scroll>
                        <div class=\"service-image mb-4\">
                            <img src=\"";
        // line 85
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/branding-about.png");
        echo "\" alt=\"\" class=\"img-fluid\">
                        </div>
                        <div class=\"service-info activateAutoplay\" data-scroll>
                            <h5 class=\"h2 service-name text-white text-uppercase mb-0\">Branding</h5>
                        </div>
                    </div>
                    <div class=\"service-slider-wrapper mr-4 fadeInRight\" animation-delay=\"1.1\" data-scroll>
                        <div class=\"service-image mb-4\">
                            <img src=\"";
        // line 93
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/web-design-about.png");
        echo "\" alt=\"\" class=\"img-fluid\">
                        </div>
                        <div class=\"service-info\">
                            <h5 class=\"h2 service-name text-white text-uppercase mb-0\">Web Design</h5>
                        </div>
                    </div>
                    <div class=\"service-slider-wrapper mr-4\" data-scroll>
                        <div class=\"service-image mb-4\">
                            <img src=\"";
        // line 101
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/marketing-about.png");
        echo "\" alt=\"\" class=\"img-fluid\">
                        </div>
                        <div class=\"service-info\">
                            <h5 class=\"h2 service-name text-white text-uppercase mb-0\">Marketing</h5>
                        </div>
                    </div>
                    <div class=\"service-slider-wrapper mr-4 fadeInRight\" animation-delay=\".5\" data-scroll>
                        <div class=\"service-image mb-4\">
                            <img src=\"";
        // line 109
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/content-creation-about.png");
        echo "\" alt=\"\" class=\"img-fluid\">
                        </div>
                        <div class=\"service-info\">
                            <h5 class=\"h2 service-name text-white text-uppercase mb-0\">Content Creation</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"team-section section-padding-x bg-theme-white position-relative\">
        <div class=\"middle-line d-none d-md-block\"></div>
        <div class=\"cut-bg-div section-padding-y-smaller\">
            <div class=\"container-fluid\">
                <div class=\"row mb-100 justify-content-xl-end\">
                    <div class=\"col-xl-9 text-xl-right\">
                        <img src=\"";
        // line 125
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/we-are-asset.png");
        echo "\" class=\"our-passion mb-4 mb-lg-5 fadeInUp\" animation-delay=\".2\" data-scroll data-scroll-repeat alt=\"\">
                        <h3 class=\"big-title text-black mb-4 mb-md-5 fadeInUp\" animation-delay=\".6\" data-scroll data-scroll-repeat>Moolay</h3>
                        <div class=\"fadeInUp\" animation-delay=\"1\" data-scroll data-scroll-repeat >
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container-fluid px-4\">
                <div class=\"position-relative\">
                    <div class=\"team-slider\">
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"";
        // line 137
        echo $this->extensions['System\Twig\Extension']->mediaFilter("team/tristan.jpg");
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Tristan W.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Director of Operations</span>
                                ";
        // line 145
        echo "                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"";
        // line 149
        echo $this->extensions['System\Twig\Extension']->mediaFilter("team/vlad.jpg");
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Vlad S.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Creative Director</span>
                                ";
        // line 157
        echo "                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"";
        // line 161
        echo $this->extensions['System\Twig\Extension']->mediaFilter("team/nina.jpg");
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Nina L.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Director, Strategic accounts</span>
                                ";
        // line 169
        echo "                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"";
        // line 173
        echo $this->extensions['System\Twig\Extension']->mediaFilter("team/blagoj.jpg");
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Blagoj J.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Graphic & Web Designer</span>
                                ";
        // line 181
        echo "                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"";
        // line 185
        echo $this->extensions['System\Twig\Extension']->mediaFilter("team/bojana.jpg");
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Bojana A.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">UI/UX Designer</span>
                                ";
        // line 193
        echo "                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"";
        // line 197
        echo $this->extensions['System\Twig\Extension']->mediaFilter("team/nikola.jpg");
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Nikola G.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Full Stack Developer</span>
                                ";
        // line 205
        echo "                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"";
        // line 209
        echo $this->extensions['System\Twig\Extension']->mediaFilter("team/matea.jpg");
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Matea K.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Media Buyer</span>
                                ";
        // line 217
        echo "                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"";
        // line 221
        echo $this->extensions['System\Twig\Extension']->mediaFilter("team/dijana.jpg");
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Dijana T.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Digital Analyst</span>
                                ";
        // line 229
        echo "                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"";
        // line 233
        echo $this->extensions['System\Twig\Extension']->mediaFilter("team/angela.jpg");
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Angela M.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Content Analyst</span>
                                ";
        // line 241
        echo "                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"";
        // line 245
        echo $this->extensions['System\Twig\Extension']->mediaFilter("team/naourass.jpg");
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Naourass M.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">CEO</span>
                                ";
        // line 253
        echo "                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"";
        // line 257
        echo $this->extensions['System\Twig\Extension']->mediaFilter("team/james.jpg");
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">James G.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">CMO</span>
                                ";
        // line 265
        echo "                            </div>
                        </div>
                    </div>
                    
                    <div class=\"prev-arrow\">
                        <img src=\"";
        // line 270
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/prev.svg");
        echo "\" alt=\"\">
                    </div>
                    <div class=\"next-arrow\">
                        <img src=\"";
        // line 273
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/next.svg");
        echo "\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"projects-section position-relative bg-white\" data-scroll data-scroll-repeat>
        <div class=\"tell-us-section scrollStart position-relative section-padding-x z-index-10 d-none d-xl-block\" data-scroll>
            <div class=\"cut-bg-div section-padding-y pb-5\">
                <div class=\"middle-line d-none d-md-block\"></div>
                <div class=\"container-fluid\">
                    <div class=\"position-relative\">
                        <div id=\"scrollToPlace\">
                            <div data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"bottom\" class=\"d-none d-xxl-block\">
                                <div class=\"p-top\">
                                    <h3 class=\"big-title text-shadow mb-5\" style=\"background-image: url('";
        // line 288
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                       Tell Us <br> a Story
                                    </h3>
                                    <a href=\"";
        // line 291
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                                </div>
                            </div>
                            <div data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"bottom\" class=\"d-block d-xxl-none\">
                                <div class=\"p-top\">
                                    <h3 class=\"big-title text-shadow mb-5\" style=\"background-image: url('";
        // line 296
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                       Tell Us <br> a Story
                                    </h3>
                                    <a href=\"";
        // line 299
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"tell-us-section scrollSnap bg-000 section-padding-x color-change-4\" data-scroll data-scroll-repeat>
            <div class=\"cut-bg-div section-padding-y\">
                <div></div>
                <div class=\"container-fluid\">
                    <div class=\"big-title-hide\">
                        <h3 class=\"big-title text-shadow mb-4 mb-lg-5\" style=\"background-image: url('";
        // line 312
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\">
                           Tell Us <br> a Story
                        </h3>
                        <a href=\"";
        // line 315
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 321
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 322
        echo "</div>
";
        // line 323
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 324
        echo "<script>
   \$('.team-slider').slick({
      dots: false,
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows: true,
      prevArrow: \$('.team-section .prev-arrow'),
      nextArrow: \$('.team-section .next-arrow'),
      autoplay: true,
      autoplaySpeed: 2000,
      centerMode: true,
      centerPadding: 0,
      pauseOnHover: false,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            centerMode: false,
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
            centerMode: false,
            initialSlide: 10,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            centerMode: false,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            centerMode: false,
          }
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: \"unslick\"
        // instead of a settings object
      ]
    }).slick(\"slickPause\");
    
   \$('.services-slider').slick({
      dots: true,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      centerMode: true,
      centerPadding: 0,
      pauseOnHover: false,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            centerMode: false,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
          }
        },
      ]
    }).slick(\"slickPause\");
    
</script>
";
        // line 323
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/demo/pages/about-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 323,  443 => 324,  441 => 323,  438 => 322,  434 => 321,  425 => 315,  419 => 312,  403 => 299,  397 => 296,  389 => 291,  383 => 288,  365 => 273,  359 => 270,  352 => 265,  344 => 257,  338 => 253,  330 => 245,  324 => 241,  316 => 233,  310 => 229,  302 => 221,  296 => 217,  288 => 209,  282 => 205,  274 => 197,  268 => 193,  260 => 185,  254 => 181,  246 => 173,  240 => 169,  232 => 161,  226 => 157,  218 => 149,  212 => 145,  204 => 137,  189 => 125,  170 => 109,  159 => 101,  148 => 93,  137 => 85,  117 => 68,  101 => 55,  93 => 51,  84 => 36,  78 => 33,  73 => 30,  71 => 1,  62 => 23,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put styles %}
<style>
    .home-hero.hero-section .big-title {
        background-size: 371%;
        /* background-position: -1953px -494px; */
        background-position: 56.3% 25.2%;
    }
    @media screen and (max-width: 1799px) {
        .home-hero.hero-section .big-title {
            background-size: 447%;
            /* background-position: -1953px -494px; */
            background-position: 53.3% 25.2%;
        }    
    }
    @media screen and (max-width: 1499px){
        .home-hero.hero-section .big-title {
            background-size: 345%;
            background-position: 57.3% 25%;
        }
    }
    @media screen and (max-width: 1199px){
        .home-hero.hero-section .big-title {
            background-image: url('{{ 'hero-slider/title-bg-test.jpg'|media }}')!important;
            background-size: 345%;
            background-position: 57.3% 25%;
        }
    }
</style>
{% endput %}
<div data-scroll-section>
    <section id=\"hero\" class=\"home-hero hero-section bg-move section-padding-x d-flex align-items-center bg-white\" data-scroll data-scroll-repeat>
        <div class=\"hero-slider\">
            <div class=\"slide-img\" style=\"background-image: url('{{ 'hero-slider/home-hero-bg-2.png'|media }}');\"></div>
        </div>
        <div class=\"hero-text-container container-fluid text-center text-md-left\">
            <h1 id=\"bgTitle\" class=\"big-title text-shadow mb-4 fadeInUp\" animation-delay=\".2\" data-scroll data-scroll-repeat  style=\"background-image: url('{{ 'hero-slider/title-bg-test-2.jpg'|media }}');\">
               <span>Who is</span> <br class=\"d-none d-xl-block\"> 
               <span>Moolay?</span>
            </h1>
        </div>
    </section>
{#    <section id=\"hero\" class=\"hero-section section-padding-x overflow-y-auto d-flex align-items-center bg-white\" data-scroll data-scroll-repeat>
        <div class=\"middle-line d-none d-md-block\"></div>
        <div class=\"hero-slider\">
            <div class=\"slide-img bg-white\"></div>
        </div>
        <div class=\"hero-text-container container-fluid text-center text-md-left\">
            <h1 class=\"section-title mb-4 text-black fadeInUp\" animation-delay=\".4\" data-scroll data-scroll-repeat>Who is <br> Moolay?</h1>
        </div>
    </section>#}
    <section class=\"who-are-we-about position-relative section-lines section-padding-y section-padding-x d-flex align-items-center color-change-1\" style=\"background-image: url('{{ 'about/who-is-bg-new-2.jpg'|media }}');\" data-scroll data-scroll-repeat>
        <div class=\"container-fluid pt-5\">
            <div class=\"row pt-5\">
                <div class=\"col-md-9 col-xl-7 project-wrapper\">
                    <img src=\"{{ 'about/who-is-asset.png'|media }}\" class=\"our-passion mb-4 mb-lg-5 fadeInUp\" animation-delay=\".2\" data-scroll data-scroll-repeat alt=\"\">
                    <h4 class=\"section-title mb-4 mb-xl-5 fadeInUp text-white\" animation-delay=\".6\" data-scroll data-scroll-repeat>We are <br> Storytellers</h4>
                    <div class=\"fadeInUp text-white\" animation-delay=\"1\" data-scroll data-scroll-repeat >
                        <p>We engage with our world through stories. They’re how we connect with each other. They’re what drives us to take action. Every brand is telling a story. At Moolay Media, we get to the core of our clients’ brands and communicate them to the world. Through engaging content, curated campaigns, and innovative user experience design, we shape our clients’ narratives to tell stories that get people to listen.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"position-relative section-lines section-padding-y section-padding-x d-flex align-items-center bg-000 color-change-2\" data-scroll data-scroll-repeat>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-7 project-wrapper\">
                    <img src=\"{{ 'about/what-is-asset.png'|media }}\" class=\"our-passion mb-4 mb-lg-5 fadeInUp\" animation-delay=\".2\" data-scroll data-scroll-repeat alt=\"\">
                    <h4 class=\"section-title mb-4 mb-xl-5 fadeInUp text-white\" animation-delay=\".6\" data-scroll data-scroll-repeat>
                        Holistic <br> Digital <br> Marketing
                    </h4>
                    <div class=\"fadeInUp text-white\" animation-delay=\"1\" data-scroll data-scroll-repeat >
                        <p>We provide our clients with full-service, holistic marketing services. To us, holistic means having an impact at every level. If your brand shines bright and you just need our help spreading the message, great! If you need a ground-up rebrand, then that’s where we’ll start. From experience-focused web design to strategic media buying, we do whatever it takes to get your brand on track so we can shout your story from the rooftops.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"services-section position-relative section-lines section-padding-y pt-0 section-padding-x pr-md-0 d-flex align-items-center bg-000 color-change-3\" data-scroll data-scroll-repeat>
        <div class=\"container-fluid pr-md-0\">
            <div class=\"position-relative\">
                <div class=\"services-slider\" data-scroll>
                    <div class=\"service-slider-wrapper mr-4 fadeInRight\" animation-delay=\".8\" data-scroll>
                        <div class=\"service-image mb-4\">
                            <img src=\"{{ 'about/branding-about.png'|media }}\" alt=\"\" class=\"img-fluid\">
                        </div>
                        <div class=\"service-info activateAutoplay\" data-scroll>
                            <h5 class=\"h2 service-name text-white text-uppercase mb-0\">Branding</h5>
                        </div>
                    </div>
                    <div class=\"service-slider-wrapper mr-4 fadeInRight\" animation-delay=\"1.1\" data-scroll>
                        <div class=\"service-image mb-4\">
                            <img src=\"{{ 'about/web-design-about.png'|media }}\" alt=\"\" class=\"img-fluid\">
                        </div>
                        <div class=\"service-info\">
                            <h5 class=\"h2 service-name text-white text-uppercase mb-0\">Web Design</h5>
                        </div>
                    </div>
                    <div class=\"service-slider-wrapper mr-4\" data-scroll>
                        <div class=\"service-image mb-4\">
                            <img src=\"{{ 'about/marketing-about.png'|media }}\" alt=\"\" class=\"img-fluid\">
                        </div>
                        <div class=\"service-info\">
                            <h5 class=\"h2 service-name text-white text-uppercase mb-0\">Marketing</h5>
                        </div>
                    </div>
                    <div class=\"service-slider-wrapper mr-4 fadeInRight\" animation-delay=\".5\" data-scroll>
                        <div class=\"service-image mb-4\">
                            <img src=\"{{ 'about/content-creation-about.png'|media }}\" alt=\"\" class=\"img-fluid\">
                        </div>
                        <div class=\"service-info\">
                            <h5 class=\"h2 service-name text-white text-uppercase mb-0\">Content Creation</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"team-section section-padding-x bg-theme-white position-relative\">
        <div class=\"middle-line d-none d-md-block\"></div>
        <div class=\"cut-bg-div section-padding-y-smaller\">
            <div class=\"container-fluid\">
                <div class=\"row mb-100 justify-content-xl-end\">
                    <div class=\"col-xl-9 text-xl-right\">
                        <img src=\"{{ 'about/we-are-asset.png'|media }}\" class=\"our-passion mb-4 mb-lg-5 fadeInUp\" animation-delay=\".2\" data-scroll data-scroll-repeat alt=\"\">
                        <h3 class=\"big-title text-black mb-4 mb-md-5 fadeInUp\" animation-delay=\".6\" data-scroll data-scroll-repeat>Moolay</h3>
                        <div class=\"fadeInUp\" animation-delay=\"1\" data-scroll data-scroll-repeat >
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container-fluid px-4\">
                <div class=\"position-relative\">
                    <div class=\"team-slider\">
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"{{ 'team/tristan.jpg'|media }}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Tristan W.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Director of Operations</span>
                                {#<p class=\"member-excerpt activateAutoplayTeam\" data-scroll>
                                    There are many variations of passages Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believa.
                                </p>#}
                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"{{ 'team/vlad.jpg'|media }}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Vlad S.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Creative Director</span>
                                {#<p class=\"member-excerpt\">
                                    There are many variations of passages Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believa.
                                </p>#}
                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"{{ 'team/nina.jpg'|media }}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Nina L.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Director, Strategic accounts</span>
                                {#<p class=\"member-excerpt\">
                                    There are many variations of passages Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believa.
                                </p>#}
                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"{{ 'team/blagoj.jpg'|media }}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Blagoj J.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Graphic & Web Designer</span>
                                {#<p class=\"member-excerpt\">
                                    There are many variations of passages Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believa.
                                </p>#}
                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"{{ 'team/bojana.jpg'|media }}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Bojana A.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">UI/UX Designer</span>
                                {#<p class=\"member-excerpt\">
                                    There are many variations of passages Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believa.
                                </p>#}
                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"{{ 'team/nikola.jpg'|media }}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Nikola G.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Full Stack Developer</span>
                                {#<p class=\"member-excerpt\">
                                    There are many variations of passages Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believa.
                                </p>#}
                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"{{ 'team/matea.jpg'|media }}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Matea K.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Media Buyer</span>
                                {#<p class=\"member-excerpt\">
                                    There are many variations of passages Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believa.
                                </p>#}
                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"{{ 'team/dijana.jpg'|media }}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Dijana T.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Digital Analyst</span>
                                {#<p class=\"member-excerpt\">
                                    There are many variations of passages Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believa.
                                </p>#}
                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"{{ 'team/angela.jpg'|media }}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Angela M.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">Content Analyst</span>
                                {#<p class=\"member-excerpt\">
                                    There are many variations of passages Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believa.
                                </p>#}
                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"{{ 'team/naourass.jpg'|media }}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">Naourass M.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">CEO</span>
                                {#<p class=\"member-excerpt\">
                                    There are many variations of passages Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believa.
                                </p>#}
                            </div>
                        </div>
                        <div class=\"member-wrapper\">
                            <div class=\"member-image mb-4\">
                                <img src=\"{{ 'team/james.jpg'|media }}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"member-info\">
                                <h5 class=\"h2 member-name text-theme-black text-uppercase mb-2 mb-lg-3\">James G.</h5>
                                <span class=\"h6 member-title mb-3 d-block text-uppercase\">CMO</span>
                                {#<p class=\"member-excerpt\">
                                    There are many variations of passages Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believa.
                                </p>#}
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"prev-arrow\">
                        <img src=\"{{ 'assets/img/prev.svg'|theme }}\" alt=\"\">
                    </div>
                    <div class=\"next-arrow\">
                        <img src=\"{{ 'assets/img/next.svg'|theme }}\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"projects-section position-relative bg-white\" data-scroll data-scroll-repeat>
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
        <div class=\"tell-us-section scrollSnap bg-000 section-padding-x color-change-4\" data-scroll data-scroll-repeat>
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
{% put scripts %}
<script>
   \$('.team-slider').slick({
      dots: false,
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows: true,
      prevArrow: \$('.team-section .prev-arrow'),
      nextArrow: \$('.team-section .next-arrow'),
      autoplay: true,
      autoplaySpeed: 2000,
      centerMode: true,
      centerPadding: 0,
      pauseOnHover: false,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            centerMode: false,
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
            centerMode: false,
            initialSlide: 10,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            centerMode: false,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            centerMode: false,
          }
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: \"unslick\"
        // instead of a settings object
      ]
    }).slick(\"slickPause\");
    
   \$('.services-slider').slick({
      dots: true,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      centerMode: true,
      centerPadding: 0,
      pauseOnHover: false,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            centerMode: false,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
          }
        },
      ]
    }).slick(\"slickPause\");
    
</script>
{% endput %}", "/var/www/html/themes/demo/pages/about-us.htm", "");
    }
}
