<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_af5749988e2e2f6bfe2fd8262a3500a9beb095ebfd22bc8290df10742dcd6239 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    
<div class=\"container-fluid \">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-5 col-lg-5 col-md-9 col-sm-9 col-11 border-form identifiant\" >
            <form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                ";
        // line 10
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\" />
                ";
        }
        // line 13
        echo "                <div class=\"row justify-content-center\">
                <div class=\"form col-12\">
                        <label class=\"\" for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("identifiant")), "html", null, true);
        echo "</label>
                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
                    
                </div>
                <div class=\"w-100\"></div>
                <div class=\"form col-12\">
                        <label class=\"\" for=\"password\">";
        // line 21
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mot de passe")), "html", null, true);
        echo "</label>
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                    
                </div>
                <div class=\"w-100\"></div>
                    <div class=\"form col-12\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" style=\"width:20px;height:20px;\" />
                        <label for=\"remember_me\" style=\"margin-left:3%\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mémoriser le mot de passe"), "html", null, true);
        echo "</label>
                    </div>
                <div class=\"w-100\"></div>
                <div class=\"form\">
                        <button type=\"submit\" class=\"btn btn-block btn-secondary\">Connexion</button>
                    
                </div>
                </div>
            </form>
            
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-5 col-lg-5 col-md-9 col-sm-9 col-11 bottom\" >
            <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\" class=\"text-secondary\">-> Mot de passe oublié</a>
        </div>
    </div>
    <div class=\"row justify-content-center\" style=\"margin-bottom:2%\">
        <div class=\"col-xl-5 col-lg-5 col-md-9 col-sm-9 col-11\" >
            <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\"><button class=\"btn btn-block btn-secondary\">Créer mon compte</button></a>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 47,  114 => 42,  97 => 28,  87 => 21,  79 => 16,  75 => 15,  71 => 13,  65 => 11,  63 => 10,  59 => 9,  53 => 5,  44 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}


{% block fos_user_content %}
    
<div class=\"container-fluid \">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-5 col-lg-5 col-md-9 col-sm-9 col-11 border-form identifiant\" >
            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                {% if csrf_token %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                {% endif %}
                <div class=\"row justify-content-center\">
                <div class=\"form col-12\">
                        <label class=\"\" for=\"username\">{{ 'identifiant'|trans|capitalize }}</label>
                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
                    
                </div>
                <div class=\"w-100\"></div>
                <div class=\"form col-12\">
                        <label class=\"\" for=\"password\">{{ 'mot de passe'|trans|capitalize }}</label>
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                    
                </div>
                <div class=\"w-100\"></div>
                    <div class=\"form col-12\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" style=\"width:20px;height:20px;\" />
                        <label for=\"remember_me\" style=\"margin-left:3%\">{{ 'mémoriser le mot de passe'|trans}}</label>
                    </div>
                <div class=\"w-100\"></div>
                <div class=\"form\">
                        <button type=\"submit\" class=\"btn btn-block btn-secondary\">Connexion</button>
                    
                </div>
                </div>
            </form>
            
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-5 col-lg-5 col-md-9 col-sm-9 col-11 bottom\" >
            <a href=\"{{ path('fos_user_resetting_request')}}\" class=\"text-secondary\">-> Mot de passe oublié</a>
        </div>
    </div>
    <div class=\"row justify-content-center\" style=\"margin-bottom:2%\">
        <div class=\"col-xl-5 col-lg-5 col-md-9 col-sm-9 col-11\" >
            <a href=\"{{ path('fos_user_registration_register')}}\"><button class=\"btn btn-block btn-secondary\">Créer mon compte</button></a>
        </div>
    </div>
</div>
{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "/Users/bordza/Sites/bordza/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
