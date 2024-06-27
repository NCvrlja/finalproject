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

/* static/show.html.twig */
class __TwigTemplate_7e59a531b3cafccfa6052703367c0e34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "static/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "static/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "static/show.html.twig", 1);
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

        echo "Hello ";
        
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
        echo "      <h1 class=\"text-center\">All the recipes</h1>
<div class=\"container\">
 <div class=\"row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-xs-1\">
 
        <div class=\"card\" style=\"border-radius: 0%; width: 650px;\">
            <div class=\"thumbnail\">
                <img class=\"left\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/products/" . twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15))), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"right\">
                <h1>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 18, $this->source); })()), "mealName", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>
                <div class=\"author\">
                <p>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 20, $this->source); })()), "fk_user", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
                </div>
                <div class=\"separator\"></div>
                <p><b>Calories:</b>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 23, $this->source); })()), "calories", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
                <p><b>Type:</b>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 24, $this->source); })()), "mealType", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
            </div>
            <div class=\"down mb-3\">
                    <p><b>Ingredients:</b>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 27, $this->source); })()), "ingredients", [], "any", false, false, false, 27), "html", null, true);
        echo "</p> 
                     <p><b>Preparation time:</b>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 28, $this->source); })()), "preparationTime", [], "any", false, false, false, 28), "html", null, true);
        echo "</p> 
                     <p><b>Recipe:</b>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 29, $this->source); })()), "recipe", [], "any", false, false, false, 29), "html", null, true);
        echo "</p> 
                     <p><b>Fat/Carbs/Proteins:</b>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 30, $this->source); })()), "nutriensTable", [], "any", false, false, false, 30), "html", null, true);
        echo "</p> 
                     <p><a target=\"_blanc\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 31, $this->source); })()), "link", [], "any", false, false, false, 31), "html", null, true);
        echo "\">See the recipe on orginal page</p>
                    <a class=\"btn btn-primary\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_static");
        echo "\">Back to list</a>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "static/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 32,  163 => 31,  159 => 30,  155 => 29,  151 => 28,  147 => 27,  141 => 24,  137 => 23,  131 => 20,  126 => 18,  120 => 15,  112 => 9,  102 => 8,  83 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/index.css') }}\">
{% endblock %}

{% block title %}Hello {% endblock %}

{% block body %}
      <h1 class=\"text-center\">All the recipes</h1>
<div class=\"container\">
 <div class=\"row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-xs-1\">
 
        <div class=\"card\" style=\"border-radius: 0%; width: 650px;\">
            <div class=\"thumbnail\">
                <img class=\"left\" src=\"{{ asset('images/products/' ~ meal.image) }}\"/>
            </div>
            <div class=\"right\">
                <h1>{{ meal.mealName }}</h1>
                <div class=\"author\">
                <p>{{ meal.fk_user}}</p>
                </div>
                <div class=\"separator\"></div>
                <p><b>Calories:</b>{{ meal.calories}}</p>
                <p><b>Type:</b>{{ meal.mealType }}</p>
            </div>
            <div class=\"down mb-3\">
                    <p><b>Ingredients:</b>{{ meal.ingredients }}</p> 
                     <p><b>Preparation time:</b>{{ meal.preparationTime }}</p> 
                     <p><b>Recipe:</b>{{ meal.recipe }}</p> 
                     <p><b>Fat/Carbs/Proteins:</b>{{ meal.nutriensTable }}</p> 
                     <p><a target=\"_blanc\" href=\"{{ meal.link }}\">See the recipe on orginal page</p>
                    <a class=\"btn btn-primary\" href=\"{{ path('app_static') }}\">Back to list</a>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "static/show.html.twig", "C:\\Users\\cvrlj\\Desktop\\CodeFactory\\finalproject\\templates\\static\\show.html.twig");
    }
}
