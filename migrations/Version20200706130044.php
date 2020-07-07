<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200706130044 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE defis ADD niveau VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accomplished (user_id INT NOT NULL, defis_id INT NOT NULL, INDEX IDX_75C39D03A76ED395 (user_id), INDEX IDX_75C39D034208F841 (defis_id), PRIMARY KEY(user_id, defis_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE waiting (defis_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_BEFA86BD4208F841 (defis_id), INDEX IDX_BEFA86BDA76ED395 (user_id), PRIMARY KEY(defis_id, user_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE accomplished ADD CONSTRAINT FK_75C39D034208F841 FOREIGN KEY (defis_id) REFERENCES defis (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE accomplished ADD CONSTRAINT FK_75C39D03A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE waiting ADD CONSTRAINT FK_BEFA86BD4208F841 FOREIGN KEY (defis_id) REFERENCES defis (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE waiting ADD CONSTRAINT FK_BEFA86BDA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE defis_user');
        $this->addSql('DROP TABLE user_defis');
        $this->addSql('ALTER TABLE defis DROP niveau');
    }
}
