<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240516122141 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        
        $this->addSql("INSERT INTO `adv_role` (`id`, `nom`) VALUES
        (2, 'Administrateur'),
        (3, 'Editeur');");

        $this->addSql("INSERT INTO `adv_statut` (`id`, `nom`) VALUES
        (2, 'Non lue'),
        (3, 'En cours'),
        (4, 'Annulée'),
        (5, 'Acceptée');");

        $this->addSql("INSERT INTO `adv_user` (`id`, `nom`, `prénom`, `mail`, `téléphone`, `mdp`, `adv_role_id`) VALUES
(2, 'PITHION', 'Sara', 'sara.pithion@hotmail.fr', '0055444333', 'Sipass', 2),
(3, 'Durand', 'Joelle', 'durand.joelle@mail.fr', '06656655443', 'Sipass', 3);");
       
        $this->addSql("INSERT INTO `adv_voyage` (`id`, `duree`, `date_depart`, `date_fin`, `url_image`, `resume`, `nombre_pers_min`, `nombre_pers_max`, `prix`, `adv_user_id`) VALUES
(2, 12, '2024-05-19 23:06:38', '2024-05-30 23:06:38', 'https://unsplash.com/fr/photos/photographie-aerienne-dimmeubles-de-grande-hauteur-eclaires-de-la-ville-a-laube-01hH6y7oZFk', 'Venez découvrir Séoul, cette ville riche en histoire!', 10, 30, 1200, NULL);");

        $this->addSql("INSERT INTO `adv_reservation` (`id`, `message`, `adv_voyage_id`, `adv_user_id`, `adv_statut_id`) VALUES
(3, 'Vous avez choisi le voyage découverte à Séoul en Corée du Sud. Bon choix!', 2, NULL, 5);");

        
    }
    }
    




