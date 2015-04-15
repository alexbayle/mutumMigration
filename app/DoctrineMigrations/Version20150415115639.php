<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150415115639 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6671AC1E46');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66F47461EB');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66ADA7E5F3');
        $this->addSql('DROP INDEX UNIQ_23A0E6671AC1E46 ON article');
        $this->addSql('ALTER TABLE article DROP id, CHANGE arti_prod_id arti_prod_id INT NOT NULL, CHANGE arti_cat arti_cat INT NOT NULL, CHANGE arti_state arti_state INT NOT NULL');
//        $this->addSql('ALTER TABLE article DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE article ADD PRIMARY KEY (arti_prod_id)');
        $this->addSql('ALTER TABLE buy DROP v1, CHANGE buy_id buy_id INT NOT NULL');
        $this->addSql('ALTER TABLE category_article DROP v1');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E6387CA9D3A7');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638E5A0821D');
        $this->addSql('DROP INDEX IDX_4C62E6387CA9D3A7 ON contact');
        $this->addSql('ALTER TABLE contact DROP id, DROP v1, CHANGE cont_user_id_a cont_user_id_a INT NOT NULL, CHANGE cont_user_id_b cont_user_id_b INT NOT NULL, CHANGE cont_status cont_status CHAR(1) NOT NULL');
//        $this->addSql('ALTER TABLE contact DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE contact ADD PRIMARY KEY (cont_user_id_a, cont_user_id_b)');
        $this->addSql('ALTER TABLE join_community CHANGE join_status join_status CHAR(1) NOT NULL');
        $this->addSql('ALTER TABLE located_product DROP FOREIGN KEY FK_B005469C4F70F8DF');
        $this->addSql('ALTER TABLE located_product DROP FOREIGN KEY FK_B005469C59F4B771');
        $this->addSql('DROP INDEX IDX_B005469C4F70F8DF ON located_product');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F8EFFBDF9');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FEA1E59A6');
        $this->addSql('ALTER TABLE message CHANGE mess_user_id mess_user_id INT NOT NULL, CHANGE mess_disc_id mess_disc_id INT NOT NULL');
        $this->addSql('ALTER TABLE notification_cat CHANGE notc_id notc_id INT NOT NULL');
        $this->addSql('ALTER TABLE notification_mail DROP FOREIGN KEY FK_E91AE77239F8310B');
        $this->addSql('ALTER TABLE notification_mail CHANGE notm_id notm_id INT NOT NULL');
        $this->addSql('ALTER TABLE offer CHANGE offe_id offe_id INT NOT NULL');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD6EB6CE7D');
        $this->addSql('ALTER TABLE product DROP v1, CHANGE prod_user_id prod_user_id INT NOT NULL');
        $this->addSql('ALTER TABLE request DROP INDEX UNIQ_3B978F9F628962E0, ADD INDEX requ_discussion (requ_discussion)');
        $this->addSql('ALTER TABLE request DROP INDEX UNIQ_3B978F9F8C9B231B, ADD INDEX requ_lender_nota_id (requ_lender_nota_id)');
        $this->addSql('ALTER TABLE request DROP INDEX UNIQ_3B978F9F22F72469, ADD INDEX requ_borrower_nota_id (requ_borrower_nota_id)');
        $this->addSql('ALTER TABLE request DROP FOREIGN KEY FK_3B978F9FD2B7A31E');
        $this->addSql('ALTER TABLE request DROP FOREIGN KEY FK_3B978F9F21D9FE59');
        $this->addSql('ALTER TABLE request DROP FOREIGN KEY FK_3B978F9F213A8A23');
        $this->addSql('ALTER TABLE request DROP FOREIGN KEY FK_3B978F9F628962E0');
        $this->addSql('ALTER TABLE request DROP FOREIGN KEY FK_3B978F9FE6308069');
        $this->addSql('ALTER TABLE request DROP FOREIGN KEY FK_3B978F9F8C9B231B');
        $this->addSql('ALTER TABLE request DROP FOREIGN KEY FK_3B978F9F22F72469');
        $this->addSql('ALTER TABLE request DROP v1, CHANGE requ_borrower_id requ_borrower_id INT NOT NULL, CHANGE requ_prod_id requ_prod_id INT NOT NULL, CHANGE requ_discussion requ_discussion INT NOT NULL, CHANGE requ_status requ_status INT NOT NULL');
        $this->addSql('CREATE INDEX requ_next ON request (requ_prol_id)');
        $this->addSql('CREATE INDEX requ_caut_id ON request (requ_caut_id)');
        $this->addSql('ALTER TABLE request_status DROP v1');
        $this->addSql('ALTER TABLE research DROP FOREIGN KEY FK_57EB50C22FA9F48F');
        $this->addSql('ALTER TABLE research DROP FOREIGN KEY FK_57EB50C27CCC28DA');
        $this->addSql('ALTER TABLE research DROP v1, CHANGE rese_user_id rese_user_id INT NOT NULL, CHANGE rese_cat rese_cat INT NOT NULL');
        $this->addSql('ALTER TABLE session CHANGE sess_session_id sess_session_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE speakers DROP FOREIGN KEY FK_21C01B1E78109495');
        $this->addSql('ALTER TABLE speakers DROP FOREIGN KEY FK_21C01B1E1CF170CA');
        $this->addSql('DROP INDEX IDX_21C01B1E78109495 ON speakers');
        $this->addSql('ALTER TABLE speakers DROP id, CHANGE spea_disc_id spea_disc_id INT NOT NULL, CHANGE spea_user_id spea_user_id INT NOT NULL');
