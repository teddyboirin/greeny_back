<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200703145636 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE waiting (defis_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_BEFA86BD4208F841 (defis_id), INDEX IDX_BEFA86BDA76ED395 (user_id), PRIMARY KEY(defis_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE waiting ADD CONSTRAINT FK_BEFA86BD4208F841 FOREIGN KEY (defis_id) REFERENCES defis (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE waiting ADD CONSTRAINT FK_BEFA86BDA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_defis RENAME TO accomplished');

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE defis_user');
    }
}
