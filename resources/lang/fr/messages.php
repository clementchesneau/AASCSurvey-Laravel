<?php

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

return [
    /*
    |--------------------------------------------------------------------------
    | Custom french messages
    |--------------------------------------------------------------------------
    */

    // Home page messages
    'home' => [
        'title' => 'Bonjour',
        'recent'=> 'Formulaire récent ',
    ],

    // Header messages
    'header' => [
        'dashboard' => 'Tableau de bord',
        'create' => 'Créer un Sondage',
        'surveys' => 'Mes Sondages',
        'profile' => 'Mon Compte',
        'contacts' => 'Contacts',
        'logout' => 'Se déconnecter',
        'login' => 'Connexion',
        'register' => 'Inscription',
    ],

    'footer' => [
        'profil'=>'Profil',
        'premium'=>'Premium',
        'contactus'=>'Contactez nous',
        'whoarewe'=>'Qui sommes nous ?',
        'legal'=>'Mentions légales',
    ],

    'login'=>[
        'creation'=>'Création du compte',
        'connect'=>'Se connecter',
        'compte'=>'Vous n\'avez pas de compte ?',
        'mdp'=>'Mot de Passe oublié ?',
        'inscrire'=>'S\'inscrire',
        'infos'=>'Informations liées au compte :',
        'last'=>'Dernière connexion :',
        'modif'=>'Dernière modification :',
        'about'=>'A propos de moi :'
    ],

    // Surveys messages
    'surveys' => [
        'index' => [
            'pagetitle' => 'Mes Sondages',
            'edit' => 'Éditer',
            'delete' => 'Supprimer',
            'create' => 'Créer un Sondage',
            'nosurvey' => 'Aucun sondage pour le moment!',
            'forms'=>'Mes Sondages !',
            'nbsond'=>'Nombre de sondages :',
            'nbpart'=>'Nombre de participants :',
            'datecreation'=>'Date de Création',
            'datemodifications'=>'Dernière Modification',
            'sure'=>'Etes-vous sûr(e)?',
            'sondsuppr'=>'Voulez-vous vraiment supprimer ce sondage ?</br> Toutes ses données seront perdues',
            'fermer'=>'Fermer',
            'mince'=>'Mince !',
            'aucun'=>'Vous n\'avez actuellement aucun sondage de disponible',
            'stats'=>'Voir les statistiques',
            'partager'=>'Partager',
            'download'=>'Télécharger les données',
            'lienpartage'=>'Voici votre lien de partage',
            'copier'=>'copier',
            'lien'=>'lien',
        ],
        'show' => [
            'edit' => 'Éditer',
            'delete' => 'Supprimer',
            'anonym_allowed' => 'Les anonymes sont autorisés pour ce sondage.',
            'anonym_disallowed' => 'Les anonymes ne sont pas autorisés pour ce sondage.',
            'sondage'=>'Sondage',
            'analyse'=>'Analyse',
            'aucun'=>'Cette question ne contient aucun element !',
            'pasanalyse'=>'Le type de question ne permet pas l\'analyse'
            
        ],
        'create' => [
            'pagetitle' => 'Création d\'un sondage',
            'formtitleholder' => 'Titre du sondage',
            'anonymous_allowed' => 'Autoriser l\'anonymat',
            'create' => 'Créer le sondage',
            'create2' => 'Créer un sondage',
            'account' => 'Créer un compte',
            'zero'=>'Créer à partir de 0',
            'existant'=>'Copier un sondage existant',
        ],
        'edit' => [
            'pagetitle' => 'Édition d\'un sondage',
            'formtitleholder' => 'Titre du sondage',
            'anonymous_allowed' => 'Autoriser l\'anonymat',
            'edit' => 'Modifier le sondage',
            'create_question' => 'Crée une nouvelle question',
            'save' => 'Sauvegarder',
            'question' => 'Question simple',
            'paragraphe' => 'Paragraphe',
            'choix' => 'Choix multiple',
            'cases' => 'Cases à cocher',
            'nombre' => 'Nombre',
            'echelle' => 'Echelle linéaire',
            'date' => 'Date',
            'fichier' => 'Fichier',
            'requis'=>'Requis',
            'delimiter'=>'Délimiter',
        ],
    ],

    //Welcome Page
    'welcome' => [
        'advantage' => 'Pouquoi utiliser AASC ?',
        'card1' => 'Une équipe à l\'affût pour vous rendre la vie plus simple. Marchant à vos côtés pour satisfaire vos besoins dans le milieu de l\'enquête et de la statistique.',
        'card2' => 'Des compétences techniques à la pointe, couplé a une capacité d\'écoute hors du commun. Le tout à votre disposition.',
        'card3' => 'Un système de participation de nos clients pour prendre en compte vos avis et recommandations et besoins.',
        'protection' => 'ASSC et la protection des données', 
        'security' => 'Sécurité des données, politique de confidentialité',
        'learnmore' => 'En savoir plus',
        'joinus' => 'Rejoignez ces utilisateurs qui nous ont fait confiance pour travailler avec des outils de qualité.',
        'speackofus' => 'Ils parlent de nous',
        'comment1'=>'Un plaisir à utiliser c\'est exactement ce que je cherchais.',
        'comment2'=>'En temps que particulier, je suis touché par leurs disponibilité et leur abnegation',
        'comment3'=>'Je l\'utilise pour faire des sondages interne, j\'ai jamais eu autant de réponses de la part de mes collaborateurs',
        'comment4'=>'Un plaisir de traiter avec eux !',
        'comment5'=>'Ils sont jeunes et ils en veulent, ils iront loin vu comme ils sont attentifs à nos besoins.',
        'comment6'=>'C\'est si simple et si complet',
        'secure'=>'AASC s\'engage avec vous à sécuriser vos données !',
        'presentation'=>'AASC est un formidable outil multifonctions, permettant à la fois de créer des sondages selon votre convenance et un outil ultra performant d\'analyse des résultats que vous avez pu récupérer.',
    ],

    //Dashboard Page
    'dashboard' => [
        'firstsurvey' => 'Lancez-vous, créez votre tout premier sondage !',
        'informations'=>'Informations',
        'nom'=>'Nom :',
        'prenom'=>'Prénom :',
        'mail'=>'E-mail :',
        'premium'=>'Premium :',
        'edit'=>'Modifier le profil',
        'state'=>'Etat des lieux',
        'astuces'=>'Astuces',
        'astuce1'=>'Vous pouvez changer la langue du site à tout moment dans la barre de navigation !',
        'astuce2'=>'Téléchargez vos données, analysez les résultats et partagez vos sondages en cliquant sur les icones sous le sondage !',
    ],
    
    'about' => [
        'start' => '<br>Pour commencer AASC est une initiative de jeunes. Tous quatre regroupés sous le drapeau d\'une soif inextinguible de savoir, d\'apprentissage, et persévérance, nous allons vous présenter sous la forme de cours résumés pour comprendre, comment notre synergie fonctionne au sein de notre équipe et comment nous arrivons à des résultats très probant et pérennes.<br>',
        'arnaud' => 'Tout d\'abord, fort de son caractère puissant, méthodique et rigoureux, Arnaud WACHT. Une force tranquille de travail et de persévérance, Arnaud se tient à la pointe de l\'information concernant les méthodologies de développement et les nouvelles technologies. Doté d\'une abnégation incroyable, il est notre base la plus solide que l\'équipe aurait pu souhaiter.',
        'alban' => 'Pour continuer, parlons à présent de Alban OBERT, créatif, acharné dans sa quête de perfection et de réussite, et surtout attentif au bien-être de ses camarades. Ayant participé à de nombreux projets dans de nombreux cadres différents, il est capable de rassembler l\'équipe autour de dialogue construit et instructif permettant d\'exploiter le meilleur de chacun et d\'en gommer le pire. Entre optimisation des ressources humaines et optimisation des procès de création, Alban est un liant entre les équipes de développements et les créatifs.',
        'sam' => 'Abordons à présent le cas de Samuel WEISSGERBER, à fois méticuleux, soumis à un besoin d\'en savoir toujours plus. Doté d\'une capacité de compréhension des problèmes et restrictions qui lui sont imposés, Sam est à même de surmonter des difficultés techniques grâce à une faculté de trouver les réponses à ses questions. Ce qui en fait un membre essentiel pour tous avancements techniques.',
        'clem' => 'Concernant notre dernier membre, laissez-moi vous présenter Clément CHESNEAU, vétéran du développement Web, il n\'en est pas à son premier coup d\'essai. D\'un niveau technique remarquable, et possédant une capacité de synthèse et de production de contenu remarquable, il est notre moteur technique, nécessaire pour que l\'on puisse se projeter dans le futur.',
        'end' => '<br>Arnaud, Alban, Sam et Clément. Quatre individus animés d\'une soif de réussite et de progrès perpétuel. Avec une synchronisation, une synergie complète, notre équipe aux compétences compatibles et complémentaires couplés à une envie irrépressible de vous satisfaire. Nous avons créé AASC, pour vous permettre de demander à des milliers de gens leurs avis sur les sujets qui sont importants pour eux !<br>'
    ],

    'legal' => [
        'introduction'=>'Introduction',
        'texte1'=>'Merci d’utiliser les produits, services, sites Web et applications présentés comme appartenant à la marque « AASC » (« Services AASC »).<br>
                   Dès lors que vous cliquez ou tapez sur un bouton indiquant votre acceptation des présentes Conditions, signez un document y faisant référence ou utilisez les Services, vous confirmez votre acceptation des présentes Conditions.<br>
                   Si vous prévoyez d’utiliser les Services pour le compte d’une organisation, vous acceptez les présentes Conditions au nom de ladite organisation et déclarez en avoir le pouvoir. Dans ce cas, « vous » et « votre » feront référence à l’organisation en question.',
        'droit'=>'Droits et paiements',
        'texte2'=>'Vous acceptez de payer à AASC les droits correspondant à chaque Service que vous achetez ou utilisez (y compris tous dépassements), conformément à la tarification et aux conditions de paiement qui vous ont été présentées pour ledit Service.<br> 
                   Le cas échéant, vous serez facturé selon le mode de facturation que vous avez indiqué sur la page de gestion de votre compte.<br> 
                   Si vous avez choisi de régler les droits par carte bancaire, vous déclarez et garantissez que les informations que vous fournissez en relation avec cette carte bancaire sont exactes et que vous aviserez AASC dans les plus brefs délais en cas de changement la concernant. ',
        'vie'=>'Vie privée et confidentialité',
        'texte3'=>'Pendant l’utilisation des Services, vous pouvez envoyer du contenu à AASC (y compris vos données à caractère personnel et celles de tiers), ou des tiers peuvent vous envoyer du contenu par le biais des Services (les éléments précités seront appelés votre « Contenu »). Nous savons qu’en nous envoyant votre Contenu, vous nous faîtes confiance pour le traiter correctement.<br> 
                   La Politique de confidentialité de AASC, ainsi que d’autres avis et déclarations de confidentialité propres à certains Services (appelés collectivement les « Politiques de confidentialité de AASC »), expliquent en détail comment nous traitons votre Contenu et dans quelle mesure nous adhérons à ces politiques de confidentialité. De votre côté, vous acceptez que AASC puisse utiliser et partager votre Contenu conformément aux politiques de confidentialité de AASC et aux lois en vigueur sur la protection des données.<br> 
                   Si vous êtes un client intervenant en qualité que « responsable du traitement » selon la définition du Règlement général sur la protection des données 2016/679 (« RGPD »), nous avons ajouté des dispositions supplémentaires ci-après dans la Section EU2 concernant vos obligations en vertu de ce Règlement. Vous reconnaissez par ailleurs qu’il vous incombe de notifier les politiques de confidentialité de AASC aux tiers qui envoient du contenu par le biais de nos Services.<br>
                   <br>
                   AASC traitera votre Contenu de manière confidentielle, et utilisera et divulguera vos informations uniquement conformément aux présentes Conditions (incluant les politiques de protection de la vie privée de AASC). 
                   AASC peut divulguer votre Contenu si la loi ou une procédure légale l’exige, mais uniquement après que AASC a, si la loi l’y autorise, employé tous les moyens commercialement raisonnables pour vous aviser et vous permettre de contester cette obligation de divulgation.',
        'security'=>'Sécurité',
        'texte4'=>'AASC stockera et traitera votre Contenu conformément aux normes du secteur en matière de sécurité.<br> 
                   AASC a mis en place des systèmes techniques et administratifs adaptés en vue de contribuer à garantir la sécurité, l’intégrité et la confidentialité de votre Contenu et d’atténuer le risque d’accès ou d’utilisation non autorisé de votre Contenu.<br>
                   Au cas où il serait porté à la connaissance de AASC un accès non autorisé ou illégal à des données à caractère personnel associées à votre compte, ou leur acquisition, altération, utilisation, divulgation ou destruction, (« Incident de sécurité »), AASC prendra les mesures raisonnables pour vous informer dans les meilleurs délais, en tout cas dans les 72 heures après en avoir eu connaissance. 
                   AASC coopérera raisonnablement avec vous en ce qui concerne toute investigation relative à un Incident de sécurité en préparant les avis nécessaires et en fournissant toutes autres informations raisonnablement demandées par vous en rapport avec un Incident de sécurité, si ces informations ne sont pas déjà à votre disposition dans votre compte ou en ligne par le biais de mises à jour fournies par AASC.',
        'account'=>'Gestion du compte',
        'texte5'=>'Lorsque AASC vous ouvre un compte pour l’utilisation des Services, il vous incombe de protéger votre mot de passe et tous les autres identifiants servant à accéder au compte en question.<br> 
                   Vous seul, et non AASC, êtes responsable des activités qui ont lieu sur votre compte (autres que les activités dont AASC est directement responsable et qui ne sont pas réalisées conformément à vos instructions), qu’elles soient ou non autorisées. Si vous avez connaissance d’un accès non autorisé à votre compte, vous devez en informer AASC immédiatement.<br> 
                   Les comptes ne doivent pas être partagés et ne peuvent être utilisés que par une seule personne physique.<br>
                   Il vous incombe de tenir à jour votre Contenu, de le protéger et d’en effectuer des sauvegardes. Dans les limites autorisées par la loi applicable, AASC ne pourra être tenu responsable d’une défaillance de stockage, de la perte ou de la détérioration de votre Contenu.<br>
                   AASC se réserve le droit de résilier votre compte et d’en supprimer le contenu en cas d’absence d’activité sur le compte pendant plus de 12 mois.<br> ',
        'update'=>'Mise à jour',
        'texte6'=>'AASC peut apporter des modifications aux présentes Conditions à tout moment pour de nombreuses raisons, notamment afin de tenir compte de modifications de la loi applicable ou de mises à jour des Services, ainsi que pour tenir compte de nouveaux Services ou fonctionnalités.<br> 
                   La version la plus récente sera toujours disponible sur le site Web de AASC. En cas de modification essentielle, déterminée à la seule discrétion de AASC, AASC vous en informera par e-mail. Un avis de modification peut également être publié sur le blog de AASC ou affiché lors de votre connexion à votre compte. Les modifications prendront effet le jour de leur publication.<br> 
                   Pour que certaines modifications puissent prendre effet, la loi applicable peut exiger de AASC d’obtenir votre consentement ou de vous en informer suffisamment à l’avance. Si vous ne souhaitez pas accepter les modifications apportées aux Conditions pour un Service, vous devez alors cesser d’utiliser le Service en question, car en continuant d’utiliser les Services vous indiquez votre accord d’être lié aux Conditions mises à jour.<br>
                   AASC modifie et améliore en permanence ses Services.<br> 
                   AASC peut à tout moment et sans préavis ajouter, modifier ou supprimer une fonctionnalité d’un Service. AASC peut également restreindre, suspendre ou interrompre un Service à sa discrétion. En cas d’interruption d’un Service, nous vous en informerons suffisamment à l’avance pour vous permettre d’exporter une copie de votre Contenu depuis le Service en question.<br> 
                   AASC peut supprimer du contenu des Services à tout moment et à sa seule discrétion, mais s’efforcera toutefois de vous en informer à l’avance si cela a une incidence importante pour vous et si les circonstances le permettent.<br>',
    ],
];