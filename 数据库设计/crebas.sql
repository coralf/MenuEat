/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2017/5/11 8:18:22                            */
/*==============================================================*/


drop table if exists ACCUMULATE_NUM;

drop table if exists AREA;

drop table if exists CITY;

drop table if exists CUSTOMER;

drop table if exists CUSTOMER_DETAIL;

drop table if exists CUST_FREE_CARD;

drop table if exists FOODS;

drop table if exists FOODS_CUST_DES;

drop table if exists FOODS_FREE_CARD;

drop table if exists FOODS_SALE_HISTORY;

drop table if exists FOODS_TYPE;

drop table if exists FOOD_STORE;

drop table if exists ORDER_FOODS;

drop table if exists ORDER_FORM;

/*==============================================================*/
/* Table: ACCUMULATE_NUM                                        */
/*==============================================================*/
create table ACCUMULATE_NUM
(
   AN_ID                VARCHAR(45) not null,
   F_ID                 VARCHAR(45),
   AN_NUM               INT,
   primary key (AN_ID)
);

/*==============================================================*/
/* Table: AREA                                                  */
/*==============================================================*/
create table AREA
(
   AR_ID                VARCHAR(45) not null,
   CY_ID                VARCHAR(45),
   AR_NAMR              VARCHAR(50),
   primary key (AR_ID)
);

/*==============================================================*/
/* Table: CITY                                                  */
/*==============================================================*/
create table CITY
(
   CY_ID                VARCHAR(45) not null,
   CY_NAME              VARCHAR(50),
   primary key (CY_ID)
);

/*==============================================================*/
/* Table: CUSTOMER                                              */
/*==============================================================*/
create table CUSTOMER
(
   C_ID                 VARCHAR(45) not null,
   C_NAME               VARCHAR(20),
   C_NIKENAME           VARCHAR(20),
   C_USERNAME           VARCHAR(20),
   C_EMAIL              VARCHAR(20),
   C_PHONE              VARCHAR(16),
   C_PASSWORD           VARCHAR(20),
   C_PIC                VARCHAR(100),
   primary key (C_ID)
);

/*==============================================================*/
/* Table: CUSTOMER_DETAIL                                       */
/*==============================================================*/
create table CUSTOMER_DETAIL
(
   CD_ID                VARCHAR(45) not null,
   C_ID                 VARCHAR(45),
   CD_LOCAL             VARCHAR(200),
   CD_LOACL_DETAIL      VARCHAR(500),
   CD_POST              VARCHAR(20),
   CD_ACC_NUM           int,
   primary key (CD_ID)
);

/*==============================================================*/
/* Table: CUST_FREE_CARD                                        */
/*==============================================================*/
create table CUST_FREE_CARD
(
   CFC_ID               VARCHAR(45) not null,
   C_ID                 VARCHAR(45),
   FFC_ID               VARCHAR(45),
   CFC_NAME             VARCHAR(100),
   CFC_MONEY            double,
   CFC_STORE            VARCHAR(100),
   CFC_FOOD             VARCHAR(200),
   primary key (CFC_ID)
);

/*==============================================================*/
/* Table: FOODS                                                 */
/*==============================================================*/
create table FOODS
(
   F_ID                 VARCHAR(45) not null,
   FS_ID                VARCHAR(45),
   FT_ID                VARCHAR(45),
   F_NAME               VARCHAR(32),
   F_DES                VARCHAR(5000),
   F_PIC                VARCHAR(200),
   F_PRICE              double,
   F_DISCOUNT           double,
   F_DISCOUNT_PRICE     double,
   FS_NAME              VARCHAR(50),
   F_ON_TIME            datetime,
   F_STATE              INT,
   F_RECOMMED           int,
   F_BANNER             int,
   F_AREA               VARCHAR(100),
   F_EAT_T              VARCHAR(20),
   primary key (F_ID)
);

/*==============================================================*/
/* Table: FOODS_CUST_DES                                        */
/*==============================================================*/
create table FOODS_CUST_DES
(
   F_U_ID               VARCHAR(45) not null,
   F_ID                 VARCHAR(45),
   C_ID                 VARCHAR(45),
   F_U_DES              VARCHAR(1000),
   F_U_TIME             datetime,
   F_U_NICE             int,
   primary key (F_U_ID)
);

/*==============================================================*/
/* Table: FOODS_FREE_CARD                                       */
/*==============================================================*/
create table FOODS_FREE_CARD
(
   FFC_ID               VARCHAR(45) not null,
   F_ID                 VARCHAR(45),
   FFC_NAME             VARCHAR(100),
   FFC_MONEY            double,
   FFC_ON_TIME          datetime,
   FFC_OFF_TIME         datetime,
   FFC_STATE            int,
   primary key (FFC_ID)
);

