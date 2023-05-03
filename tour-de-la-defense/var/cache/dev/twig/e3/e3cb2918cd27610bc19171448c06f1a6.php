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

/* index.html.twig */
class __TwigTemplate_515f40689152b98b2e5799ea928faa19 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\">
\t<title>Tours de la Défense</title>
</head>
<body>
<header>
\t<h1>Tours de la Défense</h1>
\t<nav>
\t\t<ul>
\t\t\t<a href=\"#\">
\t\t\t\t<li class=\"active\">Home</li>
\t\t\t</a>
\t\t\t<a href=\"#\">
\t\t\t\t<li>About us</li>
\t\t\t</a>
\t\t\t<a href=\"#\">
\t\t\t\t<li>Our Team</li>
\t\t\t</a>
\t\t\t<a href=\"#\">
\t\t\t\t<li>Contact us</li>
\t\t\t</a>
\t\t</ul>
\t</nav>
\t<ion-icon name=\"menu-outline\"></ion-icon>
</header>
<main>
\t<h2 class=\"typeWriterClass\" id=\"typeWriterId\"></h2>
\t<section class=\"anime-container\">
\t\t<article class=\"img\">
\t\t\t<div class=\"arche bande bande1\"></div>
\t\t\t<div class=\"heckla bande bande2\"></div>
\t\t\t<div class=\"first bande bande4\"></div>
\t\t\t<div class=\"edf bande bande2\"></div>
\t\t\t<div class=\"trinity bande bande3\"></div>
\t\t\t<div class=\"majunga bande bande4\"></div>
\t\t\t<div class=\"total bande bande1\"></div>
\t\t\t<div class=\"coeur_defense bande bande4\"></div>
\t\t\t<div class=\"alto bande bande2\"></div>
\t\t\t<div class=\"ste_generale bande bande3\"></div>
\t\t</article>
\t</section>
\t<section class=\"card-container\" style=\"opacity: 0.2\" id=\"card\"></section>
</main>

<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
<script type=\"module\" src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js\"></script>
<script nomodule src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/2.18.0/core.min.js\"
\t\tintegrity=\"sha512-XpSfIIupzvkhza/hT76X11BXXysUeg/bTeTB/Obn+8U2x3Ul12Kb071BBL3zUV8JL7G7YOooKVhjJeolBcUtOQ==\"
\t\tcrossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/img_animation.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t\t";
        // line 9
        echo "\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "

\t\t<!-- Renders a link tag (if your module requires any CSS)
\t\t\t <link rel=\"stylesheet\" href=\"/build/app.css\"> -->
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "

\t\t<!-- Renders app.js & a webpack runtime.js file
\t\t\t<script src=\"/build/runtime.js\" defer></script>
\t\t\t<script src=\"/build/app.js\" defer></script>
\t\t\tSee note below about the \"defer\" attribute -->
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 15,  156 => 14,  140 => 9,  138 => 8,  128 => 7,  115 => 72,  105 => 65,  58 => 22,  55 => 14,  53 => 7,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t{% block stylesheets %}
\t\t{# 'app' must match the first argument to addEntry() in webpack.config.js #}
\t\t{{ encore_entry_link_tags('app') }}

\t\t<!-- Renders a link tag (if your module requires any CSS)
\t\t\t <link rel=\"stylesheet\" href=\"/build/app.css\"> -->
\t{% endblock %}
\t{% block javascripts %}
\t\t{{ encore_entry_script_tags('app') }}

\t\t<!-- Renders app.js & a webpack runtime.js file
\t\t\t<script src=\"/build/runtime.js\" defer></script>
\t\t\t<script src=\"/build/app.js\" defer></script>
\t\t\tSee note below about the \"defer\" attribute -->
\t{% endblock %}
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('images/favicon.png') }}\">
\t<title>Tours de la Défense</title>
</head>
<body>
<header>
\t<h1>Tours de la Défense</h1>
\t<nav>
\t\t<ul>
\t\t\t<a href=\"#\">
\t\t\t\t<li class=\"active\">Home</li>
\t\t\t</a>
\t\t\t<a href=\"#\">
\t\t\t\t<li>About us</li>
\t\t\t</a>
\t\t\t<a href=\"#\">
\t\t\t\t<li>Our Team</li>
\t\t\t</a>
\t\t\t<a href=\"#\">
\t\t\t\t<li>Contact us</li>
\t\t\t</a>
\t\t</ul>
\t</nav>
\t<ion-icon name=\"menu-outline\"></ion-icon>
</header>
<main>
\t<h2 class=\"typeWriterClass\" id=\"typeWriterId\"></h2>
\t<section class=\"anime-container\">
\t\t<article class=\"img\">
\t\t\t<div class=\"arche bande bande1\"></div>
\t\t\t<div class=\"heckla bande bande2\"></div>
\t\t\t<div class=\"first bande bande4\"></div>
\t\t\t<div class=\"edf bande bande2\"></div>
\t\t\t<div class=\"trinity bande bande3\"></div>
\t\t\t<div class=\"majunga bande bande4\"></div>
\t\t\t<div class=\"total bande bande1\"></div>
\t\t\t<div class=\"coeur_defense bande bande4\"></div>
\t\t\t<div class=\"alto bande bande2\"></div>
\t\t\t<div class=\"ste_generale bande bande3\"></div>
\t\t</article>
\t</section>
\t<section class=\"card-container\" style=\"opacity: 0.2\" id=\"card\"></section>
</main>

<script src=\"{{ asset('js/script.js') }}\"></script>
<script type=\"module\" src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js\"></script>
<script nomodule src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/2.18.0/core.min.js\"
\t\tintegrity=\"sha512-XpSfIIupzvkhza/hT76X11BXXysUeg/bTeTB/Obn+8U2x3Ul12Kb071BBL3zUV8JL7G7YOooKVhjJeolBcUtOQ==\"
\t\tcrossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"{{ asset('js/img_animation.js') }}\"></script>
</body>
</html>", "index.html.twig", "C:\\wamp64\\www\\Tours-de-la-Defense-Symfony\\tour-de-la-defense\\templates\\index.html.twig");
    }
}
