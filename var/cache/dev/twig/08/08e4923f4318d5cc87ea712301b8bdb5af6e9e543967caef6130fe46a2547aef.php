<?php

/* modifier_inscription_visiteur_mail.email.twig */
class __TwigTemplate_15e39503b019853e32b6e5c127a271b15a9c82a0defb6bf3a8e97114e50d0c14 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modifier_inscription_visiteur_mail.email.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modifier_inscription_visiteur_mail.email.twig"));

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
                                                                <p><b>Bonjour ";
        // line 22
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 22, $this->source); })()), "userId", []), "username", [])), "html", null, true);
        echo " !</b></p>
                                                                <p style=\"font-size:0.8em\"><b>Votre inscription a été 
                                                                ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 24, $this->source); })()), "valide", [])) {
            echo "Validée.
                                                                ";
        } else {
            // line 25
            echo "modifiée
                                                                ";
        }
        // line 26
        echo "</b></p>
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
                                            <p>Votre inscription pour <b>";
        // line 47
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 47, $this->source); })()), "prenom", [])), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 47, $this->source); })()), "nom", [])), "html", null, true);
        echo "</b>
                                                    a bien été 
                                                    ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 49, $this->source); })()), "valide", [])) {
            echo "validée.
                                                    ";
        } else {
            // line 50
            echo "modifiée
                                                    ";
        }
        // line 52
        echo "                                                    </p>
                                            
                                                <p>Détails : </p>

                                                <p>AGE : ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 56, $this->source); })()), "age", []), "html", null, true);
        echo "</br>
                                                TEL : ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 57, $this->source); })()), "tel", []), "html", null, true);
        echo "</br>
                                                ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 58, $this->source); })()), "sessionId", []), "formules", []), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 58, $this->source); })()), "sessionId", []), "disciplines", []), "html", null, true);
        echo "</br>
                                                Pour la session : \"";
        // line 59
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 59, $this->source); })()), "sessionId", []), "titreSession", [])), "html", null, true);
        echo "\"</br>
                                                ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 60, $this->source); })()), "sessionId", []), "dateSession", []), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 60, $this->source); })()), "sessionId", []), "prix", []), "html", null, true);
        echo "</br>
                                                ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 61, $this->source); })()), "forfait1h", [])) {
            echo " / FORFAIT : 1H";
        }
        // line 62
        echo "                                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 62, $this->source); })()), "forfait5h", [])) {
            echo " / FORFAIT : 5H";
        }
        // line 63
        echo "                                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 63, $this->source); })()), "forfait10h", [])) {
            echo " / FORFAIT : 10H";
        }
        // line 64
        echo "                                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 64, $this->source); })()), "forfaitAnnuel", [])) {
            echo " / FORFAIT : annuel";
        }
        // line 65
        echo "                                            
                                                <br/>Prêt de matériel : 
                                                ";
        // line 67
        if (((twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 67, $this->source); })()), "planche", []) != true) && (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 67, $this->source); })()), "materiel", []) != true))) {
            // line 68
            echo "                                                NON
                                                ";
        }
        // line 70
        echo "                                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 70, $this->source); })()), "planche", []) || twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 70, $this->source); })()), "materiel", []))) {
            // line 71
            echo "                                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 71, $this->source); })()), "planche", [])) {
                // line 72
                echo "                                                        / PLANCHE 
                                                    ";
            }
            // line 74
            echo "                                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 74, $this->source); })()), "materiel", [])) {
                // line 75
                echo "                                                       / PROTECTIONS 
                                                    ";
            }
            // line 77
            echo "                                                ";
        }
        // line 78
        echo "                                                </p>
                                            <p>
                                            ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 80, $this->source); })()), "valide", [])) {
            echo "Votre inscription est validée par l'organisateur.
                                            Si vous souhaiter la modifier merci d'envoyer un mail à 
                                            <a style=\"color:black\" href=\"mailto:contact@bordza.fr\">contact@bordza.fr</a>
                                            ";
        }
        // line 84
        echo "                                            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 84, $this->source); })()), "valide", []) != true)) {
            echo "Votre inscription est en attente de validation par l'organisateur.
                                            Vous pouvez la modifier sur votre page profil jusqu'à ce qu'elle soit validée.
                                            Une fois validée, pour modifier votre inscription veuillez envoyer un mail à 
                                            <a style=\"color:black\" href=\"mailto:contact@bordza.fr\">contact@bordza.fr</a>
                                            ";
        }
        // line 89
        echo "                                            </p>
                                            <p>Email envoyé le : ";
        // line 90
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y H:i"), "html", null, true);
        echo ".</p>
                                            <p style=\"text-align:center\">L'équipe Bordza</p>
                                        </div>
                                </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
            
            
           
            
        
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modifier_inscription_visiteur_mail.email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 90,  204 => 89,  195 => 84,  188 => 80,  184 => 78,  181 => 77,  177 => 75,  174 => 74,  170 => 72,  167 => 71,  164 => 70,  160 => 68,  158 => 67,  154 => 65,  149 => 64,  144 => 63,  139 => 62,  135 => 61,  129 => 60,  125 => 59,  119 => 58,  115 => 57,  111 => 56,  105 => 52,  101 => 50,  96 => 49,  89 => 47,  66 => 26,  62 => 25,  57 => 24,  52 => 22,  29 => 1,);
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
                                                                <p><b>Bonjour {{ inscription.userId.username | capitalize }} !</b></p>
                                                                <p style=\"font-size:0.8em\"><b>Votre inscription a été 
                                                                {% if inscription.valide %}Validée.
                                                                {% else %}modifiée
                                                                {%  endif %}</b></p>
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
                                            <p>Votre inscription pour <b>{{ inscription.prenom | title }} {{ inscription.nom | upper }}</b>
                                                    a bien été 
                                                    {% if inscription.valide %}validée.
                                                    {% else %}modifiée
                                                    {%  endif %}
                                                    </p>
                                            
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
                                            <p>
                                            {% if inscription.valide %}Votre inscription est validée par l'organisateur.
                                            Si vous souhaiter la modifier merci d'envoyer un mail à 
                                            <a style=\"color:black\" href=\"mailto:contact@bordza.fr\">contact@bordza.fr</a>
                                            {% endif %}
                                            {% if inscription.valide != true %}Votre inscription est en attente de validation par l'organisateur.
                                            Vous pouvez la modifier sur votre page profil jusqu'à ce qu'elle soit validée.
                                            Une fois validée, pour modifier votre inscription veuillez envoyer un mail à 
                                            <a style=\"color:black\" href=\"mailto:contact@bordza.fr\">contact@bordza.fr</a>
                                            {% endif %}
                                            </p>
                                            <p>Email envoyé le : {{ \"now\" | date(\"d-m-Y H:i\") }}.</p>
                                            <p style=\"text-align:center\">L'équipe Bordza</p>
                                        </div>
                                </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
            
            
           
            
        
    </body>
</html>", "modifier_inscription_visiteur_mail.email.twig", "/Users/bordza/Sites/bordza/app/Resources/views/modifier_inscription_visiteur_mail.email.twig");
    }
}
