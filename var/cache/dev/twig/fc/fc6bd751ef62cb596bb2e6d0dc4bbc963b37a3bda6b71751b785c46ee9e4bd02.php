<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_922a0caaea44b6ac73690e4bdad7d388a0cbde8de59167f998a4d62df0b492e9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'subject' => [$this, 'block_subject'],
            'body_text' => [$this, 'block_body_text'],
            'body_html' => [$this, 'block_body_html'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns:v=\"urn:schemas-microsoft-com:vml\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0;\">
</head>

";
        // line 10
        $this->displayBlock('subject', $context, $blocks);
        // line 15
        $this->displayBlock('body_text', $context, $blocks);
        // line 23
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_subject($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.email.subject", ["%username%" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->source); })()), "username", [])], "FOSUserBundle");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body_text($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.email.message", ["%username%" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 17, $this->source); })()), "username", []), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 17, $this->source); })())], "FOSUserBundle");
        echo "
";
        // line 19
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_body_html($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        // line 24
        echo "<body leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" bgcolor=\"grey\">
        <table bgcolor=\"black\" width=\"100%\" border=\"0\" cellpadding=\"10px\" cellspacing=\"0\">
                <tbody>
                        <tr>
                                <td height=\"30\" style=\"font-size:30px; line-height:30px\" >
                                        &nbsp;
                                </td>
                        </tr>
                        <tr>
                                <td style=\"font-size:1.8em; line-height:45px\" >
                                        <div style=\"color:white\">
                                                <div style=\"width:100%;text-align:center;justify-content:center;margin-bottom:20px\">
                                                        <div>
                                                                <p><b>Bonjour ";
        // line 37
        echo twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 37, $this->source); })()), "username", []));
        echo " !</b></p>
                                                                <p style=\"font-size:0.8em\"><b>Modifiez votre mot de passe.</b></p>
                                                        </div>
                                                </div>
                                        </div>
                                </td>
                        </tr>
                </tbody>
        </table>
        
        <table bgcolor=\"white\" width=\"100%\" border=\"0\" cellpadding=\"10px\" cellspacing=\"0\">
            <tbody>
                <tr>
                    <td height=\"30\" style=\"font-size:30px; line-height:30px\" >
                            &nbsp;
                    </td>
                </tr>
                <tr>
                    <td style=\"font-size:1em; line-height:30px\">
                        <div style=\"color:black\">
                                <div style=\"width:100%;justify-content:center;margin-bottom:20px\">
                                        <div>
                                            
                                                <p>Bonjour ";
        // line 60
        echo twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 60, $this->source); })()), "username", []));
        echo ".</p>
                                                <p>Pour réinitialiser votre mot de passe, veuillez cliquer sur ce lien :</p>
        
                                                <a style=\"color:black;font-weight:bolder;font-size:1.3em;\"href=\"";
        // line 63
        echo (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 63, $this->source); })());
        echo "\">-> Changer mon mot de passe</a>
                                                <p>Cordialement.</p>
                                                <p>L'équipe Bordza.</p>
                                        </div>
                                </div>
                        </div>
                        
                    </td>
                </tr>
            </tbody>
        </table>
            
            
           
            
        
    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  157 => 63,  151 => 60,  125 => 37,  110 => 24,  101 => 23,  88 => 19,  84 => 17,  75 => 15,  65 => 12,  56 => 10,  46 => 23,  44 => 15,  42 => 10,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns:v=\"urn:schemas-microsoft-com:vml\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0;\">
</head>

{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}



{% endblock %}
{% block body_html %}
<body leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" bgcolor=\"grey\">
        <table bgcolor=\"black\" width=\"100%\" border=\"0\" cellpadding=\"10px\" cellspacing=\"0\">
                <tbody>
                        <tr>
                                <td height=\"30\" style=\"font-size:30px; line-height:30px\" >
                                        &nbsp;
                                </td>
                        </tr>
                        <tr>
                                <td style=\"font-size:1.8em; line-height:45px\" >
                                        <div style=\"color:white\">
                                                <div style=\"width:100%;text-align:center;justify-content:center;margin-bottom:20px\">
                                                        <div>
                                                                <p><b>Bonjour {{ user.username | capitalize }} !</b></p>
                                                                <p style=\"font-size:0.8em\"><b>Modifiez votre mot de passe.</b></p>
                                                        </div>
                                                </div>
                                        </div>
                                </td>
                        </tr>
                </tbody>
        </table>
        
        <table bgcolor=\"white\" width=\"100%\" border=\"0\" cellpadding=\"10px\" cellspacing=\"0\">
            <tbody>
                <tr>
                    <td height=\"30\" style=\"font-size:30px; line-height:30px\" >
                            &nbsp;
                    </td>
                </tr>
                <tr>
                    <td style=\"font-size:1em; line-height:30px\">
                        <div style=\"color:black\">
                                <div style=\"width:100%;justify-content:center;margin-bottom:20px\">
                                        <div>
                                            
                                                <p>Bonjour {{ user.username | capitalize }}.</p>
                                                <p>Pour réinitialiser votre mot de passe, veuillez cliquer sur ce lien :</p>
        
                                                <a style=\"color:black;font-weight:bolder;font-size:1.3em;\"href=\"{{ confirmationUrl }}\">-> Changer mon mot de passe</a>
                                                <p>Cordialement.</p>
                                                <p>L'équipe Bordza.</p>
                                        </div>
                                </div>
                        </div>
                        
                    </td>
                </tr>
            </tbody>
        </table>
            
            
           
            
        
    </body>
</html>
{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "/Users/bordza/Sites/bordza/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
