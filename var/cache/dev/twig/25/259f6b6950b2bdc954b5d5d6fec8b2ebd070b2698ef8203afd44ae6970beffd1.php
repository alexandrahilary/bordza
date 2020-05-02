<?php

/* session/index.html.twig */
class __TwigTemplate_b0b29d360794e8e3ba8cb295c247d2f643b313d7d92af1ec2aff63d80954098c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "session/index.html.twig", 1);
        $this->blocks = [
            'connexion' => [$this, 'block_connexion'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "session/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "session/index.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "session/index.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "session/index.html.twig", 3)->display($context);
        
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
        echo "<div class=\"container-fluid bg-black\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12\">



        <div class=\"row justify-content-center\">
            <h2 class=\"top\">MES SESSIONS</h2>
        </div>
        <div class=\"row justify-content-center bouton\">
                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_new");
        echo "\">
                    <img class=\"img-class\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/ajoute-rond.png"), "html", null, true);
        echo "\" style=\"margin-right:10px;\">
                    <button class=\"btn btn-secondary \" type=\"button\">Ajouter une nouvelle Session</button>
                </a>
        </div>
        <div class=\"row justify-content-content top\">
            <h2>- COURS -</h2>
        </div>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['AppBundle\Twig\AppExtension']->orderByNumber((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new Twig_Error_Runtime('Variable "sessions" does not exist.', 24, $this->source); })()), "orderNumber"));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 25
            echo "        ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) == "COURS")) {
                // line 27
                echo "            <div class=\"col-12 mt-1 text-black\">
                <div class=\"row justify-content-center rounded bg-secondary padding\">

                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">
                        <div class=\"text-light\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "orderNumber", []), "html", null, true);
                echo "</div>
                        <div class=\"w-100\"></div>
                        ";
                // line 33
                if ((twig_get_attribute($this->env, $this->source, $context["session"], "image", []) != null)) {
                    echo "<img class=\"img-fluid top\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "pathImage", []))), "html", null, true);
                    echo "\">
                        ";
                }
                // line 35
                echo "                    </div>
                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10\">
                        <div class=\"row\">
                            <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\"> / ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "formules", []), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "disciplines", []), "html", null, true);
                echo " /
                                <h3 class=\"categories\">";
                // line 39
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "titreSession", [])), "html", null, true);
                echo "</h3>
                                <div class=\"text-green\">Dates : ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", []), "html", null, true);
                echo "</div>
                                <div>Prix : ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "prix", []), "html", null, true);
                echo "</div>
                                <div class=\"description\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["session"], "descriptionSession", []);
                echo "</div>
                                <div class=\"row\">
                                    <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [])]), "html", null, true);
                echo "\">
                                        <button type=\"submit\" class=\"btn bouton\">Modifier</button>
                                    </a>
                                    <form action=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [])]), "html", null, true);
                echo "\" method=\"post\">
                                      <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                      ";
                // line 49
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 49, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["session"], "id", []), [], "array"), 'widget');
                echo "
                                      <button type=\"submit\" class=\"btn btn-danger bouton\">
                                          Supprimer
                                      </button>
                                    </form>
                                </div>
                            </div>

                            <div class=\"col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <p>NOMBRE D'INSCRITS :
                                            <span class=\"nombreInscrits text-green\">
                                                <b>";
                // line 62
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", [])), "html", null, true);
                echo "</b>
                                            </span>
                                        </p>
                                        ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", []));
                foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
                    // line 66
                    echo "                                        <p class=\"bg-green\">
                                            <img src=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/glyphicons-635-teenager.png"), "html", null, true);
                    echo "\">
                                        ";
                    // line 68
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "prenom", [])), "html", null, true);
                    echo " / <span class=\"age\">Age : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "age", []), "html", null, true);
                    echo "
                                         / Tel : </span>";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "tel", []), "html", null, true);
                    echo "<span class=\"age\"> / email : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "userId", []), "email", []), "html", null, true);
                    echo "
                                           / Forfait : ";
                    // line 70
                    if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfait1h", [])) {
                        echo "1h";
                    }
                    // line 71
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfait5h", [])) {
                        echo "5h";
                    }
                    // line 72
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfait10h", [])) {
                        echo "10h";
                    }
                    // line 73
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfaitAnnuel", [])) {
                        echo "annuel";
                    }
                    // line 74
                    echo "                                            </span>
                                        </p>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                                    </div>
                                </div>
                                <div>
                                    ";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []), "html", null, true);
                echo " places / Reste : ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []) - twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", []))), "html", null, true);
                echo " places
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 88
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            <div class=\"row justify-content-center top\">
                <h2>- STAGES -</h2>
            </div>
            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['AppBundle\Twig\AppExtension']->orderByNumber((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new Twig_Error_Runtime('Variable "sessions" does not exist.', 92, $this->source); })()), "orderNumber"));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 94
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) == "STAGES")) {
                // line 95
                echo "            <div class=\"col-12 top\">
            <div class=\"row justify-content-center rounded grey padding\">
                <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">
                    <div>Ordre d'affichage : <span class=\"text-green\">";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "orderNumber", []), "html", null, true);
                echo "</span></div>
                    <div class=\"w-100\"></div>
                    ";
                // line 100
                if ((twig_get_attribute($this->env, $this->source, $context["session"], "image", []) != null)) {
                    echo "<img class=\"img-fluid top\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "pathImage", []))), "html", null, true);
                    echo "\">";
                }
                // line 101
                echo "                </div>
                <div class=\"col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\"> / ";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "formules", []), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "disciplines", []), "html", null, true);
                echo " /
                            <h3 class=\"categories\">";
                // line 105
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "titreSession", [])), "html", null, true);
                echo "</h3>
                            <div class=\"text-green\">Dates : ";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", []), "html", null, true);
                echo "</div>
                            <div>Prix : ";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "prix", []), "html", null, true);
                echo "</div>
                            <div class=\"description\">";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["session"], "descriptionSession", []);
                echo "</div>

                            <div class=\"row\">
                                <a href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [])]), "html", null, true);
                echo "\">
                                    <button type=\"submit\" class=\"btn bouton\">Modifier</button>
                                </a>
                                <form action=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [])]), "html", null, true);
                echo "\" method=\"post\">
                                  <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                  ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 116, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["session"], "id", []), [], "array"), 'widget');
                echo "
                                  <button type=\"submit\" class=\"btn btn-danger bouton\">
                                      Supprimer
                                  </button>
                                </form>
                            </div>
                        </div>

                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <p>NOMBRE D'INSCRITS :
                                        <span class=\"nombreInscrits text-green\">
                                            <b>";
                // line 129
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", [])), "html", null, true);
                echo "</b>
                                        </span>
                                    </p>
                                    ";
                // line 132
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", []));
                foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
                    // line 133
                    echo "                                    <p class=\"bg-green\">
                                        <img src=\"";
                    // line 134
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/glyphicons-635-teenager.png"), "html", null, true);
                    echo "\">
                                    ";
                    // line 135
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "prenom", [])), "html", null, true);
                    echo " / <span class=\"age\">Age : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "age", []), "html", null, true);
                    echo "
                                     / Tel : </span>";
                    // line 136
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "tel", []), "html", null, true);
                    echo "<span class=\"age\"> / email : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "userId", []), "email", []), "html", null, true);
                    echo "
                                       </span>

                                    </p>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "                                </div>
                        </div>
                        <div>
                            ";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []), "html", null, true);
                echo " places / Reste : ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []) - twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", []))), "html", null, true);
                echo " places
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        ";
            }
            // line 152
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "        <div class=\"row justify-content-center top\">
            <h2>- AUTRES ÉVÉNEMENTS -</h2>
        </div>
        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['AppBundle\Twig\AppExtension']->orderByNumber((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new Twig_Error_Runtime('Variable "sessions" does not exist.', 156, $this->source); })()), "orderNumber"));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 157
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) != "COURS") && (twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) != "STAGES"))) {
                // line 158
                echo "        <div class=\"col-12 top\">
        <div class=\"row justify-content-center rounded grey padding\">

            <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">
                <div>Ordre d'affichage : <span class=\"text-green\">";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "orderNumber", []), "html", null, true);
                echo "</span></div>
                <div class=\"w-100\"></div>
                ";
                // line 164
                if ((twig_get_attribute($this->env, $this->source, $context["session"], "image", []) != null)) {
                    echo "<img class=\"img-fluid top\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "pathImage", []))), "html", null, true);
                    echo "\">";
                }
                echo "</div>
                <div class=\"col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\"> / ";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "formules", []), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "disciplines", []), "html", null, true);
                echo " /
                            <h3 class=\"categories\">";
                // line 168
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "titreSession", [])), "html", null, true);
                echo "</h3>
                            <div class=\"text-green\">Dates : ";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", []), "html", null, true);
                echo "</div>
                            <div>Prix : ";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "prix", []), "html", null, true);
                echo "</div>
                            <div class=\"description\">";
                // line 171
                echo twig_get_attribute($this->env, $this->source, $context["session"], "descriptionSession", []);
                echo "</div>

                            <div class=\"row\">
                                <a href=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [])]), "html", null, true);
                echo "\">
                                    <button type=\"submit\" class=\"btn bouton\">Modifier</button>
                                </a>
                                <form action=\"";
                // line 177
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [])]), "html", null, true);
                echo "\" method=\"post\">
                                  <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                  ";
                // line 179
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 179, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["session"], "id", []), [], "array"), 'widget');
                echo "
                                  <button type=\"submit\" class=\"btn btn-danger bouton\">
                                      Supprimer
                                  </button>
                                </form>
                            </div>
                        </div>

                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <p>NOMBRE D'INSCRITS :
                                        <span class=\"nombreInscrits text-green\">
                                            <b>";
                // line 192
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", [])), "html", null, true);
                echo "</b>
                                        </span>
                                    </p>
                                    ";
                // line 195
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", []));
                foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
                    // line 196
                    echo "                                    <p class=\"bg-green\">
                                        <img src=\"";
                    // line 197
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/glyphicons-635-teenager.png"), "html", null, true);
                    echo "\">
                                    ";
                    // line 198
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "prenom", [])), "html", null, true);
                    echo " / <span class=\"age\">Age : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "age", []), "html", null, true);
                    echo "
                                     / Tel : </span>";
                    // line 199
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "tel", []), "html", null, true);
                    echo "<span class=\"age\"> / email : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "userId", []), "email", []), "html", null, true);
                    echo "
                                     </span>

                                    </p>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 204
                echo "                                </div>
                            </div>
                            <div>";
                // line 206
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []), "html", null, true);
                echo " places / Reste : ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []) - twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", []))), "html", null, true);
                echo " places</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
            }
            // line 213
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "session/index.html.twig", 218)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "session/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 218,  565 => 214,  559 => 213,  547 => 206,  543 => 204,  530 => 199,  524 => 198,  520 => 197,  517 => 196,  513 => 195,  507 => 192,  491 => 179,  486 => 177,  480 => 174,  474 => 171,  470 => 170,  466 => 169,  462 => 168,  456 => 167,  446 => 164,  441 => 162,  435 => 158,  432 => 157,  428 => 156,  423 => 153,  417 => 152,  404 => 144,  399 => 141,  386 => 136,  380 => 135,  376 => 134,  373 => 133,  369 => 132,  363 => 129,  347 => 116,  342 => 114,  336 => 111,  330 => 108,  326 => 107,  322 => 106,  318 => 105,  312 => 104,  307 => 101,  301 => 100,  296 => 98,  291 => 95,  288 => 94,  284 => 92,  279 => 89,  273 => 88,  260 => 80,  255 => 77,  247 => 74,  242 => 73,  237 => 72,  232 => 71,  228 => 70,  222 => 69,  216 => 68,  212 => 67,  209 => 66,  205 => 65,  199 => 62,  183 => 49,  178 => 47,  172 => 44,  167 => 42,  163 => 41,  159 => 40,  155 => 39,  149 => 38,  144 => 35,  137 => 33,  132 => 31,  126 => 27,  124 => 26,  122 => 25,  118 => 24,  108 => 17,  104 => 16,  92 => 6,  83 => 5,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}

