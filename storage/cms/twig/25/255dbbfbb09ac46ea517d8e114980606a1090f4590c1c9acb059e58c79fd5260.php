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

/* /home/moolaymedia/public_html/themes/demo/pages/work.htm */
class __TwigTemplate_0bfa00c80b6365c737913d6313a3b8fed9d6e7cf11caf38a8b9f9322c1eac6ca extends \Twig\Template
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
    .silver.coming-soon:hover {
        background-color: #fff!important;
        color: #000!important;
    }
    .modal-images {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 100;
      /* Sit on top */
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.9);
      /* Black w/ opacity */
      transition: .3s ease-in-out;
    }
    .modal-content-wrapper {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
      padding: 50px;
      background-color: #fff;
    }
    .modal-content {
      width: 100%;
      background-color: transparent!important;
      border: none!important
    }
    .modal-content {
      animation-name: zoomimgmodal;
      animation-duration: 0.6s;
    }
    
    @keyframes zoomimgmodal {
      from {
        transform: scale(0)
      }
      to {
        transform: scale(1)
      }
    }
    .closeImgModal {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
    }
    .closeImgModal:hover,
    .closeImgModal:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
    }
    
    @media only screen and (max-width: 700px) {
      .modal-content {
        width: 100%;
      }
    }
</style>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 78
        echo "<div data-scroll-section>
    <section id=\"hero\" class=\"home-hero hero-section bg-move section-padding-x d-flex align-items-center bg-white color-change-1\" data-scroll data-scroll-repeat>
        <div class=\"middle-line d-none d-md-block\"></div>
        <div class=\"hero-slider\">
            <div class=\"slide-img\" style=\"background-image: url('";
        // line 82
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/work-hero.png");
        echo "');\"></div>
        </div>
        <div class=\"hero-text-container container-fluid text-center text-md-left\">
            <h1 id=\"bgTitle\" class=\"big-title text-shadow mb-4 fadeInUp\" animation-delay=\".2\" data-scroll data-scroll-repeat  style=\"background-image: url('";
        // line 85
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg-test.jpg");
        echo "');\">
               <span>The</span> <br class=\"d-none d-xl-block\"> 
               <span>Work</span>
            </h1>
            <img src=\"";
        // line 89
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/work-hero-quote.png");
        echo "\" class=\"hero-quote mb-4 mb-lg-5 fadeInUp\" animation-delay=\".6\" data-scroll data-scroll-repeat alt=\"\">
            <div class=\"text-white fadeInUp\" animation-delay=\"1\" data-scroll data-scroll-repeat>
                <p>We believe that good marketing and design are difficult to define, but easy to recognize. <br> 
                With that in mind, we’ll let our work tell its own story.</p>
            </div>
        </div>
    </section>
    <section class=\"oderose-home parallax-section projects-section position-relative parallax-full d-flex align-items-center\" data-scroll data-scroll-repeat>
        <div id=\"parallax-img-2\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" ";
        // line 100
        echo ">
                       <img src=\"";
        // line 101
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/o-de-bg-2.jpg");
        echo "\" alt=\"\" class=\"main-img\">
                       <img src=\"";
        // line 102
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/o-de-bg.jpg");
        echo "\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <h4 class=\"project-title mb-4 mb-xl-5 fadeInLeft text-white\" data-scroll data-scroll-repeat>Ô DE ROSE <span class=\"font-weight-500\">MED SPA</span></h4>
                    <div class=\"mb-4 mb-xl-5 fadeInLeft text-black\" data-scroll data-scroll-repeat animation-delay=\".3\">
                        <p>A high-end med spa in Orange County, CA that was looking to expand their business and grow sales. We provided a logo and brand redesign along with a sleek new website and landing pages to support a content-focused marketing campaign</p>
                    </div>
                    <a href=\"";
        // line 114
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("o-de-rose");
        echo "\" class=\"btn btn-round bordered black-border fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".6\">View Project</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"ssk-work parallax-section projects-section position-relative parallax-full d-flex align-items-center\" data-scroll data-scroll-repeat >
        <div id=\"parallax-img-1\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" ";
        // line 126
        echo ">
                       <img src=\"";
        // line 127
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/ssk-bg-2.jpg");
        echo "\" alt=\"\" class=\"main-img\">
                       <img src=\"";
        // line 128
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/ssk-bg.jpg");
        echo "\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                     <h4 class=\"project-title mb-4 mb-xl-5 fadeInLeft text-black\" data-scroll data-scroll-repeat>SSK Plastic Surgery</h4>
                    <div class=\"mb-4 mb-xl-5 fadeInLeft text-black\" data-scroll data-scroll-repeat animation-delay=\".3\">
                        <p>An exclusive plastic surgeon in Southern California that was looking to enhance social reach and grow their leads. We provided custom-designed landing pages paired with social media management and content.</p>
                    </div>
                    <a href=\"#\" class=\"btn btn-round bordered silver coming-soon fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".6\">Coming soon</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"root-work parallax-section projects-section position-relative parallax-full d-flex align-items-center color-change-2\" data-scroll data-scroll-repeat>
        <div id=\"parallax-img-3\" class=\"parallax-img\" data-scroll data-scroll-repeat>
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" ";
        // line 152
        echo ">
                       <img src=\"";
        // line 153
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/rw-bg-2.jpg");
        echo "\" alt=\"\" class=\"main-img\">
                       <img src=\"";
        // line 154
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
        // line 166
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("root-wellness");
        echo "\" class=\"btn btn-round bordered white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">View Project</a>
                </div>
            </div>
        </div>
        <div id=\"rw-mockup\" class=\"rw-bottle\">
            <img src=\"";
        // line 171
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/rw-mockup.png");
        echo "\" alt=\"\" class=\"w-100 show-on-small hide-on-big\" data-scroll data-scroll-speed=\"6\" data-scroll-direction=\"horizontal\" data-scroll-target=\"#rw-mockup\" data-scroll-position=\"bottom\" data-scroll-offset=\"0, 50%\">
            <img src=\"";
        // line 172
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/rw-mockup.png");
        echo "\" alt=\"\" class=\"w-100 hide-on-small show-on-big\" data-scroll data-scroll-speed=\"9\" data-scroll-direction=\"horizontal\" data-scroll-target=\"#rw-mockup\" data-scroll-position=\"bottom\" data-scroll-offset=\"0, 50%\">
        </div>
        <div class=\"label-dos root p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"ww-work parallax-section projects-section position-relative parallax-full d-flex align-items-center\" data-scroll data-scroll-repeat >
        <div id=\"parallax-img-1\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" ";
        // line 182
        echo ">
                       <img src=\"";
        // line 183
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/ww-bg-2.jpg");
        echo "\" alt=\"\" class=\"main-img\">
                       <img src=\"";
        // line 184
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/ww-bg.jpg");
        echo "\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-black fadeInUp\" data-scroll data-scroll-repeat>Westleywilliams Group</span></h4>
                    <div class=\"mb-4 mb-xl-5 text-black fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                        <p>One of the top high-end realtors in the Orange County, CA area who was establishing his personal brand. We created a new sales-driven listings website designed specifically for real estate sales and management, along with a seller’s guide landing page to drive traffic.</p>
                    </div>
                    <a href=\"#\" class=\"btn btn-round bordered silver coming-soon fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">Coming soon</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"ilusso-work parallax-section projects-section position-relative parallax-full d-flex align-items-center color-change-3\" data-scroll data-scroll-repeat >
        <div id=\"parallax-img-1\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" ";
        // line 208
        echo ">
                       <img src=\"";
        // line 209
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/ilusso-bg-2.jpg");
        echo "\" alt=\"\" class=\"main-img\">
                       <img src=\"";
        // line 210
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/ilusso-bg.jpg");
        echo "\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-white fadeInUp\" data-scroll data-scroll-repeat>Ilusso</span></h4>
                    <div class=\"mb-4 mb-xl-5 text-white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                        <p>An ultra-luxury exotic car dealership looking to grow their seller leads in any way possible. We created a custom landing page designed to attract sellers and paired it with a highly-targeted ad campaign across multiple platforms.</p>
                    </div>
                    <a href=\"#\" class=\"btn btn-round bordered silver coming-soon fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">Coming Soon</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"konnect-work parallax-section projects-section position-relative parallax-full d-flex align-items-center\" data-scroll data-scroll-repeat >
        <div id=\"parallax-img-1\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" ";
        // line 234
        echo ">
                       <img src=\"";
        // line 235
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/konnect-bg-2.jpg");
        echo "\" alt=\"\" class=\"main-img\">
                       <img src=\"";
        // line 236
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/konnect-bg.jpg");
        echo "\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-black fadeInUp\" data-scroll data-scroll-repeat>Konnect App</span></h4>
                    <div class=\"mb-4 mb-xl-5 text-black fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                        <p>A brand new e-commerce website and a complex narrative-driven marketing campaign including landing pages, video ads, blogs, and more.</p>
                    </div>
                    <a href=\"";
        // line 248
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("konnect-app");
        echo "\" class=\"btn btn-round bordered silver fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">View Project</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"fitbites-work section-padding-x projects-section position-relative section-padding-y section-lines d-flex align-items-center bg-000 parallax-full color-change-4 overflow-hidden\" data-scroll data-scroll-repeat>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <img src=\"";
        // line 260
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/fitbites-logo.png");
        echo "\" class=\"home-projects-logo mb-4 mb-xl-5 fadeInUp\" data-scroll data-scroll-repeat  alt=\"Fitbites Logo\">
                    <div class=\"mb-4 mb-xl-5 text-white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                        <p>A healthy, locally-sourced casual restaurant and catering service based in Orange County, CA. aiming to grow their brand awareness and customer base. Our team worked with them to execute a complete rebrand, including two new websites, print materials, and digital content to support a comprehensive marketing strategy.</p>
                    </div>
                    <a href=\"";
        // line 264
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitbites");
        echo "\" class=\"btn btn-round bordered white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">View Project</a>
                </div>
            </div>
        </div>
        <div id=\"fitbites-meal-1\" class=\"fb-meal-1\" data-scroll>
            <img src=\"";
        // line 269
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/meal-small.png");
        echo "\" alt=\"\" class=\"w-100\" data-scroll data-scroll-speed=\"-3.5\" data-scroll-direction=\"horizontal\" data-scroll-target=\"#fitbites-meal-1\" data-scroll-position=\"bottom\" data-scroll-offset=\"0, -90%\">
        </div>
        <div id=\"fitbites-meal-2\" class=\"fb-meal-2\" data-scroll>
            <img src=\"";
        // line 272
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/meal-big.png");
        echo "\" alt=\"\" class=\"w-100\" data-scroll data-scroll-speed=\"4\" data-scroll-direction=\"vertical\"  data-scroll-position=\"bottom\" data-scroll-target=\"#fitbites-meal-2\" data-scroll-offset=\"-100%, 0\">
        </div>
       <div id=\"fitbites-lp\" class=\"fb-lp\" data-scroll>
            <img src=\"";
        // line 275
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/green-sauce.png");
        echo "\" alt=\"\" class=\"w-100\" data-scroll data-scroll-speed=\"-3\" data-scroll-direction=\"vertical\"  data-scroll-position=\"bottom\" data-scroll-target=\"#fitbites-lp\" data-scroll-offset=\"-100%, 0\">
        </div>
        <div class=\"label-dos fitb p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"gl-lodge-work parallax-section position-relative parallax-full d-flex align-items-center color-change-5\" data-scroll data-scroll-repeat >
        <div id=\"parallax-img-1\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" ";
        // line 285
        echo ">
                       <img src=\"";
        // line 286
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/gl-bg-2.jpg");
        echo "\" alt=\"\" class=\"main-img\">
                       <img src=\"";
        // line 287
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
        // line 295
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/gl-logo.png");
        echo "\" class=\"home-projects-logo mb-4 mb-xl-5 fadeInLeft\" data-scroll data-scroll-repeat alt=\"Gratitude Lodge Logo\">
                    <div class=\"mb-4 mb-xl-5 text-white fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".3\">
                        <p>One of the top boutique addiction recovery centers in the Newport Beach and Long beach areas. We gave them a fresh brand redesign to go with an expansive new SEO-driven website and multi-platform marketing campaign, aimed specifically at increasing out-of-state leads</p>
                    </div>
                    <a href=\"";
        // line 299
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gratitude-lodge");
        echo "\" class=\"btn btn-round bordered white fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".6\">View Project</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"mm-work parallax-section projects-section position-relative parallax-full d-flex align-items-center color-change-6\" data-scroll data-scroll-repeat >
        <div id=\"parallax-img-1\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" ";
        // line 311
        echo ">
                       <img src=\"";
        // line 312
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/mm-bg-2.jpg");
        echo "\" alt=\"\" class=\"main-img\">
                       <img src=\"";
        // line 313
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/mm-bg.jpg");
        echo "\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-white fadeInUp\" data-scroll data-scroll-repeat>Maison Maj</span></h4>
                    <div class=\"mb-4 mb-xl-5 text-white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                        <p>A new luxury concierge service based in Beverly Hills looking to establish themselves. Our creative team worked closely with the owners to deliver a new luxury brand identity, along with a custom-designed website.</p>
                    </div>
                    <a href=\"#\" class=\"btn btn-round bordered silver coming-soon fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">Coming Soon</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"bac-work parallax-section projects-section position-relative parallax-full d-flex align-items-center\" data-scroll data-scroll-repeat >
        <div id=\"parallax-img-1\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" ";
        // line 337
        echo ">
                       <img src=\"";
        // line 338
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/bac-bg-2.jpg");
        echo "\" alt=\"\" class=\"main-img\">
                       <img src=\"";
        // line 339
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/bac-bg.jpg");
        echo "\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5\">
                    <img src=\"";
        // line 347
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/bac-logo.png");
        echo "\" class=\"home-projects-logo mb-4 mb-xl-5 fadeInLeft\" data-scroll data-scroll-repeat alt=\"\">
                    <div class=\"mb-4 mb-xl-5 text-black fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".3\">
                        <p>A brand new CBD marketplace that is just starting their story. We developed a logo and brand kit for them and put it to use on a new Shopify e-commerce website and multi-platform marketing campaign, as well as a social content package.</p>
                    </div>
                    <a href=\"#\" class=\"btn btn-round bordered silver coming-soon fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".6\">Coming Soon</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"projects-section position-relative section-padding-x bg-white\" data-scroll data-scroll-repeat>
        <div class=\"cut-bg-div section-padding-y-smaller\">
            <div class=\"middle-line d-none d-md-block\"></div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12 text-xl-right\">
                        <img src=\"";
        // line 365
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/logo-handwrite.png");
        echo "\" class=\"our-passion mb-4 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\" alt=\"Logo\">
                        <h3 class=\"big-title text-black mb-4 mb-xl-5 fadeInUp\" data-scroll data-scroll-repeat >Design</h3>
                        <div class=\"mb-xl-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">
                            <p>We tell stories. Whether it’s the story of your new brand, or the user experience for your new website. <br>
                            Marketing is about connecting your audience with the story you want to tell them. Let us make that connection for you.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"py-5\"></div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-lg-4 mb-4\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                            <img src=\"";
        // line 379
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/fb-design-logo.png");
        echo "\" class=\"modalImg\" alt=\"Fitbites\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4 mb-4\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">
                            <img src=\"";
        // line 384
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/ss-design-logo.png");
        echo "\" class=\"modalImg\" alt=\"Sunset Shores\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4 mb-4\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".6\">
                            <img src=\"";
        // line 389
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/bac-design-logo.png");
        echo "\" class=\"modalImg\" alt=\"BuyAnyCBD\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4 mb-4\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                            <img src=\"";
        // line 394
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/gl-design-logo.png");
        echo "\" class=\"modalImg\" alt=\"Gratitude Lodge\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4 mb-4\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">
                            <img src=\"";
        // line 399
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/goxi-design-logo.png");
        echo "\" class=\"modalImg\" alt=\"GOXI\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4 mb-4\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".6\">
                            <img src=\"";
        // line 404
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/oderose-design-logo.png");
        echo "\" class=\"modalImg\" alt=\"O de Rose\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4 mb-4 mb-lg-0\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                            <img src=\"";
        // line 409
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/ml-design-logo.png");
        echo "\" class=\"modalImg\" alt=\"ML\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4 mb-4 mb-lg-0\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">
                            <img src=\"";
        // line 414
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/ft-design-logo.png");
        echo "\" class=\"modalImg\" alt=\"Face Trace\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".6\">
                            <img src=\"";
        // line 419
        echo $this->extensions['System\Twig\Extension']->mediaFilter("the-work/mm-design-logo.png");
        echo "\" class=\"modalImg\" alt=\"Moolay Media\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"section-padding-y-smaller pb-5 d-none d-xl-block\"></div>
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
        // line 436
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                       Tell Us <br> a Story
                                    </h3>
                                    <a href=\"";
        // line 439
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                                </div>
                            </div>
                            <div data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"bottom\" class=\"d-block d-xxl-none\">
                                <div class=\"p-top\">
                                    <h3 class=\"big-title text-shadow mb-5\" style=\"background-image: url('";
        // line 444
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                       Tell Us <br> a Story
                                    </h3>
                                    <a href=\"";
        // line 447
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
        // line 458
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\">
                       Tell Us <br> a Story
                    </h3>
                    <a href=\"";
        // line 461
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 466
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 467
        echo "</div>
