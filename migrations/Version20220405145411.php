<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220405145411 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_articlee ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE blog_articlee ADD CONSTRAINT FK_3F54A01E12469DE2 FOREIGN KEY (category_id) REFERENCES blog_categoryy (id)');
        $this->addSql('CREATE INDEX IDX_3F54A01E12469DE2 ON blog_articlee (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_articlee DROP FOREIGN KEY FK_3F54A01E12469DE2');
        $this->addSql('DROP INDEX IDX_3F54A01E12469DE2 ON blog_articlee');
        $this->addSql('ALTER TABLE blog_articlee DROP category_id, CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE content content LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE blog_categoryy CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
