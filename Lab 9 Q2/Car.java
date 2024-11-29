public class Car extends RoadVehicle {

    public String cartype;
    public int numofwheels;
    public int numofpassengers;
    public int numoofseats;


    public Car( String cartype, int numofwheels, int numofpassengers, int numoofseats){

        this.cartype = cartype;
        this.numofwheels = numofwheels;
        this.numofpassengers = numofpassengers;
        this.numoofseats = numoofseats;
    }
    
    @Override
    public double setcalculateDuty() {

        return 0.10;
    }

    public String toString(){

        return " Car: " + cartype + " Number of wheels: " + numofwheels + " Number of passengers:  " + numofpassengers + " Number of seats: " + numoofseats;
    }
}
