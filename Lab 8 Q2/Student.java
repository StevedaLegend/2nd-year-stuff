public class Student extends Person {


    private String course;

    public Student(String name, String course) {

        super(name);

        this.course = course;

    }

    public void setcourse(String course) {

        this.course = course;
    }

    public String getcourse() {

        return course;
    }

    public String getDescription() {

        return "  A student studying" + course;
    }
}
