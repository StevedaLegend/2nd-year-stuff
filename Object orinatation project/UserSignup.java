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
import java.sql.ResultSet;
import java.sql.SQLException;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JPasswordField;
import javax.swing.JTextField;
import javax.swing.border.EmptyBorder;


public class UserSignup extends JFrame {
	
	private static final String DB_URL = "jdbc:mysql://localhost:3306/projectwork";
	private static final String DB_USER = "root";
	private static final String DB_PASSWORD = "";
    private static final long serialVersionUID = 1L;
    private static JTextField FirstNameTextField, LastNameTextField, DateOfBirthTextField,
        EmailAddressTextField, confirmEmailAddressTextField, PhoneNumberTextField;
    private static JPasswordField passwordField, confirmPasswordField;
    private static JButton signUpButton, discardButton;
    private JPanel contentPane;

    /**
     * Launch the application.
     */
    public static void main(String[] args) {
        EventQueue.invokeLater(new Runnable() {
            public void run() {
                try {
                    UserSignup frame = new UserSignup();
                    frame.setVisible(true);
                } catch (Exception e) {
                    e.printStackTrace();
                }
            }
        });
    }

    /**
     * Create the frame.
     */
    public UserSignup() {
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setBounds(450, 190, 1014, 597);
        setResizable(false);

        contentPane = new JPanel();
        contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
        contentPane.setSize(1520, 1300);
        setContentPane(contentPane);
        contentPane.setLayout(null);

        JLabel lblNewLabel = new JLabel("Sign Up!");
        lblNewLabel.setForeground(Color.BLACK);
        lblNewLabel.setFont(new Font("Segoe UI", Font.BOLD, 48));
        lblNewLabel.setBounds(423, 13, 273, 93);
        contentPane.add(lblNewLabel);

        FirstNameTextField = new JTextField();
        FirstNameTextField.setFont(new Font("Tahoma", Font.PLAIN, 14));
        FirstNameTextField.setBounds(481, 130, 221, 28);
        contentPane.add(FirstNameTextField);
        FirstNameTextField.setColumns(10);

        LastNameTextField = new JTextField();
        LastNameTextField.setFont(new Font("Tahoma", Font.PLAIN, 14));
        LastNameTextField.setBounds(481, 177, 221, 28);
        contentPane.add(LastNameTextField);
        LastNameTextField.setColumns(10);

        DateOfBirthTextField = new JTextField();
        DateOfBirthTextField.setFont(new Font("Tahoma", Font.PLAIN, 14));
        DateOfBirthTextField.setBounds(481, 220, 221, 28);
        contentPane.add(DateOfBirthTextField);
        DateOfBirthTextField.setColumns(10);

        EmailAddressTextField = new JTextField();
        EmailAddressTextField.setFont(new Font("Tahoma", Font.PLAIN, 14));
        EmailAddressTextField.setBounds(481, 260, 221, 28);
        contentPane.add(EmailAddressTextField);
        EmailAddressTextField.setColumns(10);
        
        confirmEmailAddressTextField = new JTextField();
        confirmEmailAddressTextField.setFont(new Font("Tahoma", Font.PLAIN, 14));
        confirmEmailAddressTextField.setBounds(481, 300, 221, 28);
        contentPane.add(confirmEmailAddressTextField);
        confirmEmailAddressTextField.setColumns(10);


        PhoneNumberTextField = new JTextField();
        PhoneNumberTextField.setFont(new Font("Tahoma", Font.PLAIN, 14));
        PhoneNumberTextField.setBounds(481, 340, 221, 28);
        contentPane.add(PhoneNumberTextField);
        PhoneNumberTextField.setColumns(10);

        passwordField = new JPasswordField();
        passwordField.setFont(new Font("Tahoma", Font.PLAIN, 14));
        passwordField.setBounds(481, 379, 221, 28);
        contentPane.add(passwordField);

        confirmPasswordField = new JPasswordField();
        confirmPasswordField.setFont(new Font("Tahoma", Font.PLAIN, 14));
        confirmPasswordField.setBounds(481, 421, 221, 28);
        contentPane.add(confirmPasswordField);

        
        JLabel lblFirstName = new JLabel("First Name");
        lblFirstName.setFont(new Font("Tahoma", Font.PLAIN, 20));
        lblFirstName.setBounds(250, 130, 193, 20);
        contentPane.add(lblFirstName);

        JLabel lblLastName = new JLabel("Last Name");
        lblLastName.setFont(new Font("Tahoma", Font.PLAIN, 20));
        lblLastName.setBounds(250, 177, 193, 20);
        contentPane.add(lblLastName);

        JLabel lbladdress = new JLabel("Address");
        lbladdress.setFont(new Font("Tahoma", Font.PLAIN, 20));
        lbladdress.setBounds(250, 220, 193, 20);
        contentPane.add(lbladdress);

        JLabel lblEmailAddress = new JLabel("Email Address");
        lblEmailAddress.setFont(new Font("Tahoma", Font.PLAIN, 20));
        lblEmailAddress.setBounds(250, 260, 193, 20);
        contentPane.add(lblEmailAddress);
        
        JLabel lblconfirmEmailAddress = new JLabel("Confirm Email");
        lblconfirmEmailAddress.setFont(new Font("Tahoma", Font.PLAIN, 20));
        lblconfirmEmailAddress.setBounds(250, 300, 193, 20);
        contentPane.add(lblconfirmEmailAddress);

        JLabel lblPhoneNumber = new JLabel("Phone Number");
        lblPhoneNumber.setFont(new Font("Tahoma", Font.PLAIN, 20));
        lblPhoneNumber.setBounds(250, 340, 193, 20);
        contentPane.add(lblPhoneNumber);

        JLabel lblPassword = new JLabel("Password");
        lblPassword.setFont(new Font("Tahoma", Font.PLAIN, 20));
        lblPassword.setBounds(250, 379, 193, 20);
        contentPane.add(lblPassword);

        JLabel lblConfirmPassword = new JLabel("Confirm Password");
        lblConfirmPassword.setFont(new Font("Tahoma", Font.PLAIN, 20));
        lblConfirmPassword.setBounds(250, 421, 193, 20);
        contentPane.add(lblConfirmPassword);

        signUpButton = new JButton("Sign Up");
        signUpButton.setFont(new Font("Tahoma", Font.PLAIN, 20));
        signUpButton.setBounds(393, 474, 138, 35);
        
        discardButton = new JButton("Go Back");
        discardButton.setFont(new Font("Tahoma", Font.PLAIN, 20));
        discardButton.setBounds(593, 474, 138, 35);
        contentPane.add(discardButton); 
        
        discardButton.addActionListener(new ActionListener() {

            public void actionPerformed(ActionEvent e) {
                // TODO Auto-generated method stub
                Container parent = discardButton.getParent();
                while (!(parent instanceof JFrame)) {
                    parent = parent.getParent();
                }
                JFrame frame = (JFrame) parent;
                frame.dispose();
            }
        });
        
        signUpButton.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                String firstName = FirstNameTextField.getText();
                String lastName = LastNameTextField.getText();
                String dateofBirth = DateOfBirthTextField.getText();
                String emailAddress = EmailAddressTextField.getText();
                String confirmemail = confirmEmailAddressTextField.getText();
                String phoneNumber = PhoneNumberTextField.getText();
                String password = String.valueOf(passwordField.getPassword());
                String confirmPassword = String.valueOf(confirmPasswordField.getPassword());

             // validating the inputs
                if (firstName.equals("") || lastName.equals("") || dateofBirth.equals("") || emailAddress.equals("")
                || confirmemail.equals("") || phoneNumber.equals("") || password.equals("")) {
                JOptionPane.showMessageDialog(null, "Please fill all the required fields!");
                } else if (!password.equals(confirmPassword)) {
                JOptionPane.showMessageDialog(null, "Passwords do not match!");
                } else if (!emailAddress.equals(confirmemail)) {
                JOptionPane.showMessageDialog(null, "Emails do not match!");
                } else if (phoneNumber.length() != 9) {
                JOptionPane.showMessageDialog(null, "Invalid phone number!");
                } else if (!emailAddress.contains("@")) {
                JOptionPane.showMessageDialog(null, "Invalid email address!");
                } else {
                	
                    try {
                    	 Connection conn = DriverManager.getConnection(DB_URL, DB_USER, DB_PASSWORD);
                    	 
                    	 String sql = "INSERT INTO customers (CustomerID, FirstName, LastName, Address, EmailAddress, PhoneNumber, Password, deletedflag) " +
                                 "VALUES (?, ?, ?, ?, ?, ?, ?)";
                    	 
                    	 PreparedStatement pstmt = conn.prepareStatement(sql);
                         pstmt.setString(1, firstName);
                         pstmt.setString(2, lastName);
                         pstmt.setString(3, dateofBirth);
                         pstmt.setString(4, emailAddress);
                         pstmt.setString(5, phoneNumber);
                         pstmt.setString(6, password);
                         
                         // Execute SQL statement
                         pstmt.close();
                         conn.close();
                         JOptionPane.showMessageDialog(null, "User added successfully.");
                     } catch (SQLException ex) {
                         ex.printStackTrace();
                         JOptionPane.showMessageDialog(null, "Error adding user to database.");
                     }
                 }
            }
        });
        contentPane.add(signUpButton);
        



        JLabel label = new JLabel("");
        label.setBounds(0, 0, 1008, 562);
        contentPane.add(label);
    }

	public static void createGUI() {
		// TODO Auto-generated method stub
		
	}
		
	}

