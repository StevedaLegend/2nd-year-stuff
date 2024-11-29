*================================================================================*  
*================================================================================*
* Written by : Steve Fasoranti                                                   *
* Date       : 30/1/2023                                                         *
* Description: This is an endless runner game called dash where you have to dodge* 
*               Enemies while they are running towards you                       *
* Bugs: Fixed a bug where the runner would float to the top of the screen instead*
*       of being on the ground. Fixed the runner not being able to print to the  *
*        screen.                                                                 *
*.----------------.  .----------------.  .----------------.  .----------------.  *
*| .--------------. || .--------------. || .--------------. || .--------------. |*
*| |  ________    | || |      __      | || |    _______   | || |  ____  ____  | |*
*| | |_   ___ `.  | || |     /  \     | || |   /  ___  |  | || | |_   ||   _| | |*
*| |   | |   `. \ | || |    / /\ \    | || |  |  (__ \_|  | || |   | |__| |   | |*
*| |   | |    | | | || |   / ____ \   | || |   '.___`-.   | || |   |  __  |   | |*
*| |  _| |___.' / | || | _/ /    \ \_ | || |  |`\____) |  | || |  _| |  | |_  | |*
*| | |________.'  | || ||____|  |____|| || |  |_______.'  | || | |____||____| | |*
*| |              | || |              | || |              | || |              | |*
*| '--------------' || '--------------' || '--------------' || '--------------' |*
*'----------------'  '----------------'  '----------------'  '----------------'  *
*================================================================================*
*================================================================================*
*****************************************************///////////////(///////////
*****************************************************///////////////(///////////
*///////////////////////////////////////////////******///////////////(///////////
*///////////////////////////////////*,,,,,,,*//********,,*//////////////////////
*///*******************************,(%&&&&&&(,******,*#&&%/**///////////////////
*///*****************************/(#/,,**/#&(,******,*#%(/(#(///////////////////
*///**************************/((/*,,/(%%&&&(,,**,,,,*#&&%#((/((**//////////////
**/****************,,,,,,****,/%#,*(#&&&&&&&&%%%%%%%%%&&&&&%**#%**//////////////
**/***************/#%%%&#/***,/%#//(%&#*******,.......,**/#%/*#%*,*/////////////
**/************,*#%(*,,*/(((/,/%&%%%%&&%%(((((/*******/((#%&%%&%*,*/////////////
**/************,*#&%(/*,**(###%&%///#&&%%(((((#########((#%&%%&%*,*///**////////
******************/#%/*((*/((#%&&&&&&&&%%(((((*......,/((#%&&&&%*,*///***///////
*******************,*#%%##(//(#&#*,,(&&%%#####/*******(###%&##%%*,********//////
*******************/((#%&%%#(/(#%%%%%&&%%%&&#(#%%%%%%#((%&&&%##(************////
*****************(#/*//***/%%#((##%&&&&%%%&&/.(&&&&&&%*,(&&%(****************///
***************,*#&#(****(%&@@@@&%%&&%%%%%&&&&&&&&&&&&&&&&&%/,***************///
***************,*(%%#((%%&#(////#&@&&&%%%%&&(,,,*****,,*#&&%/,..,**,     .,***//
****************,,*%&%#(((#%%%%%%%&&&&&&&&@@%###%&&%%###&@@&/,,,....  ...,****//
*,,,,,,,,,,,,,,,,,,*%@%%%%%&@@@@@@@@@&&&&(*******#&&&@@@@@&(**,,,,,,,,,,,******//
*,,,,,,,,,,,,,,,,,,,,/%@@@@%*,,,,(&&&%%%%(*******(&&&(,,,,,,,,,,,,,,***,,*******,
*,,,,,,,,,,,,,,,,,,,,,,,,,,,,*/(%&&%%%%(******/#%&&#/*,,,,,,,,,,,,,**********/(%%
*,,,,,,,,,,,,,,,,,,,,,,,,,,*(#%%%%%%%#(/***/(#%%%##&&(,,,,,,,,,,,,,,,,,,,.*(#%%##
*,,,,,,,,..............,,/%%##%%%%%&@@&&&&&@@&%%%##&&(,,,,,,,,,,,,,,,,,.*#%%#((((
*,,,,,,,..............,/%&##%&&&&&&#,,,,,,,,,#@%###%&/,,,,,,,,,,,,,,..*%&%#((((((
*......................*(######(,............/#####*.............,**/%&%%#####%&&
*((((((((((((((((((((((((######(((((((((((((((#####((((((((((((((((((((#(((#####%
 

    ORG    $2000
START:                

SPACE_KEY               equ $20
Gravity                 equ $9C    
GET_USER_INPUT_COMMAND  equ 19
RunnerStartSpriteX      equ 160
EnemyStartSpriteX       equ 129
FRAC_BITS               equ 4


*------------------------------------------------------------*
*------------------------------------------------------------*
*--------------Main Game screen change code------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*

        move.b  #(ScreenChangeCode) , d0 ;Changes the screen code and applies it to D0
        move.l  #700*$10000+600, d1      ;The resolution of the screen is set to 700 X 600
        trap    #15                      ;Print out the resolution

*------------------------------------------------------------*
*------------------------------------------------------------*
*---------Loading in the loading image using draw image------* 
*------------------------------------------------------------*
*------------------------------------------------------------*
       
        LEA     LoadingImage, a0         ;Print out the loading screen image
        move.l  #160, d1                 ;Move the value 160 into D1
        move.l  #170, d2                 ;Move the value 170 into D2
        move.l  #270, d3                 ;Move the value 270 into D3
        move.l  #250, d4                 ;Move the value 250 into D4
        move.l  #0, d5                   ;Move the value 0 into D5
        move.l  #0, d6                   ;Move the value 0 into D6
        jsr     DRAWIMAGE                ;We use JSR to draw the image with the DRAWIMAGE declared variable 
 
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Enable the double buffering--------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*
        
        move.b  #92, d0                 ;Move the value 92 into D0
        move.b  #17, d1                 ;Move the value 17 into d1
        trap    #15                     ;Enable the double buffering so the image after the loading screen can load 

*------------------------------------------------------------*
*------------------------------------------------------------*
*------Load in the title music at memory location 0----------*
*------------------------------------------------------------*
*------------------------------------------------------------*        

        lea     TitleScreenMusic, a1   ;Print out the music at the memory location 0 from the addressline
        move.b  #0,d1                  ;Move the value 0 into D1 
        move.l  #74,d0                 ;Move the value 74 into D0
        Trap    #15                    ;The TitleScreenMusic variable is now used

*------------------------------------------------------------*
*------------------------------------------------------------*
*---------Load in the in game music at location 1------------*
*------------------------------------------------------------*
*------------------------------------------------------------*
     
        lea     GameMusic, a1         ;Print out the music after the memory location 0 except this is in location 1
        move.b  #1,d1                 ;Move the value 1 into D1
        move.l  #74,d0                ;Move the value 74 into D0
        Trap    #15                   ;The GameMusic variable is now used

*------------------------------------------------------------*
*------------------------------------------------------------*
*-----Reseting the varibles for the runner-------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*
ResetBattleVariables
        move.l  #10,RunnerX          ;Move the value 10 into the RunnerX variable declared below
        move.l  #550, RunnerY        ;Move the value 550 into the RunnerY variable declared below
        move.l  #160, RunnerChunkX   ;Move the value 160 into the RunnerChunkX variable declared below
        move.l  #0, RunnerChunkY     ;Move the value 0 into the RunnerChunkY variable declared below
        move.l  #10, RunnerSpeed     ;Move the value 10 into the RunnerSpeed variable declared below
        move.l  #0, RunnerJumping    ;Move the value 0 into the RunnerJumping variable declared below
        move.l  #8, RunnerHealth     ;Move the value 8 into the RunnerHealth variable declared below
        
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Reseting the varibles for the enemy------------*
*------------------------------------------------------------*
*------------------------------------------------------------*
        move.l  #636, EnemyX        ;Move the value 636 into the EnemyX variable declared below
        move.l  #540, EnemyY        ;Move the value 540 into the EnemyY variable declared below
        move.l  #129, EnemyChunkX   ;Move the value 129 into the EnemyChunkX variable declared below
        move.l  #0, EnemyChunkY     ;Move the value 0 into the EnemyChucnkY variable declared below
        move.l  #10, EnemySpeed     ;Move the value 10 into the EnemySpeed variable declared below
        move.l  #16, EnemyProjectileWidth
        move.l  #12, EnemyProjectileHeight
        move.l  #15, EnemyProjectileYOffset
        move.l  #1, EnemyProjectileDamage
*------------------------------------------------------------*
*------------------------------------------------------------*
*----Draw the Title screen after the loading screen----------*
*------------------------------------------------------------*
*------------------------------------------------------------*
 
        lea     TitleScreen, a0    ;Print out the TitleScreen variable
        move.l  #700, d1           ;Move the value 700 into d1 (image width)
        move.l  #600, d2           ;Move the value 600 into d2 (image length)
        move.l  #0, d3             ;Move the value 0 into d3
        move.l  #0, d4             ;Move the value 0 into d4
        move.l  #0, d5             ;Move the value 0 into d5
        move.l  #0, d6             ;Move the value 0 into d6
        jsr     DRAWIMAGE          ;We use JSR to use the DRAWIMAGE to draw the Title screen
        
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Enable the double buffering--------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*

        move.b  #94, d0            ;Move the value 94 into D0
        trap    #15                ;Enable the double buffering so the image can load one after the other 
        
        
*-------------------------------------------------------------*
*-------------------------------------------------------------*
*------Play music for the title screen only-------------------*
*-------------------------------------------------------------*
*-------------------------------------------------------------*        

        move.b  #0, d1             ;Move the value 0 into D1
        move.l  #2, d2             ;Move the value 2 into D2
        move.l  #75, d0            ;Move the value 75 into D0
        trap    #15                ;Music is now played
  

*------------------------------------------------------------*
*------------------------------------------------------------*
*------Draw the background of the battle scene---------------*
*------------------------------------------------------------*
*------------------------------------------------------------*      

        lea     BackGround, a0    ;Draw the background for the main gameplay
        move.l  #700, d1          ;Move the value 700 into D1 (Width of the image)
        move.l  #550, d2          ;Move the value 550 into D2 (Length of the image) 
        move.l  #0, d3            ;Move the value 0 into D3 
        move.l  #50, d4           ;Move the value 50 into D4 
        move.l  #0, d5            ;Move the value 0 into D5
        move.l  #50, d6           ;Move the value 50 into D6 
        jsr     DRAWIMAGE         ;Use JSR to use the DRAWIMAGE to Draw the Background 
        
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Store the players velocity---------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*        

        move.l  RunnerVelocity, d0 ;Move the RunnersVelocity variable into D0
        lsl     #FRAC_BITS, d0     ;Logical shift the Fractional Bits (pixels) into D0 
        move.l  d0, RunnerVelocity ;Move the D0 into the runners velocity 
        
        
*------------------------------------------------------------*
*------------------------------------------------------------*
*---------Store Players postions to the Y coordinate---------*
*------------------------------------------------------------*
*------------------------------------------------------------*

        move.l  RunnerY, d0
        lsl     #FRAC_BITS, d0
        move.l  d0, RunnerY        
        move.l  EnemyY, d0
        lsl     #FRAC_BITS, d0
        move.l  d0, EnemyY
*------------------------------------------------------------*
*------------------------------------------------------------*
*--------------Set a black color-----------------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*

        move.l      #80, d0
        move.l      #$00000000, d1
        trap        #15
        move.l      #81, d0
        move.l      #$00000000, d1
        trap        #15
        
        
*------------------------------------------------------------*
*------------------------------------------------------------*
*-----------Draw the black box at the top of the screen------*
*------------------------------------------------------------*
*------------------------------------------------------------*       

        move.w      #0, d1
        move.w      #0, d2
        move.w      #700, d3
        move.w      #50, d4
        move.l      #87, d0
        trap        #15
*------------------------------------------------------------*
*------------------------------------------------------------*
*--------------------Draw Health Bar-------------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*       

        jsr     DrawPlayer1Health
               
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------Draw the amount of health the player has-------------*
*------------------------------------------------------------*
*------------------------------------------------------------*
        
        move.l  RunnerHealth, d0
        jsr     updateHealth
        jsr     updateHealth
        jsr     drawPlayerCall
        jsr     drawEnemyCall
        
*------------------------------------------------------------*
*------------------------------------------------------------*
*-----Check and see if the user presses the key to start-----*
*------------------------------------------------------------*
*------------------------------------------------------------*        
TitleLoop
        move.b          #GET_KEY_INPUT_COMMAND,d0
        move.l          #SPACE_KEY,d1
        TRAP            #15
        cmpi.l          #0, d1
        BEQ             TitleLoop
        
        
*---------------------------------------------------------------------------------------------*
*---------------------------------------------------------------------------------------------*
*-------Pause the location 0 music  and move onto the location 1 music -----------------------*
*---------------------------------------------------------------------------------------------*
*---------------------------------------------------------------------------------------------*                

        move.b  #0,d1 
        move.l  #2,d2
        move.l  #77,d0
        Trap    #15
        
        move.b  #1, d1
        move.l  #1, d2
        move.l  #77, d0
        trap    #15
        
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Enable the double buffering--------------------*
*------------------------------------------------------------*
*------------------------------------------------------------* 
        move.b  #94, d0
        trap    #15

*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Inisilise the main game loop-------------------*
*------------------------------------------------------------*
*------------------------------------------------------------* 
GAMELOOP:
    jsr     updatePlayersBackgrounds
    jsr     initRunnerInput
    jsr     updateRunnerGravity
    jsr     drawPlayers
    jsr     updateProjectilesBackgrounds
    jsr     CheckProjectileCollision 


   
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Enable the double buffering--------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*     
    move.b  #94, d0                     
    trap    #15

*---------------------------------------------------------------------------------------------*
*---------------------------------------------------------------------------------------------*
*-------------Check and see the players health if its at 0 print GAME OVER--------------------*
*---------------------------------------------------------------------------------------------*
*---------------------------------------------------------------------------------------------*     

    move.l  RunnerHealth, d0
    cmpi.l  #1, d0

    
    bra     GAMELOOP                  
    
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Draw the game over banner----------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*       
EnemyWINROUTINE  

    jsr     updatePlayersBackgrounds
    
    jsr     updateProjectilesBackgrounds
    
    lea     GameOverBanner, a0
    move.l  #700, d1
    move.l  #100, d2
    move.l  #0, d3
    move.l  #300, d4
    move.l  #0, d5
    move.l  #0, d6
    jsr     DRAWIMAGE
    
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Draw where the runners dead pos is ------------*
*------------------------------------------------------------*
*------------------------------------------------------------* 
    
    move.l  #10, RunnerX
    move.l  #540, RunnerY
    move.l  RunnerY, d0
    lsl.l   #4, d0
    move.l  d0, RunnerY
    move.l  #160, RunnerChunkX
    jsr DrawPlayerCall
    

    Trap    #15
  
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Enable the double buffering--------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*   

    move.b  #94, d0
    trap    #15
    
*-------------------------------------------------------------------------------*
*-------------------------------------------------------------------------------*
*-------------Stay on the game loop until user presses SPACE--------------------*
*-------------------------------------------------------------------------------*
*-------------------------------------------------------------------------------* 
EnemyWINLOOP
    move.b          #GET_KEY_INPUT_COMMAND,d0
    move.l          #$20,d1
    TRAP            #15
    cmpi.l          #0, d1
    BNE             ResetBattleVariables
    BRA             EnemyWINLOOP
   
    
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Draw the dead runner image---------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*     
    lea     DeadRunner, a0
    move.l  #50, d1
    move.l  #30, d2
    move.l  #10, d3
    move.l  #560, d4
    move.l  #0, d5
    move.l  #0, d6
    jsr     DRAWIMAGE
    
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Enable the double buffering--------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*     
    move.b  #94, d0
    trap    #15
    
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Update the projectiles background--------------*
*------------------------------------------------------------*
*------------------------------------------------------------*  
updateProjectilesBackgrounds
    jsr     updateProjectileBackGround
    rts

*------------------------------------------------------------*
*------------------------------------------------------------*
*----------------------SUBROUTINES---------------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*     


*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Load in values for runner and enemy------------*
*------------------------------------------------------------*
*------------------------------------------------------------* 
DrawPlayerCall
    lea     Runner, a0
    move.l  RunnerWidth, d1
    move.l  RunnerHeight, d2
    move.l  RunnerX, d3
    move.l  RunnerY, d4 
    lsr     #4, d4
    move.l  RunnerChunkX, d5
    move.l  RunnerChunkY, d6
    jsr     DRAWIMAGE
    
    rts   
DrawEnemyCall
    lea     Enemy, a0
    move.l  EnemyWidth, d1
    move.l  EnemyHeight, d2
    move.l  EnemyX, d3
    move.l  EnemyY, d4
    lsr     #FRAC_BITS, d4
    move.l  EnemyChunkX, d5
    move.l  EnemyChunkY, d6
    jsr     DRAWIMAGE
    
    rts
    
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Draw the health bar for the runner-------------*
*------------------------------------------------------------*
*------------------------------------------------------------* 
DrawPlayer1Health

     lea     RunnersHealth, a0
    move.l  #200, d1
    move.l  #50, d2
    move.l  #0, d3
    move.l  #0, d4
    move.l  #0, d5
    move.l  #0, d6
    jsr     DRAWIMAGE
    rts
*------------------------------------------------------------*
*------------------------------------------------------------*
*--------Draw background for both runner and enemy-----------*
*------------------------------------------------------------*
*------------------------------------------------------------* 
updatePlayersBackgrounds
    lea     BackGround, a0
    move.l  RunnerWidth, d1
    move.l  RunnerHeight, d2
    move.l  RunnerX, d3
    move.l  RunnerY, d4
    lsr     #FRAC_BITS, d4
    move.l  RunnerX, d5
    move.l  RunnerY, d6
    lsr     #FRAC_BITS, d6
    jsr     DRAWIMAGE
    lea     BackGround, a0
    move.l  EnemyWidth, d1
    move.l  EnemyHeight, d2
    move.l  EnemyX, d3
    move.l  EnemyY, d4
    lsr     #FRAC_BITS, d4
    move.l  EnemyX, d5
    move.l  EnemyY, d6
    lsr     #FRAC_BITS, d6
    jsr     DRAWIMAGE
    rts
    
*-*Draw over both score backgrounds
updateScoreBackGround
    move.l      #80, d0
    move.l      #$00000000, d1
    trap        #15
    
    move.l      #81, d0
    move.l      #$00000000, d1
    trap        #15

    move.w      #205, d1
    move.w      #5, d2
    move.w      #235, d3
    move.w      #50, d4
    move.l      #87, d0
    trap        #15
    
    move.w      #460, d1
    move.w      #5, d2
    move.w      #495, d3
    move.w      #50, d4
    move.l      #87, d0
    trap        #15
    
    rts

*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------Draw both runner and enemy---------------------*
*------------------------------------------------------------*
*------------------------------------------------------------* 
drawPlayers 
      
    lea     Runner, a0
    move.l  RunnerWidth, d1
    move.l  RunnerHeight, d2
    move.l  RunnerX, d3
    move.l  RunnerY, d4
    lsr     #FRAC_BITS, d4
    move.l  RunnerChunkX, d5
    move.l  RunnerChunkY, d6
    jsr     DRAWIMAGE
    
    lea     Enemy, a0
    move.l  EnemyWidth, d1
    move.l  EnemyHeight, d2
    move.l  EnemyX, d3
    move.l  EnemyY, d4
    lsr     #FRAC_BITS, d4
    move.l  EnemyChunkX, d5
    move.l  EnemyChunkY, d6
    jsr     DRAWIMAGE
    
    move.b  #94, d0
    trap    #15
    
    rts
    
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------LIST OF VARIABLES AND CONSTANTS----------------*
*------------------------------------------------------------*
*------------------------------------------------------------* 

RunnerWidth
    dc.l   32
RunnerHeight
    dc.l   41 
RunnerX
    dc.l   10
RunnerY
    dc.l    550
RunnerChunkX
    dc.l    160
RunnerChunkY
    dc.l    0
RunnerSpeed
    dc.l    10
RunnerJumping
    dc.l    0
RunnerHealth
    dc.l    8
RunnerIdleSprite
    dc.l    160
RunnerJumpSprite
    dc.l    256 
RunnerDamageSprite
    dc.l    288 
RunnerVelocity
    dc.l    01
    
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------ENEMY VARIABLES AND CONSTANTS------------------*
*------------------------------------------------------------*
*------------------------------------------------------------* 

EnemyWidth
    dc.l   32
EnemyHeight
    dc.l    46 
EnemyX
    dc.l    636
EnemyY
    dc.l    540
EnemyChunkX
    dc.l    129
EnemyChunkY
    dc.l    0
EnemySpeed
    dc.l    10
EnemyIdleSprite
    dc.l    129
EnemyVelocity
    dc.l    01 
EnemyProjectileActive
    dc.l    0
EnemyProjectileLeft
    dc.l    0
EnemyProjectileWidth
    dc.l    16
EnemyProjectileHeight
    dc.l    12
EnemyProjectileX
    dc.l    700
EnemyProjectileY
    dc.l    10
EnemyProjectileYOffset
    dc.l    10
EnemyProjectileChunkX
    dc.l    42
EnemyProjectileChunkY
    dc.l    0
EnemyProjectileDamage
    dc.l    1
EnemyLeft
    dc.l    1
ProjectileSpeed
    dc.l    20
EnemyBeamSprite
   dc.l    224

    
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------GAME VARIABLES AND CONSTANTS-------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*     
    
Ground
    dc.l    550    
RunnerScoreX
    dc.l    200
 
    
*----------------------------------*
*----------------------------------*
*-------------MUSIC----------------*
*----------------------------------*
*----------------------------------*
TitleScreenMusic
    dc.l    'Titlescreen.wav',0
GameMusic
    dc.l    'Ingame.wav',0

EnemyProjectileShot
    dc.l    'Hit.wav',0    
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------IMAGES-----------------------------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*   
Background
    INCBIN "Game1.bmp"
LoadingImage
    INCBIN "loadinggame.bmp"
TitleScreen
    INCBIN "Titlesmall.bmp"
  
    
    
Runner
    INCBIN "updated.bmp"
Enemy
    INCBIN "Enemy1.bmp"
RunnersHealth
    INCBIN "RunnersHealth.bmp"
    
BeamImage
    INCBIN "projectilesprites.bmp"    
    
GameOverBanner
    INCBIN "Gameover.bmp"
DeadRunner
    INCBIN "Deadrunner.bmp"  
    
*------------------------------------------------------------*
*------------------------------------------------------------*
*-------------------INCLUDE OTHER FILES----------------------*
*------------------------------------------------------------*
*------------------------------------------------------------*
 include "drawpixels.x68"  
 include "playerinput.x68"
 include "healthdisplay.x68"
 include "gravityroutines.x68"
 include "ProjectileRun.x68"
 include "ProjectileHit.x68"

   

QUIT
            END    START    


























































*~Font name~Courier New~
*~Font size~10~
*~Tab type~1~
*~Tab size~4~
