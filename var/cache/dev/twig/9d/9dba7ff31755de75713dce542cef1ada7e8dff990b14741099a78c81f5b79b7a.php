<?php

/* default/index.html.twig */
class __TwigTemplate_3556018d48ff3341c6d449e69a9aad9510eba08e3614aa99b9a1754558bd107e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 2);
        $this->blocks = [
            'metadescription' => [$this, 'block_metadescription'],
            'connexion' => [$this, 'block_connexion'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_metadescription($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metadescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metadescription"));

        echo "<meta name=\"Description\" content=\"Bordza, marque de skateboards éthiques fabriqués à Bordeaux et école de skateboard.\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_connexion($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $this->loadTemplate("connexion.html.twig", "default/index.html.twig", 4)->display($context);
        
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
<div class=\"container-fluid justify-content-center align-content-center\" style=\"height:90vh;\"  id=\"container-accueil\">
    <div class=\"col-12\" style=\"height:90vh\">
        <div class=\"row\" style=\"height:70%\">
            <div class=\"col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9\">
                <div class=\"row\" style=\"height:40%\">
                    <a class=\"pages col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 \" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skateschool");
        echo "\">
                        <div class=\"col-12 skateschool-accueil\">
                            <p class=\"liens Titillium\">|La Skateschool</p>
                        </div>
                    </a>
                    <a class=\"pages col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue");
        echo "\">
                        <div class=\"col-12  catalogue-accueil\">
                            <p class=\"liens Titillium\">|Notre Catalogue</p>
                        </div>
                    </a>
                </div>
                <div class=\"row\" style=\"height:60%;\">
                    <a class=\"pages col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video");
        echo "\">
                        <div class=\"col-12 video-accueil\">
                            <p class=\"liens Titillium\">|Nos Vidéos</p>
                        </div>
                    </a>
                    <a class=\"pages col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7 titre-accueil align-items-center\" style=\"height:100%\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
                        <div class=\"row justify-content-center\" style=\"height:100%\">
                        <div class=\"align-self-center \">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-12\">
                                    <p class=\"titre categories text-center text-light\">Bordza Skateboard Factory</p>
                                </div>
                                <div class=\"col-12 slogan\">
                                    <p class=\"categories text-center text-light\">\"le skateboard Éthique et Technique\"<br></p>
                                </div>

                                <img class=\"img-fluid\" id=\"logo-bordza\" src=\"";
        // line 40
        echo "/assets/images/logo/bordza-blanc.png";
        echo "\">
                            </div>
                        </div>  
                        </div>
                    </a>
                </div>   
            </div>
            <div class=\"col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3\">
                <div class=\"row\" style=\"height:10%\">
                    <div class=\"col-12 reseaux-accueil\">
                        <span id=\"reseaux-sociaux\" class=\"row justify-content-center align-items-center\" style=\"height:100%\">
                            <a href=\"https://www.facebook.com/bordza.longboards/\"><img id=\"facebook\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/glyph/glyphicons-social-31-facebook.png"), "html", null, true);
        echo "\"></a>
                            <a href=\"https://www.instagram.com/bordzaskateboard/\"><img id=\"instagram\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/glyph/glyphicons-social-33-instagram.png"), "html", null, true);
        echo "\"></a>
                            <a href=\"https://vimeo.com/user5674470\"><img id=\"vimeo\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/glyph/glyphicons-social-35-vimeo.png"), "html", null, true);
        echo "\"></a>
                            <a href=\"https://www.youtube.com/user/nenethylik\"><img id=\"youtube\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/glyph/youtube.png"), "html", null, true);
        echo "\"></a>
                        </span>
                    </div>
                </div>
                <div class=\"row\" style=\"height:90%\">
                    <a class=\"pages col-12\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actu");
        echo "\">
                        <div class=\"col-12 news-accueil\">
                            <p class=\"liens Titillium\">|Les News</p>
                        </div>
                    </a>
                </div>
            </div>
            <span id=\"login\"><img src=\"";
        // line 66
        echo "/assets/images/logo/bordza-blanc.png";
        echo "\"></span>
        </div>
    
        <div class=\"row\" style=\"height:30%\">
                    <a class=\"pages col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("serigraphie");
        echo "\">
                        <div class=\"col-12 serigraphie-accueil\">
                            <p class=\"liens Titillium\">|La Personnalisation</p>
                        </div>
                    </a>
                    <a class=\"pages col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("concept");
        echo "\">
                        <div class=\"col-12 valeur-accueil\" style=\"\">
                            <p class=\"liens Titillium\">|Le Concept</p>
                        </div>
                    </a>
        </div>
    
        
    </div>
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "default/index.html.twig", 87)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "


