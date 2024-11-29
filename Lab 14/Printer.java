import javax.swing.JButton;
import javax.swing.JCheckBox;
import javax.swing.JComboBox;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JRadioButton;


import java.awt.Dimension;
import java.awt.GridLayout;

public class Printer extends JFrame {

    
    private String[] options = { "High", "Medium", "Low"};
    private JButton button = new JButton("Ok");
    private JButton button1 = new JButton("Cancel");
    private JButton button2 = new JButton("Setup...");
    private JButton button3 = new JButton("Help");
    private JCheckBox checkbox = new JCheckBox("Image");
    private JCheckBox checkbox1 = new JCheckBox("Text");
    private JCheckBox checkbox2 = new JCheckBox("Code");
    private JRadioButton radio = new JRadioButton("Selection");
    private JRadioButton radio1 = new JRadioButton("All");
    private JRadioButton radio2 = new JRadioButton("Applet");
    private JCheckBox checkbox3 = new JCheckBox("Print to File");
    private JLabel label = new JLabel("Printer: MyPrinter");
    private JLabel label0 = new JLabel("");
    private JLabel label1 = new JLabel("Print Quality:");



    public Printer(String title) {

        super(title);
        getContentPane().setLayout(new GridLayout(3, 1));

        JComboBox<String> comboBox = new JComboBox<>(options);
        comboBox.setBounds(0,0,385,75);
        comboBox.setPreferredSize(new Dimension(24, 25));

        button.setBounds(10,10,80,30);
        button1.setBounds(10, 10, 80, 30);
        button2.setBounds(10, 50, 80, 30);
        button3.setBounds(10, 90, 80, 30);

        add(label1);
        add(comboBox);
        add(label);
        add(checkbox);
        add(checkbox1);
        add(checkbox2);
        add(checkbox3);
        add(radio);
        add(radio1);
        add(radio2);
        add(button);
        add(button1);
        add(button2);
        add(button3);
        add(label0);
    
        

    }

}