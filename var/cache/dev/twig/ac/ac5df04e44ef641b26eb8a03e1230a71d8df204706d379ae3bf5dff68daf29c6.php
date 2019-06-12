<?php

/* inscription/index.html.twig */
class __TwigTemplate_ba235d3d86858bc5569b34453f51693c87b2ce620ee2cfea72d4b6b145a738d1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "inscription/index.html.twig", 1);
        $this->blocks = [
            'connexion' => [$this, 'block_connexion'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_connexion($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $this->loadTemplate("connexion.html.twig", "inscription/index.html.twig", 2)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("nav.html.twig", "inscription/index.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container-fluid bottom\">
    <div class=\"row justify-content-center\">
        <h2 class=\"text-center top\">LES INSCRIPTIONS</h2>
    </div>
    <div class=\"row justify-content-center\">
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inscription_new");
        echo "\" class=\"d-none d-sm-block\">
                <img class=\"img-class\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/ajoute-rond.png"), "html", null, true);
        echo "\" style=\"margin-right:10px;\">
                <button class=\"btn btn-secondary bouton \" type=\"button\">Ajouter une nouvelle Inscription</button>
            </a>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inscription_new");
        echo "\" class=\"d-block d-sm-none\">
                <img class=\"img-class\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/ajoute-rond.png"), "html", null, true);
        echo "\" style=\"margin-right:10px;\">
                <button class=\"btn btn-secondary btn-lg bouton \" type=\"button\">Nouvelle Inscription</button>
            </a>
            
    </div>   
    <div class=\"row justify-content-center\">
    <div class=\" col-11 top\">
        <div class=\"row justify-content-center\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscriptions"]) || array_key_exists("inscriptions", $context) ? $context["inscriptions"] : (function () { throw new Twig_Error_Runtime('Variable "inscriptions" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 25
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["inscription"], "valide", [])) {
                // line 26
                echo "            <div class=\"grey  padding col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\">
                <form action=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inscription_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["inscription"], "id", [])]), "html", null, true);
                echo "\" method=\"post\" class=\"row justify-content-end\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                    ";
                // line 29
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 29, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["inscription"], "id", []), [], "array"), 'widget');
                echo "
                    <button type=\"submit\" class=\" btn-danger justify-content-end\">
                        X
                    </button>
                </form>
                <div class=\"\">
                    <div class=\"bg-green text-light eleve row\" onclick=\"montreDetails()\">
                        <div class=\"col-10\">
                            <img src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/glyph/glyphicons-635-teenager.png"), "html", null, true);
                echo "\">
                            <span class=\"left\"> ";
                // line 38
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "nom", [])), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "prenom", [])), "html", null, true);
                echo "</span>
                            <div class=\"age\">Age : ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "age", []), "html", null, true);
                echo "</div>
                        </div>
                        <span class=\"plus\"><img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/glyph/ajoute-rond.png"), "html", null, true);
                echo "\"></span>
                    </div>

                    <span class=\"justify-content-center hidden details\" >
                        <div class=\"\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "formules", []), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "disciplines", []), "html", null, true);
                echo "</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\" style=\"color:#1abc9c\">Session : <u>";
                // line 47
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "titreSession", [])), "html", null, true);
                echo "</u></div>
                        <div class=\"w-100\"></div>
                        <div class=\"\" style=\"color:#1abc9c\">Date : ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "dateSession", []), "html", null, true);
                echo "</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">";
                // line 51
                if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfait1h", [])) {
                    echo "Forfait 1h";
                }
                echo " 
                                        ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfait5h", [])) {
                    echo "Forfait 5h";
                }
                // line 53
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfait10h", [])) {
                    echo "Forfait 10h";
                }
                // line 54
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfaitAnnuel", [])) {
                    echo "Forfait annuel";
                }
                echo "</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">Prix : ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "prix", []), "html", null, true);
                echo "€</div>
                        <div class=\"w-100\"></div>


                        <div class=\"btn-danger\">Tel : ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "tel", []), "html", null, true);
                echo "</div>

                        <div class=\"w-100\"></div>






                        <div class=\"\">Inscrit par : ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "userId", []), "html", null, true);
                echo "</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">E-mail : ";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "userId", []), "email", []), "html", null, true);
                echo "</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">Prêt de matériel : 
                            ";
                // line 74
                if (twig_get_attribute($this->env, $this->source, $context["inscription"], "planche", [])) {
                    echo "<i class=\"text-green\">PLANCHE</i>
                            ";
                }
                // line 76
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["inscription"], "materiel", [])) {
                    echo "<i class=\"text-green\">PROTECTIONS</i>
                            ";
                }
                // line 78
                echo "                            ";
                if (((twig_get_attribute($this->env, $this->source, $context["inscription"], "planche", []) == 0) && (twig_get_attribute($this->env, $this->source, $context["inscription"], "materiel", []) == 0))) {
                    echo "<i class=\"text-green\">non</i>
                            ";
                }
                // line 80
                echo "                        </div>
                    </span>
                    <a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inscription_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["inscription"], "id", [])]), "html", null, true);
                echo "\">
                        <button class=\"btn bouton\">Modifier</button>
                    </a>
                    <div class=\"text\">Inscription : ";
                // line 85
                if (twig_get_attribute($this->env, $this->source, $context["inscription"], "valide", [])) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/valide.png"), "html", null, true);
                    echo "\">
                        ";
                } else {
                    // line 86
                    echo "<span style=\"font-weight:bold\">EN ATTENTE</span>
                        ";
                }
                // line 88
                echo "                    </div>
                    <div>




                            
                    </div>
                </div>
            </div>
            ";
            } else {
                // line 99
                echo "            <div class=\"grey padding col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\" style=\"border:2px solid red\">
                <form action=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inscription_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["inscription"], "id", [])]), "html", null, true);
                echo "\" method=\"post\" class=\"row justify-content-end\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                    ";
                // line 102
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 102, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["inscription"], "id", []), [], "array"), 'widget');
                echo "
                    <button type=\"submit\" class=\" btn-danger justify-content-end\">
                        X
                    </button>
                </form>
                <div class=\"\">
                    <div class=\"bg-green text-light eleve row\" onclick=\"montreDetails()\">
                        <div class=\"col-10\">
                            <img src=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/glyph/glyphicons-635-teenager.png"), "html", null, true);
                echo "\">
                            <span class=\"left\"> ";
                // line 111
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "nom", [])), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "prenom", [])), "html", null, true);
                echo "</span>
                            <div class=\"age\">Age : ";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "age", []), "html", null, true);
                echo "</div>
                        </div>
                        <span class=\"plus\"><img src=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/glyph/ajoute-rond.png"), "html", null, true);
                echo "\"></span>
                    </div>

                    <span class=\"justify-content-center hidden details\" >
                        <div class=\"\">";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "formules", []), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "disciplines", []), "html", null, true);
                echo "</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\" style=\"color:#1abc9c\">Session : <u>";
                // line 120
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "titreSession", [])), "html", null, true);
                echo "</u></div>
                        <div class=\"w-100\"></div>
                        <div class=\"\" style=\"color:#1abc9c\">Date : ";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "dateSession", []), "html", null, true);
                echo "</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">";
                // line 124
                if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfait1h", [])) {
                    echo "Forfait 1h";
                }
                echo " 
                                        ";
                // line 125
                if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfait5h", [])) {
                    echo "Forfait 5h";
                }
                // line 126
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfait10h", [])) {
                    echo "Forfait 10h";
                }
                // line 127
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfaitAnnuel", [])) {
                    echo "Forfait annuel";
                }
                echo "</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">Prix : ";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "sessionId", []), "prix", []), "html", null, true);
                echo "€</div>
                        <div class=\"w-100\"></div>


                        <div class=\"btn-danger\">Tel : ";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "tel", []), "html", null, true);
                echo "</div>

                        <div class=\"w-100\"></div>






                        <div class=\"\">Inscrit par : ";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "userId", []), "html", null, true);
                echo "</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">E-mail : ";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "userId", []), "email", []), "html", null, true);
                echo "</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">Prêt de matériel : 
                            ";
                // line 147
                if (twig_get_attribute($this->env, $this->source, $context["inscription"], "planche", [])) {
                    echo "<i class=\"text-green\">PLANCHE</i>
                            ";
                }
                // line 149
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["inscription"], "materiel", [])) {
                    echo "<i class=\"text-green\">PROTECTIONS</i>
                            ";
                }
                // line 151
                echo "                            ";
                if (((twig_get_attribute($this->env, $this->source, $context["inscription"], "planche", []) == 0) && (twig_get_attribute($this->env, $this->source, $context["inscription"], "materiel", []) == 0))) {
                    echo "<i class=\"text-green\">non</i>
                            ";
                }
                // line 153
                echo "
                        </div>
                    </span>
                    <a href=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inscription_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["inscription"], "id", [])]), "html", null, true);
                echo "\">
                        <button class=\"btn bouton\">Modifier</button>
                    </a>
                    <div class=\"text\">Inscription : ";
                // line 159
                if (twig_get_attribute($this->env, $this->source, $context["inscription"], "valide", [])) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/valide.png"), "html", null, true);
                    echo "\">
                        ";
                } else {
                    // line 160
                    echo "<span class=\"btn-danger\"style=\"font-weight:bold\">EN ATTENTE</span>
                        ";
                }
                // line 162
                echo "                    </div>
                    <div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 168
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "        </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 173
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "inscription/index.html.twig", 173)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 174
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 175
        echo "<script>
