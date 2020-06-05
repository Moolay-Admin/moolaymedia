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

/* /home/moolaymedia/public_html/themes/demo/layouts/default.htm */
class __TwigTemplate_7a228153e726d3b9031fc51833dd5507fdfbad1c21216a548334ddd564625404 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5) != "home")) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
            echo " |";
        }
        echo " Moolay Media</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Moolay Media LLC\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"Moolay Media LLC\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.png");
        echo "\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/css/slick.css");
        echo "\"/>
        <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/pointer.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15) != "services")) {
            // line 16
            echo "        <link href=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/locomotive/dist/locomotive-scroll.min.css");
            echo "\" rel=\"stylesheet\">
        ";
        }
        // line 18
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18) == "services")) {
            // line 19
            echo "        <link href=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jquery.pagepiling.css");
            echo "\" rel=\"stylesheet\">
        ";
        }
        // line 21
        echo "        <link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/fonts.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"https://use.fontawesome.com/0bde71819e.css\" media=\"all\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/menu.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 28
        echo "    </head>
    <body id=\"body\">
        <div id=\"loader\">
            <img src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/loader-black.gif");
        echo "\" alt=\"\">
        </div>
        <div class=\"cursor-dot-outline\"></div>
        <div class=\"cursor-dot\"></div>
";
        // line 44
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44) != "services")) {
            // line 45
            echo "        <div id=\"js-scroll\" data-scroll-container>
        ";
        }
        // line 47
        echo "            ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "            ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 49
        echo "            ";
        // line 52
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52) != "services")) {
            // line 53
            echo "        </div>
        ";
        }
        // line 55
        echo "        <!-- Scripts -->
        <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/js/slick.min.js");
        echo "\"></script>
        <script src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/pointer.js");
        echo "\"></script>
        ";
        // line 66
        echo "        ";
        // line 67
        echo "        ";
        // line 68
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68) == "services")) {
            // line 69
            echo "        <script src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery.pagepiling.js");
            echo "\"></script>
        ";
        }
        // line 71
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71) != "services")) {
            // line 72
            echo "        <script src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/locomotive-scroll.js");
            echo "\"></script>
        ";
        }
        // line 74
        echo "        <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/core.js");
        echo "\"></script>
        <script src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/wow.min.js");
        echo "\"></script>
        <script src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 77
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 78
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 79
        echo "        ";
        // line 86
        echo "        <script>
            \$(window).on(\"load\",function(){
                \$('#loader').fadeOut('slow');    
            });
            
            \$(window).on(\"load\",function(){
                \$('#bgTitle').addClass('is-inview');    
            });
            
        </script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/moolaymedia/public_html/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 86,  216 => 79,  212 => 78,  201 => 77,  197 => 76,  193 => 75,  188 => 74,  182 => 72,  179 => 71,  173 => 69,  170 => 68,  168 => 67,  166 => 66,  162 => 60,  158 => 59,  152 => 55,  148 => 53,  145 => 52,  143 => 49,  140 => 48,  135 => 47,  131 => 45,  128 => 44,  121 => 31,  116 => 28,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  96 => 22,  91 => 21,  85 => 19,  82 => 18,  76 => 16,  74 => 15,  70 => 14,  66 => 13,  61 => 11,  54 => 7,  50 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>{% if this.page.id != 'home' %}{{ this.page.title }} |{% endif %} Moolay Media</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"Moolay Media LLC\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"Moolay Media LLC\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/img/favicon.png'|theme }}\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/vendor/css/slick.css'|theme }}\"/>
        <link href=\"{{ 'assets/css/pointer.css'|theme }}\" rel=\"stylesheet\">
        {% if this.page.id != 'services' %}
        <link href=\"{{ 'assets/vendor/locomotive/dist/locomotive-scroll.min.css'|theme }}\" rel=\"stylesheet\">
        {% endif %}
        {% if this.page.id == 'services' %}
        <link href=\"{{ 'assets/css/jquery.pagepiling.css'|theme }}\" rel=\"stylesheet\">
        {% endif %}
        <link href=\"{{ 'assets/css/animate.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/fonts.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"https://use.fontawesome.com/0bde71819e.css\" media=\"all\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/menu.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/responsive.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
    </head>
    <body id=\"body\">
        <div id=\"loader\">
            <img src=\"{{ 'assets/img/loader-black.gif'|theme }}\" alt=\"\">
        </div>
        <div class=\"cursor-dot-outline\"></div>
        <div class=\"cursor-dot\"></div>
{#      <div class=\"switch-wrapper d-flex align-items-center\">
            <span class=\"text-modes text-pink text-uppercase mr-3\">Dark</span>
            <div class=\"switch\">
                <input class=\"switch__input\" type=\"checkbox\" id=\"themeSwitch\">
                <label aria-hidden=\"true\" class=\"switch__label\" for=\"themeSwitch\">On</label>
                <div aria-hidden=\"true\" class=\"switch__marker\"></div>
            </div>
            <span class=\"text-modes text-pink text-uppercase ml-3\">Light</span>
        </div>#}
        {% if this.page.id != 'services' %}
        <div id=\"js-scroll\" data-scroll-container>
        {% endif %}
            {% partial 'site/header' %}
            {% page %}
            {#{% if this.page.id == 'services' %}
            {% partial 'site/footer' %}
            {% endif %}#}
        {% if this.page.id != 'services' %}
        </div>
        {% endif %}
        <!-- Scripts -->
        <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"{{ 'assets/vendor/js/slick.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/pointer.js'|theme }}\"></script>
        {#
        <script src=\"{{ 'assets/vendor/js/three.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/js/simplex-noise.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/js/TweenMax.min.js'|theme }}\"></script>
        #}
        {#<script src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/MorphSVGPlugin.min.js\"></script>#}
        {#<script src=\"{{ 'assets/javascript/parallax.min.js'|theme }}\"></script>#}
        {% if this.page.id == 'services' %}
        <script src=\"{{ 'assets/javascript/jquery.pagepiling.js'|theme }}\"></script>
        {% endif %}
        {% if this.page.id != 'services' %}
        <script src=\"{{ 'assets/javascript/locomotive-scroll.js'|theme }}\"></script>
        {% endif %}
        <script src=\"{{ 'assets/javascript/core.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/wow.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}
        {#
        <script>
            document.getElementById('themeSwitch').addEventListener('change', function(event){
              (event.target.checked) ? document.body.removeAttribute('data-theme') : document.body.setAttribute('data-theme', 'dark');
            });
        </script>
        #}
        <script>
            \$(window).on(\"load\",function(){
                \$('#loader').fadeOut('slow');    
            });
            
            \$(window).on(\"load\",function(){
                \$('#bgTitle').addClass('is-inview');    
            });
            
        </script>
    </body>
</html>", "/home/moolaymedia/public_html/themes/demo/layouts/default.htm", "");
    }
}
