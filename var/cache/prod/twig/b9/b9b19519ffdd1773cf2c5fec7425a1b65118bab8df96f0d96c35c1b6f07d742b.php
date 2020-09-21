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

/* base.html.twig */
class __TwigTemplate_5fe81a44f9c536321d44597b8bd88c0f1197dafd53ff57b49eac92a60fd4dd1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html lang=\"en\">
<head>
  ";
        // line 3
        echo twig_include($this->env, $context, "include/header.html.twig");
        echo "
  <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "</head>
<body>
 ";
        // line 8
        echo twig_include($this->env, $context, "menu/menu.html.twig");
        echo "
  <div class=\"section no-pad-bot\" id=\"index-banner\">
    <div class=\"container\">
      <br><br>
      <div class=\"row center\">
       ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "      </div> 
        <br>
    </div>
  </div>
   ";
        // line 19
        echo twig_include($this->env, $context, "include/footer.html.twig");
        echo "
   ";
        // line 20
        echo twig_include($this->env, $context, "include/scripts.html.twig");
        echo "
  </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 14,  103 => 13,  97 => 5,  90 => 4,  82 => 20,  78 => 19,  72 => 15,  69 => 14,  67 => 13,  59 => 8,  55 => 6,  53 => 5,  49 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "D:\\agence-immo\\templates\\base.html.twig");
    }
}
