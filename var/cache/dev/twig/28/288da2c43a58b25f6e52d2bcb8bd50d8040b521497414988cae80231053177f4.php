<?php

/* cgv.html.twig */
class __TwigTemplate_35a33e4c0394468fe2da41c6c2e808621dad813d9e251aa716ab5137db819242 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cgv.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cgv.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cgv.html.twig"));

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

        $this->loadTemplate("connexion.html.twig", "cgv.html.twig", 2)->display($context);
        
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

        $this->loadTemplate("nav.html.twig", "cgv.html.twig", 3)->display($context);
        
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
        echo "
<div class=\"container-fluid bg-light text-dark\">
    <div class=\"row justify-content-center top\">
        <div class=\"col-12 text-center categories\">
            <h2 class=\"top\"><b>- CONDITIONS GÉNÉRALES DE VENTE BORDZA-</b></h2>
        </div>
        <div class=\"col-9 rounded padding top\">
        <p><U>ARTICLE 1. DESIGNATION DU VENDEUR</U><br/>
        Le présent site www.bordza.fr est édité par l’auto-entreprise Eric Motard dont le siège social est situé au 12A, chemin de Lescaussade, à St Loubès 33450.<br/>
        Auto-entreprise Eric Motard, 
        dont la dénomination sociale est Bordza.<br/>
        Service clientèle : contact@bordza.fr<br/>
        Hébergeur du site : 1&1<br/>
        Responsable du site : Monsieur Eric Motard (entreprise Bordza) dont l’adresse mail est contact@bordza.fr<br/></p>




        <p><U>ARTICLE 2 : OBJET</U><br/>
        Les conditions générales de vente décrites ci-après détaillent les droits et obligations de l’entreprise Bordza et de son client dans le cadre de : <br/>
        - la vente des marchandises suivantes : textiles et matériel sportif servant à la pratique du skateboard et longboard.<br/>
        - prestations de services suivantes : cours de skateboard et longboard.<br/></p>

        <p>Toute prestation accomplie par la société Bordza implique donc l'adhésion sans réserve de l'acheteur aux présentes conditions générales de vente.</p>


        <p><U>ARTICLE 3. CHAMP D’APPLICATION – ACCEPTATION PAR L’ACHETEUR</U><br/>
        Les présentes conditions générales de vente s’appliquent, sans restriction ni réserve à l’ensemble des ventes conclues par la société Bordza auprès d’acheteurs non professionnels, désirant acquérir les produits proposés à la vente par Bordza sur son site internet www.bordza.fr
        Les offres présentées sur le site www.bordza.fr s’adressent aux ressortissants de France et des autres pays notamment de la zone euro.<br/>
        Ces conditions s’appliquent à l’exclusion de toutes autres conditions, et notamment celles applicables pour les ventes en magasin ou au moyen d’autres circuits de distribution et de commercialisation.
        Ces conditions générales de vente sont accessibles à tout moment sur ce site Internet et prévaudront, le cas échéant, sur tout autre document contradictoire.<br/>
        Les conditions générales de vente sont rédigées, ainsi que l’ensemble des informations contractuelles mentionnées sur le site, en langue française.</p>

        <p>L’acheteur déclare avoir pris connaissance des conditions générales de vente et les avoir acceptées en cochant la case « J’accepte les conditions générales de vente » avant la mise en œuvre de la procédure de commande en ligne, de sorte que toute commande d’article passée par un acheteur sur le site www.bordza.fr implique nécessairement l’acceptation irrévocable par celui-ci, sans restriction ni réserve, des conditions générales de vente. Les conditions générales de vente pouvant faire l’objet de modifications, les conditions applicables sont celles en vigueur sur le site www.bordza.fr à la date de passation de la commande.<br/>
        Sauf preuve contraire, les données enregistrées par la société Bordza  constituent la preuve de l’ensemble des transactions.<br/>
        Les produits offerts à la vente présentés dans le catalogue publié sur le site font chacun l’objet d’un descriptif mentionnant leurs caractéristiques essentielles au sens de l’article L 111-1 du Code de la Consommation.<br/>
        Les photographies illustrant les produits ne constituent pas un document contractuel.
        Les produits sont conformes aux prescriptions en vigueur relatives à la sécurité et à la santé des personnes, à la loyauté des transactions commerciales et à la protection des consommateurs au moment de leur mise sur le marché.<br/>
        Les offres de produits s’entendent dans la limite des stocks disponibles. L’acheteur recevra un mail en cas de rupture de stock, ou d’impossibilité de réaliser la commande. La validation de la commande par l’acheteur vaut acceptation sans réserve des présentes conditions générales de vente.<br/>
        La nullité d’une clause contractuelle n’entraîne pas la nullité des conditions générales de vente.
        L’inapplication temporaire ou permanente d’une ou plusieurs clauses des conditions générales de vente par le vendeur professionnel ne saurait valoir renonciation de sa part aux autres clauses des conditions générales de vente qui continuent à produire leurs effets.</p>


        <p><U>ARTICLE 4 : PRIX</U><br/>
        Les prix des marchandises vendues sont ceux en vigueur au jour de la prise de commande. Ils sont libellés en euros et non assujettis à la TVA. Par voie de conséquence, ils seront majorés des frais de transport applicables au jour de la commande. Et la TVA ne sera pas « récupérable » pour toute commande passée par des entreprises.</p>

        <p>La société Bordza s'accorde le droit de modifier ses tarifs à tout moment. Toutefois, elle s'engage à facturer les marchandises commandées aux prix indiqués lors de l'enregistrement de la commande.</p>


        <p><U>ARTICLE 5 : PASSATION DE COMMANDE :</U><br/>
        <!--
        Toute commande passée sur le site www.bordza.fr constitue la formation d’un contrat conclu à distance entre l’acheteur et la société Bordza.<br/>
        Il appartient au client de sélectionner sur le site les produits qu’il désire commander, selon les modalités suivantes :</p>

        <p>Pour commander les articles souhaités sur le site www.bordza.fr, le client choisit l’onglet « boutique » puis entre dans la fiche produit en cliquant sur la photo ou la référence, il choisit les options puis clique sur le bouton Paypal « ajouter au panier ». Le client remplit le « panier » Paypal avec tous les produits souhaités, puis finalise la commande en suivant les indications Paypal. Ce panier Paypal permet de gérer la commande, de modifier les quantités ou de supprimer des articles et de voir le total du coût de la commande avec les frais de livraison. La commande ne sera effective qu’après la validation de cette sélection par l’acheteur.<br/> 
        Tout article sélectionné mais dont la commande n’a pas été validée par l’acheteur, reste disponible à la vente pour les autres acheteurs. La société Bordza ne donne aucune garantie quant au maintien du prix en vigueur au jour de la sélection non suivie de validation, le prix applicable étant celui en vigueur au moment de la validation par l’Acheteur de sa commande.<br/>
        Après validation de la commande, ’application Paypal vous enverra un e-mail pour accuser réception de la commande. Bordza enverra un e-mail en cas de rupture de stock, ou d’impossibilité de réaliser la commande. L’acheteur sera alors informé d’une proposition de délais supplémentaire, d’un choix de produits équivalent, ou sera remboursé s’il le souhaite. L’entreprise Bordza enverra un e-mail à l’acheteur pour le tenir informé de l’état d’avancement de la commande jusqu’à l’envoi de cette dernière. Le dernier e-mail comprendra les informations nécessaires au bon suivi de la livraison, à  savoir le numéro de commande ainsi que le numéro de suivi du colis.</p>

        -->
        L'onglet \"catalogue\" du site www.bordza.fr présente les produits disponibles à la vente. Le visiteur du site qui souhaite commander l'un de ces produits rentre alors en contact avec l'entreprise Bordza, par le biais du formulaire de contact, par téléphone ou par mail. Toutes ces informations sont disponibles à l'onglet \"contact\" du site internet. 
        Il indique alors le ou les modèles qu'il souhaite acquérir. Nous lui faisont parvenir en réponse à ce mail une facture avec le montant exact de la transaction dont le client devra s'acquitter pour lancer la fabrication de sa marchandise.
        Il lui sera également communiqué les moyens de paiement disponibles, à savoir : virement banquaire, espèces, chèque ou paypal. 
        À la réception du paiement la commande sera alors réalisée puis remise au transporteur pour livraison. Bordza s'engage à communiquer l'état d'avancement de la commande pour chaque étape de fabrication jusqu'à la remise de la marchandise au transporteur.
        Le numéro de suivi du colis sera alors transmit au client afin que celui-ci puisse suivre l'acheminement du produit commandé.
        <p><U>ARTICLE 6 : RABAIS ET RISTOURNES</U><br/>
        Les tarifs proposés comprennent les rabais et ristournes que la société Bordza serait amenée à octroyer compte tenu de ses résultats ou de la prise en charge par l'acheteur de certaines prestations.
        En cas de promotion par les prix, Bordza s’engage à appliquer le prix promotionnel à toute commande passée pendant la durée de la promotion.
        Les offres de vente en ligne présentées sur le site sont valables, à défaut d’indication de durée particulière, tant que les produits figurent dans le catalogue électronique et dans la limite des stocks disponibles.</p>


        <p><U>ARTICLE 7 : ESCOMPTE</U><br/>
        Aucun escompte ne sera consenti en cas de paiement anticipé.</p>

        <p><U>ARTICLE 8 : MODALITÉS DE PAIEMENT</U><br/>
        Les produits sont fournis aux tarifs en vigueur figurant sur le site, lors de l’enregistrement de la commande par le Vendeur. Les prix sont exprimés en Euros sur le site www.bordza.fr et non soumis à la TVA.<br/>
        Les prix sont toujours entendus hors frais de livraison ; les frais de livraison tels qu’affichés sur le site www.bordza.fr. et dont l’acheteur sera informé au court du processus de commande, sont à ajouter au prix total de la commande.<br/>
        Le montant total dû par l’acheteur est indiqué sur la page de confirmation de commande.<br/>
        Le prix est exigible en totalité après confirmation de la commande.<br/>
        Ces tarifs sont fermes et non révisables pendant leur période de validité, tels qu’indiqués sur le site www.bordza.fr.</p>

        <p>Ils ne comprennent pas les frais de traitement, d’expédition, de transport et de livraison, qui sont facturés en supplément.<br/>
        L’entreprise Bordza se réserve le droit de modifier ses prix à tout moment, tout en garantissant au consommateur l’application du prix en vigueur au jour de la commande.<br/>
        Lors de la commande, les acheteurs sont invités à s’assurer que le prix des articles auquel ils se réfèrent corresponde bien au prix figurant sur la page à jour du site www.bordza.fr et non sur une page périmée à laquelle ils auraient accédé par une recherche internet en mode dit « cache ».</p>

        <p>Le règlement des commandes personnalisées nécessitant un devis s'effectue : <br/>
        \t\tsoit par chèque ;<br/>
        \t\tsoit par virement bancaire ;<br/>
        \t\tsoit en espèces pour les commandes d’un montant inférieur 1000€.<br/>
        Lors de l'enregistrement de la commande, l'acheteur devra verser un acompte de 30% du montant global de la facture, le solde devant être payé à réception des marchandises.<br/>
        Pour toutes les commandes passées sur le site marchand www.bordza.fr, le paiement se fera par le biais de Paypal. Il se fera donc du montant global de la facture à la commande.</p>

        <p><U>ARTICLE 9 : RETARD DE PAIEMENT</U><br/>
        En cas de défaut de paiement total ou partiel des marchandises livrées au jour de la réception, l'acheteur doit verser à la société Bordza une pénalité de retard égale à trois fois le taux de l'intérêt légal.<br/> 
        Le taux de l'intérêt légal retenu est celui en vigueur au jour de la livraison des marchandises. 
        A compter du 1er janvier 2015, le taux d'intérêt légal sera révisé tous les 6 mois (Ordonnance n°2014-947 du 20 août 2014).<br/>
        Cette pénalité est calculée sur le montant de la somme restant due, et court à compter de la date d'échéance du prix sans qu'aucune mise en demeure préalable ne soit nécessaire.</p>

        <p>En sus des indemnités de retard, toute somme, y compris l’acompte, non payée à sa date d’exigibilité produira de plein droit le paiement d’une indemnité forfaitaire de 40 euros due au titre des frais de recouvrement.<br/>
        Articles 441-6, I alinéa 12 et D. 441-5 du code de commerce.</p>

        <p><U>ARTICLE 10 : CLAUSE RÉSOLUTOIRE</U><br/>
        Si dans les quinze jours qui suivent la mise en oeuvre de la clause \" Retard de paiement \", l'acheteur ne s'est pas acquitté des sommes restant dues, la vente sera résolue de plein droit et pourra ouvrir droit à l'allocation de dommages et intérêts au profit de l’entreprise Bordza.</p>

        <p><U>ARTICLE 11 : CLAUSE DE RÉSERVE DE PROPRIÉTÉ</U><br/>
        L’entreprise Bordza conserve la propriété des biens vendus jusqu'au paiement intégral du prix, en principal et en accessoires. À ce titre, si l'acheteur fait l'objet d'un redressement ou d'une liquidation judiciaire, l’entreprise Bordza se réserve le droit de revendiquer, dans le cadre de la procédure collective, les marchandises vendues et restées impayées.</p>

        <p><U>ARTICLE 12 : LIVRAISON</U><br/>
        La livraison sera effectuée :<br/>
        \t\tsoit par la remise directe de la marchandise à l'acheteur ;<br/>
        \t\tsoit par l'envoi d'un avis de mise à disposition du produit dans un établissement partenaire;<br/>
        \t\tsoit au lieu indiqué par l'acheteur sur le bon de commande, par un transporteur.<br/>
        Les produits acquis par l’acheteur seront livrés en France métropolitaine dans un délai maximum de 30 jours suivant l’encaissement du règlement de leur prix par Bordza à l’adresse indiquée par l’acheteur lors de sa commande sur le site internet. Sauf cas particulier ou indisponibilité d’un ou plusieurs produits, les produits commandés seront livrés en une seule fois.</p>

        <p>Par voie de conséquence, tout retard raisonnable dans la livraison des produits ne pourra pas donner lieu au profit de l'acheteur à : <br/>
        \t\tl'allocation de dommages et intérêts ;<br/>
        \t\tl'annulation de la commande.</p>

        <p>L’acheteur supportera les conséquences (retard de livraison, impossibilité de livraison, surcoûts de transports…) résultant le cas échéant du caractère erroné et/ou incomplet des indications fournies par ses soins en vue de la livraison.</p>

        <p>Pour le coût de la livraison, le tarifs en vigueur du transporteur sera appliqué. L’entreprise Bordza s’engage à choisir un mode de livraison avec un suivi du colis pour plus de sécurité. Le tarif sera appliqué selon ce barème :<br/>
        tarif a : pour l’achat d’une planche avec ou sans le pack « complet »<br/>
        tarif b : pour l’achat d’accessoires ou textile (hors trucks et roues)<br/>
        tarif c : pour l’achat de lots de trucks ou de roues.<br/>
        Les frais de livraison sont indiqués lors de la commande.<br/>
        La société Bordza se réserve le droit de modifier ces prix lors de commandes d’articles en grande quantité. Un devis sera alors envoyé et la commande ne sera validée qu’après l’acceptation et le paiement par le client du nouveau prix de livraison. <br/>
        La livraison des articles commandés n’interviendra qu’après l’encaissement de leur prix étant précisé qu’en toute hypothèse, Bordza conserve la propriété des articles commandés et livrés jusqu’au complet encaissement de leur prix (principal et intérêts).</p>


        <p>Lors de l’expédition de la commande, le numéro de commande ainsi que le numéro de suivi et les informations nécessaires au bon suivi du colis seront envoyés à l’acheteur par e-mail.</p>

        <p>En cas de marchandises manquantes ou détériorées lors du transport, l'acheteur devra formuler toutes les réserves nécessaires sur le bon de commande à réception desdites marchandises. Ces réserves devront être, en outre, confirmées par écrit dans les cinq jours suivant la livraison, par courrier recommandé AR adressé à Bordza, 14A chemin de lescaussade, 33450 Saint Loubès.</p>

        <p>En cas de dépassement du délai de 30 jours, non justifié par un cas de force majeure telle que définie par la jurisprudence française ou non dû à une grève quelle qu’en soit la cause, l’Acheteur pourra demander la résolution de la vente par lettre recommandée avec demande d’avis de réception adressée à Bordza – 14A, chemin de Lescaussade 33450 Saint Loubès. L’acheteur obtiendra alors restitution du prix payé au titre de la commande dans un délai maximal de quatorze (14) jours calendaires suivant la résolution du contrat.</p>

        <p>En cas de demande particulière de l’acheteur concernant les conditions d’emballage ou de transport des produits commandés, Bordza enverra un devis prenant en compte les coûts supplémentaires. Le devis doit être accepté par écrit par l’acheteur puis renvoyé par mail ou courrier postal, afin de procéder à la facturation spécifique et de poursuivre le processus de commande comme précédemment indiqué.</p>

        <p><U>ARTICLE 13. TRANSFERT DE PROPRIETE – TRANSFERT DES RISQUES</U><br/>
        La réception des articles commandés, constatée par la signature de l’acheteur ou de tout autre destinataire habilité sur le bon de livraison, opère transfert des risques à l’acheteur.</p>

        <p>Dans la mesure du possible, l’acheteur vérifiera à la livraison les éventuelles avaries ou pertes de transport et indiquera, le cas échéant, au transporteur, les réserves d’usage au moment de la livraison.</p> 

        <p>Les réclamations sur les vices apparents des articles ne seront acceptés que si elles sont faites par écrit par courrier recommandé adressé à Bordza 14A, chemin de Lescaussade 33450 Saint Loubès ou par email à l’adresse suivante : contact@bordza.fr, avec tous les justificatifs y afférents, dans les quatorze (14) jours qui suivent la date de réception des articles. Passé ce délai et à défaut d’avoir respecté ces formalités, les articles seront réputés exempts de tout vice apparent et aucune réclamation ne pourra, à ce titre, être valablement acceptée par Bordza.<br/>
        Bordza remplacera dans les plus brefs délais et à ses frais, les articles livrés affectés de vices apparents dont elle aura accepté le retour à ses frais et dont elle aura constaté, une fois ceux-ci retournés, la réalité des vices apparents, l’acheteur pouvant opter pour le remboursement desdits articles.</p>


        <p><U>ARTICLE 14. DROIT DE RETRACTATION</U><br/>
        L’acheteur dispose d’un délai de quatorze (14) jours calendaires francs, à compter de la réception des articles commandés, pour exercer son droit de rétractation, sans avoir à justifier de motifs ni à payer de pénalités, en remplissant le formulaire type de rétractation, <a href=\"fichiers/formulaire_de_retractation.pdf\">(formulaire disponible ici)</a> ou en remplissant une déclaration dénuée d’ambiguïté exprimant sa volonté de se rétracter. Le formulaire de rétractation ou cette déclaration doivent être renvoyés à l’adresse du service client : <br/>contact@bordza.fr ou par courrier à l’adresse suivante Bordza, 14A, chemin de Lescaussade 33450 St Loubes.<br/>
        L’acheteur dispose alors de (14) jours francs pour retourner lesdits articles à compter de la communication de sa décision de se rétracter à Bordza pour en obtenir le remboursement. L’acheteur pourra retourner l’article acheté dans le délai précité, sous réserve du respect des conditions suivantes :</p>

        <p>a) Les articles doivent être retournés intacts, dans leur état d’origine, avec leur emballage d’origine et complets avec les étiquettes encore fixées et intactes et ce, afin qu’ils puissent être recommercialisés à l’état neuf. La responsabilité de l’acheteur pourra être engagée si les articles ont été endommagés, détériorés ou salis par l’acheteur.</p>

        <p>b) Les articles doivent être retournés, accompagnés du formulaire de retour dûment rempli à l’adresse suivante : Bordza, 14A, chemin de Lescaussade 33450 Saint Loubès. Bordza recommande aux Acheteurs de souscrire à une option de suivi de colis.</p>

        <p>c) Les sommes versées par l’acheteur, y compris les frais de livraison, lui seront intégralement remboursées dans un délai de quatorze jours suivant la date à laquelle l’acheteur a fourni la preuve de l’expédition des produits, sans frais supplémentaires à la charge de l’acheteur (virement bancaire, chèque, bon cadeaux, …). Les frais de retour seront à la charge exclusive de l’acheteur.</p>

        <p>d) Dans le cas où l’acheteur aurait réglé sa commande par avoirs/ bon cadeaux, le remboursement pourra être effectué également sous forme d’avoirs/ bons cadeaux.
        e) En cas de retour d’une partie simplement des articles, les frais de livraison ne seront pas remboursés par Bordza dans la mesure où, l’acheteur a bénéficié du service de livraison pour les articles conservés.</p>

        <p>f) En cas de retour d’articles tardif, dépassant le délai de quatorze (14) jours à compter de sa décision de se rétracter (le cachet de la poste faisant foi), l’acheteur ne sera pas remboursé et sera informé que les articles restent à sa disposition à l’atelier de Bordza pendant un délai d’un mois. A la demande de l’acheteur, ces articles pourront également lui être réexpédiés à ses frais.<br/>
        Il est précisé que :<br/>
        - Quel que soit le destinataire final de l’article acquis par l’acheteur, le droit de rétraction ne pourra être exercé que par l’acheteur ;<br/>
        - Dans le cas de commande multiple, autrement dit d’une commande de plusieurs produits, le délai de rétractation courra à partir de la réception du dernier produit ;<br/>
        Les frais de retour sont à la charge de l’acheteur.</p>

        <p>Pour toute commande personnalisée, l’échange ou le remboursement ne seront pas acceptés dans le cadre du droit de rétractation, dans la mesure où le produit personnalisé ne pourra pas être remis à la vente. Sauf cas de vice avéré et accepté par Bordza, auquel cas le produit sera retourné à l’adresse 14A chemin de Lescaussade, 33450 Saint Loubès. Les frais de retour seront alors pris en charge par Bordza. Une proposition d’échange ou de remboursement sera alors faite à l’acheteur.</p>


        <p><U>ARTICLE 15 : ASSURANCE ANNULATION</U> <br/>
        Dans tous cas de commande, l’accord oral (ou même tacite) ou la signature engagent l’acheteur.
        Pour une commande de prestation de service pour les cours de skate, la résiliation du contrat engendrera le paiement d’une dédite de 100% du prix de vente si la résiliation a lieu le jour même de la prestation prévue, 50% si la résiliation se fait dans les 24H avant la prestation, 30% si la résiliation se fait 48H avant la prestation, dans la mesure ou le créneau aura été réservé et qu’il ne sera plus disponible pour d’autres clients. <br/>
        Pour ce qui est de la commande personnalisée (planches, textiles…), en cas de résiliation il y aura une dédite de 30% du montant de la commande à régler dans la mesure où du matériel aura été commandé pour réaliser cette commande.<br/>
        L’entreprise Bordza s’engage à ne pas prétendre à des frais liés à une résiliation en cas de force majeure.</p>

        <p><U>ARTICLE 16 : CONDITIONS D’ANNULATION LIEES A LA DEFAILLANCE D’UN PRESTATAIRE EXTERNE</U><br/>
        En cas de défaillance d'un prestataire externe (indisponibilité des lieux réservés, problème de location de matériel, …) ne pouvant réaliser sa prestation, la responsabilité de Bordza ne saurait être recherchée par le client.<br/>
        Cependant, Bordza s’engage à fournir les meilleurs efforts pour proposer d’autres prestataires disponibles dont les critères se rapprochent au mieux de la prestation initiale.<br/>
        Le client peut librement accepter ou refuser l'/les alternative(s) proposée(s).
        Dans le cas où le client la/les refuse, Bordza s’engage à rembourser tout versement d’acompte ou de sommes versées pour cette dite prestation réservée et non réalisée. En tout état de cause, la responsabilité de Bordza est limitée au montant des sommes reçues au titre des prestations mises en cause, à l'exclusion de tout dommages indirects, manque à gagner, perte de chance ou bénéfices escomptés par le client, et/ou de toute autre conséquence financière résultant d'actions éventuellement intentées par des tiers à l'encontre du client. Cette stipulation ne s'appliquera pas à une responsabilité que la loi interdit d'exclure ou de limiter.</p>


        <p><U>ARTICLE 17 : FORCE MAJEURE</U><br/>
        La responsabilité de la société Bordza ne pourra pas être mise en oeuvre si la non-exécution ou le retard dans l'exécution de l'une de ses obligations décrites dans les présentes conditions générales de vente découle d'un cas de force majeure. À ce titre, la force majeure s'entend de tout événement extérieur, imprévisible et irrésistible au sens de l'article 1148 du Code civil.</p>

        <p><U>ARTICLE 18 : TRIBUNAL COMPÉTENT</U><br/>
        Tout litige relatif à l'interprétation et à l'exécution des présentes conditions générales de vente est soumis au droit français.</p>

        <p>À défaut de résolution amiable, le litige sera porté devant le Tribunal de commerce de Bordeaux.</p>

        <p>Fait à St Loubès, le 8 Juin 2017</p>


        <p>Éric MOTARD,</p>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 202
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->loadTemplate("footer.html.twig", "cgv.html.twig", 202)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cgv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 202,  92 => 5,  83 => 4,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block connexion %}{% include 'connexion.html.twig' %}{% endblock %}
{% block nav %}{% include 'nav.html.twig' %}{% endblock %}
{% block body %}

