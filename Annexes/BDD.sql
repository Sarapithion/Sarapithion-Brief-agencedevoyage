#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: adv_Rôle
#------------------------------------------------------------

CREATE TABLE adv_Role(
        Id_Role Int  Auto_increment  NOT NULL ,
        Nom     Varchar (255) NOT NULL
	,CONSTRAINT adv_Role_AK UNIQUE (Nom)
	,CONSTRAINT adv_Role_PK PRIMARY KEY (Id_Role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: adv_User
#------------------------------------------------------------

CREATE TABLE adv_User(
        Id_Utilisateur Int  Auto_increment  NOT NULL ,
        Nom            Varchar (255) NOT NULL ,
        Prenom         Varchar (255) NOT NULL ,
        Mot_de_passe   Varchar (255) ,
        Mail           Varchar (255) NOT NULL ,
        Telephone      Varchar (15) NOT NULL ,
        Id_Role        Int NOT NULL
	,CONSTRAINT adv_User_AK UNIQUE (Mail,Telephone)
	,CONSTRAINT adv_User_PK PRIMARY KEY (Id_Utilisateur)

	,CONSTRAINT adv_User_adv_Role_FK FOREIGN KEY (Id_Role) REFERENCES adv_Role(Id_Role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: adv_Voyage
#------------------------------------------------------------

CREATE TABLE adv_Voyage(
        Id_Voyage       Int  Auto_increment  NOT NULL ,
        Duree           Int NOT NULL ,
        Date_depart     Datetime NOT NULL ,
        Date_fin        Datetime NOT NULL ,
        Url_image       Varchar (255) NOT NULL ,
        Resume          Varchar (255) NOT NULL ,
        Nombre_pers_min Int NOT NULL ,
        Nombre_pers_max Int NOT NULL ,
        Prix            Int NOT NULL ,
        Id_Utilisateur  Int NOT NULL
	,CONSTRAINT adv_Voyage_PK PRIMARY KEY (Id_Voyage)

	,CONSTRAINT adv_Voyage_adv_User_FK FOREIGN KEY (Id_Utilisateur) REFERENCES adv_User(Id_Utilisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: adv_Catégorie
#------------------------------------------------------------

CREATE TABLE adv_Categorie(
        Id_Categorie Int  Auto_increment  NOT NULL ,
        Nom          Varchar (255) NOT NULL
	,CONSTRAINT adv_Categorie_AK UNIQUE (Nom)
	,CONSTRAINT adv_Categorie_PK PRIMARY KEY (Id_Categorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: adv_Pays
#------------------------------------------------------------

CREATE TABLE adv_Pays(
        Id_Pays Int  Auto_increment  NOT NULL ,
        Nom     Varchar (255) NOT NULL
	,CONSTRAINT adv_Pays_AK UNIQUE (Nom)
	,CONSTRAINT adv_Pays_PK PRIMARY KEY (Id_Pays)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: adv_Statut
#------------------------------------------------------------

CREATE TABLE adv_Statut(
        Id_Statut Int  Auto_increment  NOT NULL ,
        Nom       Varchar (255) NOT NULL
	,CONSTRAINT adv_Statut_AK UNIQUE (Nom)
	,CONSTRAINT adv_Statut_PK PRIMARY KEY (Id_Statut)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: adv_Réservation
#------------------------------------------------------------

CREATE TABLE adv_Reservation(
        Id_Reservation Int  Auto_increment  NOT NULL ,
        Message        Varchar (255) NOT NULL ,
        Id_Utilisateur Int NOT NULL ,
        Id_Voyage      Int NOT NULL ,
        Id_Statut      Int NOT NULL
	,CONSTRAINT adv_Reservation_PK PRIMARY KEY (Id_Reservation)

	,CONSTRAINT adv_Reservation_adv_User_FK FOREIGN KEY (Id_Utilisateur) REFERENCES adv_User(Id_Utilisateur)
	,CONSTRAINT adv_Reservation_adv_Voyage0_FK FOREIGN KEY (Id_Voyage) REFERENCES adv_Voyage(Id_Voyage)
	,CONSTRAINT adv_Reservation_adv_Statut1_FK FOREIGN KEY (Id_Statut) REFERENCES adv_Statut(Id_Statut)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: appartient à
#------------------------------------------------------------

CREATE TABLE appartient_a(
        Id_Categorie Int NOT NULL ,
        Id_Voyage    Int NOT NULL
	,CONSTRAINT appartient_a_PK PRIMARY KEY (Id_Categorie,Id_Voyage)

	,CONSTRAINT appartient_a_adv_Categorie_FK FOREIGN KEY (Id_Categorie) REFERENCES adv_Categorie(Id_Categorie)
	,CONSTRAINT appartient_a_adv_Voyage0_FK FOREIGN KEY (Id_Voyage) REFERENCES adv_Voyage(Id_Voyage)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: se déroule
#------------------------------------------------------------

CREATE TABLE se_deroule(
        Id_Pays   Int NOT NULL ,
        Id_Voyage Int NOT NULL
	,CONSTRAINT se_deroule_PK PRIMARY KEY (Id_Pays,Id_Voyage)

	,CONSTRAINT se_deroule_adv_Pays_FK FOREIGN KEY (Id_Pays) REFERENCES adv_Pays(Id_Pays)
	,CONSTRAINT se_deroule_adv_Voyage0_FK FOREIGN KEY (Id_Voyage) REFERENCES adv_Voyage(Id_Voyage)
)ENGINE=InnoDB;

