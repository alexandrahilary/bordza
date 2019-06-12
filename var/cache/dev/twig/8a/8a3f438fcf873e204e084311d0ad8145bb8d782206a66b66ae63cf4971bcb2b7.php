<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_4b76ebd75a509dde35755e8fb5f0c81fd74a311f1db01aab89d236ded7973332 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "

<div id=\"container\">
    <div class=\"container-fluid\" style=\"margin-bottom:7%;margin-top:7%\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-3 col-lg-3 col-md-9 col-sm-9 col-11 \" id=\"admin-profil\" style=\"padding:20px;margin-right:10px;background-color:black;border-radius:20px;\">
            ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "user", [])) {
            // line 9
            echo "                <h4 class=\"Titillium bottom\">BIENVENUE SUR VOTRE COMPTE !</h4>
                <div class=\"fos_user_user_show\" style=\"margin-top:10px\">
                    <p><b class=\"Titillium\">";
            // line 11
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 11, $this->source); })()), "username", [])), "html", null, true);
            echo "</b></p>
                    <p><b class=\"Titillium\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->source); })()), "email", []), "html", null, true);
            echo "</b></p>
                    <a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
            echo "\">Changer le mot de passe</a>
                </div>
                ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "user", []), "hasRole", [0 => "ROLE_ADMIN"], "method")) {
                // line 16
                echo "                <div style=\"margin-top:50px\" class=\"d-none d-sm-block\">
                    <p>ADMINISTRATION DU SITE :</p>
                    <div>
                        <a href=\"";
                // line 19
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
                echo "\"> -> Utilisateurs</a>
                    </div>
                    <div>
                        <a href=\"";
                // line 22
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tarif_index");
                echo "\"> -> Tarifs</a>
                    </div>
                    <div>
                        <a href=\"";
                // line 25
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_index");
                echo "\"> -> Sessions</a>
                    </div>
                    <div>
                        <a href=\"";
                // line 28
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inscription_index");
                echo "\"> -> Inscriptions</a>
                    </div>
                    <div>
                        <a href=\"";
                // line 31
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_actu_index");
                echo "\"> -> Articles</a>
                    </div>
                    <div>
                        <a href=\"";
                // line 34
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_index");
                echo "\"> -> Catalogue</a>
                    </div>
                    <div>
                        <a href=\"";
                // line 37
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_video_index");
                echo "\"> -> Vidéos</a>
                    </div>
                    <div>
                        <a href=\"";
                // line 40
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_index");
                echo "\"> -> Messages</a>
                    </div>
                </div>
                ";
            }
            // line 44
            echo "                
            </div>
            <div class=\"col-xl-6 col-lg-6 col-md-9 col-sm-9 col-11\">
                <div class=\"row justify-content-center\" style=\"background-image:url('";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/skateschool/inscription.png"), "html", null, true);
            echo "');height:27vh;background-repeat: no-repeat;background-size:cover;background-position: center;\" >
                <h3 class=\"align-self-center Titillium inscriptions-titre\">MES INSCRIPTIONS : </h3>
                </div>
                
                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 51, $this->source); })()), "inscriptions", []));
            foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
                echo " 
                <div class=\"row align-items-center justify-content-center profil-inscriptions\" style=\"margin-top:50px\">
                    <div class=\"col-xl-2 col-lg-2 col-md-5 col-sm-5 col-5\">
                        <img class=\"img-fluid\" src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo/logo-bordza.png"), "html", null, true);
                echo "\">
                    </div>
                    <div class=\"col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12\">
                        <p><span class=\"hidden-mobile\">Nom de l'élève inscrit : </span><u>";
                // line 57
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "nom", [])), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "prenom", [])), "html", null, true);
                echo "</u><br/>
                        inscrit pour : 
                        ";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "titreSession", []), "html", null, true);
                echo " /
                        ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "formules", []), "html", null, true);
                echo " /
                        ";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "disciplines", []), "html", null, true);
                echo "<br/>
                        prix : ";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "prix", []), "html", null, true);
                echo "<br/>
                        ";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "dateSession", []), "html", null, true);
                echo "<br/>
                        Inscription ";
                // line 64
                if (twig_get_attribute($this->env, $this->source, $context["inscription"], "valide", [])) {
                    // line 65
                    echo "                        <span>VALIDÉE <img class=\"valide\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/valide.png"), "html", null, true);
                    echo "\"></span>
                        ";
                } else {
                    // line 66
                    echo "<span class=\"text-green\">EN ATTENTE</span>
                        <a href=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["inscription"], "id", [])]), "html", null, true);
                    echo "\">
                            <button class=\"btn bouton\">Modifier</button>
                        </a>
                        ";
                }
                // line 70
                echo "</p>
                    </div>
                    
                     
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                
            ";
        }
        // line 78
        echo "                <div class=\"row justify-content-center\">
                    <p class=\"text-center text text-green bottom col-12\">Vous pouvez modifier votre inscription tant que celle-ci n'est pas validée
                    par le moniteur. <br/>Pour modifier une inscription déjà validée, veuillez nous contacter au minimum 24H à l'avance. Merci.</p>
                    <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">
                        <button class=\"btn btn-secondary bouton top\">CONTACTEZ-NOUS</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 81,  198 => 78,  194 => 76,  183 => 70,  176 => 67,  173 => 66,  167 => 65,  165 => 64,  161 => 63,  157 => 62,  153 => 61,  149 => 60,  145 => 59,  138 => 57,  132 => 54,  124 => 51,  117 => 47,  112 => 44,  105 => 40,  99 => 37,  93 => 34,  87 => 31,  81 => 28,  75 => 25,  69 => 22,  63 => 19,  58 => 16,  56 => 15,  51 => 13,  47 => 12,  43 => 11,  39 => 9,  37 => 8,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}


