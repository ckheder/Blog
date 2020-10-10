<?php

// cell qui va afficher sur la div de droite sur le page d'accueil la liste des catégories + un lien permettant de faire une recherche par catégories

declare(strict_types=1);

namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Tags cell
 */
class TagsCell extends Cell
{
    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];


    /**
     * Méthode Display
     *
     * Récupération de la liste des catégories
     */
        public function display()
    {
        $this->loadModel('Tags');

<<<<<<< HEAD
        $list_tags = $this->Tags->find()->select(['categorie']);
=======
        $list_tags = $this->Tags->find()->select(['titre']);
>>>>>>> cb6315eada19c4ce4bb8f6f564ffdb70a0c3e37f

        $this->set('tags', $list_tags);
    }
}
