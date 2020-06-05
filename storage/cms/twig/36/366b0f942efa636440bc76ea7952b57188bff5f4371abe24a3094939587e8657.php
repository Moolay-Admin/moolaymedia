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

/* /home/moolaymedia/public_html/themes/demo/pages/fitbites.htm */
class __TwigTemplate_57c5fdc9315898275fc72a626dbb997978cfa8aff1c7470dc9dabd9dad45e1d0 extends \Twig\Template
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
    <section class=\"hero-section bg-white section-padding-x d-flex align-items-center\">
        <div class=\"section-padding-y-smaller w-100\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h5 class=\"subtitle text-light-gray\">Eat Right. Now.</h5>
                        <h3 class=\"section-title mb-3 mb-lg-4 text-black\">Fitbites</h3>
                        <div class=\"tags mb-3 mb-lg-4\">
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">Brand Design</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">New Website</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">Landing Pages</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">Media Buying</a>
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <p>A healthy, locally-sourced casual restaurant and catering service based in Orange County, CA. aiming to grow their brand awareness and customer base. Our team worked with them to execute a complete rebrand, including two new websites, print materials, and digital content to support a comprehensive marketing strategy.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"main bg-000\">
        <section class=\"fitbites-watches-section projects-section bg-white section-padding-x\">
            <div class=\"cut-bg-div py-100\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-100 align-items-center justify-content-lg-between\">
                        <div class=\"col-lg-6 project-wrapper mb-4 mb-lg-0\">
                            <div class=\"project-logo mb-4 mb-xl-5\">
                                <img src=\"";
        // line 30
        echo $this->extensions['System\Twig\Extension']->mediaFilter("projects/fitbites-logo.svg");
        echo "\" alt=\"\">
                            </div>
                            <h4 class=\"project-title mb-3 mb-xl-4\">Logo & Branding</h4>
                            <div class=\"\">
                                <p>Fibites came to us with the goal of completely revamping their image from one that was too focused on fitness. We were inspired by their locally-sourced, ingredient-driven approach to food. Our team created a new brand package and slogan that focused on their commitment to providing fresh, quality food fast.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-5\">
                            <div class=\"row text-lg-right\">
                                <div class=\"col-sm-4 col-lg-12 mb-3\">
                                    <img src=\"";
        // line 40
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-white-logo.png");
        echo "\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"col-sm-4 col-lg-12 mb-3\">
                                    <img src=\"";
        // line 43
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-green-logo.png");
        echo "\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"col-sm-4 col-lg-12\">
                                    <img src=\"";
        // line 46
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-black-logo.png");
        echo "\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row justify-content-lg-between\">
                        <div class=\"col-sm-6 d-none d-sm-block\">
                            <div class=\"fitbites-watch\">
                                <img src=\"";
        // line 54
        echo $this->extensions['System\Twig\Extension']->mediaFilter("projects/fitbites-project.png");
        echo "\" class=\"w-100\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-sm-5 text-center\">
                            <h4 class=\"h5 text-normilize text mb-4\">Color scheme.</h4>
                            <img src=\"";
        // line 59
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/color-scheme.png");
        echo "\" alt=\"\" class=\"img-fluid mb-4\">
                            <p class=\"mb-0\">Precisely selected Web colors.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"fitbites-phone-section bg-white projects-section section-padding-x\">
            <div class=\"cut-bg-div section-padding-y\">
                <div class=\"container-fluid pt-xl-5\">
                    <div class=\"row pt-xl-5\">
                        <div class=\"col-lg-6 col-xl-5 project-wrapper pt-sm-5 mb-4 mb-lg-0\">
                            <div class=\"pt-sm-5\">
                                <h4 class=\"project-title mb-3 mb-xl-4\">E-COMMERCE WEBSITE</h4>
                                <p>To showcase their exciting new brand and menu to the world, Fibites needed a new website. We took their new brand story and created a stunning, custom-built new site that put the focus on their ingredients and provided a sleek ordering system to their customers, giving them the same flexibility they’ve come to know from the Ftibites restaurants.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-xl-7\">
                            <div class=\"fitbites-phone\">
                                <img src=\"";
        // line 78
        echo $this->extensions['System\Twig\Extension']->mediaFilter("projects/fitbites-project-2.png");
        echo "\" class=\"w-100\" alt=\"\">
                            </div>
                            <div class=\"fitbites-green-sauce d-none d-sm-block\">
                                <img src=\"";
        // line 81
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/green-sauce.png");
        echo "\" alt=\"\" class=\"w-100\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"fitbites-web-section bg-white section-padding-x\">
            <div class=\"cut-bg-div section-padding-y-smaller\">
                <div class=\"container-fluid px-0 px-md-5\">
                    <div class=\"img-holder px-md-5\">
                        <img src=\"";
        // line 92
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/fitbites-web-img.jpg");
        echo "\" class=\"w-100\" alt=\"\">
                    </div>
                </div>
            </div>
        </section>
        <section class=\"fitbites-web-section-2 bg-white section-padding-x\">
            <div class=\"cut-bg-div section-padding-y-smaller pt-0\">
                <div class=\"container-fluid\">
                    <div class=\"img-holder position-relative\">
                        <img src=\"";
        // line 101
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/fitbites-dual-img-layer-1.png");
        echo "\" class=\"w-100 layer-1-image\" alt=\"\">
                        <img src=\"";
        // line 102
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/fitbites-dual-img-layer-2.png");
        echo "\" class=\"w-100 layer-2-image\" alt=\"\">
                        <img src=\"";
        // line 103
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/fitbites-dual-img-layer-3.png");
        echo "\" class=\"w-100 layer-3-image\" alt=\"\">
                    </div>
                </div>
            </div>
        </section>
