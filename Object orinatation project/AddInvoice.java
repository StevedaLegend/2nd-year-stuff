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

public class AddInvoice extends JFrame {
    private static final long serialVersionUID = 1L;
    private JPanel contentPane;
    private JTextField  customernametextField, customeremailField, invoicedatetextField, duedatetextField, totalamounttextField, paidamounttextField, statustextField;	
    private JLabel labelcustomername, labelcustomeremail, labelinvoicedate, labelduedate, labeltotalamount, labelpaidamount, labelstatus;
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

    public AddInvoice(final String name) {
        setBounds(450, 360, 1424, 834);
        setResizable(false);

        contentPane = new JPanel();
        contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
        setContentPane(contentPane);
        contentPane.setLayout(null);

        customernametextField = new JTextField();
        customernametextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        customernametextField.setBounds(373, 35, 609, 67);
        contentPane.add(customernametextField);
        customernametextField.setColumns(10);

        customeremailField = new JTextField();
        customeremailField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        customeremailField.setBounds(373, 135, 609, 67);
        contentPane.add(customeremailField);
        customeremailField.setColumns(10);

        invoicedatetextField = new JTextField();
        invoicedatetextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        invoicedatetextField.setBounds(373, 240, 609, 67);
        contentPane.add(invoicedatetextField);
        invoicedatetextField.setColumns(10);

        duedatetextField = new JTextField();
        duedatetextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        duedatetextField.setBounds(373, 330, 609, 67);
        contentPane.add(duedatetextField);
        duedatetextField.setColumns(10);

        totalamounttextField = new JTextField();
        totalamounttextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        totalamounttextField.setBounds(373, 430, 609, 67);
        contentPane.add(totalamounttextField);
        totalamounttextField.setColumns(10);

        paidamounttextField = new JTextField();
        paidamounttextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        paidamounttextField.setBounds(373, 530, 609, 67);
        contentPane.add(paidamounttextField);
        paidamounttextField.setColumns(10);
        
        statustextField = new JTextField();
        statustextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        statustextField.setBounds(373, 630, 609, 67);
        contentPane.add(statustextField);
        statustextField.setColumns(10);

        button1 = new JButton("Add Invoice");
        button1.setFont(new Font("Tahoma", Font.PLAIN, 26));
        
        goBackButton = new JButton("Go Back");
        goBackButton.setFont(new Font("Segoe UI", Font.BOLD, 24));
        goBackButton.setBounds(710, 704, 205, 67);
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
                    PreparedStatement ps = con.prepareStatement("INSERT INTO `invoice` (id, customername, customeremail, invoicedate, duedate, totalamount, paidamount, staus) VALUES (?, ?, ?, ?, ?,");

                    // setting the values of the prepared statement
                    ps.setString(1, customernametextField.getText());
                    ps.setString(2, customeremailField.getText());
                    ps.setString(3, invoicedatetextField.getText());
                    ps.setString(4, duedatetextField.getText());
                    ps.setString(5, totalamounttextField.getText());
                    ps.setString(6, paidamounttextField.getText());
                    ps.setString(7, statustextField.getText());

                    // executing the prepared statement
                    int i = ps.executeUpdate();
                    if (i > 0) {
                        JOptionPane.showMessageDialog(null, "Invoice added successfully!");
                        dispose();
                    } else {
                        JOptionPane.showMessageDialog(null, "Sorry, unable to add invoice!");
                    }

                } catch (SQLException ex) {
                    ex.printStackTrace();
                }
            }
        });
        button1.setBounds(449, 704, 205, 67);
        contentPane.add(button1);

        labelcustomername = new JLabel("Customer Name:");
        labelcustomername.setFont(new Font("Tahoma", Font.PLAIN, 29));
        labelcustomername.setBounds(115, 35, 248, 67);
        contentPane.add(labelcustomername);

        labelcustomeremail = new JLabel("Customer Email:");
        labelcustomeremail.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labelcustomeremail.setBounds(115, 135, 248, 67);
        contentPane.add(labelcustomeremail);

        labelinvoicedate = new JLabel("Date :");
        labelinvoicedate.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labelinvoicedate.setBounds(115, 240, 248, 67);
        contentPane.add(labelinvoicedate);

        labelduedate = new JLabel("Due Date:");
        labelduedate.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labelduedate.setBounds(115, 330, 248, 67);
        contentPane.add(labelduedate);

        labeltotalamount = new JLabel("Total Amount:");
        labeltotalamount.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labeltotalamount.setBounds(115, 430, 248, 67);
        contentPane.add(labeltotalamount);
        
        labelpaidamount = new JLabel("Paid:");
        labelpaidamount.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labelpaidamount.setBounds(115, 530, 248, 67);
        contentPane.add(labelpaidamount);
        
        labelstatus = new JLabel("Status Amount:");
        labelstatus.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labelstatus.setBounds(115, 630, 248, 67);
        contentPane.add(labelstatus);

        JLabel label = new JLabel("");
        label.setBackground(Color.PINK);
        label.setBounds(0, 0, 1418, 807);
        contentPane.add(label);
    }
}

