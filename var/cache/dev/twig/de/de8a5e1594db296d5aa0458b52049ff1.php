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

/* components/navbar.html.twig */
class __TwigTemplate_ae1c70324ccfb6218e0e4a6c2c07f46a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/navbar.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "
<nav class=\"navbar navbar-expand-lg navbar bg-primary\" data-bs-theme=\"dark\">
    <div class=\"container-fluid \">
      ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "      <img class=\"avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "picture", [], "any", false, false, false, 8))), "html", null, true);
            echo "\" alt=\"test\">
      <div class=\"dropdown ms-2\">
        <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          ";
            // line 11
            ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "html", null, true))) : (print ("")));
            echo "
        </button>
        <ul class=\"dropdown-menu\">
          <li><a class=\"text-light nav-link active px-5 \" href=\"/logout\">Logout</a></li>  
        </ul>
      </div>
      ";
            // line 18
            echo "      ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 19
            echo "      <img class=\"avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "picture", [], "any", false, false, false, 19))), "html", null, true);
            echo "\" alt=\"test\">
      <div class=\"dropdown ms-2\">
        <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          ";
            // line 22
            ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "html", null, true))) : (print ("")));
            echo "
        </button>
        <ul class=\"dropdown-menu \">
          <li class=\"\"><a class=\"text-light nav-link active px-5 \" href=\"/logout\">Logout</a></li>  
        </ul>
      </div>
        ";
            // line 29
            echo "
      ";
        } else {
            // line 31
            echo "      ";
        }
        // line 32
        echo "      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
          <li class=\"nav-item\">
          
            ";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meals_index");
            echo "\">Home
            ";
            // line 41
            if (((array_key_exists("newStuff", $context)) ? (_twig_default_filter((isset($context["newStuff"]) || array_key_exists("newStuff", $context) ? $context["newStuff"] : (function () { throw new RuntimeError('Variable "newStuff" does not exist.', 41, $this->source); })()), false)) : (false))) {
                // line 42
                echo "            <span class=\"position-absolute top-20 start-90 translate-middle p-2 bg-danger border border-light rounded-circle\">
              <span class=\"visually-hidden\">New alerts</span>
            </span>
            ";
            }
            // line 46
            echo "            </a>
            ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 48
            echo "            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_access");
            echo "\">Home</a>
            ";
        } else {
            // line 50
            echo "              
            ";
        }
        // line 52
        echo "          </li>
          <li class=\"nav-item active\">
            ";
        // line 54
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 55
            echo "            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meals_new");
            echo "\">Add meal</a>
            ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 57
            echo "            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_access_new");
            echo "\">Add meal</a>
            ";
        } else {
            // line 59
            echo "            ";
        }
        // line 60
        echo "          </li>
          <li class=\"nav-item active\">
            ";
        // line 62
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 63
            echo "            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planner_index");
            echo "\">My Planner</a>
            ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 65
            echo "            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planner_index");
            echo "\">My Planner</a>
            ";
        }
        // line 67
        echo "          </li>

           <li class=\"nav-item active\">
            ";
        // line 70
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 71
            echo "          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user");
            echo "\">Users</a>
            ";
        }
        // line 73
        echo "          </li>
          
        </ul>
        ";
        // line 76
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 77
            echo "          ";
            // line 81
            echo "        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 82
            echo "          ";
            // line 86
            echo "        ";
        } else {
            // line 87
            echo "        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_static");
            echo "\">Home</a>
            </li>
             <li class=\"nav-item\">
              <a class=\"nav-link active\" aria-current=\"page\" href=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login/Register</a>
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
              <li class=\"nav-item\">
                ";
            // line 96
            echo "              </li>
            </div>
          ";
            // line 99
            echo "        ";
        }
        // line 100
        echo "        </form>
      </div>
    </div>
  </nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/navbar.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "components/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 2,  238 => 1,  225 => 100,  222 => 99,  218 => 96,  212 => 92,  206 => 89,  202 => 87,  199 => 86,  197 => 82,  194 => 81,  192 => 77,  190 => 76,  185 => 73,  179 => 71,  177 => 70,  172 => 67,  166 => 65,  160 => 63,  158 => 62,  154 => 60,  151 => 59,  145 => 57,  139 => 55,  137 => 54,  133 => 52,  129 => 50,  123 => 48,  119 => 46,  113 => 42,  111 => 41,  106 => 40,  104 => 39,  95 => 32,  92 => 31,  88 => 29,  79 => 22,  72 => 19,  69 => 18,  60 => 11,  53 => 8,  51 => 7,  46 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/navbar.css') }}\">
{% endblock %}

