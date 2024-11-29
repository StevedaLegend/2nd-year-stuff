import javax.swing.*;
import java.awt.GridLayout;


public class GUI extends JFrame {

  private JTextField textfield = new JTextField();
  private JTextField textfield2 = new JTextField();
  private JButton button = new JButton("Ok");
  private JButton button1 = new JButton("Cancel");
  private JButton button2 = new JButton("Help");
  private JCheckBox checkbox = new JCheckBox("Snap to Grid");
  private JCheckBox checkbox1 = new JCheckBox("Show Grid");
  private JLabel label = new JLabel("X:");
  private JLabel label2 = new JLabel("Y:");
  
  public GUI(String title) {

    super(title);
    getContentPane().setLayout(new GridLayout(3, 2));


    button.setBounds(50, 60, 10, 25);
    button.setBounds(50, 50, 10, 25);
    button.setBounds(50, 50, 10, 25);
    checkbox.setBounds(100, 50, 150, 25);
    checkbox.setBounds(100, 50, 150, 25);

    add(checkbox);
    add(checkbox1);
    add(label);
    add(label2);
    add(checkbox1);
    add(textfield);
    add(textfield2);
    add(button);
    add(button1);
    add(button2);

    textfield.setColumns(1);
    textfield.setText("");

    textfield2.setColumns(1);
    textfield2.setText("");


  }
}
