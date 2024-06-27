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

/* planner/index.html.twig */
class __TwigTemplate_a17d03fbe9bb81d7f215f92778ebe9e7 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planner/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planner/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "planner/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Planner";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container mt-5 mb-4\">
        <h1>My Planner</h1>

    <form  action=\"\" method=\"POST\">
        <div class=\"d-flex  justify-content-between\" style=\"width: 40%;\">
            <div style=\"width: 40%;\">
                <input class=\"form-control\" type=\"date\" name=\"from\">
            </div>
            <div style=\"width: 40%;\">
                <input class=\"form-control\" type=\"date\" name=\"to\">  
            </div>
            <div style=\"width: auto;\">
                <button class=\"btn btn-primary\" type=\"submit\">submit</button>
            </div>
        </div>

       
    </form>

    </div>
    <div class=\"container mb-5  \" >
        
    <table class=\"table shadow-lg border border-5\">
        ";
        // line 39
        echo "        <tbody>
            ";
        // line 40
        $context["lastDate"] = null;
        // line 41
        echo "            
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["planners"]) || array_key_exists("planners", $context) ? $context["planners"] : (function () { throw new RuntimeError('Variable "planners" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["planner"]) {
            // line 43
            echo "
            ";
            // line 44
            if (((isset($context["lastDate"]) || array_key_exists("lastDate", $context) ? $context["lastDate"] : (function () { throw new RuntimeError('Variable "lastDate" does not exist.', 44, $this->source); })()) == twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planner"], "date", [], "any", false, false, false, 44), "Y-m-d"))) {
                // line 45
                echo "            ";
                // line 46
                echo "                
                <td>
                ";
                // line 49
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planner"], "timeToEat", [], "any", false, false, false, 49) == "1")) {
                    // line 50
                    echo "                    Breakfast
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 51
$context["planner"], "timeToEat", [], "any", false, false, false, 51) == "2")) {
                    // line 52
                    echo "                    Lunch
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 53
$context["planner"], "timeToEat", [], "any", false, false, false, 53) == "3")) {
                    // line 54
                    echo "                    Dinner
                ";
                } else {
                    // line 56
                    echo "                    Wrong valuue in database. Must be 1,2 or 3.
                ";
                }
                // line 58
                echo "                
                </td>            
                ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["meals"]) || array_key_exists("meals", $context) ? $context["meals"] : (function () { throw new RuntimeError('Variable "meals" does not exist.', 60, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["meal"]) {
                    // line 61
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["meal"], "id", [], "any", false, false, false, 61) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["planner"], "fkMeal", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61))) {
                        // line 62
                        echo "                        <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "mealName", [], "any", false, false, false, 62), "html", null, true);
                        echo "</td>
                        <td>";
                        // line 63
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "mealtype", [], "any", false, false, false, 63), "html", null, true);
                        echo "</td>
                        <td>";
                        // line 64
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "preparationTime", [], "any", false, false, false, 64), "html", null, true);
                        echo "</td>
                    
                    ";
                    }
                    // line 67
                    echo "                    
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meal'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                <td>
                    <a class=\"btn btn-secondary\" href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meals_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["planner"], "fkMeal", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\">show</a>
                    <a class=\"btn btn-secondary\" href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planner_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["planner"], "id", [], "any", false, false, false, 71)]), "html", null, true);
                echo "\">edit</a>
                </td>
            </tr>
            
            ";
            } else {
                // line 76
                echo "            ";
                // line 79
                echo "            <tr>
                <td class=\"table text-light bg-primary fs-4\" colspan=\"100\">";
                // line 80
                echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planner"], "date", [], "any", false, false, false, 80), "l") . " ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planner"], "date", [], "any", false, false, false, 80), "Y-m-d")), "html", null, true);
                echo "</td>
            </tr>
            ";
                // line 83
                echo "                <td>
                ";
                // line 85
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planner"], "timeToEat", [], "any", false, false, false, 85) == "1")) {
                    // line 86
                    echo "                    Breakfast
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 87
$context["planner"], "timeToEat", [], "any", false, false, false, 87) == "2")) {
                    // line 88
                    echo "                    Lunch
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 89
$context["planner"], "timeToEat", [], "any", false, false, false, 89) == "3")) {
                    // line 90
                    echo "                    Dinner
                ";
                } else {
                    // line 92
                    echo "                    Wrong value in database. Must be 1,2 or 3.
                ";
                }
                // line 94
                echo "                </td>              
                ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["meals"]) || array_key_exists("meals", $context) ? $context["meals"] : (function () { throw new RuntimeError('Variable "meals" does not exist.', 95, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["meal"]) {
                    // line 96
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["meal"], "id", [], "any", false, false, false, 96) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["planner"], "fkMeal", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96))) {
                        // line 97
                        echo "                        <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "mealName", [], "any", false, false, false, 97), "html", null, true);
                        echo "</td>
                        <td>";
                        // line 98
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "mealtype", [], "any", false, false, false, 98), "html", null, true);
                        echo "</td>
                        <td>";
                        // line 99
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meal"], "preparationTime", [], "any", false, false, false, 99), "html", null, true);
                        echo "</td>
                        
                    ";
                    }
                    // line 102
                    echo "                    
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meal'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "                <td>
                    <a class=\"btn btn-secondary\" href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meals_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["planner"], "fkMeal", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105)]), "html", null, true);
                echo "\">show</a>
                    <a class=\"btn btn-secondary\" href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planner_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["planner"], "id", [], "any", false, false, false, 106)]), "html", null, true);
                echo "\">edit</a>
                </td>
            </tr>
            
            ";
            }
            // line 111
            echo "            
            ";
            // line 112
            $context["lastDate"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planner"], "date", [], "any", false, false, false, 112), "Y-m-d");
            // line 113
            echo "
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 115
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "        ";
        // line 149
        echo "        </tbody>
    </table>

    ";
        // line 153
        echo "    </div>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 157
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 158
        echo "<style>
    /* table, td, tr, tbody {
        border: none !important;
    }

    .myBorder {
        border: 1px solid grey !important;
    } */

    /* .table-custom-color{
        background: rgb(2,0,36)!important;
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(0,212,255,1) 75%)!important; 
    } */
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "planner/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 158,  328 => 157,  316 => 153,  311 => 149,  309 => 119,  300 => 115,  294 => 113,  292 => 112,  289 => 111,  281 => 106,  277 => 105,  274 => 104,  267 => 102,  261 => 99,  257 => 98,  252 => 97,  249 => 96,  245 => 95,  242 => 94,  238 => 92,  234 => 90,  232 => 89,  229 => 88,  227 => 87,  224 => 86,  221 => 85,  218 => 83,  213 => 80,  210 => 79,  208 => 76,  200 => 71,  196 => 70,  193 => 69,  186 => 67,  180 => 64,  176 => 63,  171 => 62,  168 => 61,  164 => 60,  160 => 58,  156 => 56,  152 => 54,  150 => 53,  147 => 52,  145 => 51,  142 => 50,  139 => 49,  135 => 46,  133 => 45,  131 => 44,  128 => 43,  123 => 42,  120 => 41,  118 => 40,  115 => 39,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Planner{% endblock %}

{% block body %}

    <div class=\"container mt-5 mb-4\">
        <h1>My Planner</h1>

    <form  action=\"\" method=\"POST\">
        <div class=\"d-flex  justify-content-between\" style=\"width: 40%;\">
            <div style=\"width: 40%;\">
                <input class=\"form-control\" type=\"date\" name=\"from\">
            </div>
            <div style=\"width: 40%;\">
                <input class=\"form-control\" type=\"date\" name=\"to\">  
            </div>
            <div style=\"width: auto;\">
                <button class=\"btn btn-primary\" type=\"submit\">submit</button>
            </div>
        </div>

       
    </form>

    </div>
    <div class=\"container mb-5  \" >
        
    <table class=\"table shadow-lg border border-5\">
        {# <thead>
            <tr>
                <th>Intended Time</th>
                <th>Meal</th>
                <th>Type</th>
                <th>Preperation Time</th>
                <th> </th>
            </tr>
        </thead> #}
        <tbody>
            {% set lastDate = null %}
            
            {% for planner in planners %}

            {% if lastDate == planner.date|date(\"Y-m-d\") %}
            {# <tr class=\"table-secondary\"> #}
                
                <td>
                {# {{ planner.timeToEat }} #}
                {% if planner.timeToEat == \"1\" %}
                    Breakfast
                {% elseif planner.timeToEat == \"2\" %}
                    Lunch
                {% elseif planner.timeToEat == \"3\" %}
                    Dinner
                {% else %}
                    Wrong valuue in database. Must be 1,2 or 3.
                {% endif %}
                
                </td>            
                {% for meal in meals %}
                    {% if meal.id == planner.fkMeal.id %}
                        <td>{{meal.mealName}}</td>
                        <td>{{ meal.mealtype }}</td>
                        <td>{{meal.preparationTime}}</td>
                    
                    {% endif %}
                    
                {% endfor %}
                <td>
                    <a class=\"btn btn-secondary\" href=\"{{ path('app_meals_show', {'id': planner.fkMeal.id}) }}\">show</a>
                    <a class=\"btn btn-secondary\" href=\"{{ path('app_planner_edit', {'id': planner.id}) }}\">edit</a>
                </td>
            </tr>
            
            {% else %}
            {# <tr>
                <td class=\"table-custom-color\" colspan=\"100\"></td>
            </tr> #}
            <tr>
                <td class=\"table text-light bg-primary fs-4\" colspan=\"100\">{{ planner.date|date(\"l\") ~ \" \" ~ planner.date|date(\"Y-m-d\") }}</td>
            </tr>
            {# <tr class=\"table-secondary\">  #}
                <td>
                {# {{ planner.timeToEat }} #}
                {% if planner.timeToEat == \"1\" %}
                    Breakfast
                {% elseif planner.timeToEat == \"2\" %}
                    Lunch
                {% elseif planner.timeToEat == \"3\" %}
                    Dinner
                {% else %}
                    Wrong value in database. Must be 1,2 or 3.
                {% endif %}
                </td>              
                {% for meal in meals %}
                    {% if meal.id == planner.fkMeal.id %}
                        <td>{{meal.mealName}}</td>
                        <td>{{ meal.mealtype }}</td>
                        <td>{{meal.preparationTime}}</td>
                        
                    {% endif %}
                    
                {% endfor %}
                <td>
                    <a class=\"btn btn-secondary\" href=\"{{ path('app_meals_show', {'id': planner.fkMeal.id}) }}\">show</a>
                    <a class=\"btn btn-secondary\" href=\"{{ path('app_planner_edit', {'id': planner.id}) }}\">edit</a>
                </td>
            </tr>
            
            {% endif %}
            
            {% set lastDate = planner.date|date(\"Y-m-d\") %}

            {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        {# {% for planner in planners %}
        {% if planner.date >= now %}
        
            <tr>
                <td>{{ planner.id }}</td>
                <td>{{ planner.timeToEat }}</td>
                <td>{{ planner.date ? planner.date|date('Y-m-d') : '' }}</td>
                <td>{{ planner.fkUser.email }}</td>
                {% for user in users %}
                    {% if user.id == planner.fkUser.id %}
                        <td>{{user.userName}}</td>
                    {% endif %}
                {% endfor %}
                <td>{{ planner.fkMeal.id }}</td>
                {% for meal in meals %}
                    {% if meal.id == planner.fkMeal.id %}
                        <td>{{meal.mealName}}</td>
                    {% endif %}
                {% endfor %}
                <td>
                    <a href=\"{{ path('app_planner_show', {'id': planner.id}) }}\">show</a>
                    <a href=\"{{ path('app_planner_edit', {'id': planner.id}) }}\">edit</a>
                </td>
            </tr>
            {% endif %}
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %} #}
        </tbody>
    </table>

    {# <a href=\"{{ path('app_planner_new') }}\">Create new</a> #}
    </div>
    
{% endblock %}

{% block stylesheets %}
<style>
    /* table, td, tr, tbody {
        border: none !important;
    }

    .myBorder {
        border: 1px solid grey !important;
    } */

    /* .table-custom-color{
        background: rgb(2,0,36)!important;
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(0,212,255,1) 75%)!important; 
    } */
</style>
{% endblock %}", "planner/index.html.twig", "C:\\Users\\cvrlj\\Desktop\\CodeFactory\\finalproject\\templates\\planner\\index.html.twig");
    }
}