<script>
var facebook = document.getElementById('facebook');
var instagram = document.getElementById('instagram');
var vimeo = document.getElementById('vimeo');
var youtube = document.getElementById('youtube');


facebook.onmouseover = function(){
    facebookGreen();
};
facebook.onmouseleave = function(){
    facebookOld();
};
function facebookGreen(){
    facebook.src=\"assets/images/glyph/facebook-hover.png\";
}
function facebookOld(){
    facebook.src=\"assets/images/glyph/glyphicons-social-31-facebook.png\";
}
instagram.onmouseover = function(){
    instagramGreen();
};
instagram.onmouseleave = function(){
    instagramOld();
};
function instagramGreen(){
    instagram.src=\"assets/images/glyph/instagram-hover.png\";
}
function instagramOld(){
    instagram.src=\"assets/images/glyph/glyphicons-social-33-instagram.png\";
}
vimeo.onmouseover = function(){
    vimeoGreen();
};
vimeo.onmouseleave = function(){
    vimeoOld();
};
function vimeoGreen(){
    vimeo.src=\"assets/images/glyph/vimeo-hover.png\";
}
function vimeoOld(){
    vimeo.src=\"assets/images/glyph/glyphicons-social-35-vimeo.png\";
}
youtube.onmouseover = function(){
    youtubeGreen();
};
youtube.onmouseleave = function(){
    youtubeOld();
};
function youtubeGreen(){
    youtube.src=\"assets/images/glyph/youtube-hover.png\";
}
function youtubeOld(){
    youtube.src=\"assets/images/glyph/youtube.png\";
}
var navLogin = document.getElementById('identifiants');
var login = document.getElementById('login');
var liens = document.getElementsByClassName('liens');
function cacheNavLogin(){
    navLogin.setAttribute('style','display:none');
}
function policeResponsive(){
    
    for ( var i = 0 ; i < liens.length ; i ++){
        liens[i].setAttribute('style','font-size:24px')
    }
}
login.onclick = function(){
    navLogin.setAttribute('style','display:block');
    login.setAttribute('style','display:none');
}


cacheNavLogin();
policeResponsive();


       
        console.log(window.innerWidth);
        var fenetre = window.innerWidth;
        if (fenetre < 900) {
            for ( var i = 0 ; i < liens.length ; i ++){
            liens[i].setAttribute('style','font-size:30px')
            }
        }
        
        if (fenetre > 900) {
            if (fenetre < 1200){
                for ( var i = 0 ; i < liens.length ; i ++){
                    liens[i].setAttribute('style','font-size:31px')
                }
            }
            if (fenetre > 1200){
                for ( var i = 0 ; i < liens.length ; i ++){
                    liens[i].setAttribute('style','font-size:33px')
                }
            }
            
        }

        window.onresize = function () {
            var tailleFenetre = window.innerWidth;
            if (tailleFenetre < 900) {
                for ( var i = 0 ; i < liens.length ; i ++){
                liens[i].setAttribute('style','font-size:30px')
                }
                
            }
            if (tailleFenetre > 900) {
                if (tailleFenetre < 1200){
                    for ( var i = 0 ; i < liens.length ; i ++){
                    liens[i].setAttribute('style','font-size:31px')
                    }
                    
                }
                if (tailleFenetre > 1200){
                    for ( var i = 0 ; i < liens.length ; i ++){
                    liens[i].setAttribute('style','font-size:33px')
                    }
                    
                }
            }
        }
    
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 92,  240 => 91,  222 => 87,  200 => 75,  192 => 70,  185 => 66,  175 => 59,  167 => 54,  163 => 53,  159 => 52,  155 => 51,  141 => 40,  127 => 29,  119 => 24,  109 => 17,  101 => 12,  93 => 6,  84 => 5,  66 => 4,  48 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block metadescription %}<meta name=\"Description\" content=\"Bordza, marque de skateboards éthiques fabriqués à Bordeaux et école de skateboard.\">{% endblock %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block body %}
             
