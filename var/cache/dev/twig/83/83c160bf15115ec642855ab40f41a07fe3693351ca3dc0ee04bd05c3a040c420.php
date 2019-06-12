<?php

/* contact_mail.email.twig */
class __TwigTemplate_fe1db757f6d454ac09b635e0017b04925fd6abe8b966006ab384c39c2c3878d4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact_mail.email.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact_mail.email.twig"));

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

<p>Un nouveau message de <b>";
        // line 6
        echo twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 6, $this->source); })()), "nom", []));
        echo " ";
        echo twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 6, $this->source); })()), "prenom", []));
        echo "</b> est en ligne.</p>

<p>Objet : ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 8, $this->source); })()), "objet", []);
        echo "</p>

<p>Message : ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 10, $this->source); })()), "message", []);
        echo "</p>

<p>envoyé le : ";
        // line 12
        echo twig_date_format_filter($this->env, "now", "d-m-Y H:i");
        echo ".</p>

<p>Répondre à : <a href=\"mailto:";
        // line 14
        echo twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 14, $this->source); })()), "mail", []);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 14, $this->source); })()), "mail", []);
        echo " </a></p>

<p><a href=\"https://www.bordza.fr\">Aller voir les messages</a></p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact_mail.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 14,  90 => 12,  85 => 10,  80 => 8,  73 => 6,  69 => 4,  60 => 2,  43 => 1,  33 => 2,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}{% endblock %}
{% block body_html %}
{% autoescape false %}
<h2>Bonjour Bordza !</h2>

<p>Un nouveau message de <b>{{ contact.nom | title }} {{ contact.prenom | title }}</b> est en ligne.</p>

<p>Objet : {{ contact.objet }}</p>

<p>Message : {{ contact.message }}</p>

<p>envoyé le : {{ \"now\" | date(\"d-m-Y H:i\") }}.</p>

<p>Répondre à : <a href=\"mailto:{{ contact.mail }}\">{{ contact.mail }} </a></p>

<p><a href=\"https://www.bordza.fr\">Aller voir les messages</a></p>
{% endautoescape %}
{% endblock %}", "contact_mail.email.twig", "/Users/bordza/Sites/bordza/app/Resources/views/contact_mail.email.twig");
    }
}
