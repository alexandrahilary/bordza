<?php

/* skateschool.html.twig */
class __TwigTemplate_7799ef417b7b162a50d30c50fefaa6a26816a369c307cd69479b1f6861b2908c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "skateschool.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "skateschool.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "skateschool.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_connexion($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $this->loadTemplate("connexion.html.twig", "skateschool.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("nav.html.twig", "skateschool.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"container-fluid\">
  <div id=\"carouselExampleIndicators\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
    </ol>
    <div class=\"carousel-inner\">
      <div class=\"carousel-item img-carousel active\" style=\"background-image:url('";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/skateschool/skatesurfcamp.png"), "html", null, true);
        echo "');\">
      </div>
      <div class=\"carousel-item img-carousel\" style=\"background-image:url('";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/skateschool/marrade-skateboard.png"), "html", null, true);
        echo "');\">
      </div>
      <div class=\"carousel-item img-carousel\" style=\"background-image:url('";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/skateschool/depart-course.png"), "html", null, true);
        echo "');\">
      </div>
      <div class=\"carousel-item img-carousel\" style=\"background-image:url('";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/skateschool/course-skateboard.png"), "html", null, true);
        echo "');\">
      </div>
      <div class=\"carousel-item img-carousel\" style=\"background-image:url('";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/skateschool/rigalet.png"), "html", null, true);
        echo "');\">
      </div>
      
    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
</div>
<div class=\"container-fluid bottom\">
  <div class=\"row justify-content-center top bottom\">
    <div class=\"col-11 col-sm-10 col-md-10 col-lg-6 col-xl-6 text-center\">
      <p ><h4 class=\"categories\">La Bordzkool et ses cours \" À la carte \"</h4></p>
      <p class=\" top\">Dans le but de partager notre passion dévorante pour la planche à roulette, 
      la Bordzkool propose différentes formules d'enseignements. Nous dispensons des cours de skateboard et de longboard
       toute l'année pour lesquels il est possible de s'y inscrire \" à la carte \" : à l'année, à l'heure, 
       forfaits de 5H et 10H.</p>
      <p>Les cours annuels sont organisés principalement sur 3 skateparks autour de Bordeaux : Darwin, Lormont et Saint-André-de-Cubzac.
      Nous proposons également et de façon régulière des \"stages\" de découverte ou de perfectionnement sur les skateparks de la région.
      Retrouvez ici tous les créneaux disponibles et les stages proposés que vous pouvez réserver en ligne directement. <p>
        <div class=\"w-100\"></div>
      <p class=\"\">Tous nos cours sont encadrés par Éric, moniteur diplômé qui s'attache à respecter le rythme de chacun
      et qui aime transmettre ses valeurs : savoir s'amuser et progresser en respectant \" le code des skateurs \" :) .</p>
      
        <div class=\"w-100\"></div>
        <hr class=\"top\">
    </div>
  </div> 
  
  <div class=\"row justify-content-center top bottom\">  
    <div class=\"col-11 col-sm-10 col-md-6 col-lg-6 col-xl-6 text-center\">   
      <p><b><h3 class=\"categories\">LES COURS BORDZA</h3></b></p>
        <div class=\"row justify-content-center top\">
          ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['AppBundle\Twig\AppExtension']->orderByNumber((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new Twig_Error_Runtime('Variable "sessions" does not exist.', 64, $this->source); })()), "orderNumber"));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 65
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) == "COURS")) {
                // line 66
                echo "             
                <div class=\"rounded black padding  col-11 col-sm-11 col-md-11 col-lg-5 col-xl-5\">
                  <div><b>- ";
                // line 68
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "disciplines", [])), "html", null, true);
                echo " -</b></div>
                  <div class=\"w-100\"></div>
                  <div class=\"Titillium\"> ";
                // line 70
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "titreSession", [])), "html", null, true);
                echo " </div>
                  <div class=\"w-100\"></div>
                  <div class=\"text-green\">";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", []), "html", null, true);
                echo "</div>
                  <div class=\"w-100\"></div>
                  <hr class=\"top\">
                  <div>Groupe de ";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []), "html", null, true);
                echo " élèves.</div>
                  <span class=\"nombrePlacesRestantes text-green\">
                  ";
                // line 77
                if ((twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []) == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", [])))) {
                    echo "<i> [ COMPLET ]</i>
                  ";
                } else {
                    // line 78
                    echo "<i> [ Il reste de la place ] </i>";
                }
                // line 79
                echo "                  </span>
                  
                  <div class=\"w-100\"></div>
                  <p>";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["session"], "descriptionSession", []);
                echo "</p>
                  <div class=\"w-100\"></div>
                  <p class=\"top\"><i>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "prix", []), "html", null, true);
                echo "</i></p>
                </div>
            ";
            }
            // line 87
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "          <div class=\"w-100\"></div>
          <hr class=\"top\">
        </div>
    </div>      
  </div> 
  <div class=\"row justify-content-center top bottom\">  
    <div class=\"col-11 col-sm-10 col-md-6 col-lg-6 col-xl-6 text-center\">
      <p><b><h3 class=\"categories\">- NOS TARIFS -</h3></b></p>
      ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tarifs"]) || array_key_exists("tarifs", $context) ? $context["tarifs"] : (function () { throw new Twig_Error_Runtime('Variable "tarifs" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tarif"]) {
            // line 97
            echo "      <p class=\"text text-green\">1 H : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "uneHeure", []), "html", null, true);
            echo " €</p>
      <p class=\"text text-green\">5 H : ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "cinqHeures", []), "html", null, true);
            echo " €</p>
      <p class=\"text text-green\">10 H : ";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "dixHeures", []), "html", null, true);
            echo " €</p>
      <p class=\"text text-green\">forfait au trimestre : ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "trimestre", []), "html", null, true);
            echo " €</p>
      <p class=\"text text-green\">forfait à l'année : ";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "annee", []), "html", null, true);
            echo " €</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "    </div> 
  </div> 
