<?php

/* nav.html.twig */
class __TwigTemplate_55a1eeb281776d14b4ea28f1a5ea55b00da333ec4c785ba551371718da458ed1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        echo "

<div class=\"container-fluid\" id=\"menu\">
  <div class=\"row justify-content-center\">
    <div class=\"col-12 row justify-content-center\">
      <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
        <img style=\"width:50px;height:50px;\"  src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/logo/bordza-blanc.png"), "html", null, true);
        echo "\">
      </a>
    </div>
      <div class=\"col-12 row justify-content-center\">
        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
          <span id=\"logo\">BORDZA</span>
        </a>
      </div>
    </a>
    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "user", [])) {
            // line 17
            echo "    <div class=\"col-12 row justify-content-center\">
      <span id=\"user-name\">Bonjour ";
            // line 18
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->source); })()), "user", []), "username", [])), "html", null, true);
            echo "</span>
    </div>
    ";
        }
        // line 21
        echo "  </div>
</div>
<div class=\"container-fluid sticky-top\" id=\"nav\">
  <div class=\"row justify-content-center\">
    <div class=\"col-12\">
      <nav class=\"navbar navbar-expand-lg justify-content-center\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navMenu\" aria-controls=\"navMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span style=\"color:white\" class=\"\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/logo/glyphicons-402-skateboard.png"), "html", null, true);
        echo "\"> Menu</span>
        </button>
        
        <div class=\"collapse navbar-collapse justify-content-around\" id=\"navMenu\">
          <ul class=\"navbar-nav\">
            
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">ACCUEIL</a>
            </li>
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skateschool");
        echo "\">SKATESCHOOL</a>
            </li>
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actu");
        echo "\">NEWS</a>
            </li>
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue");
        echo "\">CATALOGUE</a>
            </li>
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video");
        echo "\">VIDÉOS</a>
            </li>
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("serigraphie");
        echo "\">PERSONNALISATION</a>
            </li>
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("concept");
        echo "\">CONCEPT</a>
            </li>
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 56,  121 => 53,  115 => 50,  109 => 47,  103 => 44,  97 => 41,  91 => 38,  85 => 35,  75 => 28,  66 => 21,  60 => 18,  57 => 17,  55 => 16,  47 => 11,  40 => 7,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<div class=\"container-fluid\" id=\"menu\">
  <div class=\"row justify-content-center\">
    <div class=\"col-12 row justify-content-center\">
      <a href=\"{{ path('homepage') }}\">
        <img style=\"width:50px;height:50px;\"  src=\"{{ asset('/assets/images/logo/bordza-blanc.png') }}\">
      </a>
    </div>
      <div class=\"col-12 row justify-content-center\">
        <a href=\"{{ path('homepage') }}\">
          <span id=\"logo\">BORDZA</span>
        </a>
      </div>
    </a>
    {% if app.user %}
    <div class=\"col-12 row justify-content-center\">
      <span id=\"user-name\">Bonjour {{ app.user.username | capitalize }}</span>
    </div>
    {% endif %}
  </div>
</div>
<div class=\"container-fluid sticky-top\" id=\"nav\">
  <div class=\"row justify-content-center\">
    <div class=\"col-12\">
      <nav class=\"navbar navbar-expand-lg justify-content-center\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navMenu\" aria-controls=\"navMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span style=\"color:white\" class=\"\"><img src=\"{{ asset('/assets/images/logo/glyphicons-402-skateboard.png') }}\"> Menu</span>
        </button>
        
        <div class=\"collapse navbar-collapse justify-content-around\" id=\"navMenu\">
          <ul class=\"navbar-nav\">
            
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"{{ path('homepage') }}\">ACCUEIL</a>
            </li>
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"{{ path('skateschool') }}\">SKATESCHOOL</a>
            </li>
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"{{ path('actu') }}\">NEWS</a>
            </li>
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"{{ path('catalogue') }}\">CATALOGUE</a>
            </li>
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"{{ path('video') }}\">VIDÉOS</a>
            </li>
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"{{ path('serigraphie') }}\">PERSONNALISATION</a>
            </li>
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"{{ path('concept') }}\">CONCEPT</a>
            </li>
            <li class=\"nav-item text-center\">
              <a class=\"nav-link nav-visiteur\" href=\"{{ path('contact') }}\">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>


", "nav.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/nav.html.twig");
    }
}
