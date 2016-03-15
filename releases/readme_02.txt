
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
Mr. Do!                    Yes            Yes             Yes
Crazy Climber              Yes            Yes             Yes
Crazy Kong                 Yes            No              Yes



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
AY-3-8910 emulation by Ville Hallik (ville@physic.ut.ee) and Michael Cuddy
  (mcuddy@FensEnde.com).

Very special thanks to Sergio Munoz for the precious information about the
   Pengo sound hardware and colors.
Thanks to Paul Swan for the information on the Lady Bug sound hardware and
   Mr.Do! colors.
Thanks to Gary Walton for his help in making the Crush Roller colors better.
Information about the Crazy Climber machine hardware (including palette) and
   ROM encryption scheme provided by Lionel Theunissen (lionelth@ozemail.com.au).
Thanks to Andy Milne (andy@canetics.com) for the information on the Crazy
   Climber sound roms.
Crazy Kong emulation set up by Ville Laitinen (ville@sms.fi).



Usage
-----

MAME [name of the game to run] [options]

for example

MAME mspacman -nosound   will run Ms Pac Man without sound

options:
-noscanlines  use alternate video mode (not availble in all games). Use this
              if the default mode doesn't work with your monitor/video card.
-vesa         use standard 640x480x256 VESA mode instead of custom video mode.
              Use this as a last resort if -noscanlines doesn't solve your
			  video problems.
-nosound      turn off sound
-nojoy        don't poll joystick
-log          create a log of illegal memory accesses in ERROR.LOG
-frameskip n  skip frames to speed up the emulation. For example, if the game
              normally runs at 60 fps, "-skipframe 1" will make it run at 30
			  fps, and "-skipframe 2" at 20 fps. Use F11 to check the fps your
			  computer is actually displaying. If the game is too slow,
			  increase the frameskip value. Note that this setting can also
			  affect audio quality (some games sound better, others sound
			  worse).


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



Pac Man ("pacman")
------------------

Arrows  Move around
F1      Skip level
F2      Test mode
CTRL    Speed up cheat

Clones supported:
  Pac Man modification ("pacmod")
  Namco Pac Man ("namcopac")
  Hangly Man ("hangly")
  Puck Man ("puckman")
  Piranha ("piranha")

Known issues:
- Blinky and Pinky seem to be shifted one pixel to the right. This is really
  annoying, but I can't seem to be able to understand why. Maybe there is an
  additional "sprite offset" register somewhere? Or did the original just
  behave this way?
  Note that we can't fix it by just moving sprites 0 and 1 one pixel to the
  left, because when Pac Man eats a power pill the sprites order is changed
  so that Pac Man is drawn over the ghosts. It becomes sprite 0, and Blinky
  becomes sprite 4.



Ms Pac Man ("mspacman")
-----------------------

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



Crush Roller ("crush")
----------------------

Crush Roller is a hacked version of Make Trax, modified to run on a
Pac Man board.

Arrows  Move around
F1      Skip level

Known issues:
- There's the same problem with sprites as in Pac Man, but here it could be
  fixed without apparent side effects.



Pengo ("pengo")
---------------

Arrows  Move around
CTRL    Push
F1      Skip level
F2      Test mode

Clones supported:
  Penta ("penta")



Lady Bug ("ladybug")
--------------------

Arrows  Move around
F1      Skip level

Known issues:
- The noise generator is not emulated yet.



Mr. Do! ("mrdo")
----------------

Arrows  Move around
CTRL    Fire
F1      Skip level
CTRL+F3 Test mode

Clones supported:
  Mr. Lo! ("mrlo")

Known issues:
- The noise generator is not emulated yet, but I think Mr. Do! doesn't
  use it anyway.



Crazy Climber ("cclimber")
--------------------------

E,S,D,F Left joystick
I,J,K,L Right joystick
F1      Skip level

Clones supported:
  bootleg version ("ccboot")



Crazy Kong ("ckong")
--------------------

This Donkey Kong clone runs on the same hardware as Crazy Climber, most
notable differencies being a larger character set and the display rotated
90 degrees.

Arrows  Move around
CTRL    Jump

Known issues:
- Some problems with sound