";
        // line 129
        echo "        <section class=\"the-real-brand-section position-relative section-padding-x section-padding-y-smaller pt-0 bg-white section-lines\" style=\"background-image: url('";
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/marks-bg.png");
        echo "');\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h3 class=\"big-title\">Fresh. <br>Local.</h3>
                        <h4 class=\"big-title text-normalize text-green\">fitbites</h3>
                    </div>
                </div>
            </div>
        </section>
        ";
        // line 148
        echo "        <section class=\"promotions-section projects-section section-padding-x section-padding-y bg-white position-relative\">
            <div class=\"bg-image-absolute\" style=\"background-image: url('";
        // line 149
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/promotions-bg.jpg");
        echo "');\"></div>
            <div class=\"container-fluid px-lg-5\">
                <div class=\"row py-lg-5\">
                    <div class=\"col-sm-9 col-md-7 col-lg-6 col-xl-5 project-wrapper py-sm-5\">
                        <h4 class=\"project-title mb-3 mb-xl-4\">Promotions</h4>
                        <p>As part of the Fitbites rebrand, we ran several promotional campaigns to grow their brand awareness among key demographics in their service areas. These included bright, attention-grabbing design featuring their new branding, and included print, social, and email campaigns.</p>
                    </div>
                </div>
            </div>
        </section>
        ";
        // line 172
        echo "        <section class=\"social-graphics-section projects-section section-padding-x section-padding-y-smaller bg-white position-relative\">
            <div class=\"asset-img\">
                <img src=\"";
        // line 174
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/social-graphics-asset.jpg");
        echo "\" alt=\"\" class=\"w-100\">
            </div>
            <div class=\"container-fluid\">
                <div class=\"row pl-sm-5\">
                    <div class=\"col-md-11 col-lg-8 project-wrapper pl-4 pl-sm-5\">
                        <h4 class=\"project-title mb-3 mb-xl-4\">Social Content</h4>
                        <p>Naturally, a big part of rebranding is putting your new brand out where everyone can see it. Our design team took the revamped brand story of Fitbites and went to town, creating a ton of beautiful new pieces of social content to update their look across all social platforms.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"boxes-section projects-section bg-white px-4 px-md-5\">
            <div class=\"row\">
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 188
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-1.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 191
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-2.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 194
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-3.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 197
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-4.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 200
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-5.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 203
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-6.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 206
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-7.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 209
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-6.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 212
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-1.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 215
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-8.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 218
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-9.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 221
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-10.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 224
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-11.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 227
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-12.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 230
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-13.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"";
        // line 233
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/box-6.jpg");
        echo "\" alt=\"\" class=\"w-100\">
                </div>
            </div>
        </section>
