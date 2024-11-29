public class SavingsAccount {

   
    static double savingsbalance;
    static double annualInterestRate;

    public SavingsAccount(double d) {
    }

    // returns the savings account balance
    public double SavingsAccount1(double SavingsBalance){

        return SavingsAccount.savingsbalance = SavingsBalance;}
    
    
        //clauclates the monthly interest

    public void calculateMonthlyInterest(){
        savingsbalance += savingsbalance * (annualInterestRate / 1200);
    }


    public static void modifyInterestRate(double newAnnualInterestRate){

        annualInterestRate = newAnnualInterestRate;
    }

    // finially returns the balance 
    public double getSavingsBalance(){
        return savingsbalance;
    }

}
