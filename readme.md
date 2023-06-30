# SecretSanta

A web-based application that facilitates a fair randomization of gift-givers or "santa" in the exchanging of gifts among a group of users.

## Features

### ROOM HOSTING

Any of the users can host a private group or a room for anyone to join as long as they can enter the 4-character alphanumeric room code that will be generated upon the creation of a room.

### ROOM MANAGEMENT (Host-only)

Room management is a feature unique only to the host. The room host is able to run the following commands:

- Santa randomization process
- End a room instance
- Elevate a room state to the next level

There is a one-way cycle of 3 states for a "room" that can be controlled only by its host:

1. OPEN STATE - refers to a period where the host has yet to initiate the randomization process, and anyone can still enter and/or leave the "room".
2. LOCKED-IN STATE - refers to a period where the randomization process is done, and everyone in the room has already been assigned their own "santa".
3. REVELATION STATE - refers to a period where the exchanging of gifts is taking place.

### WISHLIST EXCHANGE

Users who have joined a room in an OPEN STATE can write down and modify their room-exclusive wishlist. Once the room is in a LOCKED-STATE, all wish lists are locked and the user's wishlist gets distributed to their respective "santa". The name of the "santa" has to be revealed to their respective gift recipient in the "room" during the REVELATION STATE.
