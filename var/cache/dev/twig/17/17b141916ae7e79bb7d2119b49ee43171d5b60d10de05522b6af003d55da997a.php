<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_c94580230582c656e49795d9c6f6e71f901f7431bf159c0bae0497da194e8026 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

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
        echo "<div class=\"container-fluid identifiant\" style=\"height:43vh;\">
    <div class=\"row justify-content-center\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3 \" style=\"padding:20px\">

<form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div class=\"form\">
        <label for=\"username\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.username", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div class=\"row justify-content-center bouton\">
        <div class=\"form bouton\">
            <button class=\"btn btn-secondary bouton\" type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\">Mot de passe oublié</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  62 => 10,  57 => 8,  51 => 4,  33 => 3,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% block body %}
<div class=\"container-fluid identifiant\" style=\"height:43vh;\">
    <div class=\"row justify-content-center\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3 \" style=\"padding:20px\">

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div class=\"form\">
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div class=\"row justify-content-center bouton\">
        <div class=\"form bouton\">
            <button class=\"btn btn-secondary bouton\" type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\">Mot de passe oublié</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
{% endblock %}
", "@FOSUser/Resetting/request_content.html.twig", "/Users/bordza/Sites/bordza/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
