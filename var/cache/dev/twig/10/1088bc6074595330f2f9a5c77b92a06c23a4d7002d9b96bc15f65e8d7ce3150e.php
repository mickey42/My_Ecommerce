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

/* products/index.html.twig */
class __TwigTemplate_94f1688e64187d4f56d721c07794cbb2a97aa8e0caa89183a346e62e4fbcd67e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"quizz_container\">

    <div class=\"row\">
        <div class=\"col-sm-7\">
            <img class=\"img-top\" src=\"/img/";
        // line 9
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "name", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "name", [], "any", false, false, false, 9), "undefined")) : ("undefined")), "html", null, true);
        echo ".jpg\" alt=\"Card image cap\" style=\"width: 100%\">
        </div>
        <div class=\"col-sm-5\">
            <h1>";
        // line 12
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "name", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "name", [], "any", false, false, false, 12), "undefined")) : ("undefined")), "html", null, true);
        echo "</h1>
            <hr>

            <h4 class=\"description\">";
        // line 15
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "description", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "description", [], "any", false, false, false, 15), "undefined")) : ("undefined")), "html", null, true);
        echo "</h4>

            <hr>

            <h4 class=\"prix\">Prix : <strong>";
        // line 19
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "prix", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "prix", [], "any", false, false, false, 19), "undefined")) : ("undefined")), "html", null, true);
        echo " €</strong></h4>
            <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addPanier", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\" class=\"questions\">


                <div class=\"form-group\">
                    <label for=\"number\">Quantités :
                        <input  type=\"number\"  name=\"number\" min=\"0\" value=\"1\" class=\"text-center\">
                    </label>
                </div>


                
                <button type=\"submit\" class=\"btn btn-info\">Ajouter au panier</button>
            </form>

            <hr>
            <div>
                <p><strong>Vos avis :</strong></p>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["avis"]);
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 38
            echo "                    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "userId", [], "any", false, false, false, 38), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "commentaire", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
        </div>
    </div>


</div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "products/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 40,  122 => 38,  118 => 37,  98 => 20,  94 => 19,  87 => 15,  81 => 12,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"quizz_container\">

    <div class=\"row\">
        <div class=\"col-sm-7\">
            <img class=\"img-top\" src=\"/img/{{produit.name|default('undefined')}}.jpg\" alt=\"Card image cap\" style=\"width: 100%\">
        </div>
        <div class=\"col-sm-5\">
            <h1>{{ produit.name|default('undefined') }}</h1>
            <hr>

            <h4 class=\"description\">{{produit.description|default('undefined')}}</h4>

            <hr>

            <h4 class=\"prix\">Prix : <strong>{{produit.prix|default('undefined')}} €</strong></h4>
            <form action=\"{{ path('addPanier', {id: produit.id })}}\" class=\"questions\">


                <div class=\"form-group\">
                    <label for=\"number\">Quantités :
                        <input  type=\"number\"  name=\"number\" min=\"0\" value=\"1\" class=\"text-center\">
                    </label>
                </div>


                
                <button type=\"submit\" class=\"btn btn-info\">Ajouter au panier</button>
            </form>

            <hr>
            <div>
                <p><strong>Vos avis :</strong></p>
                {% for avis in avis %}
                    <p>{{avis.userId}} : {{avis.commentaire}}</p>
                {% endfor %}
            </div>
        </div>
    </div>


</div>




{% endblock %}
", "products/index.html.twig", "/home/mickael/Projets_Epitech/8_Juillet + Piscine/e-commerce V1/E-Commerce-sy/templates/products/index.html.twig");
    }
}
