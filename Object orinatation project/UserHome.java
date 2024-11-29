package net.customerpurchasestable.swing;

import java.awt.Color;
import java.awt.EventQueue;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.SwingConstants;
import javax.swing.UIManager;
import javax.swing.border.EmptyBorder;

public class UserHome extends JFrame {

    private static final long serialVersionUID = 1L;
    private JPanel contentPane;

    /**
     * Launch the application.
     */
    public static void main(String[] args) {
        EventQueue.invokeLater(new Runnable() {
            public void run() {
                try {
                    UserHome frame = new UserHome();
                    frame.setVisible(true);
                } catch (Exception e) {
                    e.printStackTrace();
                }
            }
        });
    }

    public UserHome() {

    }

    /**
     * Create the frame.
     */
    public UserHome(final String userSes) {
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setBounds(450, 190, 1314, 697);
        setResizable(false);
        
        contentPane = new JPanel();
        contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
        setContentPane(contentPane);
        contentPane.setLayout(null);
        
        
        JLabel label = new JLabel("Customer");
        label.setForeground(Color.BLACK);
        label.setFont(new Font("Tahoma", Font.BOLD, 39));
        label.setHorizontalAlignment(SwingConstants.CENTER);
        label.setBounds(20, 2, 492, 203);
        contentPane.add(label);

        
        JButton button1 = new JButton("Add Customer");
        button1.setBackground(UIManager.getColor("Button.disabledForeground"));
        button1.setBounds(175, 150, 192, 103);
        button1.setFont(new Font("Tahoma", Font.BOLD, 19));
        contentPane.add(button1);
        button1.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                Customer bo1 = new Customer(userSes);
                bo1.setTitle("Home Page");
                bo1.setVisible(true);
            }
        });
        
        JButton button2 = new JButton("Update Customer");
        button2.setBackground(UIManager.getColor("Button.disabledForeground"));
        button2.setBounds(175, 280, 192, 103);
        button2.setFont(new Font("Tahoma", Font.BOLD, 16));
        contentPane.add(button2);
        button2.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                Update bo2 = new Update();
                bo2.setTitle("Update Customers");
                bo2.setVisible(true);
            }
        });
        
        JButton button3 = new JButton("Delete Customer");
        button3.setBackground(UIManager.getColor("Button.disabledForeground"));
        button3.setBounds(175, 410, 192, 103);
        button3.setFont(new Font("Tahoma", Font.BOLD, 16));
        contentPane.add(button3);
        button3.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                Delete bo3 = new Delete();
                bo3.setTitle("Delete Customers");
                bo3.setVisible(true);
            }
        });
        
        JButton button4 = new JButton("Retrieve Customer");
        button4.setBackground(UIManager.getColor("Button.disabledForeground"));
        button4.setBounds(175, 540, 192, 103);
        button4.setFont(new Font("Tahoma", Font.BOLD, 16));
        contentPane.add(button4);
        button4.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                Retrieve bo4 = new Retrieve();
                bo4.setTitle("Delete Customers");
                bo4.setVisible(true);
            }
        });
        
        JLabel label5 = new JLabel("Invoice");
        label5.setForeground(Color.BLACK);
        label5.setFont(new Font("Tahoma", Font.BOLD, 39));
        label5.setBounds(499, 2, 492, 203);
        contentPane.add(label5);

        
        JButton button6 = new JButton("Add Invoice");
        button6.setBackground(UIManager.getColor("Button.disabledForeground"));
        button6.setBounds(499, 150, 192, 103);
        button6.setFont(new Font("Tahoma", Font.BOLD, 19));
        contentPane.add(button6);
        button6.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                AddInvoice bo5 = new AddInvoice(userSes);
                bo5.setTitle("Add Purchase");
                bo5.setVisible(true);
            }
        });
        
        JButton button7 = new JButton("Update Invoice");
        button7.setBackground(UIManager.getColor("Button.disabledForeground"));
        button7.setBounds(499, 280, 192, 103);
        button7.setFont(new Font("Tahoma", Font.BOLD, 19));
        contentPane.add(button7);
        button7.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                UpdateInvoice bo6 = new UpdateInvoice();
                bo6.setTitle("Update Purchase");
                bo6.setVisible(true);
            }
        });
        
        JButton button8 = new JButton("Delete Invoice");
        button8.setBackground(UIManager.getColor("Button.disabledForeground"));
        button8.setBounds(499, 410, 192, 103);
        button8.setFont(new Font("Tahoma", Font.BOLD, 19));
        contentPane.add(button8);
        button8.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
            	DeleteInvoice bo7 = new DeleteInvoice();
                bo7.setTitle("Delete Purchase");
                bo7.setVisible(true);
            }
        });
        
        JButton button9 = new JButton("Retrieve Invoice");
        button9.setBackground(UIManager.getColor("Button.disabledForeground"));
        button9.setBounds(499, 540, 192, 103);
        button9.setFont(new Font("Tahoma", Font.BOLD, 19));
        contentPane.add(button9);
        button9.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
            	RetrieveInvoice bo8 = new RetrieveInvoice();
                bo8.setTitle("Retrieve Purchase");
                bo8.setVisible(true);
            }
        });
        
        JLabel label6 = new JLabel("Product");
        label6.setForeground(Color.BLACK);
        label6.setFont(new Font("Tahoma", Font.BOLD, 39));
        label6.setBounds(900, 2, 492, 203);
        contentPane.add(label6);

        
        JButton button10 = new JButton("Add Product");
        button10.setBackground(UIManager.getColor("Button.disabledForeground"));
        button10.setBounds(900, 150, 192, 103);
        button10.setFont(new Font("Tahoma", Font.BOLD, 19));
        contentPane.add(button10);
        button10.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
            	AddProduct bo9 = new AddProduct(userSes);
                bo9.setTitle("Add Purchase");
                bo9.setVisible(true);
            }
        });
        
        JButton button11 = new JButton("Update Product");
        button11.setBackground(UIManager.getColor("Button.disabledForeground"));
        button11.setBounds(900, 280, 192, 103);
        button11.setFont(new Font("Tahoma", Font.BOLD, 19));
        contentPane.add(button11);
        button11.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
            	UpdateProduct bo10 = new UpdateProduct();
                bo10.setTitle("Update Product");
                bo10.setVisible(true);
            }
        });
        
        JButton button12 = new JButton("Delete Product");
        button12.setBackground(UIManager.getColor("Button.disabledForeground"));
        button12.setBounds(900, 410, 192, 103);
        button12.setFont(new Font("Tahoma", Font.BOLD, 19));
        contentPane.add(button12);
        button12.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                DeleteProduct bo11 = new DeleteProduct();
                bo11.setTitle("Delete Product");
                bo11.setVisible(true);
            }
        });
        
        JButton button13 = new JButton("Retrieve Product");
        button13.setBackground(UIManager.getColor("Button.disabledForeground"));
        button13.setBounds(900, 540, 192, 103);
        button13.setFont(new Font("Tahoma", Font.BOLD, 16));
        contentPane.add(button13);
        button13.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                RetrieveProduct bo12 = new RetrieveProduct();
                bo12.setTitle("Retrieve Purchase");
                bo12.setVisible(true);
            }
        });
        
        
        
        final JButton btnNewButton_1 = new JButton("Exit");
        btnNewButton_1.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                int a = JOptionPane.showConfirmDialog(btnNewButton_1, "Are you sure?");
                if (a == JOptionPane.YES_OPTION) {
                    dispose();
                }
            }
        });
        btnNewButton_1.setFont(new Font("Tahoma", Font.BOLD, 39));
        btnNewButton_1.setBackground(UIManager.getColor("Button.disabledForeground"));
        btnNewButton_1.setBackground(Color.RED);
        btnNewButton_1.setBounds(30, 12, 110, 93);
        contentPane.add(btnNewButton_1);

    }
}