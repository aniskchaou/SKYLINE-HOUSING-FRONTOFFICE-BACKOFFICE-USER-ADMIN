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

/* show.html.twig */
class __TwigTemplate_d2dfe0d55c3d0513918c93022fcb2eb7bed4a124da4deda4971d69e9eb6c320a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <!-- style -->
  <style type=\"text/css\">
  #detail_item{
    color: rgba(238, 110, 115, 0.7);
    font-size: 14px;
    text-overflow: ellipsis;
    overflow: hidden;
    -webkit-transition: color .28s ease, background-color .28s ease;
    transition: color .28s ease, background-color .28s ease;
  }

</style>

  <!-- message -->
  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "      <div style=\" border-color: #0288d1;background-color: #29b6f6;color: white; width:100%;
    border: 1px solid;padding:10px;margin: 20px;color: white;\">
          ";
            // line 24
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "


 <div class=\"card\">
    <div class=\"card-content\">

    <!-- image + title -->
    <p>
            ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 35, $this->source); })()), "image", [], "any", false, false, false, 35)) {
            // line 36
            echo "            <img src=\"/images/properties/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 36, $this->source); })()), "image", [], "any", false, false, false, 36), "html", null, true);
            echo "\" height=\"400\" width=\"400\" />
            ";
        } else {
            // line 38
            echo "            <img src=\"/images/logo-building.png\" height=\"400\" width=\"400\">
            ";
        }
        // line 40
        echo "     </p>       
          <h2>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 41, $this->source); })()), "title", [], "any", false, false, false, 41), "html", null, true);
        echo "</h2>
    </div>


    <div class=\"card-tabs\">
      <ul class=\"tabs tabs-fixed-width\">
        <li class=\"tab\"><a class=\"active\" href=\"#test4\">information</a></li>
        <li class=\"tab\"><a  href=\"#test5\">Contact</a></li>
      </ul>
    </div>
    <div class=\"card-content grey lighten-4\" style=\"text-align: left;\">

     <!-- details -->
      <div id=\"test4\">
      <p>
       <div >  <p class=\"flow-text\"> <i class=\"material-icons\">book</i> Description : </p> ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), "html", null, true);
        echo "</div><br>
      <div> <p class=\"flow-text\"><i class=\"material-icons\">home</i> Rooms :</p> ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 57, $this->source); })()), "rooms", [], "any", false, false, false, 57), "html", null, true);
        echo "</div><br>
      <div>  <p class=\"flow-text\"> <i class=\"material-icons\">format_shapes</i> Surface :</p>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 58, $this->source); })()), "surface", [], "any", false, false, false, 58), "html", null, true);
        echo " m²</div><br>
      <div>  <p class=\"flow-text\"><i class=\"material-icons\">confirmation_number</i> Bedroomds :</p>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 59, $this->source); })()), "bedrooms", [], "any", false, false, false, 59), "html", null, true);
        echo "</div><br>
      <div>  <p class=\"flow-text\"><i class=\"material-icons\">attach_money</i>Price : </p> ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 60, $this->source); })()), "price", [], "any", false, false, false, 60), "html", null, true);
        echo " €</div><br>
      <div>  <p class=\"flow-text\"><i class=\"material-icons\">business</i> Floor : </p>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 61, $this->source); })()), "floor", [], "any", false, false, false, 61), "html", null, true);
        echo "</div><br>
      <div>  <p class=\"flow-text\"><i class=\"material-icons\">location_city</i> City : </p>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 62, $this->source); })()), "city", [], "any", false, false, false, 62), "html", null, true);
        echo "</div><br>
      <div>  <p class=\"flow-text\"><i class=\"material-icons\">location_on</i> Address : </p>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 63, $this->source); })()), "address", [], "any", false, false, false, 63), "html", null, true);
        echo "</div><br>
      <div>  <p class=\"flow-text\"><i class=\"material-icons\">local_post_office</i> Postal Code :</p>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 64, $this->source); })()), "postalCode", [], "any", false, false, false, 64), "html", null, true);
        echo "</div><br>
      </p>
      </div>
      
      
      <!-- contact form -->
      <div id=\"test5\">
      <br><br>
      ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_start');
        echo "
      ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'widget');
        echo "
      <br>
      <input type=\"submit\" class=\"btn\" value=\"Contact\" />
      ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
        echo "
      </div>



    </div>
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 76,  214 => 73,  210 => 72,  199 => 64,  195 => 63,  191 => 62,  187 => 61,  183 => 60,  179 => 59,  175 => 58,  171 => 57,  167 => 56,  149 => 41,  146 => 40,  142 => 38,  136 => 36,  134 => 35,  124 => 27,  115 => 24,  111 => 22,  107 => 21,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{property.title}}  {% endblock %}

