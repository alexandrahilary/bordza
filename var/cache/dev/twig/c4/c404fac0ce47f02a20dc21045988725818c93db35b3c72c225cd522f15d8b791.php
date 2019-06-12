<?php

/* inscription.html.twig */
class __TwigTemplate_6f6fc58ae85c6eeb06e13480f1f6977b217d07569eaeae4ee7673ea06fa1b8bc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "inscription.html.twig", 1);
        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "inscription.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "inscription.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container-fluid identifiant justify-content-center bottom\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <h1>INSCRIPTION</h1>
            </div>
        </div>
        <div class=\"col-6\"><img class=\"img-fluid padding\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/skateschool/skate_andernos.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"col-4 bottom top\">
            <div class=\"row justify-content-center\">
                <div class=\"col-11\">
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
            <!-- formule -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "formule", []), 'label', ["label" => " Choisir une formule "]);
        echo "
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "formule", []), 'errors');
        echo "
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "formule", []), 'widget', ["attr" => ["class" => "custom-select"]]);
        echo "
                    </div>
                </div>
            <!-- sessionId -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "sessionId", []), 'label', ["label" => " Choisir une session "]);
        echo "
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "sessionId", []), 'errors');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "sessionId", []), 'widget', ["attr" => ["class" => "custom-select"]]);
        echo "
                    </div>
                </div>
            <!-- forfait -->         
                <div class=\"form top hidden\" id=\"forfaits\">
                    <label>Choisir un Forfait</label>
                    <div class=\"row  col-12\">
                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "forfait1h", []), 'errors');
        echo "
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "forfait1h", []), 'widget');
        echo "
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "forfait1h", []), 'label', ["label" => " forfait 1H "]);
        echo "
                            </div>
                        </div>
                        <div class=\"w-100\"></div>
                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "forfait5h", []), 'errors');
        echo "
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "forfait5h", []), 'widget');
        echo "
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "forfait5h", []), 'label', ["label" => " forfait 5H "]);
        echo "
                            </div>
                        </div>
                        <div class=\"w-100\"></div>

                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "forfait10h", []), 'errors');
        echo "
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "forfait10h", []), 'widget');
        echo "
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "forfait10h", []), 'label', ["label" => " forfait 10H "]);
        echo "
                            </div>
                        </div>
                        <div class=\"w-100\"></div>

                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "forfaitAnnuel", []), 'errors');
        echo "
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), "forfaitAnnuel", []), 'widget');
        echo "
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "forfaitAnnuel", []), 'label', ["label" => " forfait annuel "]);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                
            <!-- nom -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), "nom", []), 'label', ["label" => "Nom de l'élève  *"]);
        echo "
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "nom", []), 'errors');
        echo "
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), "nom", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                    </div>
                </div>

            <!-- prenom -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->source); })()), "prenom", []), 'label', ["label" => " Prénom de l'élève  *"]);
        echo "
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), "prenom", []), 'errors');
        echo "
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->source); })()), "prenom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- age -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->source); })()), "age", []), 'label', ["label" => " Age de l'élève  *"]);
        echo "
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->source); })()), "age", []), 'errors');
        echo "
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 97, $this->source); })()), "age", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- tel -->
                <div class=\"form\">
                    <div class=\"bottom\">
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 104, $this->source); })()), "tel", []), 'label', ["label" => " Téléphone de l'élève ou du responsable légal  *"]);
        echo "
                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->source); })()), "tel", []), 'errors');
        echo "
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->source); })()), "tel", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- prêt de planche -->
                <div class=\"form  top\">
                    <div class=\"row col-12 top caseacocher\">
                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 113, $this->source); })()), "planche", []), 'errors');
        echo "
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->source); })()), "planche", []), 'widget');
        echo "
                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->source); })()), "planche", []), 'label', ["label" => " Prêt de planche "]);
        echo "
                    </div>
                </div>

            <!-- prêt de matériel de protection -->
                
                    <div class=\"row col-12 caseacocher\">
                        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 122, $this->source); })()), "materiel", []), 'errors');
        echo "
                        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->source); })()), "materiel", []), 'widget');
        echo "
                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 124, $this->source); })()), "materiel", []), 'label', ["label" => " Prêt d'équipement de protection "]);
        echo "
                    </div>
                

        <div class=\"row top\">
            <div class=\"col-12 text-green\">
                <p>Une inscription par personne. Si vous souhaitez inscrire 
                 plusieurs élèves, merci de remplir le formulaire pour chaque participant.<br/>
                 Vous pourrez retrouver le récapitulatif de cette inscription et en suivre sa validation
                 à la rubrique \"mon compte\". </p>
            </div>
        </div>
        <div class=\"w-100\"></div>
        <div class=\" text-green\">
            <p>*Toutes les informations collectées servent à organiser les
            cours en fonction des ages et à nous permettre de vous prévenir rapidement en cas de météo défavorable ou de tout autre motif de repport ou d'annulation
            d'un cours. Pour cela veillez à bien noter un numéro de téléphone valide. Ce numéro servira également au professeur afin de rentrer en contact avec vous 
            avant de valider l'inscription. Les informations collectées ne seront transmises qu'au professeur 
            concerné, elles ne seront en aucun cas divulguées.</p>
        </div> 
            
        <div class=\"row justify-content-center\" style=\"display:none\">
            <!-- valide -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->source); })()), "valide", []), 'label', ["label" => " Résérvation Validée "]);
        echo "
                        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 150, $this->source); })()), "valide", []), 'errors');
        echo "
                        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 151, $this->source); })()), "valide", []), 'widget');
        echo "
                    </div>
                </div>
        </div>
        <div class=\"w-100\"></div>
        <div class=\"row top justify-content-center\">
        <button class=\"btn btn-secondary bouton\" type=\"submit\" value=\"Créer\" >Enregistrer l'inscription</button>
        <div class=\"w-100\"></div>
    ";
        // line 159
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->source); })()), 'form_end');
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

    // line 168
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "inscription.html.twig", 168)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 169
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 170
        echo "<script>


