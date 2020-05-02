<?php

/* contact.html.twig */
class __TwigTemplate_a10a2a9e07b703775ffe5342cc6b3b1ff4594aa6b32f35f82f2fa32d83f24f49 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

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

        echo "<meta name=\"Description\" content=\"Bordza, marque de skateboards éthiques fabriqués à Bordeaux et école de skateboard, les contacts\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_connexion($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $this->loadTemplate("connexion.html.twig", "contact.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("nav.html.twig", "contact.html.twig", 4)->display($context);
        
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
        echo "<div class=\"container-fluid identifiant justify-content-center\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <h3 class=\"categories top\"><b>- CONTACT -</b></h3>
            </div>
        </div>
        <div class =\"col-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 top bottom\">
            <div class=\"row justify-content-center align-items-end\">
                <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3 text-right\">
                    <h2 class=\"Titillium\"><b>ÉRIC MOTARD</b></h2>
                    <h4 class=\"text-green\">Moniteur diplômé</h4>
                    <h3 class=\"categories top\"><b>06 10 66 02 46</b></h3>
                    <a href=\"mailto:contact@bordza.fr\"><h4 class=\"top\">contact@bordza.fr</h4></a>
                    <p class=\"\">14A chemin de lescaussade,<br> 33450 St Loubès.</p>
                    <p><a href=\"#formulaire-contact\">Envoyez-nous un message.</a></p>
                </div>
                <div class=\"col-11 col-sm-11 col-md-11 col-lg-8 col-xl-8 image-contact\"></div>
            </div>
        </div>
        <hr class=\"top\">
        <div class =\"col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6 top bottom\">
            <p class=\"text-center\">Pratiquant de longue date en skateboard et longboard, Éric obtient d'abord son diplôme du BIF 
            ( Brevet d'initiateur Fédéral ) pour commencer à former bénévolement la nouvelle génération. 
            Fort de cette expérience il décide d'en faire son métier et obtient alors le diplôme du CQP en skateboard 
            ( Certificat de Qualification Professionelle ) et se lance dans l'aventure. Depuis il forme des enfants et des
            adultes, selon leur niveau, en cours particuliers ou groupés. À chacun son rythme, les cours sont adaptés à tous. 
            Possibilité de prendre des cours de skate en park, bowl, rampe, flat, mais aussi en longboard descente, cruising ou 
            dancing. Il développe également sa propre marque de skateboard, avec l'aide précieuse et bénévole de ses amis Alexandra 
            Mathieu & Andrix ! Bon bricoleur et aidé de son papa il se fabrique ses propres machines pour presser, découper, 
            et imprimer ses planches. Tout est fait maison !</p>
        </div>
        <hr class=\"bottom\">
    </div>



        <!-- formulaire de contact -->
    <div class=\"row justify-content-center\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 top\">
            <div class=\"row justify-content-center\" id=\"formulaire-contact\">
            ";
        // line 49
        $this->loadTemplate("formulaire_contact.html.twig", "contact.html.twig", 49)->display($context);
        // line 50
        echo "            </div>
        </div>
    </div>
        <!-- end formulaire de contact -->


    
</div>
        
        
            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "contact.html.twig", 62)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 62,  157 => 50,  155 => 49,  111 => 7,  102 => 6,  84 => 4,  66 => 3,  48 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block metadescription %}<meta name=\"Description\" content=\"Bordza, marque de skateboards éthiques fabriqués à Bordeaux et école de skateboard, les contacts\">{% endblock %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}

{% block body %}
<div class=\"container-fluid identifiant justify-content-center\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <h3 class=\"categories top\"><b>- CONTACT -</b></h3>
            </div>
        </div>
        <div class =\"col-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 top bottom\">
            <div class=\"row justify-content-center align-items-end\">
                <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3 text-right\">
                    <h2 class=\"Titillium\"><b>ÉRIC MOTARD</b></h2>
                    <h4 class=\"text-green\">Moniteur diplômé</h4>
                    <h3 class=\"categories top\"><b>06 10 66 02 46</b></h3>
                    <a href=\"mailto:contact@bordza.fr\"><h4 class=\"top\">contact@bordza.fr</h4></a>
                    <p class=\"\">14A chemin de lescaussade,<br> 33450 St Loubès.</p>
                    <p><a href=\"#formulaire-contact\">Envoyez-nous un message.</a></p>
                </div>
                <div class=\"col-11 col-sm-11 col-md-11 col-lg-8 col-xl-8 image-contact\"></div>
            </div>
        </div>
        <hr class=\"top\">
        <div class =\"col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6 top bottom\">
            <p class=\"text-center\">Pratiquant de longue date en skateboard et longboard, Éric obtient d'abord son diplôme du BIF 
            ( Brevet d'initiateur Fédéral ) pour commencer à former bénévolement la nouvelle génération. 
            Fort de cette expérience il décide d'en faire son métier et obtient alors le diplôme du CQP en skateboard 
            ( Certificat de Qualification Professionelle ) et se lance dans l'aventure. Depuis il forme des enfants et des
            adultes, selon leur niveau, en cours particuliers ou groupés. À chacun son rythme, les cours sont adaptés à tous. 
            Possibilité de prendre des cours de skate en park, bowl, rampe, flat, mais aussi en longboard descente, cruising ou 
            dancing. Il développe également sa propre marque de skateboard, avec l'aide précieuse et bénévole de ses amis Alexandra 
            Mathieu & Andrix ! Bon bricoleur et aidé de son papa il se fabrique ses propres machines pour presser, découper, 
            et imprimer ses planches. Tout est fait maison !</p>
        </div>
        <hr class=\"bottom\">
    </div>



        <!-- formulaire de contact -->
    <div class=\"row justify-content-center\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 top\">
            <div class=\"row justify-content-center\" id=\"formulaire-contact\">
            {% include 'formulaire_contact.html.twig' %}
            </div>
        </div>
    </div>
        <!-- end formulaire de contact -->


    
</div>
        
        
            
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}
", "contact.html.twig", "/Users/a.hilary/ProjetsWeb/bordza/app/Resources/views/contact.html.twig");
    }
}
