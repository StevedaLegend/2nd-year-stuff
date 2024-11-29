public class Driver {

    public double tax;
    

    public static void main(String[] args) {
        
        RoadVehicle[] road = new RoadVehicle[3];

        Car c1 = new Car(" Honda ", 4, 2, 7);


        road[0] = new HGV(" Con-Way ", 8, 1, 2);

        road[1] = c1;

        for(RoadVehicle rv: road) System.out.println(rv);
        
    }
}
