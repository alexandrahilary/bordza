<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_98464d083078c3864a2be450c9ed4166628b231a606d22bb9544e4b21d157387 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "<div class=\"container-fluid identifiant\">
    <div class=\"row justify-content-center\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 border border-dark border\" style=\"padding:20px\">
            ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit"), "attr" => ["class" => "fos_user_profile_edit"]]);
        echo "
            <div class=\"form\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "email", []), 'label', ["label_attr" => ["class" => ""], "label" => "Email"]);
        echo "
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), "email", []), 'errors');
        echo "
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "username", []), 'label', ["label_attr" => ["class" => ""], "label" => "Nom d'utilisateur"]);
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "username", []), 'errors');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "username", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "current_password", []), 'label', ["label_attr" => ["class" => ""], "label" => "Mot de passe"]);
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "current_password", []), 'errors');
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "current_password", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
                <button type=\"submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-dark bouton\">Enregistrer les modifications</button>
            </div>
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
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
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  80 => 21,  75 => 19,  71 => 18,  67 => 17,  61 => 14,  57 => 13,  53 => 12,  47 => 9,  43 => 8,  39 => 7,  34 => 5,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"container-fluid identifiant\">
    <div class=\"row justify-content-center\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 border border-dark border\" style=\"padding:20px\">
            {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
            <div class=\"form\">
            {{ form_label(form.email, 'Email',{'label_attr' : {'class' : ''}} ) }}
            {{ form_errors(form.email) }}
            {{ form_widget(form.email, {'attr': {'class':'form-control'}}) }}
            </div>
            <div class=\"form\">
            {{ form_label(form.username, 'Nom d\\'utilisateur' ,{'label_attr' : {'class' : ''}}) }}
            {{ form_errors(form.username) }}
            {{ form_widget(form.username, {'attr': {'class':'form-control'}}) }}
            </div>
            <div class=\"form\">
            {{ form_label(form.current_password, 'Mot de passe' ,{'label_attr' : {'class' : ''}}) }}
            {{ form_errors(form.current_password) }}
            {{ form_widget(form.current_password, {'attr': {'class':'form-control'}}) }}
            </div>
                <button type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" class=\"btn btn-dark bouton\">Enregistrer les modifications</button>
            </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>
", "@FOSUser/Profile/edit_content.html.twig", "/Users/bordza/Sites/bordza/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
