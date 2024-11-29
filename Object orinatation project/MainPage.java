package net.customerpurchasestable.swing;

import javax.swing.*;
import javax.swing.border.EmptyBorder;

import java.awt.*;
import java.awt.event.*;

public class MainPage {
    private static JButton loginButton, signUpButton;

    public static void createGUI() {
        JFrame frame = new JFrame("Main Page");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(800, 600);
        frame.setLocationRelativeTo(null);
        frame.setResizable(false);

        JPanel panel = new JPanel(new GridLayout(2, 1, 20, 20));
        panel.setBorder(new EmptyBorder(50, 50, 50, 50));
        panel.setBackground(Color.WHITE);

        JLabel titleLabel = new JLabel("Welcome to Customer Purchases Table");
        titleLabel.setFont(new Font("Tahoma", Font.PLAIN, 30));
        titleLabel.setHorizontalAlignment(JLabel.CENTER);
        panel.add(titleLabel);

        JPanel buttonsPanel = new JPanel(new GridLayout(1, 2, 50, 0));
        buttonsPanel.setBackground(Color.WHITE);

        loginButton = new JButton("Login");
        loginButton.setFont(new Font("Tahoma", Font.PLAIN, 20));
        buttonsPanel.add(loginButton);

        signUpButton = new JButton("Sign Up");
        signUpButton.setFont(new Font("Tahoma", Font.PLAIN, 20));
        buttonsPanel.add(signUpButton);

        panel.add(buttonsPanel);

        frame.add(panel);
        frame.setVisible(true);

        // Adding an action listener to the "Sign Up" button
        signUpButton.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                UserSignup signup = new UserSignup();
                signup.setVisible(true);
            }
        });

         // Adding an action listener to the "Login" button
         loginButton.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                UserLogin login = new UserLogin();
                login.setVisible(true);
            }
        });
    }

    public static void main(String[] args) {
        createGUI();
    }
}
