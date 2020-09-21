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

/* include/footer.html.twig */
class __TwigTemplate_3ced83d2e8daa4e401d545f5f6a6f3a08d746f49ddc4138832e0878dd9e98d04 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/footer.html.twig"));

        // line 1
        echo "  <footer class=\"page-footer orange\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col l6 s12\">
          <h5 class=\"white-text\">Company Bio</h5>
          <p class=\"grey-text text-lighten-4\">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Settings</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
          </ul>
        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Connect</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"footer-copyright\">
      <div class=\"container\">
      Made by <a class=\"orange-text text-lighten-3\" href=\"http://materializecss.com\">Materialize</a>
      </div>
    </div>
  </footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <footer class=\"page-footer orange\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col l6 s12\">
          <h5 class=\"white-text\">Company Bio</h5>
          <p class=\"grey-text text-lighten-4\">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Settings</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
          </ul>
        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Connect</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"footer-copyright\">
      <div class=\"container\">
      Made by <a class=\"orange-text text-lighten-3\" href=\"http://materializecss.com\">Materialize</a>
      </div>
    </div>
  </footer>", "include/footer.html.twig", "D:\\agence-immo\\templates\\include\\footer.html.twig");
    }
}
