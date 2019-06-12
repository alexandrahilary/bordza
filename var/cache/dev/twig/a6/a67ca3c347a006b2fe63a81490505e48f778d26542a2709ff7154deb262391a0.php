<?php

/* formule/edit.html.twig */
class __TwigTemplate_9cdf225cc975c945e151d809ee29e3072fb7dc35b5264df8b199c7c19314a35c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "formule/edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formule/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formule/edit.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "formule/edit.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "formule/edit.html.twig", 3)->display($context);
        
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
        echo "<div class=\"container-fluid identifiant justify-content-center\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <h1>MODIFIER LA FORMULE</h1>
            </div>
        </div>
        <div class=\"col-3 border border-dark top\" style=\"padding:20px\">
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
        <div class=\"form\">
            <div class=\"\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 18, $this->source); })()), "nomFormule", []), 'label', ["label" => "Nom de la formule"]);
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 19, $this->source); })()), "nomFormule", []), 'errors');
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 20, $this->source); })()), "nomFormule", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        <div class=\"form bouton\">
            <div class=\"row justify-content-center\">
                <button class=\"btn btn-dark bouton\" type=\"submit\" value=\"Edit\">Enregistrer la modification</button>
            </div>
        </div>
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "

    <div class=\"row justify-content-center form\">
        <div class=\"bouton\">
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 32, $this->source); })()), 'form_start');
        echo "
                <button class=\"btn btn-light\" type=\"submit\" value=\"Delete\">Supprimer</button>
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 34, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div>
            <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin/formule_index");
        echo "\"><- Retour vers les Formules</a>
        </div>
        
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "formule/edit.html.twig", 44)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "<script>
    var \$collectionHolder;

// setup an \"add a tag\" link
var \$addTagButton = \$('<button type=\"button\" class=\"add_tag_link\">Ajoute une session</button>');
var \$newLinkLi = \$('<li></li>').append(\$addTagButton);
function addTagForm(\$collectionHolder, \$newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = \$collectionHolder.data('prototype');

    // get the new index qui permet de compter les formulaires rajoutés
    var index = \$collectionHolder.data('index');

    var newForm = prototype;
    // You need this only if you didn't set 'label' => false in your tags field in TaskType
    // Replace '__name__label__' in the prototype's HTML to
    // instead be a number based on how many items we have
    // newForm = newForm.replace(/__name__label__/g, index);

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    // expression reguliere
    newForm = newForm.replace(/__name__/g, index);

    // increase the index with one for the next item
    \$collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the \"Add a tag\" link li
    var \$newFormLi = \$('<li></li>').append(newForm);
    \$newLinkLi.before(\$newFormLi);
    // add a delete link to the new form
    addTagFormDeleteLink(\$newFormLi);
};

function addTagFormDeleteLink(\$tagFormLi) {
    var \$removeFormButton = \$('<button type=\"button\">Supprimer une session</button>');
    \$tagFormLi.append(\$removeFormButton);

    \$removeFormButton.on('click', function(e){
        // remove the li for the tag form
        \$tagFormLi.remove();
    });
}

jQuery(document).ready(function() {
    // Get the ul that holds the collection of tags
    \$collectionHolder = \$('#appbundle_formule_sessions');
    //add a delete link to all of the existing tag form li elements
    \$collectionHolder.find('li').each(function(){
        addTagFormDeleteLink(\$(this));
    })

    \$collectionHolder.find('>div').each(function(){
        addTagFormDeleteLink(\$(this));
    })

    // add the \"add a tag\" anchor and li to the tags ul
    \$collectionHolder.append(\$newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    // dit qu'il faut garder le numero d'index pour le numerotage des collections qui se rajoutent
    \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

    \$addTagButton.on('click', function(e) {
        // add a new tag form (see next code block)
        addTagForm(\$collectionHolder, \$newLinkLi);
    });
});

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formule/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 46,  182 => 45,  164 => 44,  149 => 39,  141 => 34,  136 => 32,  129 => 28,  118 => 20,  114 => 19,  110 => 18,  104 => 15,  93 => 6,  84 => 5,  66 => 3,  48 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}

{% block body %}
<div class=\"container-fluid identifiant justify-content-center\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <h1>MODIFIER LA FORMULE</h1>
            </div>
        </div>
        <div class=\"col-3 border border-dark top\" style=\"padding:20px\">
    {{ form_start(edit_form) }}
        <div class=\"form\">
            <div class=\"\">
                {{ form_label(edit_form.nomFormule, 'Nom de la formule') }}
                {{ form_errors(edit_form.nomFormule) }}
                {{ form_widget(edit_form.nomFormule, {'attr': {'class':'form-control'}}) }}
            </div>
        </div>
        <div class=\"form bouton\">
            <div class=\"row justify-content-center\">
                <button class=\"btn btn-dark bouton\" type=\"submit\" value=\"Edit\">Enregistrer la modification</button>
            </div>
        </div>
    {{ form_end(edit_form) }}

    <div class=\"row justify-content-center form\">
        <div class=\"bouton\">
            {{ form_start(delete_form) }}
                <button class=\"btn btn-light\" type=\"submit\" value=\"Delete\">Supprimer</button>
            {{ form_end(delete_form) }}
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div>
            <a href=\"{{ path('admin/formule_index') }}\"><- Retour vers les Formules</a>
        </div>
        
    </div>
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}
{% block javascripts %}
<script>
    var \$collectionHolder;

// setup an \"add a tag\" link
var \$addTagButton = \$('<button type=\"button\" class=\"add_tag_link\">Ajoute une session</button>');
var \$newLinkLi = \$('<li></li>').append(\$addTagButton);
function addTagForm(\$collectionHolder, \$newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = \$collectionHolder.data('prototype');

    // get the new index qui permet de compter les formulaires rajoutés
    var index = \$collectionHolder.data('index');

    var newForm = prototype;
    // You need this only if you didn't set 'label' => false in your tags field in TaskType
    // Replace '__name__label__' in the prototype's HTML to
    // instead be a number based on how many items we have
    // newForm = newForm.replace(/__name__label__/g, index);

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    // expression reguliere
    newForm = newForm.replace(/__name__/g, index);

    // increase the index with one for the next item
    \$collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the \"Add a tag\" link li
    var \$newFormLi = \$('<li></li>').append(newForm);
    \$newLinkLi.before(\$newFormLi);
    // add a delete link to the new form
    addTagFormDeleteLink(\$newFormLi);
};

function addTagFormDeleteLink(\$tagFormLi) {
    var \$removeFormButton = \$('<button type=\"button\">Supprimer une session</button>');
    \$tagFormLi.append(\$removeFormButton);

    \$removeFormButton.on('click', function(e){
        // remove the li for the tag form
        \$tagFormLi.remove();
    });
}

jQuery(document).ready(function() {
    // Get the ul that holds the collection of tags
    \$collectionHolder = \$('#appbundle_formule_sessions');
    //add a delete link to all of the existing tag form li elements
    \$collectionHolder.find('li').each(function(){
        addTagFormDeleteLink(\$(this));
    })

    \$collectionHolder.find('>div').each(function(){
        addTagFormDeleteLink(\$(this));
    })

    // add the \"add a tag\" anchor and li to the tags ul
    \$collectionHolder.append(\$newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    // dit qu'il faut garder le numero d'index pour le numerotage des collections qui se rajoutent
    \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

    \$addTagButton.on('click', function(e) {
        // add a new tag form (see next code block)
        addTagForm(\$collectionHolder, \$newLinkLi);
    });
});

</script>
{% endblock %}", "formule/edit.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/formule/edit.html.twig");
    }
}
