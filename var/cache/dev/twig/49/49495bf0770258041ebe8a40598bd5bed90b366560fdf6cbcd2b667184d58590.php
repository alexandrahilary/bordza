<?php

/* formule/show.html.twig */
class __TwigTemplate_34e74f2472819889d819e6af3a17ec7399e723c09035cb2967f055623ebc4a1e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "formule/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formule/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formule/show.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "formule/show.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "formule/show.html.twig", 3)->display($context);
        
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
    <div class=\"row justify-content-center\">
    <h1>DÉTAILS</h1>
    </div>
    <div class=\"row justify-content-center\">
    <div class=\"card col-5 top\">
                <div class=\"card-body\">
                <h5 class=\"card-title\">";
        // line 13
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formule"]) || array_key_exists("formule", $context) ? $context["formule"] : (function () { throw new Twig_Error_Runtime('Variable "formule" does not exist.', 13, $this->source); })()), "nomFormule", [])), "html", null, true);
        echo "</h5>
                <h6 class=\"card-subtitle text-muted\">Les sessions :</h6>
                    <div class=\"top\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["formule"]) || array_key_exists("formule", $context) ? $context["formule"] : (function () { throw new Twig_Error_Runtime('Variable "formule" does not exist.', 16, $this->source); })()), "sessions", []));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 17
            echo "                <div class=\"top\" style=\"padding:20px;\">
                    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["formule"]) || array_key_exists("formule", $context) ? $context["formule"] : (function () { throw new Twig_Error_Runtime('Variable "formule" does not exist.', 18, $this->source); })()), "sessions", []));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 19
                echo "                        <div class=\"border bg-light top\" style=\"padding:20px;\">
                            <div class=\"col-12\"></div>
                            <p class=\"text\">- ";
                // line 21
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "titreSession", [])), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "disciplines", [])), "html", null, true);
                echo " / dates : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", []), "html", null, true);
                echo "</p>
                            ";
                // line 22
                if ((twig_get_attribute($this->env, $this->source, (isset($context["formule"]) || array_key_exists("formule", $context) ? $context["formule"] : (function () { throw new Twig_Error_Runtime('Variable "formule" does not exist.', 22, $this->source); })()), "nomFormule", []) != "COURS")) {
                    // line 23
                    echo "                            <div class=\"col-12\"><img style=\"margin-bottom:20px\" class=\"img-fluid\"src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "pathImage", []))), "html", null, true);
                    echo "\"></div>
                            ";
                }
                // line 25
                echo "                            
                            <p>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "descriptionSession", []), "html", null, true);
                echo "</p>
                            <p>Élèves inscrits :</p>
                            ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []));
                foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
                    // line 29
                    echo "                                <p><img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/glyph/glyphicons-635-teenager.png"), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "nom", [])), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "prenom", [])), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "age", []), "html", null, true);
                    echo "</p>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                            
                            
                        </div>    
                            
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </div>

                <div class=\"row justify-content-center\">
                    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin/formule_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["formule"]) || array_key_exists("formule", $context) ? $context["formule"] : (function () { throw new Twig_Error_Runtime('Variable "formule" does not exist.', 40, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">
                        <button type=\"submit\" class=\"btn btn-small bouton\">Modifier</button>
                    </a>
                    <li>
                        ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 44, $this->source); })()), 'form_start');
        echo "
                            <button class=\"btn btn-small bouton\" type=\"submit\" value=\"Delete\">Supprimer</button>
                        ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
                    </li> 
                    <div class=\"w-100\"></div>
                    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin/formule_index");
        echo "\"><- Retour vers les Formules</a>
                    
                     
                    
                </div>
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

        $this->loadTemplate("footer.html.twig", "formule/show.html.twig", 55)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formule/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 55,  204 => 49,  198 => 46,  193 => 44,  186 => 40,  181 => 37,  175 => 36,  165 => 31,  150 => 29,  146 => 28,  141 => 26,  138 => 25,  132 => 23,  130 => 22,  122 => 21,  118 => 19,  114 => 18,  111 => 17,  107 => 16,  101 => 13,  92 => 6,  83 => 5,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
    <h1>DÉTAILS</h1>
    </div>
    <div class=\"row justify-content-center\">
    <div class=\"card col-5 top\">
                <div class=\"card-body\">
                <h5 class=\"card-title\">{{ formule.nomFormule | upper}}</h5>
                <h6 class=\"card-subtitle text-muted\">Les sessions :</h6>
                    <div class=\"top\">
                {% for session in formule.sessions %}
                <div class=\"top\" style=\"padding:20px;\">
                    {% for session in formule.sessions %}
                        <div class=\"border bg-light top\" style=\"padding:20px;\">
                            <div class=\"col-12\"></div>
                            <p class=\"text\">- {{ session.titreSession | upper }} / {{ session.disciplines | upper }} / dates : {{ session.dateSession }}</p>
                            {% if formule.nomFormule != \"COURS\" %}
                            <div class=\"col-12\"><img style=\"margin-bottom:20px\" class=\"img-fluid\"src=\"{{ asset('uploads/images/' ~ session.image.pathImage) }}\"></div>
                            {% endif %}
                            
                            <p>{{ session.descriptionSession }}</p>
                            <p>Élèves inscrits :</p>
                            {% for inscription in session.inscriptionCollection %}
                                <p><img src=\"{{ asset('/assets/images/glyph/glyphicons-635-teenager.png')}}\"> {{ inscription.nom | upper }} {{ inscription.prenom | title }} {{ inscription.age }}</p>
                            {% endfor %}
                            
                            
                        </div>    
                            
                        {% endfor %}
                {% endfor %}
                </div>

                <div class=\"row justify-content-center\">
                    <a href=\"{{ path('admin/formule_edit', { 'id': formule.id }) }}\">
                        <button type=\"submit\" class=\"btn btn-small bouton\">Modifier</button>
                    </a>
                    <li>
                        {{ form_start(delete_form) }}
                            <button class=\"btn btn-small bouton\" type=\"submit\" value=\"Delete\">Supprimer</button>
                        {{ form_end(delete_form) }}
                    </li> 
                    <div class=\"w-100\"></div>
                    <a href=\"{{ path('admin/formule_index') }}\"><- Retour vers les Formules</a>
                    
                     
                    
                </div>
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "formule/show.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/formule/show.html.twig");
    }
}
