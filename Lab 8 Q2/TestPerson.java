public class TestPerson {

    public static void main(String[] args) {

        Person[] people = { new Employee("Jason", 2350), new Student(" Steve ", " Software Development ") };

        for (int i = 0; i < people.length; i++) {

            System.out.println("Name: " + people[i].getname());

            System.out.println("Description: " + people[i].getDescription());
        }
    }

}
