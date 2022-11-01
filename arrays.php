<?php
declare(strict_types=1);

/* MÖNSTER-BIBLIOTEK
Vävmönster i form av multidimensionella arrayer. */

    $twoshaft = [
        [0, 1, 0, 1, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 0, 1, 0],
        [0, 1, 0, 1, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 0, 1, 0],
        [0, 1, 0, 1, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 0, 1, 0],
        [0, 1, 0, 1, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 0, 1, 0]

    ];


    $twill = [
        [0, 0, 1, 1, 0, 0, 1, 1],
        [0, 1, 1, 0, 0, 1, 1, 0],
        [1, 1, 0, 0, 1, 1, 0, 0],
        [1, 0, 0, 1, 1, 0, 0, 1],
        [0, 0, 1, 1, 0, 0, 1, 1],
        [0, 1, 1, 0, 0, 1, 1, 0],
        [1, 1, 0, 0, 1, 1, 0, 0],
        [1, 0, 0, 1, 1, 0, 0, 1]

    ];


    $satin = [
        [0, 1, 0, 0, 0, 0, 1, 0],
        [0, 0, 0, 0, 1, 0, 0, 0],
        [0, 0, 1, 0, 0, 0, 0, 1],
        [1, 0, 0, 0, 0, 1, 0, 0],
        [0, 0, 0, 1, 0, 0, 0, 0],
        [0, 1, 0, 0, 0, 0, 1, 0],
        [0, 0, 0, 0, 1, 0, 0, 0],
        [0, 0, 1, 0, 0, 0, 0, 1]

    ];


    $basket = [
        [0, 0, 1, 1, 0, 0, 1, 1],
        [1, 1, 0, 0, 1, 1, 0, 0],
        [0, 0, 1, 1, 0, 0, 1, 1],
        [1, 1, 0, 0, 1, 1, 0, 0],
        [0, 0, 1, 1, 0, 0, 1, 1],
        [1, 1, 0, 0, 1, 1, 0, 0],
        [0, 0, 1, 1, 0, 0, 1, 1],
        [1, 1, 0, 0, 1, 1, 0, 0]

    ];

    /* ASSOCIATIV ARRAY MED LÄNKAR TILL ARTIKLAR I ÄMNET.
     $articles = "$article" => "$link" */

$articles = [
    "Before Computers, People Programmed Looms" =>
     "https://www.theatlantic.com/technology/archive/2014/09/before-computers-people-programmed-looms/380163/",

     "Weaving and Coding" =>
     "https://nyujournalismprojects.org/pixel/weaving-paved-the-way-for-computer-coders/",

     "About Ada Lovelace" =>
     "https://kodboken.se/start/for-pedagoger-och-vuxna/mot-en-kodare/ada-lovelace",

     "Programming Patterns: The story of the Jacquard Loom" =>
     "https://www.scienceandindustrymuseum.org.uk/objects-and-stories/jacquard-loom"
];

    /* ASSOCIATIV ARRAY MED BILDER.
     $articles = "$article" => "$link" */

$images = [
    "card-maker" => "./images/card-maker.jpeg",
    "Jacquard Loom" => "./images/jacquard-loom.png",
    "Jacquard Loom punchcards" => "./images/punchcards.jpg",
    "ibm punchcards" => "./images/ibm_punchcards_600.jpg"
];
