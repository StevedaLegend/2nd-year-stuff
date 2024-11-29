import java.util.Scanner;

public class VerifyRangeTest {

    public static void main(String[] args) {
        
        Scanner input = new Scanner (System.in);
        int num; 
        String password;



        System.out.print("  Input a number between 1 and 100---->  "); 
        num = input.nextInt();

        input.nextLine();

        System.out.println("Enter in a pasword:  ");

        password = input.nextLine();

        if  (num < 1 || num > 100) {

            System.out.println(" The number  " + num + "  Must be in range between 1 and 100!!!  ");
        } 

        else{ 

            System.out.println("  This number is within range   ");
        }

        System.out.println("The password is  " + password);
    }

    
}
