<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200920195956 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE app_users_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE app_users (id INT NOT NULL, username VARCHAR(25) NOT NULL, password VARCHAR(64) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE property ADD image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE property ADD updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE app_users_id_seq CASCADE');
        $this->addSql('DROP TABLE app_users');
        $this->addSql('ALTER TABLE property DROP image');
        $this->addSql('ALTER TABLE property DROP updated_at');
    }
}
