package net.customerpurchasestable.swing;

import java.awt.*;
import java.awt.event.*;
import java.sql.*;
import javax.swing.*;
import javax.swing.border.EmptyBorder;
import javax.swing.table.*;

public class DeleteProduct extends JFrame {
    private static final long serialVersionUID = 1L;
    
    // GUI components
    private JLabel lblTitle;
    private JTable tblData;
    private JButton btnDelete;

    // MySQL connection parameters
    private static final String DB_URL = "jdbc:mysql://localhost:3306/projectwork";
    private static final String USER = "root";
    private static final String PASSWORD = "";

    public DeleteProduct() {
        super("Delete Table");
        setLayout(new BorderLayout());

        // Initialize GUI components
        lblTitle = new JLabel("Delete Rows");
        lblTitle.setFont(new Font("Arial", Font.BOLD, 16));
        add(lblTitle, BorderLayout.NORTH);

        tblData = new JTable();
        tblData.setAutoCreateRowSorter(true);
        JScrollPane scrollPane = new JScrollPane(tblData);
        scrollPane.setBorder(new EmptyBorder(20, 20, 20, 20));
        add(scrollPane, BorderLayout.CENTER);

        // Create a checkbox column
        TableColumn selectColumn = new TableColumn(0);
        selectColumn.setHeaderValue("");
        selectColumn.setCellEditor(new DefaultCellEditor(new JCheckBox()));
        selectColumn.setCellRenderer(new CheckboxRenderer());
        tblData.addColumn(selectColumn);

        btnDelete = new JButton("Delete Selected Rows");
        btnDelete.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                deleteSelectedRows();
            }
        });
        add(btnDelete, BorderLayout.SOUTH);

        final JButton goBackButton = new JButton("Go Back");
        goBackButton.setFont(new Font("Segoe UI", Font.BOLD, 24));
        goBackButton.setBounds(610, 641, 205, 67);

        JPanel contentPane = new JPanel();
        contentPane.setLayout(null);
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
            String sql = "SELECT * FROM product";
            ResultSet rs = stmt.executeQuery(sql);

            // Create a table model and set it to the JTable
            DefaultTableModel model = new DefaultTableModel();
            tblData.setModel(model);

            // Add column headers to the table model
            ResultSetMetaData rsmd = rs.getMetaData();
            int columnCount = rsmd.getColumnCount();
            for (int i = 2; i <= columnCount; i++) {
                model.addColumn(rsmd.getColumnName(i));
            }

            // Add data rows to the table model
            while (rs.next()) {
                Object[] row = new Object[columnCount - 1];
                for (int i = 2; i <= columnCount; i++) {
                    row[i-2] = rs.getObject(i);
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

    private void deleteSelectedRows() {
        // Get the table model from the JTable
        DefaultTableModel model = (DefaultTableModel) tblData.getModel();

        // Get the number of rows in the table
        int rowCount = model.getRowCount();

        // Create a MySQL connection
        Connection conn = null;
        try {
            conn = DriverManager.getConnection(DB_URL, USER, PASSWORD);

            // Loop through each row in the table
            for (int i = rowCount - 1; i >= 0; i--) {
                //
                // Check if the checkbox in the first column is selected
            	boolean selected = Boolean.parseBoolean(model.getValueAt(i, 0).toString());
                if (selected) {
                    // Get the value of the primary key column for the current row
                	int id = Integer.parseInt(model.getValueAt(i, 1).toString());


                    // Create a prepared statement to delete the row with the given primary key
                    String sql = "DELETE FROM products WHERE id=?";
                    PreparedStatement stmt = conn.prepareStatement(sql);
                    stmt.setInt(1, id);

                    // Execute the prepared statement
                    stmt.executeUpdate();

                    // Remove the row from the table model
                    model.removeRow(i);
                }
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

    // Custom renderer for the checkbox column
    private class CheckboxRenderer extends DefaultTableCellRenderer {
        private static final long serialVersionUID = 1L;

        public Component getTableCellRendererComponent(JTable table, Object value, boolean isSelected, boolean hasFocus, int row, int column) {
            JCheckBox checkBox = new JCheckBox();
            checkBox.setSelected(((Boolean) value).booleanValue());
            checkBox.setHorizontalAlignment(JCheckBox.CENTER);
            return checkBox;
        }
    }

    public static void main(String[] args) {
        new DeleteProduct();
    }
}