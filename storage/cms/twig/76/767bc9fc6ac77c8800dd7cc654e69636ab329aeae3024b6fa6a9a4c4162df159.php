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

/* /data/site/docroot/themes/responsiv-clean/partials/site/scripts.htm */
class __TwigTemplate_d3746f01135f9eb112faea2a21f7dfb708f359a29595e6ab866a77ba1c392f62 extends \Twig\Template
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
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "@jquery", 1 => "@framework", 2 => "@framework.extras", 3 => "assets/vendor/bootstrap.js", 4 => "assets/javascript/app.js"]);
        // line 7
        echo "\"></script>
";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "/data/site/docroot/themes/responsiv-clean/partials/site/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  40 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"{{ [
    '@jquery',
    '@framework',
    '@framework.extras',
    'assets/vendor/bootstrap.js',
    'assets/javascript/app.js'
]|theme }}\"></script>
{% scripts %}", "/data/site/docroot/themes/responsiv-clean/partials/site/scripts.htm", "");
    }
}
