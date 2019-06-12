<?php

/* video/show.html.twig */
class __TwigTemplate_1bcf952ea44ba018912798fb9e73444ce2e5b8d810cdec476a15a5ac4b4be199 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "video/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "video/show.html.twig"));

        // line 1
        $this->loadTemplate("nav.html.twig", "video/show.html.twig", 1)->display($context);
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
        echo "    <h1>Video</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new Twig_Error_Runtime('Variable "video" does not exist.', 10, $this->source); })()), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new Twig_Error_Runtime('Variable "video" does not exist.', 14, $this->source); })()), "titre", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new Twig_Error_Runtime('Variable "video" does not exist.', 18, $this->source); })()), "contenu", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resume</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new Twig_Error_Runtime('Variable "video" does not exist.', 22, $this->source); })()), "resume", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Iframe</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new Twig_Error_Runtime('Variable "video" does not exist.', 26, $this->source); })()), "iframe", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Auteur</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new Twig_Error_Runtime('Variable "video" does not exist.', 30, $this->source); })()), "auteur", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new Twig_Error_Runtime('Variable "video" does not exist.', 34, $this->source); })()), "date", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new Twig_Error_Runtime('Variable "video" does not exist.', 34, $this->source); })()), "date", []), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_video_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_video_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new Twig_Error_Runtime('Variable "video" does not exist.', 44, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 47, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "video/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 49,  127 => 47,  121 => 44,  115 => 41,  103 => 34,  96 => 30,  89 => 26,  82 => 22,  75 => 18,  68 => 14,  61 => 10,  53 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'nav.html.twig' %}

{% block body %}
    <h1>Video</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ video.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ video.titre }}</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>{{ video.contenu }}</td>
            </tr>
            <tr>
                <th>Resume</th>
                <td>{{ video.resume }}</td>
            </tr>
            <tr>
                <th>Iframe</th>
                <td>{{ video.iframe }}</td>
            </tr>
            <tr>
                <th>Auteur</th>
                <td>{{ video.auteur }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if video.date %}{{ video.date|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_video_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_video_edit', { 'id': video.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "video/show.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/video/show.html.twig");
    }
}
