public class Citizen {
    



    // declaring the private variables
    private String firstname;
    private String lastname; 
    private char gender; 
   private int ppsnumber;
    private char maritalstatus;
    private String maiden;
    private int citizens;
    private static int CitizenCount;



    // constructor method 
    public Citizen(String firstname, String lastname, String string, int ppsnumber, String string2, String maiden, int citizens, int CitizenCount){

        this.firstname = firstname;
        this.lastname = lastname;
        this.gender = 1;
        this.ppsnumber = ppsnumber;
        this.maritalstatus = 1;
        this.maiden = maiden;
        this.citizens = citizens;
        CitizenCount++;


    }


   


    // setter and the gettor methods 
    


    public static int geCitizenCount() {
        return CitizenCount;
}


    public void status(){

        this.gender ='M';
    }

    public int setppsnumber(int ppsnumber){
        
        return this.ppsnumber = ppsnumber; 
    }


    public int getppsnumber(){

        return this.ppsnumber;
    }

    public String setfirstname(String firstname){

        return this.firstname = firstname;
    }

    public String getfirstname(){

        return this.firstname;
    }

    public String setlastname(String lastname){

        return this.lastname = lastname;
    }

    public String getlastname(){

        return this.lastname;
    }

    public int setgender(char M){

        return this.gender;
    }

    public char getgender(){

        return gender;
    }

    public char setmaritalstatus(char M){

        return this.maritalstatus;
    }

    public char getmaritalstatus(){

        return maritalstatus;
    }

    public int setcitizens(){

        return this.citizens;
    }

    public int getcitizens(){

        return citizens;
    }

    public String setmaiden(){

        return this.maiden;
    }

    public String getmaiden(){

        return maiden;
    }

    public int Status(){

        return setgender('M');
    }

    public int Status2(){

        return setmaritalstatus('S');
    }


   


        // printing out the toString 

        public String CitizentoString(){

            return "Firstname:  " + firstname + "Lastname:  " + lastname + "Gender:  " + gender + "PPS number:   " + ppsnumber + "Marital:   " + maritalstatus + "Citizen:   " + citizens;
        }
}
