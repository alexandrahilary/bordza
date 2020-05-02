<?php

/* connexion.html.twig */
class __TwigTemplate_257b6171a39e9bd9f40eb36d9b1cfe5b72d6f9e10a07d02c7686d88fc67488ff extends Twig_Template
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
        echo "          <div class=\"container-fluid\" id=\"identifiants\" style=\"display: flex\">
            <div class=\"col-12\">
                <div class=\"row justify-content-center\">
                  <nav class=\"col-12 navbar navbar-expand-lg navbar-dark bg-dark justify-content-center\" style=\"background-color:black !important;\" id=\"navbarNav\">
                    <div class=\"row justify-content-center\">
                        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "user", [])) {
            // line 7
            echo "                        <div class=\"compte col-12 justify-content-end d-none d-sm-block\">
                            <a class=\"identifiants\" href=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Mon Compte : ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "user", []), "userName", [])), "html", null, true);
            echo "</a>

                            <a class=\"identifiants\" href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Deconnexion</a>
                        </div>
                        <div class=\"compte col-12 justify-content-center d-block d-sm-none\">


                            <a class=\"identifiants text-center\" href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Mon Compte : ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "user", []), "userName", [])), "html", null, true);
            echo "</a>

                            <a class=\"identifiants text-center\" href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Deconnexion</a>

                        </div>
                        ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "user", []), "hasRole", [0 => "ROLE_ADMIN"], "method")) {
                // line 21
                echo "
                        <div class=\"w-100\"></div>

                        <div class=\"d-block d-sm-none\" id=\"menu-admin\">ADMIN</div>

                          <div class=\"row justify-content-center col-12 d-none d-sm-block\" id=\"nav-admin\">
                            <div class=\"navbar-nav col-12 row justify-content-around \">

                                <a class=\"nav-item text-center nav-admin col admin align-center\" href=\"";
                // line 29
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
                echo "\">UTILISATEURS</a>

                                <a class=\"nav-item text-center nav-admin col admin\" href=\"";
                // line 31
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tarif_index");
                echo "\">TARIFS</a>

                                <a class=\"nav-item text-center nav-admin col admin\" href=\"";
                // line 33
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_index");
                echo "\">SESSIONS</a>

                                <a class=\"nav-item text-center nav-admin col admin\" href=\"";
                // line 35
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inscription_index");
                echo "\">INSCRIPTIONS</a>

                                <a class=\"nav-item text-center nav-admin col admin\" href=\"";
                // line 37
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_actu_index");
                echo "\">ARTICLES</a>

                                <a class=\"nav-item text-center nav-admin col admin\" href=\"";
                // line 39
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_index");
                echo "\">CATALOGUE</a>

                                <a class=\"nav-item text-center nav-admin col admin\" href=\"";
                // line 41
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_video_index");
                echo "\">VIDÉOS</a>

                                <a class=\"nav-item text-center nav-admin col admin\" href=\"";
                // line 43
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
            // line 55
            echo "                          ";
        } else {
            // line 56
            echo "                          <div class=\"compte col-12 row justify-content-end\">
                            <li class=\"nav-item\">
                              <a class=\"nav-link\" href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                            </li>
                          </div>
                        ";
        }
        // line 62
        echo "                    </div>
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
        return "connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 62,  138 => 58,  134 => 56,  131 => 55,  116 => 43,  111 => 41,  106 => 39,  101 => 37,  96 => 35,  91 => 33,  86 => 31,  81 => 29,  71 => 21,  69 => 20,  63 => 17,  56 => 15,  48 => 10,  41 => 8,  38 => 7,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("          <div class=\"container-fluid\" id=\"identifiants\" style=\"display: flex\">
            <div class=\"col-12\">
                <div class=\"row justify-content-center\">
                  <nav class=\"col-12 navbar navbar-expand-lg navbar-dark bg-dark justify-content-center\" style=\"background-color:black !important;\" id=\"navbarNav\">
                    <div class=\"row justify-content-center\">
                        {% if app.user %}
                        <div class=\"compte col-12 justify-content-end d-none d-sm-block\">
                            <a class=\"identifiants\" href=\"{{ path('fos_user_profile_show') }}\">Mon Compte : {{ app.user.userName | capitalize }}</a>

                            <a class=\"identifiants\" href=\"{{ path('fos_user_security_logout') }}\">Deconnexion</a>
                        </div>
                        <div class=\"compte col-12 justify-content-center d-block d-sm-none\">


                            <a class=\"identifiants text-center\" href=\"{{ path('fos_user_profile_show') }}\">Mon Compte : {{ app.user.userName | capitalize }}</a>

                            <a class=\"identifiants text-center\" href=\"{{ path('fos_user_security_logout') }}\">Deconnexion</a>

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
      </div>
                  ", "connexion.html.twig", "/Users/a.hilary/ProjetsWeb/bordza/app/Resources/views/connexion.html.twig");
    }
}
