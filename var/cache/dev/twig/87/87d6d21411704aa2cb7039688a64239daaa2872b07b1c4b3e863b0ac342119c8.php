<?php

/* modifier_inscription_mail.email.twig */
class __TwigTemplate_d4ac76c3e6cd6b086c00a227cdbe7b57bfcc86312e9189aa7e80fd1744a753d7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modifier_inscription_mail.email.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modifier_inscription_mail.email.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns:v=\"urn:schemas-microsoft-com:vml\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0;\">
</head>

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
                                                                <p><b>Bonjour Bordza !</b></p>
                                                                <p style=\"font-size:0.8em\">
                                                                    <b>L'inscription de 
                                                                    ";
        // line 25
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 25, $this->source); })()), "userId", []), "username", [])), "html", null, true);
        echo ", 
                                                                    pour ";
        // line 26
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 26, $this->source); })()), "prenom", [])), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 26, $this->source); })()), "nom", [])), "html", null, true);
        echo " 
                                                                    a été modifiée.</b>
                                                                </p>
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
                                            
                                                <p>Détails : </p>

                                                <p>AGE : ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 52, $this->source); })()), "age", []), "html", null, true);
        echo "</br>
                                                TEL : ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 53, $this->source); })()), "tel", []), "html", null, true);
        echo "</br>
                                                ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 54, $this->source); })()), "sessionId", []), "formules", []), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 54, $this->source); })()), "sessionId", []), "disciplines", []), "html", null, true);
        echo "</br>
                                                Pour la session : \"";
        // line 55
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 55, $this->source); })()), "sessionId", []), "titreSession", [])), "html", null, true);
        echo "\"</br>
                                                ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 56, $this->source); })()), "sessionId", []), "dateSession", []), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 56, $this->source); })()), "sessionId", []), "prix", []), "html", null, true);
        echo "</br>
                                                ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 57, $this->source); })()), "forfait1h", [])) {
            echo " / FORFAIT : 1H";
        }
        // line 58
        echo "                                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 58, $this->source); })()), "forfait5h", [])) {
            echo " / FORFAIT : 5H";
        }
        // line 59
        echo "                                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 59, $this->source); })()), "forfait10h", [])) {
            echo " / FORFAIT : 10H";
        }
        // line 60
        echo "                                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 60, $this->source); })()), "forfaitAnnuel", [])) {
            echo " / FORFAIT : annuel";
        }
        // line 61
        echo "                                            
                                                <br/>Prêt de matériel : 
                                                ";
        // line 63
        if (((twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 63, $this->source); })()), "planche", []) != true) && (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 63, $this->source); })()), "materiel", []) != true))) {
            // line 64
            echo "                                                NON
                                                ";
        }
        // line 66
        echo "                                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 66, $this->source); })()), "planche", []) || twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 66, $this->source); })()), "materiel", []))) {
            // line 67
            echo "                                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 67, $this->source); })()), "planche", [])) {
                // line 68
                echo "                                                        / PLANCHE 
                                                    ";
            }
            // line 70
            echo "                                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 70, $this->source); })()), "materiel", [])) {
                // line 71
                echo "                                                       / PROTECTIONS 
                                                    ";
            }
            // line 73
            echo "                                                ";
        }
        // line 74
        echo "                                                </p>
                                            
                                            <p>Inscription modifiée le : ";
        // line 76
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y H:i", "Europe/Paris"), "html", null, true);
        echo ".</p>
                                            
                                            <p>Répondre à : <a  href=\"mailto:";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 78, $this->source); })()), "userId", []), "email", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 78, $this->source); })()), "userId", []), "email", []), "html", null, true);
        echo "</p>
                                            <p><a href=\"https://www.bordza.fr\" style=\"color:black;font-weight:bolder\">Aller voir vos inscriptions</a></p>
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modifier_inscription_mail.email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 78,  167 => 76,  163 => 74,  160 => 73,  156 => 71,  153 => 70,  149 => 68,  146 => 67,  143 => 66,  139 => 64,  137 => 63,  133 => 61,  128 => 60,  123 => 59,  118 => 58,  114 => 57,  108 => 56,  104 => 55,  98 => 54,  94 => 53,  90 => 52,  59 => 26,  55 => 25,  29 => 1,);
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
                                                                <p><b>Bonjour Bordza !</b></p>
                                                                <p style=\"font-size:0.8em\">
                                                                    <b>L'inscription de 
                                                                    {{ inscription.userId.username | title }}, 
                                                                    pour {{ inscription.prenom | title }} {{ inscription.nom | upper }} 
                                                                    a été modifiée.</b>
                                                                </p>
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
                                            
                                                <p>Détails : </p>

                                                <p>AGE : {{ inscription.age }}</br>
                                                TEL : {{ inscription.tel }}</br>
                                                {{ inscription.sessionId.formules }} / {{ inscription.sessionId.disciplines }}</br>
                                                Pour la session : \"{{ inscription.sessionId.titreSession | capitalize }}\"</br>
                                                {{ inscription.sessionId.dateSession }} / {{ inscription.sessionId.prix }}</br>
                                                {% if inscription.forfait1h %} / FORFAIT : 1H{% endif %}
                                                {% if inscription.forfait5h %} / FORFAIT : 5H{% endif %}
                                                {% if inscription.forfait10h %} / FORFAIT : 10H{% endif %}
                                                {% if inscription.forfaitAnnuel %} / FORFAIT : annuel{% endif %}
                                            
                                                <br/>Prêt de matériel : 
                                                {% if inscription.planche != true and  inscription.materiel != true %}
                                                NON
                                                {% endif %}
                                                {% if inscription.planche or inscription.materiel %}
                                                    {% if inscription.planche %}
                                                        / PLANCHE 
                                                    {% endif %}
                                                    {% if inscription.materiel %}
                                                       / PROTECTIONS 
                                                    {% endif %}
                                                {% endif %}
                                                </p>
                                            
                                            <p>Inscription modifiée le : {{ 'now' | date('d-m-Y H:i','Europe/Paris') }}.</p>
                                            
                                            <p>Répondre à : <a  href=\"mailto:{{ inscription.userId.email }}\">{{ inscription.userId.email }}</p>
                                            <p><a href=\"https://www.bordza.fr\" style=\"color:black;font-weight:bolder\">Aller voir vos inscriptions</a></p>
                                        </div>
                                </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
            
            
           
            
        
    </body>
</html>
", "modifier_inscription_mail.email.twig", "/Users/bordza/Sites/bordza/app/Resources/views/modifier_inscription_mail.email.twig");
    }
}
