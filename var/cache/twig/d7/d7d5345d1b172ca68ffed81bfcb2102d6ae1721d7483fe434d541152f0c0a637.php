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

/* index.twig */
class __TwigTemplate_88e487fd6534c926081fe3936d132a2b178c7a326ff88682917aa48e619907b7 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "

\t<h2 class=\"mt-4\">
\t\t";
        // line 7
        if ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("home")) {
            echo " My Latest Reports 
\t\t";
        } else {
            // line 9
            echo "\t\tReports
\t\t";
        }
        // line 11
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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 26
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "firstName", [], "any", false, false, false, 31), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "lastName", [], "any", false, false, false, 31), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "createdAt", [], "any", false, false, false, 34), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "tags", [], "any", false, false, false, 37), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"/reports/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "reportID", [], "any", false, false, false, 40), "html", null, true);
            echo "\" class=\"btn btn-primary\">View</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  114 => 40,  108 => 37,  102 => 34,  94 => 31,  88 => 28,  84 => 26,  80 => 25,  64 => 11,  60 => 9,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

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
\t\t\t\t\t\t{{ report.tags }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"/reports/{{ report.reportID }}\" class=\"btn btn-primary\">View</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
    \t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>
{% endblock %}
", "index.twig", "/var/www/html/rms-1/tmpl/index.twig");
    }
}
