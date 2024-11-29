import org.w3c.dom.Node;

public class DeleteNode<E> {
    
    int size;

    E unlink(Node<E> n)
    {
        final E element = n.item;
        final Node<E> before = n.prev;
        final Node<E> next = n.next;
        if( before == null )
            return unlinkFirst(n);
        else if(next == null)
            return unlinkLast(n);
        else
        {
            n.item = null;
            n.next = null;
            n.prev = null;
            before.next = next;
            next.prev = before;
            -- size;
        }
        return element;
    }
    

}
