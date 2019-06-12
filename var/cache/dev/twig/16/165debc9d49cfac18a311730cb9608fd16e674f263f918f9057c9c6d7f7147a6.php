<?php

/* actu/show.html.twig */
class __TwigTemplate_c27a3bf3a2de4b37db90228846661e7221cb6ea4ff802785a8d8db6a60283e05 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actu/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actu/show.html.twig"));

        // line 1
        $this->loadTemplate("nav.html.twig", "actu/show.html.twig", 1)->display($context);
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
    <div class=\"row justify-content-center ligne\">        
        <div><h3>";
        // line 9
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actu"]) || array_key_exists("actu", $context) ? $context["actu"] : (function () { throw new Twig_Error_Runtime('Variable "actu" does not exist.', 9, $this->source); })()), "titre", [])), "html", null, true);
        echo "</h3></div>
        <div class=\"w-100\"></div>
        <div class=\"col-4\"><img class=\"img-fluid\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["actu"]) || array_key_exists("actu", $context) ? $context["actu"] : (function () { throw new Twig_Error_Runtime('Variable "actu" does not exist.', 11, $this->source); })()), "imageId", []))), "html", null, true);
        echo "\"></div>
        <div class=\"w-100\"></div>
        <div>";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["actu"]) || array_key_exists("actu", $context) ? $context["actu"] : (function () { throw new Twig_Error_Runtime('Variable "actu" does not exist.', 13, $this->source); })()), "date", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actu"]) || array_key_exists("actu", $context) ? $context["actu"] : (function () { throw new Twig_Error_Runtime('Variable "actu" does not exist.', 13, $this->source); })()), "date", []), "d-m-Y"), "html", null, true);
        }
        echo "</div>
        <div class=\"w-100\"></div>
        <div class=\"col-3\">
            <div class=\"article\">Contenu de l'article : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actu"]) || array_key_exists("actu", $context) ? $context["actu"] : (function () { throw new Twig_Error_Runtime('Variable "actu" does not exist.', 16, $this->source); })()), "contenu", []), "html", null, true);
        echo "</div>
            <div class=\"w-100\"></div>
            <div class=\"article\">Résumé de l'article : ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actu"]) || array_key_exists("actu", $context) ? $context["actu"] : (function () { throw new Twig_Error_Runtime('Variable "actu" does not exist.', 18, $this->source); })()), "resume", []), "html", null, true);
        echo "</div>    
        </div>
    </div>
        
    <div class=\"row justify-content-center\">
        <div class=\"bouton\">
            <button type=\"submit\" class=\"btn btn-small\">
                <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_actu_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["actu"]) || array_key_exists("actu", $context) ? $context["actu"] : (function () { throw new Twig_Error_Runtime('Variable "actu" does not exist.', 25, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">Modifier</a>
                    </button>
        </div>
        <div class=\"bouton\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
                <button class=\"btn btn-small\" type=\"submit\">Supprimer</button>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"w-100\"></div>

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_actu_index");
        echo "\"><- Revenir aux News</a>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "actu/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 37,  105 => 31,  100 => 29,  93 => 25,  83 => 18,  78 => 16,  70 => 13,  65 => 11,  60 => 9,  53 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'nav.html.twig' %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <h1>DÉTAIL</h1>
    </div>
    <div class=\"row justify-content-center ligne\">        
        <div><h3>{{ actu.titre | upper }}</h3></div>
        <div class=\"w-100\"></div>
        <div class=\"col-4\"><img class=\"img-fluid\" src=\"{{ asset('uploads/images/' ~ actu.imageId) }}\"></div>
        <div class=\"w-100\"></div>
        <div>{% if actu.date %}{{ actu.date|date('d-m-Y') }}{% endif %}</div>
        <div class=\"w-100\"></div>
        <div class=\"col-3\">
            <div class=\"article\">Contenu de l'article : {{ actu.contenu }}</div>
            <div class=\"w-100\"></div>
            <div class=\"article\">Résumé de l'article : {{ actu.resume }}</div>    
        </div>
    </div>
        
    <div class=\"row justify-content-center\">
        <div class=\"bouton\">
            <button type=\"submit\" class=\"btn btn-small\">
                <a href=\"{{ path('admin_actu_edit', { 'id': actu.id }) }}\">Modifier</a>
                    </button>
        </div>
        <div class=\"bouton\">
            {{ form_start(delete_form) }}
                <button class=\"btn btn-small\" type=\"submit\">Supprimer</button>
            {{ form_end(delete_form) }}
        </div>
    </div>
    <div class=\"w-100\"></div>

    <div class=\"row justify-content-center\">
        <a href=\"{{ path('admin_actu_index') }}\"><- Revenir aux News</a>
    </div>
</div>
{% endblock %}
", "actu/show.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/actu/show.html.twig");
    }
}
