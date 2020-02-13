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

/* panier/panier.html.twig */
class __TwigTemplate_74c0601a273883dc1973dd2149012a8df075891ff77687d69595377c42f83f71 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/panier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $context["total"] = 0;
        // line 4
        echo "
<h1 class=\"text-center\">Mon panier</h1>
<hr>

<form action=\"\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["panie"]) || array_key_exists("panie", $context) ? $context["panie"] : (function () { throw new RuntimeError('Variable "panie" does not exist.', 9, $this->source); })()), "produit", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "
        <div class=\"card panier-element\">
            <h3>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</h3>
            <h4>Quantité : ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quantite"]) || array_key_exists("quantite", $context) ? $context["quantite"] : (function () { throw new RuntimeError('Variable "quantite" does not exist.', 13, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 13), [], "array", false, false, false, 13), "html", null, true);
            echo "</h4>
            <h4>Prix : ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 14), "html", null, true);
            echo " €</h4>
            <h4>Total prix produit : ";
            // line 15
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 15) * twig_get_attribute($this->env, $this->source, (isset($context["quantite"]) || array_key_exists("quantite", $context) ? $context["quantite"] : (function () { throw new RuntimeError('Variable "quantite" does not exist.', 15, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 15), [], "array", false, false, false, 15)), "html", null, true);
            echo " €</h4>
                ";
            // line 16
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 16, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 16) * twig_get_attribute($this->env, $this->source, (isset($context["quantite"]) || array_key_exists("quantite", $context) ? $context["quantite"] : (function () { throw new RuntimeError('Variable "quantite" does not exist.', 16, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 16), [], "array", false, false, false, 16)));
            // line 17
            echo "        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <hr>
    <h3>Total panier : ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " €</h3>
    <button class='btn btn-primary'>Commander</button>

    <hr>
</form>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 22,  111 => 20,  103 => 17,  101 => 16,  97 => 15,  93 => 14,  89 => 13,  85 => 12,  81 => 10,  77 => 9,  70 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
{% set total = 0 %}

<h1 class=\"text-center\">Mon panier</h1>
<hr>

<form action=\"\">
    {% for article in panie.produit %}

        <div class=\"card panier-element\">
            <h3>{{article.name}}</h3>
            <h4>Quantité : {{quantite[article.id]}}</h4>
            <h4>Prix : {{article.prix}} €</h4>
            <h4>Total prix produit : {{article.prix * quantite[article.id] }} €</h4>
                {% set total = total + article.prix * quantite[article.id]  %}
        </div>

    {% endfor %}

    <hr>
    <h3>Total panier : {{total}} €</h3>
    <button class='btn btn-primary'>Commander</button>

    <hr>
</form>


{% endblock %}", "panier/panier.html.twig", "/home/mickael/Projets_Epitech/8_Juillet + Piscine/e-commerce V1/E-Commerce-sy/templates/panier/panier.html.twig");
    }
}
