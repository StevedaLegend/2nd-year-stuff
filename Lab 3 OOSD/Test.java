public class Test {

  public static void main(String[] args) {
    

    // uses the constuctor 
    SavingsAccount saver1 = new SavingsAccount(2000.00);
    SavingsAccount saver2 = new SavingsAccount(3000.00);

    SavingsAccount.annualInterestRate = 4;

    // prints out the first saver and the month and balance after 
    System.out.println("Saver 1");
    System.out.println("Month/Balance");

    // using the for loop it clauclates  the monthly 12 months
    for (int i = 1; i <= 12; i++){

        saver1.calculateMonthlyInterest();
        System.out.println(saver1.getSavingsBalance());
    }

    // prints out the first saver and the month and balance after 
    System.out.println("Saver 2");
    System.out.println("Month/Balance");
    
    // using the for loop it clauclates  the monthly
    for (int i = 1; i <= 12; i++){

        saver2.calculateMonthlyInterest();
        System.out.println(saver2.getSavingsBalance());
    }

    // prints out the savings balance for saver 1 and 2

    System.out.println("Changing Interest rate to 5%");
    SavingsAccount.modifyInterestRate(5);

    System.out.println("Saver 1");

    saver1.calculateMonthlyInterest();
    System.out.printf("New Balance of the saver 1  ",saver1.getSavingsBalance());

    saver2.calculateMonthlyInterest();
    System.out.printf("New Balance of the saver 2",saver2.getSavingsBalance());
  }  

    
}
