<?php

/* user/index.html.twig */
class __TwigTemplate_9139d661370b5533e22ea1ec85ffe8dfd5a0c7f59dbeb6a337b5c6d06878d197 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "user/index.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "user/index.html.twig", 3)->display($context);
        
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
        <h2 class=\"top\">- LES UTILISATEURS -</h2>
        <div class=\"w-100\"></div>
        <h4>Nombre d'utilisateurs <span class=\"font-weight-bold\" style=\"color:#1abc9c\"> [ ";
        // line 10
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 10, $this->source); })())), "html", null, true);
        echo " ] </span> </h4>
        <div class=\"w-100\"></div>
        <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" class=\"top\">
            <img class=\"img-class\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/ajoute-rond.png"), "html", null, true);
        echo "\" style=\"margin-right:10px;\">
            <button class=\"btn btn-secondary bouton\" type=\"submit\">Ajouter un Utilisateur</button>
        </a>
    </div>
 
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "    <div class=\"row justify-content-center\">   
        <div class=\"col-11\">  
            <div class=\"row grey\">      
                    
                
                    <div class=\"col-2\">
                        <div class=\"row align-items-center  Titillium\">
                            <p class=\"bg-green col-12\">Utilisateur :  ";
            // line 26
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [])), "html", null, true);
            echo "<br/>
                            ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", []), "html", null, true);
            echo "</p>
                        </div>
                    </div>

                    <div class=\"col-2\">
                        <div class=\"row align-self-center\">
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
            echo "\">
                                <button type=\"submit\" class=\"btn bouton\">Modifier</button>
                            </a>
                            <form action=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
            echo "\" method=\"post\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", []), [], "array"), 'widget');
            echo "
                                <button type=\"submit\" class=\"btn btn-danger bouton\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-8\">
                    
                    <p class=\"categories \">- INSCRIPTIONS : <span class=\"\" style=\"color:#1abc9c;font-size:1em;\">[ ";
            // line 45
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "inscriptions", [])), "html", null, true);
            echo " ]</span></p>
                    
                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "inscriptions", []));
            foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
                // line 48
                echo "                    <div class=\" col-12\">
                        <div class=\"\">
                        
                            <div class=\"bg-green\">
                            <img src=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/glyphicons-635-teenager.png"), "html", null, true);
                echo "\"> 
                            ";
                // line 53
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "nom", [])), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "prenom", [])), "html", null, true);
                echo ", age : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "age", []), "html", null, true);
                echo " /  
                            ";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "html", null, true);
                echo "
                            </div>
                            
                        
                    </div>
                    
                </div>
                <div class=\"w-100\"></div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                </div>
                
            </div>    
        </div>
        </div>  
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "user/index.html.twig", 71)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 71,  215 => 69,  204 => 63,  189 => 54,  181 => 53,  177 => 52,  171 => 48,  167 => 47,  162 => 45,  152 => 38,  147 => 36,  141 => 33,  132 => 27,  128 => 26,  119 => 19,  115 => 18,  107 => 13,  103 => 12,  98 => 10,  92 => 6,  83 => 5,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <h2 class=\"top\">- LES UTILISATEURS -</h2>
        <div class=\"w-100\"></div>
        <h4>Nombre d'utilisateurs <span class=\"font-weight-bold\" style=\"color:#1abc9c\"> [ {{ users | length }} ] </span> </h4>
        <div class=\"w-100\"></div>
        <a href=\"{{ path('fos_user_registration_register') }}\" class=\"top\">
            <img class=\"img-class\" src=\"{{ asset('assets/images/glyph/ajoute-rond.png') }}\" style=\"margin-right:10px;\">
            <button class=\"btn btn-secondary bouton\" type=\"submit\">Ajouter un Utilisateur</button>
        </a>
    </div>
 
        {% for user in users %}
    <div class=\"row justify-content-center\">   
        <div class=\"col-11\">  
            <div class=\"row grey\">      
                    
                
                    <div class=\"col-2\">
                        <div class=\"row align-items-center  Titillium\">
                            <p class=\"bg-green col-12\">Utilisateur :  {{ user.username | upper }}<br/>
                            {{ user.email }}</p>
                        </div>
                    </div>

                    <div class=\"col-2\">
                        <div class=\"row align-self-center\">
                            <a href=\"{{ path('admin_user_edit', { 'id': user.id }) }}\">
                                <button type=\"submit\" class=\"btn bouton\">Modifier</button>
                            </a>
                            <form action=\"{{ path('admin_user_delete', { 'id': user.id }) }}\" method=\"post\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                {{ form_widget(deleteForms[user.id]) }}
                                <button type=\"submit\" class=\"btn btn-danger bouton\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-8\">
                    
                    <p class=\"categories \">- INSCRIPTIONS : <span class=\"\" style=\"color:#1abc9c;font-size:1em;\">[ {{ user.inscriptions | length }} ]</span></p>
                    
                    {% for inscription in user.inscriptions %}
                    <div class=\" col-12\">
                        <div class=\"\">
                        
                            <div class=\"bg-green\">
                            <img src=\"{{ asset('assets/images/glyph/glyphicons-635-teenager.png') }}\"> 
                            {{ inscription.nom | upper }}, {{ inscription.prenom | title }}, age : {{ inscription.age }} /  
                            {{ inscription.sessionId }}
                            </div>
                            
                        
                    </div>
                    
                </div>
                <div class=\"w-100\"></div>
                {% endfor %}
                </div>
                
            </div>    
        </div>
        </div>  
        {% endfor %}
    
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "user/index.html.twig", "/Users/a.hilary/ProjetsWeb/bordza/app/Resources/views/user/index.html.twig");
    }
}
