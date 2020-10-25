# OBSClient MySQL DB
# --------------------------------------------------------
#
# Table structure for table `obsclient_clients`
#
CREATE TABLE obsclient_clients (
    ClientID   INT(10)     NOT NULL AUTO_INCREMENT,
    ClientName VARCHAR(50) NOT NULL UNIQUE DEFAULT '',
    ClientAct  INT(1)      NOT NULL        DEFAULT '1',
    PRIMARY KEY (ClientID)
)
    ENGINE = ISAM;
#
# Insert data into 'obsclient_hd_clients'
#

# --------------------------------------------------------
#
# Table structure for table `obsclient_hd_categories`
#
CREATE TABLE obsclient_hd_categories (
    CategoryID   INT(10)     NOT NULL AUTO_INCREMENT,
    CategoryName VARCHAR(50) NOT NULL UNIQUE DEFAULT '',
    CategoryAct  INT(1)      NOT NULL        DEFAULT '1',
    PRIMARY KEY (CategoryID)
)
    ENGINE = ISAM;
#
# Insert data into 'obsclient_hd_categories'
#

# --------------------------------------------------------
#
# Table structure for table `obsclient_hd_status`
#
CREATE TABLE obsclient_hd_status (
    StatusID   INT(10)     NOT NULL AUTO_INCREMENT,
    StatusName VARCHAR(50) NOT NULL DEFAULT '',
    PRIMARY KEY (StatusID)
)
    ENGINE = ISAM;
#
# Insert data into 'obsclient_hd_status'
#
INSERT INTO obsclient_hd_status
VALUES (1, 'New');
INSERT INTO obsclient_hd_status
VALUES (2, 'In Progress');
INSERT INTO obsclient_hd_status
VALUES (3, 'On Hold');
INSERT INTO obsclient_hd_status
VALUES (4, 'Completed Successfully');
INSERT INTO obsclient_hd_status
VALUES (5, 'Completed Unsuccessfully');
INSERT INTO obsclient_hd_status
VALUES (6, 'Canceled');
# --------------------------------------------------------
#
# Table structure for table `obsclient_hd_priorities`
#
CREATE TABLE obsclient_hd_priorities (
    PriorityID   INT(10)     NOT NULL AUTO_INCREMENT,
    PriorityName VARCHAR(50) NOT NULL DEFAULT '',
    PRIMARY KEY (PriorityID)
)
    ENGINE = ISAM;
#
# Insert data into 'obsclient_hd_priorities'
#
INSERT INTO obsclient_hd_priorities
VALUES (1, 'Unassigned');
INSERT INTO obsclient_hd_priorities
VALUES (2, 'Low');
INSERT INTO obsclient_hd_priorities
VALUES (3, 'Normal');
INSERT INTO obsclient_hd_priorities
VALUES (4, 'High');
INSERT INTO obsclient_hd_priorities
VALUES (5, 'Critical');
# --------------------------------------------------------
#
# Table structure for table `obsclient_hd_ticketdata`
#
CREATE TABLE obsclient_hd_ticketdata (
    TicketID      INT(10)      NOT NULL AUTO_INCREMENT,
    UID           INT(10)      NOT NULL DEFAULT '0',
    StatusID      INT(10)      NOT NULL DEFAULT '0',
    ClientID      INT(10)      NOT NULL DEFAULT '0',
    CategoryID    INT(10)      NOT NULL DEFAULT '0',
    PriorityID    INT(10)      NOT NULL DEFAULT '0',
    EntryDate     DATE         NOT NULL DEFAULT '0000-00-00',
    TicketSubject VARCHAR(255) NOT NULL DEFAULT '',
    TicketDetails TEXT         NOT NULL DEFAULT '',
    PRIMARY KEY (TicketID)
)
    ENGINE = ISAM;

# --------------------------------------------------------
#
# Table structure for table `obsclient_hd_ticketupdate`
#
CREATE TABLE obsclient_hd_ticketupdate (
    TicketUpdateID INT(10) NOT NULL AUTO_INCREMENT,
    ParentTicketID INT(10) NOT NULL DEFAULT '0',
    UID            INT(10) NOT NULL DEFAULT '0',
    EntryDate      DATE    NOT NULL DEFAULT '0000-00-00',
    UpdateDetails  TEXT    NOT NULL DEFAULT '',
    PRIMARY KEY (TicketUpdateID)
)
    ENGINE = ISAM;



