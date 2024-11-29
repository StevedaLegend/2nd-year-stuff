import javax.swing.JFrame;

public class Printerdriver {

	public static void main(String[] args) {

		Printer choice = new Printer("Printer");
		choice.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		choice.setSize(600, 210);
		choice.setLocation(500, 400);
		choice.setVisible(true);

	}// end main

}// end class
