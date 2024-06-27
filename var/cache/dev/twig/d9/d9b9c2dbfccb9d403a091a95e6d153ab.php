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

/* meals/index.html.twig */
class __TwigTemplate_35dfbbda0f82b85fdb5ce8962523d3cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meals/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meals/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "meals/index.html.twig", 1);
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

        echo "Meals";
        
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
        echo "      <h1 class=\"text-center mt-2\"><i>Yummi Recipes</i></h1>
<div class=\"d-flex justify-content-center pt-2\">
<a class=\"btn btn-primary mx-3\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meals_index");
        echo "\">All Meals</a>
<a class=\"btn btn-primary mx-3\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meals_filtered", ["status" => "approved"]);
        echo "\">Approved Meals</a>
<a class=\"btn btn-primary mx-3\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meals_filtered", ["status" => "not_approved"]);
        echo "\">Not Approved Meals</a>
</div>
<hr class=\"line\">
  <div class=\"d-flex justify-content-center pt-2\">
       <a class=\"btn btn-dark mx-3\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_access");
        echo "\">All recipes</a>
    <a class=\"btn btn-dark mx-3\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meals_filter_by_meal_type", ["mealType" => "vegan"]);
        echo "\">Vegan</a>
    <a class=\"btn btn-dark mx-3\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meals_filter_by_meal_type", ["mealType" => "vegeterian"]);
        echo "\">Vegeterian</a>
    <a class=\"btn btn-dark mx-3\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meals_filter_by_meal_type", ["mealType" => "meat"]);
        echo "\">Meat</a>
    <a class=\"btn btn-dark mx-3\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meals_filter_by_meal_type", ["mealType" => "fish"]);
        echo "\">Fish</a>
