public class Employee {

    private int employeeid;
    private String name;
    private int manager;
    private String employeetype;

    Employee() {
    }

    public Employee(int employeeid, String name) {

        this.employeeid = employeeid;
        this.name = name;
    }

    public int getemployeeid() {

        return employeeid;
    }

    public void setemployeeid(int employeeid) {

        this.employeeid = employeeid;
    }

    public String getName() {

        return this.name;
    }

    public void setName(String name) {

        this.name = name;
    }

    public int getmanager(){

        return manager;
    } 

    public String getemployeetype(){

        return this.employeetype;
    }

    public void setemployeetype(String employeetype){

        this.employeetype = employeetype;
    }

    public void setmanager(int manager){

            this.manager = manager;
        }

  

    public String toString() {

        return "Employee ID:   " + employeeid + "Name:  " + name + "Employee Type:  " + employeetype;
    }
}
