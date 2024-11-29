package net.customerpurchasestable.swing;

import java.awt.Color;
import java.awt.Container;
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

public class Customer extends JFrame {
    private static final long serialVersionUID = 1L;
    private JPanel contentPane;
    private JTextField customeridtextField, firstnametextField, lastnametextField, dateofbirthtextField, emailaddresstextField, phonenumbertextField;
    private JLabel labelcustomerid, labelfirstname, labellastname, labeldateofbirth, labelemailaddress, labelphonenumber;
    private JButton button1, goBackButton;

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

    public Customer(final String name) {
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
        contentPane.add(phonenumbertextField);
        phonenumbertextField.setColumns(10);

        button1 = new JButton("Add Customer");
        button1.setFont(new Font("Tahoma", Font.PLAIN, 26));

        goBackButton = new JButton("Go Back");
        goBackButton.setFont(new Font("Segoe UI", Font.BOLD, 24));
        goBackButton.setBounds(610, 641, 205, 67);
        contentPane.add(goBackButton);

        goBackButton.addActionListener(new ActionListener() {

            public void actionPerformed(ActionEvent e) {
                Container parent = goBackButton.getParent();
                while (!(parent instanceof JFrame)) {
                    parent = parent.getParent();
                }
                JFrame frame = (JFrame) parent;
                frame.dispose();
            }
        });
        
        button1.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {

                try {
                    

                    Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/projectwork", "root", "");
                    
                    // creating a PreparedStatement to insert data into the customer table
                    PreparedStatement ps = con.prepareStatement("insert * CustomerID, FirstName, LastName, Address, EmailAddress, PhoneNumber, Password into customers values(?,?,?,?,?,?,?)");

                    // setting the values of the prepared statement
                    ps.setString(1, customeridtextField.getText());
                    ps.setString(2, firstnametextField.getText());
                    ps.setString(3, lastnametextField.getText());
                    ps.setString(4, dateofbirthtextField.getText());
                    ps.setString(5, emailaddresstextField.getText());
                    ps.setString(6, phonenumbertextField.getText());

                    // executing the prepared statement
                    int i = ps.executeUpdate();
                    if (i > 0) {
                        JOptionPane.showMessageDialog(null, "Customer added successfully!");
                        dispose();
                    } else {
                        JOptionPane.showMessageDialog(null, "Sorry, unable to add customer!");
                    }

                } catch (SQLException ex) {
                    ex.printStackTrace();
                }
            }
        });
        button1.setBounds(349, 641, 205, 67);
        contentPane.add(button1);

        labelcustomerid = new JLabel("Customer ID:");
        labelcustomerid.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labelcustomerid.setBounds(115, 35, 248, 67);
        contentPane.add(labelcustomerid);

        labelfirstname = new JLabel("First Name:");
        labelfirstname.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labelfirstname.setBounds(115, 135, 248, 67);
        contentPane.add(labelfirstname);

        labellastname = new JLabel("Last Name:");
        labellastname.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labellastname.setBounds(115, 240, 248, 67);
        contentPane.add(labellastname);

        labeldateofbirth = new JLabel("Address:");
        labeldateofbirth.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labeldateofbirth.setBounds(115, 330, 248, 67);
        contentPane.add(labeldateofbirth);

        labelemailaddress = new JLabel("Email Address:");
        labelemailaddress.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labelemailaddress.setBounds(115, 430, 248, 67);
        contentPane.add(labelemailaddress);

        labelphonenumber = new JLabel("Phone Number:");
        labelphonenumber.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labelphonenumber.setBounds(115, 530, 248, 67);
        contentPane.add(labelphonenumber);
        

        JLabel label = new JLabel("");
        label.setBackground(Color.PINK);
        label.setBounds(0, 0, 1418, 807);
        contentPane.add(label);
    }
}