\$(document).ready(function(){
var details = document.getElementsByClassName('details');
var eleve = document.getElementsByClassName('eleve');


montreDetails = function(){
    \$(details).toggle('hidden');
}

})
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inscription/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 175,  489 => 174,  471 => 173,  458 => 169,  452 => 168,  444 => 162,  440 => 160,  433 => 159,  427 => 156,  422 => 153,  416 => 151,  410 => 149,  405 => 147,  399 => 144,  394 => 142,  382 => 133,  375 => 129,  367 => 127,  362 => 126,  358 => 125,  352 => 124,  347 => 122,  342 => 120,  335 => 118,  328 => 114,  323 => 112,  317 => 111,  313 => 110,  302 => 102,  297 => 100,  294 => 99,  281 => 88,  277 => 86,  270 => 85,  264 => 82,  260 => 80,  254 => 78,  248 => 76,  243 => 74,  237 => 71,  232 => 69,  220 => 60,  213 => 56,  205 => 54,  200 => 53,  196 => 52,  190 => 51,  185 => 49,  180 => 47,  173 => 45,  166 => 41,  161 => 39,  155 => 38,  151 => 37,  140 => 29,  135 => 27,  132 => 26,  129 => 25,  125 => 24,  114 => 16,  110 => 15,  104 => 12,  100 => 11,  93 => 6,  84 => 5,  66 => 3,  48 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}

