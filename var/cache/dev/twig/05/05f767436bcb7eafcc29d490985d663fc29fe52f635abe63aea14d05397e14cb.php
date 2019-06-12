<?php

/* connexion.html.twig */
class __TwigTemplate_9e7820094880817e730f2355a89f6783d2c2fc1e10fc6b33abf82e0d6e5e26d0 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        // line 1
        echo "          <div class=\"container-fluid\" id=\"identifiants\">
            <div class=\"row justify-content-center\">
              <nav class=\"col-12 navbar navbar-expand-lg navbar-dark bg-dark justify-content-center\" style=\"background-color:black !important;\" id=\"navbarNav\">
                <div   class=\"row justify-content-center col-12\">
                    
                ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "user", [])) {
            echo "  
                <div class=\"row col-12 justify-content-center d-none d-sm-block\">
                  <div class=\"compte col-12 row justify-content-end\">
                      
                    <a class=\"identifiants\" href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Mon Compte : ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "user", []), "userName", [])), "html", null, true);
            echo "</a>
        
                    <a class=\"identifiants\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Deconnexion</a>
                       
                  </div>
                </div>
                <div class=\"row col-12 justify-content-center d-block d-sm-none\">
                  <div class=\"compte row justify-content-center\">
                      
                    <a class=\"identifiants text-center\" href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Mon Compte : ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "user", []), "userName", [])), "html", null, true);
            echo "</a>
        
                    <a class=\"identifiants text-center\" href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Deconnexion</a>
                       
                  </div>
                </div>
                  ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 25, $this->source); })()), "user", []), "hasRole", [0 => "ROLE_ADMIN"], "method")) {
                // line 26
                echo "                       
                  <div class=\"w-100\"></div>

                  <div class=\"d-block d-sm-none\" id=\"menu-admin\">ADMIN</div>
                  
                  <div class=\"row justify-content-center col-12 d-none d-sm-block\" id=\"nav-admin\">
                    <div class=\"navbar-nav col-12 row justify-content-around \">
                      
                        <a class=\"nav-item text-center nav-admin col admin align-center\" href=\"";
                // line 34
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
                echo "\">UTILISATEURS</a>
                      
                        <a class=\"nav-item text-center nav-admin col admin\" href=\"";
                // line 36
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tarif_index");
                echo "\">TARIFS</a>
                      
                        <a class=\"nav-item text-center nav-admin col admin\" href=\"";
                // line 38
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_index");
                echo "\">SESSIONS</a>
                      
                        <a class=\"nav-item text-center nav-admin col admin\" href=\"";
                // line 40
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inscription_index");
                echo "\">INSCRIPTIONS</a>
                      
                        <a class=\"nav-item text-center nav-admin col admin\" href=\"";
                // line 42
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_actu_index");
                echo "\">ARTICLES</a>
                      
                        <a class=\"nav-item text-center nav-admin col admin\" href=\"";
                // line 44
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_index");
                echo "\">CATALOGUE</a>
                      
                        <a class=\"nav-item text-center nav-admin col admin\" href=\"";
                // line 46
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_video_index");
                echo "\">VIDÉOS</a>
                      
                        <a class=\"nav-item text-center nav-admin col admin\" href=\"";
                // line 48
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_index");
                echo "\">MESSAGES</a>
                      
                    </div>
                  </div>
                  <script>
                    var menuAdmin = document.getElementById('menu-admin');
                    var navAdmin = document.getElementById('nav-admin');
                    menuAdmin.onclick = function(){
                      navAdmin.classList.toggle('d-none');
                    }
                  </script>
                  ";
            }
            // line 60
            echo "                  ";
        } else {
            // line 61
            echo "                  <div class=\"compte col-12 row justify-content-end\">
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                    </li>
                  </div>
                  ";
        }
        // line 67
        echo "                </div>
              </nav>
            </div>
          </div>
                  ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 67,  143 => 63,  139 => 61,  136 => 60,  121 => 48,  116 => 46,  111 => 44,  106 => 42,  101 => 40,  96 => 38,  91 => 36,  86 => 34,  76 => 26,  74 => 25,  67 => 21,  60 => 19,  50 => 12,  43 => 10,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("          <div class=\"container-fluid\" id=\"identifiants\">
            <div class=\"row justify-content-center\">
              <nav class=\"col-12 navbar navbar-expand-lg navbar-dark bg-dark justify-content-center\" style=\"background-color:black !important;\" id=\"navbarNav\">
                <div   class=\"row justify-content-center col-12\">
                    
                {% if app.user %}  
                <div class=\"row col-12 justify-content-center d-none d-sm-block\">
                  <div class=\"compte col-12 row justify-content-end\">
                      
                    <a class=\"identifiants\" href=\"{{ path('fos_user_profile_show') }}\">Mon Compte : {{ app.user.userName | capitalize }}</a>
        
                    <a class=\"identifiants\" href=\"{{ path('fos_user_security_logout') }}\">Deconnexion</a>
                       
                  </div>
                </div>
                <div class=\"row col-12 justify-content-center d-block d-sm-none\">
                  <div class=\"compte row justify-content-center\">
                      
                    <a class=\"identifiants text-center\" href=\"{{ path('fos_user_profile_show') }}\">Mon Compte : {{ app.user.userName | capitalize }}</a>
        
                    <a class=\"identifiants text-center\" href=\"{{ path('fos_user_security_logout') }}\">Deconnexion</a>
                       
                  </div>
                </div>
                  {% if app.user.hasRole('ROLE_ADMIN')%}
                       
                  <div class=\"w-100\"></div>

                  <div class=\"d-block d-sm-none\" id=\"menu-admin\">ADMIN</div>
                  
                  <div class=\"row justify-content-center col-12 d-none d-sm-block\" id=\"nav-admin\">
                    <div class=\"navbar-nav col-12 row justify-content-around \">
                      
                        <a class=\"nav-item text-center nav-admin col admin align-center\" href=\"{{ path ('admin_user_index') }}\">UTILISATEURS</a>
                      
                        <a class=\"nav-item text-center nav-admin col admin\" href=\"{{ path ('admin_tarif_index') }}\">TARIFS</a>
                      
                        <a class=\"nav-item text-center nav-admin col admin\" href=\"{{ path ('admin_session_index') }}\">SESSIONS</a>
                      
                        <a class=\"nav-item text-center nav-admin col admin\" href=\"{{ path ('admin_inscription_index') }}\">INSCRIPTIONS</a>
                      
                        <a class=\"nav-item text-center nav-admin col admin\" href=\"{{ path ('admin_actu_index') }}\">ARTICLES</a>
                      
                        <a class=\"nav-item text-center nav-admin col admin\" href=\"{{ path ('admin_catalogue_index') }}\">CATALOGUE</a>
                      
                        <a class=\"nav-item text-center nav-admin col admin\" href=\"{{ path ('admin_video_index') }}\">VIDÉOS</a>
                      
                        <a class=\"nav-item text-center nav-admin col admin\" href=\"{{ path ('admin_contact_index') }}\">MESSAGES</a>
                      
                    </div>
                  </div>
                  <script>
                    var menuAdmin = document.getElementById('menu-admin');
                    var navAdmin = document.getElementById('nav-admin');
                    menuAdmin.onclick = function(){
                      navAdmin.classList.toggle('d-none');
                    }
                  </script>
                  {% endif %}
                  {% else %}
                  <div class=\"compte col-12 row justify-content-end\">
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                    </li>
                  </div>
                  {% endif %}
                </div>
              </nav>
            </div>
          </div>
                  ", "connexion.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/connexion.html.twig");
    }
}
