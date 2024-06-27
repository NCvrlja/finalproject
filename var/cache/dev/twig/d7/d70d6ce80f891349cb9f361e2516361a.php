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

/* components/footer.html.twig */
class __TwigTemplate_4974763f0ff633b3d65dd629395a3af6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/footer.html.twig"));

        // line 1
        echo "<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" />
<div class=\"footer footcont\">
\t<div class=\"container \">\t\t
\t\t<div class=\"row text-center\">\t\t\t\t\t\t
\t\t\t<div class=\"col-lg-12 col-sm-12 col-xs-12\">
\t\t\t\t<div class=\"footer_menu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"#\">About</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Service</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Works</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t<div class=\"footer_copyright\">
\t\t\t\t\t<p>© 2023 Fullstack Project - Team 5</p>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"footer_profile\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"https://www.facebook.com/\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://twitter.com/\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://www.instagram.com/\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://github.com/\"><i class=\"fa fa-github\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t</div><!--- END COL -->\t\t\t\t\t\t\t
\t\t</div><!--- END ROW -->\t\t\t\t\t
\t</div><!--- END CONTAINER -->
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" />
<div class=\"footer footcont\">
\t<div class=\"container \">\t\t
\t\t<div class=\"row text-center\">\t\t\t\t\t\t
\t\t\t<div class=\"col-lg-12 col-sm-12 col-xs-12\">
\t\t\t\t<div class=\"footer_menu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"#\">About</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Service</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Works</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t<div class=\"footer_copyright\">
\t\t\t\t\t<p>© 2023 Fullstack Project - Team 5</p>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"footer_profile\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"https://www.facebook.com/\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://twitter.com/\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://www.instagram.com/\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://github.com/\"><i class=\"fa fa-github\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t</div><!--- END COL -->\t\t\t\t\t\t\t
\t\t</div><!--- END ROW -->\t\t\t\t\t
\t</div><!--- END CONTAINER -->
</div>", "components/footer.html.twig", "C:\\Users\\cvrlj\\Desktop\\CodeFactory\\Back-End\\FinalProject\\FullStackProject\\templates\\components\\footer.html.twig");
    }
}
