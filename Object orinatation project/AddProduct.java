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

public class AddProduct extends JFrame {
    private static final long serialVersionUID = 1L;
    private JPanel contentPane;
    private JTextField  productnametextField, productdescriptiontextField, productpricetextField, productcategorytextField, productbrandtextField, productquantitytextField;
    private JLabel  labelproductname, labelproductdescription, labelproductprice, labelproductcategory, labelproductbrand, labelproductquantity;
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

    public AddProduct(final String name) {
        setBounds(450, 360, 1424, 834);
        setResizable(false);

        contentPane = new JPanel();
        contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
        setContentPane(contentPane);
        contentPane.setLayout(null);

        productnametextField = new JTextField();
        productnametextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        productnametextField.setBounds(373, 35, 609, 67);
        contentPane.add(productnametextField);
        productnametextField.setColumns(10);

        productdescriptiontextField = new JTextField();
        productdescriptiontextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        productdescriptiontextField.setBounds(373, 135, 609, 67);
        contentPane.add(productdescriptiontextField);
        productdescriptiontextField.setColumns(10);
        
        productpricetextField = new JTextField();
        productpricetextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        productpricetextField.setBounds(373, 240, 609, 67);
        contentPane.add(productpricetextField);
        productpricetextField.setColumns(10);

        productcategorytextField = new JTextField();
        productcategorytextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        productcategorytextField.setBounds(373, 330, 609, 67);
        contentPane.add(productcategorytextField);
        productcategorytextField.setColumns(10);

        productbrandtextField = new JTextField();
        productbrandtextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        productbrandtextField.setBounds(373, 430, 609, 67);
        contentPane.add(productbrandtextField);
        productbrandtextField.setColumns(10);

        productquantitytextField = new JTextField();
        productquantitytextField.setFont(new Font("Tahoma", Font.PLAIN, 34));
        productquantitytextField.setBounds(373, 530, 609, 67);
        contentPane.add(productquantitytextField);
        productquantitytextField.setColumns(10);

        button1 = new JButton("Add Product");
        button1.setFont(new Font("Tahoma", Font.PLAIN, 26));
        
        goBackButton = new JButton("Go Back");
        goBackButton.setFont(new Font("Segoe UI", Font.BOLD, 24));
        goBackButton.setBounds(750, 641, 205, 67);
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
                    PreparedStatement ps = con.prepareStatement("insert * id, productname, productdescription, productprice, productcategory,	productbrand, productquantity into product values(?,?,?,?,?,?,?)");

                    // setting the values of the prepared statement
                    ps.setString(1, productnametextField.getText());
                    ps.setString(2, productdescriptiontextField.getText());
                    ps.setString(3, productpricetextField.getText());
                    ps.setString(4, productcategorytextField.getText());
                    ps.setString(5, productbrandtextField.getText());
                    ps.setString(6, productquantitytextField.getText());

                    // executing the prepared statement
                    int i = ps.executeUpdate();
                    if (i > 0) {
                        JOptionPane.showMessageDialog(null, "Product added successfully!");
                        dispose();
                    } else {
                        JOptionPane.showMessageDialog(null, "Sorry, unable to add Product!");
                    }

                } catch (SQLException ex) {
                    ex.printStackTrace();
                }
            }
        });
        button1.setBounds(409, 641, 205, 67);
        contentPane.add(button1);

        labelproductname = new JLabel("Product Name:");
        labelproductname.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labelproductname.setBounds(115, 35, 248, 67);
        contentPane.add(labelproductname);

        labelproductdescription = new JLabel("Description:");
        labelproductdescription.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labelproductdescription.setBounds(115, 135, 248, 67);
        contentPane.add(labelproductdescription);

        labelproductprice = new JLabel("Product Price:");
        labelproductprice.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labelproductprice.setBounds(115, 240, 248, 67);
        contentPane.add(labelproductprice);

        labelproductcategory = new JLabel("Product Category:");
        labelproductcategory.setFont(new Font("Tahoma", Font.PLAIN, 30));
        labelproductcategory.setBounds(115, 330, 248, 67);
        contentPane.add(labelproductcategory);

        labelproductbrand = new JLabel("Product Brand:");
        labelproductbrand.setFont(new Font("Tahoma", Font.PLAIN, 34));
        labelproductbrand.setBounds(115, 430, 248, 67);
        contentPane.add(labelproductbrand);

        labelproductquantity = new JLabel("Product Quantity:");
        labelproductquantity.setFont(new Font("Tahoma", Font.PLAIN, 30));
        labelproductquantity.setBounds(115, 530, 248, 67);
        contentPane.add(labelproductquantity);

        JLabel label = new JLabel("");
        label.setBackground(Color.PINK);
        label.setBounds(0, 0, 1418, 807);
        contentPane.add(label);
    }
}
