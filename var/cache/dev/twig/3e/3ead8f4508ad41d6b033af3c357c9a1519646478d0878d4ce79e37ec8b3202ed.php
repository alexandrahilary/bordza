<?php

/* inscription/edit.html.twig */
class __TwigTemplate_626bf2778e0b61cc98fa53e36e2689cde0177681d7797b3e473f9b43f13ca8ad extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "inscription/edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription/edit.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "inscription/edit.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "inscription/edit.html.twig", 3)->display($context);
        
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
        echo " <div class=\"container-fluid identifiant justify-content-center bottom\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <h1 class=\"text-center\">MODIFIEZ L'INSCRIPTION</h1>
            </div>
        </div>
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-11 col-xl-4 top\">
            <div class=\"row justify-content-center\">
                <div class=\"col-11\">
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
            <!-- formule -->
                <div class=\"form\">
                    <p>Vous avez choisi la formule : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 20, $this->source); })()), "formule", []), "html", null, true);
        echo "</p>
                <div class=\"form\" style=\"display:none\">
                    <div class=\"\">
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 23, $this->source); })()), "formule", []), 'label', ["label" => " Modifier une formule "]);
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 24, $this->source); })()), "formule", []), 'errors');
        echo "
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 25, $this->source); })()), "formule", []), 'widget', ["attr" => ["class" => "custom-select"]]);
        echo "
                    </div>
                </div>
            <!-- sessionId -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 31, $this->source); })()), "sessionId", []), 'label', ["label" => " Modifier la session "]);
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 32, $this->source); })()), "sessionId", []), 'errors');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 33, $this->source); })()), "sessionId", []), 'widget', ["attr" => ["class" => "custom-select"]]);
        echo "
                    </div>
                </div>
            <!-- forfait --> 
            ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 37, $this->source); })()), "formule", []) == "COURS")) {
            echo "        
                <div class=\"form top \" id=\"forfaits\">
                    <label>Choisir un Forfait</label>
                    <div class=\"row  col-12\">
                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 43, $this->source); })()), "forfait1h", []), 'errors');
            echo "
                                ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 44, $this->source); })()), "forfait1h", []), 'widget');
            echo "
                                ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 45, $this->source); })()), "forfait1h", []), 'label', ["label" => " forfait 1H "]);
            echo "
                            </div>
                        </div>
                        <div class=\"w-100\"></div>
                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 51, $this->source); })()), "forfait5h", []), 'errors');
            echo "
                                ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 52, $this->source); })()), "forfait5h", []), 'widget');
            echo "
                                ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 53, $this->source); })()), "forfait5h", []), 'label', ["label" => " forfait 5H "]);
            echo "
                            </div>
                        </div>
                        <div class=\"w-100\"></div>

                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 60, $this->source); })()), "forfait10h", []), 'errors');
            echo "
                                ";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 61, $this->source); })()), "forfait10h", []), 'widget');
            echo "
                                ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 62, $this->source); })()), "forfait10h", []), 'label', ["label" => " forfait 10H "]);
            echo "
                            </div>
                        </div>
                        <div class=\"w-100\"></div>

                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 69, $this->source); })()), "forfaitAnnuel", []), 'errors');
            echo "
                                ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 70, $this->source); })()), "forfaitAnnuel", []), 'widget');
            echo "
                                ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 71, $this->source); })()), "forfaitAnnuel", []), 'label', ["label" => " forfait annuel "]);
            echo "
                            </div>
                        </div>
                    </div>
                </div>
            ";
        } else {
            // line 77
            echo "                <div class=\"hidden \" id=\"forfaits\">
                    <label>Choisir un Forfait</label>
                    <div class=\"row  col-12\">
                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 82, $this->source); })()), "forfait1h", []), 'errors');
            echo "
                                ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 83, $this->source); })()), "forfait1h", []), 'widget');
            echo "
                                ";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 84, $this->source); })()), "forfait1h", []), 'label', ["label" => " forfait 1H "]);
            echo "
                            </div>
                        </div>
                        <div class=\"w-100\"></div>
                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 90, $this->source); })()), "forfait5h", []), 'errors');
            echo "
                                ";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 91, $this->source); })()), "forfait5h", []), 'widget');
            echo "
                                ";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 92, $this->source); })()), "forfait5h", []), 'label', ["label" => " forfait 5H "]);
            echo "
                            </div>
                        </div>
                        <div class=\"w-100\"></div>

                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 99, $this->source); })()), "forfait10h", []), 'errors');
            echo "
                                ";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 100, $this->source); })()), "forfait10h", []), 'widget');
            echo "
                                ";
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 101, $this->source); })()), "forfait10h", []), 'label', ["label" => " forfait 10H "]);
            echo "
                            </div>
                        </div>
                        <div class=\"w-100\"></div>

                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 108, $this->source); })()), "forfaitAnnuel", []), 'errors');
            echo "
                                ";
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 109, $this->source); })()), "forfaitAnnuel", []), 'widget');
            echo "
                                ";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 110, $this->source); })()), "forfaitAnnuel", []), 'label', ["label" => " forfait annuel "]);
            echo "
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 116
        echo "                
            <!-- nom -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 120, $this->source); })()), "nom", []), 'label', ["label" => "Nom de l'élève  "]);
        echo "
                        ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 121, $this->source); })()), "nom", []), 'errors');
        echo "
                        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 122, $this->source); })()), "nom", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                    </div>
                </div>

            <!-- prenom -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 129, $this->source); })()), "prenom", []), 'label', ["label" => " Prénom de l'élève "]);
        echo "
                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 130, $this->source); })()), "prenom", []), 'errors');
        echo "
                        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 131, $this->source); })()), "prenom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- age -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 138, $this->source); })()), "age", []), 'label', ["label" => " Age de l'élève "]);
        echo "
                        ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 139, $this->source); })()), "age", []), 'errors');
        echo "
                        ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 140, $this->source); })()), "age", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- tel -->
                <div class=\"form\">
                    <div class=\"bottom\">
                        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 147, $this->source); })()), "tel", []), 'label', ["label" => " Téléphone de l'élève ou du responsable légal "]);
        echo "
                        ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 148, $this->source); })()), "tel", []), 'errors');
        echo "
                        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 149, $this->source); })()), "tel", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- prêt de planche -->
                <div class=\"form  top\">
                    <div class=\"row col-12 top caseacocher\">
                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 156, $this->source); })()), "planche", []), 'label', ["label" => " Prêt de planche "]);
        echo "
                        ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 157, $this->source); })()), "planche", []), 'errors');
        echo "
                        ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 158, $this->source); })()), "planche", []), 'widget');
        echo "
                    </div>
                </div>

            <!-- prêt de matériel de protection -->
                
                    <div class=\"row col-12 caseacocher\">
                        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 165, $this->source); })()), "materiel", []), 'label', ["label" => " Prêt d'équipement de protection "]);
        echo "
                        ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 166, $this->source); })()), "materiel", []), 'errors');
        echo "
                        ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 167, $this->source); })()), "materiel", []), 'widget');
        echo "
                    </div>
                <div class=\"w-100\"></div>

            <!-- userId -->
                <div class=\"text\">Inscrit sur le compte utilisateur : ";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 172, $this->source); })()), "userId", []), "html", null, true);
        echo "</div>
                <div class=\"w-100\"></div>

            <!-- valide -->
                <div class=\"form text col-12\">
                    <div class=\"col-12 text-center\">
                        ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 178, $this->source); })()), "valide", []), 'label', (twig_test_empty($_label_ = twig_upper_filter($this->env, " Valider la réservation ")) ? [] : ["label" => $_label_]));
        echo "
                        ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 179, $this->source); })()), "valide", []), 'errors');
        echo "
                        ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 180, $this->source); })()), "valide", []), 'widget');
        echo "
                    </div>
                </div>
        </div>
        <div class=\"w-100\"></div>
        <div class=\"row justify-content-center\">
        <button class=\"btn btn-secondary bouton\" type=\"submit\" value=\"Créer\" >Enregistrer les modifications<br/>
                                                                                et envoyer un email à ";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new Twig_Error_Runtime('Variable "inscription" does not exist.', 187, $this->source); })()), "userId", []), "html", null, true);
        echo "</button>
        <div class=\"w-100\"></div>
    ";
        // line 189
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 189, $this->source); })()), 'form_end');
        echo "
            <div class=\"w-100\"></div>
            ";
        // line 191
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 191, $this->source); })()), 'form_start');
        echo "
            <button class=\"btn btn-danger bouton\" type=\"submit\" value=\"Delete\">Supprimer</button>
            ";
        // line 193
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 193, $this->source); })()), 'form_end');
        echo "
        </div>
        <div class=\"w-100\"></div>
        <div class=\"row justify-content-center\">
            <a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inscription_index");
        echo "\" class=\"text\"><- Retour aux Inscriptions</a>
        
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
            
        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 208
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "inscription/edit.html.twig", 208)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inscription/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 208,  466 => 197,  459 => 193,  454 => 191,  449 => 189,  444 => 187,  434 => 180,  430 => 179,  426 => 178,  417 => 172,  409 => 167,  405 => 166,  401 => 165,  391 => 158,  387 => 157,  383 => 156,  373 => 149,  369 => 148,  365 => 147,  355 => 140,  351 => 139,  347 => 138,  337 => 131,  333 => 130,  329 => 129,  319 => 122,  315 => 121,  311 => 120,  305 => 116,  296 => 110,  292 => 109,  288 => 108,  278 => 101,  274 => 100,  270 => 99,  260 => 92,  256 => 91,  252 => 90,  243 => 84,  239 => 83,  235 => 82,  228 => 77,  219 => 71,  215 => 70,  211 => 69,  201 => 62,  197 => 61,  193 => 60,  183 => 53,  179 => 52,  175 => 51,  166 => 45,  162 => 44,  158 => 43,  149 => 37,  142 => 33,  138 => 32,  134 => 31,  125 => 25,  121 => 24,  117 => 23,  111 => 20,  105 => 17,  92 => 6,  83 => 5,  65 => 3,  47 => 2,  15 => 1,);
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
                <h1 class=\"text-center\">MODIFIEZ L'INSCRIPTION</h1>
            </div>
        </div>
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-11 col-xl-4 top\">
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
            {% else %}
                <div class=\"hidden \" id=\"forfaits\">
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
                <div class=\"w-100\"></div>

            <!-- userId -->
                <div class=\"text\">Inscrit sur le compte utilisateur : {{ inscription.userId }}</div>
                <div class=\"w-100\"></div>

            <!-- valide -->
                <div class=\"form text col-12\">
                    <div class=\"col-12 text-center\">
                        {{ form_label(edit_form.valide, ' Valider la réservation '| upper) }}
                        {{ form_errors(edit_form.valide) }}
                        {{ form_widget(edit_form.valide) }}
                    </div>
                </div>
        </div>
        <div class=\"w-100\"></div>
        <div class=\"row justify-content-center\">
        <button class=\"btn btn-secondary bouton\" type=\"submit\" value=\"Créer\" >Enregistrer les modifications<br/>
                                                                                et envoyer un email à {{ inscription.userId }}</button>
        <div class=\"w-100\"></div>
    {{ form_end(edit_form) }}
            <div class=\"w-100\"></div>
            {{ form_start(delete_form) }}
            <button class=\"btn btn-danger bouton\" type=\"submit\" value=\"Delete\">Supprimer</button>
            {{ form_end(delete_form) }}
        </div>
        <div class=\"w-100\"></div>
        <div class=\"row justify-content-center\">
            <a href=\"{{ path('admin_inscription_index') }}\" class=\"text\"><- Retour aux Inscriptions</a>
        
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
            
        
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "inscription/edit.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/inscription/edit.html.twig");
    }
}
