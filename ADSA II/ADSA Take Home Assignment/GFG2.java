
// Java program to find number 
// of siblings of a given node 
import java.util.*;

public class GFG2 {

    // Represents a node of an n-ary tree
    static class Node {
        int key;
        Vector<Node> child;

        Node(int data) {
            key = data;
            child = new Vector<Node>();
        }
    };

    // Function to calculate number
    // of siblings of a given node
    static int numberOfSiblings(Node root, int x) {
        if (root == null)
            return 0;

        // Creating a queue and
        // pushing the root
        Queue<Node> q = new LinkedList<>();
        q.add(root);

        while (q.size() > 0) {
            // Dequeue an item from queue and
            // check if it is equal to x If YES,
            // then return number of children
            Node p = q.peek();
            q.remove();

            // Enqueue all children of
            // the dequeued item
            for (int i = 0; i < p.child.size(); i++) {
                // If the value of children
                // is equal to x, then return
                // the number of siblings
                if (p.child.get(i).key == x)
                    return p.child.size() - 1;
                q.add(p.child.get(i));
            }
        }
        return -1;
    }

    // Driver code
    public static void main(String args[]) {
        // Creating a generic tree as shown in above figure
        Node root = new Node(50);
        (root.child).add(new Node(2));
        (root.child).add(new Node(30));
        (root.child).add(new Node(14));
        (root.child).add(new Node(60));
        (root.child.get(0).child).add(new Node(15));
        (root.child.get(0).child).add(new Node(25));
        (root.child.get(0).child.get(1).child).add(new Node(70));
        (root.child.get(0).child.get(1).child).add(new Node(100));
        (root.child.get(1).child).add(new Node(6));
        (root.child.get(1).child).add(new Node(1));
        (root.child.get(2).child).add(new Node(7));
        (root.child.get(2).child.get(0).child).add(new Node(17));
        (root.child.get(2).child.get(0).child).add(new Node(99));
        (root.child.get(2).child.get(0).child).add(new Node(27));
        (root.child.get(3).child).add(new Node(16));

        // Node whose number of
        // siblings is to be calculated
        int x = 100;

        // Function calling
        System.out.println(numberOfSiblings(root, x));
    }
}

// This code is contributed by Arnab Kundu
