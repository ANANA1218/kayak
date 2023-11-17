<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231116140329 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande CHANGE date_enregistrement date_enregistrement DATETIME NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE civilite civilite VARCHAR(255) NOT NULL, CHANGE date_enregistrement date_enregistrement DATETIME NOT NULL');
        $this->addSql('ALTER TABLE vehicule CHANGE date_enregistrement date_enregistrement DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande CHANGE date_enregistrement date_enregistrement DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE civilite civilite VARCHAR(100) NOT NULL, CHANGE date_enregistrement date_enregistrement DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE vehicule CHANGE date_enregistrement date_enregistrement DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }
}
