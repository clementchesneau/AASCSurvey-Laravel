<?php 

return [
    /*
    |--------------------------------------------------------------------------
    | Custom english messages
    |--------------------------------------------------------------------------
    */

    // Home page messages
    'home' => [
        'title' => 'Hello',
        'recent'=> 'Recent Surveys ',
    ],

    // Header messages
    'header' => [
        'dashboard' => 'Dashboard',
        'create' => 'Create a Survey',
        'surveys' => 'My Surveys',
        'profile' => 'My Account',
        'contacts' => 'Contacts',
        'logout' => 'Log Out',
        'login' => 'Login',
        'register' => 'Register',
    ],

    'footer' => [
        'profil'=>'Profil',
        'premium'=>'Premium',
        'contactus'=>'Contact us',
        'whoarewe'=>'About us',
        'legal'=>'Terms & Conditions',
    ],

    'login'=>[
        'creation'=>'Account creation',
        'connect'=>'To log in',
        'compte'=>'You do not have an account ?',
        'mdp'=>'Forgot your password ?',
        'inscrire'=>'Register ?',
        'infos'=>'Account information:',
        'last'=>'Last connection :',
        'modif'=>'Last modification :',
        'about'=>'About me :'
    ],

    // Surveys messages
    'surveys' => [
        'index' => [
            'pagetitle' => 'My Surveys',
            'edit' => 'Edit',
            'delete' => 'Delete',
            'create' => 'Create a Survey',
            'nosurvey' => 'No Survey at the moment!',
            'forms'=>'My Surveys !',
            'nbsond'=>'Number of surveys :',
            'nbpart'=>'Nombre de participants :',
            'datecreation'=>'Creation date',
            'datemodifications'=>'Last modifications',
            'sure'=>'Are you sure?',
            'sondsuppr'=>'Are you sure you want to delete this survey?<br> All data will be lost',
            'fermer'=>'Close',
            'mince'=>'Damn!',
            'aucun'=>'You currently have no surveys available',
            'stats'=>'View statistics',
            'partager'=>'Share',
            'download'=>'Download data',
            'lienpartage'=>'Here is your share link',
            'copier'=>'copy',
            'lien'=>'link',
        ],
        'show' => [
            'edit' => 'Edit',
            'delete' => 'Delete',
            'anonym_allowed' => 'Anonymous users are allowed for this survey.',
            'anonym_disallowed' => 'Anonymous users are not allowed for this survey.',
            'sondage'=>'Survey',
            'analyse'=>'Analysis',
            'aucun'=>'This question does not contain any elements!',
            'pasanalyse'=>'Question type does not allow analysis'
        ],
        'create' => [
            'pagetitle' => 'Creation of a survey',
            'formtitleholder' => 'Survey title',
            'anonymous_allowed' => 'Allow anonymous users',
            'create' => 'Create the Survey',
            'create2' => 'Create a Survey',
            'account' => 'Create an account',
            'zero'=>'Create from 0',
            'existant'=>'Copy an existing survey',
        ],
        'edit' => [
            'pagetitle' => 'Editing the survey',
            'formtitleholder' => 'Form title',
            'anonymous_allowed' => 'Allow anonymous users',
            'edit' => 'Edit the survey',
            'create_question' => 'Create new question',
            'save'=>'Save',
            'question' => 'Simple question',
            'paragraphe' => 'Paragraph',
            'choix' => 'Multiple choice',
            'cases' => 'Check boxes',
            'nombre' => 'Number',
            'echelle' => 'Linear scale',
            'date' => 'Date',
            'fichier' => 'File',
            'requis'=>'Required',
            'delimiter'=>'Demarcate',
        ],
    ],

    //Welcome Page
    'welcome' => [
        'advantage' => 'Why using AASC ?',
        'card1' => 'A team on the lookout for ways to make your life easier. Walking by your side to satisfy your needs in the survey and statistics industry. ',
        'card2' => 'Cutting-edge technical skills, coupled with an outstanding ability to listen. All at your disposal.',
        'card3' => 'A system of participation of our clients to take into account your opinions, recommendations and needs.',
        'protection' => 'ASSC and the protection of the data', 
        'security' => 'Data security, privacy policy',
        'learnmore' => 'Learn more',
        'joinus' => 'Join those users who trusted us to work with quality tools.',
        'speackofus' => 'They speack of us',
        'comment1'=>'A pleasure to use is exactly what I was looking for.',
        'comment2'=>'As a private individual, I am touched by their availability and self-sacrifice.',
        'comment3'=>'I use it to do internal surveys, I have never had so many responses from my employees.',
        'comment4'=>'A pleasure to deal with them !',
        'comment5'=>'They are young and they want it, they will go far because they are attentive to our needs.',
        'comment6'=>'It\'s so simple and complete',
        'secure'=>'AASC is committed with you to secure your data !',
        'presentation'=>'AASC is a great multi-function tool, allowing you to create polls according to your convenience and a high-performance tool for analyzing the results you have retrieved.',
    ],

    //Dashboard Page
    'dashboard' => [
        'firstsurvey' => 'Get started, create your very first survey!',
        'informations'=>'Information',
        'nom'=>'Name :',
        'prenom'=>'First name :',
        'mail'=>'E-mail :',
        'premium'=>'Premium :',
        'edit'=>'Modify the profile',
        'state'=>'Checkout',
        'astuces'=>'Tips',
        'astuce1'=>'You can change the language of the site at any time in the Navigation bar !',
        'astuce2'=>'Download your data, analyze the results and share your surveys by clicking on the icons under the survey !',
    ],

    'about' => [
        'start' => '<br>To begin with, AASC is a youth initiative. All four of them grouped under the banner of an unquenchable thirst for knowledge, learning, and perseverance, we will present you in the form of summary courses to understand, how our synergy works within our team and how we achieve very convincing and lasting results.<br>',
        'arnaud' => 'First of all, thanks to his powerful, methodical and rigorous character, Arnaud WACHT. A quiet force of work and perseverance, Arnaud keeps himself at the forefront of information concerning development methodologies and new technologies. Endowed with an incredible abnegation, he is our most solid base that the team could have wished for.',
        'alban' => 'To continue, let\'s now talk about Alban OBERT known, creative, relentless in his quest for perfection and success, and above all attentive to the well-being of his comrades. Having participated in many projects in many different settings, he is able to bring the team together around a constructive and instructive dialogue that allows us to exploit the best of each and erase the worst. Between optimizing human resources and optimizing creative processes, Alban is a link between the development teams and the creative people.',
        'sam' => 'Let\'s now look at the case of Samuel Weissgerber, who is both meticulous and always in need of more information. With an ability to understand the problems and restrictions imposed on him, Sam is able to overcome technical difficulties thanks to his ability to find the answers to his questions. This makes him an essential member for any technical advancement.',
        'clem' => 'Concerning our last member, let me introduce you to Clément CHESNEAU says, a veteran of Web development, he is not at his first try. Of a remarkable technical level, and possessing a remarkable ability to synthesize and produce content, he is our technical engine, necessary for us to be able to project ourselves into the future.',
        'end' => '<br>Arnaud, Alban, Samuel and Clément. Four individuals driven by a thirst for success and perpetual progress. With complete synchronization and synergy, our team with compatible and complementary skills coupled with an irrepressible desire to satisfy you. We created AASC, to allow you to ask thousands of people for their opinions on the subjects that are important to them!<br>'
    ],

    'legal'=>[
        'introduction'=>'Introduction',
        'texte1'=>'Thank you for using the products, services, websites and applications that are represented as belonging to the "AASC" brand ("AASC Services").<br>
                   By clicking or typing on a button indicating your acceptance of these Terms, signing a document referring to them or using the Services, you confirm your acceptance of these Terms.<br>
                   If you plan to use the Services on behalf of an organization, you agree to these Terms on behalf of that organization and represent that you have the authority to do so. In this case, "you" and "your" will refer to the organization in question.',
        'droit'=>'Fees and payments',
        'texte2'=>'You agree to pay AASC the fees for each Service you purchase or use (including any overages) in accordance with the fees and payment terms presented to you for such Service. <br>
                   If applicable, you will be billed according to the billing method you specified on your account management page. <br>
                   If you have elected to pay by credit card, you represent and warrant that the information you provide in connection with such credit card is accurate and that you will promptly notify AASC of any changes to such credit card.',
        'vie'=>'Privacy and Confidentiality',
        'texte3'=>'While using the Services, you may send content to AASC (including your personal information and that of third parties), or third parties may send content to you through the Services (such items will be referred to as your "Content"). We know that by sending us your Content, you trust us to treat it properly.<br>
                   The AASC Privacy Policy, as well as other notices and privacy statements specific to certain Services (collectively, the "AASC Privacy Policies"), explain in detail how we treat your Content and the extent to which we adhere to these privacy policies. You agree that AASC may use and share your Content in accordance with the AASC Privacy Policies and applicable data protection laws. <br>
                   If you are a customer acting as a "controller" as defined in the General Data Protection Regulation 2016/679 ("GDPR"), we have added additional provisions below in Section EU2 regarding your obligations under this Regulation. You further acknowledge that you are responsible for notifying AASC\'s privacy policies to third parties who submit content through our Services.<br>
                   AASC will treat your Content as confidential, and will use and disclose your information only in accordance with these Terms and Conditions (including AASC\'s privacy policies). <br>
                   AASC may disclose your Content if required to do so by law or legal process, but only after AASC has, if permitted by law, used all commercially reasonable means to notify you and allow you to challenge this obligation to disclose.',
        'security'=>'Security',
        'texte4'=>'AASC will store and process your Content in accordance with industry safety standards. <br> 
                  AASC has appropriate technical and administrative systems in place to help ensure the security, integrity and confidentiality of your Content and to mitigate the risk of unauthorized access to or use of your Content.<br>
                  In the event that AASC becomes aware of any unauthorized or unlawful access to, or acquisition, alteration, use, disclosure, or destruction of personal data associated with your account ("Security Incident"), AASC will take reasonable steps to notify you as soon as possible, and in any event within 72 hours of becoming aware of the incident.<br> 
                  AASC will reasonably cooperate with you in connection with any investigation of a Security Incident by preparing necessary notices and providing any other information reasonably requested by you in connection with a Security Incident, if such information is not already available to you in your account or online through updates provided by AASC.',
        'account'=>'Account management',
        'texte5'=>'When AASC opens an account for you to use the Services, it is your responsibility to safeguard your password and all other identifiers used to access that account.<br> 
                   You, and not AASC, are solely responsible for activities that occur under your account (other than activities for which AASC is directly responsible and which are not performed in accordance with your instructions), whether or not authorized. If you become aware of any unauthorized access to your account, you must notify ACAA immediately. <br>
                   Accounts must not be shared and can only be used by one individual.<br>
                   It is your responsibility to maintain, protect and back up your Content. To the extent permitted by applicable law, AASC shall not be liable for any storage failure, loss or damage to your Content.<br>
                   AASC reserves the right to terminate your account and remove content if there is no activity on the account for more than 12 months.',
        'update'=>'Update',
        'texte6'=>'AASC may make changes to these Terms at any time for a variety of reasons, including to reflect changes in applicable law or updates to the Services, as well as to reflect new Services or features.<br> 
                   The most recent version will always be available on the ACAA website. In the event of a material change, determined at AASC\'s sole discretion, AASC will notify you by e-mail. A notice of change may also be posted on the AASC blog or displayed when you log in to your account. Changes will take effect on the day they are posted.<br> 
                   In order for certain changes to take effect, applicable law may require AASC to obtain your consent or to give you reasonable notice. If you do not wish to accept the changes to the Terms for a Service, then you must stop using that Service, because by continuing to use the Services you are indicating your agreement to be bound by the updated Terms.<br>
                   <br>AASC is constantly modifying and improving its Services. <br>
                   AASC may at any time and without notice add, modify or remove any feature of a Service. AASC may also restrict, suspend or discontinue a Service at its discretion. If we interrupt a Service, we will notify you sufficiently in advance to allow you to export a copy of your Content from that Service. <br>
                   AASC may remove content from the Services at any time in its sole discretion, but will endeavour to notify you in advance if it is of material consequence to you and circumstances permit.',
    ],
];