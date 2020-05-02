<?php

/* formulaire_contact.html.twig */
class __TwigTemplate_2b8b3f6e9305a7137c39133bf480a6323bcf053f86b4ffc3420036661b035e45 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulaire_contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulaire_contact.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "col-12 "]]);
        echo "
    <div class=\"row justify-content-center\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\">
            <!-- nom -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "nom", []), 'label', ["label" => "Nom :"]);
        echo "
                        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), "nom", []), 'errors');
        echo "
                        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "nom", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                    </div>
                </div>
            
            <!-- prenom -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "prenom", []), 'label', ["label" => "Prénom : "]);
        echo "
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "prenom", []), 'errors');
        echo "
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "prenom", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                    </div>
                </div>

            <!-- mail -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "mail", []), 'label', ["label" => "E-mail : "]);
        echo "
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "mail", []), 'errors');
        echo "
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "mail", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                    </div>
                </div>
                <button class=\"btn btn-light bouton top\" id=\"ajouter\" type=\"button\">Joindre une image</button>
                <!-- image -->
                <!-- pathimage -->
                <div class=\"form upload\">
                    <div class=\"input-group \">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "image", []), "pathimage", []), 'label', ["label" => "Choisir une image"]);
        echo "
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "image", []), "pathimage", []), 'errors');
        echo "
                        <div class=\"w-100\"></div>
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "image", []), "pathimage", []), 'widget', ["attr" => ["class" => "form-control-file\""]]);
        echo "
                    </div>
                </div>
                <!-- alt -->
                <div class=\"form cache\">
                    <div class=\"\">
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "image", []), "alt", []), 'label', ["label" => "Description de l'image / Référencement"]);
        echo "
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "image", []), "alt", []), 'errors');
        echo "
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "image", []), "alt", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <!-- credit photo -->
                    <div class=\"form cache\">
                        <div class=\"\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "image", []), "creditPhoto", []), 'label', ["label" => "Crédit Photo"]);
        echo "
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "image", []), "creditPhoto", []), 'errors');
        echo "
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "image", []), "creditPhoto", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
            </div>
            <div class=\"col-11 col-sm-11 col-md-11 col-lg-9 col-xl-9\">
            
            <!-- objet -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "objet", []), 'label', ["label" => "Objet : "]);
        echo "
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "objet", []), 'errors');
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "objet", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                    </div>
                </div>

            <!-- message -->
                <div class=\"form\">
                    <div class=\"\">
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "message", []), 'label', ["label" => "Message : "]);
        echo "
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "message", []), 'errors');
        echo "
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), "message", []), 'widget', ["attr" => ["class" => "form-control textarea"]]);
        echo "
                    </div>
                </div>
                

            <!-- traite -->
                <div class=\"form text cache\">
                    <div class=\"\">
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), "traite", []), 'label', ["label" => "Marquer le message comme Traité"]);
        echo "
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), "traite", []), 'errors');
        echo "
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->source); })()), "traite", []), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"form bouton top\">
                <div class=\"row justify-content-center\">
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->source); })()), 'widget');
        echo "
                    <button class=\"btn btn-secondary\" type=\"submit\" value=\"Edit\">Envoyer le Message</button>
                    ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>

";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "<script>
var imageUpload = document.getElementsByClassName('upload');
var ajouter = document.getElementById('ajouter');

