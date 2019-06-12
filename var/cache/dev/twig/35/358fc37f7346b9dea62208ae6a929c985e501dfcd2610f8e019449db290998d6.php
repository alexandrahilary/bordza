<?php

/* image/new.html.twig */
class __TwigTemplate_51bfee8efc9a56787cc5e3c5bdef44d868659cc5aedc7486ae8454056c657894 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "image/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "image/new.html.twig"));

        // line 1
        $this->loadTemplate("nav.html.twig", "image/new.html.twig", 1)->display($context);
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
        echo "<div class=\"container-fluid identifiant justify-content-center\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <h1>Nouvelle Image</h1>
            </div>
        </div>
        <div class=\"col-5 border border-dark\" style=\"padding:20px\">
            
    
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["method" => "post", "enctype" => "multipart/form-data", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_new")]);
        echo "

        <!-- alt -->
                <div class=\"form\">
                    <div class=\"input-group \">
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "alt", []), 'label', ["label_attr" => ["class" => "input-group-text bg-dark text-light"]]);
        echo "
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "alt", []), 'errors');
        echo "
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "alt", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

        <!-- credit photo -->
                <div class=\"form\">
                    <div class=\"input-group \">
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "creditPhoto", []), 'label', ["label_attr" => ["class" => "input-group-text bg-dark text-light"]]);
        echo "
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "creditPhoto", []), 'errors');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "creditPhoto", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

        <!-- pathimage -->
        <div class=\"form\">
            <div class=\"input-group \">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "pathimage", []), 'label', ["label_attr" => ["class" => "custom-file-label "], "label" => "Choisir une image"]);
        echo "
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "pathimage", []), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "pathimage", []), 'widget', ["attr" => ["class" => ""]]);
        echo "
            </div>
        </div>

        <!-- boutton -->
        <div class=\"form bouton\">
            <div class=\"row justify-content-center\">
                <button type=\"submit\" class=\"btn btn-dark\">Créer nouvelle Image</button>
            </div>
        </div>
    ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
        
    </div>
    <ul>
        <li>
            <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "image/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 55,  131 => 50,  118 => 40,  114 => 39,  110 => 38,  100 => 31,  96 => 30,  92 => 29,  82 => 22,  78 => 21,  74 => 20,  66 => 15,  53 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'nav.html.twig' %}

{% block body %}
<div class=\"container-fluid identifiant justify-content-center\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <h1>Nouvelle Image</h1>
            </div>
        </div>
        <div class=\"col-5 border border-dark\" style=\"padding:20px\">
            
    
        {{ form_start(form, {'method': 'post', 'enctype' : 'multipart/form-data', 'action': path('admin_image_new') }) }}

        <!-- alt -->
                <div class=\"form\">
                    <div class=\"input-group \">
                        {{ form_label(form.alt, '', {'label_attr' : {'class' : 'input-group-text bg-dark text-light'}} ) }}
                        {{ form_errors(form.alt) }}
                        {{ form_widget(form.alt, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

        <!-- credit photo -->
                <div class=\"form\">
                    <div class=\"input-group \">
                        {{ form_label(form.creditPhoto, '', {'label_attr' : {'class' : 'input-group-text bg-dark text-light'}} ) }}
                        {{ form_errors(form.creditPhoto) }}
                        {{ form_widget(form.creditPhoto, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

        <!-- pathimage -->
        <div class=\"form\">
            <div class=\"input-group \">
                {{ form_label(form.pathimage, 'Choisir une image', {'label_attr' : {'class' : 'custom-file-label '}} ) }}
                {{ form_errors(form.pathimage) }}
                {{ form_widget(form.pathimage, {'attr': {'class':''}}) }}
            </div>
        </div>

        <!-- boutton -->
        <div class=\"form bouton\">
            <div class=\"row justify-content-center\">
                <button type=\"submit\" class=\"btn btn-dark\">Créer nouvelle Image</button>
            </div>
        </div>
    {{ form_end(form) }}
        
    </div>
    <ul>
        <li>
            <a href=\"{{ path('admin_image_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "image/new.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/image/new.html.twig");
    }
}
