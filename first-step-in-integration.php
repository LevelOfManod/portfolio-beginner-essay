<?php

$pageId             ="production";
$metaTitle         ="First step in integration";
$metaDescription    ="Here is my first exercise in HTML and CSS integration after only one week of theoretical studies";

include("includes/header.php");
?>


<div class=" mockup bgdark">
            <div class="container">

                    <div class="sujet">
                         <h2><span>Les anges chanteurs</span></h2>
                            <p>Still in the process of professional training, here is an example of an exercise I did.</p>
                            <p>For a practical exercise during my training and after few weeks of HTML/CSS. We had to make two pages of the site and make them responsive. I worked on the "Les anges chanteurs" website.</p>
                            <p>After planning and building the tree structure of my website, I created detailed mock-ups in Figma to visualize the design and user experience.</p>                           
                            <p>With the help of Figma models, I made an interactive prototype of my website to test the navigation, the interactions.</p>
                            <p>Once I had finalized the mock-ups and prototyping, I started coding my website.</p>
                            <p>When I started coding my website, I was able to quickly transform my mock-ups and prototype into a functional version of my website. The creation of the tree structure was essential to ensure an optimal user experience on my website.</p>
                    </div>
                
                    <div class="row device">
                        <div class="mockuplaptop">
                            <img src="img/angelaptop.png" alt="mockup laptop">
                        </div>

                        <div class="mockupphone">
                            <img src="img/phonemockup.png" alt="mockup phone">
                        </div>
                    </div>

            </div>
        </div>



        <div class="container">
           
                
                <div class="code ">
                    <p>Below is the HTML code:</p>
                    <pre class="line-numbers">
                        <code class="language-markup ignore-progress">
                    
                    &lt;!DOCTYPE html>
        &lt;html lang="fr">
        &lt;head>
            &lt;meta charset="UTF-8">
            &lt;meta http-equiv="X-UA-Compatible" content="IE=edge">
            &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
            &lt;meta name="description" content="Les anges chanteurs: Comédie musicale, Spectales, Theâtre au 1 rue Gutenberg 92120 Montrouge ">
            
            &lt;link rel="stylesheet" type="text/css" href="css/style.css">
            &lt;link rel="stylesheet" type="text/css" href="css/responsive.css">
            
            &lt;script src="js/carousel.js" defer>&lt;/script>
        
            &lt;link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'>
        
            
        
        
            &lt;link rel="preconnect" href="https://fonts.googleapis.com">
            &lt;link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            &lt;link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Sriracha&display=swap" rel="stylesheet"> 
            
        
            &lt;link rel="preconnect" href="https://fonts.googleapis.com">
            &lt;link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            &lt;link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:ital,wght@0,700;1,600&display=swap" rel="stylesheet">
        
            &lt;title>Les anges chanteurs&lt;/title>
        &lt;/head>
        &lt;body>
        &lt;header>
            &lt;div class="container">
                &lt;input type="checkbox" id="check">
                
                &lt;div class="logo-container">
                    &lt;!-- &lt;h3 class="logo">Brand&lt;span>Name&lt;/span>&lt;/h3> -->
                    &lt;a href="index.html">&lt;img src="img/logo.svg" alt="logo des anges chanteurs">&lt;/a>
                &lt;/div>
        
                &lt;nav class="nav-btn">
                    &lt;div class="nav-links">
                        &lt;ul>
                            &lt;li class="nav-link" style="--i: .6s">
                                &lt;a href="#">Les anges chanteurs&lt;/a> &lt;!-- niveau 1 -->
                                &lt;div class="dropdown">
                                    &lt;ul>
                                        &lt;li class="dropdown-link">
                                            &lt;a href="#">Nos réalisations&lt;i class="fas fa-caret-down">&lt;/i>&lt;/a> &lt;!-- niveau 2 -->
                                            &lt;div class="dropdown second">
                                                &lt;ul>
                                                    &lt;li class="dropdown-link">
                                                        &lt;a href="#">Créations de la troupes&lt;/a> &lt;!-- niveau 3 -->
                                                    &lt;/li>
                                                    &lt;li class="dropdown-link">
                                                        &lt;a href="#">Créations lors de nos stages&lt;/a> &lt;!-- niveau 3 -->
                                                    &lt;/li>
                                                    
                                                    &lt;li class="arrow">&lt;/li>
                                                &lt;/ul>
                                            &lt;/div>
                                        &lt;/li>
        
                                        &lt;li class="dropdown-link">
                                            &lt;a href="#">Nous soutenir&lt;/a> &lt;!-- niveau 2 -->
                                        &lt;/li>
                                    &lt;/ul>
                                &lt;/div>
                            &lt;/li>
        
        
        
                            &lt;li class="nav-link" style="--i: .85s">
                                &lt;a href="#">Nos ateliers&lt;/a> &lt;!-- niveau 1 -->
                                &lt;div class="dropdown">
                                    &lt;ul>
                                    
                                        &lt;li class="dropdown-link">
                                            &lt;a href="#">Pour tout les âges&lt;i class="fas fa-caret-down">&lt;/i>&lt;/a> &lt;!-- niveau 2 -->
                                            &lt;div class="dropdown second">
                                                &lt;ul>
                                                    &lt;li class="dropdown-link">
                                                        &lt;a href="#">Ateliers de comédie musical - Adulte et Enfants&lt;/a> &lt;!-- niveau 3 -->
                                                    &lt;/li>
                                                    &lt;li class="dropdown-link">
                                                        &lt;a href="#">Cours individuel - Chant & Théâtre&lt;/a> &lt;!-- niveau 3 -->
                                                    &lt;/li>
                                                    
                                                    &lt;li class="arrow">&lt;/li>
                                                &lt;/ul>
                                            &lt;/div>
                                        &lt;/li>
                                        
                                        &lt;li class="dropdown-link">
                                            &lt;a href="#">Adultes&lt;i class="fas fa-caret-down">&lt;/i>&lt;/a> &lt;!-- niveau 2 -->
                                            &lt;div class="dropdown second">
                                                &lt;ul>
                                                    &lt;li class="dropdown-link">
                                                        &lt;a href="atelier-de-comedie-musicale_adultes.html">Comédie musical&lt;/a> &lt;!-- niveau 3 -->
                                                    &lt;/li>
                                                    &lt;li class="dropdown-link">
                                                        &lt;a href="#">Week-end de comédie musicales - Matserclasses&lt;/a> &lt;!-- niveau 3 -->
                                                    &lt;/li>
                                                    &lt;li class="dropdown-link">
                                                        &lt;a href="#">Cours individuel - Chant & Théâtre&lt;/a> &lt;!-- niveau 3 -->
                                                    &lt;/li>
                                                    
                                                    &lt;li class="arrow">&lt;/li>
                                                &lt;/ul>
                                            &lt;/div>
                                        &lt;/li>
        
                                        &lt;li class="dropdown-link">
                                            &lt;a href="#">Enfants&lt;i class="fas fa-caret-down">&lt;/i>&lt;/a> &lt;!-- niveau 2 -->
                                            &lt;div class="dropdown second">
                                                &lt;ul>
                                                    &lt;li class="dropdown-link">
                                                        &lt;a href="#">Cours individuel - Chant & Théâtre&lt;/a> &lt;!-- niveau 3 -->
                                                    &lt;/li>
                                                    &lt;li class="dropdown-link">
                                                        &lt;a href="#">Ateliers de comédie musical Adulte et Enfants&lt;/a> &lt;!-- niveau 3 -->
                                                    &lt;/li>
                                                    
                                                    &lt;li class="arrow">&lt;/li>
                                                &lt;/ul>
                                            &lt;/div>
                                        &lt;/li>
        
                                        &lt;li class="dropdown-link">
                                            &lt;a href="#">Avis&lt;/a> &lt;!-- niveau 2 -->
                                        &lt;/li>
                                        &lt;li class="arrow">&lt;/li>
                                    &lt;/ul>
                                &lt;/div>
                            &lt;/li>
        
        
                            &lt;li class="nav-link" style="--i: 1.1s"> &lt;!-- niveau 1 -->
                                &lt;a href="#">Boutique&lt;/a>
                                &lt;div class="dropdown">
                                    &lt;ul>
                                        &lt;li class="dropdown-link">
                                            &lt;a href="#">Chambre 113&lt;/a> &lt;!-- niveau 2 -->
                                        &lt;/li>
                                        &lt;li class="arrow">&lt;/li>
                                    &lt;/ul>
                                &lt;/div>
                            &lt;/li>
        
        
        
                            &lt;li class="nav-link pluslong" style="--i: 1.35s"> &lt;!-- niveau 1 -->
                                &lt;a href="#">Contact&lt;/a>
                            &lt;/li>
                        &lt;/ul>
                    &lt;/div>
        
        
                &lt;/nav>
        
                &lt;div class="hamburger-menu-container">
                    &lt;div class="hamburger-menu">
                        &lt;div>&lt;/div>
                    &lt;/div>
                &lt;/div>
            &lt;/div>
        &lt;/header>
        
        
            &lt;main>
                &lt;section class="firstpart container"> &lt;!-- Image de fond -->
                    &lt;div class="container">
                        &lt;h1>Les&lt;br>Comédie musicales,&lt;br>Spectacles et&lt;br>Théâtre&lt;br>&lt;span>De Montrouge&lt;/span>&lt;/h1>
                    &lt;/div>
                    &lt;div class="container tar pada">
                      &lt;q> &lt;&lt; Dans chaque petite chose, il y a un ange. &gt;&gt; &lt;br>&lt;span>Bernanos&lt;/span>&lt;/q>
                    &lt;/div>
                &lt;/section>
        
        
                &lt;section class="mob920 container row ac imag top mob640">
                    
                        &lt;div class="col50 order2">
                            &lt;img class="db" src="img/danseuse-flou.jpg" alt="Danseuse">
                        &lt;/div>
        
                        &lt;div class="col50 box">
                            &lt;h2>À propos de nous&lt;/h2>
                            &lt;p>La Compagnie Les Anges Chanteurs est née en 2009 dans le but de créer, produire, promouvoir des spectacles, notamment dans le domaine de la comédie musicale.&lt;/p>
                            &lt;p>Les Anges Chanteurs sont à la fois des artistes professionnels du spectacle vivant, et des compagnies d'enfants, d'adolescents et d'adultes désireux de se former à la comédie musicale et à tous les Arts qui la compose.&lt;/p>
                        &lt;/div>
                    
                &lt;/section>
        
        
        
                &lt;section class="mob920 container row ac imag bottom box2 mob640">
                    
                        &lt;div class="col50 tar box team">
                            &lt;h2>Une équipe de professionnel&lt;/h2>
                            &lt;p>Dirigée par Claire-Marie Systchenko depuis sa création, la Compagnie professionnelle Les Anges Chanteurs monte ses propres spectacles de comédie musicale, à l'instar de la production Chambre 113, ainsi que des concerts, spectacles jeune public, etc.&lt;/p>
                            &lt;p>&lt;strong>Les artistes de la Compagnie sont des professionnels du spectacle vivant: chanteurs, comédiens, danseurs, acrobates, techniciens du son, lumière, décors, costumes... Chaque talent contribue à la richesse et à la diversité des Anges Chanteurs en apportant sa pierre créative à l'édifice d'un projet artistique. Collaborer en vue de créer une oeuvre unique, voilà la volonté de la Compagnie Les Anges Chanteurs.&lt;/strong>&lt;/p>
                         &lt;/div>
        
                         &lt;div class="col50">
                            &lt;img class="db" src="img/danseuse-rouge-enfant.jpg" alt="petite fille">
                        &lt;/div>
                    
                &lt;/section>
        
                &lt;div class="bandeau"> &lt;!-- Rubrique organisateur -->
                  &lt;h3>Une équipe de professionnel encadre les projets&lt;/h3>
                    &lt;div class="container">
                        &lt;ul class="row tac formateur">
                            &lt;li>&lt;img src="img/femme1.jpg" alt="Photo de Hélène Hardouin">
                                &lt;p class="name">Hélène Hardouin&lt;/p>
                                &lt;p>Metteur en scène&lt;/p>
                            &lt;/li>
        
                            &lt;li>&lt;img src="img/homme2.jpg" alt="Photo de Eric Bongrand">
                                &lt;p class="name">Eric Bongrand&lt;/p>
                                &lt;p>Auteur, Photographe&lt;/p> 
                            &lt;/li>
        
                            &lt;li>&lt;img src="img/femme3.jpg" alt="Photo de Claire-Marie Systchenko">
                                &lt;p class="name">Claire-Marie Systchenko&lt;/p>
                                &lt;p>Directrice Artistique&lt;/p>
                            &lt;/li>
                        &lt;/ul>
                    &lt;/div>
                &lt;/div>
        
                &lt;div class="container top bottom card"> &lt;!-- Les 3 cards -->
                    &lt;h2>Les créations des anges chanteurs&lt;/h2>
        
                    &lt;div class="card">
                        &lt;div class="row ac">
                            &lt;div class="flipbox"> &lt;!-- card 1 -->
                                &lt;div class="flipbox_inner">
                            &lt;div class="back titlecard info">
                                    &lt;h2>Spectacles musicales et poétiques avec photos&lt;/h2>
                                    &lt;p class="tal">De Hugo à Saint Exupéry, de Bach à Messiaen, une heure de contemplation joyeuse où flûte et poésie se répondent sur d'éblouissantes photos de ciels, projetées sur grand écran...&lt;/p>
                                    &lt;a class="button test" href="#">En savoir plus&lt;/a>
                            &lt;/div>
                            &lt;div class="front">&lt;/div>
                                &lt;/div>
                            &lt;/div>
        
                            &lt;div class="flipbox"> &lt;!-- card 2 -->
                        &lt;div class="flipbox_inner">
                            &lt;div class="back titlecard tac">
                                    &lt;h2>Balade à Paris&lt;/h2>
                                    &lt;p class="tal">De Hugo à Saint Exupéry, de Bach à Messiaen, une heure de contemplation joyeuse où flûte et poésie se répondent sur d'éblouissantes photos de ciels, projetées sur grand écran...&lt;/p>
                                    &lt;a class="button" href="#">En savoir plus&lt;/a>
                            &lt;/div>
                            &lt;div class="front2">&lt;/div>
                        &lt;/div>
                            &lt;/div>
        
                            &lt;div class="flipbox"> &lt;!-- card 3 -->
                            &lt;div class="flipbox_inner">
                                &lt;div class="back titlecard tac">
                                        &lt;h2>Chambre 113&lt;/h2>
                                        &lt;p class="tal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis nibh lorem, a gravida purus porttitor sed. Sed auctor purus sed lacus pellentesque dignissim. Integer ut pretium leo. Integer eget tellus fringilla, finibus nibh eget, convallis diam. Fusce porttitor sed nulla sed aliquam.&lt;/p>
                                        &lt;a class="button" href="#">En savoir plus&lt;/a>
                                &lt;/div>
                                &lt;div class="front3">&lt;/div>
                            &lt;/div>
                            &lt;/div>
                            &lt;/div>
                        &lt;/div>
                    &lt;/div>
        
        
        &lt;!-- carousel Mathieu --> 
        &lt;section class="padcarou">
        
            
            &lt;div class="container base">
                &lt;div class="chapo">
                    &lt;h2>Découvrez nos ateliers&lt;/h2>
                &lt;/div>
        
             
                &lt;div class="avis">
        
                    &lt;div class="carousel fade">
                        &lt;a href="stage-adultes.html">
                            &lt;div>
                                &lt;div class="rer">
                                    &lt;img src="img/adulte-cours.jpg" alt="Acteurs en costumes">
                                    &lt;h3 class="texte-important">Ateliers de Comédie Musicale - Adultes&lt;/h3>    
                                &lt;/div>
                            
                                &lt;div>
                                    &lt;p>De West Side Story à Mamma Mia! en passant par Chicago, le répertoire de la Chorale Comédie Musicale anglo-saxone est riche et plein de surprises! Venez créer un spectacle original de comédie musicale animé par Claire-Marie Systchenko. &lt;/p>
                                &lt;/div>
                            &lt;/div>
                        &lt;/a>
                    &lt;/div>
        
        
        
                    &lt;div class="carousel fade">
                        &lt;a href="ateliers-enfants.html">
                            &lt;div>
                                &lt;div class="rer">
                                    &lt;img src="img/stages_de_comedie_musicale_enfants_et_ados.jpg" alt="Acteurs en costumes">
                                    &lt;h3 class="texte-important">Stages de Comédie Musicale - Enfants & Ados&lt;/h3>    
                                &lt;/div>
                            
                                &lt;div>
                                    &lt;p>Découvrez la comédie musicale. Pour les enfants, développer vos talents, dans une ambiance chaleureuse et le bon air de la campagne ! &lt;/p>
                                &lt;/div>
                            &lt;/div>
                        &lt;/a>
                    &lt;/div>
        
        
        
                    &lt;div class="carousel fade">
                        &lt;a href="ateliers-enfants.html">
                            &lt;div>
                                &lt;div class="rer">
                                    &lt;img src="img/week_end_de_comedie_musical.jpg" alt="Acteurs en costumes">
                                    &lt;h3 class="texte-important">Week-Ends de Comédie Musicale - Adultes&lt;/h3>    
                                &lt;/div>
                            
                                &lt;div>
                                    &lt;p>Le temps d'un week-end, tout est mis en oeuvre pour vous faire découvrir la comédie musicale, développer vos talents, dans une ambiance chaleureuse et le bon air de la campagne! &lt;/p>
                                &lt;/div>
                            &lt;/div>
                        &lt;/a>
                    &lt;/div>
        
        
        
                    &lt;a class="prev" onclick="navigate(-1)">&#10094;&lt;/a>
                    &lt;a class="next" onclick="navigate(1)">&#10095;&lt;/a>
                    &lt;/div>
                &lt;br>
                    &lt;div style="text-align:center">
                        &lt;span class="dot" onclick="currentslide(1)">&lt;/span>
                        &lt;span class="dot" onclick="currentslide(2)">&lt;/span>
                        &lt;span class="dot" onclick="currentslide(3)">&lt;/span>
                    &lt;/div>
                &lt;br>
            &lt;/div>
        
        
        &lt;/section>
        
        
        
                &lt;div class="container coment">
                    &lt;div class="pad">
                        &lt;img src="img/quote.jpg" alt="quote de début de commentaire">
                        &lt;p>Super ambiance et travail régulier nous ont permis deux années de suite d'aboutir à des spectacles de grande qualité !&lt;/p>
                        &lt;p>Au delà de la préparation du spectacle sur tous ses aspects (artistiques et techniques), le cours est l’occasion de se plonger dans la culture des comédies musicales en découvrant des œuvres parfois méconnues. &lt;/p>
                        &lt;p>Les deux weekends intensifs organisés par Claire-Marie servent à approfondir le travail et surtout renforcent les liens entre les participants, élément indispensable pour que la cohésion se ressente sur scène ! Bref, une expérience enrichissante !&lt;/p>
                    &lt;/div>
                &lt;/div>
            &lt;/main>
        
        
        
        
            &lt;footer>
                &lt;div class="container tac contact"> 
                    &lt;h3>Vous souhaitez réaliser un spectacle, une comédie musicale ou tout simplement prendre contact ?&lt;/h3>
                    &lt;a class="button" href="#">Prendre contact&lt;/a>
                &lt;/div>
        
        
                &lt;div class="pic">
                    &lt;div class="container row ac newsletter colu">
                      &lt;div class="tal">&lt;p>S’abbonner à la newsletter&lt;/p>&lt;/div>
                      
                      &lt;div class="newsletter" > 
                        &lt;form action="traitement.php">
        
                            &lt;label class="case" for="name">&lt;/label>
                            &lt;input class="gap textnewsletter" type="text" id="name" name="name" placeholder="Prénom">
        
                            &lt;label for="email">&lt;/label>
                            &lt;input class="gap textnewsletter" type="email" id="email" name="email" placeholder="E-mail">&lt;input type="submit" value="envoyer" class="submit">
                          
                        &lt;/form>
                      &lt;/div> 
        
                    &lt;/div>
                &lt;/div>
        
                &lt;div class="foot container row">
                  &lt;div class="apa">
                    
                    &lt;p>&lt;a href="https://fr-fr.facebook.com/" target="_blank">Retrouvez nous sur Facebook&lt;/a>&lt;/p>
                    &lt;a href="https://fr-fr.facebook.com/" target="_blank">&lt;img src="img/fbwhite.svg" alt="logo de facebook">&lt;/a>
                  &lt;/div>
                  &lt;/div>
             &lt;/footer>
            
        &lt;/body>
        &lt;/html>
    
                    
                        </code>
                    </pre>
                

                <p>Below is the CSS code:</p>
                 <pre class="line-numbers">
                <code class="language-css ignore-progress">
                
                    @charset "utf-8";
        
                    /* RESET MEYER */
                    
                    /* http://meyerweb.com/eric/tools/css/reset/ 
                       v2.0 | 20110126
                       License: none (public domain)
                    */
                    
                    html, body, div, span, applet, object, iframe,
                    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
                    a, abbr, acronym, address, big, cite, code,
                    del, dfn, em, img, ins, kbd, q, s, samp,
                    small, strike, strong, sub, sup, tt, var,
                    b, u, i, center,
                    dl, dt, dd, ol, ul, li,
                    fieldset, form, label, legend,
                    table, caption, tbody, tfoot, thead, tr, th, td,
                    article, aside, canvas, details, embed, 
                    figure, figcaption, footer, header, hgroup, 
                    menu, nav, output, ruby, section, summary,
                    time, mark, audio, video {
                        margin: 0;
                        padding: 0;
                        border: 0;
                        font-size: 100%;
                        font: inherit;
                        vertical-align: baseline;
                    }
                    /* HTML5 display-role reset for older browsers */
                    article, aside, details, figcaption, figure, 
                    footer, header, hgroup, menu, nav, section {
                        display: block;
                    }
                    body {
                        line-height: 1;
                    }
                    ol, ul {
                        list-style: none;
                    }
                    blockquote, q {
                        quotes: none;
                    }
                    blockquote:before, blockquote:after,
                    q:before, q:after {
                        content: '';
                        content: none;
                    }
                    table {
                        border-collapse: collapse;
                        border-spacing: 0;
                    }
                    
                    * {
                        box-sizing: border-box;
                    }
                    
                    img{
                        display: block;
                    }
                    
                    a{
                        display: inline-block;
                    }
                    /* Fin du reset */
                    
                    /* --------------------------------------------------------------- */
                    
                    /*GENERAL RULES*/
                    
                    body{
                        font: 18px/24px 'Montserrat', sans-serif;
                        color: #2A3C46
                    }
                    
                    .container{
                        margin-left: auto;
                        margin-right: auto;
                        width: 1170px;
                    }
                    
                    a{
                        text-decoration: none;
                    }
                    
                    h1{
                        font: 48px/75px 'Cormorant Infant', sans-serif;
                        font-weight: 700;
                        color: #2A3C46;
                        
                    }
                    
                    span{
                        font-weight: 600;
                        font-size: 36px;
                        line-height: 50px;
                        font-style: italic;
                        margin-left: 250px;
                    }
                    
                    h2, h3{
                        color: #2A3C46;
                    }
                    
                    
                    h2{
                        font: 32px/44px 'Montserrat', sans-serif;
                        font-weight: 700;
                    }
                    
                    h3{
                        font: 24px/35px 'Montserrat', sans-serif;
                        font-weight: 700;
                    }
                    h4{
                        font-weight: 500;
                    }
                    
                    p{
                        font: 18px/24px 'Montserrat', sans-serif;
                        margin-bottom: 24px;
                    }
                    
                    
                    .pada{
                        padding: 16px 0;
                    }
                    
                    q{
                        font-family: 'Cormorant Infant';
                        font-style: italic;
                        font-weight: 600;
                        font-size: 32px;
                        line-height: 50px;
                        text-align: right;
                        color: #1d2a31;
                    }
                    
                    q span{
                        font-style: normal;
                        font-weight: 700;
                        font-size: 32px;
                        line-height: 50px;
                    }
                    
                    .button{
                        font: 16px/24px 'Montserrat', sans-serif;
                        padding: 15px 16px;
                        color: #fff;
                        background: #2A3C46;
                        display: inline-block;
                        font-weight: 500;
                        text-transform: uppercase;
                        border-radius: 5px;
                        transition: all .3s ease;
                    }
                    
                    .button:hover{
                        background: #fff;
                        color: #1d2a31;
                        border: 1px solid #1d2a31;
                        display: inline-block;
                    }
                    
                    
                    
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    
                    /* Réglage des boites */
                    
                    .tac{
                        text-align: center;
                    }
                    
                    .tar{
                        text-align: right;
                    }
                    
                    .tal{
                        text-align: left;
                    }
                    
                    
                    .row{
                        display: flex;
                    }   /* flex-box */
                    
                    .ac{
                        align-items: center;
                    }
                    .col25{
                        width: 25%;
                    }
                    
                    .col50{
                        width: 50%;
                    }
                    
                    .col33{
                        width: 33.33%;
                    }
                    .col75{
                        width: 75%;
                    }
                    .col{
                        width: 100%;
                    }
                    
                    .db{
                        display: block;
                    }
                    
                    
                    
                    .top{
                        padding-top: 100px;
                    }
                    .bottom{
                        padding-bottom: 100px;
                    }
                    .bg{
                        background-color: #1d2a31;
                        color: #fff;
                    }
                    
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    
                    
                    /* Header */
                    
                    
                      /* * {
                        padding: 0;
                        margin: 0;
                        box-sizing: border-box;
                    }  */
                    /* a{
                        text-decoration: none;
                    } */
                    ul{
                        list-style: none;
                    }
                    
                    header{
                        position: sticky;
                        top: 0px;
                        background-color: #1d2a31;
                        width: 100%;
                        z-index: 1000;
                        padding: 10px 0;
                    
                    }
                    
                    
                    header .container{
                        max-width: 65rem;
                        padding: 0 2rem;
                        margin: 0 auto;
                        display: flex;
                        position: relative;
                    }
                    header .container{
                        align-items: center;
                    }
                    .logo-container{
                        flex: 1;
                        display: flex;
                        align-items: center;
                    }
                    
                    .nav-btn{
                        flex: 3;
                        display: flex;
                    }
                    
                    .nav-links{
                        flex: 2;
                    }
                    
                    
                    /* cible contact  */
                    
                    .pluslong{
                        border: solid 2px #fff;
                        padding: 0 20px;
                    }
                    
                    
                    
                    
                    /* .logo{
                        color: #ad0707;
                        font-size: 1.1rem;
                        font-weight: 600;
                        letter-spacing: 2px;
                        text-transform: uppercase;
                        line-height: 3rem;
                    } */
                    
                    /* .logo span{
                        font-weight: 300;
                    } */
                    
                    .btn{
                        display: inline-block;
                        padding: .5rem 1.3rem;
                        font-size: .8rem;
                        border: 2px solid #fff;
                        border-radius: 2rem;
                        line-height: 1;
                        margin: 0 .2rem;
                        transition: .3s;
                        text-transform: uppercase;
                    }
                    
                    /* .btn.solid, .btn.transparent:hover{
                        background-color: #fff;
                        color: #fa4f00;
                    } */
                    
                    /* .btn.transparent, .btn.solid:hover{
                        background-color: transparent;
                        color: #fff;
                    } */
                    
                    .nav-links > ul{
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }
                    
                    .nav-link{
                        position: relative;
                    }
                    
                    .nav-link > a{
                        line-height: 3rem;
                        color: #fff;
                        padding: 0 25px;
                        letter-spacing: 1px;
                        font-size: .95rem;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        transition: .5s;
                    }
                    
                    /* .nav-link > a > i{
                        margin-left: .2rem;
                        background-color: red;
                    } */
                    
                    .nav-link:hover > a{
                        transform: scale(1.1);
                    }
                    
                    .dropdown{
                        position: absolute;
                        top: 100%;
                        left: 0;
                        width: 20rem;
                        transform: translateY(10px);
                        opacity: 0;
                        pointer-events: none;
                        transition: .5s;
                    }
                    
                    .dropdown ul{
                        position: relative;
                    }
                    
                    .dropdown-link > a{
                        display: flex;
                        background-color: #fff;
                        color: #1d2a31;
                        padding: 1rem 1rem;
                        font-size: .9rem;
                        align-items: center;
                        justify-content: space-between;
                        transition: .3s;
                    }
                    
                    .dropdown-link:hover > a{
                        background-color: #2A3C46;
                        color: #fff;
                    }
                    
                    .dropdown-link:not(:nth-last-child(2)){
                        border-bottom: 1px solid #efefef;
                    }
                    
                    .dropdown-link i{
                        transform: rotate(-90deg);
                    }
                    
                    .arrow{
                        position: absolute;
                        width: 11px;
                        height: 11px;
                        top: -5.5px;
                        left: 32px;
                        background-color: #fff;
                        transform: rotate(45deg);
                        cursor: pointer;
                        transition: .3s;
                        z-index: -1;
                    }
                    
                    .dropdown-link:first-child:hover ~ .arrow{
                        background-color: #1d2a31;
                    }
                    
                    .dropdown-link{
                        position: relative;
                    }
                    
                    .dropdown.second{
                        top: 0;
                        left: 100%;
                        padding-left: .8rem;
                        cursor: pointer;
                        transform: translateX(10px);
                    }
                    
                    .dropdown.second .arrow{
                        top: 10px;
                        left: -5.5px;
                    }
                    
                    .nav-link:hover > .dropdown,
                    .dropdown-link:hover > .dropdown{
                        transform: translate(0, 0);
                        opacity: 1;
                        pointer-events: auto;
                    }
                    
                    .hamburger-menu-container{
                        flex: 1;
                        display: none;
                        align-items: center;
                        justify-content: flex-end;
                    }
                    
                    .hamburger-menu{
                        width: 2.5rem;
                        height: 2.5rem;
                        display: flex;
                        align-items: center;
                        justify-content: flex-end;
                    }
                    
                    .hamburger-menu div{
                        width: 1.6rem;
                        height: 3px;
                        border-radius: 3px;
                        background-color: #fff;
                        position: relative;
                        z-index: 1001;
                        transition: .5s;
                    }
                    
                    .hamburger-menu div:before,
                    .hamburger-menu div:after{
                        content: '';
                        position: absolute;
                        width: inherit;
                        height: inherit;
                        background-color: #fff;
                        border-radius: 3px;
                        transition: .5s;
                    }
                    
                    .hamburger-menu div:before{
                        transform: translateY(-7px);
                    }
                    
                    .hamburger-menu div:after{
                        transform: translateY(7px);
                    }
                    
                    #check{
                        position: absolute;
                        top: 50%;
                        right: 1.5rem;
                        transform: translateY(-50%);
                        width: 2.5rem;
                        height: 2.5rem;
                        z-index: 90000;
                        cursor: pointer;
                        opacity: 0;
                        display: none;
                    }
                    
                    #check:checked ~ .hamburger-menu-container .hamburger-menu div{
                        background-color: transparent;
                    }
                    
                    #check:checked ~ .hamburger-menu-container .hamburger-menu div:before{
                        transform: translateY(0) rotate(-45deg);
                    }
                    
                    #check:checked ~ .hamburger-menu-container .hamburger-menu div:after{
                        transform: translateY(0) rotate(45deg);
                    }
                    
                    @keyframes animation{
                        from{
                            opacity: 0;
                            transform: translateY(15px);
                        }
                        to{
                            opacity: 1;
                            transform: translateY(0px);
                        }
                    }
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    /* --------------------------------------------------------------- */
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                      /* --------------------------------------------------------------- */
                    
                    
                    
                      /* Main */
                    
                    /* les 2 première box */
                    
                    
                      .firstpart{
                        background-image: url('../img/h1image.jpg');
                        background-repeat: no-repeat;
                        background-size: cover;
                        padding-top: 150px;
                        padding-bottom: 50px;
                        
                        width: 100%;
                        margin-left: auto;
                        margin-right: auto;
                      }
                    
                      .firstpart  h1{
                        margin: 50px 0;
                      }
                    
                    
                    
                    .box{
                        padding: 0 67px;
                    }
                    
                    .box h2{
                        margin-bottom: 48px;
                    }
                    
                    
                    .box2{
                        padding-top: 100px;
                        
                    }
                    .imag img{
                        width: 100%;
                    }
                    
                      /* --------------------------------------------------------------- */
                    
                      /* Formateur */
                    
                    
                    
                    .formateur{
                        padding: 80px 0;
                        justify-content: space-evenly;
                      }
                    
                    .bandeau{
                        background-color: #2A3C46;
                      }
                    
                    .bandeau h3{
                        color: #fff;
                        text-align: center;
                        padding: 24px 0;
                    } 
                    .bandeau li{
                        background-color: #fff;
                        border-radius: 15px;
                        width: 33.33%;
                        margin: 0 38.5px;
                        transition: all 400ms ease	
                    }
                    
                    .bandeau li:hover{
                        transform: scale(1.2);
                        transition: all 400ms ease
                    }
                    
                    .formateur img{
                        padding: 10px 0;
                        margin: auto;	
                    }
                    
                    .name{
                        font-weight: 700;
                        margin-bottom: 8px;
                    }
                    
                      /* --------------------------------------------------------------- */
                    
                      /* Les 3 cards */
                    
                    .container .top .bottom, h2{
                        margin-bottom: 50px;
                    }
                    
                    .card > div{
                        justify-content: space-evenly;
                        
                    }
                    
                    
                    
                    
                    
                    .titlecard h2{
                        font-size: 24px;
                        line-height: 28px;
                    }
                    
                    
                    /* card 1 */
                    .flipbox{
                        width: 300px;
                        height: 500px;
                        perspective: 1000px;
                    }
                    .flipbox_inner{
                        position: relative;
                        transform-style: preserve-3d;
                        transition:all .5s ease;
                        width: 100%;
                        height: 100%;
                    }
                    .flipbox:hover .flipbox_inner{
                        transform: rotateY(180deg);
                    }
                    
                    .front{
                        
                        background-image: url('../img/entre-ciel-et-terre.jpg');
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        text-align: center;
                    
                    }
                    .back{
                        
                        transform: rotateY(180deg);
                    }
                    .front, .back{
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: space-between;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        backface-visibility: hidden;
                        border-radius: 16px;
                        box-shadow: 0 5px 20px rgba(0, 0, 0, .7);
                        color: #121140;
                        padding: 15px;
                        text-align: center;
                    }
                    
                    
                    
                    
                    
                    
                    
                    
                    /* card 2 */
                    
                    
                    
                    
                    
                    .front2{
                        
                        background-image: url('../img/baladeaparis.jpg');
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        text-align: center;
                    }
                    .back{
                        
                        transform: rotateY(180deg);
                    }
                    .front2, .back{
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        backface-visibility: hidden;
                        border-radius: 16px;
                        box-shadow: 0 5px 20px rgba(0, 0, 0, .7);
                    }
                    
                    
                    
                    /* card 3 */
                    
                    .front3{
                    
                        background-image: url('../img/chambre113.jpg');
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        text-align: center;
                    }
                    .back{
                        
                        transform: rotateY(180deg);
                    }
                    .front3, .back{
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        backface-visibility: hidden;
                        border-radius: 16px;
                        box-shadow: 0 5px 20px rgba(0, 0, 0, .7);
                    }
                    
                    
                    
                    
                    
                    /* ---------------------------------------------------------------
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    ---------------------------------------------------------------
                    ---------------------------------------------------------------
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    ---------------------------------------------------------------   */
                    
                    /* Iframe */
                    
                    iframe{
                        width: 100%;
                        height: 300px;
                    }
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                      /* carousel  */
                    
                      * {box-sizing:border-box}
                      /* Slideshow container */
                    
                    
                    
                    
                      .padcarou{
                        padding: 150px 0;
                        
                      }
                     
                    
                    
                    
                    
                    
                    
                    
                    
                      .avis{
                          max-width: 800px;
                          position:relative;
                          margin:auto;
                      }
                    
                      /* Hide the images by default */
                      .carousel{
                        display:none;
                        width: 100%;
                        height: 400px;
                        background-color: #dbdfe1;
                        padding: 15px;
                        z-index:1;
                        border: 1px solid #1d2a31;
                      }
                     
                    
                    .rer {
                        display: flex;
                        flex-direction: row;
                        align-items: center;
                        padding: 25px 0;
                        gap: 25px;
                    }
                    .carousel h3{
                        color: #1d2a31;
                        background-color: transparent;
                    }
                      .carousel img{
                        border-radius: 100%;
                        width: 200px;
                        height: 200px;
                        border: 2px solid #1d2a31;
                      }
                      .carousel p{
                        color: #1d2a31;
                      }
                    
                    
                      /* Next & previous buttons */
                      .prev, .next{
                    
                          display: flex;
                          cursor: pointer;
                          position: absolute;
                          top: 50%;
                          width: 50px;
                          height: 50px;
                          margin-top:-22px;
                          padding:16px;
                          color:#1d2a31;
                          font-weight:bold;
                          font-size:18px;
                          transition: 0.6s ease;
                          border-radius: 100%;
                          /* border-color: #1d2a31; */
                          border: 2px solid #1d2a31;
                          user-select: none;
                          justify-content: center;
                          align-items: center;
                      }
                      .next{
                          right: -100px;
                    
                      }
                      
                      .prev{
                          left: -100px;
                      }
                      /* On hover, add a black background color with a little bit see-through */
                      .prev:hover, .next:hover {
                        background-color: #2A3C46;
                        color: #fff;
                        transform: scale(1.5);
                      }
                      /* The dots/bullets/indicators */
                      .dot{
                          cursor:pointer;
                          height:15px;
                          width:15px;
                          margin: 0 2px;
                          background-color: #CDCDCD;
                          border-radius: 50%;
                          display:inline-block;
                          transition: background-color .6s ease;
                      }
                      .active, .dot:hover {
                        background-color: #1d2a31;
                      }
                      /* Fading animation */
                      .fade {
                        animation-name: fade;
                        animation-duration: 1.5s;
                      }
                      @keyframes fade {
                        from {opacity: .4}
                        to {opacity: 1}
                      }
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                      /* ancien */
                      .slides-container {
                        scrollbar-width: none; /* Firefox */
                        -ms-overflow-style: none;  /* Internet Explorer 10+ */
                    }
                    
                    
                    /* WebKit */
                    .lacie{
                        display: flex;
                    }
                    .slides-container::-webkit-scrollbar { 
                        width: 0;
                        height: 0;
                    }
                    
                    .slider-wrapper {
                      margin: 1rem;
                      position: relative;
                      overflow: hidden;
                      margin-left: auto;
                      margin-right: auto;
                      background-color: yellow;
                    }
                    
                    .slide {
                      width: 0%;
                      height: 100%;
                      flex: 1 0 100%;
                      /* text-align: center; */
                    }
                    
                    .slides-container {
                          margin-left: auto;
                        margin-right: auto;
                        max-width: 900px;
                         display: flex;
                          overflow: scroll;
                        background-color: green;
                    }
                    
                    .slide-arrow {
                      position: absolute;
                      display: flex;
                      top: 0;
                      bottom: 0;
                      margin: auto;
                      height: 4rem;
                      border: none;
                    /*  width: 2rem;*/
                      font-size: 3rem;
                      padding: 0;
                      cursor: pointer;
                      opacity: 0.5;
                      transition: opacity 100ms;
                      background-color: #ff0000;
                    }
                    
                    .slide-arrow:hover,
                    .slide-arrow:focus {
                      opacity: 1;
                    }
                    
                    #slide-arrow-prev, #slide-arrow-prev2  {
                      left: 0;
                      padding-left: 0.25rem;
                      border-radius: 0 2rem 2rem 0;
                        content: url(../img/chevron-gauche.svg);
                    }
                    
                    #slide-arrow-next, #slide-arrow-next2 {
                      right: 0;
                      padding-left: 0.75rem;
                      border-radius: 2rem 0 0 2rem;
                        content: url(../img/chevron-droit.svg);
                    }
                    
                    
                    
                    
                    .slide p{
                        text-align: left;
                    }
                    
                    .slide h3::before{
                        content: '';
                        display: none;
                    }
                    
                    .aller-videos{
                        text-align: center;
                    }
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    /* ---------------------------------------------------------------
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    ---------------------------------------------------------------
                    ---------------------------------------------------------------
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    --------------------------------------------------------------- 
                    ---------------------------------------------------------------   */
                    
                    
                    /* FOOTER */
                    
                    .coment{
                        padding: 100px 100px;
                        position: relative;
                    }
                    
                    .pad img{
                        position: relative;
                        top: -25px;
                        left: -60px;
                    }
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    footer{
                        background-color: #2A3C46;
                    }
                    footer h3{
                        color: #fff;
                    }
                    footer .button{
                        border: 1px solid #fff;
                    }
                    footer .pic{
                        background-image: url('../img/newsletter.jpg');
                        background-repeat: no-repeat;
                        background-size: cover;
                        padding: 80px 0;
                    }
                    
                    .newsletter{
                        justify-content: space-between;
                    }
                    .contact{
                        padding: 35px 0;
                        width: 900px;
                    }
                    
                    .contact h3{
                        margin-bottom: 24px;
                    }
                    
                    
                    
                    .form{
                        justify-content: space-evenly;
                        align-items: center;
                        padding: 30px 0;
                    }
                    
                    .textnewsletter{
                        height: 45px;
                    }
                    
                    
                    
                    .newsletter>*{
                        gap: 300px;
                    }
                    .newsletter input{
                        gap: 60px;
                    }
                    
                    .submit{
                        font: 16px/24px 'Montserrat', sans-serif;
                        padding: 8px 16px;
                        color: #fff;
                        background: #2A3C46;
                        display: inline-block;
                        font-weight: 500;
                        text-transform: uppercase;
                        border-radius: 5px;
                        transition: all .3s ease;
                        border-color: #1d2a31;
                    }
                    
                    .submit:hover{
                        background: #fff;
                        color: #1d2a31;
                        border: 2px solid #1d2a31;
                        display: inline-block;
                    }
                    
                    .foot{
                        justify-content: flex-end;
                        align-items: center;
                        padding: 25px 0;
                        gap: 100px;
                        position: relative;
                    
                    }
                    
                    
                    .foot img{
                        width: 35px;
                        height: 35px;
                    }
                    
                    
                    
                    /* p margin 0 a cibler */
                    .apa p a{
                        color: #fff;
                    }
                    
                    .apa p{
                        color: #fff;
                        margin-bottom: 0;
                    }
                    .apa {
                        color: #fff;
                        position: relative;
                        text-decoration: none;
                        display: flex;
                        align-items: center;
                        gap: 15px;
                      }
                      
                      .apa::before {
                        content: '';
                        position: absolute;
                        width: 85%;
                        height: 4px;
                        border-radius: 4px;
                        background-color: #fff;
                        bottom: 0;
                        left: 0;
                        transform-origin: right;
                        transform: scaleX(0);
                        transition: transform .3s ease-in-out;
                      }
                      
                      .apa:hover::before {
                        transform-origin: left;
                        transform: scaleX(1);
                      }
                    
                    
                    
                      /* page 2 */
                    
                    .colu{
                        text-align: center;
                        padding: 100px 0;
                    }
                    .colu br{
                        display: none;
                    }
                    
                      
                    .padding{
                        padding: 40px 0 200px 0;
                        gap: 24px;
                    }
                    .padding h1{
                        margin-bottom: 24px;
                    }
                    
                    .paddin{
                        font-weight: 600;
                    }
                    .cours{
                        font: 28px/28px 'Cormorant Infant', sans-serif;
                        font-weight: 700;
                        color: #2A3C46;
                    }
                    
                    
                    
                    .animateur{
                        padding: 50px 0;
                    }
                    .animateur, h3, h4{
                        background-color: #2A3C46;
                        color: #fff;
                        margin-bottom: 16px;
                    }
                    
                    .animateur .button{
                        border: 1px solid #fff;
                    }
                    
                    .animateur div:first-child{
                        margin-right: 100px;
                    }
                    .animateur div img{
                        width: 250px;
                        height: 250px;
                        border-radius: 100%;
                    }
                    
                    
                    
                    
                    .price{
                        flex-direction: column;
                    }
                    .price div:first-child{
                        padding-bottom: 80px;
                    }
                    .price div{
                        padding-left: 50px;
                        padding-right: 50px;
                    }
                    
                    
                    .aaa{
                        width: 770px;
                    }
                    
                    .decor div img{
                    width: 381px;
                    }
                    
                    
                    .picpad{
                        margin-right: 20px;
                    }
                    .picpad img{
                        height: 882px;
                    }
                    .picpad2{
                        flex-direction: column;
                        justify-content: space-between;	
                    }
                    
                    .pala{
                    padding: 100px 0;
                    }
                    
                    .margin{
                        margin: 0;
                    }
                    
                    .space{
                        display: flex;
                    }
                    
                    .space2{
                        justify-content: space-between;
                        align-items: center;
                    }
                    
                    .space a{
                        color: #fff;
                    }
                </code>
                </pre> 

                <p>Below the responsive CSS code:</p>
                 <pre class="line-numbers">
                    <code class="language-css ignore-progress">
                        
                    
                        @media screen and (max-width: 1024px) {
                            /*desktop/laptop jusqu'à 1024px de large*/
                            .container{
                                width: 960px;
                               }
                        
                        
                           
                        
                        
                        
                            }
                        
                        
                        
                        
                        
                        /* -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        ------------------------------------------------------- */
                        
                        
                                    /* header responsive */
                        
                        
                            @media screen and (max-width: 920px){
                        
                                .container{
                                    width: 100%;
                                   padding: 0 10px;
                                }
                        
                                .mob920{
                                    padding: 25px 0;
                                }
                                .imag.mob640 .col50{
                                    padding: 0 15px;
                                }
                                .colu{
                                    padding: 25px 0;
                                }
                                .colu br{
                                    display: block;
                                }
                                .row.align {
                                    display: flex;
                                    flex-direction: column;
                                }
                                .img{
                                    max-width: 100%;
                                }
                                /* .container{
                                    width: 90%;
                                } */
                                .row.photo{
                                        padding: 50px 0; 
                                        margin: auto;
                                }
                                
                            .padding{
                                display: flex;
                                flex-direction: column;
                                /* padding: 200px 0; */
                                padding-top: 200px;
                                padding-bottom: 200px;
                        
                            }
                            .padding>*{
                                width: 100%;
                            }
                            .bg .container.pada{
                                padding: 20px 0;
                            }
                            .container.coment{
                                padding: 100px 0;
                            }
                            .pad img{
                                top: -50px;
                                left: 0px;    
                            }
                            footer .tac{
                                padding: 50px 0;
                            }
                            footer div:last-child{
                                padding: 15px 0;
                            }
                        
                        
                        
                        
                                .animateur div:first-child {
                                    margin-right: 0;
                                    gap: 25px;
                                }
                            
                        
                                .hamburger-menu-container{
                                    display: flex;
                                }
                            
                                #check{
                                    display: block;
                                }
                            
                        
                        
                                .nav-btn{
                                    position: fixed;
                                    height: calc(100vh - 4rem);
                                    top: 129px;
                                    left: 0;
                                    width: 100%;
                                    background-color: #ffffff;
                                    flex-direction: column;
                                    align-items: center;
                                    justify-content: space-between;
                                    overflow-x: hidden;
                                    overflow-y: auto;
                                    transform: translateX(100%);
                                    transition: .65s;
                                }
                            
                                #check:checked ~ .nav-btn{
                                    transform: translateX(0);
                                }
                            
                                #check:checked ~ .nav-btn .nav-link,
                                #check:checked ~ .nav-btn .log-sign{
                                    animation: animation .5s ease forwards var(--i);
                                }
                            
                                .nav-links{
                                    flex: initial;
                                    width: 100%;
                                }
                            
                                .nav-links > ul{
                                    flex-direction: column;
                                }
                            
                                .nav-link{
                                    width: 100%;
                                    opacity: 0;
                                    transform: translateY(15px);
                                }
                            
                                .nav-link > a{
                                    line-height: 1;
                                    padding: 1.6rem 2rem;
                                    color: #2A3C46;
                                }
                            
                                .nav-link:hover > a{
                                    transform: scale(1);
                                    background-color: #2A3C46;
                                    color: #fff;
                                }
                            
                                .dropdown, .dropdown.second{
                                    position: initial;
                                    top: initial;
                                    left: initial;
                                    transform: initial;
                                    opacity: 1;
                                    pointer-events: auto;
                                    width: 100%;
                                    padding: 0;
                                    background-color: #324e5d;
                                    display: none;
                                }
                                
                                .nav-link:hover > .dropdown,
                                .dropdown-link:hover > .dropdown{
                                    display: block;
                                }
                            
                                .nav-link:hover > a > i,
                                .dropdown-link:hover > a > i{
                                    transform: rotate(360deg);
                                }
                            
                                .dropdown-link > a{
                                    background-color: transparent;
                                    color: #fff;
                                    padding: 1.2rem 5rem;
                                    line-height: 1;
                                }
                            
                                .dropdown.second .dropdown-link > a{
                                    /* padding: 1.2rem 2rem 1.2rem 3rem; */
                                    padding: 1.2rem 8rem;
                                }
                            
                                .dropdown.second .dropdown.second .dropdown-link > a{
                                    padding: 1.2rem 2rem 1.2rem 4rem;
                                }
                            
                                .dropdown-link:not(:nth-last-child(2)){
                                    border-bottom: none;
                                }
                            
                                .arrow{
                                    z-index: 1;
                                    background-color: #59ff00;
                                    left: 10%;
                                    transform: scale(1.1) rotate(45deg);
                                    transition: .5s;
                                }
                            
                                .nav-link:hover .arrow{
                                    background-color: #2A3C46;
                                }
                            
                                .dropdown .dropdown .arrow{
                                    display: none;
                                }
                            
                                .dropdown-link:hover > a{
                                    background-color: #8c969b;
                                }
                            
                                .dropdown-link:first-child:hover ~ .arrow{
                                    background-color: #8c969b;
                                }
                            
                                .nav-link > a > i{
                                    font-size: 1.1rem;
                                    transform: rotate(-90deg);
                                    transition: .7s;
                                }
                            
                                .dropdown i{
                                    font-size: 1rem;
                                    transition: .7s;
                                }
                            
                                .log-sign{
                                    flex: initial;
                                    width: 100%;
                                    padding: 1.5rem 1.9rem;
                                    justify-content: flex-start;
                                    opacity: 0;
                                    transform: translateY(15px);
                                }
                        
                                .pluslong{
                                    border: solid 2px #2A3C46;
                                    padding: 0;
                                }
                        
                                .card div{
                                    flex-direction: column;
                                    gap: 25px;
                                }
                        
                                .coment div{
                                    padding: 0 10px;
                                }
                        
                                .colu{
                                    flex-direction: column;
                                }
                                .pada .margin{
                                    padding-left: 15px;
                                }
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                                /* carousel 920 */
                        
                                .padcarou{
                                    width: 800px;
                                    margin: 0 auto;
                                }
                                .prev, .next{
                        
                                    display: flex;
                                    cursor: pointer;
                                    position: absolute;
                                    top: 50%;
                                    width: 50px;
                                    height: 50px;
                                    margin-top:-22px;
                                    padding:16px;
                                    color:#1d2a31;
                                    font-weight:bold;
                                    font-size:18px;
                                    transition: 0.6s ease;
                                    border-radius: 100%;
                                    /* border-color: #1d2a31; */
                                    border: 2px solid #1d2a31;
                                    user-select: none;
                                    justify-content: center;
                                    align-items: center;
                                }
                                .next{
                                    right: -10px;
                                    top: 500px;
                                }
                                
                                .prev{
                                    left: -10px;
                                    top: 500px;
                                }
                        
                         
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                            }
                        
                        
                        /* -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        -------------------------------------------------------
                        ------------------------------------------------------- */
                        
                        
                        
                           @media screen and (max-width: 768px) {
                            /*tablettes portrait*/
                        
                            /* Carousel */
                            .padcarou{
                                width: 700px;
                                margin: 0 auto;
                            }
                            .next{
                                right: -10px;
                                top: 500px;
                            }
                            
                            .prev{
                                left: -10px;
                                top: 500px;
                            }
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                            }
                           
                           
                        
                        
                        
                        
                           @media screen and (max-width: 640px) {
                            /*Grands smartphones*/
                        
                        
                            /* Carousel */
                        
                            .padcarou{
                                width: 600px;
                                margin: 0 auto;
                            }
                            .next{
                                right: -10px;
                                top: 500px;
                            }
                            
                            .prev{
                                left: -10px;
                                top: 500px;
                            }
                        
                        
                        
                            /* Fin du carousel */
                        
                        
                        
                        
                        
                        
                        
                        
                            .burger{
                                display: block;
                                position: absolute;
                                top: 0;
                                right: 0;
                            }
                            .header .container{
                                flex-direction: column;
                                align-items: center;
                                position: relative;
                            }
                            nav.responsive il{
                                flex-direction: column;
                                align-items: center;
                                gap: 60px;
                                padding: 70px 0;
                            }
                            nav li:not(.burger){
                                display: none;
                            }
                            nav.responsive .burger div{
                                background: url(../img/burger-menu-close.svg);
                            }
                            nav.responsive li:not(.burger){
                                display: block;
                            }
                        /* 
                        ---------------------------------------------
                        ---------------------------------------------
                        ---------------------------------------------
                        ---------------------------------------------
                        ---------------------------------------------
                        --------------------------------------------- */
                        
                        q{
                            font-size: 18px;
                            line-height: 24px;
                        }
                        q span{
                            font-size: 18px;
                            line-height: 24px;
                        }
                        .mob640{
                            flex-direction: column;
                            padding: 150px 0;
                        }
                        .mob640 div{
                            width: 100%;
                        }
                        .mob640 div:last-child{
                            margin-bottom: 50px;
                            padding: 0;
                        }
                        .order2{
                            order: 2;
                        }
                        .team{
                            padding: 0;
                            text-align: left;
                        }
                        .bandeau{
                            padding-bottom: 50px;
                        }
                        .bandeau h3{
                            font-size: 18px;
                            line-height: 24px;
                        }
                        .bandeau ul{
                            flex-direction: column;
                            align-items: center;
                            gap: 50px;
                            padding: 0;
                        }
                        .bandeau li{
                            width: 80%;
                        }
                        
                        .card h2{
                            text-align: center;
                        }
                        .card div{
                            gap: 25px;
                        }
                        
                        
                        .coment{
                            padding: 50px;
                        }
                        
                        
                        
                        .newsletter form{
                            flex-direction: column;
                        }
                        .gap{
                            margin-bottom: 25px;
                               
                        }
                        .textnewsletter{
                            width: 100%;
                        }
                        .wid div{
                            width: 100%;
                        }
                        
                        
                        
                        
                        
                        
                        .animateur{
                            width: 100%;
                            margin: 0;
                        }
                        .animateur .container{
                            flex-direction: column;
                            text-align: center;
                            width: 100%;
                        }
                        
                        
                        .colu{
                            font-size: 48px;
                        }
                        
                        
                        .col50{
                            width: 100%;
                        }
                        
                        
                        
                        
                        /* tarifs */
                        
                        .gros .row{
                            width: 100%;
                        }
                        .price{
                            width: 100%;
                        }
                        .price div{
                            padding-left: 0;
                            padding-right: 0;
                        }
                        .tarif{
                            padding: 50px 0;
                        }
                        .tarif > div{
                            flex-direction: column;
                            width: 100%;
                            gap: 50px;
                        }
                        .photo.mobi640{
                            flex-direction: column;
                            gap: 15px;
                        }
                        .sousphoto{
                            gap: 15px;
                        }
                        
                        .taille50{
                            width: 100%;
                        }
                        .row .photo img{
                            width: 100%;
                        }
                        .picpad2{
                            justify-content: space-evenly;
                        }
                        .adress{
                            flex-direction: column;
                            padding: 15px 0;
                            gap: 10px;
                        }
                        
                        .textnewsletter{
                            width: 90%;
                        }
                        
                        .foot .apa{
                            padding-right: 15px;
                            padding-left: 15px;
                        }
                        
                        
                        
                        
                        
                            }
                           
                         
                        
                        
                        
                        
                           @media screen and (max-width: 480px) {
                           
                            /* Carousel */
                            .rer {
                                display: flex;
                                flex-direction: column;
                                align-items: center;
                                text-align: center;
                                padding: 25px 0;
                                gap: 25px;
                            }
                            .carousel{
                                display:none;
                                width: 100%;
                                height: 600px;
                                background-color: #dbdfe1;
                                padding: 15px;
                                z-index:1;
                                border: 1px solid #1d2a31;
                              }
                            .rer img{
                                width: 175px;
                                height: 175px;
                            }
                            .padcarou{
                                width: 400px;;
                                margin: 0 auto;
                            }
                            .avicarousel div{
                                height: 1000px
                            }
                            .next{
                                right: -10px;
                                top: 650px;
                            }
                            
                            .prev{
                                left: -10px;
                                top: 650px;
                            }
                        
                        
                        
                            /* Fin du carousel */
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                            .logo-container img{
                                width: 80%;
                            }
                        
                            .nav-btn{
                                top: 107px;
                            }
                        .colu{
                            padding-top: 60px;
                        }
                        h1 span{
                            margin-left: 0;
                        }
                        .bandeau h3{
                            padding: 25px 25px;
                        }
                        .padding{
                            padding: 30px 0;
                        }
                        
                            }
                        
                            @media screen and (max-width: 320px){
                                
                        
                        
                        
                        
                                    /* Carousel */
                            .rer {
                                display: flex;
                                flex-direction: column;
                                align-items: center;
                                text-align: center;
                                padding: 25px 0;
                                gap: 25px;
                            }
                            .carousel{
                                display:none;
                                width: 100%;
                                height: 700px;
                                background-color: #dbdfe1;
                                padding: 15px;
                                z-index:1;
                                border: 1px solid #1d2a31;
                              }
                            .rer img{
                                width: 150px;
                                height: 150px;
                            }
                            .padcarou{
                                width: 300px;;
                                margin: 0 auto;
                            }
                            .avicarousel div{
                                height: 1000px
                            }
                            .next{
                                right: 0;
                                top: 750px;
                            }
                            
                            .prev{
                                left: 0;
                                top: 750px;
                            }
                        
                        
                        
                            /* Fin du carousel */
                                
                                
                                .container{
                                    width: 100%;
                                    
                                }
                        
                                .nav-btn{
                                    top: 84px;
                                }
                        
                        
                                .colu{
                                    font-size: 32px;
                                    line-height: 36px;
                                    padding: 30px 0;
                                }
                        
                                .pad img{
                                    width: 30%;
                                }
                                footer h3{
                                    font-size: 18px;
                                    line-height: 24px;
                                }
                                .mobi320{
                                    font-size: 15px;
                                    line-height: 24px;
                                }
                        
                        
                            }
                        
                      
                    </code>
                </pre> 
            </div>
        </div>








<?php
include("includes/footer.php");