</div>
<div class=\"container fadeout\" id=\"flash\">
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "session", [], "any", false, false, false, 24), "flashbag", [], "any", false, false, false, 24), "get", ["success"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 25
            echo "
    ";
            // line 26
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</div>
<div class=\"container\">
 <div class=\"row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-xs-1\">
 ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meals"]) || array_key_exists("meals", $context) ? $context["meals"] : (function () { throw new RuntimeError('Variable "meals" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["meal"]) {
            // line 33
            echo "        <div class=\"card\" style=\"border-radius: 0%; width: 650px;\">
            <div class=\"thumbnail\">
              <img class=\"left\"  style=\"border-radius-50\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/products/" . twig_get_attribute($this->env, $this->source, $context["meal"], "image", [], "any", false, false, false, 35))), "html", null, true);
            echo "\"/>
            </div>
            <div class=\"right\">
                <h1>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "mealName", [], "any", false, false, false, 38), "html", null, true);
            echo "</h1>
                <span class=\"fa fa-star checked\"></span>
                <span class=\"fa fa-star checked\"></span>
                <span class=\"fa fa-star checked\"></span>
                <span class=\"fa fa-star checked\"></span>
                <span class=\"fa fa-star\"></span>
                <div class=\"author\">
                <img class=\"img\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["meal"], "fk_user", [], "any", false, false, false, 45), "picture", [], "any", false, false, false, 45))), "html", null, true);
            echo "\"  alt=\"User Avatar\">
                <p>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "fk_user", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                </div>
                <div class=\"separator\"></div>
                <p><b>Calories:</b> ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "calories", [], "any", false, false, false, 49), "html", null, true);
            echo "</p>
                <p><b>Type:</b> ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "mealType", [], "any", false, false, false, 50), "html", null, true);
            echo "</p>
            </div>
            <div class=\"down mb-3\">
                    <p><b>Ingredients:</b>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "ingredients", [], "any", false, false, false, 53), "html", null, true);
            echo "</p> 
                    <a class=\"btn btn-primary\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meals_show", ["id" => twig_get_attribute($this->env, $this->source, $context["meal"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">Show more</a>
                    <a class=\"btn btn-primary\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meals_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["meal"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">Edit</a>
                    <a class=\"btn btn-primary\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planner_new", ["id" => twig_get_attribute($this->env, $this->source, $context["meal"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">Add to my plan</a>
                    ";
            // line 57
            echo twig_include($this->env, $context, "meals/_delete_form.html.twig");
            echo "
                         <td>
                <form method=\"post\" action=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meals_index_some", ["id" => twig_get_attribute($this->env, $this->source, $context["meal"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("approve" . twig_get_attribute($this->env, $this->source, $context["meal"], "id", [], "any", false, false, false, 60))), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("approve" . twig_get_attribute($this->env, $this->source, $context["meal"], "id", [], "any", false, false, false, 60))), "html", null, true);
            echo "\" />
                        <div class=\"form-check form-switch\">
                            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"switch";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "\" name=\"approved\" onchange=\"this.form.submit()\"
                                   ";
            // line 63
            if (twig_get_attribute($this->env, $this->source, $context["meal"], "approved", [], "any", false, false, false, 63)) {
                echo "checked";
            }
            echo ">
                            <label class=\"form-check-label\" for=\"switch";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\">
                                ";
            // line 65
            echo (((twig_get_attribute($this->env, $this->source, $context["meal"], "approved", [], "any", false, false, false, 65) == false)) ? ("Approve") : ("Approved"));
            echo "
                            </label>
                        </div>
                    </form>
            </td>
            </div>
  ";
            // line 80
            echo "   </div>
  ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 82
            echo "            <tr>
                <td colspan=\"11\">No records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "meals/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 86,  301 => 82,  287 => 80,  278 => 65,  274 => 64,  268 => 63,  264 => 62,  257 => 60,  253 => 59,  248 => 57,  244 => 56,  240 => 55,  236 => 54,  232 => 53,  226 => 50,  222 => 49,  216 => 46,  212 => 45,  202 => 38,  196 => 35,  192 => 33,  174 => 32,  169 => 29,  160 => 26,  157 => 25,  153 => 24,  147 => 21,  143 => 20,  139 => 19,  135 => 18,  131 => 17,  124 => 13,  120 => 12,  116 => 11,  112 => 9,  102 => 8,  83 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/index.css') }}\">
{% endblock %}

{% block title %}Meals{% endblock %}

{% block body %}
      <h1 class=\"text-center mt-2\"><i>Yummi Recipes</i></h1>
<div class=\"d-flex justify-content-center pt-2\">
<a class=\"btn btn-primary mx-3\" href=\"{{ path('app_meals_index') }}\">All Meals</a>
<a class=\"btn btn-primary mx-3\" href=\"{{ path('app_meals_filtered', {'status': 'approved'}) }}\">Approved Meals</a>
<a class=\"btn btn-primary mx-3\" href=\"{{ path('app_meals_filtered', {'status': 'not_approved'}) }}\">Not Approved Meals</a>
</div>
<hr class=\"line\">
  <div class=\"d-flex justify-content-center pt-2\">
       <a class=\"btn btn-dark mx-3\" href=\"{{ path('app_user_access') }}\">All recipes</a>
    <a class=\"btn btn-dark mx-3\" href=\"{{ path('app_meals_filter_by_meal_type', {'mealType': 'vegan'}) }}\">Vegan</a>
    <a class=\"btn btn-dark mx-3\" href=\"{{ path('app_meals_filter_by_meal_type', {'mealType': 'vegeterian'}) }}\">Vegeterian</a>
    <a class=\"btn btn-dark mx-3\" href=\"{{ path('app_meals_filter_by_meal_type', {'mealType': 'meat'}) }}\">Meat</a>
    <a class=\"btn btn-dark mx-3\" href=\"{{ path('app_meals_filter_by_meal_type', {'mealType': 'fish'}) }}\">Fish</a>
</div>
<div class=\"container fadeout\" id=\"flash\">
{% for flashMessage in app.session.flashbag.get('success') %}

    {{ flashMessage }}

{% endfor %}
</div>
<div class=\"container\">
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
                    <p><b>Ingredients:</b>{{ meal.ingredients }}</p> 
                    <a class=\"btn btn-primary\" href=\"{{ path('app_meals_show', {'id': meal.id}) }}\">Show more</a>
                    <a class=\"btn btn-primary\" href=\"{{ path('app_meals_edit', {'id': meal.id}) }}\">Edit</a>
                    <a class=\"btn btn-primary\" href=\"{{ path('app_planner_new', {'id': meal.id}) }}\">Add to my plan</a>
                    {{ include('meals/_delete_form.html.twig') }}
                         <td>
                <form method=\"post\" action=\"{{ path('app_meals_index_some', {'id': meal.id}) }}\">
                        <input type=\"hidden\" name=\"{{ csrf_token('approve' ~ meal.id) }}\" value=\"{{ csrf_token('approve' ~ meal.id) }}\" />
                        <div class=\"form-check form-switch\">
                            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"switch{{ meal.id }}\" name=\"approved\" onchange=\"this.form.submit()\"
                                   {% if meal.approved %}checked{% endif %}>
                            <label class=\"form-check-label\" for=\"switch{{ meal.id }}\">
                                {{ meal.approved == false ? 'Approve' : 'Approved' }}
                            </label>
                        </div>
                    </form>
            </td>
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
                <td colspan=\"11\">No records found</td>
            </tr>
        {% endfor %}
    </div>
</div>

{% endblock %} 
", "meals/index.html.twig", "C:\\Users\\cvrlj\\Desktop\\CodeFactory\\Back-End\\FinalProject\\FullStackProject\\templates\\meals\\index.html.twig");
    }
}
