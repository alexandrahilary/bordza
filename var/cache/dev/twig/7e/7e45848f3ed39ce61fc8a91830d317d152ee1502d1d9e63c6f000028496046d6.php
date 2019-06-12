<?php

/* session/index.html.twig */
class __TwigTemplate_ff601751ff2d25c6493426d3f17a335185f91e148408f365706719e1d5f176bb extends Twig_Template
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
        echo "<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <h2 class=\"top\">MES SESSIONS</h2>
    </div>
    <div class=\"row justify-content-center bouton\">
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_new");
        echo "\">
                <img class=\"img-class\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/ajoute-rond.png"), "html", null, true);
        echo "\" style=\"margin-right:10px;\">
                <button class=\"btn btn-secondary \" type=\"button\">Ajouter une nouvelle Session</button>
            </a>
    </div> 
    <div class=\"row justify-content-center top\"> 
        <h2>- COURS -</h2>
    </div>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['AppBundle\Twig\AppExtension']->orderByNumber((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new Twig_Error_Runtime('Variable "sessions" does not exist.', 19, $this->source); })()), "orderNumber"));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 20
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) == "COURS")) {
                // line 21
                echo "        <div class=\"col-12 top\">
        <div class=\"row justify-content-center rounded grey padding\">
                
            <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">
                <div>Ordre d'affichage : <span class=\"text-green\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "orderNumber", []), "html", null, true);
                echo "</span></div>
                <div class=\"w-100\"></div>
                ";
                // line 27
                if ((twig_get_attribute($this->env, $this->source, $context["session"], "image", []) != null)) {
                    echo "<img class=\"img-fluid top\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "pathImage", []))), "html", null, true);
                    echo "\">";
                }
                echo "</div>
                <div class=\"col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\"> / ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "formules", []), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "disciplines", []), "html", null, true);
                echo " / 
                            <h3 class=\"categories\">";
                // line 31
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "titreSession", [])), "html", null, true);
                echo "</h3>
                            <div class=\"text-green\">Dates : ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", []), "html", null, true);
                echo "</div>
                            <div>Prix : ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "prix", []), "html", null, true);
                echo "</div>
                            <div class=\"description\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["session"], "descriptionSession", []);
                echo "</div>
                            
                            <div class=\"row\">
                                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [])]), "html", null, true);
                echo "\">
                                    <button type=\"submit\" class=\"btn bouton\">Modifier</button>
                                </a>
                                <form action=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [])]), "html", null, true);
                echo "\" method=\"post\">
                                  <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                  ";
                // line 42
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 42, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["session"], "id", []), [], "array"), 'widget');
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
                // line 56
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", [])), "html", null, true);
                echo "</b>
                                        </span>
                                    </p>
                                    ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", []));
                foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
                    echo " 
                                    <p class=\"bg-green\">
                                        <img src=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/glyphicons-635-teenager.png"), "html", null, true);
                    echo "\">
                                    ";
                    // line 62
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "prenom", [])), "html", null, true);
                    echo " / <span class=\"age\">Age : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "age", []), "html", null, true);
                    echo "
                                     / Tel : </span>";
                    // line 63
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "tel", []), "html", null, true);
                    echo "<span class=\"age\"> / email : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "userId", []), "email", []), "html", null, true);
                    echo " 
                                       / Forfait : ";
                    // line 64
                    if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfait1h", [])) {
                        echo "1h";
                    }
                    echo " 
                                    ";
                    // line 65
                    if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfait5h", [])) {
                        echo "5h";
                    }
                    // line 66
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfait10h", [])) {
                        echo "10h";
                    }
                    // line 67
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["inscription"], "forfaitAnnuel", [])) {
                        echo "annuel";
                    }
                    // line 68
                    echo "                                        </span>
                                        
                                    </p>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                                </div>
                                
                            </div>
                            <div>";
                // line 75
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
            // line 81
            echo "       
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        <div class=\"row justify-content-center top\">
            <h2>- STAGES -</h2>
        </div>
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['AppBundle\Twig\AppExtension']->orderByNumber((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new Twig_Error_Runtime('Variable "sessions" does not exist.', 86, $this->source); })()), "orderNumber"));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 87
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) == "STAGES")) {
                // line 88
                echo "        <div class=\"col-12 top\">
        <div class=\"row justify-content-center rounded grey padding\">
                
            <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">
                <div>Ordre d'affichage : <span class=\"text-green\">";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "orderNumber", []), "html", null, true);
                echo "</span></div>
                <div class=\"w-100\"></div>
                ";
                // line 94
                if ((twig_get_attribute($this->env, $this->source, $context["session"], "image", []) != null)) {
                    echo "<img class=\"img-fluid top\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "pathImage", []))), "html", null, true);
                    echo "\">";
                }
                echo "</div>
                <div class=\"col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\"> / ";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "formules", []), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "disciplines", []), "html", null, true);
                echo " / 
                            <h3 class=\"categories\">";
                // line 98
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "titreSession", [])), "html", null, true);
                echo "</h3>
                            <div class=\"text-green\">Dates : ";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", []), "html", null, true);
                echo "</div>
                            <div>Prix : ";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "prix", []), "html", null, true);
                echo "</div>
                            <div class=\"description\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["session"], "descriptionSession", []);
                echo "</div>
                            
                            <div class=\"row\">
                                <a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [])]), "html", null, true);
                echo "\">
                                    <button type=\"submit\" class=\"btn bouton\">Modifier</button>
                                </a>
                                <form action=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [])]), "html", null, true);
                echo "\" method=\"post\">
                                  <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                  ";
                // line 109
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 109, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["session"], "id", []), [], "array"), 'widget');
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
                // line 123
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", [])), "html", null, true);
                echo "</b>
                                        </span>
                                    </p>
                                    ";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", []));
                foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
                    echo " 
                                    <p class=\"bg-green\">
                                        <img src=\"";
                    // line 128
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/glyphicons-635-teenager.png"), "html", null, true);
                    echo "\">
                                    ";
                    // line 129
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "prenom", [])), "html", null, true);
                    echo " / <span class=\"age\">Age : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "age", []), "html", null, true);
                    echo "
                                     / Tel : </span>";
                    // line 130
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
                // line 135
                echo "                                </div>
                                
                            </div>
                            <div>";
                // line 138
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
            // line 144
            echo "       
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "        <div class=\"row justify-content-center top\">
            <h2>- AUTRES ÉVÉNEMENTS -</h2>
        </div>
        ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['AppBundle\Twig\AppExtension']->orderByNumber((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new Twig_Error_Runtime('Variable "sessions" does not exist.', 149, $this->source); })()), "orderNumber"));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 150
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) != "COURS") && (twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) != "STAGES"))) {
                // line 151
                echo "        <div class=\"col-12 top\">
        <div class=\"row justify-content-center rounded grey padding\">
                
            <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">
                <div>Ordre d'affichage : <span class=\"text-green\">";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "orderNumber", []), "html", null, true);
                echo "</span></div>
                <div class=\"w-100\"></div>
                ";
                // line 157
                if ((twig_get_attribute($this->env, $this->source, $context["session"], "image", []) != null)) {
                    echo "<img class=\"img-fluid top\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "pathImage", []))), "html", null, true);
                    echo "\">";
                }
                echo "</div>
                <div class=\"col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\"> / ";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "formules", []), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "disciplines", []), "html", null, true);
                echo " / 
                            <h3 class=\"categories\">";
                // line 161
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "titreSession", [])), "html", null, true);
                echo "</h3>
                            <div class=\"text-green\">Dates : ";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", []), "html", null, true);
                echo "</div>
                            <div>Prix : ";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "prix", []), "html", null, true);
                echo "</div>
                            <div class=\"description\">";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["session"], "descriptionSession", []);
                echo "</div>
                            
                            <div class=\"row\">
                                <a href=\"";
                // line 167
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [])]), "html", null, true);
                echo "\">
                                    <button type=\"submit\" class=\"btn bouton\">Modifier</button>
                                </a>
                                <form action=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [])]), "html", null, true);
                echo "\" method=\"post\">
                                  <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                  ";
                // line 172
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForms" does not exist.', 172, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["session"], "id", []), [], "array"), 'widget');
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
                // line 186
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", [])), "html", null, true);
                echo "</b>
                                        </span>
                                    </p>
                                    ";
                // line 189
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", []));
                foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
                    echo " 
                                    <p class=\"bg-green\">
                                        <img src=\"";
                    // line 191
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/glyph/glyphicons-635-teenager.png"), "html", null, true);
                    echo "\">
                                    ";
                    // line 192
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "prenom", [])), "html", null, true);
                    echo " / <span class=\"age\">Age : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "age", []), "html", null, true);
                    echo "
                                     / Tel : </span>";
                    // line 193
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
                // line 198
                echo "                                </div>
                                
                            </div>
                            <div>";
                // line 201
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
            // line 207
            echo "       
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "</div>   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 211
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "session/index.html.twig", 211)->display($context);
        
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
        return array (  576 => 211,  565 => 209,  558 => 207,  546 => 201,  541 => 198,  528 => 193,  522 => 192,  518 => 191,  511 => 189,  505 => 186,  488 => 172,  483 => 170,  477 => 167,  471 => 164,  467 => 163,  463 => 162,  459 => 161,  453 => 160,  443 => 157,  438 => 155,  432 => 151,  429 => 150,  425 => 149,  420 => 146,  413 => 144,  401 => 138,  396 => 135,  383 => 130,  377 => 129,  373 => 128,  366 => 126,  360 => 123,  343 => 109,  338 => 107,  332 => 104,  326 => 101,  322 => 100,  318 => 99,  314 => 98,  308 => 97,  298 => 94,  293 => 92,  287 => 88,  284 => 87,  280 => 86,  275 => 83,  268 => 81,  256 => 75,  251 => 72,  242 => 68,  237 => 67,  232 => 66,  228 => 65,  222 => 64,  216 => 63,  210 => 62,  206 => 61,  199 => 59,  193 => 56,  176 => 42,  171 => 40,  165 => 37,  159 => 34,  155 => 33,  151 => 32,  147 => 31,  141 => 30,  131 => 27,  126 => 25,  120 => 21,  117 => 20,  113 => 19,  103 => 12,  99 => 11,  92 => 6,  83 => 5,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <h2 class=\"top\">MES SESSIONS</h2>
    </div>
    <div class=\"row justify-content-center bouton\">
            <a href=\"{{ path('admin_session_new') }}\">
                <img class=\"img-class\" src=\"{{ asset('assets/images/glyph/ajoute-rond.png') }}\" style=\"margin-right:10px;\">
                <button class=\"btn btn-secondary \" type=\"button\">Ajouter une nouvelle Session</button>
            </a>
    </div> 
    <div class=\"row justify-content-center top\"> 
        <h2>- COURS -</h2>
    </div>
        {% for session in sessions | number('orderNumber') %}
        {% if session.formules == 'COURS' %}
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
                                       / Forfait : {% if inscription.forfait1h %}1h{% endif %} 
                                    {% if inscription.forfait5h %}5h{% endif %}
                                    {% if inscription.forfait10h %}10h{% endif %}
                                    {% if inscription.forfaitAnnuel %}annuel{% endif %}
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
        <div class=\"row justify-content-center top\">
            <h2>- STAGES -</h2>
        </div>
        {% for session in sessions | number('orderNumber') %}
        {% if session.formules == 'STAGES' %}
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
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}
", "session/index.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/session/index.html.twig");
    }
}
