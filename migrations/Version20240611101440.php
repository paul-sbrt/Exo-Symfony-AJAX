<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240611101440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE coktail (id INT AUTO_INCREMENT NOT NULL, fruits_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_6D0119945A768E2C (fruits_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE couleur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fruit (id INT AUTO_INCREMENT NOT NULL, couleurs_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_A00BD2975ED47289 (couleurs_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE coktail ADD CONSTRAINT FK_6D0119945A768E2C FOREIGN KEY (fruits_id) REFERENCES fruit (id)');
        $this->addSql('ALTER TABLE fruit ADD CONSTRAINT FK_A00BD2975ED47289 FOREIGN KEY (couleurs_id) REFERENCES couleur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coktail DROP FOREIGN KEY FK_6D0119945A768E2C');
        $this->addSql('ALTER TABLE fruit DROP FOREIGN KEY FK_A00BD2975ED47289');
        $this->addSql('DROP TABLE coktail');
        $this->addSql('DROP TABLE couleur');
        $this->addSql('DROP TABLE fruit');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
