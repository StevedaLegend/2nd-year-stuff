// Java program to check for an number in an array Check(array,target)

class Check {

	public static void main(String[] args) {

		int[] num = { 5, 7, 8, 8, 5, 8, 7, 7 };
		int find = 0;
		boolean found = false;

		for (int n : num) {

			if (n == find) {

				found = true;
				break;
			}
		}

		if (found)
			System.out.println(find + " is in the array ");
		else
			System.out.println(find + " is not in the array ");
	}
}