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

/* security/login.html.twig */
class __TwigTemplate_7bdf7586d15edfd9c08560122f202c1d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
";
        
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
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 10
            echo "<div class=\"mb-3\">
    You are logged in as ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "userName", [], "any", false, false, false, 11), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
</div>
";
        } else {
            // line 14
            echo "<form method=\"post\">
    ";
            // line 15
            if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })())) {
                // line 16
                echo "        <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "messageKey", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "messageData", [], "any", false, false, false, 16), "security"), "html", null, true);
                echo "</div>
    ";
            }
            // line 18
            echo "
    ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
                // line 20
                echo "        <div class=\"mx-3 text-center container\">
            You are logged in as ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "userName", [], "any", false, false, false, 21), "html", null, true);
                echo ", <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Logout</a>
        </div>
    ";
            }
            // line 24
            echo "
    <div id=\"main-wrapper\" class=\"container cont \">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10\">
                <div class=\"card border-0 shadow-lg\">
                    <div class=\"card-body p-0 \">
                        <div class=\"row no-gutters \">
                            <div class=\"col-lg-6\">
                                <div class=\"p-5\">
                                    <div class=\"mb-5\">
                                        <h2 class=\"h4 font-weight-bold text-primary\">Login</h2>
                                    </div>
                                    <h6 class=\"h5 mb-0\">Just do Login.</h6>
                                    <p class=\"text-muted mt-2 mb-5\">If You Really Want To Know, Look In The Login.</p>
                                    
                                        <div class=\"form-group\">
                                            <label for=\"inputEmail\">Email</label>
                                            <input type=\"email\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                        </div>
                                        <div class=\"form-group mb-5\">
                                            <label for=\"inputPassword\">Password</label>
                                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                        </div>

                                        <input type=\"hidden\" name=\"_csrf_token\"
                                        value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\"
                                 >
                                 <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                    Login
                                </button>
                                <p class=\"text-muted text-center mt-3 mb-0\">You don't have an account? <a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"\" class=\"text-primary ml-1\">Register</a></p>
                                </div>
                            </div>


                            <div class=\"col-lg-6 d-none d-lg-inline-block bg-primary\">
                                <div class=\"account-block rounded-right bg-primary\">
                                    <div class=\"overlay rounded-right bg-primary\"></div>
                                    <div class=\"account-testimonial\">
                                        <h1 class=\"text-white\">Meal Planner</h1>
                                        <h3 class=\"lead text-white\">Your own personal planner for your weekly meal schedule. <br> Make the best out of your diet!</h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
               
                <!-- end row -->
            </div>
            <!-- end col -->
        </div>
        <!-- Row -->
    </div>  
</form>
";
        }
        // line 83
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 83,  190 => 54,  182 => 49,  171 => 41,  152 => 24,  144 => 21,  141 => 20,  139 => 19,  136 => 18,  130 => 16,  128 => 15,  125 => 14,  117 => 11,  114 => 10,  112 => 9,  102 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/login.css') }}\">
{% endblock %}

{% block body %}
{% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_USER\") %}
<div class=\"mb-3\">
    You are logged in as {{ app.user.userName }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
</div>
{% else %}
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mx-3 text-center container\">
            You are logged in as {{ app.user.userName }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    <div id=\"main-wrapper\" class=\"container cont \">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10\">
                <div class=\"card border-0 shadow-lg\">
                    <div class=\"card-body p-0 \">
                        <div class=\"row no-gutters \">
                            <div class=\"col-lg-6\">
                                <div class=\"p-5\">
                                    <div class=\"mb-5\">
                                        <h2 class=\"h4 font-weight-bold text-primary\">Login</h2>
                                    </div>
                                    <h6 class=\"h5 mb-0\">Just do Login.</h6>
                                    <p class=\"text-muted mt-2 mb-5\">If You Really Want To Know, Look In The Login.</p>
                                    
                                        <div class=\"form-group\">
                                            <label for=\"inputEmail\">Email</label>
                                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                        </div>
                                        <div class=\"form-group mb-5\">
                                            <label for=\"inputPassword\">Password</label>
                                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                        </div>

                                        <input type=\"hidden\" name=\"_csrf_token\"
                                        value=\"{{ csrf_token('authenticate') }}\"
                                 >
                                 <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                    Login
                                </button>
                                <p class=\"text-muted text-center mt-3 mb-0\">You don't have an account? <a href=\"{{ path('app_register')}}\"\" class=\"text-primary ml-1\">Register</a></p>
                                </div>
                            </div>


                            <div class=\"col-lg-6 d-none d-lg-inline-block bg-primary\">
                                <div class=\"account-block rounded-right bg-primary\">
                                    <div class=\"overlay rounded-right bg-primary\"></div>
                                    <div class=\"account-testimonial\">
                                        <h1 class=\"text-white\">Meal Planner</h1>
                                        <h3 class=\"lead text-white\">Your own personal planner for your weekly meal schedule. <br> Make the best out of your diet!</h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
               
                <!-- end row -->
            </div>
            <!-- end col -->
        </div>
        <!-- Row -->
    </div>  
</form>
{% endif %}

{% endblock %}






 {# <div class=\" mycont\">
        <h1 class=\"h3 mb-3 font-weight-normal\">Sign in</h1>

        <label for=\"inputEmail\">Email</label>
        <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>

        <label for=\"inputPassword\">Password</label>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
    
        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"{{ csrf_token('authenticate') }}\"
        >
    
        <button class=\"btn btn-lg btn-primary\" type=\"submit\">
            Sign in
        </button>
    </div>
    #}", "security/login.html.twig", "C:\\Users\\cvrlj\\Desktop\\CodeFactory\\Back-End\\FinalProject\\FullStackProject\\templates\\security\\login.html.twig");
    }
}