</div>
<div class=\"container-fluid bottom\">
  <div class=\"row justify-content-center\">
    <a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">
      <button class=\"btn btn-secondary bottom\" type=\"submit\">M'INSCRIRE</button>
    </a>
  </div>
</div>
  <hr class=\"top\">

<div class=\"container-fluid bottom\">
  <div class=\"row justify-content-center top bottom\">
    <div class=\"col-11\">
      <div class=\"text-center bottom\">
        <p class=\"text-green col-12 bottom\"><b><h3 class=\"categories\">- LES STAGES BORDZA -</h3></b>
      </div>
      ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['AppBundle\Twig\AppExtension']->orderByNumber((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new Twig_Error_Runtime('Variable "sessions" does not exist.', 121, $this->source); })()), "orderNumber"));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 122
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) == "STAGES")) {
                // line 123
                echo "        
            <div class=\"row rounded black top padding justify-content-start\">
              <div class=\"titre-stage Titillium\">- ";
                // line 125
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "titreSession", [])), "html", null, true);
                echo " -</div>
              <div class=\"w-100\"></div>
              <div class=\"col-11 col-sm-11 col-md-11 col-lg-5 col-xl-5\">
                <img class=\"img-fluid col-12\" src =\"";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "pathImage", []))), "html", null, true);
                echo "\" 
                alt=\"";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "alt", []), "html", null, true);
                echo "\">
              </div>
              <div class=\"col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6\">
                <div class=\"text text-green\"><i>STAGE DE ";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "disciplines", []), "html", null, true);
                echo "</i></div>
                <div class=\"text\">Dates : ";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", []), "html", null, true);
                echo "</div>
                <div class=\"text\">Nombre d'élève maximum : ";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []), "html", null, true);
                echo "
                  <span class=\"nombrePlacesRestantes text-green\">
                  ";
                // line 136
                if ((twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []) == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", [])))) {
                    echo "<i> [ COMPLET ]</i>
                  ";
                } else {
                    // line 137
                    echo "<i> [ Il reste de la place ] </i>";
                }
                // line 138
                echo "                  </span>
                </div>
                <div class=\"text\">";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["session"], "descriptionSession", []);
                echo "</div>
                <div class=\"text text-green\">Prix du stage : ";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "prix", []), "html", null, true);
                echo "</div>
              </div>
            </div>
      ";
            }
            // line 145
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "    </div>
  </div>
</div>
<div class=\"container-fluid bottom\">
  <div class=\"row justify-content-center\">
    <a href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">
      <button class=\"btn btn-secondary\" type=\"submit\">M'INSCRIRE</button>
    </a>
  </div>
</div>
  <hr>

