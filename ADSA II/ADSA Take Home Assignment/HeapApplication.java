import java.util.Arrays;
import java.util.Scanner;

public class HeapApplication {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int num;

        System.out.println("Heap Application");
        System.out.println("Select one of the numbers below: ");
        System.out.println("1. Insert");
        System.out.println("2. Find Parent");
        System.out.println("3. Find Child");
        System.out.println("4. Remove");

        num = scanner.nextInt();

        if (num == 1) {
            // Example usage:
            int[] heap = { 17, 5, 10, 2, 3, 4 };
            insert(heap, 7);
            System.out.println("Heap after insertion: " + Arrays.toString(heap));

        } else if (num == 2) {
            // Example usage:
            int index_of_node = 10;
            int parent_index = findParent(index_of_node);
            System.out.println("The parent of node " + index_of_node + " is at index " + parent_index);

        } else if (num == 3) {
            // Example usage:
            int index_of_node = 10;
            int left_child_index = findLeftChild(index_of_node);
            int right_child_index = findRightChild(index_of_node);
            System.out.println("The left child of node " + index_of_node + " is at index " + left_child_index);
            System.out.println("The right child of node " + index_of_node + " is at index " + right_child_index);

        } else if (num == 4) {
            // Example usage:
            int[] arr = { 5, 10, 2, 3, 4 };
            int n = arr.length;
            downHeap(arr, 0, n);
            System.out.println("Heap after down-heap: " + Arrays.toString(arr));

        } else if (num == 5) {
            remove();
        } else {
            System.out.println("Invalid Input");
        }

        scanner.close();
    }

    private static void insert(int[] heap, int x) {
        heap = Arrays.copyOf(heap, heap.length + 1); // Resize the array
        heap[heap.length - 1] = x; // Add the new element to the end of the heap
        int i = heap.length - 1; // Index of the newly added element

        // Restore the heap property by moving the new element up the heap
        while (i > 0) {
            int parent_index = (i - 1) / 2;
            // If the parent is smaller than the new element, swap them
            if (heap[i] < heap[parent_index]) {
                int temp = heap[i];
                heap[i] = heap[parent_index];
                heap[parent_index] = temp;
                i = parent_index;
            } else {
                break; // Stop if the heap property is satisfied
            }
        }
    }

    private static int findParent(int x) {
        if (x == 0) {
            return -1; // Node x is the root, and it has no parent
        } else {
            return (x - 1) / 2;
        }
    }

    private static int findLeftChild(int x) {
        return 2 * x + 1;
    }

    private static int findRightChild(int x) {
        return 2 * x + 2;
    }

    private static void downHeap(int[] arr, int i, int n) {
        int largest = i;
        int left_child = 2 * i + 1;
        int right_child = 2 * i + 2;

        // Check if the left child is larger than the root
        if (left_child < n && arr[left_child] > arr[largest]) {
            largest = left_child;
        }

        // Check if the right child is larger than the current largest
        if (right_child < n && arr[right_child] > arr[largest]) {
            largest = right_child;
        }

        // If the largest is not the root, swap and continue down-heap
        if (largest != i) {
            int temp = arr[i];
            arr[i] = arr[largest];
            arr[largest] = temp;
            downHeap(arr, largest, n);
        }
    }

    private static void remove() {
        // Implement the remove function logic here
    }
}
