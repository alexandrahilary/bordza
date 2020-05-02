<?php

/* skateschool.html.twig */
class __TwigTemplate_1ce54aa45c601dc78c1fd8745fc27aaefb71787e853432229ae8dbc676371d92 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "skateschool.html.twig", 1);
        $this->blocks = [
            'metadescription' => [$this, 'block_metadescription'],
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

    // line 2
    public function block_metadescription($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metadescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metadescription"));

        echo "<meta name=\"Description\" content=\"Bordza, école de skate et de longboard à Bordeaux et dans la région, réservez vos cours en ligne.\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_connexion($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $this->loadTemplate("connexion.html.twig", "skateschool.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("nav.html.twig", "skateschool.html.twig", 5)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
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
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/skateschool/skatesurfcamp.png"), "html", null, true);
        echo "');\">
      </div>
      <div class=\"carousel-item img-carousel\" style=\"background-image:url('";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/skateschool/marrade-skateboard.png"), "html", null, true);
        echo "');\">
      </div>
      <div class=\"carousel-item img-carousel\" style=\"background-image:url('";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/skateschool/depart-course.png"), "html", null, true);
        echo "');\">
      </div>
      <div class=\"carousel-item img-carousel\" style=\"background-image:url('";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/skateschool/course-skateboard.png"), "html", null, true);
        echo "');\">
      </div>
      <div class=\"carousel-item img-carousel\" style=\"background-image:url('";
        // line 27
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
<div class=\"container-fluid\">
  <div class=\"col-12\">
  <div class=\"row justify-content-center\">
    <div class=\"col-11 col-sm-8 col-md-8 col-lg-8 col-xl-8 text-center p-5\">
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
        <hr class=\"mt-5\">
    </div>
    <div class=\"col-11 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center align-items-center justify-content-center bg-black row\">
      <div class=\"\">
          <p><b><h3 class=\"categories\">- NOS TARIFS -</h3></b></p>
          ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tarifs"]) || array_key_exists("tarifs", $context) ? $context["tarifs"] : (function () { throw new Twig_Error_Runtime('Variable "tarifs" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tarif"]) {
            // line 64
            echo "            <p class=\"text text-green\">1 H : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "uneHeure", []), "html", null, true);
            echo " €</p>
            <p class=\"text text-green\">5 H : ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "cinqHeures", []), "html", null, true);
            echo " €</p>
            <p class=\"text text-green\">10 H : ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "dixHeures", []), "html", null, true);
            echo " €</p>
            <p class=\"text text-green\">forfait au trimestre : ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "trimestre", []), "html", null, true);
            echo " €</p>
            <p class=\"text text-green\">forfait à l'année : ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "annee", []), "html", null, true);
            echo " €</p>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "      </div>
    </div>
  </div>
  </div>


";
        // line 77
        echo "<div class=\"col-12\">
  <div class=\"row justify-content-center bg-green-no-marging\">
    <div class=\"col-11 col-sm-10 col-md-6 col-lg-6 col-xl-6 text-center\">   
      <p><b><h3 class=\"categories\">- LES COURS -</h3></b></p>
        <div class=\"row justify-content-center top\">
          ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['AppBundle\Twig\AppExtension']->orderByNumber((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new Twig_Error_Runtime('Variable "sessions" does not exist.', 82, $this->source); })()), "orderNumber"));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 83
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) == "COURS")) {
                // line 84
                echo "             
                <div class=\"rounded black padding  col-11 col-sm-11 col-md-11 col-lg-5 col-xl-5\">
                  <div class=\"mt-3\"><b>- ";
                // line 86
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "disciplines", [])), "html", null, true);
                echo " -</b></div>
                  <div class=\"w-100\"></div>
                  <div class=\"Titillium\"> ";
                // line 88
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "titreSession", [])), "html", null, true);
                echo " </div>
                  <div class=\"w-100\"></div>
                  <div class=\"text-green\">";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", []), "html", null, true);
                echo "</div>
                  <div class=\"w-100\"></div>
                  <hr class=\"top\">
                  <div>Groupe de ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []), "html", null, true);
                echo " élèves.</div>
                  <span class=\"nombrePlacesRestantes text-green\">
                  ";
                // line 95
                if ((twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []) == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", [])))) {
                    echo "<i> [ COMPLET ]</i>
                  ";
                } else {
                    // line 96
                    echo "<i> [ Il reste de la place ] </i>";
                }
                // line 97
                echo "                  </span>
                  
                  <div class=\"w-100\"></div>
                  <p>";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["session"], "descriptionSession", []);
                echo "</p>
                  <div class=\"w-100\"></div>
                  <p class=\"top\"><i>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "prix", []), "html", null, true);
                echo "</i></p>
                </div>
            ";
            }
            // line 105
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "          <div class=\"w-100\"></div>
        </div>
    </div>
    <div class=\"container-fluid bottom top\">
      <div class=\"row justify-content-center\">
        <a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">
          <button class=\"btn btn-secondary bottom\" type=\"submit\">JE M'INSCRIS</button>
        </a>
      </div>
    </div>
  </div>
  </div>
