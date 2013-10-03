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

*Ideally, the problem of item / account / type sales splits should be solved at
the sales entry stage, where when a sale is entered, the monetary value set
aside for a dealer is calculated by order of preference between these split
values, item defined monetary value first, item defined split second, account
split third, type split fourth, and a fifth "catch all" should all of those be
empty.*

In order of importance, this project should fulfill the following:

+ Generate a report of any dealer's sales in a given time frame,
which includes the dealer's information and information on all items
including money from sale reserved for dealer.

+ Allow for CRUD of dealer and sale data.

The scope of this project may expand over time.
