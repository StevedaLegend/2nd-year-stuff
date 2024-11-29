//Converts a Fahrenheit temperature entered by the user to Celsius, or vice versa

import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JTextField;

public class ConvertTemp extends JFrame {

	private JTextField fahrenField = new JTextField();
	private JTextField celsiusField = new JTextField();
	private JButton convertButton=new JButton("Convert");
	

	// Constructor
	public ConvertTemp(String title) {
		// Set title for frame and choose layout
		super(title);
		getContentPane().setLayout(new GridLayout(3, 2));

		// Add Fahrenheit label and text field to frame
		add(new JLabel("Fahrenheit"));
		add(fahrenField);
		fahrenField.addActionListener(new FahrenheitConvertListener());
		// Attach listener to text field
	

		// Add Celsius label and text field to frame
		add(new JLabel("Celsius"));
		add(celsiusField);
		celsiusField.addActionListener(new CelsiusConvertListener());
		// Attach listener to text field
		
		add(convertButton);
		convertButton.addActionListener(new FahrenheitConvertListener());
		convertButton.addActionListener(new CelsiusConvertListener());
		// Attach window listener
		addWindowListener(new WindowCloser());
	}// end costructor

	class FahrenheitConvertListener implements ActionListener {
		public void actionPerformed(ActionEvent evt) {
			double fahrenheit = Double.parseDouble(evt.getActionCommand());
			double celsius = (fahrenheit-32)*5/9;
			celsiusField.setText(Double.toString(celsius));
		}
	}
	class CelsiusConvertListener implements ActionListener {
		public void actionPerformed(ActionEvent evt) {
			double celsius = Double.parseDouble(evt.getActionCommand());
			double fahrenheit = (celsius*1.8)+32;
			fahrenField.setText(Double.toString(fahrenheit));
		}
	}

	}
	// Listener for window
	class WindowCloser extends WindowAdapter {
		public void windowClosing(WindowEvent evt) {
			System.exit(0);
		}
	}
// end class