</div>





  ";
        // line 126
        echo "<div id=\"stages\" class=\"container-fluid bottom bg-light\">
  <div class=\"row justify-content-center bottom\">
    <div class=\"col-12\">
      <div class=\"text-center top\">
        <p class=\"text-green col-12\"><b><h2 class=\"categories\">- LES STAGES -</h2></b>
      </div>
      <script>
        var stage = 0;
        var listStage = [];
      </script>
      ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['AppBundle\Twig\AppExtension']->orderByNumber((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new Twig_Error_Runtime('Variable "sessions" does not exist.', 136, $this->source); })()), "orderNumber"));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 137
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) == "STAGES")) {
                // line 138
                echo "          <script>
            stage += 1;
                if (stage % 2 == 0){
                  listStage.push(";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "id", []), "html", null, true);
                echo ");
            }
          </script>
            <div id=\"";
                // line 144
                echo twig_escape_filter($this->env, ("stage" . twig_get_attribute($this->env, $this->source, $context["session"], "id", [])), "html", null, true);
                echo "\"  class=\"stage row padding justify-content-start p-5\">
              <div class=\"titre-stage Titillium\">- ";
                // line 145
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "titreSession", [])), "html", null, true);
                echo " -</div>
              <div class=\"w-100\"></div>
              <div class=\"col-11 col-sm-11 col-md-11 col-lg-5 col-xl-5\">
                <img class=\"img-fluid col-12\" src =\"";
                // line 148
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "pathImage", []))), "html", null, true);
                echo "\" 
                alt=\"";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "alt", []), "html", null, true);
                echo "\">
              </div>
              <div class=\"col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6\">
                <div class=\"text text-green\"><i>STAGE DE ";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "disciplines", []), "html", null, true);
                echo "</i></div>
                <div class=\"text\">Dates : ";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", []), "html", null, true);
                echo "</div>
                <div class=\"text\">Nombre d'élève maximum : ";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []), "html", null, true);
                echo "
                  <span class=\"nombrePlacesRestantes text-green\">
                  ";
                // line 156
                if ((twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []) == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", [])))) {
                    echo "<i> [ COMPLET ]</i>
                  ";
                } else {
                    // line 157
                    echo "<i> [ Il reste de la place ] </i>";
                }
                // line 158
                echo "                  </span>
                </div>
                <div class=\"text\">";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["session"], "descriptionSession", []);
                echo "</div>
                <div class=\"text text-green\">Prix du stage : ";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "prix", []), "html", null, true);
                echo "</div>
              </div>
            </div>
          ";
            }
            // line 165
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "      <div class=\"container-fluid bottom\">
        <div class=\"row justify-content-center\">
          <a href=\"";
        // line 168
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">
            <button class=\"btn btn-secondary\" type=\"submit\">JE M'INSCRIS</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  if (stage == 0)
  {
    document.getElementById(\"stages\").setAttribute('style','display:none');
  }
  for (let i = 0; i < listStage.length ; i++)
  {
    document.getElementById('stage' + listStage[i]).setAttribute('class','bg-white row padding p-5');
  }
</script>
";
        // line 187
        echo "<div id=\"evenements\" class=\"container-fluid bottom\">
  <hr>
  <div class=\"row justify-content-center top bottom\">
    <div class=\"col-12\">
      <div class=\"text-center bottom\">
        <p class=\"text-green col-12 bottom\"><b><h3 class=\"categories\">- LES ÉVÉNEMENTS BORDZA -</h3></b>
      </div>
      <script>
        var evenements = 0;
        var listEvenements = [];
      </script>
      ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['AppBundle\Twig\AppExtension']->orderByNumber((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new Twig_Error_Runtime('Variable "sessions" does not exist.', 198, $this->source); })()), "orderNumber"));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 199
            echo "          ";
            if (((twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) != "COURS") && (twig_get_attribute($this->env, $this->source, $context["session"], "formules", []) != "STAGES"))) {
                // line 200
                echo "            <script>
              evenements += 1;
              if (evenements % 2 == 0){
                listEvenements.push(";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "id", []), "html", null, true);
                echo ");
              }
            </script>
                <div id=\"";
                // line 206
                echo twig_escape_filter($this->env, ("evenement" . twig_get_attribute($this->env, $this->source, $context["session"], "id", [])), "html", null, true);
                echo "\" class=\"row p-5 justify-content-start\">
                  <div class=\"titre-stage Titillium\">- ";
                // line 207
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "titreSession", [])), "html", null, true);
                echo " -</div>
                  <div class=\"w-100\"></div>
                    <div class=\"col-11 col-sm-11 col-md-11 col-lg-5 col-xl-5\">
                      <img class=\"img-fluid col-12\" src =\"";
                // line 210
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "pathImage", []))), "html", null, true);
                echo "\"
                       alt=\"";
                // line 211
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "image", []), "alt", []), "html", null, true);
                echo "\">
                    </div>
                    <div class=\"col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6\">
                      <div class=\"text text-green\"><i>";
                // line 214
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "disciplines", []), "html", null, true);
                echo "</i></div>
                      <div class=\"text\">Dates de la Session : ";
                // line 215
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", []), "html", null, true);
                echo "</div>
                      <div class=\"text\">Nombre d'élève maximum : ";
                // line 216
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []), "html", null, true);
                echo "
                        <span class=\"nombrePlacesRestantes text-green\">
                        ";
                // line 218
                if ((twig_get_attribute($this->env, $this->source, $context["session"], "nbPlace", []) == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "inscriptionCollection", []), "snapshot", [])))) {
                    echo "<i> [ COMPLET ]</i>
                        ";
                } else {
                    // line 219
                    echo "<i> [ Il reste de la place ] </i>";
                }
                // line 220
                echo "                        </span>
                      </div>
                      <div class=\"text\">";
                // line 222
                echo twig_get_attribute($this->env, $this->source, $context["session"], "descriptionSession", []);
                echo "</div>
                      <div class=\"text text-green\">Prix de la session : ";
                // line 223
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "prix", []), "html", null, true);
                echo "</div>
                    </div>
                  </div>
          ";
            }
            // line 227
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "      <div class=\"container-fluid bottom\">
        <div class=\"row justify-content-center\">
          <a href=\"";
        // line 230
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">
            <button class=\"btn btn-secondary\" type=\"submit\">JE M'INSCRIS</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  if (evenements == 0)
  {
    document.getElementById('evenements').setAttribute('style','display:none');
  }else{
    for (let i = 0; i < listStage.length ; i++)
    {
      document.getElementById('stage' + listStage[i]).setAttribute('class','bg-light row padding p-5');
    }
  }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 250
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "skateschool.html.twig", 250)->display($context);
        
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
        return array (  555 => 250,  525 => 230,  521 => 228,  515 => 227,  508 => 223,  504 => 222,  500 => 220,  497 => 219,  492 => 218,  487 => 216,  483 => 215,  479 => 214,  473 => 211,  469 => 210,  463 => 207,  459 => 206,  453 => 203,  448 => 200,  445 => 199,  441 => 198,  428 => 187,  407 => 168,  403 => 166,  397 => 165,  390 => 161,  386 => 160,  382 => 158,  379 => 157,  374 => 156,  369 => 154,  365 => 153,  361 => 152,  355 => 149,  351 => 148,  345 => 145,  341 => 144,  335 => 141,  330 => 138,  327 => 137,  323 => 136,  311 => 126,  295 => 111,  288 => 106,  282 => 105,  276 => 102,  271 => 100,  266 => 97,  263 => 96,  258 => 95,  253 => 93,  247 => 90,  242 => 88,  237 => 86,  233 => 84,  230 => 83,  226 => 82,  219 => 77,  211 => 70,  203 => 68,  199 => 67,  195 => 66,  191 => 65,  186 => 64,  182 => 63,  143 => 27,  138 => 25,  133 => 23,  128 => 21,  123 => 19,  111 => 9,  102 => 8,  84 => 5,  66 => 4,  48 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block metadescription %}<meta name=\"Description\" content=\"Bordza, école de skate et de longboard à Bordeaux et dans la région, réservez vos cours en ligne.\">{% endblock %}

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
<div class=\"container-fluid\">
  <div class=\"col-12\">
  <div class=\"row justify-content-center\">
    <div class=\"col-11 col-sm-8 col-md-8 col-lg-8 col-xl-8 text-center p-5\">
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
        <hr class=\"mt-5\">
    </div>
    <div class=\"col-11 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center align-items-center justify-content-center bg-black row\">
      <div class=\"\">
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
  </div>


