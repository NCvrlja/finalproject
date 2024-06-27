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

/* user_access/show.html.twig */
class __TwigTemplate_1efcbb5b8bddb9953dc34201d22de135 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_access/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_access/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_access/show.html.twig", 1);
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
        echo "   
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
                 <img class=\"img\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 20, $this->source); })()), "fk_user", [], "any", false, false, false, 20), "picture", [], "any", false, false, false, 20))), "html", null, true);
        echo "\"  alt=\"User Avatar\">
                <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 21, $this->source); })()), "fk_user", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                </div>
                <div class=\"separator\"></div>
                <p><b>Calories:</b> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 24, $this->source); })()), "calories", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
                <p><b>Type:</b> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 25, $this->source); })()), "mealType", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
            </div>
            <div class=\"down mb-3\">
                    <p><b>Ingredients:</b> <br> ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 28, $this->source); })()), "ingredients", [], "any", false, false, false, 28), "html", null, true);
        echo "</p> 
                     <p><b>Preparation time:</b> ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 29, $this->source); })()), "preparationTime", [], "any", false, false, false, 29), "html", null, true);
        echo "</p> 
                     <p><b>Recipe:</b> <br> ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 30, $this->source); })()), "recipe", [], "any", false, false, false, 30), "html", null, true);
        echo "</p> 
                     <p><b>Fat/Carbs/Proteins:</b> <br> ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 31, $this->source); })()), "nutriensTable", [], "any", false, false, false, 31), "html", null, true);
        echo "</p> 
                     <p><a target=\"_blanc\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 32, $this->source); })()), "link", [], "any", false, false, false, 32), "html", null, true);
        echo "\">See the recipe on orginal page</p>
                    ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 33, $this->source); })()), "fk_user", [], "any", false, false, false, 33) == twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33))) {
            // line 34
            echo "                    <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meals_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">edit</a>
                    ";
        }
        // line 36
        echo "                    ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 37
            echo "                    <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planner_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["meal"]) || array_key_exists("meal", $context) ? $context["meal"] : (function () { throw new RuntimeError('Variable "meal" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Add to my plan</a>
                    ";
        }
        // line 39
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "                    ";
            // line 41
            echo "                    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 42
            echo "                    ";
            // line 43
            echo "
                    ";
        } else {
            // line 45
            echo "                    <a class=\"btn btn-primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_static");
            echo "\">Back to list</a>
                    ";
        }
        // line 47
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 48
            echo "                    ";
            echo twig_include($this->env, $context, "meals/_delete_form.html.twig");
            echo "
                    ";
        }
        // line 50
        echo "            </div>
  ";
        // line 60
        echo "   </div>

    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user_access/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 60,  217 => 50,  211 => 48,  208 => 47,  202 => 45,  198 => 43,  196 => 42,  193 => 41,  191 => 40,  188 => 39,  182 => 37,  179 => 36,  173 => 34,  171 => 33,  167 => 32,  163 => 31,  159 => 30,  155 => 29,  151 => 28,  145 => 25,  141 => 24,  135 => 21,  131 => 20,  126 => 18,  120 => 15,  112 => 9,  102 => 8,  83 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/index.css') }}\">
{% endblock %}

{% block title %}Hello {% endblock %}

{% block body %}
   
<div class=\"container\">
 <div class=\"row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-xs-1\">
 
        <div class=\"card\" style=\"border-radius: 0%; width: 650px;\">
            <div class=\"thumbnail\">
                <img class=\"left\" src=\"{{ asset('images/products/' ~ meal.image) }}\"/>
            </div>
            <div class=\"right\">
                <h1>{{ meal.mealName }}</h1>
                <div class=\"author\">
                 <img class=\"img\" src=\"{{ asset('pictures/' ~ meal.fk_user.picture) }}\"  alt=\"User Avatar\">
                <p>{{ meal.fk_user}}</p>
                </div>
                <div class=\"separator\"></div>
                <p><b>Calories:</b> {{ meal.calories}}</p>
                <p><b>Type:</b> {{ meal.mealType }}</p>
            </div>
            <div class=\"down mb-3\">
                    <p><b>Ingredients:</b> <br> {{ meal.ingredients }}</p> 
                     <p><b>Preparation time:</b> {{ meal.preparationTime }}</p> 
                     <p><b>Recipe:</b> <br> {{ meal.recipe }}</p> 
                     <p><b>Fat/Carbs/Proteins:</b> <br> {{ meal.nutriensTable }}</p> 
                     <p><a target=\"_blanc\" href=\"{{ meal.link }}\">See the recipe on orginal page</p>
                    {% if meal.fk_user == app.user %}
                    <a class=\"btn btn-primary\" href=\"{{ path('app_meals_edit', {'id': meal.id}) }}\">edit</a>
                    {% endif %}
                    {% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_USER\") %}
                    <a class=\"btn btn-primary\" href=\"{{ path('app_planner_new', {'id': meal.id}) }}\">Add to my plan</a>
                    {% endif %}
                    {% if is_granted(\"ROLE_ADMIN\") %}
                    {# <a class=\"btn btn-primary\" href=\"{{ path('app_meals_index') }}\">Back to list</a> #}
                    {% elseif is_granted(\"ROLE_USER\") %}
                    {# <a class=\"btn btn-primary\" href=\"{{ path('app_user_access') }}\">Back to list</a> #}

                    {% else %}
                    <a class=\"btn btn-primary\" href=\"{{ path('app_static') }}\">Back to list</a>
                    {% endif %}
                    {% if is_granted(\"ROLE_ADMIN\") %}
                    {{ include('meals/_delete_form.html.twig') }}
                    {% endif %}
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

    </div>
</div>
{% endblock %}

", "user_access/show.html.twig", "C:\\Users\\cvrlj\\Desktop\\CodeFactory\\Back-End\\FinalProject\\FullStackProject\\templates\\user_access\\show.html.twig");
    }
}
