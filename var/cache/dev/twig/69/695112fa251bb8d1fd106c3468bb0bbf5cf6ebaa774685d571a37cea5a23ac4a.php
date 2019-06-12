<?php

/* session/edit.html.twig */
class __TwigTemplate_67adc0629662a7471b9fb419259e7167846cf37b842ab37e947d62ec7a44cfee extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "session/edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "session/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "session/edit.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "session/edit.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "session/edit.html.twig", 3)->display($context);
        
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
        echo "<div class=\"container-fluid identifiant justify-content-center bottom\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <h1 class=\"text-center\">MODIFIER LA SESSION</h1>
            </div>
        </div>
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-9 col-xl-9 border border-light top\" style=\"padding:20px\">
            <div class=\"col\">
            ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 16, $this->source); })()), "image", []) != null)) {
            // line 17
            echo "                <img class=\"img-fluid col-12\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 17, $this->source); })()), "image", []))), "html", null, true);
            echo "\">
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_edit_image", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 18, $this->source); })()), "image", []), "id", [])]), "html", null, true);
            echo "\">-> changer l'image </a>
            ";
        }
        // line 20
        echo "            </div>
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
            <!-- ordre d'affichage -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 25, $this->source); })()), "orderNumber", []), 'label', ["label" => "Ordre d'affichage "]);
        echo "
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 26, $this->source); })()), "orderNumber", []), 'errors');
        echo "
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 27, $this->source); })()), "orderNumber", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- formules -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 34, $this->source); })()), "formules", []), 'label', ["label" => "Choisir une formule"]);
        echo "
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 35, $this->source); })()), "formules", []), 'errors');
        echo "
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 36, $this->source); })()), "formules", []), 'widget', ["attr" => ["class" => "custom-select btn-dark"]]);
        echo "
                    </div>
                </div>
                <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin/formule_new");
        echo "\">-> Ajouter une formule</a>

            <!-- disciplines -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 44, $this->source); })()), "disciplines", []), 'label', ["label" => "Choisir une discipline  "]);
        echo "
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 45, $this->source); })()), "disciplines", []), 'errors');
        echo "
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 46, $this->source); })()), "disciplines", []), 'widget', ["attr" => ["class" => "custom-select btn-dark"]]);
        echo "
                    </div>
                </div>
                <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_discipline_new");
        echo "\">-> Ajouter une discipline</a>

            <!-- titre -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 54, $this->source); })()), "titreSession", []), 'label', ["label" => "Titre de la Session  "]);
        echo "
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 55, $this->source); })()), "titreSession", []), 'errors');
        echo "
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 56, $this->source); })()), "titreSession", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                    </div>
                </div>

            <!-- dates -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 63, $this->source); })()), "dateSession", []), 'label', ["label" => "Dates de la Session : "]);
        echo "
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 64, $this->source); })()), "dateSession", []), 'errors');
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 65, $this->source); })()), "dateSession", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                    </div>
                </div>

            <!-- description -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 72, $this->source); })()), "descriptionSession", []), 'label', ["label" => "Description de la session  "]);
        echo "
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 73, $this->source); })()), "descriptionSession", []), 'errors');
        echo "
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 74, $this->source); })()), "descriptionSession", []), 'widget', ["attr" => ["class" => "form-control textarea"]]);
        echo "
                    </div>
                </div>

            <!-- nbPlace -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 81, $this->source); })()), "nbPlace", []), 'label', ["label" => "Nombre de places "]);
        echo "
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 82, $this->source); })()), "nbPlace", []), 'errors');
        echo "
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 83, $this->source); })()), "nbPlace", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- prix -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 90, $this->source); })()), "prix", []), 'label', ["label" => "Prix "]);
        echo "
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 91, $this->source); })()), "prix", []), 'errors');
        echo "
                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 92, $this->source); })()), "prix", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <div class=\"form bouton\">
                <div class=\"row justify-content-center\">
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 98, $this->source); })()), 'widget');
        echo "
                    <button class=\"btn btn-secondary btn-lg bouton\" type=\"submit\" value=\"Edit\">Enregistrer les modifications</button>
                    ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 100, $this->source); })()), 'form_end');
        echo "
                </div>
            <div class=\"row justify-content-center text\">
                <a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_index");
        echo "\"><- Revenir aux Sessions</a>
            </div>
            <div class=\"form bouton\">
                <div class=\"row justify-content-center\">
                    ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 107, $this->source); })()), 'form_start');
        echo "
                        <button type=\"submit\" class=\"btn btn-light btn-lg bouton\">Supprimer</button>
                    ";
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 109, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
    </div>
            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "session/edit.html.twig", 117)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "session/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 117,  300 => 109,  295 => 107,  288 => 103,  282 => 100,  277 => 98,  268 => 92,  264 => 91,  260 => 90,  250 => 83,  246 => 82,  242 => 81,  232 => 74,  228 => 73,  224 => 72,  214 => 65,  210 => 64,  206 => 63,  196 => 56,  192 => 55,  188 => 54,  180 => 49,  174 => 46,  170 => 45,  166 => 44,  158 => 39,  152 => 36,  148 => 35,  144 => 34,  134 => 27,  130 => 26,  126 => 25,  119 => 21,  116 => 20,  111 => 18,  106 => 17,  104 => 16,  92 => 6,  83 => 5,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}

