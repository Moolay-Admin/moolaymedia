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

/* /var/www/html/themes/demo/partials/custom_recaptcha.htm */
class __TwigTemplate_a3fe547f918e320d4a902559fca79ab21aa1ceb56957908187f058d498eff144 extends \Twig\Template
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
        if (($context["recaptcha_id"] ?? null)) {
            // line 2
            echo "\t<div id=\"";
            echo twig_escape_filter($this->env, ($context["recaptcha_id"] ?? null), "html", null, true);
            echo "\"></div>
\t";
            // line 4
            echo "\t<input name=\"recaptchaValidator\" type=\"checkbox\" autocomplete=\"off\" hidden/>
\t";
            // line 5
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'            );
            // line 6
            echo "    <script type=\"text/javascript\">
      var onloadCallback";
            // line 7
            echo twig_escape_filter($this->env, ($context["recaptcha_id"] ?? null), "html", null, true);
            echo " = function() {
          grecaptcha.render('";
            // line 8
            echo twig_escape_filter($this->env, ($context["recaptcha_id"] ?? null), "html", null, true);
            echo "', {
          'sitekey' : '6LeJwvYUAAAAAEjD-ePMPPZduHGcyJUvyjuUlZvB',
          'callback' : function(){
              \$('#";
            // line 11
            echo twig_escape_filter($this->env, ($context["recaptcha_id"] ?? null), "html", null, true);
            echo "').next('input').prop('checked', true);;
            }
        });
      };
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=onloadCallback";
            // line 16
            echo twig_escape_filter($this->env, ($context["recaptcha_id"] ?? null), "html", null, true);
            echo "&render=explicit\" async defer></script>
\t";
            // line 5
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
        } else {
            // line 19
            echo "\t<div id=\"form_test_element\"></div>
\t<input name=\"recaptchaValidator\" type=\"checkbox\" autocomplete=\"off\" hidden/>
\t";
            // line 21
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'            );
            // line 22
            echo "\t<script type=\"text/javascript\">
\tvar onloadCallback = function() {
\t    grecaptcha.render('form_test_element', {
\t        'sitekey': '6LeJwvYUAAAAAEjD-ePMPPZduHGcyJUvyjuUlZvB',
\t        'callback': function() {
\t            \$('#form_test_element').next('input').prop('checked', true);;
\t        }
\t    });
\t};
\t</script>
\t<script src=\"https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit\" async defer></script>
\t";
            // line 21
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/demo/partials/custom_recaptcha.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 21,  83 => 22,  81 => 21,  77 => 19,  74 => 5,  70 => 16,  62 => 11,  56 => 8,  52 => 7,  49 => 6,  47 => 5,  44 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if recaptcha_id %}
\t<div id=\"{{ recaptcha_id }}\"></div>
\t{#<input name=\"{{ recaptcha_id }}_validator\" type=\"checkbox\" autocomplete=\"off\" hidden/>#}
\t<input name=\"recaptchaValidator\" type=\"checkbox\" autocomplete=\"off\" hidden/>
\t{% put scripts %}
    <script type=\"text/javascript\">
      var onloadCallback{{ recaptcha_id }} = function() {
          grecaptcha.render('{{ recaptcha_id }}', {
          'sitekey' : '6LeJwvYUAAAAAEjD-ePMPPZduHGcyJUvyjuUlZvB',
          'callback' : function(){
              \$('#{{ recaptcha_id }}').next('input').prop('checked', true);;
            }
        });
      };
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=onloadCallback{{ recaptcha_id }}&render=explicit\" async defer></script>
\t{% endput %}
{% else %}
\t<div id=\"form_test_element\"></div>
\t<input name=\"recaptchaValidator\" type=\"checkbox\" autocomplete=\"off\" hidden/>
\t{% put scripts %}
\t<script type=\"text/javascript\">
\tvar onloadCallback = function() {
\t    grecaptcha.render('form_test_element', {
\t        'sitekey': '6LeJwvYUAAAAAEjD-ePMPPZduHGcyJUvyjuUlZvB',
\t        'callback': function() {
\t            \$('#form_test_element').next('input').prop('checked', true);;
\t        }
\t    });
\t};
\t</script>
\t<script src=\"https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit\" async defer></script>
\t{% endput %}
{% endif %}", "/var/www/html/themes/demo/partials/custom_recaptcha.htm", "");
    }
}