<div class=\"container-fluid bg-light text-dark\">
    <div class=\"row justify-content-center top\">
        <div class=\"col-12 text-center categories\">
            <h2 class=\"top\"><b>- CONDITIONS GÉNÉRALES DE VENTE BORDZA-</b></h2>
        </div>
        <div class=\"col-9 rounded padding top\">
        <p><U>ARTICLE 1. DESIGNATION DU VENDEUR</U><br/>
        Le présent site www.bordza.fr est édité par l’auto-entreprise Eric Motard dont le siège social est situé au 12A, chemin de Lescaussade, à St Loubès 33450.<br/>
        Auto-entreprise Eric Motard, 
        dont la dénomination sociale est Bordza.<br/>
        Service clientèle : contact@bordza.fr<br/>
        Hébergeur du site : 1&1<br/>
        Responsable du site : Monsieur Eric Motard (entreprise Bordza) dont l’adresse mail est contact@bordza.fr<br/></p>




        <p><U>ARTICLE 2 : OBJET</U><br/>
        Les conditions générales de vente décrites ci-après détaillent les droits et obligations de l’entreprise Bordza et de son client dans le cadre de : <br/>
        - la vente des marchandises suivantes : textiles et matériel sportif servant à la pratique du skateboard et longboard.<br/>
        - prestations de services suivantes : cours de skateboard et longboard.<br/></p>

        <p>Toute prestation accomplie par la société Bordza implique donc l'adhésion sans réserve de l'acheteur aux présentes conditions générales de vente.</p>


        <p><U>ARTICLE 3. CHAMP D’APPLICATION – ACCEPTATION PAR L’ACHETEUR</U><br/>
        Les présentes conditions générales de vente s’appliquent, sans restriction ni réserve à l’ensemble des ventes conclues par la société Bordza auprès d’acheteurs non professionnels, désirant acquérir les produits proposés à la vente par Bordza sur son site internet www.bordza.fr
        Les offres présentées sur le site www.bordza.fr s’adressent aux ressortissants de France et des autres pays notamment de la zone euro.<br/>
        Ces conditions s’appliquent à l’exclusion de toutes autres conditions, et notamment celles applicables pour les ventes en magasin ou au moyen d’autres circuits de distribution et de commercialisation.
        Ces conditions générales de vente sont accessibles à tout moment sur ce site Internet et prévaudront, le cas échéant, sur tout autre document contradictoire.<br/>
        Les conditions générales de vente sont rédigées, ainsi que l’ensemble des informations contractuelles mentionnées sur le site, en langue française.</p>

        <p>L’acheteur déclare avoir pris connaissance des conditions générales de vente et les avoir acceptées en cochant la case « J’accepte les conditions générales de vente » avant la mise en œuvre de la procédure de commande en ligne, de sorte que toute commande d’article passée par un acheteur sur le site www.bordza.fr implique nécessairement l’acceptation irrévocable par celui-ci, sans restriction ni réserve, des conditions générales de vente. Les conditions générales de vente pouvant faire l’objet de modifications, les conditions applicables sont celles en vigueur sur le site www.bordza.fr à la date de passation de la commande.<br/>
        Sauf preuve contraire, les données enregistrées par la société Bordza  constituent la preuve de l’ensemble des transactions.<br/>
        Les produits offerts à la vente présentés dans le catalogue publié sur le site font chacun l’objet d’un descriptif mentionnant leurs caractéristiques essentielles au sens de l’article L 111-1 du Code de la Consommation.<br/>
        Les photographies illustrant les produits ne constituent pas un document contractuel.
        Les produits sont conformes aux prescriptions en vigueur relatives à la sécurité et à la santé des personnes, à la loyauté des transactions commerciales et à la protection des consommateurs au moment de leur mise sur le marché.<br/>
        Les offres de produits s’entendent dans la limite des stocks disponibles. L’acheteur recevra un mail en cas de rupture de stock, ou d’impossibilité de réaliser la commande. La validation de la commande par l’acheteur vaut acceptation sans réserve des présentes conditions générales de vente.<br/>
        La nullité d’une clause contractuelle n’entraîne pas la nullité des conditions générales de vente.
        L’inapplication temporaire ou permanente d’une ou plusieurs clauses des conditions générales de vente par le vendeur professionnel ne saurait valoir renonciation de sa part aux autres clauses des conditions générales de vente qui continuent à produire leurs effets.</p>


        <p><U>ARTICLE 4 : PRIX</U><br/>
        Les prix des marchandises vendues sont ceux en vigueur au jour de la prise de commande. Ils sont libellés en euros et non assujettis à la TVA. Par voie de conséquence, ils seront majorés des frais de transport applicables au jour de la commande. Et la TVA ne sera pas « récupérable » pour toute commande passée par des entreprises.</p>

        <p>La société Bordza s'accorde le droit de modifier ses tarifs à tout moment. Toutefois, elle s'engage à facturer les marchandises commandées aux prix indiqués lors de l'enregistrement de la commande.</p>


        <p><U>ARTICLE 5 : PASSATION DE COMMANDE :</U><br/>
        <!--
        Toute commande passée sur le site www.bordza.fr constitue la formation d’un contrat conclu à distance entre l’acheteur et la société Bordza.<br/>
        Il appartient au client de sélectionner sur le site les produits qu’il désire commander, selon les modalités suivantes :</p>

        <p>Pour commander les articles souhaités sur le site www.bordza.fr, le client choisit l’onglet « boutique » puis entre dans la fiche produit en cliquant sur la photo ou la référence, il choisit les options puis clique sur le bouton Paypal « ajouter au panier ». Le client remplit le « panier » Paypal avec tous les produits souhaités, puis finalise la commande en suivant les indications Paypal. Ce panier Paypal permet de gérer la commande, de modifier les quantités ou de supprimer des articles et de voir le total du coût de la commande avec les frais de livraison. La commande ne sera effective qu’après la validation de cette sélection par l’acheteur.<br/> 
        Tout article sélectionné mais dont la commande n’a pas été validée par l’acheteur, reste disponible à la vente pour les autres acheteurs. La société Bordza ne donne aucune garantie quant au maintien du prix en vigueur au jour de la sélection non suivie de validation, le prix applicable étant celui en vigueur au moment de la validation par l’Acheteur de sa commande.<br/>
        Après validation de la commande, ’application Paypal vous enverra un e-mail pour accuser réception de la commande. Bordza enverra un e-mail en cas de rupture de stock, ou d’impossibilité de réaliser la commande. L’acheteur sera alors informé d’une proposition de délais supplémentaire, d’un choix de produits équivalent, ou sera remboursé s’il le souhaite. L’entreprise Bordza enverra un e-mail à l’acheteur pour le tenir informé de l’état d’avancement de la commande jusqu’à l’envoi de cette dernière. Le dernier e-mail comprendra les informations nécessaires au bon suivi de la livraison, à  savoir le numéro de commande ainsi que le numéro de suivi du colis.</p>

        -->
        L'onglet \"catalogue\" du site www.bordza.fr présente les produits disponibles à la vente. Le visiteur du site qui souhaite commander l'un de ces produits rentre alors en contact avec l'entreprise Bordza, par le biais du formulaire de contact, par téléphone ou par mail. Toutes ces informations sont disponibles à l'onglet \"contact\" du site internet. 
        Il indique alors le ou les modèles qu'il souhaite acquérir. Nous lui faisont parvenir en réponse à ce mail une facture avec le montant exact de la transaction dont le client devra s'acquitter pour lancer la fabrication de sa marchandise.
        Il lui sera également communiqué les moyens de paiement disponibles, à savoir : virement banquaire, espèces, chèque ou paypal. 
        À la réception du paiement la commande sera alors réalisée puis remise au transporteur pour livraison. Bordza s'engage à communiquer l'état d'avancement de la commande pour chaque étape de fabrication jusqu'à la remise de la marchandise au transporteur.
        Le numéro de suivi du colis sera alors transmit au client afin que celui-ci puisse suivre l'acheminement du produit commandé.
        <p><U>ARTICLE 6 : RABAIS ET RISTOURNES</U><br/>
        Les tarifs proposés comprennent les rabais et ristournes que la société Bordza serait amenée à octroyer compte tenu de ses résultats ou de la prise en charge par l'acheteur de certaines prestations.
        En cas de promotion par les prix, Bordza s’engage à appliquer le prix promotionnel à toute commande passée pendant la durée de la promotion.
        Les offres de vente en ligne présentées sur le site sont valables, à défaut d’indication de durée particulière, tant que les produits figurent dans le catalogue électronique et dans la limite des stocks disponibles.</p>


        <p><U>ARTICLE 7 : ESCOMPTE</U><br/>
        Aucun escompte ne sera consenti en cas de paiement anticipé.</p>

        <p><U>ARTICLE 8 : MODALITÉS DE PAIEMENT</U><br/>
        Les produits sont fournis aux tarifs en vigueur figurant sur le site, lors de l’enregistrement de la commande par le Vendeur. Les prix sont exprimés en Euros sur le site www.bordza.fr et non soumis à la TVA.<br/>
        Les prix sont toujours entendus hors frais de livraison ; les frais de livraison tels qu’affichés sur le site www.bordza.fr. et dont l’acheteur sera informé au court du processus de commande, sont à ajouter au prix total de la commande.<br/>
        Le montant total dû par l’acheteur est indiqué sur la page de confirmation de commande.<br/>
        Le prix est exigible en totalité après confirmation de la commande.<br/>
        Ces tarifs sont fermes et non révisables pendant leur période de validité, tels qu’indiqués sur le site www.bordza.fr.</p>

        <p>Ils ne comprennent pas les frais de traitement, d’expédition, de transport et de livraison, qui sont facturés en supplément.<br/>
        L’entreprise Bordza se réserve le droit de modifier ses prix à tout moment, tout en garantissant au consommateur l’application du prix en vigueur au jour de la commande.<br/>
        Lors de la commande, les acheteurs sont invités à s’assurer que le prix des articles auquel ils se réfèrent corresponde bien au prix figurant sur la page à jour du site www.bordza.fr et non sur une page périmée à laquelle ils auraient accédé par une recherche internet en mode dit « cache ».</p>

        <p>Le règlement des commandes personnalisées nécessitant un devis s'effectue : <br/>
        \t\tsoit par chèque ;<br/>
        \t\tsoit par virement bancaire ;<br/>
        \t\tsoit en espèces pour les commandes d’un montant inférieur 1000€.<br/>
        Lors de l'enregistrement de la commande, l'acheteur devra verser un acompte de 30% du montant global de la facture, le solde devant être payé à réception des marchandises.<br/>
        Pour toutes les commandes passées sur le site marchand www.bordza.fr, le paiement se fera par le biais de Paypal. Il se fera donc du montant global de la facture à la commande.</p>

        <p><U>ARTICLE 9 : RETARD DE PAIEMENT</U><br/>
        En cas de défaut de paiement total ou partiel des marchandises livrées au jour de la réception, l'acheteur doit verser à la société Bordza une pénalité de retard égale à trois fois le taux de l'intérêt légal.<br/> 
        Le taux de l'intérêt légal retenu est celui en vigueur au jour de la livraison des marchandises. 
        A compter du 1er janvier 2015, le taux d'intérêt légal sera révisé tous les 6 mois (Ordonnance n°2014-947 du 20 août 2014).<br/>
        Cette pénalité est calculée sur le montant de la somme restant due, et court à compter de la date d'échéance du prix sans qu'aucune mise en demeure préalable ne soit nécessaire.</p>

        <p>En sus des indemnités de retard, toute somme, y compris l’acompte, non payée à sa date d’exigibilité produira de plein droit le paiement d’une indemnité forfaitaire de 40 euros due au titre des frais de recouvrement.<br/>
        Articles 441-6, I alinéa 12 et D. 441-5 du code de commerce.</p>

        <p><U>ARTICLE 10 : CLAUSE RÉSOLUTOIRE</U><br/>
        Si dans les quinze jours qui suivent la mise en oeuvre de la clause \" Retard de paiement \", l'acheteur ne s'est pas acquitté des sommes restant dues, la vente sera résolue de plein droit et pourra ouvrir droit à l'allocation de dommages et intérêts au profit de l’entreprise Bordza.</p>

        <p><U>ARTICLE 11 : CLAUSE DE RÉSERVE DE PROPRIÉTÉ</U><br/>
        L’entreprise Bordza conserve la propriété des biens vendus jusqu'au paiement intégral du prix, en principal et en accessoires. À ce titre, si l'acheteur fait l'objet d'un redressement ou d'une liquidation judiciaire, l’entreprise Bordza se réserve le droit de revendiquer, dans le cadre de la procédure collective, les marchandises vendues et restées impayées.</p>

        <p><U>ARTICLE 12 : LIVRAISON</U><br/>
        La livraison sera effectuée :<br/>
        \t\tsoit par la remise directe de la marchandise à l'acheteur ;<br/>
        \t\tsoit par l'envoi d'un avis de mise à disposition du produit dans un établissement partenaire;<br/>
        \t\tsoit au lieu indiqué par l'acheteur sur le bon de commande, par un transporteur.<br/>
        Les produits acquis par l’acheteur seront livrés en France métropolitaine dans un délai maximum de 30 jours suivant l’encaissement du règlement de leur prix par Bordza à l’adresse indiquée par l’acheteur lors de sa commande sur le site internet. Sauf cas particulier ou indisponibilité d’un ou plusieurs produits, les produits commandés seront livrés en une seule fois.</p>

        <p>Par voie de conséquence, tout retard raisonnable dans la livraison des produits ne pourra pas donner lieu au profit de l'acheteur à : <br/>
        \t\tl'allocation de dommages et intérêts ;<br/>
        \t\tl'annulation de la commande.</p>

        <p>L’acheteur supportera les conséquences (retard de livraison, impossibilité de livraison, surcoûts de transports…) résultant le cas échéant du caractère erroné et/ou incomplet des indications fournies par ses soins en vue de la livraison.</p>

        <p>Pour le coût de la livraison, le tarifs en vigueur du transporteur sera appliqué. L’entreprise Bordza s’engage à choisir un mode de livraison avec un suivi du colis pour plus de sécurité. Le tarif sera appliqué selon ce barème :<br/>
        tarif a : pour l’achat d’une planche avec ou sans le pack « complet »<br/>
        tarif b : pour l’achat d’accessoires ou textile (hors trucks et roues)<br/>
        tarif c : pour l’achat de lots de trucks ou de roues.<br/>
        Les frais de livraison sont indiqués lors de la commande.<br/>
        La société Bordza se réserve le droit de modifier ces prix lors de commandes d’articles en grande quantité. Un devis sera alors envoyé et la commande ne sera validée qu’après l’acceptation et le paiement par le client du nouveau prix de livraison. <br/>
        La livraison des articles commandés n’interviendra qu’après l’encaissement de leur prix étant précisé qu’en toute hypothèse, Bordza conserve la propriété des articles commandés et livrés jusqu’au complet encaissement de leur prix (principal et intérêts).</p>


        <p>Lors de l’expédition de la commande, le numéro de commande ainsi que le numéro de suivi et les informations nécessaires au bon suivi du colis seront envoyés à l’acheteur par e-mail.</p>

        <p>En cas de marchandises manquantes ou détériorées lors du transport, l'acheteur devra formuler toutes les réserves nécessaires sur le bon de commande à réception desdites marchandises. Ces réserves devront être, en outre, confirmées par écrit dans les cinq jours suivant la livraison, par courrier recommandé AR adressé à Bordza, 14A chemin de lescaussade, 33450 Saint Loubès.</p>

        <p>En cas de dépassement du délai de 30 jours, non justifié par un cas de force majeure telle que définie par la jurisprudence française ou non dû à une grève quelle qu’en soit la cause, l’Acheteur pourra demander la résolution de la vente par lettre recommandée avec demande d’avis de réception adressée à Bordza – 14A, chemin de Lescaussade 33450 Saint Loubès. L’acheteur obtiendra alors restitution du prix payé au titre de la commande dans un délai maximal de quatorze (14) jours calendaires suivant la résolution du contrat.</p>

        <p>En cas de demande particulière de l’acheteur concernant les conditions d’emballage ou de transport des produits commandés, Bordza enverra un devis prenant en compte les coûts supplémentaires. Le devis doit être accepté par écrit par l’acheteur puis renvoyé par mail ou courrier postal, afin de procéder à la facturation spécifique et de poursuivre le processus de commande comme précédemment indiqué.</p>

        <p><U>ARTICLE 13. TRANSFERT DE PROPRIETE – TRANSFERT DES RISQUES</U><br/>
        La réception des articles commandés, constatée par la signature de l’acheteur ou de tout autre destinataire habilité sur le bon de livraison, opère transfert des risques à l’acheteur.</p>

        <p>Dans la mesure du possible, l’acheteur vérifiera à la livraison les éventuelles avaries ou pertes de transport et indiquera, le cas échéant, au transporteur, les réserves d’usage au moment de la livraison.</p> 

        <p>Les réclamations sur les vices apparents des articles ne seront acceptés que si elles sont faites par écrit par courrier recommandé adressé à Bordza 14A, chemin de Lescaussade 33450 Saint Loubès ou par email à l’adresse suivante : contact@bordza.fr, avec tous les justificatifs y afférents, dans les quatorze (14) jours qui suivent la date de réception des articles. Passé ce délai et à défaut d’avoir respecté ces formalités, les articles seront réputés exempts de tout vice apparent et aucune réclamation ne pourra, à ce titre, être valablement acceptée par Bordza.<br/>
        Bordza remplacera dans les plus brefs délais et à ses frais, les articles livrés affectés de vices apparents dont elle aura accepté le retour à ses frais et dont elle aura constaté, une fois ceux-ci retournés, la réalité des vices apparents, l’acheteur pouvant opter pour le remboursement desdits articles.</p>


        <p><U>ARTICLE 14. DROIT DE RETRACTATION</U><br/>
        L’acheteur dispose d’un délai de quatorze (14) jours calendaires francs, à compter de la réception des articles commandés, pour exercer son droit de rétractation, sans avoir à justifier de motifs ni à payer de pénalités, en remplissant le formulaire type de rétractation, <a href=\"fichiers/formulaire_de_retractation.pdf\">(formulaire disponible ici)</a> ou en remplissant une déclaration dénuée d’ambiguïté exprimant sa volonté de se rétracter. Le formulaire de rétractation ou cette déclaration doivent être renvoyés à l’adresse du service client : <br/>contact@bordza.fr ou par courrier à l’adresse suivante Bordza, 14A, chemin de Lescaussade 33450 St Loubes.<br/>
        L’acheteur dispose alors de (14) jours francs pour retourner lesdits articles à compter de la communication de sa décision de se rétracter à Bordza pour en obtenir le remboursement. L’acheteur pourra retourner l’article acheté dans le délai précité, sous réserve du respect des conditions suivantes :</p>

        <p>a) Les articles doivent être retournés intacts, dans leur état d’origine, avec leur emballage d’origine et complets avec les étiquettes encore fixées et intactes et ce, afin qu’ils puissent être recommercialisés à l’état neuf. La responsabilité de l’acheteur pourra être engagée si les articles ont été endommagés, détériorés ou salis par l’acheteur.</p>

        <p>b) Les articles doivent être retournés, accompagnés du formulaire de retour dûment rempli à l’adresse suivante : Bordza, 14A, chemin de Lescaussade 33450 Saint Loubès. Bordza recommande aux Acheteurs de souscrire à une option de suivi de colis.</p>

        <p>c) Les sommes versées par l’acheteur, y compris les frais de livraison, lui seront intégralement remboursées dans un délai de quatorze jours suivant la date à laquelle l’acheteur a fourni la preuve de l’expédition des produits, sans frais supplémentaires à la charge de l’acheteur (virement bancaire, chèque, bon cadeaux, …). Les frais de retour seront à la charge exclusive de l’acheteur.</p>

        <p>d) Dans le cas où l’acheteur aurait réglé sa commande par avoirs/ bon cadeaux, le remboursement pourra être effectué également sous forme d’avoirs/ bons cadeaux.
        e) En cas de retour d’une partie simplement des articles, les frais de livraison ne seront pas remboursés par Bordza dans la mesure où, l’acheteur a bénéficié du service de livraison pour les articles conservés.</p>

        <p>f) En cas de retour d’articles tardif, dépassant le délai de quatorze (14) jours à compter de sa décision de se rétracter (le cachet de la poste faisant foi), l’acheteur ne sera pas remboursé et sera informé que les articles restent à sa disposition à l’atelier de Bordza pendant un délai d’un mois. A la demande de l’acheteur, ces articles pourront également lui être réexpédiés à ses frais.<br/>
        Il est précisé que :<br/>
        - Quel que soit le destinataire final de l’article acquis par l’acheteur, le droit de rétraction ne pourra être exercé que par l’acheteur ;<br/>
        - Dans le cas de commande multiple, autrement dit d’une commande de plusieurs produits, le délai de rétractation courra à partir de la réception du dernier produit ;<br/>
        Les frais de retour sont à la charge de l’acheteur.</p>

        <p>Pour toute commande personnalisée, l’échange ou le remboursement ne seront pas acceptés dans le cadre du droit de rétractation, dans la mesure où le produit personnalisé ne pourra pas être remis à la vente. Sauf cas de vice avéré et accepté par Bordza, auquel cas le produit sera retourné à l’adresse 14A chemin de Lescaussade, 33450 Saint Loubès. Les frais de retour seront alors pris en charge par Bordza. Une proposition d’échange ou de remboursement sera alors faite à l’acheteur.</p>


        <p><U>ARTICLE 15 : ASSURANCE ANNULATION</U> <br/>
        Dans tous cas de commande, l’accord oral (ou même tacite) ou la signature engagent l’acheteur.
        Pour une commande de prestation de service pour les cours de skate, la résiliation du contrat engendrera le paiement d’une dédite de 100% du prix de vente si la résiliation a lieu le jour même de la prestation prévue, 50% si la résiliation se fait dans les 24H avant la prestation, 30% si la résiliation se fait 48H avant la prestation, dans la mesure ou le créneau aura été réservé et qu’il ne sera plus disponible pour d’autres clients. <br/>
        Pour ce qui est de la commande personnalisée (planches, textiles…), en cas de résiliation il y aura une dédite de 30% du montant de la commande à régler dans la mesure où du matériel aura été commandé pour réaliser cette commande.<br/>
        L’entreprise Bordza s’engage à ne pas prétendre à des frais liés à une résiliation en cas de force majeure.</p>

        <p><U>ARTICLE 16 : CONDITIONS D’ANNULATION LIEES A LA DEFAILLANCE D’UN PRESTATAIRE EXTERNE</U><br/>
        En cas de défaillance d'un prestataire externe (indisponibilité des lieux réservés, problème de location de matériel, …) ne pouvant réaliser sa prestation, la responsabilité de Bordza ne saurait être recherchée par le client.<br/>
        Cependant, Bordza s’engage à fournir les meilleurs efforts pour proposer d’autres prestataires disponibles dont les critères se rapprochent au mieux de la prestation initiale.<br/>
        Le client peut librement accepter ou refuser l'/les alternative(s) proposée(s).
        Dans le cas où le client la/les refuse, Bordza s’engage à rembourser tout versement d’acompte ou de sommes versées pour cette dite prestation réservée et non réalisée. En tout état de cause, la responsabilité de Bordza est limitée au montant des sommes reçues au titre des prestations mises en cause, à l'exclusion de tout dommages indirects, manque à gagner, perte de chance ou bénéfices escomptés par le client, et/ou de toute autre conséquence financière résultant d'actions éventuellement intentées par des tiers à l'encontre du client. Cette stipulation ne s'appliquera pas à une responsabilité que la loi interdit d'exclure ou de limiter.</p>


        <p><U>ARTICLE 17 : FORCE MAJEURE</U><br/>
        La responsabilité de la société Bordza ne pourra pas être mise en oeuvre si la non-exécution ou le retard dans l'exécution de l'une de ses obligations décrites dans les présentes conditions générales de vente découle d'un cas de force majeure. À ce titre, la force majeure s'entend de tout événement extérieur, imprévisible et irrésistible au sens de l'article 1148 du Code civil.</p>

        <p><U>ARTICLE 18 : TRIBUNAL COMPÉTENT</U><br/>
        Tout litige relatif à l'interprétation et à l'exécution des présentes conditions générales de vente est soumis au droit français.</p>

        <p>À défaut de résolution amiable, le litige sera porté devant le Tribunal de commerce de Bordeaux.</p>

        <p>Fait à St Loubès, le 8 Juin 2017</p>


        <p>Éric MOTARD,</p>
        </div>
    </div>
</div>

{% endblock %}
{% block footer %}{% include 'footer.html.twig' %}{% endblock %}", "cgv.html.twig", "/Users/bordza/Sites/bordza/app/Resources/views/cgv.html.twig");
    }
}
