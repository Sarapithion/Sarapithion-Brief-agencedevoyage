<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240506120510 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adv_voyage_adv_pays (adv_voyage_id INT NOT NULL, adv_pays_id INT NOT NULL, INDEX IDX_8DDE267D270DA65A (adv_voyage_id), INDEX IDX_8DDE267D16E69A11 (adv_pays_id), PRIMARY KEY(adv_voyage_id, adv_pays_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE adv_voyage_adv_categorie (adv_voyage_id INT NOT NULL, adv_categorie_id INT NOT NULL, INDEX IDX_FCD39640270DA65A (adv_voyage_id), INDEX IDX_FCD3964048A74C36 (adv_categorie_id), PRIMARY KEY(adv_voyage_id, adv_categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE adv_voyage_adv_pays ADD CONSTRAINT FK_8DDE267D270DA65A FOREIGN KEY (adv_voyage_id) REFERENCES adv_voyage (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE adv_voyage_adv_pays ADD CONSTRAINT FK_8DDE267D16E69A11 FOREIGN KEY (adv_pays_id) REFERENCES adv_pays (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE adv_voyage_adv_categorie ADD CONSTRAINT FK_FCD39640270DA65A FOREIGN KEY (adv_voyage_id) REFERENCES adv_voyage (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE adv_voyage_adv_categorie ADD CONSTRAINT FK_FCD3964048A74C36 FOREIGN KEY (adv_categorie_id) REFERENCES adv_categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE adv_reservation ADD adv_voyage_id INT DEFAULT NULL, ADD adv_user_id INT DEFAULT NULL, ADD adv_statut_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE adv_reservation ADD CONSTRAINT FK_C4D60343270DA65A FOREIGN KEY (adv_voyage_id) REFERENCES adv_voyage (id)');
        $this->addSql('ALTER TABLE adv_reservation ADD CONSTRAINT FK_C4D60343176C0BC0 FOREIGN KEY (adv_user_id) REFERENCES adv_user (id)');
        $this->addSql('ALTER TABLE adv_reservation ADD CONSTRAINT FK_C4D60343B9E47BF1 FOREIGN KEY (adv_statut_id) REFERENCES adv_statut (id)');
        $this->addSql('CREATE INDEX IDX_C4D60343270DA65A ON adv_reservation (adv_voyage_id)');
        $this->addSql('CREATE INDEX IDX_C4D60343176C0BC0 ON adv_reservation (adv_user_id)');
        $this->addSql('CREATE INDEX IDX_C4D60343B9E47BF1 ON adv_reservation (adv_statut_id)');
        $this->addSql('ALTER TABLE adv_user ADD adv_role_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE adv_user ADD CONSTRAINT FK_CD75A8296601FAF9 FOREIGN KEY (adv_role_id) REFERENCES adv_role (id)');
        $this->addSql('CREATE INDEX IDX_CD75A8296601FAF9 ON adv_user (adv_role_id)');
        $this->addSql('ALTER TABLE adv_voyage ADD adv_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE adv_voyage ADD CONSTRAINT FK_EDDDFE2F176C0BC0 FOREIGN KEY (adv_user_id) REFERENCES adv_user (id)');
        $this->addSql('CREATE INDEX IDX_EDDDFE2F176C0BC0 ON adv_voyage (adv_user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE adv_voyage_adv_pays DROP FOREIGN KEY FK_8DDE267D270DA65A');
        $this->addSql('ALTER TABLE adv_voyage_adv_pays DROP FOREIGN KEY FK_8DDE267D16E69A11');
        $this->addSql('ALTER TABLE adv_voyage_adv_categorie DROP FOREIGN KEY FK_FCD39640270DA65A');
        $this->addSql('ALTER TABLE adv_voyage_adv_categorie DROP FOREIGN KEY FK_FCD3964048A74C36');
        $this->addSql('DROP TABLE adv_voyage_adv_pays');
        $this->addSql('DROP TABLE adv_voyage_adv_categorie');
        $this->addSql('ALTER TABLE adv_voyage DROP FOREIGN KEY FK_EDDDFE2F176C0BC0');
        $this->addSql('DROP INDEX IDX_EDDDFE2F176C0BC0 ON adv_voyage');
        $this->addSql('ALTER TABLE adv_voyage DROP adv_user_id');
        $this->addSql('ALTER TABLE adv_user DROP FOREIGN KEY FK_CD75A8296601FAF9');
        $this->addSql('DROP INDEX IDX_CD75A8296601FAF9 ON adv_user');
        $this->addSql('ALTER TABLE adv_user DROP adv_role_id');
        $this->addSql('ALTER TABLE adv_reservation DROP FOREIGN KEY FK_C4D60343270DA65A');
        $this->addSql('ALTER TABLE adv_reservation DROP FOREIGN KEY FK_C4D60343176C0BC0');
        $this->addSql('ALTER TABLE adv_reservation DROP FOREIGN KEY FK_C4D60343B9E47BF1');
        $this->addSql('DROP INDEX IDX_C4D60343270DA65A ON adv_reservation');
        $this->addSql('DROP INDEX IDX_C4D60343176C0BC0 ON adv_reservation');
        $this->addSql('DROP INDEX IDX_C4D60343B9E47BF1 ON adv_reservation');
        $this->addSql('ALTER TABLE adv_reservation DROP adv_voyage_id, DROP adv_user_id, DROP adv_statut_id');
    }
}
