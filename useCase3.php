<?php

    class TextTitle {
        public string $title;
        public string $text;

        public function __construct ($title, $text)
        {
            $this->title = $title;
            $this->text = $text;
        }

        public function getTitle (){
            return $this->title;
        }

        public function getText (){
            return $this->text;
        }
    }

    class ArticleClass extends TextTitle {
        public function article(){
            echo '<h1>'.$this->getTitle().'</h1>';
            echo '<p>'.$this->getText().'</p>';
        }
    }

    class AdsClass extends TextTitle {
        public function ads(){
            echo '<h1>'.mb_strtoupper($this->getTitle()).'</h1>';
            echo '<p>'.$this->getText().'</p>';
        }
    }

    class VacancieClass extends TextTitle {
        public function vacancie (){
            echo '<h1>'.$this->getTitle().' - postulez maintenant ! </h1>';
            echo '<p>'.$this->getText().'</p>';
        }
    }

    $tab = 
    array(
        array(
            "titre" => "Les Effets Positifs de la Méditation sur le Bien-Être Mental", 
            "texte" => "La méditation offre un refuge paisible dans un monde agité. Des études récentes confirment ses bienfaits sur la santé mentale, réduisant le stress et l'anxiété. En pratiquant régulièrement, vous pouvez cultiver une clarté mentale et une résilience émotionnelle. Essayez-la pour une vie plus équilibrée et épanouissante."
        ),
        array(
            "titre" => "L'Importance de la Consommation Responsable dans un Monde en Mutation", 
            "texte" => "La consommation responsable est une nécessité dans notre ère de changements climatiques et sociaux. Chaque choix compte : du commerce équitable aux produits durables. Adoptez une approche consciente pour réduire votre empreinte écologique et soutenir des pratiques éthiques. Ensemble, nous pouvons façonner un avenir plus durable."
        ),
        array(
            "titre" => "Opportunité de Carrière: Développeur Web Junior", 
            "texte" => "Rejoignez notre équipe dynamique en tant que Développeur Web Junior. Vous aurez l'opportunité de travailler sur des projets passionnants, d'apprendre aux côtés de professionnels expérimentés et de développer vos compétences en programmation. Si vous êtes passionné par la technologie et désireux de faire progresser votre carrière, postulez dès maintenant !"
        ),
        array(
            "titre" => "Découvrez la Saveur Authentique de Nos Produits Artisanaux", 
            "texte" => "Savourez l'authenticité avec nos produits artisanaux. De délicieuses confitures faites maison aux pains fraîchement cuits, chaque bouchée est une expérience culinaire inoubliable. Faites un voyage gustatif avec nous et redécouvrez le vrai goût des aliments. Visitez-nous aujourd'hui pour une expérience sensorielle incomparable."
        )
    );

    $article1 = new ArticleClass ($tab[0]['titre'],$tab[0]['texte']);
    $article2 = new ArticleClass ($tab[1]['titre'],$tab[1]['texte']);
    $article1->article();
    $article2->article();
  
    $article3 = new VacancieClass ($tab[2]['titre'],$tab[2]['texte']);
    $article3->vacancie();

    $article4 = new AdsClass ($tab[3]['titre'],$tab[3]['texte']);
    $article4->ads();

?>