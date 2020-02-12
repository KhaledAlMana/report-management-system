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

/* profile.twig */
class __TwigTemplate_e5fd73d143640cd0dab619ab21ee22f55e2e9fa2055b1a22345e3368df96497b extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "profile.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<h1>Profile - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>

\t<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("profile"), "html", null, true);
        echo "\" method=\"post\">
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"fname\">First Name</label>
\t\t\t<input type=\"text\" name=\"firstName\" class=\"form-control\" id=\"fname\" placeholder=\"Enter First Name\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", false, false, false, 10), "html", null, true);
        echo "\" required>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"lname\">Last Name</label>
\t\t\t<input type=\"text\" name=\"lastName\" class=\"form-control\" id=\"lname\" placeholder=\"Enter Last Name\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", false, false, false, 15), "html", null, true);
        echo "\" required>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\">Email</label>
\t\t\t<input type=\"text\" name=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter Email\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "\" disabled>
\t\t</div>
\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"password\">Password</label>
\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" >
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"cpassword\">Confirm Password</label>
\t\t\t<input type=\"password\" name=\"cpassword\" class=\"form-control\" id=\"cpassword\" placeholder=\"Password\" >
\t\t</div>
\t\t<p>Created At: ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "createdAt", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
\t\t<p>Modified At: ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "modifiedAt", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>

\t\t<button type=\"submit\" class=\"btn btn-primary\">Update</button>
\t</form>


";
    }

    public function getTemplateName()
    {
        return "profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  95 => 31,  81 => 20,  73 => 15,  65 => 10,  58 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block contents %}
\t<h1>Profile - {{ user.firstName }} {{ user.lastName }}</h1>

\t<form action=\"{{ url_for('profile') }}\" method=\"post\">
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"fname\">First Name</label>
\t\t\t<input type=\"text\" name=\"firstName\" class=\"form-control\" id=\"fname\" placeholder=\"Enter First Name\" value=\"{{user.firstName}}\" required>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"lname\">Last Name</label>
\t\t\t<input type=\"text\" name=\"lastName\" class=\"form-control\" id=\"lname\" placeholder=\"Enter Last Name\" value=\"{{user.lastName}}\" required>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\">Email</label>
\t\t\t<input type=\"text\" name=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter Email\" value=\"{{user.email}}\" disabled>
\t\t</div>
\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"password\">Password</label>
\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" >
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"cpassword\">Confirm Password</label>
\t\t\t<input type=\"password\" name=\"cpassword\" class=\"form-control\" id=\"cpassword\" placeholder=\"Password\" >
\t\t</div>
\t\t<p>Created At: {{ user.createdAt }}</p>
\t\t<p>Modified At: {{ user.modifiedAt }}</p>

\t\t<button type=\"submit\" class=\"btn btn-primary\">Update</button>
\t</form>


{% endblock %}
", "profile.twig", "/var/www/html/rms-1/tmpl/profile.twig");
    }
}
