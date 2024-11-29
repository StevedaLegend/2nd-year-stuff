import java.util.Calendar;
import java.util.concurrent.TimeUnit;

public class Clock {

public static void main(String[] args) throws InterruptedException {
    


    // prints out the clock going up to 59 seconds and stopping the program

    Calendar cal = Calendar.getInstance();
    Time t1 = new Time(cal.get(Calendar.HOUR_OF_DAY),
    cal.get(Calendar.MINUTE));

    // using the for loop it goes as far as  equals to 59 seconds and then stops

    for (int i = 1; i <= 59; i++) {
        t1.tick();

        // using the SECONDS it prints out the seconds going 1, 2, 3 ,4 etc....

        TimeUnit.SECONDS.sleep(1);

        // prints out the seconds using the for loop

        System.out.println("second:  " + t1.getSecond());

        // if equal to 59 seconds the system stops
        if (i == 59){
            System.exit(1);
        }
    }
}  
}
    