";
        // line 242
        echo "        <section class=\"we-all-love-section bg-white section-padding-y-smaller\">
            <img src=\"";
        // line 243
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/we-all-love-fb.jpg");
        echo "\" alt=\"\" class=\"w-100\">
        </section>
        ";
        // line 256
        echo "        ";
        // line 339
        echo "        
        <section class=\"gift-card-section bg-white\">
            <img src=\"";
        // line 341
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/gift-card-img.png");
        echo "\" alt=\"\" class=\"w-100 d-none d-sm-block\">
            <img src=\"";
        // line 342
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/gift-card-img-mobile.png");
        echo "\" alt=\"\" class=\"w-100 d-sm-none\">
        </section>
        
        <section class=\"projects-section print-flyer-section section-padding-y bg-white section-padding-x position-relative pb-0\" style=\"background-image: url('";
        // line 345
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/marks-2-bg.jpg");
        echo "');\">
            <div class=\"section-devider section-padding-y-smaller pt-0 d-none d-sm-block\"></div>
            <div class=\"container-fluid px-sm-0 px-lg-5\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-lg-5 project-wrapper mb-4 mb-lg-0\">
                        <h4 class=\"project-title mb-3 mb-xl-4\">Print Marketing</h4>
                        <p>As a restaurant with the goal of increasing brand awareness in their local community, print played a big role in our strategy for them. We created a fresh new menu and promotional flyers with the updated branding, in-store menus that showcased the new style and menu, and free-standing banners grab attention at their locations and get new customers in the door.</p>
                    </div>
                    <div class=\"col-md-6 col-lg-7 text-center text-lg-left\">
                        <img src=\"";
        // line 354
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/print-flyer-img.png");
        echo "\" alt=\"\" class=\"print-flyer-img\">
                    </div>
                </div>
            </div>
        </section>
        <section class=\"projects-section fold-square-section section-padding-y bg-white section-padding-x position-relative\">
            <div class=\"section-devider section-padding-y-smaller d-none d-lg-block\"></div>
            <div class=\"container-fluid px-sm-0 py-lg-5\">
                <div class=\"row justify-content-lg-end py-lg-5\">
                    <div class=\"col-md-6 col-lg-5 col-xxxl-4 pl-xl-5 project-wrapper text-lg-right mb-4 mb-lg-0\">
                        <h4 class=\"project-title mb-3 mb-xl-4\">4 Fold Square Menu</h4>
                        ";
        // line 368
        echo "                    </div>
                    <div class=\"col-12 d-lg-none text-center\">
                        <img src=\"";
        // line 370
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/fold-square-img.jpg");
        echo "\" alt=\"\" class=\"fold-square-img\">
                    </div>
                </div>
            </div>
            <img src=\"";
        // line 374
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/fold-square-img.jpg");
        echo "\" alt=\"\" class=\"fold-square-img d-none d-lg-block\">
        </section>
        <section class=\"projects-section standing-banner-section section-padding-y bg-white section-padding-x position-relative\">
            <div class=\"section-devider-1 section-padding-y d-none d-lg-block\"></div>
            <div class=\"section-padding-y-smaller d-none d-lg-block\"></div>
            <div class=\"container-fluid\">
                <div class=\"row justify-content-lg-end\">
                    <div class=\"col-md-6 col-xl-5 project-wrapper text-lg-right mb-4 mb-lg-0\">
                        <h4 class=\"project-title mb-3 mb-xl-4\">Standing Banner</h4>
                        ";
        // line 386
        echo "                    </div>
                    <div class=\"col-12 d-lg-none text-right pr-0\">
                        <img src=\"";
        // line 388
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/standing-banner.jpg");
        echo "\" alt=\"\" class=\"standing-banner-img\">
                    </div>
                </div>
            </div>
            <img src=\"";
        // line 392
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/fitbites/standing-banner.jpg");
        echo "\" alt=\"\" class=\"standing-banner-img d-none d-lg-block\">
        </section>
        <section class=\"projects-section position-relative bg-white color-change-8\" data-scroll data-scroll-repeat>
            <div class=\"tell-us-section scrollStart position-relative section-padding-x z-index-10 d-none d-xl-block\" data-scroll>
                <div class=\"w-100 section-padding-y pb-5\">
                    <div class=\"middle-line d-none d-md-block\"></div>
                    <div class=\"container-fluid\">
                        <div class=\"position-relative\">
                            <div id=\"scrollToPlace\">
                                <div data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"bottom\" class=\"d-none d-xxl-block\">
                                    <div class=\"p-top\">
                                        <h3 class=\"big-title text-shadow mb-5\" style=\"background-image: url('";
        // line 403
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                           Tell Us <br> a Story
                                        </h3>
                                        <a href=\"";
        // line 406
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                                    </div>
                                </div>
                                <div data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"bottom\" class=\"d-block d-xxl-none\">
                                    <div class=\"p-top\">
                                        <h3 class=\"big-title text-shadow mb-5\" style=\"background-image: url('";
        // line 411
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                           Tell Us <br> a Story
                                        </h3>
                                        <a href=\"";
        // line 414
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
        // line 425
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\">
                           Tell Us <br> a Story
                        </h3>
                        <a href=\"";
        // line 428
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    ";
        // line 434
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 435
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/moolaymedia/public_html/themes/demo/pages/fitbites.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 435,  477 => 434,  468 => 428,  462 => 425,  448 => 414,  442 => 411,  434 => 406,  428 => 403,  414 => 392,  407 => 388,  403 => 386,  391 => 374,  384 => 370,  380 => 368,  366 => 354,  354 => 345,  348 => 342,  344 => 341,  340 => 339,  338 => 256,  333 => 243,  330 => 242,  323 => 233,  317 => 230,  311 => 227,  305 => 224,  299 => 221,  293 => 218,  287 => 215,  281 => 212,  275 => 209,  269 => 206,  263 => 203,  257 => 200,  251 => 197,  245 => 194,  239 => 191,  233 => 188,  216 => 174,  212 => 172,  199 => 149,  196 => 148,  182 => 129,  174 => 103,  170 => 102,  166 => 101,  154 => 92,  140 => 81,  134 => 78,  112 => 59,  104 => 54,  93 => 46,  87 => 43,  81 => 40,  68 => 30,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div data-scroll-section>    
    <section class=\"hero-section bg-white section-padding-x d-flex align-items-center\">
        <div class=\"section-padding-y-smaller w-100\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h5 class=\"subtitle text-light-gray\">Eat Right. Now.</h5>
                        <h3 class=\"section-title mb-3 mb-lg-4 text-black\">Fitbites</h3>
                        <div class=\"tags mb-3 mb-lg-4\">
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">Brand Design</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">New Website</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">Landing Pages</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">Media Buying</a>
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <p>A healthy, locally-sourced casual restaurant and catering service based in Orange County, CA. aiming to grow their brand awareness and customer base. Our team worked with them to execute a complete rebrand, including two new websites, print materials, and digital content to support a comprehensive marketing strategy.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"main bg-000\">
        <section class=\"fitbites-watches-section projects-section bg-white section-padding-x\">
            <div class=\"cut-bg-div py-100\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-100 align-items-center justify-content-lg-between\">
                        <div class=\"col-lg-6 project-wrapper mb-4 mb-lg-0\">
                            <div class=\"project-logo mb-4 mb-xl-5\">
                                <img src=\"{{ 'projects/fitbites-logo.svg'|media }}\" alt=\"\">
                            </div>
                            <h4 class=\"project-title mb-3 mb-xl-4\">Logo & Branding</h4>
                            <div class=\"\">
                                <p>Fibites came to us with the goal of completely revamping their image from one that was too focused on fitness. We were inspired by their locally-sourced, ingredient-driven approach to food. Our team created a new brand package and slogan that focused on their commitment to providing fresh, quality food fast.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-5\">
                            <div class=\"row text-lg-right\">
                                <div class=\"col-sm-4 col-lg-12 mb-3\">
                                    <img src=\"{{ 'case-studies/fitbites/box-white-logo.png'|media }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"col-sm-4 col-lg-12 mb-3\">
                                    <img src=\"{{ 'case-studies/fitbites/box-green-logo.png'|media }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"col-sm-4 col-lg-12\">
                                    <img src=\"{{ 'case-studies/fitbites/box-black-logo.png'|media }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row justify-content-lg-between\">
                        <div class=\"col-sm-6 d-none d-sm-block\">
                            <div class=\"fitbites-watch\">
                                <img src=\"{{ 'projects/fitbites-project.png'|media }}\" class=\"w-100\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-sm-5 text-center\">
                            <h4 class=\"h5 text-normilize text mb-4\">Color scheme.</h4>
                            <img src=\"{{ 'case-studies/fitbites/color-scheme.png'|media }}\" alt=\"\" class=\"img-fluid mb-4\">
                            <p class=\"mb-0\">Precisely selected Web colors.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"fitbites-phone-section bg-white projects-section section-padding-x\">
            <div class=\"cut-bg-div section-padding-y\">
                <div class=\"container-fluid pt-xl-5\">
                    <div class=\"row pt-xl-5\">
                        <div class=\"col-lg-6 col-xl-5 project-wrapper pt-sm-5 mb-4 mb-lg-0\">
                            <div class=\"pt-sm-5\">
                                <h4 class=\"project-title mb-3 mb-xl-4\">E-COMMERCE WEBSITE</h4>
                                <p>To showcase their exciting new brand and menu to the world, Fibites needed a new website. We took their new brand story and created a stunning, custom-built new site that put the focus on their ingredients and provided a sleek ordering system to their customers, giving them the same flexibility they’ve come to know from the Ftibites restaurants.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-xl-7\">
                            <div class=\"fitbites-phone\">
                                <img src=\"{{ 'projects/fitbites-project-2.png'|media }}\" class=\"w-100\" alt=\"\">
                            </div>
                            <div class=\"fitbites-green-sauce d-none d-sm-block\">
                                <img src=\"{{ 'case-studies/fitbites/green-sauce.png'|media }}\" alt=\"\" class=\"w-100\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"fitbites-web-section bg-white section-padding-x\">
            <div class=\"cut-bg-div section-padding-y-smaller\">
                <div class=\"container-fluid px-0 px-md-5\">
                    <div class=\"img-holder px-md-5\">
                        <img src=\"{{ 'case-studies/fitbites/fitbites-web-img.jpg'|media }}\" class=\"w-100\" alt=\"\">
                    </div>
                </div>
            </div>
        </section>
        <section class=\"fitbites-web-section-2 bg-white section-padding-x\">
            <div class=\"cut-bg-div section-padding-y-smaller pt-0\">
                <div class=\"container-fluid\">
                    <div class=\"img-holder position-relative\">
                        <img src=\"{{ 'case-studies/fitbites/fitbites-dual-img-layer-1.png'|media }}\" class=\"w-100 layer-1-image\" alt=\"\">
                        <img src=\"{{ 'case-studies/fitbites/fitbites-dual-img-layer-2.png'|media }}\" class=\"w-100 layer-2-image\" alt=\"\">
                        <img src=\"{{ 'case-studies/fitbites/fitbites-dual-img-layer-3.png'|media }}\" class=\"w-100 layer-3-image\" alt=\"\">
                    </div>
                </div>
            </div>
        </section>
{#        <section class=\"red-sauce-section bg-white section-padding-x position-relative\">
            <div class=\"cut-bg-div section-padding-y-smaller pt-0\">
                <div class=\"absolute-content\">
                    <div class=\"row\">
                        <div class=\"col-sm-5 position-relative d-none d-sm-block\">
                            <img src=\"{{ 'case-studies/fitbites/fish-meal-asset.png'|media }}\" alt=\"\" class=\"fish-meal-img\">
                            <img src=\"{{ 'case-studies/fitbites/rice-meal.png'|media }}\" alt=\"\" class=\"rice-meal-img\">
                            <img src=\"{{ 'case-studies/fitbites/leaves-assets.png'|media }}\" alt=\"\" class=\"leaves-assets-img\">
                        </div>
                        <div class=\"col-sm-7 position-relative\">
                            <img src=\"{{ 'case-studies/fitbites/rice-meal.png'|media }}\" alt=\"\" class=\"fish-meal-img d-sm-none\">
                            <img src=\"{{ 'case-studies/fitbites/simplicity-img.png'|media }}\" alt=\"\" class=\"w-100 d-none d-sm-block\">
                            <img src=\"{{ 'case-studies/fitbites/simplicity-img-mobile.jpg'|media }}\" alt=\"\" class=\"w-100 d-sm-none\">
                            <img src=\"{{ 'case-studies/fitbites/red-sauce.png'|media }}\" alt=\"\" class=\"red-sauce-img\">
                        </div>
                    </div>
                </div>
            </div>
            <img src=\"{{ 'case-studies/fitbites/blueberries-asset.png'|media }}\" alt=\"\" class=\"blueberries-asset d-none d-sm-block\">
        </section>
        <div class=\"section-devider section-padding-y-smaller bg-white d-none d-sm-block\"></div>#}
        <section class=\"the-real-brand-section position-relative section-padding-x section-padding-y-smaller pt-0 bg-white section-lines\" style=\"background-image: url('{{ 'case-studies/fitbites/marks-bg.png'|media }}');\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h3 class=\"big-title\">Fresh. <br>Local.</h3>
                        <h4 class=\"big-title text-normalize text-green\">fitbites</h3>
                    </div>
                </div>
            </div>
        </section>
        {#<section class=\"if-you-are-section section-padding-x section-padding-y-smaller bg-coral-fitbites\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h3 class=\"section-title text-white\">If you're <br>Loren Ipsum.</h3>
                    </div>
                </div>
            </div>
        </section>#}
        <section class=\"promotions-section projects-section section-padding-x section-padding-y bg-white position-relative\">
            <div class=\"bg-image-absolute\" style=\"background-image: url('{{ 'case-studies/fitbites/promotions-bg.jpg'|media }}');\"></div>
            <div class=\"container-fluid px-lg-5\">
                <div class=\"row py-lg-5\">
                    <div class=\"col-sm-9 col-md-7 col-lg-6 col-xl-5 project-wrapper py-sm-5\">
                        <h4 class=\"project-title mb-3 mb-xl-4\">Promotions</h4>
                        <p>As part of the Fitbites rebrand, we ran several promotional campaigns to grow their brand awareness among key demographics in their service areas. These included bright, attention-grabbing design featuring their new branding, and included print, social, and email campaigns.</p>
                    </div>
                </div>
            </div>
        </section>
        {#<section class=\"stay-fit-section bg-white section-padding-y pt-0\">
            <div class=\"row\">
                <div class=\"col-sm-5 pr-0 position-relative\">
                    <img src=\"{{ 'case-studies/fitbites/stay-fit.jpg'|media }}\" alt=\"\" class=\"w-100\">
                    <img src=\"{{ 'case-studies/fitbites/green-sauce.png'|media }}\" alt=\"\" class=\"green-sauce-asset\">
                </div>
                <div class=\"col-sm-7 pl-0 bg-pinkish py-4 py-sm-0\">
                    <div class=\"position-relative d-flex justify-content-center\">
                        <img src=\"{{ 'case-studies/fitbites/fit-woman.png'|media }}\" alt=\"\" class=\"fit-woman\">
                    </div>
                </div>
            </div>
        </section>#}
        <section class=\"social-graphics-section projects-section section-padding-x section-padding-y-smaller bg-white position-relative\">
            <div class=\"asset-img\">
                <img src=\"{{ 'case-studies/fitbites/social-graphics-asset.jpg'|media }}\" alt=\"\" class=\"w-100\">
            </div>
            <div class=\"container-fluid\">
                <div class=\"row pl-sm-5\">
                    <div class=\"col-md-11 col-lg-8 project-wrapper pl-4 pl-sm-5\">
                        <h4 class=\"project-title mb-3 mb-xl-4\">Social Content</h4>
                        <p>Naturally, a big part of rebranding is putting your new brand out where everyone can see it. Our design team took the revamped brand story of Fitbites and went to town, creating a ton of beautiful new pieces of social content to update their look across all social platforms.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"boxes-section projects-section bg-white px-4 px-md-5\">
            <div class=\"row\">
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-1.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-2.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-3.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-4.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-5.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-6.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-7.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-6.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-1.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-8.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-9.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-10.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-11.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-12.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-13.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
                <div class=\"col-6 col-sm-3 px-2 mb-3\">
                    <img src=\"{{ 'case-studies/fitbites/box-6.jpg'|media }}\" alt=\"\" class=\"w-100\">
                </div>
            </div>
        </section>
{#        <section class=\"people-section section-padding-y-smaller bg-white\">
            <img src=\"{{ 'case-studies/fitbites/people.jpg'|media }}\" alt=\"\" class=\"w-100 d-none d-md-block\">
            <img src=\"{{ 'case-studies/fitbites/people-mobile.jpg'|media }}\" alt=\"\" class=\"w-100 d-md-none\">
        </section>
#}
        <section class=\"we-all-love-section bg-white section-padding-y-smaller\">
            <img src=\"{{ 'case-studies/fitbites/we-all-love-fb.jpg'|media }}\" alt=\"\" class=\"w-100\">
        </section>
        {#<section class=\"facebook-section projects-section section-padding-x section-padding-y bg-white position-relative\">
            <div class=\"container-fluid\">
                <div class=\"row pb-lg-5 pl-sm-5\">
                    <div class=\"col-md-11 col-lg-8 project-wrapper pb-sm-5 pl-sm-5\">
                        <h4 class=\"project-title mb-3 mb-xl-4\">Facebook</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div>
                </div>
            </div>
        </section>#}
        {#<section class=\"the-new-brand-section section-padding-x section-padding-y-smaller bg-coral-fitbites position-relative\">
            <div class=\"fish-meal-asset\">
                <img src=\"{{ 'case-studies/fitbites/fish-meal.png'|media }}\" alt=\"\" class=\"w-100\">
            </div>
            <div class=\"facebook-asset\">
                <img src=\"{{ 'case-studies/fitbites/facebook-asset-red.png'|media }}\" alt=\"\" class=\"w-100\">
            </div>
            <div class=\"green-sauce-asset\">
                <img src=\"{{ 'case-studies/fitbites/green-sauce.png'|media }}\" alt=\"\" class=\"w-100\">
            </div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12 d-flex justify-content-center text-center text-sm-left\">
                        <div>
                            <h3 class=\"section-title text-white mb-3 mb-sm-5\">The New <br>Brand 2020</h3>
                            <span class=\"h2 text-white text-normalize\">fitbitesmeal.com</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"logo-asset\">
                <img src=\"{{ 'case-studies/fitbites/logo-asset-green.png'|media }}\" alt=\"\" class=\"w-100\">
            </div>
            <div class=\"rice-meal-asset\">
                <img src=\"{{ 'case-studies/fitbites/rice-meal.png'|media }}\" alt=\"\" class=\"w-100\">
            </div>
        </section>
        
        <div class=\"section-devider section-padding-y bg-white\" style=\"background-image: url('{{ 'case-studies/fitbites/marks-2-bg.jpg'|media }}');\"></div>
        
        <section class=\"the-new-brand-section section-padding-x section-padding-y-smaller bg-green position-relative\">
            <div class=\"fish-meal-asset\">
                <img src=\"{{ 'case-studies/fitbites/fish-meal.png'|media }}\" alt=\"\" class=\"w-100\">
            </div>
            <div class=\"facebook-asset\">
                <img src=\"{{ 'case-studies/fitbites/facebook-asset-black.png'|media }}\" alt=\"\" class=\"w-100\">
            </div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12 d-flex justify-content-center text-center text-sm-left\">
                        <div>
                            <h3 class=\"section-title text-white mb-3 mb-sm-5\">The New <br>Brand 2020</h3>
                            <span class=\"h2 text-white text-normalize\">fitbitesmeal.com</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"logo-asset\">
                <img src=\"{{ 'case-studies/fitbites/logo-asset-black.png'|media }}\" alt=\"\" class=\"w-100\">
            </div>
            <div class=\"rice-meal-asset\">
                <img src=\"{{ 'case-studies/fitbites/rice-meal.png'|media }}\" alt=\"\" class=\"w-100\">
            </div>
        </section>
        
        <div class=\"section-devider section-padding-y bg-white\"></div>
        
        <section class=\"the-new-brand-section section-padding-x section-padding-y-smaller bg-dark-fitbites position-relative\">
            <div class=\"fish-meal-asset\">
                <img src=\"{{ 'case-studies/fitbites/fish-meal.png'|media }}\" alt=\"\" class=\"w-100\">
            </div>
            <div class=\"facebook-asset\">
                <img src=\"{{ 'case-studies/fitbites/facebook-asset-green.png'|media }}\" alt=\"\" class=\"w-100\">
            </div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12 d-flex justify-content-center text-center text-sm-left\">
                        <div>
                            <h3 class=\"section-title text-white mb-3 mb-sm-5\">The New <br>Brand 2020</h3>
                            <span class=\"h2 text-white text-normalize\">fitbitesmeal.com</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"logo-asset\">
                <img src=\"{{ 'case-studies/fitbites/logo-asset-green.png'|media }}\" alt=\"\" class=\"w-100\">
            </div>
            <div class=\"rice-meal-asset\">
                <img src=\"{{ 'case-studies/fitbites/rice-meal.png'|media }}\" alt=\"\" class=\"w-100\">
            </div>
        </section>
        
        <div class=\"section-devider section-padding-y bg-white\" style=\"background-image: url('{{ 'case-studies/fitbites/marks-2-bg.jpg'|media }}');\"></div>#}
        
        <section class=\"gift-card-section bg-white\">
            <img src=\"{{ 'case-studies/fitbites/gift-card-img.png'|media }}\" alt=\"\" class=\"w-100 d-none d-sm-block\">
            <img src=\"{{ 'case-studies/fitbites/gift-card-img-mobile.png'|media }}\" alt=\"\" class=\"w-100 d-sm-none\">
        </section>
        
        <section class=\"projects-section print-flyer-section section-padding-y bg-white section-padding-x position-relative pb-0\" style=\"background-image: url('{{ 'case-studies/fitbites/marks-2-bg.jpg'|media }}');\">
            <div class=\"section-devider section-padding-y-smaller pt-0 d-none d-sm-block\"></div>
            <div class=\"container-fluid px-sm-0 px-lg-5\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-lg-5 project-wrapper mb-4 mb-lg-0\">
                        <h4 class=\"project-title mb-3 mb-xl-4\">Print Marketing</h4>
                        <p>As a restaurant with the goal of increasing brand awareness in their local community, print played a big role in our strategy for them. We created a fresh new menu and promotional flyers with the updated branding, in-store menus that showcased the new style and menu, and free-standing banners grab attention at their locations and get new customers in the door.</p>
                    </div>
                    <div class=\"col-md-6 col-lg-7 text-center text-lg-left\">
                        <img src=\"{{ 'case-studies/fitbites/print-flyer-img.png'|media }}\" alt=\"\" class=\"print-flyer-img\">
                    </div>
                </div>
            </div>
        </section>
        <section class=\"projects-section fold-square-section section-padding-y bg-white section-padding-x position-relative\">
            <div class=\"section-devider section-padding-y-smaller d-none d-lg-block\"></div>
            <div class=\"container-fluid px-sm-0 py-lg-5\">
                <div class=\"row justify-content-lg-end py-lg-5\">
                    <div class=\"col-md-6 col-lg-5 col-xxxl-4 pl-xl-5 project-wrapper text-lg-right mb-4 mb-lg-0\">
                        <h4 class=\"project-title mb-3 mb-xl-4\">4 Fold Square Menu</h4>
                        {#<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                        #}
                    </div>
                    <div class=\"col-12 d-lg-none text-center\">
                        <img src=\"{{ 'case-studies/fitbites/fold-square-img.jpg'|media }}\" alt=\"\" class=\"fold-square-img\">
                    </div>
                </div>
            </div>
            <img src=\"{{ 'case-studies/fitbites/fold-square-img.jpg'|media }}\" alt=\"\" class=\"fold-square-img d-none d-lg-block\">
        </section>
        <section class=\"projects-section standing-banner-section section-padding-y bg-white section-padding-x position-relative\">
            <div class=\"section-devider-1 section-padding-y d-none d-lg-block\"></div>
            <div class=\"section-padding-y-smaller d-none d-lg-block\"></div>
            <div class=\"container-fluid\">
                <div class=\"row justify-content-lg-end\">
                    <div class=\"col-md-6 col-xl-5 project-wrapper text-lg-right mb-4 mb-lg-0\">
                        <h4 class=\"project-title mb-3 mb-xl-4\">Standing Banner</h4>
                        {#<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                        #}
                    </div>
                    <div class=\"col-12 d-lg-none text-right pr-0\">
                        <img src=\"{{ 'case-studies/fitbites/standing-banner.jpg'|media }}\" alt=\"\" class=\"standing-banner-img\">
                    </div>
                </div>
            </div>
            <img src=\"{{ 'case-studies/fitbites/standing-banner.jpg'|media }}\" alt=\"\" class=\"standing-banner-img d-none d-lg-block\">
        </section>
        <section class=\"projects-section position-relative bg-white color-change-8\" data-scroll data-scroll-repeat>
            <div class=\"tell-us-section scrollStart position-relative section-padding-x z-index-10 d-none d-xl-block\" data-scroll>
                <div class=\"w-100 section-padding-y pb-5\">
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
</div>", "/home/moolaymedia/public_html/themes/demo/pages/fitbites.htm", "");
    }
}
