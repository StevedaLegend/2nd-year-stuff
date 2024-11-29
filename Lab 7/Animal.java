public class Animal {

    private String name;
    private String animal;

    public Animal(String name, String animal) {

        this.name = name;
        this.animal = animal;

    }

    public String getname() {

        return name;
    }

    public String getanimal() {

        return animal;
    }

    public String toString() {

        return name + "(" + animal + ")";
    }

}
