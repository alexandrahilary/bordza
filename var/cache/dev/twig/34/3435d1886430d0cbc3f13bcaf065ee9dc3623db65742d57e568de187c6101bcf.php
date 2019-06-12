<?php

/* discipline/index.html.twig */
class __TwigTemplate_602686d1fcb21d381784a8cf3c851e5062fd87ef31305052e13a89fc230d2c55 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "discipline/index.html.twig", 1);
        $this->blocks = [
            'connexion' => [$this, 'block_connexion'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "discipline/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "discipline/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_connexion($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $this->loadTemplate("connexion.html.twig", "discipline/index.html.twig", 2)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("nav.html.twig", "discipline/index.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container-fluid\">
    <div class=\"row justify-content-center retour-categories\">
        <p>retour vers <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "les Sessions"), "html", null, true);
        echo "</a></p>
    </div>
    <div class=\"row justify-content-center\">
        <h1>MES DISCIPLINES</h1>
        <div class=\"w-100\"></div> 
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_discipline_new");
        echo "\">
                <img class=\"img-class top\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/glyphicons-191-plus-sign.png"), "html", null, true);
        echo "\" style=\"margin-right:10px;\">
                <button class=\"btn btn-dark top\" type=\"button\">Ajouter une nouvelle discipline</button>
            </a>
    </div>
    <div class=\"row justify-content-center top\">
    <div class=\"col-10\">  
        <div class=\"row justify-content-center\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["disciplines"]) || array_key_exists("disciplines", $context) ? $context["disciplines"] : (function () { throw new Twig_Error_Runtime('Variable "disciplines" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["discipline"]) {
            // line 22
            echo "            <div class=\"card col-4 top\">
                <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["discipline"], "nomDiscipline", []), "html", null, true);
            echo "</h5>
                <h6 class=\"card-subtitle text-muted\">Les sessions :</h6>
                    <div class=\"top\">
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["discipline"], "sessions", []));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                echo " 
                   
                    <p>- ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "titreSession", []), "html", null, true);
                echo "</p>
                      
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                    </div>
                <div class=\"row\">
                
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_discipline_show", ["id" => twig_get_attribute($this->env, $this->source, $context["discipline"], "id", [])]), "html", null, true);
            echo "\">
                        <button type=\"submit\" class=\"btn btn-small bouton\">Détails</button>
                    </a>
                        
                        
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_discipline_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["discipline"], "id", [])]), "html", null, true);
            echo "\">
                        <button type=\"submit\" class=\"btn btn-small bouton\">Modifier</button>
                    </a>
                       
                    <form action=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_discipline_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["discipline"], "id", [])]), "html", null, true);
            echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                        ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 46, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["discipline"], "id", []), [], "array"), 'widget');
            echo "
                        <button type=\"submit\" class=\"btn btn-small bouton\">Supprimer</button>
                    </form>
                </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discipline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "discipline/index.html.twig", 55)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "discipline/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 55,  188 => 53,  175 => 46,  170 => 44,  163 => 40,  155 => 35,  150 => 32,  141 => 29,  134 => 27,  128 => 24,  124 => 22,  120 => 21,  110 => 14,  106 => 13,  96 => 8,  92 => 6,  83 => 5,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row justify-content-center retour-categories\">
        <p>retour vers <a href=\"{{ path('admin_session_index') }}\">{{ 'les Sessions' | upper }}</a></p>
    </div>
    <div class=\"row justify-content-center\">
        <h1>MES DISCIPLINES</h1>
        <div class=\"w-100\"></div> 
            <a href=\"{{ path('admin_discipline_new') }}\">
                <img class=\"img-class top\" src=\"{{ asset('assets/images/glyph/glyphicons-191-plus-sign.png') }}\" style=\"margin-right:10px;\">
                <button class=\"btn btn-dark top\" type=\"button\">Ajouter une nouvelle discipline</button>
            </a>
    </div>
    <div class=\"row justify-content-center top\">
    <div class=\"col-10\">  
        <div class=\"row justify-content-center\">
        {% for discipline in disciplines %}
            <div class=\"card col-4 top\">
                <div class=\"card-body\">
                <h5 class=\"card-title\">{{ discipline.nomDiscipline }}</h5>
                <h6 class=\"card-subtitle text-muted\">Les sessions :</h6>
                    <div class=\"top\">
                {% for session in discipline.sessions %} 
                   
                    <p>- {{ session.titreSession }}</p>
                      
                {% endfor %}
                    </div>
                <div class=\"row\">
                
                    <a href=\"{{ path('admin_discipline_show', { 'id': discipline.id }) }}\">
                        <button type=\"submit\" class=\"btn btn-small bouton\">Détails</button>
                    </a>
                        
                        
                    <a href=\"{{ path('admin_discipline_edit', { 'id': discipline.id }) }}\">
                        <button type=\"submit\" class=\"btn btn-small bouton\">Modifier</button>
                    </a>
                       
                    <form action=\"{{ path('admin_discipline_delete', { 'id': discipline.id }) }}\" method=\"post\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                        {{ form_widget(deleteForms[discipline.id]) }}
                        <button type=\"submit\" class=\"btn btn-small bouton\">Supprimer</button>
                    </form>
                </div>
                </div>
            </div>
        {% endfor %}
        </div>
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "discipline/index.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/discipline/index.html.twig");
    }
}
