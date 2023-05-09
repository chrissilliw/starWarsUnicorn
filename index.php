<?php
declare(strict_types=1);

class Unicorn {
    private $name = "";
    private $color = "pink";

    function __construct($id, $name, $color = "pink", $title) {
        $this->id = $id;
        $this->name = $name;
        $this->color = $color;
        $this->title = $title;
    }

    function setName(string $n) {
        $this-> name = $n;
    }

    function getMessage() {
        return (string)"<p class='single_unicorn'>Unicorn <strong>{$this->name}</strong> says hello I am <strong>{$this->color}</strong> and I'm a <strong>{$this->title}</strong><p>";
    }

    function getId() {
        return (int) $this->id;
    }

    function getName() {
        return (string) $this->name;
    }

    function getColor() {
        return (string) $this-> color;
    }

    function getTitle() {
        return (string) $this->title;
    }
}

$luke = new Unicorn(1, "Luke Skywalker", "white", "Jedi");
$anakin = new Unicorn(2, "Anakin Skywalker", "white", "Jedi");
$han = new Unicorn(3, "Han Solo", "blue", "Smuggler");
$vader = new Unicorn(4, "Darth Vader","black", "Sith Lord");
$leia = new Unicorn(5, "Leia", "fuchsia", "Princess");
$obi = new Unicorn(6, "Obi Wan", "white", "Jedi Master");
$yoda = new Unicorn(7, "Yoda", "white", "Jedi Master");
$boba = new Unicorn(8, "Boba Fett", "grey", "Bounty Hunter");
$chewbacca = new Unicorn(9, "Chewbacca", "gold", "Smuggler");

$character_array = [$luke, $anakin, $han, $vader, $leia, $obi, $yoda, $boba, $chewbacca];
$unicorn_colors = [];

class RenderUnicorn {

    function renderMessage(Unicorn $unicorn) {
        return "<p class='single_unicorn'>Unicorn<p>";
    }

    function renderAllMessages(array $character_array){
        foreach($character_array as $character) {
           echo "<p class='single_unicorn'>Unicorn <strong>{$character->getName()}</strong> says hello I am <strong>{$character->getColor()}</strong> and I'm a <strong>{$character->getTitle()}</strong><p>";
        }
    }

    function renderOrderedList(array $character_array) {
        foreach($character_array as $key => $character) {
            echo "<li>
                    <a href='index.php?id={$character->getId()}'>
                        {$character->getName()}
                    </a>
                </li>";
        }
    }

    function renderAllColors(array $character_array, array $unicorn_colors) {
        foreach($unicorn_colors as $color) {
            $color_count = 0;
            foreach($character_array as $character) {
                if($color === $character->getColor()) {
                    $color_count++;
                }
            }
            echo "$color : $color_count <br>";
        }
    }

    function renderSingleUnicornInfo($character_array, $chosen_unicorn) {

    }
};

$chosen_unicorn = [
    "name" => "-",
    "color" => "-"
];

/*************  Behöver hjälp hära!  **************/

$chosen_id = $_GET['id'];

foreach($character_array as $find_character) {
    if($find_character->getId() === $chosen_id) {
        $chosen_unicorn = $find_character;

    }
}

/************************************************* */

foreach($character_array as $character) {
    if( !in_array($character->getColor(), $unicorn_colors)) {
        array_push($unicorn_colors, $character->getColor());
    } 
}

foreach($character_array as $character) {
    if( in_array($character->getColor(), $unicorn_colors )) {

    }
}

print_r($unicorn_colors);

$renderer = new RenderUnicorn();

include "view.php";

?>