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

/* static/index.html.twig */
class __TwigTemplate_eea2d38785e7b04eb693ec8d14649e34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "static/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "static/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "static/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
     <h1 class=\"text-center mt-4\"><i>Yummi Recipes</i></h1>
    <div class=\"d-flex justify-content-center pt-2\">
        <a class=\"btn btn-dark mx-3\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_static");
        echo "\">All recipes</a>
        <a class=\"btn btn-dark mx-3\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_static_filter_by_meal_type", ["mealType" => "vegan"]);
        echo "\">Vegan</a>
        <a class=\"btn btn-dark mx-3\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_static_filter_by_meal_type", ["mealType" => "vegeterian"]);
        echo "\">Vegeterian</a>
        <a class=\"btn btn-dark mx-3\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_static_filter_by_meal_type", ["mealType" => "meat"]);
        echo "\">Meat</a>
        <a class=\"btn btn-dark mx-3\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_static_filter_by_meal_type", ["mealType" => "fish"]);
        echo "\">Fish</a>
    </div>
<div class=\"container \">
 <div class=\"row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-xs-1\">
 ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meals"]) || array_key_exists("meals", $context) ? $context["meals"] : (function () { throw new RuntimeError('Variable "meals" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["meal"]) {
            // line 21
            echo "        <div class=\"card\" style=\"border-radius: 0%; width: 650px;\">
            <div class=\"thumbnail\">
                <img class=\"left\"  style=\"border-radius-50\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/products/" . twig_get_attribute($this->env, $this->source, $context["meal"], "image", [], "any", false, false, false, 23))), "html", null, true);
            echo "\"/>
            </div>
            <div class=\"right\">
                <h1>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "mealName", [], "any", false, false, false, 26), "html", null, true);
            echo "</h1>
                   <span class=\"fa fa-star checked\"></span>
                <span class=\"fa fa-star checked\"></span>
                <span class=\"fa fa-star checked\"></span>
                <span class=\"fa fa-star checked\"></span>
                <span class=\"fa fa-star\"></span>
                <div class=\"author\">
                <img class=\"img\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["meal"], "fk_user", [], "any", false, false, false, 33), "picture", [], "any", false, false, false, 33))), "html", null, true);
            echo "\"  alt=\"User Avatar\">
                <p>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "fk_user", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>
                </div>
                <div class=\"separator\"></div>
                <p><b>Calories:</b> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "calories", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
                <p><b>Type:</b> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "mealType", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
            </div>
             <div class=\"down mb-3\">
                    <p><b>Ingredients:</b> ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "ingredients", [], "any", false, false, false, 41), "html", null, true);
            echo "</p> 
                     <a class=\"btn btn-primary\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_static_show", ["id" => twig_get_attribute($this->env, $this->source, $context["meal"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">Show more</a>
            </div>
  ";
            // line 53
            echo "   </div>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "            <tr>
                <td colspan=\"11\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "static/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 59,  200 => 55,  194 => 53,  189 => 42,  185 => 41,  179 => 38,  175 => 37,  169 => 34,  165 => 33,  155 => 26,  149 => 23,  145 => 21,  140 => 20,  133 => 16,  129 => 15,  125 => 14,  121 => 13,  117 => 12,  112 => 9,  102 => 8,  83 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/index.css') }}\">
{% endblock %}

{% block title %}Hello{% endblock %}

{% block body %}

     <h1 class=\"text-center mt-4\"><i>Yummi Recipes</i></h1>
    <div class=\"d-flex justify-content-center pt-2\">
        <a class=\"btn btn-dark mx-3\" href=\"{{ path('app_static') }}\">All recipes</a>
        <a class=\"btn btn-dark mx-3\" href=\"{{ path('app_static_filter_by_meal_type', {'mealType': 'vegan'}) }}\">Vegan</a>
        <a class=\"btn btn-dark mx-3\" href=\"{{ path('app_static_filter_by_meal_type', {'mealType': 'vegeterian'}) }}\">Vegeterian</a>
        <a class=\"btn btn-dark mx-3\" href=\"{{ path('app_static_filter_by_meal_type', {'mealType': 'meat'}) }}\">Meat</a>
        <a class=\"btn btn-dark mx-3\" href=\"{{ path('app_static_filter_by_meal_type', {'mealType': 'fish'}) }}\">Fish</a>
    </div>
<div class=\"container \">
 <div class=\"row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-xs-1\">
 {% for meal in meals %}
        <div class=\"card\" style=\"border-radius: 0%; width: 650px;\">
            <div class=\"thumbnail\">
                <img class=\"left\"  style=\"border-radius-50\" src=\"{{ asset('images/products/' ~ meal.image) }}\"/>
            </div>
            <div class=\"right\">
                <h1>{{ meal.mealName }}</h1>
                   <span class=\"fa fa-star checked\"></span>
                <span class=\"fa fa-star checked\"></span>
                <span class=\"fa fa-star checked\"></span>
                <span class=\"fa fa-star checked\"></span>
                <span class=\"fa fa-star\"></span>
                <div class=\"author\">
                <img class=\"img\" src=\"{{ asset('pictures/' ~ meal.fk_user.picture) }}\"  alt=\"User Avatar\">
                <p>{{ meal.fk_user}}</p>
                </div>
                <div class=\"separator\"></div>
                <p><b>Calories:</b> {{ meal.calories}}</p>
                <p><b>Type:</b> {{ meal.mealType }}</p>
            </div>
             <div class=\"down mb-3\">
                    <p><b>Ingredients:</b> {{ meal.ingredients }}</p> 
                     <a class=\"btn btn-primary\" href=\"{{ path('app_static_show', {'id': meal.id}) }}\">Show more</a>
            </div>
  {# <h5>12</h5>
  <h6>JANUARY</h6>
  <ul>
    <li><i class=\"fa fa-eye fa-2x\"></i></li>
    <li><i class=\"fa fa-heart-o fa-2x\"></i></li>
    <li><i class=\"fa fa-envelope-o fa-2x\"></i></li>
    <li><i class=\"fa fa-share-alt fa-2x\"></i></li>
  </ul>
  <div class=\"fab\"><i class=\"fa fa-arrow-down fa-3x\"></i></div> #}
   </div>
  {% else %}
            <tr>
                <td colspan=\"11\">no records found</td>
            </tr>
        {% endfor %}
    </div>
</div>
{% endblock %}", "static/index.html.twig", "C:\\Users\\cvrlj\\Desktop\\CodeFactory\\finalproject\\templates\\static\\index.html.twig");
    }
}
