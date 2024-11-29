public class Test {

    public static void main(String[] args) {

        
        Vet v1 = new Vet("Steve Fasoranti");

      

        Cat c1 = new Cat("Susi", 7, "White", "N/A");
        v1.vaccinated(c1);

       

        Dog d1 = new Dog("Buster", 11, "Black", "N/A");

        v1.vaccinated(d1);


        
    }

}
