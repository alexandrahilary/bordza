<?php

/* serigraphie.html.twig */
class __TwigTemplate_33224f48be870e524cde4c65ae30b1a74de6748e9a9d95ed252f9544b58e0fdb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "serigraphie.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serigraphie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serigraphie.html.twig"));

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

        echo "<meta name=\"Description\" content=\"Bordza, personnalisez vos planches de skateboard avec la sérigraphie et des encres à l'eau pus respectueuses de l'environnement.\">";
        
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

        $this->loadTemplate("connexion.html.twig", "serigraphie.html.twig", 4)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "serigraphie.html.twig", 5)->display($context);
        
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
                <div class=\"col-12\"><img class=\"img-fluid col-12\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/serigraphie/bandeau-serigraphie.jpg"), "html", null, true);
        echo "\" 
                alt=\"serigraphie artisanale bordeaux handmade skateboard longboard\">
                </div>
                <h1 class=\"categories\"><b>- LA PERSONNALISATION -</b></h1>
                <div class=\"w-100\"></div>
                <hr class=\"top bottom\">
                <div class=\"col-7 top bottom\">
                    <p class=\"text-center\">Si vous étes sensibles à la fabrication française de skateboard et que vous souhaitez développer 
                votre propre gamme ou vous personnaliser votre planche, nous pouvons sérigraphier nos planches de skate avec vos propres visuels, que ce soit du modèle unique 
                ou de la petite série, envoyez nous vos projets à l'adresse suivante : <a href=\"mailto:contact@bordza.fr\"> contact@bordza.fr</a> ou remplissez le 
                <a href=\"#formulaire_personnalisation\">formulaire en ligne</a>.</p>
                    <p class=\"text-center\">Nous imprimons avec le procédé de la sérigraphie. Cette technique est la plus respectueuse des propriétés techniques du bois 
                et donc de la solidité de la planche car elle vient déposer une fine couche d'encre sur la feuille de bois de finition avant 
                que celle-ci ne soit mise dans le moule et pressée avec les autres couches constituant la planche.
                Nous utilisons des essences de bois issues de fôrets maîtrisées et de l'encre à l'eau plus réspectueuse de l'environnement.</p>
                </div>
                <hr class=\"top bottom\">
            </div>
        </div>
    </div>

    <div class=\"row justify-content-center\">
        <div class=\"col-10\">
            <div class=\"row justify-content-center\">
                
                <h2 class=\"categories top\"><b>- Une planche à leur image -</b></h2>
                <div class=\"w-100\"></div>
                <hr class=\"top bottom\">
                <div class=\"w-100\"></div>
                <div class=\"row justify-content-center top bottom\">
                    <div class=\"kraken\">\"Kraken\"</div>
                    <div class=\"feelethik\">\"Feelethik\"</div>
                    <div class=\"mira\">\"Mira\"</div>
                    <div class=\"axel\">\"Axel\"</div>
                </div>
                <div class=\"w-100\"></div>
                <hr class=\"top bottom\">
            </div>
        </div>
    </div>

    <!-- formulaire de contact -->
    <div class=\"row justify-content-center\">
        <div class=\"col-7 text-center text-green text top bottom\"><h3 class=\"top bottom categories\">Vous souhaitez nous envoyer une demande de devis ?</h3>
             <p>Pensez à préciser les quantités, les modèles de planches, le nombre de couleurs pour l’impression, le format
            d’impression et toute autre information nécessaire pour établir un devis le plus précis possible. </p>
            <p>Si vous avez déjà 
            l’image de votre projet d’impression vous pouvez la joindre afin que nous l'étudions (en format jpg, png ou gif).</p>
        </div>
        <div class=\"col-10 top bottom\">
            <div class=\"row justify-content-center\" id=\"formulaire_personnalisation\">
            ";
        // line 63
        $this->loadTemplate("formulaire_contact.html.twig", "serigraphie.html.twig", 63)->display($context);
        // line 64
        echo "            </div>
        </div>
    </div>
    <!-- end formulaire de contact -->
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "serigraphie.html.twig", 72)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "serigraphie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 72,  174 => 64,  172 => 63,  118 => 12,  111 => 7,  102 => 6,  84 => 5,  66 => 4,  48 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block metadescription %}<meta name=\"Description\" content=\"Bordza, personnalisez vos planches de skateboard avec la sérigraphie et des encres à l'eau pus respectueuses de l'environnement.\">{% endblock %}

