public class question5 {

    public static void main(String[] args) {
        
        // outprints the answer of the Double f, g, h, and k which is 39.0
        System.out.println( f(2) );

    }
    
    // uses the square root of x
    public static double f(double x) {
        return g(x) + Math.sqrt(h(x));
    }

    // Multiplies 4 by the height x
    public static double g(double x) {
        return 4 * h(x);
    }

    // return x which is 2 multiply by itself plus k and then -1
    public static double h(double x) {
        return x * x + k(x) - 1;
    }

    // return 2 multply it by 2 + 1
    public static double k(double x) {
        return 2 * (x + 1);
    }

    
}
