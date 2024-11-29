package net.customerpurchasestable.swing;

import javax.swing.*;
import javax.swing.table.DefaultTableModel;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.*;
 
public class Retrieve implements ActionListener {
 
    JFrame frame1;//creating object of first JFrame
    JLabel nameLabel;//creating object of JLabel
    JTextField nameTextField;//creating object of JTextfield
    JButton fetchButton;//creating object of JButton
    JButton resetButton;//creating object of JButton
    
    JFrame frame2;//creating object of second JFrame
    DefaultTableModel defaultTableModel;//creating object of DefaultTableModel
    JTable table;//Creating object of JTable
    Connection connection;//Creating object of Connection class
    Statement statement;//Creating object of Statement class
    int flag=0;
 
 
    Retrieve() {
 
        frame1 = new JFrame();
        frame1.setTitle("Retrieve Data");//setting the title of first JFrame
        frame1.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);//setting default close operation
        GridBagLayout bagLayout = new GridBagLayout();//creating object of GridBagLayout
        GridBagConstraints bagConstraints = new GridBagConstraints();//creating object of GridBagConstratints
        frame1.setSize(800, 500);//setting the size of first JFrame
        frame1.setLayout(bagLayout);//setting the layout to GridBagLayout of first JFrame
 
        bagConstraints.insets = new Insets(15, 40, 0, 0);//Setting the padding between the components and neighboring components
 
      //Setting the property of JLabel and adding it to the first JFrame
        nameLabel = new JLabel("Enter Username");
        bagConstraints.gridx = 0;
        bagConstraints.gridy = 0;
        frame1.add(nameLabel, bagConstraints);
 
      //Setting the property of JTextfield and adding it to the first JFrame
        nameTextField = new JTextField(15);
        bagConstraints.gridx = 1;
        bagConstraints.gridy = 0;
        frame1.add(nameTextField, bagConstraints);
 
      //Setting the property of JButton(Fetch Data) and adding it to the first JFrame
        fetchButton = new JButton("Fetch Data");
        bagConstraints.gridx = 0;
        bagConstraints.gridy = 1;
        bagConstraints.ipadx = 60;
        fetchButton.setBounds(30, 12, 392, 203);
        frame1.add(fetchButton, bagConstraints);
 
      //Setting the property of JButton(Reset Data) and adding it to the second JFrame
        resetButton = new JButton("Reset Data");
        bagConstraints.gridx = 1;
        bagConstraints.gridy = 1;
        frame1.add(resetButton, bagConstraints);
 
        //adding ActionListener to both buttons
        fetchButton.addActionListener(this);
        resetButton.addActionListener(this);
 
 
        frame1.setVisible(true);//Setting the visibility of First JFrame
        frame1.validate();//Performing relayout of the First JFrame
        
        final JButton goBackButton = new JButton("Go Back");
        goBackButton.setFont(new Font("Segoe UI", Font.BOLD, 24));
        goBackButton.setBounds(60, 12, 292, 403);
        frame1.add(goBackButton);

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
 
    }
 
    public static void main(String[] args) {
        new Retrieve();
    }
 
    
    public void actionPerformed(ActionEvent e) {
 
        if (e.getSource() == fetchButton) {
 
            String userName = nameTextField.getText().toString();//getting text of username text field and storing it in a String variable
            frameSecond(userName);//passing the text value to frameSecond method
 
        }
        if (e.getSource() == resetButton) {
            nameTextField.setText("");//resetting the value of username text field
        }
 
    }
 
 
    public void frameSecond(String userName) {
    
     //setting the properties of second JFrame
        frame2 = new JFrame("Customer Reults In the Database");
        frame2.setLayout(new FlowLayout());
        frame2.setSize(1400, 200);
 
        //Setting the properties of JTable and DefaultTableModel
        defaultTableModel = new DefaultTableModel();
        table = new JTable(defaultTableModel);
        table.setPreferredScrollableViewportSize(new Dimension(1300, 700));
        table.setFillsViewportHeight(true);
        frame2.add(new JScrollPane(table));
        defaultTableModel.addColumn("FirstName");
        defaultTableModel.addColumn("LastName");
        defaultTableModel.addColumn("Address");
        defaultTableModel.addColumn("EmailAddress");
        defaultTableModel.addColumn("PhoneNumber");
        defaultTableModel.addColumn("Password");
   
        
 
 
 
        try {
        
            connection = DriverManager.getConnection("jdbc:mysql://localhost:3306/projectwork", "root", "");//Crating connection with database
            statement = connection.createStatement();//crating statement object
            String query = "SELECT FirstName, LastName, Address, EmailAddress, PhoneNumber, Password FROM customers WHERE FirstName = '" + userName + "'";

            ResultSet resultSet = statement.executeQuery(query);//executing query and storing result in ResultSet
 
 
            while (resultSet.next()) {
            
             //Retrieving details from the database and storing it in the String variables
                String firstname = resultSet.getString("FirstName");
                String lastname = resultSet.getString("LastName");
                String dateofbirth = resultSet.getString("Address");
                String email = resultSet.getString("EmailAddress");
                String phone = resultSet.getString("PhoneNumber");
                String password = resultSet.getString("Password");
          
                if (userName.equalsIgnoreCase(firstname)) {
                    flag = 1;
                    defaultTableModel.addRow(new Object[]{firstname, lastname, dateofbirth, email, phone, password});//Adding row in Table
                    frame2.setVisible(true);//Setting the visibility of second Frame
                    frame2.validate();
                    break;
                }
 
            }
 
            if (flag == 0) {
                JOptionPane.showMessageDialog(null, "No Such Username Found");//When invalid username is entered
            }
 
 
        } catch (SQLException ex) {
            JOptionPane.showMessageDialog(null, "Error: " + ex.getMessage());
        }
 
    }

	public void setTitle(String string) {
		// TODO Auto-generated method stub
		
	}

	public void setVisible(boolean b) {
		// TODO Auto-generated method stub
		
	}
}