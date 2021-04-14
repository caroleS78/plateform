<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210414140930 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE movies_categories (category_id INT NOT NULL, movie_id INT NOT NULL, INDEX IDX_6B05AC9E12469DE2 (category_id), INDEX IDX_6B05AC9E8F93B6FC (movie_id), PRIMARY KEY(category_id, movie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE movie (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, title VARCHAR(255) NOT NULL, director VARCHAR(255) NOT NULL, length INT NOT NULL, date DATE NOT NULL, INDEX IDX_1D5EF26FA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, role JSON DEFAULT NULL, status TINYINT(1) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_movies_list (id INT AUTO_INCREMENT NOT NULL, user_list_id INT DEFAULT NULL, movies VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_BEDA9E4765A30881 (user_list_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE movies_categories ADD CONSTRAINT FK_6B05AC9E12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE movies_categories ADD CONSTRAINT FK_6B05AC9E8F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE movie ADD CONSTRAINT FK_1D5EF26FA76ED395 FOREIGN KEY (user_id) REFERENCES movie (id)');
        $this->addSql('ALTER TABLE user_movies_list ADD CONSTRAINT FK_BEDA9E4765A30881 FOREIGN KEY (user_list_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE movies_categories DROP FOREIGN KEY FK_6B05AC9E12469DE2');
        $this->addSql('ALTER TABLE movies_categories DROP FOREIGN KEY FK_6B05AC9E8F93B6FC');
        $this->addSql('ALTER TABLE movie DROP FOREIGN KEY FK_1D5EF26FA76ED395');
        $this->addSql('ALTER TABLE user_movies_list DROP FOREIGN KEY FK_BEDA9E4765A30881');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE movies_categories');
        $this->addSql('DROP TABLE movie');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE user_movies_list');
    }
}
