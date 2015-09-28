CREATE TABLE userdb (
    userid int(6) NOT NULL AUTO_INCREMENT,
    username_u varchar(24) NOT NULL,
    pass_user varchar(12) NOT NULL,
    nama_user varchar(128) NOT NULL,
    email_user varchar(128) NOT NULL,
    provinsi_user varchar(50) NOT NULL,
    kota_user varchar(50) NOT NULL,
    dob_user datetime NOT NULL,
    PRIMARY KEY (userid)
)

CREATE TABLE admibdb (
    adminid int(6) NOT NULL AUTO_INCREMENT,
    username_a varchar(24) NOT NULL,
    pass_admin varchar(12) NOT NULL,
    nama_admin varchar(128) NOT NULL,
    email_admin varchar(128) NOT NULL,
    provinsi_admin varchar(50) NOT NULL,
    kota_admin varchar(50) NOT NULL,
    dob_admin datetime NOT NULL,
    PRIMARY KEY (userid)
)

INSERT INTO `userdb` (`userid`,`username_u`,`pass_user`,`nama_user`,`email_user`,`provinsi_user`, `kota_user`, `dob_user`) VALUES
(123456, 'johnny', 'johnny', 'Johnny Iskandar', 'johnny@gmail.com', 'Jawa Barat', 'Bandung', '1994-05-23')

INSERT INTO `admindb` (`adminid`,`username_a`,`pass_admin`,`nama_admin`,`email_admin`,`provinsi_admin`, `kota_admin`, `dob_admin`) VALUES
(213457, 'arvinchs', 'arvin', 'Arvin Chendriyana Supriyadi', 'arvinchs@gmail.com', 'Jawa Barat', 'Bandung', '1994-05-24')