{% block body %}
<div class=\"container-fluid bottom\">
    <div class=\"row justify-content-center\">
        <h2 class=\"text-center top\">LES INSCRIPTIONS</h2>
    </div>
    <div class=\"row justify-content-center\">
            <a href=\"{{ path('admin_inscription_new') }}\" class=\"d-none d-sm-block\">
                <img class=\"img-class\" src=\"{{ asset('assets/images/glyph/ajoute-rond.png') }}\" style=\"margin-right:10px;\">
                <button class=\"btn btn-secondary bouton \" type=\"button\">Ajouter une nouvelle Inscription</button>
            </a>
            <a href=\"{{ path('admin_inscription_new') }}\" class=\"d-block d-sm-none\">
                <img class=\"img-class\" src=\"{{ asset('assets/images/glyph/ajoute-rond.png') }}\" style=\"margin-right:10px;\">
                <button class=\"btn btn-secondary btn-lg bouton \" type=\"button\">Nouvelle Inscription</button>
            </a>
            
    </div>   
    <div class=\"row justify-content-center\">
    <div class=\" col-11 top\">
        <div class=\"row justify-content-center\">
        {% for inscription in inscriptions %}
            {% if inscription.valide %}
            <div class=\"grey  padding col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\">
                <form action=\"{{ path('admin_inscription_delete', { 'id': inscription.id }) }}\" method=\"post\" class=\"row justify-content-end\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                    {{ form_widget(deleteForms[inscription.id]) }}
                    <button type=\"submit\" class=\" btn-danger justify-content-end\">
                        X
                    </button>
                </form>
                <div class=\"\">
                    <div class=\"bg-green text-light eleve row\" onclick=\"montreDetails()\">
                        <div class=\"col-10\">
                            <img src=\"{{ asset('/assets/images/glyph/glyphicons-635-teenager.png')}}\">
                            <span class=\"left\"> {{ inscription.nom | upper }} {{ inscription.prenom | title }}</span>
                            <div class=\"age\">Age : {{ inscription.age }}</div>
                        </div>
                        <span class=\"plus\"><img src=\"{{ asset('/assets/images/glyph/ajoute-rond.png') }}\"></span>
                    </div>

                    <span class=\"justify-content-center hidden details\" >
                        <div class=\"\">{{ inscription.sessionId.formules }} / {{ inscription.sessionId.disciplines }}</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\" style=\"color:#1abc9c\">Session : <u>{{ inscription.sessionId.titreSession | capitalize}}</u></div>
                        <div class=\"w-100\"></div>
                        <div class=\"\" style=\"color:#1abc9c\">Date : {{ inscription.sessionId.dateSession }}</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">{% if inscription.forfait1h %}Forfait 1h{% endif %} 
                                        {% if inscription.forfait5h %}Forfait 5h{% endif %}
                                        {% if inscription.forfait10h %}Forfait 10h{% endif %}
                                        {% if inscription.forfaitAnnuel %}Forfait annuel{% endif %}</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">Prix : {{ inscription.sessionId.prix }}€</div>
                        <div class=\"w-100\"></div>


                        <div class=\"btn-danger\">Tel : {{ inscription.tel }}</div>

                        <div class=\"w-100\"></div>






                        <div class=\"\">Inscrit par : {{ inscription.userId }}</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">E-mail : {{ inscription.userId.email }}</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">Prêt de matériel : 
                            {% if inscription.planche %}<i class=\"text-green\">PLANCHE</i>
                            {% endif %}
                            {% if inscription.materiel %}<i class=\"text-green\">PROTECTIONS</i>
                            {% endif %}
                            {% if (inscription.planche == 0) and (inscription.materiel == 0) %}<i class=\"text-green\">non</i>
                            {% endif %}
                        </div>
                    </span>
                    <a href=\"{{ path('admin_inscription_edit', { 'id': inscription.id }) }}\">
                        <button class=\"btn bouton\">Modifier</button>
                    </a>
                    <div class=\"text\">Inscription : {% if inscription.valide %}<img src=\"{{ asset('assets/images/glyph/valide.png')}}\">
                        {% else %}<span style=\"font-weight:bold\">EN ATTENTE</span>
                        {% endif %}
                    </div>
                    <div>




                            
                    </div>
                </div>
            </div>
            {% else %}
            <div class=\"grey padding col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\" style=\"border:2px solid red\">
                <form action=\"{{ path('admin_inscription_delete', { 'id': inscription.id }) }}\" method=\"post\" class=\"row justify-content-end\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                    {{ form_widget(deleteForms[inscription.id]) }}
                    <button type=\"submit\" class=\" btn-danger justify-content-end\">
                        X
                    </button>
                </form>
                <div class=\"\">
                    <div class=\"bg-green text-light eleve row\" onclick=\"montreDetails()\">
                        <div class=\"col-10\">
                            <img src=\"{{ asset('/assets/images/glyph/glyphicons-635-teenager.png')}}\">
                            <span class=\"left\"> {{ inscription.nom | upper }} {{ inscription.prenom | title }}</span>
                            <div class=\"age\">Age : {{ inscription.age }}</div>
                        </div>
                        <span class=\"plus\"><img src=\"{{ asset('/assets/images/glyph/ajoute-rond.png') }}\"></span>
                    </div>

                    <span class=\"justify-content-center hidden details\" >
                        <div class=\"\">{{ inscription.sessionId.formules }} / {{ inscription.sessionId.disciplines }}</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\" style=\"color:#1abc9c\">Session : <u>{{ inscription.sessionId.titreSession | capitalize}}</u></div>
                        <div class=\"w-100\"></div>
                        <div class=\"\" style=\"color:#1abc9c\">Date : {{ inscription.sessionId.dateSession }}</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">{% if inscription.forfait1h %}Forfait 1h{% endif %} 
                                        {% if inscription.forfait5h %}Forfait 5h{% endif %}
                                        {% if inscription.forfait10h %}Forfait 10h{% endif %}
                                        {% if inscription.forfaitAnnuel %}Forfait annuel{% endif %}</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">Prix : {{ inscription.sessionId.prix }}€</div>
                        <div class=\"w-100\"></div>


                        <div class=\"btn-danger\">Tel : {{ inscription.tel }}</div>

                        <div class=\"w-100\"></div>






                        <div class=\"\">Inscrit par : {{ inscription.userId }}</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">E-mail : {{ inscription.userId.email }}</div>
                        <div class=\"w-100\"></div>
                        <div class=\"\">Prêt de matériel : 
                            {% if inscription.planche %}<i class=\"text-green\">PLANCHE</i>
                            {% endif %}
                            {% if inscription.materiel %}<i class=\"text-green\">PROTECTIONS</i>
                            {% endif %}
                            {% if (inscription.planche == 0) and (inscription.materiel == 0) %}<i class=\"text-green\">non</i>
                            {% endif %}

                        </div>
                    </span>
                    <a href=\"{{ path('admin_inscription_edit', { 'id': inscription.id }) }}\">
                        <button class=\"btn bouton\">Modifier</button>
                    </a>
                    <div class=\"text\">Inscription : {% if inscription.valide %}<img src=\"{{ asset('assets/images/glyph/valide.png')}}\">
                        {% else %}<span class=\"btn-danger\"style=\"font-weight:bold\">EN ATTENTE</span>
                        {% endif %}
                    </div>
                    <div>
                    </div>
                </div>
            </div>
            {% endif %}
        {% endfor %}
        </div>
    </div>
    </div>
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}
{% block javascripts %}
<script>
\$(document).ready(function(){
var details = document.getElementsByClassName('details');
var eleve = document.getElementsByClassName('eleve');


montreDetails = function(){
    \$(details).toggle('hidden');
}

})
</script>


{% endblock %}", "inscription/index.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/inscription/index.html.twig");
    }
}
