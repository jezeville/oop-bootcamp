<?php


class Groupe {

    public array $groupe1;
    public array $groupe2;

    public function __construct($groupe1, $groupe2)
    {
        $this->groupe1 = $groupe1;
        $this->groupe2 = $groupe2;
    }


    public function moyenne($groupe)
    {
        $cpt = 0;
        $total = 0;
        while($cpt < count($groupe)){
            $total += $groupe[$cpt]['note'];
            $cpt++;
        }
        return $total/count($groupe);
    } 

    public function deplacerEleve($nomEleve, $groupeDepart, $groupeArrivee) {
        foreach ($groupeDepart as $key => $eleve) {
            if ($eleve['nom'] === $nomEleve) {
                $eleveDeplace = $groupeDepart[$key];
                unset($groupeDepart[$key]);
                array_push($groupeArrivee, $eleveDeplace);
                $this->groupe1 = $groupeDepart;
                $this->groupe2 = $groupeArrivee;
                return;
            }
        }
    }

    public function deplacermax ($groupea , $groupeb)
    {
        $scoreMax = 0;
        $studentMax = null;
        foreach ($groupea as $key => $student) {
            if ($student['note'] > $scoreMax) {
                $studentMax = $student;
                $scoreMax = $student['note'];
            }
        }
        if ($studentMax !== null) {
            $this->deplacerEleve($studentMax['nom'], $groupea, $groupeb);
        }
    }
}

$a = array(
    array('nom'=>'jean','note'=> 10),
    array('nom'=>'jeremy','note'=> 12),
    array('nom'=>'marie','note'=> 11)
);
$b = array(
    array('nom'=>'herna','note'=> 7),
    array('nom'=>'gear','note'=> 16),
    array('nom'=>'fegt','note'=> 3)
);

$groupeTest = new Groupe ($a, $b);

$moyenneGroupe1 = $groupeTest->moyenne($groupeTest->groupe1);
echo "Moyenne Groupe 1: $moyenneGroupe1<br>";

$moyenneGroupe2 = $groupeTest->moyenne($groupeTest->groupe2);
echo "Moyenne Groupe 2: $moyenneGroupe2<br>";


$groupeTest->deplacermax($groupeTest->groupe1 , $groupeTest->groupe2);
$groupeTest->deplacermax($groupeTest->groupe2 , $groupeTest->groupe1);


$moyenneGroupe1 = $groupeTest->moyenne($groupeTest->groupe1);
echo "Moyenne Groupe 1: $moyenneGroupe1<br>";

$moyenneGroupe2 = $groupeTest->moyenne($groupeTest->groupe2);
echo "Moyenne Groupe 2: $moyenneGroupe2<br>";


?>