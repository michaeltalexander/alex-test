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

/* /data/site/docroot/themes/responsiv-clean/partials/site/footer.htm */
class __TwigTemplate_d076373a95e2394dcd3671f33b885ac4183984b19c72ee1ce1c3a540ca64faeb extends \Twig\Template
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
        echo "<div class=\"footer-inner\">
    <p class=\"muted credit\">
        &copy; ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
        &mdash; Michael Alexander.
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "/data/site/docroot/themes/responsiv-clean/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer-inner\">
    <p class=\"muted credit\">
        &copy; {{ \"now\"|date(\"Y\") }}
        &mdash; Michael Alexander.
    </p>
</div>", "/data/site/docroot/themes/responsiv-clean/partials/site/footer.htm", "");
    }
}
