<?php

/* session/new.html.twig */
class __TwigTemplate_b945a9913a5315edce48fc8cc5f7169bab23178177c2e7cb66870108d24c8123 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "session/new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "session/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "session/new.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "session/new.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "session/new.html.twig", 3)->display($context);
        
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
        echo "
<div class=\"container-fluid identifiant justify-content-center bottom\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <h1>NOUVELLE SESSION</h1>
            </div>
        </div>
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-9 col-xl-9 border border-light top\" style=\"padding:20px\">

            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["method" => "post", "enctype" => "multipart/form-data", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_new")]);
        echo "
            <!-- ordre d'affichage -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "orderNumber", []), 'label', ["label" => "Ordre d'affichage "]);
        echo "
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "orderNumber", []), 'errors');
        echo "
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "orderNumber", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- formules -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "formules", []), 'label', ["label" => "Choisir une formule"]);
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "formules", []), 'errors');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "formules", []), 'widget', ["attr" => ["class" => "custom-select btn-dark"]]);
        echo "
                    </div>
                </div>
                <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin/formule_new");
        echo "\">-> Ajouter une formule</a>

            <!-- disciplines -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "disciplines", []), 'label', ["label" => "Choisir une discipline  "]);
        echo "
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "disciplines", []), 'errors');
        echo "
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "disciplines", []), 'widget', ["attr" => ["class" => "custom-select btn-dark"]]);
        echo "
                    </div>
                </div>
                <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_discipline_new");
        echo "\">-> Ajouter une discipline</a>

            <!-- titre -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "titreSession", []), 'label', ["label" => "Titre de la Session  "]);
        echo "
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "titreSession", []), 'errors');
        echo "
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "titreSession", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                    </div>
                </div>

            <!-- dates -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "dateSession", []), 'label', ["label" => "Dates de la Session  "]);
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "dateSession", []), 'errors');
        echo "
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "dateSession", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                    </div>
                </div>

            <!-- description -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "descriptionSession", []), 'label', ["label" => "Description de la session "]);
        echo "
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), "descriptionSession", []), 'errors');
        echo "
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), "descriptionSession", []), 'widget', ["attr" => ["class" => "form-control textarea"]]);
        echo "
                    </div>
                </div>

            <!-- nbPlace -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), "nbPlace", []), 'label', ["label" => "Nombre de places  "]);
        echo "
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "nbPlace", []), 'errors');
        echo "
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), "nbPlace", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- prix -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->source); })()), "prix", []), 'label', ["label" => "Prix "]);
        echo "
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), "prix", []), 'errors');
        echo "
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->source); })()), "prix", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- image -->
                <!-- pathimage -->
                <div class=\"form\">
                    <div class=\"input-group \">
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->source); })()), "image", []), "pathimage", []), 'label', ["label" => "Choisir une image"]);
        echo "
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 97, $this->source); })()), "image", []), "pathimage", []), 'errors');
        echo "
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->source); })()), "image", []), "pathimage", []), 'widget', ["attr" => ["class" => ""]]);
        echo "
                    </div>
                </div>
                <!-- alt -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 104, $this->source); })()), "image", []), "alt", []), 'label', ["label" => "Description de l'image / Référencement "]);
        echo "
                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->source); })()), "image", []), "alt", []), 'errors');
        echo "
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->source); })()), "image", []), "alt", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <!-- credit photo -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->source); })()), "image", []), "creditPhoto", []), 'label', ["label" => "Crédit Photo"]);
        echo "
                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 113, $this->source); })()), "image", []), "creditPhoto", []), 'errors');
        echo "
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->source); })()), "image", []), "creditPhoto", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

        <div class=\"form bouton\">
            <div class=\"row justify-content-center\">
                <button type=\"submit\" class=\"btn btn-secondary btn-lg bouton\">Enregistrer cette Session</button>
            </div>
            <div class=\"row justify-content-center text\">
                <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_index");
        echo "\"><- Revenir aux Sessions</a>
            </div>
        </div>
        ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 126, $this->source); })()), 'form_end');
        echo "

    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "session/new.html.twig", 132)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "session/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 132,  325 => 126,  319 => 123,  307 => 114,  303 => 113,  299 => 112,  290 => 106,  286 => 105,  282 => 104,  273 => 98,  269 => 97,  265 => 96,  254 => 88,  250 => 87,  246 => 86,  236 => 79,  232 => 78,  228 => 77,  218 => 70,  214 => 69,  210 => 68,  200 => 61,  196 => 60,  192 => 59,  182 => 52,  178 => 51,  174 => 50,  166 => 45,  160 => 42,  156 => 41,  152 => 40,  144 => 35,  138 => 32,  134 => 31,  130 => 30,  120 => 23,  116 => 22,  112 => 21,  105 => 17,  92 => 6,  83 => 5,  65 => 3,  47 => 2,  15 => 1,);
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
                <h1>NOUVELLE SESSION</h1>
            </div>
        </div>
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-9 col-xl-9 border border-light top\" style=\"padding:20px\">

            {{ form_start(form, {'method': 'post', 'enctype' : 'multipart/form-data', 'action': path('admin_session_new') })}}
            <!-- ordre d'affichage -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.orderNumber, 'Ordre d\\'affichage ') }}
                        {{ form_errors(form.orderNumber) }}
                        {{ form_widget(form.orderNumber, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

            <!-- formules -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.formules, 'Choisir une formule' ) }}
                        {{ form_errors(form.formules) }}
                        {{ form_widget(form.formules, {'attr': {'class':'custom-select btn-dark'}}) }}
                    </div>
                </div>
                <a href=\"{{ path('admin/formule_new') }}\">-> Ajouter une formule</a>

            <!-- disciplines -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.disciplines, 'Choisir une discipline  ') }}
                        {{ form_errors(form.disciplines) }}
                        {{ form_widget(form.disciplines, {'attr': {'class':'custom-select btn-dark'}}) }}
                    </div>
                </div>
                <a href=\"{{ path('admin_discipline_new') }}\">-> Ajouter une discipline</a>

            <!-- titre -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.titreSession, 'Titre de la Session  ') }}
                        {{ form_errors(form.titreSession) }}
                        {{ form_widget(form.titreSession, {'attr': {'class':'form-control '}}) }}
                    </div>
                </div>

            <!-- dates -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.dateSession, 'Dates de la Session  ') }}
                        {{ form_errors(form.dateSession) }}
                        {{ form_widget(form.dateSession, {'attr': {'class':'form-control '}}) }}
                    </div>
                </div>

            <!-- description -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.descriptionSession, 'Description de la session ') }}
                        {{ form_errors(form.descriptionSession) }}
                        {{ form_widget(form.descriptionSession, {'attr': {'class':'form-control textarea'}}) }}
                    </div>
                </div>

            <!-- nbPlace -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.nbPlace, 'Nombre de places  ') }}
                        {{ form_errors(form.nbPlace) }}
                        {{ form_widget(form.nbPlace, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

            <!-- prix -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.prix, 'Prix ') }}
                        {{ form_errors(form.prix) }}
                        {{ form_widget(form.prix, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

            <!-- image -->
                <!-- pathimage -->
                <div class=\"form\">
                    <div class=\"input-group \">
                        {{ form_label(form.image.pathimage, 'Choisir une image') }}
                        {{ form_errors(form.image.pathimage) }}
                        {{ form_widget(form.image.pathimage, {'attr': {'class':''}}) }}
                    </div>
                </div>
                <!-- alt -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.image.alt, 'Description de l\\'image / Référencement ') }}
                        {{ form_errors(form.image.alt) }}
                        {{ form_widget(form.image.alt, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>
                <!-- credit photo -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.image.creditPhoto, 'Crédit Photo') }}
                        {{ form_errors(form.image.creditPhoto) }}
                        {{ form_widget(form.image.creditPhoto, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

        <div class=\"form bouton\">
            <div class=\"row justify-content-center\">
                <button type=\"submit\" class=\"btn btn-secondary btn-lg bouton\">Enregistrer cette Session</button>
            </div>
            <div class=\"row justify-content-center text\">
                <a href=\"{{ path('admin_session_index') }}\"><- Revenir aux Sessions</a>
            </div>
        </div>
        {{ form_end(form) }}

    </div>
</div>

{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "session/new.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/session/new.html.twig");
    }
}
