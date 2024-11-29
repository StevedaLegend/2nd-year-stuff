public class BankCustomer {

    private String name; 
    private double address;
    static double savingsaccount;
    private double accountnumber;



    public BankCustomer(double d){}


    // using the method has the name and address delcaring the variable

    public void BankCustomer1(String name, double address){

        this.name = name;
        this.address = address;
        
    }
    

    
    public double addAccount(){

       return savingsaccount;
    }
    
    public double Balance(double savingsaccount){

        return BankCustomer.savingsaccount = savingsaccount;
        
    }

    public static void getsummary( double accountnumber){

        
        System.out.println("Here is the account number:   " + accountnumber + "And here is the curresponding balance   "  + savingsaccount);


    }

}
