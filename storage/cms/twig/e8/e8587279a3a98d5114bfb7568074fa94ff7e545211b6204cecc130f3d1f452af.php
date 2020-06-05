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

/* /home/moolaymedia/public_html/themes/demo/pages/gratitude-lodge.htm */
class __TwigTemplate_82e2cb8dd9c80b499081738f20da11204310af1358cd89da300a44b7b2298342 extends \Twig\Template
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
        echo "<link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap\" rel=\"stylesheet\">
<style>
    .font-family-montserrat {
        font-family: 'Montserrat', sans-serif;   
    }
</style>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 9
        echo "<div data-scroll-section>
    <section class=\"hero-section bg-white section-padding-x d-flex align-items-center color-change\">
        <div class=\"section-padding-y-smaller w-100\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-xl-10\">
                        <h5 class=\"subtitle text-light-gray\">SET YOURSELF FREE</h5>
                        <h3 class=\"section-title mb-3 mb-lg-4 text-black\">Gratitude Lodge</h3>
                        <div class=\"tags mb-3 mb-lg-4\">
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Brand Design</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">New Website</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Marketing Strategy</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Media Buying</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">SEO Management</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Blog Content</a>
                        </div>
                    </div>
                    <div class=\"col-xl-8\">
                        <p>One of the top boutique addiction recovery centers in the Newport Beach and Long beach areas. We gave them a fresh brand redesign to go with an expansive new SEO-driven website and multi-platform marketing campaign, aimed specifically at increasing out-of-state leads.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"main bg-black\">
        <section class=\"logo-section projects-section bg-white section-padding-x d-flex align-items-center color-change\">
            <div class=\"cut-bg-div section-padding-y-smaller\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-10 text-center\">
                            <div class=\"o-de-rose-logo mb-5 mx-auto\">
                                <img src=\"";
        // line 40
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/gratitude-lodge/gl-logo.png");
        echo "\" class=\"mb-lg-5 w-100\" alt=\"\">
                            </div>
                            <div class=\"tags mb-3 mb-lg-4 project-wrapper\">
                                <h4 class=\"project-title mb-3 mb-xl-4 text-black\">Logo & Branding</h4>
                            </div>
                        </div>
                        <div class=\"col-xl-8 text-center mb-5\">
                            <div class=\"mb-xl-5\">
                                <p>The first step in our brand overhaul for Gratitude Lodge was a new logo and color scheme that aligned with the core of their brand story. In creating their brand kit, we focused on the sense of compassion and community that they instill in their residents and the gorgeous, sunny surroundings of Southern California.</p>
                            </div>
                        </div>
                        <div class=\"col-12 d-flex justify-content-center brand-colors\">
                            <div class=\"mr-3 text-center\">
                                <img src=\"";
        // line 53
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/gratitude-lodge/color-1.png");
        echo "\" class=\"mb-2 d-block\" alt=\"\">
                                <span>#f3e604</span>
                            </div>
                            <div class=\"text-center\">
                                <img src=\"";
        // line 57
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/gratitude-lodge/color-2.png");
        echo "\" class=\"mb-2 d-block\" alt=\"\">
                                <span>#1889ff</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"gl-firm-section section-padding-x bg-white\">
            <div class=\"cut-bg-div py-100\">
                <div class=\"container-fluid\">
                    <img src=\"";
        // line 68
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/gratitude-lodge/gl-firm-img.jpg");
        echo "\" class=\"w-100\" alt=\"\">
                </div>
            </div>
        </section>
        <section class=\"typography-section bg-blue-gl section-padding-x d-flex align-items-center color-change-1\">
            <div class=\"cut-bg-div section-padding-y-smaller\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-10 text-center\">
                            <div class=\"tags mb-3 mb-lg-4\">
                                <h3 class=\"section-title mb-3 mb-xl-4 text-white\">Typography</h3>
                            </div>
                        </div>
                        <div class=\"col-xl-7 text-center mb-5\">
                            <div class=\"mb-xl-5 text-white\">
                                <p>To complement their new branding, we curated a selection of fonts for Gratitude Lodge that spoke to their consummate professionalism as recovery experts, while maintaining a light, airy feel that echoes their seaside location and focus on outdoor activities.</p>
                            </div>
                        </div>
                        <div class=\"col-xl-8 text-center mb-5\">
                            <div class=\"row\">
                                <div class=\"col-12 text-center mb-5\">
                                    <h3 class=\"h1 font-family-montserrat font-weight-900 text-white text-uppercase fonts-title\">Montserrat</h3>
                                    <span class=\"text-white fonts-subtitle\">Black</span>
                                </div>
                                <div class=\"col-12 text-center mb-5\">
                                    <h3 class=\"h1 font-family-montserrat font-weight-700 text-white fonts-title\">Montserrat</h3>
                                    <span class=\"text-white fonts-subtitle\">Bold</span>
                                </div>
                                <div class=\"col-12 text-center\">
                                    <h3 class=\"h1 text-white fonts-title font-weight-400\">Poppins</h3>
                                    <span class=\"text-white fonts-subtitle\">Regular</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"cards-section card-sc-gl projects-section bg-white section-padding-x position-relative\">
            <div class=\"pt-5 bg-yellow-asset\"></div>
            <div class=\"cut-bg-div py-100 pb-0 pb-lg-5\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center mb-5\">
                        <div class=\"col-md-9 col-xl-7 project-wrapper mb-100 text-center\">
                            <h4 class=\"section-title mb-3 mb-xl-4\">Printed Materials</h4>
                            <p>As part of their rebrand, Gratitude Lodge needed a full selection of new printed materials to distribute to partners in the area that make up a major segment of their lead generation.</p>
                        </div>
                    </div>
                    <div class=\"row mb-5\">
                        <div class=\"col-md-9 col-xl-5 project-wrapper mb-4 mb-lg-0\">
                            <h4 class=\"project-title mb-3 mb-xl-4\">Business Cards</h4>
                        </div>
                    </div>
                </div>
                <div class=\"web-design-img\">
                    <img src=\"";
        // line 123
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/gratitude-lodge/cards.png");
        echo "\" class=\"w-100\" alt=\"\">
                </div>
            </div>
        </section>
        <section class=\"brochures-section-gl projects-section bg-white section-padding-x\">
            <div class=\"cut-bg-div section-padding-y\">
                <div class=\"section-padding-y-smaller pt-5 pt-xl-0 d-none d-lg-block\"></div>
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-end align-items-center\">
                        <div class=\"col-lg-5 col-xxl-4 project-wrapper text-center text-lg-right\">
                            <h4 class=\"project-title mb-3 mb-xl-5\">Brochures</h4>
                        </div>
                    </div>
                </div>
                <div class=\"section-padding-y-smaller pb-5 pb-xl-0 d-none d-lg-block\"></div>
                <img src=\"";
        // line 138
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/gratitude-lodge/brochures-bg.png");
        echo "\" alt=\"\" class=\"brochures-img d-none d-lg-block\">
                <img src=\"";
        // line 139
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/gratitude-lodge/brochures-bg-mobile.png");
        echo "\" alt=\"\" class=\"brochures-img-mobile w-100 d-lg-none\">
            </div>
        </section>
        <section class=\"social-media-gl-section projects-section section-padding-x bg-000 color-change-2\">
            <div class=\"cut-bg-div section-padding-y-smaller pb-0\">
                <div class=\"container-fluid px-3 px-lg-5\">
                    <div class=\"row px-md-5 align-items-center\">
                        <div class=\"col-md-6 col-lg-4 \">
                            <h3 class=\"section-title mb-3 mb-lg-4 text-white\">Content <br>Creation</h3>
                            <p class=\"\">Strong, engaging content was integral to both our marketing and SEO strategies for gratitude Lodge. Our content team created a range of ad, social, and blog content that captured the brand’s story of compassion and community and broadcast it to the world, all with a focus on driving leads and establishing them online as experts in their field.</p>
                        </div>
                        <div class=\"col-md-6 col-lg-8 position-relative px-0\">
                            <div class=\"social-images-gl\">
                                <img src=\"";
        // line 152
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/gratitude-lodge/social-media-img-left.png");
        echo "\" class=\"w-100 social-image-left\" alt=\"\">
                                <img src=\"";
        // line 153
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/gratitude-lodge/social-media-img-middle.png");
        echo "\" class=\"w-100 social-image-middle\" alt=\"\">
                                <img src=\"";
        // line 154
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/gratitude-lodge/social-media-img-right.png");
        echo "\" class=\"w-100 social-image-right\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"web-design-gl-section projects-section section-padding-x bg-000 color-change-3\">
            <div class=\"cut-bg-div\">
                <div class=\"container-fluid px-3 px-lg-5\">
                    <div class=\"row px-md-5 align-items-center justify-coontent-md-between\">
                        <div class=\"col-md-6 position-relative px-0 order-1 order-md-0\">
                            <div class=\"web-design-images-gl position-relative\">
                                <img src=\"";
        // line 167
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/gratitude-lodge/web-design-1.png");
        echo "\" class=\"w-100 web-design-img-gl-1\" alt=\"\">
                                <img src=\"";
        // line 168
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/gratitude-lodge/web-design-2.png");
        echo "\" class=\"w-100 web-design-img-gl web-design-img-gl-2\" alt=\"\">
                                <img src=\"";
        // line 169
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/gratitude-lodge/web-design-3.png");
        echo "\" class=\"w-100 web-design-img-gl web-design-img-gl-3\" alt=\"\">
                                <img src=\"";
        // line 170
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/gratitude-lodge/web-design-4.png");
        echo "\" class=\"w-100 web-design-img-gl web-design-img-gl-4\" alt=\"\">
                                <img src=\"";
        // line 171
        echo $this->extensions['System\Twig\Extension']->mediaFilter("case-studies/gratitude-lodge/web-design-5.png");
        echo "\" class=\"w-100 web-design-img-gl web-design-img-gl-5\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-xl-5 project-wrapper pb-md-5 pb-xl-0\">
                            <div class=\"mb-5\">
                                <h4 class=\"project-title mb-3 mb-xl-4 text-white\">Web Design & Development</h4>
                                <div class=\"mb-4 mb-xl-5\">
                                    <p>The foundation of our strategy for Gratitude Lodge depended on a website that was both user-friendly, conversion-focused, and fully optimized for SEO. We created a custom-built site that both communicated their mission and brand story to those searching for addiction treatment, while also serving as a valuable informational resource on the subject of addiction.</p>
                                </div>
                                <a href=\"#\" class=\"btn btn-round white btn-dark-bg\">View Website</a>
                            </div>
                            <div class=\"d-none d-xxl-block pb-0 pt-xxl-4 pt-xxxl-5 pb-xxxl-5\">
                                
                            </div>
                            <div class=\"mb-5\">
                                <h4 class=\"project-title mb-3 mb-xl-4 text-white\">Responsive Design</h4>
                                <p class=\"\">With a majority of users connecting with websites via their phones and tablets, creating a site that delivered the same experience on any platform was essential for us when designing the new Gratitude Lodge website. Our design team worked in a mobile-first, responsive approach to ensure that Gratitude Lodge’s story was never interrupted by annoying user experiences.</p>
                            </div>
                            <div class=\"d-none d-md-block pt-5\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"projects-section position-relative bg-white color-change-8\" data-scroll data-scroll-repeat>
            <div class=\"tell-us-section scrollStart position-relative section-padding-x z-index-10 d-none d-xl-block bg-000\" data-scroll>
                <div class=\"cut-bg-div section-padding-y pb-5\">
                    <div class=\"middle-line d-none d-md-block\"></div>
                    <div class=\"container-fluid\">
                        <div class=\"position-relative\">
                            <div id=\"scrollToPlace\">
                                <div data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"bottom\" class=\"d-none d-xxl-block\">
                                    <div class=\"p-top\">
                                        <h3 class=\"big-title text-shadow mb-5\" style=\"background-image: url('";
        // line 204
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                           Tell Us <br> a Story
                                        </h3>
                                        <a href=\"";
        // line 207
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                                    </div>
                                </div>
                                <div data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"bottom\" class=\"d-block d-xxl-none\">
                                    <div class=\"p-top\">
                                        <h3 class=\"big-title text-shadow mb-5\" style=\"background-image: url('";
        // line 212
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\" >
                                           Tell Us <br> a Story
                                        </h3>
                                        <a href=\"";
        // line 215
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
        // line 226
        echo $this->extensions['System\Twig\Extension']->mediaFilter("hero-slider/title-bg.jpg");
        echo "');\">
                           Tell Us <br> a Story
                        </h3>
                        <a href=\"";
        // line 229
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white\">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    ";
        // line 235
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 236
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/moolaymedia/public_html/themes/demo/pages/gratitude-lodge.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 236,  340 => 235,  331 => 229,  325 => 226,  311 => 215,  305 => 212,  297 => 207,  291 => 204,  255 => 171,  251 => 170,  247 => 169,  243 => 168,  239 => 167,  223 => 154,  219 => 153,  215 => 152,  199 => 139,  195 => 138,  177 => 123,  119 => 68,  105 => 57,  98 => 53,  82 => 40,  49 => 9,  47 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put styles %}
<link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap\" rel=\"stylesheet\">
<style>
    .font-family-montserrat {
        font-family: 'Montserrat', sans-serif;   
    }
