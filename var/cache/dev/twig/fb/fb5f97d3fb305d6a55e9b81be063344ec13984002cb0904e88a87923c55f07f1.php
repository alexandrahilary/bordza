<?php

/* inscription_visiteur_mail.email.twig */
class __TwigTemplate_7baf4770a11f9efbe0a887b28266bf52859307b5ecb2d0bb1f699c2661b9ac1e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription_visiteur_mail.email.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription_visiteur_mail.email.twig"));

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
                                                                <p style=\"font-size:0.8em\"><b>Nouvelle inscription en ligne</b></p>
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
                                            <p>Une nouvelle inscription pour <b>";
        // line 44
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 44, $this->source); })()), "prenom", [])), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 44, $this->source); })()), "nom", [])), "html", null, true);
        echo "</b>
                                                    a bien été prise en compte.</p>
                                            
                                                <p>Détails : </p>

                                                <p>AGE : ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 49, $this->source); })()), "age", []), "html", null, true);
        echo "</br>
                                                TEL : ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 50, $this->source); })()), "tel", []), "html", null, true);
        echo "</br>
                                                ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 51, $this->source); })()), "sessionId", []), "formules", []), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 51, $this->source); })()), "sessionId", []), "disciplines", []), "html", null, true);
        echo "</br>
                                                Pour la session : \"";
        // line 52
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 52, $this->source); })()), "sessionId", []), "titreSession", [])), "html", null, true);
        echo "\"</br>
                                                ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 53, $this->source); })()), "sessionId", []), "dateSession", []), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 53, $this->source); })()), "sessionId", []), "prix", []), "html", null, true);
        echo "</br>
                                                ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 54, $this->source); })()), "forfait1h", [])) {
            echo " / FORFAIT : 1H";
        }
        // line 55
        echo "                                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 55, $this->source); })()), "forfait5h", [])) {
            echo " / FORFAIT : 5H";
        }
        // line 56
        echo "                                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 56, $this->source); })()), "forfait10h", [])) {
            echo " / FORFAIT : 10H";
        }
        // line 57
        echo "                                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 57, $this->source); })()), "forfaitAnnuel", [])) {
            echo " / FORFAIT : annuel";
        }
        // line 58
        echo "                                            
                                                <br/>Prêt de matériel : 
                                                ";
        // line 60
        if (((twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 60, $this->source); })()), "planche", []) != true) && (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 60, $this->source); })()), "materiel", []) != true))) {
            // line 61
            echo "                                                NON
                                                ";
        }
        // line 63
        echo "                                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 63, $this->source); })()), "planche", []) || twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 63, $this->source); })()), "materiel", []))) {
            // line 64
            echo "                                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 64, $this->source); })()), "planche", [])) {
                // line 65
                echo "                                                        / PLANCHE 
                                                    ";
            }
            // line 67
            echo "                                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 67, $this->source); })()), "materiel", [])) {
                // line 68
                echo "                                                       / PROTECTIONS 
                                                    ";
            }
            // line 70
            echo "                                                ";
        }
        // line 71
        echo "                                                </p>
                                            <p>
                                            ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 73, $this->source); })()), "valide", [])) {
            echo "Votre inscription est validée par l'organisateur.
                                            Si vous souhaiter la modifier merci d'envoyer un mail à 
                                            <a style=\"color:black\" href=\"mailto:contact@bordza.fr\">contact@bordza.fr</a>
                                            ";
        }
        // line 77
        echo "                                            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 77, $this->source); })()), "valide", []) != true)) {
            echo "Votre inscription est en attente de validation par l'organisateur.
                                            Vous pouvez la modifier sur votre page profil jusqu'à ce qu'elle soit validée.
                                            Une fois validée, pour modifier votre inscription veuillez envoyer un mail à 
                                            <a style=\"color:black\" href=\"mailto:contact@bordza.fr\">contact@bordza.fr</a>
                                            ";
        }
        // line 82
        echo "                                            </p>
                                            <p>Inscription réalisée le : ";
        // line 83
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y H:i", "Europe/Paris"), "html", null, true);
        echo ".</p>
                                            
                                            <p>Nous vous répondrons dans les plus brefs délais.</p>
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
        return "inscription_visiteur_mail.email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 83,  180 => 82,  171 => 77,  164 => 73,  160 => 71,  157 => 70,  153 => 68,  150 => 67,  146 => 65,  143 => 64,  140 => 63,  136 => 61,  134 => 60,  130 => 58,  125 => 57,  120 => 56,  115 => 55,  111 => 54,  105 => 53,  101 => 52,  95 => 51,  91 => 50,  87 => 49,  77 => 44,  52 => 22,  29 => 1,);
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
                                                                <p style=\"font-size:0.8em\"><b>Nouvelle inscription en ligne</b></p>
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
                                            <p>Une nouvelle inscription pour <b>{{ inscription.prenom | title }} {{ inscription.nom | upper }}</b>
                                                    a bien été prise en compte.</p>
                                            
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
                                            <p>Inscription réalisée le : {{ 'now' | date('d-m-Y H:i','Europe/Paris') }}.</p>
                                            
                                            <p>Nous vous répondrons dans les plus brefs délais.</p>
                                            <p style=\"text-align:center\">L'équipe Bordza</p>
                                        </div>
                                </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
            
            
           
            
        
    </body>
</html>", "inscription_visiteur_mail.email.twig", "/Users/bordza/Sites/bordza/app/Resources/views/inscription_visiteur_mail.email.twig");
    }
}
