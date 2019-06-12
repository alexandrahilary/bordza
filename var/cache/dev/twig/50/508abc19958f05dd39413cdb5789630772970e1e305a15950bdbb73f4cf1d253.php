<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_eef426dd92a70d441e51ba728c4c7088edfbd8a70418091de3dd7ea31127926d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "<div class=\"container-fluid identifiant\">
    <div class=\"row justify-content-center\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 \" style=\"padding:20px\">
            ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password"), "attr" => ["class" => "fos_user_change_password"]]);
        echo "
            <!-- mot de passe actuel -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "current_password", []), 'label', ["label_attr" => ["class" => ""], "label" => "Mot de passe actuel : "]);
        echo "
                        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "current_password", []), 'errors');
        echo "
                        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "current_password", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
            
            <!-- nouveau mot de passe -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "plainPassword", []), "first", []), 'label', ["label_attr" => ["class" => ""], "label" => "Nouveau mot de passe : "]);
        echo "
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "plainPassword", []), "first", []), 'errors');
        echo "
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
            <!-- confirme mot de passe -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "plainPassword", []), "second", []), 'label', ["label_attr" => ["class" => ""], "label" => "Confirmer le nouveau mot de passe : "]);
        echo "
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "plainPassword", []), "second", []), 'errors');
        echo "
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
            <div class=\"row justify-content-center\">        
                <div class=\"form top\">
                    <button type=\"submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("change_password.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-light bouton\">Modifier le mot de passe</button>
                </div>
            </div>
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
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
        return "@FOSUser/ChangePassword/change_password_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  92 => 33,  84 => 28,  80 => 27,  76 => 26,  67 => 20,  63 => 19,  59 => 18,  49 => 11,  45 => 10,  41 => 9,  34 => 5,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"container-fluid identifiant\">
    <div class=\"row justify-content-center\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 \" style=\"padding:20px\">
            {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
            <!-- mot de passe actuel -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.current_password, 'Mot de passe actuel : ',{'label_attr' : {'class' : ''}}) }}
                        {{ form_errors(form.current_password) }}
                        {{ form_widget(form.current_password, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>
            
            <!-- nouveau mot de passe -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.plainPassword.first, 'Nouveau mot de passe : ',{'label_attr' : {'class' : ''}}) }}
                        {{ form_errors(form.plainPassword.first) }}
                        {{ form_widget(form.plainPassword.first, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>
            <!-- confirme mot de passe -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.plainPassword.second, 'Confirmer le nouveau mot de passe : ',{'label_attr' : {'class' : ''}}) }}
                        {{ form_errors(form.plainPassword.second) }}
                        {{ form_widget(form.plainPassword.second, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>
            <div class=\"row justify-content-center\">        
                <div class=\"form top\">
                    <button type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" class=\"btn btn-light bouton\">Modifier le mot de passe</button>
                </div>
            </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>
", "@FOSUser/ChangePassword/change_password_content.html.twig", "/Users/bordza/Sites/bordza/app/Resources/FOSUserBundle/views/ChangePassword/change_password_content.html.twig");
    }
}