<div id=\"imgModal\" class=\"modal-images\">
  <span class=\"closeImgModal\">&times;</span>
  <div class=\"modal-content-wrapper\">
      <img class=\"modal-content\" id=\"img01\">
  </div>
</div>
";
        // line 474
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 475
        echo "<script>
/*    if (\$(window).width() > 1200) {
        const el = document.querySelector(\"#hero\");
        const bg = document.querySelector(\"#bgTitle\");
        el.addEventListener(\"mousemove\", (e) => {
          bg.style.backgroundPositionX = -e.screenX / 1 + \"px\";
          bg.style.backgroundPositionY = -e.screenY / 1 + \"px\";
        });    
    }*/
    
    var modal = document.getElementById('imgModal');
    // to all images -- note I'm using a class!
    var imgWrapper = document.getElementsByClassName('logo-design-wrapper');
    var images = document.getElementsByClassName('modalImg');
    // the image in the modal
    var modalImg = document.getElementById(\"img01\");
    
    // Go through all of the images with our custom class
    \$('.modalImg').each( function( index, element ){
        \$(this).parent().click(function(){
            modal.style.display = \"flex\";
            modalImg.src = \$(this).children().first().attr(\"src\");
        });
    });
 
/*    for (var i = 0; i < imgWrapper.length; i++) {
      var wrap = imgWrapper[i];
      var imgChild = imgWrapper[i].children;
      // and attach our click listener for this image.
      wrap.onclick = function(evt) {
        modal.style.display = \"block\";
        modalImg.src = imgChild.src;
      }
    }*/
    
    var span = document.getElementsByClassName(\"closeImgModal\")[0];
    
    span.onclick = function() {
      modal.style.display = \"none\";
    }
    \$(\"#imgModal\").click(function(event) {
      //if you click on anything except the modal itself or the \"open modal\" link, close the modal
      if (!\$(event.target).closest(\".modal-content-wrapper\").length) {
        modal.style.display = \"none\";
      }
    });
</script>
";
        // line 474
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/moolaymedia/public_html/themes/demo/pages/work.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  740 => 474,  691 => 475,  689 => 474,  680 => 467,  676 => 466,  668 => 461,  662 => 458,  648 => 447,  642 => 444,  634 => 439,  628 => 436,  608 => 419,  600 => 414,  592 => 409,  584 => 404,  576 => 399,  568 => 394,  560 => 389,  552 => 384,  544 => 379,  527 => 365,  506 => 347,  495 => 339,  491 => 338,  488 => 337,  461 => 313,  457 => 312,  454 => 311,  439 => 299,  432 => 295,  421 => 287,  417 => 286,  414 => 285,  401 => 275,  395 => 272,  389 => 269,  381 => 264,  374 => 260,  359 => 248,  344 => 236,  340 => 235,  337 => 234,  310 => 210,  306 => 209,  303 => 208,  276 => 184,  272 => 183,  269 => 182,  256 => 172,  252 => 171,  244 => 166,  229 => 154,  225 => 153,  222 => 152,  195 => 128,  191 => 127,  188 => 126,  173 => 114,  158 => 102,  154 => 101,  151 => 100,  137 => 89,  130 => 85,  124 => 82,  118 => 78,  116 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put styles %}
<style>
    .silver.coming-soon:hover {
        background-color: #fff!important;
        color: #000!important;
    }
    .modal-images {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 100;
      /* Sit on top */
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.9);
      /* Black w/ opacity */
      transition: .3s ease-in-out;
    }
    .modal-content-wrapper {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
      padding: 50px;
      background-color: #fff;
    }
    .modal-content {
      width: 100%;
      background-color: transparent!important;
      border: none!important
    }
    .modal-content {
      animation-name: zoomimgmodal;
      animation-duration: 0.6s;
    }
    
    @keyframes zoomimgmodal {
      from {
        transform: scale(0)
      }
      to {
        transform: scale(1)
      }
    }
    .closeImgModal {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
    }
    .closeImgModal:hover,
    .closeImgModal:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
    }
    
    @media only screen and (max-width: 700px) {
      .modal-content {
        width: 100%;
      }
    }
