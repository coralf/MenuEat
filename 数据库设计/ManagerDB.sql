/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2017/5/15 16:01:53                           */
/*==============================================================*/


drop table if exists t_log;

drop table if exists t_permission;

drop table if exists t_role;

drop table if exists t_role_permission;

drop table if exists t_user_Info;

drop table if exists t_user_login;

drop table if exists t_user_permission;

drop table if exists t_user_role;

/*==============================================================*/
/* Table: t_log                                                 */
/*==============================================================*/
create table t_log
(
   log_id               varchar(40) not null,
   user_login_id        varchar(40),
   operation_type       int,
   operation_content    varchar(200),
   operation_address    varchar(20),
   operation_time       datetime,
   primary key (log_id)
);

/*==============================================================*/
/* Table: t_permission                                          */
/*==============================================================*/
create table t_permission
(
   permission_id        varchar(40) not null,
   parent_permission_name varchar(40),
   permission_name      varchar(20) not null,
   description          varchar(200),
   permission_url       varchar(100),
   state                int not null,
   order_no             int,
   primary key (permission_id)
);

/*==============================================================*/
/* Table: t_role                                                */
/*==============================================================*/
create table t_role
(
   role_id              varchar(40) not null,
   parent_role_id       varchar(40),
   role_name            varchar(20),
   description          varchar(100),
   oreder_no            int,
   create_by            varchar(40),
   create_time          datetime,
   update_by            varchar(40),
   update_time          datetime,
   primary key (role_id)
);

/*==============================================================*/
/* Table: t_role_permission                                     */
/*==============================================================*/
create table t_role_permission
(
   t_id                 varchar(40) not null,
   t_r_role_id          varchar(40),
   permission_id        varchar(40),
   permission_type      int,
   primary key (t_id)
);

/*==============================================================*/
/* Table: t_user_Info                                           */
/*==============================================================*/
create table t_user_Info
(
   user_info_id         varchar(40) not null,
   user_login_id        varchar(40),
   user_name            varchar(20),
   mobile               varchar(20),
   email                varchar(20),
   remark               varchar(100),
   create_by            varchar(40),
   create_time          datetime,
   update_by            varchar(40),
   update_time          datetime,
   primary key (user_info_id)
);

/*==============================================================*/
/* Table: t_user_login                                          */
/*==============================================================*/
create table t_user_login
(
   user_login_id        varchar(40) not null,
   login_name           varchar(20),
   login_pwd            varchar(40),
   state                int,
   create_by            varchar(40),
   create_time          datetime,
   login_time           datetime,
   last_login_time      datetime,
   login_count          int,
   primary key (user_login_id)
);

/*==============================================================*/
/* Table: t_user_permission                                     */
/*==============================================================*/
create table t_user_permission
(
   t_id                 varchar(40) not null,
   user_login_id        varchar(40),
   permission_id        varchar(40),
   permission_type      int,
   primary key (t_id)
);

/*==============================================================*/
/* Table: t_user_role                                           */
/*==============================================================*/
create table t_user_role
(
   t_id                 varchar(40) not null,
   t_r_role_id          varchar(40),
   user_login_id        varchar(40),
   primary key (t_id)
);

alter table t_log add constraint FK_Reference_8 foreign key (user_login_id)
      references t_user_login (user_login_id) on delete restrict on update restrict;

alter table t_role_permission add constraint FK_Reference_6 foreign key (t_r_role_id)
      references t_role (role_id) on delete restrict on update restrict;

alter table t_role_permission add constraint FK_Reference_7 foreign key (permission_id)
      references t_permission (permission_id) on delete restrict on update restrict;

alter table t_user_Info add constraint FK_Reference_1 foreign key (user_login_id)
      references t_user_login (user_login_id) on delete restrict on update restrict;

alter table t_user_permission add constraint FK_Reference_2 foreign key (permission_id)
      references t_permission (permission_id) on delete restrict on update restrict;

alter table t_user_permission add constraint FK_Reference_3 foreign key (user_login_id)
      references t_user_login (user_login_id) on delete restrict on update restrict;

alter table t_user_role add constraint FK_Reference_4 foreign key (t_r_role_id)
      references t_role (role_id) on delete restrict on update restrict;

alter table t_user_role add constraint FK_Reference_5 foreign key (user_login_id)
      references t_user_login (user_login_id) on delete restrict on update restrict;

