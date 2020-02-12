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

/* layout.twig */
class __TwigTemplate_e87e167f4b8a760fe0fe0c8c58091766c0c8a598af10bd60d25c0a0659d2fdc5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'contents' => [$this, 'block_contents'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
\t\t  integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

\t<title>";
        // line 12
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
        echo "</title>
</head>

<body>

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t<div class=\"container\">
\t\t<a class=\"navbar-brand\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        echo "\">Reports Management System</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\t\taria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t";
        // line 24
        if (($context["userInfo"] ?? null)) {
            // line 25
            echo "\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t<ul class=\"navbar-nav mr-auto\">

\t\t\t\t<li class=\"nav-item";
            // line 28
            if ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("home")) {
                echo " active";
            }
            echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
            echo "\">
\t\t\t\t\t\tHome
\t\t\t\t\t\t";
            // line 31
            if ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("home")) {
                // line 32
                echo "\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
            // line 36
            if ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("reports")) {
                echo " active";
            }
            echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("reports"), "html", null, true);
            echo "\">
\t\t\t\t\t\tReports
\t\t\t\t\t\t";
            // line 39
            if ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("reports")) {
                // line 40
                echo "\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
            // line 44
            if ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("profile")) {
                echo " active";
            }
            echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("profile"), "html", null, true);
            echo "\">
\t\t\t\t\t\tProfile
\t\t\t\t\t\t";
            // line 47
            if ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("profile")) {
                // line 48
                echo "\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t";
            // line 53
            if (twig_get_attribute($this->env, $this->source, ($context["userInfo"] ?? null), "isAdmin", [], "any", false, false, false, 53)) {
                // line 54
                echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->fullUrlFor("home"), "html", null, true);
                echo "404\">
\t\t\t\t\t\tAdmin Panel 
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"my-2 my-lg-0\">
\t\t\t\t\t";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userInfo"] ?? null), "firstName", [], "any", false, false, false, 65), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userInfo"] ?? null), "lastName", [], "any", false, false, false, 65), "html", null, true);
            echo "
\t\t\t\t\t<a class=\"btn btn-outline-success my-2 my-sm-0\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("logout"), "html", null, true);
            echo "\">Logout</a>
\t\t\t</div>
\t";
        }
        // line 69
        echo "
\t\t</div>
\t</div>
</nav>

<div class=\"container mt-4\">
\t";
        // line 75
        if (($context["flash"] ?? null)) {
            // line 76
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["flash"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 77
                echo "\t\t\t<div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\">
\t\t\t\t";
                // line 78
                echo twig_escape_filter($this->env, $context["f"], "html", null, true);
                echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "\t";
        }
        // line 85
        echo "
\t";
        // line 86
        $this->displayBlock('contents', $context, $blocks);
        // line 88
        echo "</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
\t\tintegrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
\t\tcrossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"
\t\tintegrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\"
\t\tcrossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"
\t\tintegrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\"
\t\tcrossorigin=\"anonymous\"></script>
";
        // line 101
        $this->displayBlock('scripts', $context, $blocks);
        // line 102
        echo "</body>
</html>
";
    }

    // line 86
    public function block_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "\t";
    }

    // line 101
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 101,  238 => 87,  234 => 86,  228 => 102,  226 => 101,  211 => 88,  209 => 86,  206 => 85,  203 => 84,  191 => 78,  188 => 77,  183 => 76,  181 => 75,  173 => 69,  167 => 66,  161 => 65,  154 => 60,  146 => 55,  143 => 54,  141 => 53,  136 => 50,  132 => 48,  130 => 47,  125 => 45,  119 => 44,  115 => 42,  111 => 40,  109 => 39,  104 => 37,  98 => 36,  94 => 34,  90 => 32,  88 => 31,  83 => 29,  77 => 28,  72 => 25,  70 => 24,  62 => 19,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
\t\t  integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

\t<title>{{ pageTitle }}</title>
</head>

<body>

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t<div class=\"container\">
\t\t<a class=\"navbar-brand\" href=\"{{ url_for('home') }}\">Reports Management System</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\t\taria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t{%if userInfo %}
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t<ul class=\"navbar-nav mr-auto\">

\t\t\t\t<li class=\"nav-item{% if is_current_url('home') %} active{% endif %}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ url_for('home') }}\">
\t\t\t\t\t\tHome
\t\t\t\t\t\t{% if is_current_url('home') %}
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{% if is_current_url('reports') %} active{% endif %}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ url_for('reports') }}\">
\t\t\t\t\t\tReports
\t\t\t\t\t\t{% if is_current_url('reports') %}
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{% if is_current_url('profile') %} active{% endif %}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ url_for('profile') }}\">
\t\t\t\t\t\tProfile
\t\t\t\t\t\t{% if is_current_url('profile') %}
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t{% if userInfo.isAdmin %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ full_url_for('home') }}404\">
\t\t\t\t\t\tAdmin Panel 
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"my-2 my-lg-0\">
\t\t\t\t\t{{ userInfo.firstName }} {{ userInfo.lastName }}
\t\t\t\t\t<a class=\"btn btn-outline-success my-2 my-sm-0\" href=\"{{ url_for('logout') }}\">Logout</a>
\t\t\t</div>
\t{% endif %}

\t\t</div>
\t</div>
</nav>

<div class=\"container mt-4\">
\t{% if flash %}
\t\t{% for f in flash %}
\t\t\t<div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\">
\t\t\t\t{{ f }}
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t{% endfor %}
\t{% endif %}

\t{% block contents %}
\t{% endblock %}
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
\t\tintegrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
\t\tcrossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"
\t\tintegrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\"
\t\tcrossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"
\t\tintegrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\"
\t\tcrossorigin=\"anonymous\"></script>
{% block scripts %}{% endblock %}
</body>
</html>
", "layout.twig", "/var/www/html/rms-1/tmpl/layout.twig");
    }
}