//        $this->addSql('ALTER TABLE speakers DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE speakers ADD PRIMARY KEY (spea_disc_id, spea_user_id)');
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY FK_818CC9D4D46A2FD2');
        $this->addSql('DROP INDEX IDX_818CC9D4D46A2FD2 ON sponsor');
        $this->addSql('ALTER TABLE sponsor DROP id, CHANGE spon_user_id spon_user_id INT NOT NULL');
//        $this->addSql('ALTER TABLE sponsor DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE sponsor ADD PRIMARY KEY (spon_user_id, spon_email)');
//        $this->addSql('ALTER TABLE sponsor_unsubscribe DROP PRIMARY KEY');
//        $this->addSql('ALTER TABLE sponsor_unsubscribe DROP id');
//        $this->addSql('ALTER TABLE sponsor_unsubscribe ADD PRIMARY KEY (spou_email)');
//        $this->addSql('ALTER TABLE user CHANGE user_sponsor_code user_sponsor_code VARCHAR(255) NULL');
//        $this->addSql('ALTER TABLE user CHANGE user_mangopay_id user_mangopay_id INT(11) NULL');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D11799FB5B');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D19C162051');
        $this->addSql('DROP INDEX IDX_723705D19C162051 ON transaction');
        $this->addSql('ALTER TABLE transaction ADD tran_user_id INT NOT NULL, DROP trans_user_id');
        $this->addSql('CREATE INDEX tran_user_id ON transaction (tran_user_id)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6495543718B');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649F2F8A42C');
        $this->addSql('ALTER TABLE user DROP v1, CHANGE user_address user_address INT NOT NULL, CHANGE user_rank user_rank INT NOT NULL, CHANGE user_birthdate user_birthdate DATE NOT NULL, CHANGE user_sex user_sex CHAR(1) NOT NULL, CHANGE user_title user_title VARCHAR(255) NOT NULL, CHANGE user_notation user_notation DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE user DROP user_title');
        $this->addSql('ALTER TABLE virtual_article CHANGE vira_virp_id vira_virp_id INT NOT NULL');
        $this->addSql('ALTER TABLE wishlist CHANGE wish_post_id wish_post_id INT NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');


        $this->addSql('ALTER TABLE article DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE article ADD id INT AUTO_INCREMENT NOT NULL, CHANGE arti_prod_id arti_prod_id INT DEFAULT NULL, CHANGE arti_cat arti_cat INT DEFAULT NULL, CHANGE arti_state arti_state INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6671AC1E46 FOREIGN KEY (arti_prod_id) REFERENCES product (prod_id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66F47461EB FOREIGN KEY (arti_cat) REFERENCES category_article (cata_id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66ADA7E5F3 FOREIGN KEY (arti_state) REFERENCES article_state (arts_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_23A0E6671AC1E46 ON article (arti_prod_id)');
        $this->addSql('ALTER TABLE article ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE buy ADD v1 INT NOT NULL, CHANGE buy_id buy_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE category_article ADD v1 INT NOT NULL');
        $this->addSql('ALTER TABLE contact DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE contact ADD id INT AUTO_INCREMENT NOT NULL, ADD v1 INT NOT NULL, CHANGE cont_user_id_a cont_user_id_a INT DEFAULT NULL, CHANGE cont_user_id_b cont_user_id_b INT DEFAULT NULL, CHANGE cont_status cont_status VARCHAR(1) NOT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E6387CA9D3A7 FOREIGN KEY (cont_user_id_a) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638E5A0821D FOREIGN KEY (cont_user_id_b) REFERENCES user (user_id)');
        $this->addSql('CREATE INDEX IDX_4C62E6387CA9D3A7 ON contact (cont_user_id_a)');
        $this->addSql('ALTER TABLE contact ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE join_community CHANGE join_status join_status VARCHAR(1) NOT NULL');
        $this->addSql('ALTER TABLE message CHANGE mess_user_id mess_user_id INT DEFAULT NULL, CHANGE mess_disc_id mess_disc_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F8EFFBDF9 FOREIGN KEY (mess_user_id) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FEA1E59A6 FOREIGN KEY (mess_disc_id) REFERENCES discussion (disc_id)');
        $this->addSql('ALTER TABLE notification_cat CHANGE notc_id notc_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE notification_mail CHANGE notm_id notm_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE notification_mail ADD CONSTRAINT FK_E91AE77239F8310B FOREIGN KEY (notm_notc_id) REFERENCES notification_cat (notc_id)');
        $this->addSql('ALTER TABLE offer CHANGE offe_id offe_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE product ADD v1 INT NOT NULL, CHANGE prod_user_id prod_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD6EB6CE7D FOREIGN KEY (prod_user_id) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE located_product ADD CONSTRAINT FK_B005469C4F70F8DF FOREIGN KEY (locp_prod_id) REFERENCES product (prod_id)');
        $this->addSql('ALTER TABLE located_product ADD CONSTRAINT FK_B005469C59F4B771 FOREIGN KEY (locp_addr_id) REFERENCES address (addr_id)');
        $this->addSql('CREATE INDEX IDX_B005469C4F70F8DF ON located_product (locp_prod_id)');
        $this->addSql('ALTER TABLE request DROP INDEX requ_discussion, ADD UNIQUE INDEX UNIQ_3B978F9F628962E0 (requ_discussion)');
        $this->addSql('ALTER TABLE request DROP INDEX requ_borrower_nota_id, ADD UNIQUE INDEX UNIQ_3B978F9F22F72469 (requ_borrower_nota_id)');
        $this->addSql('ALTER TABLE request DROP INDEX requ_lender_nota_id, ADD UNIQUE INDEX UNIQ_3B978F9F8C9B231B (requ_lender_nota_id)');
        $this->addSql('DROP INDEX requ_next ON request');
        $this->addSql('DROP INDEX requ_caut_id ON request');
        $this->addSql('ALTER TABLE request ADD v1 INT NOT NULL, CHANGE requ_borrower_id requ_borrower_id INT DEFAULT NULL, CHANGE requ_prod_id requ_prod_id INT DEFAULT NULL, CHANGE requ_discussion requ_discussion INT DEFAULT NULL, CHANGE requ_status requ_status INT DEFAULT NULL');
        $this->addSql('ALTER TABLE request ADD CONSTRAINT FK_3B978F9FD2B7A31E FOREIGN KEY (requ_lender_id) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE request ADD CONSTRAINT FK_3B978F9F21D9FE59 FOREIGN KEY (requ_borrower_id) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE request ADD CONSTRAINT FK_3B978F9F213A8A23 FOREIGN KEY (requ_prod_id) REFERENCES product (prod_id)');
        $this->addSql('ALTER TABLE request ADD CONSTRAINT FK_3B978F9F628962E0 FOREIGN KEY (requ_discussion) REFERENCES discussion (disc_id)');
        $this->addSql('ALTER TABLE request ADD CONSTRAINT FK_3B978F9FE6308069 FOREIGN KEY (requ_status) REFERENCES request_status (reqs_id)');
        $this->addSql('ALTER TABLE request ADD CONSTRAINT FK_3B978F9F8C9B231B FOREIGN KEY (requ_lender_nota_id) REFERENCES notation (nota_id)');
        $this->addSql('ALTER TABLE request ADD CONSTRAINT FK_3B978F9F22F72469 FOREIGN KEY (requ_borrower_nota_id) REFERENCES notation (nota_id)');
        $this->addSql('ALTER TABLE request_status ADD v1 INT NOT NULL');
        $this->addSql('ALTER TABLE research ADD v1 INT NOT NULL, CHANGE rese_user_id rese_user_id INT DEFAULT NULL, CHANGE rese_cat rese_cat INT DEFAULT NULL');
        $this->addSql('ALTER TABLE research ADD CONSTRAINT FK_57EB50C22FA9F48F FOREIGN KEY (rese_user_id) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE research ADD CONSTRAINT FK_57EB50C27CCC28DA FOREIGN KEY (rese_cat) REFERENCES category_article (cata_id)');
        $this->addSql('ALTER TABLE session CHANGE sess_session_id sess_session_id INT NOT NULL');
        $this->addSql('ALTER TABLE speakers DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE speakers ADD id INT AUTO_INCREMENT NOT NULL, CHANGE spea_disc_id spea_disc_id INT DEFAULT NULL, CHANGE spea_user_id spea_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE speakers ADD CONSTRAINT FK_21C01B1E78109495 FOREIGN KEY (spea_disc_id) REFERENCES discussion (disc_id)');
        $this->addSql('ALTER TABLE speakers ADD CONSTRAINT FK_21C01B1E1CF170CA FOREIGN KEY (spea_user_id) REFERENCES user (user_id)');
        $this->addSql('CREATE INDEX IDX_21C01B1E78109495 ON speakers (spea_disc_id)');
        $this->addSql('ALTER TABLE speakers ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE sponsor DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE sponsor ADD id INT AUTO_INCREMENT NOT NULL, CHANGE spon_user_id spon_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT FK_818CC9D4D46A2FD2 FOREIGN KEY (spon_user_id) REFERENCES user (user_id)');
        $this->addSql('CREATE INDEX IDX_818CC9D4D46A2FD2 ON sponsor (spon_user_id)');
        $this->addSql('ALTER TABLE sponsor ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE sponsor_unsubscribe DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE sponsor_unsubscribe ADD id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE sponsor_unsubscribe ADD PRIMARY KEY (id)');
        $this->addSql('DROP INDEX tran_user_id ON transaction');
        $this->addSql('ALTER TABLE transaction ADD trans_user_id INT DEFAULT NULL, DROP tran_user_id');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D11799FB5B FOREIGN KEY (tran_offer) REFERENCES buy (buy_id)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D19C162051 FOREIGN KEY (trans_user_id) REFERENCES user (user_id)');
        $this->addSql('CREATE INDEX IDX_723705D19C162051 ON transaction (trans_user_id)');
        $this->addSql('ALTER TABLE user ADD v1 INT NOT NULL, CHANGE user_address user_address INT DEFAULT NULL, CHANGE user_birthdate user_birthdate DATE DEFAULT NULL, CHANGE user_sex user_sex VARCHAR(1) NOT NULL, CHANGE user_title user_title VARCHAR(255) DEFAULT NULL, CHANGE user_rank user_rank INT DEFAULT NULL, CHANGE user_notation user_notation DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6495543718B FOREIGN KEY (user_address) REFERENCES address (addr_id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649F2F8A42C FOREIGN KEY (user_rank) REFERENCES rank (rank_id)');
        $this->addSql('ALTER TABLE virtual_article CHANGE vira_virp_id vira_virp_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE wishlist CHANGE wish_post_id wish_post_id INT AUTO_INCREMENT NOT NULL');
    }
}
