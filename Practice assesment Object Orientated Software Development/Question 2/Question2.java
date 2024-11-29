public class Question2 {
    
   public static void main(String[] args) {
    

      int num =  20;
      
      int num1 = 30; 
      
      int num2 = 3;

      System.out.println(num + " is even: " + isEven(num));
        System.out.println(num1 + " is even: " + isEven(num1));
        System.out.println(num2 + " is even: " + isEven(num2));
    }
    
    public static boolean isEven(int num) {
        return num % 2 == 0;
    }
}