<div class=\"container-fluid justify-content-center align-content-center\" style=\"height:90vh;\"  id=\"container-accueil\">
    <div class=\"col-12\" style=\"height:90vh\">
        <div class=\"row\" style=\"height:70%\">
            <div class=\"col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9\">
                <div class=\"row\" style=\"height:40%\">
                    <a class=\"pages col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 \" href=\"{{ path('skateschool') }}\">
                        <div class=\"col-12 skateschool-accueil\">
                            <p class=\"liens Titillium\">|La Skateschool</p>
                        </div>
                    </a>
                    <a class=\"pages col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6\" href=\"{{ path('catalogue') }}\">
                        <div class=\"col-12  catalogue-accueil\">
                            <p class=\"liens Titillium\">|Notre Catalogue</p>
                        </div>
                    </a>
                </div>
                <div class=\"row\" style=\"height:60%;\">
                    <a class=\"pages col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5\" href=\"{{ path('video') }}\">
                        <div class=\"col-12 video-accueil\">
                            <p class=\"liens Titillium\">|Nos Vidéos</p>
                        </div>
                    </a>
                    <a class=\"pages col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7 titre-accueil align-items-center\" style=\"height:100%\" href=\"{{ path('homepage') }}\">
                        <div class=\"row justify-content-center\" style=\"height:100%\">
                        <div class=\"align-self-center \">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-12\">
                                    <p class=\"titre categories text-center text-light\">Bordza Skateboard Factory</p>
                                </div>
                                <div class=\"col-12 slogan\">
                                    <p class=\"categories text-center text-light\">\"le skateboard Éthique et Technique\"<br></p>
                                </div>

                                <img class=\"img-fluid\" id=\"logo-bordza\" src=\"{{ '/assets/images/logo/bordza-blanc.png' }}\">
                            </div>
                        </div>  
                        </div>
                    </a>
                </div>   
            </div>
            <div class=\"col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3\">
                <div class=\"row\" style=\"height:10%\">
                    <div class=\"col-12 reseaux-accueil\">
                        <span id=\"reseaux-sociaux\" class=\"row justify-content-center align-items-center\" style=\"height:100%\">
                            <a href=\"https://www.facebook.com/bordza.longboards/\"><img id=\"facebook\" src=\"{{ asset('/assets/images/glyph/glyphicons-social-31-facebook.png') }}\"></a>
                            <a href=\"https://www.instagram.com/bordzaskateboard/\"><img id=\"instagram\" src=\"{{ asset('/assets/images/glyph/glyphicons-social-33-instagram.png') }}\"></a>
                            <a href=\"https://vimeo.com/user5674470\"><img id=\"vimeo\" src=\"{{ asset('/assets/images/glyph/glyphicons-social-35-vimeo.png') }}\"></a>
                            <a href=\"https://www.youtube.com/user/nenethylik\"><img id=\"youtube\" src=\"{{ asset('/assets/images/glyph/youtube.png') }}\"></a>
                        </span>
                    </div>
                </div>
                <div class=\"row\" style=\"height:90%\">
                    <a class=\"pages col-12\" href=\"{{ path('actu') }}\">
                        <div class=\"col-12 news-accueil\">
                            <p class=\"liens Titillium\">|Les News</p>
                        </div>
                    </a>
                </div>
            </div>
            <span id=\"login\"><img src=\"{{ '/assets/images/logo/bordza-blanc.png' }}\"></span>
        </div>
    
        <div class=\"row\" style=\"height:30%\">
                    <a class=\"pages col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7\" href=\"{{ path('serigraphie') }}\">
                        <div class=\"col-12 serigraphie-accueil\">
                            <p class=\"liens Titillium\">|La Personnalisation</p>
                        </div>
                    </a>
                    <a class=\"pages col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5\" href=\"{{ path('concept') }}\">
                        <div class=\"col-12 valeur-accueil\" style=\"\">
                            <p class=\"liens Titillium\">|Le Concept</p>
                        </div>
                    </a>
        </div>
    
        
    </div>
    
