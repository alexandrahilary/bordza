<?php

/* concept.html.twig */
class __TwigTemplate_2cfebbe2992379aebd763e86a29f4a01de25fa99815805221225c4c2b84ac858 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "concept.html.twig", 1);
        $this->blocks = [
            'metadescription' => [$this, 'block_metadescription'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "concept.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "concept.html.twig"));

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

        echo "<meta name=\"Description\" content=\"Bordza, une marque de skateboards éthiques fabriqués à Bordeaux aux engagements forts : Artisanal, Bois issus de forêts maîtrisées, Ethique, Enseignement de qualité.\">";
        
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

        $this->loadTemplate("connexion.html.twig", "concept.html.twig", 3)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "concept.html.twig", 4)->display($context);
        
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
<div class=\"container-fluid identifiant justify-content-center\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12\"><img class=\"img-fluid col-12\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/valeur/bandeau-partenaire.jpg"), "html", null, true);
        echo "\" 
                alt=\"skateschool bordeaux partenaire ensemble on est plus forts skateboard longboard\">
                </div>
                <h1 class=\"categories top bottom\"><b>- LE CONCEPT -</b></h1>
                <div class=\"w-100\"></div>
                <hr class=\"top bottom\">
                <div class=\"w-100\"></div>
                <div class=\"text-center col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6 top bottom\">
                <p class=\" bottom\">Bordza est un concept : les boards à pizza.</p>

                <p class=\"top bottom\">Les riders les plus chevronnés tout comme les débutants engagés se font 
                régulièrement des petites éraflures que l’on appelle : « pizzas ».<br>
                Bordza rend hommage à ces héros du quotidien en créant des planches adaptées aux besoins 
                de chacun et en formant ces riders par le biais de cours (initiation et perfectionnement) 
                dans les multiples disciplines que propose la planche à roulettes : street, rampe, bowl, dancing, slalom, downhill.</p>

                <p class=\"top bottom\">Notre priorité est de respecter l'environnement en fabriquant des produits eco-responsables et techniques.</p>
                
                <p class=\"top bottom\">Nos planches sont entièrement réalisées en bois provenant de forêts maitrisées et 
                de manière artisanale, avec un impact faible sur l’environnement, dans notre atelier proche de Bordeaux.<br>
                Nous utilisons le procédé de la sérigraphie pour imprimer nos produits. Cette technique est la plus respectueuse des propriétés techniques du bois et donc de la solidité de la planche car elle vient déposer une fine couche d’encre sur la feuille de bois de finition avant que celle-ci ne soit mise dans le moule et pressée avec les autres couches constituant la planche.
                </p>

                

                <p class=\"top bottom\">En bref, les planches Bordza sont surtout faites pour skater. On sort ses roulettes et on va rouler ! 
                On emporte avec nous nos valeurs eco-citoyennes, on va se faire une pure session avec nos potes en ayant bonne conscience et 
                on kiffe graaaave.
                </p>
                <p>
                « Shake Your Skate ! »<br/> Bordza.</p>

                </div>
                <div class=\"w-100\"></div>
            </div>
            <div class=\"row justify-content-center top\">
                <h2 class=\"categories top bottom\"><b>- NOS ENGAGEMENTS -</b></h2>
                <div class=\"w-100\"></div>
                <hr class=\"top bottom\">
                <div class=\"w-100\"></div>
                
                
                
                    <div class=\"col-12  top \">
                        <div class=\"\" style=\"width:100vw;\">
                            
                            <div class=\"\" style=\"z-index:1;width:100vw;position:relative;opacity:0.3;\" >
                                <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/serigraphie/bandeau-serigraphie.png"), "html", null, true);
        echo "\" style=\"width:100vw\" class=\"img-foret\" alt=\"skateboard serigraphie artisanal savoir-faire\">
                            </div>
                            <div class=\"row justify-content-center align-items-center\" style=\"z-index:2;height:50vh;position:absolute;top:0\">
                                <div class=\"col-8 text-center\" style=\"\">
                                    <p><h3 class=\"text-light  categories top bottom\">ARTISANAL</h3></p>
                                    <p class=\"text-light \">
                                De l'idée à la réalisation de la planche, tout est fait dans notre atelier 
                                de manière artisanale. Nous fabriquons chaque skateboard et longboard à la main. Nos feuilles de bois sont soigneusement selectionnées, sérigraphiées puis 
                                encollées une par une, pour être ensuite pressées dans un moule qui a été lui aussi fabriqué par nos soins, en bois recyclé. Depuis peu, ces moules sont 
                                réalisés par notre fraiseuse à commande numérique que nous avons construite nous-même (oui oui, on s'est bien cassé la tête !). 
                                C'est en étant à l'écoute des pratiquants, skateurs et longboardeurs, que nous avons pu développer une gamme de produits 
                                répondants à leurs attentes techniques et spécifique à chaque discipline (skateboard, longboard downhill, longboard dancing).
                                Ce processus entièrement artisanal nous permet de valider chaque étape de fabrication de nos planches et vous assure 
                                un produit de qualité.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div> 
                    
                    
                    <div class=\"col-12\">
                        <div class=\"\" style=\"width:100vw;\">
                            
                            <div class=\"\" style=\"z-index:1;width:100vw;position:relative;opacity:0.6;\" >
                                <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/valeur/bois-issue-de-foret-maitrisees.jpg"), "html", null, true);
        echo "\" class=\"img-foret\" alt=\"bois issue de forêt maitrisées\">
                            </div>
                            <div class=\"row justify-content-center align-items-center\" style=\"z-index:2;height:50vh;position:absolute;top:0\">
                                <div class=\"col-8 text-center\" style=\"\">
                                    <p><h3 class=\"text-light  categories top bottom\">BOIS ISSUS DE FORÊTS MAÎTRISÉES</h3></p>
                                    <p class=\"text-light \">
                                    Il n'y a pas de \"planète B\", nous accordons une grande importance à la provenance de notre matière première : le Bois. 
                                    Celui-ci provient de forêt gérées durablement par nos amis bucherons en 
                                    chemises à carreaux. Nous associons plusieurs essences de bois dans la confection de nos planches 
                                    car leurs propriétés mécaniques sont complémentaire et cet assemblage confère à nos planches une plus grande résistance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"\" style=\"width:100vw;\">
                            
                            <div class=\"\" style=\"z-index:1;width:100vw;position:relative;\" >
                                <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/valeur/eco-responsable.jpeg"), "html", null, true);
        echo "\" class=\"img-foret\" alt=\"skateboard ethik\">
                            </div>
                            <div class=\"row justify-content-center align-items-center\" style=\"z-index:2;height:50vh;position:absolute;top:0\">
                                <div class=\"col-6\"></div>
                                <div class=\"col-4 text-left\" style=\"\">
                                    <p><h3 class=\"text-dark  categories top bottom\">ÉTHIQUE</h3></p>
                                    <p class=\"text-dark \">Dans une démarche éco-responsable, 
                            nous étudions tous nos processus afin d'avoir l'impact sur l'environnement 
                            le plus faible possible. Les encres de sérigraphie utilisées sont à base d'eau, 
                            notre vernis protecteur est à l'eau également, nous sommes équipés d'ampoules à basse
                             consommation et nous pensons à éteindre nos interrupteurs lorsque nous partons de l'atelier. 
                             Nous défendons nos valeurs auprès de nos élèves également et lors de nos interventions nous 
                             les sensibilisons aux gestes indispensables à la préservation de notre planète.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-12\">
                        <div class=\"\" style=\"width:100vw;\">
                            
                            <div class=\"\" style=\"z-index:1;width:100vw;position:relative;opacity:0.5\" >
                                <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/valeur/enseignement.jpg"), "html", null, true);
        echo "\" class=\"img-cours\" alt=\"skateschool transmission école de skate\">
                            </div>
                            <div class=\"row justify-content-center align-items-center\" style=\"z-index:2;height:50vh;position:absolute;top:0\">
                                
                                <div class=\"col-10 \" style=\"\">
                                    <h3 class=\"text-center text-light categories top bottom\">ENSEIGNEMENT</h3>
                                    <p class=\"text-light text-center\">Les cours sont assurés par Éric Motard, professeur diplômé. 
                                    Il base sa pédagogie sur la progression au rythme de chacun. Nous sommes tous, adultes et 
                                    enfants confrontés au stress dans la vie quotidienne, que ce soit à l'école ou au travail, c'est pour cela 
                                    que notre moniteur a opté pour des méthodes pédagogiques basées sur l'enssence même du skateboard : se faire plaisir avant tout. 
                                    Le challenge est bien présent mais dans une ambiance plus détendue.
                                 
                                     Vous apprendrez les techniques et les règles à respecter pour évoluer sans danger dans votre pratique quotidienne 
                                    que ce soit sur un skatepark ou tout simplement pour vous déplacer en ville. N'oublions pas que le skateboard et le 
                                    longboard sont d'excellents moyens de déplacement alternatifs pour aller au travail, à l'école ou partout ailleurs, 
                                    tout en ayant sa dose de glisse quotidienne.
                                     </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12\">
                        
                        <div class=\"\">
                            
                            
                        </div>
                    </div> 
                
                
            </div>
            <div class=\"row justify-content-center\">
                <h2 class=\"categories top bottom\"><b>- NOS PARTENAIRES -</b></h2>
                <div class=\"w-100\"></div>
                <hr class=\"top bottom\">
                <div class=\"w-100\"></div>
                <div class=\"text-center row justify-content-center col-9 top bottom \">
                    <a href=\"https://www.surf-hebergement-biscarrosse.fr/\" class=\"text-center row justify-content-center top bottom\">
                        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\"><img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/partenaires/villa-sunshine.png"), "html", null, true);
        echo "\" class=\"img-partenaire img-fluid\"></div>
                        <div class=\"w-100\"></div>
                        <p class=\" col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 top\">
                        Surf lodge à Biscarrosse Plage. Vous souhaitez passez vos vacances dans un cadre magnifique et en profiter pour paufiner votre technique 
                        en surf et en skate, c'est la Villa idéale. Nelly vous accueille sur place, et vous guidera pour un séjour sur mesure. 
                        Les cours de skate et de surf sont encadrés par deux moniteurs diplômés et passionés. Attention c'est très addictif... ;)
                        </p>
                        <div class=\"w-100\"></div>
                    </a>
                    <a href=\"https://www.adrenaline-hunter.com/fr-FR/\" class=\"text-center row justify-content-center top bottom\">
                        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\"><img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/partenaires/adrenaline_hunter.png"), "html", null, true);
        echo "\" class=\"img-partenaire img-fluid\"></div>
                        <div class=\"w-100\"></div>
                        <p class=\" col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 top\">
                        Gagnez du temps dans vos recherches d’activités avec ce premier site de réservation pour des initiations, stages, et 
                        coaching de sports extreme et outdoor à travers le monde.
                        </p>
                        <div class=\"w-100\"></div>
                    </a>
                    <a href=\"https://www.ariskateboard.com/\" class=\"text-center row justify-content-center top bottom\">
                        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\"><img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/partenaires/ARI.png"), "html", null, true);
        echo "\" class=\"img-partenaire img-fluid\"></div>
                        <div class=\"w-100\"></div>
                        <p class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 top\">
                        Association Illacaise qui se bouge pour les skateurs.
                        </p>
                        <div class=\"w-100\"></div>
                    </a>
                    <a href=\"https://www.facebook.com/Bordeaux-Longskate-Club-Le-BLC-349277721882518/\" class=\"text-center row justify-content-center top bottom\">
                        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\"><img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/partenaires/BLC.png"), "html", null, true);
        echo "\" class=\"img-partenaire img-fluid\"></div>
                        <div class=\"w-100\"></div>
                        <p class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 top\">
                        Page Officielle du BLC où l'on vous partage la vie de l'asso, des assos des copains les events de 
                        longboard dans la région les initiations et les sessions entre riders.
                        </p>
                        <div class=\"w-100\"></div>
                    </a>
                    <a href=\"https://www.facebook.com/Feelethik33/\" class=\"text-center row justify-content-center top bottom\">
                        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\"><img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/partenaires/feelethik.png"), "html", null, true);
        echo "\" class=\"img-partenaire img-fluid\"></div>
                        <div class=\"w-100\"></div>
                        <p class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 top\">
                        Association pluridisciplinaire, art circassien, slackline, et skateboard arcachonais. 
                        De nombreux évènements et une éthik à découvrir.
                        </p>
                        <div class=\"w-100\"></div>
                    </a>
                    <a href=\"https://www.mygreensport.com/\" class=\"text-center row justify-content-center top bottom\">
                        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\"><img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/partenaires/my-green-sport.png"), "html", null, true);
        echo "\" class=\"img-partenaire img-fluid\"></div>
                        <div class=\"w-100\"></div>
                        <p class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 top\">
                        My green sport valorise les marques qui s’engagent pour la planète afin de vous proposer une gamme unique de matériel 
                        de sport qui préserve l’environnement tout en vous procurant sensations et performances.
                        </p>
                        <div class=\"w-100\"></div>
                    </a>
                    <a href=\"https://lepereskateur.com/\" class=\"text-center row justify-content-center top bottom\">
                        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\"><img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/partenaires/le-pere-skater.png"), "html", null, true);
        echo "\" class=\"img-partenaire img-fluid\"></div>
                        <div class=\"w-100\"></div>
                        <p class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 top\">
                        Le Père Skateur : Nouvelle boutique au Barpe où vous trouverez tout le nécessaire pour skater ! 
                        </p>
                        <div class=\"w-100\"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 230
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "concept.html.twig", 230)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "concept.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 230,  356 => 216,  344 => 207,  332 => 198,  320 => 189,  309 => 181,  297 => 172,  284 => 162,  243 => 124,  218 => 102,  197 => 84,  169 => 59,  119 => 12,  111 => 6,  102 => 5,  84 => 4,  66 => 3,  48 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block metadescription %}<meta name=\"Description\" content=\"Bordza, une marque de skateboards éthiques fabriqués à Bordeaux aux engagements forts : Artisanal, Bois issus de forêts maîtrisées, Ethique, Enseignement de qualité.\">{% endblock %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}
{% block body %}

