<?php

/* video/index.html.twig */
class __TwigTemplate_9d9c9aa9b82dfe9adb1b001e488e4969d3ea499a9be203cb12fa363cd3626e0c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "video/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "video/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "video/index.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "video/index.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "video/index.html.twig", 3)->display($context);
        
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
    <div class=\"row justify-content-center bottom\">
        <h1>MES VIDÉOS</h1>
    </div>
    <div class=\"row justify-content-center bouton\">
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_video_new");
        echo "\">
                <img class=\"img-class\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/ajoute-rond.png"), "html", null, true);
        echo "\" style=\"margin-right:10px;\">
                <button class=\"btn btn-secondary btn-lg\" type=\"button\">Ajouter une nouvelle Vidéo</button>
            </a>
    </div>  
    
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new Twig_Error_Runtime('Variable "videos" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 18
            echo "    <div class=\"row justify-content-center\"> 
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6 rounded grey padding top\">  
            <div class=\"row justify-content-center\">
                
                <div class=\"col-11 text-center bg-green\">";
            // line 22
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "titre", [])), "html", null, true);
            echo "</div>
                <div class=\"top iframe\">";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["video"], "iframe", []);
            echo "</div>
                <div class=\"col-12\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["video"], "contenu", []);
            echo "</div>
                <div class=\"col-12\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "auteur", []), "html", null, true);
            echo "</div>
                <div class=\"col-12\">";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["video"], "date", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "date", []), "d-m-Y"), "html", null, true);
            }
            echo "</div>
                <div class=\"col-12\">
                    <div class=\"row\">
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_video_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [])]), "html", null, true);
            echo "\">
                            <button class=\"btn btn-small btn-lg bouton\" type=\"submit\" value=\"Edit\">Modifier</button>
                        </a>
                        <form action=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_video_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [])]), "html", null, true);
            echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                            ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 34, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["video"], "id", []), [], "array"), 'widget');
            echo "
                            <button type=\"submit\" class=\"btn btn-small btn-lg bouton\">Supprimer</button>
                        </form> 
                    </div>
                </div>
           
            </div>
        </div>
    </div>                    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "video/index.html.twig", 45)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "video/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 45,  156 => 34,  151 => 32,  145 => 29,  137 => 26,  133 => 25,  129 => 24,  125 => 23,  121 => 22,  115 => 18,  111 => 17,  103 => 12,  99 => 11,  92 => 6,  83 => 5,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row justify-content-center bottom\">
        <h1>MES VIDÉOS</h1>
    </div>
    <div class=\"row justify-content-center bouton\">
            <a href=\"{{ path('admin_video_new') }}\">
                <img class=\"img-class\" src=\"{{ asset('assets/images/glyph/ajoute-rond.png') }}\" style=\"margin-right:10px;\">
                <button class=\"btn btn-secondary btn-lg\" type=\"button\">Ajouter une nouvelle Vidéo</button>
            </a>
    </div>  
    
        {% for video in videos %}
    <div class=\"row justify-content-center\"> 
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6 rounded grey padding top\">  
            <div class=\"row justify-content-center\">
                
                <div class=\"col-11 text-center bg-green\">{{ video.titre | upper }}</div>
                <div class=\"top iframe\">{{ video.iframe | raw }}</div>
                <div class=\"col-12\">{{ video.contenu | raw }}</div>
                <div class=\"col-12\">{{ video.auteur }}</div>
                <div class=\"col-12\">{% if video.date %}{{ video.date|date('d-m-Y') }}{% endif %}</div>
                <div class=\"col-12\">
                    <div class=\"row\">
                        <a href=\"{{ path('admin_video_edit', { 'id': video.id }) }}\">
                            <button class=\"btn btn-small btn-lg bouton\" type=\"submit\" value=\"Edit\">Modifier</button>
                        </a>
                        <form action=\"{{ path('admin_video_delete', { 'id': video.id }) }}\" method=\"post\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                            {{ form_widget(deleteForms[video.id]) }}
                            <button type=\"submit\" class=\"btn btn-small btn-lg bouton\">Supprimer</button>
                        </form> 
                    </div>
                </div>
           
            </div>
        </div>
    </div>                    
        {% endfor %}
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "video/index.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/video/index.html.twig");
    }
}
