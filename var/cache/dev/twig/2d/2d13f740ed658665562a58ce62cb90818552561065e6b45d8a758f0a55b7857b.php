<?php

/* actu/index.html.twig */
class __TwigTemplate_21e718085a6697b4905201a8edd85e7444c572cbc63b53d14bd0c545e693279d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "actu/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actu/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actu/index.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "actu/index.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "actu/index.html.twig", 3)->display($context);
        
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
        echo "<div class=\"container-fluid bottom\">
    <div class=\"row justify-content-center top\">
        <h2>MES ARTICLES</h2>
    </div>
    <div class=\"row justify-content-center bouton\">
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_actu_new");
        echo "\">
                <img class=\"img-class\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/ajoute-rond.png"), "html", null, true);
        echo "\" style=\"margin-right:10px;\">
                <button class=\"btn btn-secondary\" type=\"button\">Ajouter un nouvel Article</button>
            </a>
    </div>   
    

    
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actus"]) || array_key_exists("actus", $context) ? $context["actus"] : (function () { throw new Twig_Error_Runtime('Variable "actus" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
            // line 20
            echo "    <div class=\"row justify-content-center\">
        <div class=\"col-11\">
            <div class=\"row justify-content-center rounded grey padding\">
                <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\">
                    <div><h3 style=\"color:#1abc9c;font-weight:bold\">";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "titre", [])), "html", null, true);
            echo "</h3></div>
                        <div class=\"w-100\"></div>
                        <div>";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["actu"], "date", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "date", []), "d-m-Y"), "html", null, true);
            }
            echo "</div>
                        <div class=\"w-100\"></div>
                        <img class=\"img-fluid\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["actu"], "imageId", []))), "html", null, true);
            echo "\">
                        <div class=\"w-100\"></div>
                        <div>Aperçu : <br/>";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["actu"], "resume", []);
            echo "</div>
                    </div>
                    <div class=\"col-11 col-sm-11 col-md-11 col-lg-5 col-xl-5\">
                    
                        <div>CONTENU ARTICLE : <br/>";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["actu"], "contenu", []);
            echo "</div>
                    
                    </div>
                
                
                    <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\">
                        <div class=\"row\">
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_actu_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["actu"], "id", [])]), "html", null, true);
            echo "\">
                                <button class=\"btn btn-small bouton\">Modifier</button>
                            </a>
                           
                                <form action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_actu_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["actu"], "id", [])]), "html", null, true);
            echo "\" method=\"post\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                    ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 47, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["actu"], "id", []), [], "array"), 'widget');
            echo "
                                    <button type=\"submit\" class=\" btn btn-danger bouton\">Supprimer</button>
                                </form>            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>       
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "actu/index.html.twig", 59)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "actu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 59,  185 => 57,  169 => 47,  164 => 45,  157 => 41,  147 => 34,  140 => 30,  135 => 28,  128 => 26,  123 => 24,  117 => 20,  113 => 19,  103 => 12,  99 => 11,  92 => 6,  83 => 5,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}

{% block body %}
<div class=\"container-fluid bottom\">
    <div class=\"row justify-content-center top\">
        <h2>MES ARTICLES</h2>
    </div>
    <div class=\"row justify-content-center bouton\">
            <a href=\"{{ path('admin_actu_new') }}\">
                <img class=\"img-class\" src=\"{{ asset('assets/images/glyph/ajoute-rond.png') }}\" style=\"margin-right:10px;\">
                <button class=\"btn btn-secondary\" type=\"button\">Ajouter un nouvel Article</button>
            </a>
    </div>   
    

    
    {% for actu in actus %}
    <div class=\"row justify-content-center\">
        <div class=\"col-11\">
            <div class=\"row justify-content-center rounded grey padding\">
                <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\">
                    <div><h3 style=\"color:#1abc9c;font-weight:bold\">{{ actu.titre | upper }}</h3></div>
                        <div class=\"w-100\"></div>
                        <div>{% if actu.date %}{{ actu.date|date('d-m-Y') }}{% endif %}</div>
                        <div class=\"w-100\"></div>
                        <img class=\"img-fluid\" src=\"{{ asset('uploads/images/' ~ actu.imageId) }}\">
                        <div class=\"w-100\"></div>
                        <div>Aperçu : <br/>{{ actu.resume | raw }}</div>
                    </div>
                    <div class=\"col-11 col-sm-11 col-md-11 col-lg-5 col-xl-5\">
                    
                        <div>CONTENU ARTICLE : <br/>{{ actu.contenu | raw }}</div>
                    
                    </div>
                
                
                    <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\">
                        <div class=\"row\">
                            <a href=\"{{ path('admin_actu_edit', { 'id': actu.id }) }}\">
                                <button class=\"btn btn-small bouton\">Modifier</button>
                            </a>
                           
                                <form action=\"{{ path('admin_actu_delete', { 'id': actu.id }) }}\" method=\"post\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                    {{ form_widget(deleteForms[actu.id]) }}
                                    <button type=\"submit\" class=\" btn btn-danger bouton\">Supprimer</button>
                                </form>            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>       
    {% endfor %}
</div>
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "actu/index.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/actu/index.html.twig");
    }
}
