<?php

/* session/show.html.twig */
class __TwigTemplate_3a1c57298db4d70a0b6713cf66c730bb158873d54d120f971a8fa4010fc8d16e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "session/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "session/show.html.twig"));

        // line 1
        $this->loadTemplate("nav.html.twig", "session/show.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <h1>DÉTAIL</h1>
    </div>
    <div class=\"row justify-content-center ligne\">
                
                
                <div class=\"col-4\"><img class=\"img-fluid\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 11, $this->source); })()), "image", []), "pathImage", []))), "html", null, true);
        echo "\"></div>
                <div class=\"col-7\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-11\">
                             / ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 15, $this->source); })()), "formules", []), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 15, $this->source); })()), "disciplines", []), "html", null, true);
        echo " / 
                            <h3>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 16, $this->source); })()), "titreSession", [])), "html", null, true);
        echo "</h3>
                            <div>Dates : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 17, $this->source); })()), "dateSession", []), "html", null, true);
        echo "</div>
                            <div>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 18, $this->source); })()), "prix", []), "html", null, true);
        echo "</div>
                            <div class=\"description\">\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 19, $this->source); })()), "descriptionSession", []), "html", null, true);
        echo "\"</div>
                            <p>NOMBRE D'INSCRITS : <span class=\"nombreInscrits\">";
        // line 20
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 20, $this->source); })()), "inscriptionCollection", []), "snapshot", [])), "html", null, true);
        echo "</span></p>
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 21, $this->source); })()), "inscriptionCollection", []), "snapshot", []));
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            echo " 
                            <p><img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/glyphicons-635-teenager.png"), "html", null, true);
            echo "\">
                            : ";
            // line 23
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "prenom", [])), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "age", []), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "userId", []), "email", []), "html", null, true);
            echo " / tel : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "tel", []), "html", null, true);
            echo " </p>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                            <div>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 24, $this->source); })()), "nbPlace", []), "html", null, true);
        echo " places / Reste : ";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 24, $this->source); })()), "nbPlace", []) - twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 24, $this->source); })()), "inscriptionCollection", []), "snapshot", []))), "html", null, true);
        echo " places</span></div>
                            
                            <div class=\"bouton\">
                                <button type=\"submit\" class=\"btn btn-small col-2\">
                                    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 28, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">Modifier</a>
                                </button>
                            </div>
                            <div class=\"bouton\">
                                ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 32, $this->source); })()), 'form_start');
        echo "
                                    <button class=\"btn btn-small col-2\" type=\"submit\">Supprimer</button>
                                ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 34, $this->source); })()), 'form_end');
        echo "
                            </div>
                            <div>
                            <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_index");
        echo "\"><- Revenir aux Sessions</a>
                            </div>
                        </div>
                        <div class=\"col-11\">
                            
                                    
                                    
                                        
                            
                        </div>
                                    
                        
                        
                    </div>
                </div>   
                <hr> 
                
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "session/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 37,  140 => 34,  135 => 32,  128 => 28,  118 => 24,  105 => 23,  101 => 22,  95 => 21,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  69 => 15,  62 => 11,  53 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'nav.html.twig' %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <h1>DÉTAIL</h1>
    </div>
    <div class=\"row justify-content-center ligne\">
                
                
                <div class=\"col-4\"><img class=\"img-fluid\" src=\"{{ asset('uploads/images/' ~ session.image.pathImage) }}\"></div>
                <div class=\"col-7\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-11\">
                             / {{ session.formules }} / {{ session.disciplines }} / 
                            <h3>{{ session.titreSession | upper }}</h3>
                            <div>Dates : {{ session.dateSession }}</div>
                            <div>{{ session.prix }}</div>
                            <div class=\"description\">\"{{ session.descriptionSession }}\"</div>
                            <p>NOMBRE D'INSCRITS : <span class=\"nombreInscrits\">{{ session.inscriptionCollection.snapshot | length }}</span></p>
                            {% for inscription in session.inscriptionCollection.snapshot %} 
                            <p><img src=\"{{ asset('assets/images/glyph/glyphicons-635-teenager.png') }}\">
                            : {{ inscription.prenom | capitalize }} / {{ inscription.age }} / {{ inscription.userId.email }} / tel : {{ inscription.tel }} </p>{% endfor %}
                            <div>{{ session.nbPlace }} places / Reste : {{ (session.nbPlace)-(session.inscriptionCollection.snapshot | length) }} places</span></div>
                            
                            <div class=\"bouton\">
                                <button type=\"submit\" class=\"btn btn-small col-2\">
                                    <a href=\"{{ path('admin_session_edit', { 'id': session.id }) }}\">Modifier</a>
                                </button>
                            </div>
                            <div class=\"bouton\">
                                {{ form_start(delete_form) }}
                                    <button class=\"btn btn-small col-2\" type=\"submit\">Supprimer</button>
                                {{ form_end(delete_form) }}
                            </div>
                            <div>
                            <a href=\"{{ path('admin_session_index') }}\"><- Revenir aux Sessions</a>
                            </div>
                        </div>
                        <div class=\"col-11\">
                            
                                    
                                    
                                        
                            
                        </div>
                                    
                        
                        
                    </div>
                </div>   
                <hr> 
                
    
{% endblock %}
", "session/show.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/session/show.html.twig");
    }
}
