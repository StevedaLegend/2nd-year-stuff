public class Verifier {
    

    private MyOutOfRangeException ex;


    public void verifyIntRange(int value, int low, int high) throws MyOutOfRangeException {

        if (value < low || value > high) {

            ex = new MyOutOfRangeException(" This value is not in range");
            throw ex;
        }
    }
}
