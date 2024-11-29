public class Insertingaheap {

    static void heap(int[] arr, int n, int i) {

        int parent;

        parent = (i - 1) / 2;

        if (parent >= 0) {

            if (arr[i] > arr[parent]) {

                int temp = arr[i];
                arr[i] = arr[parent];
                arr[parent] = temp;

                heap(arr, n, parent);
            }

        }
    }

    static int InsertNode(int[] arr, int n, int key) {

        n = n + 1;

        arr[n - 1] = Key;

        heap(arr, n, n - 1);
        return null;
    }

    public static void main(String[] args) {

    }

}