{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}
{% block body %}
<div class=\"container-fluid identifiant justify-content-center\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12\"><img class=\"img-fluid col-12\" src=\"{{ asset('assets/images/serigraphie/bandeau-serigraphie.jpg') }}\" 
                alt=\"serigraphie artisanale bordeaux handmade skateboard longboard\">
                </div>
                <h1 class=\"categories\"><b>- LA PERSONNALISATION -</b></h1>
                <div class=\"w-100\"></div>
                <hr class=\"top bottom\">
                <div class=\"col-7 top bottom\">
                    <p class=\"text-center\">Si vous étes sensibles à la fabrication française de skateboard et que vous souhaitez développer 
                votre propre gamme ou vous personnaliser votre planche, nous pouvons sérigraphier nos planches de skate avec vos propres visuels, que ce soit du modèle unique 
                ou de la petite série, envoyez nous vos projets à l'adresse suivante : <a href=\"mailto:contact@bordza.fr\"> contact@bordza.fr</a> ou remplissez le 
                <a href=\"#formulaire_personnalisation\">formulaire en ligne</a>.</p>
                    <p class=\"text-center\">Nous imprimons avec le procédé de la sérigraphie. Cette technique est la plus respectueuse des propriétés techniques du bois 
                et donc de la solidité de la planche car elle vient déposer une fine couche d'encre sur la feuille de bois de finition avant 
                que celle-ci ne soit mise dans le moule et pressée avec les autres couches constituant la planche.
                Nous utilisons des essences de bois issues de fôrets maîtrisées et de l'encre à l'eau plus réspectueuse de l'environnement.</p>
                </div>
                <hr class=\"top bottom\">
            </div>
        </div>
    </div>

    <div class=\"row justify-content-center\">
        <div class=\"col-10\">
            <div class=\"row justify-content-center\">
                
                <h2 class=\"categories top\"><b>- Une planche à leur image -</b></h2>
                <div class=\"w-100\"></div>
                <hr class=\"top bottom\">
                <div class=\"w-100\"></div>
                <div class=\"row justify-content-center top bottom\">
                    <div class=\"kraken\">\"Kraken\"</div>
                    <div class=\"feelethik\">\"Feelethik\"</div>
                    <div class=\"mira\">\"Mira\"</div>
                    <div class=\"axel\">\"Axel\"</div>
                </div>
                <div class=\"w-100\"></div>
                <hr class=\"top bottom\">
            </div>
        </div>
    </div>

    <!-- formulaire de contact -->
    <div class=\"row justify-content-center\">
        <div class=\"col-7 text-center text-green text top bottom\"><h3 class=\"top bottom categories\">Vous souhaitez nous envoyer une demande de devis ?</h3>
             <p>Pensez à préciser les quantités, les modèles de planches, le nombre de couleurs pour l’impression, le format
            d’impression et toute autre information nécessaire pour établir un devis le plus précis possible. </p>
            <p>Si vous avez déjà 
            l’image de votre projet d’impression vous pouvez la joindre afin que nous l'étudions (en format jpg, png ou gif).</p>
        </div>
        <div class=\"col-10 top bottom\">
            <div class=\"row justify-content-center\" id=\"formulaire_personnalisation\">
            {% include 'formulaire_contact.html.twig' %}
            </div>
        </div>
    </div>
    <!-- end formulaire de contact -->
</div>


{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "serigraphie.html.twig", "/Users/a.hilary/ProjetsWeb/bordza/app/Resources/views/serigraphie.html.twig");
    }
}