</style>
{% endput %}
<div data-scroll-section>
    <section class=\"hero-section bg-white section-padding-x d-flex align-items-center color-change\">
        <div class=\"section-padding-y-smaller w-100\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-xl-10\">
                        <h5 class=\"subtitle text-light-gray\">SET YOURSELF FREE</h5>
                        <h3 class=\"section-title mb-3 mb-lg-4 text-black\">Gratitude Lodge</h3>
                        <div class=\"tags mb-3 mb-lg-4\">
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Brand Design</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">New Website</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Marketing Strategy</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Media Buying</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">SEO Management</a>
                            <a class=\"btn btn-round bordered black-border mr-2 mr-lg-3 mb-2\">Blog Content</a>
                        </div>
                    </div>
                    <div class=\"col-xl-8\">
                        <p>One of the top boutique addiction recovery centers in the Newport Beach and Long beach areas. We gave them a fresh brand redesign to go with an expansive new SEO-driven website and multi-platform marketing campaign, aimed specifically at increasing out-of-state leads.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"main bg-black\">
        <section class=\"logo-section projects-section bg-white section-padding-x d-flex align-items-center color-change\">
            <div class=\"cut-bg-div section-padding-y-smaller\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-10 text-center\">
                            <div class=\"o-de-rose-logo mb-5 mx-auto\">
                                <img src=\"{{ 'case-studies/gratitude-lodge/gl-logo.png'|media }}\" class=\"mb-lg-5 w-100\" alt=\"\">
                            </div>
                            <div class=\"tags mb-3 mb-lg-4 project-wrapper\">
                                <h4 class=\"project-title mb-3 mb-xl-4 text-black\">Logo & Branding</h4>
                            </div>
                        </div>
                        <div class=\"col-xl-8 text-center mb-5\">
                            <div class=\"mb-xl-5\">
                                <p>The first step in our brand overhaul for Gratitude Lodge was a new logo and color scheme that aligned with the core of their brand story. In creating their brand kit, we focused on the sense of compassion and community that they instill in their residents and the gorgeous, sunny surroundings of Southern California.</p>
                            </div>
                        </div>
                        <div class=\"col-12 d-flex justify-content-center brand-colors\">
                            <div class=\"mr-3 text-center\">
                                <img src=\"{{ 'case-studies/gratitude-lodge/color-1.png'|media }}\" class=\"mb-2 d-block\" alt=\"\">
                                <span>#f3e604</span>
                            </div>
                            <div class=\"text-center\">
                                <img src=\"{{ 'case-studies/gratitude-lodge/color-2.png'|media }}\" class=\"mb-2 d-block\" alt=\"\">
                                <span>#1889ff</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"gl-firm-section section-padding-x bg-white\">
            <div class=\"cut-bg-div py-100\">
                <div class=\"container-fluid\">
                    <img src=\"{{ 'case-studies/gratitude-lodge/gl-firm-img.jpg'|media }}\" class=\"w-100\" alt=\"\">
                </div>
            </div>
        </section>
        <section class=\"typography-section bg-blue-gl section-padding-x d-flex align-items-center color-change-1\">
            <div class=\"cut-bg-div section-padding-y-smaller\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-10 text-center\">
                            <div class=\"tags mb-3 mb-lg-4\">
                                <h3 class=\"section-title mb-3 mb-xl-4 text-white\">Typography</h3>
                            </div>
                        </div>
                        <div class=\"col-xl-7 text-center mb-5\">
                            <div class=\"mb-xl-5 text-white\">
                                <p>To complement their new branding, we curated a selection of fonts for Gratitude Lodge that spoke to their consummate professionalism as recovery experts, while maintaining a light, airy feel that echoes their seaside location and focus on outdoor activities.</p>
                            </div>
                        </div>
                        <div class=\"col-xl-8 text-center mb-5\">
                            <div class=\"row\">
                                <div class=\"col-12 text-center mb-5\">
                                    <h3 class=\"h1 font-family-montserrat font-weight-900 text-white text-uppercase fonts-title\">Montserrat</h3>
                                    <span class=\"text-white fonts-subtitle\">Black</span>
                                </div>
                                <div class=\"col-12 text-center mb-5\">
                                    <h3 class=\"h1 font-family-montserrat font-weight-700 text-white fonts-title\">Montserrat</h3>
                                    <span class=\"text-white fonts-subtitle\">Bold</span>
                                </div>
                                <div class=\"col-12 text-center\">
                                    <h3 class=\"h1 text-white fonts-title font-weight-400\">Poppins</h3>
                                    <span class=\"text-white fonts-subtitle\">Regular</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"cards-section card-sc-gl projects-section bg-white section-padding-x position-relative\">
            <div class=\"pt-5 bg-yellow-asset\"></div>
            <div class=\"cut-bg-div py-100 pb-0 pb-lg-5\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center mb-5\">
                        <div class=\"col-md-9 col-xl-7 project-wrapper mb-100 text-center\">
                            <h4 class=\"section-title mb-3 mb-xl-4\">Printed Materials</h4>
                            <p>As part of their rebrand, Gratitude Lodge needed a full selection of new printed materials to distribute to partners in the area that make up a major segment of their lead generation.</p>
                        </div>
                    </div>
                    <div class=\"row mb-5\">
                        <div class=\"col-md-9 col-xl-5 project-wrapper mb-4 mb-lg-0\">
                            <h4 class=\"project-title mb-3 mb-xl-4\">Business Cards</h4>
                        </div>
                    </div>
                </div>
                <div class=\"web-design-img\">
                    <img src=\"{{ 'case-studies/gratitude-lodge/cards.png'|media }}\" class=\"w-100\" alt=\"\">
                </div>
            </div>
        </section>
        <section class=\"brochures-section-gl projects-section bg-white section-padding-x\">
            <div class=\"cut-bg-div section-padding-y\">
                <div class=\"section-padding-y-smaller pt-5 pt-xl-0 d-none d-lg-block\"></div>
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-end align-items-center\">
                        <div class=\"col-lg-5 col-xxl-4 project-wrapper text-center text-lg-right\">
                            <h4 class=\"project-title mb-3 mb-xl-5\">Brochures</h4>
                        </div>
                    </div>
                </div>
                <div class=\"section-padding-y-smaller pb-5 pb-xl-0 d-none d-lg-block\"></div>
                <img src=\"{{ 'case-studies/gratitude-lodge/brochures-bg.png'|media }}\" alt=\"\" class=\"brochures-img d-none d-lg-block\">
                <img src=\"{{ 'case-studies/gratitude-lodge/brochures-bg-mobile.png'|media }}\" alt=\"\" class=\"brochures-img-mobile w-100 d-lg-none\">
            </div>
        </section>
        <section class=\"social-media-gl-section projects-section section-padding-x bg-000 color-change-2\">
            <div class=\"cut-bg-div section-padding-y-smaller pb-0\">
                <div class=\"container-fluid px-3 px-lg-5\">
                    <div class=\"row px-md-5 align-items-center\">
                        <div class=\"col-md-6 col-lg-4 \">
                            <h3 class=\"section-title mb-3 mb-lg-4 text-white\">Content <br>Creation</h3>
                            <p class=\"\">Strong, engaging content was integral to both our marketing and SEO strategies for gratitude Lodge. Our content team created a range of ad, social, and blog content that captured the brand’s story of compassion and community and broadcast it to the world, all with a focus on driving leads and establishing them online as experts in their field.</p>
                        </div>
                        <div class=\"col-md-6 col-lg-8 position-relative px-0\">
                            <div class=\"social-images-gl\">
                                <img src=\"{{ 'case-studies/gratitude-lodge/social-media-img-left.png'|media }}\" class=\"w-100 social-image-left\" alt=\"\">
                                <img src=\"{{ 'case-studies/gratitude-lodge/social-media-img-middle.png'|media }}\" class=\"w-100 social-image-middle\" alt=\"\">
                                <img src=\"{{ 'case-studies/gratitude-lodge/social-media-img-right.png'|media }}\" class=\"w-100 social-image-right\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"web-design-gl-section projects-section section-padding-x bg-000 color-change-3\">
            <div class=\"cut-bg-div\">
                <div class=\"container-fluid px-3 px-lg-5\">
                    <div class=\"row px-md-5 align-items-center justify-coontent-md-between\">
                        <div class=\"col-md-6 position-relative px-0 order-1 order-md-0\">
                            <div class=\"web-design-images-gl position-relative\">
                                <img src=\"{{ 'case-studies/gratitude-lodge/web-design-1.png'|media }}\" class=\"w-100 web-design-img-gl-1\" alt=\"\">
                                <img src=\"{{ 'case-studies/gratitude-lodge/web-design-2.png'|media }}\" class=\"w-100 web-design-img-gl web-design-img-gl-2\" alt=\"\">
                                <img src=\"{{ 'case-studies/gratitude-lodge/web-design-3.png'|media }}\" class=\"w-100 web-design-img-gl web-design-img-gl-3\" alt=\"\">
                                <img src=\"{{ 'case-studies/gratitude-lodge/web-design-4.png'|media }}\" class=\"w-100 web-design-img-gl web-design-img-gl-4\" alt=\"\">
                                <img src=\"{{ 'case-studies/gratitude-lodge/web-design-5.png'|media }}\" class=\"w-100 web-design-img-gl web-design-img-gl-5\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-xl-5 project-wrapper pb-md-5 pb-xl-0\">
                            <div class=\"mb-5\">
                                <h4 class=\"project-title mb-3 mb-xl-4 text-white\">Web Design & Development</h4>
                                <div class=\"mb-4 mb-xl-5\">
                                    <p>The foundation of our strategy for Gratitude Lodge depended on a website that was both user-friendly, conversion-focused, and fully optimized for SEO. We created a custom-built site that both communicated their mission and brand story to those searching for addiction treatment, while also serving as a valuable informational resource on the subject of addiction.</p>
                                </div>
                                <a href=\"#\" class=\"btn btn-round white btn-dark-bg\">View Website</a>
                            </div>
                            <div class=\"d-none d-xxl-block pb-0 pt-xxl-4 pt-xxxl-5 pb-xxxl-5\">
                                
                            </div>
                            <div class=\"mb-5\">
                                <h4 class=\"project-title mb-3 mb-xl-4 text-white\">Responsive Design</h4>
                                <p class=\"\">With a majority of users connecting with websites via their phones and tablets, creating a site that delivered the same experience on any platform was essential for us when designing the new Gratitude Lodge website. Our design team worked in a mobile-first, responsive approach to ensure that Gratitude Lodge’s story was never interrupted by annoying user experiences.</p>
                            </div>
                            <div class=\"d-none d-md-block pt-5\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"projects-section position-relative bg-white color-change-8\" data-scroll data-scroll-repeat>
            <div class=\"tell-us-section scrollStart position-relative section-padding-x z-index-10 d-none d-xl-block bg-000\" data-scroll>
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
</div>", "/home/moolaymedia/public_html/themes/demo/pages/gratitude-lodge.htm", "");
    }
}
