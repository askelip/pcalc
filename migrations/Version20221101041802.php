<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221101041802 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // initial routine and task data
        $this->addSql("INSERT INTO `routine` VALUES (1,'Morning'),(2,'Noon'),(3,'Afternoon'),(4,'Evening'),(5,'Flexible');");
        $this->addSql("INSERT INTO `task` VALUES (1,1,'Wake up the kids',5),(2,1,'Help the kids brush their teeth',5),(3,1,'Help the kids get dressed',5),(4,1,'Help the kids put on their shoes',5),(5,1,'Prepare breakfast',10),(6,1,'Prepare lunch bags',10),(7,1,'Eat breakfast with the kids',15),(8,1,'Take the kids to kindergarten and school',30),(9,5,'Put a load of dishes',10),(10,1,'Commute to work',30),(11,5,'Work',300),(12,3,'Pick up the kids from kindergarten and school',30),(13,3,'Take the kids to the playground and extracurricular activities',120),(14,4,'Prepare dinner',15),(15,4,'Eat dinner with the kids',30),(16,5,'Put a load of washing machine',5),(17,4,'Give the kids a bath',15),(18,4,'Help the kids change to pyjamas',10),(19,4,'Help the kids get undressed',10),(20,4,'Help the kids brush their teeth',10),(21,1,'Help the kids comb their hair',10),(22,4,'Read the kids a bed time story',30),(23,1,'Remind the kids to use the toilet',5),(24,4,'Remind the kids to use the toilet',5),(25,5,'Make the beds',10),(26,5,'Wash the kitchen floor',15),(27,3,'Commute back home',30),(28,5,'Downtime',60),(29,1,'Negotiation time with the kids',15),(30,3,'Negotiation time with the kids',15),(31,4,'Negotiation time with the kids',15),(32,4,'Arrange toys in their place after play',15),(33,4,'Set the dinner table',5),(34,1,'Pack the kids bags for the day',10),(35,5,'Unpack the dishwasher',10),(36,5,'Exercise',30),(37,5,'Do errands',30),(38,5,'Take a shower',15);");
    }

    public function down(Schema $schema): void
    {
        // empty initial routine and task data
        $this->addSql('TRUNCATE `task`;');
        $this->addSql('TRUNCATE `routine`;');
    }
}
