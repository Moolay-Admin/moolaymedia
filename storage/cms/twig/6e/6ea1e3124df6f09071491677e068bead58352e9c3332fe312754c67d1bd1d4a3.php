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

/* /home/moolaymedia/public_html/plugins/martin/forms/components/partials/js/recaptcha.js */
class __TwigTemplate_98e9aab77e73fe88abb40ba2eb85026976ada8ae6f5b38d214e21b02cd00aaae extends \Twig\Template
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
        echo "resetReCaptcha('";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "');";
    }

    public function getTemplateName()
    {
        return "/home/moolaymedia/public_html/plugins/martin/forms/components/partials/js/recaptcha.js";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("resetReCaptcha('{{ __SELF__ }}');", "/home/moolaymedia/public_html/plugins/martin/forms/components/partials/js/recaptcha.js", "");
    }
}
