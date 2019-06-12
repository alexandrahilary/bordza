<?php

/* contact/show.html.twig */
class __TwigTemplate_a1ec028007ebf833066de24688616925ad530b60129dd8f48a22f83e79626ab0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "contact/show.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "contact/show.html.twig", 3)->display($context);
        
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
    <h3 class=\"text-green top\">MESSAGE DE ";
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 8, $this->source); })()), "nom", [])), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 8, $this->source); })()), "prenom", [])), "html", null, true);
        echo "</h3>
    <div class=\"w-100\"></div>          
    <div class=\"text\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 10, $this->source); })()), "mail", []), "html", null, true);
        echo "</div>
    <div class=\"w-100\"></div>
    <div class=\"text\">Objet : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 12, $this->source); })()), "objet", []), "html", null, true);
        echo "</div>
    <div class=\"w-100\"></div>
    <div class=\"col-10 rounded grey padding \">
        <div class=\"row justify-content-center\">
            <div class=\"col-10\">    
                <div class=\"row justify-content-start\">
                    
                    <div class=\"message-contenu\"><p>";
        // line 19
        echo twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 19, $this->source); })()), "message", []);
        echo "</p></div>
                    <div class=\"w-100\"></div>
                     ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 21, $this->source); })()), "image", []) != null)) {
            // line 22
            echo "                         <div class=\"col-8 message-contenu\"><img class=\"img-fluid\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 22, $this->source); })()), "image", []))), "html", null, true);
            echo "\"></div>
                     ";
        }
        // line 24
        echo "                    <div class=\"w-100\"></div>
                    <div class=\"message\"><p>Message envoyé le : ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 25, $this->source); })()), "createdAt", []), "d/m/Y H:i"), "html", null, true);
        echo "</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"w-100\"></div>
    <div class=\"message-contenu\" >MESSAGE ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 31, $this->source); })()), "traite", [])) {
            echo "TRAITÉ <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/valide.png"), "html", null, true);
            echo "\">";
        } else {
            echo "<span style=\"font-weight:bold\">EN ATTENTE DE TRAITEMENT</span>";
        }
        echo "</div>
    ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 32, $this->source); })()), "traite", [])) {
            // line 33
            echo "        <div class=\"w-100\"></div>
        <div class=\"message\">Message traité le : ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 34, $this->source); })()), "updatedAt", []), "d/m/Y H:i"), "html", null, true);
            echo "</div>
    ";
        }
        // line 36
        echo "    <div class=\"w-100\"></div>
        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 37, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">
        <button class=\"btn btn-light bouton\">Traiter le message</button>
        </a>
        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 40, $this->source); })()), 'form_start');
        echo "
            <button class=\"btn btn-danger bouton\" type=\"submit\" value=\"Delete\">Supprimer</button>
        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
        
        <div class=\"w-100\"></div>
        <a class=\"text\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_index");
        echo "\"><- Retour vers les messages</a>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "contact/show.html.twig", 49)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 49,  183 => 45,  177 => 42,  172 => 40,  166 => 37,  163 => 36,  158 => 34,  155 => 33,  153 => 32,  143 => 31,  134 => 25,  131 => 24,  125 => 22,  123 => 21,  118 => 19,  108 => 12,  103 => 10,  96 => 8,  92 => 6,  83 => 5,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
    <h3 class=\"text-green top\">MESSAGE DE {{ contact.nom | upper }} {{ contact.prenom | title }}</h3>
    <div class=\"w-100\"></div>          
    <div class=\"text\">{{ contact.mail }}</div>
    <div class=\"w-100\"></div>
    <div class=\"text\">Objet : {{ contact.objet }}</div>
    <div class=\"w-100\"></div>
    <div class=\"col-10 rounded grey padding \">
        <div class=\"row justify-content-center\">
            <div class=\"col-10\">    
                <div class=\"row justify-content-start\">
                    
                    <div class=\"message-contenu\"><p>{{ contact.message | raw }}</p></div>
                    <div class=\"w-100\"></div>
                     {% if contact.image != null %}
                         <div class=\"col-8 message-contenu\"><img class=\"img-fluid\" src=\"{{ asset('uploads/images/' ~ contact.image) }}\"></div>
                     {% endif %}
                    <div class=\"w-100\"></div>
                    <div class=\"message\"><p>Message envoyé le : {{ contact.createdAt | date('d/m/Y H:i') }}</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"w-100\"></div>
    <div class=\"message-contenu\" >MESSAGE {% if contact.traite %}TRAITÉ <img src=\"{{ asset('assets/images/glyph/valide.png')}}\">{% else %}<span style=\"font-weight:bold\">EN ATTENTE DE TRAITEMENT</span>{% endif %}</div>
    {% if contact.traite %}
        <div class=\"w-100\"></div>
        <div class=\"message\">Message traité le : {{ contact.updatedAt | date('d/m/Y H:i') }}</div>
    {% endif %}
    <div class=\"w-100\"></div>
        <a href=\"{{ path('admin_contact_edit', { 'id': contact.id }) }}\">
        <button class=\"btn btn-light bouton\">Traiter le message</button>
        </a>
        {{ form_start(delete_form) }}
            <button class=\"btn btn-danger bouton\" type=\"submit\" value=\"Delete\">Supprimer</button>
        {{ form_end(delete_form) }}
        
        <div class=\"w-100\"></div>
        <a class=\"text\" href=\"{{ path('admin_contact_index') }}\"><- Retour vers les messages</a>
    </div>
</div>
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "contact/show.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/contact/show.html.twig");
    }
}
