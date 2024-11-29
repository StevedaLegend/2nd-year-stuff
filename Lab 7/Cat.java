public class Cat extends Animal {

    private String name;
    private int age;
    private String colour;
    private String breed;

    public Cat(String name, int age, String colour, String breed) {

        super(name, breed);

        this.name = name;
        this.age = age;
        this.colour = colour;
        this.breed = breed;

    }

    public void setname(String name) {

        this.name = name;
    }

    public String getname() {

        return name;
    }

    public void setage(int age) {

        this.age = age;
    }

    public int getage() {

        return age;
    }

    public void setcolour(String colour) {

        this.colour = colour;
    }

    public String getcolour() {

        return colour;
    }

    public void setbreed(String breed) {

        this.breed = breed;
    }

    public String getbreed() {

        return breed;
    }

    public String toString() {

        return "  Name: = " + name + "  Age: =" + age + "  Colour: = " + colour + "  Breed: = " + breed;
    }
}
