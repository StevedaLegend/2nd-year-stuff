import org.w3c.dom.Node;

public class AddingGroceries {

    /*
     * This function is in LinkedList class. Inserts a
     * new Node at front of the list. This method is
     * defined inside LinkedList class shown above
     */

    public void push(int new_data) {
        Node h;
        int node;
        int next;

        /*
         * 1 & 2: Allocate the Node &
         * Put in the data
         */
        Node new_node = new Node(new_data);

        /* 3. Make next of new Node as head */
        new_node.next = h;

        /* 4. Move the head to point to new Node */
        h = new_node;
    }
}