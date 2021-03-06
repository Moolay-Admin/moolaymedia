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

/* /home/moolaymedia/public_html/themes/demo/pages/services.htm */
class __TwigTemplate_34cda39ef9abe7a816e1b2d2c15d1c4462ef61e1ebcf168da428e49db96ab15e extends \Twig\Template
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
    footer {
        width: 100%!important;    
    }
    .section-lines:after {
        z-index: 9;    
    }
    html, body {
        width: 100vw!important;
        height: 100vh!important;
    }
    header.offset {
        background-color: transparent!important;
        box-shadow: none!important;
    }
    
    @media screen and (max-width: 1199px) {
        footer {
            padding-top: 65px;    
        }   
        footer .footer-logo{
            display: none!important;    
        }    
        .scrollable-mobile {
            overflow-y: scroll;    
        }
    }
</style>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 31
        echo "<div id=\"pagepiling\">
    <section class=\"section page-pilling-section section-padding-x d-flex align-items-center cta-section bg-white section-lines background-dark\" style=\"background-image: url('";
        // line 32
        echo $this->extensions['System\Twig\Extension']->mediaFilter("services/branding-bg.jpg");
        echo "');\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-11 col-lg-6\">
                    <h3 class=\"section-title text-white mb-4 has-animation fadeInUp\" animation-delay=\".2\">Branding</h3>
                    <div class=\"mb-4 mb-md-5 text-white has-animation fadeInUp\" animation-delay=\".6\">
                        <p>Your brand is more than just a logo. It’s the beginning of your story. We create brands that capture the essence of your business and the attention of your customers. From logo updates to full brand kits, we’ll get your story started.</p>
                    </div>
                    <a href=\"\" class=\"learn-more-effect btn btn-round bordered white has-animation fadeInUp\" animation-delay=\"1\">Learn More</a>
                </div>
            </div>
        </div>
        <div class=\"part-small-wrapper\">
            <div class=\"x-close d-xl-none\">
                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"arrow-pull\">
                <div class=\"learn-more-text d-none d-xl-block text-uppercase\">
                    <span>Learn More</span>
                </div>
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"part-small part-small-right d-flex align-items-center align-self-stretch py-100 bg-part-small shadow-lg section-padding-x pl-lg-5\">
                <div class=\"container-fluid pl-lg-0\">
                    <ul class=\"list-unstyled row mb-0\">
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">01</span>
                                <h3 class=\"h4 text-white mb-0 title\">Logo Design</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Start your brand journey with a logo that instantly communicates what you’re all about.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">02</span>
                                <h3 class=\"h4 text-white mb-0 title\">Typography</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">It’s not what you say. It’s how you say it. Get the perfect font package to communicate your brand to the world.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">03</span>
                                <h3 class=\"h4 text-white mb-0 title\">Brand Kit Creation</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">As your business grows, it’s important to have a complete brand kit to guide your design decisions.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">04</span>
                                <h3 class=\"h4 text-white mb-0 title\">Communication Kits</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Craft on-brand content effortlessly with the guidance of a communication kit to roadmap your brand’s journey.</p>
                            </div>
                        </li>
                        <li class=\"col-sm-6 col-lg-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">05</span>
                                <h3 class=\"h4 text-white mb-0 title\">Brand Strategy Consulting</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Build your brand confidently with data-driven strategy and a consistent communication narrative.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=\"section page-pilling-section section-padding-x d-flex align-items-center cta-section bg-white section-lines background-dark\" style=\"background-image: url('";
        // line 107
        echo $this->extensions['System\Twig\Extension']->mediaFilter("services/web-design-bg.jpg");
        echo "');\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-11 col-lg-6\">
                    <h3 class=\"section-title text-white mb-4 has-animation fadeInUp\" animation-delay=\".2\">Web <br> Design</h3>
                    <div class=\"mb-4 mb-md-5 text-white has-animation fadeInUp\" animation-delay=\".6\">
                        <p>The experience your customers have on your website will define your relationship. That’s why user experience is at the heart of every website we build. Mobile-first, future-forward design delivers sleek websites that spark engagement and drive sales.</p>
                    </div>
                    <a href=\"\" class=\"learn-more-effect btn btn-round bordered white has-animation fadeInUp\" animation-delay=\"1\">Learn More</a>
                </div>
            </div>
        </div>
        <div class=\"part-small-wrapper\">
            <div class=\"x-close d-xl-none\">
                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"arrow-pull\">
                <div class=\"learn-more-text d-none d-xl-block text-uppercase\">
                    <span>Learn More</span>
                </div>
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"part-small part-small-right d-flex align-items-center align-self-stretch py-100 bg-part-small shadow-lg section-padding-x pl-lg-5\">
                <div class=\"container-fluid pl-lg-0\">
                    <ul class=\"list-unstyled row mb-0\">
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">01</span>
                                <h3 class=\"h4 text-white mb-0 title\">Custom Built</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">We build sites from the ground up so that nothing gets between us and executing your vision exactly.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">02</span>
                                <h3 class=\"h4 text-white mb-0 title\">Mobile-First Design</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">By starting with mobile in mind, we deliver a seamless experience no matter what device your users are on.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">03</span>
                                <h3 class=\"h4 text-white mb-0 title\">User-Experience Driven</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">The best UX design, you don’t even notice. Our sites let users move effortlessly from new visitor to sale.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">04</span>
                                <h3 class=\"h4 text-white mb-0 title\">Pixel-Perfect Development</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">When it comes to our designs, what you see is what you get. Our developers execute the design you approved down to the pixel.</p>
                            </div>
                        </li>
                        <li class=\"col-sm-6 col-lg-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">05</span>
                                <h3 class=\"h4 text-white mb-0 title\">Landing Page Design</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">We also offer sleek, sales-focused landing pages to integrate with your marketing strategy and drive traffic to your site.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=\"section page-pilling-section cc-section section-padding-x d-flex align-items-center cta-section bg-white section-lines\" style=\"background-image: url('";
        // line 182
        echo $this->extensions['System\Twig\Extension']->mediaFilter("services/content-creation-bg.jpg");
        echo "');\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-11 col-lg-6\">
                    <h3 class=\"section-title text-black mb-4 has-animation fadeInUp\" animation-delay=\".2\">Content <br> Creation</h3>
                    <div class=\"mb-4 mb-md-5 text-black has-animation fadeInUp\" animation-delay=\".6\">
                        <p>How do you tell a story without words? Content is the lifeblood of your brand’s narrative. The words that come together to write your story. We create multimedia content that connects with your audience and keeps them listening for when it counts.</p>
                    </div>
                    <a href=\"\" class=\"learn-more-effect btn btn-round bordered black-border has-animation fadeInUp\" animation-delay=\"1\">Learn More</a>
                </div>
            </div>
        </div>
        <div class=\"part-small-wrapper\">
            <div class=\"x-close d-xl-none\">
                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"arrow-pull\">
                <div class=\"learn-more-text d-none d-xl-block text-uppercase\">
                    <span>Learn More</span>
                </div>
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"part-small part-small-right d-flex align-items-center align-self-stretch py-100 bg-part-small shadow-lg section-padding-x pl-lg-5\">
                <div class=\"container-fluid pl-lg-0\">
                    <ul class=\"list-unstyled row mb-0\">
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">01</span>
                                <h3 class=\"h4 text-white mb-0 title\">Blog Articles</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Our content writing team are specialists in capturing brand voices and weaving them into unforgettable stories.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">02</span>
                                <h3 class=\"h4 text-white mb-0 title\">Social Media Posts</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Good social content means grabbing attention fast. Our design and content teams deliver social posts that stand out from the crowd.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">03</span>
                                <h3 class=\"h4 text-white mb-0 title\">Video Content</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">If a picture says a thousand words, then video is a novel. We create video content that connects with your audience.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">04</span>
                                <h3 class=\"h4 text-white mb-0 title\">Ad Content</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">From banner ads that you can’t help but click on, to Facebook ads that cut through the newsfeed, we do it all. </p>
                            </div>
                        </li>
                        <li class=\"col-sm-6 col-lg-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">05</span>
                                <h3 class=\"h4 text-white mb-0 title\">Webpage Copy</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">How do you balance being informative and engaging? Succinct but sufficient? That’s where we come in, with web copy that dances off the page</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=\"section page-pilling-section section-padding-x d-flex align-items-center cta-section bg-white section-lines background-dark\" style=\"background-image: url('";
        // line 257
        echo $this->extensions['System\Twig\Extension']->mediaFilter("services/marketing-bg.jpg");
        echo "');\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-11 col-lg-6\">
                    <h3 class=\"section-title text-white mb-4 has-animation fadeInUp\" animation-delay=\".2\">Marketing</h3>
                    <div class=\"mb-4 mb-md-5 text-white has-animation fadeInUp\" animation-delay=\".6\">
                        <p>We don’t just create adverts for our clients. We create full-service digital campaigns that integrate cohesive strategies with dazzling content. When we tell your story, we don’t just tell it – we shout it from the rooftops!</p>
                    </div>
                    <a href=\"\" class=\"learn-more-effect btn btn-round bordered white has-animation fadeInUp\" animation-delay=\"1\">Learn More</a>
                </div>
            </div>
        </div>
        <div class=\"part-small-wrapper\">
            <div class=\"x-close d-xl-none\">
                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"arrow-pull\">
                <div class=\"learn-more-text text-white d-none d-xl-block text-uppercase\">
                    <span>Learn More</span>
                </div>
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"part-small part-small-right d-flex align-items-center align-self-stretch py-100 bg-part-small shadow-lg section-padding-x pl-lg-5\">
                <div class=\"container-fluid pl-lg-0\">
                    <ul class=\"list-unstyled row mb-0\">
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">01</span>
                                <h3 class=\"h4 text-white mb-0 title\">Marketing Strategy</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Content is meaningless without direction. We start by identifying your goals and defining a clear strategy for communicating your brand’s narrative</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">02</span>
                                <h3 class=\"h4 text-white mb-0 title\">Media Buying</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Marketing ROI is all about knowing where and when to spend your money. Our media buying team specializes in finding the niches that deliver for your brand.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">03</span>
                                <h3 class=\"h4 text-white mb-0 title\">SEO Strategy</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Staying ahead of the SERP algorithm is a constant dance. We leverage every tool at our disposal to get you ranking where it matters.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">04</span>
                                <h3 class=\"h4 text-white mb-0 title\">Email Marketing</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">With some of the best ROI in the industry, email is essential. Through accurate targeting and flawless content, we make emails that convert.</p>
                            </div>
                        </li>
                        <li class=\"col-sm-6 col-lg-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">05</span>
                                <h3 class=\"h4 text-white mb-0 title\">Print Marketing</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">For certain demographics, there is still nothing better than print. Our design team delivers gorgeous print materials that make your brand tangible.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=\"section projects-section page-pilling-section section-padding-x d-flex align-items-center cta-section section-lines background-dark bg-000\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-11 col-lg-6 project-wrapper\">
                    <img src=\"";
        // line 336
        echo $this->extensions['System\Twig\Extension']->mediaFilter("services/full-service-asset-2.png");
        echo "\" class=\"our-passion mb-4 has-animation fadeInUp\"animation-delay=\".2\" alt=\"Full-Service digital marketing\">
                    <h3 class=\"section-title text-white mb-4 has-animation fadeInUp\" animation-delay=\".2\">Digital Marketing</h3>
                    <div class=\"mb-4 mb-md-5 text-white has-animation fadeInUp\" animation-delay=\".6\">
                        <p>Being competitive today means having your story everywhere. That’s why we provide full service digital marketing for our clients. We believe that to tell your story, we have to be able to take it from concept to campaign and beyond. From high-impact brand design to marketing campaigns that turn browsers into customers, we put your brand’s story where it needs to be.</p>
                    </div>
                    <a href=\"";
        // line 341
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-round bordered white has-animation fadeInUp\" animation-delay=\"1\">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 346
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 347
        echo "</div>
