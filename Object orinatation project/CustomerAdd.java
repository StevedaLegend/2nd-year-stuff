import java.awt.Color;
import java.awt.EventQueue;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JTextField;
import javax.swing.border.EmptyBorder;

public class CustomerAdd extends JFrame {

    private static final long serialVersionUID = 1L;
    private JPanel contentPane;
    private JTextField customeridtextField, firstnametextField, lastnametextField, dateofbirthtextField, emailaddresstextField, phonenumbertextField;
    private JLabel labelcustomerid, labelfirstname, labellastname, labeldateofbirth, labelemailaddress, labelphonenumber;
    private JButton button1;
    /**
     * Launch the application.
     */
    public static void main(String[] args) {
        EventQueue.invokeLater(new Runnable() {
            public void run() {
                try {

                } catch (Exception e) {
                    e.printStackTrace();
                }
            }
        });
    }

    /**
     * Create the frame.
     */
    public CustomerAdd(final String name) {
        setBounds(450, 360, 1424, 834);
        setResizable(false);

        contentPane = new JPanel();
        contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
        setContentPane(contentPane);
        contentPane.setLayout(null);

        customeridtextField = new JTextField();
        customeridtextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        customeridtextField.setBounds(373, 35, 609, 67);
        contentPane.add(customeridtextField);
        customeridtextField.setColumns(10);
        
        firstnametextField = new JTextField();
        firstnametextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        firstnametextField.setBounds(373, 135, 609, 67);
        contentPane.add(firstnametextField);
        firstnametextField.setColumns(10);
        
        lastnametextField = new JTextField();
        lastnametextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        lastnametextField.setBounds(373, 240, 609, 67);
        contentPane.add(lastnametextField);
        lastnametextField.setColumns(10);
        
        dateofbirthtextField = new JTextField();
        dateofbirthtextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        dateofbirthtextField.setBounds(373, 330, 609, 67);
        contentPane.add(dateofbirthtextField);
        dateofbirthtextField.setColumns(10);
        
        emailaddresstextField = new JTextField();
        emailaddresstextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        emailaddresstextField.setBounds(373, 430, 609, 67);
        contentPane.add(emailaddresstextField);
        emailaddresstextField.setColumns(10);
        
        phonenumbertextField = new JTextField();
        phonenumbertextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        phonenumbertextField.setBounds(373, 530, 609, 67);
        contentPane.add( phonenumbertextField);
        phonenumbertextField.setColumns(10);

        button1 = new JButton("Enter");
        button1.setFont(new Font("Tahoma", Font.PLAIN, 26));
        button1.setBounds(465, 432, 252, 73);
        button1.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {

                String pstr = customeridtextField.getText();
                try {
                    System.out.println("CustomerID " + name);
                    System.out.println("update password");

                    Connection con = (Connection) DriverManager.getConnection("jdbc:mysql://localhost:3306/projectwork",
                        "root", "");

                    PreparedStatement st = (PreparedStatement) con
                        .prepareStatement("Insert CustomerID, FirstName, LastName, DateOfBirth, EmailAddress, PhoneNumber, Password, ConfirmPassword");

                    st.setString(1, pstr);
                    st.setString(2, name);
                    st.executeUpdate();
                    JOptionPane.showMessageDialog(button1, "Customer information has been successfully added!!");

                } catch (SQLException sqlException) {
                    sqlException.printStackTrace();
                }

            }
        });
        button1.setFont(new Font("Tahoma", Font.PLAIN, 29));
        button1.setBackground(new Color(240, 240, 240));
        button1.setBounds(438, 127, 170, 59);
        contentPane.add(button1);

        labelcustomerid = new JLabel("CustomerID :");
        labelcustomerid.setFont(new Font("Tahoma", Font.PLAIN, 30));
        labelcustomerid.setBounds(45, 37, 326, 67);
        contentPane.add(labelcustomerid);
        
        labelfirstname = new JLabel("First Name :");
        labelfirstname.setFont(new Font("Tahoma", Font.PLAIN, 30));
        labelfirstname.setBounds(45, 147, 326, 67);
        contentPane.add(labelfirstname);
        
        labellastname = new JLabel("Last Name :");
        labellastname.setFont(new Font("Tahoma", Font.PLAIN, 30));
        labellastname.setBounds(45, 237, 326, 67);
        contentPane.add(labellastname);
        
        labeldateofbirth = new JLabel("Date of Birth :");
        labeldateofbirth.setFont(new Font("Tahoma", Font.PLAIN, 30));
        labeldateofbirth.setBounds(45, 327, 326, 67);
        contentPane.add(labeldateofbirth);
        
        labelemailaddress = new JLabel("Email Address :");
        labelemailaddress.setFont(new Font("Tahoma", Font.PLAIN, 30));
        labelemailaddress.setBounds(45, 437, 326, 67);
        contentPane.add(labelemailaddress);
        
        labelphonenumber = new JLabel("Phone Number :");
        labelphonenumber.setFont(new Font("Tahoma", Font.PLAIN, 30));
        labelphonenumber.setBounds(45, 537, 326, 67);
        contentPane.add(labelphonenumber);
        
        
    }
}