{% block body %}

  <!-- style -->
  <style type=\"text/css\">
  #detail_item{
    color: rgba(238, 110, 115, 0.7);
    font-size: 14px;
    text-overflow: ellipsis;
    overflow: hidden;
    -webkit-transition: color .28s ease, background-color .28s ease;
    transition: color .28s ease, background-color .28s ease;
  }

</style>

  <!-- message -->
  {% for message in app.flashes('info') %}
      <div style=\" border-color: #0288d1;background-color: #29b6f6;color: white; width:100%;
    border: 1px solid;padding:10px;margin: 20px;color: white;\">
          {{ message }}
      </div>
  {% endfor %}



 <div class=\"card\">
    <div class=\"card-content\">

    <!-- image + title -->
    <p>
            {% if property.image %}
            <img src=\"/images/properties/{{property.image}}\" height=\"400\" width=\"400\" />
            {% else %}
            <img src=\"/images/logo-building.png\" height=\"400\" width=\"400\">
            {% endif %}
     </p>       
          <h2>{{property.title}}</h2>
    </div>


    <div class=\"card-tabs\">
      <ul class=\"tabs tabs-fixed-width\">
        <li class=\"tab\"><a class=\"active\" href=\"#test4\">information</a></li>
        <li class=\"tab\"><a  href=\"#test5\">Contact</a></li>
      </ul>
    </div>
    <div class=\"card-content grey lighten-4\" style=\"text-align: left;\">

     <!-- details -->
      <div id=\"test4\">
      <p>
       <div >  <p class=\"flow-text\"> <i class=\"material-icons\">book</i> Description : </p> {{property.description}}</div><br>
      <div> <p class=\"flow-text\"><i class=\"material-icons\">home</i> Rooms :</p> {{property.rooms}}</div><br>
      <div>  <p class=\"flow-text\"> <i class=\"material-icons\">format_shapes</i> Surface :</p>{{property.surface}} m²</div><br>
      <div>  <p class=\"flow-text\"><i class=\"material-icons\">confirmation_number</i> Bedroomds :</p>{{property.bedrooms}}</div><br>
      <div>  <p class=\"flow-text\"><i class=\"material-icons\">attach_money</i>Price : </p> {{property.price}} €</div><br>
      <div>  <p class=\"flow-text\"><i class=\"material-icons\">business</i> Floor : </p>{{property.floor}}</div><br>
      <div>  <p class=\"flow-text\"><i class=\"material-icons\">location_city</i> City : </p>{{property.city}}</div><br>
      <div>  <p class=\"flow-text\"><i class=\"material-icons\">location_on</i> Address : </p>{{property.address}}</div><br>
      <div>  <p class=\"flow-text\"><i class=\"material-icons\">local_post_office</i> Postal Code :</p>{{property.postalCode}}</div><br>
      </p>
      </div>
      
      
      <!-- contact form -->
      <div id=\"test5\">
      <br><br>
      {{ form_start(form) }}
      {{ form_widget(form) }}
      <br>
      <input type=\"submit\" class=\"btn\" value=\"Contact\" />
      {{ form_end(form) }}
      </div>



    </div>
  </div>

{% endblock %}







", "show.html.twig", "D:\\projects\\REALESTATE-SYMFONY-5\\templates\\show.html.twig");
    }
}
