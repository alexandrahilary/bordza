<?php

/* contact/index.html.twig */
class __TwigTemplate_e5fdc236fc3919b55be381ebacab3cbd256891ee5e0082fd5f3cba27b3669d70 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "contact/index.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "contact/index.html.twig", 3)->display($context);
        
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
    <div class=\"row justify-content-center\">
        <h2 class=\"top\">MES MESSAGES</h2>
        <div class=\"w-100\"></div>  
    <div class=\"col-11 col-sm-11 col-md-11 col-lg-10 col-xl-10\">    
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new Twig_Error_Runtime('Variable "contacts" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 12
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["contact"], "traite", [])) {
                echo "    
    <div class=\"row rounded grey padding top justify-content-center\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-8 col-xl-8\">
            <div class=\"row justify-content-start\">
                <div class=\"message text-green\">De : ";
                // line 16
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [])), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [])), "html", null, true);
                echo " </div>
                <div class=\"message\"> / ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "mail", []), "html", null, true);
                echo " </div>
                <div class=\"w-100\"></div>
                <div class=\"message\"> / Objet du message : ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "objet", []), "html", null, true);
                echo "</div>
                <div class=\"w-100\"></div>
                <div class=\"message\">Envoyé le : ";
                // line 21
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "createdAt", []), "d/m/Y H:i", "Europe/Paris"), "html", null, true);
                echo "</div>
                
            </div>
        </div>
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4\">
            <div class=\"row justify-content-start rounded grey\">
                <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [])]), "html", null, true);
                echo "\">
                    <button class=\"btn btn-light bouton\">Lire</button>
                </a>
                <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [])]), "html", null, true);
                echo "\">
                    <button class=\"btn btn-light bouton\">Traiter</button>
                </a>
                <form action=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [])]), "html", null, true);
                echo "\" method=\"post\">
                  <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                  ";
                // line 35
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 35, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["contact"], "id", []), [], "array"), 'widget');
                echo "
                  <button type=\"submit\" class=\"btn btn-danger bouton\">
                      Supprimer
                  </button>
                </form>
                <div class=\"w-100\"></div>
                <div class=\"message\">";
                // line 41
                if (twig_get_attribute($this->env, $this->source, $context["contact"], "traite", [])) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/valide.png"), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span class=\"text-green\" style=\"font-weight:bold\">EN ATTENTE</span>";
                }
                echo "</div>             
                
                ";
                // line 43
                if (twig_get_attribute($this->env, $this->source, $context["contact"], "traite", [])) {
                    echo "<div class=\"message\">Message traité le : ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "updatedAt", []), "d/m/Y H:i", "Europe/Paris"), "html", null, true);
                    echo "</div>";
                }
                // line 44
                echo "            </div>
        </div>
    </div>
        <div class=\"w-100\"></div>
    ";
            } else {
                // line 49
                echo "    <div class=\"row rounded grey padding top justify-content-center\" style=\"border:2px solid red\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-8 col-xl-8\">
            <div class=\"row justify-content-start\">
                <div class=\"message text-green\">De : ";
                // line 52
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [])), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [])), "html", null, true);
                echo " </div>
                <div class=\"message\"> / ";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "mail", []), "html", null, true);
                echo " </div>
                <div class=\"w-100\"></div>
                <div class=\"message\"> / Objet du message : ";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "objet", []), "html", null, true);
                echo "</div>
                <div class=\"w-100\"></div>
                <div class=\"message\">Envoyé le : ";
                // line 57
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "createdAt", []), "d/m/Y H:i", "Europe/Paris"), "html", null, true);
                echo "</div>
                
            </div>
        </div>
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4\">
            <div class=\"row justify-content-start rounded grey\">
                <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [])]), "html", null, true);
                echo "\">
                    <button class=\"btn btn-light bouton\">Lire</button>
                </a>
                <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [])]), "html", null, true);
                echo "\">
                    <button class=\"btn btn-light bouton\">Traiter</button>
                </a>
                <form action=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [])]), "html", null, true);
                echo "\" method=\"post\">
                  <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                  ";
                // line 71
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 71, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["contact"], "id", []), [], "array"), 'widget');
                echo "
                  <button type=\"submit\" class=\"btn btn-danger bouton\">
                      Supprimer
                  </button>
                </form>
                <div class=\"w-100\"></div>
                <div class=\"message\">";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["contact"], "traite", [])) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/valide.png"), "html", null, true);
                    echo "\">
                ";
                } else {
                    // line 78
                    echo "<span class=\"btn-danger\" style=\"font-weight:bold;\">EN ATTENTE</span>";
                }
                echo "</div>             
                
                ";
                // line 80
                if (twig_get_attribute($this->env, $this->source, $context["contact"], "traite", [])) {
                    echo "<div class=\"message\">Message traité le : ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "updatedAt", []), "d/m/Y H:i", "Europe/Paris"), "html", null, true);
                    echo "</div>";
                }
                // line 81
                echo "            </div>
        </div>
    </div>
        <div class=\"w-100\"></div>
    ";
            }
            // line 86
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "     </div>   
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "contact/index.html.twig", 91)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 91,  274 => 87,  268 => 86,  261 => 81,  255 => 80,  249 => 78,  242 => 77,  233 => 71,  228 => 69,  222 => 66,  216 => 63,  207 => 57,  202 => 55,  197 => 53,  191 => 52,  186 => 49,  179 => 44,  173 => 43,  162 => 41,  153 => 35,  148 => 33,  142 => 30,  136 => 27,  127 => 21,  122 => 19,  117 => 17,  111 => 16,  103 => 12,  99 => 11,  92 => 6,  83 => 5,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}

