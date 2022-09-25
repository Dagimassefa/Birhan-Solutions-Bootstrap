-- create table to store developers information in the created database

Create table Developers_info(
FirstName varchar(200),
LastName varchar(200),
EmailAddress varchar(200) primary key not null,
PhoneNumber varchar(50),
CollegeName varchar(500),
edu_level varchar(300),
Major varchar(300),
CV varchar(255),
LinkedInLink varchar(500),
GithubLink varchar(500),
LanguagesAndSkills varchar(10000),
OtherSkills varchar(1000),
emp_status varchar(500) default 'free'
);