/*==============================================================*/
/* Table: FOODS_SALE_HISTORY                                    */
/*==============================================================*/
create table FOODS_SALE_HISTORY
(
   FSH_ID               VARCHAR(45) not null,
   F_ID                 VARCHAR(45),
   C_ID                 VARCHAR(45),
   FSH_SALE_TIME        datetime,
   primary key (FSH_ID)
);

/*==============================================================*/
/* Table: FOODS_TYPE                                            */
/*==============================================================*/
create table FOODS_TYPE
(
   FT_ID                VARCHAR(45) not null,
   FT_NAME              VARCHAR(200),
   FT_DES               VARCHAR(2000),
   primary key (FT_ID)
);

/*==============================================================*/
/* Table: FOOD_STORE                                            */
/*==============================================================*/
create table FOOD_STORE
(
   ID                   VARCHAR(45) not null,
   AR_ID                VARCHAR(45),
   FS_NAME              VARCHAR(50),
   FS_LOCAL             VARCHAR(100),
   FS_TEL               VARCHAR(15),
   FS_SERVICE_TIME      VARCHAR(50),
   FS_INDEX             INT,
   primary key (ID)
);

/*==============================================================*/
/* Table: ORDER_FOODS                                           */
/*==============================================================*/
create table ORDER_FOODS
(
   OFD_ID               VARCHAR(45) not null,
   OF_ID                VARCHAR(45),
   F_ID                 VARCHAR(45),
   OFD_CREATE_TIME      datetime,
   primary key (OFD_ID)
);

/*==============================================================*/
/* Table: ORDER_FORM                                            */
/*==============================================================*/
create table ORDER_FORM
(
   OF_ID                VARCHAR(45) not null,
   C_ID                 VARCHAR(45),
   OF_SERIAL_NUMBER     VARCHAR(45),
   C_NAME               VARCHAR(20),
   OF_MONEY             double,
   OF_CREATE_TIME       datetime,
   OF_STATE             int,
   primary key (OF_ID)
);

alter table ACCUMULATE_NUM add constraint FK_Reference_13 foreign key (F_ID)
      references FOODS (F_ID) on delete restrict on update restrict;

alter table AREA add constraint FK_Reference_10 foreign key (CY_ID)
      references CITY (CY_ID) on delete restrict on update restrict;

alter table CUSTOMER_DETAIL add constraint FK_Reference_14 foreign key (C_ID)
      references CUSTOMER (C_ID) on delete restrict on update restrict;

alter table CUST_FREE_CARD add constraint FK_Reference_15 foreign key (C_ID)
      references CUSTOMER (C_ID) on delete restrict on update restrict;

alter table CUST_FREE_CARD add constraint FK_Reference_17 foreign key (FFC_ID)
      references FOODS_FREE_CARD (FFC_ID) on delete restrict on update restrict;

alter table FOODS add constraint FK_Reference_1 foreign key (FS_ID)
      references FOOD_STORE (ID) on delete restrict on update restrict;

alter table FOODS add constraint FK_Reference_18 foreign key (FT_ID)
      references FOODS_TYPE (FT_ID) on delete restrict on update restrict;

alter table FOODS_CUST_DES add constraint FK_Reference_3 foreign key (F_ID)
      references FOODS (F_ID) on delete restrict on update restrict;

alter table FOODS_CUST_DES add constraint FK_Reference_4 foreign key (C_ID)
      references CUSTOMER (C_ID) on delete restrict on update restrict;

alter table FOODS_FREE_CARD add constraint FK_Reference_16 foreign key (F_ID)
      references FOODS (F_ID) on delete restrict on update restrict;

alter table FOODS_SALE_HISTORY add constraint FK_Reference_8 foreign key (F_ID)
      references FOODS (F_ID) on delete restrict on update restrict;

alter table FOODS_SALE_HISTORY add constraint FK_Reference_9 foreign key (C_ID)
      references CUSTOMER (C_ID) on delete restrict on update restrict;

alter table FOOD_STORE add constraint FK_Reference_11 foreign key (AR_ID)
      references AREA (AR_ID) on delete restrict on update restrict;

alter table ORDER_FOODS add constraint FK_Reference_12 foreign key (F_ID)
      references FOODS (F_ID) on delete restrict on update restrict;

alter table ORDER_FOODS add constraint FK_Reference_6 foreign key (OF_ID)
      references ORDER_FORM (OF_ID) on delete restrict on update restrict;

alter table ORDER_FORM add constraint FK_Reference_5 foreign key (C_ID)
      references CUSTOMER (C_ID) on delete restrict on update restrict;

