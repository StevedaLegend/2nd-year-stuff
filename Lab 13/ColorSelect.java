import javax.swing.JButton;
import javax.swing.JCheckBox;
import javax.swing.JComboBox;
import javax.swing.JFrame;
import javax.swing.JLabel;

import java.awt.Dimension;
import java.awt.GridLayout;

public class ColorSelect extends JFrame {

    private String[] options = { "RED" };
    private JButton button = new JButton("Ok");
    private JButton button1 = new JButton("Cancel");
    private JCheckBox checkbox = new JCheckBox("background");
    private JCheckBox checkbox1 = new JCheckBox("foreground");
    private JLabel label = new JLabel("");


    public ColorSelect(String title) {

        super(title);
        getContentPane().setLayout(new GridLayout(3, 2));

        JComboBox<String> comboBox = new JComboBox<>(options);
        comboBox.setBounds(0,0,385,75);
        comboBox.setPreferredSize(new Dimension(24, 25));

        
        add(comboBox);
        add(label);
        add(checkbox);
        add(checkbox1);
        add(button);
        add(button1);
        

    }

}
