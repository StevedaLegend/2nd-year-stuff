package net.customerpurchasestable.swing;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

public class UserLogin extends JFrame {

    private static final long serialVersionUID = 1L;
    private JTextField textField;
    private JPasswordField passwordField;
    private JButton loginButton, goBackButton;
    private JLabel label;
    private JPanel contentPane;

    /**
     * Launch the application.
     */
    public static void main(String[] args) {
        EventQueue.invokeLater(new Runnable() {
            public void run() {
                try {
                    UserLogin frame = new UserLogin();
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
    public UserLogin() {
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setBounds(450, 190, 1014, 597);
        setResizable(false);
        contentPane = new JPanel();
        contentPane.setBackground(Color.WHITE);
        setContentPane(contentPane);
        contentPane.setLayout(null);

        JLabel loginLabel = new JLabel("Login");
        loginLabel.setForeground(Color.BLACK);
        loginLabel.setFont(new Font("Segoe UI", Font.BOLD, 48));
        loginLabel.setBounds(435, 50, 273, 93);
        contentPane.add(loginLabel);

        textField = new JTextField();
        textField.setFont(new Font("Segoe UI", Font.PLAIN, 24));
        textField.setBounds(450, 200, 300, 50);
        contentPane.add(textField);
        textField.setColumns(10);

        passwordField = new JPasswordField();
        passwordField.setFont(new Font("Segoe UI", Font.PLAIN, 24));
        passwordField.setBounds(450, 290, 300, 50);
        contentPane.add(passwordField);

        JLabel usernameLabel = new JLabel("Username");
        usernameLabel.setForeground(Color.BLACK);
        usernameLabel.setFont(new Font("Segoe UI", Font.PLAIN, 28));
        usernameLabel.setBounds(250, 200, 193, 50);
        contentPane.add(usernameLabel);

        JLabel passwordLabel = new JLabel("Password");
        passwordLabel.setForeground(Color.BLACK);
        passwordLabel.setFont(new Font("Segoe UI", Font.PLAIN, 28));
        passwordLabel.setBounds(250, 290, 193, 50);
        contentPane.add(passwordLabel);

        loginButton = new JButton("Login");
        loginButton.setFont(new Font("Segoe UI", Font.BOLD, 24));
        loginButton.setBounds(450, 380, 140, 50);
        contentPane.add(loginButton);

        goBackButton = new JButton("Go Back");
        goBackButton.setFont(new Font("Segoe UI", Font.BOLD, 24));
        goBackButton.setBounds(610, 380, 140, 50);
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

        loginButton.addActionListener(new ActionListener() {

            public void actionPerformed(ActionEvent e) {
                String userName = textField.getText();
                String password = passwordField.getText();
                try {
                    Connection connection = (Connection) DriverManager.getConnection(
                            "jdbc:mysql://localhost/projectwork", "root", "");

                    PreparedStatement st = (PreparedStatement) connection.prepareStatement(
                            "SELECT Username, Password FROM userlogin WHERE Username=? AND Password=?"); 
                            st.setString(1, userName);
                            st.setString(2, password);
                            ResultSet rs = st.executeQuery();

                            if (rs.next()) {
                                dispose();
                                UserHome ah = new UserHome(userName);
                                ah.setTitle("Welcome");
                                ah.setVisible(true);
                                JOptionPane.showMessageDialog(loginButton, "You have successfully logged in");
                            } else {
                                JOptionPane.showMessageDialog(loginButton, "Wrong Username or Password");
                            }
                        } catch (SQLException sqlException) {
                            sqlException.printStackTrace();
                        }
                    }
                });
        
        contentPane.add(goBackButton);

                label = new JLabel("");
                label.setBounds(0, 0, 1008, 562);
                contentPane.add(label);
            }

}
