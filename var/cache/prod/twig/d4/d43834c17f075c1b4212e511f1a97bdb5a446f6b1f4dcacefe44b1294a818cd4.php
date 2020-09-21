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

/* home.html.twig */
class __TwigTemplate_b417ebf7e947cf3f91b64c9f887d2fd3c5589ae383adefd7a03c413c946d0117 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
 Home
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
<div class=\"row\">
    <div class=\"col s12 m12\">
      <div class=\"card amber darken-1\">
        <div class=\"card-content white-text\">
          <span class=\"card-title\">Search properties for sale and to rent</span>
          <p>";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
             ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            <input type=\"submit\" class=\"btn\" value=\"Start search\" />
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
          </p>
        </div>
        
      </div>
    </div>
  </div>
<br>


<div class=\"row\">
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["properties"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 30
            echo "        <div class=\"col s12 m4\">
        <div class=\"card\">
            <div class=\"card-image\">
            ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["property"], "image", [], "any", false, false, false, 33)) {
                // line 34
                echo "            <img src=\"/images/properties/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "image", [], "any", false, false, false, 34), "html", null, true);
                echo "\" height=\"200\" />
            ";
            } else {
                // line 36
                echo "            <img src=\"/images/logo-building.png\" height=\"200\">
            ";
            }
            // line 38
            echo "            
            
            <span class=\"card-title\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "title", [], "any", false, false, false, 40), "html", null, true);
            echo "</span>
            </div>
            <div class=\"card-content\">
            <p>
            <b>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "title", [], "any", false, false, false, 44), "html", null, true);
            echo "</b>
            ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "price", [], "any", false, false, false, 45), "html", null, true);
            echo "
            </p>
            </div>
            <div class=\"card-action\">
            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">Détails</a>
            </div>
        </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
</div>
<br>
";
        // line 57
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["properties"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 57,  145 => 54,  134 => 49,  127 => 45,  123 => 44,  116 => 40,  112 => 38,  108 => 36,  102 => 34,  100 => 33,  95 => 30,  91 => 29,  77 => 18,  72 => 16,  68 => 15,  60 => 9,  56 => 8,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.html.twig", "D:\\agence-immo\\templates\\home.html.twig");
    }
}
