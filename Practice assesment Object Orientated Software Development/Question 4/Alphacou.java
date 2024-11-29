public class Alphacou {
    
    public static void main(String[] args) {
        

        String amougus; 
        

        System.out.println(" The String " + amougus + " is " + alphaCount(0));
    }

    public static int alphaCount(String amougus){

        int count = 0;

        for( int i = 0; i < amougus.length(); i++ ){

            if (isAlpha(amougus.charAt(i))){

                count ++;
            }
        }

        return count;

    }

    public static boolean isAlpha(char ch) {
        return (ch >= 'a' && ch <= 'z') || (ch >= 'A' && ch <= 'Z');
    }
}
