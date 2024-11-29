

public class Student extends Person {

    private int numCourses;
    private String Courses [] = {"H2215","H2202"};
    private int  grades [] ={92,68};




    public Student(String name, String address){

       super(name, address);
        System.out.println(toString());
    }


    public String toString(){

        return "Student:" + super.toString();
    }

    

    public void addCourseGrade(String courses, int Grades) {

        Courses[numCourses] = courses;

        grades[numCourses] = Grades;

        numCourses++;


    }


    public float getAverageGrade() {

        int length=grades.length;
        int sum=0;
        for (int i=0;i<grades.length;i++)
        {
            sum += grades[i];
        }
        float average=sum/length;
        return average;
    }




    public void printGrades() {

        for (int i=0;i<numCourses;i++)
        {
            System.out.println(Courses[i] + ": " + grades[i]);
        }
        return;


    }



}
