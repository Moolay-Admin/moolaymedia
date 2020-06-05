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

/* /home/moolaymedia/public_html/themes/demo/pages/konnect-app.htm */
class __TwigTemplate_f0e15d53eff93476dbdc746a69b2b489470cf7c0dd2173661d66de6f30b5cee9 extends \Twig\Template
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
        <div class=\"section-padding-y-smaller pb-100 pb-lg-0 w-100\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h5 class=\"subtitle text-light-gray\">Local Social Network</h5>
                        <h3 class=\"section-title mb-3 mb-lg-4 text-black\">Konnect App</h3>
                        <div class=\"tags mb-3 mb-lg-4\">
                            <a href=\"#\" class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">Web Design</a>
                            <a href=\"#\" class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">App Store Screenshots</a>
                            <a href=\"#\" class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">Branding</a>
                            <a href=\"#\" class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">Web Development</a>
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <p>Konnect is a local social network that plugs you into the local community wherever you are, instantly connecting you to the people, places, and resources that matter most.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"main bg-black\">
        <section class=\"review-project-section projects-section bg-white section-padding-x position-relative\">
            <div class=\"cut-bg-div py-100\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-xl-end\">
                        <div class=\"col-xl-5 project-wrapper mb-4 mb-lg-0 text-xl-right\">
                            <h4 class=\"project-title mb-3 mb-xl-4 text-black\">Web Design</h4>
                            <div class=\"\">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"web-design-img\">
                    <img src=\"";
        // line 38
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/konnect/web-design-img.png");
        echo "\" class=\"w-100\" alt=\"\">
                </div>
            </div>
        </section>
        <section class=\"review-project-section-small projects-section bg-white section-padding-x\">
            <div class=\"cut-bg-div py-100\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-md-8 col-xl-5 project-wrapper mb-4 mb-md-0 pr-md-5\">
                            <h4 class=\"project-title mb-3 mb-xl-4\">Website Development</h4>
                            <div class=\"mb-4 mb-xl-5\">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                            </div>
                            <a href=\"https://apps.apple.com/us/app/konnect-local-social-network/id1182587961\" class=\"btn btn-round bordered black btn-light-bg\">View Project</a>
                        </div>
                        <div class=\"col-md-4\">
                            <a href=\"https://apps.apple.com/us/app/konnect-local-social-network/id1182587961\" class=\"d-block\"><img src=\"";
        // line 55
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/konnect/app-store.png");
        echo "\" class=\"app-store-img\" alt=\"\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"review-project-section-screenshots projects-section bg-orange-konnect section-padding-x\">
            <div class=\"cut-bg-div py-100\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-md-8 col-xl-5 project-wrapper mb-4 mb-md-0 pr-md-5\">
                            <h4 class=\"project-title mb-3 mb-xl-4 text-white\">App Store Screenshots</h4>
                            <div class=\"mb-4 mb-xl-5 text-white\">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"web-design-img\">
                    <img src=\"";
        // line 74
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/konnect/app-screenshots-img.png");
        echo "\" class=\"w-100\" alt=\"\">
                </div>
                <div class=\"container-fluid minus-margin color-change-3\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-12 project-wrapper mb-4 mb-md-0 pr-md-5 d-flex flex-wrap align-items-center text-center text-sm-left justify-content-center justify-content-sm-start\">
                            <h4 class=\"project-title text-white text-normalize mr-4 mr-sm-5 font-weight-700 konnect-title\">KonnectApp</h4>
                            <a href=\"https://apps.apple.com/us/app/konnect-local-social-network/id1182587961\" class=\"d-block\"><img src=\"";
        // line 80
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/konnect/app-store.png");
        echo "\" class=\"app-store-img\" alt=\"\"></a>
                        </div>
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
        // line 95
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                           Tell Us <br> a Story
                                        </h3>
                                        <a href=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                                    </div>
                                </div>
                                <div data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"bottom\" class=\"d-block d-xxl-none\">
                                    <div class=\"p-top\">
                                        <h3 class=\"big-title text-shadow mb-5\" style=\"background-image: url('";
        // line 103
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                           Tell Us <br> a Story
                                        </h3>
                                        <a href=\"";
        // line 106
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
        // line 117
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\">
                           Tell Us <br> a Story
                        </h3>
                        <a href=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    ";
        // line 126
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 127
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/moolaymedia/public_html/themes/demo/pages/konnect-app.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 127,  194 => 126,  185 => 120,  179 => 117,  165 => 106,  159 => 103,  151 => 98,  145 => 95,  127 => 80,  118 => 74,  96 => 55,  76 => 38,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div data-scroll-section>
    <section class=\"hero-section bg-white section-padding-x d-flex align-items-center\">
        <div class=\"section-padding-y-smaller pb-100 pb-lg-0 w-100\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h5 class=\"subtitle text-light-gray\">Local Social Network</h5>
                        <h3 class=\"section-title mb-3 mb-lg-4 text-black\">Konnect App</h3>
                        <div class=\"tags mb-3 mb-lg-4\">
                            <a href=\"#\" class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">Web Design</a>
                            <a href=\"#\" class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">App Store Screenshots</a>
                            <a href=\"#\" class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">Branding</a>
                            <a href=\"#\" class=\"btn btn-round bordered black-border mr-2 mr-lg-3\">Web Development</a>
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <p>Konnect is a local social network that plugs you into the local community wherever you are, instantly connecting you to the people, places, and resources that matter most.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"main bg-black\">
        <section class=\"review-project-section projects-section bg-white section-padding-x position-relative\">
            <div class=\"cut-bg-div py-100\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-xl-end\">
                        <div class=\"col-xl-5 project-wrapper mb-4 mb-lg-0 text-xl-right\">
                            <h4 class=\"project-title mb-3 mb-xl-4 text-black\">Web Design</h4>
                            <div class=\"\">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"web-design-img\">
                    <img src=\"{{ 'case-studies/konnect/web-design-img.png'|media }}\" class=\"w-100\" alt=\"\">
                </div>
            </div>
        </section>
        <section class=\"review-project-section-small projects-section bg-white section-padding-x\">
            <div class=\"cut-bg-div py-100\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-md-8 col-xl-5 project-wrapper mb-4 mb-md-0 pr-md-5\">
                            <h4 class=\"project-title mb-3 mb-xl-4\">Website Development</h4>
                            <div class=\"mb-4 mb-xl-5\">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                            </div>
                            <a href=\"https://apps.apple.com/us/app/konnect-local-social-network/id1182587961\" class=\"btn btn-round bordered black btn-light-bg\">View Project</a>
                        </div>
                        <div class=\"col-md-4\">
                            <a href=\"https://apps.apple.com/us/app/konnect-local-social-network/id1182587961\" class=\"d-block\"><img src=\"{{ 'case-studies/konnect/app-store.png'|media }}\" class=\"app-store-img\" alt=\"\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"review-project-section-screenshots projects-section bg-orange-konnect section-padding-x\">
            <div class=\"cut-bg-div py-100\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-md-8 col-xl-5 project-wrapper mb-4 mb-md-0 pr-md-5\">
                            <h4 class=\"project-title mb-3 mb-xl-4 text-white\">App Store Screenshots</h4>
                            <div class=\"mb-4 mb-xl-5 text-white\">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"web-design-img\">
                    <img src=\"{{ 'case-studies/konnect/app-screenshots-img.png'|media }}\" class=\"w-100\" alt=\"\">
                </div>
                <div class=\"container-fluid minus-margin color-change-3\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-12 project-wrapper mb-4 mb-md-0 pr-md-5 d-flex flex-wrap align-items-center text-center text-sm-left justify-content-center justify-content-sm-start\">
                            <h4 class=\"project-title text-white text-normalize mr-4 mr-sm-5 font-weight-700 konnect-title\">KonnectApp</h4>
                            <a href=\"https://apps.apple.com/us/app/konnect-local-social-network/id1182587961\" class=\"d-block\"><img src=\"{{ 'case-studies/konnect/app-store.png'|media }}\" class=\"app-store-img\" alt=\"\"></a>
                        </div>
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
</div>", "/home/moolaymedia/public_html/themes/demo/pages/konnect-app.htm", "");
    }
}