<nav class=\"navbar navbar-expand-lg navbar bg-primary\" data-bs-theme=\"dark\">
    <div class=\"container-fluid \">
      {% if is_granted(\"ROLE_ADMIN\") %}
      <img class=\"avatar\" src=\"{{ asset('pictures/' ~ app.user.picture) }}\" alt=\"test\">
      <div class=\"dropdown ms-2\">
        <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          {{ app.user? app.user : \"\" }}
        </button>
        <ul class=\"dropdown-menu\">
          <li><a class=\"text-light nav-link active px-5 \" href=\"/logout\">Logout</a></li>  
        </ul>
      </div>
      {# <a class=\"nav-link active text-light\" aria-current=\"page\" href=\"{{ path('app_user_access')}}\"><h4>{{ app.user? app.user : \"\" }}</h4></a> #}
      {% elseif  is_granted(\"ROLE_USER\") %}
      <img class=\"avatar\" src=\"{{ asset('pictures/' ~ app.user.picture) }}\" alt=\"test\">
      <div class=\"dropdown ms-2\">
        <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          {{ app.user? app.user : \"\" }}
        </button>
        <ul class=\"dropdown-menu \">
          <li class=\"\"><a class=\"text-light nav-link active px-5 \" href=\"/logout\">Logout</a></li>  
        </ul>
      </div>
        {# <a class=\"nav-link active text-light\" aria-current=\"page\" href=\"{{ path('app_user_access')}}\"><h4>{{ app.user? app.user : \"\" }}</h4></a> #}

      {% else %}
      {% endif %}
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
          <li class=\"nav-item\">
          
            {% if is_granted(\"ROLE_ADMIN\") %}
            <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_meals_index')}}\">Home
            {% if newStuff|default(false) %}
            <span class=\"position-absolute top-20 start-90 translate-middle p-2 bg-danger border border-light rounded-circle\">
              <span class=\"visually-hidden\">New alerts</span>
            </span>
            {% endif %}
            </a>
            {% elseif  is_granted(\"ROLE_USER\") %}
            <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_user_access')}}\">Home</a>
            {% else %}
              
            {% endif %}
          </li>
          <li class=\"nav-item active\">
            {% if is_granted(\"ROLE_ADMIN\") %}
            <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_meals_new')}}\">Add meal</a>
            {%  elseif  is_granted(\"ROLE_USER\") %}
            <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_user_access_new')}}\">Add meal</a>
            {% else %}
            {% endif %}
          </li>
          <li class=\"nav-item active\">
            {% if is_granted(\"ROLE_ADMIN\") %}
            <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_planner_index') }}\">My Planner</a>
            {% elseif  is_granted(\"ROLE_USER\")%}
            <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_planner_index') }}\">My Planner</a>
            {% endif %}
          </li>

           <li class=\"nav-item active\">
            {% if is_granted(\"ROLE_ADMIN\") %}
          <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_admin_user') }}\">Users</a>
            {% endif %}
          </li>
          
        </ul>
        {% if is_granted(\"ROLE_ADMIN\") %}
          {# <form class=\"d-flex\" role=\"search\">
            <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-success\" type=\"submit\">Search</button>
          </form> #}
        {% elseif  is_granted(\"ROLE_USER\") %}
          {# <form class=\"d-flex\" role=\"search\">
            <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-success\" type=\"submit\">Search</button>
          </form> #}
        {% else %}
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_static')}}\">Home</a>
            </li>
             <li class=\"nav-item\">
              <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_login')}}\">Login/Register</a>
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
              <li class=\"nav-item\">
                {# <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_register')}}\">Resgister</a> #}
              </li>
            </div>
          {# <div style=\"height: 40px;\"></div> #}
        {% endif %}
        </form>
      </div>
    </div>
  </nav>", "components/navbar.html.twig", "C:\\Users\\cvrlj\\Desktop\\CodeFactory\\Back-End\\FinalProject\\FullStackProject\\templates\\components\\navbar.html.twig");
    }
}
