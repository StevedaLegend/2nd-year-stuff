class Exercise11{

    /*Prints the larger of two integers
    */

   public static int larger(int a, int b) {
    /* Returns the larger of two ints passsed as arguements 
    */

   if (a > b) {
       return a; 
    } else {

       return b; 
    }
}

public static void main(String  args[]) {

    int a,b; 

    a = 5; 
    b = 6; 

    System.out.print("The larger of "  + a + " and ");
    System.out.println(b + " is " + larger (a, b) + '.');
}
}