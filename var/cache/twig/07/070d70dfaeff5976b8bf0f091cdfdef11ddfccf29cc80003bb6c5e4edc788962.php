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

/* reports.twig */
class __TwigTemplate_d53610ee77e34c035a1d8e345eb4f4a23ad32fe0f5eb987195468d8bdccf9b4f extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "reports.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "

\t<h2 class=\"mt-4\">
\t\t";
        // line 8
        if ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("home")) {
            echo " My Latest Reports 
\t\t";
        } else {
            // line 10
            echo "\t\tReports
\t\t";
        }
        // line 12
        echo "\t</h2>

\t<div class=\"table-responsive\">
\t\t<table class=\"table table-sm\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Title</th>
\t\t\t\t\t<th scope=\"col\">Owner</th>
\t\t\t\t\t<th scope=\"col\">Created At</th>
\t\t\t\t\t<th scope=\"col\">Tags</th>
\t\t\t\t\t<th scope=\"col\">View</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 27
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "firstName", [], "any", false, false, false, 32), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "lastName", [], "any", false, false, false, 32), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "createdAt", [], "any", false, false, false, 35), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["report"], "tags", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 39
                echo "\t\t\t\t\t\t<span class=\"badge badge-info\"> ";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo " </span>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"/report/";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "reportID", [], "any", false, false, false, 43), "html", null, true);
            echo "\" class=\"btn btn-primary\">View</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "reports.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 47,  125 => 43,  121 => 41,  112 => 39,  108 => 38,  102 => 35,  94 => 32,  88 => 29,  84 => 27,  80 => 26,  64 => 12,  60 => 10,  55 => 8,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{# This Twig is Shared Between Home and Reports Pages #}

{% block contents %}


\t<h2 class=\"mt-4\">
\t\t{% if is_current_url('home') %} My Latest Reports 
\t\t{% else %}
\t\tReports
\t\t{% endif %}
\t</h2>

\t<div class=\"table-responsive\">
\t\t<table class=\"table table-sm\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Title</th>
\t\t\t\t\t<th scope=\"col\">Owner</th>
\t\t\t\t\t<th scope=\"col\">Created At</th>
\t\t\t\t\t<th scope=\"col\">Tags</th>
\t\t\t\t\t<th scope=\"col\">View</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t    {% for report in reports %}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ report.title }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ report.firstName }} {{ report.lastName }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ report.createdAt }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% for tag in report.tags %}
\t\t\t\t\t\t<span class=\"badge badge-info\"> {{ tag }} </span>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"/report/{{ report.reportID }}\" class=\"btn btn-primary\">View</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
    \t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>
{% endblock %}
", "reports.twig", "/var/www/html/rms-1/tmpl/reports.twig");
    }
}
