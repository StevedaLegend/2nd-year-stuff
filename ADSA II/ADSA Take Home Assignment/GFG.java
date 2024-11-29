
// Java program to find number
// of children of given node
import java.util.*;

class GFG {

    // Represents a node of an n-ary tree
    static class Node {
        int key;
        Vector<Node> child = new Vector<>();

        Node(int data) {
            key = data;
        }
    };

    // Function to calculate number
    // of children of given node
    static int numberOfChildren(Node root, int x) {
        // initialize the numChildren as 0
        int numChildren = 0;

        if (root == null)
            return 0;

        // Creating a queue and pushing the root
        Queue<Node> q = new LinkedList<Node>();
        q.add(root);

        while (!q.isEmpty()) {
            int n = q.size();

            // If this node has children
            while (n > 0) {

                // Dequeue an item from queue and
                // check if it is equal to x
                // If YES, then return number of children
                Node p = q.peek();
                q.remove();
                if (p.key == x) {
                    numChildren = numChildren +
                            p.child.size();
                    return numChildren;
                }

                // Enqueue all children of the dequeued item
                for (int i = 0; i < p.child.size(); i++)
                    q.add(p.child.get(i));
                n--;
            }
        }
        return numChildren;
    }

    // Driver Code
    public static void main(String[] args) {

        // Creating a generic tree
        Node root = new Node(20);
        (root.child).add(new Node(2));
        (root.child).add(new Node(34));
        (root.child).add(new Node(50));
        (root.child).add(new Node(60));
        (root.child).add(new Node(70));
        (root.child.get(0).child).add(new Node(15));
        (root.child.get(0).child).add(new Node(20));
        (root.child.get(1).child).add(new Node(30));
        (root.child.get(2).child).add(new Node(40));
        (root.child.get(2).child).add(new Node(100));
        (root.child.get(2).child).add(new Node(20));
        (root.child.get(0).child.get(1).child).add(new Node(25));
        (root.child.get(0).child.get(1).child).add(new Node(50));

        // Node whose number of
        // children is to be calculated
        int x = 50;

        // Function calling
        System.out.println(numberOfChildren(root, x));
    }
}

// This code is contributed by 29AjayKumar
