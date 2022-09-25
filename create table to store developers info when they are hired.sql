-- create table to store developers information when they are hired

create table Assign_Employee(
EmailAddress varchar(200),
CompanyName varchar(500),
NumberOfDays int,
StartingDate varchar(300),
ContractLength varchar(100),
FOREIGN KEY (EmailAddress) REFERENCES Developers_info(EmailAddress)
)