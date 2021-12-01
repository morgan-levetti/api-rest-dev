<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211201124346 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wine_red ADD origin VARCHAR(255) NOT NULL, ADD liters INT NOT NULL, ADD published_date DATETIME NOT NULL, ADD updated_date DATETIME NOT NULL, ADD prices INT NOT NULL, ADD wine_year INT NOT NULL, ADD phone_number INT DEFAULT NULL, ADD email VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wine_red DROP origin, DROP liters, DROP published_date, DROP updated_date, DROP prices, DROP wine_year, DROP phone_number, DROP email');
    }
}