</div>
{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}
    


{% block javascripts %}



<script>
var facebook = document.getElementById('facebook');
var instagram = document.getElementById('instagram');
var vimeo = document.getElementById('vimeo');
var youtube = document.getElementById('youtube');


facebook.onmouseover = function(){
    facebookGreen();
};
facebook.onmouseleave = function(){
    facebookOld();
};
function facebookGreen(){
    facebook.src=\"assets/images/glyph/facebook-hover.png\";
}
function facebookOld(){
    facebook.src=\"assets/images/glyph/glyphicons-social-31-facebook.png\";
}
instagram.onmouseover = function(){
    instagramGreen();
};
instagram.onmouseleave = function(){
    instagramOld();
};
function instagramGreen(){
    instagram.src=\"assets/images/glyph/instagram-hover.png\";
}
function instagramOld(){
    instagram.src=\"assets/images/glyph/glyphicons-social-33-instagram.png\";
}
vimeo.onmouseover = function(){
    vimeoGreen();
};
vimeo.onmouseleave = function(){
    vimeoOld();
};
function vimeoGreen(){
    vimeo.src=\"assets/images/glyph/vimeo-hover.png\";
}
function vimeoOld(){
    vimeo.src=\"assets/images/glyph/glyphicons-social-35-vimeo.png\";
}
youtube.onmouseover = function(){
    youtubeGreen();
};
youtube.onmouseleave = function(){
    youtubeOld();
};
function youtubeGreen(){
    youtube.src=\"assets/images/glyph/youtube-hover.png\";
}
function youtubeOld(){
    youtube.src=\"assets/images/glyph/youtube.png\";
}
var navLogin = document.getElementById('identifiants');
var login = document.getElementById('login');
var liens = document.getElementsByClassName('liens');
function cacheNavLogin(){
    navLogin.setAttribute('style','display:none');
}
function policeResponsive(){
    
    for ( var i = 0 ; i < liens.length ; i ++){
        liens[i].setAttribute('style','font-size:24px')
    }
}
login.onclick = function(){
    navLogin.setAttribute('style','display:block');
    login.setAttribute('style','display:none');
}


cacheNavLogin();
policeResponsive();


       
        console.log(window.innerWidth);
        var fenetre = window.innerWidth;
        if (fenetre < 900) {
            for ( var i = 0 ; i < liens.length ; i ++){
            liens[i].setAttribute('style','font-size:30px')
            }
        }
        
        if (fenetre > 900) {
            if (fenetre < 1200){
                for ( var i = 0 ; i < liens.length ; i ++){
                    liens[i].setAttribute('style','font-size:31px')
                }
            }
            if (fenetre > 1200){
                for ( var i = 0 ; i < liens.length ; i ++){
                    liens[i].setAttribute('style','font-size:33px')
                }
            }
            
        }

        window.onresize = function () {
            var tailleFenetre = window.innerWidth;
            if (tailleFenetre < 900) {
                for ( var i = 0 ; i < liens.length ; i ++){
                liens[i].setAttribute('style','font-size:30px')
                }
                
            }
            if (tailleFenetre > 900) {
                if (tailleFenetre < 1200){
                    for ( var i = 0 ; i < liens.length ; i ++){
                    liens[i].setAttribute('style','font-size:31px')
                    }
                    
                }
                if (tailleFenetre > 1200){
                    for ( var i = 0 ; i < liens.length ; i ++){
                    liens[i].setAttribute('style','font-size:33px')
                    }
                    
                }
            }
        }
    
</script>
{% endblock %}
", "default/index.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/default/index.html.twig");
    }
}
