<?php

/* tarif/show.html.twig */
class __TwigTemplate_249b4d6dcb4bc5dd087c8663de35931e60d856677b24e49f7603f7af99cb4006 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tarif/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tarif/show.html.twig"));

        // line 1
        $this->loadTemplate("nav.html.twig", "tarif/show.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tarif</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new Twig_Error_Runtime('Variable "tarif" does not exist.', 10, $this->source); })()), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Uneheure</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new Twig_Error_Runtime('Variable "tarif" does not exist.', 14, $this->source); })()), "uneHeure", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cinqheures</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new Twig_Error_Runtime('Variable "tarif" does not exist.', 18, $this->source); })()), "cinqHeures", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dixheures</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new Twig_Error_Runtime('Variable "tarif" does not exist.', 22, $this->source); })()), "dixHeures", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Trimestre</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new Twig_Error_Runtime('Variable "tarif" does not exist.', 26, $this->source); })()), "trimestre", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Annee</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new Twig_Error_Runtime('Variable "tarif" does not exist.', 30, $this->source); })()), "annee", []), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tarif_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tarif_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new Twig_Error_Runtime('Variable "tarif" does not exist.', 40, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 43, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tarif/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 45,  118 => 43,  112 => 40,  106 => 37,  96 => 30,  89 => 26,  82 => 22,  75 => 18,  68 => 14,  61 => 10,  53 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'nav.html.twig' %}

{% block body %}
    <h1>Tarif</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ tarif.id }}</td>
            </tr>
            <tr>
                <th>Uneheure</th>
                <td>{{ tarif.uneHeure }}</td>
            </tr>
            <tr>
                <th>Cinqheures</th>
                <td>{{ tarif.cinqHeures }}</td>
            </tr>
            <tr>
                <th>Dixheures</th>
                <td>{{ tarif.dixHeures }}</td>
            </tr>
            <tr>
                <th>Trimestre</th>
                <td>{{ tarif.trimestre }}</td>
            </tr>
            <tr>
                <th>Annee</th>
                <td>{{ tarif.annee }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_tarif_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_tarif_edit', { 'id': tarif.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "tarif/show.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/tarif/show.html.twig");
    }
}
