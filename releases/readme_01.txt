
                                M A M E

                    Multiple Arcade Machine Emulator

                  by Nicola Salmoria (MC6489@mclink.it)


Here is a quick list of ther currently supported games; read on for details.


Game                     Playable?   Accurate colors?    Sound?

Pac Man                    Yes            Yes             Yes
Ms Pac Man (bootleg)       Yes            Yes             Yes
Crush Roller               Yes            No              Yes
Pengo                      Yes            Yes             Yes
Lady Bug                   Yes            Yes            Partial



Acknoledgements
---------------

First of all, thanks to Allard van der Bas (avdbas@wi.leidenuniv.nl) for
starting the Arcade Emulation Programming Repository at
http://valhalla.ph.tn.tudelft.nl/emul8
Without the Repository, I would never have even tried to write an emulator.

If you find out something useful, submit it to avdbas@wi.leidenuniv.nl,
so it will be made available to everybody on the Repository page.

Z80Em Portable Zilog Z80 Emulator Copyright (C) Marcel de Kogel 1996,1997
Allegro library by Shawn Hargreaves, 1994/96
SEAL Synthetic Audio Library API Interface Copyright (C) 1995, 1996
   Carlos Hasan. All Rights Reserved.
Video mode created using Tweak 1.6b by Robert Schmidt, who also wrote
TwkUser.c.

Very special thanks to Sergio Munoz for the precious information about
the Pengo sound hardware and colors.
Thanks to Paul Swan for the information on the Lady Bug sound hardware.
Thanks to Gary Walton for his help in making the Crush Roller colors better.



Usage
-----

MAME [name of the game to run] [options]

for example

MAME mspacman -nosound   will run Ms Pac Man without sound

options:
-vesa         use standard 640x480x256 VESA mode instead of custom video mode
-noscanlines  use alternate video mode (not availble in all games)
-nosound      turn off sound
-nojoy        don't poll joystick
-log          create a log of illegal memory accesses in ERROR.LOG


The following keys work in all emulators:

3       Insert coin
1       Start 1 player game
2       Start 2 players game
Tab     Change dip switch settings
P       Pause
F3      Reset
F11     Activate fps counter
F12     Save a screen snapshot
ESC     Exit emulator



Pac Man, Ms Pac Man
-------------------

Arrows  Move around
F1      Skip level
F2      Test mode
CTRL    Speed up cheat

Known issues:
- Blinky and Pinky seem to be shifted one pixel to the right. This is really
  annoying, but I can't seem to be able to understand why. Maybe there is an
  additional "sprite offset" register somewhere? Or did the original just
  behave this way?
  Note that we can't fix it by just moving sprites 0 and 1 one pixel to the
  left, because when Pac Man eats a power pill the sprites order is changed
  so that Pac Man is drawn over the ghosts. It becomes sprite 0, and Blinky
  becomes sprite 4.


Crush Roller
------------

Crush Roller is a hacked version of Make Trax, modified to run on a
Pac Man board.

Arrows  Move around
F1      Skip level

Known issues:
- There's the same problem with sprites as in Pac Man, but here it could be
  fixed without apparent side effects.


Pengo
-----

Arrows  Move around
CTRL    Push
F1      Skip level
F2      Test mode



Lady Bug
--------

Arrows  Move around
F1      Skip level

Known issues:
- The noise generator is not emulated yet.
