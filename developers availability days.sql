-- create table to store the number of days in which the developer is willing to work

create table Employees_availability_days(
EmailAddress varchar(200),
available_days int,
FOREIGN KEY (EmailAddress) REFERENCES Developers_info(EmailAddress)
);