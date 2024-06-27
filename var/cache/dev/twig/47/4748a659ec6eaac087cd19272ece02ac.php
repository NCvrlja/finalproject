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

/* registration/register.html.twig */
class __TwigTemplate_fa555343099e307de287d4bb4dd80f0b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/register.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 11
            echo "<div class=\"mb-3\">
    You are logged in as ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "userIdentifier", [], "any", false, false, false, 12), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
</div>
";
        } else {
            // line 15
            echo "<form method=\"post\">
     ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
                // line 17
                echo "        <div class=\"mb-3\">
            You are logged in as ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "userIdentifier", [], "any", false, false, false, 18), "html", null, true);
                echo ", <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Logout</a>
        </div>
    ";
            }
            // line 21
            echo "
    <div id=\"main-wrapper\" class=\"container cont\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10\">
                <div class=\"card border-0 shadow-lg\">
                    <div class=\"card-body p-0\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-lg-6\">
                                <div class=\"p-5\">
                                    <div class=\"mb-5\">
                                        <h2 class=\"h4 font-weight-bold text-primary\">Register</h2>
                                    </div>
                                    <h6 class=\"h5 mb-0\">Just do Register.</h6>
                                    <p class=\"text-muted mt-2 mb-3\">If You Really Want To Know, Look In The Register.</p>
                                        
                                    ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), 'errors');
            echo "

                                    ";
            // line 38
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), 'form_start');
            echo "
                                        ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'row');
            echo "
                                        ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "user_name", [], "any", false, false, false, 40), 'row');
            echo "
                                        ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "plainPassword", [], "any", false, false, false, 41), 'row', ["label" => "Password"]);
            // line 43
            echo "
                                        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "country", [], "any", false, false, false, 44), 'row');
            echo "
                                        ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "agreeTerms", [], "any", false, false, false, 45), 'row');
            echo "
                                
                                        <button type=\"submit\" class=\"btn btn-primary mt-2\">Register</button>
                                    ";
            // line 48
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), 'form_end');
            echo "
                                    <p class=\"text-muted text-center mt-3 mb-0\">You already have an account? <a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"text-primary ml-1\">Login</a></p>

                                        
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
        // line 80
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 80,  194 => 49,  190 => 48,  184 => 45,  180 => 44,  177 => 43,  175 => 41,  171 => 40,  167 => 39,  163 => 38,  158 => 36,  141 => 21,  133 => 18,  130 => 17,  128 => 16,  125 => 15,  117 => 12,  114 => 11,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/register.css') }}\">
{% endblock %}

{% block body %}
{% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_USER\") %}
<div class=\"mb-3\">
    You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
</div>
{% else %}
<form method=\"post\">
     {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    <div id=\"main-wrapper\" class=\"container cont\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10\">
                <div class=\"card border-0 shadow-lg\">
                    <div class=\"card-body p-0\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-lg-6\">
                                <div class=\"p-5\">
                                    <div class=\"mb-5\">
                                        <h2 class=\"h4 font-weight-bold text-primary\">Register</h2>
                                    </div>
                                    <h6 class=\"h5 mb-0\">Just do Register.</h6>
                                    <p class=\"text-muted mt-2 mb-3\">If You Really Want To Know, Look In The Register.</p>
                                        
                                    {{ form_errors(registrationForm) }}

                                    {{ form_start(registrationForm) }}
                                        {{ form_row(registrationForm.email) }}
                                        {{ form_row(registrationForm.user_name) }}
                                        {{ form_row(registrationForm.plainPassword, {
                                            label: 'Password'
                                        }) }}
                                        {{ form_row(registrationForm.country) }}
                                        {{ form_row(registrationForm.agreeTerms) }}
                                
                                        <button type=\"submit\" class=\"btn btn-primary mt-2\">Register</button>
                                    {{ form_end(registrationForm) }}
                                    <p class=\"text-muted text-center mt-3 mb-0\">You already have an account? <a href=\"{{ path('app_login')}}\" class=\"text-primary ml-1\">Login</a></p>

                                        
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
", "registration/register.html.twig", "C:\\Users\\cvrlj\\Desktop\\CodeFactory\\finalproject\\templates\\registration\\register.html.twig");
    }
}
