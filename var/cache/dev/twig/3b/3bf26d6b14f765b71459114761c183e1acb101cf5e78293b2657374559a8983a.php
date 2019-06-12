<?php

/* inscription/new.html.twig */
class __TwigTemplate_8e6f1bb6cc9cde6eeb398b05f873490b56343090ea2ce1276213fdec0b660ff2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "inscription/new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription/new.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "inscription/new.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "inscription/new.html.twig", 3)->display($context);
        
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
                <h1 class=\"text-center\">NOUVELLE INSCRIPTION</h1>
            </div>
        </div>
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-11 col-xl-5  top\">
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
                    <div class=\"row  col-12 justify-content-around\">
                        <div class=\"col-3\">
                            <div class=\"row caseacocher\">
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "forfait1h", []), 'label', ["label" => " forfait 1H "]);
        echo "
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "forfait1h", []), 'errors');
        echo "
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "forfait1h", []), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-3\">
                            <div class=\"row caseacocher\">
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "forfait5h", []), 'label', ["label" => " forfait 5H "]);
        echo "
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "forfait5h", []), 'errors');
        echo "
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "forfait5h", []), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-3\">
                            <div class=\"row caseacocher\">
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "forfait10h", []), 'label', ["label" => " forfait 10H "]);
        echo "
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "forfait10h", []), 'errors');
        echo "
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "forfait10h", []), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-3\">
                            <div class=\"row caseacocher\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "forfaitAnnuel", []), 'label', ["label" => " forfait annuel "]);
        echo "
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "forfaitAnnuel", []), 'errors');
        echo "
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "forfaitAnnuel", []), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            <!-- nom -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), "nom", []), 'label', ["label" => "Nom de l'élève  "]);
        echo "
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "nom", []), 'errors');
        echo "
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "nom", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                    </div>
                </div>

            <!-- prenom -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), "prenom", []), 'label', ["label" => " Prénom de l'élève "]);
        echo "
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->source); })()), "prenom", []), 'errors');
        echo "
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), "prenom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- age -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), "age", []), 'label', ["label" => " Age de l'élève "]);
        echo "
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->source); })()), "age", []), 'errors');
        echo "
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->source); })()), "age", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>

            <!-- tel -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->source); })()), "tel", []), 'label', ["label" => " Téléphone de l'élève ou du responsable légal "]);
        echo "
                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->source); })()), "tel", []), 'errors');
        echo "
                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->source); })()), "tel", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
            
            <!-- userId -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->source); })()), "userId", []), 'label', ["label" => " Utilisateur "]);
        echo "
                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->source); })()), "userId", []), 'errors');
        echo "
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 109, $this->source); })()), "userId", []), 'widget', ["attr" => ["class" => "custom-select"]]);
        echo "
                    </div>
                </div>
                 
        <div class=\"row justify-content-center\">
            <!-- prêt de planche -->
                <div class=\"form text\">
                    <div class=\"\">
                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->source); })()), "planche", []), 'label', ["label" => " Prêt de planche "]);
        echo "
                        ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->source); })()), "planche", []), 'errors');
        echo "
                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 119, $this->source); })()), "planche", []), 'widget');
        echo "
                    </div>
                </div>

            <!-- prêt de matériel de protection -->
                <div class=\"form text\">
                    <div class=\"\">
                        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 126, $this->source); })()), "materiel", []), 'label', ["label" => " Prêt de protections "]);
        echo "
                        ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->source); })()), "materiel", []), 'errors');
        echo "
                        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->source); })()), "materiel", []), 'widget');
        echo "
                    </div>
                </div>

            <!-- valide -->
                <div class=\"form text\">
                    <div class=\"\">
                        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->source); })()), "valide", []), 'label', ["label" => " Valider la réservation "]);
        echo "
                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 136, $this->source); })()), "valide", []), 'errors');
        echo "
                        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 137, $this->source); })()), "valide", []), 'widget');
        echo "
                    </div>
                </div>
        </div>
        <div class=\"w-100\"></div>
        <div class=\"row justify-content-center\">
        <button class=\"btn btn-secondary bouton\" type=\"submit\" value=\"Créer\" >Ajouter une Inscription<br/>
                                                                                et prévenir l'Utilisateur par email</button>
        <div class=\"w-100\"></div>
    ";
        // line 146
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->source); })()), 'form_end');
        echo "
            <a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inscription_index");
        echo "\" class=\"text\"><- Retour aux inscriptions</a>
        
    </div>
    </div>
    </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 155
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "inscription/new.html.twig", 155)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 156
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 157
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
        return "inscription/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 157,  404 => 156,  386 => 155,  368 => 147,  364 => 146,  352 => 137,  348 => 136,  344 => 135,  334 => 128,  330 => 127,  326 => 126,  316 => 119,  312 => 118,  308 => 117,  297 => 109,  293 => 108,  289 => 107,  279 => 100,  275 => 99,  271 => 98,  261 => 91,  257 => 90,  253 => 89,  243 => 82,  239 => 81,  235 => 80,  225 => 73,  221 => 72,  217 => 71,  206 => 63,  202 => 62,  198 => 61,  190 => 56,  186 => 55,  182 => 54,  174 => 49,  170 => 48,  166 => 47,  158 => 42,  154 => 41,  150 => 40,  138 => 31,  134 => 30,  130 => 29,  121 => 23,  117 => 22,  113 => 21,  106 => 17,  93 => 6,  84 => 5,  66 => 3,  48 => 2,  15 => 1,);
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
                <h1 class=\"text-center\">NOUVELLE INSCRIPTION</h1>
            </div>
        </div>
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-11 col-xl-5  top\">
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
                    <div class=\"row  col-12 justify-content-around\">
                        <div class=\"col-3\">
                            <div class=\"row caseacocher\">
                                {{ form_label(form.forfait1h, ' forfait 1H ') }}
                                {{ form_errors(form.forfait1h) }}
                                {{ form_widget(form.forfait1h) }}
                            </div>
                        </div>
                        <div class=\"col-3\">
                            <div class=\"row caseacocher\">
                                {{ form_label(form.forfait5h, ' forfait 5H ') }}
                                {{ form_errors(form.forfait5h) }}
                                {{ form_widget(form.forfait5h) }}
                            </div>
                        </div>
                        <div class=\"col-3\">
                            <div class=\"row caseacocher\">
                                {{ form_label(form.forfait10h, ' forfait 10H ') }}
                                {{ form_errors(form.forfait10h) }}
                                {{ form_widget(form.forfait10h) }}
                            </div>
                        </div>
                        <div class=\"col-3\">
                            <div class=\"row caseacocher\">
                                {{ form_label(form.forfaitAnnuel, ' forfait annuel ') }}
                                {{ form_errors(form.forfaitAnnuel) }}
                                {{ form_widget(form.forfaitAnnuel) }}
                            </div>
                        </div>
                    </div>
                </div>
            <!-- nom -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.nom, 'Nom de l\\'élève  ') }}
                        {{ form_errors(form.nom) }}
                        {{ form_widget(form.nom, {'attr': {'class':'form-control '}}) }}
                    </div>
                </div>

            <!-- prenom -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.prenom, ' Prénom de l\\'élève ') }}
                        {{ form_errors(form.prenom) }}
                        {{ form_widget(form.prenom, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

            <!-- age -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.age, ' Age de l\\'élève ') }}
                        {{ form_errors(form.age) }}
                        {{ form_widget(form.age, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>

            <!-- tel -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.tel, ' Téléphone de l\\'élève ou du responsable légal ') }}
                        {{ form_errors(form.tel) }}
                        {{ form_widget(form.tel, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>
            
            <!-- userId -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.userId, ' Utilisateur ') }}
                        {{ form_errors(form.userId) }}
                        {{ form_widget(form.userId, {'attr': {'class':'custom-select'}}) }}
                    </div>
                </div>
                 
        <div class=\"row justify-content-center\">
            <!-- prêt de planche -->
                <div class=\"form text\">
                    <div class=\"\">
                        {{ form_label(form.planche, ' Prêt de planche ') }}
                        {{ form_errors(form.planche) }}
                        {{ form_widget(form.planche) }}
                    </div>
                </div>

            <!-- prêt de matériel de protection -->
                <div class=\"form text\">
                    <div class=\"\">
                        {{ form_label(form.materiel, ' Prêt de protections ') }}
                        {{ form_errors(form.materiel) }}
                        {{ form_widget(form.materiel) }}
                    </div>
                </div>

            <!-- valide -->
                <div class=\"form text\">
                    <div class=\"\">
                        {{ form_label(form.valide, ' Valider la réservation ') }}
                        {{ form_errors(form.valide) }}
                        {{ form_widget(form.valide) }}
                    </div>
                </div>
        </div>
        <div class=\"w-100\"></div>
        <div class=\"row justify-content-center\">
        <button class=\"btn btn-secondary bouton\" type=\"submit\" value=\"Créer\" >Ajouter une Inscription<br/>
                                                                                et prévenir l'Utilisateur par email</button>
        <div class=\"w-100\"></div>
    {{ form_end(form) }}
            <a href=\"{{ path('admin_inscription_index') }}\" class=\"text\"><- Retour aux inscriptions</a>
        
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

{% endblock %}", "inscription/new.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/inscription/new.html.twig");
    }
}
