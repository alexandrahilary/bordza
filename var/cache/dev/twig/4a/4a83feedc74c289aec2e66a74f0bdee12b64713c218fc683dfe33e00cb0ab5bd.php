<?php

/* inscription_edit.html.twig */
class __TwigTemplate_939d5580df9dce759291a59f8a6d0ffa07e84bd751976eb345bfed2992f34b80 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "inscription_edit.html.twig", 1);
        $this->blocks = [
            'metadescription' => [$this, 'block_metadescription'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription_edit.html.twig"));

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

        echo "<meta name=\"Description\" content=\"Bordza, modifiez vos inscriptions aux cours de skateboard en ligne\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_connexion($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $this->loadTemplate("connexion.html.twig", "inscription_edit.html.twig", 3)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "inscription_edit.html.twig", 4)->display($context);
        
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
                <h1>INSCRIPTION</h1>
            </div>
        </div>
        <div class=\"col-6\"><img class=\"img-fluid padding\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/skateschool/skate_andernos.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"col-4 bottom top\">
            <div class=\"row justify-content-center\">
                <div class=\"col-11\">
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
            <!-- formule -->
                <div class=\"form\">
                    <p>Vous avez choisi la formule : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 21, $this->source); })()), "formule", []), "html", null, true);
        echo "</p>
                <div class=\"form\" style=\"display:none\">
                    <div class=\"\">
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 24, $this->source); })()), "formule", []), 'label', ["label" => " Modifier une formule "]);
        echo "
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 25, $this->source); })()), "formule", []), 'errors');
        echo "
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 26, $this->source); })()), "formule", []), 'widget', ["attr" => ["class" => "custom-select"]]);
        echo "
                    </div>
                </div>
            <!-- sessionId -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 32, $this->source); })()), "sessionId", []), 'label', ["label" => " Modifier la session "]);
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 33, $this->source); })()), "sessionId", []), 'errors');
        echo "
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 34, $this->source); })()), "sessionId", []), 'widget', ["attr" => ["class" => "custom-select"]]);
        echo "
                    </div>
                </div>
            <!-- forfait --> 
            ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 38, $this->source); })()), "formule", []) == "COURS")) {
            echo "        
                <div class=\"form top \" id=\"forfaits\">
                    <label>Choisir un Forfait</label>
                    <div class=\"row  col-12\">
                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 44, $this->source); })()), "forfait1h", []), 'errors');
            echo "
                                ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 45, $this->source); })()), "forfait1h", []), 'widget');
            echo "
                                ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 46, $this->source); })()), "forfait1h", []), 'label', ["label" => " forfait 1H "]);
            echo "
                            </div>
                        </div>
                        <div class=\"w-100\"></div>
                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 52, $this->source); })()), "forfait5h", []), 'errors');
            echo "
                                ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 53, $this->source); })()), "forfait5h", []), 'widget');
            echo "
                                ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 54, $this->source); })()), "forfait5h", []), 'label', ["label" => " forfait 5H "]);
            echo "
                            </div>
                        </div>
                        <div class=\"w-100\"></div>

                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 61, $this->source); })()), "forfait10h", []), 'errors');
            echo "
                                ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 62, $this->source); })()), "forfait10h", []), 'widget');
            echo "
                                ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 63, $this->source); })()), "forfait10h", []), 'label', ["label" => " forfait 10H "]);
            echo "
                            </div>
                        </div>
                        <div class=\"w-100\"></div>

                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 70, $this->source); })()), "forfaitAnnuel", []), 'errors');
            echo "
                                ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 71, $this->source); })()), "forfaitAnnuel", []), 'widget');
            echo "
                                ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 72, $this->source); })()), "forfaitAnnuel", []), 'label', ["label" => " forfait annuel "]);
            echo "
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 78
        echo "                
            <!-- nom -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 82, $this->source); })()), "nom", []), 'label', ["label" => "Nom de l'élève  "]);
        echo "
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 83, $this->source); })()), "nom", []), 'errors');
        echo "
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 84, $this->source); })()), "nom", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                    </div>
                </div>

            <!-- prenom -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 91, $this->source); })()), "prenom", []), 'label', ["label" => " Prénom de l'élève "]);
        echo "
                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 92, $this->source); })()), "prenom", []), 'errors');
        echo "
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 93, $this->source); })()), "prenom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- age -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 100, $this->source); })()), "age", []), 'label', ["label" => " Age de l'élève "]);
        echo "
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 101, $this->source); })()), "age", []), 'errors');
        echo "
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 102, $this->source); })()), "age", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- tel -->
                <div class=\"form\">
                    <div class=\"bottom\">
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 109, $this->source); })()), "tel", []), 'label', ["label" => " Téléphone de l'élève ou du responsable légal "]);
        echo "
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 110, $this->source); })()), "tel", []), 'errors');
        echo "
                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 111, $this->source); })()), "tel", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- prêt de planche -->
                <div class=\"form  top\">
                    <div class=\"row col-12 top caseacocher\">
                        ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 118, $this->source); })()), "planche", []), 'label', ["label" => " Prêt de planche "]);
        echo "
                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 119, $this->source); })()), "planche", []), 'errors');
        echo "
                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 120, $this->source); })()), "planche", []), 'widget');
        echo "
                    </div>
                </div>

            <!-- prêt de matériel de protection -->
                
                    <div class=\"row col-12 caseacocher\">
                        ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 127, $this->source); })()), "materiel", []), 'label', ["label" => " Prêt d'équipement de protection "]);
        echo "
                        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 128, $this->source); })()), "materiel", []), 'errors');
        echo "
                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 129, $this->source); })()), "materiel", []), 'widget');
        echo "
                    </div>
                

        <div class=\"row top\">
            <div class=\"col-12 text-center text-green\">
                Vous pourrez retrouver cette inscription à la rubrique \"mon compte\".
            </div>
        </div>
         
            
        <div class=\"row justify-content-center\" style=\"display:none\">
            <!-- valide -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 144, $this->source); })()), "valide", []), 'label', ["label" => " Résérvation Validée "]);
        echo "
                        ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 145, $this->source); })()), "valide", []), 'errors');
        echo "
                        ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 146, $this->source); })()), "valide", []), 'widget');
        echo "
                    </div>
                </div>
        </div>
        <div class=\"w-100\"></div>
        <div class=\"row top justify-content-center\">
        <button class=\"btn btn-secondary bouton\" type=\"submit\" value=\"Créer\" >Enregistrer les modifications</button>
        <div class=\"w-100\"></div>
    ";
        // line 154
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 154, $this->source); })()), 'form_end');
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

    // line 163
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "inscription_edit.html.twig", 163)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 164
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 165
        echo "<script>


