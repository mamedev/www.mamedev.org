    **********************************************************************
    *                      Alien Arena README file                       *
    **********************************************************************

    ************** READ THIS READ THIS READ THIS READ THIS ***************
    ************** READ THIS READ THIS READ THIS READ THIS ***************
    *                                                                    *
    *    Alien Arena is Copyright (c) 1985 by Duncan Brown.  Yes, I      *
    *    actually got a for-real copyright on it in 1985.  I am making   *
    *    the ROM images available for the enjoyment of fellow classic    *
    *    arcade game owners ONLY.  You may put this data into ROMs for   *
    *    installation into a game in your home, for the free amusement   *
    *    of yourself and your friends.  You may pass this entire kit     *
    *    (including this notice) along to other classic arcade game      *
    *    collectors for use in their own games.                          *
    *                                                                    *
    *    If you want to sell this or any variation of it; if you want    *
    *    to run it in a game on a route or in an arcade (i.e. you want   *
    *    to charge people to play it); let's talk.  You are not          *
    *    automatically given a right to do any of those things!          *
    *                                                                    *
    *                                                                    *
    ************** READ THIS READ THIS READ THIS READ THIS ***************
    ************** READ THIS READ THIS READ THIS READ THIS ***************
    
    
    **********************************************************************
    *                       Alien Arena requirements                     *
    **********************************************************************
    
    These are the technical specs for Alien Arena.  After reading this
    document, you should be armed with all the facts required to put
    together a working Alien Arena for your own amusement.  A fair amount
    of prior knowledge is assumed.  You need to know how to program EPROMs;
    how to put together a control panel and wire connectors; you might even
    have to know how to rejumper your sound board for a different ROM.

    To run Alien Arena, you need:

    -- CPU board: Defender will *not* work.  Any of the later ones (eg
    Stargate, Robotron, Joust, etc.) should work.

    -- ROM board:  See CPU board spec's above.  But Bubbles and Sinistar
    ROM boards will almost certainly *not* work.  The "Special Chips" on
    the non-Stargate ROM boards are not used, but don't hurt anything to be
    present.

    -- Switch interface board:  Deja vu.  Defender is a big *NO*,
    Stargate/Robotron/Joust are all a definite yes; Bubbles is a maybe,
    Sinistar is a definite no.  A "Splat!" interface board will work.  If
    you're converting a Splat! into an Alien Arena, I think we need to have
    a little talk first...

    -- Sound board: The sound boards are all essentially the same, but you
    need to have the right sound ROM, which might require some rejumpering. 
    Sound Rom 1 (Defender) and Sound Rom 2 (Stargate) are the only two that
    are going to work.  If you're using a later sound board, you need to
    come up with the earlier Rom and jumper your board for it.  The later
    sounds are not at all right for Alien Arena.

    -- Control panel: You have to make this yourself.  Sorry, I wasn't
    clever enough to base the pinout on Robotron (which has two 8-way
    joysticks, just like Alien Arena); it's an entirely unique pinout.
    
    
    **********************************************************************
    *                    Installing the ROMs                             *
    **********************************************************************

    Using the ROM image files, you should have made 12 EPROMs labeled
    AAROM01 through AAROM12.  Here is how they plug in to a Stargate ROM
    board.

                              -------------------------------------
                              |                                   |
                              |    12     09     06     03        |
                              |                                   |
                   ||---------+    11     08     05     02        |
                   ||  ribbon |                                   |
                   ||   cable |    10     07     04     01        |
                   ||---------+                                   |
                              -------------------------------------


    ...and here is how they plug in to a Robotron/Joust ROM board:

                              -------------------------------------
                              |                                   |
                              |        10     09     06     03    |
                              |                                   |
                   ||---------+        11     08     05     02    |
                   ||  ribbon |                                   |
                   ||   cable |        12     07     04     01    |
                   ||---------+                                   |
                              -------------------------------------

    
    **********************************************************************
    *                    Building the control panel                      *
    **********************************************************************

    The control panel needs 2 8-way joysticks (4 switches each), and 6
    buttons.  The start buttons can be of any variety, but the "Place" and
    "Flush" buttons should be the standard flipper-button type button used
    on most video games of the era.

    The recommended layout is:


            ______________________________________________________
            |                                                    |
            |       flush   place      O           flush   place |
            |    @   O       O       p1 st      @   O        O   |
            |    |                              |                |
            |   (|)                    O       (|)               |
            |  stick                 p2 st     stick             |
            |                                                    |
            |  PLAYER 2                        PLAYER 1          |
            |  (yellow)                         (blue)           |
            ______________________________________________________
    
    
    **********************************************************************
    *                     Wiring the control panel                       *
    **********************************************************************

    The following is a chart of interface board pin names, and what function
    they serve.

    3J2-2        Yellow up
    3J2-3        Yellow down
    3J2-4        Yellow left
    3J2-5        Yellow right
    3J2-7        Yellow place
    3J2-8        Yellow flush


    3J3-1        Blue up
    3J3-2        Blue down
    3J3-3        Blue left
    3J3-4        Blue right
    3J3-5        1 player start
    3J3-6        2 player start
    3J3-7        Blue place
    3J3-8        Blue flush

    
    **********************************************************************
    *                       Playing the game                             *
    **********************************************************************

    The attract mode explains a lot, but I'll give a brief(?) overview
    here:

    Player 1 (Thor) and Player 2 (Zespar) are battling it out in the Alien
    Arena.  The game is timed, with 2 minutes for every 25 cents inserted,
    regardless of your choice of 1-player or 2-player.  More time can be
    purchased at any time before the timer reads ":00".

    In a 1-player game you are Thor, with controls on the right, and the
    computer plays Zespar, on the left. In a 2-player game each of you
    chooses a set of controls.  When time runs out in either game, it
    reverts to a "play as long as you can keep alive and possibly winning
    extra lives" 1-player game.  If it started as a 2-player game, whoever
    is winning when time runs out is the one who gets to battle the
    computer.  (Because it would have been a whole lot more work to make
    the computer AI flexible enough to be either player, I didn't!  In a
    2-player game, the winner has to start playing Thor on the right-hand
    controls, regardless of which side he was playing originally.  Very
    weak, sorry...I'm so embarrassed...)

    The basic theme of the game is "capture the flag (while protecting your
    own)".  You can assemble offensive and defensive aids by picking up
    "pieces" strewn about your half of the playfield.  The pieces are
    color-coded, randomly created and distributed, and different objects
    require different numbers of pieces to assemble.  Once you start
    assembling an object, you must finish assembling it (pick up enough
    pieces for it) and place it...or "flush" the pieces you've picked up so
    far.  Flush is mostly used for when you accidentally picked up the
    wrong color piece...or when you don't have the required pieces to
    assemble the rest of the object.  A status bar shows what object is
    under construction, and how many more pieces are needed.  Only one
    object can be assembled at a time.  Once it is assembled, you must
    carry it to where you want to place or launch it and press the "place"
    button.

    There is a delay at the beginning of each round before the flags
    appear, and then a further delay before the midfield barrier comes
    down.  Use this time to start assembling an offense or defense or both. 
    (this keep someone from just starting each round by making a suicide
    dash for your flag.)  When the flags do appear, their placement is
    random, but within a small distance from the back wall of your half of
    the arena.

    A round ends when an opposing flag is captured by a player, or when a
    player is destroyed by one of his opponent's offensive or defensive
    objects.  There are all sorts of nuances to how the objects behave, how
    they score, etc.  I leave those to you to discover, though I will
    answer questions about game details to anyone who asks.

    
    **********************************************************************
    *                     Short history of the game                      *
    **********************************************************************

    By 1984, I had reverse-engineered the hardware used in Williams' games
    to the point where I had essentially created a "programmer's guide"
    for it.  Destiny called, I had to write a new game from scratch for
    this great hardware!  My original intent was to end up with a
    conversion kit that was more user-friendly than most (remember this was
    back when conversions were just starting to come into existence, long
    before JAMMA, and most of them were a complete mess to install).  A new
    marquee, new side stickers, new control panel, and 12 EPROMs, and away
    you go!  No messy wiring, board modifications, etc.  My production
    costs would be low, my sale price could be high.

    Well, that was the plan anyway...

    Over the course of a year, I wrote "Alien Arena".  It was written in
    6809 assembly language using a cross-compiler on an Apple II+.  Using
    custom-designed and handbuilt emulator hardware (*24* 2Kx8 static RAMs
    on a board connected to the Apple with a custom bus interface!) I could
    test out my code without the slowdown of programming and erasing a
    bunch of EPROMs all the time.

    When I was done, I assembled it into an ex-Stargate cabinet, and put it
    out in the arcade I owned at the time.  I made a few modifications
    (mostly to the computer-player AI) based on feedback from customers.  I
    cannot say it was an immense hit.  Most people thought it sucked,
    frankly.  You decide for yourself.  I know my wife and I had a blast
    playing it while I was designing it (probably added 6 months to the
    time to finish it, heh heh heh...).

    The version here is taken from the actual latest ROMs used in that
    game in the arcade.  It's been so long since I fired up the Apple II
    6809 assembler, I'm not even sure I'd remember how, so this is probably
    the only way this game can live on (I do have printouts of the
    source...)

    Although I would love at some point to put together a description of
    how to program the Williams hardware, and how to build a RAM-based
    emulator for it, that would require a *huge* amount of time and effort
    on my part, something which I simply can't afford anytime soon.  If
    someone else is trying to understand the hardware and has questions, I
    could at least try to field those.

    This is quite literally the rarest game ever produced for the Williams
    hardware (production run of one!), and it has been out of circulation
    for 10 years.  Now through the magic of the internet, I am making it
    available to crazy arcade game collectors, and I hope someone gets some
    enjoyment out of it.

    Duncan Brown
