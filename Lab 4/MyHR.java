import java.util.Scanner;

public class MyHR {

    public static void main(String[] args) {

        Scanner in=new Scanner(System.in);

        Employee[] employee=new Employee[5];

        Office[] office=new Office[3];

        int choice=0;
        while (choice!=4) //Start of While
        {
            System.out.println("Please enter a choice from the following below");
            System.out.println("1. List all offices");
            System.out.println("2. Create a new employee record");
            System.out.println("3. List all employees");
            System.out.println("4. Exit");

            choice=in.nextInt();

            if(choice==1)
            {
                for (Office o: office) {
                    if(o!=null)System.out.println(o.toString());
                }
            }
            else if(choice==2)
            {
                Scanner inemployee=new Scanner(System.in);
                Scanner car=new Scanner(System.in);

                String employeeType="";
                String carmake="";
                String carmodel="";
                double engineSize=0.0;
                String employeeName="";
                String street="";
                String cityTown="";
                String county="";

                for (int i=0;i<5;i++)
                {
                    System.out.println("Please enter Employee Full Name: " + (i+1));
                    employeeName=inemployee.nextLine();

                    System.out.println("Please enter Employee Address: ");
                    System.out.println("Street: ");
                    street=inemployee.nextLine();
                    System.out.println("City/Town: ");
                    cityTown=inemployee.nextLine();
                    System.out.println("County: ");
                    county=inemployee.nextLine();
                    System.out.println("Employee Type: ");
                    employeeType=inemployee.nextLine();
                    if(employeeType.equalsIgnoreCase("Manager"))
                    {
                        System.out.println("Car Make: ");
                        carmake=inemployee.nextLine();
                        System.out.println("Car Model: ");
                        carmodel=inemployee.nextLine();
                        System.out.println("Engine Size: ");
                        engineSize=inemployee.nextDouble();
                    }
                }
            }
            else if(choice==3)
            {
                System.out.println("Option 3");
            }
            if(choice==4)
            {
                System.out.println("Exiting program");
                System.exit(0);
            }
        } //End of While

    }//End of Main

} //End of Class