";
        // line 348
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 349
        echo "<script>
/*    \$(document).ready(function() {
    \t\$('#fullpage').fullpage({
    \t\t//options here
    \t\tautoScrolling:true,
    \t\tscrollHorizontally: true
    \t});
    });*/
    \$(document).ready(function() {
        
        if (\$(window).width() > 1200) {
            \$('.menu-button').click(function(){
\t\t
        \t\tvar \$this = \$( this );
        \t\t
        \t\tif (\$this.hasClass('active')){
        \t\t\t\$('#menu-container').removeClass('active');
        \t\t} else{
        \t\t\t\$('#menu-container').addClass('active');
        \t\t};
        \t\t\$this.toggleClass('active');
        \t});
        }
        
        \$('#pagepiling').pagepiling({
            direction: 'vertical',
            loopBottom: false,
            css3: true,
            navigation: {
                textColor: '#000',
                position: 'right'
            },
           \tnormalScrollElements: '.part-small-wrapper',
            normalScrollElementTouchThreshold: 20,
            touchSensitivity: 2,
            keyboardScrolling: false,
            sectionSelector: '.section',
            animateAnchor: false,
        });
        if (\$('.pp-section.active').hasClass('background-dark')) {
                \$(\"body\").addClass(\"white-menu\");
            } else {
                \$(\"body\").removeClass(\"white-menu\");    
        }
        
        \$('.pp-section.active').find('.has-animation').addClass('is-inview');
        \$('.pp-section.active').siblings().find('.has-animation').removeClass('is-inview');
            
    \t\$('.arrow-pull').click(function(){
    \t\t
    \t\tvar \$this = \$( this );
    \t\t
    \t\tif (\$this.parent().hasClass('active')){
    \t\t\t\$this.parent().removeClass('active');
    \t\t} else{
    \t\t\t\$this.parent().addClass('active');
    \t\t};
    \t\t\$this.toggleClass('active');
    \t});
    \t\$('.learn-more-effect').click(function(e){
    \t\te.preventDefault();
    \t\tvar \$this = \$( this );
    \t\t
    \t\tif (\$this.parents('.page-pilling-section').find('.part-small-wrapper').hasClass('active')){
    \t\t\t\$this.parents('.page-pilling-section').find('.part-small-wrapper').removeClass('active');
    \t\t} else{
    \t\t\t\$this.parents('.page-pilling-section').find('.part-small-wrapper').addClass('active');
    \t\t};
    \t\t\$this.toggleClass('active');
    \t});
    \t\$('.x-close').click(function(){
    \t\t
    \t\tvar \$this = \$( this );
    \t\t
    \t\tif (\$this.parent().hasClass('active')){
    \t\t\t\$this.parent().removeClass('active');
    \t\t}
    \t});
    \t\$('.pp-section.active').click(function(e) {
    \t    if (\$(e.target).is('.part-small-wrapper.active')) {
                \$('.part-small-wrapper.active').removeClass('active');
            }       
    \t});
    \t\$(document).click(function(event) {
          //if you click on anything except the modal itself or the \"open modal\" link, close the modal
          if (!\$(event.target).closest(\".part-small-wrapper.active\").length) {
            \$(\"body\").find(\".part-small-wrapper.active\").removeClass(\"active\");
          }
        });
    })
</script>
";
        // line 348
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/moolaymedia/public_html/themes/demo/pages/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 348,  415 => 349,  413 => 348,  410 => 347,  406 => 346,  398 => 341,  390 => 336,  308 => 257,  230 => 182,  152 => 107,  74 => 32,  71 => 31,  69 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put styles %}
<style>
    footer {
        width: 100%!important;    
    }
    .section-lines:after {
        z-index: 9;    
    }
    html, body {
        width: 100vw!important;
        height: 100vh!important;
    }
    header.offset {
        background-color: transparent!important;
        box-shadow: none!important;
    }
    
    @media screen and (max-width: 1199px) {
        footer {
            padding-top: 65px;    
        }   
        footer .footer-logo{
            display: none!important;    
        }    
        .scrollable-mobile {
            overflow-y: scroll;    
        }
    }
</style>
{% endput %}
<div id=\"pagepiling\">
    <section class=\"section page-pilling-section section-padding-x d-flex align-items-center cta-section bg-white section-lines background-dark\" style=\"background-image: url('{{ 'services/branding-bg.jpg'|media }}');\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-11 col-lg-6\">
                    <h3 class=\"section-title text-white mb-4 has-animation fadeInUp\" animation-delay=\".2\">Branding</h3>
                    <div class=\"mb-4 mb-md-5 text-white has-animation fadeInUp\" animation-delay=\".6\">
                        <p>Your brand is more than just a logo. It’s the beginning of your story. We create brands that capture the essence of your business and the attention of your customers. From logo updates to full brand kits, we’ll get your story started.</p>
                    </div>
                    <a href=\"\" class=\"learn-more-effect btn btn-round bordered white has-animation fadeInUp\" animation-delay=\"1\">Learn More</a>
                </div>
            </div>
        </div>
        <div class=\"part-small-wrapper\">
            <div class=\"x-close d-xl-none\">
                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"arrow-pull\">
                <div class=\"learn-more-text d-none d-xl-block text-uppercase\">
                    <span>Learn More</span>
                </div>
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"part-small part-small-right d-flex align-items-center align-self-stretch py-100 bg-part-small shadow-lg section-padding-x pl-lg-5\">
                <div class=\"container-fluid pl-lg-0\">
                    <ul class=\"list-unstyled row mb-0\">
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">01</span>
                                <h3 class=\"h4 text-white mb-0 title\">Logo Design</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Start your brand journey with a logo that instantly communicates what you’re all about.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">02</span>
                                <h3 class=\"h4 text-white mb-0 title\">Typography</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">It’s not what you say. It’s how you say it. Get the perfect font package to communicate your brand to the world.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">03</span>
                                <h3 class=\"h4 text-white mb-0 title\">Brand Kit Creation</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">As your business grows, it’s important to have a complete brand kit to guide your design decisions.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">04</span>
                                <h3 class=\"h4 text-white mb-0 title\">Communication Kits</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Craft on-brand content effortlessly with the guidance of a communication kit to roadmap your brand’s journey.</p>
                            </div>
                        </li>
                        <li class=\"col-sm-6 col-lg-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">05</span>
                                <h3 class=\"h4 text-white mb-0 title\">Brand Strategy Consulting</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Build your brand confidently with data-driven strategy and a consistent communication narrative.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=\"section page-pilling-section section-padding-x d-flex align-items-center cta-section bg-white section-lines background-dark\" style=\"background-image: url('{{ 'services/web-design-bg.jpg'|media }}');\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-11 col-lg-6\">
                    <h3 class=\"section-title text-white mb-4 has-animation fadeInUp\" animation-delay=\".2\">Web <br> Design</h3>
                    <div class=\"mb-4 mb-md-5 text-white has-animation fadeInUp\" animation-delay=\".6\">
                        <p>The experience your customers have on your website will define your relationship. That’s why user experience is at the heart of every website we build. Mobile-first, future-forward design delivers sleek websites that spark engagement and drive sales.</p>
                    </div>
                    <a href=\"\" class=\"learn-more-effect btn btn-round bordered white has-animation fadeInUp\" animation-delay=\"1\">Learn More</a>
                </div>
            </div>
        </div>
        <div class=\"part-small-wrapper\">
            <div class=\"x-close d-xl-none\">
                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"arrow-pull\">
                <div class=\"learn-more-text d-none d-xl-block text-uppercase\">
                    <span>Learn More</span>
                </div>
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"part-small part-small-right d-flex align-items-center align-self-stretch py-100 bg-part-small shadow-lg section-padding-x pl-lg-5\">
                <div class=\"container-fluid pl-lg-0\">
                    <ul class=\"list-unstyled row mb-0\">
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">01</span>
                                <h3 class=\"h4 text-white mb-0 title\">Custom Built</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">We build sites from the ground up so that nothing gets between us and executing your vision exactly.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">02</span>
                                <h3 class=\"h4 text-white mb-0 title\">Mobile-First Design</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">By starting with mobile in mind, we deliver a seamless experience no matter what device your users are on.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">03</span>
                                <h3 class=\"h4 text-white mb-0 title\">User-Experience Driven</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">The best UX design, you don’t even notice. Our sites let users move effortlessly from new visitor to sale.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">04</span>
                                <h3 class=\"h4 text-white mb-0 title\">Pixel-Perfect Development</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">When it comes to our designs, what you see is what you get. Our developers execute the design you approved down to the pixel.</p>
                            </div>
                        </li>
                        <li class=\"col-sm-6 col-lg-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">05</span>
                                <h3 class=\"h4 text-white mb-0 title\">Landing Page Design</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">We also offer sleek, sales-focused landing pages to integrate with your marketing strategy and drive traffic to your site.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=\"section page-pilling-section cc-section section-padding-x d-flex align-items-center cta-section bg-white section-lines\" style=\"background-image: url('{{ 'services/content-creation-bg.jpg'|media }}');\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-11 col-lg-6\">
                    <h3 class=\"section-title text-black mb-4 has-animation fadeInUp\" animation-delay=\".2\">Content <br> Creation</h3>
                    <div class=\"mb-4 mb-md-5 text-black has-animation fadeInUp\" animation-delay=\".6\">
                        <p>How do you tell a story without words? Content is the lifeblood of your brand’s narrative. The words that come together to write your story. We create multimedia content that connects with your audience and keeps them listening for when it counts.</p>
                    </div>
                    <a href=\"\" class=\"learn-more-effect btn btn-round bordered black-border has-animation fadeInUp\" animation-delay=\"1\">Learn More</a>
                </div>
            </div>
        </div>
        <div class=\"part-small-wrapper\">
            <div class=\"x-close d-xl-none\">
                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"arrow-pull\">
                <div class=\"learn-more-text d-none d-xl-block text-uppercase\">
                    <span>Learn More</span>
                </div>
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"part-small part-small-right d-flex align-items-center align-self-stretch py-100 bg-part-small shadow-lg section-padding-x pl-lg-5\">
                <div class=\"container-fluid pl-lg-0\">
                    <ul class=\"list-unstyled row mb-0\">
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">01</span>
                                <h3 class=\"h4 text-white mb-0 title\">Blog Articles</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Our content writing team are specialists in capturing brand voices and weaving them into unforgettable stories.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">02</span>
                                <h3 class=\"h4 text-white mb-0 title\">Social Media Posts</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Good social content means grabbing attention fast. Our design and content teams deliver social posts that stand out from the crowd.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">03</span>
                                <h3 class=\"h4 text-white mb-0 title\">Video Content</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">If a picture says a thousand words, then video is a novel. We create video content that connects with your audience.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">04</span>
                                <h3 class=\"h4 text-white mb-0 title\">Ad Content</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">From banner ads that you can’t help but click on, to Facebook ads that cut through the newsfeed, we do it all. </p>
                            </div>
                        </li>
                        <li class=\"col-sm-6 col-lg-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">05</span>
                                <h3 class=\"h4 text-white mb-0 title\">Webpage Copy</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">How do you balance being informative and engaging? Succinct but sufficient? That’s where we come in, with web copy that dances off the page</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=\"section page-pilling-section section-padding-x d-flex align-items-center cta-section bg-white section-lines background-dark\" style=\"background-image: url('{{ 'services/marketing-bg.jpg'|media }}');\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-11 col-lg-6\">
                    <h3 class=\"section-title text-white mb-4 has-animation fadeInUp\" animation-delay=\".2\">Marketing</h3>
                    <div class=\"mb-4 mb-md-5 text-white has-animation fadeInUp\" animation-delay=\".6\">
                        <p>We don’t just create adverts for our clients. We create full-service digital campaigns that integrate cohesive strategies with dazzling content. When we tell your story, we don’t just tell it – we shout it from the rooftops!</p>
                    </div>
                    <a href=\"\" class=\"learn-more-effect btn btn-round bordered white has-animation fadeInUp\" animation-delay=\"1\">Learn More</a>
                </div>
            </div>
        </div>
        <div class=\"part-small-wrapper\">
            <div class=\"x-close d-xl-none\">
                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"arrow-pull\">
                <div class=\"learn-more-text text-white d-none d-xl-block text-uppercase\">
                    <span>Learn More</span>
                </div>
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"part-small part-small-right d-flex align-items-center align-self-stretch py-100 bg-part-small shadow-lg section-padding-x pl-lg-5\">
                <div class=\"container-fluid pl-lg-0\">
                    <ul class=\"list-unstyled row mb-0\">
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">01</span>
                                <h3 class=\"h4 text-white mb-0 title\">Marketing Strategy</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Content is meaningless without direction. We start by identifying your goals and defining a clear strategy for communicating your brand’s narrative</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">02</span>
                                <h3 class=\"h4 text-white mb-0 title\">Media Buying</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Marketing ROI is all about knowing where and when to spend your money. Our media buying team specializes in finding the niches that deliver for your brand.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">03</span>
                                <h3 class=\"h4 text-white mb-0 title\">SEO Strategy</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">Staying ahead of the SERP algorithm is a constant dance. We leverage every tool at our disposal to get you ranking where it matters.</p>
                            </div>
                        </li>
                        <li class=\"mb-4 mb-xxxl-5 col-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">04</span>
                                <h3 class=\"h4 text-white mb-0 title\">Email Marketing</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">With some of the best ROI in the industry, email is essential. Through accurate targeting and flawless content, we make emails that convert.</p>
                            </div>
                        </li>
                        <li class=\"col-sm-6 col-lg-12\">
                            <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                                <span class=\"h1 number mr-3 mb-0\">05</span>
                                <h3 class=\"h4 text-white mb-0 title\">Print Marketing</h3>
                            </div>
                            <div class=\"description\">
                                <p class=\"mb-0\">For certain demographics, there is still nothing better than print. Our design team delivers gorgeous print materials that make your brand tangible.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=\"section projects-section page-pilling-section section-padding-x d-flex align-items-center cta-section section-lines background-dark bg-000\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-11 col-lg-6 project-wrapper\">
                    <img src=\"{{ 'services/full-service-asset-2.png'|media }}\" class=\"our-passion mb-4 has-animation fadeInUp\"animation-delay=\".2\" alt=\"Full-Service digital marketing\">
                    <h3 class=\"section-title text-white mb-4 has-animation fadeInUp\" animation-delay=\".2\">Digital Marketing</h3>
                    <div class=\"mb-4 mb-md-5 text-white has-animation fadeInUp\" animation-delay=\".6\">
                        <p>Being competitive today means having your story everywhere. That’s why we provide full service digital marketing for our clients. We believe that to tell your story, we have to be able to take it from concept to campaign and beyond. From high-impact brand design to marketing campaigns that turn browsers into customers, we put your brand’s story where it needs to be.</p>
                    </div>
                    <a href=\"{{ 'contact'|page }}\" class=\"btn btn-round bordered white has-animation fadeInUp\" animation-delay=\"1\">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    {% partial 'site/footer' %}
</div>
{% put scripts %}
<script>
/*    \$(document).ready(function() {
    \t\$('#fullpage').fullpage({
    \t\t//options here
    \t\tautoScrolling:true,
    \t\tscrollHorizontally: true
    \t});
    });*/
    \$(document).ready(function() {
        
        if (\$(window).width() > 1200) {
            \$('.menu-button').click(function(){
\t\t
        \t\tvar \$this = \$( this );
        \t\t
        \t\tif (\$this.hasClass('active')){
        \t\t\t\$('#menu-container').removeClass('active');
        \t\t} else{
        \t\t\t\$('#menu-container').addClass('active');
        \t\t};
        \t\t\$this.toggleClass('active');
        \t});
        }
        
        \$('#pagepiling').pagepiling({
            direction: 'vertical',
            loopBottom: false,
            css3: true,
            navigation: {
                textColor: '#000',
                position: 'right'
            },
           \tnormalScrollElements: '.part-small-wrapper',
            normalScrollElementTouchThreshold: 20,
            touchSensitivity: 2,
            keyboardScrolling: false,
            sectionSelector: '.section',
            animateAnchor: false,
        });
        if (\$('.pp-section.active').hasClass('background-dark')) {
                \$(\"body\").addClass(\"white-menu\");
            } else {
                \$(\"body\").removeClass(\"white-menu\");    
        }
        
        \$('.pp-section.active').find('.has-animation').addClass('is-inview');
        \$('.pp-section.active').siblings().find('.has-animation').removeClass('is-inview');
            
    \t\$('.arrow-pull').click(function(){
    \t\t
    \t\tvar \$this = \$( this );
    \t\t
    \t\tif (\$this.parent().hasClass('active')){
    \t\t\t\$this.parent().removeClass('active');
    \t\t} else{
    \t\t\t\$this.parent().addClass('active');
    \t\t};
    \t\t\$this.toggleClass('active');
    \t});
    \t\$('.learn-more-effect').click(function(e){
    \t\te.preventDefault();
    \t\tvar \$this = \$( this );
    \t\t
    \t\tif (\$this.parents('.page-pilling-section').find('.part-small-wrapper').hasClass('active')){
    \t\t\t\$this.parents('.page-pilling-section').find('.part-small-wrapper').removeClass('active');
    \t\t} else{
    \t\t\t\$this.parents('.page-pilling-section').find('.part-small-wrapper').addClass('active');
    \t\t};
    \t\t\$this.toggleClass('active');
    \t});
    \t\$('.x-close').click(function(){
    \t\t
    \t\tvar \$this = \$( this );
    \t\t
    \t\tif (\$this.parent().hasClass('active')){
    \t\t\t\$this.parent().removeClass('active');
    \t\t}
    \t});
    \t\$('.pp-section.active').click(function(e) {
    \t    if (\$(e.target).is('.part-small-wrapper.active')) {
                \$('.part-small-wrapper.active').removeClass('active');
            }       
    \t});
    \t\$(document).click(function(event) {
          //if you click on anything except the modal itself or the \"open modal\" link, close the modal
          if (!\$(event.target).closest(\".part-small-wrapper.active\").length) {
            \$(\"body\").find(\".part-small-wrapper.active\").removeClass(\"active\");
          }
        });
    })
</script>
{% endput %}
{#<section class=\"hero-section bg-black section-padding-x d-flex align-items-center\">
    <div class=\"section-padding-y-smaller pb-100 pb-lg-0 w-100\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h5 class=\"subtitle\">A Place Where Ideas Grow</h5>
                    <h3 class=\"big-title mb-3 mb-lg-5 text-white\">What We Do</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"services-video-section bg-black section-padding-x d-flex align-items-center\">
    <div class=\"cut-bg-div section-padding-y-smaller\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"video-wrapper\">
                        <video placeholder=\"\" type=\"video/mp4\">
                          <source src=\"{{ 'video-placeholder.mp4'|media }}\" type=\"video/mp4\">
                          Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"services-asset-1\">
        <img src=\"{{ 'assets/img/services-asset-1.png'|theme }}\" alt=\"\" class=\"w-100\">
    </div>
</section>
<section class=\"creative-agency-section bg-black section-padding-x\">
    <div class=\"cut-bg-div section-padding-y-smaller\">
        <div class=\"container-fluid\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-9\">
                    <h5 clascol-11 s=\"subtitle\">Creative Agency</h5>
                    <h3 class=\"section-title text-white mb-3\">We are a deliverable driven agency</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <div class=\"col-lg-3 pl-lg-5 d-lg-flex justify-content-lg-end\">
                    <ul class=\"list-unstyled traits text-lg-center\">
                        <li class=\"h3\">Authenticity</li>
                        <li class=\"h3\">Simplicity</li>
                        <li class=\"h3\">Innovativity</li>
                        <li class=\"h3\">Creativity</li>
                        <li class=\"h3\">Ingenuity</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"cta-section bg-white section-padding-x d-flex align-items-center position-relative\">
     <div class=\"dots-asset\">
        {% partial 'dots-asset' %}
    </div>
    <div class=\"cut-bg-div section-padding-y-smaller w-100\">
        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-11 col-12 text-center\">
                    <h3 class=\"section-title mb-4\">Digital Expertise</h3>
                </div>
                <div class=\"col-lg-6 text-center\">
                    <p class=\"big-text\">The next generation of the advertising world.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"two-part-section left-border right-border digital-marketing-services-section bg-000 d-flex flex-column flex-lg-row align-items-center\">
    <div class=\"part-big part-big-left d-flex align-items-center align-self-stretch py-100 section-padding-x pr-lg-0\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"service-logo\">
                        {% partial 'services/advertising-services' %}
                    </dcol-11 iv>
                    <h3 class=\"section-title mb-3 mb-lg-5 text-white\">Digital Marketing</h3>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    <p class=\"mb-0\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    <a href=\"#\" class=\"btn btn-round blue btn-dark-bg mt-5\">View More</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"part-small part-small-right d-flex align-items-center align-self-stretch py-100 bg-part-small shadow-lg section-padding-x pl-lg-5\">
        <div class=\"container-fluid pl-lg-0\">
            <ul class=\"list-unstyled row mb-0\">
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">01</span>
                        <h3 class=\"h4 text-white mb-0 title\">Facebook ads campaigns</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">02</span>
                        <h3 class=\"h4 text-white mb-0 title\">Data Analytics</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">03</span>
                        <h3 class=\"h4 text-white mb-0 title\">Email Marketing</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">04</span>
                        <h3 class=\"h4 text-white mb-0 title\">Google Ads</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">05</span>
                        <h3 class=\"h4 text-white mb-0 title\">Seo</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">06</span>
                        <h3 class=\"h4 text-white mb-0 title\">Instagram Growth</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"col-sm-6 col-lg-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">07</span>
                        <h3 class=\"h4 text-white mb-0 title\">Targeted Advertising</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class=\"two-part-section left-border right-border content-services-section bg-white d-flex flex-column flex-lg-row align-items-center position-relative\">
    <div class=\"part-small part-small-left d-flex align-items-center align-self-stretch py-100 bg-white section-padding-x pr-lg-5 order-1 order-lg-0\">
        <div class=\"container-fluid pr-lg-0\">
            <ul class=\"list-unstyled row mb-0\">
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">01</span>
                        <h3 class=\"h4 mb-0 title\">Social Media <br>Content</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">02</span>
                        <h3 class=\"h4 mb-0 title\">Video and Animations</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">03</span>
                        <h3 class=\"h4 mb-0 title\">Product Shoots</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"col-sm-6 col-lg-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">04</span>
                        <h3 class=\"h4 mb-0 title\">Digital Graphic Visuals</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"part-big part-big-right d-flex align-items-center align-self-stretch py-100 section-padding-x pl-lg-0 order-0 order-lg-1\">
        <div class=\"asset-holder d-flex align-items-center h-100 shadow-left py-5 position-relative\">
            <div class=\"services-asset-2\">
                <img src=\"{{ 'assets/img/services-asset-2.png'|theme }}\" alt=\"\" class=\"w-100\">
            </div>  
            <div class=\"container-fluid py-lg-5\">
                <div class=\"row py-lg-5 justify-content-lg-end\">
                    <div class=\"col-12 text-lg-right\">
                        <div class=\"service-logo\">
                            {% partial 'services/content-creation' %}
                        </dcol-11 iv>
                        <h3 class=\"section-title mb-3 mb-lg-5\">Content Creation</h3>
                    </div>
                    <div class=\"col-lg-7 text-lg-right\">
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        <p class=\"mb-0\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        <a href=\"#\" class=\"btn btn-round pink btn-light-bg mt-5\">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"cta-section connected-creativity bg-white section-padding-x d-flex align-items-center position-relative\">
    <div class=\"dots-asset\">
        {% partial 'dots-asset' %}
    </div>
    <div class=\"cut-bg-div section-padding-y-smaller w-100\">
        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-11 col-12 text-center\">
                    <h3 class=\"section-title mb-4\">Connected Creativity</h3>
                </div>
                <div class=\"col-lg-6 text-center\">
                    <p class=\"big-text\">Working together, to create something unique.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"two-part-section left-border right-border web-design-services-section d-flex flex-column flex-lg-row align-items-center\">
    <div class=\"part-big part-big-left d-flex align-items-center align-self-stretch py-100 section-padding-x pr-lg-0\" style=\"background-image:url('{{ 'web-design-bg.jpg'|media }}');\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"service-logo\">
                        {% partial 'services/web-design' %}
                    </dcol-11 iv>
                    <h3 class=\"section-title mb-3 mb-lg-5 text-white\">Web Design</h3>
                    <div class=\"text-white\">
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        <p class=\"mb-0\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                    <a href=\"#\" class=\"btn btn-round blue btn-dark-bg mt-5\">View More</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"part-small part-small-right d-flex align-items-center align-self-stretch py-100 bg-part-small shadow-lg section-padding-x pl-lg-5\">
        <div class=\"container-fluid pl-lg-0\">
            <ul class=\"list-unstyled row mb-0\">
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">01</span>
                        <h3 class=\"h4 text-white mb-0 title\">Web and Apps</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">02</span>
                        <h3 class=\"h4 text-white mb-0 title\">Development</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">03</span>
                        <h3 class=\"h4 text-white mb-0 title\">Seo Optimization</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">04</span>
                        <h3 class=\"h4 text-white mb-0 title\">E-Commerce</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">05</span>
                        <h3 class=\"h4 text-white mb-0 title\">Responsive Website</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">06</span>
                        <h3 class=\"h4 text-white mb-0 title\">UX/UI Design</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"col-sm-6 col-lg-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">07</span>
                        <h3 class=\"h4 text-white mb-0 title\">Custom Websites</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class=\"two-part-section left-border right-border branding-services-section bg-white d-flex flex-column flex-lg-row align-items-center position-relative\">
    <div class=\"part-small part-small-left d-flex align-items-center align-self-stretch py-100 bg-white section-padding-x pr-lg-5 order-1 order-lg-0\">
        <div class=\"container-fluid pr-lg-0\">
            <ul class=\"list-unstyled row mb-0\">
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">01</span>
                        <h3 class=\"h4 mb-0 title\">Strategy</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">02</span>
                        <h3 class=\"h4 mb-0 title\">Brand Messaging Statements</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">03</span>
                        <h3 class=\"h4 mb-0 title\">Define Brand</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">04</span>
                        <h3 class=\"h4 mb-0 title\">Logo Design</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">05</span>
                        <h3 class=\"h4 mb-0 title\">Print and Packaging</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"mb-4 mb-xxxl-5 col-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">06</span>
                        <h3 class=\"h4 mb-0 title\">Landing Pages</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
                <li class=\"col-sm-6 col-lg-12\">
                    <div class=\"number-title d-flex align-items-center mb-2 mb-xl-3\">
                        <span class=\"h1 number mr-3 mb-0\">07</span>
                        <h3 class=\"h4 mb-0 title\">Mision & Vision Statements</h3>
                    </div>
                    <div class=\"description\">
                        <p class=\"mb-0\">People are at the core of every business. We believe in the value.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"part-big part-big-right d-flex align-items-center align-self-stretch py-100 section-padding-x pl-lg-0 order-0 order-lg-1\">
        <div class=\"d-flex align-items-center h-100 shadow-left py-200\">
            <div class=\"container-fluid py-lg-5\">
                <div class=\"row py-lg-5\">
                    <div class=\"col-12 text-lg-right\">
                        <div class=\"service-logo\">
                            {% partial 'services/branding' %}
                        </dcol-11 iv>
                        <h3 class=\"section-title mb-3 mb-lg-5\">Branding</h3>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        <p class=\"mb-0\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        <a href=\"#\" class=\"btn btn-round coral btn-light-bg mt-5\">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"get-quote-section bg-white services-contact-form section-padding-x d-flex align-items-center\">
    <div class=\"cut-bg-div section-padding-y-smaller\">
        <div class=\"container-fluid\">
            <div class=\"row align-items-center\">
                <div class=\"col-12\">
                    <h5 clascol-11 s=\"subtitle\">Let's Work Together</h5>
                    <h3 class=\"section-title mb-5\">Have a Project?</h3>
                </div>
                <div class=\"col-xxxl-8 mb-100\">
                    <form>
            \t\t\t<div class=\"row mb-5\">
            \t\t\t\t<div class=\"col-md-6 mb-4\">
            \t\t\t\t\t<div class=\"form-group\">
            \t\t\t\t\t    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Your Name\" tabindex=\"1\">
            \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"//name\"></small>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"col-md-6 mb-4\">
            \t\t\t\t\t<div class=\"form-group\">
            \t\t\t\t\t    <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"Your Email\" tabindex=\"2\">
            \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"email\"></small>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"col-md-6 mb-4\">
            \t\t\t\t\t<div class=\"form-group\">
            \t\t\t\t\t    <input type=\"text\" name=\"number\" class=\"form-control\" placeholder=\"Your Number\" tabindex=\"3\">
            \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"number\"></small>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"col-md-6 mb-4\">
            \t\t\t\t\t<div class=\"form-group\">
            \t\t\t\t\t    <input type=\"text\" name=\"interested_in\" class=\"form-control\" placeholder=\"Interested In\" tabindex=\"4\">
            \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"interested_in\"></small>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"col-12\">
            \t\t\t\t    <div class=\"form-group\">
            \t\t\t\t        <textarea placeholder=\"Details about Your Project\" rows=\"3\" name=\"details\" class=\"form-control\" tabindex=\"5\"></textarea>
            \t\t\t\t        <small class=\"text-danger\" data-validate-for=\"details\"></small>
            \t\t\t\t    </div>
            \t\t\t\t</div>
            \t\t\t</div>
            \t\t\t<button class=\"btn btn-round blue btn-light-bg\" type=\"submit\" tabindex=\"6\">Send</button>
\t\t\t\t\t</form>
                </div>
                <div class=\"col-lg-12\">
                    <h3 class=\"text-pink mb-5 text-uppercase\">Or let's chat:</h3>
                    <a href=\"#\" class=\"btn btn-round bordered white btn-light-bg text-normalize mr-4\">WhatsApp</a>
                    <a href=\"#\" class=\"btn btn-round bordered white btn-light-bg text-normalize\">Book a call</a>
                </div>
            </div>
        </div>
    </div>
</section>#}", "/home/moolaymedia/public_html/themes/demo/pages/services.htm", "");
    }
}