<div id=\"container\">
    <div class=\"container-fluid\" style=\"margin-bottom:7%;margin-top:7%\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-3 col-lg-3 col-md-9 col-sm-9 col-11 \" id=\"admin-profil\" style=\"padding:20px;margin-right:10px;background-color:black;border-radius:20px;\">
            {% if app.user %}
                <h4 class=\"Titillium bottom\">BIENVENUE SUR VOTRE COMPTE !</h4>
                <div class=\"fos_user_user_show\" style=\"margin-top:10px\">
                    <p><b class=\"Titillium\">{{ user.username | title }}</b></p>
                    <p><b class=\"Titillium\">{{ user.email }}</b></p>
                    <a href=\"{{ path('fos_user_change_password') }}\">Changer le mot de passe</a>
                </div>
                {% if app.user.hasRole('ROLE_ADMIN') %}
                <div style=\"margin-top:50px\" class=\"d-none d-sm-block\">
                    <p>ADMINISTRATION DU SITE :</p>
                    <div>
                        <a href=\"{{ path ('admin_user_index') }}\"> -> Utilisateurs</a>
                    </div>
                    <div>
                        <a href=\"{{ path ('admin_tarif_index') }}\"> -> Tarifs</a>
                    </div>
                    <div>
                        <a href=\"{{ path ('admin_session_index') }}\"> -> Sessions</a>
                    </div>
                    <div>
                        <a href=\"{{ path ('admin_inscription_index') }}\"> -> Inscriptions</a>
                    </div>
                    <div>
                        <a href=\"{{ path ('admin_actu_index') }}\"> -> Articles</a>
                    </div>
                    <div>
                        <a href=\"{{ path ('admin_catalogue_index') }}\"> -> Catalogue</a>
                    </div>
                    <div>
                        <a href=\"{{ path ('admin_video_index') }}\"> -> Vidéos</a>
                    </div>
                    <div>
                        <a href=\"{{ path ('admin_contact_index') }}\"> -> Messages</a>
                    </div>
                </div>
                {% endif %}
                
            </div>
            <div class=\"col-xl-6 col-lg-6 col-md-9 col-sm-9 col-11\">
                <div class=\"row justify-content-center\" style=\"background-image:url('{{ asset('assets/images/skateschool/inscription.png') }}');height:27vh;background-repeat: no-repeat;background-size:cover;background-position: center;\" >
                <h3 class=\"align-self-center Titillium inscriptions-titre\">MES INSCRIPTIONS : </h3>
                </div>
                
                {% for inscription in user.inscriptions %} 
                <div class=\"row align-items-center justify-content-center profil-inscriptions\" style=\"margin-top:50px\">
                    <div class=\"col-xl-2 col-lg-2 col-md-5 col-sm-5 col-5\">
                        <img class=\"img-fluid\" src=\"{{ asset('assets/images/logo/logo-bordza.png') }}\">
                    </div>
                    <div class=\"col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12\">
                        <p><span class=\"hidden-mobile\">Nom de l'élève inscrit : </span><u>{{ inscription.nom | title }} {{ inscription.prenom | title }}</u><br/>
                        inscrit pour : 
                        {{ inscription.sessionId.titreSession }} /
                        {{ inscription.sessionId.formules }} /
                        {{ inscription.sessionId.disciplines }}<br/>
                        prix : {{ inscription.sessionId.prix }}<br/>
                        {{ inscription.sessionId.dateSession }}<br/>
                        Inscription {% if inscription.valide %}
                        <span>VALIDÉE <img class=\"valide\" src=\"{{ asset('assets/images/glyph/valide.png') }}\"></span>
                        {% else %}<span class=\"text-green\">EN ATTENTE</span>
                        <a href=\"{{ path('inscription_edit', { 'id': inscription.id }) }}\">
                            <button class=\"btn bouton\">Modifier</button>
                        </a>
                        {% endif %}</p>
                    </div>
                    
                     
                </div>
                {% endfor %}
                
            {% endif %}
                <div class=\"row justify-content-center\">
                    <p class=\"text-center text text-green bottom col-12\">Vous pouvez modifier votre inscription tant que celle-ci n'est pas validée
                    par le moniteur. <br/>Pour modifier une inscription déjà validée, veuillez nous contacter au minimum 24H à l'avance. Merci.</p>
                    <a href=\"{{ path('contact')}}\">
                        <button class=\"btn btn-secondary bouton top\">CONTACTEZ-NOUS</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/Users/bordza/Sites/bordza/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
