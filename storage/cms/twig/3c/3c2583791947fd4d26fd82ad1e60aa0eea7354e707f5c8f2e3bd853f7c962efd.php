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

/* /var/www/html/themes/demo/pages/contact.htm */
class __TwigTemplate_868a9afef00f7742503bcc32ab03968e1402521155fb2c95d80ad30c3195482b extends \Twig\Template
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
    #calendlyModal {
        position: fixed;
        z-index: 29000;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.9);
        display: none;
    }
    #calendlyModal.active {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }
    .calendly-inline-widget {
        height: 100%;
        min-width: 100%;
    }
    #closeCalendly {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
      z-index: 10;
    }
</style>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 35
        echo "<div class=\"contact-page\" data-scroll-section>
    <section id=\"hero\" class=\"hero-section section-padding-x overflow-y-auto d-flex align-items-center bg-white\" data-scroll data-scroll-repeat>
        <div class=\"middle-line d-none d-md-block\"></div>
        <div class=\"hero-slider\">
            <div class=\"slide-img bg-white\"></div>
        </div>
        <div class=\"hero-text-container container-fluid text-center text-md-left\">
            <h1 class=\"section-title mb-4 text-black fadeInUp\" animation-delay=\".2\" data-scroll data-scroll-repeat>Let's Talk</h1>
            <div class=\"row\">
                <div class=\"col-xl-6\">
                    <div class=\"text-black mb-4 mb-xl-5 fadeInUp\" animation-delay=\".6\" data-scroll data-scroll-repeat>
                        <p>We’d love to hear your story. Schedule a time to chat and we’ll give you a call to learn all about where you came from and where you’re going.</p>
                    </div>
                    <a id=\"showCalendly\" class=\"btn btn-round bordered silver fadeInUp\" animation-delay=\"1\" data-scroll data-scroll-repeat>Schedule a call</a>
                </div>
            </div>
        </div>
    </section>
    <section class=\"bg-white position-relative section-padding-y-smaller d-flex align-items-center d-xl-none\" style=\"background-image: url('";
        // line 53
        echo $this->extensions['System\Twig\Extension']->mediaFilter("contact/contact-info-bg-mobile.jpg");
        echo "'); background-size: cover;\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6 mb-4 mb-md-0\">
                    <div class=\"contact-card bg-white h-100\">
                        <img src=\"";
        // line 58
        echo $this->extensions['System\Twig\Extension']->mediaFilter("contact/newport-beach-asset.png");
        echo "\" class=\"our-passion mb-4 d-block\"alt=\"Newport Beach\">
                        <a href=\"https://g.page/moolaymedia?share\" target=\"_blank\" class=\"address d-block font-weight-900 mb-3 text-black text-uppercase\">
                            620 Newport Center Drive, <br> Suite 370, Newport Beach, CA 92660
                        </a>
                        <a href=\"tel:949-610-8969\" class=\"d-block font-weight-500 phone\">
                            <b>(949) 610-8969</b>
                        </a>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"contact-card bg-white h-100\">
                        <img src=\"";
        // line 69
        echo $this->extensions['System\Twig\Extension']->mediaFilter("contact/milwaukee-beach-asset.png");
        echo "\" class=\"our-passion mb-4 d-block\"alt=\"Newport Beach\">
                        <a href=\"https://goo.gl/maps/En9Mxh3yk27DzzXb6\" target=\"_blank\" class=\"address d-block font-weight-900 mb-3 text-black text-uppercase\">
                            500 W. Silver Spring Dr, <br>K200 Glendale, WI 53217
                        </a>
                        <a href=\"tel:414-616-3737\" class=\"d-block font-weight-500 phone\">
                            (414) 616-3737
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"get-quote-section projects-section position-relative ";
        // line 81
        echo " bg-000 section-padding-x d-flex align-items-center\">
        <div class=\"middle-line d-none d-md-block\"></div>
        <div class=\"cut-bg-div section-padding-y-smaller\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-8 mb-5 mb-xl-0 project-wrapper text-white get-some-insight-col\">
                        <h3 class=\"project-title mb-5 text-white\">Get some insight</h3>
                        <p class=\"mb-0\">Is your SEO where it should be? When was the last time you had someone really explain how your site is performing? Just leave us your email and website and we’ll run an audit and share the report with you. No strings attached. Just a little gift from us to you.</p>
                        
                        <div class=\"py-5 d-none d-xl-block\"></div>
                    </div>
                    <div class=\"col-xxxl-8 get-some-insight-col\">
                    
                        <form data-request=\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "::onFormSubmit\" data-request-validate>
                        
                            ";
        // line 96
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
                
                            <div id=\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>
                            
                \t\t\t<div class=\"row mb-4 mb-xxxxl-5\">
                \t\t\t\t<div class=\"col-md-4 mb-4\">
                \t\t\t\t\t<div class=\"form-group\">
                \t\t\t\t\t    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Your Name\" tabindex=\"1\">
                \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"name\"></small>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-4 mb-4\">
                \t\t\t\t\t<div class=\"form-group\">
                \t\t\t\t\t    <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"E-mail\" tabindex=\"2\">
                \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"email\"></small>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-4 mb-4\">
                \t\t\t\t\t<div class=\"form-group\">
                \t\t\t\t\t    <input type=\"text\" name=\"website\" class=\"form-control\" placeholder=\"Website URL\" tabindex=\"3\">
                \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"website\"></small>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-12 mb-4\">
                \t\t\t\t\t<div class=\"form-group\">
                                        ";
        // line 121
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['recaptcha_id'] = "seoFormRecaptcha"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("custom_recaptcha"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 122
        echo "                                        <small class=\"text-danger\" data-validate-for=\"recaptchaValidator\"></small>
                                    </div>
                \t\t\t\t</div>
                \t\t\t</div>
                \t\t\t<button class=\"btn btn-round bordered white\" type=\"submit\" tabindex=\"4\">Submit</button>
    \t\t\t\t\t</form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"contact-info-float d-none d-xxxl-block\" style=\"background-image: url('";
        // line 132
        echo $this->extensions['System\Twig\Extension']->mediaFilter("contact/contact-info-bg.jpg");
        echo "');\" data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"top\">
            <div class=\"d-flex flex-column pl-5 justify-content-end align-items-stretch\">
                <div class=\"contact-card bg-white mb-5\">
                    <img src=\"";
        // line 135
        echo $this->extensions['System\Twig\Extension']->mediaFilter("contact/newport-beach-asset.png");
        echo "\" class=\"our-passion mb-4 d-block\"alt=\"Newport Beach\">
                    <a href=\"https://g.page/moolaymedia?share\" class=\"address d-block font-weight-900 mb-3 text-black text-uppercase\">
                        620 Newport Center Drive, <br> Suite 1100, Newport Beach, CA 92660
                    </a>
                    <a href=\"tel:949-610-8969\" class=\"d-block font-weight-500 phone\">
                        (949) 610-8969
                    </a>
                </div>
                <div class=\"contact-card bg-white\">
                    <img src=\"";
        // line 144
        echo $this->extensions['System\Twig\Extension']->mediaFilter("contact/milwaukee-beach-asset.png");
        echo "\" class=\"our-passion mb-4 d-block\"alt=\"Newport Beach\">
                    <a href=\"https://goo.gl/maps/En9Mxh3yk27DzzXb6\" class=\"address d-block font-weight-900 mb-3 text-black text-uppercase\">
                        500 W. Silver Spring Dr, <br>K200 Glendale, WI 53217
                    </a>
                    <a href=\"tel:414-616-3737\" class=\"d-block font-weight-500 phone\">
                        (414) 616-3737
                    </a>
                </div>
            </div>
        </div>
        <div class=\"contact-info-float d-none d-xl-block d-xxxl-none\" style=\"background-image: url('";
        // line 154
        echo $this->extensions['System\Twig\Extension']->mediaFilter("contact/contact-info-bg.jpg");
        echo "');\">
            <div class=\"d-flex flex-column pl-5 justify-content-end align-items-stretch\">
                <div class=\"contact-card bg-white mb-5\">
                    <img src=\"";
        // line 157
        echo $this->extensions['System\Twig\Extension']->mediaFilter("contact/newport-beach-asset.png");
        echo "\" class=\"our-passion mb-4 d-block\"alt=\"Newport Beach\">
                    <a href=\"https://g.page/moolaymedia?share\" class=\"address d-block font-weight-900 mb-3 text-black text-uppercase\">
                        620 Newport Center Drive, <br> Suite 1100, Newport Beach, CA 92660
                    </a>
                    <a href=\"tel:949-610-8969\" class=\"d-block font-weight-500 phone\">
                        (949) 610-8969
                    </a>
                </div>
                <div class=\"contact-card bg-white\">
                    <img src=\"";
        // line 166
        echo $this->extensions['System\Twig\Extension']->mediaFilter("contact/milwaukee-beach-asset.png");
        echo "\" class=\"our-passion mb-4 d-block\"alt=\"Newport Beach\">
                    <a href=\"https://goo.gl/maps/En9Mxh3yk27DzzXb6\" class=\"address d-block font-weight-900 mb-3 text-black text-uppercase\">
                        500 W. Silver Spring Dr, <br>K200 Glendale, WI 53217
                    </a>
                    <a href=\"tel:414-616-3737\" class=\"d-block font-weight-500 phone\">
                        (414) 616-3737
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class=\"get-quote-section bg-white position-relative contact-page-form section-padding-x d-flex align-items-center\">
        <div class=\"middle-line d-none d-md-block\"></div>
        <div class=\"cut-bg-div section-padding-y-smaller\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center\">
                    <div class=\"col-12 mb-5 mb-xl-0\">
                        <h3 class=\"section-title mb-5\">Tell us a story</h3>
                        <p class=\"mb-0\">Please tell us a little about you and your goals.</p>
                        
                        <div class=\"py-5 d-none d-xl-block\"></div>
                    </div>
                    <div class=\"col-xxxl-8\">            
                        <form data-request=\"";
        // line 189
        echo twig_escape_filter($this->env, ($context["genericForm2"] ?? null), "html", null, true);
        echo "::onFormSubmit\" data-request-validate>
                        
                            ";
        // line 191
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

                            <div id=\"";
        // line 193
        echo twig_escape_filter($this->env, ($context["genericForm2"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>
                            
                \t\t\t<div class=\"row mb-5\">
                \t\t\t\t<div class=\"col-md-4 mb-4\">
                \t\t\t\t\t<div class=\"form-group\">
                \t\t\t\t\t    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Your Name\" tabindex=\"5\">
                \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"name\"></small>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-4 mb-4\">
                \t\t\t\t\t<div class=\"form-group\">
                \t\t\t\t\t    <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"Your Email\" tabindex=\"6\">
                \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"email\"></small>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-4 mb-4\">
                \t\t\t\t\t<div class=\"form-group\">
                \t\t\t\t\t    <input type=\"text\" name=\"number\" class=\"form-control\" placeholder=\"Your Number\" tabindex=\"7\">
                \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"number\"></small>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-12 mb-4\">
                \t\t\t\t    <div class=\"form-group\">
                \t\t\t\t        <textarea placeholder=\"Tell us your story\" rows=\"3\" name=\"details\" class=\"form-control\" tabindex=\"8\"></textarea>
                \t\t\t\t        <small class=\"text-danger\" data-validate-for=\"details\"></small>
                \t\t\t\t    </div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-12\">
                \t\t\t\t\t<div class=\"form-group\">
                                        ";
        // line 222
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['recaptcha_id'] = "contactFormRecaptcha"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("custom_recaptcha"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 223
        echo "                                        <small class=\"text-danger\" data-validate-for=\"recaptchaValidator\"></small>
                                    </div>
                \t\t\t\t</div>
                \t\t\t</div>
                \t\t\t
                \t\t\t<p class=\"mb-5 \">If all is completed above click below to submit the form. One of our Marketing Consultants will reach out to you the next business day.</p>
                            
                \t\t\t<button class=\"btn btn-round bordered silver\" type=\"submit\" tabindex=\"9\">Submit</button>
    \t\t\t\t\t</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"oderose-home parallax-section projects-section position-relative parallax-full d-flex align-items-center\" data-scroll data-scroll-repeat>
        <div id=\"parallax-img-2\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" ";
        // line 241
        echo ">
                       <img src=\"";
        // line 242
        echo $this->extensions['System\Twig\Extension']->mediaFilter("contact/contact-bg-2.jpg");
        echo "\" alt=\"\" class=\"main-img\">
                       <img src=\"";
        // line 243
        echo $this->extensions['System\Twig\Extension']->mediaFilter("contact/contact-bg.jpg");
        echo "\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 249
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 250
        echo "</div>
";
        // line 258
        echo "<div id=\"calendlyModal\" class=\"align-items-center\">
    <div id=\"closeCalendly\">&times;</div>
    <!-- Calendly inline widget begin -->
    <div class=\"calendly-inline-widget\" data-url=\"https://calendly.com/naourass\"></div>
    <script type=\"text/javascript\" src=\"https://assets.calendly.com/assets/external/widget.js\"></script>
    <!-- Calendly inline widget end -->
</div>
";
        // line 265
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 266
        echo "<script>
    \$('#showCalendly').click(function(e){
        e.preventDefault();
        if(\$('#calendlyModal').hasClass('active')){
            \$('#calendlyModal').removeClass('active');
        } else {
            \$('#calendlyModal').addClass('active');    
        }
    });
    \$('#closeCalendly').click(function(e){
        e.preventDefault();
        \$('#calendlyModal').removeClass('active');
    });
</script>
";
        // line 265
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/demo/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 265,  376 => 266,  374 => 265,  365 => 258,  362 => 250,  358 => 249,  349 => 243,  345 => 242,  342 => 241,  322 => 223,  317 => 222,  285 => 193,  280 => 191,  275 => 189,  249 => 166,  237 => 157,  231 => 154,  218 => 144,  206 => 135,  200 => 132,  188 => 122,  183 => 121,  157 => 98,  152 => 96,  147 => 94,  132 => 81,  117 => 69,  103 => 58,  95 => 53,  75 => 35,  73 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put styles %}
<style>
    #calendlyModal {
        position: fixed;
        z-index: 29000;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.9);
        display: none;
    }
    #calendlyModal.active {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }
    .calendly-inline-widget {
        height: 100%;
        min-width: 100%;
    }
    #closeCalendly {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
      z-index: 10;
    }
</style>
{% endput %}
<div class=\"contact-page\" data-scroll-section>
    <section id=\"hero\" class=\"hero-section section-padding-x overflow-y-auto d-flex align-items-center bg-white\" data-scroll data-scroll-repeat>
        <div class=\"middle-line d-none d-md-block\"></div>
        <div class=\"hero-slider\">
            <div class=\"slide-img bg-white\"></div>
        </div>
        <div class=\"hero-text-container container-fluid text-center text-md-left\">
            <h1 class=\"section-title mb-4 text-black fadeInUp\" animation-delay=\".2\" data-scroll data-scroll-repeat>Let's Talk</h1>
            <div class=\"row\">
                <div class=\"col-xl-6\">
                    <div class=\"text-black mb-4 mb-xl-5 fadeInUp\" animation-delay=\".6\" data-scroll data-scroll-repeat>
                        <p>We’d love to hear your story. Schedule a time to chat and we’ll give you a call to learn all about where you came from and where you’re going.</p>
                    </div>
                    <a id=\"showCalendly\" class=\"btn btn-round bordered silver fadeInUp\" animation-delay=\"1\" data-scroll data-scroll-repeat>Schedule a call</a>
                </div>
            </div>
        </div>
    </section>
    <section class=\"bg-white position-relative section-padding-y-smaller d-flex align-items-center d-xl-none\" style=\"background-image: url('{{ 'contact/contact-info-bg-mobile.jpg'|media }}'); background-size: cover;\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6 mb-4 mb-md-0\">
                    <div class=\"contact-card bg-white h-100\">
                        <img src=\"{{ 'contact/newport-beach-asset.png'|media }}\" class=\"our-passion mb-4 d-block\"alt=\"Newport Beach\">
                        <a href=\"https://g.page/moolaymedia?share\" target=\"_blank\" class=\"address d-block font-weight-900 mb-3 text-black text-uppercase\">
                            620 Newport Center Drive, <br> Suite 370, Newport Beach, CA 92660
                        </a>
                        <a href=\"tel:949-610-8969\" class=\"d-block font-weight-500 phone\">
                            <b>(949) 610-8969</b>
                        </a>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"contact-card bg-white h-100\">
                        <img src=\"{{ 'contact/milwaukee-beach-asset.png'|media }}\" class=\"our-passion mb-4 d-block\"alt=\"Newport Beach\">
                        <a href=\"https://goo.gl/maps/En9Mxh3yk27DzzXb6\" target=\"_blank\" class=\"address d-block font-weight-900 mb-3 text-black text-uppercase\">
                            500 W. Silver Spring Dr, <br>K200 Glendale, WI 53217
                        </a>
                        <a href=\"tel:414-616-3737\" class=\"d-block font-weight-500 phone\">
                            (414) 616-3737
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"get-quote-section projects-section position-relative {#bg-medium-light-gray#} bg-000 section-padding-x d-flex align-items-center\">
        <div class=\"middle-line d-none d-md-block\"></div>
        <div class=\"cut-bg-div section-padding-y-smaller\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-8 mb-5 mb-xl-0 project-wrapper text-white get-some-insight-col\">
                        <h3 class=\"project-title mb-5 text-white\">Get some insight</h3>
                        <p class=\"mb-0\">Is your SEO where it should be? When was the last time you had someone really explain how your site is performing? Just leave us your email and website and we’ll run an audit and share the report with you. No strings attached. Just a little gift from us to you.</p>
                        
                        <div class=\"py-5 d-none d-xl-block\"></div>
                    </div>
                    <div class=\"col-xxxl-8 get-some-insight-col\">
                    
                        <form data-request=\"{{ genericForm }}::onFormSubmit\" data-request-validate>
                        
                            {{ form_token() }}
                
                            <div id=\"{{ genericForm }}_forms_flash\"></div>
                            
                \t\t\t<div class=\"row mb-4 mb-xxxxl-5\">
                \t\t\t\t<div class=\"col-md-4 mb-4\">
                \t\t\t\t\t<div class=\"form-group\">
                \t\t\t\t\t    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Your Name\" tabindex=\"1\">
                \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"name\"></small>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-4 mb-4\">
                \t\t\t\t\t<div class=\"form-group\">
                \t\t\t\t\t    <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"E-mail\" tabindex=\"2\">
                \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"email\"></small>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-4 mb-4\">
                \t\t\t\t\t<div class=\"form-group\">
                \t\t\t\t\t    <input type=\"text\" name=\"website\" class=\"form-control\" placeholder=\"Website URL\" tabindex=\"3\">
                \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"website\"></small>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-12 mb-4\">
                \t\t\t\t\t<div class=\"form-group\">
                                        {% partial 'custom_recaptcha' recaptcha_id = 'seoFormRecaptcha' %}
                                        <small class=\"text-danger\" data-validate-for=\"recaptchaValidator\"></small>
                                    </div>
                \t\t\t\t</div>
                \t\t\t</div>
                \t\t\t<button class=\"btn btn-round bordered white\" type=\"submit\" tabindex=\"4\">Submit</button>
    \t\t\t\t\t</form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"contact-info-float d-none d-xxxl-block\" style=\"background-image: url('{{ 'contact/contact-info-bg.jpg'|media }}');\" data-scroll data-scroll-speed=\"-4\" data-scroll-offset=\"0, 0\" data-scroll-position=\"top\">
            <div class=\"d-flex flex-column pl-5 justify-content-end align-items-stretch\">
                <div class=\"contact-card bg-white mb-5\">
                    <img src=\"{{ 'contact/newport-beach-asset.png'|media }}\" class=\"our-passion mb-4 d-block\"alt=\"Newport Beach\">
                    <a href=\"https://g.page/moolaymedia?share\" class=\"address d-block font-weight-900 mb-3 text-black text-uppercase\">
                        620 Newport Center Drive, <br> Suite 1100, Newport Beach, CA 92660
                    </a>
                    <a href=\"tel:949-610-8969\" class=\"d-block font-weight-500 phone\">
                        (949) 610-8969
                    </a>
                </div>
                <div class=\"contact-card bg-white\">
                    <img src=\"{{ 'contact/milwaukee-beach-asset.png'|media }}\" class=\"our-passion mb-4 d-block\"alt=\"Newport Beach\">
                    <a href=\"https://goo.gl/maps/En9Mxh3yk27DzzXb6\" class=\"address d-block font-weight-900 mb-3 text-black text-uppercase\">
                        500 W. Silver Spring Dr, <br>K200 Glendale, WI 53217
                    </a>
                    <a href=\"tel:414-616-3737\" class=\"d-block font-weight-500 phone\">
                        (414) 616-3737
                    </a>
                </div>
            </div>
        </div>
        <div class=\"contact-info-float d-none d-xl-block d-xxxl-none\" style=\"background-image: url('{{ 'contact/contact-info-bg.jpg'|media }}');\">
            <div class=\"d-flex flex-column pl-5 justify-content-end align-items-stretch\">
                <div class=\"contact-card bg-white mb-5\">
                    <img src=\"{{ 'contact/newport-beach-asset.png'|media }}\" class=\"our-passion mb-4 d-block\"alt=\"Newport Beach\">
                    <a href=\"https://g.page/moolaymedia?share\" class=\"address d-block font-weight-900 mb-3 text-black text-uppercase\">
                        620 Newport Center Drive, <br> Suite 1100, Newport Beach, CA 92660
                    </a>
                    <a href=\"tel:949-610-8969\" class=\"d-block font-weight-500 phone\">
                        (949) 610-8969
                    </a>
                </div>
                <div class=\"contact-card bg-white\">
                    <img src=\"{{ 'contact/milwaukee-beach-asset.png'|media }}\" class=\"our-passion mb-4 d-block\"alt=\"Newport Beach\">
                    <a href=\"https://goo.gl/maps/En9Mxh3yk27DzzXb6\" class=\"address d-block font-weight-900 mb-3 text-black text-uppercase\">
                        500 W. Silver Spring Dr, <br>K200 Glendale, WI 53217
                    </a>
                    <a href=\"tel:414-616-3737\" class=\"d-block font-weight-500 phone\">
                        (414) 616-3737
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class=\"get-quote-section bg-white position-relative contact-page-form section-padding-x d-flex align-items-center\">
        <div class=\"middle-line d-none d-md-block\"></div>
        <div class=\"cut-bg-div section-padding-y-smaller\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center\">
                    <div class=\"col-12 mb-5 mb-xl-0\">
                        <h3 class=\"section-title mb-5\">Tell us a story</h3>
                        <p class=\"mb-0\">Please tell us a little about you and your goals.</p>
                        
                        <div class=\"py-5 d-none d-xl-block\"></div>
                    </div>
                    <div class=\"col-xxxl-8\">            
                        <form data-request=\"{{ genericForm2 }}::onFormSubmit\" data-request-validate>
                        
                            {{ form_token() }}

                            <div id=\"{{ genericForm2 }}_forms_flash\"></div>
                            
                \t\t\t<div class=\"row mb-5\">
                \t\t\t\t<div class=\"col-md-4 mb-4\">
                \t\t\t\t\t<div class=\"form-group\">
                \t\t\t\t\t    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Your Name\" tabindex=\"5\">
                \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"name\"></small>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-4 mb-4\">
                \t\t\t\t\t<div class=\"form-group\">
                \t\t\t\t\t    <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"Your Email\" tabindex=\"6\">
                \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"email\"></small>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-4 mb-4\">
                \t\t\t\t\t<div class=\"form-group\">
                \t\t\t\t\t    <input type=\"text\" name=\"number\" class=\"form-control\" placeholder=\"Your Number\" tabindex=\"7\">
                \t\t\t\t\t    <small class=\"text-danger\" data-validate-for=\"number\"></small>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-12 mb-4\">
                \t\t\t\t    <div class=\"form-group\">
                \t\t\t\t        <textarea placeholder=\"Tell us your story\" rows=\"3\" name=\"details\" class=\"form-control\" tabindex=\"8\"></textarea>
                \t\t\t\t        <small class=\"text-danger\" data-validate-for=\"details\"></small>
                \t\t\t\t    </div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-12\">
                \t\t\t\t\t<div class=\"form-group\">
                                        {% partial 'custom_recaptcha' recaptcha_id = 'contactFormRecaptcha' %}
                                        <small class=\"text-danger\" data-validate-for=\"recaptchaValidator\"></small>
                                    </div>
                \t\t\t\t</div>
                \t\t\t</div>
                \t\t\t
                \t\t\t<p class=\"mb-5 \">If all is completed above click below to submit the form. One of our Marketing Consultants will reach out to you the next business day.</p>
                            
                \t\t\t<button class=\"btn btn-round bordered silver\" type=\"submit\" tabindex=\"9\">Submit</button>
    \t\t\t\t\t</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"oderose-home parallax-section projects-section position-relative parallax-full d-flex align-items-center\" data-scroll data-scroll-repeat>
        <div id=\"parallax-img-2\" class=\"parallax-img\">
            <div data-scroll  class=\"w-100 h-100\">
                <div data-scroll data-scroll-repeat class=\"overflow-container w-100\">
                    <div data-scroll data-scroll-speed=\"-4\"  class=\"parallax-img-wrapper first-of-kind w-100 h-100\" {#style=\"background-image: url('{{ 'home/gl-bg.jpg'|media }}');\"#}>
                       <img src=\"{{ 'contact/contact-bg-2.jpg'|media }}\" alt=\"\" class=\"main-img\">
                       <img src=\"{{ 'contact/contact-bg.jpg'|media }}\" alt=\"\" class=\"replacement\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {% partial 'site/footer' %}
</div>
{#<div id=\"calendlyModal\" class=\"align-items-center\">
    <div id=\"closeCalendly\">&times;</div>
    <!-- Calendly inline widget begin -->
    <div class=\"calendly-inline-widget\" data-url=\"https://calendly.com/nikola-gacev\"></div>
    <script type=\"text/javascript\" src=\"https://assets.calendly.com/assets/external/widget.js\"></script>
    <!-- Calendly inline widget end -->
</div>#}
<div id=\"calendlyModal\" class=\"align-items-center\">
    <div id=\"closeCalendly\">&times;</div>
    <!-- Calendly inline widget begin -->
    <div class=\"calendly-inline-widget\" data-url=\"https://calendly.com/naourass\"></div>
    <script type=\"text/javascript\" src=\"https://assets.calendly.com/assets/external/widget.js\"></script>
    <!-- Calendly inline widget end -->
</div>
{% put scripts %}
<script>
    \$('#showCalendly').click(function(e){
        e.preventDefault();
        if(\$('#calendlyModal').hasClass('active')){
            \$('#calendlyModal').removeClass('active');
        } else {
            \$('#calendlyModal').addClass('active');    
        }
    });
    \$('#closeCalendly').click(function(e){
        e.preventDefault();
        \$('#calendlyModal').removeClass('active');
    });
</script>
{% endput %}", "/var/www/html/themes/demo/pages/contact.htm", "");
    }
}