{% block body %}
<div class=\"container-fluid identifiant justify-content-center bottom\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <h1 class=\"text-center\">MODIFIER LA SESSION</h1>
            </div>
        </div>
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-9 col-xl-9 border border-light top\" style=\"padding:20px\">
            <div class=\"col\">
            {% if session.image != null %}
                <img class=\"img-fluid col-12\" src=\"{{ asset('uploads/images/' ~ session.image ) }}\">
                <a href=\"{{ path('admin_image_edit_image', { 'id': session.image.id })}}\">-> changer l'image </a>
            {% endif %}
            </div>
            {{ form_start(edit_form)}}
            <!-- ordre d'affichage -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(edit_form.orderNumber, 'Ordre d\\'affichage ') }}
                        {{ form_errors(edit_form.orderNumber) }}
                        {{ form_widget(edit_form.orderNumber, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

            <!-- formules -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(edit_form.formules, 'Choisir une formule') }}
                        {{ form_errors(edit_form.formules) }}
                        {{ form_widget(edit_form.formules, {'attr': {'class':'custom-select btn-dark'}}) }}
                    </div>
                </div>
                <a href=\"{{ path('admin/formule_new') }}\">-> Ajouter une formule</a>

            <!-- disciplines -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(edit_form.disciplines, 'Choisir une discipline  ') }}
                        {{ form_errors(edit_form.disciplines) }}
                        {{ form_widget(edit_form.disciplines, {'attr': {'class':'custom-select btn-dark'}}) }}
                    </div>
                </div>
                <a href=\"{{ path('admin_discipline_new') }}\">-> Ajouter une discipline</a>

            <!-- titre -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(edit_form.titreSession, 'Titre de la Session  ') }}
                        {{ form_errors(edit_form.titreSession) }}
                        {{ form_widget(edit_form.titreSession, {'attr': {'class':'form-control '}}) }}
                    </div>
                </div>

            <!-- dates -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(edit_form.dateSession, 'Dates de la Session : ') }}
                        {{ form_errors(edit_form.dateSession) }}
                        {{ form_widget(edit_form.dateSession, {'attr': {'class':'form-control '}}) }}
                    </div>
                </div>

            <!-- description -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(edit_form.descriptionSession, 'Description de la session  ') }}
                        {{ form_errors(edit_form.descriptionSession) }}
                        {{ form_widget(edit_form.descriptionSession, {'attr': {'class':'form-control textarea'}}) }}
                    </div>
                </div>

            <!-- nbPlace -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(edit_form.nbPlace, 'Nombre de places ') }}
                        {{ form_errors(edit_form.nbPlace) }}
                        {{ form_widget(edit_form.nbPlace, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

            <!-- prix -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(edit_form.prix, 'Prix ') }}
                        {{ form_errors(edit_form.prix) }}
                        {{ form_widget(edit_form.prix, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

            <div class=\"form bouton\">
                <div class=\"row justify-content-center\">
                    {{ form_widget(edit_form) }}
                    <button class=\"btn btn-secondary btn-lg bouton\" type=\"submit\" value=\"Edit\">Enregistrer les modifications</button>
                    {{ form_end(edit_form) }}
                </div>
            <div class=\"row justify-content-center text\">
                <a href=\"{{ path('admin_session_index') }}\"><- Revenir aux Sessions</a>
            </div>
            <div class=\"form bouton\">
                <div class=\"row justify-content-center\">
                    {{ form_start(delete_form) }}
                        <button type=\"submit\" class=\"btn btn-light btn-lg bouton\">Supprimer</button>
                    {{ form_end(delete_form) }}
                </div>
            </div>
        </div>
    </div>
    </div>
            
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "session/edit.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/session/edit.html.twig");
    }
}
