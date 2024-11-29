public class Office {

private int officenumber;
private int occupied;

    

Office(){}

public Office(int officenumber, int occupied){

    this.officenumber = officenumber;
    this.occupied = occupied;

}

public int getofficenumber() {
    
    return officenumber;
}

public void setofficenumber(int officenumber) {

    this.officenumber = officenumber;
}

public int getoccupied(){

    return occupied;
}

public void setoccupied(int occupied){

    this.occupied = occupied;
}

 

public String toString() {

    return "Office number:   " + officenumber + "Occupied by:   " + occupied;
}
}
