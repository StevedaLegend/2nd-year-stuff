public class HGV extends RoadVehicle {

    public String hgvtype;
    public int numberofwheels;
    public int numberofpassengers;
    public int numberofseats;


    public HGV( String hgvtype, int numberofwheels, int numberofpassengers, int numoofseats){

        this.hgvtype = hgvtype;
        this.numberofwheels = numberofwheels;
        this.numberofpassengers = numberofpassengers;
        this.numberofseats = numoofseats;
    }
    

    @Override
    public double setcalculateDuty(){

        return 0.15;
    }

    public String toString(){

        return " HGV: " + hgvtype + " Number of wheels: " + numberofwheels + " Number of passengers:  " + numberofpassengers + " Number of seats: " + numberofseats;
    }
}
