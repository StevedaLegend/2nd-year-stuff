import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.sql.*;
import java . sql .Connection;
import java . sql .DriverManager;
import java . sql .PreparedStatement;
import java . sql .SQLException;


public class CustomerTableGUI extends JFrame {
    private JLabel customerIDLabel, firstNameLabel, lastNameLabel, dateOfBirthLabel, emailAddressLabel, phoneNumberLabel, passwordLabel;
    private JTextField customerIDTextField, firstNameTextField, lastNameTextField, dateOfBirthTextField, emailAddressTextField, phoneNumberTextField, passwordTextField;
    private JButton createButton, clearButton;

    public CustomerTableGUI() {
        setTitle("Customer Information");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setSize(400, 300);
        setLocationRelativeTo(null);

        JPanel panel = new JPanel(new GridLayout(8, 2));

        customerIDLabel = new JLabel("Customer ID:");
        panel.add(customerIDLabel);
        customerIDTextField = new JTextField();
        panel.add(customerIDTextField);

        firstNameLabel = new JLabel("First Name:");
        panel.add(firstNameLabel);
        firstNameTextField = new JTextField();
        panel.add(firstNameTextField);

        lastNameLabel = new JLabel("Last Name:");
        panel.add(lastNameLabel);
        lastNameTextField = new JTextField();
        panel.add(lastNameTextField);

        dateOfBirthLabel = new JLabel("Date of Birth (yyyy-mm-dd):");
        panel.add(dateOfBirthLabel);
        dateOfBirthTextField = new JTextField();
        panel.add(dateOfBirthTextField);

        emailAddressLabel = new JLabel("Email Address:");
        panel.add(emailAddressLabel);
        emailAddressTextField = new JTextField();
        panel.add(emailAddressTextField);

        phoneNumberLabel = new JLabel("Phone Number:");
        panel.add(phoneNumberLabel);
        phoneNumberTextField = new JTextField();
        panel.add(phoneNumberTextField);

        passwordLabel = new JLabel("Password:");
        panel.add(passwordLabel);
        passwordTextField = new JTextField();
        panel.add(passwordTextField);

        createButton = new JButton("Create");
        panel.add(new JLabel());
        panel.add(createButton);

        clearButton = new JButton("Clear");
        panel.add(new JLabel());
        panel.add(clearButton);

        add(panel);
        setVisible(true);

        createButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                try {
                    Class.forName("com.mysql.jdbc.driver");
                    Connection con = DriverManager.getConnection("jdbc:mysql://localhost/customers purchases", "root", "");

                    String query = "INSERT INTO customer information (CustomerID, FirstName, LastName, DateOfBirth, EmailAddress, PhoneNumber, password) VALUES (?, ?, ?, ?, ?, ?, ?)";

                    PreparedStatement pstmt = con.prepareStatement(query);
                    pstmt.setString(1, customerIDTextField.getText());
                    pstmt.setString(2, firstNameTextField.getText());
                    pstmt.setString(3, lastNameTextField.getText());
                    pstmt.setString(4, dateOfBirthTextField.getText());
                    pstmt.setString(5, emailAddressTextField.getText());
                    pstmt.setString(6, phoneNumberTextField.getText());
                    pstmt.setString(7, passwordTextField.getText());

                    pstmt.execute();

                    con.close();

                    JOptionPane.showMessageDialog(null, "Customer created successfully");
                } catch (Exception ex) {
                    JOptionPane.showMessageDialog(null, "Error: " + ex.getMessage());
                }
            }
        });

        clearButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                customerIDTextField.setText("");
                firstNameTextField.setText("");
                lastNameTextField.setText("");
                dateOfBirthTextField.setText("");
                emailAddressTextField.setText("");
                phoneNumberTextField.setText("");
                passwordTextField.setText("");
            }
        });
    }

    public static void main(String[] args) {
        CustomerTableGUI customerTableGUI = new CustomerTableGUI();
    }
}
