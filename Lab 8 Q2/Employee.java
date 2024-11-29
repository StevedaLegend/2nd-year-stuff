public class Employee extends Person{

    private double salary;

    public Employee(String name, double salary) {

        super(name);

        this.salary = salary;
    }


    public void setsalary(double salary) {

        this.salary = salary;
    }

    public double getsalary() {

        return salary;
    }

    public String getDescription() {

        return "  An employee with a salary of  " + salary;
    }

}
