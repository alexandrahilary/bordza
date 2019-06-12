<?php

/* image/show.html.twig */
class __TwigTemplate_7923352ea8d043cfeaf1bedcf0c149fd33306af88d1d90d1b1494e34102883a4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "image/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "image/show.html.twig"));

        // line 1
        $this->loadTemplate("nav.html.twig", "image/show.html.twig", 1)->display($context);
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
    <h1>DÉTAILS</h1>
    </div>
    <div class=\"row justify-content-center ligne\">
    
    <div class=\"col-7\">
        <div class=\"row justify-content-center\">
            
            <div class=\"col-12\"><img class=\"img-fluid col-12\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 13, $this->source); })()), "pathImage", []))), "html", null, true);
        echo "\"></div>
            <div class=\"text-center text\">Description de l'image / référencement : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 14, $this->source); })()), "alt", []), "html", null, true);
        echo "</div>
            <div class=\"w-100\"></div>
            <div class=\"text-center text\">Crédit photo : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 16, $this->source); })()), "creditPhoto", []), "html", null, true);
        echo "</div>
            
        </div>
        <div class=\"bouton\">
            <div class=\"row justify-content-center\">
                
                    <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_index");
        echo "\">
                    <button type=\"submit\" class=\"btn btn-light bouton\">Retour à la liste d'Image</button>
                    </a>
                
                
                    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 27, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"btn btn-light bouton\">Modifier les attributs de l'Image</button>
                    </a>
                
                
                    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_edit_image", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 32, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"btn btn-light bouton\">Modifier l'Image</button>
                    </a>
                
            </div>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "image/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 32,  90 => 27,  82 => 22,  73 => 16,  68 => 14,  64 => 13,  53 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'nav.html.twig' %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
    <h1>DÉTAILS</h1>
    </div>
    <div class=\"row justify-content-center ligne\">
    
    <div class=\"col-7\">
        <div class=\"row justify-content-center\">
            
            <div class=\"col-12\"><img class=\"img-fluid col-12\" src=\"{{ asset('uploads/images/' ~ image.pathImage) }}\"></div>
            <div class=\"text-center text\">Description de l'image / référencement : {{ image.alt }}</div>
            <div class=\"w-100\"></div>
            <div class=\"text-center text\">Crédit photo : {{ image.creditPhoto }}</div>
            
        </div>
        <div class=\"bouton\">
            <div class=\"row justify-content-center\">
                
                    <a href=\"{{ path('admin_image_index') }}\">
                    <button type=\"submit\" class=\"btn btn-light bouton\">Retour à la liste d'Image</button>
                    </a>
                
                
                    <a href=\"{{ path('admin_image_edit', { 'id': image.id }) }}\">
                    <button type=\"submit\" class=\"btn btn-light bouton\">Modifier les attributs de l'Image</button>
                    </a>
                
                
                    <a href=\"{{ path('admin_image_edit_image', { 'id': image.id }) }}\">
                    <button type=\"submit\" class=\"btn btn-light bouton\">Modifier l'Image</button>
                    </a>
                
            </div>
        </div>
{% endblock %}
", "image/show.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/image/show.html.twig");
    }
}
