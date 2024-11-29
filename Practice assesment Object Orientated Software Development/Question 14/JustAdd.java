public class JustAdd {

    int x;
    int y;
    int z;

    public static void main(String[] args) {

        x = 5;
        y = 10;
        z = x + y;
    }
}

// The reason why this program is wrong is because you are declaring
// x = 5; in the main debug method when you are supposed to declare it in the
// variables
// The same would be with the y = 10; you are suposed to declare this in the
// varibles
// The X and Y is not decalred as a number in the varibles so therefore you cant
// add them

// Here is the solution to the program problem

// public class JustAdd{

// int x = 5;

// int y = 10;

//  int z;

// public static void main(String[] args) {

// System.out.println("The solution is " + x + y );
// }
// }
