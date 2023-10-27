<?php 
$team_1_data = ["Grenadye", 3]; //les elements non pas un nom  
echo $team_1_data[0];

$team_1_data = [ //pour mieux differencier et donner des nom au elemets du tableau
    "name" => "Grenadye", 
    "score" => 3 ,
    "url" => "www.whataver.com"
];

//declaration d'un autre tableau
$team_2_data = [
    "name" => "Canadien", 
    "score" => 2 ,
    "url" => "www.don/t/matter.com"
];
var_dump($team_2_data); //sert a afficher un tableau avec tout ses variables et son contenu
print_r($team_2_data);
echo($team_2_data["name"]); //un tableau associatif(ou les elements declares on des noms) ne donne plus acces a l'index des element ex: echo($team_2_data[0] ne fonctionnera pas)
echo "<br> <br>";

foreach( $team_2_data as $data )
{
    echo "<br> <br>";
    echo $data;
} 
 
//declaration d'un autre tableau
$team_3_data = [
    "name" => "Mali", 
    "score" => 1 ,
    "url" => "www.Mali.com"
];

$teams = [$team_1_data, $team_2_data, $team_3_data];
var_dump($teams);


foreach ($teams as $element)
{
    echo "<br> <br>";
    
    if ($element["score"] >= 2) {
        //var_dump($element);  fonctionne

        //echo #fonctionne
        //"<ul> 
       // <li>". $element['name'] ."</li>
        //</ul>";
        ?>

        <!-- php dans html -->
        <ul>
        <li> l'equipe <?php echo $element['name'] ?> a score <?php echo $element['score'] ?> points </li> 
        </ul>


        <?php
    }
}

//crud (create, read, update, delete) 
$team_4_data = [ 
    'name' => 'Argentine',
    'score' => 4,
    'url' => 'www.argentin.com'

];

function showteams ($teams) { //paramatre 
    return var_dump($teams); //arguments
}

array_push($teams,$team_4_data); //array_push ajoute un elements a la fin du tableau 
 showteams($teams);

?>


<table border = "1"> 
    <thead>
    
    <td> Nom </td>
    <td> Score </td>
    <td> URL </td>
    
    </thead>
<tbody>


<?php




foreach($teams as $teamData) 
{
    ?>
    <tr>
        <td> <?php echo $teamData["name"]; ?> </td>
        <td> <?php echo $teamData["score"]; ?> </td>
        <td> <?php echo $teamData["url"]; ?> </td>
    </tr>
</tbody>
    <?php
}
?> 
</table>


<?php 

//fonction read one pour afficher un seul
//devoir 
function showTeam($teams) {
    return var_dump($teams["0"]);
}
showTeam($teams);



//fonction ajouter un team
function addteams($teams, $name, $score, $url) 
{
    $newTeam = [
        'name' => $name,
        'score' => $score,
        'url' => $url
    ];
    array_push($teams, $newTeam);
}

$newTeam = ["Togo", 2, "www.Togo.com"];
addteams($teams, $newTeam);
showteams($teams);
?>