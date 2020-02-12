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

/* report.twig */
class __TwigTemplate_e18fb004c24da5dbe87323e52b4312553680c79499b4cb8f080e1bfe70e5e33f extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "report.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
\t<h2>Title:  ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "report", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "\t</h2>
\t<h4>Status: \t
\t\t";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "report", [], "any", false, false, false, 7), "isPublic", [], "any", false, false, false, 7)) {
            // line 8
            echo "\t \t<span class=\"btn btn-success\"> Public </span>
\t\t ";
        } else {
            // line 10
            echo "\t \t<span class=\"btn btn-secondary\"> Restricted </span>
\t\t";
        }
        // line 12
        echo "\t</h4>
\t<br>
\t<h4>Description:</h4>
\t<p> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "report", [], "any", false, false, false, 15), "description", [], "any", false, false, false, 15), "html", null, true);
        echo " </p>

\t<br>
\t<h4>Attachments:</h4>
\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "attachments", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
            // line 20
            echo "\t<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "path", [], "any", false, false, false, 20), "html", null, true);
            echo "\" class=\"btn btn-success\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo " </a>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t<br>
\t<br>

\t<p>
\t\tTags: \t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "tags", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 27
            echo "\t\t<span class=\"badge badge-info\"> ";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo " </span>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t</p>
\t<p>Created At: ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "report", [], "any", false, false, false, 30), "createdAt", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
\t<p>Modified At: ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "report", [], "any", false, false, false, 31), "modifiedAt", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
\t
\t<button type=\"submit\" class=\"btn btn-primary\">Update</button>


";
    }

    public function getTemplateName()
    {
        return "report.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  117 => 30,  114 => 29,  105 => 27,  101 => 26,  95 => 22,  84 => 20,  80 => 19,  73 => 15,  68 => 12,  64 => 10,  60 => 8,  58 => 7,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block contents %}

\t<h2>Title:  {{ report.report.title }}\t</h2>
\t<h4>Status: \t
\t\t{% if report.report.isPublic %}
\t \t<span class=\"btn btn-success\"> Public </span>
\t\t {% else %}
\t \t<span class=\"btn btn-secondary\"> Restricted </span>
\t\t{% endif %}
\t</h4>
\t<br>
\t<h4>Description:</h4>
\t<p> {{report.report.description }} </p>

\t<br>
\t<h4>Attachments:</h4>
\t{% for attachment in report.attachments %}
\t<a href=\"{{ attachment.path }}\" class=\"btn btn-success\"> {{ attachment.name }} </a>
\t{% endfor %}
\t<br>
\t<br>

\t<p>
\t\tTags: \t{% for tag in report.tags %}
\t\t<span class=\"badge badge-info\"> {{ tag }} </span>
\t\t{% endfor %}
\t</p>
\t<p>Created At: {{ report.report.createdAt }}</p>
\t<p>Modified At: {{ report.report.modifiedAt }}</p>
\t
\t<button type=\"submit\" class=\"btn btn-primary\">Update</button>


{% endblock %}
", "report.twig", "/var/www/html/rms-1/tmpl/report.twig");
    }
}
