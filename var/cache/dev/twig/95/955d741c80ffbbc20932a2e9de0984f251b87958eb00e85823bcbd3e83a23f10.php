<?php

/* news.html.twig */
class __TwigTemplate_32e89f2d1a2ea74f18f91825d35837de70bef284b949bfc6ad0bfcaf19a9b8fc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "news.html.twig", 1);
        $this->blocks = [
            'metadescription' => [$this, 'block_metadescription'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "news.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_metadescription($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metadescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metadescription"));

        echo "<meta name=\"Description\" content=\"Bordza, marque de skateboards éthiques fabriqués à Bordeaux et école de skateboard, des articles qui parlent de skate dans la région Bordelaise.\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_connexion($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $this->loadTemplate("connexion.html.twig", "news.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("nav.html.twig", "news.html.twig", 5)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container-fluid bg-light text-dark\">
    <div class=\"row justify-content-center\">
        <h2 class=\"categories top\"><b>- LES NEWS -</b></h2>
    </div>
    <div class=\"row justify-content-center\">
    <div class=\"col-11\">
    <div class=\"row justify-content-center text-dark\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actus"]) || array_key_exists("actus", $context) ? $context["actus"] : (function () { throw new Twig_Error_Runtime('Variable "actus" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actu_show", ["id" => twig_get_attribute($this->env, $this->source, $context["actu"], "id", [])]), "html", null, true);
            echo "\">
            <div class=\"col-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 justify-content-center top bottom\">
               
                <div class=\" text-dark\"><h3 class=\"article-titre\"><b>";
            // line 18
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "titre", [])), "html", null, true);
            echo "</b></h3></div>
                <div class=\"w-100\"></div>
                <div class=\"img-actu\" style=\"background-image:url('";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["actu"], "imageId", []))), "html", null, true);
            echo "');\"></div>
                <div class=\"w-100\"></div>
                <div class=\"row justify-content-center\">    
                    <div class=\"resume col-11 text-dark top\">";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["actu"], "resume", []);
            echo " <i class=\"text-green\">Lire l'article</i></div>
                    <div class=\"w-100\"></div>
                    <div class=\"text-dark\"><i>";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["actu"], "date", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "date", []), "d-m-Y"), "html", null, true);
            }
            echo "</i></div>
                </div>
                
                
                
            <!--";
            // line 30
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "user", [])) {
                // line 31
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->source); })()), "user", []), "hasRole", [0 => "ROLE_ADMIN"], "method")) {
                    echo "   
                <div class=\"col-3\">
                    <div class=\"row\">
                        <a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_actu_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["actu"], "id", [])]), "html", null, true);
                    echo "\">
                            <button class=\"btn btn-small bouton\">Modifier</button>
                        </a>
                           
                            <form action=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_actu_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["actu"], "id", [])]), "html", null, true);
                    echo "\" method=\"post\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                ";
                    // line 40
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 40, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["actu"], "id", []), [], "array"), 'widget');
                    echo "
                                <button type=\"submit\" class=\" btn btn-small bouton\">Supprimer</button>
                            </form>            
                    </div>
                </div>
                ";
                }
                // line 46
                echo "            ";
            }
            echo " -->
            </div>
        </a>
        
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
    </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "news.html.twig", 58)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 58,  200 => 52,  187 => 46,  178 => 40,  173 => 38,  166 => 34,  159 => 31,  157 => 30,  147 => 25,  142 => 23,  136 => 20,  131 => 18,  124 => 15,  120 => 14,  111 => 7,  102 => 6,  84 => 5,  66 => 4,  48 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block metadescription %}<meta name=\"Description\" content=\"Bordza, marque de skateboards éthiques fabriqués à Bordeaux et école de skateboard, des articles qui parlent de skate dans la région Bordelaise.\">{% endblock %}

{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}
{% block body %}
<div class=\"container-fluid bg-light text-dark\">
    <div class=\"row justify-content-center\">
        <h2 class=\"categories top\"><b>- LES NEWS -</b></h2>
    </div>
    <div class=\"row justify-content-center\">
    <div class=\"col-11\">
    <div class=\"row justify-content-center text-dark\">
        {% for actu in actus %}
        <a href=\"{{ path ('actu_show', { 'id': actu.id} )}}\">
            <div class=\"col-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 justify-content-center top bottom\">
               
                <div class=\" text-dark\"><h3 class=\"article-titre\"><b>{{ actu.titre | upper }}</b></h3></div>
                <div class=\"w-100\"></div>
                <div class=\"img-actu\" style=\"background-image:url('{{ asset('uploads/images/' ~ actu.imageId) }}');\"></div>
                <div class=\"w-100\"></div>
                <div class=\"row justify-content-center\">    
                    <div class=\"resume col-11 text-dark top\">{{ actu.resume | raw }} <i class=\"text-green\">Lire l'article</i></div>
                    <div class=\"w-100\"></div>
                    <div class=\"text-dark\"><i>{% if actu.date %}{{ actu.date|date('d-m-Y') }}{% endif %}</i></div>
                </div>
                
                
                
            <!--{% if app.user %}
                {% if app.user.hasRole('ROLE_ADMIN')  %}   
                <div class=\"col-3\">
                    <div class=\"row\">
                        <a href=\"{{ path('admin_actu_edit', { 'id': actu.id }) }}\">
                            <button class=\"btn btn-small bouton\">Modifier</button>
                        </a>
                           
                            <form action=\"{{ path('admin_actu_delete', { 'id': actu.id }) }}\" method=\"post\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                {{ form_widget(deleteForms[actu.id]) }}
                                <button type=\"submit\" class=\" btn btn-small bouton\">Supprimer</button>
                            </form>            
                    </div>
                </div>
                {% endif %}
            {% endif %} -->
            </div>
        </a>
        
            
        {% endfor %}
    </div>
    </div>
    </div>
</div>

{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}
", "news.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/news.html.twig");
    }
}