{% block body %}
<div class=\"container-fluid bottom\">
    <div class=\"row justify-content-center\">
        <h2 class=\"top\">MES MESSAGES</h2>
        <div class=\"w-100\"></div>  
    <div class=\"col-11 col-sm-11 col-md-11 col-lg-10 col-xl-10\">    
        {% for contact in contacts %}
    {% if contact.traite %}    
    <div class=\"row rounded grey padding top justify-content-center\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-8 col-xl-8\">
            <div class=\"row justify-content-start\">
                <div class=\"message text-green\">De : {{ contact.nom | upper}}  {{ contact.prenom | capitalize}} </div>
                <div class=\"message\"> / {{ contact.mail }} </div>
                <div class=\"w-100\"></div>
                <div class=\"message\"> / Objet du message : {{ contact.objet }}</div>
                <div class=\"w-100\"></div>
                <div class=\"message\">Envoyé le : {{ contact.createdAt | date('d/m/Y H:i','Europe/Paris') }}</div>
                
            </div>
        </div>
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4\">
            <div class=\"row justify-content-start rounded grey\">
                <a href=\"{{ path('admin_contact_show', { 'id': contact.id }) }}\">
                    <button class=\"btn btn-light bouton\">Lire</button>
                </a>
                <a href=\"{{ path('admin_contact_edit', { 'id': contact.id }) }}\">
                    <button class=\"btn btn-light bouton\">Traiter</button>
                </a>
                <form action=\"{{ path('admin_contact_delete', { 'id': contact.id }) }}\" method=\"post\">
                  <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                  {{ form_widget(deleteForms[contact.id]) }}
                  <button type=\"submit\" class=\"btn btn-danger bouton\">
                      Supprimer
                  </button>
                </form>
                <div class=\"w-100\"></div>
                <div class=\"message\">{% if contact.traite %}<img src=\"{{ asset('assets/images/glyph/valide.png')}}\">{% else %}<span class=\"text-green\" style=\"font-weight:bold\">EN ATTENTE</span>{% endif %}</div>             
                
                {% if contact.traite %}<div class=\"message\">Message traité le : {{ contact.updatedAt | date('d/m/Y H:i','Europe/Paris') }}</div>{% endif %}
            </div>
        </div>
    </div>
        <div class=\"w-100\"></div>
    {% else %}
    <div class=\"row rounded grey padding top justify-content-center\" style=\"border:2px solid red\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-8 col-xl-8\">
            <div class=\"row justify-content-start\">
                <div class=\"message text-green\">De : {{ contact.nom | upper}}  {{ contact.prenom | capitalize}} </div>
                <div class=\"message\"> / {{ contact.mail }} </div>
                <div class=\"w-100\"></div>
                <div class=\"message\"> / Objet du message : {{ contact.objet }}</div>
                <div class=\"w-100\"></div>
                <div class=\"message\">Envoyé le : {{ contact.createdAt | date('d/m/Y H:i','Europe/Paris') }}</div>
                
            </div>
        </div>
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4\">
            <div class=\"row justify-content-start rounded grey\">
                <a href=\"{{ path('admin_contact_show', { 'id': contact.id }) }}\">
                    <button class=\"btn btn-light bouton\">Lire</button>
                </a>
                <a href=\"{{ path('admin_contact_edit', { 'id': contact.id }) }}\">
                    <button class=\"btn btn-light bouton\">Traiter</button>
                </a>
                <form action=\"{{ path('admin_contact_delete', { 'id': contact.id }) }}\" method=\"post\">
                  <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                  {{ form_widget(deleteForms[contact.id]) }}
                  <button type=\"submit\" class=\"btn btn-danger bouton\">
                      Supprimer
                  </button>
                </form>
                <div class=\"w-100\"></div>
                <div class=\"message\">{% if contact.traite %}<img src=\"{{ asset('assets/images/glyph/valide.png')}}\">
                {% else %}<span class=\"btn-danger\" style=\"font-weight:bold;\">EN ATTENTE</span>{% endif %}</div>             
                
                {% if contact.traite %}<div class=\"message\">Message traité le : {{ contact.updatedAt | date('d/m/Y H:i','Europe/Paris') }}</div>{% endif %}
            </div>
        </div>
    </div>
        <div class=\"w-100\"></div>
    {% endif %}
        {% endfor %}
     </div>   
    </div>
</div>
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "contact/index.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/contact/index.html.twig");
    }
}
