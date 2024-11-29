import java.util.Scanner;

public class Idk {
    
    public static void main(String[] args) {
        
        Scanner myKeyboard = new Scanner(System.in); 

System.out.print("Please enter Your full Name , Middle name And Surname: ");
String name = myKeyboard.nextLine();

String[] nameParts = name.split(" ");

char firstInitial = nameParts[0].charAt(0);
char middleInitial = nameParts[1].charAt(0);
char lastInitial = nameParts[2].charAt(0);

System.out.println ("Initials Are " + firstInitial + middleInitial + lastInitial);
    }
}
