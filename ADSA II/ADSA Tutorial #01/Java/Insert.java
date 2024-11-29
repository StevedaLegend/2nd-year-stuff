public class Insert {
    public void LinkBefore( NodeC ) {
        int first;
        int size;
        int Node;
        int newNode;

        Node<E> before = succ.prev;
        Node<E> newNode = new Node<E>(before, e, succ);
        succ.prev = newNode;
        if (before == null) {
            first = newNode;
        } else {
            before.next = newNode;
        }
        ++size;
    }
}
