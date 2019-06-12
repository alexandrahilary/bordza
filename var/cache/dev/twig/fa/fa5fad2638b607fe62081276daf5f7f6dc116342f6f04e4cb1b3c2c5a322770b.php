<?php

/* inscription_mail.html.twig */
class __TwigTemplate_8e39b8683ace7c982d45e8934a22ed2b0e3955e401becd7cb326da97c6fcafd5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'subject' => [$this, 'block_subject'],
            'body_html' => [$this, 'block_body_html'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription_mail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription_mail.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 2
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2
    public function block_body_html($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        // line 4
        echo "<h2>Bonjour Bordza !</h2>
<div style=\"background:black:color:white;\">
Une nouvelle inscription de ";
        // line 6
        echo twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 6, $this->source); })()), "userId", []), "username", []));
        echo ", 
pour ";
        // line 7
        echo twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 7, $this->source); })()), "prenom", []));
        echo " ";
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 7, $this->source); })()), "nom", []));
        echo " est en ligne.

<p>";
        // line 9
        echo twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 9, $this->source); })()), "age", []);
        echo "</p>
<p>";
        // line 10
        echo twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 10, $this->source); })()), "tel", []);
        echo "</p>
<p>";
        // line 11
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 11, $this->source); })()), "sessionId", []), "formules", []);
        echo "</p>
<p>";
        // line 12
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 12, $this->source); })()), "sessionId", []), "disciplines", []);
        echo "</p>
<p>";
        // line 13
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 13, $this->source); })()), "sessionId", []), "titreSession", []);
        echo "</p>
<p>";
        // line 14
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 14, $this->source); })()), "sessionId", []), "dateSession", []);
        echo "</p>
<p>";
        // line 15
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 15, $this->source); })()), "sessionId", []), "prix", []);
        echo "</p>

<p>Prêt de matériel : 
";
        // line 18
        if (((twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 18, $this->source); })()), "planche", []) != true) && (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 18, $this->source); })()), "materiel", []) != true))) {
            // line 19
            echo "NON
";
        }
        // line 21
        if ((twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 21, $this->source); })()), "planche", []) || twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 21, $this->source); })()), "materiel", []))) {
            // line 22
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 22, $this->source); })()), "planche", [])) {
                // line 23
                echo "        PLANCHE 
    ";
            }
            // line 25
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 25, $this->source); })()), "materiel", [])) {
                // line 26
                echo "        PROTECTIONS 
    ";
            }
        }
        // line 29
        echo "</p>
<p>Inscription réalisée le : ";
        // line 30
        echo twig_date_format_filter($this->env, "now", "d-m-Y H:i");
        echo ".</p>

<p>Répondre à : <a  href=\"mailto:";
        // line 32
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 32, $this->source); })()), "userId", []), "email", []);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 32, $this->source); })()), "userId", []), "email", []);
        echo "</a></p>
<p><a href=\"https://www.bordza.fr\">Aller voir vos inscriptions</a></p>

</div>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inscription_mail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  145 => 32,  140 => 30,  137 => 29,  132 => 26,  129 => 25,  125 => 23,  122 => 22,  120 => 21,  116 => 19,  114 => 18,  108 => 15,  104 => 14,  100 => 13,  96 => 12,  92 => 11,  88 => 10,  84 => 9,  77 => 7,  73 => 6,  69 => 4,  60 => 2,  43 => 1,  33 => 2,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}{% endblock %}
{% block body_html %}
{% autoescape false %}
<h2>Bonjour Bordza !</h2>
<div style=\"background:black:color:white;\">
Une nouvelle inscription de {{ inscription.userId.username | title }}, 
pour {{ inscription.prenom | title }} {{ inscription.nom | upper }} est en ligne.

<p>{{ inscription.age }}</p>
<p>{{ inscription.tel }}</p>
<p>{{ inscription.sessionId.formules }}</p>
<p>{{ inscription.sessionId.disciplines }}</p>
<p>{{ inscription.sessionId.titreSession }}</p>
<p>{{ inscription.sessionId.dateSession }}</p>
<p>{{ inscription.sessionId.prix }}</p>

<p>Prêt de matériel : 
{% if inscription.planche != true and  inscription.materiel != true %}
NON
{% endif %}
{% if inscription.planche or inscription.materiel %}
    {% if inscription.planche %}
        PLANCHE 
    {% endif %}
    {% if inscription.materiel %}
        PROTECTIONS 
    {% endif %}
{% endif %}
</p>
<p>Inscription réalisée le : {{ \"now\" | date(\"d-m-Y H:i\") }}.</p>

<p>Répondre à : <a  href=\"mailto:{{ inscription.userId.email }}\">{{ inscription.userId.email }}</a></p>
<p><a href=\"https://www.bordza.fr\">Aller voir vos inscriptions</a></p>

</div>
</body>
{% endautoescape %}
{% endblock %}", "inscription_mail.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/inscription_mail.html.twig");
    }
}
