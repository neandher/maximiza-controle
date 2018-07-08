<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180707224100 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('INSERT INTO uf (name, code, region) VALUES (\'Acre\', \'AC\', \'Norte\');
                        INSERT INTO uf (name, code, region) VALUES (\'Alagoas\', \'AL\', \'Nordeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Amapá\', \'AP\', \'Norte\');
                        INSERT INTO uf (name, code, region) VALUES (\'Amazonas\', \'AM\', \'Norte\');
                        INSERT INTO uf (name, code, region) VALUES (\'Bahia\', \'BA\', \'Nordeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Ceará\', \'CE\', \'Nordeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Distrito Federal\', \'DF\', \'Centro-Oeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Espírito Santo\', \'ES\', \'Sudeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Goiás\', \'GO\', \'Centro-Oeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Maranhão\', \'MA\', \'Nordeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Mato Grosso\', \'MT\', \'Centro-Oeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Mato Grosso do Sul\', \'MS\', \'Centro-Oeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Minas Gerais\', \'MG\', \'Sudeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Pará\', \'PA\', \'Nordeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Paraíba\', \'PB\', \'Nordeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Paraná\', \'PR\', \'Sul\');
                        INSERT INTO uf (name, code, region) VALUES (\'Pernambuco\', \'PE\', \'Nordeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Piauí\', \'PI\', \'Nordeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Rio de Janeiro\', \'RJ\', \'Sudeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Rio Grande do Norte\', \'R\', \'Nordeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Rio Grande do Sul\', \'RS\', \'Sul\');
                        INSERT INTO uf (name, code, region) VALUES (\'Rondônia\', \'RO\', \'Norte\');
                        INSERT INTO uf (name, code, region) VALUES (\'Roraima\', \'RR\', \'Norte\');
                        INSERT INTO uf (name, code, region) VALUES (\'Santa Catarina\', \'SC\', \'Sul\');
                        INSERT INTO uf (name, code, region) VALUES (\'São Paulo\', \'SP\', \'Sudeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Sergipe\', \'SE\', \'Nordeste\');
                        INSERT INTO uf (name, code, region) VALUES (\'Tocantins\', \'TO\', \'Norte\');');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
