<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
    // this up() migration is auto-generated, please modify it to your needs
final class Version20230324174733 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql('DELETE FROM migration_versions WHERE version NOT LIKE "%20230324160441" AND version NOT LIKE "%20230324174733"');
    }

}

