<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_5d80cb63d4f780e58a73c9121e0924bbca37b9b094a764b6fcecce8ddf04e229 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "

<div class=\"container-fluid identifiant\">
    <div class=\"row justify-content-center\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg- col-xl-3 \" style=\"padding:20px\">

";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register"]]);
        echo "

    
    <div class=\"form\">
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "username", []), 'label', ["label" => "Nom d'utilisateur"]);
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "username", []), 'errors');
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "username", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"form\">
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "email", []), 'label', ["label" => "Email"]);
        echo "
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "email", []), 'errors');
        echo "
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"form\">
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "plainPassword", []), "first", []), 'label', ["label" => "Choisissez le mot de passe"]);
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "plainPassword", []), "first", []), 'errors');
        echo "
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"form\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "plainPassword", []), "second", []), 'label', ["label" => "Confirmer le mot de passe"]);
        echo "
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "plainPassword", []), "second", []), 'errors');
        echo "
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>

    
    <div class=\"row justify-content-center\">
        <div class=\"identifiant\">
            <button type=\"submit\" class=\"btn btn-secondary btn-block\">Enregistrer</button>
        </div>
    </div>
";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
</div>
</div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 39,  97 => 30,  93 => 29,  89 => 28,  83 => 25,  79 => 24,  75 => 23,  69 => 20,  65 => 19,  61 => 18,  55 => 15,  51 => 14,  47 => 13,  40 => 9,  32 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% trans_default_domain 'FOSUserBundle' %}


<div class=\"container-fluid identifiant\">
    <div class=\"row justify-content-center\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg- col-xl-3 \" style=\"padding:20px\">

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

    
    <div class=\"form\">
    {{ form_label(form.username, 'Nom d\\'utilisateur' ) }}
    {{ form_errors(form.username) }}
    {{ form_widget(form.username, {'attr': {'class':'form-control'}}) }}
    </div>
    <div class=\"form\">
    {{ form_label(form.email, 'Email') }}
    {{ form_errors(form.email) }}
    {{ form_widget(form.email, {'attr': {'class':'form-control'}}) }}
    </div>
    <div class=\"form\">
    {{ form_label(form.plainPassword.first, 'Choisissez le mot de passe') }}
    {{ form_errors(form.plainPassword.first) }}
    {{ form_widget(form.plainPassword.first, {'attr': {'class':'form-control'}}) }}
    </div>
    <div class=\"form\">
    {{ form_label(form.plainPassword.second, 'Confirmer le mot de passe' ) }}
    {{ form_errors(form.plainPassword.second) }}
    {{ form_widget(form.plainPassword.second, {'attr': {'class':'form-control'}}) }}
    </div>

    
    <div class=\"row justify-content-center\">
        <div class=\"identifiant\">
            <button type=\"submit\" class=\"btn btn-secondary btn-block\">Enregistrer</button>
        </div>
    </div>
{{ form_end(form) }}
</div>
</div>
</div>

", "@FOSUser/Registration/register_content.html.twig", "/Users/bordza/Sites/bordza/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
