public class Vet {

    // Variables
    private String name;

    public Vet(String name) {

        this.name = name;
    }

    public void vaccinated(Animal animal) {

        System.out.println(name + " is vaccinating");

        if (animal instanceof Dog) {

            System.out.println("Dog has been vaccinated, " + animal.toString());
        }

        else if (animal instanceof Cat) {

            System.out.println("Cat has been vaccinated, " + animal.toString());
        }

    }


    public String getname(String name) {

        return name;
    }

    public String toString() {

        return name + " is Vaccinating";
    }
}