\$(document).ready(function(){


var \$formule = \$('#appbundle_inscription_formule');
// When formule gets selected ...
\$formule.change(function() {

    

  // ... retrieve the corresponding form.
  var \$form = \$(this).closest('form');
  // Simulate form data, but only include the selected sport value.
  var data = {};
  data[\$formule.attr('name')] = \$formule.val();
  // Submit data via AJAX to the form's action path.

 \$.ajax({
    url : \$form.attr('action'),
    type: \$form.attr('method'),
    data : data,
    success: function(html) {
      // Replace current session field ...
      \$('#appbundle_inscription_sessionId').replaceWith(
        // ... with the returned one from the AJAX response.
        \$(html).find('#appbundle_inscription_sessionId')
      );
      // Position field now displays the appropriate positions.
    }
  })
})

;})

  
   


;

</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inscription_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 165,  430 => 164,  412 => 163,  393 => 154,  382 => 146,  378 => 145,  374 => 144,  356 => 129,  352 => 128,  348 => 127,  338 => 120,  334 => 119,  330 => 118,  320 => 111,  316 => 110,  312 => 109,  302 => 102,  298 => 101,  294 => 100,  284 => 93,  280 => 92,  276 => 91,  266 => 84,  262 => 83,  258 => 82,  252 => 78,  243 => 72,  239 => 71,  235 => 70,  225 => 63,  221 => 62,  217 => 61,  207 => 54,  203 => 53,  199 => 52,  190 => 46,  186 => 45,  182 => 44,  173 => 38,  166 => 34,  162 => 33,  158 => 32,  149 => 26,  145 => 25,  141 => 24,  135 => 21,  129 => 18,  122 => 14,  112 => 6,  103 => 5,  85 => 4,  67 => 3,  49 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block metadescription %}<meta name=\"Description\" content=\"Bordza, modifiez vos inscriptions aux cours de skateboard en ligne\">{% endblock %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}
{% block body %}
<div class=\"container-fluid identifiant justify-content-center bottom\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <h1>INSCRIPTION</h1>
            </div>
        </div>
        <div class=\"col-6\"><img class=\"img-fluid padding\" src=\"{{ asset('assets/images/skateschool/skate_andernos.jpg') }}\"></div>
        <div class=\"col-4 bottom top\">
            <div class=\"row justify-content-center\">
                <div class=\"col-11\">
    {{ form_start(edit_form) }}
            <!-- formule -->
                <div class=\"form\">
                    <p>Vous avez choisi la formule : {{ inscription.formule }}</p>
                <div class=\"form\" style=\"display:none\">
                    <div class=\"\">
                        {{ form_label(edit_form.formule, ' Modifier une formule ') }}
                        {{ form_errors(edit_form.formule) }}
                        {{ form_widget(edit_form.formule, {'attr': {'class':'custom-select'}}) }}
                    </div>
                </div>
            <!-- sessionId -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(edit_form.sessionId, ' Modifier la session ') }}
                        {{ form_errors(edit_form.sessionId) }}
                        {{ form_widget(edit_form.sessionId, {'attr': {'class':'custom-select'}}) }}
                    </div>
                </div>
            <!-- forfait --> 
            {% if inscription.formule == 'COURS' %}        
                <div class=\"form top \" id=\"forfaits\">
                    <label>Choisir un Forfait</label>
                    <div class=\"row  col-12\">
                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                {{ form_errors(edit_form.forfait1h) }}
                                {{ form_widget(edit_form.forfait1h) }}
                                {{ form_label(edit_form.forfait1h, ' forfait 1H ') }}
                            </div>
                        </div>
                        <div class=\"w-100\"></div>
                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                {{ form_errors(edit_form.forfait5h) }}
                                {{ form_widget(edit_form.forfait5h) }}
                                {{ form_label(edit_form.forfait5h, ' forfait 5H ') }}
                            </div>
                        </div>
                        <div class=\"w-100\"></div>

                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                {{ form_errors(edit_form.forfait10h) }}
                                {{ form_widget(edit_form.forfait10h) }}
                                {{ form_label(edit_form.forfait10h, ' forfait 10H ') }}
                            </div>
                        </div>
                        <div class=\"w-100\"></div>

                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                {{ form_errors(edit_form.forfaitAnnuel) }}
                                {{ form_widget(edit_form.forfaitAnnuel) }}
                                {{ form_label(edit_form.forfaitAnnuel, ' forfait annuel ') }}
                            </div>
                        </div>
                    </div>
                </div>
            {% endif %}
                
            <!-- nom -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(edit_form.nom, 'Nom de l\\'élève  ') }}
                        {{ form_errors(edit_form.nom) }}
                        {{ form_widget(edit_form.nom, {'attr': {'class':'form-control '}}) }}
                    </div>
                </div>

            <!-- prenom -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(edit_form.prenom, ' Prénom de l\\'élève ') }}
                        {{ form_errors(edit_form.prenom) }}
                        {{ form_widget(edit_form.prenom, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

            <!-- age -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(edit_form.age, ' Age de l\\'élève ') }}
                        {{ form_errors(edit_form.age) }}
                        {{ form_widget(edit_form.age, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

            <!-- tel -->
                <div class=\"form\">
                    <div class=\"bottom\">
                        {{ form_label(edit_form.tel, ' Téléphone de l\\'élève ou du responsable légal ') }}
                        {{ form_errors(edit_form.tel) }}
                        {{ form_widget(edit_form.tel, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

            <!-- prêt de planche -->
                <div class=\"form  top\">
                    <div class=\"row col-12 top caseacocher\">
                        {{ form_label(edit_form.planche, ' Prêt de planche ') }}
                        {{ form_errors(edit_form.planche) }}
                        {{ form_widget(edit_form.planche) }}
                    </div>
                </div>

            <!-- prêt de matériel de protection -->
                
                    <div class=\"row col-12 caseacocher\">
                        {{ form_label(edit_form.materiel, ' Prêt d\\'équipement de protection ') }}
                        {{ form_errors(edit_form.materiel) }}
                        {{ form_widget(edit_form.materiel) }}
                    </div>
                

        <div class=\"row top\">
            <div class=\"col-12 text-center text-green\">
                Vous pourrez retrouver cette inscription à la rubrique \"mon compte\".
            </div>
        </div>
         
            
        <div class=\"row justify-content-center\" style=\"display:none\">
            <!-- valide -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(edit_form.valide, ' Résérvation Validée ') }}
                        {{ form_errors(edit_form.valide) }}
                        {{ form_widget(edit_form.valide) }}
                    </div>
                </div>
        </div>
        <div class=\"w-100\"></div>
        <div class=\"row top justify-content-center\">
        <button class=\"btn btn-secondary bouton\" type=\"submit\" value=\"Créer\" >Enregistrer les modifications</button>
        <div class=\"w-100\"></div>
    {{ form_end(edit_form) }}
            
    </div>
    </div>
    </div>
    </div>
    </div>

{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}
{% block javascripts %}
<script>


\$(document).ready(function(){


var \$formule = \$('#appbundle_inscription_formule');
// When formule gets selected ...
\$formule.change(function() {

    

  // ... retrieve the corresponding form.
  var \$form = \$(this).closest('form');
  // Simulate form data, but only include the selected sport value.
  var data = {};
  data[\$formule.attr('name')] = \$formule.val();
  // Submit data via AJAX to the form's action path.

 \$.ajax({
    url : \$form.attr('action'),
    type: \$form.attr('method'),
    data : data,
    success: function(html) {
      // Replace current session field ...
      \$('#appbundle_inscription_sessionId').replaceWith(
        // ... with the returned one from the AJAX response.
        \$(html).find('#appbundle_inscription_sessionId')
      );
      // Position field now displays the appropriate positions.
    }
  })
})

;})

  
   


;

</script>

{% endblock %}
", "inscription_edit.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/inscription_edit.html.twig");
    }
}
