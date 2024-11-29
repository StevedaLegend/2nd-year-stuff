* .----------------.  .----------------.  .----------------.  .----------------.  .----------------.  .----------------.  .----------------.  .----------------.  .----------------.  .----------------. 
*| .--------------. || .--------------. || .--------------. || .--------------. || .--------------. || .--------------. || .--------------. || .--------------. || .--------------. || .--------------. |
*| |   ______     | || |  _______     | || |     ____     | || |     _____    | || |  _________   | || |     ______   | || |  _________   | || |     _____    | || |   _____      | || |  _________   | |
*| |  |_   __ \   | || | |_   __ \    | || |   .'    `.   | || |    |_   _|   | || | |_   ___  |  | || |   .' ___  |  | || | |  _   _  |  | || |    |_   _|   | || |  |_   _|     | || | |_   ___  |  | |
*| |    | |__) |  | || |   | |__) |   | || |  /  .--.  \  | || |      | |     | || |   | |_  \_|  | || |  / .'   \_|  | || | |_/ | | \_|  | || |      | |     | || |    | |       | || |   | |_  \_|  | |
*| |    |  ___/   | || |   |  __ /    | || |  | |    | |  | || |   _  | |     | || |   |  _|  _   | || |  | |         | || |     | |      | || |      | |     | || |    | |   _   | || |   |  _|  _   | |
*| |   _| |_      | || |  _| |  \ \_  | || |  \  `--'  /  | || |  | |_' |     | || |  _| |___/ |  | || |  \ `.___.'\  | || |    _| |_     | || |     _| |_    | || |   _| |__/ |  | || |  _| |___/ |  | |
*| |  |_____|     | || | |____| |___| | || |   `.____.'   | || |  `.___.'     | || | |_________|  | || |   `._____.'  | || |   |_____|    | || |    |_____|   | || |  |________|  | || | |_________|  | |
*| |              | || |              | || |              | || |              | || |              | || |              | || |              | || |              | || |              | || |              | |
*| '--------------' || '--------------' || '--------------' || '--------------' || '--------------' || '--------------' || '--------------' || '--------------' || '--------------' || '--------------' |
*'----------------'  '----------------'  '----------------'  '----------------'  '----------------'  '----------------'  '----------------'  '----------------'  '----------------'  '----------------' 
CheckProjectileCollision


BeamHitRunner
    *Player 1 has been hit.  Subtract the beam damage from health
    move.l  RunnerHealth, d1
    sub.l   EnemyProjectileDamage, d1
    *Check if player health is below 0
    cmpi.l  #0, d1
    BGE     ContinueBeamHitRunner
    * if it is, set health to 0
    jsr     SetHealthToZero
ContinueBeamHitRunner 
*update player health and sprite
    move.l  d1, RunnerHealth
    move.l  RunnerDamageSprite, RunnerChunkX
    
    move.l  #0, EnemyProjectileActive
    
    *draw background behind player
    lea     BackGround, a0
    move.l  EnemyProjectileWidth, d1
    move.l  EnemyProjectileHeight, d2
    move.l  EnemyProjectileX, d3
    move.l  EnemyProjectileY, d4
    move.l  EnemyProjectileX, d5
    move.l  EnemyProjectileY, d6
    jsr     DRAWIMAGE
    *draw updated score for players
    jsr     updateScoreBackGround
    move.l  RunnerHealth, d0
    move.l  RunnerScoreX, d5
    jsr     updateHealth
    
       
SetHealthToZero
    move.l  #0, d1
    rts













*~Font name~Courier New~
*~Font size~10~
*~Tab type~1~
*~Tab size~4~
