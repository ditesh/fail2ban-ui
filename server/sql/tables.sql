	CREATE TABLE logs (
		
		id int NOT NULL auto_increment,
        banned_ips_id int NOT NULL,
		ip int unsigned NOT NULL,
        log varchar(1024) NOT NULL,
		created_at timestamp(6) DEFAULT CURRENT_TIMESTAMP NOT NULL,
        FOREIGN KEY (banned_ips_id) REFERENCES parent(id) ON DELETE CASCADE
		PRIMARY KEY(id)

	) ENGINE=INNODB;

	CREATE TABLE banned_ips (
		
		id int NOT NULL auto_increment,
        ip int unsigned NOT NULL,
        service varchar(255) NOT NULL,
		created_at timestamp(6) DEFAULT CURRENT_TIMESTAMP NOT NULL,
		PRIMARY KEY(id)

	) ENGINE=INNODB;
