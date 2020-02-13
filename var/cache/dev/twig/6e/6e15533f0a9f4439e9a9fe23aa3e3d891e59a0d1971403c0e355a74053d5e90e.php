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

/* ecommerce/caroussel.html.twig */
class __TwigTemplate_0d16d9e3ea5d3bbb4b08275394d15a714e9a824c522dc8424df88e9d424487b2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ecommerce/caroussel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ecommerce/caroussel.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ecommerce/caroussel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promos"]) {
            // line 6
            echo "<h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promos"], "name", [], "any", false, false, false, 6), "html", null, true);
            echo "</h3>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "<div id=\"my_carousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Bulles -->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#my_carousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#my_carousel\" data-slide-to=\"1\"></li>
        <li data-target=\"#my_carousel\" data-slide-to=\"2\"></li>
    </ol>
    <!-- Slides -->
    <div class=\"carousel-inner\">
        
        <!-- Page 1 -->
    ";
        // line 19
        $context["isActive"] = "active";
        // line 20
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 21
            echo "        <div class=\"item ";
            echo twig_escape_filter($this->env, (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\">
            ";
            // line 22
            $context["isActive"] = "";
            echo "  
            <div class=\"carousel-page\">
        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\"><img src=\"/img/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo ".jpg\" class=\"img-responsive\" style=\"margin:0px auto;\" /></a>
    </div> 
    <div class=\"carousel-caption\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</div>
</div>   
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
<!-- Contrôles -->
<a class=\"left carousel-control\" href=\"#my_carousel\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\"></span>
</a>
<a class=\"right carousel-control\" href=\"#my_carousel\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\"></span>
</a>
</div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ecommerce/caroussel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 29,  118 => 26,  111 => 24,  106 => 22,  101 => 21,  96 => 20,  94 => 19,  81 => 8,  72 => 6,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
{% for promos in promo %}
<h3>{{promos.name}}</h3>
{% endfor %}
<div id=\"my_carousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Bulles -->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#my_carousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#my_carousel\" data-slide-to=\"1\"></li>
        <li data-target=\"#my_carousel\" data-slide-to=\"2\"></li>
    </ol>
    <!-- Slides -->
    <div class=\"carousel-inner\">
        
        <!-- Page 1 -->
    {% set isActive = 'active' %}
        {% for produit in produits %}
        <div class=\"item {{isActive}}\">
            {% set isActive = '' %}  
            <div class=\"carousel-page\">
        <a href=\"{{ path('produits_show', { id: produit.id })}}\"><img src=\"/img/{{produit.name}}.jpg\" class=\"img-responsive\" style=\"margin:0px auto;\" /></a>
    </div> 
    <div class=\"carousel-caption\">{{produit.name}}</div>
</div>   
{% endfor %}

<!-- Contrôles -->
<a class=\"left carousel-control\" href=\"#my_carousel\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\"></span>
</a>
<a class=\"right carousel-control\" href=\"#my_carousel\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\"></span>
</a>
</div>




{% endblock %}", "ecommerce/caroussel.html.twig", "/home/mickael/Projets_Epitech/8_Juillet + Piscine/e-commerce V1/E-Commerce-sy/templates/ecommerce/caroussel.html.twig");
    }
}
