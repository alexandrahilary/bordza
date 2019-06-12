<?php

/* image/index.html.twig */
class __TwigTemplate_5c7d1dcc62a1cce3403a742f95653ef9db19256db630855c0bffecf1418a090d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "image/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "image/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "image/index.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "image/index.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "image/index.html.twig", 3)->display($context);
        
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
        echo "
<div class=\"container-fluid\">
    <div class=\"row justify-content-center retour-categories text-green\">
        <p>retour -> <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "les Sessions"), "html", null, true);
        echo "</a>
          -> <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "le Catalogue"), "html", null, true);
        echo "</a>
          -> <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_actu_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "les News"), "html", null, true);
        echo "</a>
        </p>
    </div>
    <div class=\"row justify-content-center\">
        <h1>MES IMAGES</h1>
    </div>
    <div class=\"row justify-content-center ligne\">  
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 19
            echo "        
            <div class=\"rounded grey padding col-3\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12\"><img class=\"img-fluid col-12\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["image"], "pathImage", []))), "html", null, true);
            echo "\"></div>
                    <div class=\"col-12\">
                        <div class=\"text text-green\">ATTRIBUTS : </div>
                        <div class=\"text\">Description de l'image / Référencement : <br/><span class=\"text-green\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "alt", []), "html", null, true);
            echo "</span></div>
                        <div class=\"text\">Crédit Photo : <br/><span class=\"text-green\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "creditPhoto", []), "html", null, true);
            echo "</span></div>
                    </div>
                    <div class=\"col-12\">
                        <ul>
                            <li>
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [])]), "html", null, true);
            echo "\">
                                <button type=\"submit\" class=\"btn btn-small bouton\">Modifier les attibuts</button>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_edit_image", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [])]), "html", null, true);
            echo "\">
                                <button type=\"submit\" class=\"btn btn-danger bouton\">Modifier l'Image</button>   
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>  
            </div> 
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "image/index.html.twig", 50)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "image/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 50,  172 => 46,  156 => 36,  148 => 31,  140 => 26,  136 => 25,  130 => 22,  125 => 19,  121 => 18,  109 => 11,  103 => 10,  97 => 9,  92 => 6,  83 => 5,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}

{% block body %}

<div class=\"container-fluid\">
    <div class=\"row justify-content-center retour-categories text-green\">
        <p>retour -> <a href=\"{{ path('admin_session_index') }}\">{{ 'les Sessions' | upper }}</a>
          -> <a href=\"{{ path('admin_catalogue_index') }}\">{{ 'le Catalogue' | upper }}</a>
          -> <a href=\"{{ path('admin_actu_index') }}\">{{ 'les News' | upper }}</a>
        </p>
    </div>
    <div class=\"row justify-content-center\">
        <h1>MES IMAGES</h1>
    </div>
    <div class=\"row justify-content-center ligne\">  
        {% for image in images %}
        
            <div class=\"rounded grey padding col-3\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12\"><img class=\"img-fluid col-12\" src=\"{{ asset('uploads/images/' ~ image.pathImage) }}\"></div>
                    <div class=\"col-12\">
                        <div class=\"text text-green\">ATTRIBUTS : </div>
                        <div class=\"text\">Description de l'image / Référencement : <br/><span class=\"text-green\">{{ image.alt }}</span></div>
                        <div class=\"text\">Crédit Photo : <br/><span class=\"text-green\">{{ image.creditPhoto }}</span></div>
                    </div>
                    <div class=\"col-12\">
                        <ul>
                            <li>
                                <a href=\"{{ path('admin_image_edit', { 'id': image.id }) }}\">
                                <button type=\"submit\" class=\"btn btn-small bouton\">Modifier les attibuts</button>
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('admin_image_edit_image', { 'id': image.id }) }}\">
                                <button type=\"submit\" class=\"btn btn-danger bouton\">Modifier l'Image</button>   
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>  
            </div> 
        
        {% endfor %}
        </div>
</div>

{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "image/index.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/image/index.html.twig");
    }
}
