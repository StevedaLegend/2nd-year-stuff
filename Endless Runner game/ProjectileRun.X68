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
   
spawnEnemyProjectile
    move.l  #1, EnemyProjectileActive
    move.l  EnemyLeft, d1
    cmpi.l  #1, d1
    BEQ     spawnEnemyProjectileLeft

spawnEnemyProjectileLeft
    move.l  #1, EnemyProjectileLeft
    
    move.l  EnemyChunkY, d0
    cmpi.l  #0, d0
    

    BRA     drawEnemyProjectileLeft
       

drawEnemyProjectileLeft
    move.l  EnemyProjectileWidth, d1
    move.l  EnemyProjectileHeight, d2
    move.l  EnemyX, EnemyProjectileX
    move.l  EnemyProjectileX, d0
    sub.l   EnemyProjectileWidth, d0
    move.l  d0, EnemyProjectileX
    move.l  EnemyProjectileX, d3
    move.l  EnemyY, d4
    lsr.l   #FRAC_BITS, d4
    move.l  d4, EnemyProjectileY
    move.l  EnemyProjectileYOffset,d5
    add.l   d5, EnemyProjectileY
    move.l  EnemyProjectileY, d4
    move.l  #0, EnemyProjectileChunkX
    move.l  EnemyProjectileChunkX, d5
    move.l  EnemyProjectileChunkY, d6
    jsr     DRAWIMAGE
    rts

updateProjectileBackground
    move.l  EnemyProjectileActive, d0
    cmpi.l  #1, d0
    BNE     exitProjectileUpdate

    lea     Background, a0
    move.l  EnemyProjectileWidth, d1
    move.l  EnemyProjectileHeight, d2
    move.l  EnemyProjectileX, d3
    move.l  EnemyProjectileY, d4
    move.l  EnemyProjectileX, d5
    move.l  EnemyProjectileY, d6
    jsr     DRAWIMAGE
    
    move.l  EnemyProjectileActive, d0
    cmpi.l  #1, d0
    BNE     exitProjectileUpdate

    move.l  EnemyProjectileLeft, d0
    cmpi.l  #1, d0


updateProjectilePositionLeft
    
    
    move.l  EnemyProjectileX, d0
    sub.l   ProjectileSpeed, d0
    move.l  d0, EnemyProjectileX

    move.l  EnemyProjectileX, d0
    add.l   EnemyProjectileWidth, d0
    cmpi.l  #0, d0
    
    move.l  #0, EnemyProjectileActive

moveProjectileLeft
    move.l  EnemyChunkY, d0
    cmpi.l  #0, d0
    BEQ     updateTinyProjectileLeft
  
    
updateTinyProjectileLeft
    lea     BeamImage, a0

updateDrawProjectileLeft
    move.l  EnemyProjectileWidth, d1
    move.l  EnemyProjectileHeight, d2
    move.l  EnemyProjectileX, d3
    move.l  EnemyProjectileY, d4
    move.l  EnemyProjectileChunkX, d5
    move.l  EnemyProjectileChunkY, d6
    jsr     DRAWIMAGE
    
    BRA     exitProjectileUpdate
      
exitProjectileUpdate
    rts

 














*~Font name~Courier New~
*~Font size~10~
*~Tab type~1~
*~Tab size~4~