<div class=\"container-fluid bottom\">
  <div class=\"row justify-content-center top bottom\">
    <div class=\"col-11\">
      <div class=\"text-center bottom\">
        <p class=\"text-green col-12 bottom\"><b><h3 class=\"categories\">- LES ÉVÉNEMENTS BORDZA -</h3></b>
      </div>
  
  ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['AppBundle\Twig\AppExtension']->orderByNumber((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new Twig_Error_Runtime('Variable "sessions" does not exist.', 165, $this->source); })()), "orderNumber"));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 166
            echo "      ";
            if (((twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) != "COURS") && (twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) != "STAGES"))) {
                // line 167
                echo "        ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["session"]), "html", null, true);
                echo "
            <div class=\"row rounded black top padding justify-content-start\">
              <div class=\"titre-stage Titillium\">- ";
                // line 169
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "titreSession", [])), "html", null, true);
                echo " -</div>
              <div class=\"w-100\"></div>
                <div class=\"col-11 col-sm-11 col-md-11 col-lg-5 col-xl-5\">
                  <img class=\"img-fluid col-12\" src =\"";
                // line 172
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "pathImage", []))), "html", null, true);
                echo "\"
                   alt=\"";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "alt", []), "html", null, true);
                echo "\">
                </div>
                <div class=\"col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6\">
                  <div class=\"text text-green\"><i>";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "disciplines", []), "html", null, true);
                echo "</i></div>
                  <div class=\"text\">Dates de la Session : ";
                // line 177
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", []), "html", null, true);
                echo "</div>
                  <div class=\"text\">Nombre d'élève maximum : ";
                // line 178
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []), "html", null, true);
                echo "
                    <span class=\"nombrePlacesRestantes text-green\">
                    ";
                // line 180
                if ((twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []) == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", [])))) {
                    echo "<i> [ COMPLET ]</i>
                    ";
                } else {
                    // line 181
                    echo "<i> [ Il reste de la place ] </i>";
                }
                // line 182
                echo "                    </span>
                  </div>
                  <div class=\"text\">";
                // line 184
                echo twig_get_attribute($this->env, $this->source, $context["session"], "descriptionSession", []);
                echo "</div>
                  <div class=\"text text-green\">Prix de la session : ";
                // line 185
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "prix", []), "html", null, true);
                echo "</div>
                </div>
              </div>
      ";
            }
            // line 189
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "    </div>
  </div>
</div>
<div class=\"container-fluid bottom\">
  <div class=\"row justify-content-center\">
    <a href=\"";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">
      <button class=\"btn btn-secondary\" type=\"submit\">M'INSCRIRE</button>
    </a>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 201
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "skateschool.html.twig", 201)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "skateschool.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 201,  460 => 195,  453 => 190,  447 => 189,  440 => 185,  436 => 184,  432 => 182,  429 => 181,  424 => 180,  419 => 178,  415 => 177,  411 => 176,  405 => 173,  401 => 172,  395 => 169,  389 => 167,  386 => 166,  382 => 165,  365 => 151,  358 => 146,  352 => 145,  345 => 141,  341 => 140,  337 => 138,  334 => 137,  329 => 136,  324 => 134,  320 => 133,  316 => 132,  310 => 129,  306 => 128,  300 => 125,  296 => 123,  293 => 122,  289 => 121,  273 => 108,  266 => 103,  258 => 101,  254 => 100,  250 => 99,  246 => 98,  241 => 97,  237 => 96,  227 => 88,  221 => 87,  215 => 84,  210 => 82,  205 => 79,  202 => 78,  197 => 77,  192 => 75,  186 => 72,  181 => 70,  176 => 68,  172 => 66,  169 => 65,  165 => 64,  124 => 26,  119 => 24,  114 => 22,  109 => 20,  104 => 18,  92 => 8,  83 => 7,  65 => 4,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}


{% block body %}
<div class=\"container-fluid\">
  <div id=\"carouselExampleIndicators\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
    </ol>
    <div class=\"carousel-inner\">
      <div class=\"carousel-item img-carousel active\" style=\"background-image:url('{{ asset('assets/images/skateschool/skatesurfcamp.png')}}');\">
      </div>
      <div class=\"carousel-item img-carousel\" style=\"background-image:url('{{ asset('assets/images/skateschool/marrade-skateboard.png')}}');\">
      </div>
      <div class=\"carousel-item img-carousel\" style=\"background-image:url('{{ asset('assets/images/skateschool/depart-course.png')}}');\">
      </div>
      <div class=\"carousel-item img-carousel\" style=\"background-image:url('{{ asset('assets/images/skateschool/course-skateboard.png')}}');\">
      </div>
      <div class=\"carousel-item img-carousel\" style=\"background-image:url('{{ asset('assets/images/skateschool/rigalet.png')}}');\">
      </div>
      
    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
