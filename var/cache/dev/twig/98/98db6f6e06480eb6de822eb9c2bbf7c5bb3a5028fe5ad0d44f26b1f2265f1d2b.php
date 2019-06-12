<?php

/* formule/index.html.twig */
class __TwigTemplate_22960dac98625973717454067b67ecc6f6959bef9b189acd62205e85a0aeb9fa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "formule/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formule/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formule/index.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "formule/index.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "formule/index.html.twig", 3)->display($context);
        
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
        <h1>LES FORMULES</h1>
    </div>
    <div class=\"row justify-content-center bouton\">
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin/formule_new");
        echo "\">
                <img class=\"img-class\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/glyphicons-191-plus-sign.png"), "html", null, true);
        echo "\" style=\"margin-right:10px;\">
                <button class=\"btn btn-dark\" type=\"button\">Ajouter une nouvelle Formule</button>
            </a>
    </div> 
    <div class=\"row justify-content-center\">  
    <div class=\"col-10\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formules"]) || array_key_exists("formules", $context) ? $context["formules"] : (function () { throw new Twig_Error_Runtime('Variable "formules" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formule"]) {
            // line 22
            echo "            <div class=\"row justify-content-center border bg-white top\">
                <div class=\"col-2\"><h2>";
            // line 23
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "nomFormule", [])), "html", null, true);
            echo "</h2></div>
                <div class=\"col-7\">
                
                    <div class=\"row\">
                
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["formule"], "sessions", []));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 29
                echo "                        <div class=\"border bg-light col-4\">
                        <div class=\"card-body\">
                            <div class=\"col-12\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "titreSession", []), "html", null, true);
                echo "</div>
                            ";
                // line 32
                if ((twig_get_attribute($this->env, $this->source, $context["formule"], "nomFormule", []) != "COURS")) {
                    // line 33
                    echo "                            <div class=\"col-12\"><img class=\"img-fluid\"src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "pathImage", []))), "html", null, true);
                    echo "\"></div>
                            ";
                }
                // line 35
                echo "                            <div class=\"col-12\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", []), "html", null, true);
                echo "</div>
                        </div>    
                        </div>    
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    </div>
                </div>
            
                            
                <div class=\"col-2 bouton\">
                <ul>
                <li >
                    
                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin/formule_show", ["id" => twig_get_attribute($this->env, $this->source, $context["formule"], "id", [])]), "html", null, true);
            echo "\">
                        <button type=\"submit\" class=\"col-12 btn btn-small bouton\">Détails</button>
                        </a>
                    
                </li >
                <li >                
                    
                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin/formule_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["formule"], "id", [])]), "html", null, true);
            echo "\">
                        <button type=\"submit\" class=\"col-12 btn btn-small bouton\">Modifier</button>
                        </a>
                    
                </li >
                <li >
                    <form action=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin/formule_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["formule"], "id", [])]), "html", null, true);
            echo "\" method=\"post\">
                      <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                      ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 62, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["formule"], "id", []), [], "array"), 'widget');
            echo "
                      <button type=\"submit\" class=\"col-12 btn btn-small bouton\">
                          Supprimer
                      </button>
                    </form>
                </li >
                </ul> 
                </div>
                   
                            
            </div>
                

<hr>   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </div>
        </div>
        </div>
    
      

    <ul>
        <div class=\"col-2\">
            <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin/formule_new");
        echo "\">Create a new formule</a>
        </div class=\"col-2\">
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "formule/index.html.twig", 89)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formule/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 89,  231 => 85,  221 => 77,  200 => 62,  195 => 60,  186 => 54,  176 => 47,  166 => 39,  155 => 35,  149 => 33,  147 => 32,  143 => 31,  139 => 29,  135 => 28,  127 => 23,  124 => 22,  120 => 21,  111 => 15,  107 => 14,  96 => 8,  92 => 6,  83 => 5,  65 => 3,  47 => 2,  15 => 1,);
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
        <h1>LES FORMULES</h1>
    </div>
    <div class=\"row justify-content-center bouton\">
            <a href=\"{{ path('admin/formule_new') }}\">
                <img class=\"img-class\" src=\"{{ asset('assets/images/glyph/glyphicons-191-plus-sign.png') }}\" style=\"margin-right:10px;\">
                <button class=\"btn btn-dark\" type=\"button\">Ajouter une nouvelle Formule</button>
            </a>
    </div> 
    <div class=\"row justify-content-center\">  
    <div class=\"col-10\">
        {% for formule in formules %}
            <div class=\"row justify-content-center border bg-white top\">
                <div class=\"col-2\"><h2>{{ formule.nomFormule | upper }}</h2></div>
                <div class=\"col-7\">
                
                    <div class=\"row\">
                
                        {% for session in formule.sessions %}
                        <div class=\"border bg-light col-4\">
                        <div class=\"card-body\">
                            <div class=\"col-12\">{{ session.titreSession }}</div>
                            {% if formule.nomFormule != \"COURS\" %}
                            <div class=\"col-12\"><img class=\"img-fluid\"src=\"{{ asset('uploads/images/' ~ session.image.pathImage) }}\"></div>
                            {% endif %}
                            <div class=\"col-12\">{{ session.dateSession }}</div>
                        </div>    
                        </div>    
                        {% endfor %}
                    </div>
                </div>
            
                            
                <div class=\"col-2 bouton\">
                <ul>
                <li >
                    
                        <a href=\"{{ path('admin/formule_show', { 'id': formule.id }) }}\">
                        <button type=\"submit\" class=\"col-12 btn btn-small bouton\">Détails</button>
                        </a>
                    
                </li >
                <li >                
                    
                        <a href=\"{{ path('admin/formule_edit', { 'id': formule.id }) }}\">
                        <button type=\"submit\" class=\"col-12 btn btn-small bouton\">Modifier</button>
                        </a>
                    
                </li >
                <li >
                    <form action=\"{{ path('admin/formule_delete', { 'id':formule.id }) }}\" method=\"post\">
                      <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                      {{ form_widget(deleteForms[formule.id]) }}
                      <button type=\"submit\" class=\"col-12 btn btn-small bouton\">
                          Supprimer
                      </button>
                    </form>
                </li >
                </ul> 
                </div>
                   
                            
            </div>
                

<hr>   
        {% endfor %}
        </div>
        </div>
        </div>
    
      

    <ul>
        <div class=\"col-2\">
            <a href=\"{{ path('admin/formule_new') }}\">Create a new formule</a>
        </div class=\"col-2\">
    </ul>
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "formule/index.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/formule/index.html.twig");
    }
}
