import javax.swing.JFrame;

public class Selectdriver {

	public static void main(String[] args) {

		ColorSelect select = new ColorSelect("ColorSelect");
		select.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		select.setSize(500, 160);
		select.setLocation(500, 400);
		select.setVisible(true);

	}// end main

}// end class
