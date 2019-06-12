<?php

/* image/edit.html.twig */
class __TwigTemplate_39e139bad5af65ef5a6ca8230bf5b58a1217d38a9f0059002ece26c3fcda2b5e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "image/edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "image/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "image/edit.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "image/edit.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "image/edit.html.twig", 3)->display($context);
        
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
        echo "<div class=\"container-fluid identifiant justify-content-center bottom\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <h2 class=\"top\">MODIFIER LES ATTRIBUTS DE L'IMAGE</h2>
            </div>
        </div>
        <div class=\"col-5 top\" style=\"padding:20px\">
            <div class=\"col-12\">
                <img class=\"img-fluid col-12\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 16, $this->source); })()), "pathImage", []))), "html", null, true);
        echo "\">
                <div class=\"w-100\"></div>
                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_edit_image", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 18, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">-> changer l'image : </a>
            </div>
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
                <div class=\"form top\">
                    <div class=\"\">
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 23, $this->source); })()), "alt", []), 'label', ["label" => "Decription de l'image / Référencement "]);
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 24, $this->source); })()), "alt", []), 'errors');
        echo "
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 25, $this->source); })()), "alt", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 30, $this->source); })()), "creditPhoto", []), 'label', ["label" => "Crédit Photo"]);
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 31, $this->source); })()), "creditPhoto", []), 'errors');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 32, $this->source); })()), "creditPhoto", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"form bouton\">
                    <div class=\"row justify-content-center\">
                        <button class=\"btn btn-secondary bouton\"type=\"submit\" value=\"Edit\">Enregistrer les modifications</button>
                        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
                    </div>
                    <div class=\"row justify-content-center\">
                        ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 41, $this->source); })()), 'form_start');
        echo "
                            <button class=\"btn btn-danger bouton\" type=\"submit\" value=\"Delete\">Supprimer</button>
                        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
                    </div>
                    <div class=\"row justify-content-center text\">
                        <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_index");
        echo "\"><- Revenir à la liste d'images</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
        
        
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "image/edit.html.twig", 58)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "image/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 58,  170 => 46,  164 => 43,  159 => 41,  153 => 38,  144 => 32,  140 => 31,  136 => 30,  128 => 25,  124 => 24,  120 => 23,  114 => 20,  109 => 18,  104 => 16,  92 => 6,  83 => 5,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}

{% block body %}
<div class=\"container-fluid identifiant justify-content-center bottom\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <h2 class=\"top\">MODIFIER LES ATTRIBUTS DE L'IMAGE</h2>
            </div>
        </div>
        <div class=\"col-5 top\" style=\"padding:20px\">
            <div class=\"col-12\">
                <img class=\"img-fluid col-12\" src=\"{{ asset('uploads/images/' ~ image.pathImage )}}\">
                <div class=\"w-100\"></div>
                <a href=\"{{ path('admin_image_edit_image', { 'id': image.id })}}\">-> changer l'image : </a>
            </div>
            {{ form_start(edit_form) }}
                <div class=\"form top\">
                    <div class=\"\">
                        {{ form_label(edit_form.alt, 'Decription de l\\'image / Référencement ') }}
                        {{ form_errors(edit_form.alt) }}
                        {{ form_widget(edit_form.alt, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(edit_form.creditPhoto, 'Crédit Photo') }}
                        {{ form_errors(edit_form.creditPhoto) }}
                        {{ form_widget(edit_form.creditPhoto, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form bouton\">
                    <div class=\"row justify-content-center\">
                        <button class=\"btn btn-secondary bouton\"type=\"submit\" value=\"Edit\">Enregistrer les modifications</button>
                        {{ form_end(edit_form) }}
                    </div>
                    <div class=\"row justify-content-center\">
                        {{ form_start(delete_form) }}
                            <button class=\"btn btn-danger bouton\" type=\"submit\" value=\"Delete\">Supprimer</button>
                        {{ form_end(delete_form) }}
                    </div>
                    <div class=\"row justify-content-center text\">
                        <a href=\"{{ path('admin_image_index') }}\"><- Revenir à la liste d'images</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
        
        
    
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "image/edit.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/image/edit.html.twig");
    }
}
