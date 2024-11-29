public class Teacher extends Person {

       private int numcourses;
       private String courses [];


        public Teacher(String name, String address){
            
            super(name, address);
        }


        public boolean addCourse(String course) {

            return true;
        }


        public boolean removeCourse(String course) {
            return true;
        }
    
        public String toString(){

            return "Teacher: " + super.toString();
        }

}