<div class=\"container-fluid identifiant justify-content-center\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12\"><img class=\"img-fluid col-12\" src=\"{{ asset('assets/images/valeur/bandeau-partenaire.jpg') }}\" 
                alt=\"skateschool bordeaux partenaire ensemble on est plus forts skateboard longboard\">
                </div>
                <h1 class=\"categories top bottom\"><b>- LE CONCEPT -</b></h1>
                <div class=\"w-100\"></div>
                <hr class=\"top bottom\">
                <div class=\"w-100\"></div>
                <div class=\"text-center col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6 top bottom\">
                <p class=\" bottom\">Bordza est un concept : les boards à pizza.</p>

                <p class=\"top bottom\">Les riders les plus chevronnés tout comme les débutants engagés se font 
                régulièrement des petites éraflures que l’on appelle : « pizzas ».<br>
                Bordza rend hommage à ces héros du quotidien en créant des planches adaptées aux besoins 
                de chacun et en formant ces riders par le biais de cours (initiation et perfectionnement) 
                dans les multiples disciplines que propose la planche à roulettes : street, rampe, bowl, dancing, slalom, downhill.</p>

                <p class=\"top bottom\">Notre priorité est de respecter l'environnement en fabriquant des produits eco-responsables et techniques.</p>
                
                <p class=\"top bottom\">Nos planches sont entièrement réalisées en bois provenant de forêts maitrisées et 
                de manière artisanale, avec un impact faible sur l’environnement, dans notre atelier proche de Bordeaux.<br>
                Nous utilisons le procédé de la sérigraphie pour imprimer nos produits. Cette technique est la plus respectueuse des propriétés techniques du bois et donc de la solidité de la planche car elle vient déposer une fine couche d’encre sur la feuille de bois de finition avant que celle-ci ne soit mise dans le moule et pressée avec les autres couches constituant la planche.
                </p>

                

                <p class=\"top bottom\">En bref, les planches Bordza sont surtout faites pour skater. On sort ses roulettes et on va rouler ! 
                On emporte avec nous nos valeurs eco-citoyennes, on va se faire une pure session avec nos potes en ayant bonne conscience et 
                on kiffe graaaave.
                </p>
                <p>
                « Shake Your Skate ! »<br/> Bordza.</p>

                </div>
                <div class=\"w-100\"></div>
            </div>
            <div class=\"row justify-content-center top\">
                <h2 class=\"categories top bottom\"><b>- NOS ENGAGEMENTS -</b></h2>
                <div class=\"w-100\"></div>
                <hr class=\"top bottom\">
                <div class=\"w-100\"></div>
                
                
                
                    <div class=\"col-12  top \">
                        <div class=\"\" style=\"width:100vw;\">
                            
                            <div class=\"\" style=\"z-index:1;width:100vw;position:relative;opacity:0.3;\" >
                                <img src=\"{{ asset('assets/images/serigraphie/bandeau-serigraphie.png') }}\" style=\"width:100vw\" class=\"img-foret\" alt=\"skateboard serigraphie artisanal savoir-faire\">
                            </div>
                            <div class=\"row justify-content-center align-items-center\" style=\"z-index:2;height:50vh;position:absolute;top:0\">
                                <div class=\"col-8 text-center\" style=\"\">
                                    <p><h3 class=\"text-light  categories top bottom\">ARTISANAL</h3></p>
                                    <p class=\"text-light \">
                                De l'idée à la réalisation de la planche, tout est fait dans notre atelier 
                                de manière artisanale. Nous fabriquons chaque skateboard et longboard à la main. Nos feuilles de bois sont soigneusement selectionnées, sérigraphiées puis 
                                encollées une par une, pour être ensuite pressées dans un moule qui a été lui aussi fabriqué par nos soins, en bois recyclé. Depuis peu, ces moules sont 
                                réalisés par notre fraiseuse à commande numérique que nous avons construite nous-même (oui oui, on s'est bien cassé la tête !). 
                                C'est en étant à l'écoute des pratiquants, skateurs et longboardeurs, que nous avons pu développer une gamme de produits 
                                répondants à leurs attentes techniques et spécifique à chaque discipline (skateboard, longboard downhill, longboard dancing).
                                Ce processus entièrement artisanal nous permet de valider chaque étape de fabrication de nos planches et vous assure 
                                un produit de qualité.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div> 
                    
                    
                    <div class=\"col-12\">
                        <div class=\"\" style=\"width:100vw;\">
                            
                            <div class=\"\" style=\"z-index:1;width:100vw;position:relative;opacity:0.6;\" >
                                <img src=\"{{ asset('assets/images/valeur/bois-issue-de-foret-maitrisees.jpg') }}\" class=\"img-foret\" alt=\"bois issue de forêt maitrisées\">
                            </div>
                            <div class=\"row justify-content-center align-items-center\" style=\"z-index:2;height:50vh;position:absolute;top:0\">
                                <div class=\"col-8 text-center\" style=\"\">
                                    <p><h3 class=\"text-light  categories top bottom\">BOIS ISSUS DE FORÊTS MAÎTRISÉES</h3></p>
                                    <p class=\"text-light \">
                                    Il n'y a pas de \"planète B\", nous accordons une grande importance à la provenance de notre matière première : le Bois. 
                                    Celui-ci provient de forêt gérées durablement par nos amis bucherons en 
                                    chemises à carreaux. Nous associons plusieurs essences de bois dans la confection de nos planches 
                                    car leurs propriétés mécaniques sont complémentaire et cet assemblage confère à nos planches une plus grande résistance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"\" style=\"width:100vw;\">
                            
                            <div class=\"\" style=\"z-index:1;width:100vw;position:relative;\" >
                                <img src=\"{{ asset('assets/images/valeur/eco-responsable.jpeg') }}\" class=\"img-foret\" alt=\"skateboard ethik\">
                            </div>
                            <div class=\"row justify-content-center align-items-center\" style=\"z-index:2;height:50vh;position:absolute;top:0\">
                                <div class=\"col-6\"></div>
                                <div class=\"col-4 text-left\" style=\"\">
                                    <p><h3 class=\"text-dark  categories top bottom\">ÉTHIQUE</h3></p>
                                    <p class=\"text-dark \">Dans une démarche éco-responsable, 
                            nous étudions tous nos processus afin d'avoir l'impact sur l'environnement 
                            le plus faible possible. Les encres de sérigraphie utilisées sont à base d'eau, 
                            notre vernis protecteur est à l'eau également, nous sommes équipés d'ampoules à basse
                             consommation et nous pensons à éteindre nos interrupteurs lorsque nous partons de l'atelier. 
                             Nous défendons nos valeurs auprès de nos élèves également et lors de nos interventions nous 
                             les sensibilisons aux gestes indispensables à la préservation de notre planète.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-12\">
                        <div class=\"\" style=\"width:100vw;\">
                            
                            <div class=\"\" style=\"z-index:1;width:100vw;position:relative;opacity:0.5\" >
                                <img src=\"{{ asset('assets/images/valeur/enseignement.jpg') }}\" class=\"img-cours\" alt=\"skateschool transmission école de skate\">
                            </div>
                            <div class=\"row justify-content-center align-items-center\" style=\"z-index:2;height:50vh;position:absolute;top:0\">
                                
                                <div class=\"col-10 \" style=\"\">
                                    <h3 class=\"text-center text-light categories top bottom\">ENSEIGNEMENT</h3>
                                    <p class=\"text-light text-center\">Les cours sont assurés par Éric Motard, professeur diplômé. 
                                    Il base sa pédagogie sur la progression au rythme de chacun. Nous sommes tous, adultes et 
                                    enfants confrontés au stress dans la vie quotidienne, que ce soit à l'école ou au travail, c'est pour cela 
                                    que notre moniteur a opté pour des méthodes pédagogiques basées sur l'enssence même du skateboard : se faire plaisir avant tout. 
                                    Le challenge est bien présent mais dans une ambiance plus détendue.
                                 
                                     Vous apprendrez les techniques et les règles à respecter pour évoluer sans danger dans votre pratique quotidienne 
                                    que ce soit sur un skatepark ou tout simplement pour vous déplacer en ville. N'oublions pas que le skateboard et le 
                                    longboard sont d'excellents moyens de déplacement alternatifs pour aller au travail, à l'école ou partout ailleurs, 
                                    tout en ayant sa dose de glisse quotidienne.
                                     </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12\">
                        
                        <div class=\"\">
                            
                            
                        </div>
                    </div> 
                
                
            </div>
            <div class=\"row justify-content-center\">
                <h2 class=\"categories top bottom\"><b>- NOS PARTENAIRES -</b></h2>
                <div class=\"w-100\"></div>
                <hr class=\"top bottom\">
                <div class=\"w-100\"></div>
                <div class=\"text-center row justify-content-center col-9 top bottom \">
                    <a href=\"https://www.surf-hebergement-biscarrosse.fr/\" class=\"text-center row justify-content-center top bottom\">
                        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\"><img src=\"{{ asset('assets/images/partenaires/villa-sunshine.png') }}\" class=\"img-partenaire img-fluid\"></div>
                        <div class=\"w-100\"></div>
                        <p class=\" col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 top\">
                        Surf lodge à Biscarrosse Plage. Vous souhaitez passez vos vacances dans un cadre magnifique et en profiter pour paufiner votre technique 
                        en surf et en skate, c'est la Villa idéale. Nelly vous accueille sur place, et vous guidera pour un séjour sur mesure. 
                        Les cours de skate et de surf sont encadrés par deux moniteurs diplômés et passionés. Attention c'est très addictif... ;)
                        </p>
                        <div class=\"w-100\"></div>
                    </a>
                    <a href=\"https://www.adrenaline-hunter.com/fr-FR/\" class=\"text-center row justify-content-center top bottom\">
                        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\"><img src=\"{{ asset('assets/images/partenaires/adrenaline_hunter.png') }}\" class=\"img-partenaire img-fluid\"></div>
                        <div class=\"w-100\"></div>
                        <p class=\" col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 top\">
                        Gagnez du temps dans vos recherches d’activités avec ce premier site de réservation pour des initiations, stages, et 
                        coaching de sports extreme et outdoor à travers le monde.
                        </p>
                        <div class=\"w-100\"></div>
                    </a>
                    <a href=\"https://www.ariskateboard.com/\" class=\"text-center row justify-content-center top bottom\">
                        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\"><img src=\"{{ asset('assets/images/partenaires/ARI.png') }}\" class=\"img-partenaire img-fluid\"></div>
                        <div class=\"w-100\"></div>
                        <p class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 top\">
                        Association Illacaise qui se bouge pour les skateurs.
                        </p>
                        <div class=\"w-100\"></div>
                    </a>
                    <a href=\"https://www.facebook.com/Bordeaux-Longskate-Club-Le-BLC-349277721882518/\" class=\"text-center row justify-content-center top bottom\">
                        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\"><img src=\"{{ asset('assets/images/partenaires/BLC.png') }}\" class=\"img-partenaire img-fluid\"></div>
                        <div class=\"w-100\"></div>
                        <p class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 top\">
                        Page Officielle du BLC où l'on vous partage la vie de l'asso, des assos des copains les events de 
                        longboard dans la région les initiations et les sessions entre riders.
                        </p>
                        <div class=\"w-100\"></div>
                    </a>
                    <a href=\"https://www.facebook.com/Feelethik33/\" class=\"text-center row justify-content-center top bottom\">
                        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\"><img src=\"{{ asset('assets/images/partenaires/feelethik.png') }}\" class=\"img-partenaire img-fluid\"></div>
                        <div class=\"w-100\"></div>
                        <p class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 top\">
                        Association pluridisciplinaire, art circassien, slackline, et skateboard arcachonais. 
                        De nombreux évènements et une éthik à découvrir.
                        </p>
                        <div class=\"w-100\"></div>
                    </a>
                    <a href=\"https://www.mygreensport.com/\" class=\"text-center row justify-content-center top bottom\">
                        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\"><img src=\"{{ asset('assets/images/partenaires/my-green-sport.png') }}\" class=\"img-partenaire img-fluid\"></div>
                        <div class=\"w-100\"></div>
                        <p class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 top\">
                        My green sport valorise les marques qui s’engagent pour la planète afin de vous proposer une gamme unique de matériel 
                        de sport qui préserve l’environnement tout en vous procurant sensations et performances.
                        </p>
                        <div class=\"w-100\"></div>
                    </a>
                    <a href=\"https://lepereskateur.com/\" class=\"text-center row justify-content-center top bottom\">
                        <div class=\"col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3\"><img src=\"{{ asset('assets/images/partenaires/le-pere-skater.png') }}\" class=\"img-partenaire img-fluid\"></div>
                        <div class=\"w-100\"></div>
                        <p class=\"col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 top\">
                        Le Père Skateur : Nouvelle boutique au Barpe où vous trouverez tout le nécessaire pour skater ! 
                        </p>
                        <div class=\"w-100\"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "concept.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/concept.html.twig");
    }
}
