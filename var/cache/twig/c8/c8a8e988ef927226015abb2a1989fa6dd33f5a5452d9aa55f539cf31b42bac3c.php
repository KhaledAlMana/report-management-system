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

/* error/default.twig */
class __TwigTemplate_db9236ad76f100e4552c46c8df0128e31942c5b569f932d7c4e5c7fcd742c5e2 extends Template
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
        return "error/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("error/layout.twig", "error/default.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<h1>Slim4 Error</h1>
\t<h2>";
        // line 5
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h2>
\t";
        // line 6
        if (($context["debug"] ?? null)) {
            // line 7
            echo "\t\t<h3>Details</h3>
\t\t<ul>
\t\t\t<li><b>Type: </b>";
            // line 9
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "</li>
\t\t\t<li><b>Code: </b>";
            // line 10
            echo twig_escape_filter($this->env, ($context["code"] ?? null), "html", null, true);
            echo "</li>
\t\t\t<li><b>Message: </b>";
            // line 11
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</li>
\t\t\t<li><b>File: </b>";
            // line 12
            echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
            echo "</li>
\t\t\t<li><b>Line: </b>";
            // line 13
            echo twig_escape_filter($this->env, ($context["line"] ?? null), "html", null, true);
            echo "</li>
\t\t</ul>
\t\t<h3>Trace</h3>
\t\t";
            // line 16
            echo nl2br(twig_escape_filter($this->env, ($context["trace"] ?? null), "html", null, true));
            echo "
\t";
        }
    }

    public function getTemplateName()
    {
        return "error/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  79 => 13,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  59 => 7,  57 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'error/layout.twig' %}

{% block contents %}
\t<h1>Slim4 Error</h1>
\t<h2>{{ title }}</h2>
\t{% if debug %}
\t\t<h3>Details</h3>
\t\t<ul>
\t\t\t<li><b>Type: </b>{{ type }}</li>
\t\t\t<li><b>Code: </b>{{ code }}</li>
\t\t\t<li><b>Message: </b>{{ message }}</li>
\t\t\t<li><b>File: </b>{{ file }}</li>
\t\t\t<li><b>Line: </b>{{ line }}</li>
\t\t</ul>
\t\t<h3>Trace</h3>
\t\t{{ trace|nl2br }}
\t{% endif %}
{% endblock %}
", "error/default.twig", "/var/www/html/rms-1/tmpl/error/default.twig");
    }
}
