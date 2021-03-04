# Laravel8 Sample
A sample project to teach myself laravel 8 using sail.

## Scope
Let's say we need to have a very simple hotel booking app. The first approach would be an inside system that users register customers. A second approach would be an online booking system (abstract the payment part).
So we need a very simple database, mySQL on default sail will suffice. We can start with something like customers table with first name, last name and an email. We can abstract the users for now.
Let's also say we have room types (single, double, suite and a price). Then we have the room itself, which has an identifier and a type. Lastly, we need a reservation, that contains the check-in date, check out date, a customer, a room and a price can be inferred.
We also need some events. Whenever a room is booked, we need to send an email to the customer for example. Maybe a job that emails the customer when the booking is coming to a close.
So we can start with this.

## Version
Laravel version => 8.28.1
Run with sail up command (requires docker and wsl2 with a linux dist for windows).