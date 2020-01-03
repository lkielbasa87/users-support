Project description.

Application allows user to report problem to IT administrator.

1. Application's main form contains fields that need to be filled with data concerning particular IT issue like broken laptop, smartphone and software.

2. While user clicks 'Report problem' button application sends information to IT administrators defined in php script.

3. While user clicks 'Report problem' button application also writes data to MySQL database created for project's purpose.

4. While user clicks 'Report problem' application shows if process was succesful or not.

***
Project tools.

There is MySQL database created for application's purposes called 'support' with 'issues' table.
Issues table columns:
id int(10) AUTO_INCREMENT;
first_name varchar(30);
last_name varchar(30);
subject varchar(100);
description varchar(500);
is_urgent varchar(10);
email varchar(50);
to_email varchar(50);