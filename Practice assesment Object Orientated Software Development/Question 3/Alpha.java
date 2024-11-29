public class Alpha {
    

    public static void main(String[] args) {
        
        char c1 = 'A' ;
        
        char c2 = 'B' ;

        char c3 = '2';


        System.out.println(c1 + " is an alphabet letter ? " + isAlpha(c1));
        System.out.println(c2 + " is an alphabet letter ? " + isAlpha(c2));
        System.out.println(c3 + " is an alphabet letter ? " + isAlpha(c3));
    }
   
    public static boolean isAlpha(char c){

        return (c >= 'A' && c <= 'Z') || (c >= 'a' && c <= 'z');
    }
}