{#  ----------- LES COURS ------------------#}
  <div class=\"col-12\">
  <div class=\"row justify-content-center bg-green-no-marging\">
    <div class=\"col-11 col-sm-10 col-md-6 col-lg-6 col-xl-6 text-center\">   
      <p><b><h3 class=\"categories\">- LES COURS -</h3></b></p>
        <div class=\"row justify-content-center top\">
          {% for session in sessions | number('orderNumber') %}
            {% if session.formules == \"COURS\" %}
             
                <div class=\"rounded black padding  col-11 col-sm-11 col-md-11 col-lg-5 col-xl-5\">
                  <div class=\"mt-3\"><b>- {{ session.disciplines | upper }} -</b></div>
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
        </div>
    </div>
    <div class=\"container-fluid bottom top\">
      <div class=\"row justify-content-center\">
        <a href=\"{{ path('inscription') }}\">
          <button class=\"btn btn-secondary bottom\" type=\"submit\">JE M'INSCRIS</button>
        </a>
      </div>
    </div>
  </div>
  </div>
</div>





  {#  ----------- LES STAGES ------------------#}

  <div id=\"stages\" class=\"container-fluid bottom bg-light\">
  <div class=\"row justify-content-center bottom\">
    <div class=\"col-12\">
      <div class=\"text-center top\">
        <p class=\"text-green col-12\"><b><h2 class=\"categories\">- LES STAGES -</h2></b>
      </div>
      <script>
        var stage = 0;
        var listStage = [];
      </script>
      {% for session in sessions | number('orderNumber') %}
        {% if session.formules == \"STAGES\" %}
          <script>
            stage += 1;
                if (stage % 2 == 0){
                  listStage.push({{ session.id }});
            }
          </script>
            <div id=\"{{ 'stage' ~ session.id }}\"  class=\"stage row padding justify-content-start p-5\">
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
      <div class=\"container-fluid bottom\">
        <div class=\"row justify-content-center\">
          <a href=\"{{ path('inscription') }}\">
            <button class=\"btn btn-secondary\" type=\"submit\">JE M'INSCRIS</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  if (stage == 0)
  {
    document.getElementById(\"stages\").setAttribute('style','display:none');
  }
  for (let i = 0; i < listStage.length ; i++)
  {
    document.getElementById('stage' + listStage[i]).setAttribute('class','bg-white row padding p-5');
  }
</script>
{# ---------------- evenements ------------------------#}
<div id=\"evenements\" class=\"container-fluid bottom\">
  <hr>
  <div class=\"row justify-content-center top bottom\">
    <div class=\"col-12\">
      <div class=\"text-center bottom\">
        <p class=\"text-green col-12 bottom\"><b><h3 class=\"categories\">- LES ÉVÉNEMENTS BORDZA -</h3></b>
      </div>
      <script>
        var evenements = 0;
        var listEvenements = [];
      </script>
      {% for session in sessions | number('orderNumber')  %}
          {% if (session.formules != \"COURS\") and (session.formules != \"STAGES\") %}
            <script>
              evenements += 1;
              if (evenements % 2 == 0){
                listEvenements.push({{ session.id }});
              }
            </script>
                <div id=\"{{ 'evenement' ~ session.id }}\" class=\"row p-5 justify-content-start\">
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
      <div class=\"container-fluid bottom\">
        <div class=\"row justify-content-center\">
          <a href=\"{{ path('inscription') }}\">
            <button class=\"btn btn-secondary\" type=\"submit\">JE M'INSCRIS</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  if (evenements == 0)
  {
    document.getElementById('evenements').setAttribute('style','display:none');
  }else{
    for (let i = 0; i < listStage.length ; i++)
    {
      document.getElementById('stage' + listStage[i]).setAttribute('class','bg-light row padding p-5');
    }
  }
</script>
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "skateschool.html.twig", "/Users/a.hilary/ProjetsWeb/bordza/app/Resources/views/skateschool.html.twig");
    }
}
