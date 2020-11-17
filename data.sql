
CREATE TABLE `user` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `nik` INT NOT NULL, 
    `nama` VARCHAR(64) NOT NULL ,  
    `status` VARCHAR(20) NOT NULL ,  
    `jenis_kelamin` VARCHAR(16) NULL ,  
    `tgl_lahir` VARCHAR(16) NOT NULL ,  
    PRIMARY KEY  (`id`)
) ENGINE = InnoDB;

CREATE TABLE `presensi` (
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `user_id` INT NOT NULL,  
    `tanggal` timestamp NULL ,  
    `jam_masuk` time NOT NULL ,  
    `jam_keluar` time NOT NULL ,  
    -- CONSTRAINT user_id FOREIGN KEY (user_id) REFERENCES user (nik),
    PRIMARY KEY  (`id`)
) ENGINE = InnoDB;