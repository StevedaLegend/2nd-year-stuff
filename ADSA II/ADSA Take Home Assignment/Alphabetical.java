public class Alphabetical {
    // Define a TreeNode class representing the nodes of the BST
    private class TreeNode {
        String value;  // Assuming the values are strings
        TreeNode left;
        TreeNode right;

        public TreeNode(String value) {
            this.value = value;
            this.left = null;
            this.right = null;
        }
    }

    public void printSorted(TreeNode node) {
        if (node == null)
            return;
        printSorted(node.left);
        System.out.println(node.value); // or any other manipulation of the node
        printSorted(node.right);
    }

    public static void main(String[] args) {
        // Create an instance of the Alphabetical class
        Alphabetical bst = new Alphabetical();
        
        // Create a TreeNode using the instance of Alphabetical
        Alphabetical.TreeNode root = bst.new TreeNode("Alice");
        // Construct your BST here by adding nodes

        // Call the printSorted method with the root node
        bst.printSorted(root);
    }
}
