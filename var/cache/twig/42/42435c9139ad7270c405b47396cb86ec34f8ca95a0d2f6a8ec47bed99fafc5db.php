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

/* login.twig */
class __TwigTemplate_93c35cbfc53dbec01f7039bad4b1cd2c4f578a9036edccbb165b1882b20cda65 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contents' => [$this, 'block_contents'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<h1>
\t\tLogin
\t</h1>

\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("login"), "html", null, true);
        echo "\" method=\"post\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\">Username</label>
\t\t\t<input type=\"text\" name=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter username\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"password\">Password</label>
\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\">
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Login</button>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block contents %}
\t<h1>
\t\tLogin
\t</h1>

\t<form action=\"{{ url_for('login') }}\" method=\"post\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\">Username</label>
\t\t\t<input type=\"text\" name=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter username\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"password\">Password</label>
\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\">
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Login</button>
\t</form>
{% endblock %}
", "login.twig", "/var/www/html/rms-1/tmpl/login.twig");
    }
}