for (var i=0; i<imageUpload.length; i++){
    imageUpload[i].setAttribute(\"style\",\"display:none\");
}


ajouter.onclick = function (){
    for (var i=0; i<imageUpload.length; i++){
    imageUpload[i].setAttribute(\"style\",\"display:block\");
    }
    ajouter.setAttribute(\"style\",\"display:none\");
}
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formulaire_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 99,  217 => 98,  209 => 93,  204 => 91,  194 => 84,  190 => 83,  186 => 82,  175 => 74,  171 => 73,  167 => 72,  157 => 65,  153 => 64,  149 => 63,  137 => 54,  133 => 53,  129 => 52,  120 => 46,  116 => 45,  112 => 44,  103 => 38,  98 => 36,  94 => 35,  83 => 27,  79 => 26,  75 => 25,  65 => 18,  61 => 17,  57 => 16,  47 => 9,  43 => 8,  39 => 7,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'attr': {'class':'col-12 '}}) }}
    <div class=\"row justify-content-center\">
        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\">
            <!-- nom -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.nom, 'Nom :') }}
                        {{ form_errors(form.nom) }}
                        {{ form_widget(form.nom, {'attr': {'class':'form-control '}}) }}
                    </div>
                </div>
            
            <!-- prenom -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.prenom, 'Prénom : ') }}
                        {{ form_errors(form.prenom) }}
                        {{ form_widget(form.prenom, {'attr': {'class':'form-control '}}) }}
                    </div>
                </div>

            <!-- mail -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.mail, 'E-mail : ') }}
                        {{ form_errors(form.mail) }}
                        {{ form_widget(form.mail, {'attr': {'class':'form-control '}}) }}
                    </div>
                </div>
                <button class=\"btn btn-light bouton top\" id=\"ajouter\" type=\"button\">Joindre une image</button>
                <!-- image -->
                <!-- pathimage -->
                <div class=\"form upload\">
                    <div class=\"input-group \">
                        {{ form_label(form.image.pathimage, 'Choisir une image') }}
                        {{ form_errors(form.image.pathimage) }}
                        <div class=\"w-100\"></div>
                        {{ form_widget(form.image.pathimage, {'attr': {'class':'form-control-file\"'}}) }}
                    </div>
                </div>
                <!-- alt -->
                <div class=\"form cache\">
                    <div class=\"\">
                        {{ form_label(form.image.alt, 'Description de l\\'image / Référencement' ) }}
                        {{ form_errors(form.image.alt) }}
                        {{ form_widget(form.image.alt, {'attr': {'class':'form-control'}}) }}
                    </div>
                </div>
                <!-- credit photo -->
                    <div class=\"form cache\">
                        <div class=\"\">
                            {{ form_label(form.image.creditPhoto, 'Crédit Photo') }}
                            {{ form_errors(form.image.creditPhoto) }}
                            {{ form_widget(form.image.creditPhoto, {'attr': {'class':'form-control'}}) }}
                        </div>
                    </div>
            </div>
            <div class=\"col-11 col-sm-11 col-md-11 col-lg-9 col-xl-9\">
            
            <!-- objet -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.objet, 'Objet : ') }}
                        {{ form_errors(form.objet) }}
                        {{ form_widget(form.objet, {'attr': {'class':'form-control '}}) }}
                    </div>
                </div>

            <!-- message -->
                <div class=\"form\">
                    <div class=\"\">
                        {{ form_label(form.message, 'Message : ') }}
                        {{ form_errors(form.message) }}
                        {{ form_widget(form.message, {'attr': {'class':'form-control textarea'}}) }}
                    </div>
                </div>
                

            <!-- traite -->
                <div class=\"form text cache\">
                    <div class=\"\">
                        {{ form_label(form.traite, 'Marquer le message comme Traité') }}
                        {{ form_errors(form.traite) }}
                        {{ form_widget(form.traite) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"form bouton top\">
                <div class=\"row justify-content-center\">
                    {{ form_widget(form) }}
                    <button class=\"btn btn-secondary\" type=\"submit\" value=\"Edit\">Envoyer le Message</button>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>

{% block javascripts %}
<script>
var imageUpload = document.getElementsByClassName('upload');
var ajouter = document.getElementById('ajouter');

for (var i=0; i<imageUpload.length; i++){
    imageUpload[i].setAttribute(\"style\",\"display:none\");
}


ajouter.onclick = function (){
    for (var i=0; i<imageUpload.length; i++){
    imageUpload[i].setAttribute(\"style\",\"display:block\");
    }
    ajouter.setAttribute(\"style\",\"display:none\");
}
</script>
{% endblock %}", "formulaire_contact.html.twig", "/Users/a.hilary/ProjetsWeb/bordza/app/Resources/views/formulaire_contact.html.twig");
    }
}
