Cotton House Net
================

The design goal of this project is to create a PHP interface for a
database used to track individual seller accounts and items sold,
and combine them to generate sales reports for each individual seller.

Sellers are known to the database as *dealers*, but in reality these
individual accounts are either *consignors*, *antique consignors* or
*antique dealers*, each with their own special type rules for
contractual split of sales.

Individual dealers can also have their own special contractual rates
independent of their types. Individual items belonging to a given
dealer can also have their own special contractual rates independent
of their dealer's rate and type, and each item can have their own
defined split independent of the rate belonging to the item, dealer,
or dealer type.

In order of importance, this project should fulfill the following:

+ Generate a report of any dealer's sales in a given time frame,
which includes the dealer's information and information on all items
including money from sale reserved for dealer.

+ Allow for CRUD of dealer and sale data.

The scope of this project may expand over time.

##Tables Checklist
###~~Types~~
#####~~Create~~
#####~~Read~~
#####~~Update~~
#####~~Destroy~~
###~~Dealers~~
#####~~Create~~
#####~~Read~~
#####~~Update~~
#####~~Destroy~~
###Sales
#####~~Create~~
#####~~Read~~
#####Update
#####Destroy