\$(document).ready(function(){

var forfaits = document.getElementById('forfaits');
var \$formule = \$('#appbundle_inscription_formule');
// When fomrule gets selected ...
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
\$formule.change(function(){
    var newVal = \$formule.val();
    console.log(newVal);
    if (newVal == 1){
        \$(forfaits).addClass(\"show\");
        \$(forfaits).removeClass(\"hidden\");
    }
    if (newVal == 2){
        \$(forfaits).addClass(\"hidden\");
        \$(forfaits).removeClass(\"show\")
    }else{
        return;
    }
;})

  
   
} 

);

</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 170,  409 => 169,  391 => 168,  372 => 159,  361 => 151,  357 => 150,  353 => 149,  325 => 124,  321 => 123,  317 => 122,  307 => 115,  303 => 114,  299 => 113,  289 => 106,  285 => 105,  281 => 104,  271 => 97,  267 => 96,  263 => 95,  253 => 88,  249 => 87,  245 => 86,  235 => 79,  231 => 78,  227 => 77,  215 => 68,  211 => 67,  207 => 66,  197 => 59,  193 => 58,  189 => 57,  179 => 50,  175 => 49,  171 => 48,  162 => 42,  158 => 41,  154 => 40,  142 => 31,  138 => 30,  134 => 29,  125 => 23,  121 => 22,  117 => 21,  110 => 17,  103 => 13,  93 => 5,  84 => 4,  66 => 3,  48 => 2,  15 => 1,);
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
                <h1>INSCRIPTION</h1>
            </div>
        </div>
        <div class=\"col-6\"><img class=\"img-fluid padding\" src=\"{{ asset('assets/images/skateschool/skate_andernos.jpg') }}\"></div>
        <div class=\"col-4 bottom top\">
            <div class=\"row justify-content-center\">
                <div class=\"col-11\">
    {{ form_start(form) }}
            <!-- formule -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.formule, ' Choisir une formule ') }}
                        {{ form_errors(form.formule) }}
                        {{ form_widget(form.formule, {'attr': {'class':'custom-select'}}) }}
                    </div>
                </div>
            <!-- sessionId -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.sessionId, ' Choisir une session ') }}
                        {{ form_errors(form.sessionId) }}
                        {{ form_widget(form.sessionId, {'attr': {'class':'custom-select'}}) }}
                    </div>
                </div>
            <!-- forfait -->         
                <div class=\"form top hidden\" id=\"forfaits\">
                    <label>Choisir un Forfait</label>
                    <div class=\"row  col-12\">
                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                {{ form_errors(form.forfait1h) }}
                                {{ form_widget(form.forfait1h) }}
                                {{ form_label(form.forfait1h, ' forfait 1H ') }}
                            </div>
                        </div>
                        <div class=\"w-100\"></div>
                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                {{ form_errors(form.forfait5h) }}
                                {{ form_widget(form.forfait5h) }}
                                {{ form_label(form.forfait5h, ' forfait 5H ') }}
                            </div>
                        </div>
                        <div class=\"w-100\"></div>

                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                {{ form_errors(form.forfait10h) }}
                                {{ form_widget(form.forfait10h) }}
                                {{ form_label(form.forfait10h, ' forfait 10H ') }}
                            </div>
                        </div>
                        <div class=\"w-100\"></div>

                        <div class=\"col\">
                            <div class=\"row caseacocher\">
                                {{ form_errors(form.forfaitAnnuel) }}
                                {{ form_widget(form.forfaitAnnuel) }}
                                {{ form_label(form.forfaitAnnuel, ' forfait annuel ') }}
                            </div>
                        </div>
                    </div>
                </div>
                
            <!-- nom -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.nom, 'Nom de l\\'élève  *') }}
                        {{ form_errors(form.nom) }}
                        {{ form_widget(form.nom, {'attr': {'class':'form-control '}}) }}
                    </div>
                </div>

            <!-- prenom -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.prenom, ' Prénom de l\\'élève  *') }}
                        {{ form_errors(form.prenom) }}
                        {{ form_widget(form.prenom, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

            <!-- age -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.age, ' Age de l\\'élève  *') }}
                        {{ form_errors(form.age) }}
                        {{ form_widget(form.age, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

            <!-- tel -->
                <div class=\"form\">
                    <div class=\"bottom\">
                        {{ form_label(form.tel, ' Téléphone de l\\'élève ou du responsable légal  *') }}
                        {{ form_errors(form.tel) }}
                        {{ form_widget(form.tel, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

            <!-- prêt de planche -->
                <div class=\"form  top\">
                    <div class=\"row col-12 top caseacocher\">
                        {{ form_errors(form.planche) }}
                        {{ form_widget(form.planche) }}
                        {{ form_label(form.planche, ' Prêt de planche ') }}
                    </div>
                </div>

            <!-- prêt de matériel de protection -->
                
                    <div class=\"row col-12 caseacocher\">
                        {{ form_errors(form.materiel) }}
                        {{ form_widget(form.materiel) }}
                        {{ form_label(form.materiel, ' Prêt d\\'équipement de protection ') }}
                    </div>
                

        <div class=\"row top\">
            <div class=\"col-12 text-green\">
                <p>Une inscription par personne. Si vous souhaitez inscrire 
                 plusieurs élèves, merci de remplir le formulaire pour chaque participant.<br/>
                 Vous pourrez retrouver le récapitulatif de cette inscription et en suivre sa validation
                 à la rubrique \"mon compte\". </p>
            </div>
        </div>
        <div class=\"w-100\"></div>
        <div class=\" text-green\">
            <p>*Toutes les informations collectées servent à organiser les
            cours en fonction des ages et à nous permettre de vous prévenir rapidement en cas de météo défavorable ou de tout autre motif de repport ou d'annulation
            d'un cours. Pour cela veillez à bien noter un numéro de téléphone valide. Ce numéro servira également au professeur afin de rentrer en contact avec vous 
            avant de valider l'inscription. Les informations collectées ne seront transmises qu'au professeur 
            concerné, elles ne seront en aucun cas divulguées.</p>
        </div> 
            
        <div class=\"row justify-content-center\" style=\"display:none\">
            <!-- valide -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.valide, ' Résérvation Validée ') }}
                        {{ form_errors(form.valide) }}
                        {{ form_widget(form.valide) }}
                    </div>
                </div>
        </div>
        <div class=\"w-100\"></div>
        <div class=\"row top justify-content-center\">
        <button class=\"btn btn-secondary bouton\" type=\"submit\" value=\"Créer\" >Enregistrer l'inscription</button>
        <div class=\"w-100\"></div>
    {{ form_end(form) }}
            
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

var forfaits = document.getElementById('forfaits');
var \$formule = \$('#appbundle_inscription_formule');
// When fomrule gets selected ...
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
\$formule.change(function(){
    var newVal = \$formule.val();
    console.log(newVal);
    if (newVal == 1){
        \$(forfaits).addClass(\"show\");
        \$(forfaits).removeClass(\"hidden\");
    }
    if (newVal == 2){
        \$(forfaits).addClass(\"hidden\");
        \$(forfaits).removeClass(\"show\")
    }else{
        return;
    }
;})

  
   
} 

);

</script>

{% endblock %}
", "inscription.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/inscription.html.twig");
    }
}
