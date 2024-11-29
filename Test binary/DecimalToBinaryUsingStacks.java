/*
 *  Java Program to Convert a Decimal Number 
 *  to Binary Number using Stacks
 */

import java.util.*;

/*  DecimalToBinaryUsingStacks  */
public class DecimalToBinaryUsingStacks {
    public static void main(String[] args) {
        try (Scanner scan = new Scanner(System.in)) {
            /* Creating Stack object */
            Stack<Integer> stk = new Stack<Integer>();
            /* Accepting number */
            System.out.println("Enter decimal number");
            int num = scan.nextInt();

            while (num != 0) {
                int d = num % 2;
                stk.push(d);
                num /= 2;
            }
            /* Print Binary equivalent */
            System.out.print("\nBinary equivalent = "); 
            while (!(stk.isEmpty())) {
                System.out.print(stk.pop());
            }
        }
        System.out.println();
    }
}