{% block body %}
<div class=\"container-fluid bg-black\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12\">



        <div class=\"row justify-content-center\">
            <h2 class=\"top\">MES SESSIONS</h2>
        </div>
        <div class=\"row justify-content-center bouton\">
                <a href=\"{{ path('admin_session_new') }}\">
                    <img class=\"img-class\" src=\"{{ asset('assets/images/glyph/ajoute-rond.png') }}\" style=\"margin-right:10px;\">
                    <button class=\"btn btn-secondary \" type=\"button\">Ajouter une nouvelle Session</button>
                </a>
        </div>
        <div class=\"row justify-content-content top\">
            <h2>- COURS -</h2>
        </div>
            {% for session in sessions | number('orderNumber') %}
        {#    -------------------------------------------------   COURS ---------------------------------------------------#}
            {% if session.formules == 'COURS' %}
            <div class=\"col-12 mt-1 text-black\">
                <div class=\"row justify-content-center rounded bg-secondary padding\">

                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">
                        <div class=\"text-light\">{{ session.orderNumber }}</div>
                        <div class=\"w-100\"></div>
                        {% if session.image != null %}<img class=\"img-fluid top\" src=\"{{ asset('uploads/images/' ~ session.image.pathImage) }}\">
                        {% endif %}
                    </div>
                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10\">
                        <div class=\"row\">
                            <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\"> / {{ session.formules }} / {{ session.disciplines }} /
                                <h3 class=\"categories\">{{ session.titreSession | upper }}</h3>
                                <div class=\"text-green\">Dates : {{ session.dateSession }}</div>
                                <div>Prix : {{ session.prix }}</div>
                                <div class=\"description\">{{ session.descriptionSession | raw }}</div>
                                <div class=\"row\">
                                    <a href=\"{{ path('admin_session_edit', { 'id': session.id }) }}\">
                                        <button type=\"submit\" class=\"btn bouton\">Modifier</button>
                                    </a>
                                    <form action=\"{{ path('admin_session_delete', { 'id': session.id }) }}\" method=\"post\">
                                      <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                      {{ form_widget(deleteForms[session.id]) }}
                                      <button type=\"submit\" class=\"btn btn-danger bouton\">
                                          Supprimer
                                      </button>
                                    </form>
                                </div>
                            </div>

                            <div class=\"col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <p>NOMBRE D'INSCRITS :
                                            <span class=\"nombreInscrits text-green\">
                                                <b>{{ session.inscriptionCollection.snapshot | length }}</b>
                                            </span>
                                        </p>
                                        {% for inscription in session.inscriptionCollection.snapshot %}
                                        <p class=\"bg-green\">
                                            <img src=\"{{ asset('assets/images/glyph/glyphicons-635-teenager.png') }}\">
                                        {{ inscription.prenom | title }} / <span class=\"age\">Age : {{ inscription.age }}
                                         / Tel : </span>{{ inscription.tel }}<span class=\"age\"> / email : {{ inscription.userId.email }}
                                           / Forfait : {% if inscription.forfait1h %}1h{% endif %}
                                        {% if inscription.forfait5h %}5h{% endif %}
                                        {% if inscription.forfait10h %}10h{% endif %}
                                        {% if inscription.forfaitAnnuel %}annuel{% endif %}
                                            </span>
                                        </p>
                                        {% endfor %}
                                    </div>
                                </div>
                                <div>
                                    {{ session.nbPlace }} places / Reste : {{ (session.nbPlace)-(session.inscriptionCollection.snapshot | length) }} places
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {% endif %}
            {% endfor %}
            <div class=\"row justify-content-center top\">
                <h2>- STAGES -</h2>
            </div>
            {% for session in sessions | number('orderNumber') %}
{#                ------------------------------------------------   STAGES --------------------------------------   #}
            {% if session.formules == 'STAGES' %}
            <div class=\"col-12 top\">
            <div class=\"row justify-content-center rounded grey padding\">
                <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">
                    <div>Ordre d'affichage : <span class=\"text-green\">{{ session.orderNumber }}</span></div>
                    <div class=\"w-100\"></div>
                    {% if session.image != null %}<img class=\"img-fluid top\" src=\"{{ asset('uploads/images/' ~ session.image.pathImage) }}\">{% endif %}
                </div>
                <div class=\"col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\"> / {{ session.formules }} / {{ session.disciplines }} /
                            <h3 class=\"categories\">{{ session.titreSession | upper }}</h3>
                            <div class=\"text-green\">Dates : {{ session.dateSession }}</div>
                            <div>Prix : {{ session.prix }}</div>
                            <div class=\"description\">{{ session.descriptionSession | raw }}</div>

                            <div class=\"row\">
                                <a href=\"{{ path('admin_session_edit', { 'id': session.id }) }}\">
                                    <button type=\"submit\" class=\"btn bouton\">Modifier</button>
                                </a>
                                <form action=\"{{ path('admin_session_delete', { 'id': session.id }) }}\" method=\"post\">
                                  <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                  {{ form_widget(deleteForms[session.id]) }}
                                  <button type=\"submit\" class=\"btn btn-danger bouton\">
                                      Supprimer
                                  </button>
                                </form>
                            </div>
                        </div>

                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <p>NOMBRE D'INSCRITS :
                                        <span class=\"nombreInscrits text-green\">
                                            <b>{{ session.inscriptionCollection.snapshot | length }}</b>
                                        </span>
                                    </p>
                                    {% for inscription in session.inscriptionCollection.snapshot %}
                                    <p class=\"bg-green\">
                                        <img src=\"{{ asset('assets/images/glyph/glyphicons-635-teenager.png') }}\">
                                    {{ inscription.prenom | title }} / <span class=\"age\">Age : {{ inscription.age }}
                                     / Tel : </span>{{ inscription.tel }}<span class=\"age\"> / email : {{ inscription.userId.email }}
                                       </span>

                                    </p>
                                    {% endfor %}
                                </div>
                        </div>
                        <div>
                            {{ session.nbPlace }} places / Reste : {{ (session.nbPlace)-(session.inscriptionCollection.snapshot | length) }} places
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        {% endif %}
        {% endfor %}
        <div class=\"row justify-content-center top\">
            <h2>- AUTRES ÉVÉNEMENTS -</h2>
        </div>
        {% for session in sessions | number('orderNumber') %}
        {% if (session.formules != \"COURS\") and (session.formules != \"STAGES\") %}
        <div class=\"col-12 top\">
        <div class=\"row justify-content-center rounded grey padding\">

            <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">
                <div>Ordre d'affichage : <span class=\"text-green\">{{ session.orderNumber }}</span></div>
                <div class=\"w-100\"></div>
                {% if session.image != null %}<img class=\"img-fluid top\" src=\"{{ asset('uploads/images/' ~ session.image.pathImage) }}\">{% endif %}</div>
                <div class=\"col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\"> / {{ session.formules }} / {{ session.disciplines }} /
                            <h3 class=\"categories\">{{ session.titreSession | upper }}</h3>
                            <div class=\"text-green\">Dates : {{ session.dateSession }}</div>
                            <div>Prix : {{ session.prix }}</div>
                            <div class=\"description\">{{ session.descriptionSession | raw }}</div>

                            <div class=\"row\">
                                <a href=\"{{ path('admin_session_edit', { 'id': session.id }) }}\">
                                    <button type=\"submit\" class=\"btn bouton\">Modifier</button>
                                </a>
                                <form action=\"{{ path('admin_session_delete', { 'id': session.id }) }}\" method=\"post\">
                                  <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                  {{ form_widget(deleteForms[session.id]) }}
                                  <button type=\"submit\" class=\"btn btn-danger bouton\">
                                      Supprimer
                                  </button>
                                </form>
                            </div>
                        </div>

                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <p>NOMBRE D'INSCRITS :
                                        <span class=\"nombreInscrits text-green\">
                                            <b>{{ session.inscriptionCollection.snapshot | length }}</b>
                                        </span>
                                    </p>
                                    {% for inscription in session.inscriptionCollection.snapshot %}
                                    <p class=\"bg-green\">
                                        <img src=\"{{ asset('assets/images/glyph/glyphicons-635-teenager.png') }}\">
                                    {{ inscription.prenom | title }} / <span class=\"age\">Age : {{ inscription.age }}
                                     / Tel : </span>{{ inscription.tel }}<span class=\"age\"> / email : {{ inscription.userId.email }}
                                     </span>

                                    </p>
                                    {% endfor %}
                                </div>
                            </div>
                            <div>{{ session.nbPlace }} places / Reste : {{ (session.nbPlace)-(session.inscriptionCollection.snapshot | length) }} places</span></div>
                        </div>
                    </div>
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
", "session/index.html.twig", "/Users/a.hilary/ProjetsWeb/bordza/app/Resources/views/session/index.html.twig");
    }
}
