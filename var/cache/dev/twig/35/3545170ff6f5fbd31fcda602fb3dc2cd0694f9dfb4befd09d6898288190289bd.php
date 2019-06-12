<?php

/* inscription_mail.txt.twig */
class __TwigTemplate_f2d2da22cb453887a9dd656385db65472508a90d7bc105e848a5620362a29180 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription_mail.txt.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription_mail.txt.twig"));

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
        echo "Bonjour Bordza !

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

";
        // line 9
        echo twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 9, $this->source); })()), "age", []);
        echo "
";
        // line 10
        echo twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 10, $this->source); })()), "tel", []);
        echo "
";
        // line 11
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 11, $this->source); })()), "sessionId", []), "formules", []);
        echo "
";
        // line 12
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 12, $this->source); })()), "sessionId", []), "disciplines", []);
        echo "
";
        // line 13
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 13, $this->source); })()), "sessionId", []), "titreSession", []);
        echo "
";
        // line 14
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 14, $this->source); })()), "sessionId", []), "dateSession", []);
        echo "
";
        // line 15
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 15, $this->source); })()), "sessionId", []), "prix", []);
        echo "

Prêt de matériel : 
PLANCHE :  ";
        // line 18
        echo twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 18, $this->source); })()), "planche", []);
        echo "
PROTECTIONS : ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 19, $this->source); })()), "materiel", []);
        echo "

Inscription réalisée le : ";
        // line 21
        echo twig_date_format_filter($this->env, "now", "d-m-Y H:i");
        echo ".

Répondre à : ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 23, $this->source); })()), "userId", []), "email", []);
        echo ".

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inscription_mail.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 23,  123 => 21,  118 => 19,  114 => 18,  108 => 15,  104 => 14,  100 => 13,  96 => 12,  92 => 11,  88 => 10,  84 => 9,  77 => 7,  73 => 6,  69 => 4,  60 => 2,  43 => 1,  33 => 2,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}{% endblock %}
{% block body_html %}
{% autoescape false %}
Bonjour Bordza !

Une nouvelle inscription de {{ inscription.userId.username | title }}, 
pour {{ inscription.prenom | title }} {{ inscription.nom | upper }} est en ligne.

{{ inscription.age }}
{{ inscription.tel }}
{{ inscription.sessionId.formules }}
{{ inscription.sessionId.disciplines }}
{{ inscription.sessionId.titreSession }}
{{ inscription.sessionId.dateSession }}
{{ inscription.sessionId.prix }}

Prêt de matériel : 
PLANCHE :  {{ inscription.planche }}
PROTECTIONS : {{ inscription.materiel }}

Inscription réalisée le : {{ \"now\" | date(\"d-m-Y H:i\") }}.

Répondre à : {{ inscription.userId.email }}.

{% endautoescape %}
{% endblock %}", "inscription_mail.txt.twig", "/Users/bordza/Sites/bordza/app/Resources/views/inscription_mail.txt.twig");
    }
}
