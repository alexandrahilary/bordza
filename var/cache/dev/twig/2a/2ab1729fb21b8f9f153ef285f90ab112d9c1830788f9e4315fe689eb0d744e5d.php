<?php

/* catalogue/show.html.twig */
class __TwigTemplate_768d0a25368ae9d39a0d4f3e1978af33d2fd6bf802a37d96a57f9cd9773381af extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/show.html.twig"));

        // line 1
        $this->loadTemplate("nav.html.twig", "catalogue/show.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <h1>DÉTAIL</h1>
    </div>
    <div class=\"row justify-content-center text-center buttongne\">
    <div class=\"col-12\"><h4>";
        // line 9
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catalogue"]) || array_key_exists("catalogue", $context) ? $context["catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "catalogue" does not exist.', 9, $this->source); })()), "titre", [])), "html", null, true);
        echo "<h4></div>
    <div class=\"col-4\"><img class=\"img-fluid\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["catalogue"]) || array_key_exists("catalogue", $context) ? $context["catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "catalogue" does not exist.', 10, $this->source); })()), "image", []), "pathImage", []))), "html", null, true);
        echo "\"></div>
    <div class=\"w-100\">   
                
    <div class=\"bouton\">
    <div class=\"row justify-content-center\">
        
            
        
        <button class=\"btn btn-small bouton\">
            <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["catalogue"]) || array_key_exists("catalogue", $context) ? $context["catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "catalogue" does not exist.', 19, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">Modifier</a>
        </button>
        
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
                <button class=\"btn btn-small bouton\" type=\"submit\" value=\"Delete\">Supprimer</button>
            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
    </div>  
    <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_index");
        echo "\"><- Retour vers les pages de Catalogue</a>  
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 26,  87 => 24,  82 => 22,  76 => 19,  64 => 10,  60 => 9,  53 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'nav.html.twig' %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <h1>DÉTAIL</h1>
    </div>
    <div class=\"row justify-content-center text-center buttongne\">
    <div class=\"col-12\"><h4>{{ catalogue.titre | upper }}<h4></div>
    <div class=\"col-4\"><img class=\"img-fluid\" src=\"{{ asset('uploads/images/' ~ catalogue.image.pathImage) }}\"></div>
    <div class=\"w-100\">   
                
    <div class=\"bouton\">
    <div class=\"row justify-content-center\">
        
            
        
        <button class=\"btn btn-small bouton\">
            <a href=\"{{ path('admin_catalogue_edit', { 'id': catalogue.id }) }}\">Modifier</a>
        </button>
        
            {{ form_start(delete_form) }}
                <button class=\"btn btn-small bouton\" type=\"submit\" value=\"Delete\">Supprimer</button>
            {{ form_end(delete_form) }}
    </div>  
    <a href=\"{{ path('admin_catalogue_index') }}\"><- Retour vers les pages de Catalogue</a>  
    </div>
{% endblock %}
", "catalogue/show.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/catalogue/show.html.twig");
    }
}
