<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241223213105 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation ADD voiture_id INT NOT NULL, ADD facture_id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955181A8BA FOREIGN KEY (voiture_id) REFERENCES voiture (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849557F2DEE08 FOREIGN KEY (facture_id) REFERENCES facture (id)');
        $this->addSql('CREATE INDEX IDX_42C84955181A8BA ON reservation (voiture_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_42C849557F2DEE08 ON reservation (facture_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955181A8BA');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849557F2DEE08');
        $this->addSql('DROP INDEX IDX_42C84955181A8BA ON reservation');
        $this->addSql('DROP INDEX UNIQ_42C849557F2DEE08 ON reservation');
        $this->addSql('ALTER TABLE reservation DROP voiture_id, DROP facture_id');
    }
}
