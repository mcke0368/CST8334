# organization of the migration files

Because the order in which the migration files are executed depends on filename,
if tables have fk dependencies then it is hard to do everything in one file. So,
migration is broken up into 3 stages.  

1. Create tables
2. Add foreign key constraints
3. Add data.

The default naming convention is the date/timestamp with the table name.
I've set all migrations for the initial import to be the same date and got rid
of the timestamp.  In its place, the 6 digit number will use the following
convention.

1. The first digit is the order value (1 = create table, 2 = constraints, 
3 = insert/delete/update data).  This will force the execution order.:Wq

2. the remiaining 5 are used for the table number. 

In addition, a sensible label is added before the table name (create, insert, constraints)

eg. 

for users table, the first migration file has the timestamp
leading with 1 so it's table creating.  The second has
a 3 so it's data insertion.

2018_01_30_100000_create_users_table.php
2018_01_30_300000_insert_users_table.php



NOTE:
1. when adding foreign key constraints, enusre the datatype matches.  When id 
is 'increments' (auto-incrementing integer) you need to make your foreign key
integer('name')->unsigned()->nullable(false) because the autoincrementing id
is implicitly unsigned.  With unsigned on fk, you'll get an error.

2. the migration filename is matched with the class name inside.

3. Yes, the simple solution would be to simply put the stage number at the beginning
but unfortunately, if the data isn't the first part of the filename it breaks laravel
migrations.
