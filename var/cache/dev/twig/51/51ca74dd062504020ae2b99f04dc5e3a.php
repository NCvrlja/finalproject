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

/* user/user_list.html.twig */
class __TwigTemplate_f8475f06dd8c0bef81982c575a7f6b11 extends Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/user_list.html.twig", 1);
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

        echo "Admin Users";
        
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
        echo "    ";
        // line 7
        echo "    <main class=\"container mt-5 mb-5\">
        <div class=\"card shadow-lg border border-3\">
            <div style=\"font-weight: bold\" class=\"card-header\">User Panel</div>
            <div class=\"card-block p-0\">
                <table class=\"table table-bordered table-sm m-0\">
                    <thead class=\"\">
                    <tr>
                
                <td style=\"font-weight: bold\">ID</td>
                <td style=\"font-weight: bold\">Name</td>
                <td style=\"font-weight: bold\">E-mail</td>
                <td></td>
                </tr>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "                <tr>
                
                    
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userName", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td class=\"p-2\">
                        ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["user"], "isStatus", [], "any", false, false, false, 28)) {
                // line 29
                echo "                            <a class=\"btn btn-danger \" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_ban", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\">Ban User</a>
                        ";
            } else {
                // line 31
                echo "                            <a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_unban", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">Restore User</a>
                        ";
            }
            // line 33
            echo "                        
                    </td>
                    
                    
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>
    </main>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 71
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/user_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 71,  166 => 70,  153 => 39,  142 => 33,  136 => 31,  130 => 29,  128 => 28,  123 => 26,  119 => 25,  115 => 24,  110 => 21,  106 => 20,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Users{% endblock %}

{% block body %}
    {# <h1>Admin Users</h1> #}
    <main class=\"container mt-5 mb-5\">
        <div class=\"card shadow-lg border border-3\">
            <div style=\"font-weight: bold\" class=\"card-header\">User Panel</div>
            <div class=\"card-block p-0\">
                <table class=\"table table-bordered table-sm m-0\">
                    <thead class=\"\">
                    <tr>
                
                <td style=\"font-weight: bold\">ID</td>
                <td style=\"font-weight: bold\">Name</td>
                <td style=\"font-weight: bold\">E-mail</td>
                <td></td>
                </tr>
            {% for user in users %}
                <tr>
                
                    
                    <td>{{ user.id }}</td>
                    <td>{{ user.userName }}</td>
                    <td>{{ user.email }}</td>
                    <td class=\"p-2\">
                        {% if user.isStatus %}
                            <a class=\"btn btn-danger \" href=\"{{ path('admin_user_ban', {'id': user.id}) }}\">Ban User</a>
                        {% else %}
                            <a class=\"btn btn-danger\" href=\"{{ path('admin_user_unban', {'id': user.id}) }}\">Restore User</a>
                        {% endif %}
                        
                    </td>
                    
                    
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </main>
    {# <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th> <!-- Добавили столбец для действий -->
            </tr>
        </thead>
        <tbody>
            {% for user in users %}
                <tr>
                    <td>{{ user.id }}</td>
                    <td>{{ user.userName }}</td> <!-- Поправили вывод имени пользователя -->
                    <td>{{ user.email }}</td>
                    <td>
                        {% if user.isStatus %}
                            <a class=\"btn btn-danger\" href=\"{{ path('admin_user_ban', {'id': user.id}) }}\">Ban</a>
                        {% else %}
                            <a class=\"btn btn-danger\" href=\"{{ path('admin_user_unban', {'id': user.id}) }}\">Unban</a>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table> #}
{% endblock %}

{% block stylesheet %}

{% endblock %}", "user/user_list.html.twig", "C:\\Users\\cvrlj\\Desktop\\CodeFactory\\finalproject\\templates\\user\\user_list.html.twig");
    }
}