</style>
{% endput %}
<div data-scroll-section>
    <section id=\"hero\" class=\"home-hero hero-section bg-move section-padding-x d-flex align-items-center bg-white color-change-1\" data-scroll data-scroll-repeat>
        <div class=\"middle-line d-none d-md-block\"></div>
        <div class=\"hero-slider\">
            <div class=\"slide-img\" style=\"background-image: url('{{ 'the-work/work-hero.png'|media }}');\"></div>
        </div>
        <div class=\"hero-text-container container-fluid text-center text-md-left\">
            <h1 id=\"bgTitle\" class=\"big-title text-shadow mb-4 fadeInUp\" animation-delay=\".2\" data-scroll data-scroll-repeat  style=\"background-image: url('{{ 'hero-slider/title-bg-test.jpg'|media }}');\">
               <span>The</span> <br class=\"d-none d-xl-block\"> 
               <span>Work</span>
            </h1>
            <img src=\"{{ 'the-work/work-hero-quote.png'|media }}\" class=\"hero-quote mb-4 mb-lg-5 fadeInUp\" animation-delay=\".6\" data-scroll data-scroll-repeat alt=\"\">
            <div class=\"text-white fadeInUp\" animation-delay=\"1\" data-scroll data-scroll-repeat>
                <p>We believe that good marketing and design are difficult to define, but easy to recognize. <br> 
                With that in mind, we’ll let our work tell its own story.</p>
            </div>
        </div>
    </section>
    <section class=\"oderose-home parallax-section projects-section position-relative parallax-full d-flex align-items-center\" data-scroll data-scroll-repeat>
        <div id=\"parallax-img-2\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" {#style=\"background-image: url('{{ 'home/gl-bg.jpg'|media }}');\"#}>
                       <img src=\"{{ 'the-work/o-de-bg-2.jpg'|media }}\" alt=\"\" class=\"main-img\">
                       <img src=\"{{ 'the-work/o-de-bg.jpg'|media }}\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <h4 class=\"project-title mb-4 mb-xl-5 fadeInLeft text-white\" data-scroll data-scroll-repeat>Ô DE ROSE <span class=\"font-weight-500\">MED SPA</span></h4>
                    <div class=\"mb-4 mb-xl-5 fadeInLeft text-black\" data-scroll data-scroll-repeat animation-delay=\".3\">
                        <p>A high-end med spa in Orange County, CA that was looking to expand their business and grow sales. We provided a logo and brand redesign along with a sleek new website and landing pages to support a content-focused marketing campaign</p>
                    </div>
                    <a href=\"{{ 'o-de-rose'|page }}\" class=\"btn btn-round bordered black-border fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".6\">View Project</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"ssk-work parallax-section projects-section position-relative parallax-full d-flex align-items-center\" data-scroll data-scroll-repeat >
        <div id=\"parallax-img-1\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" {#style=\"background-image: url('{{ 'home/gl-bg.jpg'|media }}');\"#}>
                       <img src=\"{{ 'the-work/ssk-bg-2.jpg'|media }}\" alt=\"\" class=\"main-img\">
                       <img src=\"{{ 'the-work/ssk-bg.jpg'|media }}\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                     <h4 class=\"project-title mb-4 mb-xl-5 fadeInLeft text-black\" data-scroll data-scroll-repeat>SSK Plastic Surgery</h4>
                    <div class=\"mb-4 mb-xl-5 fadeInLeft text-black\" data-scroll data-scroll-repeat animation-delay=\".3\">
                        <p>An exclusive plastic surgeon in Southern California that was looking to enhance social reach and grow their leads. We provided custom-designed landing pages paired with social media management and content.</p>
                    </div>
                    <a href=\"#\" class=\"btn btn-round bordered silver coming-soon fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".6\">Coming soon</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"root-work parallax-section projects-section position-relative parallax-full d-flex align-items-center color-change-2\" data-scroll data-scroll-repeat>
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
            <img src=\"{{ 'home/rw-mockup.png'|media }}\" alt=\"\" class=\"w-100 show-on-small hide-on-big\" data-scroll data-scroll-speed=\"6\" data-scroll-direction=\"horizontal\" data-scroll-target=\"#rw-mockup\" data-scroll-position=\"bottom\" data-scroll-offset=\"0, 50%\">
            <img src=\"{{ 'home/rw-mockup.png'|media }}\" alt=\"\" class=\"w-100 hide-on-small show-on-big\" data-scroll data-scroll-speed=\"9\" data-scroll-direction=\"horizontal\" data-scroll-target=\"#rw-mockup\" data-scroll-position=\"bottom\" data-scroll-offset=\"0, 50%\">
        </div>
        <div class=\"label-dos root p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"ww-work parallax-section projects-section position-relative parallax-full d-flex align-items-center\" data-scroll data-scroll-repeat >
        <div id=\"parallax-img-1\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" {#style=\"background-image: url('{{ 'home/gl-bg.jpg'|media }}');\"#}>
                       <img src=\"{{ 'the-work/ww-bg-2.jpg'|media }}\" alt=\"\" class=\"main-img\">
                       <img src=\"{{ 'the-work/ww-bg.jpg'|media }}\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-black fadeInUp\" data-scroll data-scroll-repeat>Westleywilliams Group</span></h4>
                    <div class=\"mb-4 mb-xl-5 text-black fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                        <p>One of the top high-end realtors in the Orange County, CA area who was establishing his personal brand. We created a new sales-driven listings website designed specifically for real estate sales and management, along with a seller’s guide landing page to drive traffic.</p>
                    </div>
                    <a href=\"#\" class=\"btn btn-round bordered silver coming-soon fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">Coming soon</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"ilusso-work parallax-section projects-section position-relative parallax-full d-flex align-items-center color-change-3\" data-scroll data-scroll-repeat >
        <div id=\"parallax-img-1\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" {#style=\"background-image: url('{{ 'home/gl-bg.jpg'|media }}');\"#}>
                       <img src=\"{{ 'the-work/ilusso-bg-2.jpg'|media }}\" alt=\"\" class=\"main-img\">
                       <img src=\"{{ 'the-work/ilusso-bg.jpg'|media }}\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-white fadeInUp\" data-scroll data-scroll-repeat>Ilusso</span></h4>
                    <div class=\"mb-4 mb-xl-5 text-white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                        <p>An ultra-luxury exotic car dealership looking to grow their seller leads in any way possible. We created a custom landing page designed to attract sellers and paired it with a highly-targeted ad campaign across multiple platforms.</p>
                    </div>
                    <a href=\"#\" class=\"btn btn-round bordered silver coming-soon fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">Coming Soon</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"konnect-work parallax-section projects-section position-relative parallax-full d-flex align-items-center\" data-scroll data-scroll-repeat >
        <div id=\"parallax-img-1\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" {#style=\"background-image: url('{{ 'home/gl-bg.jpg'|media }}');\"#}>
                       <img src=\"{{ 'the-work/konnect-bg-2.jpg'|media }}\" alt=\"\" class=\"main-img\">
                       <img src=\"{{ 'the-work/konnect-bg.jpg'|media }}\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-black fadeInUp\" data-scroll data-scroll-repeat>Konnect App</span></h4>
                    <div class=\"mb-4 mb-xl-5 text-black fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                        <p>A brand new e-commerce website and a complex narrative-driven marketing campaign including landing pages, video ads, blogs, and more.</p>
                    </div>
                    <a href=\"{{ 'konnect-app'|page }}\" class=\"btn btn-round bordered silver fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">View Project</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"fitbites-work section-padding-x projects-section position-relative section-padding-y section-lines d-flex align-items-center bg-000 parallax-full color-change-4 overflow-hidden\" data-scroll data-scroll-repeat>
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
            <img src=\"{{ 'home/meal-small.png'|media }}\" alt=\"\" class=\"w-100\" data-scroll data-scroll-speed=\"-3.5\" data-scroll-direction=\"horizontal\" data-scroll-target=\"#fitbites-meal-1\" data-scroll-position=\"bottom\" data-scroll-offset=\"0, -90%\">
        </div>
        <div id=\"fitbites-meal-2\" class=\"fb-meal-2\" data-scroll>
            <img src=\"{{ 'home/meal-big.png'|media }}\" alt=\"\" class=\"w-100\" data-scroll data-scroll-speed=\"4\" data-scroll-direction=\"vertical\"  data-scroll-position=\"bottom\" data-scroll-target=\"#fitbites-meal-2\" data-scroll-offset=\"-100%, 0\">
        </div>
       <div id=\"fitbites-lp\" class=\"fb-lp\" data-scroll>
            <img src=\"{{ 'the-work/green-sauce.png'|media }}\" alt=\"\" class=\"w-100\" data-scroll data-scroll-speed=\"-3\" data-scroll-direction=\"vertical\"  data-scroll-position=\"bottom\" data-scroll-target=\"#fitbites-lp\" data-scroll-offset=\"-100%, 0\">
        </div>
        <div class=\"label-dos fitb p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"gl-lodge-work parallax-section position-relative parallax-full d-flex align-items-center color-change-5\" data-scroll data-scroll-repeat >
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
                        <p>One of the top boutique addiction recovery centers in the Newport Beach and Long beach areas. We gave them a fresh brand redesign to go with an expansive new SEO-driven website and multi-platform marketing campaign, aimed specifically at increasing out-of-state leads</p>
                    </div>
                    <a href=\"{{ 'gratitude-lodge'|page }}\" class=\"btn btn-round bordered white fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".6\">View Project</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"mm-work parallax-section projects-section position-relative parallax-full d-flex align-items-center color-change-6\" data-scroll data-scroll-repeat >
        <div id=\"parallax-img-1\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" {#style=\"background-image: url('{{ 'home/gl-bg.jpg'|media }}');\"#}>
                       <img src=\"{{ 'the-work/mm-bg-2.jpg'|media }}\" alt=\"\" class=\"main-img\">
                       <img src=\"{{ 'the-work/mm-bg.jpg'|media }}\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5 project-wrapper\">
                    <h4 class=\"project-title mb-4 mb-xl-5 text-white fadeInUp\" data-scroll data-scroll-repeat>Maison Maj</span></h4>
                    <div class=\"mb-4 mb-xl-5 text-white fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                        <p>A new luxury concierge service based in Beverly Hills looking to establish themselves. Our creative team worked closely with the owners to deliver a new luxury brand identity, along with a custom-designed website.</p>
                    </div>
                    <a href=\"#\" class=\"btn btn-round bordered silver coming-soon fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">Coming Soon</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"bac-work parallax-section projects-section position-relative parallax-full d-flex align-items-center\" data-scroll data-scroll-repeat >
        <div id=\"parallax-img-1\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" {#style=\"background-image: url('{{ 'home/gl-bg.jpg'|media }}');\"#}>
                       <img src=\"{{ 'the-work/bac-bg-2.jpg'|media }}\" alt=\"\" class=\"main-img\">
                       <img src=\"{{ 'the-work/bac-bg.jpg'|media }}\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid parallax-container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xl-5\">
                    <img src=\"{{ 'the-work/bac-logo.png'|media }}\" class=\"home-projects-logo mb-4 mb-xl-5 fadeInLeft\" data-scroll data-scroll-repeat alt=\"\">
                    <div class=\"mb-4 mb-xl-5 text-black fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".3\">
                        <p>A brand new CBD marketplace that is just starting their story. We developed a logo and brand kit for them and put it to use on a new Shopify e-commerce website and multi-platform marketing campaign, as well as a social content package.</p>
                    </div>
                    <a href=\"#\" class=\"btn btn-round bordered silver coming-soon fadeInLeft\" data-scroll data-scroll-repeat animation-delay=\".6\">Coming Soon</a>
                </div>
            </div>
        </div>
        <div class=\"label-dos p-3\">
            <p class=\"mb-0 text-uppercase\">Brand Design / New Website / Landing Pages / Media Buying</p>
        </div>
    </section>
    <section class=\"projects-section position-relative section-padding-x bg-white\" data-scroll data-scroll-repeat>
        <div class=\"cut-bg-div section-padding-y-smaller\">
            <div class=\"middle-line d-none d-md-block\"></div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12 text-xl-right\">
                        <img src=\"{{ 'the-work/logo-handwrite.png'|media }}\" class=\"our-passion mb-4 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\" alt=\"Logo\">
                        <h3 class=\"big-title text-black mb-4 mb-xl-5 fadeInUp\" data-scroll data-scroll-repeat >Design</h3>
                        <div class=\"mb-xl-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">
                            <p>We tell stories. Whether it’s the story of your new brand, or the user experience for your new website. <br>
                            Marketing is about connecting your audience with the story you want to tell them. Let us make that connection for you.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"py-5\"></div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-lg-4 mb-4\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                            <img src=\"{{ 'the-work/fb-design-logo.png'|media }}\" class=\"modalImg\" alt=\"Fitbites\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4 mb-4\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">
                            <img src=\"{{ 'the-work/ss-design-logo.png'|media }}\" class=\"modalImg\" alt=\"Sunset Shores\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4 mb-4\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".6\">
                            <img src=\"{{ 'the-work/bac-design-logo.png'|media }}\" class=\"modalImg\" alt=\"BuyAnyCBD\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4 mb-4\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                            <img src=\"{{ 'the-work/gl-design-logo.png'|media }}\" class=\"modalImg\" alt=\"Gratitude Lodge\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4 mb-4\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">
                            <img src=\"{{ 'the-work/goxi-design-logo.png'|media }}\" class=\"modalImg\" alt=\"GOXI\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4 mb-4\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".6\">
                            <img src=\"{{ 'the-work/oderose-design-logo.png'|media }}\" class=\"modalImg\" alt=\"O de Rose\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4 mb-4 mb-lg-0\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".2\">
                            <img src=\"{{ 'the-work/ml-design-logo.png'|media }}\" class=\"modalImg\" alt=\"ML\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4 mb-4 mb-lg-0\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".4\">
                            <img src=\"{{ 'the-work/ft-design-logo.png'|media }}\" class=\"modalImg\" alt=\"Face Trace\">
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"logo-design-wrapper p-5 fadeInUp\" data-scroll data-scroll-repeat animation-delay=\".6\">
                            <img src=\"{{ 'the-work/mm-design-logo.png'|media }}\" class=\"modalImg\" alt=\"Moolay Media\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"section-padding-y-smaller pb-5 d-none d-xl-block\"></div>
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
    {% partial 'site/footer' %}
</div>
<div id=\"imgModal\" class=\"modal-images\">
  <span class=\"closeImgModal\">&times;</span>
  <div class=\"modal-content-wrapper\">
      <img class=\"modal-content\" id=\"img01\">
  </div>
</div>
{% put scripts %}
<script>
/*    if (\$(window).width() > 1200) {
        const el = document.querySelector(\"#hero\");
        const bg = document.querySelector(\"#bgTitle\");
        el.addEventListener(\"mousemove\", (e) => {
          bg.style.backgroundPositionX = -e.screenX / 1 + \"px\";
          bg.style.backgroundPositionY = -e.screenY / 1 + \"px\";
        });    
    }*/
    
    var modal = document.getElementById('imgModal');
    // to all images -- note I'm using a class!
    var imgWrapper = document.getElementsByClassName('logo-design-wrapper');
    var images = document.getElementsByClassName('modalImg');
    // the image in the modal
    var modalImg = document.getElementById(\"img01\");
    
    // Go through all of the images with our custom class
    \$('.modalImg').each( function( index, element ){
        \$(this).parent().click(function(){
            modal.style.display = \"flex\";
            modalImg.src = \$(this).children().first().attr(\"src\");
        });
    });
 
/*    for (var i = 0; i < imgWrapper.length; i++) {
      var wrap = imgWrapper[i];
      var imgChild = imgWrapper[i].children;
      // and attach our click listener for this image.
      wrap.onclick = function(evt) {
        modal.style.display = \"block\";
        modalImg.src = imgChild.src;
      }
    }*/
    
    var span = document.getElementsByClassName(\"closeImgModal\")[0];
    
    span.onclick = function() {
      modal.style.display = \"none\";
    }
    \$(\"#imgModal\").click(function(event) {
      //if you click on anything except the modal itself or the \"open modal\" link, close the modal
      if (!\$(event.target).closest(\".modal-content-wrapper\").length) {
        modal.style.display = \"none\";
      }
    });
</script>
{% endput %}", "/home/moolaymedia/public_html/themes/demo/pages/work.htm", "");
    }
}