</div>
<div class=\"container-fluid bottom\">
  <div class=\"row justify-content-center top bottom\">
    <div class=\"col-11 col-sm-10 col-md-10 col-lg-6 col-xl-6 text-center\">
      <p ><h4 class=\"categories\">La Bordzkool et ses cours \" À la carte \"</h4></p>
      <p class=\" top\">Dans le but de partager notre passion dévorante pour la planche à roulette, 
      la Bordzkool propose différentes formules d'enseignements. Nous dispensons des cours de skateboard et de longboard
       toute l'année pour lesquels il est possible de s'y inscrire \" à la carte \" : à l'année, à l'heure, 
       forfaits de 5H et 10H.</p>
      <p>Les cours annuels sont organisés principalement sur 3 skateparks autour de Bordeaux : Darwin, Lormont et Saint-André-de-Cubzac.
      Nous proposons également et de façon régulière des \"stages\" de découverte ou de perfectionnement sur les skateparks de la région.
      Retrouvez ici tous les créneaux disponibles et les stages proposés que vous pouvez réserver en ligne directement. <p>
        <div class=\"w-100\"></div>
      <p class=\"\">Tous nos cours sont encadrés par Éric, moniteur diplômé qui s'attache à respecter le rythme de chacun
      et qui aime transmettre ses valeurs : savoir s'amuser et progresser en respectant \" le code des skateurs \" :) .</p>
      
        <div class=\"w-100\"></div>
        <hr class=\"top\">
    </div>
  </div> 
  
  <div class=\"row justify-content-center top bottom\">  
    <div class=\"col-11 col-sm-10 col-md-6 col-lg-6 col-xl-6 text-center\">   
      <p><b><h3 class=\"categories\">LES COURS BORDZA</h3></b></p>
        <div class=\"row justify-content-center top\">
          {% for session in sessions | number('orderNumber') %}
            {% if session.formules == \"COURS\" %}
             
                <div class=\"rounded black padding  col-11 col-sm-11 col-md-11 col-lg-5 col-xl-5\">
                  <div><b>- {{ session.disciplines | upper }} -</b></div>
                  <div class=\"w-100\"></div>
                  <div class=\"Titillium\"> {{ session.titreSession | upper }} </div>
                  <div class=\"w-100\"></div>
                  <div class=\"text-green\">{{ session.dateSession }}</div>
                  <div class=\"w-100\"></div>
                  <hr class=\"top\">
                  <div>Groupe de {{ session.nbPlace }} élèves.</div>
                  <span class=\"nombrePlacesRestantes text-green\">
                  {% if (session.nbPlace)==(session.inscriptionCollection.snapshot | length) %}<i> [ COMPLET ]</i>
                  {% else %}<i> [ Il reste de la place ] </i>{% endif %}
                  </span>
                  
                  <div class=\"w-100\"></div>
                  <p>{{ session.descriptionSession | raw }}</p>
                  <div class=\"w-100\"></div>
                  <p class=\"top\"><i>{{ session.prix }}</i></p>
                </div>
            {% endif %}
          {% endfor %}
          <div class=\"w-100\"></div>
          <hr class=\"top\">
        </div>
    </div>      
  </div> 
  <div class=\"row justify-content-center top bottom\">  
    <div class=\"col-11 col-sm-10 col-md-6 col-lg-6 col-xl-6 text-center\">
      <p><b><h3 class=\"categories\">- NOS TARIFS -</h3></b></p>
      {% for tarif in tarifs %}
      <p class=\"text text-green\">1 H : {{ tarif.uneHeure }} €</p>
      <p class=\"text text-green\">5 H : {{ tarif.cinqHeures }} €</p>
      <p class=\"text text-green\">10 H : {{ tarif.dixHeures }} €</p>
      <p class=\"text text-green\">forfait au trimestre : {{ tarif.trimestre }} €</p>
      <p class=\"text text-green\">forfait à l'année : {{ tarif.annee }} €</p>
      {% endfor %}
    </div> 
  </div> 
</div>
<div class=\"container-fluid bottom\">
  <div class=\"row justify-content-center\">
    <a href=\"{{ path('inscription') }}\">
      <button class=\"btn btn-secondary bottom\" type=\"submit\">M'INSCRIRE</button>
    </a>
  </div>
</div>
  <hr class=\"top\">

<div class=\"container-fluid bottom\">
  <div class=\"row justify-content-center top bottom\">
    <div class=\"col-11\">
      <div class=\"text-center bottom\">
        <p class=\"text-green col-12 bottom\"><b><h3 class=\"categories\">- LES STAGES BORDZA -</h3></b>
      </div>
      {% for session in sessions | number('orderNumber') %}
        {% if session.formules == \"STAGES\" %}
        
            <div class=\"row rounded black top padding justify-content-start\">
              <div class=\"titre-stage Titillium\">- {{ session.titreSession | upper }} -</div>
              <div class=\"w-100\"></div>
              <div class=\"col-11 col-sm-11 col-md-11 col-lg-5 col-xl-5\">
                <img class=\"img-fluid col-12\" src =\"{{ asset('uploads/images/' ~ session.image.pathImage)}}\" 
                alt=\"{{ session.image.alt }}\">
              </div>
              <div class=\"col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6\">
                <div class=\"text text-green\"><i>STAGE DE {{ session.disciplines }}</i></div>
                <div class=\"text\">Dates : {{ session.dateSession }}</div>
                <div class=\"text\">Nombre d'élève maximum : {{ session.nbPlace }}
                  <span class=\"nombrePlacesRestantes text-green\">
                  {% if (session.nbPlace)==(session.inscriptionCollection.snapshot | length) %}<i> [ COMPLET ]</i>
                  {% else %}<i> [ Il reste de la place ] </i>{% endif %}
                  </span>
                </div>
                <div class=\"text\">{{ session.descriptionSession | raw }}</div>
                <div class=\"text text-green\">Prix du stage : {{ session.prix }}</div>
              </div>
            </div>
      {% endif %}
  {% endfor %}
    </div>
  </div>
</div>
<div class=\"container-fluid bottom\">
  <div class=\"row justify-content-center\">
    <a href=\"{{ path('inscription') }}\">
      <button class=\"btn btn-secondary\" type=\"submit\">M'INSCRIRE</button>
    </a>
  </div>
</div>
  <hr>

<div class=\"container-fluid bottom\">
  <div class=\"row justify-content-center top bottom\">
    <div class=\"col-11\">
      <div class=\"text-center bottom\">
        <p class=\"text-green col-12 bottom\"><b><h3 class=\"categories\">- LES ÉVÉNEMENTS BORDZA -</h3></b>
      </div>
  
  {% for session in sessions | number('orderNumber')  %}
      {% if (session.formules != \"COURS\") and (session.formules != \"STAGES\") %}
        {{ session | length }}
            <div class=\"row rounded black top padding justify-content-start\">
              <div class=\"titre-stage Titillium\">- {{ session.titreSession | upper }} -</div>
              <div class=\"w-100\"></div>
                <div class=\"col-11 col-sm-11 col-md-11 col-lg-5 col-xl-5\">
                  <img class=\"img-fluid col-12\" src =\"{{ asset('uploads/images/' ~ session.image.pathImage)}}\"
                   alt=\"{{ session.image.alt }}\">
                </div>
                <div class=\"col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6\">
                  <div class=\"text text-green\"><i>{{ session.disciplines }}</i></div>
                  <div class=\"text\">Dates de la Session : {{ session.dateSession }}</div>
                  <div class=\"text\">Nombre d'élève maximum : {{ session.nbPlace }}
                    <span class=\"nombrePlacesRestantes text-green\">
                    {% if (session.nbPlace)==(session.inscriptionCollection.snapshot | length) %}<i> [ COMPLET ]</i>
                    {% else %}<i> [ Il reste de la place ] </i>{% endif %}
                    </span>
                  </div>
                  <div class=\"text\">{{ session.descriptionSession | raw }}</div>
                  <div class=\"text text-green\">Prix de la session : {{ session.prix }}</div>
                </div>
              </div>
      {% endif %}
  {% endfor %}
    </div>
  </div>
</div>
<div class=\"container-fluid bottom\">
  <div class=\"row justify-content-center\">
    <a href=\"{{ path('inscription') }}\">
      <button class=\"btn btn-secondary\" type=\"submit\">M'INSCRIRE</button>
    </a>
  </div>
</div>
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "skateschool.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/skateschool.html.twig");
    }
}
