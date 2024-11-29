package net.customerpurchasestable.swing;

import java.awt.*;
import java.awt.event.*;
import java.sql.*;
import javax.swing.*;
import javax.swing.border.EmptyBorder;
import javax.swing.table.*;
import javax.swing.JScrollPane;


public class Update extends JFrame {
    /**
     *
     */
    private static final long serialVersionUID = 1L;
    // GUI components
    private JLabel lblTitle ;
    private JTable tblData;
    private JButton btnUpdate;

    // MySQL connection parameters
    private static final String DB_URL = "jdbc:mysql://localhost:3306/projectwork";
    private static final String USER = "root";
    private static final String PASSWORD = "";

    public Update() {
        super("Update Table");
        setLayout(new BorderLayout());

        // Initialize GUI components
        lblTitle = new JLabel("Edit Information");
        lblTitle.setFont(new Font("Arial", Font.BOLD, 16));

        tblData = new JTable();
        tblData.setAutoCreateRowSorter(true);
        JScrollPane scrollPane = new JScrollPane(tblData);
        scrollPane.setBorder(new EmptyBorder(20, 20, 20, 20));
        add(scrollPane, BorderLayout.CENTER);


        btnUpdate = new JButton("Update");
        btnUpdate.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                updateTable();
            }
        });
        add(btnUpdate, BorderLayout.SOUTH);

        // Set JFrame properties
        setSize(800, 600);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLocationRelativeTo(null);
        setVisible(true);

       
        // Create a MySQL connection and retrieve data from the table
        Connection conn = null;
        try {
            conn = DriverManager.getConnection(DB_URL, USER, PASSWORD);

            Statement stmt = conn.createStatement();
            String sql = "SELECT * FROM customers";
            ResultSet rs = stmt.executeQuery(sql);

            // Create a table model and set it to the JTable
            DefaultTableModel model = new DefaultTableModel();
            tblData.setModel(model);

            // Add column headers to the table model
            ResultSetMetaData rsmd = rs.getMetaData();
            int columnCount = rsmd.getColumnCount();
            for (int i = 1; i <= columnCount; i++) {
                model.addColumn(rsmd.getColumnName(i));
            }

            // Add data rows to the table model
            while (rs.next()) {
                Object[] row = new Object[columnCount];
                for (int i = 1; i <= columnCount; i++) {
                    row[i-1] = rs.getObject(i);
                }
                model.addRow(row);
            }

            rs.close();
            stmt.close();
        } catch (SQLException ex) {
            ex.printStackTrace();
        } finally {
            try {
                if (conn != null) {
                    conn.close();
                }
            } catch (SQLException ex) {
                ex.printStackTrace();
            }
        }
    }

    private void updateTable() {
        // Get the table model from the JTable
        DefaultTableModel model = (DefaultTableModel) tblData.getModel();

        // Get the number of rows and columns in the table
        int rowCount = model.getRowCount();
        int columnCount = model.getColumnCount();

        // Create a MySQL connection
        Connection conn = null;
        try {
            conn = DriverManager.getConnection(DB_URL, USER, PASSWORD);

            // Loop through each row in the table
            for (int i = 0; i < rowCount; i++) {
                // Get the values in the row
                Object[] row = new Object[columnCount];
                for (int j = 0; j < columnCount; j++) {
                    row[j] = model.getValueAt(i, j);
                }

                // Create an update statement for the row
                String sql = "UPDATE customers SET ";
                for (int j = 0; j < columnCount; j++) {
                    if (j > 0) {
                        sql += ", ";
                    }
                    sql += model.getColumnName(j) + "='" + row[j] + "'";
                }
                sql += " WHERE CustomerID=" + row[0];

                // Execute the update statement
                Statement stmt = conn.createStatement();
                stmt.executeUpdate(sql);
                stmt.close();
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        } finally {
            try {
                if (conn != null) {
                    conn.close();
                }
            } catch (SQLException ex) {
                ex.printStackTrace();
            }
        }
    }

    public static void main(String[] args) {
        Update update = new Update();
    }
}