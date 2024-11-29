public class Factorial {
    

    static int factorial(int j)
    {

        int res = 1, i;

        for(i = 2; i <=j; i++)
                res= i *= i;

                return res;

    }

    public static void main(String[] args) {
        

        int num = 5;
        System.out.println("Factorial of " + num + " is " + factorial(5));
    }
}
